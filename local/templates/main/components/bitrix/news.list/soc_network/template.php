<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$this->setFrameMode(true);
?>
<?if (!empty($arResult)):?>
	<?foreach($arResult["ITEMS"] as $key => $arItem):?>
		<a href="<?=$arItem["PROPERTIES"]["URL"]["VALUE"];?>"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"];?>" width="16" height="16" alt="pic"></a>
	<?endforeach;?>
<?endif?>