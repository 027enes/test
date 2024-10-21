<?php require_once( 'admin/cms.php' ); ?>
<cms:template title='Kurumsal' clonable='1' order='3' >
<cms:editable  name='kur' label='Kurumsal İçerik' desc='Kurumsal Sayfası İçerik' type='group' order='1' />
<cms:editable group='kur' type='richtext' toolbar='custom' custom_toolbar="<cms:embed 'my_toolbar.inc' />"  name='icerik' label='Kurumsal İçerik' />
<cms:editable group='kur' name='folder_weights' validator='decimal' search_type='decimal' type='text' label='Kurumsal Sıralaması' />

<cms:editable name='page' label='SEO' desc='Sayfaya Özel Meta' type='group' order='5' />
<cms:editable name='meta_title' label='Sayfa Başlığı' type='text' group='base_seo' />
<cms:editable name='meta_keywords' label='Meta Keywords - 7-8 kelime, virgül ile ayıralım' type='text' group='base_seo' />
<cms:editable name='meta_description' label='Meta Açıklaması - 180 kelime en fazla' type='textarea' group='base_seo' />
</cms:template><!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
-    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="stylesheet" href="css/horizon.css" >
<title><cms:get_custom_field 'company_name' masterpage='ayarlar.php' /><cms:if meta_title !=''><cms:show meta_title /><cms:else /><cms:get_custom_field 'meta_title' masterpage='ayarlar.php' /></cms:if></title>
<meta name="keywords" content="<cms:if meta_keywords !=''><cms:show meta_keywords /><cms:else /><cms:get_custom_field 'meta_keywords' masterpage='ayarlar.php' /></cms:if>">
<meta name="description" content="<cms:if meta_description !=''><cms:show meta_description /><cms:else /><cms:get_custom_field 'meta_description' masterpage='ayarlar.php' /></cms:if>">

<cms:embed 'header.html' /> 

<!-- BANNER -->
<div id="banner" style="background: url(<cms:pages masterpage='ayarlar.php'><cms:show kurumsal /></cms:pages>) no-repeat center center; background-size:cover;"><h1>KURUMSAL</h1></div>
<!-- ## BANNER -->

<!-- İÇERİK -->
<div id="icerik">
    <div class="sagmenu">
        <h1><img src="images/menu.png" alt="MENÜ"><span>MENÜ</span></h1>
        <ul>
           
                 <cms:pages custom_field='folder_weights' orderby='folder_weights' order='asc'>
                           <li><a href="<cms:show k_page_link />"><cms:show k_page_title /></a></li>
                           </cms:pages>
                           
                           
          
        </ul>
    </div>
    
    <div class="icerik">
        <h1 class="baslik"><cms:show k_page_title /></h1>
        <div class="yazi">
         <cms:if icerik !=''><cms:show icerik /><cms:else /></cms:if>
        </div>
    </div>
    
    <div class="clear"></div>
</div>

<!-- İÇERİK -->





<script type="text/javascript" src="js/jquery-1.12.1.min.js"></script>
<script>$(function(){var e=$(".open-menu");menu=$("nav ul"),menuHeight=menu.height(),$(e).on("click",function(e){e.preventDefault(),menu.slideToggle()}),$(window).resize(function(){var e=$(window).width();e>320&&menu.is(":hidden")&&menu.removeAttr("style")})});</script>


<cms:embed 'footer.html' /> 

</body>
</html>


<?php COUCH::invoke(); ?> 
