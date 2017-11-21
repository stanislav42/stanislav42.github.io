<?php
$header = "From: fish@example.com\r\n"; 
$header.= "MIME-Version: 1.0\r\n"; 
$header.= "Content-Type: text/html; charset=UTF-8\r\n"; 
$header.= "X-Priority: 1\r\n"; 
if ($_POST['call']=='1'){
$mess = "Заказать звонок. Свяжитесь пожалуйста с ".$_POST['name']." по этому номеру ".$_POST['tel'];
}
else{
$mess = "Прайс. Свяжитесь пожалуйста с ".$_POST['name']." по этому номеру ".$_POST['tel']. ". Область - ".$_POST['area'];
}
//$mess = iconv("UTF-8", "ISO-8859-1", $mess);
//mail("petrotsymb@gmail.com", "Сообщение с сайта Золотой резерв", $mess, $header);
mail("nadezhda.arbuzova2014@yandex.ru", "Сообщение с сайта Золотой резерв", $mess, $header);
mail("kvmamontov@gmail.com", "Сообщение с сайта Золотой резерв", $mess, $header);

?>