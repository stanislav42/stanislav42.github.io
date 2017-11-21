<?php
if (isset ($_POST['contactFF'])) {
  $to = "nadezhda.arbuzova2014@yandex.ru"; // поменять на свой адрес
  $from = $_POST['contactFF'];
  $subject = "Заполнена контактная форма с ".$_SERVER['HTTP_REFERER'];
  $message = "Имя: ".$_POST['nameFF']."\nEmail: ".$from."\nIP: ".$_SERVER['REMOTE_ADDR']."\nСообщение: ".$_POST['messageFF']."\nНомер: ".$_POST['numberFF'];
  $boundary = md5(date('r', time()));
  $filesize = '';
  $headers = "MIME-Version: 1.0\r\n";
  $headers .= "From: " . $from . "\r\n";
  $headers .= "Reply-To: " . $from . "\r\n";
  $headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n";
  $message="
Content-Type: multipart/mixed; boundary=\"$boundary\"

--$boundary
Content-Type: text/plain; charset=\"utf-8\"
Content-Transfer-Encoding: 7bit

$message";
  for($i=0;$i<count($_FILES['fileFF']['name']);$i++) {
      if(is_uploaded_file($_FILES['fileFF']['tmp_name'][$i])) {
         $attachment = chunk_split(base64_encode(file_get_contents($_FILES['fileFF']['tmp_name'][$i])));
         $filename = $_FILES['fileFF']['name'][$i];
         $filetype = $_FILES['fileFF']['type'][$i];
         $filesize .= $_FILES['fileFF']['size'][$i];
         $message.="

--$boundary
Content-Type: \"$filetype\"; name=\"$filename\"
Content-Transfer-Encoding: base64
Content-Disposition: attachment; filename=\"$filename\"

$attachment";
     }
   }
   $message.="
--$boundary--";

  if ($filesize < 10000000) { // проверка на общий размер всех файлов. Многие почтовые сервисы не принимают вложения больше 10 МБ
    mail($to, $subject, $message, $headers);
    $output = '<script>alert("Ваше сообщение получено, спасибо!");</script>';
  } else {
    $output = '<script>alert("Извините, письмо не отправлено. Размер всех файлов превышает 10 МБ.");</script>';
  }
}




?>
<!DOCTYPE html>
<html class="html" lang="ru-RU">
 <head>

  <script type="text/javascript">
   if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["jquery-1.8.3.min.js", "museutils.js", "webpro.js", "musewpslideshow.js", "jquery.museoverlay.js", "touchswipe.js", "jquery.musepolyfill.bgsize.js", "jquery.watch.js", "index.css"], "outOfDate":[]};
</script>
  
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="2014.3.2.295"/>
  <title>Золотой резерв Поставки свежемороженой рыбы по всейРоссии от рыбодобывающих компаний</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?422415861"/>
  <link rel="stylesheet" type="text/css" href="css/index.css?187036575" id="pagesheet"/>
  <!--[if lt IE 9]>
  <link rel="stylesheet" type="text/css" href="css/iefonts_index.css?148025920"/>
  <![endif]-->
  <!-- Other scripts -->
  <script type="text/javascript">
   document.documentElement.className += ' js';
