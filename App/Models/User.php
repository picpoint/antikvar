<?php

namespace App\Models;



class User extends Model
{

    public $firstname;
    public $lastname;
    public $login;
    public $password;

    public static $table = 'users';


    /**
     * метод регистрации пользователя
     */
    public function regUser() {
        if(isset($_POST['regbtn'])) {  // если нажата кнопка "зарегистрироваться"
            $userData = [];
            $usersLogin = [];

            if(!empty($_POST['regfirstname']) && !empty($_POST['reglastname']) && !empty($_POST['reglogin']) && !empty($_POST['regpassword'])) {   // если поля не пустые
                $userData[] = $_POST['regfirstname'];   // в массив записываем данные из полей
                $userData[] = $_POST['reglastname'];
                $userData[] = mb_strtolower($_POST['reglogin']);   // логин переводим в нижний регистр
                $userData[] = password_hash($_POST['regpassword'], PASSWORD_DEFAULT);   // пароль хешируем

                $class = get_called_class();   // получаем имя класса
                $getUsrs = Model::findAll(static::$table, $class);   // получаем всех пользователей из БД

                foreach ($getUsrs as $usrs) {   // перебираем все записи и логины записываем в массив
                    $usersLogin[] = $usrs->login;
                }

                if (!in_array($_POST['reglogin'], $usersLogin)) {   // если логина нет в перебираемом массиве
                    Model::regUserModel(static::$table, $userData);   // регистрируем пользователя
                    $_SESSION['login'] = $_POST['reglogin'];
                    $_SESSION['password'] = $userData[3];
                    header("Location: /personalPage");
                } else {
                    echo "Пользователь с таким логином уже существует";
                }

            } else {
                echo "Не все поля заполнены";
            }
        }
    }



    /**
     * метод авторизации пользователя
     */
    public function authUser() {
        $class = get_called_class();   // получаем имя данного класса
        $passHash = '';

        if(isset($_POST['authbtn'])) {   // если нажата кнопка "войти"
            if(!empty($_POST['authlogin']) && !empty($_POST['authpass'])) {   // если не пустые поля
                $authYes = false;
                $res = Model::findAll(static::$table, $class);   // получаем всех пользователей из БД

                foreach ($res as $rs) {   // перебираем полученные записи
                    if($_POST['authlogin'] == $rs->login && password_verify($_POST['authpass'], $rs->password)) {   // если введённый логин есть и пароль соответствует хешу
                        $authYes = true;   // переменной присваиваем тру
                        $passHash = $rs->password;
                    }

                }

                if ($authYes) {   // если тру
                    $_SESSION['login'] = $_POST['authlogin'];
                    $_SESSION['password'] = $passHash;
                    header('Location: /personalPage');   // перебрасываем на главную страницу
                } else {
                    echo "Логин или пароль неправельны ... ";
                }


            } else {
                echo "Не все поля заполнены";
            }
        }

    }


    public function logOutUser() {
        session_destroy();
        setcookie($_SESSION['login'], $_SESSION['password'], time() - 86400, '/');
        header('Location: /');
    }



}