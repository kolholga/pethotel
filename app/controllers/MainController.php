<?php


namespace app\controllers;


use app\models\Services;
use app\models\Specialists;


class MainController extends AppController
{

    public $layout = 'default';

    // методы с префиксом Action - публичные методы

    public function indexAction()
    {

        $services = new Services();
        $specialists = new Specialists();

        /**
         * получаем перечень услуг и специалистов из БД
         */
        $arServices = $services->findAll();
        $arSpecialists = $specialists->findAll();

        $this->setVars(['services' => $arServices, 'specialists' => $arSpecialists]);

    }

}