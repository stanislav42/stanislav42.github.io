<?php
$header = "From: fish@example.com\r\n"; 
$header.= "MIME-Version: 1.0\r\n"; 
$header.= "Content-Type: text/html; charset=UTF-8\r\n"; 
$header.= "X-Priority: 1\r\n"; 
/*$source=$_POST['source'];*/
if ($_POST['call']=='1'){
  $mess = "Заказать звонок. Свяжитесь пожалуйста с ".$_POST['name']." по этому номеру ".$_POST['tel'].", а также email'у: ".$_POST['myemail']."Клиент пришел от ".$_POST['source'];
}
else{
  $mess = "Прайс. Свяжитесь пожалуйста с ".$_POST['name']." по этому номеру ".$_POST['tel']. ". Емайл: ".$_POST['myemail'].". Область - ".$_POST['area'].". Клиент пришел от ".$_POST['source']. " Клиент выбрал вид рыбы :".$_POST['fishname'];
}
//$mess = iconv("UTF-8", "ISO-8859-1", $mess);
//mail("petrotsymb@gmail.com", "Сообщение с сайта Золотой резерв", $mess, $header);
mail("stadnikstanislav42@gmail.com", "Сообщение с сайта Золотой резерв", $mess, $header);
/*mail("kvmamontov@gmail.com", "Сообщение с сайта Золотой резерв", $mess, $header);*/
?>