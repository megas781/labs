<?php

$headerContentClosure = function () {
    echo 'unspecified header content';
};


//Этот класс должен находиться в коренной папке проекта, чтобы видеть все файлы и папки
class App {

    static private $includePath = 'php-template';
    static $headerTitle = 'unspecified title';
    static $headerContent = 'unspecified content';
    static $footerContent = 'unspecified content';

    static public function deployHeaderContent() {
        echo self::$headerContent;
    }

    //Generic доббавление файлов
    static private function getPhpTemplatePath($restPath)
    {
        return App::$includePath . $restPath;
    }

    static function includeHeader()
    {
        include(App::$includePath . '/common/header/header.php');
    }

    static function includeBreadcrumbs()
    {
        include(App::$includePath . '/common/breadcrumbs/breadcrumbs.php');
    }

    static function includeSidebar()
    {
        include(App::$includePath . '/common/sidebar/sidebar.php');
    }

    static function includeFooter()
    {
        include(App::$includePath . '/common/footer/footer.php');
    }

    static private function getTemplatePathHTTP()
    {

        $url = 'http://' . $_SERVER['HTTP_HOST'];

        if (strpos($url, 'localhost') !== false) {
            $url .= '/labs';
        }
        $url .= '/php-template';

        return $url;

    }

    static function getMediaPath($mediaPath)
    {
        return App::getTemplatePathHTTP() . '/media' . $mediaPath;
    }

}



?>


