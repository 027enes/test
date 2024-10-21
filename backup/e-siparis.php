<?php require_once( 'admin/cms.php' ); ?>
<cms:template title='E-Sipariş' hidden='1' order='101' />

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="stylesheet" href="css/horizon.css" >
    
    <title><cms:get_custom_field 'company_name' masterpage='ayarlar.php' /><cms:if meta_title !=''><cms:show meta_title /><cms:else /><cms:get_custom_field 'meta_title' masterpage='ayarlar.php' /></cms:if></title>
<meta name="keywords" content="<cms:if meta_keywords !=''><cms:show meta_keywords /><cms:else /><cms:get_custom_field 'meta_keywords' masterpage='ayarlar.php' /></cms:if>">
<meta name="description" content="<cms:if meta_description !=''><cms:show meta_description /><cms:else /><cms:get_custom_field 'meta_description' masterpage='ayarlar.php' /></cms:if>">
<cms:embed 'header.html' />
   

<!-- BANNER -->
<div id="banner" style="background: url(<cms:pages masterpage='ayarlar.php'><cms:show iletisim /></cms:pages>) no-repeat center center; background-size:cover;"><h1>İletişim</h1></div>
<!-- ## BANNER -->

<!-- İÇERİK -->
<div id="icerik">
    <div class="sagmenu">
        <h1><img src="images/menu.png" alt="MENÜ"><span>MENÜ</span></h1>
        <ul>
            <li><a href="iletisim.php">İLETİŞİM BİLGİLERİ</a></li>
            <li><a href="iletisim-formu.php">İLETİŞİM FORMU</a></li>
            <li><a href="e-siparis.php">E-SİPARİŞ</a></li>
        </ul>
    </div>
    
    <div class="icerik">
        <h1 class="baslik">E-SİPARİŞ</h1>
        <div class="yazi">
           
           
           
                   <cms:php>
        if ( $_POST ){
        $ad = htmlspecialchars(trim($_POST['ad']));
        $soyad = htmlspecialchars(trim($_POST['soyad']));
        $telefon = htmlspecialchars(trim($_POST['telefon']));
        $email = htmlspecialchars(trim($_POST['email']));
        $mesaj = htmlspecialchars(trim($_POST['mesaj']));
        $sec = htmlspecialchars(trim($_POST['sec']));
        $sec1 = htmlspecialchars(trim($_POST['sec1']));

        include 'class.phpmailer.php';
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;
        $mail->SMTPSecure = 'tls';
        $mail->Username = '<cms:get_custom_field "form_gmail_k" masterpage="ayarlar.php" />';
        $mail->Password = '<cms:get_custom_field "form_gmail_s" masterpage="ayarlar.php" />';
        $mail->SetFrom($mail->Username, '<cms:get_custom_field "form_gonderici_adi" masterpage="ayarlar.php" /> ');
        $mail->AddAddress('<cms:get_custom_field "form_gidecek" masterpage="ayarlar.php" />', 'Kılıçzade');
        $mail->CharSet = 'UTF-8';
        $mail->Subject = '<cms:get_custom_field "form_baslik" masterpage="ayarlar.php" />';
        $content = '<div style="background: #eee; padding: 10px; color: #000;"><h1 style="font-size:20px; color:#000;">Kılıçzade Siteniz Üzerinden Bir Mesaj Aldınız </h1>
        <p>Gönderen :'.$ad.'</p><p>Soyadı :'.$soyad.'</p><p> Telefon: '.$telefon.'</p><p> E-mail :  '.$email.'</p><p> Mesaj :  '.$mesaj.'</p><p> Katagori :  '.$sec.'</p><p> Tür :  '.$sec1.'</p></div>';
        $mail->MsgHTML($content);
        if($mail->Send()) {
        // e-posta başarılı ile gönderildi
        echo '<div class="success"><cms:get_custom_field "form_basarili" masterpage="ayarlar.php" /></div>';
        } else {
        // bir sorun var, sorunu ekrana bastıralım
        echo '<div class="error">'.$mail->ErrorInfo.'</div>';
        }
        }
        </cms:php>
           
           
           
            <form method="post" class="form">
                <input type="text" name="ad" class="input" placeholder="Adınız" required>
                <input type="text" name="soyad" class="input" placeholder="Soyadnız" required>
                <input id="dene" name="telefon" type="text" class="input" placeholder="Telefon Numaranız" required>
                <input type="text" class="input" name="email" placeholder="E-Posta Adresiniz" required>
                <select name="sec" class="sec">
                    <cms:folders masterpage='urunler.php' orderby='weight' >
                    <option value="<cms:show k_folder_title />"><cms:show k_folder_title /></option> 
                    </cms:folders>
                </select>

                <select name="sec1" class="sec">
                    <cms:pages include_subfolders='1' masterpage='urunler.php' custom_field='folder_weights'  order='asc'>
                    <option value="<cms:show k_page_title />"><cms:show k_page_title /></option>  
                    </cms:pages>
                </select>
                <textarea class="txt" name="mesaj" placeholder="Mesajınız" required></textarea>
                <input class="gonder" type="submit" value="GÖNDER">
            </form>
        </div>
    </div>
    
    <div class="clear"></div>
</div>

<!-- İÇERİK -->





<script type="text/javascript" src="js/jquery-1.12.1.min.js"></script>
<script>$(function(){var e=$(".open-menu");menu=$("nav ul"),menuHeight=menu.height(),$(e).on("click",function(e){e.preventDefault(),menu.slideToggle()}),$(window).resize(function(){var e=$(window).width();e>320&&menu.is(":hidden")&&menu.removeAttr("style")})});</script>
<script src="js/maskedinput.min.js"></script>
<script>jQuery(document).ready(function(){jQuery("#dene").mask("(999) 999-9999"),App.initLogin()});</script>

<cms:embed 'footer.html' />


</body>
</html>
<?php COUCH::invoke(); ?> 