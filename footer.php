</div><!-- content -->
</main><!-- main -->
</section><!-- core -->

<footer id="footer">
    <div class="d-flex flex-center justify-between flex-wrap">
        <div class='left'>
            <span>&copy; <?= date( 'Y' ) ?> <a
                        href="<?= get_bloginfo( 'url' ) ?>"><?= get_bloginfo( 'name' ) ?></a></span>
        </div>
        <div class='right'>
            <span>Theme by <a class="theme-name" href="https://biji.io" target="_blank"><?= THEME_NAME ?></a></span>
        </div>
    </div>
    <div class="text-center text-tiny mt-2 w-100" style="opacity: 0.2;">
        <div class="state">文章中出现的商标及图像版权属于其合法持有人，只供传递信息之用，非商务用途。互动交流时请遵守理性，宽容，换位思考的原则。</div>
        <?php if ( $code = get_icp_num() ) { ?>
            <span class="mx-1"><a href="https://beian.miit.gov.cn" target="_blank"><?= $code; ?></a></span>
        <?php } ?>
        <?php if ( $code = get_theme_mod( 'biji_setting_net' ) ) { ?>
            <span class="mx-1"><a href="https://www.beian.gov.cn/portal/registerSystemInfo"
                                  target="_blank"><?= $code; ?></a></span>
        <?php } ?>
    </div>
</footer>

<script data-no-instant>
    function _exReload() {
        <?php if (get_theme_mod( 'biji_setting_lately', true )) { ?>
        (() => {
            let _op = undefined;
            if ( !["zh_SC", "zh_CN"].includes($lang.lang) ) {
                console.log($lang.options("Lately"))
                _op = { target: 'time', lang: $lang.options("Lately") }
            }
            window.Lately && Lately.init(_op);
        })();
        <?php }  if (get_theme_mod( 'biji_setting_view_image', true )) { ?>
        window.ViewImage && ViewImage.init();
        <?php } if (get_theme_mod( 'biji_setting_prettify', true )) { ?>
        window.prettyPrint && prettyPrint();
        <?php }
        echo get_theme_mod( 'biji_setting_foot_script' ) ?: "";
        ?>
    }
