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
  $HeadURL: https://coppermine.svn.sourceforge.net/svnroot/coppermine/trunk/cpg1.5.x/lang/serbian.php $
  $Revision: 8359 $
**********************************************/

if (!defined('IN_COPPERMINE')) die('Not in Coppermine...');

// info about translators and translated language
$lang_translation_info['lang_name_english'] = 'Serbian';
$lang_translation_info['lang_name_native'] = 'Srpski';
$lang_translation_info['lang_country_code'] = 'rs';
$lang_translation_info['trans_name'] = 'Oliver Mihajlović';
$lang_translation_info['trans_email'] = '';
$lang_translation_info['trans_website'] = 'http://serbiantranslation.info/';
$lang_translation_info['trans_date'] = '2010-04-03';


$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Bytes, Kibibytes, Mebibytes, Gibibytes
$lang_byte_units = array('Bytes', 'KiB', 'MiB', 'GiB');
$lang_decimal_separator = array(',', '.'); //cpg1.5 // symbol used to separate thousands from hundreds and rounded number from decimal place

// Day of weeks and months
$lang_day_of_week = array('Ned', 'Pon', 'Uto', 'Sre', 'Čet', 'Pet', 'Sub');
$lang_month = array('Jan', 'Feb', 'Mar', 'Apr', 'Maj', 'Jun', 'Jul', 'Avg', 'Sep', 'Okt', 'Nov', 'Dec');

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$lang_date['album'] = '%d. %B %Y.';
$lang_date['lastcom'] = '%d/%m/%y u %H:%M';
$lang_date['lastup'] = '%d. %B %Y.';
$lang_date['register'] = '%d. %B %Y.';
$lang_date['lasthit'] = '%d. %B %Y. u %I:%M %p';
$lang_date['comment'] = '%d. %B %Y. u %I:%M %p';
$lang_date['log'] = '%d. %B %Y. u %I:%M %p';
$lang_date['scientific'] = '%Y-%m-%d %H:%M:%S';

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'assrammer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack','penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names['random'] = 'Slučajni fajlovi';
$lang_meta_album_names['lastup'] = 'Poslednje dodato';
$lang_meta_album_names['lastalb'] = 'Dopunjeni albumi';
$lang_meta_album_names['lastcom'] = 'Poslednji komentari';
$lang_meta_album_names['topn'] = 'Najgledanije';
$lang_meta_album_names['toprated'] = 'Najbolje ocenjeno';
$lang_meta_album_names['lasthits'] = 'Poslednje pogledano';
$lang_meta_album_names['search'] = 'Rezultati pretrage slika';
$lang_meta_album_names['album_search'] = 'Rezultati pretrage albuma';
$lang_meta_album_names['category_search'] = 'Rezultati pretrage kategorija';
$lang_meta_album_names['favpics'] = 'Omiljeni fajlovi';
$lang_meta_album_names['datebrowse'] = 'Pregledajte po datumu'; //cpg1.5

$lang_errors['access_denied'] = 'Nemate dozvolu da pristupite ovoj stranici.';
$lang_errors['invalid_form_token'] = 'Ispravan token nije pronađen.'; //cpg1.5
$lang_errors['perm_denied'] = 'Nemate dozvolu da obavite ovu operaciju.';
$lang_errors['param_missing'] = 'Skript je pokrenut bez potrebnog parametra.';
$lang_errors['non_exist_ap'] = 'Izabrani album/fajl ne postoji!';
$lang_errors['quota_exceeded'] = 'Prebačena je dozvoljena kvota na disku.'; //cpg1.5
$lang_errors['quota_exceeded_details'] = 'Imate kvotu od[quota]K, vaši fajlovi trenutno koriste[space]K, dodavanjem ovog fajla premašićete kvotu.'; //cpg1.5
$lang_errors['gd_file_type_err'] = 'Kad koristite GD biblioteku slika, dozvoljeni formati slika su samo JPEG i PNG.';
$lang_errors['invalid_image'] = 'Slika koju ste postavili je neispravna ili se ne može koristiti u GD biblioteci';
$lang_errors['resize_failed'] = 'Nemoguće je napraviti sličicu ili smanjenu sliku.';
$lang_errors['no_img_to_display'] = 'Nema slika za prikaz';
$lang_errors['non_exist_cat'] = 'Izabrana kategorija ne postoji';
$lang_errors['directory_ro'] = 'Nije dozvoljeno menjanje foldera \'%s\' , fajlovi se ne mogu obrisati';
$lang_errors['pic_in_invalid_album'] = 'Fajl je u nepostojećem albumu(%s)!?';
$lang_errors['banned'] = 'Trenutno vam je zabranjeno da koristite ovaj sajt.';
$lang_errors['offline_title'] = 'Nedostupno';
$lang_errors['offline_text'] = 'Galerija je trenutno nedostupna - pokušajte kasnije';
$lang_errors['ecards_empty'] = 'Trenutno nema zapisa o elektronskim dopisnicama.';
$lang_errors['database_query'] = 'Pojavila se greška prilikom zahteva prema bazi podataka';
$lang_errors['non_exist_comment'] = 'Izabrani komentar ne postoji';
$lang_errors['captcha_error'] = 'Šifra za potvrdu nije ispravna'; // cpg1.5
$lang_errors['login_needed'] = 'Morate se %sregistrovati%s/%sprijaviti%s da biste pristupili ovoj stranici'; // cpg1.5
$lang_errors['error'] = 'Greška'; // cpg1.5
$lang_errors['critical_error'] = 'Ozbiljna greška'; // cpg1.5
$lang_errors['access_thumbnail_only'] = 'Dozvoljeno vam je da vidite samo sličice.'; // cpg1.5
$lang_errors['access_intermediate_only'] = 'Nije vam dozvoljeno da vidite slike u punoj veličini.'; // cpg1.5
$lang_errors['access_none'] = 'Nije vam dozvoljeno da vidite slike.'; // cpg1.5
$lang_errors['register_globals_title'] = 'Register Globals je uključeno!';// cpg1.5
$lang_errors['register_globals_warning'] = 'PHP podešavanje register_globals je uključeno na serveru, što nije preporučljivo zbog sigurnosti. Preporučljivo je da ga isključite.'; //cpg1.5

$lang_bbcode_help_title = 'BBCode pomoć';
$lang_bbcode_help = 'Možete u ovo polje dodati linkove na koje može da se klikne i formatiranje teksta uz pomoć BBCode tagova: <li>[b]Bold[/b] =&gt; <strong>Bold</strong></li><li>[i]Italic[/i] =&gt; <i>Italic</i></li><li>[url=http://yoursite.com/]Url Text[/url] =&gt; <a href="http://yoursite.com">Url Text</a></li><li>[email]user@domain.com[/email] =&gt; <a href="mailto:user@domain.com">user@domain.com</a></li><li>[color=red]neki tekst[/color] =&gt; <span style="color:red">neki tekst</span></li><li>[img]http://documentation.coppermine-gallery.net/images/browser.png[/img] =&gt; <img src="docs/images/browser.png" border="0" alt="" /></li>';

$lang_common['yes'] = 'Da'; // cpg1.5
$lang_common['no'] = 'Ne'; // cpg1.5
$lang_common['back'] = 'Nazad'; // cpg1.5
$lang_common['continue'] = 'Nastavak'; // cpg1.5
$lang_common['information'] = 'Informacije'; // cpg1.5
$lang_common['error'] = 'Greška'; // cpg1.5
$lang_common['check_uncheck_all'] = 'uključiti/isključiti sve'; // cpg1.5
$lang_common['confirm'] = 'Potvrda'; // cpg1.5
$lang_common['captcha_help_title'] = 'Vizuelna potvrda(captcha)'; // cpg1.5
$lang_common['captcha_help'] = 'Da bismo izbegli spam, morate da potvrdite da ste osoba, a ne skript ili robot tako što ćete uneti prikazani tekst. <br />Velika slova nisu bitna, možete kucati mala.'; // cpg1.5
$lang_common['title'] = 'Naslov'; // cpg1.5
$lang_common['caption'] = 'Natpis s objašnjenjem'; // cpg1.5
$lang_common['keywords'] = 'Ključne reči'; // cpg1.5
$lang_common['keywords_insert1'] = 'Ključne reči(odvojiti pomoću %s)'; // cpg1.5
$lang_common['keywords_insert2'] = 'Ubaciti sa spiska'; // cpg1.5
$lang_common['keyword_separator'] = 'Ključne reči odvojene pomoću'; //cpg1.5
$lang_common['keyword_separators'] = array(' '=>'razmak', ','=>'zarez', ';'=>'tačka zarez'); // cpg1.5
$lang_common['owner_name'] = 'Ime vlasnika'; // cpg1.5
$lang_common['filename'] = 'Ime fajla'; // cpg1.5
$lang_common['filesize'] = 'Veličina fajla'; // cpg1.5
$lang_common['album'] = 'Album'; // cpg1.5
$lang_common['file'] = 'Fajl'; // cpg1.5
$lang_common['date'] = 'Datum'; // cpg1.5
$lang_common['help'] = 'Pomoć'; // cpg1.5
$lang_common['close'] = 'Zatvoriti'; // cpg1.5
$lang_common['go'] = 'napred'; // cpg1.5
$lang_common['javascript_needed'] = 'Za ovu stranicu je potreban JavaScript. Molimo vas da ga uključite u vašem pregledaču.'; // cpg1.5
$lang_common['move_up'] = 'Ići gore'; // cpg1.5
$lang_common['move_down'] = 'Ići dole'; // cpg1.5
$lang_common['move_top'] = 'Ići na vrh'; // cpg1.5
$lang_common['move_bottom'] = 'Ići na dno'; // cpg1.5
$lang_common['delete'] = 'Brisati'; // cpg1.5
$lang_common['edit'] = 'Menjati'; // cpg1.5
$lang_common['username_if_blank'] = 'Korisničko ime prazno'; // cpg1.5
$lang_common['albums_no_category'] = 'Albumi bez kategorije'; // cpg1.5
$lang_common['personal_albums'] = '* Lični albumi'; // cpg1.5
$lang_common['select_album'] = 'Izaberite album'; // cpg1.5
$lang_common['ok'] = 'U redu'; // cpg1.5
$lang_common['status'] = 'Status'; // cpg1.5
$lang_common['apply_changes'] = 'Potvrdite promene'; // cpg1.5
$lang_common['done'] = 'Gotovo'; // cpg1.5
$lang_common['album_properties'] = 'Osobine albuma'; // cpg1.5
$lang_common['parent_category'] = 'Viša kategorija'; // cpg1.5
$lang_common['edit_files'] = 'Menjati fajlove'; // cpg1.5
$lang_common['thumbnail_view'] = 'Prikaz sličica'; // cpg1.5
$lang_common['album_manager'] = 'Upravljanje albumom'; // cpg1.5
$lang_common['more'] = 'više'; // cpg1.5

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu['home_title'] = 'Ići na početnu stranu';
$lang_main_menu['home_lnk'] = 'Početna';
$lang_main_menu['alb_list_title'] = 'Ići na spisak albuma';
$lang_main_menu['alb_list_lnk'] = 'Spisak albuma';
$lang_main_menu['my_gal_title'] = 'Ići u svoju ličnu galeriju';
$lang_main_menu['my_gal_lnk'] = 'Moja galerija';
$lang_main_menu['my_prof_title'] = 'Ići na svoj profil';
$lang_main_menu['my_prof_lnk'] = 'Moj profil';
$lang_main_menu['adm_mode_title'] = 'Uključiti prikaz administratorskih kontrola'; // cpg1.5
$lang_main_menu['adm_mode_lnk'] = 'Prikazati administratorske kontrole'; // cpg1.5
$lang_main_menu['usr_mode_title'] = 'Isključiti prikaz administratorskih kontrola'; // cpg1.5
$lang_main_menu['usr_mode_lnk'] = 'Sakriti administratorske kontrole'; // cpg1.5
$lang_main_menu['upload_pic_title'] = 'Postaviti fajl u album';
$lang_main_menu['upload_pic_lnk'] = 'Postaviti fajl';
$lang_main_menu['register_title'] = 'Napraviti nalog';
$lang_main_menu['register_lnk'] = 'Registrujte se';
$lang_main_menu['login_title'] = 'Prijavite se';
$lang_main_menu['login_lnk'] = 'Prijava';
$lang_main_menu['logout_title'] = 'Odjavite se';
$lang_main_menu['logout_lnk'] = 'Odjava';
$lang_main_menu['lastup_title'] = 'Prikaz najskorije postavljenih';
$lang_main_menu['lastup_lnk'] = 'Poslednje postavljeno';
$lang_main_menu['lastcom_title'] = 'Prikaz najskorijih komentara';
$lang_main_menu['lastcom_lnk'] = 'Poslednji komentari';
$lang_main_menu['topn_title'] = 'Prikaz najgledanijih fajlova';
$lang_main_menu['topn_lnk'] = 'Najgledanije';
$lang_main_menu['toprated_title'] = 'Prikaz najbolje ocenjenih fajlova';
$lang_main_menu['toprated_lnk'] = 'Najbolje ocenjeno';
$lang_main_menu['search_title'] = 'Pretraga galerije';
$lang_main_menu['search_lnk'] = 'Pretraga';
$lang_main_menu['fav_title'] = 'Ići na omiljene';
$lang_main_menu['fav_lnk'] = 'Moji omiljeni';
$lang_main_menu['memberlist_title'] = 'Prikaz članova';
$lang_main_menu['memberlist_lnk'] = 'Članovi';
$lang_main_menu['browse_by_date_lnk'] = 'Po datumu'; // cpg1.5
$lang_main_menu['browse_by_date_title'] = 'Pregledajte po datumu postavljanja'; // cpg1.5
$lang_main_menu['contact_title'] = 'Stupite u kontakt sa sajtom %s'; // cpg1.5
$lang_main_menu['contact_lnk'] = 'Kontakt'; // cpg1.5
$lang_main_menu['sidebar_title'] = 'Dodati bočnu traku u vaš pregledač'; // cpg1.5
$lang_main_menu['sidebar_lnk'] = 'Bočna traka'; // cpg1.5

$lang_gallery_admin_menu['upl_app_title'] = 'Odobriti novopostavljene';
$lang_gallery_admin_menu['upl_app_lnk'] = 'Dozvoliti postavljanje';
$lang_gallery_admin_menu['admin_title'] = 'Ići u podešavanja';
$lang_gallery_admin_menu['admin_lnk'] = 'Podešavanja';
$lang_gallery_admin_menu['albums_title'] = 'Ići u podešavanja albuma';
$lang_gallery_admin_menu['albums_lnk'] = 'Albumi';
$lang_gallery_admin_menu['categories_title'] = 'Ići u podešavanja kategorija';
$lang_gallery_admin_menu['categories_lnk'] = 'Kategorije';
$lang_gallery_admin_menu['users_title'] = 'Ići u podešavanja korisnika';
$lang_gallery_admin_menu['users_lnk'] = 'Korisnici';
$lang_gallery_admin_menu['groups_title'] = 'Ići u podešavanja grupa';
$lang_gallery_admin_menu['groups_lnk'] = 'Grupe';
$lang_gallery_admin_menu['comments_title'] = 'Pregledati sve komentare';
$lang_gallery_admin_menu['comments_lnk'] = 'Pregledati komentare';
$lang_gallery_admin_menu['searchnew_title'] = 'Ići na proces višestrukog dodavanja';
$lang_gallery_admin_menu['searchnew_lnk'] = 'Dodati više fajlova';
$lang_gallery_admin_menu['util_title'] = 'Ići na poslove administratora';
$lang_gallery_admin_menu['util_lnk'] = 'Poslovi administratora';
$lang_gallery_admin_menu['key_lnk'] = 'Rečnik ključnih reči';
$lang_gallery_admin_menu['ban_title'] = 'Ići na korisnike sa zabranom';
$lang_gallery_admin_menu['ban_lnk'] = 'Zabraniti korišćenje';
$lang_gallery_admin_menu['db_ecard_title'] = 'Pregledati elektronske dopisnice';
$lang_gallery_admin_menu['db_ecard_lnk'] = 'Prikazati elektronske dopisnice';
$lang_gallery_admin_menu['pictures_title'] = 'Poređati svoje slike';
$lang_gallery_admin_menu['pictures_lnk'] = 'Poređati svoje slike';
$lang_gallery_admin_menu['documentation_lnk'] = 'Dokumentacija';
$lang_gallery_admin_menu['documentation_title'] = 'Coppermine priručnik';
$lang_gallery_admin_menu['phpinfo_lnk'] = 'phpinfo'; // cpg1.5
$lang_gallery_admin_menu['phpinfo_title'] = 'Sadrži tehničke informacije o vašem serveru. Ako vam je potrebna podrška, možda će se od vas tražiti da dostavite ove informacije.'; // cpg1.5
$lang_gallery_admin_menu['update_database_lnk'] = 'Ažurirati bazu podataka'; // cpg1.5
$lang_gallery_admin_menu['update_database_title'] = 'Ako ste menjali Coppermine fajlove, dodali modifikaciju ili instalirali novu verziju Coppermine, obavezno jednom ažurirajte bazu podataka. To će napraviti neophodne tabele i/ili podesiti vrednosti u vašoj bazi.'; // cpg1.5
$lang_gallery_admin_menu['view_log_files_lnk'] = 'Pregled fajlova sa zapisima'; // cpg1.5
$lang_gallery_admin_menu['view_log_files_title'] = 'Coppermine može da prati i beleži razne postupke korisnika. Možete da pregledate te zapise, ako ste ih uključili u podešavanju.'; // cpg1.5
$lang_gallery_admin_menu['check_versions_lnk'] = 'Proveriti verziju'; // cpg1.5
$lang_gallery_admin_menu['check_versions_title'] = 'Proverite verzije vaših fajlova kako biste saznali da li ste zamenili sve fajlove tokom instaliranja nove verzije ili da li su svi fajlovi ažurirani tokom ažuriranja Coppermine paketa.'; // cpg1.5
$lang_gallery_admin_menu['bridgemgr_lnk'] = 'Alat za povezivanje aplikacija'; // cpg1.5
$lang_gallery_admin_menu['bridgemgr_title'] = 'Uključiti/isključiti integraciju (povezivanje) Coppermine programa sa drugim aplikacijama (npr. s vašim forumom).'; // cpg1.5
$lang_gallery_admin_menu['pluginmgr_lnk'] = 'Alat za dodatke'; // cpg1.5
$lang_gallery_admin_menu['pluginmgr_title'] = 'Alat za dodatke'; // cpg1.5
$lang_gallery_admin_menu['overall_stats_lnk'] = 'Opšta statistika'; // cpg1.5
$lang_gallery_admin_menu['overall_stats_title'] = 'Pogledati opštu statistiku poseta i operativnih sistema (ako su odgovarajuće mogućnosti uključene u podešavanjima).'; // cpg1.5
$lang_gallery_admin_menu['keywordmgr_lnk'] = 'Alat za ključne reči'; // cpg1.5
$lang_gallery_admin_menu['keywordmgr_title'] = 'Podešavanje ključnih reči (ako su odgovarajuće mogućnosti uključene u podešavanjima).'; // cpg1.5
$lang_gallery_admin_menu['exifmgr_lnk'] = 'EXIF alat'; // cpg1.5
$lang_gallery_admin_menu['exifmgr_title'] = 'Podešavanje EXIF prikaza(ako su odgovarajuće mogućnosti uključene u podešavanjima).'; // cpg1.5
$lang_gallery_admin_menu['shownews_lnk'] = 'Prikazati vesti'; // cpg1.5
$lang_gallery_admin_menu['shownews_title'] = 'Prikazati vesti sa coppermine-gallery.net'; // cpg1.5

$lang_user_admin_menu['albmgr_title'] = 'Napraviti ili zatražiti album';
$lang_user_admin_menu['albmgr_lnk'] = 'Napravite / zatražite albume';
$lang_user_admin_menu['modifyalb_title'] = 'Menjati albume';
$lang_user_admin_menu['modifyalb_lnk'] = 'Menjajte svoje albume';
$lang_user_admin_menu['my_prof_title'] = 'Ići na svoj lični profil';
$lang_user_admin_menu['my_prof_lnk'] = 'Moj profil';

$lang_cat_list['category'] = 'Kategorija';
$lang_cat_list['albums'] = 'Albumi';
$lang_cat_list['pictures'] = 'Fajlovi';

$lang_album_list['album_on_page'] = 'broj albuma - %d broj strana -  %d';

$lang_thumb_view['date'] = 'Datum';
//Sort by filename and title
$lang_thumb_view['name'] = 'Ime fajla';
$lang_thumb_view['sort_da'] = 'Poređati po datumu uzlazno';
$lang_thumb_view['sort_dd'] = 'Poređati po datumu silazno';
$lang_thumb_view['sort_na'] = 'Poređati po imenu uzlazno';
$lang_thumb_view['sort_nd'] = 'Poređati po imenu silazno';
$lang_thumb_view['sort_ta'] = 'Poređati po naslovu uzlazno';
$lang_thumb_view['sort_td'] = 'Poređati po naslovu silazno';
$lang_thumb_view['position'] = 'Položaj';
$lang_thumb_view['sort_pa'] = 'Poređati po položaju uzlazno';
$lang_thumb_view['sort_pd'] = 'Poređati po položaju silazno';
$lang_thumb_view['download_zip'] = 'Snimiti kao zip arhivu';
$lang_thumb_view['pic_on_page'] = 'broj fajlova - %d broj strana - %d';
$lang_thumb_view['user_on_page'] = 'broj korisnika - %d broj strana - %d';
$lang_thumb_view['enter_alb_pass'] = 'Unesite lozinku za album';
$lang_thumb_view['invalid_pass'] = 'Lozinka neispravna';
$lang_thumb_view['pass'] = 'Lozinka';
$lang_thumb_view['submit'] = 'Poslati';
$lang_thumb_view['zipdownload_copyright'] = 'Molimo vas, poštujte autorska prava - koristite fajlove koje snimate samo onako kako je vlasnik galerije odobrio.'; // cpg1.5
$lang_thumb_view['zipdownload_username'] = 'Ova arhiva sadrži spakovane fajlove koji su omiljeni korisniku %s'; // cpg1.5

$lang_img_nav_bar['thumb_title'] = 'Povratak na stranu sa sličicama';
$lang_img_nav_bar['pic_info_title'] = 'Prikazati/sakriti informacije o fajlu';
$lang_img_nav_bar['slideshow_title'] = 'Slajd-šou';
$lang_img_nav_bar['ecard_title'] = 'Pošaljite ovaj fajl kao elektronsku dopisnicu';
$lang_img_nav_bar['ecard_disabled'] = 'Opcija elektronske dopisnice je isključena';
$lang_img_nav_bar['ecard_disabled_msg'] = 'Nemate dozvolu da šaljete elektronske dopisnice'; // js-alert
$lang_img_nav_bar['prev_title'] = 'Pogledajte prethodni fajl';
$lang_img_nav_bar['next_title'] = 'Pogledajte sledeći fajl';
$lang_img_nav_bar['pic_pos'] = 'FAJL %s/%s';
$lang_img_nav_bar['report_title'] = 'Prijavite ovaj fajl administratoru';
$lang_img_nav_bar['go_album_end'] = 'Pređite na kraj';
$lang_img_nav_bar['go_album_start'] = 'Vratite se na početak';

$lang_rate_pic['rate_this_pic'] = 'Ocenite ovaj fajl';
$lang_rate_pic['no_votes'] = '(Još uvek nema glasova)';
$lang_rate_pic['rating'] = '(Trenutna ocena je: %s / %s a broj glasova %s)';
$lang_rate_pic['rubbish'] = 'Loše';
$lang_rate_pic['poor'] = 'Slabo';
$lang_rate_pic['fair'] = 'Prosečno';
$lang_rate_pic['good'] = 'Dobro';
$lang_rate_pic['excellent'] = 'Vrlo dobro';
$lang_rate_pic['great'] = 'Odlično';
$lang_rate_pic['js_warning'] = 'Javascript mora biti uključen da biste glasali.'; // cpg1.5
$lang_rate_pic['already_voted'] = 'Već ste glasali za ovu sliku.'; // cpg1.5
$lang_rate_pic['forbidden'] = 'Ne možete glasati za svoje fajlove.'; // cpg1.5
$lang_rate_pic['rollover_to_rate'] = 'Pređite mišem preko kako biste ocenili sliku'; // cpg1.5

// ------------------------------------------------------------------------- //
// File include/functions.inc.php
// ------------------------------------------------------------------------- //

$lang_cpg_die['file'] = 'Fajl: ';
$lang_cpg_die['line'] = 'Linija: ';

$lang_display_thumbnails['dimensions'] = 'Dimenzije=';
$lang_display_thumbnails['date_added'] = 'Datum postavljanja=';

$lang_get_pic_data['n_comments'] = 'broj komentara - s';
$lang_get_pic_data['n_views'] = 'broj pregleda - %s';
$lang_get_pic_data['n_votes'] = '(broj glasova - %s)';

$lang_cpg_debug_output['debug_info'] = 'Informacije o traženju grešaka';
$lang_cpg_debug_output['debug_output'] = 'Rezultat traženja grešaka'; // cpg1.5
$lang_cpg_debug_output['select_all'] = 'Odabrati sve';
$lang_cpg_debug_output['copy_and_paste_instructions'] = 'Ako tražite pomoć od Coppermine podrške, iskopirajte ovaj rezultat traženja grešaka u vašu poruku kad se to traži zajedno sa porukom o grešci (ako je ima). Šaljite rezultat traženja grešaka samo ako osoba za podršku to traži! Obavezno pre slanja umesto lozinke iz zahteva upišite ***.'; // cpg1.5
$lang_cpg_debug_output['debug_output_explain'] = 'Napomena: Ovo je samo u svrhu informacije i ne znači da postoji greška u galeriji.'; // cpg1.5
$lang_cpg_debug_output['phpinfo'] = 'prikazati phpinfo';
$lang_cpg_debug_output['notices'] = 'Obaveštenja';
$lang_cpg_debug_output['notices_help_admin'] = 'Obaveštenja prikazana na ovoj strani pojavljuju se zato što ste vi(kao administrator galerije) uključili tu opciju u Coppermine podešavanjima. Ona ne znače da nešto nije u redu s galerijom. Ona su zapravo napredna funkcija koju samo stručni programeri koriste da traže greške. Ako vam smetaju i/ili ne znate šta znače, isključite tu funkciju u podešavanjima.'; // cpg1.5
$lang_cpg_debug_output['notices_help_non_admin'] = 'Obaveštenja je administrator namerno uključio. To ne znači da kod vas nešto nije u redu. Slobodno ignorišite obaveštenja koja se ovde prikazuju.'; // cpg1.5
$lang_cpg_debug_output['show_hide'] = 'prikazati / sakriti'; // cpg1.5

$lang_language_selection['reset_language'] = 'Osnovni jezik';
$lang_language_selection['choose_language'] = 'Izaberite svoj jezik';

$lang_theme_selection['reset_theme'] = 'Osnovna tema';
$lang_theme_selection['choose_theme'] = 'Izaberite temu';

$lang_version_alert['version_alert'] = 'Verzija nije podržana!';
$lang_version_alert['no_stable_version'] = 'Koristite Coppermine %s (%s) koji je namenjen samo naprednim korisnicima - ova verzija je bez podrške i garancije. Koristite je na sopstveni rizik ili se vratite na poslednju stabilnu verziju ukoliko vam je potrebna podrška!';
$lang_version_alert['gallery_offline'] = 'Galerija je trenutno nedostupna i biće vidljiva samo vama kao administratoru. Ne zaboravite da je ponovo učinite dostupnom kad završite s održavanjem.';
$lang_version_alert['coppermine_news'] = 'Vesti sa coppermine-gallery.net'; // cpg1.5
$lang_version_alert['no_iframe'] = 'Vaš pregledač ne prikazuje unutrašnje frejmove'; // cpg1.5
$lang_version_alert['hide'] = 'sakriti'; // cpg1.5

$lang_create_tabs['previous'] = 'Prethodno'; // cpg1.5
$lang_create_tabs['next'] = 'Sledeće'; // cpg1.5
$lang_create_tabs['jump_to_page'] = 'Prebaciti se na stranu'; // cpg1.5

$lang_get_remote_file_by_url['no_data_returned'] = 'Podaci nisu prebačeni pomoću %s'; // cpg1.5
$lang_get_remote_file_by_url['curl'] = 'CURL'; // cpg1.5
$lang_get_remote_file_by_url['fsockopen'] = 'Socket veza (FSOCKOPEN)'; // cpg1.5
$lang_get_remote_file_by_url['fopen'] = 'fopen'; // cpg1.5
$lang_get_remote_file_by_url['curl_not_available'] = 'Curl nije dostupan na vašem serveru'; // cpg1.5
$lang_get_remote_file_by_url['error_number'] = 'Greška broj: %s'; // cpg1.5
$lang_get_remote_file_by_url['error_message'] = 'Poruka o grešci: %s'; // cpg1.5