var __adobewebfontsappname__ = "muse";
</script>
  <!-- JS includes -->
  <script type="text/javascript">
   document.write('\x3Cscript src="' + (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//webfonts.creativecloud.com/pt-sans:n4,n7:all.js" type="text/javascript">\x3C/script>');
</script>
    <!--/*

*/
-->
<script>
function gost(){
$("#whitefondes").css("display","block");
$("#blockfondes").css("display","block");
}
function closetr(){
$("#whitefondes").css("display","none");
$("#blockfondes").css("display","none");
}
function zadershka(){
timeoutId = setTimeout(gost, 5000);
}
</script>
 </head>
 <body>

 <!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-5747ZK"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5747ZK');</script>
<!-- End Google Tag Manager -->

 
 
 
  <div class="clearfix" id="page"><!-- column -->
   <div class="position_content" id="page_position_content">
    <div class="clearfix colelem" id="pu110"><!-- group -->
     <div class="clearfix grpelem" id="u110"><!-- group -->
      <a class="nonblock nontext MuseLinkActive clip_frame grpelem" id="u78" href="index.php"><!-- image --><!-- m_editable region-id="editable-static-tag-U78" template="index.html" data-type="image" data-ice-options="clickable" --><img class="block" id="u78_img" src="images/logo.png" alt="" width="334" height="105" data-muse-uid="U78" data-muse-src="images/logo.png"/><!-- /m_editable --></a>
      <a class="nonblock nontext MuseLinkActive clearfix grpelem" id="u84-4" href="index.html" data-muse-uid="U84"><!-- content --><!-- m_editable region-id="editable-static-tag-U84" template="index.html" data-type="html" data-ice-options="disableImageResize,none" --><p>Поставки свежемороженой рыбы по всей России от рыбодобывающих компаний</p><!-- /m_editable --></a>
     </div>
     <div class="clearfix grpelem" id="ppamphletu112"><!-- column -->
      <div class="PamphletWidget clearfix widget_invisible colelem" id="pamphletu112"><!-- none box -->
       <div class="ThumbGroup clearfix grpelem" id="u121"><!-- none box -->
        <div class="popup_anchor">
         <div class="Thumb popup_element clearfix" id="u123"><!-- group -->
          <div class="clearfix grpelem" id="u131-4" data-muse-uid="U131"><!-- content -->
           <!-- m_editable region-id="editable-static-tag-U131" template="index.html" data-type="html" data-ice-options="disableImageResize,none,clickable" -->
           <p><span id="u131">Заказать звонок</span></p>
<!-- /m_editable -->
          </div>
         </div>
        </div>
       </div>
       <div class="popup_anchor" id="u113popup">
        <div class="ContainerGroup rgba-background clearfix" id="u113"><!-- stack box -->
         <div class="Container clearfix grpelem" id="u116"><!-- group -->
          <div class="clearfix grpelem" id="u1408"><!-- group -->
           <div class="clearfix grpelem" id="u1409"><!-- group -->
            <form class="form-grp clearfix grpelem" id="widgetu1410" method="post" enctype="multipart/form-data" action="scripts/form-u1410.php"><!-- none box -->
             <div class="fld-grp clearfix grpelem" id="widgetu1415" data-required="true"><!-- none box -->
              <label class="fld-label actAsDiv clearfix grpelem" id="u1417-4" data-muse-uid="U1417" for="widgetu1415_input"><!-- content --><!-- m_editable region-id="editable-static-tag-U1417" template="index.html" data-type="html" data-ice-options="disableImageResize,none" --><span class="actAsPara">Имя</span><!-- /m_editable --></label>
              <span class="fld-input NoWrap actAsDiv clearfix grpelem" id="u1418-3" data-muse-uid="U1418"><!-- content --><!-- m_editable region-id="editable-static-tag-U1418" template="index.html" data-type="html" data-ice-options="disableImageResize,none" --><input class="wrapped-input" type="text" spellcheck="false" id="widgetu1415_input" name="custom_U1415" tabindex="1"/><!-- /m_editable --></span>
             </div>
            
             <div class="clearfix grpelem" id="u1426-4" data-muse-uid="U1426"><!-- content -->
              <!-- m_editable region-id="editable-static-tag-U1426" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
              <p>Отправка формы…</p>
<!-- /m_editable -->
             </div>
             <div class="clearfix grpelem" id="u1424-4" data-muse-uid="U1424"><!-- content -->
              <!-- m_editable region-id="editable-static-tag-U1424" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
              <p>На сервере произошла ошибка.</p>
<!-- /m_editable -->
             </div>
             <div class="clearfix grpelem" id="u1425-6" data-muse-uid="U1425"><!-- content -->
              <!-- m_editable region-id="editable-static-tag-U1425" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
              <p>Спасибо!</p>
              <p>наш&nbsp; специалист свяжется с вами.</p>
<!-- /m_editable -->
             </div>
             <input class="submit-btn NoWrap grpelem" id="u1423-13" type="submit" value="" tabindex="4"/><!-- state-based BG images -->
             <div class="fld-grp clearfix grpelem" id="widgetu1419" data-required="true"><!-- none box -->
              <label class="fld-label actAsDiv clearfix grpelem" id="u1421-4" data-muse-uid="U1421" for="widgetu1419_input"><!-- content --><!-- m_editable region-id="editable-static-tag-U1421" template="index.html" data-type="html" data-ice-options="disableImageResize,none" --><span class="actAsPara">Телефон</span><!-- /m_editable --></label>
              <span class="fld-input NoWrap actAsDiv clearfix grpelem" id="u1420-3" data-muse-uid="U1420"><!-- content --><!-- m_editable region-id="editable-static-tag-U1420" template="index.html" data-type="html" data-ice-options="disableImageResize,none" --><input class="wrapped-input" type="text" id="widgetu1419_input" name="custom_U1419" tabindex="3"/><!-- /m_editable --></span>
             </div>
            </form>
           </div>
          </div>
         </div>
        </div>
       </div>
       <div class="popup_anchor">
        <div class="PamphletCloseButton PamphletLightboxPart popup_element rounded-corners clearfix" id="u119"><!-- group -->
         <div class="clearfix grpelem" id="u120-4" data-muse-uid="U120"><!-- content -->
          <!-- m_editable region-id="editable-static-tag-U120" template="index.html" data-type="html" data-ice-options="disableImageResize,none,clickable" -->
          <p>x</p>
<!-- /m_editable -->
         </div>
        </div>
       </div>
      </div>
      <div class="clearfix colelem" id="u111"><!-- group -->
       <div class="clearfix grpelem" id="u87-4" data-muse-uid="U87"><!-- content -->
        <!-- m_editable region-id="editable-static-tag-U87" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
        <p>8-800-700-56-85</p>
<!-- /m_editable -->
       </div>
       <div class="clearfix grpelem" id="u88-4" data-muse-uid="U88"><!-- content -->
        <!-- m_editable region-id="editable-static-tag-U88" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
        <p>(звонок бесплатный)</p>
<!-- /m_editable -->
       </div>
       <div class="clip_frame grpelem" id="u89"><!-- image -->
        <!-- m_editable region-id="editable-static-tag-U89" template="index.html" data-type="image" data-ice-options="" -->
        <img class="block" id="u89_img" src="images/phone.png" alt="" width="41" height="41" data-muse-uid="U89" data-muse-src="images/phone.png"/>
<!-- /m_editable -->
       </div>
      </div>
     </div>
    </div>
    <div class="clearfix colelem" id="pu333"><!-- group -->
     <div class="browser_width grpelem" id="u333-bw">
      <div class="museBGSize" id="u333"><!-- group -->
       <div class="clearfix" id="u333_align_to_page">
        <a class="anchor_item grpelem" id="sklad"></a>
        <div class="clearfix grpelem" id="pu354-4"><!-- column -->
         <div class="clearfix colelem" id="u354-4" data-muse-uid="U354"><!-- content -->
          <!-- m_editable region-id="editable-static-tag-U354" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
          <p>транспортная</p>
<!-- /m_editable -->
         </div>
         <div class="clearfix colelem" id="u357-7" data-muse-uid="U357"><!-- content -->
          <!-- m_editable region-id="editable-static-tag-U357" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
          <p><span id="u357">МЫ ОБЕСПЕЧИВАЕМ ХРАНЕНИЕ</span> Вашего товара по минимальным ценам, размещая рыбу только в новых холодильниках в Санкт-Петербурге и Мурманске,</p>
          <p>Казани и Москве.</p>
<!-- /m_editable -->
         </div>
         <div class="clip_frame colelem" id="u365"><!-- image -->
          <!-- m_editable region-id="editable-static-tag-U365" template="index.html" data-type="image" data-ice-options="" -->
          <img class="block" id="u365_img" src="images/ic-poezd.png" alt="" width="181" height="161" data-muse-uid="U365" data-muse-src="images/ic-poezd.png"/>
<!-- /m_editable -->
         </div>
         <div class="clearfix colelem" id="u371-9" data-muse-uid="U371"><!-- content -->
          <!-- m_editable region-id="editable-static-tag-U371" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
          <p><span id="u371">МЫ РАБОТАЕМ ТОЛЬКО С НАДЕЖНЫМИ</span> транспортными компаниями с гарантиями по возмещению ущерба,</p>
          <p>за 6 лет работы мы перевезли и доставили более 30 000 тонн Вашего груза, всегда доставляя товар</p>
          <p>в целости и сохранности.</p>
<!-- /m_editable -->
         </div>
        </div>
        <div class="clearfix grpelem" id="ppu348"><!-- column -->
         <div class="clearfix colelem" id="pu348"><!-- group -->
          <div class="clip_frame grpelem" id="u348"><!-- image -->
           <!-- m_editable region-id="editable-static-tag-U348" template="index.html" data-type="image" data-ice-options="" -->
           <img class="block" id="u348_img" src="images/odindva.png" alt="" width="180" height="552" data-muse-uid="U348" data-muse-src="images/odindva.png"/>
<!-- /m_editable -->
          </div>
          <div class="clearfix grpelem" id="pu356-4"><!-- column -->
           <div class="clearfix colelem" id="u356-4" data-muse-uid="U356"><!-- content -->
            <!-- m_editable region-id="editable-static-tag-U356" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
            <p>складская</p>
<!-- /m_editable -->
           </div>
           <div class="clip_frame colelem" id="u358"><!-- image -->
            <!-- m_editable region-id="editable-static-tag-U358" template="index.html" data-type="image" data-ice-options="" -->
            <img class="block" id="u358_img" src="images/ic-sklad.png" alt="" width="134" height="116" data-muse-uid="U358" data-muse-src="images/ic-sklad.png"/>
<!-- /m_editable -->
           </div>
           <div class="clearfix colelem" id="u364-5" data-muse-uid="U364"><!-- content -->
            <!-- m_editable region-id="editable-static-tag-U364" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
            <p><span id="u364">ОСУЩЕСТВЛЯЕМ ПЕРЕВОЗКУ ТОВАРА&nbsp; </span>от вашего склада. Мы обязательно страхуем груз, весь товар перемещается только проверенным автомобильным и ж/д транспортом.</p>
<!-- /m_editable -->
           </div>
           <div class="clip_frame colelem" id="u372"><!-- image -->
            <!-- m_editable region-id="editable-static-tag-U372" template="index.html" data-type="image" data-ice-options="" -->
            <img class="block" id="u372_img" src="images/ic-tir.png" alt="" width="271" height="73" data-muse-uid="U372" data-muse-src="images/ic-tir.png"/>
<!-- /m_editable -->
           </div>
          </div>
         </div>
         <a class="nonblock nontext anim_swing colelem" id="u380" href="index.html#sklad" onclick="zadershka()"><!-- simple frame --></a>
        </div>
       </div>
      </div>
     </div>
     <div class="browser_width grpelem" id="u432-bw">
      <div class="museBGSize" id="u432"><!-- column -->
       <div class="clearfix" id="u432_align_to_page">
        <div class="clip_frame colelem" id="u440"><!-- image -->
         <!-- m_editable region-id="editable-static-tag-U440" template="index.html" data-type="image" data-ice-options="" -->
         <img class="block" id="u440_img" src="images/riby.png" alt="" width="1073" height="583" data-muse-uid="U440" data-muse-src="images/riby.png"/>
<!-- /m_editable -->
        </div>
        <a class="nonblock nontext anim_swing colelem" id="u448" href="index.html#sklad" onclick="zadershka()"><!-- simple frame --></a>
       </div>
      </div>
     </div>
     <div class="browser_width grpelem" id="u95-bw">
      <div class="museBGSize" id="u95"><!-- column -->
       <div class="clearfix" id="u95_align_to_page">
        <div class="clearfix colelem" id="u109"><!-- group -->
         <div class="clearfix grpelem" id="u102"><!-- group -->
          <div class="clearfix grpelem" id="u105-6" data-muse-uid="U105"><!-- content -->
           <!-- m_editable region-id="editable-static-tag-U105" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
           <p>ПОКУПАЕМ СВЕЖЕМОРОЖЕННУЮ РЫБУ С РЕГИОНАЛЬНЫХ</p>
           <p>СКЛАДОВ ОТ 20 ТОНН ОДНОЙ ПОЗИЦИИ.</p>
<!-- /m_editable -->
          </div>
         </div>
         <div class="clearfix grpelem" id="u107-4" data-muse-uid="U107"><!-- content -->
          <!-- m_editable region-id="editable-static-tag-U107" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
          <p>100% ПРЕДОПЛАТА!</p>
<!-- /m_editable -->
         </div>
        </div>
        <a class="nonblock nontext anim_swing colelem" id="u174" href="index.html#sklad" onclick="zadershka()"><!-- simple frame --></a>
       </div>
      </div>
     </div>
     <div class="browser_width grpelem" id="u133-bw">
      <div class="museBGSize" id="u133"><!-- column -->
       <div class="clearfix" id="u133_align_to_page">
        <div class="clearfix colelem" id="u194-4" data-muse-uid="U194"><!-- content -->
         <!-- m_editable region-id="editable-static-tag-U194" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
         <p>Сегодня закупаем</p>
<!-- /m_editable -->
        </div>
        <div class="clearfix colelem" id="u207"><!-- column -->
         <div class="clearfix colelem" id="u195-4" data-muse-uid="U195"><!-- content -->
          <!-- m_editable region-id="editable-static-tag-U195" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
          <p>• СКУМБРИЯ НР 200-300</p>
<!-- /m_editable -->
         </div>
         <div class="clearfix colelem" id="u196-4" data-muse-uid="U196"><!-- content -->
          <!-- m_editable region-id="editable-static-tag-U196" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
          <p>• МОЙВА НР ИКРЯНАЯ ФОР</p>
<!-- /m_editable -->
         </div>
         <div class="clearfix colelem" id="u197-4" data-muse-uid="U197"><!-- content -->
          <!-- m_editable region-id="editable-static-tag-U197" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
          <p>• ПУТАССУ НР 25+ ФОР</p>
<!-- /m_editable -->
         </div>
         <div class="clearfix colelem" id="u199-4" data-muse-uid="U199"><!-- content -->
          <!-- m_editable region-id="editable-static-tag-U199" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
          <p>• САРДИНА НР</p>
<!-- /m_editable -->
         </div>
        </div>
        <a class="nonblock nontext anim_swing colelem" id="u1810" href="index.html#sklad" onclick="zadershka()"><!-- simple frame --></a>
       </div>
      </div>
     </div>
     <div class="clearfix grpelem" id="u140"><!-- group -->
      <div class="clearfix grpelem" id="u142-4" data-muse-uid="U142"><!-- content -->
       <!-- m_editable region-id="editable-static-tag-U142" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
       <p>НАШ АССОРТИМЕНТ - БОЛЕЕ 50 ВИДОВ РЫБ</p>
<!-- /m_editable -->
      </div>
     </div>
     <div class="browser_width grpelem" id="u200-bw">
      <div class="museBGSize" id="u200"><!-- group -->
       <div class="clearfix" id="u200_align_to_page">
        <div class="clip_frame grpelem" id="u210"><!-- image -->
         <!-- m_editable region-id="editable-static-tag-U210" template="index.html" data-type="image" data-ice-options="" -->
         <img class="block" id="u210_img" src="images/years.png" alt="" width="500" height="1287" data-muse-uid="U210" data-muse-src="images/years.png"/>
<!-- /m_editable -->
        </div>
       </div>
      </div>
     </div>
     <div class="grpelem" id="u208"><!-- simple frame --></div>
     <div class="clearfix grpelem" id="u209-4" data-muse-uid="U209"><!-- content -->
      <!-- m_editable region-id="editable-static-tag-U209" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
      <p>История развития</p>
<!-- /m_editable -->
     </div>
     <div class="clearfix grpelem" id="u255-12" data-muse-uid="U255"><!-- content -->
      <!-- m_editable region-id="editable-static-tag-U255" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
      <p id="u255-6"><span id="u255">ЦЕЛЬ </span>– жесткий <span id="u255-3">КОНТРОЛЬ КАЧЕСТВА</span> поставляемой на рынок <span id="u255-5">ПРОДУКЦИИ.</span></p>
      <p id="u255-7">&nbsp;</p>
      <p id="u255-9">Основание компании и открытие первого офис в России, аренда 1000 м2 низкотемпературных складских помещений.</p>
      <p>&nbsp;</p>
<!-- /m_editable -->
     </div>
     <div class="clearfix grpelem" id="u257-14" data-muse-uid="U257"><!-- content -->
      <!-- m_editable region-id="editable-static-tag-U257" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
      <p id="u257-5"><span id="u257">ЦЕЛЬ</span> –оценив качество добывающих компаний и поняв потребности партнеров, минимизировать себестоимость продукта для большей <span id="u257-3">ПРИВЛЕКАТЕЛЬНОСТИ ТД КАЙРОС</span> в рыбном бизнесе.</p>
      <p id="u257-6">&nbsp;</p>
      <p id="u257-8">ЗАКЛЮЧЕНИЕ ПРЯМЫХ ДОГОВОРОВ СО ВСЕМИ КРУПНЫМИ РОССИЙСКИМИ АТЛАНТИЧЕСКИМИ ФЛОТАМИ:</p>
      <p id="u257-11">ФОР, Вестрыбфлот, Карелрыбфлот, МТФ, Карат, Айсберг-Норд, АТФ, МурманСиФуд, Норд-Пилигрим. Общий оборот за год –<span id="u257-10"> БОЛЕЕ 8 000 ТОНН РЫБЫ.</span></p>
      <p id="u257-12">&nbsp;</p>
<!-- /m_editable -->
     </div>
     <div class="clearfix grpelem" id="u259-11" data-muse-uid="U259"><!-- content -->
      <!-- m_editable region-id="editable-static-tag-U259" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
      <p><span id="u259">ЦЕЛЬ </span>– убрать все лишнее, что может мешать развитию компании и избежать стагнации.</p>
      <p>&nbsp;</p>
      <p>Реструктуризация компании, сокращение издержек. <span id="u259-6">ПОВЫШЕНИЕ ПРОФЕССИОНАЛИЗМА СОТРУДНИКОВ И КАЧЕСТВА</span> обслуживания клиентов.</p>
      <p>&nbsp;</p>
<!-- /m_editable -->
     </div>
     <div class="clearfix grpelem" id="u261-16" data-muse-uid="U261"><!-- content -->
      <!-- m_editable region-id="editable-static-tag-U261" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
      <p><span id="u261">ЦЕЛЬ</span> – создать <span id="u261-3">ПРЕДСТАВИТЕЛЬСТВА</span> в стратегически важных городах <span id="u261-5">РОССИИ</span> и вывести на рынок <span id="u261-7">НОВУЮ ТОРГОВУЮ МАРКУ «ЗОЛОТОЙ РЕЗЕРВ».</span></p>
      <p>&nbsp;</p>
      <p>Открытие региональных представительств в городах: <span id="u261-11">МОСКВА, САНКТ-ПЕТЕРБУРГ, НИЖНИЙ НОВГОРОД, КРАСНОДАР, ЕКАТЕРИНБУРГ, ИРКУТСК, НОВОСИБИРСК.</span></p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
<!-- /m_editable -->
     </div>
     <div class="clearfix grpelem" id="u256-17" data-muse-uid="U256"><!-- content -->
      <!-- m_editable region-id="editable-static-tag-U256" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
      <p><span id="u256">ЦЕЛЬ</span> – <span id="u256-3">ПОЗНАКОМИТЬ</span> рынок с новым игроком, привлечение <span id="u256-5">НАДЕЖНЫХ ПАРТНЕРОВ</span> с долгосрочной перспективой.</p>
      <p>&nbsp;</p>
      <p>Привлечение в команду лучших специалистов из других российских городов – Москвы, Самары, Ярославля, Нижнего Новгорода, <span id="u256-10">С ОПЫТОМ</span> работы в рыбном бизнесе <span id="u256-12">НЕ МЕНЕЕ 7 ЛЕТ.</span></p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
<!-- /m_editable -->
     </div>
     <div class="clearfix grpelem" id="u258-17" data-muse-uid="U258"><!-- content -->
      <!-- m_editable region-id="editable-static-tag-U258" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
      <p><span id="u258">ЦЕЛЬ</span> – <span id="u258-3">УВЕЛИЧЕНИЕ ДОЛИ ТД КАЙРОС</span> на Российском рынке свежемороженых продуктов.</p>
      <p>&nbsp;</p>
      <p>Открытие филиалов в Москве и Санкт-Петербурге.</p>
      <p><span id="u258-9">ПОСТАВКА </span>свежемороженой рыбы в <span id="u258-11">БОЛЕЕ ЧЕМ 50 РЕГИОНОВ РОССИИ.</span></p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
<!-- /m_editable -->
     </div>
     <div class="clearfix grpelem" id="u260-15" data-muse-uid="U260"><!-- content -->
      <!-- m_editable region-id="editable-static-tag-U260" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
      <p><span id="u260">ЦЕЛЬ</span> – создать <span id="u260-3">БИЗНЕС СОВМЕСТНО</span> с партнерами на «прозрачных» условиях и <span id="u260-5">ВЗАИМНОМ ДОВЕРИИ.</span></p>
      <p>&nbsp;</p>
      <p>Внедрение нового ПО для повышения качества взаимодействия с партнерами: мы оценили свои возможности</p>
      <p><span id="u260-10">БОЛЕЕ ЧЕМ ПО 30 ПОКАЗАТЕЛЯМ</span> и увидели серьезные перспективы по разработке и ведению совместных проектов.</p>
      <p>&nbsp;</p>
<!-- /m_editable -->
     </div>
     <div class="clearfix grpelem" id="u262-14" data-muse-uid="U262"><!-- content -->
      <!-- m_editable region-id="editable-static-tag-U262" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
      <p><span id="u262">ЦЕЛЬ </span>– развитие <span id="u262-3">НОВЫХ ОПТОВЫХ НАПРАВЛЕНИЙ</span> по продаже свежемороженого <span id="u262-5">МЯСА И ПТИЦЫ.</span></p>
      <p>&nbsp;</p>
      <p>Запуск в эксплуатацию современного низкотемпературного автоматизированного логистического центра <span id="u262-9">НА 6000 ТОНН В Г. КАЗАНЬ.</span></p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
<!-- /m_editable -->
     </div>
     <a class="nonblock nontext anim_swing grpelem" id="u282" href="index.html#sklad" onclick="zadershka()"><!-- simple frame --></a>
     <div class="browser_width grpelem" id="u293-bw">
      <div class="museBGSize" id="u293"><!-- group -->
       <div class="clearfix" id="u293_align_to_page">
        <div class="clearfix grpelem" id="pu314-6"><!-- column -->
         <div class="clearfix colelem" id="u314-6" data-muse-uid="U314"><!-- content -->
          <!-- m_editable region-id="editable-static-tag-U314" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
          <p>Мы гарантируем самую</p>
          <p>выгодную цену на товар</p>
<!-- /m_editable -->
         </div>
         <div class="clearfix colelem" id="u317-4" data-muse-uid="U317"><!-- content -->
          <!-- m_editable region-id="editable-static-tag-U317" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
          <p>наши менеджеры берут на себя ответственность и решают вопросы здесь и сейчас</p>
<!-- /m_editable -->
         </div>
         <div class="clearfix colelem" id="u316-7" data-muse-uid="U316"><!-- content -->
          <!-- m_editable region-id="editable-static-tag-U316" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
          <p id="u316-3"><span id="u316">ОТКРЫТОСТЬ</span>, как внутри компании, как и во внешней среде позволяет им экономить время и не согласовывать условия сделки с десятью начальниками. В работе с Вами мы принимаем максимально гибкие</p>
          <p id="u316-5">И ОПЕРАТИВНЫЕ РЕШЕНИЯ.</p>
<!-- /m_editable -->
         </div>
         <div class="clearfix colelem" id="u319-4" data-muse-uid="U319"><!-- content -->
          <!-- m_editable region-id="editable-static-tag-U319" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
          <p>мы лояльны и готовы показывать свой заработок</p>
<!-- /m_editable -->
         </div>
         <div class="clearfix colelem" id="u321-4" data-muse-uid="U321"><!-- content -->
          <!-- m_editable region-id="editable-static-tag-U321" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
          <p>мы начинаем продажу только при наличии контракта от добывающей компании на определенный объем</p>
<!-- /m_editable -->
         </div>
         <div class="clearfix colelem" id="u320-6" data-muse-uid="U320"><!-- content -->
          <!-- m_editable region-id="editable-static-tag-U320" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
          <p>Мы всегда ведем мониторинг рынка, отслеживая квоты на товар Российских флотов и объем добычи наших зарубежных партнеров. Мы всегда <span id="u320-2">ИНТЕРЕСУЕМСЯ ПОТРЕБНОСТЯМИ И ВОЗМОЖНОСТЯМИ</span> именно Вашего локального рынка, прежде чем согласовать поставку объема.</p>
<!-- /m_editable -->
         </div>
        </div>
        <div class="clearfix grpelem" id="ppu308"><!-- column -->
         <div class="clearfix colelem" id="pu308"><!-- group -->
          <div class="clip_frame grpelem" id="u308"><!-- image -->
           <!-- m_editable region-id="editable-static-tag-U308" template="index.html" data-type="image" data-ice-options="" -->
           <img class="block" id="u308_img" src="images/ic.png" alt="" width="324" height="852" data-muse-uid="U308" data-muse-src="images/ic.png"/>
<!-- /m_editable -->
          </div>
          <div class="clearfix grpelem" id="pu323-4"><!-- column -->
           <div class="clearfix colelem" id="u323-4" data-muse-uid="U323"><!-- content -->
            <!-- m_editable region-id="editable-static-tag-U323" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
            <p>отлаженная система транспортной логистики</p>
<!-- /m_editable -->
           </div>
           <div class="clearfix colelem" id="u325-4" data-muse-uid="U325"><!-- content -->
            <!-- m_editable region-id="editable-static-tag-U325" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
            <p>мы поставляем вам не только товар, но и всю информацию о нём</p>
<!-- /m_editable -->
           </div>
           <div class="clearfix colelem" id="u324-10" data-muse-uid="U324"><!-- content -->
            <!-- m_editable region-id="editable-static-tag-U324" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
            <p></p>
            <p></p>
<!-- /m_editable -->
           </div>
           <div class="clearfix colelem" id="u326-4" data-muse-uid="U326"><!-- content -->
            <!-- m_editable region-id="editable-static-tag-U326" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
            <p>мы на связи 24 часа!</p>
<!-- /m_editable -->
           </div>
           <div class="clearfix colelem" id="u328-4" data-muse-uid="U328"><!-- content -->
            <!-- m_editable region-id="editable-static-tag-U328" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
            <p>Мы оберегаем вашу конфиденциальность и не разглашаем данных без вашего согласия</p>
<!-- /m_editable -->
           </div>
           <div class="clearfix colelem" id="u329-4" data-muse-uid="U329"><!-- content -->
            <!-- m_editable region-id="editable-static-tag-U329" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
            <p>Мы проводим мониторинг более 20 компаний - поставщиков ежедневно, информируем о всех изменениях на рынке. Наша подписная клиентская база - более 1 000 электронных адресов по всей стране.</p>
<!-- /m_editable -->
           </div>
          </div>
         </div>
         <a class="nonblock nontext anim_swing colelem" id="u332" href="index.html#sklad" onclick="zadershka()"><!-- simple frame --></a>
        </div>
       </div>
      </div>
     </div>
     <div class="clearfix grpelem" id="u300"><!-- group -->
      <div class="clearfix grpelem" id="u301-4" data-muse-uid="U301"><!-- content -->
       <!-- m_editable region-id="editable-static-tag-U301" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
       <p>Почему выбирают нас</p>
<!-- /m_editable -->
      </div>
     </div>
     <div class="clearfix grpelem" id="u315-6" data-muse-uid="U315"><!-- content -->
      <!-- m_editable region-id="editable-static-tag-U315" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
      <p>Часто <span id="u315-2">МЫ ТОРГУЕМ ПО ЦЕНЕ ФЛОТОВ,</span> потому что покупаем 300-600 тонн продукции с каждого подхода.</p>
<!-- /m_editable -->
     </div>
     <div class="clearfix grpelem" id="u322-10" data-muse-uid="U322"><!-- content -->
      <!-- m_editable region-id="editable-static-tag-U322" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
      <p>Вам <span id="u322-2">НЕ НАДО ИСКАТЬ</span> и проверять компании перевозчиков, каждая партия страхуется нами.</p>
      <p>Вы просто <span id="u322-6">ПРИНИМАЕТЕ ТОВАР</span> по качеству и количеству на своем складе.</p>
<!-- /m_editable -->
     </div>
     <div class="clearfix grpelem" id="u327-6" data-muse-uid="U327"><!-- content -->
      <!-- m_editable region-id="editable-static-tag-U327" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
      <p>После заключения договора поставки, мы постоянно сообщаем о местоположении Вашего груза - для <span id="u327-2">ЭФФЕКТИВНОСТИ МЫ ВНЕДРИЛИ CRM СИСТЕМУ. </span>Мы принимаем все рекламации и отвечаем на них в течение суток, согласно разработанным внутренним правилам.</p>
<!-- /m_editable -->
     </div>
     <div class="clearfix grpelem" id="u318-6" data-muse-uid="U318"><!-- content -->
      <!-- m_editable region-id="editable-static-tag-U318" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
      <p>После получения Вашего согласия, мы <span id="u318-2">ПОДПИСЫВАЕМ СПЕЦИФИКАЦИЮ</span>, где указываем условия сделки, сроки поставки и оплаты за товар.</p>
<!-- /m_editable -->
     </div>
     <div class="grpelem" id="u340"><!-- simple frame --></div>
     <div class="clearfix grpelem" id="u341-4" data-muse-uid="U341"><!-- content -->
      <!-- m_editable region-id="editable-static-tag-U341" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
      <p>ЛОГИСТИКА</p>
<!-- /m_editable -->
     </div>
     <div class="clip_frame grpelem" id="u342"><!-- image -->
      <!-- m_editable region-id="editable-static-tag-U342" template="index.html" data-type="image" data-ice-options="" -->
      <img class="block" id="u342_img" src="images/punktu.png" alt="" width="643" height="48" data-muse-uid="U342" data-muse-src="images/punktu.png"/>
<!-- /m_editable -->
     </div>
     <div class="browser_width grpelem" id="u382-bw">
      <div class="museBGSize" id="u382"><!-- column -->
       <div class="clearfix" id="u382_align_to_page">
        <div class="position_content" id="u382_position_content">
         <div class="colelem" id="u389"><!-- simple frame --></div>
         <div class="clip_frame colelem" id="u391"><!-- image -->
          <!-- m_editable region-id="editable-static-tag-U391" template="index.html" data-type="image" data-ice-options="" -->
          <img class="block" id="u391_img" src="images/sklad1.png" alt="" width="935" height="531" data-muse-uid="U391" data-muse-src="images/sklad1.png"/>
<!-- /m_editable -->
         </div>
        </div>
       </div>
      </div>
     </div>
     <div class="clearfix grpelem" id="u390-4" data-muse-uid="U390"><!-- content -->
      <!-- m_editable region-id="editable-static-tag-U390" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
      <p>НАШ СКЛАД</p>
<!-- /m_editable -->
     </div>
     <div class="clip_frame grpelem" id="u397"><!-- image -->
      <!-- m_editable region-id="editable-static-tag-U397" template="index.html" data-type="image" data-ice-options="" -->
      <img class="block" id="u397_img" src="images/punktu2.png" alt="" width="211" height="105" data-muse-uid="U397" data-muse-src="images/punktu2.png"/>
<!-- /m_editable -->
     </div>
     <div class="clip_frame grpelem" id="u403"><!-- image -->
      <!-- m_editable region-id="editable-static-tag-U403" template="index.html" data-type="image" data-ice-options="" -->
      <img class="block" id="u403_img" src="images/punktu3.png" alt="" width="211" height="105" data-muse-uid="U403" data-muse-src="images/punktu3.png"/>
<!-- /m_editable -->
     </div>
     <div class="clip_frame grpelem" id="u409"><!-- image -->
      <!-- m_editable region-id="editable-static-tag-U409" template="index.html" data-type="image" data-ice-options="" -->
      <img class="block" id="u409_img" src="images/sk2.png" alt="" width="358" height="670" data-muse-uid="U409" data-muse-src="images/sk2.png"/>
<!-- /m_editable -->
     </div>
     <div class="clip_frame grpelem" id="u415"><!-- image -->
      <!-- m_editable region-id="editable-static-tag-U415" template="index.html" data-type="image" data-ice-options="" -->
      <img class="block" id="u415_img" src="images/sk3.png" alt="" width="358" height="670" data-muse-uid="U415" data-muse-src="images/sk3.png"/>
<!-- /m_editable -->
     </div>
     <div class="clearfix grpelem" id="u421-9" data-muse-uid="U421"><!-- content -->
      <!-- m_editable region-id="editable-static-tag-U421" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
      <p id="u421-6">Современный низкотемпературный автоматизированный логистический центр.Гарантированное хранение -25. Общая емкость хладокомбината – 6 212 палето - мест. Логистический комплекс построен немецкой компанией <span id="u421-2">SSI SCHAEFER NOELL</span> и состоит из 2 корпусов, предназначен для хранения продукции с темп. режимом до -25С. Полностью автоматизирован и обслуживается техникой японской компании <span id="u421-4">MAYEKAWA MFG</span>.&nbsp; Ввод складского комлекса в эксплуатацию в 2013г.</p>
      <p>&nbsp;</p>
<!-- /m_editable -->
     </div>
     <div class="clearfix grpelem" id="u422-12" data-muse-uid="U422"><!-- content -->
      <!-- m_editable region-id="editable-static-tag-U422" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
      <p id="u422-3"><span id="u422">Корпус 1 (низкий) – разделен на три камеры</span>.</p>
      <p id="u422-4">&nbsp;</p>
      <p id="u422-6">Две неавтоматизированные камеры хранения объемом 250 палето - мест каждая с температурным режимом от плюс 25°С до минус 18°С. Данные камеры могут быть использованы как камеры оттайки, доморозки или перетарки продукции.</p>
      <p id="u422-8">&nbsp;Третья зона экспедиции и комплектации грузов с температурным режимом от плюс 25°С до минус 18°С площадью 1200 кв.м.</p>
      <p id="u422-9">&nbsp;</p>
      <p>&nbsp;</p>
<!-- /m_editable -->
     </div>
     <div class="clearfix grpelem" id="u423-14" data-muse-uid="U423"><!-- content -->
      <!-- m_editable region-id="editable-static-tag-U423" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
      <p id="u423-3"><span id="u423">Корпус 2 (высокий)</span> – однообъемная камера автоматизированного хранения продукции с температурным режимом от минус 25°С до плюс 25°С, обслуживается двумя кранами - автоматами производства фирмы SSI SCHAFER, разделена на зоны:</p>
      <p id="u423-4">&nbsp;</p>
      <p id="u423-6">- зона №1 на 2856 паллето - мест;</p>
      <p id="u423-8">- зона №2 на 2856 паллето - мест.</p>
      <p id="u423-10">&nbsp; Общая емкость камеры – 5712 палето - мест.</p>
      <p id="u423-11">&nbsp;</p>
      <p id="u423-12">&nbsp;</p>
<!-- /m_editable -->
     </div>
     <div class="clearfix grpelem" id="u424-3" data-muse-uid="U424"><!-- content -->
      <!-- m_editable region-id="editable-static-tag-U424" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
      <p>&nbsp;</p>
<!-- /m_editable -->
     </div>
     <div class="grpelem" id="u430"><!-- simple frame --></div>
     <div class="clearfix grpelem" id="u431-4" data-muse-uid="U431"><!-- content -->
      <!-- m_editable region-id="editable-static-tag-U431" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
      <p>наши партнеры</p>
<!-- /m_editable -->
     </div>
     <div class="browser_width grpelem" id="u449-bw">
      <div class="museBGSize" id="u449"><!-- column -->
       <div class="clearfix" id="u449_align_to_page">
        <div class="position_content" id="u449_position_content">
         <div class="colelem" id="u456"><!-- simple frame --></div>
         <div class="clearfix colelem" id="pu458"><!-- group -->
          <div class="clip_frame grpelem" id="u458"><!-- image -->
           <!-- m_editable region-id="editable-static-tag-U458" template="index.html" data-type="image" data-ice-options="" -->
           <img class="block" id="u458_img" src="images/otz1.png" alt="" width="512" height="695" data-muse-uid="U458" data-muse-src="images/otz1.png"/>
<!-- /m_editable -->
          </div>
          <div class="clip_frame grpelem" id="u464"><!-- image -->
           <!-- m_editable region-id="editable-static-tag-U464" template="index.html" data-type="image" data-ice-options="" -->
           <img class="block" id="u464_img" src="images/otz2.png" alt="" width="512" height="695" data-muse-uid="U464" data-muse-src="images/otz2.png"/>
<!-- /m_editable -->
          </div>
         </div>
         <a class="nonblock nontext anim_swing colelem" id="u472" href="index.html#sklad" onclick="zadershka()"><!-- simple frame --></a>
        </div>
       </div>
      </div>
     </div>
     <div class="clearfix grpelem" id="u457-4" data-muse-uid="U457"><!-- content -->
      <!-- m_editable region-id="editable-static-tag-U457" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
      <p>наши отзывы</p>
<!-- /m_editable -->
	
     </div>
     
	<!-- <footer id="footer">
		<div class="content">
			<div class="block_title">Наши контакты</div>
			<p id="footer_title">ООО"Золотой резерв"</p>
			<p class="footer_t">Телефоны:</p>
            <p>8-800-700-56-85 (звонок бесплатный)</p>
			<p>8-812-332-71-02  (Санкт - Петербург)<br>
			8-831-216-39-25  (Нижний Новгород)<br>
			</p>
			<p class="footer_t">Почта:</p>
			<p>fishgoldrezerv@yandex.ru</p>
			<p></p>
		</div>
	</footer> -->
     
     
     <div class="PamphletWidget clearfix grpelem" id="pamphletu216"><!-- none box -->
      <div class="popup_anchor" id="u217popup">
       <div class="ContainerGroup clearfix" id="u217"><!-- none box -->
        <div class="Container invi rounded-corners clearfix grpelem" id="u228"><!-- group -->
         <div class="clearfix grpelem" id="u229-4" data-muse-uid="U229"><!-- content -->
          <!-- m_editable region-id="editable-static-tag-U229" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
          <p>СКУМБРИЯ</p>
<!-- /m_editable -->
         </div>
        </div>
        <div class="Container invi rounded-corners clearfix grpelem" id="u223"><!-- group -->
         <div class="clearfix grpelem" id="u224-4" data-muse-uid="U224"><!-- content -->
          <!-- m_editable region-id="editable-static-tag-U224" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
          <p>МОЙВА</p>
<!-- /m_editable -->
         </div>
        </div>
        <div class="Container invi rounded-corners clearfix grpelem" id="u218"><!-- group -->
         <div class="clearfix grpelem" id="u219-4" data-muse-uid="U219"><!-- content -->
          <!-- m_editable region-id="editable-static-tag-U219" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
          <p>ПУТАССУ</p>
<!-- /m_editable -->
         </div>
        </div>
        <div class="Container invi rounded-corners clearfix grpelem" id="u837"><!-- group -->
         <div class="clearfix grpelem" id="u840-4" data-muse-uid="U840"><!-- content -->
          <!-- m_editable region-id="editable-static-tag-U840" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
          <p>СЕЛЬДЬ</p>
<!-- /m_editable -->
         </div>
        </div>
        <div class="Container invi rounded-corners clearfix grpelem" id="u841"><!-- group -->
         <div class="clearfix grpelem" id="u844-4" data-muse-uid="U844"><!-- content -->
          <!-- m_editable region-id="editable-static-tag-U844" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
          <p>ХЕК</p>
<!-- /m_editable -->
         </div>
        </div>
        <div class="Container invi rounded-corners clearfix grpelem" id="u845"><!-- group -->
         <div class="clearfix grpelem" id="u848-4" data-muse-uid="U848"><!-- content -->
          <!-- m_editable region-id="editable-static-tag-U848" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
          <p>КИЛЬКА</p>
<!-- /m_editable -->
         </div>
        </div>
        <div class="Container invi rounded-corners clearfix grpelem" id="u849"><!-- group -->
         <div class="clearfix grpelem" id="u853-4" data-muse-uid="U853"><!-- content -->
          <!-- m_editable region-id="editable-static-tag-U853" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
          <p>ГОРБУША</p>
<!-- /m_editable -->
         </div>
        </div>
        <div class="Container invi rounded-corners clearfix grpelem" id="u854"><!-- group -->
         <div class="clearfix grpelem" id="u858-4" data-muse-uid="U858"><!-- content -->
          <!-- m_editable region-id="editable-static-tag-U858" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
          <p>МИНТАЙ</p>
<!-- /m_editable -->
         </div>
        </div>
        <div class="Container invi rounded-corners clearfix grpelem" id="u859"><!-- group -->
         <div class="clearfix grpelem" id="u862-4" data-muse-uid="U862"><!-- content -->
          <!-- m_editable region-id="editable-static-tag-U862" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
          <p>ЗУБАТКА</p>
<!-- /m_editable -->
         </div>
        </div>
        <div class="Container invi rounded-corners clearfix grpelem" id="u863"><!-- group -->
         <div class="clearfix grpelem" id="u866-4" data-muse-uid="U866"><!-- content -->
          <!-- m_editable region-id="editable-static-tag-U866" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
          <p>ПАНГАСИУС</p>
<!-- /m_editable -->
         </div>
        </div>
        <div class="Container invi rounded-corners clearfix grpelem" id="u867"><!-- group -->
         <div class="clearfix grpelem" id="u870-4" data-muse-uid="U870"><!-- content -->
          <!-- m_editable region-id="editable-static-tag-U870" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
          <p>ФОРЕЛЬ</p>
<!-- /m_editable -->
         </div>
        </div>
        <div class="Container invi rounded-corners clearfix grpelem" id="u871"><!-- group -->
         <div class="clearfix grpelem" id="u875-4" data-muse-uid="U875"><!-- content -->
          <!-- m_editable region-id="editable-static-tag-U875" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
          <p>САЙРА</p>
<!-- /m_editable -->
         </div>
        </div>
        <div class="Container invi rounded-corners clearfix grpelem" id="u876"><!-- group -->
         <div class="clearfix grpelem" id="u879-4" data-muse-uid="U879"><!-- content -->
          <!-- m_editable region-id="editable-static-tag-U879" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
          <p>САЛАКА</p>
<!-- /m_editable -->
         </div>
        </div>
        <div class="Container invi rounded-corners clearfix grpelem" id="u880"><!-- group -->
         <div class="clearfix grpelem" id="u883-4" data-muse-uid="U883"><!-- content -->
          <!-- m_editable region-id="editable-static-tag-U883" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
          <p>КИЖУЧ</p>
<!-- /m_editable -->
         </div>
        </div>
        <div class="Container invi rounded-corners clearfix grpelem" id="u884"><!-- group -->
         <div class="clearfix grpelem" id="u940-4" data-muse-uid="U940"><!-- content -->
          <!-- m_editable region-id="editable-static-tag-U940" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
          <p>КЕТА</p>
<!-- /m_editable -->
         </div>
        </div>
        <div class="Container invi rounded-corners clearfix grpelem" id="u941"><!-- group -->
         <div class="clearfix grpelem" id="u944-4" data-muse-uid="U944"><!-- content -->
          <!-- m_editable region-id="editable-static-tag-U944" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
          <p>КАМБАЛА</p>
<!-- /m_editable -->
         </div>
        </div>
        <div class="Container invi rounded-corners clearfix grpelem" id="u945"><!-- group -->
         <div class="clearfix grpelem" id="u948-4" data-muse-uid="U948"><!-- content -->
          <!-- m_editable region-id="editable-static-tag-U948" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
          <p>ТРЕСКА</p>
<!-- /m_editable -->
         </div>
        </div>
        <div class="Container invi rounded-corners clearfix grpelem" id="u949"><!-- group -->
         <div class="clearfix grpelem" id="u952-4" data-muse-uid="U952"><!-- content -->
          <!-- m_editable region-id="editable-static-tag-U952" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
          <p>НАВАГА</p>
<!-- /m_editable -->
         </div>
        </div>
       </div>
      </div>
      <div class="ThumbGroup clearfix grpelem" id="u237"><!-- none box -->
       <div class="popup_anchor">
        <div class="Thumb popup_element" id="u240"><!-- simple frame --></div>
       </div>
       <div class="popup_anchor">
        <div class="Thumb popup_element rounded-corners" id="u238"><!-- simple frame --></div>
       </div>
       <div class="popup_anchor">
        <div class="Thumb popup_element rounded-corners" id="u239"><!-- simple frame --></div>
       </div>
       <div class="popup_anchor">
        <div class="Thumb popup_element rounded-corners" id="u839"><!-- simple frame --></div>
       </div>
       <div class="popup_anchor">
        <div class="Thumb popup_element rounded-corners" id="u843"><!-- simple frame --></div>
       </div>
       <div class="popup_anchor">
        <div class="Thumb popup_element rounded-corners" id="u847"><!-- simple frame --></div>
       </div>
       <div class="popup_anchor">
        <div class="Thumb popup_element rounded-corners" id="u851"><!-- simple frame --></div>
       </div>
       <div class="popup_anchor">
        <div class="Thumb popup_element rounded-corners" id="u856"><!-- simple frame --></div>
       </div>
       <div class="popup_anchor">
        <div class="Thumb popup_element rounded-corners" id="u861"><!-- simple frame --></div>
       </div>
       <div class="popup_anchor">
        <div class="Thumb popup_element rounded-corners" id="u865"><!-- simple frame --></div>
       </div>
       <div class="popup_anchor">
        <div class="Thumb popup_element rounded-corners" id="u869"><!-- simple frame --></div>
       </div>
       <div class="popup_anchor">
        <div class="Thumb popup_element rounded-corners" id="u873"><!-- simple frame --></div>
       </div>
       <div class="popup_anchor">
        <div class="Thumb popup_element rounded-corners" id="u878"><!-- simple frame --></div>
       </div>
       <div class="popup_anchor">
        <div class="Thumb popup_element rounded-corners" id="u882"><!-- simple frame --></div>
       </div>
       <div class="popup_anchor">
        <div class="Thumb popup_element rounded-corners" id="u886"><!-- simple frame --></div>
       </div>
       <div class="popup_anchor">
        <div class="Thumb popup_element rounded-corners" id="u943"><!-- simple frame --></div>
       </div>
       <div class="popup_anchor">
        <div class="Thumb popup_element rounded-corners" id="u947"><!-- simple frame --></div>
       </div>
       <div class="popup_anchor">
        <div class="Thumb popup_element rounded-corners" id="u951"><!-- simple frame --></div>
       </div>
      </div>
     </div>
     <div class="PamphletWidget clearfix widget_invisible grpelem" id="pamphletu143"><!-- none box -->
      <div class="ThumbGroup clearfix grpelem" id="u148"><!-- none box -->
       <div class="popup_anchor">
        <div class="Thumb popup_element" id="u149"><!-- simple frame --></div>
       </div>
       <div class="popup_anchor">
        <div class="Thumb popup_element" id="u263"><!-- simple frame --></div>
       </div>
       <div class="popup_anchor">
        <div class="Thumb popup_element" id="u330"><!-- simple frame --></div>
       </div>
       <div class="popup_anchor">
        <div class="Thumb popup_element" id="u378"><!-- simple frame --></div>
       </div>
       <div class="popup_anchor">
        <div class="Thumb popup_element" id="u446"><!-- simple frame --></div>
       </div>
       <div class="popup_anchor">
        <div class="Thumb popup_element" id="u470"><!-- simple frame --></div>
       </div>
       <div class="popup_anchor">
        <div class="Thumb popup_element" id="u1612"><!-- simple frame --></div>
       </div>
      </div>
      
      
      
      
      <div class="popup_anchor" id="u144popup">
       <div class="ContainerGroup rgba-background clearfix" id="u144"><!-- stack box -->
        <div class="Container clearfix grpelem" id="u145"><!-- group -->
         <div class="clearfix grpelem" id="u836"><!-- group -->
          <div class="clearfix grpelem" id="u772"><!-- group -->
          
           <div class="clearfix grpelem" id="u834-8" data-muse-uid="U834"><!-- content -->
            <!-- m_editable region-id="editable-static-tag-U834" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
      
        
        
        
        
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
<style>
#feedback-form { /* вся форма */ 
  max-width: 750px; !important;
  padding: 2%;
  border-radius: 3px;
  background: #f1f1f1;
  font-size:14px;
}
#feedback-form label { /* наименование полей */ 
  float: left;
  display: block;
  clear: right;
}
#feedback-form .w100 { /* поля */ 
  float: right;
  max-width: 400px;
  width: 97%;
  margin-bottom: 1em;
  padding: 1.5%;
}
#feedback-form .border { /* граница полей */ 
  border-radius: 1px;
  border-width: 1px;
  border-style: solid;
  border-color: #C0C0C0 #D9D9D9 #D9D9D9;
  box-shadow: 0 1px 1px rgba(255,255,255,.5), 0 1px 1px rgba(0,0,0,.1) inset;
}
#feedback-form .border:focus {
  outline: none;
  border-color: #abd9f1 #bfe3f7 #bfe3f7;
}
#feedback-form .border:hover {
  border-color: #7eb4ea #97cdea #97cdea;
}
#feedback-form .border:focus::-moz-placeholder { /* убрать при фокусе первоначальный текст поля */ 
  color: transparent;
}
#feedback-form .border:focus::-webkit-input-placeholder {
  color: transparent;
}
#feedback-form .border:not(:focus):not(:hover):valid { /* правильно заполненные поля */ 
  opacity: .8;
}
#submitFF { /* кнопка "Отправить" */ 
  padding: 2%;
  border: none;
  border-radius: 3px;
  box-shadow: 0 0 0 1px rgba(0,0,0,.2) inset;
  background: #669acc;
  color: #fff;
}
#feedback-form br {
  height: 0;
  clear: both;
}
#submitFF:hover {
  background: #5c90c2;
}
#submitFF:focus {
  box-shadow: 0 1px 1px #fff, inset 0 1px 2px rgba(0,0,0,.8), inset 0 -1px 0 rgba(0,0,0,.05);
}
</style>