</script>
</div>
<?php wp_footer(); ?>
<div id="full">
    <svg t="1672796696181" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="961" width="25" height="25"><path d="M585.19 785.43c-15.5 0-23.26 9.87-23.26 19.73v65.76c0 13.15 11.63 19.73 23.26 19.73 15.51 0 23.27-9.86 23.27-19.73v-65.76c0-13.15-11.63-19.73-23.27-19.73z m-73.67 0c-11.63 0-23.26 9.87-23.26 19.73v134.81c0 9.86 11.63 19.73 23.26 19.73 11.64 0 23.27-9.87 23.27-19.73V805.16c0-9.86-11.63-19.73-23.27-19.73z m-81.42-3.29c-15.51 0-23.27 9.87-23.27 19.73v92.07c0 13.15 11.64 19.73 23.27 19.73 15.5 0 23.26-9.87 23.26-19.73v-92.07c0-13.15-11.63-19.73-23.26-19.73z m105.77-141.1c-3.2-7.06-7.89-12.54-14.05-16.43-6.17-3.89-13.09-5.84-20.77-5.84-10.9 0-20.29 3.75-28.15 11.24-7.86 7.49-11.79 20-11.79 37.52 0 14.03 3.77 25.08 11.32 33.15 7.54 8.07 17 12.11 28.38 12.11 11.6 0 21.14-4.08 28.63-12.23 7.49-8.15 11.24-19.72 11.24-34.7 0-9.48-1.6-17.75-4.81-24.82z m0 0c-3.2-7.06-7.89-12.54-14.05-16.43-6.17-3.89-13.09-5.84-20.77-5.84-10.9 0-20.29 3.75-28.15 11.24-7.86 7.49-11.79 20-11.79 37.52 0 14.03 3.77 25.08 11.32 33.15 7.54 8.07 17 12.11 28.38 12.11 11.6 0 21.14-4.08 28.63-12.23 7.49-8.15 11.24-19.72 11.24-34.7 0-9.48-1.6-17.75-4.81-24.82z m227.69-174.55C767.44 216.6 527.03 104.8 507.64 98.23c-15.5 6.57-259.78 121.66-255.91 368.26-50.41 26.3-100.81 75.62-93.06 157.83 7.76 82.2 104.69 138.1 139.59 134.81 34.9-3.29 27.14-26.31 27.14-26.31l11.64-42.74s54.28 69.05 69.79 69.05H600.7c15.51 0 69.8-69.05 69.8-69.05l11.63 42.74s-11.63 23.02 27.14 26.31c34.9 3.29 131.84-52.61 139.59-134.81 15.52-82.21-34.9-131.53-85.3-157.83zM507.64 279.07c7.76 0 100.82 6.58 104.7 92.07-7.76 88.77-96.94 92.06-104.7 92.06-7.75 0-96.93-3.29-104.69-92.06 3.88-85.49 96.94-92.07 104.69-92.07z m-70.59 342.24h-38.51v102.68h-15.41V621.31h-38.35v-13.74h92.27v13.74z m112.36 76.31c-4.76 9.32-11.51 16.38-20.25 21.17-8.73 4.79-18.15 7.18-28.27 7.18-10.95 0-20.75-2.64-29.38-7.94-8.63-5.29-15.16-12.52-19.61-21.68-4.45-9.15-6.67-18.84-6.67-29.06 0-19.32 5.19-34.45 15.56-45.38 10.38-10.93 23.77-16.4 40.18-16.4 10.75 0 20.44 2.57 29.07 7.7 8.63 5.14 15.2 12.3 19.73 21.48 4.53 9.19 6.79 19.6 6.79 31.25 0 11.81-2.38 22.37-7.15 31.68z m106.41-31.24c-6.3 6.85-17.68 10.28-34.15 10.28h-29.85v47.33h-15.41V607.57h43.91c7.73 0 13.64 0.38 17.71 1.12 5.72 0.95 10.51 2.76 14.38 5.44 3.86 2.67 6.97 6.42 9.33 11.23 2.35 4.82 3.53 10.11 3.53 15.88 0 9.9-3.15 18.28-9.45 25.14z m-19.85-44.04c-2.6-0.68-7.39-1.03-14.38-1.03h-29.77v41.61h30.09c9.96 0 17.02-1.85 21.21-5.56 4.18-3.7 6.27-8.92 6.27-15.64 0-4.87-1.23-9.04-3.69-12.51-2.47-3.46-5.71-5.75-9.73-6.87z m-114.15 2.27c-6.17-3.89-13.09-5.84-20.77-5.84-10.9 0-20.29 3.75-28.15 11.24-7.86 7.49-11.79 20-11.79 37.52 0 14.03 3.77 25.08 11.32 33.15 7.54 8.07 17 12.11 28.38 12.11 11.6 0 21.14-4.08 28.63-12.23 7.49-8.15 11.24-19.72 11.24-34.7 0-9.48-1.6-17.75-4.81-24.82-3.2-7.06-7.89-12.54-14.05-16.43z" fill="#A78E44" p-id="962"></path></svg>
</div>
<script type="text/javascript">
    var isie6 = window.XMLHttpRequest ? false: true;
    function newtoponload() {
    var c = document.getElementById("full");
    function b() {
        var a = document.documentElement.scrollTop || window.pageYOffset || document.body.scrollTop;
        if (a > 0) {
        if (isie6) {
            c.style.display = "none";
            clearTimeout(window.show);
            window.show = setTimeout(function() {
            var d = document.documentElement.scrollTop || window.pageYOffset || document.body.scrollTop;
            if (d > 0) {
                c.style.display = "block";
                c.style.top = (400 + d) + "px"
            }
            },
            300)
        } else {
            c.style.display = "block"
        }
        } else {
        c.style.display = "none"
        }
    }
    if (isie6) {
        c.style.position = "absolute"
    }
        window.onscroll = b;
        b()
    }
    if (window.attachEvent) {
        window.attachEvent("onload", newtoponload)
    } else {
        window.addEventListener("load", newtoponload, false)
    }
    document.getElementById("full").onclick = function() {
        window.scrollTo(0, 0)
    };
</script>
</body>

</html>