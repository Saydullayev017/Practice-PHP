<?php
    // принимаем данные от пользователя и записиваем их переменный 
    $email = $_POST['email'];
    $message = $_POST['message'];

    // глобальный переменный для ошибок  
    $error = '';

    // проверка данных при запоолнения формы
    // если email пустая строка введет сообщения $error
    if(trim($email) == '') // Функция trim() для удфление лишних пробелов
        $error = 'Введите ваш email';
    // если message пустая строка введет сообщения $error
    else if(trim($message) == '')
        $error = 'Введите само сообщение';
    // если message меньше 10 символов то вдает сообщение $error
    else if(strlen($message) < 10) // strlen() это фйнкцияя шитает количество символов в строке
        $error = 'Сообщение должно быть более 10 символов';

    // если переменной ошибкой она не пустая
    if($error != ''){
         echo $error; // вводим эту ошибку на экран
         exit;
    }


    $subject = "=?utf-8?B?".base64_encode("Тестовое сообщение")."?=";
    $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n";
    // функция mail() принемает 4 параметра
    // 1) почта куда бет отправлен сообщение
    // 2) subject это тема писма
    // 3) message само сообщение
    // 4) headers это загаловки
    mail('admin@gmail.com', $subject, $message, $headers);
?>