<?=$output?>
<form action="index.php" enctype="multipart/form-data" method="post" id="feedback-form">
<p>Вы можете отправить нам Ваш прайс в формате EXCEL</p> <br><br>
<label for="nameFF">Имя:</label>
<input type="text" name="nameFF" id="nameFF" required placeholder="например, Иван Иванович Иванов" x-autocompletetype="name" class="w100 border">
<label for="contactFF">Email:</label>
<input type="email" name="contactFF" id="contactFF" required placeholder="например, ivan@yandex.ru" x-autocompletetype="email" class="w100 border">
<label for="numberFF">Номер:</label>
<input type="number" name="numberFF" id="numberFF" required placeholder="например, 7 908-555-55-55" x-autocompletetype="text" class="w100 border">
<label for="fileFF">Файл:</label>
<input type="file" name="fileFF[]" multiple id="fileFF" class="w100">
<label for="messageFF">Сообщение:</label>
<textarea name="messageFF" id="messageFF" required rows="5" placeholder="Написать предложение" class="w100 border"></textarea>
<br>
<input value="Отправить" type="submit" id="submitFF">
</form>

        
         </div>
        </div>
        <div class="Container invi clearfix grpelem" id="u264"><!-- group -->
         <div class="clearfix grpelem" id="u1018"><!-- group -->
          <div class="clearfix grpelem" id="u1019"><!-- group -->
           <form action="index.php" enctype="multipart/form-data" method="post" id="feedback-form">
