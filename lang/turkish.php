<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2012 Coppermine Dev Team
  v1.0 originally written by Gregory Demar

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.
  
  ********************************************
  Coppermine version: 1.5.20
  $HeadURL: https://coppermine.svn.sourceforge.net/svnroot/coppermine/trunk/cpg1.5.x/lang/turkish.php $
  $Revision: 8359 $
**********************************************/

if (!defined('IN_COPPERMINE')) die('Not in Coppermine...');

// info about translators and translated language
$lang_translation_info['lang_name_turkish'] = 'Turkish';
$lang_translation_info['lang_name_native'] = 'Türkçe';
$lang_translation_info['lang_country_code'] = 'tr';
$lang_translation_info['trans_name'] = array('Sıtkı Özkurt', 'alanozu');
$lang_translation_info['trans_email'] = array('sitki@pragmamx.org', '');
$lang_translation_info['trans_website'] = array('http://www.pragmamx.org/', 'http://www.autocadokulu.net/');
$lang_translation_info['trans_date'] = '2011-05-09';

$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Bytes, Kibibytes, Mebibytes, Gibibytes
$lang_byte_units = array('Bytes', 'KB', 'MB', 'TB');
$lang_decimal_separator = array('.', ',');  //cpg1.5 // symbol used to separate thousands from hundreds and rounded number from  decimal place

// Day of weeks and months
$lang_day_of_week = array('Paz', 'Pzt', 'Sal', 'Çar', 'Per', 'Cum', 'Cmt');
$lang_month = array('Ock', 'Şub', 'Mrt', 'Nis', 'May', 'Haz', 'Tem', 'Agu', 'Eyl', 'Ekm', 'Kas', 'Arl');

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$lang_date['album'] = '%d.%B %Y';
$lang_date['lastcom'] = '%d.%m.%y, %H:%M';
$lang_date['lastup'] = '%d.%B %Y';
$lang_date['register'] = '%d.%B %Y';
$lang_date['lasthit'] = '%d.%B %Y, %H:%M';
$lang_date['comment'] = '%d.%B %Y, %H:%M';
$lang_date['log'] = '%d.%B %Y, %H:%M';
$lang_date['scientific'] = '%Y-%m-%d %H:%M:%S';

