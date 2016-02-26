<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<? IncludeTemplateLangFile(__FILE__); ?>
<!DOCTYPE html>
<html lang="<?= LANGUAGE_ID ?>">

<head>
    <title><? $APPLICATION->ShowTitle(); ?></title>
    <? $APPLICATION ->ShowHead();?>

    <?$APPLICATION ->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery-1.4.2.js", true);?>
    <?$APPLICATION ->AddHeadScript(SITE_TEMPLATE_PATH."/js/Myriad_Pro_italic_600.font.js", true);?>
    <?$APPLICATION ->AddHeadScript(SITE_TEMPLATE_PATH."/js/Myriad_Pro_italic_400.font.js", true);?>
    <?$APPLICATION ->AddHeadScript(SITE_TEMPLATE_PATH."/js/Myriad_Pro_400.font.js", true);?>

    <?$APPLICATION ->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/reset.css", true);?>
    <?$APPLICATION ->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/layout.css", true);?>
    <?$APPLICATION ->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/style.css", true);?>

</head>

<body id="page1">
<? $APPLICATION->ShowPanel(); ?>
<div class="body1">
    <div class="main">
        <!-- header -->
        <header>
            <div class="wrapper">
                <h1>
                    <a href="/" id="logo">Air Lines</a><span id="slogan">
                        <?$APPLICATION->IncludeComponent( "bitrix:main.include", "",
                        Array(
                            "COMPONENT_TEMPLATE" => ".default",
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => SITE_TEMPLATE_PATH."/include_areas/company.php"
                        ));?>
                    </span>
                </h1>
                <div class="right">
                    <nav>
                        <ul id="top_nav">
                            <li><a href="/"><img src="<?=SITE_TEMPLATE_PATH;?>/images/img1.gif" alt=""></a></li>
                            <li><a href="#"><img src="<?=SITE_TEMPLATE_PATH;?>/images/img2.gif" alt=""></a></li>
                            <li class="bg_none"><a href="#"><img src="<?=SITE_TEMPLATE_PATH;?>/images/img3.gif" alt=""></a></li>
                        </ul>
                    </nav>
                    <nav>
                        <ul id="menu">
                            <? $APPLICATION->IncludeComponent("bitrix:menu", "top_menu", Array(
                                "COMPONENT_TEMPLATE" => ".default",
                                "ROOT_MENU_TYPE" => "top",    // Тип меню для первого уровня
                                "MENU_CACHE_TYPE" => "A",    // Тип кеширования
                                "MENU_CACHE_TIME" => "3600",    // Время кеширования (сек.)
                                "MENU_CACHE_USE_GROUPS" => "Y",    // Учитывать права доступа
                                "MENU_CACHE_GET_VARS" => array(    // Значимые переменные запроса
                                    0 => "",
                                ),
                                "MAX_LEVEL" => "1",    // Уровень вложенности меню
                                "CHILD_MENU_TYPE" => "left",    // Тип меню для остальных уровней
                                "USE_EXT" => "Y",    // Подключать файлы с именами вида .тип_меню.menu_ext.php
                                "DELAY" => "N",    // Откладывать выполнение шаблона меню
                                "ALLOW_MULTI_SELECT" => "N",    // Разрешить несколько активных пунктов одновременно
                            ),
                                false
                            ); ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
    </div>
</div>
<div class="main">
    <div id="banner">
        <div class="text1">
            <?$APPLICATION->IncludeComponent( "bitrix:main.include", "",
                Array(
                    "COMPONENT_TEMPLATE" => ".default",
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "EDIT_TEMPLATE" => "",
                    "PATH" => SITE_TEMPLATE_PATH."/include_areas/banner_title.php"
                ));?>
            <span>
                <?$APPLICATION->IncludeComponent( "bitrix:main.include", "",
                    Array(
                        "COMPONENT_TEMPLATE" => ".default",
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => SITE_TEMPLATE_PATH."/include_areas/banner_title2.php"
                    ));?>
            </span>
            <p>
                <?$APPLICATION->IncludeComponent( "bitrix:main.include", "",
                    Array(
                        "COMPONENT_TEMPLATE" => ".default",
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => SITE_TEMPLATE_PATH."/include_areas/banner_text.php"
                    ));?>
            </p>
        </div>
        <a href="#" class="button_top">Голосовать</a>
    </div>
</div>
<!-- / header -->
<div class="main">
    <!-- content -->