<p>Вы можете отправить нам Ваш прайс в формате EXCEL</p> <br><br>
<label for="nameFF">Имя:</label>
<input type="text" name="nameFF" id="nameFF" required placeholder="например, Иван Иванович Иванов" x-autocompletetype="name" class="w100 border">
<label for="contactFF">Email:</label>
<input type="email" name="contactFF" id="contactFF" required placeholder="например, ivan@yandex.ru" x-autocompletetype="email" class="w100 border">
<label for="numberFF">Номер:</label>
<input type="number" name="numberFF" id="numberFF" required placeholder="например, 7 908-555-55-55" x-autocompletetype="text" class="w100 border">
<label for="fileFF">Файл:</label>
<input type="file" name="fileFF[]" multiple id="fileFF" class="w100">
<label for="messageFF">Сообщение:</label>
<textarea name="messageFF" id="messageFF" required rows="5" placeholder="Написать предложение" class="w100 border"></textarea>
<br>
<input value="Отправить" type="submit" id="submitFF">
</form>
           <div class="clearfix grpelem" id="u1020-8" data-muse-uid="U1020"><!-- content -->
            <!-- m_editable region-id="editable-static-tag-U1020" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->

<!-- /m_editable -->
           </div>
          </div>
          <div class="clearfix grpelem" id="u1082-4" data-muse-uid="U1082"><!-- content -->
           <!-- m_editable region-id="editable-static-tag-U1082" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->

