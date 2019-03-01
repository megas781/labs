<footer class="footer js-footer _flex-centering">
    <span><?php echo 'Сформировано ' . date('d.m.Y') . ' в ' . date('H-i:s') . ', выполнил Калачев Глеб, 181-321, все права защищены' ?></span>
    <script>
        let footerPaddingDiv = document.createElement("div");
        footerPaddingDiv.style.height = getComputedStyle(document.querySelector(".js-footer")).getPropertyValue('height');
        document.querySelector(".js-footer").insertAdjacentElement("afterend", footerPaddingDiv);
    </script>
</footer>
