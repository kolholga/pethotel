<?php


namespace app\controllers\admin;


use app\models\Contacts;
use app\models\Services;
use app\models\User;

class MainController extends AppController
{
    public function indexAction()
    {
        $services = new Services();
        $feedback = new Contacts();

        $arServices = $services->findAll();
        $arFeedback = $feedback->findAll();

        $this->setVars(['services' => $arServices]);
        $this->setVars(['feedback' => $arFeedback]);

        /**
         * добавление данных из формы "Сервисы"
         */
        if (isset($_POST['services'])) {
            $title = clearStr($_POST['title']);
            $description = clearStr($_POST['description']);
            $shot_description = clearStr($_POST['shot_description']);

            $services->addServices(
                [
                    'title' => $title,
                    'description' => $description,
                    'shot_description' => $shot_description
                ]
            );
            header('Location: /admin');
            die();
        }
    }

    public function loginAction()
    {
        $this->layout = 'login';
        $user = new User();
        if (isset($_POST['login'], $_POST['password'])) {

            if ($_POST['login'] != '' && $_POST['password'] != '') {
                $id = $user->auth($_POST['login'], $_POST['password']);
                if (false !== $id) {
                    $user->login($id);
                    header("Location: /admin");
                    die();
                } else {
                    $_SESSION['error'] = 'не верно указаны логин/пароль';
                }
            } else {
                $_SESSION['error'] = 'не указаны логин/пароль';
            }
        }
    }
}