<!-- /m_editable -->
          </div>
         </div>
        </div>
        <div class="Container invi clearfix grpelem" id="u331"><!-- group -->
         <div class="clearfix grpelem" id="u1083"><!-- group -->
          <div class="clearfix grpelem" id="u1084"><!-- group -->
           <form action="index.php" enctype="multipart/form-data" method="post" id="feedback-form">
<p>Вы можете отправить нам Ваш прайс в формате EXCEL</p> <br><br>
<label for="nameFF">Имя:</label>
<input type="text" name="nameFF" id="nameFF" required placeholder="например, Иван Иванович Иванов" x-autocompletetype="name" class="w100 border">
<label for="contactFF">Email:</label>
<input type="email" name="contactFF" id="contactFF" required placeholder="например, ivan@yandex.ru" x-autocompletetype="email" class="w100 border">
<label for="numberFF">Номер:</label>
<input type="number" name="numberFF" id="numberFF" required placeholder="например, 7 908-555-55-55" x-autocompletetype="text" class="w100 border">
<label for="fileFF">Файл:</label>
<input type="file" name="fileFF[]" multiple id="fileFF" class="w100">
<label for="messageFF">Сообщение:</label>
<textarea name="messageFF" id="messageFF" required rows="5" placeholder="Написать предложение" class="w100 border"></textarea>
<br>
<input value="Отправить" type="submit" id="submitFF">
</form>
           <div class="clearfix grpelem" id="u1085-8" data-muse-uid="U1085"><!-- content -->
            <!-- m_editable region-id="editable-static-tag-U1085" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
   
