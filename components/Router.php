<?php

class Router
{
    private $routes;

    public function __construct()
    {
        // Подключем файл с роутами
        $routesPath = ROOT . '/config/routes.php';
        $this->routes = include ($routesPath);
    }

    // Возвращаем строку запроса
    public function getUri()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    public function run()
    {
        // Получаем строку запроса
        $uri = $this->getUri();

        // Проверяем строку запроса с нашими роутами
        foreach ($this->routes as $uriPattern => $path) {
            // Сравниваем uriPattern и uri
            if (preg_match("~$uriPattern~", $uri)) {
                // Получаем внутренний путь из внешнего согласно правилу.
                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);
                // Определяем controller и action
                $segments = explode('/', $internalRoute);

                $controllerName = ucfirst(array_shift($segments)) . 'Controller';

                $actionName = 'action' . ucfirst(array_shift($segments));

                $parameters = $segments;

                // Подключаем controller
                $controllerFile = ROOT . 'controllers' . $controllerName . '.php';

                if (file_exists($controllerFile)) {
                    include_once ($controllerFile);
                }

                // Создать объект, вызвать метод (т.е. action)
                $controllerObject = new $controllerName;

                /* Вызываем необходимый метод ($actionName) у определенного
                 * класса ($controllerObject) с заданными ($parameters) параметрами
                 */
                $result = call_user_func_array(array($controllerObject, $actionName), $parameters);

                // Если метод контроллера успешно вызван, завершаем работу роутера
                if ($result != null) {
                    break;
                }
            }
        }
    }
}