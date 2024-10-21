<?php require_once( 'admin/cms.php' ); ?>
<cms:template title='Ürünler' clonable='1' dynamic_folders='1' order='3' >
<cms:editable  name='menu' label='Ürünler' desc='Ürünler Sayfası İçin İçerik' type='group' order='1' />
<cms:editable group='menu' type='richtext' name='icerik' no_xss_check='1' label='Ürünler İçerik (Deneme yazısıdır.)' />
<cms:editable group='menu' type='image'  name='res' label='Ürünler Resim Yükle (1024px 768px)'  width='1024' height='768' crop='1' />


<cms:repeatable group='menu' name='galeri' label='Çoklu Resim (Çuvallarn Resimleri) Yükleme Alanı' >
<cms:editable type='image'  name='resim' label='Çoklu Resim Yükle (Genişlik Yükseklik Eşit olsun)'   />
<cms:editable type='text'  name='ad' label='Adı'  />
</cms:repeatable>

<cms:editable name='page' label='SEO' desc='Sayfaya Özel Meta' type='group' order='5' />
<cms:editable name='meta_title' label='Sayfa Başlığı' type='text' group='base_seo' />
<cms:editable name='meta_keywords' label='Meta Keywords - 7-8 kelime, virgül ile ayıralım' type='text' group='base_seo' />
<cms:editable name='meta_description' label='Meta Açıklaması - 180 kelime en fazla' type='textarea' group='base_seo' />
</cms:template><!DOCTYPE html>
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
<div id="banner" style="background: url(<cms:pages masterpage='ayarlar.php'><cms:show urunler /></cms:pages>) no-repeat center center; background-size:cover;"><h1>Ürünler</h1></div>
<!-- ## BANNER -->

<!-- İÇERİK -->
<div id="icerik">
    <div class="sagmenu">
        <h1><img src="images/menu.png" alt="MENÜ"><span>MENÜ</span></h1>
        <ul>                          
            <cms:folders masterpage='urunler.php' orderby='weight' >
            <li><a href="<cms:show k_folder_link />"><cms:show k_folder_title /></a></li>
            </cms:folders>
        </ul>
    </div>
    
    <div class="icerik">
        <cms:if k_is_folder >
            <h1 class="baslik"><cms:show k_folder_title /></h1>
            <ul class="urunler">                  
                <cms:pages folder=k_folder_name include_subfolders='1' masterpage='urunler.php' custom_field='folder_weights'  order='asc'>
                <li><span><cms:show k_page_title /></span><a href="<cms:show k_page_link/>"><img src="<cms:show res />" alt="<cms:show k_page_title />"></a></li>
                </cms:pages>
            </ul>
            <div class="clear"></div>
        <cms:else />
            <h1 class="baslik"><cms:show k_page_title /></h1>
            <cms:show icerik />   
            <div class="clear"></div>
            <cms:show_repeatable 'galeri' >
            <cms:if resim !=''>
                <a class="fancybox" href="<cms:show resim />" data-fancybox-group="gallery" title="<cms:show ad />" >
                <img src="<cms:show resim />"  alt="<cms:show ad />" />
                </a>
            <cms:else /></cms:if>
            </cms:show_repeatable>  
            <div class="clear"></div>
       </cms:if>
    </div>
    <div class="clear"></div>
</div>

<!-- İÇERİK -->
<script type="text/javascript" src="js/jquery-1.12.1.min.js"></script>
<script>$(function(){var e=$(".open-menu");menu=$("nav ul"),menuHeight=menu.height(),$(e).on("click",function(e){e.preventDefault(),menu.slideToggle()}),$(window).resize(function(){var e=$(window).width();e>320&&menu.is(":hidden")&&menu.removeAttr("style")})});</script>
<script type="text/javascript" src="lib/jquery.mousewheel-3.0.6.pack.js"></script>
<script type="text/javascript" src="source/jquery.fancybox.js?v=2.1.5"></script>
<link rel="stylesheet" type="text/css" href="source/jquery.fancybox.css?v=2.1.5" media="screen" />
<link rel="stylesheet" type="text/css" href="source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
<script type="text/javascript" src="source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<link rel="stylesheet" type="text/css" href="source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
<script type="text/javascript" src="source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
<script type="text/javascript" src="source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
<script type="text/javascript">
$(document).ready(function() {
$('.fancybox').fancybox();
$(".fancybox-effects-a").fancybox({
helpers: {
title : {
type : 'outside'
},
overlay : {
speedOut : 0
}
}
});
$(".fancybox-effects-b").fancybox({
openEffect  : 'none',
closeEffect	: 'none',
helpers : {
title : {
type : 'over'
}
}
});
});
</script> 
<cms:embed 'footer.html' />
</body>
</html>


<?php COUCH::invoke(); ?> 