
<header class="header js-header">
    <div>
        <a href="<?php echo $_SERVER['SCRIPT_NAME'] ?>" class="header__brand-link">

            <img src=<?php echo App::getMediaPath('/dark-theme_logo@middle.png')?> alt="" class="header__logo-image">

        </a>
        <!--            <h2 class="header__title"> Лабораторные работы по PHP ️</h2>-->
        <h2 class="header__title"> <?php echo App::$headerTitle ?></h2>
    </div>


<!--    Здесь у нас выводятся кастомные элементы для отдельных страниц-->
    <?php echo App::$headerContent; ?>


</header>
<script>
    let headerPaddingDiv = document.createElement("div");
    headerPaddingDiv.style.height = getComputedStyle(document.querySelector(".js-header")).getPropertyValue('height');
    document.querySelector(".js-header").insertAdjacentElement("afterend", headerPaddingDiv);
</script>
