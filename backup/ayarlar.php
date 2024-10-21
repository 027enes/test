<?php require_once( 'admin/cms.php' ); ?>
<cms:template title='Genel Ayarlar' order='20' > 
<cms:editable name='banner' label='BANNER' desc='Sayfalar İçin Bannerler' type='group' order='2' />
<cms:editable group='banner' type='image' width='1400' height='308' crop='1' name='kurumsal' label='Kurumsal Sayfası İçin Banner (1600px 170px)' />
<cms:editable group='banner' type='image' width='1400' height='308' crop='1' name='urunler' label='Kampanyalar Sayfası İçin Banner (1600px 170px)' />
<cms:editable group='banner' type='image' width='1400' height='308' crop='1' name='iletisim' label='İletişim Sayfası İçin Banner (1600px 170px)' />
<cms:editable group='banner' type='image' width='1400' height='308' crop='1' name='marka' label='Markalarımız Sayfası İçin Banner (1600px 170px)' />

<cms:editable name='form' label='İletişim Formu Ayarları' desc='İletişim Formu ile ilgili Ayarlar' type='group' order='3' />
<cms:editable name='form_gmail_k' label='Gmail Kullanıcı Adı' desc='Mail Formumuz Gmail ile çalışmaktadır bir adet gmail kullanıcı hesabı girmeniz gerekir.' type='text' group='form' />
<cms:editable name='form_gmail_s' label='Gmail Kulanıcı Şifresi' desc='Mail Formumuz Gmail ile çalışmaktadır bir adet gmail kullanıcı hesabı girmeniz gerekir.' type='password' group='form' />
<cms:editable name='form_gidecek' label='Formların Gideceği Mail Adresi' desc='Doldurulan iletişim formlarının gideceği mail adres.' type='text' group='form' />
<cms:editable name='form_gonderici_adi' label='Formları Gönderen Kişi ' desc='Gelen Mailler Kimin Tarafından Geldiğine dair.' type='text' group='form' />
<cms:editable name='form_baslik' label='Gelen Formların Konu Başlığı' desc='Doldurulan formlar size hangi başlıkla mail olarak gelsin' type='text' group='form' />
<cms:editable name='form_basarili' label='Başarılı Mesajı' desc='Form başarılı bir şekilde bize mail atılmış ise gönderen müşteriye iletilecek mesaj.' type='text' group='form' />  
<cms:editable  name='base_seo' label='SEO' desc='Genel Seo Bilgileri' type='group' order='4' />
<cms:editable name='meta_title' label='Sayfa Başlığı' type='text' group='base_seo' />
<cms:editable name='meta_keywords' label='Meta Keywords - 7-8 kelime, virgül ile ayıralım ' type='text' group='base_seo' />
<cms:editable name='meta_description' label='Meta Açıklaması - 180 kelime en fazla' type='textarea' group='base_seo' />
</cms:template>
<?php COUCH::invoke(); ?> 