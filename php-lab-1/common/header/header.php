<header class="header js-header">
    <div>
        <a href="http://labs.std-699.ist.mospolytech.ru/php-lab-1/pages/main-page/main-page.php" class="header__brand-link"><img src="https://image.flaticon.com/icons/png/128/605/605661.png" alt=""
                        class="header__logo-image">

            <h2 class="header__title">Гранд Ремонт™️</h2>
        </a>
    </div>

    <?php


    class Page
    {
        public $linkTitle, $filename, $absoluteLink;

        function __construct($linkTitle, $filename, $absolutePath)
        {
            $this->linkTitle = $linkTitle;
            $this->filename = $filename;
            $this->absoluteLink = $absolutePath;
        }

        function isActive()
        {
//            if ($this->filename === basename($_SERVER['SCRIPT_FILENAME'], '.php')) {
//                return 'true';
//            } else {
//                return 'false';
//            }
            return $this->filename === basename($_SERVER['SCRIPT_FILENAME'], '.php');
        }
    }


    $pages = [];

    $mainPage = new Page('Главная', 'main-page', 'http://labs.std-699.ist.mospolytech.ru/php-lab-1/pages/main-page/main-page.php');
    $servicesPage = new Page('Услуги', 'services-page', 'http://labs.std-699.ist.mospolytech.ru/php-lab-1/pages/services-page/services-page.php');
    $contactsPage = new Page('Контакты', 'contacts-page', 'http://labs.std-699.ist.mospolytech.ru/php-lab-1/pages/contacts-page/contacts-page.php');

    array_push($pages, $mainPage);
    array_push($pages, $servicesPage);
    array_push($pages, $contactsPage);

    ?>

    <nav class="header__nav">


        <?php


        $selectedPage = null;

        for ($i = 0; $i < count($pages); $i++) {

            echo "<div><a href='" . ($pages[$i]->absoluteLink) . "' class='header__nav-link " . ($pages[$i]->isActive() ? 'header__nav-link_active' : '') . "'>" . ($pages[$i]->linkTitle) . "</a></div>";

            if ($pages[$i]->isActive()) {
                $selectedPage = $pages[$i];
            }
        }



        ?>


    </nav>
    <script>
        let headerPaddingDiv = document.createElement("div");
        headerPaddingDiv.style.height = getComputedStyle(document.querySelector(".js-header")).getPropertyValue('height');
        document.querySelector(".js-header").insertAdjacentElement("afterend", headerPaddingDiv);
    </script>
</header>
