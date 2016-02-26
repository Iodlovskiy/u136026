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
							<? $APPLICATION->IncludeComponent(
								"bitrix:news.list",
								"top_icons",
								array(
									"COMPONENT_TEMPLATE" => "top_icons",
									"IBLOCK_TYPE" => "photos",
									"IBLOCK_ID" => "31",
									"NEWS_COUNT" => "20",
									"SORT_BY1" => "ID",
									"SORT_ORDER1" => "ASC",
									"SORT_BY2" => "SORT",
									"SORT_ORDER2" => "ASC",
									"FILTER_NAME" => "",
									"FIELD_CODE" => array(
										0 => "",
										1 => "",
									),
									"PROPERTY_CODE" => array(
										0 => "URL",
										1 => "",
									),
									"CHECK_DATES" => "Y",
									"DETAIL_URL" => "",
									"AJAX_MODE" => "N",
									"AJAX_OPTION_JUMP" => "N",
									"AJAX_OPTION_STYLE" => "Y",
									"AJAX_OPTION_HISTORY" => "N",
									"AJAX_OPTION_ADDITIONAL" => "",
									"CACHE_TYPE" => "A",
									"CACHE_TIME" => "36000000",
									"CACHE_FILTER" => "N",
									"CACHE_GROUPS" => "Y",
									"PREVIEW_TRUNCATE_LEN" => "",
									"ACTIVE_DATE_FORMAT" => "d.m.Y",
									"SET_TITLE" => "Y",
									"SET_BROWSER_TITLE" => "Y",
									"SET_META_KEYWORDS" => "Y",
									"SET_META_DESCRIPTION" => "Y",
									"SET_STATUS_404" => "N",
									"SET_LAST_MODIFIED" => "N",
									"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
									"ADD_SECTIONS_CHAIN" => "Y",
									"HIDE_LINK_WHEN_NO_DETAIL" => "N",
									"PARENT_SECTION" => "",
									"PARENT_SECTION_CODE" => "",
									"INCLUDE_SUBSECTIONS" => "Y",
									"DISPLAY_DATE" => "Y",
									"DISPLAY_NAME" => "Y",
									"DISPLAY_PICTURE" => "Y",
									"DISPLAY_PREVIEW_TEXT" => "Y",
									"PAGER_TEMPLATE" => ".default",
									"DISPLAY_TOP_PAGER" => "N",
									"DISPLAY_BOTTOM_PAGER" => "Y",
									"PAGER_TITLE" => "Новости",
									"PAGER_SHOW_ALWAYS" => "N",
									"PAGER_DESC_NUMBERING" => "N",
									"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
									"PAGER_SHOW_ALL" => "N"
								),
								false
							); ?>
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