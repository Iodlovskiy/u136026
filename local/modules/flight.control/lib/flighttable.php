<?php
namespace FLIGHT\FLIGHTCONTROL;

use Bitrix\Main\Application;
use Bitrix\Main\Entity;
use Bitrix\Main\Entity\Event;
use Bitrix\Main\Localization\Loc;
use Bitrix\Iblock\ElementTable;
use Bitrix\Main\UserTable;

Loc::loadMessages(__FILE__);

class FlightTable extends Entity\DataManager
{
    public static function getFilePath()
    {
        return __FILE__;
    }

    /*Название таблицы HL в БД*/
    public static function getTableName()
    {
        return 't_flight';
    }

    /*Описание полей сущности (соответсвуют полям )*/
    public static function getMap()
    {
        return array(
            'UF_ID' => array(
                'data_type' => 'integer',
                'primary' => true,
                'autocomplete' => true,
                'title' => "ID"
            ),
            'UF_COMPANY' => array(
                'data_type' => 'integer',
                'required' => true,
                'title' => "Компания"
            ),
            'UF_AIRPLANE' => array(
                'data_type' => 'integer',
                'required' => true,
                'title' => "Самолет"
            ),
            'UF_DEPARTURE' => array(
                'data_type' => 'string',
                'required' => true,
                'title' => "Место отправки"
            ),
            'UF_ARRIVAL' => array(
                'data_type' => 'string',
                'required' => true,
                'title' => "Место прибытия"
            ),
            'UF_DEPTIME' => array(
                'data_type' => 'datetime',
                'required' => true,
                'title' => "Время отправки"
            ),
            'UF_ARRTIME' => array(
                'data_type' => 'datetime',
                'required' => true,
                'title' => "Время прибытия"
            ),
            new Entity\ReferenceField(
                'UF_COMPANY',
                'Bitrix\Main\UserTable',
                array('=this.UF_COMPANY' => 'ref.ID')
            ),
            new Entity\ReferenceField(
                'UF_AIRPLANE',
                'Bitrix\Main\UserTable',
                array('=this.UF_AIRPLANE' => 'ref.ID')
            ),
        );
    }

    public static function validateValue()
    {
        return array(
            new Entity\Validator\Range(0, null, false, array("MIN" => "Количество должно быть больше нуля")),
        );
    }
}
?>