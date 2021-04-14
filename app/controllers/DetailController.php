<?php


namespace app\controllers;


use app\models\Services;

class DetailController extends AppController
{
    public function indexAction(){

        $id = intval($this->route['id']);
        $details = new Services();
        $service = $details->getServiceById($id);

        $this->setVars(['service' => $service[0]]);

    }
}