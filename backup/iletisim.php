<?php require_once( 'admin/cms.php' ); ?>
<cms:template title='İletişim'  order='10' >
<cms:editable  name='iletisim' label='İletişim Bilgileri' desc='İletişim İçin İçerik' type='group' order='4' />
<cms:editable group='iletisim' type='text' name='fac' label='Facebook Linki' />
<cms:editable group='iletisim' type='text' name='twi' label='Twitter Linki' />
<cms:editable group='iletisim' type='text' name='ins' label='İnstagram Linki' />
<cms:editable group='iletisim' type='text' name='blink' label='Bayi Giriş Linki' />
<cms:repeatable group='iletisim' name='subeler' label='Çoklu Resim Yükleme Alanı' > 
    <cms:editable type='text' name='unvan' label='Ünvan' />
    <cms:editable type='text' name='adres' label='Adres' />
    <cms:editable type='text' name='tel' label='Telefon' />
    <cms:editable type='text' name='mail' label='E-mail' />
    <cms:editable type='text' name='fax' label='Fax' />
    <cms:editable type='text' name='mus' label='Müşteri Hizmetleri Numarası' />
    <cms:editable type='textarea' name='harita' no_xss_check='1' label='Harita Embed' />
</cms:repeatable>


    <cms:editable group='iletisim' type='text' name='unvan1' label='Footer Ünvan' />
    <cms:editable group='iletisim' type='text' name='adres1' label='Footer Adres' />
    <cms:editable group='iletisim' type='text' name='tel1' label='Footer Telefon' />
    <cms:editable group='iletisim' type='text' name='mail1' label='Footer E-mail' />
    <cms:editable group='iletisim' type='text' name='fax1' label='Footer Fax' />

<cms:editable name='page' label='SEO' desc='Sayfaya Özel Meta' type='group' order='5' />
<cms:editable name='meta_title' label='Sayfa Başlığı' type='text' group='base_seo' />
<cms:editable name='meta_keywords' label='Meta Keywords - 7-8 kelime, virgül ile ayıralım' type='text' group='base_seo' />
<cms:editable name='meta_description' label='Meta Açıklaması - 180 kelime en fazla' type='textarea' group='base_seo' />
</cms:template>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="stylesheet" href="css/horizon.css" ><title><cms:get_custom_field 'company_name' masterpage='ayarlar.php' /><cms:if meta_title !=''><cms:show meta_title /><cms:else /><cms:get_custom_field 'meta_title' masterpage='ayarlar.php' /></cms:if></title>
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
        </ul>
    </div>
    
    <div class="icerik">
        <h1 class="baslik">İLETİŞİM BİLGİLERİ</h1>
        <cms:show_repeatable 'subeler' >
        <div class="yazi">
            <ul class="iletisim">
<cms:if unvan !=''><li><cms:show unvan/></li><cms:else /></cms:if>
<cms:if adres !=''><li>ADRES : <cms:show adres /></li><cms:else /></cms:if>
<cms:if tel !=''><li>TEL : <a href="tel:<cms:show tel />"><cms:show tel /></a></li><cms:else /></cms:if>
<cms:if fax !=''><li>FAKS : <cms:show fax /></li><cms:else /></cms:if>
<cms:if mail !=''><li>MAİL : <a href="mailto:<cms:show mail />"><cms:show mail /></a></li><cms:else /></cms:if>
<cms:if mus !=''><li>MÜŞTERİ HİZMETLERİ : <a href="tel:<cms:show mus />"><cms:show mus /></a> </li><cms:else /></cms:if>
            </ul>
<cms:if harita !=''><div class="harita"><cms:show harita /></div><cms:else /></cms:if>
            <div class="clear"></div>
        </div>
        </cms:show_repeatable>
        
        
        
    </div>
    
    <div class="clear"></div>
</div>

<!-- İÇERİK -->





<script type="text/javascript" src="js/jquery-1.12.1.min.js"></script>
<script>$(function(){var e=$(".open-menu");menu=$("nav ul"),menuHeight=menu.height(),$(e).on("click",function(e){e.preventDefault(),menu.slideToggle()}),$(window).resize(function(){var e=$(window).width();e>320&&menu.is(":hidden")&&menu.removeAttr("style")})});</script>
<cms:embed 'footer.html'/>
</body>
</html>


<?php COUCH::invoke(); ?> 