<!-- /m_editable -->
           </div>
          </div>
          <div class="clearfix grpelem" id="u1147-4" data-muse-uid="U1147"><!-- content -->
      
<!-- /m_editable -->
          </div>
         </div>
        </div>
        <div class="Container invi clearfix grpelem" id="u379"><!-- group -->
         <div class="clearfix grpelem" id="u1148"><!-- group -->
          <div class="clearfix grpelem" id="u1149"><!-- group -->
           <form action="index.php" enctype="multipart/form-data" method="post" id="feedback-form">
<p>Вы можете отправить нам Ваш прайс в формате EXCEL</p> <br><br>
<label for="nameFF">Имя:</label>
<input type="text" name="nameFF" id="nameFF" required placeholder="например, Иван Иванович Иванов" x-autocompletetype="name" class="w100 border">
<label for="contactFF">Email:</label>
<input type="email" name="contactFF" id="contactFF" required placeholder="например, ivan@yandex.ru" x-autocompletetype="email" class="w100 border">
<label for="numberFF">Номер:</label>
<input type="number" name="numberFF" id="numberFF" required placeholder="например, 7 908-555-55-55" x-autocompletetype="text" class="w100 border">
<label for="fileFF">Файл:</label>
<input type="file" name="fileFF[]" multiple id="fileFF" class="w100">
<label for="messageFF">Сообщение:</label>
<textarea name="messageFF" id="messageFF" required rows="5" placeholder="Написать предложение" class="w100 border"></textarea>
<br>
<input value="Отправить" type="submit" id="submitFF">
</form>
           <div class="clearfix grpelem" id="u1150-8" data-muse-uid="U1150"><!-- content -->
            <!-- m_editable region-id="editable-static-tag-U1150" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->

<!-- /m_editable -->
           </div>
          </div>
          <div class="clearfix grpelem" id="u1212-4" data-muse-uid="U1212"><!-- content -->
           <!-- m_editable region-id="editable-static-tag-U1212" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->

<!-- /m_editable -->
          </div>
         </div>
        </div>
        <div class="Container invi clearfix grpelem" id="u447"><!-- group -->
         <div class="clearfix grpelem" id="u1213"><!-- group -->
          <div class="clearfix grpelem" id="u1214"><!-- group -->
          <form action="index.php" enctype="multipart/form-data" method="post" id="feedback-form">
<p>Вы можете отправить нам Ваш прайс в формате EXCEL</p> <br><br>
<label for="nameFF">Имя:</label>
<input type="text" name="nameFF" id="nameFF" required placeholder="например, Иван Иванович Иванов" x-autocompletetype="name" class="w100 border">
<label for="contactFF">Email:</label>
<input type="email" name="contactFF" id="contactFF" required placeholder="например, ivan@yandex.ru" x-autocompletetype="email" class="w100 border">
<label for="numberFF">Номер:</label>
<input type="number" name="numberFF" id="numberFF" required placeholder="например, 7 908-555-55-55" x-autocompletetype="text" class="w100 border">
<label for="fileFF">Файл:</label>
<input type="file" name="fileFF[]" multiple id="fileFF" class="w100">
<label for="messageFF">Сообщение:</label>
<textarea name="messageFF" id="messageFF" required rows="5" placeholder="Написать предложение" class="w100 border"></textarea>
<br>
<input value="Отправить" type="submit" id="submitFF">
</form>
           <div class="clearfix grpelem" id="u1215-8" data-muse-uid="U1215"><!-- content -->
            <!-- m_editable region-id="editable-static-tag-U1215" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->

<!-- /m_editable -->
           </div>
          </div>
          <div class="clearfix grpelem" id="u1277-4" data-muse-uid="U1277"><!-- content -->
           <!-- m_editable region-id="editable-static-tag-U1277" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->

<!-- /m_editable -->
          </div>
         </div>
        </div>
        <div class="Container invi clearfix grpelem" id="u471"><!-- group -->
         <div class="clearfix grpelem" id="u1278"><!-- group -->
          <div class="clearfix grpelem" id="u1279"><!-- group -->
           
           <form action="index.php" enctype="multipart/form-data" method="post" id="feedback-form">
<p>Вы можете отправить нам Ваш прайс в формате EXCEL</p> <br><br>
<label for="nameFF">Имя:</label>
<input type="text" name="nameFF" id="nameFF" required placeholder="например, Иван Иванович Иванов" x-autocompletetype="name" class="w100 border">
<label for="contactFF">Email:</label>
<input type="email" name="contactFF" id="contactFF" required placeholder="например, ivan@yandex.ru" x-autocompletetype="email" class="w100 border">
<label for="numberFF">Номер:</label>
<input type="number" name="numberFF" id="numberFF" required placeholder="например, 7 908-555-55-55" x-autocompletetype="text" class="w100 border">
<label for="fileFF">Файл:</label>
<input type="file" name="fileFF[]" multiple id="fileFF" class="w100">
<label for="messageFF">Сообщение:</label>
<textarea name="messageFF" id="messageFF" required rows="5" placeholder="Написать предложение" class="w100 border"></textarea>
<br>
<input value="Отправить" type="submit" id="submitFF">
</form>
           
           
           
           <div class="clearfix grpelem" id="u1280-8" data-muse-uid="U1280"><!-- content -->
            <!-- m_editable region-id="editable-static-tag-U1280" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->

<!-- /m_editable -->
           </div>
          </div>
          <div class="clearfix grpelem" id="u1342-4" data-muse-uid="U1342"><!-- content -->
           <!-- m_editable region-id="editable-static-tag-U1342" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
          
<!-- /m_editable -->
          </div>
         </div>
        </div>
        <div class="Container invi clearfix grpelem" id="u1613"><!-- group -->
         <div class="clearfix grpelem" id="u1725"><!-- group -->
          <div class="clearfix grpelem" id="u1726"><!-- group -->
           <form action="index.php" enctype="multipart/form-data" method="post" id="feedback-form">
<p>Вы можете отправить нам Ваш прайс в формате EXCEL</p> <br><br>
<label for="nameFF">Имя:</label>
<input type="text" name="nameFF" id="nameFF" required placeholder="например, Иван Иванович Иванов" x-autocompletetype="name" class="w100 border">
<label for="contactFF">Email:</label>
<input type="email" name="contactFF" id="contactFF" required placeholder="например, ivan@yandex.ru" x-autocompletetype="email" class="w100 border">
<label for="numberFF">Номер:</label>
<input type="number" name="numberFF" id="numberFF" required placeholder="например, 7 908-555-55-55" x-autocompletetype="text" class="w100 border">
<label for="fileFF">Файл:</label>
<input type="file" name="fileFF[]" multiple id="fileFF" class="w100">
<label for="messageFF">Сообщение:</label>
<textarea name="messageFF" id="messageFF" required rows="5" placeholder="Написать предложение" class="w100 border"></textarea>
<br>
<input value="Отправить" type="submit" id="submitFF">
</form>
           <div class="clearfix grpelem" id="u1788-8" data-muse-uid="U1788"><!-- content -->
            <!-- m_editable region-id="editable-static-tag-U1788" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->

<!-- /m_editable -->
           </div>
          </div>
          <div class="clearfix grpelem" id="u1789-4" data-muse-uid="U1789"><!-- content -->
           <!-- m_editable region-id="editable-static-tag-U1789" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
 
<!-- /m_editable -->
          </div>
         </div>
        </div>
       </div>
      </div>
      <div class="popup_anchor">
       <div class="PamphletCloseButton PamphletLightboxPart popup_element rounded-corners clearfix" id="u146"><!-- group -->
        <div class="clearfix grpelem" id="u147-4" data-muse-uid="U147"><!-- content -->
         <!-- m_editable region-id="editable-static-tag-U147" template="index.html" data-type="html" data-ice-options="disableImageResize,none,clickable" -->
         <p>x</p>
<!-- /m_editable -->
        </div>
       </div>
      </div>
     </div>
     <div class="PamphletWidget clearfix widget_invisible grpelem" id="pamphletu1475"><!-- none box -->
      <div class="ThumbGroup clearfix grpelem" id="u1478"><!-- none box -->
       <div class="popup_anchor">
        <div class="Thumb popup_element" id="u1479"><!-- simple frame --></div>
       </div>
      </div>
      <div class="popup_anchor" id="u1483popup">
       <div class="ContainerGroup rgba-background clearfix" id="u1483"><!-- stack box -->
        <div class="Container clearfix grpelem" id="u1484"><!-- column -->
         <div class="clearfix colelem" id="u1524-18" data-muse-uid="U1524"><!-- content -->
          <!-- m_editable region-id="editable-static-tag-U1524" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
          <p id="u1524-2">Мы готовы предоставить:</p>
          <p id="u1524-3">&nbsp;</p>
          <p id="u1524-7"><span id="u1524-4">1) Условия хранения при -25</span><span id="u1524-5">°</span><span id="u1524-6"> С</span></p>
          <p id="u1524-9">2) Продажа вашего товара через нашу сбытовую структуру</p>
          <p id="u1524-11">3) Открытие филиала или представительства Вашей компании под ключ.</p>
          <p id="u1524-12">&nbsp;</p>
          <p id="u1524-13">&nbsp;</p>
          <p id="u1524-15">ЗАПОЛНИТЕ ПОЖАЛУЙСТА:</p>
          <p>&nbsp;</p>
