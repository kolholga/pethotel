<?php


namespace app\controllers;


use app\models\Services;
use app\models\Specialists;

class ServicesController extends AppController
{

    public function indexAction(){

        $services = new Services();
        $specialists = new Specialists();

        /**
         * добавляем перечень услуг и специалистов из БД
         */
        $arServices = $services->findAll();
        $arSpecialists = $specialists->findAll();
        
        $this->setVars(['services' => $arServices, 'specialists' => $arSpecialists]);

    }

}