<?php


namespace app\controllers;


use app\models\Contacts;

class ContactsController extends AppController
{

    public function indexAction()
    {

        $contacts = new Contacts();

        /**
         * добавление данных в таблицу feedback БД из формы сообщений пользователей
         */
        if (isset($_POST['feedback'])) {
            $name = clearStr($_POST['name']);
            $message = clearStr($_POST['message']);
            $subject = clearStr($_POST['subject']);
            $email = clearStr($_POST['email']);

            $contacts->addFeedback(
                [
                    'name' => $name,
                    'message' => $message,
                    'subject' => $subject,
                    'email' => $email
                ]
            );
            header('Location:/contacts/');
            die();
        }
    }
}