<!-- /m_editable -->
         </div>
         <div class="clearfix colelem" id="u1485"><!-- group -->
          <div class="clearfix grpelem" id="u1486"><!-- group -->
           <form class="form-grp clearfix grpelem" id="widgetu1487" method="post" enctype="multipart/form-data" action="scripts/form-u1487.php"><!-- none box -->
            <div class="fld-grp clearfix grpelem" id="widgetu1495" data-required="true"><!-- none box -->
             <label class="fld-label actAsDiv clearfix grpelem" id="u1496-4" data-muse-uid="U1496" for="widgetu1495_input"><!-- content --><!-- m_editable region-id="editable-static-tag-U1496" template="index.html" data-type="html" data-ice-options="disableImageResize,none" --><span class="actAsPara">Имя</span><!-- /m_editable --></label>
             <span class="fld-input NoWrap actAsDiv clearfix grpelem" id="u1497-3" data-muse-uid="U1497"><!-- content --><!-- m_editable region-id="editable-static-tag-U1497" template="index.html" data-type="html" data-ice-options="disableImageResize,none" --><input class="wrapped-input" type="text" spellcheck="false" id="widgetu1495_input" name="custom_U1495" tabindex="110"/><!-- /m_editable --></span>
            </div>
          
            <div class="clearfix grpelem" id="u1492-4" data-muse-uid="U1492"><!-- content -->
             <!-- m_editable region-id="editable-static-tag-U1492" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
             <p>Отправка формы…</p>
<!-- /m_editable -->
            </div>
            <div class="clearfix grpelem" id="u1494-4" data-muse-uid="U1494"><!-- content -->
             <!-- m_editable region-id="editable-static-tag-U1494" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
             <p>На сервере произошла ошибка.</p>
<!-- /m_editable -->
            </div>
            <div class="clearfix grpelem" id="u1499-6" data-muse-uid="U1499"><!-- content -->
             <!-- m_editable region-id="editable-static-tag-U1499" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
             <p>Спасибо!</p>
             <p>наш&nbsp; специалист свяжется с вами.</p>
<!-- /m_editable -->
            </div>
            <input class="submit-btn NoWrap grpelem" id="u1493-13" type="submit" value="" tabindex="113"/><!-- state-based BG images -->
            <div class="fld-grp clearfix grpelem" id="widgetu1500" data-required="true"><!-- none box -->
             <label class="fld-label actAsDiv clearfix grpelem" id="u1502-4" data-muse-uid="U1502" for="widgetu1500_input"><!-- content --><!-- m_editable region-id="editable-static-tag-U1502" template="index.html" data-type="html" data-ice-options="disableImageResize,none" --><span class="actAsPara">Телефон</span><!-- /m_editable --></label>
             <span class="fld-input NoWrap actAsDiv clearfix grpelem" id="u1503-3" data-muse-uid="U1503"><!-- content --><!-- m_editable region-id="editable-static-tag-U1503" template="index.html" data-type="html" data-ice-options="disableImageResize,none" --><input class="wrapped-input" type="text" id="widgetu1500_input" name="custom_U1500" tabindex="112"/><!-- /m_editable --></span>
            </div>
           </form>
          </div>
         </div>
        </div>
       </div>
      </div>
      <div class="popup_anchor">
       <div class="PamphletCloseButton PamphletLightboxPart popup_element rounded-corners clearfix" id="u1476"><!-- group -->
        <div class="clearfix grpelem" id="u1477-4" data-muse-uid="U1477"><!-- content -->
         <!-- m_editable region-id="editable-static-tag-U1477" template="index.html" data-type="html" data-ice-options="disableImageResize,none,clickable" -->
         <p>x</p>
<!-- /m_editable -->
        </div>
       </div>
      </div>
     </div>
    </div>
    
    <div class="verticalspacer"></div>
    <div class="clearfix colelem" id="pu474"><!-- group -->
     <div class="browser_width grpelem" id="u474-bw">
      <div class="museBGSize" id="u474"><!-- simple frame --></div>
     </div>
  
     <div class="clearfix grpelem" id="u482-4" data-muse-uid="U482"><!-- content -->
      <!-- m_editable region-id="editable-static-tag-U482" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
      
<!-- /m_editable -->
     </div>
    </div>
   </div>
  </div>
  <div class="preload_images">
   <img class="preload" src="images/butt-5-hover-u1423-13-r.png" alt=""/>
   <img class="preload" src="images/butt-5-hover-u1423-13-m.png" alt=""/>
   <img class="preload" src="images/butt-5-u1423-13-fs.png" alt=""/>
   <img class="preload" src="images/butt-2-hover.png" alt=""/>
   <img class="preload" src="images/butt-2-hover2.png" alt=""/>
   <img class="preload" src="images/butt-1-hover.png" alt=""/>
   <img class="preload" src="images/butt-1-hover2.png" alt=""/>
   <img class="preload" src="images/butt-5-hover-u783-13-r.png" alt=""/>
   <img class="preload" src="images/butt-5-hover-u783-13-m.png" alt=""/>
   <img class="preload" src="images/butt-5-u783-13-fs.png" alt=""/>
   <img class="preload" src="images/butt-5-hover-u1068-13-r.png" alt=""/>
   <img class="preload" src="images/butt-5-hover-u1068-13-m.png" alt=""/>
   <img class="preload" src="images/butt-5-u1068-13-fs.png" alt=""/>
   <img class="preload" src="images/butt-5-hover-u1133-13-r.png" alt=""/>
   <img class="preload" src="images/butt-5-hover-u1133-13-m.png" alt=""/>
   <img class="preload" src="images/butt-5-u1133-13-fs.png" alt=""/>
   <img class="preload" src="images/butt-5-hover-u1198-13-r.png" alt=""/>
   <img class="preload" src="images/butt-5-hover-u1198-13-m.png" alt=""/>
   <img class="preload" src="images/butt-5-u1198-13-fs.png" alt=""/>
   <img class="preload" src="images/butt-5-hover-u1263-13-r.png" alt=""/>
   <img class="preload" src="images/butt-5-hover-u1263-13-m.png" alt=""/>
   <img class="preload" src="images/butt-5-u1263-13-fs.png" alt=""/>
   <img class="preload" src="images/butt-5-hover-u1328-13-r.png" alt=""/>
   <img class="preload" src="images/butt-5-hover-u1328-13-m.png" alt=""/>
   <img class="preload" src="images/butt-5-u1328-13-fs.png" alt=""/>
   <img class="preload" src="images/butt-5-hover-u1761-13-r.png" alt=""/>
   <img class="preload" src="images/butt-5-hover-u1761-13-m.png" alt=""/>
   <img class="preload" src="images/butt-5-u1761-13-fs.png" alt=""/>
   <img class="preload" src="images/butt-6-hover.png" alt=""/>
   <img class="preload" src="images/butt-5-hover-u1493-13-r.png" alt=""/>
   <img class="preload" src="images/butt-5-hover-u1493-13-m.png" alt=""/>
   <img class="preload" src="images/butt-5-u1493-13-fs.png" alt=""/>
  </div>
  
<style>
	#block_fon {
		position:relative;
		top:-40px;
		left:150px;
		background-image: url("../images/bg7.png");
    	background-repeat: no-repeat;
    	background-size: cover;
	}
	#u1479 {
	display:none;
	}
	#footer_img {
		position:relative;
		z-index:1;	
	}
	footer#footer {
    background-image: url("../images/bg7.png");
    background-repeat: no-repeat;
    background-size: cover;
}
footer#footer {
    width: 100%;
}
#first, #second, #third, #fourth, #fiveth, #sixth, #seventh, #footer {
    background-size: cover;
    padding-bottom: 30px;
}
	
</style>

  <!-- JS includes -->
  <script type="text/javascript">
   if (document.location.protocol != 'https:') document.write('\x3Cscript src="http://musecdn.businesscatalyst.com/scripts/4.0/jquery-1.8.3.min.js" type="text/javascript">\x3C/script>');
</script>
  <script type="text/javascript">
   window.jQuery || document.write('\x3Cscript src="scripts/jquery-1.8.3.min.js" type="text/javascript">\x3C/script>');
