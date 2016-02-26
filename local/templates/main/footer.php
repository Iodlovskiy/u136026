<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die(); ?>

<!-- / content -->
</div>
<div class="body2">
    <div class="main">
        <!-- footer -->
        <footer>
            <p class="floatRight"> Copyright &copy; <?echo date('Y') ?> <a href="#">
                    <?$APPLICATION->IncludeComponent( "bitrix:main.include", "",
                        Array(
                            "COMPONENT_TEMPLATE" => ".default",
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => SITE_TEMPLATE_PATH."/include_areas/author.php"
                        ));?>
                </a> &ndash; All Rights Reserved</p>
        </footer>
        <!-- / footer -->
    </div>
</div>
</body>
</html>