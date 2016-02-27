<?php
if (!defined("B_PROLOG_INCLUDED") || !B_PROLOG_INCLUDED) die();

global $USER;

\Bitrix\Main\Loader::includeModule('flight.control');

use  FLIGHT\FLIGHTCONTROL;

if(!$USER->IsAdmin())
{
    exit;
}

if ($_REQUEST['saveFLIGHT'])
{
    if (FLIGHTCONTROL\FlightManager::AddFlight($_REQUEST["company"], $_REQUEST["airplane"],
        $_REQUEST["departure"], $_REQUEST["arrival"], $_REQUEST["deptime"], $_REQUEST["arrtime"]))
    {
        $arResult['OK'] = 'Изменения успешно сохранены';
    }
    else
    {
        $arResult['ERROR'] = 'Ошибка при сохранении';
    }
}

$this->IncludeComponentTemplate();
?>