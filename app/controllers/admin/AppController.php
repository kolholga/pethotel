<?php


namespace app\controllers\admin;


use system\core\Controller;

class AppController extends Controller
{
    protected $layout = 'admin';

    public function __construct($route, $view = '')
    {
        parent::__construct($route, $view);
        if (!isset($_SESSION['is_admin']) && $this->route['action'] != 'login') {
            header('location: /admin/main/login');
            die(); //закрываем скрипт после перенаправления
        }

        // выход из админ панели
        if (isset($_GET['logout']) && $_GET['logout'] == 'exit') {
            $this->logoutAdmin();
            header('Location: /admin/main/login');
            die();
        }
    }

    /**
     * выход из админ панели
     */
    public function logoutAdmin()
    {
        if (isset($_SESSION['is_admin'])) {
            unset($_SESSION['is_admin']);
        }

        session_destroy();
    }

}