// ------------------------------------------------------------------------- //
// File include/mailer.inc.php
// ------------------------------------------------------------------------- //
$lang_mailer['provide_address'] = 'Morate dati bar jednu';
$lang_mailer['mailer_not_supported'] = 'Adresa nije podržana.';
$lang_mailer['execute'] = 'Nemoguće je izvršiti: ';
$lang_mailer['instantiate'] = 'Nije uspelo pokretanje funkcije pošte.';
$lang_mailer['authenticate'] = 'SMTP Greška: Neuspelo utvrđivanje identiteta.';
$lang_mailer['from_failed'] = 'Sledeća adresa u polju OD nije ispravna: ';
$lang_mailer['recipients_failed'] = 'SMTP Greška: Sledeće';
$lang_mailer['data_not_accepted'] = 'SMTP Greška: Podaci nisu prihvaćeni.';
$lang_mailer['connect_host'] = 'SMTP Greška: Povezivanje na SMTP neuspelo.';
$lang_mailer['file_access'] = 'Pristup fajlu neuspešan: ';
$lang_mailer['file_open'] = 'Greška sa fajlom: Neuspelo otvaranje fajla: ';
$lang_mailer['encoding'] = 'Nepoznat kodni raspored: ';
$lang_mailer['signing'] = 'Greška sa prijavom: ';

// ------------------------------------------------------------------------- //
// File include/plugin_api.inc.php
// ------------------------------------------------------------------------- //
$lang_plugin_api['error_install'] = 'Instaliranje dodatka nije uspelo \'%s\'';
$lang_plugin_api['error_uninstall'] = 'Deinstaliranje dodatka nije uspelo \'%s\'';
$lang_plugin_api['error_sleep'] = 'Isključivanje dodatka nije uspelo \'%s\''; // cpg1.5

