<?php if (!defined("B_PROLOG_INCLUDED") || !B_PROLOG_INCLUDED) die(); ?>

<?if($arResult['OK']):?>
    <?ShowMessage(array('TYPE' => 'OK','MESSAGE' => $arResult['OK']));?>
<?endif;?>

<?if($arResult['ERROR']):?>
    <?ShowMessage(array('TYPE' => 'ERROR','MESSAGE' => $arResult['ERROR']));?>
<?endif;?>

<form action="<?= POST_FORM_ACTION_URI ?>" method="POST">

    Id компании:<br> <input type="text" name="company" value="<?= $_REQUEST["company"]; ?>" STYLE="background-color: #72A4D2;" ></br>
    Id самолета:<br> <input type="text" name="airplane" value="<?= $_REQUEST["airplane"]; ?>" STYLE="background-color: #72A4D2;"></br>
    Пункт отбытия:<br> <input type="text" name="departure" value="<?= $_REQUEST["departure"]; ?>" STYLE="background-color: #72A4D2;"></br>
    Пункт прибытия:<br> <input type="text" name="arrival" value="<?= $_REQUEST["arrival"]; ?>" STYLE="background-color: #72A4D2;"></br>
    Время отбытия:<br> <input type="text" name="deptime" value="<?= $_REQUEST["deptime"]; ?>" STYLE="background-color: #72A4D2;"></br>
    Время прибытия:<br> <input type="text" name="arrtime" value="<?= $_REQUEST["arrtime"]; ?>" STYLE="background-color: #72A4D2;"></br>

    <br><input type="submit" name="saveFLIGHT" value="Сохранить" STYLE="background-color: #72A4D2;">
    <input type="reset" value="Очистить" STYLE="background-color: #72A4D2;"></br>

</form>

