<?php
	
	if ( !defined('K_COUCH_DIR') ) die(); // cannot be loaded directly
	
	///////////EDIT BELOW THIS////////////////////////////////////////
	
	// Header
	$t['greeting'] = 'Merhaba';
	$t['view_site'] = 'Siteyi Görüntüle';
	$t['logout'] = 'Çıkış Yap';
	$t['javascript_msg'] = 'Javascript is disabled or is not supported by your browser.<br>
							Please upgrade your browser or <a title="Enable Javascript in your browser" href="http://www.google.com/support/bin/answer.py?answer=23852"><b>enable Javascript</b></a> to use the Admin Panel.';
    $t['add_new'] = 'Yeni Ekle';   
	$t['add_new_page'] = 'Yeni bir Sayfa Ekle';	
	$t['add_new_user'] = 'Yeni bir Kullanıcı Ekle';
	$t['view'] = 'Görüntüle'; 	
	$t['list'] = 'Liste'; 
	$t['edit'] = 'Düzenle'; 
	$t['delete'] = 'Sil';
	$t['delete_selected'] = 'Seçilenleri Sil';
	$t['advanced_settings'] = 'Gelişmiş Ayarlar';
	
	// Sidebar
	$t['comment'] = 'Yorum';
	$t['comments'] = 'Yorumlar';
	$t['manage_comments'] = 'Yorum Yöneticisi';
	$t['users'] = 'Kullanıcılar';
	$t['manage_users'] = 'Kullanıcı Yönetimi';
	
	// List Pages
	$t['view_all_folders'] = 'Tüm Klasörleri Göster';
	$t['filter'] = 'Süz';
	$t['showing'] = 'Showing';
	$t['title'] = 'Başlık';
	$t['folder'] = 'Klasör';
	$t['date'] = 'Tarih';
	$t['actions'] = 'İşlemler';
	$t['no_pages_found'] = 'Sayfa Bulunamadı';
	$t['published'] = 'Yayınla';
	$t['unpublished'] = 'Yayınlama';
	$t['confirm_delete_page'] = 'Sayfayı Silmek İstediğinizden Eminmisiniz ?'; //No question mark please.
	$t['confirm_delete_selected_pages'] = 'Seçilen Sayfaları Silmek İstediğinizden Eminmisin ?';
	$t['remove_template'] = 'Şablonu Sil';
	$t['template_missing'] = 'Sayfa Şablonunda Eksiklerler Var Lütfen Bizimle iletişime geçiniz';
	$t['prev'] = 'Geri'; // Pagination Button
	$t['next'] = 'İleri'; // Pagination Button

	// Pages
	$t['welcome'] = 'Hoşgeldiniz';
	$t['no_regions_defined'] = 'Tanımlı herhangi bir düzenlenebilir alan yok.';
	$t['no_templates_defined'] = 'CMS Paneline bağlı herhangi bir şablon yok.';
	$t['access_level'] = 'Erişim Düzeyi';
	$t['superadmin'] = 'Super Yönetici';
	$t['admin'] = 'Yönetici';
	$t['authenticated_user_special'] = 'Özel Kullanıcı';
	$t['authenitcated_user'] = 'Kullanıcı';
	$t['unauthenticated_user'] = 'Herkes';
	$t['allow_comments'] = 'Allow users to comment';
	$t['status'] = 'Durum';
	$t['name'] = 'İsim';
	$t['title_desc'] = 'Sistem otamatik oluşturmaktadır bu alanı boş bırakabilirsiniz';
	$t['required'] = 'Gerekli'; // Required field
	$t['required_msg'] = 'Gerekli Alan Boş Bırakılamaz';
	$t['browse_server'] = 'Sunucuyu Gez'; 
	$t['view_image'] = 'Resmi Görüntüle';
	$t['thumb_created_auto'] = 'Will be created automatically'; 
	$t['recreate'] = 'Recreate'; 
	$t['thumb_recreated'] = 'Thumbnail recreated'; 
	$t['crop_from'] = 'cropping from'; 
	$t['top_left'] = 'Top Left';
	$t['top_center'] = 'Top Center';
	$t['top_right'] = 'Top Right';
	$t['middle_left'] = 'Middle Left';
	$t['middle'] = 'Middle';
	$t['middle_right'] = 'Middle Right';
	$t['bottom_left'] = 'Bottom Left';
	$t['bottom_center'] = 'Bottom Center';
	$t['bottom_right'] = 'Bottom Right';
	$t['view_thumbnail'] = 'View Thumbnail';
	$t['field_not_found'] = 'Field not found!'; 
	$t['delete_permanently'] = 'Delete Permanently?'; 
	$t['view_code'] = 'View Code'; 
	$t['confirm_delete_field'] = 'Are you sure you want to permanently delete this field?';
	$t['save'] = 'Kaydet'; 
	
	// Comments
	$t['all'] = 'All'; 
	$t['unapprove'] = 'Un-approve';
	$t['unapproved'] = 'Un-approved';
	$t['approve'] = 'Approve';
	$t['approved'] = 'Approved';
	$t['select-deselect'] = 'Tümünü Seç / Seçme';
	$t['confirm_delete_comment'] = 'Are you sure you want to delete this comment?';
	$t['confirm_delete_selected_comments'] = 'Are you sure you want to delete the selected comments?';
	$t['bulk_action'] = 'Bulk action with selected';
	$t['apply'] = 'Apply'; 
	$t['submitted_on'] = 'Submitted on'; 
	$t['email'] = 'E-Posta';
	$t['website'] = 'Website';
	$t['duplicate_content'] = 'Duplicate content';
	$t['insufficient_interval'] = 'Not sufficient interval between comments';
	
	// Users
	$t['user_name_restrictions'] = 'Sadece Küçük karakterlerden oluşmalıdır boşluk bırakmayınız';
	$t['display_name'] = 'Görünen Adı';
	$t['role'] = 'Kullanıcı Rolü';
	$t['no_users_found'] = 'Kullanıcı Bulunamadı';
	$t['confirm_delete_user'] = 'Bu kullanıcıyı silmek istediğinizden eminmisiniz'; //No question mark please.
	$t['confirm_delete_selected_users'] = 'Seçtiğiniz Kullanıcıları silmek istediğinizden eminmisiniz _';
	$t['disabled'] = 'Aktif Değil';
	$t['new_password'] = 'Yeni Şifre';
	$t['new_password_msg'] = 'Şifreyi değiştirmek istiyorsanız yenisini yazınız değiştirmek istemiyorsanız bu alanı boş bırakınız';
	$t['repeat_password'] = 'Tekrar Şifre ';
	$t['repeat_password_msg'] = 'Yeni Şifrenizi Tekrar Giriniz.';
	$t['user_name_exists'] = 'Bu kullanıcı adı kullanılamaz';
	$t['email_exists'] = 'Bu mail adresi kullanılamaz';

	// Login
	$t['user_name'] = 'Kullanıcı Adı';
	$t['password'] = 'Şifre';
	$t['login'] = 'Giriş Yap';
	$t['forgot_password'] = 'Şifremi Unuttum?';
	$t['prompt_cookies'] = 'Cookies must be enabled to use this CMS';
	$t['prompt_username'] = 'Lütfen Kullanıcı Adınızı Giriniz';
	$t['prompt_password'] = 'Lütfen Şifrenizi Giriniz';
	$t['invalid_credentials'] = 'Hatalı Kullanıcı adı veya Şifre Girdiniz';
	$t['account_disabled'] = 'Hesabınız Aktif Değil';
	$t['access_denied'] = 'İzniniz Yok';
	$t['insufficient_privileges'] = 'You do not have sufficient privileges to view the page requested.
									To see this page you must logout and login with sufficient privileges.'; 
	
	// Password recovery
	$t['recovery_prompt'] = 'Lütfen Kullanıcı Adınızı veya E-posta Adresinizi Giriniz<br />
							Yenileme Şifreniz E-posta adresine gönderilecektir.';
	$t['name_or_email'] = 'Kullanıcı adı veya E-posta Adresi';
	$t['submit'] = 'Gönder';
	$t['submit_error'] = 'Lütfen E-posta adresinizi veya şifrenizi girip enter tuşuna basınız';
	$t['no_such_user'] = 'No such user exists.';
	$t['reset_req_email_subject'] = 'Password reset requested';
	$t['reset_req_email_msg_0'] = 'A request was received to reset your password for the following site and username';
	$t['reset_req_email_msg_1'] = 'To confirm that the request was made by you please visit the following address, otherwise just ignore this email.';
	$t['email_failed'] = 'E-Mail could not be sent.';
	$t['reset_req_email_confirm'] = 'A confirmation email has been sent to you<br />
									Please check your email.';
	$t['invalid_key'] = 'Invalid key';
	$t['reset_email_subject'] = 'Your new password';
	$t['reset_email_msg_0'] = 'Your password has been resetted for the following site and username';
	$t['reset_email_msg_1'] = 'Once logged in you can change your password.';
	$t['reset_email_confirm'] = 'Your password has been resetted<br />
								Please check your email for the new password.';
	
	// Maintenance Mode
	$t['back_soon'] = '<h2>Maintenance Mode</h2>
						<p>
							Sorry for the inconvenience.<br />
							Our website is currently undergoing scheduled maintenance.<br />
							<b>Please try back after some time.</b>
						</p>';
	
	
	// Addendum to Version 1.1 /////////////////////////////////////
	// Admin Panel
	$t['admin_panel'] = 'Yönetici Paneli';
	$t['login_title'] = 'Fagusmedia Kontrol Paneli V2';
	
	// Folders
	$t['no_folders'] = 'Kategori Yok';
	$t['select_folder'] = 'Kategori Seç';
	$t['folders'] = 'Kategoriler';
	$t['manage_folders'] = 'Kategori Yönetimi';
	$t['add_new_folder'] = 'Yeni Kategori Ekle';
	$t['parent_folder'] = 'Ana Kategori';
	$t['weight'] = 'Sıralama';
	$t['weight_desc'] = 'Sıralama bölümünde - değerler vererek sayfa sıralamasını verebilirsiniz örneğin -100 altta 100 üstte çıkacaktır.';
	$t['desc'] = 'Kategori Açıklaması';
	$t['image'] = 'Kategori Resmi';
	$t['cannot_be_own_parent'] = 'Cannot be its own parent';
	$t['name_already_exists'] = 'Name already exists';
	$t['pages'] = 'Sayfalar';
	$t['none'] = 'Kategorisi Yok';
	$t['confirm_delete_folder'] = 'Kategoriyi silmek istediğinizden eminmisiniz ?'; //No question mark please.
	$t['confirm_delete_selected_folders'] = 'Seçtiğiniz kategorileri silmek istediğinizden eminmisiniz';
	
	// Drafts
	$t['draft_caps'] = 'TASLAK'; //in Caps
	$t['draft'] = 'Taslak';
	$t['drafts'] = 'Taslaklar';
	$t['create_draft'] = 'Taslak Oluştur';
	$t['create_draft_msg'] = 'Create a copy of this page (after saving changes)';
	$t['manage_drafts'] = 'Taslak Yönetimi'; //plural
	$t['update_original'] = 'Orjinali Güncelle';
	$t['update_original_msg'] = 'Copy the contents of this draft to the original page (and delete draft)';
	$t['recreate_original'] = 'Recreate Original';
	$t['no_drafts_found'] = 'No drafts found';
	$t['original_page'] = 'Orjinal Sayfa';
	$t['template'] = 'Template';
	$t['modified'] = 'Düzenle'; //date of last modification
	$t['preview'] = 'Görüntüle'; 
	$t['confirm_delete_draft'] = 'Are you sure you want to delete this draft?';
	$t['confirm_delete_selected_drafts'] = 'Are you sure you want to delete the selected drafts?';
	$t['confirm_apply_selected_drafts'] = 'Are you sure you want to apply the selected drafts?';
	$t['view_all_drafts'] = 'View all drafts';
	$t['original_deleted'] = 'ORIGINAL DELETED'; //in Caps
   
   // Addendum to Version 1.2 /////////////////////////////////////
   // Nested pages
   $t['parent_page'] = 'Parent Page';
   $t['page_weight_desc'] = 'Higher the value, lower the page will appear in list. Can be set to negative.';
   $t['active'] = 'Active';
   $t['inactive'] = 'Inactive';
   $t['menu'] = 'Menu';
   $t['menu_text'] = 'Menu Text';
   $t['show_in_menu'] = 'Show in menu';
   $t['not_shown_in_menu'] = 'Not shown in menu';
   $t['leave_empty'] = 'Leave empty to use page title';
   $t['menu_link'] = 'Menu Link';
   $t['link_url'] = 'This page points to the following location';
   $t['link_url_desc'] = 'Can be left empty';
   $t['separate_window'] = 'Open in separate window';
   $t['pointer_page'] = 'Pointer Page';   
   $t['points_to_another_page'] = 'Points to another page';
   $t['points_to'] = 'Points to';   
   $t['redirects'] = 'Redirects';
   $t['masquerades'] = 'Masquerades';
   $t['strict_matching'] = 'Mark as selected in menu for all pages below this link';
   $t['up'] = 'Move Up';
   $t['down'] = 'Move Down';
   $t['remove_template_completely'] = 'Delete all pages and drafts of this template to remove it completely';
   $t['remove_uncloned_template_completely'] = 'Delete all drafts of this template to remove it completely';

   // Addendum to Version 1.2.5 /////////////////////////////////////
   // Gallery
   $t['bulk_upload'] = ' Yükle';
   $t['folder_empty'] = 'Resim Bulunamadı. Lütfen resim yükle kısmından resim yükleyiniz.';
   $t['root'] = 'Ana Dizin';
   $t['item'] = 'Resim'; //single
   $t['items'] = 'Resimler'; //multiple 
   $t['container'] = 'Klasör'; //single 
   $t['containers'] = 'Klasörler'; //multiple 

   //
   $t['columns_missing'] = 'Some columns missing!'; 
   $t['confirm_delete_columns'] = 'Are you sure you want to permanently delete the missing columns?';
   $t['add_row'] = 'Yeni ekle';