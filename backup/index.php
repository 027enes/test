<?php require_once( 'admin/cms.php' ); ?>
<cms:template title='Anasayfa' order='1' >
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

<!-- SLİDER -->


<div id="slider">
    <!-- pc -->        
    <div class="slider">           
        <ul class="bxslider">
                          
                           
                             <cms:pages masterpage='slider.php' custom_field='folder_weights' orderby='folder_weights' order='asc'>

               <li>
                <img src="<cms:show kres />" alt="<cms:show k_page_title />">
                <span class="sli">
                    <strong><cms:show k_page_title /></strong>
                    <em><cms:show aciklama /></em>
					
					
                   
					
					<cms:if link !=''> <a href="<cms:show link />">DEVAMI <img src="images/ok1.png" alt="Devamı"></a> <cms:else /> </cms:if>
                </span>
            </li>
                           </cms:pages>

            
        </ul>
    </div>
    <!-- pc -->
    
    
    <!-- mobil -->
    <div class="puf">
        <ul id="puf">
          
               
                                              <cms:pages masterpage='slider.php' custom_field='folder_weights' orderby='folder_weights' order='asc'>
  <li>
                <img src="<cms:show mres />" alt="<cms:show k_page_title />">
                <span class="sli">
                    <strong><cms:show k_page_title /></strong>
                    <em><cms:show k_page_title /></em>
                    <a href="<cms:show link />">DEVAMI <img src="images/ok1.png" alt="Devamı"></a>
                </span>
            </li>
                   </cms:pages>
        </ul>
    </div> 
    <!-- mobil -->
</div>
<!-- ## SLİDER -->




<script type="text/javascript" src="js/jquery-1.12.1.min.js"></script>
<script type="text/javascript" src="js/bxslider.min.js"></script>
<script type="text/javascript" src="js/slick.min.js"></script>
<script>$(function(){var e=$(".open-menu");menu=$("nav ul"),menuHeight=menu.height(),$(e).on("click",function(e){e.preventDefault(),menu.slideToggle()}),$(window).resize(function(){var e=$(window).width();e>320&&menu.is(":hidden")&&menu.removeAttr("style")})});</script>
<script>$(document).ready(function(){$('.bxslider').bxSlider({pager:true,auto:true,controls:true,pause:10000,mode:'fade',});$('#puf').bxSlider({controls:false,pager:false,auto:true,speed:1500,pause:6000,})});</script>
<script>$(".responsive").slick({infinite:!0,speed:300,slidesToShow:2,slidesToScroll:2,autoplay:!0,responsive:[{breakpoint:1024,settings:{slidesToShow:3,slidesToScroll:3,infinite:!0,dots:!0,autoplay:!0}},{breakpoint:768,settings:{slidesToShow:2,slidesToScroll:2,autoplay:!0}},{breakpoint:480,settings:{slidesToShow:1,slidesToScroll:1,autoplay:!0}}]});  </script>
<script>$(".bilgiler").slick({infinite:!0,speed:300,slidesToShow:5,slidesToScroll:5,autoplay:!0,responsive:[{breakpoint:1024,settings:{slidesToShow:5,slidesToScroll:5,infinite:!0,dots:!0,autoplay:!0}},{breakpoint:768,settings:{slidesToShow:3,slidesToScroll:3,autoplay:!0}},{breakpoint:480,settings:{slidesToShow:2,slidesToScroll:2,autoplay:!0}}]});  </script>
<script type="text/javascript" src="js/jquery.colorbox-min.js"></script>
<!--  
<script type="text/javascript">  
$(document).ready(function(){
setTimeout(function() {
$.fn.colorbox({html:'',open:true});  
}, 500);
});  
</script>
-->  

<cms:embed 'footer.html' /> 

</body>
</html>
<?php COUCH::invoke(); ?> 