</script>
  <script src="scripts/museutils.js?521960461" type="text/javascript"></script>
  <script src="scripts/webpro.js?220831917" type="text/javascript"></script>
  <script src="scripts/musewpslideshow.js?224651946" type="text/javascript"></script>
  <script src="scripts/jquery.museoverlay.js?276313855" type="text/javascript"></script>
  <script src="scripts/touchswipe.js?325405309" type="text/javascript"></script>
  <script src="scripts/jquery.musepolyfill.bgsize.js?349594875" type="text/javascript"></script>
  <script src="scripts/jquery.watch.js?56779320" type="text/javascript"></script>
  <!-- Other scripts -->
  <script type="text/javascript">
   $(document).ready(function() { try {
(function(){var a={},b=function(a){if(a.match(/^rgb/))return a=a.replace(/\s+/g,"").match(/([\d\,]+)/gi)[0].split(","),(parseInt(a[0])<<16)+(parseInt(a[1])<<8)+parseInt(a[2]);if(a.match(/^\#/))return parseInt(a.substr(1),16);return 0};(function(){$('link[type="text/css"]').each(function(){var b=($(this).attr("href")||"").match(/\/?css\/([\w\-]+\.css)\?(\d+)/);b&&b[1]&&b[2]&&(a[b[1]]=b[2])})})();(function(){$("body").append('<div class="version" style="display:none; width:1px; height:1px;"></div>');
for(var c=$(".version"),d=0;d<Muse.assets.required.length;){var f=Muse.assets.required[d],g=f.match(/([\w\-\.]+)\.(\w+)$/),k=g&&g[1]?g[1]:null,g=g&&g[2]?g[2]:null;switch(g.toLowerCase()){case "css":k=k.replace(/\W/gi,"_").replace(/^([^a-z])/gi,"_$1");c.addClass(k);var g=b(c.css("color")),h=b(c.css("background-color"));g!=0||h!=0?(Muse.assets.required.splice(d,1),"undefined"!=typeof a[f]&&(g!=a[f]>>>24||h!=(a[f]&16777215))&&Muse.assets.outOfDate.push(f)):d++;c.removeClass(k);break;case "js":k.match(/^jquery-[\d\.]+/gi)&&
typeof $!="undefined"?Muse.assets.required.splice(d,1):d++;break;default:throw Error("Unsupported file type: "+g);}}c.remove();if(Muse.assets.outOfDate.length||Muse.assets.required.length)c="Некоторые файлы на сервере могут отсутствовать или быть некорректными. Очистите кэш-память браузера и повторите попытку. Если проблему не удается устранить, свяжитесь с разработчиками сайта.",(d=location&&location.search&&location.search.match&&location.search.match(/muse_debug/gi))&&Muse.assets.outOfDate.length&&(c+="\nOut of date: "+Muse.assets.outOfDate.join(",")),d&&Muse.assets.required.length&&(c+="\nMissing: "+Muse.assets.required.join(",")),alert(c)})()})();
/* body */
Muse.Utils.transformMarkupToFixBrowserProblemsPreInit();/* body */
Muse.Utils.prepHyperlinks(true);/* body */
Muse.Utils.initWidget('#widgetu1410', function(elem) { new WebPro.Widget.Form(elem, {validationEvent:'submit',errorStateSensitivity:'high',fieldWrapperClass:'fld-grp',formSubmittedClass:'frm-sub-st',formErrorClass:'frm-subm-err-st',formDeliveredClass:'frm-subm-ok-st',notEmptyClass:'non-empty-st',focusClass:'focus-st',invalidClass:'fld-err-st',requiredClass:'fld-err-st',ajaxSubmit:true}); });/* #widgetu1410 */
Muse.Utils.initWidget('#pamphletu112', function(elem) { new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'lightbox',event:'click',deactivationEvent:'none',autoPlay:false,displayInterval:3000,transitionStyle:'fading',transitionDuration:500,hideAllContentsFirst:false,shuffle:false,enableSwipe:true,resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false}); });/* #pamphletu112 */
Muse.Utils.resizeHeight()/* resize height */
Muse.Utils.initWidget('#pamphletu216', function(elem) { new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'loose',event:'mouseover',deactivationEvent:'mouseout_trigger',autoPlay:false,displayInterval:3000,transitionStyle:'fading',transitionDuration:500,hideAllContentsFirst:true,shuffle:false,enableSwipe:true,resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false}); });/* #pamphletu216 */
Muse.Utils.initWidget('#widgetu773', function(elem) { new WebPro.Widget.Form(elem, {validationEvent:'submit',errorStateSensitivity:'high',fieldWrapperClass:'fld-grp',formSubmittedClass:'frm-sub-st',formErrorClass:'frm-subm-err-st',formDeliveredClass:'frm-subm-ok-st',notEmptyClass:'non-empty-st',focusClass:'focus-st',invalidClass:'fld-err-st',requiredClass:'fld-err-st',ajaxSubmit:true}); });/* #widgetu773 */
Muse.Utils.initWidget('#widgetu1021', function(elem) { new WebPro.Widget.Form(elem, {validationEvent:'submit',errorStateSensitivity:'high',fieldWrapperClass:'fld-grp',formSubmittedClass:'frm-sub-st',formErrorClass:'frm-subm-err-st',formDeliveredClass:'frm-subm-ok-st',notEmptyClass:'non-empty-st',focusClass:'focus-st',invalidClass:'fld-err-st',requiredClass:'fld-err-st',ajaxSubmit:true}); });/* #widgetu1021 */
Muse.Utils.initWidget('#widgetu1086', function(elem) { new WebPro.Widget.Form(elem, {validationEvent:'submit',errorStateSensitivity:'high',fieldWrapperClass:'fld-grp',formSubmittedClass:'frm-sub-st',formErrorClass:'frm-subm-err-st',formDeliveredClass:'frm-subm-ok-st',notEmptyClass:'non-empty-st',focusClass:'focus-st',invalidClass:'fld-err-st',requiredClass:'fld-err-st',ajaxSubmit:true}); });/* #widgetu1086 */
Muse.Utils.initWidget('#widgetu1151', function(elem) { new WebPro.Widget.Form(elem, {validationEvent:'submit',errorStateSensitivity:'high',fieldWrapperClass:'fld-grp',formSubmittedClass:'frm-sub-st',formErrorClass:'frm-subm-err-st',formDeliveredClass:'frm-subm-ok-st',notEmptyClass:'non-empty-st',focusClass:'focus-st',invalidClass:'fld-err-st',requiredClass:'fld-err-st',ajaxSubmit:true}); });/* #widgetu1151 */
Muse.Utils.initWidget('#widgetu1216', function(elem) { new WebPro.Widget.Form(elem, {validationEvent:'submit',errorStateSensitivity:'high',fieldWrapperClass:'fld-grp',formSubmittedClass:'frm-sub-st',formErrorClass:'frm-subm-err-st',formDeliveredClass:'frm-subm-ok-st',notEmptyClass:'non-empty-st',focusClass:'focus-st',invalidClass:'fld-err-st',requiredClass:'fld-err-st',ajaxSubmit:true}); });/* #widgetu1216 */
Muse.Utils.initWidget('#widgetu1281', function(elem) { new WebPro.Widget.Form(elem, {validationEvent:'submit',errorStateSensitivity:'high',fieldWrapperClass:'fld-grp',formSubmittedClass:'frm-sub-st',formErrorClass:'frm-subm-err-st',formDeliveredClass:'frm-subm-ok-st',notEmptyClass:'non-empty-st',focusClass:'focus-st',invalidClass:'fld-err-st',requiredClass:'fld-err-st',ajaxSubmit:true}); });/* #widgetu1281 */
Muse.Utils.initWidget('#widgetu1727', function(elem) { new WebPro.Widget.Form(elem, {validationEvent:'submit',errorStateSensitivity:'high',fieldWrapperClass:'fld-grp',formSubmittedClass:'frm-sub-st',formErrorClass:'frm-subm-err-st',formDeliveredClass:'frm-subm-ok-st',notEmptyClass:'non-empty-st',focusClass:'focus-st',invalidClass:'fld-err-st',requiredClass:'fld-err-st',ajaxSubmit:true}); });/* #widgetu1727 */
Muse.Utils.initWidget('#pamphletu143', function(elem) { new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'lightbox',event:'click',deactivationEvent:'none',autoPlay:false,displayInterval:3000,transitionStyle:'fading',transitionDuration:500,hideAllContentsFirst:false,shuffle:false,enableSwipe:true,resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false}); });/* #pamphletu143 */
Muse.Utils.initWidget('#widgetu1487', function(elem) { new WebPro.Widget.Form(elem, {validationEvent:'submit',errorStateSensitivity:'high',fieldWrapperClass:'fld-grp',formSubmittedClass:'frm-sub-st',formErrorClass:'frm-subm-err-st',formDeliveredClass:'frm-subm-ok-st',notEmptyClass:'non-empty-st',focusClass:'focus-st',invalidClass:'fld-err-st',requiredClass:'fld-err-st',ajaxSubmit:true}); });/* #widgetu1487 */
Muse.Utils.initWidget('#widgetu1489', function(elem) { new WebPro.Widget.Form(elem, {validationEvent:'submit',errorStateSensitivity:'high',fieldWrapperClass:'fld-grp',formSubmittedClass:'frm-sub-st',formErrorClass:'frm-subm-err-st',formDeliveredClass:'frm-subm-ok-st',notEmptyClass:'non-empty-st',focusClass:'focus-st',invalidClass:'fld-err-st',requiredClass:'fld-err-st',ajaxSubmit:true}); });/* #widgetu1489 */
Muse.Utils.initWidget('#pamphletu1475', function(elem) { new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'lightbox',event:'click',deactivationEvent:'none',autoPlay:false,displayInterval:3000,transitionStyle:'fading',transitionDuration:500,hideAllContentsFirst:false,shuffle:false,enableSwipe:true,resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false}); });/* #pamphletu1475 */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
} catch(e) { if (e && 'function' == typeof e.notify) e.notify(); else Muse.Assert.fail('Error calling selector function:' + e); }});
</script>

   </body>
</html>
<div id="blockfondes" onclick="closetr()"></div>
<div id="whitefondes">
<div class="LightboxContent"><div class="ContainerGroup rgba-background clearfix" style="width: 581px; height: 462px; position: absolute; padding: 0px; left: 0px; top: 0px; border-width: 0px; background: none;"><!-- stack box -->
        
       <div class="Container clearfix grpelem wp-panel wp-panel-active" id="u1484" style="position: absolute; left: 0px; top: 0px;"><!-- column -->
         <div class="clearfix colelem" id="u1524-18" data-muse-uid="U1524"><!-- content -->
          <!-- m_editable region-id="editable-static-tag-U1524" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
          <p id="u1524-2">Мы готовы предоставить:</p>
          <p id="u1524-3">&nbsp;</p>
          <p id="u1524-7"><span id="u1524-4">1) Условия хранения при -25</span><span id="u1524-5">°</span><span id="u1524-6"> С</span></p>
          <p id="u1524-9">2) Продажа вашего товара через нашу сбытовую структуру</p>
          <p id="u1524-11">3) Открытие филиала или представительства Вашей компании под ключ.</p>
          <p id="u1524-12">&nbsp;</p>
          <p id="u1524-13">&nbsp;</p>
          <p id="u1524-15">ЗАПОЛНИТЕ ПОЖАЛУЙСТА:</p>
          <p>&nbsp;</p>
<!-- /m_editable -->
         </div>
         <div class="clearfix colelem" id="u1485"><!-- group -->
          <div class="clearfix grpelem" id="u1486"><!-- group -->
           <form class="form-grp clearfix grpelem" id="widgetu1489" method="post" enctype="multipart/form-data" action="scripts/form-u1487.php"><!-- none box -->
            <div class="fld-grp clearfix grpelem" id="widgetu1495" data-required="true"><!-- none box -->
             <label class="fld-label actAsDiv clearfix grpelem" id="u1496-4" data-muse-uid="U1496" for="widgetu1495_input"><!-- content --><!-- m_editable region-id="editable-static-tag-U1496" template="index.html" data-type="html" data-ice-options="disableImageResize,none" --><span class="actAsPara">Имя</span><!-- /m_editable --></label>
             <span class="fld-input NoWrap actAsDiv clearfix grpelem" id="u1497-3" data-muse-uid="U1497"><!-- content --><!-- m_editable region-id="editable-static-tag-U1497" template="index.html" data-type="html" data-ice-options="disableImageResize,none" --><input class="wrapped-input" type="text" spellcheck="false" id="widgetu1495_input" name="custom_U1495" tabindex="110"><!-- /m_editable --></span>
            </div>
          
            <div class="clearfix grpelem" id="u1492-4" data-muse-uid="U1492"><!-- content -->
             <!-- m_editable region-id="editable-static-tag-U1492" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
             <p>Отправка формы…</p>
<!-- /m_editable -->
            </div>
            <div class="clearfix grpelem" id="u1494-4" data-muse-uid="U1494"><!-- content -->
             <!-- m_editable region-id="editable-static-tag-U1494" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
             <p>На сервере произошла ошибка.</p>
<!-- /m_editable -->
            </div>
            <div class="clearfix grpelem" id="u1499-6" data-muse-uid="U1499"><!-- content -->
             <!-- m_editable region-id="editable-static-tag-U1499" template="index.html" data-type="html" data-ice-options="disableImageResize,none" -->
             <p>Спасибо!</p>
             <p>наш&nbsp; специалист свяжется с вами.</p>
<!-- /m_editable -->
            </div>
            <input class="submit-btn NoWrap grpelem" id="u1493-13" type="submit" value="" tabindex="113"><!-- state-based BG images -->
            <div class="fld-grp clearfix grpelem" id="widgetu1500" data-required="true"><!-- none box -->
             <label class="fld-label actAsDiv clearfix grpelem" id="u1502-4" data-muse-uid="U1502" for="widgetu1500_input"><!-- content --><!-- m_editable region-id="editable-static-tag-U1502" template="index.html" data-type="html" data-ice-options="disableImageResize,none" --><span class="actAsPara">Телефон</span><!-- /m_editable --></label>
             <span class="fld-input NoWrap actAsDiv clearfix grpelem" id="u1503-3" data-muse-uid="U1503"><!-- content --><!-- m_editable region-id="editable-static-tag-U1503" template="index.html" data-type="html" data-ice-options="disableImageResize,none" --><input class="wrapped-input" type="text" id="widgetu1500_input" name="custom_U1500" tabindex="112"><!-- /m_editable --></span>
            </div>
           </form>
          </div>
         </div>
        </div></div><div class="PamphletCloseButton PamphletLightboxPart popup_element rounded-corners clearfix" id="u1476" style="top: -7.99755859375px; left: 562.016967773438px;"><!-- group -->
        <div class="clearfix grpelem" id="u1477-4" data-muse-uid="U1477"><!-- content -->
         <!-- m_editable region-id="editable-static-tag-U1477" template="index.html" data-type="html" data-ice-options="disableImageResize,none,clickable" -->
         <p onclick="closetr()">x</p>
<!-- /m_editable -->
        </div>
       </div></div>
</div>
