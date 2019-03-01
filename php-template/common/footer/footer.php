<footer class="footer js-footer _flex-centering">

    <?php echo App::$footerInnerContent; ?>


    <script>
        let footerPaddingDiv = document.createElement("div");
        footerPaddingDiv.style.height = getComputedStyle(document.querySelector(".js-footer")).getPropertyValue('height');
        // footerPaddingDiv.style.background = "var(--light-theme_background)";
        document.querySelector(".js-footer").insertAdjacentElement("afterend", footerPaddingDiv);
    </script>
</footer>
