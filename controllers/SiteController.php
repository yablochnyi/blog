<?php

class SiteController
{
    public function actionIndex()
    {
        $articlesList = Article::getArticlesList();

        $threeLastArticles = Article::theLastArticles();

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $result = Subscribe::newLetters($name, $email);
        }

        $rightCategories = Article::getRightCategories();
        require_once(ROOT . '/views/site/index.php');
        return true;
    }
}