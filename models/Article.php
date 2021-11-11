<?php
class Article
{
    // Получаем список статей
    const SHOW_BY_DEFAULT = 8;
    public static function getArticlesList($count = self::SHOW_BY_DEFAULT)
    {
        // Подключаемся к БД
        $db = Db::getConnection();

        // Запрашиваем все статьи из таблицы news
        $sql = 'SELECT id, tittle, date, category FROM news '
            . 'WHERE status = "1" ORDER BY id DESC '
            . 'LIMIT :count';

        // Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':count', $count, PDO::PARAM_INT);

        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);

        // Выполнение коменды
        $result->execute();

        // Получение и возврат результатов

        $i = 0;
        $articlesList = array();
        while ($row = $result->fetch()) {
            $articlesList[$i]['id'] = $row['id'];
            $articlesList[$i]['tittle'] = $row['tittle'];
            $articlesList[$i]['date'] = $row['date'];
            $articlesList[$i]['category'] = $row['category'];
            $i++;
        }
        return $articlesList;
    }

    public static function theLastArticles()
    {
        $db = Db::getConnection();

        $sql = $db->query('SELECT * FROM news ORDER BY date DESC LIMIT 3');

        $i = 0;
        $threeLastArticles = array();
        while ($row = $sql->fetch()) {
            $threeLastArticles[$i]['id'] = $row['id'];
            $threeLastArticles[$i]['tittle'] = $row['tittle'];
            $threeLastArticles[$i]['date'] = $row['date'];
            $threeLastArticles[$i]['category'] = $row['category'];
            $i++;
        }
        return $threeLastArticles;

    }
    public static function getRightCategories()
    {
        $db = Db::getConnection();
        $sql = $db->query('SELECT DISTINCT category FROM news');
        $i = 0;
        $rightCategories = array();
        while ($row = $sql->fetch()) {
            $rightCategories[$i]['category'] = $row['category'];
            $i++;
        }
        return $rightCategories;

    }


}