// ------------------------------------------------------------------------- //
// File include/smilies.inc.php
// ------------------------------------------------------------------------- //
if (defined('SMILIES_PHP')) {
$lang_smilies_inc_php['Exclamation'] = 'Uzvik';
$lang_smilies_inc_php['Question'] = 'Pitanje';
$lang_smilies_inc_php['Very Happy'] = 'Vrlo srećan';
$lang_smilies_inc_php['Smile'] = 'Osmeh';
$lang_smilies_inc_php['Sad'] = 'Tužan';
$lang_smilies_inc_php['Surprised'] = 'Iznenađen';
$lang_smilies_inc_php['Shocked'] = 'Šokiran';
$lang_smilies_inc_php['Confused'] = 'Zbunjen';
$lang_smilies_inc_php['Cool'] = 'Cool';
$lang_smilies_inc_php['Laughing'] = 'Smeh';
$lang_smilies_inc_php['Mad'] = 'Ljut';
$lang_smilies_inc_php['Razz'] = 'Zadirkivanje';
$lang_smilies_inc_php['Embarrassed'] = 'Posramljen'; // cpg1.5
$lang_smilies_inc_php['Crying or Very sad'] = 'Uplakan ili vrlo tužan';
$lang_smilies_inc_php['Evil or Very Mad'] = 'Zao ili vrlo ljut';
$lang_smilies_inc_php['Twisted Evil'] = 'Pokvareni';
$lang_smilies_inc_php['Rolling Eyes'] = 'Prevrtanje očiju';
$lang_smilies_inc_php['Wink'] = 'Mig';
$lang_smilies_inc_php['Idea'] = 'Ideja';
$lang_smilies_inc_php['Arrow'] = 'Strela';
$lang_smilies_inc_php['Neutral'] = 'Neutralni';
$lang_smilies_inc_php['Mr. Green'] = 'Zelenko';
}

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //
if (defined('ALBMGR_PHP')) {
$lang_albmgr_php['title'] = 'Upravljanje albumom'; // cpg1.5
$lang_albmgr_php['alb_need_name'] = 'Albumi moraju da imaju ime!'; // js-alert
$lang_albmgr_php['confirm_modifs'] = 'Jeste li sigurni da hoćete da napravite te promene?'; // js-alert
$lang_albmgr_php['no_change'] = 'Niste ništa promenili!'; // js-alert
$lang_albmgr_php['new_album'] = 'Novi album';
$lang_albmgr_php['delete_album'] = 'Obrisati album'; // cpg1.5
$lang_albmgr_php['confirm_delete1'] = 'Jeste li sigurni da hoćete da obrišete ovaj album?'; // js-alert
$lang_albmgr_php['confirm_delete2'] = 'Svi fajlovi i komentari u njemu će biti izgubljeni!'; // js-alert
$lang_albmgr_php['select_first'] = 'Prvo izaberite album'; // js-alert
$lang_albmgr_php['my_gallery'] = '* Moja galerija *';
$lang_albmgr_php['no_category'] = '* Bez kategorije *';
$lang_albmgr_php['select_category'] = 'Izaberite kategoriju';
$lang_albmgr_php['category_change'] = 'Ako promenite kategoriju, vaše promene će biti izgubljene!'; // cpg1.5
$lang_albmgr_php['page_change'] = 'Ako idete na taj link, vaše promene će biti izgubljene!'; // cpg1.5
$lang_albmgr_php['cancel'] = 'Otkazati'; // cpg1.5
$lang_albmgr_php['submit_reminder'] = 'Promene ređanja nisu sačuvane dok ne kliknete na &quot;Potvrdite promene&quot;.'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) {
$lang_banning_php['title'] = 'Zabraniti korišćenje';
$lang_banning_php['user_name'] = 'Korisničko ime';
$lang_banning_php['user_account'] = 'Korisnički nalog';
$lang_banning_php['email_address'] = 'Imejl adresa'; // cpg1.5
$lang_banning_php['ip_address'] = 'IP adresa';
$lang_banning_php['expires'] = 'Ističe'; // cpg1.5
$lang_banning_php['expiry_date'] = 'Datum isteka'; // cpg1.5
$lang_banning_php['expired'] = 'Isteklo'; // cpg1.5
$lang_banning_php['edit_ban'] = 'Sačuvati promene';
$lang_banning_php['add_new'] = 'Dodati novu zabranu';
$lang_banning_php['add_ban'] = 'Dodati';
$lang_banning_php['error_user'] = 'Korisnik nije pronađen';
$lang_banning_php['error_specify'] = 'Morate navesti korisničko ime ili IP adresu';
$lang_banning_php['error_ban_id'] = 'Nepravilna identifikacija zabrane!';
$lang_banning_php['error_admin_ban'] = 'Ne možete zabraniti pristup samom sebi!';
$lang_banning_php['error_server_ban'] = 'Hteli ste sopstvenom serveru da zabranite pristup? Neće to moći...';
$lang_banning_php['skipping'] = 'Preskakanje komande.'; // cpg1.5
$lang_banning_php['lookup_ip'] = 'Pretraga IP Adrese';
$lang_banning_php['select_date'] = 'Izabrati datum';
$lang_banning_php['delete_comments'] = 'Izbrisati komentare'; // cpg1.5
$lang_banning_php['current'] = 'trenutno'; // cpg1.5
$lang_banning_php['all'] = 'sve'; // cpg1.5
$lang_banning_php['none'] = 'nijedan'; // cpg1.5
$lang_banning_php['view'] = 'pregled'; // cpg1.5
$lang_banning_php['ban_id'] = 'Identifikacija zabrane'; // cpg1.5
$lang_banning_php['existing_bans'] = 'Postojeće zabrane'; // cpg1.5
$lang_banning_php['no_banning_when_bridged'] = 'Trenutno koristite galeriju kao povezanu s drugom aplikacijom. Koristite sistem zabrane te aplikacije. Coppermine sistem zabrane verovatno ne radi kad je uključeno povezivanje s drugom aplikacijom.'; // cpg1.5
$lang_banning_php['records_on_page'] = 'broj zapisa - %d broj strana - %d'; // cpg1.5
$lang_banning_php['ascending'] = 'uzlazno'; // cpg1.5
$lang_banning_php['descending'] = 'silazno'; // cpg1.5
$lang_banning_php['sort_by'] = 'Poređati po'; // cpg1.5
$lang_banning_php['sorted_by'] = 'poređano po'; // cpg1.5
$lang_banning_php['ban_record_x_updated'] = 'Zapis o zabranama %s je osvežen'; // cpg1.5
$lang_banning_php['ban_record_x_deleted'] = 'Zapis o zabranama %s je izbrisan'; // cpg1.5
$lang_banning_php['new_ban_record_created'] = 'Novi zapis o zabranama je napravljen'; // cpg1.5
$lang_banning_php['ban_record_x_already_exists'] = 'Zapis o zabranama za %s već postoji!'; // cpg1.5
$lang_banning_php['comment_deleted'] = '%s komentar koji je ostavio %s je izbrisan'; // cpg1.5
$lang_banning_php['comments_deleted'] = 'komentari (%s) koje je ostavio %s su izbrisani'; // cpg1.5
$lang_banning_php['email_field_invalid'] = 'Unesite ispravnu imejl adresu'; // cpg1.5
$lang_banning_php['ip_address_field_invalid'] = 'Unesite ispravnu IP adresu (x.x.x.x)'; // cpg1.5
$lang_banning_php['expiry_field_invalid'] = 'Unesite ispravan datum isteka (YYYY-MM-DD)'; // cpg1.5
$lang_banning_php['form_not_submit'] = 'Zahtev nije predat - ima grešaka koje prvo treba ispraviti!'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File bridgemgr.php
// ------------------------------------------------------------------------- //
if (defined('BRIDGEMGR_PHP')) {
$lang_bridgemgr_php['title'] = 'Povezivanje aplikacija';
$lang_bridgemgr_php['back'] = 'nazad';
$lang_bridgemgr_php['next'] = 'dalje';
$lang_bridgemgr_php['start_wizard'] = 'Početi povezivanje aplikacija';
$lang_bridgemgr_php['finish'] = 'Kraj';
$lang_bridgemgr_php['no_action_needed'] = 'Nikakav postupak nije potreban na ovom koraku. Kliknite\'dalje\' da biste nastavili.';
$lang_bridgemgr_php['reset_to_default'] = 'Vratiti na osnovnu vrednost';
$lang_bridgemgr_php['choose_bbs_app'] = 'izabrati aplikaciju s kojom se Coppermine povezuje';
$lang_bridgemgr_php['support_url'] = 'Za podršku za ovu aplikaciju idite ovde';
$lang_bridgemgr_php['settings_path'] = 'putanja koju koristi povezana aplikacija';
$lang_bridgemgr_php['full_forum_url'] = 'URL adresa povezane aplikacije';
$lang_bridgemgr_php['relative_path_of_forum_from_webroot'] = 'Cela putanja povezane aplikacije';
$lang_bridgemgr_php['relative_path_to_config_file'] = 'Cela putanja do fajla s podešavanjima povezane aplikacije';
$lang_bridgemgr_php['cookie_prefix'] = 'Prefiks kolačića';
$lang_bridgemgr_php['special_settings'] = 'posebna podešavanja povezane aplikacije';
$lang_bridgemgr_php['use_post_based_groups'] = 'Koristiti posebne grupe povezane aplikacije?';
$lang_bridgemgr_php['use_post_based_groups_yes'] = 'da';
$lang_bridgemgr_php['use_post_based_groups_no'] = 'ne';
$lang_bridgemgr_php['error_title'] = 'Morate ispraviti ove greške pre nego što nastavite. Idite na prethodno.';
$lang_bridgemgr_php['error_specify_bbs'] = 'Morate da odredite s kojom aplikacijom hoćete da povežete Coppermine.';
$lang_bridgemgr_php['finalize'] = 'uključiti/isključiti povezivanje';
$lang_bridgemgr_php['finalize_explanation'] = 'Podešavanja koja ste do sada odredili su upisana u bazu podataka, ali integracija povezane aplikacije nije uključena. Kasnije možete uključivati i isključivati integraciju kad poželite. Obavezno zapamtite administratorsko korisničko ime i lozinku za sam Coppermine, pošto će vam trebati kasnije ako hoćete nešto da menjate. Ako nešto nije kako treba, idite na %s i isključite povezivanje tu koristeći administratorski nalog nepovezanog Coppermine (obično je to onaj koji ste napravili kad ste ga instalirali).';
$lang_bridgemgr_php['your_bridge_settings'] = 'Podešavanja povezivanja';
$lang_bridgemgr_php['title_enable'] = 'Uključiti integraciju/povezivanje sa %s';
$lang_bridgemgr_php['bridge_enable_yes'] = 'uključiti';
$lang_bridgemgr_php['bridge_enable_no'] = 'isključiti';
$lang_bridgemgr_php['error_must_not_be_empty'] = 'ne sme biti prazno';
$lang_bridgemgr_php['error_either_be'] = 'mora biti ili %s ili %s';
$lang_bridgemgr_php['error_folder_not_exist'] = '%s ne postoji. Ispravite vrednost koju ste uneli za %s';
$lang_bridgemgr_php['error_cookie_not_readible'] = 'Coppermine ne može da učita kolačić %s. Ispravite vrednost koju ste uneli za %s, ili idite u administratorski deo povezane aplikacije i obavezno podesite putanju kolačića tako da Coppermine može da je čita.';
$lang_bridgemgr_php['error_mandatory_field_empty'] = 'Ne možete da ostavite polje %s prazno - upišite odgovarajući podatak.';
$lang_bridgemgr_php['error_no_trailing_slash'] = 'U polju %s se ne sme upisivati kosa crta.';
$lang_bridgemgr_php['error_trailing_slash'] = 'U polju %s se mora upisati kosa crta.';
$lang_bridgemgr_php['error_prefix_and_table'] = '%s i ';
$lang_bridgemgr_php['recovery_title'] = 'Upravljanje povezivanjem: vanredno obnavljanje sistema';
$lang_bridgemgr_php['recovery_explanation'] = 'Ako ste ovde došli da upravljate povezivanjem vaše Coppermine galerije, prvo morate da se prijavite kao administrator. Ako ne možete da se prijavite zato što povezivanje ne radi kako treba, možete da isključite povezivanje ovom stranom. Kad unesete korisničko ime i lozinku, nećete se prijaviti, već ćete samo isključiti povezivanje. Za više detalja konsultujte dokumentaciju.';
$lang_bridgemgr_php['username'] = 'Korisničko ime';
$lang_bridgemgr_php['password'] = 'Lozinka';
$lang_bridgemgr_php['disable_submit'] = 'poslati';
$lang_bridgemgr_php['recovery_success_title'] = 'Prijavljivanje uspelo';
$lang_bridgemgr_php['recovery_success_content'] = 'Uspešno ste isključili povezivanje. Vaš Coppermine sada radi samostalno.';
$lang_bridgemgr_php['recovery_success_advice_login'] = 'Prijavite se kao administrator da promenite podešavanja povezivanja i/ili da ponovo uključite povezivanje.';
$lang_bridgemgr_php['goto_login'] = 'Ići na stranicu za prijavljivanje';
$lang_bridgemgr_php['goto_bridgemgr'] = 'Ići na upravljanje povezivanjem';
$lang_bridgemgr_php['recovery_failure_title'] = 'Prijavljivanje neuspelo';
$lang_bridgemgr_php['recovery_failure_content'] = 'Dostavili ste pogrešne podatke. Moraćete da date podatke administratorskog naloga samostalne verzije Coppermine (obično je to nalog koji ste napravili kad ste ga instalirali).';
$lang_bridgemgr_php['try_again'] = 'pokušajte ponovo';
$lang_bridgemgr_php['recovery_wait_title'] = 'Vreme za čekanje nije isteklo';
$lang_bridgemgr_php['recovery_wait_content'] = 'Zbog sigurnosti, program ne dozvoljava neuspela prijavljivanja u kratkim vremenskim razmacima, pa ćete morati malo da sačekate pre nego što vam bude dozvoljeno da pokušate da se prijavite.';
$lang_bridgemgr_php['wait'] = 'čekajte';
$lang_bridgemgr_php['browse'] = 'pronaći';
}

// ------------------------------------------------------------------------- //
// File calendar.php
// ------------------------------------------------------------------------- //
if (defined('CALENDAR_PHP')) {
$lang_calendar_php['title'] = 'Kalendar';
$lang_calendar_php['clear_date'] = 'obrisati datum';
$lang_calendar_php['files'] = 'fajlovi'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //
if (defined('CATMGR_PHP')) {
$lang_catmgr_php['miss_param'] = 'Neophodni parametri za \'%s\' postupak nisu dostavljeni!';
$lang_catmgr_php['unknown_cat'] = 'Izabrana kategorija ne postoji u bazi';
$lang_catmgr_php['usergal_cat_ro'] = 'Kategorija korisničkih galerija se ne može izbrisati!';
$lang_catmgr_php['manage_cat'] = 'Upravljanje kategorijama';
$lang_catmgr_php['confirm_delete'] = 'Jeste li sigurni da hoćete da OBRIŠETE ovu kategoriju'; // js-alert
$lang_catmgr_php['category'] = 'Kategorije'; // cpg1.5
$lang_catmgr_php['operations'] = 'Radnje';
$lang_catmgr_php['move_into'] = 'Prebaciti u';
$lang_catmgr_php['update_create'] = 'Menjati/Napraviti kategoriju';
$lang_catmgr_php['parent_cat'] = 'Viša (gornja) kategorija';
$lang_catmgr_php['cat_title'] = 'Naslov kategorije';
$lang_catmgr_php['cat_thumb'] = 'Sličica kategorije';
$lang_catmgr_php['cat_desc'] = 'Opis kategorije';
$lang_catmgr_php['categories_alpha_sort'] = 'Poređati kategorije po abecednom redu (umesto izabranog reda)';
$lang_catmgr_php['save_cfg'] = 'Snimiti podešavanje';
$lang_catmgr_php['no_category'] = '* Bez kategorije *'; // cpg1.5
$lang_catmgr_php['group_create_alb'] = 'Grupe kojima je dozvoljeno da prave albume u ovoj kategoriji'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File contact.php
// ------------------------------------------------------------------------- //
if (defined('CONTACT_PHP')) {
$lang_contact_php['title'] = 'Kontakt'; // cpg1.5
$lang_contact_php['your_name'] = 'Ime'; // cpg1.5
$lang_contact_php['your_email'] = 'Imejl adresa'; // cpg1.5
$lang_contact_php['subject'] = 'Predmet poruke'; // cpg1.5
$lang_contact_php['your_message'] = 'Poruka'; // cpg1.5
$lang_contact_php['name_field_mandatory'] = 'Upišite svoje ime'; // cpg1.5 // js-alert
$lang_contact_php['name_field_invalid'] = 'Upišite pravo ime'; // cpg1.5 // js-alert
$lang_contact_php['email_field_mandatory'] = 'Upišite imejl adresu'; // cpg1.5 // js-alert
$lang_contact_php['email_field_invalid'] = 'Upišite ispravnu imejl adresu'; // cpg1.5 // js-alert
$lang_contact_php['subject_field_mandatory'] = 'Upišite smislen predmet poruke'; // cpg1.5 // js-alert
$lang_contact_php['message_field_mandatory'] = 'Upišite poruku'; // cpg1.5 // js-alert
$lang_contact_php['confirmation'] = 'Potvrda'; // cpg1.5
$lang_contact_php['email_headline'] = 'Ovaj imejl je poslat %s pomoću formulara za kontakt na %s sa IP adrese %s'; // cpg1.5
$lang_contact_php['registered_user'] = 'registrovani korisnik'; // cpg1.5
$lang_contact_php['guest'] = 'gost'; // cpg1.5
$lang_contact_php['unknown'] = 'nepoznat'; // cpg1.5
$lang_contact_php['user_info'] = '%s po imenu %s sa imejl adresom %s napisao je:'; // cpg1.5
$lang_contact_php['failed_sending_email'] = 'Slanje neuspelo. Molimo pokušajte kasnije.'; // cpg1.5
$lang_contact_php['email_sent'] = 'Vaš imejl je poslat.'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //
if (defined('ADMIN_PHP')) {
$lang_admin_php['title'] = 'Podešavanje galerije';
$lang_admin_php['general_settings'] = 'Opšta podešavanja'; // cpg1.5
$lang_admin_php['language_charset_settings'] = 'Podešavanja jezika i pisma'; // cpg1.5
$lang_admin_php['themes_settings'] = 'Podešavanja tema'; // cpg1.5
$lang_admin_php['album_list_view'] = 'Prikaz liste albuma'; // cpg1.5
$lang_admin_php['thumbnail_view'] = 'Prikaz sličica'; // cpg1.5
$lang_admin_php['image_view'] = 'Prikaz slika'; // cpg1.5
$lang_admin_php['comment_settings'] = 'Podešavanja komentara'; // cpg1.5
$lang_admin_php['thumbnail_settings'] = 'Podešavanja sličica'; // cpg1.5
$lang_admin_php['file_settings'] = 'Podešavanja fajlova'; // cpg1.5
$lang_admin_php['image_watermarking'] = 'Označavanje vodenim žigom'; // cpg1.5
$lang_admin_php['registration'] = 'Registracija'; // cpg1.5
$lang_admin_php['user_settings'] = 'Podešavanja korisnika'; // cpg1.5
$lang_admin_php['custom_fields_user_profile'] = 'Posebna polja za profil korisnika (ostavite prazno ako se ne koristi). Koristite profil 6 za duga upisivanja kao npr. biografije'; // cpg1.5
$lang_admin_php['custom_fields_image_description'] = 'Posebna polja za opis slika (ostavite prazno ako se ne koristi)'; // cpg1.5
$lang_admin_php['cookie_settings'] = 'Podešavanja kolačića'; // cpg1.5
$lang_admin_php['email_settings'] = 'Podešavanja imejla (ovde obično ništa ne treba da se menja; ako niste sigurni, ostavite sva polja prazna)'; // cpg1.5
$lang_admin_php['logging_stats'] = 'Prijavljivanje i statistika'; // cpg1.5
$lang_admin_php['maintenance_settings'] = 'Podešavanja održavanja'; // cpg1.5
$lang_admin_php['manage_exif'] = 'Upravljanje EXIF prikazom';
$lang_admin_php['manage_plugins'] = 'Upravljanje dodacima';
$lang_admin_php['manage_keyword'] = 'Upravljanje ključnim rečima';
$lang_admin_php['restore_cfg'] = 'Vratiti na fabrička podešavanja';
$lang_admin_php['restore_cfg_confirm'] = 'Da li stvarno hoćete da vratite sva podešavanja na osnovna? Ova radnja je nepovratna!'; // cpg1.5 // js-alert
$lang_admin_php['save_cfg'] = 'Snimiti nova podešavanja';
$lang_admin_php['notes'] = 'Beleške';
$lang_admin_php['info'] = 'Informacije';
$lang_admin_php['upd_success'] = 'Coppermine podešavanja su promenjena';
$lang_admin_php['restore_success'] = 'Coppermine osnovna podešavanja vraćena';
$lang_admin_php['name_a'] = 'Ime uzlazno';
$lang_admin_php['name_d'] = 'Ime silazno';
$lang_admin_php['title_a'] = 'Naslov uzlazno';
$lang_admin_php['title_d'] = 'Naslov silazno';
$lang_admin_php['date_a'] = 'Datum uzlazno';
$lang_admin_php['date_d'] = 'Datum silazno';
$lang_admin_php['pos_a'] = 'Položaj uzlazno';
$lang_admin_php['pos_d'] = 'Položaj silazno';
$lang_admin_php['th_any'] = 'Veća dimenzija';
$lang_admin_php['th_ht'] = 'Visina';
$lang_admin_php['th_wd'] = 'Širina';
$lang_admin_php['th_ex'] = 'Fiksne dimenzije'; // cpg1.5
$lang_admin_php['debug_everyone'] = 'Svako';
$lang_admin_php['debug_admin'] = 'Samo administrator';
$lang_admin_php['no_logs'] = 'Isključeno';
$lang_admin_php['log_normal'] = 'Normalno';
$lang_admin_php['log_all'] = 'Sve';
$lang_admin_php['view_logs'] = 'Pregled zapisa';
$lang_admin_php['click_expand'] = 'kliknite na ime sekcije da bi se pojavila';
$lang_admin_php['click_collapse'] = 'kliknite na ime sekcije da bi nestala'; // cpg1.5
$lang_admin_php['expand_all'] = 'Prikazati sve';
$lang_admin_php['toggle_all'] = 'Sakriti sve'; // cpg1.5
$lang_admin_php['notice1'] = '(*) Ova podešavanja se ne smeju menjati ako već imate fajlove u bazi.';
$lang_admin_php['notice2'] = '(**) Kad menjate ovo podešavanje, ono utiče samo na fajlove koji se postave od tada, pa se savetuje da se podešavanje ne menja ako već ima fajlova u galeriji. Međutim, možete da primenite podešavanje i na postojeće fajlove pomoću opcije &quot;<a href="util.php">poslovi administratora</a> (smanjiti slike)&quot; iz administratorkog menija.';
$lang_admin_php['notice3'] = '(***) Svi fajlovi sa zapisima su pisani na engleskom.';
$lang_admin_php['bbs_disabled'] = 'Funkcija je isključena kad se koristi povezivanje/integracija';
$lang_admin_php['auto_resize_everyone'] = 'Svako';
$lang_admin_php['auto_resize_user'] = 'Samo korisnik';
$lang_admin_php['ascending'] = 'uzlazno';
$lang_admin_php['descending'] = 'silazno';
$lang_admin_php['collapse_all'] = 'Sakriti sve'; // cpg1.5
$lang_admin_php['separate_page'] = 'na posebnoj strani'; // cpg1.5
$lang_admin_php['inline'] = 'u okviru'; // cpg1.5
$lang_admin_php['guests_only'] = 'Samo gosti'; // cpg1.5
$lang_admin_php['wm_bottomright'] = 'Dole desno'; // cpg1.5
$lang_admin_php['wm_bottomleft'] = 'Dole levo'; // cpg1.5
$lang_admin_php['wm_topleft'] = 'Gore levo'; // cpg1.5
$lang_admin_php['wm_topright'] = 'Gore desno'; // cpg1.5
$lang_admin_php['wm_center'] = 'Centar'; // cpg1.5
$lang_admin_php['wm_both'] = 'Sve'; // cpg1.5
$lang_admin_php['wm_original'] = 'Original'; // cpg1.5
$lang_admin_php['wm_resized'] = 'Smanjene'; // cpg1.5
$lang_admin_php['gallery_name'] = 'Ime galerije'; // cpg1.5
$lang_admin_php['gallery_description'] = 'Opis galerije'; // cpg1.5
$lang_admin_php['gallery_admin_email'] = 'Imejl administratora galerije'; // cpg1.5
$lang_admin_php['ecards_more_pic_target'] = 'URL adresa foldera vaše Coppermine galerije'; // cpg1.5
$lang_admin_php['ecards_more_pic_target_detail'] = '(sa kosom crtom, bez \'index.php\' ili sličnog na kraju)'; // cpg1.5
$lang_admin_php['home_target'] = 'URL adresa vaše početne strane'; // cpg1.5
$lang_admin_php['enable_zipdownload'] = 'Dozvoliti snimanje ZIP arhiva omiljenih'; // cpg1.5
$lang_admin_php['enable_zipdownload_no_textfile'] = 'samo omiljene'; // cpg1.5
$lang_admin_php['enable_zipdownload_additional_textfile'] = 'omiljene i readme fajl'; // cpg1.5
$lang_admin_php['time_offset'] = 'Razlika vremenske zone u odnosu na GMT'; // cpg1.5
$lang_admin_php['time_offset_detail'] = '(trenutno vreme: %s)'; // cpg1.5
$lang_admin_php['enable_help'] = 'Uključiti ikonice za pomoć'; // cpg1.5
$lang_admin_php['enable_help_description'] = 'Pomoć je delimično dostupna samo na engleskom'; // cpg1.5
$lang_admin_php['clickable_keyword_search'] = 'U pretrazi uključiti ključne reči na koje se može kliknuti'; // cpg1.5
$lang_admin_php['keyword_separator'] = 'Odvajanje ključnih reči'; // cpg1.5
$lang_admin_php['keyword_convert'] = 'Promeniti odvajanje ključnih reči'; // cpg1.5
$lang_admin_php['enable_plugins'] = 'Uključiti dodatke'; // cpg1.5
$lang_admin_php['purge_expired_bans'] = 'Automatski obrisati istekle zabrane'; // cpg1.5
$lang_admin_php['browse_batch_add'] = 'Prikaz sa pregledom i višestrukim dodavanjem'; // cpg1.5
$lang_admin_php['batch_proc_limit'] = 'Limit istovremenih procesa kod višestrukog dodavanja'; // cpg1.5
$lang_admin_php['display_thumbs_batch_add'] = 'Prikazati sličice kod višestrukog dodavanja'; // cpg1.5
$lang_admin_php['lang'] = 'Osnovni jezik'; // cpg1.5
$lang_admin_php['language_autodetect'] = 'Automatsko podešavanje jezika'; // cpg1.5
$lang_admin_php['charset'] = 'Kodni raspored'; // cpg1.5
// 'previous_next_tab'] = 'Display previous/next on tabbed pages'; // cpg1.5
$lang_admin_php['theme'] = 'Tema'; // cpg1.5
$lang_admin_php['custom_lnk_name'] = 'Ime veze posebnog menija'; // cpg1.5
$lang_admin_php['custom_lnk_url'] = 'URL adresa posebnog menija'; // cpg1.5
$lang_admin_php['enable_menu_icons'] = 'Uključiti ikone menija'; // cpg1.5
$lang_admin_php['show_bbcode_help'] = 'Prikazati pomoć za BBCode'; // cpg1.5
$lang_admin_php['vanity_block'] = 'Prikazati vanity natpis na temema koje podržavaju XHTML i CSS'; // cpg1.5
$lang_admin_php['highlight_multiple'] = 'Da biste obeležili više linija, držite [Ctrl]-dugme pritisnuto'; // cpg1.5
$lang_admin_php['custom_header_path'] = 'Putanja do zasebnog zaglavlja'; // cpg1.5
$lang_admin_php['custom_footer_path'] = 'Putanja do zasebnog podnožja'; // cpg1.5
$lang_admin_php['browse_by_date'] = 'Omogućiti pregled po datumu'; // cpg1.5
$lang_admin_php['display_redirection_page'] = 'Prikazati stranicu sa obaveštenjem o preusmeravanju'; // cpg1.5
$lang_admin_php['display_xp_publish_link'] = 'Promovisati upotrebu XP Publisher programa prikazom odgovarajuće veze na stranici za postavljanje'; // cpg1.5
$lang_admin_php['main_table_width'] = 'Širina glavne tabele'; // cpg1.5
$lang_admin_php['pixels_or_percent'] = 'pikseli ili %'; // cpg1.5
$lang_admin_php['subcat_level'] = 'Prikazan broj nivoa kategorija'; // cpg1.5
$lang_admin_php['albums_per_page'] = 'Prikazan broj albuma'; // cpg1.5
$lang_admin_php['album_list_cols'] = 'Prikazan broj kolona za spisak albuma'; // cpg1.5
$lang_admin_php['alb_list_thumb_size'] = 'Veličina sličica albuma'; // cpg1.5
$lang_admin_php['main_page_layout'] = 'Sadržaj glavne strane'; // cpg1.5
$lang_admin_php['first_level'] = 'Prikazati sličice albuma prvog nivoa u kategorijama'; // cpg1.5
$lang_admin_php['categories_alpha_sort'] = 'Ređati kategorije abecedno'; // cpg1.5
$lang_admin_php['categories_alpha_sort_details'] = '(umesto posebno određenog reda)'; // cpg1.5
$lang_admin_php['link_pic_count'] = 'Prikazan broj povezanih fajlova'; // cpg1.5
$lang_admin_php['thumbcols'] = 'Broj kolona na stranici sa sličicama'; // cpg1.5
$lang_admin_php['thumbrows'] = 'Broj redova na stranici sa sličicama'; // cpg1.5
$lang_admin_php['max_tabs'] = 'Maksimalan prikazan broj kartica'; // cpg1.5
$lang_admin_php['tabs_dropdown'] = 'Prikazati padajući meni sa svim stranama pored kartica'; // cpg1.5
$lang_admin_php['caption_in_thumbview'] = 'Prikazati natpis s obaveštenjem o fajlu (ne samo naslov) ispod sličice  in addition to title)'; // cpg1.5
$lang_admin_php['views_in_thumbview'] = 'Prikazati broj pregleda ispod sličice'; // cpg1.5
$lang_admin_php['display_comment_count'] = 'Prikazati broj komentara ispod sličice'; // cpg1.5
$lang_admin_php['display_uploader'] = 'Prikazati ime postavljača ispod sličice'; // cpg1.5
// 'display_admin_uploader'] = 'Prikazati ime administratora postavljača ispod sličice'; // cpg1.5
$lang_admin_php['display_filename'] = 'Prikazati ime fajla ispod sličice'; // cpg1.5
$lang_admin_php['display_thumbnail_rating'] = 'Prikazati ocenu ispod sličice'; // cpg1.5
$lang_admin_php['alb_desc_thumb'] = 'Prikazati opis albume'; // cpg1.5
$lang_admin_php['thumbnail_to_fullsize'] = 'Ići direktno sa sličice na sliku u punoj veličini'; // cpg1.5
$lang_admin_php['default_sort_order'] = 'Osnovni način ređanja fajlova'; // cpg1.5
$lang_admin_php['min_votes_for_rating'] = 'Minimalni broj potrebnih glasova kako bi se fajl pojavio u spisku \'najbolje ocenjeni\''; // cpg1.5
$lang_admin_php['picture_table_width'] = 'Širina tabele za prikaz fajlova'; // cpg1.5
$lang_admin_php['display_pic_info'] = 'Informacije o fajlu su vidljive'; // cpg1.5
$lang_admin_php['picinfo_movie_download_link'] = 'Prikazati adresu za skidanje filma u polju sa informacijom o fajlu'; // cpg1.5
$lang_admin_php['max_img_desc_length'] = 'Maksimalna dužina za opis slike'; // cpg1.5
$lang_admin_php['max_com_wlength'] = 'Maksimalan broj znakova u reči'; // cpg1.5
$lang_admin_php['display_film_strip'] = 'Prikazati filmsku traku'; // cpg1.5
$lang_admin_php['max_film_strip_items'] = 'Broj predmeta u filmskoj traci'; // cpg1.5
$lang_admin_php['slideshow_interval'] = 'Slajd-šou - trajanje perioda'; // cpg1.5
$lang_admin_php['milliseconds'] = 'milisekunde'; // cpg1.5
$lang_admin_php['slideshow_interval_detail'] = '1 sekunda = 1000 milisekundi'; // cpg1.5
$lang_admin_php['slideshow_hits'] = 'Brojati posete tokom slajd-šoua'; // cpg1.5
$lang_admin_php['ecard_flash'] = 'Dozvoliti flash prikaz u elektronskim dopisnicama'; // cpg1.5
$lang_admin_php['not_recommended'] = 'nije preporučljivo'; // cpg1.5
$lang_admin_php['recommended'] = 'preporučljivo'; // cpg1.5
$lang_admin_php['transparent_overlay'] = 'Ubaciti providni sloj kako bi se suzbila krađa slika'; // cpg1.5
$lang_admin_php['old_style_rating'] = 'Vratiti se na stari sistem ocenjivanja'; // cpg1.5
$lang_admin_php['old_style_rating_extra'] = 'Ovo će isključiti opciju \'Broj zvezdica za ocenjivanje\''; // cpg1.5
$lang_admin_php['rating_stars_amount'] = 'Broj zvezdica za ocenjivanje prilikom glasanja'; // cpg1.5
$lang_admin_php['rate_own_files'] = 'Korisnici mogu da ocenjuju svoje fajlove'; // cpg1.5
$lang_admin_php['filter_bad_words'] = 'Filtrirati ružne reči u komentarima'; // cpg1.5
$lang_admin_php['enable_smilies'] = 'Dozvoliti emotikone u komentarima'; // cpg1.5
$lang_admin_php['disable_comment_flood_protect'] = 'Dozvoliti nekoliko uzastopnih komentara o jednom fajlu od istog korisnika'; // cpg1.5
$lang_admin_php['disable_comment_flood_protect_details'] = '(isključiti zaštitu od pretrpavanja)'; // cpg1.5
$lang_admin_php['max_com_lines'] = 'Maksimalan broj redova u komentaru'; // cpg1.5
$lang_admin_php['max_com_size'] = 'Maksimalna dužina komentara'; // cpg1.5
$lang_admin_php['email_comment_notification'] = 'Obavesti administratora imejlom o komentarima'; // cpg1.5
$lang_admin_php['comments_sort_descending'] = 'Način ređanja komentara'; // cpg1.5
$lang_admin_php['comments_per_page'] = 'Broj komentara po strani'; // cpg1.5
$lang_admin_php['comments_anon_pfx'] = 'Prefiks za autore anonimnih komentara'; // cpg1.5
$lang_admin_php['comment_approval'] = 'Komentari zahtevaju odobrenje'; // cpg1.5
$lang_admin_php['display_comment_approval_only'] = 'Prikazati komentare koji zahtevaju odobrenje samo na strani &quot;Odobravanje komentara&quot;'; // cpg1.5
$lang_admin_php['comment_placeholder'] = 'Prikazati korisnicima tekst sa obaveštenjem o komentarima koji čekaju administratorsko odobrenje'; // cpg1.5
$lang_admin_php['comment_user_edit'] = 'Dozvoliti korisnicima da menjaju svoje komentare'; // cpg1.5
$lang_admin_php['comment_captcha'] = 'Prikazati Captcha (vizuelnu potvrdu) prilikom slanja komentara'; // cpg1.5
$lang_admin_php['comment_akismet_enable'] = 'Akismet opcije'; // cpg1.5
$lang_admin_php['comment_akismet_enable_description'] = 'Šta uraditi ako Akismet odbaci komentar kao nepoželjan?'; // cpg1.5
$lang_admin_php['comment_akismet_applicable_only'] = 'Opcije važe samo ako je Akismet uključen unošenjem odgovarajućeg API ključa'; // cpg1.5
$lang_admin_php['comment_akismet_enable_approval'] = 'Dozvoliti komentare koji ne prođu Akismet, ali ih označiti kao neodobrene'; // cpg1.5
$lang_admin_php['comment_akismet_drop_tell'] = 'Odbaciti komentare koji nisu prošli proveru i obavestiti autora da su odbijeni'; // cpg1.5
$lang_admin_php['comment_akismet_drop_lie'] = 'Odbaciti komentare koji nisu prošli proveru ali obavestiti autora (spamera) da su postavljeni'; // cpg1.5
$lang_admin_php['comment_akismet_api_key'] = 'Akismet API ključ'; // cpg1.5
$lang_admin_php['comment_akismet_api_key_description'] = 'Ostavite prazno ako hoćete da isključite Akismet'; // cpg1.5
$lang_admin_php['comment_akismet_group'] = 'Koristiti Akismet za komentare koje šalje'; // cpg1.5
$lang_admin_php['comment_promote_registration'] = 'Tražiti od gostiju da se prijave da bi slali komentare'; // cpg1.5
$lang_admin_php['thumb_width'] = 'Maksimalna dimenzija sličice (širina ako koristite "fiksne dimenzije" u "Dimenzija slike koja se koristi")'; // cpg1.5
$lang_admin_php['thumb_use'] = 'Dimenzija slike koja se koristi'; // cpg1.5
$lang_admin_php['thumb_use_detail'] = '(širina ili visina ili veća dimenzija za sličicu)'; // cpg1.5
$lang_admin_php['thumb_height'] = 'Visina sličice'; // cpg1.5
$lang_admin_php['thumb_height_detail'] = '(samo ako koristite &quot;fiksne dimenzije&quot; u &quot;Dimenzija slike koja se koristi&quot;)'; // cpg1.5
$lang_admin_php['movie_audio_document'] = 'film, audio, dokument'; // cpg1.5
$lang_admin_php['thumb_pfx'] = 'Prefix za sličice'; // cpg1.5
$lang_admin_php['enable_unsharp'] = 'Izoštravanje sličica: uključiti filter izoštravanja'; // cpg1.5
$lang_admin_php['unsharp_amount'] = 'Izoštravanje sličica količina'; // cpg1.5
$lang_admin_php['unsharp_radius'] = 'Izoštravanje sličica radijus'; // cpg1.5
$lang_admin_php['unsharp_threshold'] = 'Izoštravanje sličica prag osetljivosti'; // cpg1.5
$lang_admin_php['jpeg_qual'] = 'Kvalitet JPEG fajlova'; // cpg1.5
$lang_admin_php['make_intermediate'] = 'Praviti prelazne slike'; // cpg1.5
$lang_admin_php['picture_use'] = 'Dimenzija slike koja se koristi'; // cpg1.5
$lang_admin_php['picture_use_detail'] = '(širina ili visina ili veća dimenzija za prelaznu sliku)'; // cpg1.5
$lang_admin_php['picture_use_thumb'] = 'Kao kod sličice'; // cpg1.5
$lang_admin_php['picture_width'] = 'Maksimalna širina ili visina prelazne slike'; // cpg1.5
$lang_admin_php['max_upl_size'] = 'Maksimalna veličina poslatog fajla'; // cpg1.5
$lang_admin_php['kilobytes'] = 'KB'; // cpg1.5
$lang_admin_php['pixels'] = 'piksela'; // cpg1.5
$lang_admin_php['max_upl_width_height'] = 'Maksimalna širina ili visina za postavljene slike'; // cpg1.5
$lang_admin_php['auto_resize'] = 'Automatski smanjiti slike koje su veće od maksimalne širine ili visine'; // cpg1.5
$lang_admin_php['fullsize_padding_x'] = 'Horizontalni prazan prostor u prozoru sa slikom u punoj veličini'; // cpg1.5
$lang_admin_php['fullsize_padding_y'] = 'Vertikalni prazan prostor u prozoru sa slikom u punoj veličini'; // cpg1.5
$lang_admin_php['allow_private_albums'] = 'Albumi mogu biti privatni'; // cpg1.5
$lang_admin_php['allow_private_albums_note'] = '(Pažnja: ako promenite iz \'da\' u \'ne\' svi trenutno privatni albumi će biti vidljivi)'; // cpg1.5
$lang_admin_php['show_private'] = 'Prikazati ikonu privatnog albuma neprijavljenom korisniku'; // cpg1.5
$lang_admin_php['forbiden_fname_char'] = 'Zabranjeni znakovi u imenu fajla'; // cpg1.5
$lang_admin_php['silly_safe_mode'] = 'Uključiti &quot;silly safe mode&quot;'; // cpg1.5
$lang_admin_php['allowed_img_types'] = 'Dozvoljeni formati slika'; // cpg1.5
$lang_admin_php['allowed_mov_types'] = 'Dozvoljeni formati filma'; // cpg1.5
$lang_admin_php['media_autostart'] = 'Automatsko pokretanje filma'; // cpg1.5
$lang_admin_php['allowed_snd_types'] = 'Dozvoljeni audio formati'; // cpg1.5
$lang_admin_php['allowed_doc_types'] = 'Dozvoljeni formati dokumenata'; // cpg1.5
$lang_admin_php['thumb_method'] = 'Metod za smanjivanje slika'; // cpg1.5
$lang_admin_php['impath'] = 'Putanja do ImageMagick \'convert\' alata'; // cpg1.5
$lang_admin_php['impath_example'] = '(npr. /usr/bin/)'; // cpg1.5
$lang_admin_php['im_options'] = 'Dodatne opcije komandne linije za ImageMagick'; // cpg1.5
$lang_admin_php['read_exif_data'] = 'Čitanje EXIF podataka iz JPEG fajlova'; // cpg1.5
$lang_admin_php['read_iptc_data'] = 'Čitanje IPTC podataka iz JPEG fajlova'; // cpg1.5
$lang_admin_php['fullpath'] = 'Folder s albumima'; // cpg1.5
$lang_admin_php['userpics'] = 'Folder za fajlove korisnika'; // cpg1.5
$lang_admin_php['normal_pfx'] = 'Prefiks za prelazne slike'; // cpg1.5
$lang_admin_php['default_dir_mode'] = 'Podrazumevane dozvole za foldere'; // cpg1.5
$lang_admin_php['default_file_mode'] = 'Podrazumevane dozvole za fajlove'; // cpg1.5
$lang_admin_php['enable_watermark'] = 'Vodeni žig na slikama'; // cpg1.5
$lang_admin_php['enable_thumb_watermark'] = 'Vodeni žig na posebnim sličicama'; // cpg1.5
$lang_admin_php['where_put_watermark'] = 'Gde staviti vodeni žig'; // cpg1.5
$lang_admin_php['which_files_to_watermark'] = 'Na koje fajlove staviti vodeni žig'; // cpg1.5
$lang_admin_php['watermark_file'] = 'Koji fajl koristiti za vodeni žig'; // cpg1.5
$lang_admin_php['watermark_transparency'] = 'Providnost za celu sliku'; // cpg1.5
$lang_admin_php['zero_2_hundred'] = '0-100'; // cpg1.5
$lang_admin_php['reduce_watermark'] = 'Smanjiti vodeni žig ako je širina slike manja od unete vrednosti. 100% je referentna tačka. Smanjivanje je linearno (0 znači isključeno)'; // cpg1.5
$lang_admin_php['watermark_transparency_featherx'] = 'Odrediti providnu boju x'; // cpg1.5
$lang_admin_php['watermark_transparency_feathery'] = 'Odrediti providnu boju y'; // cpg1.5
$lang_admin_php['gd2_only'] = 'samo ako se koristi GD2'; // cpg1.5
$lang_admin_php['allow_user_registration'] = 'Dozvoliti registraciju novih korisnika'; // cpg1.5
$lang_admin_php['global_registration_pw'] = 'Opšta lozinka za registraciju'; // cpg1.5
$lang_admin_php['user_registration_disclaimer'] = 'Prikazati odricanje od odgovornosti prilikom registracije'; // cpg1.5
$lang_admin_php['registration_captcha'] = 'Prikazati Captcha (vizuelna potvrda) na stranici s registracijom'; // cpg1.5
$lang_admin_php['reg_requires_valid_email'] = 'Registracija korisnika zahteva imejl proveru'; // cpg1.5
$lang_admin_php['reg_notify_admin_email'] = 'Obavestiti administratora o registraciji korisnika imejlom'; // cpg1.5
$lang_admin_php['admin_activation'] = 'Administrator aktivira registraciju'; // cpg1.5
$lang_admin_php['personal_album_on_registration'] = 'Napraviti korisnički album u ličnoj galeriji prilikom registracije'; // cpg1.5
$lang_admin_php['allow_unlogged_access'] = 'Dozvoliti pristup bez prijave (gost ili anonimni)'; // cpg1.5
$lang_admin_php['thumbnail_intermediate_full'] = 'sličica, prelazna i slika u punoj veličini'; // cpg1.5
$lang_admin_php['thumbnail_intermediate'] = 'sličica i prelazna'; // cpg1.5
$lang_admin_php['thumbnail_only'] = 'samo sličica'; // cpg1.5
$lang_admin_php['upload_mechanism'] = 'Osnovni metod postavljanja'; // cpg1.5
$lang_admin_php['upload_swf'] = 'napredni - više fajlova, pomoću Flash aplikacije (preporučeno)'; // cpg1.5
$lang_admin_php['upload_single'] = 'jednostavan - jedan po jedan fajl'; // cpg1.5
$lang_admin_php['allow_user_upload_choice'] = 'Dozvoliti korisnicima da biraju metod postavljanja'; // cpg1.5
$lang_admin_php['allow_duplicate_emails_addr'] = 'Dozvoliti da dva korisnika imaju istu imejl adresu'; // cpg1.5
$lang_admin_php['upl_notify_admin_email'] = 'Obavestiti administratora da korisnik čeka odobrenje za poslati fajl'; // cpg1.5
$lang_admin_php['allow_memberlist'] = 'Dozvoliti prijavljenim korisnicima da vide spisak članova'; // cpg1.5
$lang_admin_php['allow_email_change'] = 'Dozvoliti korisnicima da menjaju imejl adresu u svom profilu'; // cpg1.5
$lang_admin_php['allow_user_account_delete'] = 'Dozvoliti korisnicima da izbrišu svoj korisnički nalog'; // cpg1.5
$lang_admin_php['users_can_edit_pics'] = 'Dozvoliti korisnicima da imaju kontrolu nad svojim slikama u javnim galerijama'; // cpg1.5
$lang_admin_php['allow_user_move_album'] = 'Dozvoliti korisnicima da premeštaju svoje albume iz/u dozvoljene kategorije'; // cpg1.5
$lang_admin_php['allow_user_album_keyword'] = 'Dozvoliti korisnicima da dodeljuju ključne reči albumu'; // cpg1.5
$lang_admin_php['allow_user_edit_after_cat_close'] = 'Dozvoliti korisnicima da menjaju svoje albume kad su u zaključanoj kategoriji'; // cpg1.5
$lang_admin_php['login_method_username'] = 'Korisničko ime'; // cpg1.5
$lang_admin_php['login_method_email'] = 'Imejl adresa'; // cpg1.5
$lang_admin_php['login_method_both'] = 'Oboje'; // cpg1.5
$lang_admin_php['login_method'] = 'Kako želite da korisnici mogu da se prijave'; // cpg1.5
$lang_admin_php['login_threshold'] = 'Broj neuspelih pokušaja prijave do privremene zabrane'; // cpg1.5
$lang_admin_php['login_threshold_detail'] = '(da bi se izbegli napadi grubom silom)'; // cpg1.5
$lang_admin_php['login_expiry'] = 'Trajanje privremene zabrane posle neuspele prijave'; // cpg1.5
$lang_admin_php['minutes'] = 'minuta'; // cpg1.5
$lang_admin_php['report_post'] = 'Uključiti izveštavanje administratora'; // cpg1.5
$lang_admin_php['user_profile1_name'] = 'Ime profila 1'; // cpg1.5
$lang_admin_php['user_profile2_name'] = 'Ime profila 2'; // cpg1.5
$lang_admin_php['user_profile3_name'] = 'Ime profila 3'; // cpg1.5
$lang_admin_php['user_profile4_name'] = 'Ime profila 4'; // cpg1.5
$lang_admin_php['user_profile5_name'] = 'Ime profila 5'; // cpg1.5
$lang_admin_php['user_profile6_name'] = 'Ime profila 6'; // cpg1.5
$lang_admin_php['user_field1_name'] = 'Ime polja 1'; // cpg1.5
$lang_admin_php['user_field2_name'] = 'Ime polja 2'; // cpg1.5
$lang_admin_php['user_field3_name'] = 'Ime polja 3'; // cpg1.5
$lang_admin_php['user_field4_name'] = 'Ime polja 4'; // cpg1.5
$lang_admin_php['cookie_name'] = 'Ime kolačića'; // cpg1.5
$lang_admin_php['cookie_path'] = 'Putanja kolačića'; // cpg1.5
$lang_admin_php['smtp_host'] = 'SMTP Host (ako se ostavi prazno, koristiće se sendmail)'; // cpg1.5
$lang_admin_php['smtp_username'] = 'SMTP korisničko ime'; // cpg1.5
$lang_admin_php['smtp_password'] = 'SMTP lozinka'; // cpg1.5
$lang_admin_php['log_mode'] = 'Način upisivanja'; // cpg1.5
$lang_admin_php['log_mode_details'] = 'Svi fajlovi sa zapisima su pisani na engleskom.'; // cpg1.5
$lang_admin_php['log_ecards'] = 'Čuvati elektronske dopisnice'; // cpg1.5
$lang_admin_php['log_ecards_detail'] = 'Pažnja: čuvanje može imati pravne posledice. Korisnik treba da je obavešten prilikom registracije da se dopisnice čuvaju. Preporučuje se da se napravi i posebna strana sa politikom privatnosti.'; // cpg1.5
$lang_admin_php['vote_details'] = 'Čuvati detaljnu statistiku o glasanju'; // cpg1.5
$lang_admin_php['hit_details'] = 'Čuvati detaljnu statistiku o posetama'; // cpg1.5
$lang_admin_php['display_stats_on_index'] = 'Prikazati statistiku na glavnoj strani'; // cpg1.5
$lang_admin_php['count_file_hits'] = 'Brojati preglede fajlova'; // cpg1.5
$lang_admin_php['count_album_hits'] = 'Brojati preglede albuma'; // cpg1.5
$lang_admin_php['count_admin_hits'] = 'Brojati preglede administratora'; // cpg1.5
$lang_admin_php['debug_mode'] = 'Uključiti traženje grešaka'; // cpg1.5
$lang_admin_php['debug_notice'] = 'Prikazati obaveštenja u režimu traženja grešaka'; // cpg1.5
$lang_admin_php['offline'] = 'Galerija nije dostupna'; // cpg1.5
$lang_admin_php['display_coppermine_news'] = 'Prikazati vesti sa coppermine-gallery.net'; // cpg1.5
$lang_admin_php['display_coppermine_detail'] = 'biće prikazane samo administratoru'; // cpg1.5
$lang_admin_php['config_setting_invalid'] = 'Vrednost koju ste uneli za &laquo;%s&raquo; nije ispravna. Molimo ispravite je.'; // cpg1.5
$lang_admin_php['config_setting_ok'] = 'Podešavanje za &laquo;%s&raquo; je sačuvano.'; // cpg1.5
$lang_admin_php['contact_form_settings'] = 'Podešavanja formulara za kontakt'; // cpg1.5
$lang_admin_php['contact_form_guest_enable'] = 'Prikazati formular za kontakt anonimnim posetiocima (gostima)'; // cpg1.5
$lang_admin_php['contact_form_registered_enable'] = 'Prikazati formular za kontakt registrovanim korisnicima'; // cpg1.5
$lang_admin_php['with_captcha'] = 'sa captcha'; // cpg1.5
$lang_admin_php['without_captcha'] = 'bez captcha'; // cpg1.5
$lang_admin_php['optional'] = 'nije obavezno'; // cpg1.5
$lang_admin_php['mandatory'] = 'obavezno'; // cpg1.5
$lang_admin_php['contact_form_guest_name_field'] = 'Prikazati polje sa imenom pošiljaoca za goste'; // cpg1.5
$lang_admin_php['contact_form_guest_email_field'] = 'Prikazati polje sa imejlom za goste'; // cpg1.5
$lang_admin_php['contact_form_subject_field'] = 'Prikazati polje sa predmetom poruke'; // cpg1.5
$lang_admin_php['contact_form_subject_content'] = 'Predmet za imejlove napravljene formularom za kontakt'; // cpg1.5
$lang_admin_php['contact_form_sender_email'] = 'Koristiti imejl adresu pošiljaoca za &quot;od&quot; polje u poruci'; // cpg1.5
$lang_admin_php['allow_no_link'] = 'dozvoliti, ali ne prikazati vezu'; // cpg1.5
$lang_admin_php['allow_show_link'] = 'dozvoliti i promovisati prikazivanjem veze'; // cpg1.5
$lang_admin_php['display_sidebar_user'] = 'Bočna traka za registrovane korisnike'; // cpg1.5
$lang_admin_php['display_sidebar_guest'] = 'Bočna traka za goste'; // cpg1.5
$lang_admin_php['do_not_change'] = 'Ne menjajte ovo osim ako STVARNO znate šta radite!'; // cpg1.5
$lang_admin_php['reset_to_default'] = 'Vratiti na početno'; // cpg1.5
$lang_admin_php['no_change_needed'] = 'Promena nije potrebna, opcija podešavanja je već nameštena na osnovnu vrednost'; // cpg1.5
$lang_admin_php['enabled'] = 'uključeno'; // cpg1.5
$lang_admin_php['disabled'] = 'isključeno'; // cpg1.5
$lang_admin_php['none'] = 'ne postoji'; // cpg1.5
$lang_admin_php['warning_change'] = 'Kad menjate ovo podešavanje, ono utiče samo na fajlove koji se postave od tada, pa se savetuje da se podešavanje ne menja ako već ima fajlova u galeriji. Međutim, možete da primenite podešavanje i na postojeće fajlove pomoću &quot;<a href="util.php">Poslovi administratora</a> (smanjiti slike)&quot; iz administratorkog menija.'; // cpg1.5
$lang_admin_php['warning_exist'] = 'Ova podešavanja se ne smeju menjati ako već imate fajlove u bazi podataka.'; // cpg1.5
$lang_admin_php['warning_dont_submit'] = 'Ako niste sigurni šta će se desiti ako promenite podešavanje, ne idite do kraja postupka i prvo konsultujte dokumentaciju.'; // cpg1.5 // js-alert
$lang_admin_php['menu_only'] = 'samo meni'; // cpg1.5
$lang_admin_php['everywhere'] = 'svuda'; // cpg1.5
$lang_admin_php['manage_languages'] = 'Upravljanje jezicima'; // cpg1.5
$lang_admin_php['form_token_lifetime'] = 'Trajanje tokena formulara'; // cpg1.5
$lang_admin_php['seconds'] = 'Sekunde'; // cpg1.5
$lang_admin_php['display_reset_boxes_in_config'] = 'Prikazati komande za vraćanje u početno stanje u podešavanjima'; // cpg1.5
$lang_admin_php['upd_not_needed'] = 'Osvežavanje nije potrebno.'; // cpg 1.5
}


// ------------------------------------------------------------------------- //
// File db_ecard.php
// ------------------------------------------------------------------------- //
if (defined('DB_ECARD_PHP')) {
$lang_db_ecard_php['title'] = 'Poslate elektronske dopisnice';
$lang_db_ecard_php['ecard_sender'] = 'Pošiljalac';
$lang_db_ecard_php['ecard_recipient'] = 'Primalac';
$lang_db_ecard_php['ecard_date'] = 'Datum';
$lang_db_ecard_php['ecard_display'] = 'Prikazati elektronsku dopisnicu';
$lang_db_ecard_php['ecard_name'] = 'Ime';
$lang_db_ecard_php['ecard_email'] = 'Imejl';
$lang_db_ecard_php['ecard_ip'] = 'IP adresa';
$lang_db_ecard_php['ecard_ascending'] = 'uzlazno';
$lang_db_ecard_php['ecard_descending'] = 'silazno';
$lang_db_ecard_php['ecard_sorted'] = 'Poređano';
$lang_db_ecard_php['ecard_by_date'] = 'po datumu';
$lang_db_ecard_php['ecard_by_sender_name'] = 'po imenu pošiljaoca';
$lang_db_ecard_php['ecard_by_sender_email'] = 'po imejlu pošiljaoca';
$lang_db_ecard_php['ecard_by_sender_ip'] = 'po IP adresi pošiljaoca';
$lang_db_ecard_php['ecard_by_recipient_name'] = 'po imenu primaoca';
$lang_db_ecard_php['ecard_by_recipient_email'] = 'po imejlu primaoca';
$lang_db_ecard_php['ecard_number'] = 'Prikazano od %s do %s od ukupno %s';
$lang_db_ecard_php['ecard_goto_page'] = 'ići na stranu';
$lang_db_ecard_php['ecard_records_per_page'] = 'Prikazanih po strani';
$lang_db_ecard_php['check_all'] = 'Izabrati sve';
$lang_db_ecard_php['uncheck_all'] = 'Isključiti sve';
$lang_db_ecard_php['ecards_delete_selected'] = 'Izbrisati izabrane dopisnice';
$lang_db_ecard_php['ecards_delete_confirm'] = 'Jeste li sigurni da hoćete da izbrišete dopisnice? Kliknite na polje za potvrdu!';
$lang_db_ecard_php['ecards_delete_sure'] = 'Siguran sam';
$lang_db_ecard_php['invalid_data'] = 'Podaci o dopisnici kojima pokušavate da pristupite su neispravni zbog vašeg programa za poštu. Proverite da li je adresa cela.';
}

// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //
if (defined('DB_INPUT_PHP')) {
$lang_db_input_php['empty_name_or_com'] = 'Potrebno je upisati ime i komentar';
$lang_db_input_php['com_added'] = 'Vaš komentar je postavljen'; // cpg1.5
$lang_db_input_php['alb_need_title'] = 'Morate da unesete naslov za album!';
$lang_db_input_php['no_udp_needed'] = 'Osvežavanje nije potrebno.';
$lang_db_input_php['alb_updated'] = 'Album je osvežen';
$lang_db_input_php['unknown_album'] = 'Izabrani album ne postoji ili nemate ovlašćenje da postavljate u ovom albumu';
$lang_db_input_php['no_pic_uploaded'] = 'Nijedan fajl nije poslat!<br />Ako ste izabrali fajl za slanje, proverite da li server dozvoljava postavljanje fajlova...';
$lang_db_input_php['err_mkdir'] = 'Neuspelo pravljenje foldera %s!';
$lang_db_input_php['dest_dir_ro'] = 'Program ne može da upisuje u folder %s!';
$lang_db_input_php['err_move'] = 'Premeštanje %s u %s nije moguće!';
$lang_db_input_php['err_fsize_too_large'] = 'Fajl koji ste poslali je prevelik (maksimalno dozvoljeno je %s x %s)!';
$lang_db_input_php['err_imgsize_too_large'] = 'Fajl koji ste poslali je prevelik (maksimalno dozvoljeno je %s KB)!';
$lang_db_input_php['err_invalid_img'] = 'Fajl koji ste poslali nije ispravna slika!';
$lang_db_input_php['allowed_img_types'] = 'Ne možete poslati više od %s slika.';
$lang_db_input_php['err_insert_pic'] = 'Fajl \'%s\' se ne može ubaciti u album';
$lang_db_input_php['upload_success'] = 'Vaš fajl je uspešno poslat.<br />Biće vidljiv kad administrator odobri.';
$lang_db_input_php['notify_admin_email_subject'] = '%s - Obaveštenje o postavljanju';
$lang_db_input_php['notify_admin_email_body'] = '%s je poslao/la sliku koja zahteva vaše odobrenje. Posetite %s';
$lang_db_input_php['info'] = 'Informacije';
$lang_db_input_php['com_updated'] = 'Komentar promenjen'; // cpg1.5
$lang_db_input_php['alb_updated'] = 'Album promenjen';
$lang_db_input_php['err_comment_empty'] = 'Vaš komentar je prazan!';
$lang_db_input_php['err_invalid_fext'] = 'Prihvataju se samo fajlovi sa sledećim ekstenzijama:'; // js-alert
$lang_db_input_php['no_flood'] = 'Žao nam je, ali vi ste već autor poslednjeg komentara koji je poslat za ovaj fajl<br />Promenite komentar koji ste poslali ako želite';
$lang_db_input_php['redirect_msg'] = 'Bićete preusmereni.<br /><br />Kliknite \'NASTAVAK\' ako se stranica automatski ne promeni';
$lang_db_input_php['upl_success'] = 'Vaš fajl je uspešno postavljen';
$lang_db_input_php['email_comment_subject'] = 'Komentar postavljen na Coppermine foto galeriju';
$lang_db_input_php['email_comment_body'] = 'Neko je poslao komentar na vašu galeriju. Pogledajte ga na';
$lang_db_input_php['album_not_selected'] = 'Album nije izabran';
$lang_db_input_php['com_author_error'] = 'Jedan registrovan korisnik već koristi taj nadimak. Prijavite se ili koristite drugi';
}

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //
if (defined('DELETE_PHP')) {
$lang_delete_php['orig_pic'] = 'originalna slika'; // cpg1.5
$lang_delete_php['fs_pic'] = 'slika u punoj veličini';
$lang_delete_php['del_success'] = 'uspešno izbrisano';
$lang_delete_php['ns_pic'] = 'slika u normalnoj veličini';
$lang_delete_php['err_del'] = 'ne može se izbrisati';
$lang_delete_php['thumb_pic'] = 'sličica';
$lang_delete_php['comment'] = 'komentar';
$lang_delete_php['im_in_alb'] = 'slika u albumu';
$lang_delete_php['alb_del_success'] = 'Album &laquo;%s&raquo; izbrisan';
$lang_delete_php['alb_mgr'] = 'Upravljanje albumom';
$lang_delete_php['err_invalid_data'] = 'Primljeni neispravni podaci u \'%s\'';
$lang_delete_php['create_alb'] = 'Pravljenje albuma \'%s\'';
$lang_delete_php['update_alb'] = 'Menjanje albuma \'%s\' u naslovu \'%s\' i sadržaju \'%s\'';
$lang_delete_php['del_pic'] = 'Izbrisati fajl';
$lang_delete_php['del_alb'] = 'Izbrisati album';
$lang_delete_php['del_user'] = 'Izbrisati korisnika';
$lang_delete_php['err_unknown_user'] = 'Izabrani korisnik ne postoji!';
$lang_delete_php['err_empty_groups'] = 'Ne postoji tabela grupe ili je tabela prazna!';
$lang_delete_php['comment_deleted'] = 'Komentar uspešno izbrisan';
$lang_delete_php['npic'] = 'Slika';
$lang_delete_php['pic_mgr'] = 'Upravljanje slikama';
$lang_delete_php['update_pic'] = 'Menjanje slike \'%s\' u naslovu \'%s\' i sadržaju \'%s\'';
$lang_delete_php['username'] = 'Korisničko ime';
$lang_delete_php['anonymized_comments'] = 'broj komentara sa skrivenim autorom - %s';
$lang_delete_php['anonymized_uploads'] = 'broj javnih postavljanja sa skrivenim autorom -  %s';
$lang_delete_php['deleted_comments'] = 'broj izbrisanih komentara - %s';
$lang_delete_php['deleted_uploads'] = 'broj izbrisanih javnih postavljanja - %s';
$lang_delete_php['user_deleted'] = 'korisnik %s izbrisan';
$lang_delete_php['activate_user'] = 'Aktivirati korisnika';
$lang_delete_php['user_already_active'] = 'Nalog je već aktivan';
$lang_delete_php['activated'] = 'Aktiviran';
$lang_delete_php['deactivate_user'] = 'Deaktivirati korisnika';
$lang_delete_php['user_already_inactive'] = 'Nalog je već neaktivan';
$lang_delete_php['deactivated'] = 'Deaktiviran';
$lang_delete_php['reset_password'] = 'Promeniti lozinku';
$lang_delete_php['password_reset'] = 'Lozinka promenjena na %s';
$lang_delete_php['change_group'] = 'Promeniti glavnu grupu';
$lang_delete_php['change_group_to_group'] = 'Menjanje iz %s u %s';
$lang_delete_php['add_group'] = 'Dodati drugu grupu';
$lang_delete_php['add_group_to_group'] = 'Dodavanje korisnika %s grupi %s. On je sad član %s kao glavne grupe i član %s kao druge grupe članova.';
$lang_delete_php['status'] = 'Status';
$lang_delete_php['updating_album'] = 'Menjanje albuma'; // cpg1.5
$lang_delete_php['moved_picture_to_position'] = 'Slika %s premeštena na položaj %s'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //
if (defined('DISPLAYIMAGE_PHP')){
$lang_display_image_php['confirm_del'] = 'Jeste li sigurni da hoćete da IZBRIŠETE ovaj fajl?\\nKomentari će takođe biti izbrisani.'; // js-alert
$lang_display_image_php['del_pic'] = 'Izbrisati ovaj fajl';
$lang_display_image_php['size'] = '%s x %s piksela';
$lang_display_image_php['views'] = 'broj pregleda - %s';
$lang_display_image_php['slideshow'] = 'Slajd-šou';
$lang_display_image_php['stop_slideshow'] = 'Zaustaviti slajd-šou';
$lang_display_image_php['view_fs'] = 'Kliknite da vidite sliku u punoj veličini';
$lang_display_image_php['edit_pic'] = 'Menjati informacije o fajlu';
$lang_display_image_php['crop_pic'] = 'Sečenje i okretanje';
$lang_display_image_php['set_player'] = 'Promeniti plejer';

$lang_picinfo['title'] = 'Informacije o fajlu';
$lang_picinfo['Album name'] = 'Ime albuma';
$lang_picinfo['Rating'] = 'Ocena (broj glasova - %s)';
$lang_picinfo['Date Added'] = 'Datum postavljanja';
$lang_picinfo['Dimensions'] = 'Dimenzije';
$lang_picinfo['Displayed'] = 'Prikazano';
$lang_picinfo['URL'] = 'URL adresa';
$lang_picinfo['Make'] = 'Marka';
$lang_picinfo['Model'] = 'Model';
$lang_picinfo['DateTime'] = 'Datum, vreme';
$lang_picinfo['ISOSpeedRatings'] = 'ISO';
$lang_picinfo['MaxApertureValue'] = 'Maksimalan otvor blende';
$lang_picinfo['FocalLength'] = 'Fokalna dužina';
$lang_picinfo['Comment'] = 'Komentar';
$lang_picinfo['addFav'] = 'Dodati u omiljene';
$lang_picinfo['addFavPhrase'] = 'Omiljeni';
$lang_picinfo['remFav'] = 'Izbrisati iz omiljenih';
$lang_picinfo['iptcTitle'] = 'IPTC naslov';
$lang_picinfo['iptcCopyright'] = 'IPTC autorsko pravo';
$lang_picinfo['iptcKeywords'] = 'IPTC ključne reči';
$lang_picinfo['iptcCategory'] = 'IPTC kategorija';
$lang_picinfo['iptcSubCategories'] = 'IPTC potkategorije';
$lang_picinfo['ColorSpace'] = 'Opseg boja';
$lang_picinfo['ExposureProgram'] = 'Program ekspozicije';
$lang_picinfo['Flash'] = 'Blic';
$lang_picinfo['MeteringMode'] = 'Režim merenja ekspozicije';
$lang_picinfo['ExposureTime'] = 'Vreme ekspozicije';
$lang_picinfo['ExposureBiasValue'] = 'Korekcija ekspozicije';
$lang_picinfo['ImageDescription'] = 'Opis slike';
$lang_picinfo['Orientation'] = 'Orijentacija';
$lang_picinfo['xResolution'] = 'X Rezolucija';
$lang_picinfo['yResolution'] = 'Y Rezolucija';
$lang_picinfo['ResolutionUnit'] = 'Jedinica mere rezolucije';
$lang_picinfo['Software'] = 'Softver';
$lang_picinfo['YCbCrPositioning'] = 'YCbCr Pozicioniranje';
$lang_picinfo['ExifOffset'] = 'EXIF Offset';
$lang_picinfo['IFD1Offset'] = 'IFD1 Offset';
$lang_picinfo['FNumber'] = 'F broj';
$lang_picinfo['ExifVersion'] = 'EXIF Verzija';
$lang_picinfo['DateTimeOriginal'] = 'Datum vreme originalno';
$lang_picinfo['DateTimedigitized'] = 'Datum vreme digitalzovano';
$lang_picinfo['ComponentsConfiguration'] = 'Režim komponenti';
$lang_picinfo['CompressedBitsPerPixel'] = 'Kompresovano bita po pikselu';
$lang_picinfo['LightSource'] = 'Izvor svetlosti';
$lang_picinfo['ISOSetting'] = 'ISO režim';
$lang_picinfo['ColorMode'] = 'Režim boja';
$lang_picinfo['Quality'] = 'Kvalitet';
$lang_picinfo['ImageSharpening'] = 'Izoštravanje slike';
$lang_picinfo['FocusMode'] = 'Režim fokusa';
$lang_picinfo['FlashSetting'] = 'Režim blica';
$lang_picinfo['ISOSelection'] = 'Izabran ISO';
$lang_picinfo['ImageAdjustment'] = 'Podešavanje slike';
$lang_picinfo['Adapter'] = 'Adapter';
$lang_picinfo['ManualFocusDistance'] = 'Rastojanje kod ručnog fokusa';
$lang_picinfo['DigitalZoom'] = 'Digitalni zum';
$lang_picinfo['AFFocusPosition'] = 'Pozicija AF fokusa';
$lang_picinfo['Saturation'] = 'Jačina boja';
$lang_picinfo['NoiseReduction'] = 'Smanjenje šuma';
$lang_picinfo['FlashPixVersion'] = 'FlashPix verzija';
$lang_picinfo['ExifImageWidth'] = 'EXIF širina slike';
$lang_picinfo['ExifImageHeight'] = 'EXIF visina slike';
$lang_picinfo['ExifInteroperabilityOffset'] = 'EXIF ofset interoperabilnosti';
$lang_picinfo['FileSource'] = 'Poreklo fajla';
$lang_picinfo['SceneType'] = 'Vrsta scene';
$lang_picinfo['CustomerRender'] = 'Customer Render';
$lang_picinfo['ExposureMode'] = 'Režim ekspozicije';
$lang_picinfo['WhiteBalance'] = 'Balans bele boje';
$lang_picinfo['DigitalZoomRatio'] = 'Odnos digitalnog zuma';
$lang_picinfo['SceneCaptureMode'] = 'Režim snimanja scene';
$lang_picinfo['GainControl'] = 'Izjednačavanje';
$lang_picinfo['Contrast'] = 'Kontrast';
$lang_picinfo['Sharpness'] = 'Oštrina';
$lang_picinfo['ManageExifDisplay'] = 'Upravljanje EXIF prikazom';
$lang_picinfo['success'] = 'Informacije su uspešno promenjene.';
$lang_picinfo['show_details'] = 'Prikazati detalje'; // cpg1.5
$lang_picinfo['hide_details'] = 'Sakriti detalje'; // cpg1.5
$lang_picinfo['download_URL'] = 'Direktna veza';
$lang_picinfo['movie_player'] = 'Prikazati fajl u vašem standardnom programu';

$lang_display_comments['comment_x_to_y_of_z'] = 'od %d do %d od ukupno %d'; // cpg1.5
$lang_display_comments['page'] = 'Strana'; // cpg1.5
$lang_display_comments['edit_title'] = 'Menjati ovaj komentar';
$lang_display_comments['delete_title'] = 'Izbrisati ovaj komentar'; // cpg1.5
$lang_display_comments['confirm_delete'] = 'Jeste li sigurni da hoćete da obrišete ovaj komentar?'; // js-alert
$lang_display_comments['add_your_comment'] = 'Dodati komentar';
$lang_display_comments['name'] = 'Ime';
$lang_display_comments['comment'] = 'Komentar';
$lang_display_comments['your_name'] = 'Vaše ime';
$lang_display_comments['report_comment_title'] = 'Prijaviti ovaj komentar administratoru';
$lang_display_comments['pending_approval'] = 'Komentar će biti vidljiv kad ga administrator odobri'; // cpg1.5
$lang_display_comments['unapproved_comment'] = 'Neodobren komentar'; // cpg1.5
$lang_display_comments['pending_approval_message'] = 'Neko je poslao komentar ovde. Biće vidljiv kad ga administrator odobri.'; // cpg1.5
$lang_display_comments['approve'] = 'Odobriti komentar'; // cpg1.5
$lang_display_comments['disapprove'] = 'Obeleži komentar kao neodobren'; // cpg1.5
$lang_display_comments['log_in_to_comment'] = 'Anonimni komentari nisu dozvoljeni ovde. %sPrijavite se%s kako biste poslali komentar'; // cpg1.5 // do not translate the %s placeholders - they will be used as wrappers for the link (<a>)
$lang_display_comments['default_username_message'] = 'Upišite svoje ime za komentar'; // cpg1.5
$lang_display_comments['comment_rejected'] = 'Vaš komentar je odbijen'; // cpg1.5

$lang_fullsize_popup['click_to_close'] = 'Kliknite na sliku da biste zatvorili prozor';
$lang_fullsize_popup['close_window'] = 'Zatvoriti prozor'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP')) {
$lang_ecard_php['title'] = 'Poslati elektronsku dopisnicu';
$lang_ecard_php['invalid_email'] = 'Upozorenje: neispravna imejl adresa:'; // cpg1.5
$lang_ecard_php['ecard_title'] = 'Elektronska dopisnica za vas od %s';
$lang_ecard_php['error_not_image'] = 'Samo slike mogu da se šalju kao elektronska dopisnica.'; // cpg1.5
$lang_ecard_php['error_not_image_flash'] = 'Samo slike i flash fajlovi mogu da se šalju kao elektronska dopisnica.'; // cpg1.5
$lang_ecard_php['view_ecard'] = 'Alternativna veza za slučaj da se dopisnica ne prikaže pravilno';
$lang_ecard_php['view_ecard_plaintext'] = 'Da biste videli elektronsku dopisnicu, iskopirajte ovu url adresu u vaš pregledač:';
$lang_ecard_php['view_more_pics'] = 'Pogledati još slika!';
$lang_ecard_php['send_success'] = 'Vaša dopisnica je poslata';
$lang_ecard_php['send_failed'] = 'Nažalost server ne može da pošalje vašu dopisnicu...';
$lang_ecard_php['from'] = 'Od';
$lang_ecard_php['your_name'] = 'Vaše ime';
$lang_ecard_php['your_email'] = 'Vaša imejl adresa';
$lang_ecard_php['to'] = 'Kome';
$lang_ecard_php['rcpt_name'] = 'Ime primaoca';
$lang_ecard_php['rcpt_email'] = 'Imejl adresa primaoca';
$lang_ecard_php['greetings'] = 'Zaglavlje';
$lang_ecard_php['message'] = 'Poruka';
$lang_ecard_php['ecards_footer'] = 'Poslao %s sa IP adrese %s, %s (vreme galerije)';
$lang_ecard_php['preview'] = 'Pregled dopisnice';
$lang_ecard_php['preview_button'] = 'Pregled';
$lang_ecard_php['submit_button'] = 'Poslati dopisnicu';
$lang_ecard_php['preview_view_ecard'] = 'Ovo će biti alternativna veza za elektronsku dopisnicu kad bude napravljena. Ne može se koristiti za pregled.';
}

// ------------------------------------------------------------------------- //
// File report_file.php
// ------------------------------------------------------------------------- //

if (defined('REPORT_FILE_PHP')) {
$lang_report_php['title'] = 'Prijaviti administratoru';
$lang_report_php['invalid_email'] = '<strong>Upozorenje</strong>: neispravna imejl adresa!';
$lang_report_php['report_subject'] = 'Prijava od %s u galeriji %s';
$lang_report_php['view_report'] = 'Alternativna veza za slučaj da se prijava ne prikaže pravilno';
$lang_report_php['view_report_plaintext'] = 'Da biste videli prijavu, iskopirajte ovu url adresu u vaš pregledač:';
$lang_report_php['view_more_pics'] = 'Galerija';
$lang_report_php['send_success'] = 'Vaša prijava je poslata';
$lang_report_php['send_failed'] = 'Nažalost server ne može da pošalje vašu prijavu...';
$lang_report_php['from'] = 'Od';
$lang_report_php['your_name'] = 'Vaše ime';
$lang_report_php['your_email'] = 'Vaša imejl adresa';
$lang_report_php['to'] = 'Kome';
$lang_report_php['administrator'] = 'Administrator/Moderator';
$lang_report_php['subject'] = 'Predmet';
$lang_report_php['comment_field_name'] = 'Prijava komentara od "%s"';
$lang_report_php['reason'] = 'Razlog';
$lang_report_php['message'] = 'Poruka';
$lang_report_php['report_footer'] = 'Poslao %s sa IP adrese %s, %s (vreme galerije)';
$lang_report_php['obscene'] = 'vulgarno';
$lang_report_php['offensive'] = 'uvredljivo';
$lang_report_php['misplaced'] = 'van teme, na pogrešnom mestu';
$lang_report_php['missing'] = 'nedostaje';
$lang_report_php['issue'] = 'greška, ne prikazuje se';
$lang_report_php['other'] = 'drugo';
$lang_report_php['refers_to'] = 'Prijavljivanje fajla odnosi se na';
$lang_report_php['reasons_list_heading'] = 'razlog prijave:';
$lang_report_php['no_reason_given'] = 'nije dat nikakav razlog';
$lang_report_php['go_comment'] = 'Ići na komentar';
$lang_report_php['view_comment'] = 'Videti celu prijavu s komentarom';
$lang_report_php['type_file'] = 'fajl';
$lang_report_php['type_comment'] = 'komentar';
$lang_report_php['invalid_data'] = 'Podaci o prijavi kojima pokušavate da pristupite su neispravni zbog vašeg programa za poštu. Proverite da li je adresa cela.';
}

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) {
$lang_editpics_php['pic_info'] = 'Informacije o fajlu';
$lang_editpics_php['desc'] = 'Opis';
$lang_editpics_php['approval'] = 'Odobrenje'; //cpg 1.5
$lang_editpics_php['approved'] = 'Odobreno'; // cpg 1.5
$lang_editpics_php['unapproved'] = 'Neodobreno'; // cpg 1.5
$lang_editpics_php['new_keyword'] = 'Nova ključna reč';
$lang_editpics_php['new_keywords'] = 'Pronađene nove ključne reči';
$lang_editpics_php['existing_keyword'] = 'Postojeće ključna reč';
$lang_editpics_php['pic_info_str'] = '%s &puta; %s - %s KB - %s pregleda - %s glasova';
$lang_editpics_php['approve'] = 'Odobriti fajl';
$lang_editpics_php['postpone_app'] = 'Odložiti odobrenje';
$lang_editpics_php['del_pic'] = 'Izbrisati fajl';
$lang_editpics_php['del_all'] = 'Izbrisati SVE fajlove';
$lang_editpics_php['read_exif'] = 'Učitati EXIF informacije ponovo';
$lang_editpics_php['reset_view_count'] = 'Vratiti brojač pregleda na početak';
$lang_editpics_php['reset_all_view_count'] = 'Vratiti SVE brojače pregleda na početak';
$lang_editpics_php['reset_votes'] = 'Vratiti glasove na početak';
$lang_editpics_php['reset_all_votes'] = 'Vratiti SVE glasove na početak';
$lang_editpics_php['del_comm'] = 'Izbrisati komentare';
$lang_editpics_php['del_all_comm'] = 'Izbrisati SVE komentare';
$lang_editpics_php['upl_approval'] = 'Poslati odobrenje';
$lang_editpics_php['edit_pics'] = 'Menjati fajlove';
$lang_editpics_php['edit_pic'] = 'Menjati fajl'; // cpg 1.5
$lang_editpics_php['see_next'] = 'Videti sledeći fajl';
$lang_editpics_php['see_prev'] = 'Videti prethodni fajl';
$lang_editpics_php['n_pic'] = '%s fajlova';
$lang_editpics_php['n_of_pic_to_disp'] = 'Broj fajlova u prikazu';
$lang_editpics_php['crop_title'] = 'Coppermine obrada slika';
$lang_editpics_php['preview'] = 'Pregled';
$lang_editpics_php['save'] = 'Snimiti sliku';
$lang_editpics_php['save_thumb'] = 'Snimiti kao sličicu';
$lang_editpics_php['gallery_icon'] = 'Koristiti kao ikonu';
$lang_editpics_php['sel_on_img'] = 'Izabrani deo mora ceo biti na slici!'; // js-alert
$lang_editpics_php['album_properties'] = 'Svojstva albuma';
$lang_editpics_php['parent_category'] = 'Viša (gornja) kategorija';
$lang_editpics_php['thumbnail_view'] = 'Prikaz sa sličicama';
$lang_editpics_php['select_unselect'] = 'izabrati/poništiti sve';
$lang_editpics_php['file_exists'] = 'Fajl \'%s\' već postoji.';
$lang_editpics_php['rename_failed'] = 'Menjanje imena \'%s\' u \'%s\' nije uspelo.';
$lang_editpics_php['src_file_missing'] = 'Fajl \'%s\' ne postoji.';
$lang_editpics_php['mime_conv'] = 'Menjanje fajla iz \'%s\' u \'%s\' nije uspelo';
$lang_editpics_php['forb_ext'] = 'Zabranjena ekstenzija fajla.';
$lang_editpics_php['error_editor_class'] = 'Klasa obrade za vaš metod smanjivanja nije instalirana'; // cpg 1.5
$lang_editpics_php['error_document_size'] = 'Dokument nema ni širinu ni visinu'; // cpg 1.5 // js-alert
$lang_editpics_php['success_picture'] = 'Slika uspešno snimljena - sad možete %szatvoriti%s ovaj prozor'; // cpg1.5 // do not translate "%s" here
$lang_editpics_php['success_thumb'] = 'Sličica uspešno snimljena - sad možete %szatvoriti%s ovaj prozor'; // cpg1.5 // do not translate "%s" here
$lang_editpics_php['rotate'] = 'Okretanje'; // cpg 1.5
$lang_editpics_php['mirror'] = 'Odraz u ogledalu'; // cpg 1.5
$lang_editpics_php['scale'] = 'Menjanje veličine'; // cpg 1.5
$lang_editpics_php['new_width'] = 'Nova širina'; // cpg 1.5
$lang_editpics_php['new_height'] = 'Nova visina'; // cpg 1.5
$lang_editpics_php['enable_clipping'] = 'Omogućiti sečenje, uključiti kao biste sekli'; // cpg 1.5
$lang_editpics_php['jpeg_quality'] = 'JPEG kvalitet rezultata'; // cpg 1.5
$lang_editpics_php['or'] = 'ILI'; // cpg 1.5
$lang_editpics_php['approve_pic'] = 'Odobriti fajl'; // cpg 1.5
$lang_editpics_php['approve_all'] = 'Odobriti SVE fajlove'; // cpg 1.5
$lang_editpics_php['error_empty'] = 'Album je prazan'; // cpg1.5
$lang_editpics_php['error_approval_empty'] = 'Nema više slika za odobravanje'; // cpg1.5
$lang_editpics_php['error_linked_only'] = 'Album sadrži samo povezane fajlove, koje ne možete da menjate ovde'; // cpg1.5
$lang_editpics_php['note_approve_public'] = 'Fajlove koji se premeste u javni album mora da odobri administrator.'; // cpg1.5
$lang_editpics_php['note_approve_private'] = 'Fajlove koji se premeste u privatni album galerije mora da odobri administrator.' ; // cpg1.5
$lang_editpics_php['note_edit_control'] = 'Fajlovi koji se premeste u javni album ne mogu da se menjaju.'; // cpg1.5
$lang_editpics_php['confirm_move'] = 'Jeste li sigurni da hoćete da premestite ovaj fajl?'; // cpg1.5 //js-alert
$lang_editpics_php['success_changes'] = 'Promene uspešno snimljene'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File forgot_passwd.php
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) {
$lang_forgot_passwd_php['forgot_passwd'] = 'Podsetnik za lozinku';
$lang_forgot_passwd_php['err_already_logged_in'] = 'Već ste prijavljeni!';
$lang_forgot_passwd_php['enter_email'] = 'Upišite imejl adresu';
$lang_forgot_passwd_php['submit'] = 'napred';
$lang_forgot_passwd_php['illegal_session'] = 'Sesija zaboravljene lozinke neispravna ili istekla.';
$lang_forgot_passwd_php['failed_sending_email'] = 'Imejl sa podsetnikom za lozinku ne može da se pošalje!';
$lang_forgot_passwd_php['email_sent'] = 'Imejl sa vašim korisničkim imenom i lozinkom je poslat na %s';
$lang_forgot_passwd_php['verify_email_sent'] = 'Imejl je poslat na %s. Molimo vas da proverite poštu kako biste dovršili proces.';
$lang_forgot_passwd_php['err_unk_user'] = 'Izabrani korisnik ne postoji!';
$lang_forgot_passwd_php['account_verify_subject'] = '%s - Zahtev za novom lozinkom';
$lang_forgot_passwd_php['passwd_reset_subject'] = '%s - Vaša nova lozinka';
$lang_forgot_passwd_php['account_verify_email'] = <<< EOT
Zatražili ste novu lozinku. Ako želite da vam nova lozinka bude poslata, kliknite na sledeću adresu:

<a href="{VERIFY_LINK}">{VERIFY_LINK}</a>


Pozdrav,

Uprava sajta {SITE_NAME}

EOT;

$lang_forgot_passwd_php['reset_email'] = <<< EOT
Evo nove lozinke koju ste tražili:

Korisničko ime: {USER_NAME}
Lozinka: {PASSWORD}

Idite na <a href="{SITE_LINK}">{SITE_LINK}</a> kako biste se prijavili.


Pozdrav,

Uprava sajta {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //
if (defined('GROUPMGR_PHP')) {
$lang_groupmgr_php['group_manager'] = 'Upravljanje grupama'; // cpg1.5.x
$lang_groupmgr_php['group_name'] = 'Grupa';
$lang_groupmgr_php['permissions'] = 'Dozvole';
$lang_groupmgr_php['public_albums'] = 'Postavljanje javnih albuma';
$lang_groupmgr_php['personal_gallery'] = 'Lična galerija';
$lang_groupmgr_php['disk_quota'] = 'Kvota';
$lang_groupmgr_php['rating'] = 'Ocena';
$lang_groupmgr_php['ecards'] = 'Elektronske dopisnice';
$lang_groupmgr_php['comments'] = 'Komentari';
$lang_groupmgr_php['allowed'] = 'Dozvoljeno';
$lang_groupmgr_php['approval'] = 'Odobrenje';
$lang_groupmgr_php['create_new_group'] = 'Napraviti novu grupu';
$lang_groupmgr_php['del_groups'] = 'Izbrisati izabrane grupe';
$lang_groupmgr_php['confirm_del'] = 'Upozorenje: kada izbrišete grupu, korisnici koji njoj pripadaju će biti prebačeni u grupu \'Registrovani\'!\n\nDa li želite da nastavite?'; // js-alert
$lang_groupmgr_php['title'] = 'Upravljanje grupama korisnika';
$lang_groupmgr_php['reset_to_default'] = 'Vratiti na početno ime(%s) - preporučeno!';
$lang_groupmgr_php['error_group_empty'] = 'Tabela grupe je bila prazna!<br />Osnovne grupe napravljene, molimo učitajte ovu stranicu ponovo';
$lang_groupmgr_php['explain_greyed_out_title'] = 'Zašto je ovaj red siv?';
$lang_groupmgr_php['explain_guests_greyed_out_text'] = 'Ne možete da menjate osobine ove grupe, jer ne postoji njen nivo pristupa. Svi neprijavljeni korisnici (članovi grupe %s) ne mogu ništa da rade osim da se prijave; zato se podešavanja grupa na njih ne primenjuju. Promenite nivo pristupa ovde ili na stranici sa podešavanjima galerije, pod "Podešavanja korisnika", "Dozvoliti pristup bez prijave".';
$lang_groupmgr_php['group_assigned_album'] = 'dodeljeni albumi';
$lang_groupmgr_php['access_level'] = 'Nivo pristupa'; // cpg1.5
$lang_groupmgr_php['thumbnail_intermediate_full'] = 'sličica, prelazna i slika u punoj veličini'; // cpg1.5
$lang_groupmgr_php['thumbnail_intermediate'] = 'sličica i prelazna slika'; // cpg1.5
$lang_groupmgr_php['thumbnail_only'] = 'samo sličica'; // cpg1.5
$lang_groupmgr_php['none'] = 'ništa'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //
if (defined('INDEX_PHP')){
$lang_index_php['welcome'] = 'Dobrodošli!';

$lang_album_admin_menu['confirm_delete'] = 'Jeste li sigurni da hoćete da IZBRIŠETE ovaj album?\\nSvi fajlovi i komentari će takođe biti izbrisani.'; // js-alert
$lang_album_admin_menu['delete'] = 'Obrisati';
$lang_album_admin_menu['modify'] = 'Osobine';
$lang_album_admin_menu['edit_pics'] = 'Menjati fajlove';
$lang_album_admin_menu['cat_locked'] = 'Ovaj album je zaključan i ne može se menjati'; // cpg1.5.x

$lang_list_categories['home'] = 'Početna';
$lang_list_categories['stat1'] = 'broj fajlova [pictures], broj albuma [albums], broj kategorija [cat], broj komentara [comments], broj pregleda [views]'; // do not translate the stuff in square brackets
$lang_list_categories['stat2'] = 'broj fajlova [pictures], broj albuma [albums], broj pregleda [views]'; // do not translate the stuff in square brackets
$lang_list_categories['xx_s_gallery'] = 'Galerija čiji je vlasnik %s';
$lang_list_categories['stat3'] = 'broj fajlova [pictures], broj albuma [albums], broj komentara [comments], broj pregleda [views]'; // do not translate the stuff in square brackets

$lang_list_users['user_list'] = 'Spisak korisnika';
$lang_list_users['no_user_gal'] = 'Nema korisničkih galerija';
$lang_list_users['n_albums'] = 'broj albuma - %s';
$lang_list_users['n_pics'] = 'broj fajlova - %s';

$lang_list_albums['n_pictures'] = 'broj fajlova - %s';
$lang_list_albums['last_added'] = ', poslednji je postavljen %s';
$lang_list_albums['n_link_pictures'] = 'broj povezanih fajlova - %s';
$lang_list_albums['total_pictures'] = 'ukupno fajlova - %s';
$lang_list_albums['alb_hits'] = 'broj pregleda albuma - %s'; // cpg1.5
$lang_list_albums['from_category'] = ' - iz kategorije: '; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File install.php
// ------------------------------------------------------------------------- //

if (defined('INSTALL_PHP')) {
$lang_install['already_succ'] = 'Fajl za instalaciju je već jednom bio uspešno pokrenut i sad je zaključan.';
$lang_install['already_succ_explain'] = 'Ako hoćete da ponovo pokrenete fajl za instalaciju, prvo morate da obrišete fajl \'include/config.inc.php\' koji je napravljen u folderu u koji ste stavili Coppermine. To možete da uradite bilo kojim FTP programom';
$lang_install['cant_read_tmp_conf'] = 'Fajl za instalaciju ne može da učita privremeni fajl za podešavanja %s.';
$lang_install['cant_write_tmp_conf'] = 'Fajl za instalaciju ne može da snimi privremeni fajl za podešavanja %s.';
$lang_install['review_permissions'] = 'Molimo, proverite dozvole foldera.';
$lang_install['change_lang'] = 'Promeniti jezik';
$lang_install['check_path'] = 'Proveriti putanju';
$lang_install['continue'] = 'Sledeći korak';
$lang_install['conv_said'] = 'Poruka programa za konvertovanje:';
$lang_install['license_info'] = 'Coppermine je paket galerija za slike i multimedije izdat pod licencom GNU GPL v3. Instaliranjem prihvatate da budete vezani Coppermine licencom:';
$lang_install['cpg_info_frames'] = 'Izgleda da vaš pregledač ne može da prikaže ugrađen okvir. Možete da pogledate licencu u folderu sa dokumentima koji dolazi sa Coppermine paketom.';
$lang_install['license'] = 'Coppermine licencni ugovor';
$lang_install['create_table'] = 'Pravljenje tabele \'%s\'';
$lang_install['db_populating'] = 'Pokušaj ubacivanja podataka u bazu podataka.';
$lang_install['db_alr_populated'] = 'Neophodni podaci već ubačeni u bazu.';
$lang_install['dir_ok'] = 'Folder nađen';
$lang_install['directory'] = 'Folder';
$lang_install['email'] = 'Imejl adresa';
$lang_install['email_no_match'] = 'Imejl adrese se ne poklapaju ili nisu ispravne.';
$lang_install['email_verif'] = 'Potvrditi imejl';
$lang_install['err_cpgnuke'] = '<h1>ERROR</h1>Izgleda da pokušavate da instalirate samostalni Coppermine u Nuke portal.<br />Ova verzija može da se koristi samo samostalno!<br />Ponekad podešavanja servera mogu da prikažu ovu poruku iako nemate instaliran nuke portal. Ako je ovo slučaj kod vas, <a href="%s?continue_anyway=1">nastavite</a> sa instalacijom. Ako koristite nuke portal, možete da pogledate <a href=\"http://www.cpgnuke.com/\">CpgNuke</a> ili da koristite jedan od (nepodržanih)<a href=\"http://sourceforge.net/project/showfiles.php?group_id=89658&amp;package_id=95984\">Coppermine portova</a> - ne nastavljajte!';
$lang_install['error'] = 'GREŠKA';
$lang_install['error_need_corr'] = 'Došlo je do sledećih grešaka koje moraju biti ispravljene:';
$lang_install['finish'] = 'Završiti instalaciju';
$lang_install['gd_note'] = '<strong>Važno:</strong> starije verzije GD grafičke biblioteke podržavaju samo JPEG i PNG slike. Ako je ovo slučaj kod vas, program neće moći da pravi sličice za GIF slike.';
$lang_install['go_to_main'] = 'Ići na glavnu stranu';
$lang_install['im_no_convert_ex'] = 'Fajl za instalaciju je našao ImageMagick \'convert\' program u \'%s\', ali program ne može da ga pokrene.<br />Možete da razmislite o upotrebi GD umesto ImageMagick.';
$lang_install['im_not_found'] = 'Fajl za instalaciju je pokušao da nađe ImageMagick, ali nije uspeo da utvrdi da li postoji ili je došlo do greške. <br />Coppermine može da koristi <a href="http://www.imagemagick.org/">ImageMagick</a> \'convert\' program da pravi sličice. Kvalitet slika koje pravi ImageMagick je bolji od GD1, ali isti kao kod GD2.<br />Ako je ImageMagick instaliran na vašem sistemu i hoćete da ga koristite, <br />morate da unesete celu putanju do \'convert\' programa ispod. <br />Na Windowsu bi putanja izgledala otprilike ovako \'c:/ImageMagick/\' bez razmaka, a na Unix sistemima ovako \'/usr/bin/\'.<br />Ako ne znate da li imate ImageMagick ili ne, ostavite ovo polje prazno - fajl za instalaciju će onda pokušati da koristi GD2 kao osnovni program (što većina korisnika ima). <br />Možete ovo da promenite i kasnije (u podešavanjima programa Coppermine), zato ne brinite ako niste sigurni šta da upišete - ostavite prazno.';
$lang_install['im_packages'] = 'Vaš server podržava sledeće pakete slika';
$lang_install['im_path'] = 'Putanja do programa ImageMagick:';
$lang_install['im_path_space'] = 'Putanja do programa ImageMagick (\'%s\') sadrži najmanje jedan razmak. Ovo će prouzrokovati probleme u skriptu.<br />Morate da premestite ImageMagick u drugi folder.';
$lang_install['installation'] = 'instalacija';
$lang_install['installer_locked'] = 'Fajl za instalaciju je zaključan';
$lang_install['installer_selected'] = 'Fajl za instalaciju je selektovan';
$lang_install['inv_im_path'] = 'Fajl za instalaciju ne može da nađe folder \'%s\' koji ste dali za ImageMagick ili nema dozvolu da mu pristupi. Proverite da li ste dobro upisali i da li imate pristup naznačenom folderu.';
$lang_install['lets_go'] = 'Idemo!';
$lang_install['mysql_create_btn'] = 'Napraviti';
$lang_install['mysql_create_db'] = 'Napraviti novu MySQL bazu';
$lang_install['mysql_db_name'] = 'Ime MySQL baze';
$lang_install['mysql_error'] = 'MySQL greška: ';
$lang_install['mysql_host'] = 'MySQL host<br />(localhost je obično u redu)';
$lang_install['mysql_username'] = 'MySQL korisničko ime'; // cpg1.5
$lang_install['mysql_password'] = 'MySQL lozinka'; // cpg1.5
$lang_install['mysql_no_create_db'] = 'Nije moguće napraviti MySQL bazu.';
$lang_install['mysql_no_sel_dbs'] = 'Nije moguće pronaći dostupne MySQL baze';
$lang_install['mysql_succ'] = 'Veza sa bazom podataka uspostavljena';
$lang_install['mysql_tbl_pref'] = 'Prefiks MySQL tabela';
$lang_install['mysql_test_connection'] = 'Probati vezu';
$lang_install['mysql_wrong_db'] = 'MySQL nije mogao da pronađe bazu po imenu \'%s\' molimo proverite unetu vrednost';
$lang_install['n_a'] = 'N/A';
$lang_install['no_admin_email'] = 'Morate da upišete imejl adresu administratora';
$lang_install['no_admin_password'] = 'Morate da upišete lozinku administratora';
$lang_install['no_admin_username'] = 'Morate da upišete korisničko ime administratora';
$lang_install['no_dir'] = 'Folder nije dostupan';
$lang_install['no_gd'] = 'Vaša PHP instalacija izgleda ne uključuje ekstenziju \'GD\' grafičke biblioteke, a niste naznačili da hoćete da koristite ImageMagick. Coppermine je podešen da koristi GD2 jer ponekad automatska detekcija GD ne uspe. Ako je GD instaliran na vašem sistemu, skript će raditi, a ako ne, moraćete da instalirate ImageMagick.';
$lang_install['no_mysql_conn'] = 'Nije moguće napraviti vezu s MySQL, molimo proverite detalje o MySQL koji su uneti';
$lang_install['no_mysql_support'] = 'PHP nema uključenu podršku za MySQL.';
$lang_install['no_thumb_method'] = 'Morate da izaberete program za rad sa slikama (GD/IM)';
$lang_install['nok'] = 'Nije u redu';
$lang_install['not_here_yet'] = 'Još uvek ničeg ovde, kliknite, %ovde%s da biste se vratili.';
$lang_install['ok'] = 'U redu';
$lang_install['on_q'] = 'zahtev u toku';
$lang_install['or'] = 'ili';
$lang_install['pass_err'] = 'Lozinke se ne poklapaju, upotrebili ste nedozvoljene znakove ili niste uneli lozinku.';
$lang_install['password'] = 'Lozinka';
$lang_install['password_verif'] = 'Potvrda lozinke';
$lang_install['perm_error'] = 'U \'%s\' dozvole su podešene na %s, molimo namestite ih na';
$lang_install['perm_ok'] = 'Dozvole određenih foldera su proverene i izgleda da su u redu. <br />Pređite na sledeći korak.';
$lang_install['perm_not_ok'] = 'Dozvole određenih foldera nisu dobro podešene.<br />Molimo promenite dozvole foldera ispod koji su obeleženi sa "Nije u redu".'; // cpg1.5
$lang_install['please_go_back'] = 'Molimo %skliknite ovde%s da biste se vratili i rešili ovaj problem pre nego što nastavite.';
$lang_install['populate_db'] = 'Popunjavanje baze podataka';
$lang_install['ready_to_roll'] = '<a href="index.php">Coppermine</a> je sada ispravno podešen i spreman za upotrebu.<br /><a href="login.php">Prijavite</a> se koristeći podatke koje ste dali za administratorski nalog.';
$lang_install['sect_create_adm'] = 'U ovom delu su potrebni podaci kako bi se napravio administratorski nalog. Koristite samo alfanumeričke znakove. Unesite podatke pažljivo!';
$lang_install['sect_mysql_info'] = 'U ovom delu su potrebni podaci o načinu pristupa vašoj MySQL bazi podataka.<br />Ako ne znate kako da ih popunite, proverite kod službe provajdera hostinga.';
$lang_install['sect_mysql_sel_db'] = 'Ovde morate da izaberete koju bazu podataka želite da koristite za Coppermine.<br />Ako vaš MySQL nalog ima odgovarajuće privilegije, možete bazu napraviti u okviru instalacije ili možete koristiti postojeću bazu. Ako vam se ne sviđaju ove mogućnosti, moraćete prvo da napravite bazu van instalacije, a onda se vratite ovde i izaberite bazu iz padajućeg menija ispod. Možete da promenite i prefiks za tabele (ne koristite tačke), ali je preporučljivo da zadržite osnovni prefiks.';
$lang_install['select_lang'] = 'Izaberite osnovni jezik: ';
$lang_install['sql_file_not_found'] = 'Fajl \'%s\' nije pronađen. Proverite da li ste poslali sve Coppermine fajlove na server.';
$lang_install['status'] = 'Status';
$lang_install['subdir_called'] = 'Podfolder po imenu \'%s\' bi po pravilu trebalo da postoji u folderu u koji ste poslali Coppermine.<br />Instalacija ne može da pronađe ovaj folder. Proverite da li ste poslali sve Coppermine fajlove na server.';
$lang_install['title_admin'] = 'Napraviti administratora Coppermine';
$lang_install['title_dir_check'] = 'Provera dozvola foldera';
$lang_install['title_file_check'] = 'Provera instalacionih fajlova';
$lang_install['title_finished'] = 'Instalacija završena';
$lang_install['title_imp'] = 'Izbor paketa za slike';
$lang_install['title_imp_test'] = 'Provera biblioteke slika';
$lang_install['title_mysql_db_sel'] = 'Izbor MySQL baze';
$lang_install['title_mysql_pop'] = 'Stvaranje strukture baze podataka';
$lang_install['title_mysql_user'] = 'Identifikacija MySQL korisnika';
$lang_install['title_welcome'] = 'Dobrodošli u instalaciju Coppermine';
$lang_install['tmp_conf_error'] = 'Upisivanje privremenog fajla za podešavanje nije moguće - proverite da li skript može da upisuje u \'include\' folder.';
$lang_install['tmp_conf_ser_err'] = 'Ozbiljna greška je nastala u instalaciji, pokušajte da ponovo učitate stranicu ili počnite ponovo tako što ćete obrisati fajl \'include/config.tmp\' .';
$lang_install['try_again'] = 'Pokušajte ponovo!';
$lang_install['unable_write_config'] = 'Upisivanje fajla za podešavanje nije moguće';
$lang_install['user_err'] = 'Korisničko ime administratora mora da sadrži samo alfanumeričke znakove i ne sme biti prazno.';
$lang_install['username'] = 'Korisničko ime';
$lang_install['your_admin_account'] = 'Vaš administratorski nalog';
$lang_install['no_cookie'] = 'Vaš pregledač nije prihvatio naš kolačić. Preporučljivo je da prihvatate kolačiće.';
$lang_install['no_javascript'] = 'Izgleda da vaš pregledač nema uključen Javascript - vrlo je preporučljivo da ga uključite.';
$lang_install['register_globals_detected'] = 'Izgleda da je vaš PHP podešen na \'register_globals\' - trebalo bi da to isključite iz razloga bezbednosti.';
$lang_install['more'] = 'još';
$lang_install['version_undetected'] = 'Skript nije mogao da utvrdi verziju %s koju koristi vaš server. Proverite da li je najmanje verzija %s.';
$lang_install['version_incompatible'] = 'Skript je pronašao nekompatibilnu verziju (%s) softvera %s na vašem serveru.<br />Pre nego što nastavite, obezbedite kompatibilnu verziju (%s ili novija)!';
$lang_install['read_gif'] = 'Čitanje/upisivanje .gif fajla';
$lang_install['read_png'] = 'Čitanje/upisivanje .png fajla';
$lang_install['read_jpg'] = 'Čitanje/upisivanje .jpg fajla';
$lang_install['write_error'] = 'Stvorena slika nije mogla biti upisana na disk.';
$lang_install['read_error'] = 'Slika nije mogla biti pročitana.';
$lang_install['combine_error'] = 'Slike nisu mogle da se kombinuju';
$lang_install['text_error'] = 'Nije bilo moguće dodati tekst slici';
$lang_install['scale_error'] = 'Sliku nije bilo moguće smanjiti';
$lang_install['pixels'] = 'pikseli';
$lang_install['combine'] = 'Kombinovati 2 slike';
$lang_install['text'] = 'Upisati tekst na sliku';
$lang_install['scale'] = 'Smanjiti sliku';
$lang_install['generated_image'] = 'Napravljena slika';
$lang_install['reference_image'] = 'Referentna slika';
$lang_install['imp_test_error'] = 'Javila se greška u jednom ili više testova, proverite da li ste izabrali odgovarajući paket za obradu slika i da li je pravilno podešen!';
$lang_install['writable'] = 'Upisivanje moguće';
$lang_install['not_writable'] = 'Upisivanje nije moguće';
$lang_install['not_exist'] = 'Ne postoji';
$lang_install['old_install'] = 'Ovo je novi proces za instalaciju. Kliknite %sovde%s za klasični prikaz instalacije.'; //cpg1.5

}

// ------------------------------------------------------------------------- //
// File keywordmgr.php
// ------------------------------------------------------------------------- //
if (defined('KEYWORDMGR_PHP')) {
$lang_keywordmgr_php['title'] = 'Upravljanje ključnim rečima';
$lang_keywordmgr_php['search'] = 'Pretraga';
$lang_keywordmgr_php['keyword_test_search'] = 'Tražite %s u novom prozoru';
$lang_keywordmgr_php['keyword_del'] = 'Obrišite ključnu reč %s';
$lang_keywordmgr_php['confirm_delete'] = 'Jeste li sigurni da hoćete da obrišete ključnu reč %s iz cele galerije?'; // js-alert
$lang_keywordmgr_php['change_keyword'] = 'Promeniti ključnu reč';
}

// ------------------------------------------------------------------------- //
// File langmgr.php
// ------------------------------------------------------------------------- //
if (defined('LANGMGR_PHP')) {
$lang_langmgr_php['title'] = 'Upravljanje jezikom';
$lang_langmgr_php['english_language_name'] = 'Engleski';
$lang_langmgr_php['native_language_name'] = 'Osnovni';
$lang_langmgr_php['custom_language_name'] = 'Izabrani';
$lang_langmgr_php['language_name'] = 'Ime jezika';
$lang_langmgr_php['language_file'] = 'Fajl jezika';
$lang_langmgr_php['flag'] = 'Zastava';
$lang_langmgr_php['file_available'] = 'Dostupan';
$lang_langmgr_php['enabled'] = 'Uključen';
$lang_langmgr_php['complete'] = 'Kompletan';
$lang_langmgr_php['default'] = 'Osnovni';
$lang_langmgr_php['missing'] = 'nedostaje';
$lang_langmgr_php['broken'] = 'izgleda da je neispravan ili nedostupan';
$lang_langmgr_php['exists_in_db_and_file'] = 'postoji u bazi podataka i kao fajl';
$lang_langmgr_php['exists_as_file_only'] = 'postoji samo kao fajl';
$lang_langmgr_php['pick_a_flag'] = 'Izaberite jedan';
$lang_langmgr_php['replace_x_with_y'] = 'Zameniti jezik %s jezikom %s';
$lang_langmgr_php['tanslator_information'] = 'Informacije o prevodiocu';
$lang_langmgr_php['cpg_version'] = 'Coppermine verzija';
$lang_langmgr_php['hide_details'] = 'Sakriti detalje';
$lang_langmgr_php['show_details'] = 'Prikazati detalje';
$lang_langmgr_php['loading'] = 'Učitavanje';
$lang_langmgr_php['english_missing'] = 'Fajl sa engleskim jezikom nedostaje iako ga nikad ne bi trebalo uklanjati. Potrebno ja da ga odmah vratite.';
$lang_langmgr_php['enable_at_least_one'] = 'Potrebno je da uključite najmanje jedan jezik kako bi galerija radila';
$lang_langmgr_php['enable_default'] = 'Izabrali ste osnovni jezik koji nije uključen. Izaberite drugi jezik ili uključite jezik koji ste izabrali kao osnovni!';
$lang_langmgr_php['available_default'] = 'Izabrali ste osnovni jezik koji nije dostupan. Izaberite drugi osnovni jezik!';
$lang_langmgr_php['version_does_not_match'] = 'Verzija ovog fajla se ne poklapa sa verzijom Coppermine galerije. Koristite je sa oprezom i detaljno je proverite!';
$lang_langmgr_php['no_version'] = 'Informacija o verziji nije mogla biti pronađena. Verovatno je da ovaj fajl sa jezikom uopšte ne radi ili da nije pravi fajl sa jezikom.';
$lang_langmgr_php['filesize'] = 'Veličina %s je verovatno netačna';
$lang_langmgr_php['content_missing'] = 'Fajl ne sadrži potrebne podatke, pa verovatno i nije ispravan jezički fajl.';
$lang_langmgr_php['status'] = 'Status';
$lang_langmgr_php['default_language'] = '%s je namešten kao osnovni jezik';
}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //
if (defined('LOGIN_PHP')) {
$lang_login_php['login'] = 'Prijava';
$lang_login_php['enter_login_pswd'] = 'Unesite korisničko ime i lozinku kako biste se prijavili';
$lang_login_php['username'] = 'Korisničko ime';
$lang_login_php['email'] = 'Imejl adresa'; // cpg1.5
$lang_login_php['both'] = 'Korisničko ime / Imejl adresa'; // cpg1.5
$lang_login_php['password'] = 'Lozinka';
$lang_login_php['remember_me'] = 'Zapamtiti';
$lang_login_php['welcome'] = 'Dobrodošli, %s ...';
$lang_login_php['err_login'] = 'Prijava neuspela. Pokušajte ponovo.';
$lang_login_php['err_already_logged_in'] = 'Već ste prijavljeni!';
$lang_login_php['forgot_password_link'] = 'Zaboravili ste lozinku?';
$lang_login_php['cookie_warning'] = 'Upozorenje, vaš pregledač ne prihvata kolačiće skripta';
$lang_login_php['send_activation_link'] = 'Propustili ste adresu za aktivaciju?';
$lang_login_php['force_login'] = 'Morate se prijaviti da biste videli ovu stranu'; // cpg1.5
$lang_login_php['force_login_title'] = 'Prijavite se da biste nastavili'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) {
$lang_logout_php['logout'] = 'Odjava';
$lang_logout_php['bye'] = 'Doviđenja %s ...';
$lang_logout_php['err_not_logged_in'] = 'Niste prijavljeni!'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File minibrowser.php
// ------------------------------------------------------------------------- //
if (defined('MINIBROWSER_PHP')) {
$lang_minibrowser_php['up'] = 'jedan nivo gore';
$lang_minibrowser_php['current_path'] = 'trenutna putanja';
$lang_minibrowser_php['select_directory'] = 'izaberite folder';
$lang_minibrowser_php['click_to_close'] = 'Kliknite na sliku da biste zatvorili ovaj prozor';
$lang_minibrowser_php['folder'] = 'Folder'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File mode.php
// ------------------------------------------------------------------------- //
if (defined('MODE_PHP')) {
$lang_mode_php[0] = 'Isključivanje prikaza administratorskih kontrola...'; // cpg1.5
$lang_mode_php[1] = 'Uključivanje prikaza administratorskih kontrola...'; // cpg1.5
$lang_mode_php['news_hide'] = 'Sakrivanje vesti...'; // cpg1.5
$lang_mode_php['news_show'] = 'Prikaz vesti...'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //
if (defined('MODIFYALB_PHP')) {
$lang_modifyalb_php['upd_alb_n'] = 'Menjati album %s';
$lang_modifyalb_php['related_tasks'] = 'Povezani zadaci'; // cpg1.5
$lang_modifyalb_php['choose_album'] = 'Izabrati album'; // cpg1.5
$lang_modifyalb_php['general_settings'] = 'Opšta podešavanja';
$lang_modifyalb_php['alb_title'] = 'Naslov albuma';
$lang_modifyalb_php['alb_cat'] = 'Kategorija albuma';
$lang_modifyalb_php['alb_desc'] = 'Opis albuma';
$lang_modifyalb_php['alb_keyword'] = 'Ključna reč albuma';
$lang_modifyalb_php['alb_thumb'] = 'Sličica albuma';
$lang_modifyalb_php['alb_perm'] = 'Dozvole za ovaj album';
$lang_modifyalb_php['can_view'] = 'Ko može da vidi album';
$lang_modifyalb_php['can_upload'] = 'Posetioci mogu da postavljaju fajlove';
$lang_modifyalb_php['can_post_comments'] = 'Posetioci mogu da šalju komentare';
$lang_modifyalb_php['can_rate'] = 'Posetioci mogu da ocenjuju fajlove';
$lang_modifyalb_php['user_gal'] = 'Korisnička galerija';
$lang_modifyalb_php['my_gal'] = '* Moja galerija*'; // cpg 1.5
$lang_modifyalb_php['no_cat'] = '* Bez kategorije *';
$lang_modifyalb_php['alb_empty'] = 'Album je prazan';
$lang_modifyalb_php['last_uploaded'] = 'Poslednje postavljeno';
$lang_modifyalb_php['public_alb'] = 'Svako (javni album)';
$lang_modifyalb_php['me_only'] = 'Samo ja';
$lang_modifyalb_php['owner_only'] = 'Samo vlasnik albuma (%s)';
$lang_modifyalb_php['group_only'] = 'Članovi grupe \'%s\'';
$lang_modifyalb_php['err_no_alb_to_modify'] = 'Nema albuma u bazi koje možete da menjate.';
$lang_modifyalb_php['update'] = 'Menjati album';
$lang_modifyalb_php['reset_album'] = 'Vratiti album na početak';
$lang_modifyalb_php['reset_views'] = 'Vratiti broj pregleda na &quot;0&quot; u %s';
$lang_modifyalb_php['reset_rating'] = 'Vratiti na početak ocenu svih fajlova u %s';
$lang_modifyalb_php['delete_comments'] = 'Obrisati sve komentare u %s';
$lang_modifyalb_php['delete_files'] = '%sNepovratno%s obrisati sve fajlove u %s';
$lang_modifyalb_php['views'] = '- broj pregleda';
$lang_modifyalb_php['votes'] = '- broj glasova';
$lang_modifyalb_php['comments'] = '- broj komentara';
$lang_modifyalb_php['files'] = '- broj fajlova';
$lang_modifyalb_php['submit_reset'] = 'poslati promene';
$lang_modifyalb_php['reset_views_confirm'] = 'Siguran sam';
$lang_modifyalb_php['notice1'] = '(*) u zavisnosti od podešavanja %sgrupa%s'; // do not translate the %s placeholders
$lang_modifyalb_php['can_moderate'] = 'Ko može da nadzire albume'; // cpg 1.5
$lang_modifyalb_php['admins_only'] = 'Samo administratori'; // cpg 1.5
$lang_modifyalb_php['alb_password'] = 'Lozinka albuma (nova lozinka)';
$lang_modifyalb_php['alb_password_hint'] = 'Podsećanje na lozinku albuma';
$lang_modifyalb_php['edit_files'] = 'Menjati fajlove';
$lang_modifyalb_php['parent_category'] = 'Gornja (viša) kategorija';
$lang_modifyalb_php['thumbnail_view'] = 'Pregled sličica';
$lang_modifyalb_php['random_image'] = 'Proizvoljna slika'; // cpg 1.5
$lang_modifyalb_php['password_protect'] = 'Zaštititi ovaj album lozinkom (štiklirati za da)'; //cpg1.5
}

// ------------------------------------------------------------------------- //
// File phpinfo.php
// ------------------------------------------------------------------------- //
if (defined('PHPINFO_PHP')) {
$lang_phpinfo_php['php_info'] = 'PHP info';
$lang_phpinfo_php['explanation'] = 'Ovo je zapis koji stvara PHP funkcija <a href="http://www.php.net/phpinfo">phpinfo()</a>, prikazan u okviru Coppermine.';
$lang_phpinfo_php['no_link'] = 'Mogućnost da drugi vide vaš phpinfo je bezbedonosni rizik, zato je ova strana vidljiva samo kad ste prijavljeni kao administrator. Ne možete poslati adresu ove strane drugima, biće im zabranjen pristup.';
}

// ------------------------------------------------------------------------- //
// File picmgr.php
// ------------------------------------------------------------------------- //
if (defined('PICMGR_PHP')) {
$lang_picmgr_php['pic_mgr'] = 'Upravljanje slikama';
$lang_picmgr_php['confirm_modifs'] = 'Hoćete li zaista da izvršite promene?'; // cpg1.5 // js-alert
$lang_picmgr_php['no_change'] = 'Niste ništa promenili!';
$lang_picmgr_php['no_album'] = '* Nema albuma *';
$lang_picmgr_php['explanation_header'] = 'Određeni način ređanja koji ste naveli na ovoj strani uzeće se u obzir samo ako';
$lang_picmgr_php['explanation1'] = 'je administrator podesio "Osnovni način ređanja fajlova" u podešavanjima na "Položaj silazno" ili "Položaj uzlazno" (opšta podešavanja za sve korisnike koji nisu sami izabrali drugi način ređanja)';
$lang_picmgr_php['explanation2'] = 'je korisnik izabrao "Položaj silazno" ili "Položaj uzlazno" na stranici sa sličicama (podešavanje po korisniku)';
$lang_picmgr_php['change_album'] = 'Ako promenite album, vaše promene će biti izgubljene!'; // cpg1.5 // js-alert
$lang_picmgr_php['submit_reminder'] = 'Promene u ređanju nisu sačuvane dok ne kliknete na &quot;Potvrdite promene&quot;.'; // cpg1.5
}


// ------------------------------------------------------------------------- //
// File pluginmgr.php
// ------------------------------------------------------------------------- //
if (defined('PLUGINMGR_PHP')){
$lang_pluginmgr_php['confirm_uninstall'] = 'Jeste li sigurni da hoćete da DEINSTALIRATE ovaj dodatak?';
$lang_pluginmgr_php['confirm_remove'] = 'UPOZORENJE: API za dodatke je isključen. Hoćete li da RUČNO UKLONITE ovaj dodatak, zanemarujući postupke čišćenja?'; // cpg1.5
$lang_pluginmgr_php['confirm_delete'] = 'Jeste li sigurni da hoćete da OBRIŠETE ovaj dodatak?';
$lang_pluginmgr_php['pmgr'] = 'Upravljanje dodacima';
$lang_pluginmgr_php['explanation'] = 'Instalacija / deinstalacija / upravljanje dodacima se vrši uz pomoć ove strane.'; // cpg1.5
$lang_pluginmgr_php['plugin_enabled'] = 'API za dodatke uključen'; // cpg1.5
$lang_pluginmgr_php['name'] = 'Ime';
$lang_pluginmgr_php['author'] = 'Autor';
$lang_pluginmgr_php['desc'] = 'Opis';
$lang_pluginmgr_php['vers'] = 'v';
$lang_pluginmgr_php['i_plugins'] = 'Instalirani dodaci';
$lang_pluginmgr_php['n_plugins'] = 'Dodaci nisu instalirani';
$lang_pluginmgr_php['none_installed'] = 'Nijedan nije instaliran';
$lang_pluginmgr_php['operation'] = 'Postupak';
$lang_pluginmgr_php['not_plugin_package'] = 'Poslati fajl nije paket s dodatkom.';
$lang_pluginmgr_php['copy_error'] = 'Javila se greška prilikom kopiranja paketa u folder s dodacima.';
$lang_pluginmgr_php['upload'] = 'Slanje';
$lang_pluginmgr_php['configure_plugin'] = 'Podesiti dodatak';
$lang_pluginmgr_php['cleanup_plugin'] = 'Čišćenje dodatka';
$lang_pluginmgr_php['extra'] = 'Ekstra'; // cpg1.5
$lang_pluginmgr_php['install_info'] = 'Informacije o instalaciji'; // cpg1.5
$lang_pluginmgr_php['plugin_disabled_note'] = 'API za dodatke je isključen, pa ovaj postupak nije dozvoljen.'; // cpg1.5
$lang_pluginmgr_php['install'] = 'instalirati'; // cpg1.5
$lang_pluginmgr_php['uninstall'] = 'deinstalirati'; // cpg1.5
$lang_pluginmgr_php['minimum_requirements_not_met'] = 'Ne postoje minimalni uslovi'; // cpg1.5
$lang_pluginmgr_php['confirm_version'] = 'Nije moguće utvrditi neophodnu verziju za ovaj dodatak. Ovo obično znači da dodatak nije napravljen za vašu verziju Coppermine i mogao bi da ugrozi vašu galeriju. Nastaviti ipak (nije preporučljivo)?'; // cpg1.5 // js-alert
}

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //
if (defined('RATEPIC_PHP')) {
$lang_rate_pic_php['already_rated'] = 'Žao nam je, ali već ste ocenili ovaj fajl';
$lang_rate_pic_php['rate_ok'] = 'Vaš glas je prihvaćen';
$lang_rate_pic_php['forbidden'] = 'Ne možete da ocenjujete sopstvene fajlove.';
}

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //
if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {
$lang_register_php['disclamer'] = <<< EOT
Iako će administratori sajta {SITE_NAME} pokušati da što je pre moguće uklone ili promene bilo kakav materijal na koji se mogu uputiti zamerke, nemoguće je pregledati sve što se postavi. Stoga, primite k znanju da sve što se postavi na sajt izražava stavove i mišljenja autora, a ne administratora ili kreatora sajta (osim onog što oni postave), pa se zato ne mogu smatrati odgovornim.<br />
<br />
Vi prihvatate da ne šaljete sadržaj koji je napad ili kleveta nekog, vulgaran, govor mržnje, pretnja, seksualno zlostavljanje ili bilo šta što može da krši bilo koji zakon koji se može primeniti. Prihvatate da kreator, administrator i nadzornici sajta {SITE_NAME} imaju pravo da uklone ili menjaju bilo koji sadržaj u bilo koje vreme. Kao korisnik, prihvatate da se sve informacije koje ste iznad naveli sačuvaju u bazi podataka. Iako ove informacije neće biti predavane trećim osobama bez vašeg odobrenja, kreator sajta i administrator ne mogu biti odgovorni za bilo kakav pokušaj upada u sajt koji može da dovede do kompromitovanja podataka.<br />
<br />
Ovaj sajt koristi kolačiće kako bi sačuvao podatke na vašem kompjuteru. Oni se koriste samo kako bi doprineli boljem pregledu sajta. Imejl adresa se koristi samo da bi se potvrdili detalji o vašoj registraciji i lozinka.<br />
<br />
Kad kliknete na 'Slažem se' ispod, prihvatate da budete obavezani ovim uslovima.
EOT;
$lang_register_php['page_title'] = 'Registracija korisnika';
$lang_register_php['term_cond'] = 'Uslovi korišćenja';
$lang_register_php['i_agree'] = 'Slažem se';
$lang_register_php['submit'] = 'Poslati registraciju';
$lang_register_php['err_user_exists'] = 'Korisničko ime koje ste uneli već postoji, molimo vas da izaberete drugo';
$lang_register_php['err_global_pw'] = 'Neispravna opšta lozinka registracije'; // cpg1.5
$lang_register_php['err_global_pass_same'] = 'Vaša lozinka bi morala biti različita od opšte lozinke'; // cpg1.5
$lang_register_php['err_duplicate_email'] = 'Drugi korisnik se već registrovao sa imejl adresom koju ste upisali';
$lang_register_php['err_disclaimer'] = 'Morate da prihvatite odricanje od odgovornosti'; // cpg1.5
$lang_register_php['enter_info'] = 'Unošenje informacija o registraciji';
$lang_register_php['required_info'] = 'Obavezan podatak';
$lang_register_php['optional_info'] = 'Podatak nije obavezan';
$lang_register_php['username'] = 'Korisničko ime';
$lang_register_php['password'] = 'Lozinka';
$lang_register_php['password_again'] = 'Unesite ponovo lozinku';
$lang_register_php['global_registration_pw'] = 'Opšta lozinka registracije'; // cpg1.5
$lang_register_php['email'] = 'Imejl';
$lang_register_php['location'] = 'Lokacija';
$lang_register_php['interests'] = 'Interesovanja';
$lang_register_php['website'] = 'Početna strana';
$lang_register_php['occupation'] = 'Zanimanje';
$lang_register_php['error'] = 'GREŠKA';
$lang_register_php['confirm_email_subject'] = '%s - Potvrda registracije';
$lang_register_php['information'] = 'Informacije';
$lang_register_php['failed_sending_email'] = 'Nije moguće poslati imejl sa potvrdom registracije!';
$lang_register_php['thank_you'] = 'Hvala vam na registraciji.<br />Imejl sa uputstvom za aktiviranje vašeg naloga je poslat na imejl adresu koju ste naveli.';
$lang_register_php['acct_created'] = 'Vaš nalog je napravljen i sad možete da se prijavite sa korisničkim imenom i lozinkom';
$lang_register_php['acct_active'] = 'Vaš nalog je aktiviran i sad možete da se prijavite sa korisničkim imenom i lozinkom';
$lang_register_php['acct_already_act'] = 'Nalog je već aktivan!';
$lang_register_php['acct_act_failed'] = 'Nije moguće aktivirati ovaj nalog!';
$lang_register_php['err_unk_user'] = 'Izabrani korisnik ne postoji!';
$lang_register_php['x_s_profile'] = 'Profil korisnika %s';
$lang_register_php['group'] = 'Grupa';
$lang_register_php['reg_date'] = 'Datum registracije';
$lang_register_php['disk_usage'] = 'Prostor na disku';
$lang_register_php['change_pass'] = 'Promeniti lozinku';
$lang_register_php['current_pass'] = 'Trenutna lozinka';
$lang_register_php['new_pass'] = 'Nova lozinka';
$lang_register_php['new_pass_again'] = 'Nova lozinka još jednom';
$lang_register_php['err_curr_pass'] = 'Trenutna lozinka je pogrešna';
$lang_register_php['change_pass'] = 'Promeniti lozinku';
$lang_register_php['update_success'] = 'Vaš profil je promenjen';
$lang_register_php['pass_chg_success'] = 'Vaša lozinka je promenjena';
$lang_register_php['pass_chg_error'] = 'Vaša lozinka nije promenjena';
$lang_register_php['notify_admin_email_subject'] = '%s - Obaveštenje o registraciji';
$lang_register_php['last_uploads'] = 'Poslednji poslat fajl'; // cpg1.5
$lang_register_php['last_uploads_detail'] = 'Svi fajlovi koje je poslao korisnik %s'; // cpg1.5
$lang_register_php['last_comments'] = 'Poslednji komentar'; // cpg1.5
$lang_register_php['you'] = 'vi'; // cpg1.5
$lang_register_php['last_comments_detail'] = 'Svi komentari koje je poslao korisnik %s'; // cpg1.5
$lang_register_php['notify_admin_email_body'] = 'Novi korisnik sa korisničkim imenom "%s" se registrovao u vašoj galeriji';
$lang_register_php['pic_count'] = 'fajlovi poslati';
$lang_register_php['notify_admin_request_email_subject'] = '%s - Zahtev za registraciju';
$lang_register_php['thank_you_admin_activation'] = 'Hvala.<br />Vaš zahtev za aktivaciju naloga je poslat administratoru. Ako bude odobren, dobićete imejl.';
$lang_register_php['acct_active_admin_activation'] = 'Nalog je sada aktivan i imejl je poslat korisniku.';
$lang_register_php['notify_user_email_subject'] = '%s - Obaveštenje o aktivaciji';
$lang_register_php['delete_my_account'] = 'Izbrisati svoj korisnički nalog'; // cpg1.5
$lang_register_php['warning_delete'] = 'Upozorenje: kada se izbriše, nalog se ne može vratiti. Fajlovi (%s) i komentari (%s) koje ste poslali u javne albume se ne brišu kad izbrišete nalog! Međutim, fajlovi koje ste poslali u svoju ličnu galeriju će biti izbrisani.'; // cpg1.5 // The %s-placeholders mustn't be removed, they will later be replaced by the wrappers for the links
$lang_register_php['i_am_sure'] = 'Siguran sam da hoću da izbrišem svoj korisnički nalog'; // cpg1.5
$lang_register_php['really_delete'] = 'Da li stvarno hoćete da izbrišete svoj korisnički nalog?'; // cpg1.5 // js-alert
$lang_register_php['edit_xs_profile'] = 'Menjanje profila %s'; // cpg1.5
$lang_register_php['edit_my_profile'] = 'Menjanje svog profila'; // cpg1.5
$lang_register_php['none'] = 'none'; // cpg1.5
$lang_register_php['user_name_banned'] = 'Korisničko ime koje ste izabrali nije dozvoljeno/zabranjeno je. Izaberite drugo korisničko ime'; // cpg1.5
$lang_register_php['email_address_banned'] = 'Zabranjeno vam je da koristite ovu galeriju. Nije vam dozvoljeno da se ponovo registrujete. Odlazite!'; // cpg1.5
$lang_register_php['email_warning1'] = 'Polje sa imejl adresom ne sme biti prazno!'; // cpg1.5
$lang_register_php['email_warning2'] = 'Imejl adresa koju ste uneli nije ispravna. Proverite!'; // cpg1.5
$lang_register_php['username_warning1'] = 'Polje sa korisničkim imenom ne sme biti prazno!'; // cpg1.5
$lang_register_php['username_warning2'] = 'Korisničko ime mora da ima najmanje dva znaka!'; // cpg1.5
$lang_register_php['password_warning1'] = 'Lozinka mora da ima najmanje dva znaka!'; // cpg1.5
$lang_register_php['password_warning2'] = 'Korisničko ime i lozinka moraju da se razlikuju!'; // cpg1.5
$lang_register_php['password_verification_warning1'] = 'Dve lozinke se ne poklapaju, molimo vas da ih unesete opet!'; // cpg1.5
$lang_register_php['form_not_submit'] = 'Formular nije poslat - ima grešaka koje prvo morate da ispravite!'; // cpg1.5
$lang_register_php['banned'] = 'Zabranjen pristup!'; // cpg1.5

$lang_register_php['confirm_email'] = <<< EOT
Hvala vam što ste se registrovali na sajtu {SITE_NAME}

Kako biste aktivirali vaš nalog s korisničkim imenom "{USER_NAME}", treba da kliknete na donju adresu ili da je iskopirate u vaš pregledač.
<a href="{ACT_LINK}">{ACT_LINK}</a>

Pozdrav,

Uprava sajta {SITE_NAME}

EOT;

$lang_register_approve_email = <<< EOT
Novi korisnik sa korisničkim imenom "{USER_NAME}" registrovao se u vašoj galeriji.
Kako biste aktivirali nalog, kliknite na adresu ispod ili je iskopirajte u vaš pregledač.

<a href="{ACT_LINK}">{ACT_LINK}</a>

EOT;

$lang_register_php['activated_email'] = <<< EOT
Vaš nalog je odobren i aktiviran.

Sada se možete prijaviti na <a href="{SITE_LINK}">{SITE_LINK}</a> sa korisničkim imenom "{USER_NAME}"


Pozdrav,

Uprava sajta {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //
if (defined('REVIEWCOM_PHP')) {
$lang_reviewcom_php['title'] = 'Pregled komentara';
$lang_reviewcom_php['no_comment'] = 'Nema komentara za pregled';
$lang_reviewcom_php['n_comm_del'] = 'broj izbrisanih komentara - %s';
$lang_reviewcom_php['n_comm_disp'] = 'Broj komentara za prikaz';
$lang_reviewcom_php['see_prev'] = 'Videti prethodno';
$lang_reviewcom_php['see_next'] = 'Videti sledeće';
$lang_reviewcom_php['del_comm'] = 'Izbrisati izabrane komentare';
$lang_reviewcom_php['user_name'] = 'Ime';
$lang_reviewcom_php['date'] = 'Datum';
$lang_reviewcom_php['comment'] = 'Komentar';
$lang_reviewcom_php['file'] = 'Fajl';
$lang_reviewcom_php['name_a'] = 'Korisničko ime uzlazno';
$lang_reviewcom_php['name_d'] = 'Korisničko ime silazno';
$lang_reviewcom_php['date_a'] = 'Datum uzlazno';
$lang_reviewcom_php['date_d'] = 'Datum silazno';
$lang_reviewcom_php['comment_a'] = 'Poruka komentara uzlazno';
$lang_reviewcom_php['comment_d'] = 'Poruka komentara silazno';
$lang_reviewcom_php['file_a'] = 'Fajl uzlazno';
$lang_reviewcom_php['file_d'] = 'Fajl silazno';
$lang_reviewcom_php['approval_a'] = 'Odobrenje uzlazno'; // cpg1.5
$lang_reviewcom_php['approval_d'] = 'Odobrenje silazno'; // cpg1.5
$lang_reviewcom_php['ip_a'] = 'IP adresa uzlazno'; // cpg1.5
$lang_reviewcom_php['ip_d'] = 'IP adresa silazno'; // cpg1.5
$lang_reviewcom_php['akismet_a'] = 'Akismet ocena (ispravni komentari na dnu)'; // cpg1.5
$lang_reviewcom_php['akismet_d'] = 'Akismet ocena (ispravni komentari na vrhu)'; // cpg1.5
$lang_reviewcom_php['n_comm_appr'] = 'broj odobrenih komentara - %s'; // cpg1.5
$lang_reviewcom_php['n_comm_unappr'] = 'broj neodobrenih komentara - %s'; // cpg1.5
$lang_reviewcom_php['configuration_changed'] = 'Podešavanja odobrenja promenjena'; // cpg1.5
$lang_reviewcom_php['only_approval'] = 'prikazati samo komentare koji čekaju odobrenje'; // cpg1.5
$lang_reviewcom_php['approval'] = 'Odobreno'; // cpg1.5
$lang_reviewcom_php['save_changes'] = 'Snimiti promene'; // cpg1.5
$lang_reviewcom_php['n_confirm_delete'] = 'Da li zaista hoćete da izbrišete izabrane komentare?'; // cpg1.5
$lang_reviewcom_php['with_selected'] = 'Sa izabranim'; // cpg1.5
$lang_reviewcom_php['delete'] = 'obrisati'; // cpg1.5
$lang_reviewcom_php['approve'] = 'odobriti'; // cpg1.5
$lang_reviewcom_php['disapprove'] = 'označiti neodobrene'; // cpg1.5
$lang_reviewcom_php['do_nothing'] = 'ne raditi ništa'; // cpg1.5
$lang_reviewcom_php['comment_approved'] = 'Komentar odobren'; // cpg1.5
$lang_reviewcom_php['comment_unapproved'] = 'Komentar označen kao neodobren'; // cpg1.5
$lang_reviewcom_php['ban_and_delete'] = 'Zabraniti korisniku pristup i izbrisati komentare'; // cpg1.5
$lang_reviewcom_php['akismet_status'] = 'Poruka Akismeta'; // cpg1.5
$lang_reviewcom_php['is_spam'] = 'je spam'; // cpg1.5
$lang_reviewcom_php['is_not_spam'] = 'nije spam'; // cpg1.5
$lang_reviewcom_php['akismet'] = 'Akismet'; // cpg1.5
$lang_reviewcom_php['akismet_count'] = 'Broj spam poruka koje je Akismet do sada pronašao - %s'; // cpg1.5
$lang_reviewcom_php['akismet_test_result'] = 'Test rezultati za vaš API ključ %s'; // cpg1.5
$lang_reviewcom_php['invalid'] = 'neispravno'; // cpg1.5
$lang_reviewcom_php['missing_gallery_url'] = 'Morate da navedete URL adresu galerije u Coppermine podešavanjima'; // cpg1.5
$lang_reviewcom_php['unable_to_connect'] = 'Povezivanje na akismet.com nije uspelo'; // cpg1.5
$lang_reviewcom_php['not_found'] = 'URL adresa nije pronađena. Možda se struktura sajta akismet.com promenila.'; // cpg1.5
$lang_reviewcom_php['unknown_error'] = 'Nepoznata greška'; // cpg1.5
$lang_reviewcom_php['error_message'] = 'Poruka o grešci koja je stigla je'; // cpg1.5
$lang_reviewcom_php['ip_address'] = 'IP adresa'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File sidebar.php
// ------------------------------------------------------------------------- //
if (defined('SIDEBAR_PHP')) {
$lang_sidebar_php['sidebar'] = 'Bočna traka'; // cpg1.5
$lang_sidebar_php['install'] = 'instalacija'; // cpg1.5
$lang_sidebar_php['install_explain'] = 'Između mnogih zgodnih načina za brzo dobijanje informacija sa sajta, mi smo se odlučili za bočnu traku, kako bi najpopularniji pregledači koji se koriste na različitim operativnim sistemima mogli lako da pristupe stranicama. Ovde ćete naći informacije o instaliranju i uklanjanju za podržane pregledače.'; // cpg1.5
$lang_sidebar_php['os_browser_detect'] = 'Traženje informacija o vašem OS i pregledaču'; // cpg1.5
$lang_sidebar_php['os_browser_detect_explain'] = 'Skript pokušava da dobije informacije o verziji vašeg operativnog sistema i pregledača; molimo sačekajte trenutak. Ako automatsko traženje informacija ne uspe, možete da ručno %sprikažete%s sve mogućnosti instalacije bočne trake.'; // cpg1.5
$lang_sidebar_php['mozilla'] = 'Mozilla, Firefox, Netscape 6+, Konqueror 3.2+'; // cpg1.5
$lang_sidebar_php['mozilla_explain'] = 'Ako koristite Mozilla 0.9.4 ili kasniju verziju, možete da %sdodate našu bočnu traku vašoj grupi%s. Ovu bočnu traku možete da deinstalirate uz pomoć dijaloga "Prilagodi bočnu traku" u Mozili.'; // cpg1.5
$lang_sidebar_php['ie_mac'] = 'Internet Explorer 5 i noviji na operativnom sistemu Mac OS'; // cpg1.5
$lang_sidebar_php['ie_mac_explain'] = 'Ako koristite Internet Explorer 5 ili noviji na MacOSu, %sotvorite našu stranu za bočnu traku%s u posebnom prozoru. U tom prozoru otvorite "Page Holder" karticu na levoj strani prozora. Kliknite na "Add" (Dodaj). Ako hoćete da je sačuvate za ubuduće, kliknite na "Favorites" (Omiljene) i izaberite "Add to Page Holder Favorites".'; // cpg1.5
$lang_sidebar_php['ie_win'] = 'Internet Explorer 5 i noviji na Windows operativnom sistemu'; // cpg1.5
$lang_sidebar_php['ie_win_explain'] = 'Ako koristite Internet Explorer 5 ili noviji na Windowsu, možete da dodate bočnu traku vašoj traci sa vezama (Links toolbar) ili je možete dodati u omiljene (favorites) i kad kliknete na nju videćete je prikazanu tamo gde je obično traka za pretrage ako kliknete desnim dugmetom %sovde%s i izaberete "Add to favorites" (Dodaj u omiljene) iz menija. Ova veza ne instalira našu traku kao osnovnu traku za pretrage, pa nikakve promene nisu napravljene u vašem sistemu.'; // cpg1.5
$lang_sidebar_php['ie7_win'] = 'Internet Explorer 7 na Windowsu XP/Vista'; // cpg1.5
$lang_sidebar_php['ie7_win_explain'] = 'Ako koristite Internet Explorer 7 na Windowsu, možete dodati iskačući prozor za navigaciju vašoj traci sa linkovima ili je možete dodati u omiljene i kad kliknete na nju, videćete našu traku prikazanu kao iskačući prozor ako kliknete desnim dugmetom %sovde%s i izaberete "Add to favorites" (Dodaj u omiljene) iz menija. U prethodnim verzijama IE bilo je moguće dodati pravu bočnu traku, ali u IE7 ovo ne možete uraditi bez komplikovanih podešavanja registry baze. Ako želite pravu bočnu traku, preporučuje se da koristite drugi pregledač.'; // cpg1.5
$lang_sidebar_php['opera'] = 'Opera 6 i novije'; // cpg1.5
$lang_sidebar_php['opera_explain'] = 'Ako koristite Operu, možete da %skliknete na ovu vezu da dodate bočnu traku vašem skupu traka%s. Onda štiklirajte "Show in panel" (Prikazati u panelu). Možete da deinstalirate bočnu traku ako kliknete desnim dugmetom na njen jezičak i izaberete "Delete" (Izbrisati) iz menija.'; // cpg1.5
$lang_sidebar_php['additional_options'] = 'Dodatne opcije'; // cpg1.5
$lang_sidebar_php['additional_options_explain'] = 'Ako ne koristite nijedan od iznad pomenutih pregledača, već neki drugi, kliknite %sovde%s kako biste prikazali sve moguće opcije bočne trake.'; // cpg1.5
$lang_sidebar_php['cannot_add_sidebar'] = 'Bočna traka se ne može dodati! Vaš pregledač ne podržava ovaj metod!'; // cpg1.5 // js-alert
$lang_sidebar_php['search'] = 'Pretraga'; // cpg1.5
$lang_sidebar_php['reload'] = 'Učitati ponovo'; // cpg1.5
}


// ------------------------------------------------------------------------- //
// File search.php
// ------------------------------------------------------------------------- //
if (defined('SEARCH_PHP')){
$lang_search_php['title'] = 'Pretraga';
$lang_search_php['submit_search'] = 'pretraga';
$lang_search_php['keyword_list_title'] = 'Spisak ključnih reči';
$lang_search_php['keyword_msg'] = 'Spisak iznad ne uključuje sve. Ne uključuje reči iz naslova fajlova i opisa. Pokušajte sa pretragom kompletnog teksta.';
$lang_search_php['edit_keywords'] = 'Menjati ključne reči';
$lang_search_php['search in'] = 'Tražiti u:';
$lang_search_php['ip_address'] = 'IP adresa';
$lang_search_php['imgfields'] = 'Pretraga fajlova';
$lang_search_php['albcatfields'] = 'Pretraga albuma i kategorija';
$lang_search_php['age'] = 'Starost';
$lang_search_php['newer_than'] = 'Novije od';
$lang_search_php['older_than'] = 'Starije od';
$lang_search_php['days'] = 'dana';
$lang_search_php['all_words'] = 'Sadrži sve reči (I)';
$lang_search_php['any_words'] = 'Sadrži bilo koju od reči (ILI)';
$lang_search_php['regex'] = 'Sparivanje regularnih izraza';
$lang_search_php['album_title'] = 'Naslovi albuma';
$lang_search_php['category_title'] = 'Naslovi kategorija';
}

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //
if (defined('SEARCHNEW_PHP')) {
$lang_search_new_php['page_title'] = 'Tražiti nove fajlove';
$lang_search_new_php['select_dir'] = 'Izabrati folder';
$lang_search_new_php['select_dir_msg'] = 'Ova funkcija vam dozvoljava da dodate grupu fajlova koje ste poslali na server uz pomoć FTP.<br />Izaberite folder u koji ste poslali fajlove.';
$lang_search_new_php['no_pic_to_add'] = 'Nema fajlova za dodavanje';
$lang_search_new_php['need_one_album'] = 'Treba vam najmanje jedan album kako biste koristili ovu funkciju';
$lang_search_new_php['warning'] = 'Upozorenje';
$lang_search_new_php['change_perm'] = 'skript ne može da upisuje u ovaj folder, morate da promenite njegove dozvole u 755 ili 777 pre nego što pokušate da dodate fajlove!';
$lang_search_new_php['target_album'] = '<strong>Smestiti fajlove iz &quot;</strong>%s<strong>&quot; u </strong>%s';
$lang_search_new_php['folder'] = 'Folder';
$lang_search_new_php['image'] = 'fajl';
$lang_search_new_php['result'] = 'Rezultat';
$lang_search_new_php['dir_ro'] = 'Upisivanje nije moguće. ';
$lang_search_new_php['dir_cant_read'] = 'Učitavanje nije moguće. ';
$lang_search_new_php['insert'] = 'Dodavanje novih fajlova u galeriju';
$lang_search_new_php['list_new_pic'] = 'Spisak novih fajlova';
$lang_search_new_php['insert_selected'] = 'Ubaciti izabrane fajlove';
$lang_search_new_php['no_pic_found'] = 'Nisu pronađeni novi fajlovi';
$lang_search_new_php['be_patient'] = 'Molimo budite strpljivi, skriptu je potrebno vreme da doda fajlove';
$lang_search_new_php['no_album'] = 'nijedan album nije izabran';
$lang_search_new_php['result_icon'] = 'kliknite za detalje ili da učitate ponovo';
$lang_search_new_php['notes'] = <<< EOT
    <ul>
        <li>%s: fajl je uspešno dodat</li>
        <li>%s: fajl je duplikat i već je u bazi podataka</li>
        <li>%s: fajl nije mogao biti dodat, proverite podešavanja i dozvole foldera u kom se fajlovi nalaze</li>
        <li>%s: prvo morate da izaberete album</li>
        <li>%s: fajl je neispravan ili nedostupan</li>
        <li>%s: nepoznat tip fajla</li>
        <li>%s: fajl je zapravo GIF slika</li>
        <li>Ako se ikone ne pojavljuju, kliknite na neispravan fajl kako biste videli poruke o grešci od PHP</li>
        <li>Ako kod vašeg pregledača istekne vreme za učitavanje, pritisnite dugme za ponovno učitavanje</li>
    </ul>
EOT;
// Translator note: Do not translate the %s placeholders - they are being replaced with icons
$lang_search_new_php['check_all'] = 'Izabrati SVE';
$lang_search_new_php['uncheck_all'] = 'Isključiti SVE';
$lang_search_new_php['no_folders'] = 'Još uvek nema folder u folderu "albumi". Napravite najmanje jedan folder unutar foldera "albumi" i pošaljite svoje fajlove tamo preko FTP. Ne smete da snimate u foldere "userpics" ili "edit", oni su rezervisani za http slanje i interne potrebe.';
$lang_search_new_php['browse_batch_add'] = 'Okruženje sa pregledom'; // cpg1.5
$lang_search_new_php['display_thumbs_batch_add'] = 'Prikazivanje sličica za prikaz'; // cpg1.5
$lang_search_new_php['edit_pics'] = 'Menjanje fajlova';
$lang_search_new_php['edit_properties'] = 'Svojstva albuma';
$lang_search_new_php['view_thumbs'] = 'Pregled sličica';
$lang_search_new_php['add_more_folder'] = 'Grupno dodavanje više fajlova iz foldera %s'; // cpg1.5
}

// ------------------------------------------------------------------------- //
//File send_activation.php
// ------------------------------------------------------------------------- //
if (defined('SEND_ACTIVATION_PHP')) {
$lang_send_activation_php['err_already_logged_in'] = 'Već ste prijavljeni!'; // cpg1.5
$lang_send_activation_php['activation_not_required'] = 'Ovaj sajt ne zahteva aktivaciju imejlom'; // cpg1.5
$lang_send_activation_php['err_unk_user'] = 'Izabrani korisnik ne postoji!'; // cpg1.5
$lang_send_activation_php['resend_act_link'] = 'Poslati ponovo adresu za aktivaciju'; // cpg1.5
$lang_send_activation_php['enter_email'] = 'Unesite svoju imejl adresu'; // cpg1.5
$lang_send_activation_php['submit'] = 'Napred'; // cpg1.5
$lang_send_activation_php['failed_sending_email'] = 'Slanje imejla sa adresom za aktivaciju nije uspelo'; // cpg1.5
$lang_send_activation_php['activation_email_sent'] = 'Imejl sa adresom za aktivaciju je poslat na %s. Molimo proverite svoj imejl, kako biste dovršili proces'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File stat_details.php
// ------------------------------------------------------------------------- //

if (defined('STAT_DETAILS_PHP')) {
$lang_stat_details_php['show_hide'] = 'prikazati/sakriti ovu kolonu';
$lang_stat_details_php['title'] = 'Statistički detalji'; // cpg1.5
$lang_stat_details_php['vote'] = 'Detalji o glasanju';
$lang_stat_details_php['hits'] = 'Detalji o posetama';
$lang_stat_details_php['stats'] = 'Statistika o glasanju';
$lang_stat_details_php['users'] = 'Statistika o korisnicima';
$lang_stat_details_php['sdate'] = 'Datum';
$lang_stat_details_php['rating'] = 'Ocena';
$lang_stat_details_php['search_phrase'] = 'Traženi izrazi';
$lang_stat_details_php['referer'] = 'Poreklo posete';
$lang_stat_details_php['browser'] = 'Pregledač';
$lang_stat_details_php['os'] = 'Operativni sistem';
$lang_stat_details_php['ip'] = 'IP adresa';
$lang_stat_details_php['uid'] = 'korisnik'; // cpg1.5
$lang_stat_details_php['sort_by_xxx'] = 'Poređati po %s';
$lang_stat_details_php['ascending'] = 'uzlazno';
$lang_stat_details_php['descending'] = 'silazno';
$lang_stat_details_php['internal'] = 'unutr.';
$lang_stat_details_php['close'] = 'zatvoriti';
$lang_stat_details_php['hide_internal_referers'] = 'sakriti unutrašnja porekla posete';
$lang_stat_details_php['date_display'] = 'Prikaz datuma';
$lang_stat_details_php['records_per_page'] = 'beleške po strani';
$lang_stat_details_php['submit'] = 'poslati / učitati ponovo';
$lang_stat_details_php['overall_stats'] = 'Opšta statistika'; // cpg1.5
$lang_stat_details_php['stats_by_os'] = 'Statistika po operativnom sistemu'; // cpg1.5
$lang_stat_details_php['number_of_hits'] = 'Broj poseta'; // cpg1.5
$lang_stat_details_php['total'] = 'Ukupno'; // cpg1.5
$lang_stat_details_php['stats_by_browser'] = 'Statistika po pregledaču'; // cpg1.5
$lang_stat_details_php['overall_stats_config'] = 'Opšta podešavanja statistike'; // cpg1.5
$lang_stat_details_php['hit_details'] = 'Čuvati detaljnu statistiku o posetama'; // cpg1.5
$lang_stat_details_php['hit_details_explanation'] = 'Čuvati detaljnu statistiku o posetama'; // cpg1.5
$lang_stat_details_php['vote_details'] = 'Čuvati detaljnu statistiku o glasanju'; // cpg1.5
$lang_stat_details_php['vote_details_explanation'] = 'Čuvati detaljnu statistiku o glasanju'; // cpg1.5
$lang_stat_details_php['empty_hits_table'] = 'Obrisati svu statistiku o posetama'; // cpg1.5
$lang_stat_details_php['empty_hits_table_confirm'] = 'Jeste li potpuno sigurni da hoćete da obrišete SVU evidenciju o posetama za vašu CELU galeriju? Ovaj proces je nepovratan!'; // cpg1.5 // js-alert
$lang_stat_details_php['empty_votes_table'] = 'Obrisati svu statistiku o glasanju'; // cpg1.5
$lang_stat_details_php['empty_votes_table_confirm'] = 'Jeste li potpuno sigurni da hoćete da obrišete SVU evidenciju o glasanju za vašu CELU galeriju? Ovaj proces je nepovratan!'; // cpg1.5 // js-alert
$lang_stat_details_php['submit'] = 'Poslati'; // cpg1.5
$lang_stat_details_php['upd_success'] = 'Coppermine podešavanja su promenjena'; // cpg1.5
$lang_stat_details_php['votes'] = 'glasova'; // cpg1.5
$lang_stat_details_php['reset_votes_individual'] = 'Vratiti izabrane glasove na početak'; // cpg1.5
$lang_stat_details_php['reset_votes_individual_confirm'] = 'Jeste li sigurni da hoćete da obrišete izabrane glasove? Ovaj proces je nepovratan!'; // cpg1.5
$lang_stat_details_php['back_to_intermediate'] = 'Nazad na pregled prelaznih fajlova'; // cpg1.5
$lang_stat_details_php['records_on_page'] = 'broj zapisa - %s broj strana - %s'; // cpg1.5
$lang_stat_details_php['guest'] = 'Gost'; // cpg1.5
$lang_stat_details_php['not_implemented'] = 'još uvek ne postoji'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) {
$lang_upload_php['title'] = 'Slanje fajla';
$lang_upload_php['restrictions'] = 'Zabrane'; // cpg1.5
$lang_upload_php['choose_method'] = 'Izaberite metod za postavljanje'; // cpg1.5
$lang_upload_php['upload_swf'] = 'Više fajlova - pomoću Flash aplikacije (preporučeno)'; // cpg1.5
$lang_upload_php['upload_single'] = 'jednostavan - jedan po jedan fajl'; // cpg1.5
$lang_upload_php['up_instr_1'] = 'Izaberite album iz padajućeg menija';
$lang_upload_php['up_instr_2'] = 'Kliknite na dugme "Pronaći" ispod i idite do fajla koji želite da postavite. Možete da izaberete više fajlova odjednom ako držite pritisnuto dugme Ctrl na tastaturi dok klikćete.';
$lang_upload_php['up_instr_3'] = 'Izaberite još fajlova za postavljanje ponavljajući korak 2';
$lang_upload_php['up_instr_4'] = 'Kliknite na dugme "Nastaviti" pošto završite sa slanjem svih fajlova (dugme će se pojaviti tek kad pošaljete makar jedan fajl).';
$lang_upload_php['up_instr_5'] = 'Bićete prebačeni na stranicu gde možete da upišete detalje o postavljenim fajlovima. Kad to ispunite, pošaljite formular tako što ćete kliknuti na dugme "Potvrdite promene" na dnu formulara.';
$lang_upload_php['restriction_zip'] = 'Poslati ZIP fajlovi će ostati kompresovani, neće biti raspakovani na serveru.';
$lang_upload_php['restriction_filesize'] = 'Veličina svakog fajla koji se šalje na server ne sme da pređe %s.';
$lang_upload_php['reg_instr_1'] = 'Nedozvoljena radnja pri pravljenju formulara.';
$lang_upload_php['no_name'] = 'Ne postoji ime fajla'; // cpg 1.5
$lang_upload_php['no_tmp_name'] = 'Slanje nije uspelo'; // cpg 1.5
$lang_upload_php['no_post'] = 'Slanje POST metodom nije uspelo.';
$lang_upload_php['forb_ext'] = 'Zabranjena ekstenzija fajla.';
$lang_upload_php['exc_php_ini'] = 'Veličina fajla koju dozvoljava php.ini premašena.';
$lang_upload_php['exc_file_size'] = 'Veličina fajla koju dozvoljava CPG premašena.';
$lang_upload_php['partial_upload'] = 'Samo jedan deo poslat.';
$lang_upload_php['no_upload'] = 'Nije došlo do slanja.';
$lang_upload_php['unknown_code'] = 'Nepoznata PHP greška pri slanju.';
$lang_upload_php['impossible'] = 'Premeštanje nemoguće.';
$lang_upload_php['not_image'] = 'Fajl nije slika / neispravan';
$lang_upload_php['not_GD'] = 'Nije GD ekstenzija.';
$lang_upload_php['pixel_allowance'] = 'Visina i/ili širina poslate slike je veća nego što dozvoljavaju podešavanja galerije.';
$lang_upload_php['failure'] = 'Slanje neuspelo';
$lang_upload_php['no_place'] = 'Nije bilo mesta za prethodni fajl.';
$lang_upload_php['max_fsize'] = 'Maksimalna dozvoljena veličina fajla je %s';
$lang_upload_php['picture'] = 'Fajl';
$lang_upload_php['pic_title'] = 'Naslov fajla';
$lang_upload_php['description'] = 'Opis fajla';
$lang_upload_php['keywords_sel'] = 'Izaberite ključnu reč';
$lang_upload_php['err_no_alb_uploadables'] = 'Nažalost nema albuma u kom vam je dozvoljeno da postavite fajlove';
$lang_upload_php['close'] = 'Zatvoriti';
$lang_upload_php['no_keywords'] = 'Nažalost nema dostupnih ključnih reči!';
$lang_upload_php['regenerate_dictionary'] = 'Napraviti rečnik ponovo';
$lang_upload_php['allowed_types'] = 'Dozvoljeno vam je da postavljate fajlove sa sledećim ekstenzijama:'; // cpg1.5
$lang_upload_php['allowed_img_types'] = 'Ekstenzije slika: %s'; // cpg1.5
$lang_upload_php['allowed_mov_types'] = 'Video ekstenzije: %s'; // cpg1.5
$lang_upload_php['allowed_doc_types'] = 'Ekstenzije dokumenata: %s'; // cpg1.5
$lang_upload_php['allowed_snd_types'] = 'Audio extenzije: %s'; // cpg1.5
$lang_upload_php['please_wait'] = 'Molimo sačekajte dok prođe proces slanja - to može malo da potraje'; // cpg1.5
$lang_upload_php['alternative_upload'] = 'Alternativni metod slanja'; // cpg1.5
$lang_upload_php['xp_publish_promote'] = 'Ako koristite Windows XP/Vista, možete takođe da upotrebite Windows XP Uploading Wizard za slanje fajlova koji pruža lakše okruženje direktno u radnom prostoru.'; // cpg1.5
$lang_upload_php['err_js_disabled'] = 'Flash okruženje za slanje nije moglo da se učita. Morate da uključite JavaScript kako biste koristili flash slanje.'; // cpg1.5
$lang_upload_php['err_flash_disabled'] = 'Okruženju za slanje je potrebno mnogo vremena da se učita ili učitavanje nije uspelo. Molimo proverite da li je Flash dodatak uključen i da li je ispravna verzija Flash plejera instalirana.'; // cpg1.5
$lang_upload_php['err_alternate_method'] = 'Ili možete da koristite okruženje za <a href="upload.php?single=1">pojedinačno</a> slanje fajlova.'; // cpg1.5
$lang_upload_php['err_flash_version'] = 'Okruženje za slanje ne može da se učita. Možda treba da instalirate ili osvežite Flash plejer. Posetite <a href="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash">Adobe sajt</a> kako biste preuzeli najnoviji Flash plejer.'; // cpg1.5
$lang_upload_php['flash_loading'] = 'Okruženje za slanje se učitava. Molimo sačekajte...'; // cpg1.5

$lang_upload_swf_php['browse'] = 'Pronaći...'; //cpg1.5
$lang_upload_swf_php['cancel_all'] = 'Odustati od svih slanja'; //cpg1.5
$lang_upload_swf_php['upload_queue'] = 'Red za slanje'; //cpg1.5
$lang_upload_swf_php['files_uploaded'] = 'broj postavljenih fajlova'; //cpg1.5
$lang_upload_swf_php['all_files'] = 'Svi fajlovi'; //cpg1.5
$lang_upload_swf_php['status_pending'] = 'Na čekanju...'; //cpg1.5
$lang_upload_swf_php['status_uploading'] = 'Šalje se...'; //cpg1.5
$lang_upload_swf_php['status_complete'] = 'Završeno.'; //cpg1.5
$lang_upload_swf_php['status_cancelled'] = 'Obustavljeno.'; //cpg1.5
$lang_upload_swf_php['status_stopped'] = 'Zaustavljeno.'; //cpg1.5
$lang_upload_swf_php['status_failed'] = 'Slanje neuspelo.'; //cpg1.5
$lang_upload_swf_php['status_too_big'] = 'Fajl je prevelik.'; //cpg1.5
$lang_upload_swf_php['status_zero_byte'] = 'Ne mogu se slati fajlovi sa 0 bajta.'; //cpg1.5
$lang_upload_swf_php['status_invalid_type'] = 'Neispravan tip fajla.'; //cpg1.5
$lang_upload_swf_php['status_unhandled'] = 'Nepoznata greška'; //cpg1.5
$lang_upload_swf_php['status_upload_error'] = 'Greška pri slanju: '; //cpg1.5
$lang_upload_swf_php['status_server_error'] = 'Greška na serveru (IO)'; //cpg1.5
$lang_upload_swf_php['status_security_error'] = 'Bezbedonosna greška'; //cpg1.5
$lang_upload_swf_php['status_upload_limit'] = 'Premašen limit za slanje.'; //cpg1.5
$lang_upload_swf_php['status_validation_failed'] = 'Identifikacija nije uspela. Slanje obustavljeno.'; //cpg1.5
$lang_upload_swf_php['queue_limit'] = 'Pokušali ste da stavite na slanje previše fajlova.'; //cpg1.5
$lang_upload_swf_php['upload_limit_1'] = 'Dostigli se limit za slanje.'; //cpg1.5
$lang_upload_swf_php['upload_limit_2'] = 'Maksimalan broj fajlova koje možete izabrati je %s'; //cpg1.5
}
// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //
if (defined('USERMGR_PHP')) {
$lang_usermgr_php['memberlist'] = 'Spisak članova';
$lang_usermgr_php['user_manager'] = 'Upravljanje korisnicima';
$lang_usermgr_php['title'] = 'Upravljanje korisnicima';
$lang_usermgr_php['name_a'] = 'Ime uzlazno';
$lang_usermgr_php['name_d'] = 'Ime silazno';
$lang_usermgr_php['group_a'] = 'Grupa uzlazno';
$lang_usermgr_php['group_d'] = 'Grupa silazno';
$lang_usermgr_php['reg_a'] = 'Datum registracije uzlazno';
$lang_usermgr_php['reg_d'] = 'Datum registracije silazno';
$lang_usermgr_php['pic_a'] = 'Broj fajlova uzlazno';
$lang_usermgr_php['pic_d'] = 'Broj fajlova silazno';
$lang_usermgr_php['disku_a'] = 'Prostor na disku uzlazno';
$lang_usermgr_php['disku_d'] = 'Prostor na disku silazno';
$lang_usermgr_php['lv_a'] = 'Poslednja poseta uzlazno';
$lang_usermgr_php['lv_d'] = 'Poslednja poseta silazno';
$lang_usermgr_php['sort_by'] = 'Način ređanja korisnika';
$lang_usermgr_php['err_no_users'] = 'Tabela sa korisnicima je prazna!';
$lang_usermgr_php['err_edit_self'] = 'Ne možete da menjate sopstveni profil. Koristite vezu \'Moj profil\' za to';
$lang_usermgr_php['with_selected'] = 'Izabrane korisnike:';
$lang_usermgr_php['delete_files_no'] = 'zadržati javne fajlove (ali kao anonimne)';
$lang_usermgr_php['delete_files_yes'] = 'izbrisati i javne fajlove';
$lang_usermgr_php['delete_comments_no'] = 'zadržati komentare (ali kao anonimne)';
$lang_usermgr_php['delete_comments_yes'] = 'izbrisati i komentare';
$lang_usermgr_php['activate'] = 'Aktivirati';
$lang_usermgr_php['deactivate'] = 'Deaktivirati';
$lang_usermgr_php['reset_password'] = 'Vratiti lozinku';
$lang_usermgr_php['change_primary_membergroup'] = 'Promeniti glavnu grupu članova';
$lang_usermgr_php['add_secondary_membergroup'] = 'Dodati drugu grupu članova';
$lang_usermgr_php['name'] = 'Korisničko ime';
$lang_usermgr_php['group'] = 'Grupa';
$lang_usermgr_php['inactive'] = 'Neaktivan';
$lang_usermgr_php['operations'] = 'Radnje';
$lang_usermgr_php['pictures'] = 'Fajlovi';
$lang_usermgr_php['disk_space_used'] = 'Prostor na disku';
$lang_usermgr_php['disk_space_quota'] = 'Kvota'; // cpg1.5
$lang_usermgr_php['registered_on'] = 'Registracija';
$lang_usermgr_php['last_visit'] = 'Poslednja poseta';
$lang_usermgr_php['u_user_on_p_pages'] = 'broj korisnika - %d broj strana - %d';
$lang_usermgr_php['confirm_del'] = 'Jeste li sigurni da hoćete da OBRIŠETE ovog korisnika?\\nSvi njegovi albumi i fajlovi će takođe biti izbrisani.'; // js-alert
$lang_usermgr_php['mail'] = 'POŠTA';
$lang_usermgr_php['err_unknown_user'] = 'Izabrani korisnik ne postoji!';
$lang_usermgr_php['modify_user'] = 'Menjati korisnika';
$lang_usermgr_php['notes'] = 'Napomena';
$lang_usermgr_php['note_list'] = 'Ako ne želite da promenite trenutnu lozinku, ostavite polje "lozinka" prazno';
$lang_usermgr_php['password'] = 'Lozinka';
$lang_usermgr_php['user_active'] = 'Korisnik je aktivan';
$lang_usermgr_php['user_group'] = 'Korisnička grupa';
$lang_usermgr_php['user_email'] = 'Imejl korisnika';
$lang_usermgr_php['user_web_site'] = 'Sajt korisnika';
$lang_usermgr_php['create_new_user'] = 'Napraviti novog korisnika';
$lang_usermgr_php['user_location'] = 'Lokacija korisnika';
$lang_usermgr_php['user_interests'] = 'Interesovanja korisnika';
$lang_usermgr_php['user_occupation'] = 'Zanimanje korisnika';
$lang_usermgr_php['user_profile1'] = '$user_profile1';
$lang_usermgr_php['user_profile2'] = '$user_profile2';
$lang_usermgr_php['user_profile3'] = '$user_profile3';
$lang_usermgr_php['user_profile4'] = '$user_profile4';
$lang_usermgr_php['user_profile5'] = '$user_profile5';
$lang_usermgr_php['user_profile6'] = '$user_profile6';
$lang_usermgr_php['latest_upload'] = 'Skorije postavljeno';
$lang_usermgr_php['no_latest_upload'] = 'Nema postavljenih fajlova'; // cpg1.5
$lang_usermgr_php['last_comments'] = 'Poslednji komentari'; // cpg1.5
$lang_usermgr_php['no_last_comments'] = 'Nema postavljenih komentara'; // cpg1.5
$lang_usermgr_php['comments'] = 'Komentari'; // cpg1.5
$lang_usermgr_php['never'] = 'nikad';
$lang_usermgr_php['search'] = 'Pretraga korisnika';
$lang_usermgr_php['submit'] = 'Poslati';
$lang_usermgr_php['search_submit'] = 'Napred!';
$lang_usermgr_php['search_result'] = 'Rezultati pretrage za: ';
$lang_usermgr_php['alert_no_selection'] = 'Morate prvo da izaberete najmanje jednog korisnika!'; // js-alert
$lang_usermgr_php['select_group'] = 'Izabrati grupu';
$lang_usermgr_php['groups_alb_access'] = 'Dozvole albuma po grupama';
$lang_usermgr_php['category'] = 'Kategorija';
$lang_usermgr_php['modify'] = 'Promeniti?';
$lang_usermgr_php['group_no_access'] = 'Ova grupa nema poseban pristup';
$lang_usermgr_php['notice'] = 'Obaveštenje';
$lang_usermgr_php['group_can_access'] = 'Albumi kojima pristup ima samo "%s"';
$lang_usermgr_php['send_login_data'] = 'Poslati podatke o prijavi ovom korisniku (lozinka će biti poslata imejlom)'; // cpg1.5
$lang_usermgr_php['send_login_email_subject'] = 'Informacije o vašem novom nalogu'; // cpg1.5
$lang_usermgr_php['failed_sending_email'] = 'Imejl sa podacima o prijavi ne može biti poslat!'; // cpg1.5
$lang_usermgr_php['view_profile'] = 'Videti profil'; // cpg1.5
$lang_usermgr_php['edit_profile'] = 'Menjati profil'; // cpg1.5
$lang_usermgr_php['ban_user'] = 'Zabraniti pristup'; // cpg1.5
$lang_usermgr_php['user_is_banned'] = 'Korisniku je zabranjen pristup'; // cpg1.5
$lang_usermgr_php['status'] = 'Status'; // cpg1.5
$lang_usermgr_php['status_active'] = 'aktivan'; // cpg1.5
$lang_usermgr_php['status_inactive'] = 'neaktivan'; // cpg1.5
$lang_usermgr_php['total'] = 'Ukupno'; // cpg1.5
$lang_usermgr_php['send_login_data_email'] = <<< EOT
Novi nalog je napravljen za vas na sajtu {SITE_NAME}.

Sada se možete prijaviti na <a href="{SITE_LINK}">{SITE_LINK}</a> korisničkim imenom "{USER_NAME}" i lozinkom "{USER_PASS}"


Pozdrav,

Uprava sajta {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File update.php
// ------------------------------------------------------------------------- //
if (defined('UPDATE_PHP')) {
$lang_update_php['title'] = 'Ažuriranje'; // cpg1.5
$lang_update_php['welcome_updater'] = 'Dobrodošli u ažuriranje Coppermine programa'; // cpg1.5
$lang_update_php['could_not_authenticate'] = 'Identifikacija nije uspela'; // cpg1.5
$lang_update_php['provide_admin_account'] = 'Molimo dostavite vaše detalje Coppermine administratorskog naloga ili podatke MySQL naloga'; // cpg1.5
$lang_update_php['try_again'] = 'Pokušajte ponovo'; // cpg1.5
$lang_update_php['mysql_connect_error'] = 'Nije uspelo uspostavljanje veze sa MySQL'; // cpg1.5
$lang_update_php['mysql_database_error'] = 'MySQL nije mogao da nađe bazu podataka %s'; // cpg1.5
$lang_update_php['mysql_said'] = 'Poruka od MySQL'; // cpg1.5
$lang_update_php['check_config_file'] = 'Molimo proverite detalje MySQL u %s'; // cpg1.5
$lang_update_php['performing_database_updates'] = 'Ažuriranje baze podataka se obavlja'; // cpg1.5
$lang_update_php['performing_file_updates'] = 'Ažuriranje fajlova se obavlja'; // cpg1.5
$lang_update_php['already_done'] = 'Urađeno ranije'; // cpg1.5
$lang_update_php['password_encryption'] = 'Šifrovanje lozinki'; // cpg1.5
$lang_update_php['alb_password_encryption'] = 'Šifrovanje lozinki albuma'; // cpg1.5
$lang_update_php['category_tree'] = 'Struktura kategorija'; // cpg1.5
$lang_update_php['authentication_needed'] = 'Potrebna identifikacija'; // cpg1.5
$lang_update_php['username'] = 'Korisničko ime'; // cpg1.5
$lang_update_php['password'] = 'Lozinka'; // cpg1.5
$lang_update_php['update_completed'] = 'Ažuriranje završeno'; // cpg1.5
$lang_update_php['check_versions'] = 'Preporučljivo je da %sproverite verzije fajlova%s ako ste upravo zamenili staru verziju Coppermine'; // cpg1.5 // Leave the %s untouched when translating - it wraps the link
$lang_update_php['start_page'] = 'Ako niste (ili ne želite da proverite), možete ići na %spočetnu stranu galerije%s'; // cpg1.5 // Leave the %s untouched when translating - it wraps the link
$lang_update_php['errors_encountered'] = 'Pojavile su se sledeće greške koje najpre moraju biti ispravljene'; // cpg1.5
$lang_update_php['delete_file'] = 'Brisanje %s'; // cpg1.5
$lang_update_php['could_not_delete'] = 'Brisanje nije uspelo zbog nedostatka dozvola. Obrišite fajl ručno!'; // cpg1.5
$lang_update_php['rename_file'] = 'Menjanje imena iz %s u %s'; // cpg1.5
$lang_update_php['could_not_rename'] = 'Menjanje imena nije uspelo zbog nedostatka dozvola. Promenite ime fajla ručno!'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //
if (defined('UTIL_PHP')) {
$lang_util_php['title'] = 'Poslovi administratora'; // cpg1.5
$lang_util_php['file'] = 'Fajl';
$lang_util_php['problem'] = 'Problem';
$lang_util_php['status'] = 'Status';
$lang_util_php['title_set_to'] = 'naslov promenjen u';
$lang_util_php['submit_form'] = 'poslati';
$lang_util_php['titles_updated'] = 'Broj promenjenih naslova - %s.'; // cpg1.5
$lang_util_php['updated_successfully'] = 'uspešno promenjeno'; // cpg1.5
$lang_util_php['error_create'] = 'GREŠKA pri pravljenju';
$lang_util_php['continue'] = 'Obraditi još fajlova'; // cpg1.5
$lang_util_php['main_success'] = 'Fajl %s je uspešno upotrebljen kao glavni fajl';
$lang_util_php['error_rename'] = 'Greška pri menjanju imena %s u %s';
$lang_util_php['error_not_found'] = 'Fajl %s nije pronađen';
$lang_util_php['back'] = 'nazad na početak poslova administratora'; // cpg1.5
$lang_util_php['thumbs_wait'] = 'Menjanje sličica i/ili smanjenih slika, molimo sačekajte...';
$lang_util_php['thumbs_continue_wait'] = 'Nastavak menjanja sličica i/ili smanjenih slika...';
$lang_util_php['titles_wait'] = 'Menjanje naslova, molimo sačekajte...';
$lang_util_php['delete_wait'] = 'Brisanje naslova, molimo sačekajte...';
$lang_util_php['replace_wait'] = 'Brisanje originala i postavljanje smanjenih slika umesto njih, molimo sačekajte...';
$lang_util_php['update'] = 'Menjanje sličica i/ili smanjenih slika';
$lang_util_php['update_what'] = 'Šta treba da bude promenjeno';
$lang_util_php['update_thumb'] = 'Samo sličice';
$lang_util_php['update_pic'] = 'Samo smanjene slike';
$lang_util_php['update_both'] = 'I sličice i smanjene slike';
$lang_util_php['update_number'] = 'Broj slika koje se obrađuju po jednom kliku';
$lang_util_php['update_option'] = '(Ako imate problema sa procesom, izaberite manju vrednost ovde)';
$lang_util_php['update_missing'] = 'Menjati samo fajlove koji nedostaju'; // cpg1.5
$lang_util_php['filename_title'] = 'Ime fajla &rArr; naslov fajla';
$lang_util_php['filename_how'] = 'Kako naslov fajla treba da bude promenjen';
$lang_util_php['filename_remove'] = 'Ukloniti ekstenziju (.jpg ili drugu) i zameniti _ (donju crtu) razmakom'; // cpg1.5
$lang_util_php['filename_euro'] = 'Promeniti 2003_11_23_13_20_20.jpg u 23/11/2003 13:20';
$lang_util_php['filename_us'] = 'Promeniti 2003_11_23_13_20_20.jpg u 11/23/2003 13:20';
$lang_util_php['filename_time'] = 'Promeniti 2003_11_23_13_20_20.jpg u 13:20';
$lang_util_php['notitle'] = 'Primeniti samo na fajlove sa praznim naslovima'; // cpg1.5
$lang_util_php['delete_title'] = 'Obrisati naslove fajlova';
$lang_util_php['delete_title_explanation'] = 'Ovo će obrisati sve naslove na fajlovima u albumu koji odredite.';
$lang_util_php['delete_original'] = 'Obrisati slike u originalnoj veličini';
$lang_util_php['delete_original_explanation'] = 'Ovo će obrisati slike u punoj veličini.';
$lang_util_php['delete_intermediate'] = 'Obrisati prelazne slike';
$lang_util_php['delete_intermediate_explanation1'] = 'Ovo će obrisati prelazne (normalne) slike.'; // cpg1.5
$lang_util_php['delete_intermediate_explanation2'] = 'Koristite ovo kako biste oslobodili prostor na disku ako ste isključili \'Praviti prelazne slike\' posle dodavanja u podešavanjima.'; // cpg1.5
$lang_util_php['delete_intermediate_check'] = 'Podešavanje \'Praviti prelazne slike\' je trenutno %s.'; // cpg1.5
$lang_util_php['no_image'] = 'Fajl %s je preskočen jer se ne radi o slici.'; // cpg1.5
$lang_util_php['enabled'] = 'uključeno'; // cpg1.5
$lang_util_php['disabled'] = 'isključeno'; // cpg1.5
$lang_util_php['delete_replace'] = 'Ovo briše originalne slike i menja ih smanjenim verzijama';
$lang_util_php['titles_deleted'] = 'Svi naslovi u navedenim albumima su uklonjeni';
$lang_util_php['deleting_intermediates'] = 'Brisanje prelaznih slika, molimo sačekajte...';
$lang_util_php['searching_orphans'] = 'Pretraga napuštenih fajlova, molimo sačekajte...';
$lang_util_php['delete_orphans'] = 'Obrisati komentare na fajlovima koji nedostaju';
$lang_util_php['delete_orphans_explanation'] = 'Ovo će pronaći i omogućiti vam da obrišete sve komentare povezane sa fajlovima koji nisu više u galeriji.<br />Proverava sve albume.';
$lang_util_php['update_full_normal_thumb'] = 'Sve: u punoj veličini, smanjene i sličice'; // cpg1.5
$lang_util_php['update_full_normal'] = 'I smanjene i u punoj veličini (ako je originalan primerak dostupan)'; // cpg1.5
$lang_util_php['update_full'] = 'Samo u punoj veličini (ako je originalan primerak dostupan)'; // cpg1.5
$lang_util_php['delete_back'] = 'Obrisati rezervnu originalnu sliku za slike sa vodenim žigom'; // cpg1.5
$lang_util_php['delete_back_explanation'] = 'Ovo će obrisati rezervnu sliku. Uštedećete na prostoru, ali nećete više moći da uklonite vodeni žig!!! Posle ovog, vodeni žig je trajan.'; // cpg1.5
$lang_util_php['finished'] = '<br />Završeno menjanje sličica/slika!<br />'; // cpg1.5
$lang_util_php['autorefresh'] = 'Automatsko učitavanje (ne morate više da klikćete na dugme za nastavak)'; // cpg1.5
$lang_util_php['refresh_db'] = 'Učitati ponovo dimenzije i informacije o veličini.';
$lang_util_php['refresh_db_explanation'] = 'Ovo će ponovo učitati veličine fajlova i dimenzije. Koristite ovo ako se kvota ne prikazuje tačno ili ako ste ručno menjali fajlove.';
$lang_util_php['reset_views'] = 'Vratiti broj pregleda na početak';
$lang_util_php['reset_views_explanation'] = 'Vraća broj pregleda za sve fajlove na nulu u određenom albumu.';
$lang_util_php['reset_success'] = 'Vraćanje uspešno'; // cpg1.5
$lang_util_php['orphan_comment'] = 'pronađeni napušteni komentari';
$lang_util_php['delete_all'] = 'Obrisati sve';
$lang_util_php['delete_all_orphans'] = 'Obrisati sve napuštene?';
$lang_util_php['comment'] = 'Komentar: ';
$lang_util_php['nonexist'] = 'povezan sa nepostojećim fajlom # ';
$lang_util_php['delete_old'] = 'Obrisati fajlove starije od datog broja dana'; // cpg1.5
$lang_util_php['delete_old_explanation'] = 'Ovo će obrisati fajlove koji su stariji od broja dana koji date (u punoj veličini, prelazne, sličice). Koristite ovu mogućnost da oslobodite prostor na disku.'; // cpg1.5
$lang_util_php['delete_old_warning'] = 'Upozorenje: fajlovi koje odredite biće obrisani zauvek, bez daljeg upozorenja!'; // cpg1.5
$lang_util_php['deleting_old'] = 'Brisanje starih slika, molimo sačekajte...'; // cpg1.5
$lang_util_php['older_than'] = 'Brisati fajlove starije od %s dana'; // cpg1.5
$lang_util_php['del_orig'] = 'Originalni fajl %s je uspešno izbrisan'; // cpg1.5
$lang_util_php['del_intermediate'] = 'Prelazna slika %s je uspešno obrisana'; // cpg1.5
$lang_util_php['del_thumb'] = 'Sličica %s je uspešno obrisana'; // cpg1.5
$lang_util_php['del_error'] = 'Greška u brisanju fajla %s!'; // cpg1.5
$lang_util_php['affected_records'] = 'broj promenjenih zapisa - %s.'; // cpg1.5
$lang_util_php['all_albums'] = 'Svi albumi'; // cpg1.5
$lang_util_php['update_result'] = 'Rezultati menjanja'; // cpg1.5
$lang_util_php['incorrect_filesize'] = 'Ukupna veličina fajla je netačna'; // cpg1.5
$lang_util_php['database'] = 'Baza podataka: '; // cpg1.5
$lang_util_php['bytes'] = ' bajtova'; // cpg1.5
$lang_util_php['actual'] = 'Stvarno: '; // cpg1.5
$lang_util_php['updated'] = 'Promenjeno'; // cpg1.5
$lang_util_php['filesize_error'] = 'Nije moguće dobiti veličinu fajla (možda fajl nije ispravan), odustajanje....'; // cpg1.5
$lang_util_php['skipped'] = 'Otkazano'; // cpg1.5
$lang_util_php['incorrect_dimension'] = 'Dimenzije su netačne'; // cpg1.5
$lang_util_php['dimension_error'] = 'Nije moguće dobiti dimenzije, odustajanje....'; // cpg1.5
$lang_util_php['cannot_fix'] = 'Popravka nije moguća'; // cpg1.5
$lang_util_php['fullpic_error'] = 'Fajl %s ne postoji!'; // cpg1.5
$lang_util_php['no_prob_detect'] = 'Problemi nisu otkriveni'; // cpg1.5
$lang_util_php['no_prob_found'] = 'Problemi nisu nađeni.'; // cpg1.5
$lang_util_php['keyword_convert'] = 'Promeniti odvajanje ključnih reči'; // cpg1.5
$lang_util_php['keyword_from_to'] = 'Promeniti odvajanje ključnih reči sa %s u %s'; // cpg1.5
$lang_util_php['keyword_set'] = 'Namestiti novi pojam za odvajanje ključnih reči galerije'; // cpg1.5
$lang_util_php['keyword_replace_before'] = 'Pre menjanja, promeniti %s u %s'; // cpg1.5
$lang_util_php['keyword_replace_after'] = 'Posle menjanja, promeniti %s u %s'; // cpg1.5
$lang_util_php['keyword_replace_values'] = array('_'=>'donja crta', '-'=>'crta', '~'=>'tilda'); // cpg1.5
$lang_util_php['keyword_explanation'] = 'Ovo će promeniti odvajanje ključnih reči za sve vaše fajlove sa jednog pojma u drugi. Za više detalja, videti dokumentaciju za pomoć.'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File versioncheck.php
// ------------------------------------------------------------------------- //
if (defined('VERSIONCHECK_PHP')) {
$lang_versioncheck_php['title'] = 'Provera verzije';
$lang_versioncheck_php['versioncheck_output'] = 'Rezultat provere verzije';
$lang_versioncheck_php['file'] = 'fajl';
$lang_versioncheck_php['folder'] = 'folder';
$lang_versioncheck_php['outdated'] = 'starije od %s';
$lang_versioncheck_php['newer'] = 'novije od %s';
$lang_versioncheck_php['modified'] = 'promenjeno';
$lang_versioncheck_php['not_modified'] = 'nepromenjeno'; // cpg1.5
$lang_versioncheck_php['needs_change'] = 'treba da se promeni';
$lang_versioncheck_php['review_permissions'] = 'Proveriti dozvole';
$lang_versioncheck_php['inaccessible'] = 'Fajl nije dostupan';
$lang_versioncheck_php['review_version'] = 'Vaš fajl je zastareo';
$lang_versioncheck_php['review_dev_version'] = 'Vaš fajl je noviji od očekivanog';
$lang_versioncheck_php['review_modified'] = 'Fajl možda nije ispravan (ili ste ga namerno promenili)';
$lang_versioncheck_php['review_missing'] = '%s nedostaje ili nije dostupan';
$lang_versioncheck_php['existing'] = 'postoji';
$lang_versioncheck_php['review_removed_existing'] = 'Fajl mora biti uklonjen iz razloga bezbednosti';
$lang_versioncheck_php['counter'] = 'Brojač';
$lang_versioncheck_php['type'] = 'Tip';
$lang_versioncheck_php['path'] = 'Putanja';
$lang_versioncheck_php['missing'] = 'Nedostaje';
$lang_versioncheck_php['permissions'] = 'Dozvole';
$lang_versioncheck_php['version'] = 'Verzija';
$lang_versioncheck_php['revision'] = 'Revizija';
$lang_versioncheck_php['modified'] = 'Promenjeno';
$lang_versioncheck_php['comment'] = 'Komentar';
$lang_versioncheck_php['help'] = 'Pomoć';
$lang_versioncheck_php['repository_link'] = 'Veza sa skladištem';
$lang_versioncheck_php['browse_corresponding_page_subversion'] = 'Pronaći stranicu koja odgovara ovom fajlu u skladištu podverzije projekta';
$lang_versioncheck_php['mandatory'] = 'neophodno';
$lang_versioncheck_php['mandatory_missing'] = 'Neophodan fajl nedostaje'; // cpg1.5
$lang_versioncheck_php['optional'] = 'nije obavezno';
$lang_versioncheck_php['removed'] = 'uklonjeno'; // cpg1.5
$lang_versioncheck_php['options'] = 'Opcije';
$lang_versioncheck_php['display_output'] = 'Način prikaza';
$lang_versioncheck_php['on_screen'] = 'Kompletan prikaz';
$lang_versioncheck_php['text_only'] = 'Samo tekst';
$lang_versioncheck_php['errors_only'] = 'Prikazati samo potencijalne greške';
$lang_versioncheck_php['hide_images'] = 'Sakriti slike'; // cpg1.5
$lang_versioncheck_php['no_modification_check'] = 'Ne proveravati promenjene fajlove'; // cpg1.5
$lang_versioncheck_php['do_not_connect_to_online_repository'] = 'Ne povezivati se sa dostupnim skladištem';
$lang_versioncheck_php['online_repository_explain'] = 'preporučljivo samo ako povezivanje ne uspe';
$lang_versioncheck_php['submit'] = 'poslati / učitati ponovo';
$lang_versioncheck_php['select_all'] = 'Izabrati sve'; // js-alert
$lang_versioncheck_php['files_folder_processed'] = 'Prikaz %s stavki iz %s obrađenih foldera/fajlova sa %s potencijalnih problema';
$lang_versioncheck_php['read'] = 'Učitavanje'; // cpg1.5
$lang_versioncheck_php['write'] = 'Upisivanje'; // cpg1.5
$lang_versioncheck_php['warning'] = 'Upozorenje'; // cpg1.5
$lang_versioncheck_php['not_applicable'] = 'n/a'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File view_log.php
// ------------------------------------------------------------------------- //
if (defined('VIEWLOG_PHP')) {
$lang_viewlog_php['delete_all'] = 'Obrisati sve zapise';
$lang_viewlog_php['delete_this'] = 'Obrisati ovaj zapis';
$lang_viewlog_php['view_logs'] = 'Pregledati zapise';
$lang_viewlog_php['no_logs'] = 'Nijedan zapis nije napravljen.';
$lang_viewlog_php['last_updated'] = 'poslednje menjanje'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File xp_publish.php
// ------------------------------------------------------------------------- //
if (defined('XP_PUBLISH_PHP')) {
$lang_xp_publish_php['title'] = 'XP Web Publishing Wizard';
$lang_xp_publish_php['client_header'] = 'XP Web Publishing Wizard Client'; // cpg1.5
$lang_xp_publish_php['requirements'] = 'Tehnički zahtevi'; // cpg1.5
$lang_xp_publish_php['windows_xp'] = 'Windows XP / Vista'; // cpg1.5
$lang_xp_publish_php['no_windows_xp'] = 'Izgleda da koristite neki drugi nepodržani operativni sistem'; // cpg1.5
$lang_xp_publish_php['no_os_detect'] = 'Prepoznavanje vašeg operativnog sistema nije uspelo'; // cpg1.5
$lang_xp_publish_php['requirement_http_upload'] = 'Ispravan Coppermine na kom http slanje radi'; // cpg1.5
$lang_xp_publish_php['requirement_ie'] = 'Microsoft Internet Explorer'; // cpg1.5
$lang_xp_publish_php['requirement_permissions'] = 'Morate da imate dozvolu od administratora galerije da šaljete'; // cpg1.5
$lang_xp_publish_php['requirement_login'] = 'Morate da budete prijavljeni kako biste slali'; // cpg1.5
$lang_xp_publish_php['no_ie'] = 'Izgleda da koristite neki drugi nepodržan pregledač'; // cpg1.5
$lang_xp_publish_php['no_browser_detect'] = 'Prepoznavanje vašeg pregledača nije uspelo'; // cpg1.5
$lang_xp_publish_php['no_gallery_name'] = 'Treba da upišete ime galerije u podešavanjima'; // cpg1.5
$lang_xp_publish_php['no_gallery_description'] = 'Treba da upišete opis galerije u podešavanjima'; // cpg1.5
$lang_xp_publish_php['howto_install'] = 'Kako istalirati'; // cpg1.5
$lang_xp_publish_php['install_right_click'] = 'Kliknite desnim dugmetom na %sovu vezu%s i izaberite &quot;save target as...&quot(snimiti);'; // cpg1.5 // translator note: don't replace the %s - that placeholder token needs to go untranslated
$lang_xp_publish_php['install_save'] = 'Snimite fajl na svoj disk. Kad ga snimate, proverite da li je ponuđeno ime <tt>cpg_###.reg</tt> (### je numerički kod za vreme). Ako je potrebno, upišite to ime (ne dirajte brojeve)'; // cpg1.5
$lang_xp_publish_php['install_execute'] = 'Kad se snimanje završi, pokrenite fajl dvostrukim klikom kako biste registrovali server pomoću alata web publishing wizard'; // cpg1.5
$lang_xp_publish_php['usage'] = 'Korišćenje'; // cpg1.5
$lang_xp_publish_php['select_files'] = 'U Windows Exploreru, izaberite fajlove koje hoćete da pošaljete'; // cpg1.5
$lang_xp_publish_php['display_tasks'] = 'Proverite da se u levoj traci Explorera ne prikazuju folderi'; // cpg1.5
$lang_xp_publish_php['publish_on_the_web'] = 'kliknite na &quot;Publish xxx on the web&quot; (objaviti xxx na mreži) u levom delu prozora'; // cpg1.5
$lang_xp_publish_php['confirm_selection'] = 'Potvrdite izbor fajla'; // cpg1.5
$lang_xp_publish_php['select_service'] = 'U spisku servisa koji se pojavi, izaberite foto galeriju (pojaviće se ime galerije)'; // cpg1.5
$lang_xp_publish_php['enter_login'] = 'Ako je potrebno, unesite informacije za prijavu'; // cpg1.5
$lang_xp_publish_php['select_album'] = 'Izaberite album za vaše slike ili napravite novi'; // cpg1.5
$lang_xp_publish_php['next'] = 'Kliknite na &quot;next&quot (dalje);'; // cpg1.5
$lang_xp_publish_php['upload_starts'] = 'Postavljanje slika bi trebalo da počne'; // cpg1.5
$lang_xp_publish_php['upload_completed'] = 'Kad se završi, proverite u galeriji da li su slike ispravno poslate'; // cpg1.5
$lang_xp_publish_php['welcome'] = 'Dobrodošli <strong>%s</strong>,';
$lang_xp_publish_php['need_login'] = 'Morate da se prijavite u galeriju uz pomoć Internet Explorera pre nego što počnete da koristite ovu mogućnost.<p/><p>Kad se prijavljujete, ne zaboravite da uključite opciju &quot;Zapamtiti&quot; ako postoji.';
$lang_xp_publish_php['no_alb'] = 'Nažalost, nema albuma u kom vam je dozvoljeno da šaljete slike pomoću ovog alata.';
$lang_xp_publish_php['upload'] = 'Pošaljite slike u postojeći album';
$lang_xp_publish_php['create_new'] = 'Napravite novi album za slike';
$lang_xp_publish_php['category'] = 'Kategorija';
$lang_xp_publish_php['new_alb_created'] = 'Vaš novi album &quot;<strong>%s</strong>&quot; je napravljen.';
$lang_xp_publish_php['continue'] = 'Kliknite na &quot;Dalje&quot; da biste započeli slanje slika';
$lang_xp_publish_php['link'] = '';
}

// ------------------------------------------------------------------------- //
// Core plugins
// ------------------------------------------------------------------------- //
if (defined('CORE_PLUGIN')) {
$lang_plugin_php['usergal_alphatabs_config_name'] = 'Abecedne kartice sa korisničkim galerijama'; // cpg1.5
$lang_plugin_php['usergal_alphatabs_config_description'] = 'Šta ovo radi: prikazuje kartice od A do Z na vrhu korisničkih galerija na koje korisnici mogu da kliknu i direktno se prebace na stranicu koja prikazuje sve korisničke galerije korisnika čije korisničko ime počinje tim slovom. Preporučuje se da koristite dodatak ako imate veoma veliki broj korisničkih galerija.'; // cpg1.5
$lang_plugin_php['usergal_alphatabs_jump_by_username'] = 'Prebacivanje po korisničkom imenu'; // cpg1.5
$lang_plugin_php['sample_config_name'] = 'Probni dodatak'; // cpg1.5
$lang_plugin_php['sample_config_description'] = 'Ovo je probni dodatak. Ne radi ništa posebno korisno, napravljen je samo da pokaže šta se sve može dodacima i kako ih programirati. Kad je uključen, prikazaće neki probni tekst kao crven.'; // cpg1.5
$lang_plugin_php['sample_plugin_documentation'] = 'Dokumentacija dodatka'; // cpg1.5
$lang_plugin_php['sample_plugin_support'] = 'Podrška dodatka'; // cpg1.5
$lang_plugin_php['sample_install_explain'] = 'Unesite korisničko ime (\'foo\') i lozinku (\'bar\') kako biste instalirali'; // cpg1.5
$lang_plugin_php['sample_install_username'] = 'Korisničko ime'; // cpg1.5
$lang_plugin_php['sample_install_password'] = 'Lozinka'; // cpg1.5
$lang_plugin_php['sample_output'] = 'Ovo je uzorak teksta koji je proizveo ovaj dodatak'; // cpg1.5
$lang_plugin_php['opensearch_config_name'] = 'OpenSearch'; // cpg1.5
$lang_plugin_php['opensearch_config_description'] = 'Primena skripta <a href="http://www.opensearch.org/" rel="external" class="external">OpenSearch</a> za Coppermine.<br />Kad je uključen, posetioci će moći da dodaju vašu galeriju u traku za pretraživanje u njihovim pregledačima.'; // cpg1.5
$lang_plugin_php['opensearch_search'] = 'Tražiti %s'; // cpg1.5
$lang_plugin_php['opensearch_extra'] = 'Možda biste hteli da stavite kratak opis funkcije ovog dodatka na sajt'; // cpg1.5
$lang_plugin_php['opensearch_failed_to_open_file'] = 'Otvaranje fajla %s nije uspelo - proverite dozvole'; // cpg1.5
$lang_plugin_php['opensearch_failed_to_write_file'] = 'Upisivanje u fajl %s nije uspelo - proverite dozvole'; // cpg1.5
$lang_plugin_php['opensearch_form_header'] = 'Unesite detalje koji će se koristiti za fajl sa opisom'; // cpg1.5
$lang_plugin_php['opensearch_gallery_url'] = 'URL adresa galerije (mora biti tačna)'; // cpg1.5
$lang_plugin_php['opensearch_display_name'] = 'Ime, onako kako se prikazuje u pregledaču'; // cpg1.5
$lang_plugin_php['opensearch_description'] = 'Opis'; // cpg1.5
$lang_plugin_php['opensearch_character_limit'] = 'Ograničenje u broju znakova %s'; // cpg1.5
$lang_plugin_php['onlinestats_description'] = 'Prikazuje blok na svakoj strani galerije u koji je upisan broj korisnika i gostiju trenutno prisutnih.';
$lang_plugin_php['onlinestats_name'] = 'Ko je prisutan?';
$lang_plugin_php['onlinestats_config_extra'] = 'Kako bi se uključio ovaj dodatak (da stvarno prikazuje statistiku prisutnih), pojam "onlinestats" (odvojen kosom crtom) je dodat u "sadržaj glavne strane" u <a href="admin.php">Coppermine podešavanjima</a> u sekciji "Prikaz liste albuma". Ovo podešavanje sad otprilike izgleda ovako "breadcrumb/catlist/alblist/onlinestats". Da biste promenili položaj ovog bloka, pomerajte pojam "onlinestats" unutar ovog polja.';
$lang_plugin_php['onlinestats_config_install'] = 'Ovaj dodatak postavlja dodatne zahteve bazi podataka pri svakom izvršenju, pri čemu koristi CPU i zauzima resurse. Ako je vaša Coppermine galerija spora ili ima mnogo korisnika, ne bi trebalo da ga koristite.';
$lang_plugin_php['onlinestats_we_have_reg_member'] = 'Prisutan je %s registrovani korisnik';
$lang_plugin_php['onlinestats_we_have_reg_members'] = ' Prisutno je %s registrovanih korisnika';
$lang_plugin_php['onlinestats_most_recent'] = 'Poslednji registrovan korisnik je %s';
$lang_plugin_php['onlinestats_is'] = 'Ukupno je prisutan %s korisnik';
$lang_plugin_php['onlinestats_are'] = 'Ukupno je prisutno %s korisnika';
$lang_plugin_php['onlinestats_and'] = 'i';
$lang_plugin_php['onlinestats_reg_member'] = '%s registrovani korisnik';
$lang_plugin_php['onlinestats_reg_members'] = '%s registrovanih korisnika';
$lang_plugin_php['onlinestats_guest'] = '%s gost';
$lang_plugin_php['onlinestats_guests'] = '%s gosta';
$lang_plugin_php['onlinestats_record'] = 'Najviše ikad prisutnih korisnika odjednom: %s, %s';
$lang_plugin_php['onlinestats_since'] = 'Registrovani korisnici koji su bili prisutni u poslednjih %s minuta: %s';
$lang_plugin_php['onlinestats_config_text'] = 'Koliko dugo hoćete da prikazujete korisnike kao prisutne pre nego što budu prikazani kao odsutni?';
$lang_plugin_php['onlinestats_minute'] = 'minuta';
$lang_plugin_php['onlinestats_remove'] = 'Obrisati tabelu koja je korišćena da bi se sačuvali podaci o prisutnima?';
$lang_plugin_php['link_target_name'] = 'Otvaranje veza';
$lang_plugin_php['link_target_description'] = 'Menja način na koji se otvaraju spoljne veze: kad je ovaj dodatak uključen, sve veze koje sadrže atribut rel="external" otvoriće se u novom prozoru (umesto u istom prozoru).';
$lang_plugin_php['link_target_extra'] = 'Ovaj dodatak uglavnom utiče na "Powered by Coppermine" vezu na dnu sadržaja galerije.';
$lang_plugin_php['link_target_recommendation'] = 'Preporučuje se da ne koristite ovaj dodatak kako biste izbegli da se ponašate zapovednički prema korisnicima: otvaranje linkova u novom prozoru predstavlja zapovedničko ponašanje prema korisnicima.';
}

?>