<?php
$mailTo = 'decima.pro@yandex.ru';

$mailFrom = htmlspecialchars( strip_tags( $_POST['emailFrom'] ) );//email
$utm= htmlspecialchars( strip_tags( $_POST['utm'] ) );//email
$nameFrom = htmlspecialchars( strip_tags( $_POST['nameFrom'] ) );//name
$subj = htmlspecialchars( strip_tags( $_POST['subject'] ) );//mob
$body = htmlspecialchars( strip_tags( $_POST['message'] ) );

$geot = htmlspecialchars( strip_tags( $_POST['geot'] ) );//geo



$sender = base64_encode('+ Заявка с LP Марк');
$sender = "=?utf-8?B?{$sender}?=";

$headers = "From: {$sender} <decima.pro@yandex.ru>\r\n".
'Content-Type: text/html; charset=utf-8
Content-Transfer-Encoding: base64
X-Mailer: OrderForm (PHP)';

$subject = base64_encode('+ Заявка с LP Марк');
$subject = "=?utf-8?B?{$subject}?=";

if( !empty( $body ) )
	$body = '' . "\r\n" . $body;

if( !empty( $nameFrom ) )
	$nameFrom = ' (' . $nameFrom . ')';


$body = base64_encode(' Телефон: ' . $subj . '<br><br> Город: ' .$geot . '<br><br> Форма захвата: ' . $body. '<br><br> UTM: ' .$utm);

if( mail($mailTo, $subject, $body, $headers) )
{
	echo '1';
}
else
{
	echo '0';
}

$mailTo = 'mgroup5@ya.ru';

$mailFrom = htmlspecialchars( strip_tags( $_POST['emailFrom'] ) );//email
$utm= htmlspecialchars( strip_tags( $_POST['utm'] ) );//email
$nameFrom = htmlspecialchars( strip_tags( $_POST['nameFrom'] ) );//name
$subj = htmlspecialchars( strip_tags( $_POST['subject'] ) );//mob
$body = htmlspecialchars( strip_tags( $_POST['message'] ) );

$geot = htmlspecialchars( strip_tags( $_POST['geot'] ) );//geo



$sender = base64_encode('+ Заявка с LP Марк');
$sender = "=?utf-8?B?{$sender}?=";

$headers = "From: {$sender} <mgroup5@ya.ru>\r\n".
'Content-Type: text/html; charset=utf-8
Content-Transfer-Encoding: base64
X-Mailer: OrderForm (PHP)';

$subject = base64_encode('+ Заявка с LP Марк');
$subject = "=?utf-8?B?{$subject}?=";

if( !empty( $body ) )
	$body = '' . "\r\n" . $body;

if( !empty( $nameFrom ) )
	$nameFrom = ' (' . $nameFrom . ')';


$body = base64_encode(' Телефон: ' . $subj . '<br><br> Город: ' .$geot . '<br><br> Форма захвата: ' . $body. '<br><br> UTM: ' .$utm);

if( mail($mailTo, $subject, $body, $headers) )
{
	echo '1';
}
else
{
	echo '0';
}



?>