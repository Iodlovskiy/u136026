<?php
namespace FLIGHT\FLIGHTCONTROL;

use Bitrix\Main\Application;
use Bitrix\Main\Entity;
use Bitrix\Main\Entity\Event;
use Bitrix\Main\Localization\Loc;
use Bitrix\Iblock\ElementTable;
use Bitrix\Main\UserTable;

Loc::loadMessages(__FILE__);

class FlightManager
{
    public static function AddFlight($company, $airplane, $departure, $arrival, $deptime, $arrtime)
    {
        if(!$company || !$airplane || !$departure || !$arrival || !$deptime || !$arrtime)
        {
            return false;
        }

        return FlightTable::add(
            array
            (
                'UF_COMPANY' => $company,
                'UF_AIRPLANE' => $airplane,
                'UF_DEPARTURE' => $departure,
                'UF_ARRIVAL' => $arrival,
                'UF_DEPTIME' => \Bitrix\Main\Type\DateTime::createFromUserTime($deptime),
                'UF_ARRTIME' => \Bitrix\Main\Type\DateTime::createFromUserTime($arrtime)
            ))->isSuccess();
    }
}
?>