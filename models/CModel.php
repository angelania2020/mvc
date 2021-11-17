<?php

class Cmodel
{
    public function GetData()
    {
        // Модуль Объекты данных PHP (PDO)
        try {
            // Переменные для подключения к базе данных
            $host = '127.0.0.1';
            $db = 'blog';
            $user = 'root';
            $pass = '';
            $charset = 'utf8';

            $dsn = "mysql:host=$host;dbname=$db;charset=$charset";  // Передача переменных для подключения к БД
            $opt = [  // Массив параметров драйвера
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,  // Определение параметров обработки ошибок
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,  // Определение варианта выгрузки данных в массив
                PDO::ATTR_EMULATE_PREPARES => false,  // Без подготовленных запросов 
            ];
            $pdo = new PDO($dsn, $user, $pass, $opt);  // Передача подключения, пользователя, пароля и опций

            $result = $pdo->query('SELECT * FROM news');  // Выполнение запроса
            // $result = $pdo->query('SELECT * FROM news limit 1');
            // $result = $pdo->query('SELECT * FROM news order by AUTHOR');
            // $result = $pdo->query('SELECT * FROM news order by DATE');
            $arrayResult = $result->fetchAll();  // Возвращение массива, содержащего все строки результирующего набора
        } catch (PDOException $e) {  // Обработка ошибок подключения
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }



        // Модуль mysqli
        // $mysqli = new mysqli('localhost', 'root', '', 'blog');  // Подключение к базе данных

        // if (mysqli_connect_errno()) {  // Если нет соединения с базой данных, выводит текст ошибки и выходит
        //     printf('Соединение с базой данных не установлено!');
        //     exit();
        // }

        // $mysqli->set_charset('utf8');  // Установить кодировку

        // $query = "Select * From news";  // Описание SQL запроса

        // $result = $mysqli->query($query);  // Выполнение запроса
        // $arrayResult = $result->fetch_all(MYSQLI_ASSOC);  // Выгружение данных в виде ассоциативного массива



        // Массив
        // $arrayResult[] = array(
        //     'TITLE' => 'Blog hosting site',
        //     'DATE' => '22.06.2020',
        //     'AUTHOR' => 'VolDeMort',
        //     'IMAGE' => 'https://cdn.pixabay.com/photo/2019/09/17/18/48/computer-4484282_1280.jpg',
        //     'TEXT' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero at animi, quidem corrupti magnam expedita excepturi est ut quo exercitationem necessitatibus et illum accusamus incidunt iure, deserunt, veritatis modi eos.',
        // );
        // $arrayResult[] = array(
        //     'TITLE' => 'Blog hosting site NEW',
        //     'DATE' => '21.10.2021',
        //     'AUTHOR' => 'Igor',
        //     'IMAGE' => 'https://cdn.pixabay.com/photo/2015/10/02/15/07/diary-968603_1280.jpg',
        //     'TEXT' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, repellendus natus molestiae repellat ex cumque, suscipit nostrum iste veritatis tempore quaerat iure quis eligendi omnis voluptatibus, vero commodi soluta eveniet.',
        // );



        return $arrayResult;
    }
}
