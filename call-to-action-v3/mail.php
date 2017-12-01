<?php  
require_once('PHPMailerAutoload.php');

$mail = new PHPMailer;
 
//Дебаг
//0 = off (for production use)
//1 = клиентские сообщения
//2 = серверные и клиентские сообщения
//$mail->SMTPDebug = 2;
 
$mail->isSMTP();
$mail->Host = 'smtp.yandex.ru'; //gmail: smtp.gmail.com
$mail->SMTPAuth = true;
$mail->Username = 'robot@devreadwrite.com';
$mail->Password = '*******';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;
$mail->setLanguage('ru');
$mail->setFrom('robot@devreadwrite.com', 'Robot');
$mail->addAddress('my.friend@gmail.com', 'My Friend');    //Получатель
//$mail->addAddress('my.friend2@gmail.com');              //Еще получатель
//$mail->addReplyTo('my.friend3@gmail.com', 'My Friend 3');
//$mail->addCC('my.friend.cc@example.com');               //Копия
//$mail->addBCC('my.friend.bcc@example.com');             //Скрытая копия
 
$mail->addAttachment('bg.jpg');              //Прикрепить файл
//$mail->addAttachment('/path/to/image.jpg', 'new.jpg');  //Прикрепить файл + задать имя
$mail->isHTML(true);
 
$mail->Subject = 'Тема письма'; // тема письма
$mail->Body    = '<b>HTML</b> версия письма'; //текст письма с HTML
$mail->AltBody = 'Текстовая версия письма, без HTML тегов (для клиентов не поддерживающих HTML)'; //альтернативынй текст письма без HTML
 
//Отправка сообщения
if(!$mail->send()) {
    echo 'Ошибка при отправке. Ошибка: ' . $mail->ErrorInfo;
} else {
    echo 'Сообщение успешно отправлено';
}

?>