// For the word censor
$lang_bad_words = array('bok*', '*erefsiz', 'sikerim', 'göt*', 'eşeko*', 'orosp*', 'pezev*', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names['random'] = 'Rastgele resim';
$lang_meta_album_names['lastup'] = 'Son yüklenenler';
$lang_meta_album_names['lastalb'] = 'Son güncellenen albümler';
$lang_meta_album_names['lastcom'] = 'Son yorumlar';
$lang_meta_album_names['mostcom'] = 'En çok yorumlanan';
$lang_meta_album_names['topn'] = 'En çok bakılan';
$lang_meta_album_names['toprated'] = 'En çok oylanan';
$lang_meta_album_names['lasthits'] = 'son bakılan';
$lang_meta_album_names['search'] = 'Resim arama sonuçları';
$lang_meta_album_names['album_search'] = 'Albüm arama sonuçları';
$lang_meta_album_names['category_search'] = 'Kategori arama sonuçları';
$lang_meta_album_names['favpics'] = 'Favorilerim';
$lang_meta_album_names['datebrowse'] = 'Tarihe göre gözat'; //cpg1.5

$lang_errors['access_denied'] = 'Bu Sayfaya erişim hakkınız yok.';
$lang_errors['perm_denied'] = 'Bu işlemi yapma hakkınız yok.';
$lang_errors['param_missing'] = 'Script gerekli parametreler olmadan çağırıldı.';
$lang_errors['non_exist_ap'] = 'Seçilen albüm veya seçili dosya yok!';
$lang_errors['quota_exceeded'] = 'Disk alanı aşıldı.'; //cpg1.5
$lang_errors['quota_exceeded_details'] = '[quota]K da boş bir alanınız var, resimleriniz şuanda kullanılıyor [space]K, bu resmi eklemek alanınızı aşıracaktır.'; //cpg1.5
$lang_errors['gd_file_type_err'] = 'Eğer GD image library kullanılıyorsa sadece JPEG ve PNG formatları işlenebilir.';
$lang_errors['invalid_image'] = 'Yüklediğiniz resim hasarlı yada GD library tarafından işlenemiyor';
$lang_errors['resize_failed'] = 'Simge yada küçük resim yaratılmadı.';
$lang_errors['no_img_to_display'] = 'Gösterilebilecek dosya yok (yada albümü görme yetkiniz yok)';
$lang_errors['non_exist_cat'] = 'Seçili kategori yok';
$lang_errors['orphan_cat'] = 'Katagorinin üst katagorisi belli değil, düzeltmek için katagori yönete gidiniz.';
$lang_errors['directory_ro'] = ' \'%s\'  klasörü yazılabilir değil, dosyalar silinemedi';
$lang_errors['non_exist_comment'] = 'Seçili yorum yok.';
$lang_errors['pic_in_invalid_album'] = 'Seçili dosya olmayan bir albümde bulunmaktadır (%s)!?';
$lang_errors['banned'] = 'Şu anda bu sitede yasaklısın.';
$lang_errors['not_with_udb'] = 'Bu fonksiyon Coppermine da kullanılamaz çünkü forum yazılımı ile bütünleştirildi. Yapmaya çalıştığınız şey bü şekilde kaldırılamadı, yada fonksiyon forum yazılımı tarafından elegeçirildi.';
$lang_errors['offline_title'] = 'Bakım Modu';
$lang_errors['offline_text'] = 'Galeri şu anda bakım modunda - ilerde tekrar deneyin!';
$lang_errors['ecards_empty'] = 'Ekart kayıtı bulunmamaktadır. Coppermine seçeneklerindeki ekart giriş imkanını kontrol edin!';
$lang_errors['action_failed'] = 'İşlem olmadı. Coppermine sizin talebinizi işleyemedi.';
$lang_errors['no_zip'] = 'ZIP dosyası oluşturmak için gerekli dosyalar bulunamadı. Lütfen Coppermine admininiz ile iletişime geçin.';
$lang_errors['zip_type'] = 'ZIP dosyalarını yüklemek için yetkiniz yok.';
$lang_errors['database_query'] = 'Veritabanı yazarken hata oluştu';
$lang_errors['page_removed_redirector'] = 'Coppermine paketinden çıkarılmış bir sayfaya erişmeye çalışıyorsunuz.<br />Yönlendirme...'; //cpg1.5
$lang_errors['captcha_error'] = 'Onay kodu uymuyor'; //cpg1.5
$lang_errors['no_data'] = 'Veriler geri verilmemiştir'; //cpg1.5
$lang_errors['no_connection'] = 'Buraya %s bağlantı kurulamadı.'; //cpg1.5
$lang_errors['login_needed'] = 'Bu sayfayı görmek için %skayıt%s/%sgiriş%s yapmanız gerekir.'; //cpg1.5
$lang_errors['error'] = 'Hata'; //cpg1.5
$lang_errors['critical_error'] = 'Kritik hata'; // cpg1.5
$lang_errors['access_thumbnail_only'] = 'Yalnızca küçük resimleri görebilirsiniz.'; // cpg1.5
$lang_errors['access_intermediate_only'] = 'Tam boy resimleri görmek için yetkili değilsiniz.'; // cpg1.5
$lang_errors['access_none'] = 'Resim görüntülemek için yetkiniz yok.'; // cpg1.5  
$lang_errors['register_globals_title'] = 'Register Globals sind aktiviert!';// cpg1.5
$lang_errors['register_globals_warning'] = 'PHP register_globals ayarı sunucunuzda etkindir. Güvenliğiniz için bu ayarı kuvvetle devre dışı bırakmanız önerilir.'; //cpg1.5

$lang_bbcode_help_title = 'BBCode yardım';
$lang_bbcode_help = 'BBCode etiketlerini kullanarak tıklanabilir linkler ve bu alanda bazı biçimlendirme ekleyebilirsiniz: <li>[b]Fett[/b] =&gt; <strong>Fett</strong></li><li>[i]Kursiv[/i] =&gt; <i>Kursiv</i></li><li>[url=http://deineseite.com/]Url Text[/url] =&gt; <a href="http://deineseite.com">UrlText</a></li><li>[email]benutzer@domain.com[/email] =&gt; <a href="mailto:benutzer@domain.com">benutzer@domain.com</a></li><li>[color=red]Beispieltext[/color] =&gt; <span style="color:red">Beispieltext</span></li><li>[img]http://documentation.coppermine-gallery.net/images/browser.png[/img] = <img src="docs/images/browser.png" border="0" alt="" width="19" height="18" /></li>';

$lang_common['yes'] = 'Evet'; // cpg1.5
$lang_common['no'] = 'Hayır'; // cpg1.5
$lang_common['back'] = 'Geri'; // cpg1.5
$lang_common['continue'] = 'Devam'; // cpg1.5
$lang_common['information'] = 'Bilgi'; // cpg1.5
$lang_common['error'] = 'Hata'; // cpg1.5
$lang_common['check_uncheck_all'] = 'tümünü seç/pasifleştir'; // cpg1.5
$lang_common['confirm'] = 'Doğrulama (yandaki kutu içindeki zor okunan harf ve sayıları aynen yazın)'; // cpg1.5
$lang_common['captcha_help_title'] = 'Görsel doğrulama (captcha)'; // cpg1.5
$lang_common['captcha_help'] = 'Spam önlemek için, bir insan olduğunuzu ve sadece script olmadığınızı kanıtlamak zorundasınız. Bu yüzden grafikte gösterilen harfleri girin.<br />Büyük ve küçük harf fark etmez, küçük harflerle her şeyi girebilirsiniz.'; // cpg1.5
$lang_common['title'] = 'Başlık'; // cpg1.5
$lang_common['caption'] = 'Altyazı'; // cpg1.5
$lang_common['keywords'] = 'Anahtar kelimeler'; // cpg1.5
$lang_common['keywords_insert1'] = 'Anahtar kelimeler (%s ile ayırtmak)'; // cpg1.5
$lang_common['keywords_insert2'] = 'Listeden eklemek'; // cpg1.5
$lang_common['keyword_separator'] = 'Kelimeler ayırıcı'; //cpg1.5
$lang_common['keyword_separators'] = array(' '=>'space', ','=>'Virgül', ';'=>'Noktalı virgül'); // cpg1.5
$lang_common['owner_name'] = 'Sahibinin adı'; // cpg1.5
$lang_common['filename'] = 'Dosya adı'; // cpg1.5
$lang_common['filesize'] = 'Dosya boyutu'; // cpg1.5
$lang_common['album'] = 'Albüm'; // cpg1.5
$lang_common['file'] = 'Dosya'; // cpg1.5
$lang_common['date'] = 'Tarih'; // cpg1.5
$lang_common['help'] = 'Yardım'; // cpg1.5
$lang_common['close'] = 'Kapat'; // cpg1.5
$lang_common['go'] = 'hayde'; // cpg1.5
$lang_common['javascript_needed'] = 'Bu sayfa JavaScript gerektirir. Lütfen tarayıcınızda JavaScript aktifleştirin.'; // cpg1.5
$lang_common['move_up'] = 'Yukarı taşı'; // cpg1.5
$lang_common['move_down'] = 'Aşağı taşı'; // cpg1.5
$lang_common['move_top'] = 'En üst noktaya taşıyın'; // cpg1.5
$lang_common['move_bottom'] = 'En alt noktaya taşıyın'; // cpg1.5
$lang_common['delete'] = 'Sil'; // cpg1.5
$lang_common['edit'] = 'Düzenle'; // cpg1.5
$lang_common['username_if_blank'] = 'Bilinmeyen korkak'; // cpg1.5
$lang_common['albums_no_category'] = 'Kategorisi olmayan albümler'; // cpg1.5
$lang_common['personal_albums'] = '* Kişisel albümler'; // cpg1.5
$lang_common['select_album'] = 'Bir albüm seçin'; // cpg1.5
$lang_common['ok'] = 'Tamam'; // cpg1.5
$lang_common['status'] = 'Durum'; // cpg1.5
$lang_common['apply_changes'] = 'Değişiklikleri kaydet'; // cpg1.5
$lang_common['reset'] = 'Geri al'; // cpg1.5
$lang_common['done'] = 'Yapılmış'; // cpg1.5
$lang_common['show_password'] = 'Şifre göster'; // cpg1.5
$lang_common['album_properties'] = 'Albüm Özellikleri'; // cpg1.5
$lang_common['parent_category'] = 'Üst Kategori'; // cpg1.5
$lang_common['edit_files'] = 'Dosyaları düzenle'; // cpg1.5
$lang_common['thumbnail_view'] = 'Küçük resim görünümü'; // cpg1.5
$lang_common['album_manager'] = 'Albüm Yönetimi'; // cpg1.5
$lang_common['details'] = 'Ayrıntılar'; // cpg1.5
$lang_common['more'] = 'daha fazla'; // cpg1.5


// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //
$lang_main_menu['home_title'] = 'Ana sayfaya git';
$lang_main_menu['home_lnk'] = 'Ana Sayfa';
$lang_main_menu['alb_list_title'] = 'Albüm listesine git';
$lang_main_menu['alb_list_lnk'] = 'Albüm Listesi';
$lang_main_menu['my_gal_title'] = 'Kişisel galerime git';
$lang_main_menu['my_gal_lnk'] = 'Galerim';
$lang_main_menu['my_prof_title'] = 'Kişisel profilime git';
$lang_main_menu['my_prof_lnk'] = 'Kişisel profilim';
$lang_main_menu['adm_mode_title'] = 'Yönetici moduna geç';
$lang_main_menu['adm_mode_lnk'] = 'Yönetici modu';
$lang_main_menu['usr_mode_title'] = 'Kullanıcı moduna geç';
$lang_main_menu['usr_mode_lnk'] = 'Kullanıcı modu';
$lang_main_menu['upload_pic_title'] = 'Bir albüme dosya ekle';
$lang_main_menu['upload_pic_lnk'] = 'Dosya yükle';
$lang_main_menu['register_title'] = 'Kullanıcı hesabı aç';
$lang_main_menu['register_lnk'] = 'Kayıt ol';
$lang_main_menu['login_title'] = 'Giriş yap';
$lang_main_menu['login_lnk'] = 'Giriş';
$lang_main_menu['logout_title'] = 'Çıkış yap';
$lang_main_menu['logout_lnk'] = 'Çıkış';
$lang_main_menu['lastup_title'] = 'Son yüklenenleri göster';
$lang_main_menu['lastup_lnk'] = 'Son yüklenenler';
$lang_main_menu['lastcom_title'] = 'Son yorumları göster';
$lang_main_menu['lastcom_lnk'] = 'Son yorumlar';
$lang_main_menu['mostcom_title'] = 'En çok yorumlanan dosyaları göster'; // cpg1.5
$lang_main_menu['mostcom_lnk'] = 'En çok yorumlanan'; // cpg1.5
$lang_main_menu['topn_title'] = 'En çok bakılan dosyaları göster';
$lang_main_menu['topn_lnk'] = 'En çok bakılanlar';
$lang_main_menu['toprated_title'] = 'En beğenilen dosyaları göster';
$lang_main_menu['toprated_lnk'] = 'En beğenilenler';
$lang_main_menu['search_title'] = 'Galeride ara';
$lang_main_menu['search_lnk'] = 'Ara';
$lang_main_menu['fav_title'] = 'Favorilerimi göster';
$lang_main_menu['fav_lnk'] = 'Favorilerim';
$lang_main_menu['memberlist_title'] = 'Kullanıcı listesini göster';
$lang_main_menu['memberlist_lnk'] = 'Kullanıcı listesi';
$lang_main_menu['browse_by_date_lnk'] = 'Tarihe göre'; // cpg1.5
$lang_main_menu['browse_by_date_title'] = 'Yüklenilen tarihe göre bak'; // cpg1.5
$lang_main_menu['contact_title'] = '%s ile iletişim kurun'; // cpg1.5
$lang_main_menu['contact_lnk'] = 'Kontakt'; // cpg1.5
$lang_main_menu['sidebar_title'] = 'Tarayıcınıza kenar çubuğu ekler'; // cpg1.5
$lang_main_menu['sidebar_lnk'] = 'Kenar çubuğu'; // cpg1.5
$lang_main_menu['main_menu'] = 'Ana menü'; // cpg1.5
$lang_main_menu['sub_menu'] = 'Alt menü'; // cpg1.5

$lang_gallery_admin_menu['upl_app_title'] = 'Yeni yüklenen dosyaları onayla';
$lang_gallery_admin_menu['upl_app_lnk'] = 'Yükleme onayı';
$lang_gallery_admin_menu['admin_title'] = 'Ayarlara git';
$lang_gallery_admin_menu['admin_lnk'] = 'Ayarlar';
$lang_gallery_admin_menu['albums_title'] = 'Albüm ayarlarına git';
$lang_gallery_admin_menu['albums_lnk'] = 'Albümler';
$lang_gallery_admin_menu['categories_title'] = 'Kategori ayarlarına git';
$lang_gallery_admin_menu['categories_lnk'] = 'Kategoriler';
$lang_gallery_admin_menu['users_title'] = 'Kullanıcı ayarlarına git';
$lang_gallery_admin_menu['users_lnk'] = 'Kullanıcı';
$lang_gallery_admin_menu['groups_title'] = 'Grup ayarlarına git';
$lang_gallery_admin_menu['groups_lnk'] = 'Gruplar';
$lang_gallery_admin_menu['comments_title'] = 'Düzenleme için tüm yorumları göster';
$lang_gallery_admin_menu['comments_lnk'] = 'Yorumları düzenle';
$lang_gallery_admin_menu['searchnew_title'] = 'Çoklu dosya eklemeyi aç';
$lang_gallery_admin_menu['searchnew_lnk'] = 'Çoklu dosya ekleme';
$lang_gallery_admin_menu['util_title'] = 'Admin araçlarına git';
$lang_gallery_admin_menu['util_lnk'] = 'Admin araçları';
$lang_gallery_admin_menu['key_title'] = 'Arama sözlüğüne git';
$lang_gallery_admin_menu['key_lnk'] = 'Arama sözlüğü';
$lang_gallery_admin_menu['ban_title'] = 'Banlama ayarlarına git';
$lang_gallery_admin_menu['ban_lnk'] = 'Kullanıcı banla';
$lang_gallery_admin_menu['db_ecard_title'] = 'Şimdiye kadar gönderilen ekartları göster';
$lang_gallery_admin_menu['db_ecard_lnk'] = 'Ekartları göster';
$lang_gallery_admin_menu['pictures_title'] = 'Resimlerin albümlerdeki sıralamasını belirle';
$lang_gallery_admin_menu['pictures_lnk'] = 'Resimlerimi sırala';
$lang_gallery_admin_menu['documentation_lnk'] = 'Belgeleme';
$lang_gallery_admin_menu['documentation_title'] = 'Coppermine kılavuzu';
$lang_gallery_admin_menu['phpinfo_lnk'] = 'PHP bilgilerini göster'; // cpg1.5
$lang_gallery_admin_menu['phpinfo_title'] = 'Sunucu hakkında teknik bilgiler içeriyor. Eğer bir destek talebinde bulunursanız bu bilgi istenebilir.'; // cpg1.5
$lang_gallery_admin_menu['update_database_lnk'] = 'Veritabanı güncelleme'; // cpg1.5
$lang_gallery_admin_menu['update_database_title'] = 'Eğer Coppermine dosyalarında değişiklik veya bir eklenti yâda eski bir Coppermine sürümünde yükseltme yapmışsanız, veritabanında muhtemelen gerekli değişiklikleri gerçekleştirmek yâda eksik tabloları oluşturmak için, veritabanı yükseltmeyi çalıştırınız.'; // cpg1.5
$lang_gallery_admin_menu['view_log_files_lnk'] = 'Log dosyaları göster'; // cpg1.5
$lang_gallery_admin_menu['view_log_files_title'] = 'Coppermine çeşitli kullanıcı eylemlerini izleyebilir. Bu protokoller burada görülebilir, eğer log dosyalarının kaydı coppermine ayarlarında aktifleştirilmişse.'; // cpg1.5
$lang_gallery_admin_menu['check_versions_lnk'] = 'Sürüm kontrolü'; // cpg1.5
$lang_gallery_admin_menu['check_versions_title'] = 'Tüm dosyaların bir yükseltme sırasında yenilendiğini veya Coppermine dosyalarının bir paketin yayımlanmasından sonra güncellendiğini öğrenmek için dosyalarınızın sürümlerini kontrol edin.'; // cpg1.5
$lang_gallery_admin_menu['bridgemgr_lnk'] = 'Köprü asistanı'; // cpg1.5
$lang_gallery_admin_menu['bridgemgr_title'] = 'Başka bir uygulama ile Coppermine kullanıcı yönetimi entegrasyon asistanı.(örneğin bir forum) - köprü olarak adlandırılan.'; // cpg1.5
$lang_gallery_admin_menu['pluginmgr_lnk'] = 'Eklentiler'; // cpg1.5
$lang_gallery_admin_menu['pluginmgr_title'] = 'Eklentileri yönet'; // cpg1.5
$lang_gallery_admin_menu['overall_stats_lnk'] = 'Genel İstatistikler'; // cpg1.5
$lang_gallery_admin_menu['overall_stats_title'] = 'Tarayıcınız ve işletim sisteminiz için sonuç istatistikleri (uygun seçenek ayarlarda etkinse).'; // cpg1.5
$lang_gallery_admin_menu['keywordmgr_lnk'] = 'Anahtar kelimeler'; // cpg1.5
$lang_gallery_admin_menu['keywordmgr_title'] = 'Anahtar kelimeleri yönet (uygun seçenek ayarlarda etkinse).'; // cpg1.5
$lang_gallery_admin_menu['exifmgr_lnk'] = 'EXIF'; // cpg1.5
$lang_gallery_admin_menu['exifmgr_title'] = 'EXIF görünümü yönet (uygun seçenek ayarlarda etkinse).'; // cpg1.5
$lang_gallery_admin_menu['shownews_lnk'] = 'Haberleri göster'; // cpg1.5
$lang_gallery_admin_menu['shownews_title'] = 'coppermine-gallery.net son haberleri göster'; // cpg1.5
$lang_gallery_admin_menu['admin_menu'] = 'Yönetici Menüsü'; // cpg1.5

$lang_user_admin_menu['albmgr_title'] = 'Albüm oluştur/düzenle';
$lang_user_admin_menu['albmgr_lnk'] = 'Albüm oluştur/düzenle';
$lang_user_admin_menu['modifyalb_title'] = 'Albüm seçenekleri';
$lang_user_admin_menu['modifyalb_lnk'] = 'Albüm seçenekleri';
$lang_user_admin_menu['my_prof_title'] = 'Kişisel Profilim';
$lang_user_admin_menu['my_prof_lnk'] = 'Kişisel Profilim';

$lang_cat_list['category'] = 'Kategori';
$lang_cat_list['albums'] = 'Albümler';
$lang_cat_list['pictures'] = 'Dosyalar';

$lang_album_list['album_on_page'] = '%d albüm var %d sayfada';

$lang_thumb_view['date'] = 'Tarih';
  //Sort by filename and title
$lang_thumb_view['name'] = 'Dosya adı';
$lang_thumb_view['sort_da'] = 'Tarihe göre ARTAN sırala';
$lang_thumb_view['sort_dd'] = 'Tarihe göre AZALAN sırala';
$lang_thumb_view['sort_na'] = 'Ada göre ARTAN sırala';
$lang_thumb_view['sort_nd'] = 'Ada göre AZALAN sırala';
$lang_thumb_view['sort_ta'] = 'Konuya göre ARTAN sırala';
$lang_thumb_view['sort_td'] = 'Konuya göre AZALAN sırala';
$lang_thumb_view['position'] = 'Konum';
$lang_thumb_view['sort_pa'] = 'Pozisyona göre ARTAN sırala';
$lang_thumb_view['sort_pd'] = 'Pozisyona göre AZALAN sırala';
$lang_thumb_view['download_zip'] = 'Zip dosyası olarak indir';
$lang_thumb_view['pic_on_page'] = '%d resim var %d sayfada';
$lang_thumb_view['user_on_page'] = '%d kullanıcı var %d sayfada';
$lang_thumb_view['enter_alb_pass'] = 'Albüm için şifrenizi girin';
$lang_thumb_view['invalid_pass'] = 'Yanlış şifre';
$lang_thumb_view['pass'] = 'Şifre';
$lang_thumb_view['submit'] = 'Tamam';
$lang_thumb_view['zipdownload_copyright'] = 'Lütfen telif haklarına saygılı olunuz - indirilen dosyalar sadece galeri sahibi tarafından öngörülen şekilde kullanın'; // cpg1.5
$lang_thumb_view['zipdownload_username'] = 'Bu arşiv sonraki kullanıcının paketlenmiş favorilerinin dosyalarını içerir:  %s'; // cpg1.5

$lang_img_nav_bar['thumb_title'] = 'Küçük resim sayfasına dön';
$lang_img_nav_bar['pic_info_title'] = 'Resim özelliklerini göster/sakla';
$lang_img_nav_bar['slideshow_title'] = 'Ard arda (slide) gösterim';
$lang_img_nav_bar['ecard_title'] = 'Resmi bir e-kartpostal olarak yolla';
$lang_img_nav_bar['ecard_disabled'] = 'e-kartpostal özelliği etkin değil';
$lang_img_nav_bar['ecard_disabled_msg'] = 'e-kartpostal yollama izniniz yok';
$lang_img_nav_bar['prev_title'] = 'Önceki dosyaya bak';
$lang_img_nav_bar['next_title'] = 'Sonraki dosyaya bak';
$lang_img_nav_bar['pic_pos'] = 'Dosya %s/%s';
$lang_img_nav_bar['report_title'] = 'Bu dosyayı yöneticiye bildir';
$lang_img_nav_bar['go_album_end'] = 'Sona git';
$lang_img_nav_bar['go_album_start'] = 'Başa dön';
$lang_img_nav_bar['go_back_x_items'] = ' %s dosya dön';
$lang_img_nav_bar['go_forward_x_items'] = ' %s dosya ileri git';

$lang_rate_pic['rate_this_pic'] = 'Bu dosyayı puanla';
$lang_rate_pic['no_votes'] = '(Puanlama henüz yok)';
$lang_rate_pic['rating'] = '(Güncel Beğeni Oranı : %s / 5 etkiyen %s oy';
$lang_rate_pic['rubbish'] = 'Berbat';
$lang_rate_pic['poor'] = 'Değersiz';
$lang_rate_pic['fair'] = 'İdare Eder';
$lang_rate_pic['good'] = 'İyi';
$lang_rate_pic['excellent'] = 'Çok İyi';
$lang_rate_pic['great'] = 'Mükemmel';
$lang_rate_pic['js_warning'] = 'JavaScript oylamak için etkin olmalıdır'; // cpg1.5
$lang_rate_pic['already_voted'] = 'Zaten bu dosyayı oyladınız.'; // cpg1.5
$lang_rate_pic['forbidden'] = 'Kendi dosyalarınızı oylayamazsınız.'; // cpg1.5
$lang_rate_pic['rollover_to_rate'] = 'Oyunuzu vermek için, farenin okunu puanlamanın üzerine getirin'; // cpg1.5

// ------------------------------------------------------------------------- //
// File include/functions.inc.php
// ------------------------------------------------------------------------- //
$lang_cpg_die['file'] = 'Dosya: ';
$lang_cpg_die['line'] = 'Satır: ';

$lang_display_thumbnails['dimensions'] = 'Boyutlar: ';
$lang_display_thumbnails['date_added'] = 'Eklenen tarih: ';
$lang_display_thumbnails['unapproved'] = 'Doğrulanmamış'; // cpg1.5

$lang_get_pic_data['n_comments'] = '%s yorum yapıldı';
$lang_get_pic_data['n_views'] = '%s kez bakıldı';
$lang_get_pic_data['n_votes'] = '(%s oy verildi)';

$lang_cpg_debug_output['debug_info'] = 'Hata ayıklama bilgisi';
$lang_cpg_debug_output['debug_output'] = 'Hata ayıklama çıkışı'; // cpg1.5
$lang_cpg_debug_output['select_all'] = 'Tümünü seç';
$lang_cpg_debug_output['copy_and_paste_instructions'] = 'Eğer Coppermine den yardım talebinde bulunacaksanız, hata ayıklama çıkışını kopyala yapıştır ile gönderiniz, yalnız bir destekçi bunu açıkça talep ederse (SADECE bu durumda)! Sorgularda varolan şifreleri *** ile değiştirin.';

$lang_cpg_debug_output['debug_output_explain'] = 'Not: Bu hata ayıklama çıkışı sadece bilgi içindir ve galeride bir hata olduğu anlamına gelmez.'; // cpg1.5
$lang_cpg_debug_output['phpinfo'] = 'PHP bilgilerini göster';
$lang_cpg_debug_output['notices'] = 'PHP notları (notices)';
$lang_cpg_debug_output['notices_help_admin'] = 'Aşağıdaki görünür notlar, sadece sizin (galeri yöneticisi olarak) bu özelliği ayarlar bölümünde aktif hale getirdiğiniz için görünüyor. Bunların galerinizde herhangi bir hata olduğu anlamına gelmez. Yalnızca deneyimli programcılar tarafından hataları akıllıca almak için açık olması gereken bir geliştirici işlevidir. Eğer gösterilen notlar sizi rahatsız ediyor yâda bunların ne ise yaradığını bilmiyorsanız, ilgili seçeneği ayarlar bölümünde kapatın.'; // cpg1.5
$lang_cpg_debug_output['notices_help_non_admin'] = 'Aşağıdaki görünür notlar, sadece galeri yöneticisi bu özelliği ayarlar bölümünde aktif hale getirdiği için görünüyor. Bunların galeride herhangi bir hata olduğu anlamına gelmez. Gösterilen notlar sorunsuz göz ardı edilebilir.'; // cpg1.5
$lang_cpg_debug_output['show_hide'] = 'göster / sakla'; // cpg1.5

$lang_language_selection['reset_language'] = 'Varsayılan dil';
$lang_language_selection['choose_language'] = 'Dil seçin';

$lang_theme_selection['reset_theme'] = 'Varsayılan tema';
$lang_theme_selection['choose_theme'] = 'Tema seçiniz';

$lang_version_alert['version_alert'] = 'Desteksiz sürüm!';
$lang_version_alert['no_stable_version'] = 'Kullandıgınız Coppermine sürümü %s (%s). Bu sürüm sadece deneyimli kullanıcılar içindir - bu sürüme herhangi bir teknik destek verilmemektedir. Kullanmak tamamen kendi risikonuzda olup. Desteklenen çalışır sürümler için önceki sürümleri kullanınız!';
$lang_version_alert['gallery_offline'] = 'Galeri şu anda kapalı ve sadece admin tarafından görülebilmektedir. Ayarları bitirdikten sonra tekrar açmayı unutmayınız.';
$lang_version_alert['coppermine_news'] = 'coppermine-gallery.net den haberler'; //cpg1.5
$lang_version_alert['no_iframe'] = 'Tarayıcınız çerçeveleri desteklemiyor'; //cpg1.5
$lang_version_alert['hide'] = 'sakla'; //cpg1.5

$lang_create_tabs['previous'] = 'önceki'; //cpg1.5
$lang_create_tabs['next'] = 'sonraki'; //cpg1.5
$lang_create_tabs['jump_to_page'] = 'Sayfaya git'; // cpg1.5
$lang_create_tabs['first'] = 'Birinci'; // cpg1.5
$lang_create_tabs['last'] = 'Sonuncu'; // cpg1.5

$lang_get_remote_file_by_url['no_data_returned'] = '%s ile veri iade edilmedi'; //cpg1.5
$lang_get_remote_file_by_url['curl'] = 'CURL'; //cpg1.5
$lang_get_remote_file_by_url['fsockopen'] = 'Soket bağlantısı (FSOCKOPEN)'; //cpg1.5
$lang_get_remote_file_by_url['fopen'] = 'fopen'; //cpg1.5
$lang_get_remote_file_by_url['curl_not_available'] = 'Curl sunucunuzda mevcut değil'; //cpg1.5
$lang_get_remote_file_by_url['error_number'] = 'Hata numarası: %s'; //cpg1.5
$lang_get_remote_file_by_url['error_message'] = 'Hata: %s'; //cpg1.5

// ------------------------------------------------------------------------- //
// File include/mailer.inc.php
// ------------------------------------------------------------------------- //
$lang_mailer['provide_address'] = 'En az bir tane belirtilmelidir ';
$lang_mailer['mailer_not_supported'] = ' mailer desteklenmemektedir.';
$lang_mailer['execute'] = 'Çalıştıramadı: ';
$lang_mailer['instantiate'] = 'Mail fonksiyonunu kuramadı.';
$lang_mailer['authenticate'] = 'SMTP hatası: Doğrulama yapılamadı.';
$lang_mailer['from_failed'] = 'Sonraki adres başarısız oldu: ';
$lang_mailer['recipients_failed'] = 'SMTP hatası: sonraki ';
$lang_mailer['data_not_accepted'] = 'SMTP hatası: Veriler kabul edilmedi.';
$lang_mailer['connect_host'] = 'SMTP hatası: SMTP hosta bağlanılamıyor.';
$lang_mailer['file_access'] = 'Dosyaya erişilemiyor: ';
$lang_mailer['file_open'] = 'Dosya hatası: dosya açılamadı: ';
$lang_mailer['encoding'] = 'Bilinmeyen kodlama: ';
$lang_mailer['signing'] = 'İmza hatası: ';

// ------------------------------------------------------------------------- //
// File include/plugin_api.inc.php
// ------------------------------------------------------------------------- //
$lang_plugin_api['error_wakeup'] = 'Bu \'%s\' eklentiyi aktifleştiremedi';
$lang_plugin_api['error_install'] = 'Bu \'%s\' eklentiyi kuramadı';
$lang_plugin_api['error_uninstall'] = 'Bu \'%s\' eklentiyi kaldıramadı';
$lang_plugin_api['error_sleep'] = 'Bu \'%s\' eklentiyi pasifleştiremedi.';

// ------------------------------------------------------------------------- //
// File include/smilies.inc.php
// ------------------------------------------------------------------------- //
if (defined('SMILIES_PHP')) {
$lang_smilies_inc_php['Exclamation'] = 'Ünlem';
$lang_smilies_inc_php['Question'] = 'Soru';
$lang_smilies_inc_php['Very Happy'] = 'Çok mutlu';
$lang_smilies_inc_php['Smile'] = 'Gülümsiyen';
$lang_smilies_inc_php['Sad'] = 'Üzgün';
$lang_smilies_inc_php['Surprised'] = 'Şaşırmış';
$lang_smilies_inc_php['Shocked'] = 'Şok olmuş';
$lang_smilies_inc_php['Confused'] = 'Kafası karışık';
$lang_smilies_inc_php['Cool'] = 'Cool';
$lang_smilies_inc_php['Laughing'] = 'Gülen';
$lang_smilies_inc_php['Mad'] = 'Deli';
$lang_smilies_inc_php['Razz'] = 'Utangaç';
$lang_smilies_inc_php['Embarrassed'] = 'Utanmış';
$lang_smilies_inc_php['Crying or Very sad'] = 'Çok üzgün veya ağlama';
$lang_smilies_inc_php['Evil or Very Mad'] = 'Şeytan veye manyak';
$lang_smilies_inc_php['Twisted Evil'] = 'Sapıtmış şeytan';
$lang_smilies_inc_php['Rolling Eyes'] = 'Gözü dönmüş';
$lang_smilies_inc_php['Wink'] = 'Gözkırpan';
$lang_smilies_inc_php['Idea'] = 'Ampül fikirli';
$lang_smilies_inc_php['Arrow'] = 'Ok';
$lang_smilies_inc_php['Neutral'] = 'Doğal';
$lang_smilies_inc_php['Mr. Green'] = 'Bay yeşil';
}

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //
if (defined('ALBMGR_PHP')) {
$lang_albmgr_php['title'] = 'Albüm Yöneticisi'; // cpg1.5
$lang_albmgr_php['alb_need_name'] = 'Albümlerin adı olmalı!'; // js-alert
$lang_albmgr_php['confirm_modifs'] = 'Bu değişiklikleri yapmak istediğinizden eminmisiniz?'; // js-alert
$lang_albmgr_php['no_change'] = 'Değişiklik yapmadınız!'; // js-alert
$lang_albmgr_php['new_album'] = 'yeni Albüm';
$lang_albmgr_php['delete_album'] = 'Albümü sil'; // cpg1.5
$lang_albmgr_php['confirm_delete1'] = 'Bu albümü silmek istediğinizden eminmisiniz?'; // js-alert
$lang_albmgr_php['confirm_delete2'] = 'Bütün RESİMLER, YORUMLAR ve İÇERİĞİ YOK OLACAK!'; // js-alert
$lang_albmgr_php['select_first'] = 'İlk önce bir albüm seçiniz'; // js-alert
$lang_albmgr_php['alb_mrg'] = 'Albüm ayarları';
$lang_albmgr_php['my_gallery'] = '* Kişisel galerim *';
$lang_albmgr_php['no_category'] = '* Kategori yok *';
$lang_albmgr_php['select_category'] = 'Kategori seç';
$lang_albmgr_php['category_change'] = 'Eğer kategoriyi değiştirirseniz, son değişiklikler kaybolur!'; // cpg1.5
$lang_albmgr_php['cancel'] = 'İptal'; // cpg1.5
$lang_albmgr_php['submit_reminder'] = '&quot;Uygula&quot; tıklamadıkça sıralama düzenindeki değişiklikler kaydedilmeyecek.'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //
if (defined('BANNING_PHP')) {
$lang_banning_php['title'] = 'Kullanıcıyı banla';
$lang_banning_php['user_name'] = 'Kullanıcı adı';
$lang_banning_php['user_account'] = 'Kullanıcı hesabı';
$lang_banning_php['ip_address'] = 'İP adresi';
$lang_banning_php['expiry'] = 'süre bitiş tarihi: ';
$lang_banning_php['expiry_date'] = 'Bitiş tarihi';
$lang_banning_php['expired'] = 'Süresi geçmiş';
$lang_banning_php['edit_ban'] = 'Değişiklikleri kaydet';
$lang_banning_php['add_new'] = 'Yeni ban ekle';
$lang_banning_php['add_ban'] = 'Ekle';
$lang_banning_php['error_user'] = 'Belirtilen kullanıcı bulunamıyor';
$lang_banning_php['error_specify'] = 'Banlamak istediginiz kişinin kullanıcı adını veya ip adresini girmelisiniz';
$lang_banning_php['error_ban_id'] = 'Yanlış ban ID si!';
$lang_banning_php['error_admin_ban'] = 'Kendinizi banlıyamazsınız!';
$lang_banning_php['error_server_ban'] = 'Kendi sunucunuzu banlamak üzerisiniz! Bunu yapmak mümkün değil...';
$lang_banning_php['skipping'] = 'Bu komutu geç';
$lang_banning_php['lookup_ip'] = 'IP adres arama';
$lang_banning_php['submit'] = 'Başla!';
$lang_banning_php['select_date'] = 'Tarih seç';
$lang_banning_php['delete_comments'] = 'Yorumları sil'; // cpg1.5
$lang_banning_php['current'] = 'geçerli'; // cpg1.5
$lang_banning_php['all'] = 'tümü'; // cpg1.5
$lang_banning_php['none'] = 'hiçbiri'; // cpg1.5
$lang_banning_php['view'] = 'göster'; // cpg1.5
$lang_banning_php['ban_id'] = 'Ban ID'; // cpg1.5
$lang_banning_php['existing_bans'] = 'Mevcut banlananlar'; // cpg1.5
$lang_banning_php['no_banning_when_bridged'] = 'Kişisel galeriniz şu anda başka bir uygulama ile köprülenmiş. Coppermine deki entegre olan banlama yerine köprü uygulama banlama mekanizmalarını kullanın, çünkü bu aktifleştirilmiş köprülenmede pek işlemez.'; // cpg1.5
$lang_banning_php['records_on_page'] = '%d sayfada %d kayıt'; // cpg1.5
$lang_banning_php['ascending'] = 'yükselen'; // cpg1.5
$lang_banning_php['descending'] = 'azalan'; // cpg1.5
$lang_banning_php['sort_by'] = 'Sıralama'; // cpg1.5
$lang_banning_php['sorted_by'] = 'sıralanmış'; // cpg1.5
$lang_banning_php['ban_record_x_updated'] = '%s banlama kaydı güncellendi'; // cpg1.5
$lang_banning_php['ban_record_x_deleted'] = '%s banlama kaydı silindi'; // cpg1.5
$lang_banning_php['new_ban_record_created'] = 'Yeni banlama kaydı oluşturuldu'; // cpg1.5
$lang_banning_php['ban_record_x_already_exists'] = '%s için banlama kaydı zaten mevcut!'; // cpg1.5
$lang_banning_php['comment_deleted'] = '%s yorum, %s tarafından yapılan, silindi'; // cpg1.5
$lang_banning_php['comments_deleted'] = '%s yorumlar, %s tarafından yapılan, silindi'; // cpg1.5
$lang_banning_php['email_field_invalid'] = 'Geçerli bir e-posta adresi girin'; // cpg1.5
$lang_banning_php['ip_address_field_invalid'] = 'Geçerli bir IP adresi belirtin (x.x.x.x)'; // cpg1.5
$lang_banning_php['expiry_field_invalid'] = 'Geçerli bir süre bitiş tarihi girin (JJJJ-MM-TT)'; // cpg1.5
$lang_banning_php['form_not_submit'] = 'Form gönderilmedi - ilk yanlışlıkları gidermek gerekir'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File bridgemgr.php
// ------------------------------------------------------------------------- //
if (defined('BRIDGEMGR_PHP')) {
$lang_bridgemgr_php['title'] = 'Köprü sihirbazı';
$lang_bridgemgr_php['back'] = 'geri';
$lang_bridgemgr_php['next'] = 'ileri';
$lang_bridgemgr_php['start_wizard'] = 'Köprü sihirbazını başlat';
$lang_bridgemgr_php['finish'] = 'Sonlandır';
$lang_bridgemgr_php['no_action_needed'] = 'Bu aşamada herhangi bir şey yapmanız gerekmiyor. Sadece devam etmek için &quot;ileri&quot; tuşuna basmanız yeterli.';
$lang_bridgemgr_php['reset_to_default'] = 'Hazır değerlere geri dön';
$lang_bridgemgr_php['choose_bbs_app'] = 'Coppermine ile &quot;köprü oluşturmak&quot; istediğiniz bir uygulama seçin';
$lang_bridgemgr_php['support_url'] = 'Uygulama desteği için buraya tıklayınız';
$lang_bridgemgr_php['settings_path'] = 'Köprü uygulaması tarafından kullanılan adres(ler)';
$lang_bridgemgr_php['full_forum_url'] = 'Köprü uygulamasının tek düzen kaynak konum belirleyicisi (URL)';
$lang_bridgemgr_php['relative_path_of_forum_from_webroot'] = 'Köprü uygulamaya bağıl yolu';
$lang_bridgemgr_php['relative_path_to_config_file'] = 'Başvurunuzun köprülenmesi yapılandırma dosyasına bağıl yolu';
$lang_bridgemgr_php['cookie_prefix'] = 'Kurabiye öneki';
$lang_bridgemgr_php['special_settings'] = 'Köprüleme özel ayarları';
$lang_bridgemgr_php['use_post_based_groups'] = 'Köprü uygulamasının özel gruplarını kullan?';
$lang_bridgemgr_php['use_post_based_groups_yes'] = 'evet';
$lang_bridgemgr_php['use_post_based_groups_no'] = 'hayır';
$lang_bridgemgr_php['error_title'] = 'Önce hataları düzeltmek gerekir. Bir önceki adıma geçin.';
$lang_bridgemgr_php['error_specify_bbs'] = 'Hangi uygulamayı Coppermine ile &quot;köprülenme&quot; istediğinizi belirtmelisiniz.';
$lang_bridgemgr_php['finalize'] = 'Forum entegrasyonu aç/kapat';
$lang_bridgemgr_php['finalize_explanation'] = 'Bu ana kadarki ayarlar veritabanına kaydedildi, ama şu anda BBS proğram bağlantısı açılmadı. Bağlantıyı istediginiz zaman açıp veya kapatabilirsiniz. Lütfen Coppermine (standalone) giriş şifrenizi unutmayınız. Bu şifreyi kullanarak istediğiniz zaman ayarlarda değişiklik yapabilirsiniz. Bir şey yanlış giderse, %s gidin ve BBS bağlantısını kapatınız ve standalone Coppermine kullanıcı ismi ve şifreniz (Coppermine kurarken yazdığınız) ile giriş yapınız.';
$lang_bridgemgr_php['your_bridge_settings'] = 'Bağlantı ayarları';
$lang_bridgemgr_php['title_enable'] = '%s ile bağlantıyı aç';
$lang_bridgemgr_php['bridge_enable_yes'] = 'Aç';
$lang_bridgemgr_php['bridge_enable_no'] = 'Kapat';
$lang_bridgemgr_php['error_must_not_be_empty'] = 'boş bırakmayınız';
$lang_bridgemgr_php['error_either_be'] = '%s veya %s olmalı';
$lang_bridgemgr_php['error_folder_not_exist'] = '%s bulunamadı. %s ni düzeltiniz';
$lang_bridgemgr_php['error_cookie_not_readible'] = 'Coppermine %s adlı Kurabiye dosyasını okuyamıyor. %s daki kullanıdığınız verileri düzeltin, veya BBS kur ekranında Kurabiye dosyasını okunabilir duruma getiriniz.';
$lang_bridgemgr_php['error_mandatory_field_empty'] = '%s alanını boş bırakmayınız. Doğru verileri giriniz.';
$lang_bridgemgr_php['error_no_trailing_slash'] = '%s alanının sonunda eğik çizgi (Slash) olmamalı.';
$lang_bridgemgr_php['error_trailing_slash'] = '%s alanının sonunda eğik çizgi (Slash) olmalı.';
$lang_bridgemgr_php['error_prefix_and_table'] = '%s ve ';
$lang_bridgemgr_php['recovery_title'] = 'Bağlantı ayarları: acil tamir';
$lang_bridgemgr_php['recovery_explanation'] = 'Buraya Coppermine bağlantı yöneticisi olarak geldiyseniz, önce yönetici olarak giriş yapmalısınız. Eğer bir oluşan bir hata sonucu giriş yapamıyorsanız, bunu bu sayfadan kapatabilirsiniz. Kullanıcı ismi ve şifreden sonra size ğiriş izni vermez fakat BBS programı bağlantısını açıp kapatmanıza izin veriri.';
$lang_bridgemgr_php['username'] = 'Kullanıcı adı';
$lang_bridgemgr_php['password'] = 'Şifre';
$lang_bridgemgr_php['disable_submit'] = 'Gönder!';
$lang_bridgemgr_php['recovery_success_title'] = 'Giriş başarılı';
$lang_bridgemgr_php['recovery_success_content'] = 'BBS bağlantısını kapatıldı. Coppermine şu anda gene &quot;standalone&quot; olarak çalışıyor.';
$lang_bridgemgr_php['recovery_success_advice_login'] = 'BBS bağlantısını kapatıp, açmak veya değiştirmek için yönetici olarak giriş yapınız.';
$lang_bridgemgr_php['goto_login'] = 'Giriş sayfasına gidiniz';
$lang_bridgemgr_php['goto_bridgemgr'] = 'Bağlantı ayar sayfasına gidiniz';
$lang_bridgemgr_php['recovery_failure_title'] = 'Giriş başarısız';
$lang_bridgemgr_php['recovery_failure_content'] = 'Giriş için kullandıgınız bilgiler doğru değil. Coppermine &quot;standalone&quot; proğramının Yönetici adı ve şifresi girilmeli.';
$lang_bridgemgr_php['try_again'] = 'tekrar deneyiniz';
$lang_bridgemgr_php['recovery_wait_title'] = 'Bekleme süresi bitmedi';
$lang_bridgemgr_php['recovery_wait_content'] = 'Güvenlik nedeni ile bu kadar sıklıkta ğiriş denemesine sistem tarafından izin verilmemekte. Lütfen bir süre sonra tekrar deneyiniz.';
$lang_bridgemgr_php['wait'] = 'Bekleyiniz';
$lang_bridgemgr_php['browse'] = 'Gez';
}

// ------------------------------------------------------------------------- //
// File calendar.php
// ------------------------------------------------------------------------- //
if (defined('CALENDAR_PHP')) {
$lang_calendar_php['title'] = 'Takvim';
$lang_calendar_php['clear_date'] = 'Tarihi temizle';
$lang_calendar_php['files'] = 'Dosyalar'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //
if (defined('CATMGR_PHP')) {
$lang_catmgr_php['miss_param'] = '\'%s\' işlemi için gerekli parametreler eksik!';
$lang_catmgr_php['unknown_cat'] = 'Seçilen kategori veritabanında bulunamadı';
$lang_catmgr_php['usergal_cat_ro'] = 'Kullanıcı galerileri katagorisi silinemez!';
$lang_catmgr_php['manage_cat'] = 'Kategorileri yönet';
$lang_catmgr_php['confirm_delete'] = 'Bu katagoriyi SİLMEK istediğinizden eminmisiniz'; // js-alert
$lang_catmgr_php['category'] = 'Kategoriler';
$lang_catmgr_php['operations'] = 'İşlemler';
$lang_catmgr_php['move_into'] = 'Taşı';
$lang_catmgr_php['update_create'] = 'Kategori güncelle/ekle';
$lang_catmgr_php['parent_cat'] = 'Ana kategori';
$lang_catmgr_php['cat_title'] = 'Kategori adı';
$lang_catmgr_php['cat_thumb'] = 'Kategori görüntüsü';
$lang_catmgr_php['cat_desc'] = 'Kategori tanımı';
$lang_catmgr_php['categories_alpha_sort'] = 'Kategorileri alfabetik sıraya göre diz (özel sıralama düzeni yerine)';
$lang_catmgr_php['save_cfg'] = 'Ayarları kaydet';
$lang_catmgr_php['no_category'] = '* Kategori yok *'; // cpg1.5
$lang_catmgr_php['group_create_alb'] = 'Albüm üretmek için gruba izin verin'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File contact.php
// ------------------------------------------------------------------------- //
if (defined('CONTACT_PHP')) {
$lang_contact_php['title'] = 'İletişim'; // cpg1.5
$lang_contact_php['your_name'] = 'İsminiz'; // cpg1.5
$lang_contact_php['your_email'] = 'E-posta adresiniz'; // cpg1.5
$lang_contact_php['subject'] = 'Konu'; // cpg1.5
$lang_contact_php['your_message'] = 'Mesajınız'; // cpg1.5
$lang_contact_php['name_field_mandatory'] = 'Lütfen adınızı girin'; // cpg1.5 //js-alert
$lang_contact_php['name_field_invalid'] = 'Lütfen gerçek adınızı girin'; // cpg1.5 //js-alert
$lang_contact_php['email_field_mandatory'] = 'Lütfen e-posta adresinizi girin'; // cpg1.5 //js-alert
$lang_contact_php['email_field_invalid'] = 'Lütfen geçerli bir e-posta adresi girin'; // cpg1.5 //js-alert
$lang_contact_php['subject_field_mandatory'] = 'Lütfen anlamlı bir konu girin'; // cpg1.5 //js-alert
$lang_contact_php['message_field_mandatory'] = 'Lütfen mesajınızı girin'; // cpg1.5 //js-alert
$lang_contact_php['confirmation'] = 'Onay'; // cpg1.5
$lang_contact_php['email_headline'] = 'Bu e-posta %s tarihinde %s iletişim formunu tarafından gönderildi. %s IP adresi kullanıldı.'; // cpg1.5
$lang_contact_php['registered_user'] = 'kayıtlı kullanıcılar'; // cpg1.5
$lang_contact_php['guest'] = 'Konuk'; // cpg1.5
$lang_contact_php['unknown'] = 'bilinmeyen'; // cpg1.5
$lang_contact_php['user_info'] = 'Bu %s, %s adlı kişi, %s e-posta adresi olan, şunu şöyledi:'; // cpg1.5
$lang_contact_php['failed_sending_email'] = 'E-posta gönderilemiyor. Lütfen daha sonra tekrar deneyin.'; //cpg1.5
$lang_contact_php['email_sent'] = 'E-postanız gönderildi.'; //cpg1.5
}


// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) {
$lang_admin_php['title'] = 'Galeri ayarları';
$lang_admin_php['general_settings'] = 'Genel ayarlar'; // cpg1.5
$lang_admin_php['language_charset_settings'] = 'Dil ve karakter ayarları'; // cpg1.5
$lang_admin_php['themes_settings'] = 'Tema ayarları'; // cpg1.5
$lang_admin_php['album_list_view'] = 'Albüm listesi görünümü'; // cpg1.5
$lang_admin_php['thumbnail_view'] = 'Küçük resim görünümü'; // cpg1.5
$lang_admin_php['image_view'] = 'Resim görünümü'; // cpg1.5
$lang_admin_php['comment_settings'] = 'Yorum ayarları'; // cpg1.5
$lang_admin_php['thumbnail_settings'] = 'Küçük resim ayarları'; // cpg1.5
$lang_admin_php['file_settings'] = 'Resim/Dosya ayarları'; // cpg1.5
$lang_admin_php['image_watermarking'] = 'Resimlerde filigran'; // cpg1.5
$lang_admin_php['registration'] = 'Kayıt'; // cpg1.5
$lang_admin_php['user_settings'] = 'Kullanıcı ayarları'; // cpg1.5
$lang_admin_php['custom_fields_user_profile'] = 'Kullanıcı profilleri için özel alanlar (boş bırakın, eğer kullanılmıyorsa). Uzun girişler için 6. profil alanını kullan (biyografi gibi).'; // cpg1.5
$lang_admin_php['custom_fields_image_description'] = 'Görüntü bilgileri için özel alanlar (boş bırakın, gerekli değilse)'; // cpg1.5
$lang_admin_php['cookie_settings'] = 'Çerez ayarları'; // cpg1.5
$lang_admin_php['email_settings'] = 'E-posta ayarları  (normalde burada herhangi bir ayar yapılmasına gerek yok; emin değilseniz tüm alanları boş bırakın)'; // cpg1.5
$lang_admin_php['logging_stats'] = 'Günlük kaydı ve istatistikler'; // cpg1.5
$lang_admin_php['maintenance_settings'] = 'Bakım ayarları'; // cpg1.5
$lang_admin_php['manage_exif'] = 'Exif-ayarlarını yönet';
$lang_admin_php['manage_plugins'] = 'Eklentileri yönet';
$lang_admin_php['manage_keyword'] = 'Anahtar kelimeleri yönet';
$lang_admin_php['restore_cfg'] = 'Fabrika ayarlarına sıfırla';
$lang_admin_php['restore_cfg_confirm'] = 'Gerçekten tüm yapılandırmayı fabrika ayarlarına sıfırlamak istiyor musunuz? Bu adım geri alınamaz!'; // cpg1.5 //js-alert
$lang_admin_php['save_cfg'] = 'Yeni ayarları kaydet';
$lang_admin_php['notes'] = 'Notlar';
$lang_admin_php['info'] = 'Bilgi';
$lang_admin_php['upd_success'] = 'Coppermine galeri ayarları güncellendi';
$lang_admin_php['restore_success'] = 'Coppermine galeri ayarları varsayılana döndü';
$lang_admin_php['name_a'] = 'Ada göre ARTAN';
$lang_admin_php['name_d'] = 'Ada göre AZALAN';
$lang_admin_php['title_a'] = 'Başlığa göre ARTAN';
$lang_admin_php['title_d'] = 'Başlığa göre AZALAN';
$lang_admin_php['date_a'] = 'Tarihe göre ARTAN';
$lang_admin_php['date_d'] = 'Tarihe göre AZALAN';
$lang_admin_php['pos_a'] = 'Artan konum';
$lang_admin_php['pos_d'] = 'Azalan konum';
$lang_admin_php['th_any'] = 'Maksimum değer (ya yükseklik veya genişlik)';
$lang_admin_php['th_ht'] = 'Yükseklik';
$lang_admin_php['th_wd'] = 'Genişlik';
$lang_admin_php['th_ex'] = 'Tam'; // cpg1.5
$lang_admin_php['debug_everyone'] = 'tümü';
$lang_admin_php['debug_admin'] = 'sadece Yönetici';
$lang_admin_php['no_logs'] = 'Kapat';
$lang_admin_php['log_normal'] = 'Normal';
$lang_admin_php['log_all'] = 'Tüm';
$lang_admin_php['view_logs'] = 'Günlük göster';
$lang_admin_php['click_expand'] = 'Ayarları görmek için konu başlığı seçiniz';
$lang_admin_php['expand_all'] = 'Tümünü Aç';
$lang_admin_php['toggle_all'] = 'Tümünü Kapat'; // cpg1.5
$lang_admin_php['notice1'] = '(*) Eğer veritabanında bulunan dosyalar varsa bu ayarlar değiştirilemez.';
$lang_admin_php['notice2'] = '(**) Değerlerde yapacağınız degişiklikler tüm dosyalarınıza yansıyacaktır. Bunun için dosyalarınız veritabanında kayıtlı ise değiştirmemenizi tavsiye ederiz. Değerleri degiştirmek için &quot;<a href="util.php">Yönetici İşlevleri</a> seçeneğini kullanınız (resim büyüklüğü ayarla)&quot;.';
$lang_admin_php['notice3'] = '(***) Günlük dosyaları ingilizcedir.';
$lang_admin_php['bbs_disabled'] = 'Köprü kullanımında devre dışı bırakır';
$lang_admin_php['auto_resize_everyone'] = 'Tümü (Kullanıcı+Yönetici)';
$lang_admin_php['auto_resize_user'] = 'Sadece kullanıcılar';
$lang_admin_php['ascending'] = 'artan';
$lang_admin_php['descending'] = 'azalan';
$lang_admin_php['collapse_all'] = 'Tümünü kapat'; // cpg1.5
$lang_admin_php['separate_page'] = 'ayrı bir sayfada'; // cpg1.5
$lang_admin_php['inline'] = 'sıralı'; // cpg1.5
$lang_admin_php['guests_only'] = 'Sadece misafirler'; // cpg1.5
$lang_admin_php['wm_bottomright'] = 'Sağ alt'; // cpg1.5
$lang_admin_php['wm_bottomleft'] = 'Sol alt'; // cpg1.5
$lang_admin_php['wm_topleft'] = 'Sol üst'; // cpg1.5
$lang_admin_php['wm_topright'] = 'Sağ üst'; // cpg1.5
$lang_admin_php['wm_center'] = 'Merkez'; // cpg1.5
$lang_admin_php['wm_both'] = 'Her ikisi'; // cpg1.5
$lang_admin_php['wm_original'] = 'Orijinal'; // cpg1.5
$lang_admin_php['wm_resized'] = 'Değiştirilmiş boyut'; // cpg1.5
$lang_admin_php['gallery_name'] = 'Galeri adı'; // cpg1.5
$lang_admin_php['gallery_description'] = 'Galeri açıklaması'; // cpg1.5
$lang_admin_php['gallery_admin_email'] = 'Galeri yönetici e-postası'; // cpg1.5
$lang_admin_php['ecards_more_pic_target'] = 'URL Coppermine galeri klasörün'; // cpg1.5
$lang_admin_php['ecards_more_pic_target_detail'] = '(eğik çizgi ile, hayır \'index.php\' ya da benzeri sonunda)'; // cpg1.5
$lang_admin_php['home_target'] = 'URL anasayfasının'; // cpg1.5
$lang_admin_php['enable_zipdownload'] = 'Favorilerin ZIP indirilmesine izin ver'; // cpg1.5
$lang_admin_php['enable_zipdownload_no_textfile'] = 'sadece Favoriler'; // cpg1.5
$lang_admin_php['enable_zipdownload_additional_textfile'] = 'Favoriler ve benioku dosyası'; // cpg1.5
$lang_admin_php['time_offset'] = 'GMT dayalı zaman dilimi farkı'; // cpg1.5
$lang_admin_php['time_offset_detail'] = '(şimdiki zaman: ' . localised_date(-1, $lang_date['comment']) . ')'; // cpg1.5
$lang_admin_php['enable_help'] = 'Yardım simgeleri etkinleştir'; // cpg1.5
$lang_admin_php['enable_help_description'] = 'Yardım kısmen sadece İngilizce olarak mevcuttur'; // cpg1.5
$lang_admin_php['clickable_keyword_search'] = 'Aramada tıklanabilir anahtar kelimeleri etkinleştirin'; // cpg1.5
$lang_admin_php['keyword_separator'] = 'Kelimeler ayırıcı'; // cpg1.5
$lang_admin_php['keyword_convert'] = 'Kelimeler ayırıcı dönüştür'; // cpg1.5
$lang_admin_php['enable_plugins'] = 'Eklentileri aktifleştir'; // cpg1.5
$lang_admin_php['purge_expired_bans'] = 'Otomatik olarak sona ermiş ban mesajları sil'; // cpg1.5
$lang_admin_php['browse_batch_add'] = 'Ağaç yapısı toplu ekleme için etkinleştir'; // cpg1.5
$lang_admin_php['batch_proc_limit'] = 'Görüntülerin toplu işlem için eşzamanlı süreç (Toplu ekle)'; // cpg1.5
$lang_admin_php['display_thumbs_batch_add'] = 'Önizleme kücük resimleri toplu eklemede göster'; // cpg1.5
$lang_admin_php['lang'] = 'Varsayılan dil'; // cpg1.5
$lang_admin_php['language_autodetect'] = 'Otomatik dil belirlenmesi'; // cpg1.5
$lang_admin_php['charset'] = 'Karakter kümesi'; // cpg1.5
  // 'previous_next_tab'] = 'Display previous/next on tabbed pages'; // cpg1.5
$lang_admin_php['theme'] = 'Tasarım (Tema)'; // cpg1.5
$lang_admin_php['custom_lnk_name'] = 'Adı özel bir menü girdisi'; // cpg1.5
$lang_admin_php['custom_lnk_url'] = 'URL özel bir menü girdisi'; // cpg1.5
$lang_admin_php['enable_menu_icons'] = 'Menü ikonları etkinleştir'; // cpg1.5
$lang_admin_php['show_bbcode_help'] = 'BBCode yardım göster'; // cpg1.5
$lang_admin_php['vanity_block'] = 'XHTML ve CSS uyumlu olarak tanımlanan tasarımlarında Vanity Blok gösterilsin mi?'; // cpg1.5
$lang_admin_php['highlight_multiple'] = 'Birden fazla giriş seçmek için, anahtar [Ctrl] tuşunu basılı tutun'; // cpg1.5
$lang_admin_php['custom_header_path'] = 'header-include özel yolu'; // cpg1.5
$lang_admin_php['custom_footer_path'] = 'footer-include özel yolu'; // cpg1.5
$lang_admin_php['browse_by_date'] = 'Görüşü tarihe göre etkinleştirin'; // cpg1.5
$lang_admin_php['display_redirection_page'] = 'Yönlendirme sayfalarını göster'; // cpg1.5
$lang_admin_php['display_xp_publish_link'] = 'Yükleme için XP Publisher uygula, bir link görüntüleyerek'; // cpg1.5
$lang_admin_php['main_table_width'] = 'Ana tablonun genişliği'; // cpg1.5
$lang_admin_php['pixels_or_percent'] = 'piksel veya % olarak'; // cpg1.5
$lang_admin_php['subcat_level'] = 'Gösterilen kategori düzeylerin sayısı'; // cpg1.5
$lang_admin_php['albums_per_page'] = 'Gösterilen albümlerin sayısı'; // cpg1.5
$lang_admin_php['album_list_cols'] = 'Albüm listesinde sütun sayısı'; // cpg1.5
$lang_admin_php['alb_list_thumb_size'] = 'Albüm küçük resim boyutu'; // cpg1.5
$lang_admin_php['main_page_layout'] = 'Ana Sayfa İçeriği'; // cpg1.5
$lang_admin_php['first_level'] = 'Albümlerin ilk küçük resim seviyesi kategori olarak da gösterilsin'; // cpg1.5
$lang_admin_php['categories_alpha_sort'] = 'Kategoriler alfabetik olarak sıralansın'; // cpg1.5
$lang_admin_php['categories_alpha_sort_details'] = '(özel sıralama düzeni yerine)'; // cpg1.5
$lang_admin_php['link_pic_count'] = 'Bağlantılı dosyaların sayısını göster'; // cpg1.5
$lang_admin_php['thumbcols'] = 'Küçük resim sayfasında sütun sayısı'; // cpg1.5
$lang_admin_php['thumbrows'] = 'Küçük resim sayfasında satır sayısı'; // cpg1.5
$lang_admin_php['max_tabs'] = 'Azami gösterilecek sekmen sayısı'; // cpg1.5
$lang_admin_php['tabs_dropdown'] = 'Show dropdown list of all pages next to tabs'; // cpg1.5
$lang_admin_php['caption_in_Küçük resimview'] = 'Display file caption (in addition to title) below the Küçük resim'; // cpg1.5
$lang_admin_php['views_in_Küçük resimview'] = 'Küçük resim altında yorum sayısını görüntüle'; // cpg1.5
$lang_admin_php['display_comment_count'] = 'Küçük resim altında yorum sayısını görüntüle'; // cpg1.5
$lang_admin_php['display_uploader'] = 'Küçük resim altında gönderenin adı görüntüle'; // cpg1.5
// 'display_admin_uploader'] = 'Küçük resim altında gönderen yöneticinin adını görüntüle'; // cpg1.5
$lang_admin_php['display_filename'] = 'Küçük resim altında dosya adı görüntüle'; // cpg1.5
$lang_admin_php['display_Küçük resim_rating'] = 'Küçük resim altında oyları görüntüle '; // cpg1.5
$lang_admin_php['alb_desc_Küçük resim'] = 'Albüm açıklamasın görüntüle'; // cpg1.5
$lang_admin_php['Küçük resim_to_fullsize'] = 'Küçük resimden tam boyutlu görüntüyü doğrudan göster'; // cpg1.5
$lang_admin_php['default_sort_order'] = 'dosyalar için varsayılan sıralama düzeni'; // cpg1.5
$lang_admin_php['min_votes_for_rating'] = 'Bir dosya \'En Beğenilen\' listesinde görünmesini için asgari oy sayısı'; // cpg1.5
$lang_admin_php['picture_table_width'] = 'dosyasını görüntülemek için tablo genişliği'; // cpg1.5
$lang_admin_php['display_pic_info'] = 'Dosya bilgileri varsayılan olarak görünür'; // cpg1.5
$lang_admin_php['picinfo_movie_download_link'] = 'Display movie download link in the file information area'; // cpg1.5
$lang_admin_php['max_img_desc_length'] = 'resim anlatımı için en fazla uzunluk'; // cpg1.5
$lang_admin_php['max_com_wlength'] = 'Bir kelime için en fazla karakter sayısı'; // cpg1.5
$lang_admin_php['display_film_strip'] = 'Film şeridini görüntüle'; // cpg1.5
$lang_admin_php['max_film_strip_items'] = 'Film şeridindeki öğe sayısı'; // cpg1.5
$lang_admin_php['slideshow_interval'] = 'Slayt aralığı'; // cpg1.5
$lang_admin_php['milliseconds'] = 'Milisaniye'; // cpg1.5
$lang_admin_php['slideshow_interval_detail'] = '1 saniye = 1000 milisaniye'; // cpg1.5
$lang_admin_php['slideshow_hits'] = 'Slayt gösterisini hits olarak kaydet'; // cpg1.5
$lang_admin_php['ecard_flash'] = 'Ekard Flash kullanılmasına izin ver'; // cpg1.5
$lang_admin_php['not_recommended'] = 'önerilmez'; // cpg1.5
$lang_admin_php['recommended'] = 'Tavsiye'; // cpg1.5
$lang_admin_php['transparent_overlay'] = 'Hırsızlığı en aza indirmek için şeffaf bir kaplama görüntü ekle'; // cpg1.5
$lang_admin_php['old_style_rating'] = 'Eski değerlendirme sistemine geri git'; // cpg1.5
$lang_admin_php['old_style_rating_extra'] = 'This will disable the \'Number of rating stars to be used\' option'; // cpg1.5
$lang_admin_php['rating_stars_amount'] = 'oy kullanılırken kullanılacak yıldız sayısı'; // cpg1.5
$lang_admin_php['rate_own_files'] = 'Kullanıcılar kendi dosyalarına oy verebilsin'; // cpg1.5
$lang_admin_php['filter_bad_words'] = 'Filtre kötü sözler'; // cpg1.5
$lang_admin_php['enable_smilies'] = 'Suratlara izin ver'; // cpg1.5
$lang_admin_php['disable_comment_flood_protect'] = 'Aynı kullanıcının bir dosya birkaç yorum yazmasına izin ver'; // cpg1.5
$lang_admin_php['disable_comment_flood_protect_details'] = '(Devre dışı taşkın koruma)'; // cpg1.5
$lang_admin_php['max_com_lines'] = 'Yorumda kullanılabilecek sıra sayısı'; // cpg1.5
$lang_admin_php['max_com_size'] = 'Yorumun maksimum uzunluğu'; // cpg1.5
$lang_admin_php['email_comment_notification'] = 'Yorumları e-posta ile admine haber et'; // cpg1.5
$lang_admin_php['comments_sort_descending'] = 'Yorum sıralama düzeni'; // cpg1.5
$lang_admin_php['comments_per_page'] = 'sayfa başına yorumlar'; // cpg1.5
$lang_admin_php['comments_anon_pfx'] = 'Prefix for anonymous comments authors'; // cpg1.5
$lang_admin_php['comment_approval'] = 'Yorum onayı gerekiyor'; // cpg1.5
$lang_admin_php['display_comment_approval_only'] = 'Only display comments needing approval on the &quot;Review Comments&quot; page'; // cpg1.5
$lang_admin_php['comment_placeholder'] = 'Display placeholder text to end users for comments waiting for admin approval'; // cpg1.5
$lang_admin_php['comment_user_edit'] = 'Kullanıcıların kendi yorumlarını düzenlemesine izin ver'; // cpg1.5
$lang_admin_php['comment_captcha'] = 'Yorum eklemek için Ekran Captcha (Görsel Onay)'; // cpg1.5
$lang_admin_php['comment_akismet_enable'] = 'Akismet Seçenekleri'; // cpg1.5
$lang_admin_php['comment_akismet_enable_description'] = 'Akismet spam olarak bir açıklama reddederse ne yapılmalı?'; // cpg1.5
$lang_admin_php['comment_akismet_applicable_only'] = 'Akismet geçerli bir API anahtarı girerek etkinleştirildiğinde Seçenekleri geçerlidir'; // cpg1.5
$lang_admin_php['comment_akismet_enable_approval'] = 'Akismette geçemeyen yorumlara izin ver ama onları onaylama'; // cpg1.5
$lang_admin_php['comment_akismet_drop_tell'] = 'Drop comment that fails to validate, and tell author that it was rejected'; // cpg1.5
$lang_admin_php['comment_akismet_drop_lie'] = 'Drop comment that fails to validate, but tell author (spammer) it has been added'; // cpg1.5
$lang_admin_php['comment_akismet_api_key'] = 'Akismet API anahtarı'; // cpg1.5
$lang_admin_php['comment_akismet_api_key_description'] = 'Akismet devre dışı bırakmak için boş bırak'; // cpg1.5
$lang_admin_php['comment_akismet_group'] = 'Apply Akismet for comments made by'; // cpg1.5
$lang_admin_php['comment_promote_registration'] = 'Ask guests to log in to post comments'; // cpg1.5
$lang_admin_php['Küçük resim_width'] = 'Max dimension of a Küçük resim (width, if you use "exact" in "Use dimension")'; // cpg1.5
$lang_admin_php['Küçük resim_use'] = 'Kullanım boyutu'; // cpg1.5
$lang_admin_php['Küçük resim_use_detail'] = '(Küçük resim için genişlik ve yükseklik veya maksimum boy)'; // cpg1.5
$lang_admin_php['Küçük resim_height'] = 'Küçük resim yüksekliği'; // cpg1.5
$lang_admin_php['Küçük resim_height_detail'] = '(only applies if you use &quot;exact&quot; in &quot;Use dimension&quot;)'; // cpg1.5
$lang_admin_php['movie_audio_document'] = 'film, ses, belge'; // cpg1.5
$lang_admin_php['Küçük resim_pfx'] = 'Küçük resimler için önek'; // cpg1.5
$lang_admin_php['enable_unsharp'] = 'Küçük resim Bileme: Unsharp Mask izin'; // cpg1.5
$lang_admin_php['unsharp_amount'] = 'Küçük resim Bileme miktarı'; // cpg1.5
$lang_admin_php['unsharp_radius'] = 'Küçük resim Bileme yarıçapı'; // cpg1.5
$lang_admin_php['unsharp_threshold'] = 'Küçük resim Bileme eşik'; // cpg1.5
$lang_admin_php['jpeg_qual'] = 'Kalitede JPEG dosyalarını'; // cpg1.5
$lang_admin_php['make_intermediate'] = 'ara resimleri oluşturma'; // cpg1.5
$lang_admin_php['picture_use'] = 'Kullanım boyut'; // cpg1.5
$lang_admin_php['picture_use_detail'] = '(width or height or max aspect for an intermediate picture)'; // cpg1.5
$lang_admin_php['picture_use_Küçük resim'] = 'Küçük resim gibi'; // cpg1.5
$lang_admin_php['picture_width'] = 'Ara resmi için maksimum genişlik ve yükseklik'; // cpg1.5
$lang_admin_php['max_upl_size'] = 'yüklenen dosyalar için maksimum boyut'; // cpg1.5
$lang_admin_php['kilobytes'] = 'KB'; // cpg1.5
$lang_admin_php['pixels'] = 'piksel'; // cpg1.5
$lang_admin_php['max_upl_width_height'] = 'Yüklenen resimler için maksimum genişlik ve yükseklik'; // cpg1.5
$lang_admin_php['auto_resize'] = 'Maksimumdan yüksek veya geniş olan resimleri otamatik boyutlandır'; // cpg1.5
$lang_admin_php['fullsize_padding_x'] = 'Horizontal padding for full-size pop-up'; // cpg1.5
$lang_admin_php['fullsize_padding_y'] = 'Vertical padding for full-size pop-up'; // cpg1.5
$lang_admin_php['allow_private_albums'] = 'Albümler özel olabilir'; // cpg1.5
$lang_admin_php['allow_private_albums_note'] = '(Not: Eğer \'evet \' den \'hayır \'a geçerseniz herhangi bir akımda özel albümdekiler görünebilir)'; // cpg1.5
$lang_admin_php['show_private'] = 'Show private album icon to unlogged user'; // cpg1.5
$lang_admin_php['forbiden_fname_char'] = 'Dosya adlarında yasak karakterler'; // cpg1.5
$lang_admin_php['silly_safe_mode'] = 'Enable &quot;silly safe mode&quot;'; // cpg1.5
$lang_admin_php['allowed_img_types'] = 'Izin verilen resim türleri'; // cpg1.5
$lang_admin_php['allowed_mov_types'] = 'Izin verilen film türleri'; // cpg1.5
$lang_admin_php['media_autostart'] = 'Film oynatma autostart'; // cpg1.5
$lang_admin_php['allowed_snd_types'] = 'Izin verilen ses türleri'; // cpg1.5
$lang_admin_php['allowed_doc_types'] = 'Izin verilen belge türleri'; // cpg1.5
$lang_admin_php['Küçük resim_method'] = 'Görüntüleri yeniden boyutlandırma için yöntem'; // cpg1.5
$lang_admin_php['impath'] = 'ImageMagick yolu \'dönüştürmek \' programı'; // cpg1.5
$lang_admin_php['impath_example'] = '( örneğin /usr/bin/)'; // cpg1.5
$lang_admin_php['im_options'] = 'ImageMagick için ek komut satırı seçenekleri'; // cpg1.5
$lang_admin_php['read_exif_data'] = 'JPEG dosyaları oku EXIF verilerini'; // cpg1.5
$lang_admin_php['read_iptc_data'] = 'JPEG dosyaları oku IPTC veri'; // cpg1.5
$lang_admin_php['fullpath'] = 'Albüm listesi'; // cpg1.5
$lang_admin_php['userpics'] = 'Kullanıcı dosyaları için dizin'; // cpg1.5
$lang_admin_php['normal_pfx'] = 'ara resimleri için önek'; // cpg1.5
$lang_admin_php['default_dir_mode'] = 'dizinler için varsayılan mod'; // cpg1.5
$lang_admin_php['default_file_mode'] = 'dosyalar için varsayılan mod'; // cpg1.5
$lang_admin_php['enable_watermark'] = 'Filigran görüntüleri / Watermark images'; // cpg1.5
$lang_admin_php['enable_Küçük resim_watermark'] = 'Kişisel küçük resimler için filigran / Watermark '; // cpg1.5
$lang_admin_php['where_put_watermark'] = 'filigran yeri'; // cpg1.5
$lang_admin_php['which_files_to_watermark'] = 'Which files to watermark'; // cpg1.5
$lang_admin_php['watermark_file'] = 'filigran için kullanılacak dosya '; // cpg1.5
$lang_admin_php['watermark_transparency'] = 'tüm görüntü için şeffaflık'; // cpg1.5
$lang_admin_php['zero_2_hundred'] = '0-100'; // cpg1.5
$lang_admin_php['reduce_watermark'] = 'Downsize watermark if width of a picture is smaller than entered value. That is the 100% reference point. Resizing of the watermark is linear (0 to disable)'; // cpg1.5
$lang_admin_php['watermark_transparency_featherx'] = 'Set color transparent x'; // cpg1.5
$lang_admin_php['watermark_transparency_feathery'] = 'Set color transparent y'; // cpg1.5
$lang_admin_php['gd2_only'] = 'GD2 sadece'; // cpg1.5
$lang_admin_php['allow_user_registration'] = 'Yeni kullanıcı kayıtları izin ver'; // cpg1.5
$lang_admin_php['global_registration_pw'] = 'Kayıt için küresel şifre'; // cpg1.5
$lang_admin_php['user_registration_disclaimer'] = ''; // cpg1.5
$lang_admin_php['registration_captcha'] = 'Kayıt sırasında Captcha (Görsel Onay) görüntüle '; // cpg1.5
$lang_admin_php['reg_requires_valid_email'] = 'Kullanıcı kaydında e-posta doğrulaması gerektirir'; // cpg1.5
$lang_admin_php['reg_notify_admin_email'] = 'Kullanıcı kaydını e-posta ile admine bildir'; // cpg1.5
$lang_admin_php['admin_activation'] = 'Kayıtlarıda yönetici aktivasyonu gerekli'; // cpg1.5
$lang_admin_php['personal_album_on_registration'] = 'Kayıt esnasında kişisel kullanıcı galerisi oluştur'; // cpg1.5
$lang_admin_php['allow_unlogged_access'] = 'unlogged kullanıcılar (misafir ya da anonim) erişime izin ver'; // cpg1.5
$lang_admin_php['Küçük resim_intermediate_full'] = 'Küçük, orta ve tam boy'; // cpg1.5
$lang_admin_php['Küçük resim_intermediate'] = 'Küçük ve orta görüntü'; // cpg1.5
$lang_admin_php['Küçük resim_only'] = 'Küçük resim sadece'; // cpg1.5
$lang_admin_php['upload_mechanism'] = 'Varsayılan yöntem upload'; // cpg1.5
$lang_admin_php['upload_swf'] = 'ileri - Birden fazla dosya, Flash yönlendirmeli (önerilir)'; // cpg1.5
$lang_admin_php['upload_single'] = 'basit - Her seferinde bir dosya'; // cpg1.5
$lang_admin_php['allow_user_upload_choice'] = 'Kullanıcılar yükleme yöntemi seçmesine izin ver'; // cpg1.5
$lang_admin_php['allow_duplicate_emails_addr'] = 'Aynı e-posta adresi kayıtlarda birden fazla kullanılabilir'; // cpg1.5
$lang_admin_php['upl_notify_admin_email'] = 'Onaylanacak resim yüklendiğinde admini uyar.'; // cpg1.5
$lang_admin_php['allow_memberlist'] = 'Kullanıcılar üye listesini görebilir'; // cpg1.5
$lang_admin_php['allow_email_change'] = 'Kullanıcıların profil e-posta adresini değiştirmesine izin ver'; // cpg1.5
$lang_admin_php['allow_user_account_delete'] = 'Kullanıcıların kendi hesabını silmesine izin ver'; // cpg1.5
$lang_admin_php['users_can_edit_pics'] = 'Allow users to retain control over their pics in public galleries'; // cpg1.5
$lang_admin_php['allow_user_move_album'] = 'Kullanıcıların kendi albümlerini bir başka kategoriye taşımasına izin ver'; // cpg1.5
$lang_admin_php['allow_user_album_keyword'] = 'Allow users to assign album keywords'; // cpg1.5
$lang_admin_php['allow_user_edit_after_cat_close'] = 'Allow users to edit their albums when in a locked category'; // cpg1.5
$lang_admin_php['login_method_username'] = 'Kullanıcı adı'; // cpg1.5
$lang_admin_php['login_method_email'] = 'E-posta adresi'; // cpg1.5
$lang_admin_php['login_method_both'] = 'Her ikiside'; // cpg1.5
$lang_admin_php['login_method'] = 'Kullanıcıların nasıl giriş yapabilmesini istiyorsunuz'; // cpg1.5
$lang_admin_php['login_threshold'] = 'Number of failed login attempts until temporary ban'; // cpg1.5
$lang_admin_php['login_threshold_detail'] = '(Kaba kuvvet saldırıları önlemek için)'; // cpg1.5
$lang_admin_php['login_expiry'] = 'Duration of a temporary ban after failed logins'; // cpg1.5
$lang_admin_php['minutes'] = 'dakika'; // cpg1.5
$lang_admin_php['report_post'] = 'Admine bildir'; // cpg1.5
$lang_admin_php['user_profile1_name'] = 'Profili 1 ad'; // cpg1.5
$lang_admin_php['user_profile2_name'] = 'Profili 2 isim'; // cpg1.5
$lang_admin_php['user_profile3_name'] = 'Profil 3 isim'; // cpg1.5
$lang_admin_php['user_profile4_name'] = 'Profil 4 isim'; // cpg1.5
$lang_admin_php['user_profile5_name'] = 'Profil 5 isim'; // cpg1.5
$lang_admin_php['user_profile6_name'] = 'Profil 6 isim'; // cpg1.5
$lang_admin_php['user_field1_name'] = 'Alan adı 1'; // cpg1.5
$lang_admin_php['user_field2_name'] = 'Alan 2 isim'; // cpg1.5
$lang_admin_php['user_field3_name'] = 'Alan 3 isim'; // cpg1.5
$lang_admin_php['user_field4_name'] = 'Alan 4 isim'; // cpg1.5
$lang_admin_php['cookie_name'] = 'Çerez adı'; // cpg1.5
$lang_admin_php['cookie_path'] = 'Çerez yolu'; // cpg1.5
$lang_admin_php['smtp_host'] = 'SMTP Host (boş birakildiginda sendmail kullanılacaktır bıraktığında)'; // cpg1.5
$lang_admin_php['smtp_username'] = 'SMTP Kullanıcı Adı'; // cpg1.5
$lang_admin_php['smtp_password'] = 'SMTP Şifre'; // cpg1.5
$lang_admin_php['log_mode'] = ' Günlük modu'; // cpg1.5
$lang_admin_php['log_mode_details'] = 'Bütün günlük dosyaları İngilizce olarak yazılır.'; // cpg1.5
$lang_admin_php['log_ecards'] = 'Ekart günlügü'; // cpg1.5
$lang_admin_php['log_ecards_detail'] = 'Note: logging can have legal impacts. The user should be informed on registration that ecards are being logged. It is recommended to provide a separate page with a privacy policy as well.'; // cpg1.5
$lang_admin_php['vote_details'] = 'Ayrıntılı oy istatistikleri tutun'; // cpg1.5
$lang_admin_php['hit_details'] = 'ayrıntılı isabet istatistikleri tutun'; // cpg1.5
$lang_admin_php['display_stats_on_index'] = 'Ana sayfada istatistikleri görüntüle'; // cpg1.5
$lang_admin_php['count_file_hits'] = 'Dosya görüntüleme sayımı '; // cpg1.5
$lang_admin_php['count_album_hits'] = 'Albüm görüntüleme sayımı '; // cpg1.5
$lang_admin_php['count_admin_hits'] = 'Admin görüntüleme sayımı '; // cpg1.5
$lang_admin_php['debug_mode'] = 'hata ayıklama modunu etkinleştirin'; // cpg1.5
$lang_admin_php['debug_notice'] = 'debug Ekran uyarıları modu'; // cpg1.5
$lang_admin_php['offline'] = 'Galeri çevrimdışı'; // cpg1.5
$lang_admin_php['display_coppermine_news'] = 'Coppermine-gallery.net haberleri'; // cpg1.5
$lang_admin_php['display_coppermine_detail'] = 'sadece yönetici için görüntülenir'; // cpg1.5
$lang_admin_php['config_setting_invalid'] = 'The value you have set for &laquo;%s&raquo; is invalid, please review it.'; // cpg1.5
$lang_admin_php['config_setting_ok'] = 'Değiştirdiğiniz &laquo;%s&raquo; ayarlari kayıt edildi.'; // cpg1.5
$lang_admin_php['contact_form_settings'] = 'Iletişim formu ayarları'; // cpg1.5
$lang_admin_php['contact_form_guest_enable'] = 'anonim ziyaretçiler (misafirler) için iletişim formunu göster '; // cpg1.5
$lang_admin_php['contact_form_registered_enable'] = 'kayıtlı kullanıcılar için iletişim formunu göster '; // cpg1.5
$lang_admin_php['with_captcha'] = 'captcha ile'; // cpg1.5
$lang_admin_php['without_captcha'] = 'captcha olmadan'; // cpg1.5
$lang_admin_php['optional'] = 'isteğe bağlı'; // cpg1.5
$lang_admin_php['mandatory'] = 'zorunlu'; // cpg1.5
$lang_admin_php['contact_form_guest_name_field'] = 'misafirler için gönderenin adı alanını göster'; // cpg1.5
$lang_admin_php['contact_form_guest_email_field'] = 'misafirler için gönderenin e-posta alanını göster'; // cpg1.5
$lang_admin_php['contact_form_subject_field'] = 'Konu alanı göster'; // cpg1.5
$lang_admin_php['contact_form_subject_content'] = 'e-posta için konu satırı iletişim formu tarafından oluşturulur'; // cpg1.5
$lang_admin_php['contact_form_sender_email'] = 'Use the sender\'s email address as &quot;from&quot; address'; // cpg1.5
$lang_admin_php['allow_no_link'] = 'Izin ver ama \' ekran bağlantısı gösterme'; // cpg1.5
$lang_admin_php['allow_show_link'] = 'allow and promote it by displaying a link'; // cpg1.5
$lang_admin_php['display_sidebar_user'] = 'kayıtlı kullanıcılar için kenar çubuğu'; // cpg1.5
$lang_admin_php['display_sidebar_guest'] = 'misafirler için kenar çubuğu'; // cpg1.5
$lang_admin_php['do_not_change'] = 'Ne yaptıgınızı bilmiyorsanız bunu değiştirmeyin!'; // cpg1.5
$lang_admin_php['reset_to_default'] = 'Sıfırlama (Fabrika ayarlarına geri dön)'; // cpg1.5
$lang_admin_php['no_change_needed'] = 'gerekli herhangi bir değişiklik yok, config seçeneği zaten varsayılan olarak ayarlandı'; // cpg1.5
$lang_admin_php['enabled'] = 'etkin'; // cpg1.5
$lang_admin_php['disabled'] = 'Etkin değil'; // cpg1.5
$lang_admin_php['none'] = 'hiçbiri'; // cpg1.5
$lang_admin_php['warning_change'] = 'When changing this setting, only the files that are added from that point on are affected, so it\'s advisable that this setting is not changed if there are already files in the gallery. You can, however, apply the changes to the existing files with the "admin tools (resize pictures)" utility from the admin menu.'; // cpg1.5
$lang_admin_php['warning_exist'] = 'These settings mustn\'t be changed if you already have files in your database.'; // cpg1.5
$lang_admin_php['warning_dont_submit'] = 'If you are not sure about the impact that changing this setting will have, do not submit the form and review the documentation first.'; // cpg1.5 // js-alert
$lang_admin_php['menu_only'] = 'yalnızca menü'; // cpg1.5
$lang_admin_php['everywhere'] = 'her yerde'; // cpg1.5
$lang_admin_php['manage_languages'] = 'Dil Yönet'; // cpg1.5
$lang_admin_php['form_token_lifetime'] = 'ömür boyu form token '; // cpg1.5
$lang_admin_php['seconds'] = 'Saniye'; // cpg1.5
$lang_admin_php['display_reset_boxes_in_config'] = 'Yarlarda sıfırlama seçenegini göster'; // cpg1.5
$lang_admin_php['upd_not_needed'] = 'Güncelleme gerekiyordu.'; // cpg 1.5
}

// ------------------------------------------------------------------------- //
// File db_ecard.php
// ------------------------------------------------------------------------- //
if (defined('DB_ECARD_PHP')) {
$lang_db_ecard_php['title'] = 'Ekart gönder';
$lang_db_ecard_php['ecard_sender'] = 'Gönderen';
$lang_db_ecard_php['ecard_recipient'] = 'Recipient';
$lang_db_ecard_php['ecard_date'] = 'Tarih';
$lang_db_ecard_php['ecard_display'] = 'Ekart izle';
$lang_db_ecard_php['ecard_name'] = 'Ad';
$lang_db_ecard_php['ecard_email'] = 'Email';
$lang_db_ecard_php['ecard_ip'] = 'IP';
$lang_db_ecard_php['ecard_ascending'] = 'yükselen';
$lang_db_ecard_php['ecard_descending'] = 'azalan';
$lang_db_ecard_php['ecard_sorted'] = 'Sıralanmış';
$lang_db_ecard_php['ecard_by_date'] = 'Tarihe göre';
$lang_db_ecard_php['ecard_by_sender_name'] = 'gönderen\'s isim tarafından';
$lang_db_ecard_php['ecard_by_sender_email'] = 'gönderen\'s e-posta';
$lang_db_ecard_php['ecard_by_sender_ip'] = 'gönderen\'s IP adresi ile';
$lang_db_ecard_php['ecard_by_recipient_name'] = 'Alıcı\'s adı';
$lang_db_ecard_php['ecard_by_recipient_email'] = 'Alıcı\'s e-posta';
$lang_db_ecard_php['ecard_number'] = 'Displaying record %s to %s of %s';
$lang_db_ecard_php['ecard_goto_page'] = 'sayfaya gitmek';
$lang_db_ecard_php['ecard_records_per_page'] = 'Sayfa başına kayıtlar';
$lang_db_ecard_php['check_all'] = 'Bütün kontrol';
$lang_db_ecard_php['uncheck_all'] = 'Tüm işaretini kaldırın';
$lang_db_ecard_php['ecards_delete_selected'] = 'Seçilen ecards sil';
$lang_db_ecard_php['ecards_delete_confirm'] = 'Kayıtları silmek istediğinizden emin misiniz? Seçenekleri işaretleyin!';
$lang_db_ecard_php['ecards_delete_sure'] = 'Ben\'s eminim';
$lang_db_ecard_php['invalid_data'] = 'Erişmeye çalıştığınız e-kart için veri posta istemcisi tarafından bozulmuş. Linkin tam olup olmadığını kontrol edin.';
$lang_db_ecard_php['ecard_by_sender_name'] = 'gönderen\' isim tarafından';
$lang_db_ecard_php['ecard_by_sender_email'] = 'gönderen\' e-posta s';
$lang_db_ecard_php['ecard_by_sender_ip'] = 'gönderen\' IP adresi ile';
$lang_db_ecard_php['ecard_by_recipient_name'] = 'Alıcı\'s adı';
$lang_db_ecard_php['ecard_by_recipient_email'] = 'Alıcı\'s e-posta';
$lang_db_ecard_php['ecard_number'] = 'Displaying record %s to %s of %s ';
$lang_db_ecard_php['ecard_goto_page'] = 'sayfaya git';
$lang_db_ecard_php['ecard_records_per_page'] = 'Sayfa başına veri';
$lang_db_ecard_php['check_all'] = 'Tümünü işaretle';
$lang_db_ecard_php['uncheck_all'] = 'Tüm işaretleri kaldır';
$lang_db_ecard_php['ecards_delete_selected'] = 'Seçilen ekartı sil ';
$lang_db_ecard_php['ecards_delete_confirm'] = 'Silmek istediğinizden emin misiniz? Tick the checkbox!';
$lang_db_ecard_php['ecards_delete_sure'] = 'Ben\' eminim';
$lang_db_ecard_php['invalid_data'] = 'Erişmeye çalıştığınız e-kart posta istemciniz tarafından bozulmuş. Linkin tam olup olmadığını kontrol edin.';
}

// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //
if (defined('DB_INPUT_PHP')) {
$lang_db_input_php['empty_name_or_com'] = 'Adınızı ve yorumunuzu yazmanız gerekiyor';
$lang_db_input_php['com_added'] = 'Yorum eklendi'; // cpg1.5
$lang_db_input_php['alb_need_title'] = 'Albüm için bir başlık vermeniz gerekiyor!';
$lang_db_input_php['no_udp_needed'] = 'Güncelleme gerekmiyor';
$lang_db_input_php['alb_updated'] = 'Albüm güncellendi';
$lang_db_input_php['unknown_album'] = 'Seçilen albüm yok yada bu albüm için yükleme izniniz yok';
$lang_db_input_php['no_pic_uploaded'] = 'Hiçbir dosya yüklenmedi! <br /> gerçekten sunucuya dosya yüklemek için seçmişseniz, gönderme izininizin olup olmadıgını kontrol ediniz...';
$lang_db_input_php['err_mkdir'] = 'Dizin %s oluşturulamadı!';
$lang_db_input_php['dest_dir_ro'] = 'Hedef dizini%s yazılımı tarafından yazılabilir değil!';
$lang_db_input_php['err_move'] = '%s tan %s a taşımak imkansız!';
$lang_db_input_php['err_fsize_too_large'] = 'Yüklediğiniz dosyanın boyutu çok büyük (izin verilen%s sx%s)!';
$lang_db_input_php['err_imgsize_too_large'] = 'Yüklediğiniz dosyanın boyutu çok büyük (izin verilen%s KB)!';
$lang_db_input_php['err_invalid_img'] = 'Yüklediğiniz dosya geçerli bir resim değil!';
$lang_db_input_php['allowed_img_types'] = 'Sadece%s resim yükleyebilirsiniz.';
$lang_db_input_php['err_insert_pic'] = 'The file \'%s\' can\'t be inserted in the album';
$lang_db_input_php['upload_success'] = 'Dosyanız başarıyla yüklendi. <br /> Bu yönetici onayından sonra görünür olacaktır.';
$lang_db_input_php['notify_admin_email_subject'] = '%s – Yükleme bildirim';
$lang_db_input_php['notify_admin_email_body'] = 'Bir resim tarafından yüklendi %s ve yayınlanması için onaylanması gerekmekte. %s ziyaret et.';
$lang_db_input_php['info'] = 'Bilgi';
$lang_db_input_php['com_updated'] = 'Yorum güncellendi'; // cpg1.5
$lang_db_input_php['alb_updated'] = 'Albüm güncellendi';
$lang_db_input_php['err_comment_empty'] = 'Yorum boş!';
$lang_db_input_php['err_invalid_fext'] = 'aşağıdaki uzantılara sahip dosyaları Sadece kabul edilmektedir:'; // js-alert
$lang_db_input_php['no_flood'] = 'Üzgünüm ama zaten son yorumun yazarı bunu değiştirmek istiyorsanız /> size attılar yorum Düzenle Bu dosya <br için yayınlanmıştır';
$lang_db_input_php['redirect_msg'] = 'yönlendiriliyorsunuz. Eğer sayfa uzun süre yenilenmez <br /><br /> \'Devam\' ';
$lang_db_input_php['upl_success'] = 'Dosyanız başarıyla eklendi';
$lang_db_input_php['email_comment_subject'] = 'Yorum Coppermine Photo Gallery tarihinde yayınlanmıştır';
$lang_db_input_php['email_comment_body'] = 'Birisi bir yorum yazmış.';
$lang_db_input_php['album_not_selected'] = 'Albüm seçilmemiş';
$lang_db_input_php['com_author_error'] = 'Bu kullanıcı adı zaten bir başka kullanıcı tarafından kullanılmaktadır. Lütfen başka bir kullanıcı adı seçiniz.';

}

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //
if (defined('DELETE_PHP')) {
$lang_delete_php['orig_pic'] = 'Orijinal resim'; // cpg1.5
$lang_delete_php['fs_pic'] = 'Tam boy';
$lang_delete_php['del_success'] = 'başarıyla silindi';
$lang_delete_php['ns_pic'] = 'Normal boy';
$lang_delete_php['err_del'] = 'silinebilir';
$lang_delete_php['thumb_pic'] = 'küçük resim';
$lang_delete_php['comment'] = 'yorum';
$lang_delete_php['im_in_alb'] = 'Albümdeki görüntü';
$lang_delete_php['alb_del_success'] = 'Albüm &laquo;%s&raquo; silinmiş';
$lang_delete_php['alb_mgr'] = 'Albüm yöneticisi';
$lang_delete_php['err_invalid_data'] = 'Geçersiz veri \'%s\' alındı';
$lang_delete_php['create_alb'] = 'Albüm \'%s\' oluşturuldu';
$lang_delete_php['update_alb'] = 'Updating album \'%s\' with title \'%s\' and index \'%s\'';
$lang_delete_php['del_pic'] = 'dosya sil';
$lang_delete_php['del_alb'] = 'albüm sil ';
$lang_delete_php['del_user'] = 'Kullanıcı sil';
$lang_delete_php['err_unknown_user'] = 'Seçilen kullanıcı yok!';
$lang_delete_php['err_empty_groups'] = 'Hiçbir grup tablosu yok veya grub tablosu boş!';
$lang_delete_php['comment_deleted'] = 'Yorum başarıyla silindi';
$lang_delete_php['npic'] = 'Resim';
$lang_delete_php['pic_mgr'] = 'Picture Manager';
$lang_delete_php['update_pic'] = 'Updating picture \'%s\' with filename \'%s\' and index \'%s\'';
$lang_delete_php['username'] = 'Kullanıcı adı';
$lang_delete_php['anonymized_comments'] = '%s comment(s) anonymized';
$lang_delete_php['anonymized_uploads'] = '%s public upload(s) anonymized';
$lang_delete_php['deleted_comments'] = '%s yorumlar silindi';
$lang_delete_php['deleted_uploads'] = '%s public upload(s) deleted';
$lang_delete_php['user_deleted'] = 'Kullanıcı %s silindi';
$lang_delete_php['activate_user'] = 'Kullanıcı etkinleştir';
$lang_delete_php['user_already_active'] = 'Hesap zaten aktif';
$lang_delete_php['activated'] = 'Etkinleştir';
$lang_delete_php['deactivate_user'] = 'Kullanıcıyı pasifleştir';
$lang_delete_php['user_already_inactive'] = 'Hesap zaten etkin değil';
$lang_delete_php['deactivated'] = 'Devre dışı';
$lang_delete_php['reset_password'] = 'Şifreyi sıfırla';
$lang_delete_php['password_reset'] = 'Parola %s olarak sıfırlandı';
$lang_delete_php['change_group'] = 'Ana grubu değiştir';
$lang_delete_php['change_group_to_group'] = 'Changing from %s to %s';
$lang_delete_php['add_group'] = 'İkinci grup ekle';
$lang_delete_php['add_group_to_group'] = 'Adding user %s to group %s. He\'s now member of %s as primary and of %s as secondary membergroup(s).';
$lang_delete_php['status'] = 'Durumu';
$lang_delete_php['updating_album'] = 'Albüm güncelleniyor'; // cpg1.5
$lang_delete_php['moved_picture_to_position'] = 'Resmi %s konumdan %s konumuna taşınıyor'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //
if (defined('DISPLAYIMAGE_PHP')){
$lang_display_image_php['confirm_del'] = 'Bu dosyayı size SİLMEK istediğinizden emin misiniz?\\nYorum silinecektir.'; // js-alert
$lang_display_image_php['del_pic'] = 'Bu dosyayı sil';
$lang_display_image_php['size'] = '%s x%s piksel';
$lang_display_image_php['views'] = '%s zamanlar';
$lang_display_image_php['slideshow'] = 'Slayt gösterisi';
$lang_display_image_php['stop_slideshow'] = 'Slaytı durdur';
$lang_display_image_php['view_fs'] = 'Tam boy resmi görebilmek için tıklayın';
$lang_display_image_php['edit_pic'] = 'Bilgi dosyasını düzenleyin';
$lang_display_image_php['crop_pic'] = 'Kırpma ve döndürme';
$lang_display_image_php['set_player'] = 'Değiştirmek oynatıcı';
$lang_picinfo['title'] = 'Dosya bilgileri';
$lang_picinfo['Album name'] = 'Albüm adı';
$lang_picinfo['Rating'] = 'Derece (%s oy)';
$lang_picinfo['Date Added'] = 'Tarih ekledi';
$lang_picinfo['Dimensions'] = 'Boyutlar';
$lang_picinfo['Displayed'] = 'Görüntülenir';
$lang_picinfo['URL'] = 'URL';
$lang_picinfo['Make'] = 'Yap';
$lang_picinfo['Model'] = 'Model';
$lang_picinfo['DateTime'] = 'Tarih Saat';
$lang_picinfo['ISOSpeedRatings'] = 'ISO';
$lang_picinfo['MaxApertureValue'] = 'Maksimum Açıklık';
$lang_picinfo['FocalLength'] = 'Odak uzaklığı';
$lang_picinfo['Comment'] = 'Yorum';
$lang_picinfo['addFav'] = 'Favorilerime ekle';
$lang_picinfo['addFavPhrase'] = 'Favorilerim';
$lang_picinfo['remFav'] = 'Favorilerimden Kaldır';
$lang_picinfo['iptcTitle'] = 'IPTC Başlığı';
$lang_picinfo['iptcCopyright'] = 'IPTC Telif';
$lang_picinfo['iptcKeywords'] = 'IPTC Anahtar Kelimeler';
$lang_picinfo['iptcCategory'] = 'IPTC Kategori';
$lang_picinfo['iptcSubCategories'] = 'IPTC Alt Kategoriler';
$lang_picinfo['ColorSpace'] = 'Renk Alanı';
$lang_picinfo['ExposureProgram'] = 'Pozlama Programı';
$lang_picinfo['Flash'] = 'Flash';
$lang_picinfo['MeteringMode'] = 'Ölçüm Modu';
$lang_picinfo['ExposureTime'] = 'Pozlama Zaman';
$lang_picinfo['ExposureBiasValue'] = 'Pozlama Bias';
$lang_picinfo['ImageDescription'] = 'Resim Açıklaması';
$lang_picinfo['Orientation'] = 'Oryantasyon';
$lang_picinfo['xResolution'] = 'X Çözünürlük';
$lang_picinfo['yResolution'] = 'Y Çözünürlük';
$lang_picinfo['ResolutionUnit'] = 'Çözünürlük Ünitesi';
$lang_picinfo['Software'] = 'Yazılım';
$lang_picinfo['YCbCrPositioning'] = 'YCbCrPositioning';
$lang_picinfo['ExifOffset'] = 'EXIF Ofset';
$lang_picinfo['IFD1Offset'] = 'IFD1 Ofset';
$lang_picinfo['FNumber'] = 'Fnumber';
$lang_picinfo['ExifVersion'] = 'EXIF Sürüm';
$lang_picinfo['DateTimeOriginal'] = 'Tarih Zaman Original';
$lang_picinfo['DateTimedigitized'] = 'Tarih Zaman sayısallaştırılmış';
$lang_picinfo['ComponentsConfiguration'] = 'Bileşenler Yapılandırma';
$lang_picinfo['CompressedBitsPerPixel'] = 'Piksel başına Sıkıştırılmış Uçları';
$lang_picinfo['LightSource'] = 'Işık Kaynak';
$lang_picinfo['ISOSetting'] = 'ISO Ayarı';
$lang_picinfo['ColorMode'] = 'Renk Modu';
$lang_picinfo['Quality'] = 'Kalite';
$lang_picinfo['ImageSharpening'] = 'Görüntü Bileme';
$lang_picinfo['FocusMode'] = 'Odak Modu';
$lang_picinfo['FlashSetting'] = 'Flaş Ayarı';
$lang_picinfo['ISOSelection'] = 'ISO Seçimi';
$lang_picinfo['ImageAdjustment'] = 'Görüntü Ayarı';
$lang_picinfo['Adapter'] = 'Adaptör';
$lang_picinfo['ManualFocusDistance'] = 'Manuel Odak Mesafesi';
$lang_picinfo['DigitalZoom'] = 'Dijital Zoom';
$lang_picinfo['AFFocusPosition'] = 'AF Odak Pozisyon';
$lang_picinfo['Saturation'] = 'Doyma';
$lang_picinfo['NoiseReduction'] = 'Gürültü Azaltma';
$lang_picinfo['FlashPixVersion'] = 'FlashPix Sürüm';
$lang_picinfo['ExifImageWidth'] = 'EXIF Resim Genişliği';
$lang_picinfo['ExifImageHeight'] = 'EXIF Resim Yüksekliği';
$lang_picinfo['ExifInteroperabilityOffset'] = 'Ofset EXIF Birlikte Çalışabilirlik';
$lang_picinfo['FileSource'] = 'Dosya Kaynak';
$lang_picinfo['SceneType'] = 'Sahne Tip';
$lang_picinfo['CustomerRender'] = 'Müşteri Render';
$lang_picinfo['ExposureMode'] = 'Pozlama modu';
$lang_picinfo['WhiteBalance'] = 'Beyaz Dengesi';
$lang_picinfo['DigitalZoomRatio'] = 'Dijital Yakınlaştırma Oranını';
$lang_picinfo['SceneCaptureMode'] = 'Sahne Çekim Modu';
$lang_picinfo['GainControl'] = 'Kazanç Kontrolü';
$lang_picinfo['Contrast'] = 'Kontrast';
$lang_picinfo['Sharpness'] = 'Keskinlik';
$lang_picinfo['ManageExifDisplay'] = 'EXIF Ekran Yönet';
$lang_picinfo['success'] = 'Bilgi başarıyla güncellendi.';
$lang_picinfo['show_details'] = 'Ayrıntıları göster'; // cpg1.5
$lang_picinfo['hide_details'] = 'Ayrıntıları gizle'; // cpg1.5
$lang_picinfo['download_URL'] = 'Doğrudan Bağlantı';
$lang_picinfo['movie_player'] = 'Standart uygulamada dosya Çal';
$lang_display_comments['comment_x_to_y_of_z'] = '%d to %d of %d'; // cpg1.5
$lang_display_comments['page'] = 'Sayfa'; // cpg1.5
$lang_display_comments['edit_title'] = 'Yorumu düzenle';
$lang_display_comments['delete_title'] = 'Yorumu sil'; // cpg1.5
$lang_display_comments['confirm_delete'] = 'Bu yorumu silmek istediğinizden emin misiniz?'; // js-alert
$lang_display_comments['add_your_comment'] = 'Yorum ekle';
$lang_display_comments['name'] = 'Ad';
$lang_display_comments['comment'] = 'Yorum';
$lang_display_comments['your_name'] = 'Adınız';
$lang_display_comments['report_comment_title'] = 'Yöneticiye bu yourumu rapor edin';
$lang_display_comments['pending_approval'] = 'Yorum yönetici onayından sonra görünür olacak'; // cpg1.5
$lang_display_comments['unapproved_comment'] = 'Onaylanmamış yorum'; // cpg1.5
$lang_display_comments['pending_approval_message'] = 'Birisi burada bir yorum gönderdi. Bu yorum yönetici onayından sonra görünür olacaktır.'; // cpg1.5
$lang_display_comments['approve'] = 'Yorumu onayla'; // cpg1.5
$lang_display_comments['disapprove'] = 'Onaylanmamış yorumu seç'; // cpg1.5
$lang_display_comments['log_in_to_comment'] = 'Anonim yorum buraya kabul edilmemektedir. %sGiriş %s  yaptıktan sonra yorum gönderebilirsiniz.'; // cpg1.5 // do not translate the %s placeholders - they will be used as wrappers for the link (<a>)
$lang_display_comments['default_username_message'] = 'Yorumlarınız için adınızı yazınız'; // cpg1.5
$lang_display_comments['comment_rejected'] = 'Yorum reddedildi'; // cpg1.5
$lang_fullsize_popup['click_to_close'] = 'Bu pencereyi kapatmak için resme tıklayın';
$lang_fullsize_popup['close_window'] = 'kapat'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP')) {
$lang_ecard_php['title'] = 'E-kart gönder';
$lang_ecard_php['invalid_email'] = 'Uyarı: geçersiz e-posta adresi:'; // cpg1.5
$lang_ecard_php['ecard_title'] = '%s dan size bir e-kart';
$lang_ecard_php['error_not_image'] = 'Ancak görüntüler bir e-kart olarak gönderilebilir.'; // cpg1.5
$lang_ecard_php['error_not_image_flash'] = 'Sadece resim ve flash dosyaları bir e-kart olarak gönderilebilir.'; // cpg1.5
$lang_ecard_php['view_ecard'] = 'e-kart doğru gösterilemiyorsa alternatif link';
$lang_ecard_php['view_ecard_plaintext'] = 'e-kart görmeki için bu linki tarayıcınızın adres cubuğuna kopyalayıp yapıştırın. ';
$lang_ecard_php['view_more_pics'] = 'Daha fazla resim!';
$lang_ecard_php['send_success'] = 'e-kartınız gönderildi';
$lang_ecard_php['send_failed'] = 'Üzgünüm ama server kartınızı gönderemiyor…';
$lang_ecard_php['from'] = 'Gönderen';
$lang_ecard_php['your_name'] = 'Adınız';
$lang_ecard_php['your_email'] = 'E-posta adresiniz';
$lang_ecard_php['to'] = 'Alıcı';
$lang_ecard_php['rcpt_name'] = 'Alıcı adı';
$lang_ecard_php['rcpt_email'] = 'Alıcının e-posta adresi';
$lang_ecard_php['greetings'] = 'Başlık';
$lang_ecard_php['message'] = 'Mesaj';
$lang_ecard_php['ecards_footer'] = 'Sent by %s from IP %s at %s (Gallery time)';
$lang_ecard_php['preview'] = 'E-Kart Önizleme';
$lang_ecard_php['preview_button'] = 'Önizleme';
$lang_ecard_php['submit_button'] = 'E-Kart Gönder';
$lang_ecard_php['preview_view_ecard'] = 'This will be the alternative link to the ecard once it has been generated. It won\'t work for previews.';

}

// ------------------------------------------------------------------------- //
// File report_file.php
// ------------------------------------------------------------------------- //

if (defined('REPORT_FILE_PHP')) {
$lang_report_php['title'] = 'Yöneticiye Rapor';
$lang_report_php['invalid_email'] = '<strong> Uyarı </strong>: geçersiz e-posta adresi!';
$lang_report_php['report_subject'] = '%s galeri hakkinda %s dan rapor';
$lang_report_php['view_report'] = 'raporu doğru gösterilemiyrosa alternatif link ';
$lang_report_php['view_report_plaintext'] = 'Raporu görüntülemek ve tarayıcınızın adres çubuğuna bu url adresini koyalayıp yapıştırınız:';
$lang_report_php['view_more_pics'] = 'Galeri';
$lang_report_php['send_success'] = 'Rapor gönderildi';
$lang_report_php['send_failed'] = 'Üzgünüm ama server raporunuzu gönderemiyor...';
$lang_report_php['from'] = 'Gönderen';
$lang_report_php['your_name'] = 'Adınız';
$lang_report_php['your_email'] = 'E-posta adresiniz';
$lang_report_php['to'] = 'Alan';
$lang_report_php['administrator'] = 'Yönetici / Mod';
$lang_report_php['subject'] = 'Konu';
$lang_report_php['comment_field_name'] = '"%s " tarafından yapılan yorumu raporlama';
$lang_report_php['reason'] = 'Neden';
$lang_report_php['message'] = 'Mesaj';
$lang_report_php['report_footer'] = 'Sent by %s from IP %s at %s (Gallery time)';
$lang_report_php['obscene'] = 'müstehcen';
$lang_report_php['offensive'] = 'saldırgan';
$lang_report_php['misplaced'] = 'konu dışı / gereksiz';
$lang_report_php['missing'] = 'eksik';
$lang_report_php['issue'] = 'hata / görünmüyor';
$lang_report_php['other'] = 'Diğer';
$lang_report_php['refers_to'] = 'Konuyla ilgili dosya';
$lang_report_php['reasons_list_heading'] = 'Rapor için sebep (ler):';
$lang_report_php['no_reason_given'] = 'hiçbir neden verilmedi';
$lang_report_php['go_comment'] = 'Yoruma git';
$lang_report_php['view_comment'] = 'Yorum ile birlikte tam raporu görüntüle';
$lang_report_php['type_file'] = 'dosya';
$lang_report_php['type_comment'] = 'Yorum';
$lang_report_php['invalid_data'] = 'Erişmeye çalıştığınız rapor posta istemcisi tarafından bozulmuş. Linkin tam olup olmadığını kontrol edin.';
}

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) {
$lang_editpics_php['pic_info'] = 'Dosya bilgisi';
$lang_editpics_php['desc'] = 'Açıklama';
$lang_editpics_php['approval'] = 'Onay'; //cpg 1.5
$lang_editpics_php['approved'] = 'Onaylı'; // cpg 1.5
$lang_editpics_php['unapproved'] = 'Onaylanmamış'; // cpg 1.5
$lang_editpics_php['new_keyword'] = 'Yeni anahtar kelime';
$lang_editpics_php['new_keywords'] = 'Yeni anahtar kelimeler bulundu';
$lang_editpics_php['existing_keyword'] = 'Mevcut anahtar kelime';
$lang_editpics_php['pic_info_str'] = '%s &zaman; %s - %s KB - %s izleme - %s oylama';
$lang_editpics_php['approve'] = 'Onayla dosya';
$lang_editpics_php['postpone_app'] = 'Erteleme onayı';
$lang_editpics_php['del_pic'] = 'Sil';
$lang_editpics_php['del_all'] = 'Sil tüm dosyaları';
$lang_editpics_php['read_exif'] = 'EXIF bilgisini tekrar oku ';
$lang_editpics_php['reset_view_count'] = 'Görüntülemek sayacını sıfırla';
$lang_editpics_php['reset_all_view_count'] = 'Tüm görüntülemek sayaclarını sıfırla';
$lang_editpics_php['reset_votes'] = 'Oyları sıfırla';
$lang_editpics_php['reset_all_votes'] = 'Tüm oyları sıfırla';
$lang_editpics_php['del_comm'] = 'Yorumları sil';
$lang_editpics_php['del_all_comm'] = 'Tüm yorumları sil';
$lang_editpics_php['upl_approval'] = 'Yükleme onayı';
$lang_editpics_php['edit_pics'] = 'Dosyaları düzenleme';
$lang_editpics_php['edit_pic'] = 'Dosya düzenleme'; // cpg 1.5
$lang_editpics_php['see_next'] = 'Sonraki dosyalara bakın';
$lang_editpics_php['see_prev'] = 'Önceki dosyalara bakın';
$lang_editpics_php['n_pic'] = '%s dosyalar';
$lang_editpics_php['n_of_pic_to_disp'] = 'Gösterilecek dosya sayısı ';
$lang_editpics_php['crop_title'] = 'Coppermine Resim Editörü';
$lang_editpics_php['preview'] = 'Önizleme';
$lang_editpics_php['save'] = 'Resmi kaydet';
$lang_editpics_php['save_thumb'] = 'Küçük resim olarak kaydet';
$lang_editpics_php['gallery_icon'] = 'Make this my icon';
$lang_editpics_php['sel_on_img'] = 'The selection has to be entirely on the image!'; // js-alert
$lang_editpics_php['album_properties'] = 'Albüm özelliklerini';
$lang_editpics_php['parent_category'] = 'Ana kategori';
$lang_editpics_php['thumbnail_view'] = 'Küçük resim görünümü';
$lang_editpics_php['select_unselect'] = 'select / kaldırın';
$lang_editpics_php['file_exists'] = 'Hedef dosya \'%s\' zaten var.';
$lang_editpics_php['rename_failed'] = 'Failed to rename \'%s\' to \'%s\'.';
$lang_editpics_php['src_file_missing'] = 'Source file \'%s\' is missing.';
$lang_editpics_php['mime_conv'] = 'Cannot convert file from \'%s\' to \'%s\'';
$lang_editpics_php['forb_ext'] = 'Yasak dosya uzantısı.';
$lang_editpics_php['error_editor_class'] = 'Editor class for your resize method not implemented'; // cpg 1.5
$lang_editpics_php['error_document_size'] = 'Belgenin genişliği veya yüksekliği'; // cpg 1.5 // js-alert
$lang_editpics_php['success_picture'] = 'Resmi başarıyla kaydedildi – Bu pencereyi  %skapat%sabilirsiniz.'; // cpg1.5 // do not translate "%s" here
$lang_editpics_php['success_thumb'] = 'Thumbnail başarıyla kaydedildi - Bu pencereyi  %skapat%sabilirsiniz.'; // cpg1.5 // do not translate "%s" here
$lang_editpics_php['rotate'] = 'Döndürmek'; // cpg 1.5
$lang_editpics_php['mirror'] = 'Ayna'; // cpg 1.5
$lang_editpics_php['scale'] = 'Ölçek'; // cpg 1.5
$lang_editpics_php['new_width'] = 'Yeni genişlik'; // cpg 1.5
$lang_editpics_php['new_height'] = 'Yeni yükseklik'; // cpg 1.5
$lang_editpics_php['enable_clipping'] = 'Kırpma etkinleştirme, ürün için geçerli'; // cpg 1.5
$lang_editpics_php['jpeg_quality'] = 'JPEG Çıktı Kalitesi'; // cpg 1.5
$lang_editpics_php['or'] = 'VEYA'; // cpg 1.5
$lang_editpics_php['approve_pic'] = 'Dosya onayla'; // cpg 1.5
$lang_editpics_php['approve_all'] = 'Tüm dosyaları onayla'; // cpg 1.5
$lang_editpics_php['error_empty'] = 'Albüm boş'; // cpg1.5
$lang_editpics_php['error_approval_empty'] = 'Onay bekliyen resim yok'; // cpg1.5
$lang_editpics_php['error_linked_only'] = 'Album only contains linked files, which you cannot edit here'; // cpg1.5
$lang_editpics_php['note_approve_public'] = 'Dosyalar genel bir albüme taşındı. Önce bir yönetici tarafından onaylanması gerekiyor.'; // cpg1.5
$lang_editpics_php['note_approve_private'] = 'Dosyalar genel bir albüme taşındı. Önce bir yönetici tarafından onaylanması gerekiyor.'; // cpg1.5
$lang_editpics_php['note_edit_control'] = 'Genel bir albüme taşınan dosyalar düzenlenemez.';// cpg1.5
$lang_editpics_php['confirm_move'] = 'Bu dosyayı taşımak istediğinizden emin misiniz?'; // cpg1.5 //js-alert
$lang_editpics_php['success_changes'] = 'Değişiklikler başarıyla kaydedildi'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File forgot_passwd.php
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) {
$lang_forgot_passwd_php['forgot_passwd'] = 'Şifre hatırlat';
$lang_forgot_passwd_php['err_already_logged_in'] = 'Zaten oturum var!';
$lang_forgot_passwd_php['enter_email'] = 'E-posta adresinizi girin';
$lang_forgot_passwd_php['submit'] = 'Git';
$lang_forgot_passwd_php['illegal_session'] = '“Şifremi unuttum” oturumu geçersiz yada süresi doldu.';
$lang_forgot_passwd_php['failed_sending_email'] = 'Şifre hatırlatma e-postası gönderilemiyor!';
$lang_forgot_passwd_php['email_sent'] = 'Kullanıcı adınızı ve yeni şifrenizi içeren bir e-posta %s adrese gönderildi ';
$lang_forgot_passwd_php['verify_email_sent'] = 'Bir e-posta %s adrese gönderildi. İşlemi tamamlamak için e-postanızı kontrol edin.';
$lang_forgot_passwd_php['err_unk_user'] = 'Seçilen kullanıcı yok!';
$lang_forgot_passwd_php['account_verify_subject'] = '%s - Yeni şifre talebi';
$lang_forgot_passwd_php['passwd_reset_subject'] = '%s - Yeni şifreniz';
$lang_forgot_passwd_php['account_verify_email'] = <<< EOT
Size yeni bir şifre talep edildi. Yeni bir şifre gönderilmesine devam etmek isterseniz, aşağıdaki linke tıklayın, :

<a href="{VERIFY_LINK}">{VERIFY_LINK}</a>

Saygılarımla,

{SITE_NAME} yöneticisi

EOT;

$lang_forgot_passwd_php['reset_email'] = <<< EOT
Yeni giriş bilgileriniz:

Kullanıcı adı: {USER_NAME}
Şifre: {PASSWORD}

Oturum açmak için <a href="{SITE_LINK}">{SITE_LINK}</a> tıklayınız.

Saygılarımla,

{SITE_NAME} yöneticisi

EOT;
}

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //
if (defined('GROUPMGR_PHP')) {
$lang_groupmgr_php['group_manager'] = 'Grup yöneticisi'; // cpg1.5.x
$lang_groupmgr_php['group_name'] = 'Grup';
$lang_groupmgr_php['permissions'] = 'Izinler';
$lang_groupmgr_php['public_albums'] = 'Genel albümler yükleme';
$lang_groupmgr_php['personal_gallery'] = 'Kişisel galeri';
$lang_groupmgr_php['disk_quota'] = 'Kota';
$lang_groupmgr_php['rating'] = 'Değerlendirme';
$lang_groupmgr_php['ecards'] = 'E-kard';
$lang_groupmgr_php['comments'] = 'Yorumlar';
$lang_groupmgr_php['allowed'] = 'Izin';
$lang_groupmgr_php['approval'] = 'Onay';
$lang_groupmgr_php['create_new_group'] = 'Yeni grup oluştur';
$lang_groupmgr_php['del_groups'] = 'Seçilen grup(ları) Sil';
$lang_groupmgr_php['confirm_del'] = 'Warning, when you delete a group, users that belong to this group will be transferred to the \'Registered\' group!\n\nDo you want to proceed?'; // js-alert
$lang_groupmgr_php['title'] = 'Kullanıcı gruplarını yönetme';
$lang_groupmgr_php['reset_to_default'] = 'Reset to default name (%s) - tavsiye!';
$lang_groupmgr_php['error_group_empty'] = 'Group table was empty!<br />Default groups created, please reload this page';
$lang_groupmgr_php['explain_greyed_out_title'] = 'Neden bu satır gri?';
$lang_groupmgr_php['explain_guests_greyed_out_text'] = 'You cannot change the properties of this group because the access level of this group is NONE. All unlogged users (members of the group %s) can\'t do anything but login; therefore group settings don\'t apply for them. Change the access level here or on the Gallery Configuration page under "User Settings", "Allow unlogged users access".';
$lang_groupmgr_php['group_assigned_album'] = 'atanan albüm(ler)';
$lang_groupmgr_php['access_level'] = 'Erişim seviyesi'; // cpg1.5
$lang_groupmgr_php['thumbnail_intermediate_full'] = 'Küçük, orta ve tam boy'; // cpg1.5
$lang_groupmgr_php['thumbnail_intermediate'] = 'Küçük ve orta resim'; // cpg1.5
$lang_groupmgr_php['thumbnail_only'] = 'Küçük resim sadece'; // cpg1.5
$lang_groupmgr_php['none'] = 'hiçbiri'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //
if (defined('INDEX_PHP')){
$lang_index_php['welcome'] = 'Hoşgeldiniz !';
$lang_album_admin_menu['confirm_delete'] = 'Bu albümü SİLMEK istediğinizden emin misiniz ? \\nBütün resimler ve yorumlar silinmiş olacaktır.'; // js-alert
$lang_album_admin_menu['delete'] = 'Sil';
$lang_album_admin_menu['modify'] = 'Özellikler';
$lang_album_admin_menu['edit_pics'] = 'Resimleri düzenle';
$lang_album_admin_menu['cat_locked'] = 'Bu albüm düzenleme için kilitlendi'; // cpg1.5.x
$lang_list_categories['home'] = 'Ana sayfa';
$lang_list_categories['stat1'] = 'Sitemizde yayınlanan <b>[albums]</b> albümdeki <b>[pictures]</b> adet resimler <b>[views]</b> kez izlenilmiş ve <b>[comments]</b> kez yorum yazılmıştır. '; // do not translate the stuff in square brackets
$lang_list_categories['stat2'] = 'resim sayısı:<b>[pictures]</b>, albüm sayısı <b>[albums]</b>, izlenme sayısı: <b>[views]</b>'; // do not translate the stuff in square brackets
$lang_list_categories['xx_s_gallery'] = '%s\'nin galarisi';
$lang_list_categories['stat3'] = 'Sitemizde yayınlanan <b>[albums]</b> albümün içindeki <b>[pictures]</b> adet resimler <b>[views]</b> kez izlenmiş ve bu resimlere <b>[comments]</b> adet yorum gönderilmiştir. '; // do not translate the stuff in square brackets
$lang_list_users['user_list'] = 'Kullanıcı listesi';
$lang_list_users['no_user_gal'] = 'Kullanıcı galerisi yok';
$lang_list_users['n_albums'] = '%s albüm(-ler)';
$lang_list_users['n_pics'] = '%s resim(-ler)';
$lang_list_albums['n_pictures'] = 'Bu albümde %s resim bulunmakta';
$lang_list_albums['last_added'] = ', son eklenen resim %s de eklendi';
$lang_list_albums['n_link_pictures'] = '%s bağlı dosyalar';
$lang_list_albums['total_pictures'] = '%s dosya toplamı';
$lang_list_albums['alb_hits'] = 'Albüm %s kez izlendi'; // cpg1.5
$lang_list_albums['from_category'] = ' - Kategori:'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File install.php
// ------------------------------------------------------------------------- //

if (defined('INSTALL_PHP')) {
$lang_install['already_succ'] = 'The installer has already been successfully run once and is now locked.';
$lang_install['already_succ_explain'] = 'If you want to run the installer again, you first need to delete the \'include/config.inc.php\' file that was created in the directory where you put Coppermine. You can do this with any FTP program';
$lang_install['cant_read_tmp_conf'] = 'The installer can\'t read the temporary config file %s.';
$lang_install['cant_write_tmp_conf'] = 'The installer can\'t write the temporary config file %s.';
$lang_install['review_permissions'] = 'Please review directory permissions.';
$lang_install['change_lang'] = 'Change language';
$lang_install['check_path'] = 'Check path';
$lang_install['continue'] = 'Next step';
$lang_install['conv_said'] = 'The convert program said:';
$lang_install['license_info'] = 'Coppermine is a picture/multimedia gallery package that is released under GNU GPL v3. By installing, you agree to be bound to Coppermine\'s license:';
$lang_install['cpg_info_frames'] = 'Your browser appears incapable of displaying inline frames. You can review the license within the docs folder that ships with your Coppermine package.';
$lang_install['license'] = 'Coppermine license agreement';
$lang_install['create_table'] = 'Creating table \'%s\'';
$lang_install['db_populating'] = 'Trying to insert data in the database.';
$lang_install['db_alr_populated'] = 'Already inserted required data in the database.';
$lang_install['dir_ok'] = 'Directory found';
$lang_install['directory'] = 'Directory';
$lang_install['email'] = 'Email address';
$lang_install['email_no_match'] = 'Email addresses do not match or are invalid.';
$lang_install['email_verif'] = 'Verify email';
$lang_install['err_cpgnuke'] = '<h1>ERROR</h1>You seem to be trying to install the standalone Coppermine into your Nuke portal.<br />This version can only be used as standalone!<br />Some server setups might display this warning even though you don\'t have a nuke portal installed - if this is the case for you, <a href="%s?continue_anyway=1">continue</a> with the install. If you are using a nuke portal, you might want to take a look into <a href=\"http://www.cpgnuke.com/\">CpgNuke</a> or use one of the (unsupported)<a href=\"http://sourceforge.net/project/showfiles.php?group_id=89658&amp;package_id=95984\">Coppermine ports</a> - do not continue!';
$lang_install['error'] = 'ERROR';
$lang_install['error_need_corr'] = 'The following errors were encountered and need to be corrected first:';
$lang_install['finish'] = 'Finish installation';
$lang_install['gd_note'] = '<strong>Important :</strong> older versions of the GD graphic library support only JPEG and PNG images. If this is the case for you, then the script will not be able to create thumbnails for GIF images.';
$lang_install['go_to_main'] = 'Go to the main page';
$lang_install['im_no_convert_ex'] = 'The installer found the ImageMagick \'convert\' program in \'%s\', however it can\'t be executed by the script.<br />You may consider using GD instead of ImageMagick.';
$lang_install['im_not_found'] = 'The installer tried to find ImageMagick, but could not determine its existence or there was an error. <br />Coppermine can use the <a href="http://www.imagemagick.org/">ImageMagick</a> \'convert\' program to create thumbnails. Quality of images produced by ImageMagick is superior to GD1 but equivalent to GD2.<br />If ImageMagick is installed on your system and you want to use it, <br />you need to input the full path to the \'convert\' program below. <br />On Windows the path should look something like \'c:/ImageMagick/\' and should not contain any space, on Unix is it something like \'/usr/bin/\'.<br />If you have no idea wether you have ImageMagick or not, leave this field empty - the installer will then try to use GD2 by default (which is what most users have). <br />You can change this later as well (in Coppermine\'s config screen), so don\'t be afraid if you\'re not sure what to enter here - leave it blank.';
$lang_install['im_packages'] = 'Your server supports the following image package(s)';
$lang_install['im_path'] = 'Path to ImageMagick:';
$lang_install['im_path_space'] = 'The path to ImageMagick (\'%s\') contains at least one space. This will cause problems in the script.<br />You must move ImageMagick to another directory.';
$lang_install['installation'] = 'installation';
$lang_install['installer_locked'] = 'The installer is locked';
$lang_install['installer_selected'] = 'The installer selected';
$lang_install['inv_im_path'] = 'The installer cannot find the \'%s\' directory you have specified for ImageMagick or it does not have permission to access it. Check that your typing is correct and that you have access to the specified directory.';
$lang_install['lets_go'] = 'Let\'s Go!';
$lang_install['mysql_create_btn'] = 'Create';
$lang_install['mysql_create_db'] = 'Create new MySQL database';
$lang_install['mysql_db_name'] = 'MySQL database name';
$lang_install['mysql_error'] = 'MySQL error: ';
$lang_install['mysql_host'] = 'MySQL host<br />(localhost is usually OK)';
$lang_install['mysql_username'] = 'MySQL username'; // cpg1.5
$lang_install['mysql_password'] = 'MySQL password'; // cpg1.5
$lang_install['mysql_no_create_db'] = 'Could not create MySQL database.';
$lang_install['mysql_no_sel_dbs'] = 'Could not retrieve available MySQL databases';
$lang_install['mysql_succ'] = 'Successful connection with database';
$lang_install['mysql_tbl_pref'] = 'MySQL table prefix';
$lang_install['mysql_test_connection'] = 'Test connection';
$lang_install['mysql_wrong_db'] = 'MySQL could not locate a database called \'%s\' please check the value entered for this';
$lang_install['n_a'] = 'N/A';
$lang_install['no_admin_email'] = 'You have to enter an admin email address';
$lang_install['no_admin_password'] = 'You have to enter an admin password';
$lang_install['no_admin_username'] = 'You have to enter an admin username';
$lang_install['no_dir'] = 'Directory not available';
$lang_install['no_gd'] = 'Your installation of PHP does not seem to include the \'GD\' graphic library extension and you have not indicated that you want to use ImageMagick. Coppermine has been configured to use GD2 because the automatic GD detection sometimes fails. If GD is installed on your system, the script should work else you will need to install ImageMagick.';
$lang_install['no_mysql_conn'] = 'Could not create a MySQL connection, please check the MySQL details entered';
$lang_install['no_mysql_support'] = 'PHP does not have MySQL support enabled.';
$lang_install['no_thumb_method'] = 'You have to choose an image manipulation application (GD/IM)';
$lang_install['nok'] = 'Not OK';
$lang_install['not_here_yet'] = 'Nothing here yet, please click %shere%s to go back.';
$lang_install['ok'] = 'OK';
$lang_install['on_q'] = 'on query';
$lang_install['or'] = 'or';
$lang_install['pass_err'] = 'Passwords don\'t match, you used illegal characters or didn\'t provide one.';
$lang_install['password'] = 'Password';
$lang_install['password_verif'] = 'Verify Password';
$lang_install['perm_error'] = 'The permissions of \'%s\' are set to %s, please set them to';
$lang_install['perm_ok'] = 'The permissions on certain directories have been checked, and seem to be ok. <br />Please proceed to the next step.';
$lang_install['perm_not_ok'] = 'The permissions on certain directories are not set correctly.<br />Please change the permissions of the directories below that are marked "Not OK".'; // cpg1.5
$lang_install['please_go_back'] = 'Please %sclick here%s to go back and fix this problem before proceeding.';
$lang_install['populate_db'] = 'Populate database';
$lang_install['ready_to_roll'] = '<a href="index.php">Coppermine</a> is now properly configured and ready to use.<br /><a href="login.php">Login</a> using the information you provided for your admin account.';
$lang_install['sect_create_adm'] = 'This section requires information to create your Coppermine administration account. Use only alphanumeric characters. Enter the data carefully!';
$lang_install['sect_mysql_info'] = 'This section requires information on how to access your MySQL database.<br />If you don\'t know how to fill them, check with your webhost support.';
$lang_install['sect_mysql_sel_db'] = 'Here you have to choose which database you want to use for Coppermine.<br />If your MySQL account has the needed privileges, you can create a new database from within the installer or you can use an existing database. If you don\'t like both options, you will have to create a database first outside the Coppermine installer, then return here then select the new database from the dropdown box below. You can also change the table prefix (don\'t use dots though), but keeping the default prefix is recommended.';
$lang_install['select_lang'] = 'Select default language: ';
$lang_install['sql_file_not_found'] = 'The file \'%s\' could not be found. Check that you have uploaded all Coppermine files to your server.';
$lang_install['status'] = 'Durum';
$lang_install['subdir_called'] = 'A subdirectory called \'%s\' should normally exist in the directory where you uploaded Coppermine.<br />The installer can\'t find this directory. Check that you have uploaded all Coppermine files to your server.';
$lang_install['title_admin'] = 'Create Coppermine administrator';
$lang_install['title_dir_check'] = 'Checking directory permissions';
$lang_install['title_file_check'] = 'Checking installation files';
$lang_install['title_finished'] = 'Installation completed';
$lang_install['title_imp'] = 'Image package selection';
$lang_install['title_imp_test'] = 'Testing image library';
$lang_install['title_mysql_db_sel'] = 'MySQL database selection';
$lang_install['title_mysql_pop'] = 'Creating database structure';
$lang_install['title_mysql_user'] = 'MySQL user authentication';
$lang_install['title_welcome'] = 'Welcome to Coppermine installation';
$lang_install['tmp_conf_error'] = 'Unable to write the temporary config file - make sure the \'include\' folder is writable for the script.';
$lang_install['tmp_conf_ser_err'] = 'A serious error occurred in the installer, try reloading your page or start over by removing the \'include/config.tmp\' file.';
$lang_install['try_again'] = 'Try again!';
$lang_install['unable_write_config'] = 'Unable to write config file';
$lang_install['user_err'] = 'Admin username must contain only alphanumeric characters and can\'t be empty.';
$lang_install['username'] = 'Username';
$lang_install['your_admin_account'] = 'Your admin account';
$lang_install['no_cookie'] = 'Your browser did not accept our cookie. It is recommended to accept cookies.';
$lang_install['no_javascript'] = 'Your browser doesn\'t seem to have Javascript enabled - it is highly recommended to enable it.';
$lang_install['register_globals_detected'] = 'It seems your PHP configuration has \'register_globals\' enabled - you should disable this for security reasons.';
$lang_install['more'] = 'more';
$lang_install['version_undetected'] = 'The script could not determine the version of %s your server is using. Be sure it is at least version %s.';
$lang_install['version_incompatible'] = 'The script detected an incompatible version (%s) of %s on your server.<br />Make sure to use a compatible version (%s or better) before continuing!';
$lang_install['read_gif'] = 'Read/write .gif file';
$lang_install['read_png'] = 'Read/write .png file';
$lang_install['read_jpg'] = 'Read/write .jpg file';
$lang_install['write_error'] = 'Could not write generated image to disk.';
$lang_install['read_error'] = 'Could not read the source image.';
$lang_install['combine_error'] = 'Could not combine the source images';
$lang_install['text_error'] = 'Could not add text to the source image';
$lang_install['scale_error'] = 'Could not scale the source image';
$lang_install['pixels'] = 'pixels';
$lang_install['combine'] = 'Combine 2 images';
$lang_install['text'] = 'Write text on image';
$lang_install['scale'] = 'Scale an image';
$lang_install['generated_image'] = 'Generated image';
$lang_install['reference_image'] = 'Reference image';
$lang_install['imp_test_error'] = 'There was an error in one or more of the tests, please make sure you selected the appropriate Image Processing Package and it is configured correctly!';
$lang_install['writable'] = 'Writable';
$lang_install['not_writable'] = 'Not writable';
$lang_install['not_exist'] = 'Does not exist';
$lang_install['old_install'] = 'This is the new install wizard. Click %shere%s for the classic install screen.'; //cpg1.5

}

// ------------------------------------------------------------------------- //
// File keywordmgr.php
// ------------------------------------------------------------------------- //
if (defined('KEYWORDMGR_PHP')) {
$lang_keywordmgr_php['title'] = 'Anahtarsözcük yönetimi'; //cpg1.4
$lang_keywordmgr_php['search'] = 'ara'; //cpg1.4
$lang_keywordmgr_php['keyword_test_search'] = 'yeni ekranda %s ara'; //cpg1.4
$lang_keywordmgr_php['keyword_del'] = '%s anahtarsözcüğünü sil'; //cpg1.4
$lang_keywordmgr_php['confirm_delete'] = '%s anahtarsözcüğünü silmek istediğinize eminmisiniz?'; //cpg1.4  // js-alert
$lang_keywordmgr_php['change_keyword'] = 'anahtarsözcüğünü değiştir'; //cpg1.4
}

// ------------------------------------------------------------------------- //
// File langmgr.php
// ------------------------------------------------------------------------- //
if (defined('LANGMGR_PHP')) {
$lang_langmgr_php['title'] = 'Dil yöneticisi';
$lang_langmgr_php['english_language_name'] = 'İngilizce';
$lang_langmgr_php['native_language_name'] = 'Yerli';
$lang_langmgr_php['custom_language_name'] = 'Özel';
$lang_langmgr_php['language_name'] = 'Dil adı';
$lang_langmgr_php['language_file'] = 'Dil dosyası';
$lang_langmgr_php['flag'] = 'Bayrak';
$lang_langmgr_php['file_available'] = 'Mevcut';
$lang_langmgr_php['enabled'] = 'Etkin';
$lang_langmgr_php['complete'] = 'Tam';
$lang_langmgr_php['default'] = 'Varsayılan';
$lang_langmgr_php['missing'] = 'eksik';
$lang_langmgr_php['broken'] = 'kırık ya da ulaşılamaz gibi görünen';
$lang_langmgr_php['exists_in_db_and_file'] = 'veritabanı ve dosya olarak var';
$lang_langmgr_php['exists_as_file_only'] = 'dosya olarak var sadece';
$lang_langmgr_php['pick_a_flag'] = 'Pick one';
$lang_langmgr_php['replace_x_with_y'] = 'Replace %s with %s ';
$lang_langmgr_php['tanslator_information'] = 'Çevirmenler bilgi';
$lang_langmgr_php['cpg_version'] = 'Coppermine sürümü';
$lang_langmgr_php['hide_details'] = 'Ayrıntıları gizle';
$lang_langmgr_php['show_details'] = 'Ayrıntıları göster';
$lang_langmgr_php['loading'] = 'Yükleme';
$lang_langmgr_php['english_missing'] = 'İngilizce dil dosyası eksik. Bunu hemen geri yüklemeniz gerekir.';
$lang_langmgr_php['enable_at_least_one'] = 'En az bir dil etkinleştirmek gerekiyor.';
$lang_langmgr_php['enable_default'] = 'Seçtiğiniz dil dosyası şuan etkin değil. Lütfen varsayılan olarak bir başka dil dosyasını seçiniz!';
$lang_langmgr_php['available_default'] = 'Seçtiğiniz dil dosyası şuan mevcut değil. Lütfen varsayılan olarak bir başka dil dosyasını seçiniz!';
$lang_langmgr_php['version_does_not_match'] = 'Seçtiğiniz dil dosyası şuan kullandığınız Coppermine sürümü için uygun değil. Lütfen varsayılan olarak bir başka dil dosyasını seçiniz!';
$lang_langmgr_php['no_version'] = 'No version information could be retrieved. It\'s very likely that this language file doesn\'t work at all or isn\'t an actual language file.';
$lang_langmgr_php['filesize'] = 'Filesize %s is implausible ';
$lang_langmgr_php['content_missing'] = 'The file doesn\'t seem to contain the needed data, so it\'s probably not a valid language file.';
$lang_langmgr_php['status'] = 'Durum';
$lang_langmgr_php['default_language'] = 'Varsayılan dil dosyası %s olarak ayarlandı';
}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //
if (defined('LOGIN_PHP')) {
$lang_login_php['login'] = 'Giriş';
$lang_login_php['enter_login_pswd'] = 'Giriş yapmak için kullanıcı adınızı ve şifrenizi yazın';
$lang_login_php['username'] = 'Üye adı';
$lang_login_php['email'] = 'E-posta adresi'; // cpg1.5
$lang_login_php['both'] = 'Kullanıcı adı / E-posta Adresi'; // cpg1.5
$lang_login_php['password'] = 'Şifre';
$lang_login_php['remember_me'] = 'Beni hatırla';
$lang_login_php['welcome'] = 'Hoşgeldin %s ...';
$lang_login_php['err_login'] = '*** Giriş yapılamadı! Lütfen tekrar deneyin ***';
$lang_login_php['err_already_logged_in'] = 'Daha önceden giriş yapmışsınız !';
$lang_login_php['forgot_password_link'] = 'Şifremi unuttum';
$lang_login_php['cookie_warning'] = 'Web proğramınız kurabiyeleri kabul etmiyor';
$lang_login_php['send_activation_link'] = 'Aktivasyon linki kaçırdınız?';
$lang_login_php['force_login'] = 'Bu sayfayı görüntülemek için giriş yapmalısınız'; // cpg1.5
$lang_login_php['force_login_title'] = 'Devam Giriş'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) {
$lang_logout_php['logout'] = 'Çıkış';
$lang_logout_php['bye'] = 'Güle güle %s ...';
$lang_logout_php['err_not_logged_in'] = 'Giriş yapmamışsınız!'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File minibrowser.php
// ------------------------------------------------------------------------- //
if (defined('MINIBROWSER_PHP')) {
$lang_minibrowser_php['up'] = 'bir klasör yukarı';
$lang_minibrowser_php['current_path'] = 'şu andaki pat';
$lang_minibrowser_php['select_directory'] = 'Lütfen bir klasör seçiniz';
$lang_minibrowser_php['click_to_close'] = 'Ekranı kapatmak için resime tıklayınız';
$lang_minibrowser_php['folder'] = 'Klasör'; // cpg1.5
}


// ------------------------------------------------------------------------- //
// File mode.php
// ------------------------------------------------------------------------- //
if (defined('MODE_PHP')) {
$lang_mode_php[0] = 'Yönetici modu terkediliyor...'; // cpg1.5
$lang_mode_php[1] = 'Yönetici moduna geçiliyor...'; // cpg1.5
$lang_mode_php['news_hide'] = 'Haberleri gizle...'; // cpg1.5
$lang_mode_php['news_show'] = 'Haberleri göster...'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //
if (defined('MODIFYALB_PHP')) {
$lang_modifyalb_php['upd_alb_n'] = 'Güncellenen albüm %s';
 $lang_modifyalb_php['related_tasks'] = 'Ilgili görevler'; // cpg1.5
$lang_modifyalb_php['choose_album'] = 'Albümü seçin'; // cpg1.5
$lang_modifyalb_php['general_settings'] = 'Genel ayarlar';
$lang_modifyalb_php['alb_title'] = 'Albüm başlığı';
$lang_modifyalb_php['alb_cat'] = 'Albüm kategorisi';
$lang_modifyalb_php['alb_desc'] = 'Albüm açıklaması';
$lang_modifyalb_php['alb_keyword'] = 'Albüm anahtarsözcükleri';
$lang_modifyalb_php['alb_thumb'] = 'Albüm küçük resmi';
$lang_modifyalb_php['alb_perm'] = 'Bu albüm için izinler';
$lang_modifyalb_php['can_view'] = 'Albüm tarafından görüntülenebilir';
$lang_modifyalb_php['can_upload'] = 'Ziyaretçiler resim yükleyebilirler';
$lang_modifyalb_php['can_post_comments'] = 'Ziyaretçiler yorum ekleyebilirler';
$lang_modifyalb_php['can_rate'] = 'Ziyaretçiler oy verebilirler';
$lang_modifyalb_php['user_gal'] = 'Kullanıcı galerisi';
$lang_modifyalb_php['my_gal'] = '* Galerim *'; // cpg 1.5
$lang_modifyalb_php['no_cat'] = '* Kategori yok *';
$lang_modifyalb_php['alb_empty'] = 'Albüm boş';
$lang_modifyalb_php['last_uploaded'] = 'Son yüklenenler';
$lang_modifyalb_php['public_alb'] = 'Herkes (Herkese açık albüm)';
$lang_modifyalb_php['me_only'] = 'Sadece ben';
$lang_modifyalb_php['owner_only'] = 'Sadece (%s) albüm sahibi';
$lang_modifyalb_php['err_no_alb_to_modify'] = 'veritabanında albüm düzenleyemezsiniz.';
$lang_modifyalb_php['update'] = 'Albümü güncelle';
$lang_modifyalb_php['reset_album'] = 'Albümü sıfırla';
$lang_modifyalb_php['reset_views'] = 'İzlenme sayacını ayarla &quot;0&quot; in %s';
$lang_modifyalb_php['reset_rating'] = 'Oylama sayacını sıfırla %s';
$lang_modifyalb_php['delete_comments'] = 'Yorumları sil %s';
$lang_modifyalb_php['delete_files'] = '%sIrreversibly%s dosyaların tamamını sil %s';
$lang_modifyalb_php['views'] = 'izlenme';
$lang_modifyalb_php['votes'] = 'oylar';
$lang_modifyalb_php['comments'] = 'yorumlar';
$lang_modifyalb_php['files'] = 'dosyalar';
$lang_modifyalb_php['submit_reset'] = 'degişiklikleri kaydet';
$lang_modifyalb_php['reset_views_confirm'] = 'evet eminim';
$lang_modifyalb_php['notice1'] = '(*) %sgroups%s grup ayarlarına bağlı'; // do not translate the %s placeholders
$lang_modifyalb_php['can_moderate'] = 'Yöneticileri sadece'; // cpg 1.5
$lang_modifyalb_php['admins_only'] = 'Albüm şifre (Yeni şifre)'; // cpg 1.5
$lang_modifyalb_php['alb_password'] = 'Albüm şifresi';
$lang_modifyalb_php['alb_password_hint'] = 'Albüm hatırlatma';
$lang_modifyalb_php['edit_files'] = 'dosya ayarları';
$lang_modifyalb_php['parent_category'] = 'Kategoriler';
$lang_modifyalb_php['thumbnail_view'] = 'Toplu halde göster';
$lang_modifyalb_php['random_image'] = 'Rasgele Resim'; // cpg 1.5
$lang_modifyalb_php['password_protect'] = 'Bu albüm şifre ile koru'; //cpg1.5
}

// ------------------------------------------------------------------------- //
// File phpinfo.php
// ------------------------------------------------------------------------- //
if (defined('PHPINFO_PHP')) {
$lang_phpinfo_php['php_info'] = 'PHP info';
$lang_phpinfo_php['explanation'] = 'PHP tarafından üretilen bilgiler <a href="http://www.php.net/phpinfo">phpinfo()</a>, Coppermine içinde gösterilir (sağ tarafta).';
$lang_phpinfo_php['no_link'] = 'Bu bilgilerin yayınlanması güvenlik rizikosu oluşturabileceğinden bu sayfa sadece yöneticilere açıktır. Bu sayfanın linkini de gönderemezsiniz. Yöneticiler dışında kimse açamaz bu sayfayı.';
}

// ------------------------------------------------------------------------- //
// File picmgr.php
// ------------------------------------------------------------------------- //
if (defined('PICMGR_PHP')) {
$lang_picmgr_php['pic_mgr'] = 'Resim yönetimi';
$lang_picmgr_php['confirm_modifs'] = 'Gerçekten değişiklikler onaylıyormusunuz?'; // cpg1.5 // js-alert
$lang_picmgr_php['no_change'] = 'Herhangi bir değişiklik yapılmadı!';
$lang_picmgr_php['no_album'] = '* Albüm yok *';
$lang_picmgr_php['explanation_header'] = 'Kişisel sınıflandırma sadece bazı koşullarda gösterilecektir';
$lang_picmgr_php['explanation1'] = 'yönetici varsayılan sınıflandırmayı ayarlarda "azalan" veya "artan" olarak ayarlar (sınıflandırma seçmemiş kullanıcılar için varsayılan ayarlar)';
$lang_picmgr_php['explanation2'] = 'kullanıcı "azalan" veya "artan" seçer (kullanıcı ayarları)';
$lang_picmgr_php['change_album'] = 'Eğer albüm değiştirirseniz, değişiklikler kaybolacak!'; // cpg1.5 // js-alert
$lang_picmgr_php['submit_reminder'] = 'Sorting changes are not saved until you click &quot;Apply changes&quot;.'; // cpg1.5
}


// ------------------------------------------------------------------------- //
// File pluginmgr.php
// ------------------------------------------------------------------------- //
if (defined('PLUGINMGR_PHP')){
$lang_pluginmgr_php['confirm_uninstall'] = 'Bu eklentiyi kaldırmak istediğinize eminmisiniz?';
$lang_pluginmgr_php['confirm_remove'] = 'NOTE: Plugin API is disabled. Do you want to MANUALLY REMOVE this plugin, ignoring any cleanup actions?'; // cpg1.5
$lang_pluginmgr_php['confirm_delete'] = 'Bu eklentiyi silmek istediğinize eminmisiniz?';
$lang_pluginmgr_php['pmgr'] = 'Eklenti Ayarları';
$lang_pluginmgr_php['explanation'] = 'Install / uninstall / manage plugins using this page.'; // cpg1.5
$lang_pluginmgr_php['plugin_enabled'] = 'Plugin API enabled'; // cpg1.5
$lang_pluginmgr_php['name'] = 'Ad';
$lang_pluginmgr_php['author'] = 'Yazar';
$lang_pluginmgr_php['desc'] = 'Tanımla';
$lang_pluginmgr_php['vers'] = 'v';
$lang_pluginmgr_php['i_plugins'] = 'Eklenti kur';
$lang_pluginmgr_php['n_plugins'] = 'Eklenti kurulmadı';
$lang_pluginmgr_php['none_installed'] = 'Kurulmadı';
$lang_pluginmgr_php['operation'] = 'Çalışma';
$lang_pluginmgr_php['not_plugin_package'] = 'Yüklenen dosya eklenti paketi değil.';
$lang_pluginmgr_php['copy_error'] = 'Eklenti klasöre kopyalamada bir hata oluştu.';
$lang_pluginmgr_php['upload'] = 'Yükle';
$lang_pluginmgr_php['configure_plugin'] = 'Eklenti ayarları';
$lang_pluginmgr_php['cleanup_plugin'] = 'Eklenti temizle';
$lang_pluginmgr_php['extra'] = 'Extra'; // cpg1.5
$lang_pluginmgr_php['install_info'] = 'Install information'; // cpg1.5
$lang_pluginmgr_php['plugin_disabled_note'] = 'Plugin API is disabled, so that operation is not allowed.'; // cpg1.5
$lang_pluginmgr_php['install'] = 'install'; // cpg1.5
$lang_pluginmgr_php['uninstall'] = 'uninstall'; // cpg1.5
$lang_pluginmgr_php['minimum_requirements_not_met'] = 'Minimum requirements not met'; // cpg1.5
$lang_pluginmgr_php['confirm_version'] = 'Could not determine the version requirements for this plugin. This is usually an indicator that the plugin was not designed for your version of Coppermine and might therefore crash your gallery. Continue anyway (not recommended)?'; // cpg1.5 // js-alert
}

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //
if (defined('RATEPIC_PHP')) {
$lang_rate_pic_php['already_rated'] = 'Bu resme daha önceden oy verdiniz';
$lang_rate_pic_php['rate_ok'] = 'Oyunuz kabul edildi';
$lang_rate_pic_php['forbidden'] = 'Kendi resimlerinize oy veremezsiniz.';
}

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //
if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {
$lang_register_php['disclamer'] = <<< EOT
Her nekadar{SITE_NAME} da istenmeyen yayınlar veya yorumlar site yönetimi tarafından en kısa sürede silinsede, yöneticinin herşeyi takip etmesi oldukça zor. Bunların tamamen onları yazan kişilerin görüşü olduğu ve yöneticilerin görüş ve düşüncelerini temsil etmediğini kabul etmiş olursunuz.<br />
<br />
Kaba, hakaret içeren, yanlış, sıkıcı, tehdit içeren, diğer kullanıcıların kişilik haklarını ihlal edici, cinsel öğeler içeren, TC yasalarını çiğneyen mesajlardan lütfen kaçınınız. Foruma telif haklarına muhalif metaryel göndermeyiniz. Mesajın içeri mesajı gönderenin sorumluğundadır,  --sitenizin adı--- bağlamaz. Foruma mesaj gönderdiğinizde gönderim tarih, saati, IP numaranız gibi bilgiler kaydedilir. Sitemize kaydedilen ve yüklenen bilgiler sizin izniniz olmadan bir başkasına verilmez. Yanlız yöneticilerin kontrolü dışında hack gibi olaylardan dolayı alınan bilgilerden doğacak maddi ve manevi zararlardan sitemiz ve yönetiçilerimiz sorumlu tutulamıyacagını kabul emiş olursunuz.<br />
<br />
Bu site yerel bilgisayarlar krabiye dosyası bırakır. Bu sadece üyelerimizi tanımak içindir. Email adesiniz sadece kayıt anında kullanılır.<br />
<br />
Kabul ediyorum tuşuna seçtiğiniz andan itibaren bunlarıda kabul etmiş olursunuz.
EOT;
$lang_register_php['page_title'] = 'Kullanıcı kayıdı';
$lang_register_php['term_cond'] = 'Durumlar ve süreler';
$lang_register_php['i_agree'] = 'Kabul ediyorum';
$lang_register_php['submit'] = 'Üyelik oluştur';
$lang_register_php['err_user_exists'] = 'Yazdığınız kullanıcı adı bulunamadı, lütfen başka birtane seçin';
$lang_register_php['err_global_pw'] = 'Küresel şifre kaydı geçersiz'; // cpg1.5
$lang_register_php['err_global_pass_same'] = 'Şifreniz küresel şifrelerden farklı olmalı'; // cpg1.5
$lang_register_php['err_duplicate_email'] = 'Another user has already registered with the email address you entered';
$lang_register_php['err_disclaimer'] = 'Yasal uyarıyı kabul etmeniz gerekiyor.'; // cpg1.5
$lang_register_php['enter_info'] = 'Kayıt bilgilerini giriniz';
$lang_register_php['required_info'] = 'Üyeliğiniz daha önceden aktif edilmiş !';
$lang_register_php['optional_info'] = 'Zorunlu bilgiler';
$lang_register_php['username'] = 'Kullanıcı Adı';
$lang_register_php['password'] = 'Şifre';
$lang_register_php['password_again'] = 'Şifrenizi tekrar yazın';
$lang_register_php['global_registration_pw'] = 'Şifreyi tekrar yazın'; // cpg1.5
$lang_register_php['email'] = 'Email';
$lang_register_php['location'] = 'Nereden';
$lang_register_php['interests'] = 'Hobiler';
$lang_register_php['website'] = 'Web sitesi';
$lang_register_php['occupation'] = 'Meslek';
$lang_register_php['error'] = 'HATA';
$lang_register_php['confirm_email_subject'] = '%s - Kayıt Doğrulama';
$lang_register_php['information'] = 'Bilgi';
$lang_register_php['failed_sending_email'] = 'Kayıt doğrulama maili yollanamadı !';
$lang_register_php['thank_you'] = 'Kayıt olduğunuz için teşekkürler.<br /><br />Email adresinize üyeliğinizi aktif etmeniz için bir mail gönderildi.';
$lang_register_php['acct_created'] = 'Üyeliğiniz oluşturuldu ve şimdi siteye girip kullanıcı adınız ve şifrenizle giriş yapabilirsiniz';
$lang_register_php['acct_active'] = 'Tebrikler! Üyeliğiniz başarı ile oluşturulmuş ve aktif hale getirilmiştir. Üye adınız ve şifrenizle giriş yapabilirsiniz';
$lang_register_php['acct_already_act'] = 'Üyeliğiniz daha önceden aktif edilmiş !';
$lang_register_php['acct_act_failed'] = 'Bu üyelik aktif edilemez !';
$lang_register_php['err_unk_user'] = 'Seçilen kullanıcı bulunamadı !';
$lang_register_php['x_s_profile'] = '%s\'s profili';
$lang_register_php['group'] = 'Grup';
$lang_register_php['reg_date'] = 'Üyelik tarihi';
$lang_register_php['disk_usage'] = 'Kullanıdıgı disk alanı';
$lang_register_php['change_pass'] = 'Şifre değiştir';
$lang_register_php['current_pass'] = 'Şimdiki şifre';
$lang_register_php['new_pass'] = 'Yeni şifre';
$lang_register_php['new_pass_again'] = 'Yeni şifre tekrarı';
$lang_register_php['err_curr_pass'] = 'Şimdiki şifreniz yanlış';
$lang_register_php['change_pass'] = 'Şifremi değiştir';
$lang_register_php['update_success'] = 'Profiliniz güncellendi';
$lang_register_php['pass_chg_success'] = 'Şifreniz değişti';
$lang_register_php['pass_chg_error'] = 'Şifreniz değişmedi';
$lang_register_php['notify_admin_email_subject'] = '%s - Kayıt Bildirisi';
$lang_register_php['last_uploads'] = 'Son yüklenen dosya'; // cpg1.5
$lang_register_php['last_uploads_detail'] = '%s tarafından yüklenen dosyaları göster'; // cpg1.5
$lang_register_php['last_comments'] = 'Son yorumlar'; // cpg1.5
$lang_register_php['you'] = 'Siz'; // cpg1.5
$lang_register_php['last_comments_detail'] = '%s tarafından yapılan yorumları göster'; // cpg1.5
$lang_register_php['notify_admin_email_body'] = 'Yeni bi kullanıcı "%s" galerinize kayıt oldu';
$lang_register_php['pic_count'] = 'Dosyalar yüklendi';
$lang_register_php['notify_admin_request_email_subject'] = '%s – Kayıt gerekli';
$lang_register_php['thank_you_admin_activation'] = 'Teşekkürler.<br />Üyeliginizin onaylanması için isteğiniz yöneticiye iletildi. Onaylandığı takdirde bir e-posta alacaksınız.';
$lang_register_php['acct_active_admin_activation'] = 'Bu üyelik onaylandı ve kullanıcıya e-mail ile bildirildi.';
$lang_register_php['notify_user_email_subject'] = '%s - Etkinleştirme bildirimi';
$lang_register_php['delete_my_account'] = 'Kullanıcı hesabımı sil'; // cpg1.5
$lang_register_php['warning_delete'] = 'Warning: deleting your account cannot be undone. The %sfiles you uploaded%s into public albums and %syour comments%s do not get deleted when deleting your user account! However, the files you uploaded into your personal gallery will be deleted.'; // cpg1.5 // The %s-placeholders mustn't be removed, they will later be replaced by the wrappers for the links
$lang_register_php['i_am_sure'] = 'Ben kullanıcı hesabımı silmek istediğime eminim.'; // cpg1.5
$lang_register_php['really_delete'] = 'Kullanıcı hesabınızı silmek istidiğinize eminmisiniz?'; // cpg1.5 // js-alert
$lang_register_php['edit_xs_profile'] = '%s profilini düzenle'; // cpg1.5
$lang_register_php['edit_my_profile'] = 'Profilimi düzenle'; // cpg1.5
$lang_register_php['none'] = 'hiçbiri'; // cpg1.5
$lang_register_php['user_name_banned'] = 'Seçmiş olduğunuz kullanıcı adı/yasaklı. Başka bir kullanıcı adı seçin'; // cpg1.5
$lang_register_php['email_address_banned'] = 'Bu galeri size yasaklandı. Yeniden kayıt içinde izin verilmiyecektir. Git başımdan!'; // cpg1.5
$lang_register_php['email_warning1'] = 'The email address field mustn\'t be empty!'; // cpg1.5
$lang_register_php['email_warning2'] = 'Girdiğiniz e-posta adresi geçerli değil. Inceleme!'; // cpg1.5
$lang_register_php['username_warning1'] = 'The username field mustn\'t be empty!'; // cpg1.5
$lang_register_php['username_warning2'] = 'Kullanıcı adı en az iki karakter uzunluğunda olmalıdır!'; // cpg1.5
$lang_register_php['password_warning1'] = 'Şifre en az iki karakter uzunluğunda olmalıdır!'; // cpg1.5
$lang_register_php['password_warning2'] = 'Kullanıcı adı ve şifre farklı olmalı!'; // cpg1.5
$lang_register_php['password_verification_warning1'] = 'iki şifre uyuşmuyor. Tekrar yazınız!'; // cpg1.5
$lang_register_php['form_not_submit'] = 'Forum düzeltmeniz gereken eksik veya hatalar var.'; // cpg1.5
$lang_register_php['banned'] = 'Yasaklandı!'; // cpg1.5
$lang_register_php['confirm_email'] = <<< EOT
{SITE_NAME}e kayıt olduğunuz için teşekkürler.

Üye adınız : "{USER_NAME}"
Şifreniz : "{PASSWORD}"

Üyeliğinizi aktif etmek için, aşağıdaki linki tıklamalısınız.
Eğer bu işlem başarısız olur ise aşagıdaki adresi internet programınıza kopyalayın ve adres satırına yapıştırıp enter ile açınız.

<a href="{ACT_LINK}">{ACT_LINK}</a>

Teşekkürler,

{SITE_NAME} yönetimi

EOT;

$lang_register_approve_email = <<< EOT
"{USER_NAME}" adlı kullanıcı sitenize üye oldu.

Üyeliği aktif etmek için linke tıklayınız.

<a href="{ACT_LINK}">{ACT_LINK}</a>

EOT;

$lang_register_php['activated_email'] = <<< EOT
Üyeliğiniz kabul edildi ve aktifleştirildi.

<a href="{SITE_LINK}">{SITE_LINK}</a> adresine "{USER_NAME}" üyelik adı ve şifrenizle girebilirsiniz.


Saygılar,

{SITE_NAME} sitesinin yönetimi


EOT;
}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //
if (defined('REVIEWCOM_PHP')) {
$lang_reviewcom_php['title'] = 'Yorumları incele';
$lang_reviewcom_php['no_comment'] = 'İnceleme için bir yorum bulunamadı';
$lang_reviewcom_php['n_comm_del'] = '%s yorum(-lar) silindi';
$lang_reviewcom_php['n_comm_disp'] = 'Ekranda gösterilen yorum adeti';
$lang_reviewcom_php['see_prev'] = 'Geriye bak';
$lang_reviewcom_php['see_next'] = 'İleriye bak';
$lang_reviewcom_php['del_comm'] = 'Seçilen yorumları sil';
$lang_reviewcom_php['user_name'] = 'Ad';
$lang_reviewcom_php['date'] = 'Tarih';
$lang_reviewcom_php['comment'] = 'Yorum';
$lang_reviewcom_php['file'] = 'Dosya';
$lang_reviewcom_php['name_a'] = 'Artan kullanıcı adı';
$lang_reviewcom_php['name_d'] = 'Inen Kullanıcı ismi';
$lang_reviewcom_php['date_a'] = 'Tarih Artan';
$lang_reviewcom_php['date_d'] = 'Tarih azalan';
$lang_reviewcom_php['comment_a'] = 'Artan Yorum mesaj';
$lang_reviewcom_php['comment_d'] = 'Inen Yorum mesaj';
$lang_reviewcom_php['file_a'] = 'Dosya azalan';
$lang_reviewcom_php['file_d'] = 'Dosya azalan';
$lang_reviewcom_php['approval_a'] = 'Onay artan'; // cpg1.5
$lang_reviewcom_php['approval_d'] = 'Onay azalan'; // cpg1.5
$lang_reviewcom_php['ip_a'] = 'Artan IP adresi'; // cpg1.5
$lang_reviewcom_php['ip_d'] = 'Azalan IP adresi'; // cpg1.5
$lang_reviewcom_php['akismet_a'] = 'Akismet rating (altta geçerli yorum)'; // cpg1.5
$lang_reviewcom_php['akismet_d'] = 'Akismet rating (üstte geçerli yorum)'; // cpg1.5
$lang_reviewcom_php['n_comm_appr'] = '%s Yorum onaylı'; // cpg1.5
$lang_reviewcom_php['n_comm_unappr'] = '%s yorum onaylanmamış'; // cpg1.5
$lang_reviewcom_php['configuration_changed'] = 'Onay yapılandırma değiştirildi'; // cpg1.5
$lang_reviewcom_php['only_approval'] = 'sadece onaya bekliyen yorumlar göster'; // cpg1.5
$lang_reviewcom_php['approval'] = 'Onaylı'; // cpg1.5
$lang_reviewcom_php['save_changes'] = 'Değişiklikleri kaydet'; // cpg1.5
$lang_reviewcom_php['n_confirm_delete'] = 'Seçilmiş yorum(ları) silmek istiyor musunuz?'; // cpg1.5
$lang_reviewcom_php['with_selected'] = 'Seç'; // cpg1.5
$lang_reviewcom_php['delete'] = 'Sil'; // cpg1.5
$lang_reviewcom_php['approve'] = 'Onayla'; // cpg1.5
$lang_reviewcom_php['disapprove'] = 'Işaretleri kaldır'; // cpg1.5
$lang_reviewcom_php['do_nothing'] = 'hiçbir şey yapma'; // cpg1.5
$lang_reviewcom_php['comment_approved'] = 'Yorum onaylı'; // cpg1.5
$lang_reviewcom_php['comment_unapproved'] = 'Yorumu onaylanmamış işaretli'; // cpg1.5
$lang_reviewcom_php['ban_and_delete'] = 'Kullanıcıyı yasakla ve yorum(ları) sil'; // cpg1.5
$lang_reviewcom_php['akismet_status'] = 'Akismet:'; // cpg1.5
$lang_reviewcom_php['is_spam'] = 'Spam'; // cpg1.5
$lang_reviewcom_php['is_not_spam'] = 'spam değil'; // cpg1.5
$lang_reviewcom_php['akismet'] = 'Akismet'; // cpg1.5
$lang_reviewcom_php['akismet_count'] = 'Akismet %s spam mesajı buldu.'; // cpg1.5
$lang_reviewcom_php['akismet_test_result'] = 'Akismet API anahtarı için %s Test sonucu'; // cpg1.5
$lang_reviewcom_php['invalid'] = 'Geçersiz'; // cpg1.5
$lang_reviewcom_php['missing_gallery_url'] = 'Coppermine config de bir galeri URL belirtmek gerekiyor'; // cpg1.5
$lang_reviewcom_php['unable_to_connect'] = 'Akismet.com bağlanamıyor'; // cpg1.5
$lang_reviewcom_php['not_found'] = 'Hedef URL bulunamadı. Belki akismet.com site yapısını değiştirmiştir.'; // cpg1.5
$lang_reviewcom_php['unknown_error'] = 'Bilinmeyen bir hata'; // cpg1.5
$lang_reviewcom_php['error_message'] = 'Hata mesajı olarak geri dönen:'; // cpg1.5
$lang_reviewcom_php['ip_address'] = 'IP adresi'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File sidebar.php
// ------------------------------------------------------------------------- //
if (defined('SIDEBAR_PHP')) {
$lang_sidebar_php['sidebar'] = 'Side Bar'; // cpg1.5
$lang_sidebar_php['install'] = 'install'; // cpg1.5
$lang_sidebar_php['install_explain'] = 'Among the many smart access methods to get to information quickly on the site, we provide sidebars for the most popular browsers used on different operating systems to access pages easily. Here you can find setup and uninstall information for the browsers supported.'; // cpg1.5
$lang_sidebar_php['os_browser_detect'] = 'Detecting your OS and browser'; // cpg1.5
$lang_sidebar_php['os_browser_detect_explain'] = 'The script is trying to detect your operating system and browser version - please wait a second. If auto-detection fails, you might want to %sunhide%s all possible sidebar install options manually.'; // cpg1.5
$lang_sidebar_php['mozilla'] = 'Mozilla, Firefox, Netscape 6+, Konqueror 3.2+'; // cpg1.5
$lang_sidebar_php['mozilla_explain'] = 'If you use Mozilla 0.9.4 or later, you can %sadd our sidebar to your set%s. You can uninstall this sidebar using the "Customize Sidebar" dialog in Mozilla.'; // cpg1.5
$lang_sidebar_php['ie_mac'] = 'Internet Explorer 5 and above on Mac OS'; // cpg1.5
$lang_sidebar_php['ie_mac_explain'] = 'If you use Internet Explorer 5 or above on MacOS, %sopen our sidebar page%s in a separate window. In that window, open the "Page Holder" tab on the left side of the window. Click "Add". If you want to keep it for future use, click on "Favorites" and select "Add to Page Holder Favorites".'; // cpg1.5
$lang_sidebar_php['ie_win'] = 'Internet Explorer 5 and above on Windows'; // cpg1.5
$lang_sidebar_php['ie_win_explain'] = 'If you use Internet Explorer 5 or above on Windows, you can add the Side Bar to your Links toolbar or you can add it to your favorites and clicking on it you can see our bar displayed in place of your usual search bar by right-clicking %shere%s and selecting "Add to favorites" from the context menu. This link does not install our bar as your default search bar, so no modification is made to your system.'; // cpg1.5
$lang_sidebar_php['ie7_win'] = 'Internet Explorer 7 on Windows XP/Vista'; // cpg1.5
$lang_sidebar_php['ie7_win_explain'] = 'If you use Internet Explorer 7 on Windows, you can add a navigation pop-up to your Links toolbar or you can add it to your favorites and clicking on it you can see our bar displayed as a pop-up window by right-clicking %shere%s and selecting "Add to favorites" from the context menu. In previous versions of IE, it was possible to add an actual side bar, but in IE7 you cannot accomplish this without applying complicated registry hacks. It is recommended to use another browser if you want to use an actual sidebar.'; // cpg1.5
$lang_sidebar_php['opera'] = 'Opera 6 and above'; // cpg1.5
$lang_sidebar_php['opera_explain'] = 'If you are using Opera, you can %sclick on this link to add our sidebar to your set%s. Tick "Show in panel" then. You can uninstall the sidebar by right clicking on it\'s tab and choosing "Delete" from the context menu.'; // cpg1.5
$lang_sidebar_php['additional_options'] = 'Additional options'; // cpg1.5
$lang_sidebar_php['additional_options_explain'] = 'If you have another browser than the one mentioned above, then click %shere%s to display all possible sidebar options.'; // cpg1.5
$lang_sidebar_php['cannot_add_sidebar'] = 'Sidebar cannot be added! Your browser does not support this method!'; // cpg1.5 // js-alert
$lang_sidebar_php['search'] = 'Ara'; // cpg1.5
$lang_sidebar_php['reload'] = 'Yeninden Yükle'; // cpg1.5
}


// ------------------------------------------------------------------------- //
// File search.php
// ------------------------------------------------------------------------- //
if (defined('SEARCH_PHP')){
$lang_search_php['title'] = 'Arama';
$lang_search_php['submit_search'] = 'arama';
$lang_search_php['keyword_list_title'] = 'Anahtar kelime listesi';
$lang_search_php['keyword_msg'] = 'Yukarıdaki liste üyeye kelimeleri içermez. Lütfen aradığınız kelimeleri yazınız.';
$lang_search_php['edit_keywords'] = 'Anahtar kelimeleri düzenle';
$lang_search_php['search in'] = 'Ara:';
$lang_search_php['ip_address'] = 'IP adresi';
$lang_search_php['imgfields'] = 'Dosyaları ara';
$lang_search_php['albcatfields'] = 'Albümler ve kategoriler ara';
$lang_search_php['age'] = 'Yaş';
$lang_search_php['newer_than'] = 'Daha yeni';
$lang_search_php['older_than'] = 'En eski';
$lang_search_php['days'] = 'gün';
$lang_search_php['all_words'] = 'Uyan tüm kelimeler (AND)';
$lang_search_php['any_words'] = 'Eşleşen herhangi bir kelime (OR)';
$lang_search_php['regex'] = 'Eşleşen düzenli ifadeler';
$lang_search_php['album_title'] = 'Albüm başlıkları';
$lang_search_php['category_title'] = 'Kategori başlıkları';
}

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //
if (defined('SEARCHNEW_PHP')) {
$lang_search_new_php['page_title'] = 'Yeni resimler ara';
$lang_search_new_php['select_dir'] = 'Klasör seç';
$lang_search_new_php['select_dir_msg'] = 'Bu fonksiyon size FTP ile sunucunuza resim grubu eklemenize izin verir.<br /><br />Resimlerinizi eklediğiniz klasörü seçin';
$lang_search_new_php['no_pic_to_add'] = 'Eklemek için resim bulunamadı';
$lang_search_new_php['need_one_album'] = 'Son olarak bu fonksiyonu kullanabilmek için bir albüme ihtiyacınız var';
$lang_search_new_php['warning'] = 'Uyarı';
$lang_search_new_php['change_perm'] = 'Script bu klasörü yazamaz , modunu resimleri eklemeden önce 755 e vaya 777 ye çevirmeniz gerekir !';
$lang_search_new_php['target_album'] = '<b>Resimlerini koy &quot;</b>%s<b>&quot; içine </b>%s';
$lang_search_new_php['folder'] = 'Klasör';
$lang_search_new_php['image'] = 'Dosya';
$lang_search_new_php['result'] = 'Sonuç';
$lang_search_new_php['dir_ro'] = 'Yazılamaz. ';
$lang_search_new_php['dir_cant_read'] = 'Okunamaz. ';
$lang_search_new_php['insert'] = 'Galeriye yeni resimler ekleme';
$lang_search_new_php['list_new_pic'] = 'Yeni resimlerin listesi';
$lang_search_new_php['insert_selected'] = 'Seçilen resimleri ekle';
$lang_search_new_php['no_pic_found'] = 'Yeni resim bulunamadı';
$lang_search_new_php['be_patient'] = 'Lütfen sabırlı olun, scriptin resimleri eklemek için zamana ihtiyacı var';
$lang_search_new_php['no_album'] = 'Albüm seçilmedi';
$lang_search_new_php['result_icon'] = 'Detaylar için tıklayın ya da yenileyin';
$lang_search_new_php['notes'] = <<< EOT
    <ul>
        <li>%s: resim başarıyla eklendi</li>
        <li>%s: resim aynı ve daha öneceden veri tabanın içinde</li>
        <li>%s: resim eklenemedi, biçiminizi ve resimlerin nerede klasör izninine sahip olduğunuzu kontrol ediniz</li>
        <li>%s: resime gidebilmek için bir albüm seçmediniz</li>
        <li>%s: Bu dosya linki kırık veya ulaşılamıyor</li>
        <li>%s: bilinmeyen dosya türü</li>
        <li>%s: dosya bir GIF görüntü</li>
        <li>If the icons do not appear click on the broken file to see any error message produced by PHP</li>
        <li>Eğer browserınız timeout ise, tekrar yükle butonunu tıklayınız</li>
    </ul>
EOT;
// Translator note: Do not translate the %s placeholders - they are being replaced with icons
$lang_search_new_php['check_all'] = 'Tümünü seç';
$lang_search_new_php['uncheck_all'] = 'İşaretleri iptal et';
$lang_search_new_php['no_folders'] = 'Albums" klasörünün içinde hiç bir klasör yok henüz. Bu klasörün içinde en az bir klasör oluşturmanız gerekiyor. Daha sonrada dosyalarınızı bu klasörün içine ftp ile yükleyiniz. Dikkat:  "userpics" ve "edit" klasörlerinin içine hiç bir şey yüklemeyin. Bu klasörler sistem dosyaları ve http yüklemeleri için kullanılmakta.';
$lang_search_new_php['browse_batch_add'] = 'Browsable görünüm '; // cpg1.5
$lang_search_new_php['display_thumbs_batch_add'] = 'Küçük resimleri göster'; // cpg1.5
$lang_search_new_php['edit_pics'] = 'Dosyaları düzenle';
$lang_search_new_php['edit_properties'] = 'Albüm ayarları';
$lang_search_new_php['view_thumbs'] = 'Küçük resimleri izle';
$lang_search_new_php['add_more_folder'] = ' %s klasörinden toplu dosya ekle'; // cpg1.5
}

// ------------------------------------------------------------------------- //
//File send_activation.php
// ------------------------------------------------------------------------- //
if (defined('SEND_ACTIVATION_PHP')) {
$lang_send_activation_php['err_already_logged_in'] = 'Zaten oturum var!'; // cpg1.5
$lang_send_activation_php['activation_not_required'] = 'Bu web sitesinde e-posta ile etkinleştirme gerektirmiyor'; // cpg1.5
$lang_send_activation_php['err_unk_user'] = 'Seçili kullanıcı yok!'; // cpg1.5
$lang_send_activation_php['resend_act_link'] = 'Yeniden aktivasyon linki gönder'; // cpg1.5
$lang_send_activation_php['enter_email'] = 'E-posta adresinizi girin'; // cpg1.5
$lang_send_activation_php['submit'] = 'Git'; // cpg1.5
$lang_send_activation_php['failed_sending_email'] = 'E-posta ile aktivasyon linki gönderme işlemi başarısız oldu.'; // cpg1.5
$lang_send_activation_php['activation_email_sent'] = 'Aktivasyon linki içeren bir email %s adresine gönderildi. İşlemi tamamlamak için e-postanızı kontrol edin.'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File stat_details.php
// ------------------------------------------------------------------------- //

if (defined('STAT_DETAILS_PHP')) {
$lang_stat_details_php['show_hide'] = 'Bu sütunu Göster / Gizle';
$lang_stat_details_php['title'] = 'Istatistik bilgi'; // cpg1.5
$lang_stat_details_php['vote'] = 'Oy Detayları';
$lang_stat_details_php['hits'] = 'Hit Detayları';
$lang_stat_details_php['stats'] = 'Oy İstatistikleri';
$lang_stat_details_php['users'] = 'Kullanıcı İstatistikleri';
$lang_stat_details_php['sdate'] = 'Tarih';
$lang_stat_details_php['rating'] = 'Değerlendirme';
$lang_stat_details_php['search_phrase'] = 'Arama cümle';
$lang_stat_details_php['referer'] = 'Referer';
$lang_stat_details_php['browser'] = 'Tarayıcı';
$lang_stat_details_php['os'] = 'İşletim Sistemi';
$lang_stat_details_php['ip'] = 'IP';
$lang_stat_details_php['uid'] = 'Kullanıcı'; // cpg1.5
$lang_stat_details_php['sort_by_xxx'] = '%s sırala';
$lang_stat_details_php['ascending'] = 'yükselen';
$lang_stat_details_php['descending'] = 'azalan';
$lang_stat_details_php['internal'] = 'int';
$lang_stat_details_php['close'] = 'Kapat';
$lang_stat_details_php['hide_internal_referers'] = 'iç işaret gizlemek';
$lang_stat_details_php['date_display'] = 'Tarih ekranı';
$lang_stat_details_php['records_per_page'] = 'sayfa başına kayıtlar';
$lang_stat_details_php['submit'] = 'gönder / yenile';
$lang_stat_details_php['overall_stats'] = 'Genel istatistikler'; // cpg1.5
$lang_stat_details_php['stats_by_os'] = 'Işletim sistemleri'; // cpg1.5
$lang_stat_details_php['number_of_hits'] = 'Hit sayısı'; // cpg1.5
$lang_stat_details_php['total'] = 'Toplam'; // cpg1.5
$lang_stat_details_php['stats_by_browser'] = 'Tarayıcı İstatistikler'; // cpg1.5
$lang_stat_details_php['overall_stats_config'] = 'Genel istatistikler yapılandırma'; // cpg1.5
$lang_stat_details_php['hit_details'] = 'Ayrıntılı isabet istatistikleri tutun'; // cpg1.5
$lang_stat_details_php['hit_details_explanation'] = 'Ayrıntılı isabet istatistikleri tutun'; // cpg1.5
$lang_stat_details_php['vote_details'] = 'Ayrıntılı oy istatistikleri tutun'; // cpg1.5
$lang_stat_details_php['vote_details_explanation'] = 'Ayrıntılı oy istatistikleri tutun'; // cpg1.5
$lang_stat_details_php['empty_hits_table'] = 'Hit istatistikleri boş'; // cpg1.5
$lang_stat_details_php['empty_hits_table_confirm'] = 'Bütün hit statistik verilerini silmek istediğinizden emin misiniz? Bu geri alınamaz!'; // cpg1.5 // js-alert
$lang_stat_details_php['empty_votes_table'] = 'Tüm oy istatistikleri boş'; // cpg1.5
$lang_stat_details_php['empty_votes_table_confirm'] = 'Bütün oy statistik verilerini silmek istediğinizden emin misiniz? Bu geri alınamaz!'; // cpg1.5 // js-alert
$lang_stat_details_php['submit'] = 'Gönder'; // cpg1.5
$lang_stat_details_php['upd_success'] = 'Coppermine seçenekleri güncellendi'; // cpg1.5
$lang_stat_details_php['votes'] = 'Oylar'; // cpg1.5
$lang_stat_details_php['reset_votes_individual'] = 'Seçilen oy(lar)ı sıfırla'; // cpg1.5
$lang_stat_details_php['reset_votes_individual_confirm'] = 'Seçili oyları silmek istediğinizden emin misiniz? Bu geri alınamaz!'; // cpg1.5
$lang_stat_details_php['back_to_intermediate'] = 'Geri ara dosyasını görüntülemek için'; // cpg1.5
$lang_stat_details_php['records_on_page'] = '%s kayıt(lar) %s sayfada'; // cpg1.5
$lang_stat_details_php['guest'] = 'Misafir'; // cpg1.5
$lang_stat_details_php['not_implemented'] = 'henüz uygulanmadı'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) {
$lang_upload_php['title'] = 'Dosya Yükle';
$lang_upload_php['restrictions'] = 'Kısıtlamalar'; // cpg1.5
$lang_upload_php['choose_method'] = 'Yükleme yöntemi seçin'; // cpg1.5
$lang_upload_php['upload_swf'] = 'Çoklu dosyalar - Flash (önerilir) tahrikli'; // cpg1.5
$lang_upload_php['upload_single'] = 'Basit - Her seferinde bir dosya'; // cpg1.5
$lang_upload_php['up_instr_1'] = 'Açılabilir albümden bir albüm seçin';
$lang_upload_php['up_instr_2'] = 'Aşagıdaki dügmeye basarak yükleyeceginiz dosyayı bulunuz ve seçiniz. İsterseniz Ctrl tuşuna basarak birden fazla dosyada seçebilirsiniz.';
$lang_upload_php['up_instr_3'] = 'Daha fazla dosya yüklemek için 2. adımı tekrarlayın';
$lang_upload_php['up_instr_4'] = 'Yükleme işleminin bitmesinden sonra DEVAM tuşuna basarak yüklemeyi tamamlayın.';
$lang_upload_php['up_instr_5'] = 'Devam tuşu ile birlikte yüklediğiniz dosyalar hakkında bilgi yazabileceginiz bir ekrana gelirsiniz. Burada dosyalar hakkında bilgileri yazın ve "Değişiklikleri uygula" düğmesini basarak dosya yükleme işlemini tamamlayın.';
$lang_upload_php['restriction_zip'] = 'Yüklenen ZIP dosyaları sıkıştırılmış olarak saklanır. Servera açılmaz.';
$lang_upload_php['restriction_filesize'] = 'Sunucuya yüklediğiniz resimlerin boyutu %s geçmemelidir.';
$lang_upload_php['reg_instr_1'] = 'Form oluşturma için geçersiz işlem.';
$lang_upload_php['no_name'] = 'Dosya adı yok'; // cpg 1.5
$lang_upload_php['no_tmp_name'] = 'Yükleme yapılamıyor'; // cpg 1.5
$lang_upload_php['no_post'] = 'POST tarafından dosya yüklenmedi.';
$lang_upload_php['forb_ext'] = 'Yasak dosya uzantısı.';
$lang_upload_php['exc_php_ini'] = 'Exceeded filesize allowed in php.ini.';
$lang_upload_php['exc_file_size'] = 'Exceeded filesize permitted by CPG.';
$lang_upload_php['partial_upload'] = 'Sadece kısmi bir yükleme.';
$lang_upload_php['no_upload'] = 'Yükleme yok';
$lang_upload_php['unknown_code'] = 'Bilinmeyen PHP yükleme hata kodu.';
$lang_upload_php['impossible'] = 'Taşımak mümkün değil.';
$lang_upload_php['not_image'] = 'Resim değil veya bozuk';
$lang_upload_php['not_GD'] = 'GD uzantısı degil.';
$lang_upload_php['pixel_allowance'] = 'Yüksekliği ve / veya genişlik izin verilen boyutlardan daha büyük.';
$lang_upload_php['failure'] = 'Yükleme hatası';
$lang_upload_php['no_place'] = 'Önceki resim yerleştirilemedi';
$lang_upload_php['max_fsize'] = 'Maksimum izin verilen dosya boyutu %s dir.';
$lang_upload_php['picture'] = 'Dosya';
$lang_upload_php['pic_title'] = 'Dosya başlığı';
$lang_upload_php['description'] = 'Dosya açıklama';
$lang_upload_php['keywords_sel'] = 'Bir anahtar kelime seçin';
$lang_upload_php['err_no_alb_uploadables'] = 'Üzgünüm dosya yükleme yetkiniz hiçbir albümüde yoktur';
$lang_upload_php['close'] = 'Kapat';
$lang_upload_php['no_keywords'] = 'Üzgünüz, anahtar kelimeler mevcut değil!';
$lang_upload_php['regenerate_dictionary'] = 'Sözlük oluştur';
$lang_upload_php['allowed_types'] = 'Aşağıdaki uzantılara sahip dosyaları yüklemek için izin verilir:'; // cpg1.5
$lang_upload_php['allowed_img_types'] = 'Resim uzantıları:%s'; // cpg1.5
$lang_upload_php['allowed_mov_types'] = 'Video uzantıları:%s'; // cpg1.5
$lang_upload_php['allowed_doc_types'] = 'Belge uzantıları:%s'; // cpg1.5
$lang_upload_php['allowed_snd_types'] = 'Ses uzantıları:% '; // cpg1.5
$lang_upload_php['please_wait'] = 'script yüklenirken lütfen bekleyin - Bu biraz zaman alabilir'; // cpg1.5
$lang_upload_php['alternative_upload'] = 'Yükleme için alternatif yöntem '; // cpg1.5
$lang_upload_php['xp_publish_promote'] = 'If you are running Windows XP/Vista, you can use the Windows XP Uploading Wizard as well to upload files, providing an easier user interface directly on the client.'; // cpg1.5
$lang_upload_php['err_js_disabled'] = 'Flash arayüzü yüklenemedi. Flash arayüzünün çalışabilmesi için JavaScript etkin olmalıdır.'; // cpg1.5
$lang_upload_php['err_flash_disabled'] = 'Yükleme arabirimini yüklemek uzun zaman alıyor veya yükleme hatası var. Flash Plugin proğramının etkin olduğundan ve Flash Player çalışan bir sürümü yüklü olduğundan emin olun.'; // cpg1.5
$lang_upload_php['err_alternate_method'] = 'Alternatif olarak <a href="upload.php?single=1">single</a> kullanabilirsiniz.'; // cpg1.5
$lang_upload_php['err_flash_version'] = 'Yükleme arayüzü yüklenemedi. Yüklemek veya Flash Player yükseltme gerekebilir. Flash Player almak için <a href="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash">Adobe website</a>  Adobe web sitesini ziyaret edin.'; // cpg1.5
$lang_upload_php['flash_loading'] = 'Yükleme arayüz yükleniyor. Lütfen biraz bekleyin ...'; // cpg1.5
$lang_upload_swf_php['browse'] = 'Araştır ...'; //cpg1.5
$lang_upload_swf_php['cancel_all'] = 'Iptal tüm yüklenenler'; //cpg1.5
$lang_upload_swf_php['upload_queue'] = 'Yükleme sırası'; //cpg1.5
$lang_upload_swf_php['files_uploaded'] = 'Yüklenen dosyalar'; //cpg1.5
$lang_upload_swf_php['all_files'] = 'Tüm Dosyalar'; //cpg1.5
$lang_upload_swf_php['status_pending'] = 'Beklemede ...'; //cpg1.5
$lang_upload_swf_php['status_uploading'] = 'Yükleniyor...'; //cpg1.5
$lang_upload_swf_php['status_complete'] = 'Tamam.'; //cpg1.5
$lang_upload_swf_php['status_cancelled'] = 'İptal edildi.'; //cpg1.5
$lang_upload_swf_php['status_stopped'] = 'Durdu.'; //cpg1.5
$lang_upload_swf_php['status_failed'] = 'Yükleme başarısız.'; //cpg1.5
$lang_upload_swf_php['status_too_big'] = 'Dosya çok büyük.'; //cpg1.5
$lang_upload_swf_php['status_zero_byte'] = 'Sıfır Byte dosya dosya yüklenmez.'; //cpg1.5
$lang_upload_swf_php['status_invalid_type'] = 'Geçersiz Dosya Türü.'; //cpg1.5
$lang_upload_swf_php['status_unhandled'] = 'İşlenmeyen Hata'; //cpg1.5
$lang_upload_swf_php['status_upload_error'] = 'Yükle Hata:'; //cpg1.5
$lang_upload_swf_php['status_server_error'] = 'Sunucusu (IO) hatası'; //cpg1.5
$lang_upload_swf_php['status_security_error'] = 'Güvenlik hatası'; //cpg1.5
$lang_upload_swf_php['status_upload_limit'] = 'Upload sınırı aşıldı.'; //cpg1.5
$lang_upload_swf_php['status_validation_failed'] = 'Başarısız Geçerliliği. Upload atlanır.'; //cpg1.5
$lang_upload_swf_php['queue_limit'] = 'Çok fazla dosya yüklenmeyi bekliyor.'; //cpg1.5
$lang_upload_swf_php['upload_limit_1'] = 'Yükleme limitine ulaştınız.'; //cpg1.5
$lang_upload_swf_php['upload_limit_2'] = '%s dosya(lar) kadar seçim yapabilirsiniz'; //cpg1.5
}
// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //
if (defined('USERMGR_PHP')) {
$lang_usermgr_php['memberlist'] = 'Üye Listesi';
$lang_usermgr_php['user_manager'] = 'Kullanıcı yöneticisi';
$lang_usermgr_php['title'] = 'Kullanıcıları yönetme';
$lang_usermgr_php['name_a'] = 'Ad göre artan';
$lang_usermgr_php['name_d'] = 'Ad gore azalan';
$lang_usermgr_php['group_a'] = 'Grup azalan';
$lang_usermgr_php['group_d'] = 'Grup azalan';
$lang_usermgr_php['reg_a'] = 'Kayıt tarih artan';
$lang_usermgr_php['reg_d'] = 'Kayıt tarih azalan';
$lang_usermgr_php['pic_a'] = 'Artan dosya sayısı';
$lang_usermgr_php['pic_d'] = 'Inen dosya sayısı';
$lang_usermgr_php['disku_a'] = 'Artan disk kullanımı';
$lang_usermgr_php['disku_d'] = 'Inen disk kullanımı';
$lang_usermgr_php['lv_a'] = 'Son ziyaret artan';
$lang_usermgr_php['lv_d'] = 'Son ziyaret azalan';
$lang_usermgr_php['sort_by'] = 'Kullanıcıları sırala';
$lang_usermgr_php['err_no_users'] = 'Kullanıcı tablosu boş!';
$lang_usermgr_php['err_edit_self'] = 'Kendi profiliniz düzenleyebilirsiniz. Bunun için \My profile\ linkini kullanın';
$lang_usermgr_php['with_selected'] = 'Seçilen ile:';
$lang_usermgr_php['delete_files_no'] = 'keep public files (but anonymize)';
$lang_usermgr_php['delete_files_yes'] = 'delete public files as well';
$lang_usermgr_php['delete_comments_no'] = 'Yorumları sakla (anonim) ';
$lang_usermgr_php['delete_comments_yes'] = 'Yorumları sil';
$lang_usermgr_php['activate'] = 'Etkinleştir';
$lang_usermgr_php['deactivate'] = 'Devre dışı bırak';
$lang_usermgr_php['reset_password'] = 'Şifre Sıfırla';
$lang_usermgr_php['change_primary_membergroup'] = 'Birincil üye grubu değiştir';
$lang_usermgr_php['add_secondary_membergroup'] = 'İkinci üye grubu ekle';
$lang_usermgr_php['name'] = 'Kullanıcı adı';
$lang_usermgr_php['group'] = 'Grup';
$lang_usermgr_php['inactive'] = 'Pasif';
$lang_usermgr_php['operations'] = 'Operasyonlar';
$lang_usermgr_php['pictures'] = 'Resimler';
$lang_usermgr_php['disk_space_used'] = 'Kullanılan alan';
$lang_usermgr_php['disk_space_quota'] = 'Kota'; // cpg1.5
$lang_usermgr_php['registered_on'] = 'Kayıt';
$lang_usermgr_php['last_visit'] = 'Son ziyaret';
$lang_usermgr_php['u_user_on_p_pages'] = '%d users on %d page(s)';
$lang_usermgr_php['confirm_del'] = 'Bu kullanıcıyı SİLMEK istediğinizden emin misiniz? \ \ nTüm dosya ve albümleride silinecektir.'; // js-alert
$lang_usermgr_php['mail'] = 'POSTA';
$lang_usermgr_php['err_unknown_user'] = 'Seçilen kullanıcı yok!';
$lang_usermgr_php['modify_user'] = 'Kullanıcıyı yönet';
$lang_usermgr_php['notes'] = 'Notlar';
$lang_usermgr_php['note_list'] = 'Şifreyi değiştirmek istemiyorsanız, "Şifre" alanını boş bırakın';
$lang_usermgr_php['password'] = 'Şifre';
$lang_usermgr_php['user_active'] = 'Kullanıcı aktif';
$lang_usermgr_php['user_group'] = 'Kullanıcı grubu';
$lang_usermgr_php['user_email'] = 'Kullanıcı e-posta';
$lang_usermgr_php['user_web_site'] = 'Kullanıcı web sitesi';
$lang_usermgr_php['create_new_user'] = 'Yeni kullanıcı oluştur';
$lang_usermgr_php['user_location'] = 'Kullanıcı konumu';
$lang_usermgr_php['user_interests'] = 'Kullanıcı ilgi';
$lang_usermgr_php['user_occupation'] = 'Kullanıcı işgal';
$lang_usermgr_php['user_profile1'] = '$ user_profile1';
$lang_usermgr_php['user_profile2'] = '$ user_profile2';
$lang_usermgr_php['user_profile3'] = '$ user_profile3';
$lang_usermgr_php['user_profile4'] = '$ user_profile4';
$lang_usermgr_php['user_profile5'] = '$ user_profile5';
$lang_usermgr_php['user_profile6'] = '$ user_profile6';
$lang_usermgr_php['latest_upload'] = 'Son yüklenenler';
$lang_usermgr_php['no_latest_upload'] = 'Herhangi bir dosya yükledi'; // cpg1.5
$lang_usermgr_php['last_comments'] = 'Son yorumlar'; // cpg1.5
$lang_usermgr_php['no_last_comments'] = 'Herhangi bir yorum yapmadınız mı'; // cpg1.5
$lang_usermgr_php['comments'] = 'Yorum'; // cpg1.5
$lang_usermgr_php['never'] = 'Asla';
$lang_usermgr_php['search'] = 'Kullanıcı arama';
$lang_usermgr_php['submit'] = 'Gönderin';
$lang_usermgr_php['search_submit'] = 'Git!';
$lang_usermgr_php['search_result'] = 'Arama sonuçları:';
$lang_usermgr_php['alert_no_selection'] = 'En az bir kullanıcı seçmelisiniz!'; // js-alert
$lang_usermgr_php['select_group'] = 'Seçmek grup';
$lang_usermgr_php['groups_alb_access'] = 'Grup Albüm izinleri';
$lang_usermgr_php['category'] = 'Kategori';
$lang_usermgr_php['modify'] = 'Değiştirmek?';
$lang_usermgr_php['group_no_access'] = 'Bu gruba özel bir erişimi olan';
$lang_usermgr_php['notice'] = 'Duyuru';
$lang_usermgr_php['group_can_access'] = 'Albüm (ler) sadece erişebilirsiniz "% s " olduğunu';
$lang_usermgr_php['send_login_data'] = 'Bu kullanıcının (Şifre e-posta yoluyla gönderilecektir) giriş veri gönderme'; // cpg1.5
$lang_usermgr_php['send_login_email_subject'] = 'Yeni hesap bilgileri'; // cpg1.5
$lang_usermgr_php['failed_sending_email'] = 'Giriş verileri e-posta gönderilemedi!'; // cpg1.5
$lang_usermgr_php['view_profile'] = 'Profil'; // cpg1.5
$lang_usermgr_php['edit_profile'] = 'Profilinizi düzenleyin'; // cpg1.5
$lang_usermgr_php['ban_user'] = 'Kullanıcı yasakla'; // cpg1.5
$lang_usermgr_php['user_is_banned'] = 'Kullanıcı yasaklandı'; // cpg1.5
$lang_usermgr_php['status'] = 'Durum'; // cpg1.5
$lang_usermgr_php['status_active'] = 'Aktif'; // cpg1.5
$lang_usermgr_php['status_inactive'] = 'Pasif'; // cpg1.5
$lang_usermgr_php['total'] = 'Toplam'; // cpg1.5
$lang_usermgr_php['send_login_data_email'] = <<< EOT
Sizin adınıza {SITE_NAME} sitesinde bir hesap açıldı.

Siteye <a href="{SITE_LINK}">{SITE_LINK}</a> adresinden girebilirsiniz.
Kullanıcı adı "{USER_NAME}" ve şifresi "{USER_PASS}"


Saygılar,

{SITE_NAME} yönetimi

EOT;
}

// ------------------------------------------------------------------------- //
// File update.php
// ------------------------------------------------------------------------- //
if (defined('UPDATE_PHP')) {
$lang_update_php['title'] = 'Güncelleyici'; // cpg1.5
$lang_update_php['welcome_updater'] = 'Coppermine Güncellemeye Hoşgeldiniz'; // cpg1.5
$lang_update_php['could_not_authenticate'] = 'Kimlik doğrulaması yapılamadı'; // cpg1.5
$lang_update_php['provide_admin_account'] = 'Coppermine yönetici hesabı bilgileri veya MySQL hesap bilgileri veriniz'; // cpg1.5
$lang_update_php['try_again'] = 'Tekrar dene'; // cpg1.5
$lang_update_php['mysql_connect_error'] = 'MySQL bağlantısı oluşturulamadı'; // cpg1.5
$lang_update_php['mysql_database_error'] = 'MySQL %s adlı veritabanını bulamadı'; // cpg1.5
$lang_update_php['mysql_said'] = 'MySQL:'; // cpg1.5
$lang_update_php['check_config_file'] = '%s de MySQL ayrıntıları kontrol edin'; // cpg1.5
$lang_update_php['performing_database_updates'] = 'Veritabanı Güncellemeleri Performansı'; // cpg1.5
$lang_update_php['performing_file_updates'] = 'Dosya Güncellemeleri Performansı'; // cpg1.5
$lang_update_php['already_done'] = 'Tamam'; // cpg1.5
$lang_update_php['password_encryption'] = 'Şifre Şifreleme'; // cpg1.5
$lang_update_php['alb_password_encryption'] = 'Albüm şifre Şifreleme'; // cpg1.5
$lang_update_php['category_tree'] = 'Kategori ağacı'; // cpg1.5
$lang_update_php['authentication_needed'] = 'Authentication needed'; // cpg1.5
$lang_update_php['username'] = 'Kullanıcı adı'; // cpg1.5
$lang_update_php['password'] = 'Şifre'; // cpg1.5
$lang_update_php['update_completed'] = 'Güncelleme tamamlandı'; // cpg1.5
$lang_update_php['check_versions'] = 'It\'s recommended to %scheck your file versions%s if you just upgraded from an older version of Coppermine'; // cpg1.5 // Leave the %s untouched when translating - it wraps the link
$lang_update_php['start_page'] = 'If you didn\'t (or you don\'t want to check), you can go to %syour gallery\'s start page%s'; // cpg1.5 // Leave the %s untouched when translating - it wraps the link
$lang_update_php['errors_encountered'] = 'Düzeltilmesi gereken aşağıdaki hatalar tespit edildi'; // cpg1.5
$lang_update_php['delete_file'] = '%s sil'; // cpg1.5
$lang_update_php['could_not_delete'] = 'Eksik izinler nedeniyle silinemedi. Manuel olarak sil!'; // cpg1.5
$lang_update_php['rename_file'] = 'Rename %s to %s'; // cpg1.5
$lang_update_php['could_not_rename'] = 'Eksik izinleri nedeniyle yeniden adlandırılamadı. Manuel olarak adlandırınız!'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //
if (defined('UTIL_PHP')) {
$lang_util_php['title'] = 'Admin araçları'; // cpg1.5
$lang_util_php['file'] = 'Dosya';
$lang_util_php['problem'] = 'Sorun';
$lang_util_php['status'] = 'Durum';
$lang_util_php['title_set_to'] = 'title set to';
$lang_util_php['submit_form'] = 'gönder';
$lang_util_php['titles_updated'] = '%s Başlıklar güncellendi.'; // cpg1.5
$lang_util_php['updated_successfully'] = 'başarıyla güncellendi'; // cpg1.5
$lang_util_php['error_create'] = 'HATA oluşturma';
$lang_util_php['continue'] = 'Süreci daha fazla dosya'; // cpg1.5
$lang_util_php['main_success'] = '%s dosyasi baþarili olarak main dosya olarak kullanılmıştır';
$lang_util_php['error_rename'] = 'Error renaming %s to %s';
$lang_util_php['error_not_found'] = '%s dosya bulunamadı';
$lang_util_php['back'] = 'Yönetici araçlarına geri dön'; // cpg1.5
$lang_util_php['thumbs_wait'] = ' Küçük ve/veya boyutlandırılmış resimler güncelleniyor, lütfen bekleyin ...';
$lang_util_php['thumbs_continue_wait'] = 'Küçük ve / veya boyutlandırılmış resimleri güncellemek için DEVAM ediniz...';
$lang_util_php['titles_wait'] = 'Başlılklar güncelleniyor, lütfen bekleyin ...';
$lang_util_php['delete_wait'] = 'Başlıkları siliniyor, lütfen bekleyin ...';
$lang_util_php['replace_wait'] = 'Orijinaller siliniyor ve boyutlandırılmış resimler ile değiştiriliyor, lütfen bekleyiniz ..';
$lang_util_php['update'] = 'Küçük ve/veya boyutlandırılmış resimleri güncelle';
$lang_util_php['update_what'] = 'Ne güncellemeli';
$lang_util_php['update_thumb'] = 'Sadece küçük resimler';
$lang_util_php['update_pic'] = 'Sadece boyutlandırılmış resimler';
$lang_util_php['update_both'] = 'Küçük ve boyutlandırılmış resimler';
$lang_util_php['update_number'] = 'Number of processed images per click';
$lang_util_php['update_option'] = '(Eğer zaman aşımı sorunları yaşıyorsanız bu seçenegi deneyin)';
$lang_util_php['update_missing'] = 'Sadece eksik dosyaları güncelleme'; // cpg1.5
$lang_util_php['filename_title'] = 'Dosya adı &rArr; Resim adı';
$lang_util_php['filename_how'] = 'Nasıl dosya adı değiştirilmiş olmalı';
$lang_util_php['filename_remove'] = 'Remove extension (.jpg or other) and replace _ (underscores) with spaces'; // cpg1.5
$lang_util_php['filename_euro'] = 'Change 2003_11_23_13_20_20.jpg to 23/11/2003 13:20';
$lang_util_php['filename_us'] = 'Change 2003_11_23_13_20_20.jpg to 11/23/2003 13:20';
$lang_util_php['filename_time'] = 'Change 2003_11_23_13_20_20.jpg to 13:20';
$lang_util_php['notitle'] = 'Apply only for files with empty titles'; // cpg1.5
$lang_util_php['delete_title'] = 'Dosya başlıklarını sil';
$lang_util_php['delete_title_explanation'] = 'Bu belirttiğiniz albümdeki tüm başlıklar kaldıracaktır.';
$lang_util_php['delete_original'] = 'Orijinal boyutunda fotoğraf sil';
$lang_util_php['delete_original_explanation'] = 'Bu tam boyutlu resimleri kaldıracaktır.';
$lang_util_php['delete_intermediate'] = 'Ara resimlerini sil';
$lang_util_php['delete_intermediate_explanation1'] = 'Bu orta (normal) resimleri siler.'; // cpg1.5
$lang_util_php['delete_intermediate_explanation2'] = 'Use this to free up disk space if you have disabled \'Create intermediate pictures\' in config after adding pictures.'; // cpg1.5
$lang_util_php['delete_intermediate_check'] = 'The config option \'Create intermediate pictures\' is currently %s.'; // cpg1.5
$lang_util_php['no_image'] = '%s resim olmadıgı için atlandı.'; // cpg1.5
$lang_util_php['enabled'] = 'Etkin'; // cpg1.5
$lang_util_php['disabled'] = 'Pasif'; // cpg1.5
$lang_util_php['delete_replace'] = 'Orijinal görüntüleri sil ve boyutlanmış versiyonları ile değiştir.';
$lang_util_php['titles_deleted'] = 'Seçilen albümdeki bütün başlıklar silindi';
$lang_util_php['deleting_intermediates'] = 'Ara görüntüleri siliniyor, lütfen bekleyin ...';
$lang_util_php['searching_orphans'] = 'Searching for orphans, please wait...';
$lang_util_php['delete_orphans'] = 'Kayıp dosyadaki yorumları sil';
$lang_util_php['delete_orphans_explanation'] = 'This will identify and allow you to delete any comments associated with files no longer in the gallery.<br />Checks all albums.';
$lang_util_php['update_full_normal_thumb'] = 'Everything: full-sized, resized and thumbs'; // cpg1.5
$lang_util_php['update_full_normal'] = 'Her iki boyutlandırılan resımler ve tam boyut resımler tekrar boyutlandır (Bu orjinal resimler hala mevcut ise mümkün)'; // cpg1.5
$lang_util_php['update_full'] = 'Just full sized (if an original copy is available)'; // cpg1.5
$lang_util_php['delete_back'] = 'Mühürlü rersimlerin orjinalini sil'; // cpg1.5
$lang_util_php['delete_back_explanation'] = 'Bu seçenek yedek resimleri siler. Bu sunucunuzda yer tasarruf edecektir. Ama mühürsüz resimleri silinecektir. '; // cpg1.5
$lang_util_php['finished'] = '<br />Resimleri boyutlandırma bitti!<br />'; // cpg1.5
$lang_util_php['autorefresh'] = 'Otamatik güncelle (artık bir devam tuşuna basmanıza gerek kalmıyor)'; // cpg1.5
$lang_util_php['refresh_db'] = 'Reload file dimensions and size information.';
$lang_util_php['refresh_db_explanation'] = 'This will re-read file sizes and dimensions. Use this if quota\'s are incorrect or you have changed the files manually.';
$lang_util_php['reset_views'] = 'İzlenme sayacını sıfırla';
$lang_util_php['reset_views_explanation'] = 'Sets all file view counts to zero in the album specified.';
$lang_util_php['reset_success'] = 'Sıfırlama başarılı'; // cpg1.5
$lang_util_php['orphan_comment'] = 'Kayıp yorum bulundu';
$lang_util_php['delete_all'] = 'Tümünü sil';
$lang_util_php['delete_all_orphans'] = 'Kayıpları silinsinmi?';
$lang_util_php['comment'] = 'Yorum:';
$lang_util_php['nonexist'] = 'attached to non-existent file #';
$lang_util_php['delete_old'] = 'Delete files that are older than a set number of days'; // cpg1.5
$lang_util_php['delete_old_explanation'] = 'This will delete files that are older than the number of days you specify (full-size, intermediate, thumbnails). Use this feature to free up disk space.'; // cpg1.5
$lang_util_php['delete_old_warning'] = 'Warning: the files you specify will be deleted for good without further warnings!'; // cpg1.5
$lang_util_php['deleting_old'] = 'Eski resimler siliniyor, lütfen bekleyin ...'; // cpg1.5
$lang_util_php['older_than'] = '%s eski dosyaları sil'; // cpg1.5
$lang_util_php['del_orig'] = '%s eski orjinal dosyalar başarıyla silindi'; // cpg1.5
$lang_util_php['del_intermediate'] = '%s  ara görüntü başarıyla silindi'; // cpg1.5
$lang_util_php['del_thumb'] = '%s küçük resim başarıyla silindi'; // cpg1.5
$lang_util_php['del_error'] = '%s silme hatası!'; // cpg1.5
$lang_util_php['affected_records'] = '%s affected records.'; // cpg1.5
$lang_util_php['all_albums'] = 'Tüm albümleri'; // cpg1.5
$lang_util_php['update_result'] = 'Güncelleme sonuçları'; // cpg1.5
$lang_util_php['incorrect_filesize'] = 'Toplam dosya boyutu yanlış'; // cpg1.5
$lang_util_php['database'] = 'Veritabanı:'; // cpg1.5
$lang_util_php['bytes'] = ' bayt'; // cpg1.5
$lang_util_php['actual'] = 'Gerçek:'; // cpg1.5
$lang_util_php['updated'] = 'Güncellenmiş'; // cpg1.5
$lang_util_php['filesize_error'] = 'Could not obtain file size (may be invalid file), skipping....'; // cpg1.5
$lang_util_php['skipped'] = 'Atlandı'; // cpg1.5
$lang_util_php['incorrect_dimension'] = 'Boyutları yanlış'; // cpg1.5
$lang_util_php['dimension_error'] = 'atlama, boyut bilgi edinmek alınamadı ....'; // cpg1.5
$lang_util_php['cannot_fix'] = 'Düzeltilemedi'; // cpg1.5
$lang_util_php['fullpic_error'] = '%S dosyası mevcut değil!'; // cpg1.5
$lang_util_php['no_prob_detect'] = 'Herhangi bir sorun tespit edilemedi'; // cpg1.5
$lang_util_php['no_prob_found'] = 'Hiçbir sorun bulunamadı.'; // cpg1.5
$lang_util_php['keyword_convert'] = 'Kelime ayrıcıyı dönüştür'; // cpg1.5
$lang_util_php['keyword_from_to'] = 'Convert keyword separator from %s to %s'; // cpg1.5
$lang_util_php['keyword_set'] = 'Set gallery keyword separator to new value'; // cpg1.5
$lang_util_php['keyword_replace_before'] = 'Before conversion, replace %s with %s'; // cpg1.5
$lang_util_php['keyword_replace_after'] = 'After conversion, replace %s with %s'; // cpg1.5
$lang_util_php['keyword_replace_values'] = array('_'=>'underscore', '-'=>'hyphen', '~'=>'tilde'); // cpg1.5
$lang_util_php['keyword_explanation'] = 'This will convert the keyword separator for all your files from one value to another value. See the help documentation for details.'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File versioncheck.php
// ------------------------------------------------------------------------- //
if (defined('VERSIONCHECK_PHP')) {
$lang_versioncheck_php['title'] = 'Versiyon Denetle';
$lang_versioncheck_php['versioncheck_output'] = 'Versiyon denetlemeden çıkış';
$lang_versioncheck_php['file'] = 'dosya';
$lang_versioncheck_php['folder'] = 'klasör';
$lang_versioncheck_php['outdated'] = '%s daha yaşlı';
$lang_versioncheck_php['newer'] = '%s daha yeni';
$lang_versioncheck_php['modified'] = 'modifiye';
$lang_versioncheck_php['not_modified'] = 'değiştirilmemiş'; // cpg1.5
$lang_versioncheck_php['needs_change'] = 'ihtiyaçları değiştikçe';
$lang_versioncheck_php['review_permissions'] = 'Inceleme İzinler';
$lang_versioncheck_php['inaccessible'] = 'Dosya erişilemiyor';
$lang_versioncheck_php['review_version'] = 'Dosyanızı eskimiş';
$lang_versioncheck_php['review_dev_version'] = 'Dosyanızı beklenenden daha yeni';
$lang_versioncheck_php['review_modified'] = 'Dosya bozulmuş olabilir (ya da değiştirilmiş)';
$lang_versioncheck_php['review_missing'] = '%s eksik veya erişilemiyor';
$lang_versioncheck_php['existing'] = 'mevcut';
$lang_versioncheck_php['review_removed_existing'] = 'dosya güvenlik nedeniyle kaldırılmalıdır';
$lang_versioncheck_php['counter'] = 'Sayaç';
$lang_versioncheck_php['type'] = 'Türü';
$lang_versioncheck_php['path'] = 'Yol';
$lang_versioncheck_php['missing'] = 'Eksik';
$lang_versioncheck_php['permissions'] = 'Izinler';
$lang_versioncheck_php['version'] = 'Versiyon';
$lang_versioncheck_php['revision'] = 'Revizyon';
$lang_versioncheck_php['modified'] = 'Modifiye';
$lang_versioncheck_php['comment'] = 'Yorum';
$lang_versioncheck_php['help'] = 'Yardım';
$lang_versioncheck_php['repository_link'] = 'Repository link';
$lang_versioncheck_php['browse_corresponding_page_subversion'] = 'Browse page corresponding to this file in the project\'s subversion repository';
$lang_versioncheck_php['mandatory'] = 'zorunlu';
$lang_versioncheck_php['mandatory_missing'] = 'Zorunlu dosyası eksik'; // cpg1.5
$lang_versioncheck_php['optional'] = 'isteğe bağlı';
$lang_versioncheck_php['removed'] = 'kaldırıldı'; // cpg1.5
$lang_versioncheck_php['options'] = 'Seçenekleri';
$lang_versioncheck_php['display_output'] = 'Ekran çıkışı';
$lang_versioncheck_php['on_screen'] = 'Tam Ekran';
$lang_versioncheck_php['text_only'] = 'Salt metin';
$lang_versioncheck_php['errors_only'] = 'Sadece potansiyel hataları göster';
$lang_versioncheck_php['hide_images'] = 'Görüntüleri gizle'; // cpg1.5
$lang_versioncheck_php['no_modification_check'] = 'Değiştirilmiş dosyalar kontrol etme'; // cpg1.5
$lang_versioncheck_php['do_not_connect_to_online_repository'] = 'Do not connect to the online repository';
$lang_versioncheck_php['online_repository_explain'] = 'only recommended if connection fails';
$lang_versioncheck_php['submit'] = 'submit / yenileme';
$lang_versioncheck_php['select_all'] = 'Tümünü Seç'; // js-alert
$lang_versioncheck_php['files_folder_processed'] = 'Displaying %s items of %s folders/files processed with %s potential issues';
$lang_versioncheck_php['read'] = 'Okumak'; // cpg1.5
$lang_versioncheck_php['write'] = 'Yazmak'; // cpg1.5
$lang_versioncheck_php['warning'] = 'Uyarı'; // cpg1.5
$lang_versioncheck_php['not_applicable'] = 'n/a'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File view_log.php
// ------------------------------------------------------------------------- //
if (defined('VIEWLOG_PHP')) {
$lang_viewlog_php['delete_all'] = 'Bütün günlükleri sil';
$lang_viewlog_php['delete_this'] = 'Bu günlüğü sil';
$lang_viewlog_php['view_logs'] = 'Günlükleri göster';
$lang_viewlog_php['no_logs'] = 'Günlük oluşturulmadı.';
$lang_viewlog_php['last_updated'] = 'son güncellenme'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File xp_publish.php
// ------------------------------------------------------------------------- //
if (defined('XP_PUBLISH_PHP')) {
$lang_xp_publish_php['title'] = 'XP Web Publishing Wizard';
$lang_xp_publish_php['client_header'] = 'XP Web Publishing Wizard Client'; // cpg1.5
$lang_xp_publish_php['requirements'] = 'Requirements'; // cpg1.5
$lang_xp_publish_php['windows_xp'] = 'Windows XP / Vista'; // cpg1.5
$lang_xp_publish_php['no_windows_xp'] = 'You appear to be running another, unsupported operating system'; // cpg1.5
$lang_xp_publish_php['no_os_detect'] = 'Could not detect your operating system'; // cpg1.5
$lang_xp_publish_php['requirement_http_upload'] = 'A working installation of Coppermine on which the http upload function works properly'; // cpg1.5
$lang_xp_publish_php['requirement_ie'] = 'Microsoft Internet Explorer'; // cpg1.5
$lang_xp_publish_php['requirement_permissions'] = 'The administrator of the gallery must have granted you permission to upload'; // cpg1.5
$lang_xp_publish_php['requirement_login'] = 'You need to be logged in to upload'; // cpg1.5
$lang_xp_publish_php['no_ie'] = 'You appear to be using another, unsupported browser'; // cpg1.5
$lang_xp_publish_php['no_browser_detect'] = 'Could not detect your browser'; // cpg1.5
$lang_xp_publish_php['no_gallery_name'] = 'You need to specify a gallery name in config'; // cpg1.5
$lang_xp_publish_php['no_gallery_description'] = 'You need to specify a gallery description in config'; // cpg1.5
$lang_xp_publish_php['howto_install'] = 'How to install'; // cpg1.5
$lang_xp_publish_php['install_right_click'] = 'Right click on %sthis link%s and select &quot;save target as...&quot;'; // cpg1.5 // translator note: don't replace the %s - that placeholder token needs to go untranslated
$lang_xp_publish_php['install_save'] = 'Save the file on your client. When saving the file, make sure that the proposed file name is <tt>cpg_###.reg</tt> (the ### represents a numerical timestamp). Change it to that name if necessary (leave the numbers)'; // cpg1.5
$lang_xp_publish_php['install_execute'] = 'After the download has finished, execute the file by double clicking on it in order to register your server with the web publishing wizard'; // cpg1.5
$lang_xp_publish_php['usage'] = 'Usage'; // cpg1.5
$lang_xp_publish_php['select_files'] = 'In Windows Explorer, select the files you want to upload'; // cpg1.5
$lang_xp_publish_php['display_tasks'] = 'Make sure that the folders are not being displayed in left bar of the Explorer'; // cpg1.5
$lang_xp_publish_php['publish_on_the_web'] = 'click on &quot;Publish xxx on the web&quot; in the left pane'; // cpg1.5
$lang_xp_publish_php['confirm_selection'] = 'Confirm your file selection'; // cpg1.5
$lang_xp_publish_php['select_service'] = 'In the list of services that appear, select the one for your photo gallery (it has the name of your gallery)'; // cpg1.5
$lang_xp_publish_php['enter_login'] = 'Enter your login information if required'; // cpg1.5
$lang_xp_publish_php['select_album'] = 'Select the target album for your pictures or create a new one'; // cpg1.5
$lang_xp_publish_php['next'] = 'Click on &quot;next&quot;'; // cpg1.5
$lang_xp_publish_php['upload_starts'] = 'The upload of your pictures should start'; // cpg1.5
$lang_xp_publish_php['upload_completed'] = 'When it is completed, check your gallery to see if pictures have been properly added'; // cpg1.5
$lang_xp_publish_php['welcome'] = 'Welcome <strong>%s</strong>,';
$lang_xp_publish_php['need_login'] = 'You need to login to the gallery using Internet Explorer before you can use this wizard.<p/><p>When you login don\'t forget to select the &quot;remember me&quot; option if it is present.';
$lang_xp_publish_php['no_alb'] = 'Sorry but there is no album where you are allowed to upload pictures with this wizard.';
$lang_xp_publish_php['upload'] = 'Upload your pictures into an existing album';
$lang_xp_publish_php['create_new'] = 'Create a new album for your pictures';
$lang_xp_publish_php['category'] = 'Category';
$lang_xp_publish_php['new_alb_created'] = 'Your new album &quot;<strong>%s</strong>&quot; was created.';
$lang_xp_publish_php['continue'] = 'Press &quot;Next&quot; to start to upload your pictures';
$lang_xp_publish_php['link'] = '';
}

// ------------------------------------------------------------------------- //
// Core plugins
// ------------------------------------------------------------------------- //
if (defined('CORE_PLUGIN')) {
$lang_plugin_php['usergal_alphatabs_config_name'] = 'User Gallery Alphabetic Tabbing'; // cpg1.5
$lang_plugin_php['usergal_alphatabs_config_description'] = 'What it does: displays tabs from A to Z at the top of user galleries that visitors can click on to directly jump to a page that displays all user galleries of the users who\'s username starts with that letter. Plugin only recommended to be used if you have a really large number of user galleries.'; // cpg1.5
$lang_plugin_php['usergal_alphatabs_jump_by_username'] = 'Jump by username'; // cpg1.5
$lang_plugin_php['sample_config_name'] = 'Sample Plugin'; // cpg1.5
$lang_plugin_php['sample_config_description'] = 'This is a sample plugin. It will not do anything particular useful - it is just meant to demonstrate what plugins can do and how to code them. When enabled, it will display some sample text in red.'; // cpg1.5
$lang_plugin_php['sample_plugin_documentation'] = 'Plugin Documentation'; // cpg1.5
$lang_plugin_php['sample_plugin_support'] = 'Plugin Support'; // cpg1.5
$lang_plugin_php['sample_install_explain'] = 'Enter the username (\'foo\') and password (\'bar\') to install'; // cpg1.5
$lang_plugin_php['sample_install_username'] = 'Username'; // cpg1.5
$lang_plugin_php['sample_install_password'] = 'Password'; // cpg1.5
$lang_plugin_php['sample_output'] = 'This is sample data returned from the sample plugin'; // cpg1.5
$lang_plugin_php['opensearch_config_name'] = 'OpenSearch'; // cpg1.5
$lang_plugin_php['opensearch_config_description'] = 'An implementation of <a href="http://www.opensearch.org/" rel="external" class="external">OpenSearch</a> for Coppermine.<br />When enabled, visitors can add your gallery to their browser\'s search bar.'; // cpg1.5
$lang_plugin_php['opensearch_search'] = 'Search %s'; // cpg1.5
$lang_plugin_php['opensearch_extra'] = 'You may want to add some text to your site that explains what this plugin does'; // cpg1.5
$lang_plugin_php['opensearch_failed_to_open_file'] = 'Failed to open file %s - check permissions'; // cpg1.5
$lang_plugin_php['opensearch_failed_to_write_file'] = 'Failed to write to file %s - check permissions'; // cpg1.5
$lang_plugin_php['opensearch_form_header'] = 'Enter the details to be used for the description file'; // cpg1.5
$lang_plugin_php['opensearch_gallery_url'] = 'Gallery URL (must be correct)'; // cpg1.5
$lang_plugin_php['opensearch_display_name'] = 'Name as displayed in browser'; // cpg1.5
$lang_plugin_php['opensearch_description'] = 'Description'; // cpg1.5
$lang_plugin_php['opensearch_character_limit'] = '%s character limit'; // cpg1.5
$lang_plugin_php['onlinestats_description'] = 'Display a block on each gallery page that shows users and guests actually online.';
$lang_plugin_php['onlinestats_name'] = 'Who is online?';
$lang_plugin_php['onlinestats_config_extra'] = 'To enable this plugin (make it actually display the onlinestats block), the string "onlinestats" (separated with a slash) has been added to "the content of the main page" in <a href="admin.php">Coppermine\'s config</a> in the section "Album list view". The setting should now look like "breadcrumb/catlist/alblist/onlinestats" or similar. To change the position of the block, move the string "onlinestats" around inside that config field.';
$lang_plugin_php['onlinestats_config_install'] = 'The plugin runs additional queries on the database each time it is being executed, burning CPU cycles and using resources. If your Coppermine gallery is slow or has got a lot of users, you shouldn\'t use it.';
$lang_plugin_php['onlinestats_we_have_reg_member'] = 'There is %s registered user';
$lang_plugin_php['onlinestats_we_have_reg_members'] = ' There are %s registered users';
$lang_plugin_php['onlinestats_most_recent'] = 'The newest registered user is %s';
$lang_plugin_php['onlinestats_is'] = 'In total there is %s visitor online';
$lang_plugin_php['onlinestats_are'] = 'In total there are %s visitors online';
$lang_plugin_php['onlinestats_and'] = 'and';
$lang_plugin_php['onlinestats_reg_member'] = '%s registered user';
$lang_plugin_php['onlinestats_reg_members'] = '%s registered users';
$lang_plugin_php['onlinestats_guest'] = '%s guest';
$lang_plugin_php['onlinestats_guests'] = '%s guests';
$lang_plugin_php['onlinestats_record'] = 'Most users ever online: %s on %s';
$lang_plugin_php['onlinestats_since'] = 'Registered users who have been online in the past %s minutes: %s';
$lang_plugin_php['onlinestats_config_text'] = 'How long do you want to keep users listed as online for before they are assumed to have gone?';
$lang_plugin_php['onlinestats_minute'] = 'minutes';
$lang_plugin_php['onlinestats_remove'] = 'Remove the table that was used to store online data?';
$lang_plugin_php['link_target_name'] = 'Link target';
$lang_plugin_php['link_target_description'] = 'Changes the way external links are being opened: when this plugin is enabled, all links that contain the attribute rel="external" will open in a new window (instead of the same window).';
$lang_plugin_php['link_target_extra'] = 'This plugin has an impact mostly on the "Powered by Coppermine" link at the bottom of the gallery output.';
$lang_plugin_php['link_target_recommendation'] = 'It is recommended not to use this plugin to avoid bossing your users around: opening links in a new window means bossing around your site visitors.';
}

?>