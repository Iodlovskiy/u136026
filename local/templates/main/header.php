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
                            <li id="menu_active"><a href="index.html">Home</a></li>
                            <li><a href="<?=SITE_TEMPLATE_PATH;?>/index-1.html">Our Aircraft</a></li>
                            <li><a href="<?=SITE_TEMPLATE_PATH;?>/index-2.html">Safety</a></li>
                            <li><a href="<?=SITE_TEMPLATE_PATH;?>/index-3.html">Charters</a></li>
                            <li><a href="<?=SITE_TEMPLATE_PATH;?>/index-4.html">Contacts</a></li>
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