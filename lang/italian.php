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
  $HeadURL: https://coppermine.svn.sourceforge.net/svnroot/coppermine/trunk/cpg1.5.x/lang/italian.php $
  $Revision: 8359 $
**********************************************/

if (!defined('IN_COPPERMINE')) die('Not in Coppermine...');

// info about translators and translated language
$lang_translation_info['lang_name_english'] = 'Italian';
$lang_translation_info['lang_name_native'] = 'Italian';
$lang_translation_info['lang_country_code'] = 'it';
$lang_translation_info['trans_name'] = array('Marco Marrai', 'Gian Luigi Rocca');
$lang_translation_info['trans_email'] = array('info@marcomarrai.it', 'glrocca@tin.it');
$lang_translation_info['trans_website'] = array('http://www.marcomarrai.it', 'http://vanrokken.altervista.org/');
$lang_translation_info['trans_date'] = '2012-01-26';


$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Bytes, Kibibytes, Mebibytes, Gibibytes
$lang_byte_units = array('Bytes', 'KiB', 'MiB', 'GiB');
$lang_decimal_separator = array('', ','); //cpg1.5 // symbol used to separate thousands from hundreds and rounded number from decimal place

// Day of weeks and months
$lang_day_of_week = array('Dom', 'Lun', 'Mar', 'Mer', 'Gio', 'Ven', 'Sab');
$lang_month = array('Gen', 'Feb', 'Mar', 'Apr', 'Mag', 'Giu', 'Lug', 'Ago', 'Set', 'Ott', 'Nov', 'Dic');

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$lang_date['album'] = '%d %B %Y';
$lang_date['lastcom'] = '%d/%m/%y, %H.%M';
$lang_date['lastup'] = '%d %B %Y';
$lang_date['register'] = '%d %B %Y';
$lang_date['lasthit'] = '%d %B %Y, %H.%M';
$lang_date['comment'] = '%d %B %Y, %H.%M';
$lang_date['log'] = '%d %B %Y, %H.%M';
$lang_date['scientific'] = '%d-%m-%Y %H:%M:%S';

// For the word censor
$lang_bad_words = array('cazzo', 'cazzi', 'cazzate', 'figa', 'fighe', 'puttana', 'puttane', 'puttanate', 'stronz*', '*fanculo', 'merda', 'merde', 'troia', 'troie', 'troiate', 'sborr*', 'fott*', 'culo', 'culatton*', 'froci*', 'checca', 'checche', 'porco dio');

$lang_meta_album_names['random'] = 'Immagini a caso';
$lang_meta_album_names['lastup'] = 'Ultimi arrivi';
$lang_meta_album_names['lastalb'] = 'Ultimi album aggiornati';
$lang_meta_album_names['lastcom'] = 'Ultimi commenti';
$lang_meta_album_names['topn'] = 'Pi&uacute; viste';
$lang_meta_album_names['toprated'] = 'Pi&uacute; votate';
$lang_meta_album_names['lasthits'] = 'Viste di recente';
$lang_meta_album_names['search'] = 'Risultati della ricerca nelle immagini';
$lang_meta_album_names['album_search'] = 'Risultati della ricerca negli album';
$lang_meta_album_names['category_search'] = 'Risultati della ricerca nelle categorie';
$lang_meta_album_names['favpics'] = 'Preferite';
$lang_meta_album_names['datebrowse'] = 'Sfoglia per data'; //cpg1.5

$lang_errors['access_denied'] = 'Non hai il permesso di accedere a questa pagina.';
$lang_errors['invalid_form_token'] = 'Impossibile convalidare questa operazione.'; //cpg1.5
$lang_errors['perm_denied'] = 'Non hai il permesso di eseguire questa operazione.';
$lang_errors['param_missing'] = 'Script eseguito senza i parametri richiesti.';
$lang_errors['non_exist_ap'] = 'Il file/album selezionato non esiste';
$lang_errors['quota_exceeded'] = 'Hai superato lo spazio su disco'; //cpg1.5
$lang_errors['quota_exceeded_details'] = 'Hai a disposizione [quota]K ed i tuoi file occupano [space]K: aggiungendo questi file supereresti la tua quota disco.'; //cpg1.5
$lang_errors['gd_file_type_err'] = 'Quando usi la libreria GD i formati immagine disponibili sono solo JPEG e PNG.';
$lang_errors['invalid_image'] = 'L\'immagine caricata &egrave; corrotta o non pu&ograve; essere elaborata dalla libreria GD';
$lang_errors['resize_failed'] = 'Non &egrave; possibile creare l\'anteprima o ridimensionare l\'immagine.';
$lang_errors['no_img_to_display'] = 'Nessuna immagine da mostrare';
$lang_errors['non_exist_cat'] = 'La categoria selezionata non esiste';
$lang_errors['directory_ro'] = 'La cartella \'%s\' &egrave; di sola lettura, i file non possono essere cancellati';
$lang_errors['pic_in_invalid_album'] = 'Il file si trova in un album inesistente (%s)';
$lang_errors['banned'] = 'Attualmente sei estromesso, non puoi accedere al sito.';
$lang_errors['offline_title'] = 'Offline';
$lang_errors['offline_text'] = 'La galleria in questo momento &egrave; offline, riprova pi&ugrave; tardi';
$lang_errors['ecards_empty'] = 'Attualmente non vi sono cartoline da mostrare.';
$lang_errors['database_query'] = 'Si &egrave; verificato un errore eseguendo una query al database';
$lang_errors['non_exist_comment'] = 'Il commento selezionato non esiste';
$lang_errors['captcha_error'] = 'Il codice di conferma non corrisponde'; // cpg1.5
$lang_errors['login_needed'] = 'Devi %sregister%s/%slogin%s per accedere a questa pagina'; // cpg1.5
$lang_errors['error'] = 'Errore'; // cpg1.5
$lang_errors['critical_error'] = 'Errore critico'; // cpg1.5
$lang_errors['access_thumbnail_only'] = 'Sei autorizzato solo a vedere le miniature.'; // cpg1.5
$lang_errors['access_intermediate_only'] = 'Non sei autorizzato a vedere le immagini a grandezza piena.'; // cpg1.5
$lang_errors['access_none'] = 'Non sei autorizzato a vedere immagini.'; // cpg1.5
$lang_errors['register_globals_title'] = 'register_globals abilitate!';// cpg1.
$lang_errors['register_globals_warning'] = 'La direttiva PHP register_globals &egrave; abilitata sul tuo server, che non &egrave; una buona idea in termini di sicurezza. &Egrave; vivamente raccomandato disabilitarla.'; //cpg1.5

$lang_bbcode_help_title = 'Aiuto BBCode';
$lang_bbcode_help = 'Puoi aggiungere collegamenti e formattazioni in questo campo usando i tag BBCode: <li>[b]Grassetto[/b] =&gt; <strong>Grassetto</strong></li><li>[i]Italico[/i] =&gt; <i>Corsivo</i></li><li>[url=http://yoursite.com/]Collegamento[/url] =&gt; <a href="http://yoursite.com">Collegamento</a></li><li>[email]user@domain.com[/email] =&gt; <a href="mailto:user@domain.com">user@domain.com</a></li><li>[color=red]testo[/color] =&gt; <span style="color:red">testo</span></li><li>[img]http://documentation.coppermine-gallery.net/images/browser.png[/img] =&gt; <img src="docs/images/browser.png" border="0" alt="" /></li>';

$lang_common['yes'] = 'Si'; // cpg1.5
$lang_common['no'] = 'No'; // cpg1.5
$lang_common['back'] = 'Indietro'; // cpg1.5
$lang_common['continue'] = 'Continua'; // cpg1.5
$lang_common['information'] = 'Informazioni'; // cpg1.5
$lang_common['error'] = 'Errore'; // cpg1.5
$lang_common['check_uncheck_all'] = 'Seleziona/deseleziona tutto'; // cpg1.5
$lang_common['confirm'] = 'Conferma'; // cpg1.5
$lang_common['captcha_help_title'] = 'Conferma visuale (captcha)'; // cpg1.5
$lang_common['captcha_help'] = 'Per evitare lo spam, devi confermare di essere una persona e non un bot digitando il testo visualizzato nell\'immagine.<br />Il maiuscolo &egrave; indifferente, puoi scrivere tutto in minuscolo.'; // cpg1.5
$lang_common['title'] = 'Titolo'; // cpg1.5
$lang_common['caption'] = 'Descrizione'; // cpg1.5
$lang_common['keywords'] = 'Parole chiave'; // cpg1.5
$lang_common['keywords_insert1'] = 'Parole chiave (separate da %s)'; // cpg1.5
$lang_common['keywords_insert2'] = 'Inserisci dalla lista'; // cpg1.5
$lang_common['keyword_separator'] = 'Separatore delle parole chiave'; //cpg1.5
$lang_common['keyword_separators'] = array(' '=>'spazio', ','=>'virgola', ';'=>'punto e virgola'); // cpg1.5
$lang_common['owner_name'] = 'Nome proprietario'; // cpg1.5
$lang_common['filename'] = 'Nome del file'; // cpg1.5
$lang_common['filesize'] = 'Dimensione del file'; // cpg1.5
$lang_common['album'] = 'Album'; // cpg1.5
$lang_common['file'] = 'File'; // cpg1.5
$lang_common['date'] = 'Data'; // cpg1.5
$lang_common['help'] = 'Aiuto'; // cpg1.5
$lang_common['close'] = 'Chiudi'; // cpg1.5
$lang_common['go'] = 'Invia'; // cpg1.5
$lang_common['javascript_needed'] = 'Questa pagina richiede JavaScript, abilitalo nel tuo browser.'; // cpg1.5
$lang_common['move_up'] = 'Sposta su'; // cpg1.5
$lang_common['move_down'] = 'Sposta gi&ugrave;'; // cpg1.5
$lang_common['move_top'] = 'Sposta all\'inizio'; // cpg1.5
$lang_common['move_bottom'] = 'Sposta alla fine'; // cpg1.5
$lang_common['delete'] = 'Cancella'; // cpg1.5
$lang_common['edit'] = 'Modifica'; // cpg1.5
$lang_common['username_if_blank'] = 'Codardo sconosciuto'; // cpg1.5
$lang_common['albums_no_category'] = 'Album senza categoria'; // cpg1.5
$lang_common['personal_albums'] = '* Album personali'; // cpg1.5
$lang_common['select_album'] = 'Seleziona l\'album'; // cpg1.5
$lang_common['ok'] = 'OK'; // cpg1.5
$lang_common['status'] = 'Stato'; // cpg1.5
$lang_common['apply_changes'] = 'Conferma modifiche'; // cpg1.5
$lang_common['done'] = 'Fatto'; // cpg1.5
$lang_common['album_properties'] = 'Propriet&agrave; dell\'album'; // cpg1.5
$lang_common['parent_category'] = 'Categoria madre'; // cpg1.5
$lang_common['edit_files'] = 'Modifica i file'; // cpg1.5
$lang_common['thumbnail_view'] = 'Vedi miniature'; // cpg1.5
$lang_common['album_manager'] = 'Gestione album'; // cpg1.5
$lang_common['more'] = 'Altro'; // cpg1.5

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu['home_title'] = 'Vai alla pagina iniziale';
$lang_main_menu['home_lnk'] = 'Inizio';
$lang_main_menu['alb_list_title'] = 'Vai alla lista degli album';
$lang_main_menu['alb_list_lnk'] = 'Elenco album';
$lang_main_menu['my_gal_title'] = 'Vai alla tua galleria';
$lang_main_menu['my_gal_lnk'] = 'La mia galleria';
$lang_main_menu['my_prof_title'] = 'Vai al mio profilo';
$lang_main_menu['my_prof_lnk'] = 'Il mio profilo';
$lang_main_menu['adm_mode_title'] = 'Abilita la visualizzazione del pannello di amministrazione'; // cpg1.5
$lang_main_menu['adm_mode_lnk'] = 'Mostra i controlli Admin'; // cpg1.5
$lang_main_menu['usr_mode_title'] = 'Disabilita la visualizzazione del pannello di amministrazione'; // cpg1.5
$lang_main_menu['usr_mode_lnk'] = 'Nascondi i controlli Admin'; // cpg1.5
$lang_main_menu['upload_pic_title'] = 'Carica file nell\'album';
$lang_main_menu['upload_pic_lnk'] = 'Carica file';
$lang_main_menu['register_title'] = 'Crea un account';
$lang_main_menu['register_lnk'] = 'Registrati';
$lang_main_menu['login_title'] = 'Connettimi al mio account';
$lang_main_menu['login_lnk'] = 'Login';
$lang_main_menu['logout_title'] = 'Disconnettimi dal mio account';
$lang_main_menu['logout_lnk'] = 'Logout';
$lang_main_menu['lastup_title'] = 'Mostra le ultime immagini inserite';
$lang_main_menu['lastup_lnk'] = 'Ultimi arrivi';
$lang_main_menu['lastcom_title'] = 'Mostra i commenti pi&ugrave; recenti';
$lang_main_menu['lastcom_lnk'] = 'Ultimi commenti';
$lang_main_menu['topn_title'] = 'Mostra le immagini pi&ugrave; viste';
$lang_main_menu['topn_lnk'] = 'Pi&ugrave; viste';
$lang_main_menu['toprated_title'] = 'Mostra le immagini pi&ugrave; votate';
$lang_main_menu['toprated_lnk'] = 'Pi&ugrave; votate';
$lang_main_menu['search_title'] = 'Cerca nella galleria';
$lang_main_menu['search_lnk'] = 'Cerca';
$lang_main_menu['fav_title'] = 'Vai ai miei preferiti';
$lang_main_menu['fav_lnk'] = 'Preferiti';
$lang_main_menu['memberlist_title'] = 'Mostra gli utenti registrati al sito';
$lang_main_menu['memberlist_lnk'] = 'Utenti';
$lang_main_menu['browse_by_date_lnk'] = 'Per data'; // cpg1.5
$lang_main_menu['browse_by_date_title'] = 'Sfoglia per data di caricamento'; // cpg1.5
$lang_main_menu['contact_title'] = 'Contatta %s'; // cpg1.5
$lang_main_menu['contact_lnk'] = 'Contatti'; // cpg1.5
$lang_main_menu['sidebar_title'] = 'Aggiungi una barra laterale al tuo browser'; // cpg1.5
$lang_main_menu['sidebar_lnk'] = 'Barra laterale'; // cpg1.5

$lang_gallery_admin_menu['upl_app_title'] = 'Approva nuovi caricamenti';
$lang_gallery_admin_menu['upl_app_lnk'] = 'Approvazione caricamenti';
$lang_gallery_admin_menu['admin_title'] = 'Vai alla configurazione';
$lang_gallery_admin_menu['admin_lnk'] = 'Configurazione';
$lang_gallery_admin_menu['albums_title'] = 'Vai alla configurazione degli album';
$lang_gallery_admin_menu['albums_lnk'] = 'Album';
$lang_gallery_admin_menu['categories_title'] = 'Vai alla configurazione delle categorie';
$lang_gallery_admin_menu['categories_lnk'] = 'Categorie';
$lang_gallery_admin_menu['users_title'] = 'Vai alla configurazione degli utenti';
$lang_gallery_admin_menu['users_lnk'] = 'Utenti';
$lang_gallery_admin_menu['groups_title'] = 'Vai alla configurazione dei gruppi';
$lang_gallery_admin_menu['groups_lnk'] = 'Gruppi';
$lang_gallery_admin_menu['comments_title'] = 'Controlla tutti i commenti';
$lang_gallery_admin_menu['comments_lnk'] = 'Esamina commenti';
$lang_gallery_admin_menu['searchnew_title'] = 'Aggiunta cumulativa delle immagini agli album';
$lang_gallery_admin_menu['searchnew_lnk'] = 'Aggiunta cumulativa';
$lang_gallery_admin_menu['util_title'] = 'Vai alle utilità di amministrazione';
$lang_gallery_admin_menu['util_lnk'] = 'Utilità Admin';
$lang_gallery_admin_menu['key_lnk'] = 'Dizionario parole chiave';
$lang_gallery_admin_menu['ban_title'] = 'Vai al pannello utenti estromessi';
$lang_gallery_admin_menu['ban_lnk'] = 'Utenti estromessi';
$lang_gallery_admin_menu['db_ecard_title'] = 'Verifica cartoline';
$lang_gallery_admin_menu['db_ecard_lnk'] = 'Mostra cartoline';
$lang_gallery_admin_menu['pictures_title'] = 'Ordina le immagini negli album';
$lang_gallery_admin_menu['pictures_lnk'] = 'Ordina immagini';
$lang_gallery_admin_menu['documentation_lnk'] = 'Documentazione';
$lang_gallery_admin_menu['documentation_title'] = 'Manuale di Coppermine';
$lang_gallery_admin_menu['phpinfo_lnk'] = 'phpinfo'; // cpg1.5
$lang_gallery_admin_menu['phpinfo_title'] = 'Contiene informazioni tecniche sul tuo server. Ti possono essere richieste informazioni da questa pagina quando richiedi assistenza.'; // cpg1.5
$lang_gallery_admin_menu['update_database_lnk'] = 'Aggiorna database'; // cpg1.5
$lang_gallery_admin_menu['update_database_title'] = 'Se hai sostituito dei file, fatto una modifica o aggiornato da una versione precedente di Coppermine, assicurati di eseguire una sola volta l\'aggiornamento del database. Verranno create le tabelle e/o i valori di configurazione necessari nel database.'; // cpg1.5
$lang_gallery_admin_menu['view_log_files_lnk'] = 'Vedi rapporti'; // cpg1.5
$lang_gallery_admin_menu['view_log_files_title'] = 'Coppermine pu&ograve; tener traccia di ogni azione degli utenti. Puoi consultare questi rapporti se li hai abilitati nella configurazione di Coppermine.'; // cpg1.5
$lang_gallery_admin_menu['check_versions_lnk'] = 'Controlla versione'; // cpg1.5
$lang_gallery_admin_menu['check_versions_title'] = 'Verifica la versione dei file per controllare se sono stati sostituiti tutti i file dopo un aggiornamento, o se i sorgenti di Coppermine sono stati aggiornati dopo il rilascio di una nuova versione.'; // cpg1.5
$lang_gallery_admin_menu['bridgemgr_lnk'] = 'Gestione integrazione'; // cpg1.5
$lang_gallery_admin_menu['bridgemgr_title'] = 'Abilita o disabilita l\'integrazione di Coppermine con un\'altra applicazione (es. la tua BBS).'; // cpg1.5
$lang_gallery_admin_menu['pluginmgr_lnk'] = 'Gestione plug-in'; // cpg1.5
$lang_gallery_admin_menu['pluginmgr_title'] = 'Vai al pannello di gestione dei plugin'; // cpg1.5
$lang_gallery_admin_menu['overall_stats_lnk'] = 'Statistiche generali'; // cpg1.5
$lang_gallery_admin_menu['overall_stats_title'] = 'Visualizza tutte le statistiche di accesso per browser e sistema operativo (se le corrispondenti opzioni sono abilitate nella configurazione).'; // cpg1.5
$lang_gallery_admin_menu['keywordmgr_lnk'] = 'Gestione parole chiave'; // cpg1.5
$lang_gallery_admin_menu['keywordmgr_title'] = 'Gestisci le parole chiave (se la corrispondente opzione &egrave; abilitata nella configurazione).'; // cpg1.5
$lang_gallery_admin_menu['exifmgr_lnk'] = 'Gestione dati EXIF'; // cpg1.5
$lang_gallery_admin_menu['exifmgr_title'] = 'Gestisci la visualizzazione dei dati EXIF (se la corrispondente opzione &egrave; abilitata nella configurazione).'; // cpg1.5
$lang_gallery_admin_menu['shownews_lnk'] = 'Mostra novità CPG'; // cpg1.5
$lang_gallery_admin_menu['shownews_title'] = 'Visualizza le ultime notizie dal sito coppermine-gallery.net'; // cpg1.5

$lang_user_admin_menu['albmgr_title'] = 'Pannello per creare ed ordinare gli album';
$lang_user_admin_menu['albmgr_lnk'] = 'Crea / ordina album';
$lang_user_admin_menu['modifyalb_title'] = 'Pannello per la modifica degli album';
$lang_user_admin_menu['modifyalb_lnk'] = 'Modifica album';
$lang_user_admin_menu['my_prof_title'] = 'Vai al tuo profilo';
$lang_user_admin_menu['my_prof_lnk'] = 'Profilo';

$lang_cat_list['category'] = 'Categoria';
$lang_cat_list['albums'] = 'Album';
$lang_cat_list['pictures'] = 'Immagini';

$lang_album_list['album_on_page'] = '%d album su %d pagina(e)';

$lang_thumb_view['date'] = 'Data';
//Sort by filename and title
$lang_thumb_view['name'] = 'Nome file';
$lang_thumb_view['sort_da'] = 'Ordinato per data ascendente';
$lang_thumb_view['sort_dd'] = 'Ordinato per data discendente';
$lang_thumb_view['sort_na'] = 'Ordinato per nome ascendente';
$lang_thumb_view['sort_nd'] = 'Ordinato per nome discendente';
$lang_thumb_view['sort_ta'] = 'Ordinato per titolo ascendente';
$lang_thumb_view['sort_td'] = 'Ordinato per titolo discendente';
$lang_thumb_view['position'] = 'Posizione';
$lang_thumb_view['sort_pa'] = 'Ordinato per posizione ascendente';
$lang_thumb_view['sort_pd'] = 'Ordinato per posizione discendente';
$lang_thumb_view['download_zip'] = 'Scarica come file compresso';
$lang_thumb_view['pic_on_page'] = '%d immagini su %d pagina(e)';
$lang_thumb_view['user_on_page'] = '%d utenti su %d pagina(e)';
$lang_thumb_view['enter_alb_pass'] = 'Inserisci la password dell\'album';
$lang_thumb_view['invalid_pass'] = 'Password errata';
$lang_thumb_view['pass'] = 'Password';
$lang_thumb_view['submit'] = 'Invio';
$lang_thumb_view['zipdownload_copyright'] = 'Rispettate i diritti d\'autore: devi possedere il diritto di pubblicare le immagini che carichi nella galleria.'; // cpg1.5
$lang_thumb_view['zipdownload_username'] = 'Questo archivio contiene le immagini compresse fra quelle preferite di %s'; // cpg1.5

$lang_img_nav_bar['thumb_title'] = 'Ritorna alla pagina delle miniature';
$lang_img_nav_bar['pic_info_title'] = 'Mostra/nascondi le informazioni sull\'immagine';
$lang_img_nav_bar['slideshow_title'] = 'Proiezione delle diapositive';
$lang_img_nav_bar['ecard_title'] = 'Spedisci questa foto come cartolina';
$lang_img_nav_bar['ecard_disabled'] = 'Le cartoline sono disabilitate';
$lang_img_nav_bar['ecard_disabled_msg'] = 'Non hai il permesso di spedire cartoline'; // js-alert
$lang_img_nav_bar['prev_title'] = 'Guarda foto precedente';
$lang_img_nav_bar['next_title'] = 'Guarda foto successiva';
$lang_img_nav_bar['pic_pos'] = 'FILE %s/%s';
$lang_img_nav_bar['report_title'] = 'Segnala questa foto all\'amministratore';
$lang_img_nav_bar['go_album_end'] = 'Salta alla fine';
$lang_img_nav_bar['go_album_start'] = 'Torna all\'inizio';

$lang_rate_pic['rate_this_pic'] = 'Vota questa foto ';
$lang_rate_pic['no_votes'] = '(ancora senza voto)';
$lang_rate_pic['rating'] = '(il voto attuale : %s / %s con %s voti)';
$lang_rate_pic['rubbish'] = 'Pessima';
$lang_rate_pic['poor'] = 'Scarsa';
$lang_rate_pic['fair'] = 'Sufficiente';
$lang_rate_pic['good'] = 'Buona';
$lang_rate_pic['excellent'] = 'Eccellente';
$lang_rate_pic['great'] = 'Fantastica';
$lang_rate_pic['js_warning'] = 'Deve essere abilitato Javascript per poter votare'; // cpg1.5
$lang_rate_pic['already_voted'] = 'Hai gi&agrave; votato per questa foto.'; // cpg1.5
$lang_rate_pic['forbidden'] = 'Non puoi votare le tue foto.'; // cpg1.5
$lang_rate_pic['rollover_to_rate'] = 'Clicca sui pallini per votare questa immagine'; // cpg1.5

// ------------------------------------------------------------------------- //
// File include/functions.inc.php
// ------------------------------------------------------------------------- //

$lang_cpg_die['file'] = 'File: ';
$lang_cpg_die['line'] = 'Riga: ';

$lang_display_thumbnails['dimensions'] = 'Dimensioni=';
$lang_display_thumbnails['date_added'] = 'Aggiunta il=';

$lang_get_pic_data['n_comments'] = '%s commenti';
$lang_get_pic_data['n_views'] = '%s visite';
$lang_get_pic_data['n_votes'] = '(%s voti)';

$lang_cpg_debug_output['debug_info'] = 'Informazioni di debug';
$lang_cpg_debug_output['debug_output'] = 'Listato di debug'; // cpg1.5
$lang_cpg_debug_output['select_all'] = 'Seleziona tutto';
$lang_cpg_debug_output['copy_and_paste_instructions'] = 'Se stai per chiedere aiuto al forum di assistenza Coppermine, copia e incolla questo rapporto di debug nel tuo messaggio se richiesto, aggiungendo anche, se presente, il tipo di errore che riscontri. Posta il rapporto di debug sul forum di assistenza solo se qualcuno dello staff te lo chiede! Ricordati di sostituire ogni password dalla query con *** prima di postare.'; // cpg1.5
$lang_cpg_debug_output['debug_output_explain'] = 'Nota: serve solo a titolo informativo, non significa che ci siano errori nella galleria.'; // cpg1.5
$lang_cpg_debug_output['phpinfo'] = 'Mostra phpinfo';
$lang_cpg_debug_output['notices'] = 'Avvisi PHP';
$lang_cpg_debug_output['notices_help_admin'] = 'Gli avvisi PHP visualizzate in questa pagina compaiono in quanto tu, in qualità di amministratore, hai volontariamente abilitato questa opzione nella configurazione di Coppermine. Ci&oacute; non significa necessariamente che vi siano problemi. Infatti, sono informazioni per sviluppatori che solo programmatori esperti possono abilitare per verificare la presenza di errori. Se questi avvisi ti danno noia e/o non hai idea di cosa significhino, disabilitali dalla configurazione.'; // cpg1.5
$lang_cpg_debug_output['notices_help_non_admin'] = 'Gli avvisi visualizzati sono stati espressamente abilitati dall\'amministratore. Ci&oacute; non significa necessariamente che vi siano problemi, puoi tranquillamente ignorarli.'; // cpg1.5
$lang_cpg_debug_output['show_hide'] = 'Mostra / Nascondi'; // cpg1.5

$lang_language_selection['reset_language'] = 'Lingua principale';
$lang_language_selection['choose_language'] = 'Scegli la tua lingua';

$lang_theme_selection['reset_theme'] = 'Tema principale';
$lang_theme_selection['choose_theme'] = 'Scegli un tema';

$lang_version_alert['version_alert'] = 'Versione non supportata!';
$lang_version_alert['no_stable_version'] = 'Stai eseguendo Coppermine %s (%s), che è destinata solo ad utenti esperti: per questa versione non vi è alcuna assistenza o garanzia di funzionamento. Usala a tuo rischio o passa al\'ultima versione stabile se hai bisogno di assistenza!';
$lang_version_alert['gallery_offline'] = 'La galleria al momento &egrave; fuori linea e visibile soltanto a te amministratore. Non dimenticare di riattivarla dopo che hai terminato la manutenzione.';
$lang_version_alert['coppermine_news'] = 'Notizie da coppermine-gallery.net'; // cpg1.5
$lang_version_alert['no_iframe'] = 'Il tuo browser non pu&ograve; visualizzare i frame in linea'; // cpg1.5
$lang_version_alert['hide'] = 'Nascondi'; // cpg1.5

$lang_create_tabs['previous'] = 'Precedente'; // cpg1.5
$lang_create_tabs['next'] = 'Successivo'; // cpg1.5
$lang_create_tabs['jump_to_page'] = 'Salta alla pagina'; // cpg1.5

$lang_get_remote_file_by_url['no_data_returned'] = 'Nessun dato ricevuto usando %s'; // cpg1.5
$lang_get_remote_file_by_url['curl'] = 'Curl'; // cpg1.5
$lang_get_remote_file_by_url['fsockopen'] = 'Connessione al socket (FSOCKOPEN)'; // cpg1.5
$lang_get_remote_file_by_url['fopen'] = 'fopen'; // cpg1.5
$lang_get_remote_file_by_url['curl_not_available'] = 'Curl non &egrave; disponibile sul tuo server'; // cpg1.5
$lang_get_remote_file_by_url['error_number'] = 'Errore numero: %s'; // cpg1.5
$lang_get_remote_file_by_url['error_message'] = 'Messaggio di errore: %s'; // cpg1.5

// ------------------------------------------------------------------------- //
// File include/mailer.inc.php
// ------------------------------------------------------------------------- //
$lang_mailer['provide_address'] = 'Devi inserirne almeno uno ';
$lang_mailer['mailer_not_supported'] = ' l\'invio di posta non &egrave; supportato.';
$lang_mailer['execute'] = 'Non puoi eseguire: ';
$lang_mailer['instantiate'] = 'Impossibile inizializzare la funzione di invio posta.';
$lang_mailer['authenticate'] = 'Errore SMTP: Non puoi autenticarti.';
$lang_mailer['from_failed'] = 'Il seguente indirizzo mittente non &egrave; è stato processato con successo: ';
$lang_mailer['recipients_failed'] = 'Errore SMTP: Il seguente ';
$lang_mailer['data_not_accepted'] = 'Errore SMTP: dati non accettati.';
$lang_mailer['connect_host'] = 'Errore SMTP: Non &egrave; possibile connettersi all\'host SMTP.';
$lang_mailer['file_access'] = 'Non &egrave; possibile accedere al file: ';
$lang_mailer['file_open'] = 'Errore File: Non &egrave; possibile aprire il file: ';
$lang_mailer['encoding'] = 'Codifica sconosciuta: ';
$lang_mailer['signing'] = 'Errore nella firma: ';

// ------------------------------------------------------------------------- //
// File include/plugin_api.inc.php
// ------------------------------------------------------------------------- //
$lang_plugin_api['error_install'] = 'Non &egrave; possibile installare il plug-in \'%s\'';
$lang_plugin_api['error_uninstall'] = 'Non &egrave; possibile disinstallare il plug-in \'%s\'';
$lang_plugin_api['error_sleep'] = 'Non &egrave; possibile disattivare il plug-in \'%s\''; // cpg1.5

// ------------------------------------------------------------------------- //
// File include/smilies.inc.php
// ------------------------------------------------------------------------- //
if (defined('SMILIES_PHP')) {
$lang_smilies_inc_php['Exclamation'] = 'Esclamazione';
$lang_smilies_inc_php['Question'] = 'Domanda';
$lang_smilies_inc_php['Very Happy'] = 'Molto felice';
$lang_smilies_inc_php['Smile'] = 'Sorriso';
$lang_smilies_inc_php['Sad'] = 'Triste';
$lang_smilies_inc_php['Surprised'] = 'Sorpreso';
$lang_smilies_inc_php['Shocked'] = 'Scioccato';
$lang_smilies_inc_php['Confused'] = 'Confuso';
$lang_smilies_inc_php['Cool'] = 'Figo';
$lang_smilies_inc_php['Laughing'] = 'Risata';
$lang_smilies_inc_php['Mad'] = 'Pazzo';
$lang_smilies_inc_php['Razz'] = 'Linguaccia';
$lang_smilies_inc_php['Embarrassed'] = 'Imbarazzato'; // cpg1.5
$lang_smilies_inc_php['Crying or Very sad'] = 'In lacrime o molto triste';
$lang_smilies_inc_php['Evil or Very Mad'] = 'Malvagio o Fuori di testa';
$lang_smilies_inc_php['Twisted Evil'] = 'Molto malvagio';
$lang_smilies_inc_php['Rolling Eyes'] = 'Uff...';
$lang_smilies_inc_php['Wink'] = 'Ammiccante';
$lang_smilies_inc_php['Idea'] = 'Idea';
$lang_smilies_inc_php['Arrow'] = 'Freccia';
$lang_smilies_inc_php['Neutral'] = 'Neutrale';
$lang_smilies_inc_php['Mr. Green'] = 'Sig. Verdi';
}

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //
if (defined('ALBMGR_PHP')) {
$lang_albmgr_php['title'] = 'Gestione album'; // cpg1.5
$lang_albmgr_php['alb_need_name'] = 'Gli album devono avere un nome!'; // js-alert
$lang_albmgr_php['confirm_modifs'] = 'Sei sicuro di voler fare queste modifiche?'; // js-alert
$lang_albmgr_php['no_change'] = 'Non hai fatto modifiche!'; // js-alert
$lang_albmgr_php['new_album'] = 'Nuovo album';
$lang_albmgr_php['delete_album'] = 'Cancella album'; // cpg1.5
$lang_albmgr_php['confirm_delete1'] = 'Sei sicuro di voler cancellare questo album?'; // js-alert
$lang_albmgr_php['confirm_delete2'] = 'Tutte le foto e i commenti contenuti verranno persi!'; // js-alert
$lang_albmgr_php['select_first'] = 'Seleziona prima un album'; // js-alert
$lang_albmgr_php['my_gallery'] = '* La mia galleria *';
$lang_albmgr_php['no_category'] = '* Nessuna categoria *';
$lang_albmgr_php['select_category'] = 'Seleziona categoria';
$lang_albmgr_php['category_change'] = 'Se cambi categoria, le tue modifiche verranno perse!'; // cpg1.5
$lang_albmgr_php['page_change'] = 'Se clicchi su questo collegamento, le tue modifiche verranno perse!'; // cpg1.5
$lang_albmgr_php['cancel'] = 'Cancella'; // cpg1.5
$lang_albmgr_php['submit_reminder'] = 'Le modifiche all\'ordinamento non saranno salvate fino a quando non cliccherai su &quot;Conferma modifiche&quot;.'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) {
$lang_banning_php['title'] = 'Utenti estromessi';
$lang_banning_php['user_name'] = 'Nome utente';
$lang_banning_php['user_account'] = 'Account utente';
$lang_banning_php['email_address'] = 'Indirizzo email'; // cpg1.5
$lang_banning_php['ip_address'] = 'Indirizzo IP';
$lang_banning_php['expires'] = 'Scadenza'; // cpg1.5
$lang_banning_php['expiry_date'] = 'Data di scadenza'; // cpg1.5
$lang_banning_php['expired'] = 'Scaduto'; // cpg1.5
$lang_banning_php['edit_ban'] = 'Salva modifiche';
$lang_banning_php['add_new'] = 'Aggiungi un nuovo utente estromesso';
$lang_banning_php['add_ban'] = 'Aggiungi';
$lang_banning_php['error_user'] = 'Utente non trovato';
$lang_banning_php['error_specify'] = 'Devi specificare il nome utente o un indirizzo IP';
$lang_banning_php['error_ban_id'] = 'ID estromissione non valido!';
$lang_banning_php['error_admin_ban'] = 'Non puoi estromettere te stesso!';
$lang_banning_php['error_server_ban'] = 'Avevi intenzione di estromettere il tuo server? Tsk tsk, non puoi farlo...';
$lang_banning_php['skipping'] = 'Sto saltando quel comando.'; // cpg1.5
$lang_banning_php['lookup_ip'] = 'Verifica indirizzo IP';
$lang_banning_php['select_date'] = 'seleziona data';
$lang_banning_php['delete_comments'] = 'Cancella commenti'; // cpg1.5
$lang_banning_php['current'] = 'attuale'; // cpg1.5
$lang_banning_php['all'] = 'tutto'; // cpg1.5
$lang_banning_php['none'] = 'nessuno'; // cpg1.5
$lang_banning_php['view'] = 'vista'; // cpg1.5
$lang_banning_php['ban_id'] = 'ID estromissione'; // cpg1.5
$lang_banning_php['existing_bans'] = 'Estromissioni esistenti'; // cpg1.5
$lang_banning_php['no_banning_when_bridged'] = 'Attualmente la tua galleria è integrata con un\'altra applicazione. Usa il sistema di estromissione di quell\'applicazione invece di quello di Coppermine. Il sistema di Coppermine &egrave; funziona con difficoltà in caso di integrazione.'; // cpg1.5
$lang_banning_php['records_on_page'] = '%d file in %d pagina/e'; // cpg1.5
$lang_banning_php['ascending'] = 'ascendente'; // cpg1.5
$lang_banning_php['descending'] = 'discendente'; // cpg1.5
$lang_banning_php['sort_by'] = 'Ordina per'; // cpg1.5
$lang_banning_php['sorted_by'] = 'ordinato per'; // cpg1.5
$lang_banning_php['ban_record_x_updated'] = 'L\'archivio delle estromissioni %s &egrave; stato aggiornato'; // cpg1.5
$lang_banning_php['ban_record_x_deleted'] = 'L\'archivio delle estromissioni %s &egrave; stato cancellato'; // cpg1.5
$lang_banning_php['new_ban_record_created'] = 'L\'archivio delle estromissioni &egrave; stato creato'; // cpg1.5
$lang_banning_php['ban_record_x_already_exists'] = 'L\'archivio delle estromissioni per %s esiste gi&agrave;!'; // cpg1.5
$lang_banning_php['comment_deleted'] = '%s commento scritto da %s &egrave; stato cancellato'; // cpg1.5
$lang_banning_php['comments_deleted'] = '%s commenti scritto da %s sono stati cancellati'; // cpg1.5
$lang_banning_php['email_field_invalid'] = 'Inserisci un indirizzo di posta elettronica valido'; // cpg1.5
$lang_banning_php['ip_address_field_invalid'] = 'Inserisci un indirizzo IP valido (x.x.x.x)'; // cpg1.5
$lang_banning_php['expiry_field_invalid'] = 'Inserisci una data di scadenza valida (YYYY-MM-DD)'; // cpg1.5
$lang_banning_php['form_not_submit'] = 'Il modulo non &egrave; stato invato, ci sono errori che devi prima correggere'; // cpg1.5
};

// ------------------------------------------------------------------------- //
// File bridgemgr.php
// ------------------------------------------------------------------------- //
if (defined('BRIDGEMGR_PHP')) {
$lang_bridgemgr_php['title'] = 'Integrazione guidata';
$lang_bridgemgr_php['back'] = 'indietro';
$lang_bridgemgr_php['next'] = 'avanti';
$lang_bridgemgr_php['start_wizard'] = 'Inizia l\'integrazione guidata';
$lang_bridgemgr_php['finish'] = 'Fine';
$lang_bridgemgr_php['no_action_needed'] = 'Non &egrave; richiesta alcuna azione in questo passo. Premi \'avanti\' per continuare.';
$lang_bridgemgr_php['reset_to_default'] = 'Ripristina i valori predefiniti';
$lang_bridgemgr_php['choose_bbs_app'] = 'scegli un\'applicazione da integrare con Coppermine';
$lang_bridgemgr_php['support_url'] = 'Vai qui per assistenza su questa applicazione';
$lang_bridgemgr_php['settings_path'] = 'percorso/i usati dalla applicazione da integrare';
$lang_bridgemgr_php['full_forum_url'] = 'URL dell\'applicazione da integrare';
$lang_bridgemgr_php['relative_path_of_forum_from_webroot'] = 'percorso assoluto dell\'applicazione da integrare';
$lang_bridgemgr_php['relative_path_to_config_file'] = 'percorso relativo del file di configurazione dell\'applicazione da integrare';
$lang_bridgemgr_php['cookie_prefix'] = 'prefisso dei cookie';
$lang_bridgemgr_php['special_settings'] = 'impostazioni specifiche dell\'applicazione da integrare';
$lang_bridgemgr_php['use_post_based_groups'] = 'Usare i gruppi dell\'applicazione da integrare?';
$lang_bridgemgr_php['use_post_based_groups_yes'] = 'si';
$lang_bridgemgr_php['use_post_based_groups_no'] = 'no';
$lang_bridgemgr_php['error_title'] = 'Devi correggere questi errori prima di poter continuare. Vai alla schermata precedente.';
$lang_bridgemgr_php['error_specify_bbs'] = 'Devi specificare con quale applicazione vuoi integrare la tua installazione di Coppermine.';
$lang_bridgemgr_php['finalize'] = 'abilita/disabilita collegamento';
$lang_bridgemgr_php['finalize_explanation'] = 'Bene, le impostazioni che hai specificato sono state inserite nel database, ma l\'integrazione delle applicazioni collegate non &egrave; stata abilitata. Puoi attivare e disattivare l\'integrazione pi&ugrave; avanti. Assicurati di ricordare il nome utente e la password di amministrazione per la versione originale di Coppermine, potresti averne bisogno pi&ugrave; avanti per poter effettuare qualche modifica. Se qualcosa va storto, vai a %s e disabilita l\'integrazione, usando il tuo account di amministrazione non integrato (normalmente quello che configuri durante l\'installazione di Coppermine).';
$lang_bridgemgr_php['your_bridge_settings'] = 'Le tue impostazioni di integrazione';
$lang_bridgemgr_php['title_enable'] = 'Abilita integrazione/collegamento con %s';
$lang_bridgemgr_php['bridge_enable_yes'] = 'abilita';
$lang_bridgemgr_php['bridge_enable_no'] = 'disabilita';
$lang_bridgemgr_php['error_must_not_be_empty'] = 'non deve essere vuoto';
$lang_bridgemgr_php['error_either_be'] = 'deve essere %s o %s';
$lang_bridgemgr_php['error_folder_not_exist'] = '%s non esiste. Correggi il valore che hai messo per %s';
$lang_bridgemgr_php['error_cookie_not_readible'] = 'Coppermine non pu&ograve; leggere un cookie chiamato %s. Correggi il valore che hai inserito per %s, o vai al pannello di amministrazione dell\'applicazione integrata e controlla che il percorso dei cookie sia leggibile per Coppermine.';
$lang_bridgemgr_php['error_mandatory_field_empty'] = 'Non puoi lasciare il campo %s vuoto - riempilo con i valori corretti.';
$lang_bridgemgr_php['error_no_trailing_slash'] = 'Non ci deve essere una barra nel campo %s.';
$lang_bridgemgr_php['error_trailing_slash'] = 'Deve esserci una barra nel campo %s.';
$lang_bridgemgr_php['error_prefix_and_table'] = '%s e ';
$lang_bridgemgr_php['recovery_title'] = 'Gestione integrazione: ripristino di emergenza';
$lang_bridgemgr_php['recovery_explanation'] = 'Se sei arrivato qui per amministrare l\'integrazione della galleria Coppermine, devi prima autenticarti come amministratore. Se non puoi autenticarti perch&egrave; l\'integrazione non funziona come dovrebbe, puoi disabilitarla da questa pagina. Immettendo il tuo nome utente e la tua password non ti autenticher&agrave;, disabiliter&agrave solo l\'integrazione. Fai riferimento alla documentazione per maggiori dettagli.';
$lang_bridgemgr_php['username'] = 'Nome utente';
$lang_bridgemgr_php['password'] = 'Password';
$lang_bridgemgr_php['disable_submit'] = 'invia';
$lang_bridgemgr_php['recovery_success_title'] = 'Autorizzazione concessa.';
$lang_bridgemgr_php['recovery_success_content'] = 'Hai correttamente disabilitato l\'integrazione. La tua installazione di Coppermine ora &egrave; eseguita in modalit&agrave; non integrata.';
$lang_bridgemgr_php['recovery_success_advice_login'] = 'Autenticati come amministratore per modificare le impostazioni di integrazione e/o riabilita l\'integrazione.';
$lang_bridgemgr_php['goto_login'] = 'Vai alla pagina di autenticazione';
$lang_bridgemgr_php['goto_bridgemgr'] = 'Vai alla gestione integrazione';
$lang_bridgemgr_php['recovery_failure_title'] = 'Autorizzazione fallita';
$lang_bridgemgr_php['recovery_failure_content'] = 'Hai fornito credenziali errate. Devi immettere i dati dell\'account di amministrazione della versione non integrata (normalmente quello creato durante l\'installazione di Coppermine).';
$lang_bridgemgr_php['try_again'] = 'prova ancora';
$lang_bridgemgr_php['recovery_wait_title'] = 'Il tempo di attesa non &egrave; ancora trascorso';
$lang_bridgemgr_php['recovery_wait_content'] = 'Per ragioni di sicurezza questo script non permette tentativi di accesso falliti a breve distanza, quindi devi attendere un po\' perch&egrave; ti sia consentito di provare ad autenticarti.';
$lang_bridgemgr_php['wait'] = 'attendi';
$lang_bridgemgr_php['browse'] = 'sfoglia';
}

// ------------------------------------------------------------------------- //
// File calendar.php
// ------------------------------------------------------------------------- //
if (defined('CALENDAR_PHP')) {
$lang_calendar_php['title'] = 'Calendario';
$lang_calendar_php['clear_date'] = 'reimposta data';
$lang_calendar_php['files'] = 'immagini'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //
if (defined('CATMGR_PHP')) {
$lang_catmgr_php['miss_param'] = 'Parametri richiesti per l\'operazione \'%s\' non forniti!';
$lang_catmgr_php['unknown_cat'] = 'La categoria selezionata non esiste nel database';
$lang_catmgr_php['usergal_cat_ro'] = 'La categoria delle gallerie utente non pu&ograve; essere cancellata';
$lang_catmgr_php['manage_cat'] = 'Gestisci le categorie';
$lang_catmgr_php['confirm_delete'] = 'Sei sicuro che vuoi CANCELLARE questa categoria?'; // js-alert
$lang_catmgr_php['category'] = 'Categorie'; // cpg1.5
$lang_catmgr_php['operations'] = 'Operazioni';
$lang_catmgr_php['move_into'] = 'Sposta in';
$lang_catmgr_php['update_create'] = 'Aggiorna/crea categoria';
$lang_catmgr_php['parent_cat'] = 'Categoria madre';
$lang_catmgr_php['cat_title'] = 'Titolo categoria';
$lang_catmgr_php['cat_thumb'] = 'Anteprima categoria';
$lang_catmgr_php['cat_desc'] = 'Descrizione categoria';
$lang_catmgr_php['categories_alpha_sort'] = 'Ordina le categorie in ordine alfabetico (invece che personalizzato)';
$lang_catmgr_php['save_cfg'] = 'Salva la configurazione';
$lang_catmgr_php['no_category'] = '* Nessuna categoria *'; // cpg1.5
$lang_catmgr_php['group_create_alb'] = 'Gruppo/i a cui &egrave; permesso creare album in questa categoria'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File contact.php
// ------------------------------------------------------------------------- //
if (defined('CONTACT_PHP')) {
$lang_contact_php['title'] = 'Contatti'; // cpg1.5
$lang_contact_php['your_name'] = 'Il tuo nome'; // cpg1.5
$lang_contact_php['your_email'] = 'Il tuo indirizzo di posta elettronica'; // cpg1.5
$lang_contact_php['subject'] = 'Oggetto'; // cpg1.5
$lang_contact_php['your_message'] = 'Il tuo messaggio'; // cpg1.5
$lang_contact_php['name_field_mandatory'] = 'Inserisci il tuo nome'; // cpg1.5 // js-alert
$lang_contact_php['name_field_invalid'] = 'Inserisci il tuo vero nome'; // cpg1.5 // js-alert
$lang_contact_php['email_field_mandatory'] = 'Inserisci il tuo indirizzo di posta elettronica'; // cpg1.5 // js-alert
$lang_contact_php['email_field_invalid'] = 'Inserisci un indirizzo di posta elettronica valido'; // cpg1.5 // js-alert
$lang_contact_php['subject_field_mandatory'] = 'Inserisci un oggetto significativo'; // cpg1.5 // js-alert
$lang_contact_php['message_field_mandatory'] = 'Scrivi il tuo messaggio'; // cpg1.5 // js-alert
$lang_contact_php['confirmation'] = 'Conferma'; // cpg1.5
$lang_contact_php['email_headline'] = 'Questo messaggio di posta elettronica &egrave; stato spedita a %s usando il modulo contatti di %s dall\'indirizzo IP %s'; // cpg1.5
$lang_contact_php['registered_user'] = 'utente registrato'; // cpg1.5
$lang_contact_php['guest'] = 'visitatore'; // cpg1.5
$lang_contact_php['unknown'] = 'sconosciuto'; // cpg1.5
$lang_contact_php['user_info'] = 'Il %s chiamato %s con indirizzo e-mail %s ha detto:'; // cpg1.5
$lang_contact_php['failed_sending_email'] = 'Invio messaggio fallito. Riprova pi&ugrave; tardi.'; // cpg1.5
$lang_contact_php['email_sent'] = 'Il tuo messaggio di posta elettronica &egrave; stato spedito.'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //
if (defined('ADMIN_PHP')) {
$lang_admin_php['title'] = 'Configurazione della galleria';
$lang_admin_php['general_settings'] = 'Impostazioni generali'; // cpg1.5
$lang_admin_php['language_charset_settings'] = 'Lingua &amp; impostazioni caratteri'; // cpg1.5
$lang_admin_php['themes_settings'] = 'Impostazioni temi'; // cpg1.5
$lang_admin_php['album_list_view'] = 'Visualizzazione lista album'; // cpg1.5
$lang_admin_php['thumbnail_view'] = 'Visualizzazione miniature'; // cpg1.5
$lang_admin_php['image_view'] = 'Visualizzazione immagini'; // cpg1.5
$lang_admin_php['comment_settings'] = 'Impostazioni commenti'; // cpg1.5
$lang_admin_php['thumbnail_settings'] = 'Impostazioni miniature'; // cpg1.5
$lang_admin_php['file_settings'] = 'Impostazioni immagini'; // cpg1.5
$lang_admin_php['image_watermarking'] = 'Filigrana'; // cpg1.5
$lang_admin_php['registration'] = 'Registrazione'; // cpg1.5
$lang_admin_php['user_settings'] = 'Impostazioni utente'; // cpg1.5
$lang_admin_php['custom_fields_user_profile'] = 'Campi personalizzati per il profilo utente (lasciare vuoti se non utilizzati). Usare il Profilo 6 per testi lunghi, come una biografia'; // cpg1.5
$lang_admin_php['custom_fields_image_description'] = 'Campi personalizzati per la descrizione dell\'immagine (lasciare vuoti se non utilizzati)'; // cpg1.5
$lang_admin_php['cookie_settings'] = 'Impostazioni cookie'; // cpg1.5
$lang_admin_php['email_settings'] = 'Impostazioni posta elettronica (di solito non c\'&egrave; nulla da modificare; lasciare tutti i campi vuoti se non si &egrave; sicuri)'; // cpg1.5
$lang_admin_php['logging_stats'] = 'Statistiche e rapporti'; // cpg1.5
$lang_admin_php['maintenance_settings'] = 'Impostazioni di manutenzione'; // cpg1.5
$lang_admin_php['manage_exif'] = 'Gestisci visualizzazione dati EXIF';
$lang_admin_php['manage_plugins'] = 'Gestisci plugin';
$lang_admin_php['manage_keyword'] = 'Gestisci parole chiave';
$lang_admin_php['restore_cfg'] = 'Ripristina impostazioni originali';
$lang_admin_php['restore_cfg_confirm'] = 'Vuoi veramente ripristinare i valori originari dell\'intera configurazione? Questa operazione non pu&ograve; essere annullata!'; // cpg1.5 // js-alert
$lang_admin_php['save_cfg'] = 'Salva nuova configurazione';
$lang_admin_php['notes'] = 'Note';
$lang_admin_php['info'] = 'Informazioni';
$lang_admin_php['upd_success'] = 'La configurazione di Coppermine &egrave; stata aggiornata';
$lang_admin_php['restore_success'] = '&Egrave; stata ripristinata la configurazione originaria di Coppermine';
$lang_admin_php['name_a'] = 'Nome ascendente';
$lang_admin_php['name_d'] = 'Nome discendente';
$lang_admin_php['title_a'] = 'Titolo ascendente';
$lang_admin_php['title_d'] = 'Titolo discendente';
$lang_admin_php['date_a'] = 'Data ascendente';
$lang_admin_php['date_d'] = 'Data discendente';
$lang_admin_php['pos_a'] = 'Posizione ascendente';
$lang_admin_php['pos_d'] = 'Posizione discendente';
$lang_admin_php['th_any'] = 'Aspetto massimo';
$lang_admin_php['th_ht'] = 'Altezza';
$lang_admin_php['th_wd'] = 'Larghezza';
$lang_admin_php['th_ex'] = 'Esatta'; // cpg1.5
$lang_admin_php['debug_everyone'] = 'Tutti';
$lang_admin_php['debug_admin'] = 'Solo amministratori';
$lang_admin_php['no_logs'] = 'Disattivati';
$lang_admin_php['log_normal'] = 'Normali';
$lang_admin_php['log_all'] = 'Tutti';
$lang_admin_php['view_logs'] = 'Vedi rapporti';
$lang_admin_php['click_expand'] = 'clicca sul nome della sezione per espandere';
$lang_admin_php['click_collapse'] = 'clicca sul nome della sezione per comprimere'; // cpg1.5
$lang_admin_php['expand_all'] = 'Espandi tutto';
$lang_admin_php['toggle_all'] = 'Comprimi tutto'; // cpg1.5
$lang_admin_php['notice1'] = '(*) Queste impostazioni non devono essere modificate se hai gi&agrave; immagini nel database.';
$lang_admin_php['notice2'] = '(**) Quando modifichi queste impostazioni, esse verranno applicate solo alle immagini inserite da quel momento, quindi &egrave; consigliabile che queste impostazioni non vengano modificate se vi sono gi&agrave; immagini nella galleria. Puoi comunque applicare le modifiche alle immagini esistenti tramite l\'utilit&agrave &quot;<a href="util.php">Strumenti di amministrazione (ridimensiona immagine)</a> &quot; dal menu di amministrazione.';
$lang_admin_php['notice3'] = '(***) Tutti i rapporti sono scritti in inglese.';
$lang_admin_php['bbs_disabled'] = 'La funzione &egrave; disabilitata quando si utilizza il collegamento/integrazione';
$lang_admin_php['auto_resize_everyone'] = 'Tutti';
$lang_admin_php['auto_resize_user'] = 'Solo utenti registrati';
$lang_admin_php['ascending'] = 'ascendente';
$lang_admin_php['descending'] = 'discendente';
$lang_admin_php['collapse_all'] = 'Comprimi tutti'; // cpg1.5
$lang_admin_php['separate_page'] = 'in una pagina separata'; // cpg1.5
$lang_admin_php['inline'] = 'allineati'; // cpg1.5
$lang_admin_php['guests_only'] = 'Solo i visitatori'; // cpg1.5
$lang_admin_php['wm_bottomright'] = 'In basso a destra'; // cpg1.5
$lang_admin_php['wm_bottomleft'] = 'In basso a sinistra'; // cpg1.5
$lang_admin_php['wm_topleft'] = 'In alto a sinistra'; // cpg1.5
$lang_admin_php['wm_topright'] = 'In alto a destra'; // cpg1.5
$lang_admin_php['wm_center'] = 'Al centro'; // cpg1.5
$lang_admin_php['wm_both'] = 'Entrambi'; // cpg1.5
$lang_admin_php['wm_original'] = 'Originale'; // cpg1.5
$lang_admin_php['wm_resized'] = 'Ridimensionato'; // cpg1.5
$lang_admin_php['gallery_name'] = 'Nome galleria'; // cpg1.5
$lang_admin_php['gallery_description'] = 'Descrizione galleria'; // cpg1.5
$lang_admin_php['gallery_admin_email'] = 'E-mail dell\'amministratore della galleria'; // cpg1.5
$lang_admin_php['ecards_more_pic_target'] = 'URL della cartella della galleria Coppermine'; // cpg1.5
$lang_admin_php['ecards_more_pic_target_detail'] = '(con una barra, nessun \'index.php\' o simili alla fine)'; // cpg1.5
$lang_admin_php['home_target'] = 'URL della pagina iniziale'; // cpg1.5
$lang_admin_php['enable_zipdownload'] = 'Permetti di scaricare i preferiti in formato compresso'; // cpg1.5
$lang_admin_php['enable_zipdownload_no_textfile'] = 'solo i preferiti'; // cpg1.5
$lang_admin_php['enable_zipdownload_additional_textfile'] = 'i file preferiti e il file \'leggimi\''; // cpg1.5
$lang_admin_php['time_offset'] = 'Differenza di fuso orario rispetto al GMT'; // cpg1.5
$lang_admin_php['time_offset_detail'] = '(ora attuale: %s)'; // cpg1.5
$lang_admin_php['enable_help'] = 'Abilita le icone di aiuto'; // cpg1.5
$lang_admin_php['enable_help_description'] = 'Aiuto disponibile parzialmente e solo in inglese'; // cpg1.5
$lang_admin_php['clickable_keyword_search'] = 'Abilita parole chiave cliccabili nella ricerca'; // cpg1.5
$lang_admin_php['keyword_separator'] = 'Separatore delle parole chiave'; // cpg1.5
$lang_admin_php['keyword_convert'] = 'Converti il separatore delle parole chiave'; // cpg1.5
$lang_admin_php['enable_plugins'] = 'Abilita i plugin'; // cpg1.5
$lang_admin_php['purge_expired_bans'] = 'Pulisci automaticamente le estromissioni scadute'; // cpg1.5
$lang_admin_php['browse_batch_add'] = 'Interfaccia per l\'aggiunta cumulativa sfogliabile per cartelle'; // cpg1.5
$lang_admin_php['batch_proc_limit'] = 'Processi contemporanei per l\'interfaccia di aggiunta cumulativa'; // cpg1.5
$lang_admin_php['display_thumbs_batch_add'] = 'Mostra le miniature delle anteprime nell\'interfaccia di aggiunta cumulativa'; // cpg1.5
$lang_admin_php['lang'] = 'Lingua principale'; // cpg1.5
$lang_admin_php['language_autodetect'] = 'Riconoscimento automatico lingua'; // cpg1.5
$lang_admin_php['charset'] = 'Codifica carattere'; // cpg1.5
// 'previous_next_tab'] = 'Visulizza precedente/successivo nelle pagine con schede'; // cpg1.5
$lang_admin_php['theme'] = 'Tema'; // cpg1.5
$lang_admin_php['custom_lnk_name'] = 'Nome del collegamento al menu personalizzato'; // cpg1.5
$lang_admin_php['custom_lnk_url'] = 'URL del collegamento al menu personalizzato'; // cpg1.5
$lang_admin_php['enable_menu_icons'] = 'Abilita icone nel menu'; // cpg1.5
$lang_admin_php['show_bbcode_help'] = 'Mostra aiuto BBCode'; // cpg1.5
$lang_admin_php['vanity_block'] = 'Mostra il \'blocco delle vanit&agrave;\' nei temi definiti compatibili con XHTML e CSS'; // cpg1.5
$lang_admin_php['highlight_multiple'] = 'Per evidenziare pi&ugrave; righe contemporaneamente, tieni premuto il tasto [Ctrl]'; // cpg1.5
$lang_admin_php['custom_header_path'] = 'Percorso per l\'inclusione dell\'intestazione personalizzata'; // cpg1.5
$lang_admin_php['custom_footer_path'] = 'Percorso per l\'inclusione del pi&egrave; di pagina personalizzato'; // cpg1.5
$lang_admin_php['browse_by_date'] = 'Abilita la consultazione per data'; // cpg1.5
$lang_admin_php['display_redirection_page'] = 'Mostra le pagine di reindirizzamento'; // cpg1.5
$lang_admin_php['display_xp_publish_link'] = 'Promuovi l\'utilizzo di XP Publisher mostrandone il collegamento nella pagina di caricamento'; // cpg1.5
$lang_admin_php['main_table_width'] = 'Larghezza della pagina principale'; // cpg1.5
$lang_admin_php['pixels_or_percent'] = 'pixel o %'; // cpg1.5
$lang_admin_php['subcat_level'] = 'Numero di livelli delle categorie da mostrare'; // cpg1.5
$lang_admin_php['albums_per_page'] = 'Numero degli album da mostrare'; // cpg1.5
$lang_admin_php['album_list_cols'] = 'Numero di colonne per la lista degli album'; // cpg1.5
$lang_admin_php['alb_list_thumb_size'] = 'Dimensione delle miniature degli album'; // cpg1.5
$lang_admin_php['main_page_layout'] = 'Il contenuto della pagina principale'; // cpg1.5
$lang_admin_php['first_level'] = 'Mostra le miniature degli album di primo livello nelle categorie'; // cpg1.5
$lang_admin_php['categories_alpha_sort'] = 'Ordina le categorie alfabeticamente'; // cpg1.5
$lang_admin_php['categories_alpha_sort_details'] = '(invece che in ordine personalizzato)'; // cpg1.5
$lang_admin_php['link_pic_count'] = 'Mostra il numero delle immagini collegate'; // cpg1.5
$lang_admin_php['thumbcols'] = 'Numero di colonne nella pagina delle miniature'; // cpg1.5
$lang_admin_php['thumbrows'] = 'Numero di righe nella pagina delle miniature'; // cpg1.5
$lang_admin_php['max_tabs'] = 'Numero massimo di schede da mostrare'; // cpg1.5
$lang_admin_php['tabs_dropdown'] = 'Mostra un menu a tendina con tutte le pagine vicino alle schede'; // cpg1.5
$lang_admin_php['caption_in_thumbview'] = 'Visualizza la didascalia della foto (in aggiunta al titolo) sotto la miniatura'; // cpg1.5
$lang_admin_php['views_in_thumbview'] = 'Visualizza il numero delle visualizzazioni sotto la miniatura'; // cpg1.5
$lang_admin_php['display_comment_count'] = 'Visualizza il numero dei commenti sotto la miniatura'; // cpg1.5
$lang_admin_php['display_uploader'] = 'Visualizza il nome di chi ha caricato il file sotto la miniatura'; // cpg1.5
// 'display_admin_uploader'] = 'Visualizza il nome dell\'amministratore che ha caricato il file sotto la miniatura'; // cpg1.5
$lang_admin_php['display_filename'] = 'Visualizza il nome del file sotto la miniatura'; // cpg1.5
$lang_admin_php['display_thumbnail_rating'] = 'Visualizza i voti sotto la miniatura'; // cpg1.5
$lang_admin_php['alb_desc_thumb'] = 'Visualizza la descrizione dell\'album'; // cpg1.5
$lang_admin_php['thumbnail_to_fullsize'] = 'Vai direttamente dalla miniatura all\'immagine a dimensioni reali'; // cpg1.5
$lang_admin_php['default_sort_order'] = 'Ordinamento predefinito per i file'; // cpg1.5
$lang_admin_php['min_votes_for_rating'] = 'Numero minimo di voti perch&egrave; un file appaia nella lista delle \'Pi&ugrave; votate\''; // cpg1.5
$lang_admin_php['picture_table_width'] = 'Larghezza della tabella per la visualizzazione dei file'; // cpg1.5
$lang_admin_php['display_pic_info'] = 'Informazioni sui file visibili in modo predefinito'; // cpg1.5
$lang_admin_php['picinfo_movie_download_link'] = 'Mostra il collegamento per scaricare i filmati nell\'area delle informazioni sul file'; // cpg1.5
$lang_admin_php['max_img_desc_length'] = 'Lunghezza massima per la descrizione delle immagini'; // cpg1.5
$lang_admin_php['max_com_wlength'] = 'Numero massimo di caratteri in una parola'; // cpg1.5
$lang_admin_php['display_film_strip'] = 'Mostra pellicola'; // cpg1.5
$lang_admin_php['max_film_strip_items'] = 'Numero di elementi nella pellicola'; // cpg1.5
$lang_admin_php['slideshow_interval'] = 'Intervallo per la presentazione'; // cpg1.5
$lang_admin_php['milliseconds'] = 'millisecondi'; // cpg1.5
$lang_admin_php['slideshow_interval_detail'] = '1 secondo = 1000 millisecondi'; // cpg1.5
$lang_admin_php['slideshow_hits'] = 'Conta i click nella presentazione'; // cpg1.5
$lang_admin_php['ecard_flash'] = 'Permetti cartoline Flash'; // cpg1.5
$lang_admin_php['not_recommended'] = 'non consigliato'; // cpg1.5
$lang_admin_php['recommended'] = 'consigliato'; // cpg1.5
$lang_admin_php['transparent_overlay'] = 'Inserisci una pellicola trasparente per ridurre al minimo il rischio di furto delle immagini'; // cpg1.5
$lang_admin_php['old_style_rating'] = 'Torna al vecchio metodo di voto'; // cpg1.5
$lang_admin_php['old_style_rating_extra'] = 'Disabiliter&agrave; l\'opzione \'Numero di stelle da usare nei voti\''; // cpg1.5
$lang_admin_php['rating_stars_amount'] = 'Numero stelle da usare nei voti'; // cpg1.5
$lang_admin_php['rate_own_files'] = 'Gli utenti possono votare per le proprie immagini'; // cpg1.5
$lang_admin_php['filter_bad_words'] = 'Filtra le parole censurate nei commenti'; // cpg1.5
$lang_admin_php['enable_smilies'] = 'Permetti le faccine nei commenti'; // cpg1.5
$lang_admin_php['disable_comment_flood_protect'] = 'Permetti piugrave; commenti consecutivi sullo stesso file da parte dello stesso utente'; // cpg1.5
$lang_admin_php['disable_comment_flood_protect_details'] = '(disabilita la protezione anti-flood)'; // cpg1.5
$lang_admin_php['max_com_lines'] = 'Numero massimo di righe in un commento'; // cpg1.5
$lang_admin_php['max_com_size'] = 'Lunghezza massima di un commento'; // cpg1.5
$lang_admin_php['email_comment_notification'] = 'Notifica i commenti all\'amministratore via posta elettronica'; // cpg1.5
$lang_admin_php['comments_sort_descending'] = 'Ordinamento dei commenti'; // cpg1.5
$lang_admin_php['comments_per_page'] = 'Commenti per pagina'; // cpg1.5
$lang_admin_php['comments_anon_pfx'] = 'Prefisso per gli autori dei commenti anonimi'; // cpg1.5
$lang_admin_php['comment_approval'] = 'I commenti richiedono approvazione'; // cpg1.5
$lang_admin_php['display_comment_approval_only'] = 'Visualizza solo i commenti che richiedono approvazione nella pagina &quot;Esamina commenti&quot;'; // cpg1.5
$lang_admin_php['comment_placeholder'] = 'Visualizza testo segnaposto agli utenti per i commenti in attesa dell\'approvazione dell\'amministratore'; // cpg1.5
$lang_admin_php['comment_user_edit'] = 'Permetti agli utenti di modificare i propri commenti'; // cpg1.5
$lang_admin_php['comment_captcha'] = 'Visualizza Captcha (conferma visuale) per inserire commenti'; // cpg1.5
$lang_admin_php['comment_akismet_enable'] = 'Opzioni Akismet'; // cpg1.5
$lang_admin_php['comment_akismet_enable_description'] = 'Cosa fare se Akismet respinge i commenti come spam?'; // cpg1.5
$lang_admin_php['comment_akismet_applicable_only'] = 'Le opzioni si applicano se Akismet &egrave; stato abilitato immettendo una valida chiave API'; // cpg1.5
$lang_admin_php['comment_akismet_enable_approval'] = 'Permetti i commenti che non superano la verifica di Akismet, ma segnali come non approvati'; // cpg1.5
$lang_admin_php['comment_akismet_drop_tell'] = 'Rifiuta un commento che non superi la verifica e comunica all\'autore che &egrave; stato respinto'; // cpg1.5
$lang_admin_php['comment_akismet_drop_lie'] = 'Rifiuta un commento che non superi la verifica, ma comunica all\'autore (spammer) che &egrave; stato inserito'; // cpg1.5
$lang_admin_php['comment_akismet_api_key'] = 'Chiave API Akismet'; // cpg1.5
$lang_admin_php['comment_akismet_api_key_description'] = 'Lascia vuoto per disabilitare Akismet'; // cpg1.5
$lang_admin_php['comment_akismet_group'] = 'Applica Akismet per commenti scritti da '; // cpg1.5
$lang_admin_php['comment_promote_registration'] = 'Chiedi ai visitatori di autenticarsi per inserire commenti'; // cpg1.5
$lang_admin_php['thumb_width'] = 'Dimensione massima di una miniatura (larghezza, se usi "Esatta" in "Usa dimensione")'; // cpg1.5
$lang_admin_php['thumb_use'] = 'Usa dimensione'; // cpg1.5
$lang_admin_php['thumb_use_detail'] = '(larghezza o altezza o aspetto massimo per una miniatura)'; // cpg1.5
$lang_admin_php['thumb_height'] = 'Altezza di una miniatura'; // cpg1.5
$lang_admin_php['thumb_height_detail'] = '(si applica solo se usi &quot;esatta&quot; in &quot;Usa dimensione&quot;)'; // cpg1.5
$lang_admin_php['movie_audio_document'] = 'filmati, audio, documenti'; // cpg1.5
$lang_admin_php['thumb_pfx'] = 'Il prefisso per le miniature'; // cpg1.5
$lang_admin_php['enable_unsharp'] = 'Contrasta miniatura: abilita maschera di contrasto'; // cpg1.5
$lang_admin_php['unsharp_amount'] = 'Quantit&agrave; del contrasto per la miniatura'; // cpg1.5
$lang_admin_php['unsharp_radius'] = 'Raggio del contrasto per la miniatura'; // cpg1.5
$lang_admin_php['unsharp_threshold'] = 'Soglia del contrasto per la miniatura'; // cpg1.5
$lang_admin_php['jpeg_qual'] = 'Qualit&agrave; delle immanini JPEG'; // cpg1.5
$lang_admin_php['make_intermediate'] = 'Crea immagine intermedia'; // cpg1.5
$lang_admin_php['picture_use'] = 'Usa dimensione'; // cpg1.5
$lang_admin_php['picture_use_detail'] = '(larghezza o altezza o aspetto massimo per l\'immagine intermedia)'; // cpg1.5
$lang_admin_php['picture_use_thumb'] = 'Come la miniatura'; // cpg1.5
$lang_admin_php['picture_width'] = 'Larghezza o altezza massime per l\'immagine intermedia'; // cpg1.5
$lang_admin_php['max_upl_size'] = 'Dimensione massima per le immagini caricate'; // cpg1.5
$lang_admin_php['kilobytes'] = 'KB'; // cpg1.5
$lang_admin_php['pixels'] = 'pixel'; // cpg1.5
$lang_admin_php['max_upl_width_height'] = 'Larghezza o altezza massime per le immagini caricate'; // cpg1.5
$lang_admin_php['auto_resize'] = 'Ridimensiona immagini che sono pi&ugrave; grandi rispetto alla larghezza o altezza massime'; // cpg1.5
$lang_admin_php['fullsize_padding_x'] = 'Margine orizzontale della finestra pop-up delle immagini a grandezza piena'; // cpg1.5
$lang_admin_php['fullsize_padding_y'] = 'Margine verticale della finestra pop-up delle immagini a grandezza piena'; // cpg1.5
$lang_admin_php['allow_private_albums'] = 'Gli album possono essere privati'; // cpg1.5
$lang_admin_php['allow_private_albums_note'] = '(Nota: se cambi da \'si\' a \'no\' tutti gli album attualmente privati saranno visibili)'; // cpg1.5
$lang_admin_php['show_private'] = 'Mostra icona album privato agli utenti non autenticati'; // cpg1.5
$lang_admin_php['forbiden_fname_char'] = 'Caratteri non permessi nei nomi dei file'; // cpg1.5
$lang_admin_php['silly_safe_mode'] = 'Abilita &quot;silly safe mode&quot;'; // cpg1.5
$lang_admin_php['allowed_img_types'] = 'Formati immagine consentiti'; // cpg1.5
$lang_admin_php['allowed_mov_types'] = 'Formati video consentiti'; // cpg1.5
$lang_admin_php['media_autostart'] = 'Riproduzione video automatica'; // cpg1.5
$lang_admin_php['allowed_snd_types'] = 'Formati audio consentiti'; // cpg1.5
$lang_admin_php['allowed_doc_types'] = 'Formati documenti consentiti'; // cpg1.5
$lang_admin_php['thumb_method'] = 'Metodo per il ridimensionamento delle immagini'; // cpg1.5
$lang_admin_php['impath'] = 'Percorso dell\'utilit&agrave; \'convert\' di ImageMagick'; // cpg1.5
$lang_admin_php['impath_example'] = '(es. /usr/bin/)'; // cpg1.5
$lang_admin_php['im_options'] = 'Opzioni da linea di comando aggiuntive per ImageMagick'; // cpg1.5
$lang_admin_php['read_exif_data'] = 'Leggi i dati EXIF dai file JPEG'; // cpg1.5
$lang_admin_php['read_iptc_data'] = 'Leggi i dati IPTC dai file JPEG'; // cpg1.5
$lang_admin_php['fullpath'] = 'Cartella degli album'; // cpg1.5
$lang_admin_php['userpics'] = 'Cartella per i file degli utenti'; // cpg1.5
$lang_admin_php['normal_pfx'] = 'Prefisso per le immagini intermedie'; // cpg1.5
$lang_admin_php['default_dir_mode'] = 'Modalit&agrave; predefinita per le cartelle'; // cpg1.5
$lang_admin_php['default_file_mode'] = 'Modalit&agrave; predefinita per i file'; // cpg1.5
$lang_admin_php['enable_watermark'] = 'Applica filigrana alle immagini'; // cpg1.5
$lang_admin_php['enable_thumb_watermark'] = 'Miniatura personalizzata per la filigrana'; // cpg1.5
$lang_admin_php['where_put_watermark'] = 'Dove posizionare la filigrana'; // cpg1.5
$lang_admin_php['which_files_to_watermark'] = 'Quali immagini devono essere filigranate'; // cpg1.5
$lang_admin_php['watermark_file'] = 'Che immagine usare per la filigrana'; // cpg1.5
$lang_admin_php['watermark_transparency'] = 'Trasparenza per l\'intera immagine'; // cpg1.5
$lang_admin_php['zero_2_hundred'] = '0-100'; // cpg1.5
$lang_admin_php['reduce_watermark'] = 'Scala la filigrana di una immagine in larghezza se &egrave; pi&ugrave; piccola del valore inserito. Il riferimento è al 100%. Il ridimensionamento della filigrana &egrave; lineare (0 per disabilitarlo)'; // cpg1.5
$lang_admin_php['watermark_transparency_featherx'] = 'Imposta la trasparenza colore x'; // cpg1.5
$lang_admin_php['watermark_transparency_feathery'] = 'Imposta la trasparenza colore y'; // cpg1.5
$lang_admin_php['gd2_only'] = 'Solo GD2'; // cpg1.5
$lang_admin_php['allow_user_registration'] = 'Permetti la registrazione di nuovi utenti'; // cpg1.5
$lang_admin_php['global_registration_pw'] = 'Password globale per la registrazione'; // cpg1.5
$lang_admin_php['user_registration_disclaimer'] = 'Mostra termini e condizioni alla registrazione dell\'utente'; // cpg1.5
$lang_admin_php['registration_captcha'] = 'Mostra il Captcha (Conferma visuale) nella pagina di registrazione'; // cpg1.5
$lang_admin_php['reg_requires_valid_email'] = 'La registrazione richiede verifica dell\'e-mail'; // cpg1.5
$lang_admin_php['reg_notify_admin_email'] = 'Notifica via posta elettronica all\'amministratore la registrazione di nuovi utenti'; // cpg1.5
$lang_admin_php['admin_activation'] = 'Attivazione delle registrazioni da parte dell\'amministratore'; // cpg1.5
$lang_admin_php['personal_album_on_registration'] = 'Crea l\'album dell\'utente nella galleria personale alla registrazione'; // cpg1.5
$lang_admin_php['allow_unlogged_access'] = 'Permetti l\'accesso agli utenti non autenticati (visitatori o anonimi)'; // cpg1.5
$lang_admin_php['thumbnail_intermediate_full'] = 'miniatura, immagine intermedia e immagine a grandezza reale'; // cpg1.5
$lang_admin_php['thumbnail_intermediate'] = 'miniatura e immagine intermedia'; // cpg1.5
$lang_admin_php['thumbnail_only'] = 'solo miniatura'; // cpg1.5
$lang_admin_php['upload_mechanism'] = 'Metodo di caricamento predefinito'; // cpg1.5
$lang_admin_php['upload_swf'] = 'Avanzato - pi&ugrave; file alla volta, interfaccia Flash (raccomandato)'; // cpg1.5
$lang_admin_php['upload_single'] = 'Semplice - un file alla volta'; // cpg1.5
$lang_admin_php['allow_user_upload_choice'] = 'Permetti agli utenti di scegliere il metodo di caricamento'; // cpg1.5
$lang_admin_php['allow_duplicate_emails_addr'] = 'Permetti a due utenti di avere lo stesso indirizzo di posta elettronica'; // cpg1.5
$lang_admin_php['upl_notify_admin_email'] = 'Notifica all\'amministratore dei caricamenti in attesa di approvazione'; // cpg1.5
$lang_admin_php['allow_memberlist'] = 'Permetti agli utenti autenticati di vedere l\'elenco degli utenti'; // cpg1.5
$lang_admin_php['allow_email_change'] = 'Permetti agli utenti di cambiare indirizzo di posta elettronica nel loro profilo'; // cpg1.5
$lang_admin_php['allow_user_account_delete'] = 'Permetti agli utenti di cancellare il proprio account'; // cpg1.5
$lang_admin_php['users_can_edit_pics'] = 'Permetti agli utenti di mantenere il controllo delle proprie immagini nelle gallerie pubbliche'; // cpg1.5
$lang_admin_php['allow_user_move_album'] = 'Permetti agli utenti di spostare i loro album da/a categorie consentite'; // cpg1.5
$lang_admin_php['allow_user_album_keyword'] = 'Permetti agli utenti di assegnare parole chiave agli album'; // cpg1.5
$lang_admin_php['allow_user_edit_after_cat_close'] = 'Permetti agli utenti di modificare i propri album in una categoria bloccata.'; // cpg1.5
$lang_admin_php['login_method_username'] = 'Nome utente'; // cpg1.5
$lang_admin_php['login_method_email'] = 'Indirizzo di posta elettronica'; // cpg1.5
$lang_admin_php['login_method_both'] = 'Entrambi'; // cpg1.5
$lang_admin_php['login_method'] = 'Come vuoi che gli utenti possano autenticarsi'; // cpg1.5
$lang_admin_php['login_threshold'] = 'Numero di tentativi di autenticazione falliti prima dell\'estromissione temporanea'; // cpg1.5
$lang_admin_php['login_threshold_detail'] = '(per impedire attacchi di \'forza bruta\')'; // cpg1.5
$lang_admin_php['login_expiry'] = 'Durata dell\'estromissione temporanea dopo le autenticazioni fallite'; // cpg1.5
$lang_admin_php['minutes'] = 'minuti'; // cpg1.5
$lang_admin_php['report_post'] = 'Abilita il rapporto all\'amministratore'; // cpg1.5
$lang_admin_php['user_profile1_name'] = 'Nome profilo 1'; // cpg1.5
$lang_admin_php['user_profile2_name'] = 'Nome profilo 2'; // cpg1.5
$lang_admin_php['user_profile3_name'] = 'Nome profilo 2'; // cpg1.5
$lang_admin_php['user_profile4_name'] = 'Nome profilo 4'; // cpg1.5
$lang_admin_php['user_profile5_name'] = 'Nome profilo 5'; // cpg1.5
$lang_admin_php['user_profile6_name'] = 'Nome profilo 6'; // cpg1.5
$lang_admin_php['user_field1_name'] = 'Nome campo 1'; // cpg1.5
$lang_admin_php['user_field2_name'] = 'Nome campo 2'; // cpg1.5
$lang_admin_php['user_field3_name'] = 'Nome campo 3'; // cpg1.5
$lang_admin_php['user_field4_name'] = 'Nome campo 4'; // cpg1.5
$lang_admin_php['cookie_name'] = 'Nome del cookie'; // cpg1.5
$lang_admin_php['cookie_path'] = 'Percorso del cookie'; // cpg1.5
$lang_admin_php['smtp_host'] = 'Host SMTP (se lasciato vuoto, verr&agrave; utilizzato sendmail)'; // cpg1.5
$lang_admin_php['smtp_username'] = 'Nome utente SMTP'; // cpg1.5
$lang_admin_php['smtp_password'] = 'Password SMTP'; // cpg1.5
$lang_admin_php['log_mode'] = 'Modalità rapporti'; // cpg1.5
$lang_admin_php['log_mode_details'] = 'Tutti i rapporti sono scritti in inglese.'; // cpg1.5
$lang_admin_php['log_ecards'] = 'Registra cartoline'; // cpg1.5
$lang_admin_php['log_ecards_detail'] = 'Attenzione: abilitare la registrazione pu&ograve; causare problemi legali. Gli utenti dovrebbero essere informati all\'atto dell\'iscrizione che le cartoline sono registrate. &Egrave; parimenti raccomandato predisporre una pagina separata con le informazioni sulla privacy.'; // cpg1.5
$lang_admin_php['vote_details'] = 'Conserva statistiche dettagliate sui voti'; // cpg1.5
$lang_admin_php['hit_details'] = 'Conserva statistiche dettagliate sulle visite'; // cpg1.5
$lang_admin_php['display_stats_on_index'] = 'Mostra le statistiche nella pagina principale'; // cpg1.5
$lang_admin_php['count_file_hits'] = 'Conta visualizzazioni delle immagini'; // cpg1.5
$lang_admin_php['count_album_hits'] = 'Conta visualizzazioni degli album'; // cpg1.5
$lang_admin_php['count_admin_hits'] = 'Conta visualizzazioni dell\'Admin'; // cpg1.5
$lang_admin_php['debug_mode'] = 'Abilita modalit&agrave; di debug'; // cpg1.5
$lang_admin_php['debug_notice'] = 'Mostra avvisi PHP nella modalit&agrave; di debug'; // cpg1.5
$lang_admin_php['offline'] = 'La galleria non &egrave; in linea'; // cpg1.5
$lang_admin_php['display_coppermine_news'] = 'Mostra le novit&agrave; da coppermine-gallery.net'; // cpg1.5
$lang_admin_php['display_coppermine_detail'] = 'saranno visualizzate solo all\'amministratore'; // cpg1.5
$lang_admin_php['config_setting_invalid'] = 'Il valore che hai impostato per &laquo;%s&raquo; non &egrave; valido, correggilo.'; // cpg1.5
$lang_admin_php['config_setting_ok'] = 'Le impostazioni per &laquo;%s&raquo; sono state salvate.'; // cpg1.5
$lang_admin_php['contact_form_settings'] = 'Impostazioni per il modulo contatti'; // cpg1.5
$lang_admin_php['contact_form_guest_enable'] = 'Mostra il modulo contatti ai visitatori '; // cpg1.5
$lang_admin_php['contact_form_registered_enable'] = 'Mostra modulo contatti agli utenti registrati'; // cpg1.5
$lang_admin_php['with_captcha'] = 'con il captcha'; // cpg1.5
$lang_admin_php['without_captcha'] = 'senza il captcha'; // cpg1.5
$lang_admin_php['optional'] = 'facoltativo'; // cpg1.5
$lang_admin_php['mandatory'] = 'obbligatorio'; // cpg1.5
$lang_admin_php['contact_form_guest_name_field'] = 'Mostra il campo mittente ai visitatori'; // cpg1.5
$lang_admin_php['contact_form_guest_email_field'] = 'Mostra il campo e-mail ai visitatori'; // cpg1.5
$lang_admin_php['contact_form_subject_field'] = 'Mostra campo oggetto'; // cpg1.5
$lang_admin_php['contact_form_subject_content'] = 'L\'oggetto per le e-mail &egrave; generato dal modulo contatti'; // cpg1.5
$lang_admin_php['contact_form_sender_email'] = 'Usa l\'email del mittente come indirizzo &quot;Da&quot; della e-mail'; // cpg1.5
$lang_admin_php['allow_no_link'] = 'permettila, ma non mostrare il collegamento'; // cpg1.5
$lang_admin_php['allow_show_link'] = 'permettila e promuovila mostrando un collegamento'; // cpg1.5
$lang_admin_php['display_sidebar_user'] = 'Barra laterale per gli utenti registrati'; // cpg1.5
$lang_admin_php['display_sidebar_guest'] = 'Barra laterale per i visitatori'; // cpg1.5
$lang_admin_php['do_not_change'] = 'Non modificare a meno che tu sappia REALMENTE cosa stai facendo!'; // cpg1.5
$lang_admin_php['reset_to_default'] = 'Ripristina alle impostazioni predefinite'; // cpg1.5
$lang_admin_php['no_change_needed'] = 'Non sono richieste modifiche, le opzioni di configurazione hanno ancora l\'impostazione predefinita'; // cpg1.5
$lang_admin_php['enabled'] = 'abilitato'; // cpg1.5
$lang_admin_php['disabled'] = 'disabilitato'; // cpg1.5
$lang_admin_php['none'] = 'nessuno'; // cpg1.5
$lang_admin_php['warning_change'] = 'Quando cambi questa impostazione, solo le immagini aggiunte da quel momento sono interessate al cambiamento, pertanto &egrave; consigliabile che questa impostazione non sia modificata se ci sono gi&agrave; immagini nella galleria. Puoi comunque effettuare modifiche alle immagini esistenti tramite l\'utilit&agrave; "Strumenti amministrativi (ridimensiona immagini)" dal menu di amministrazione.'; // cpg1.5
$lang_admin_php['warning_exist'] = 'Queste impostazioni non devono essere cambiate se sono gi&agrave; presenti immagini nel database.'; // cpg1.5
$lang_admin_php['warning_dont_submit'] = 'Se non sei certo delle conseguenze che comporter&agrave; la modifica di queste impostazioni, non inviare e controlla prima la documentazione.'; // cpg1.5 // js-alert
$lang_admin_php['menu_only'] = 'Solo menu'; // cpg1.5
$lang_admin_php['everywhere'] = 'ovunque'; // cpg1.5
$lang_admin_php['manage_languages'] = 'Gestisci lingue'; // cpg1.5
$lang_admin_php['form_token_lifetime'] = 'Durata del contrassegno di convalida'; // cpg1.5
$lang_admin_php['seconds'] = 'Secondi'; // cpg1.5
$lang_admin_php['display_reset_boxes_in_config'] = 'Mostra comandi di ripristino nella configurazione'; // cpg1.5
$lang_admin_php['upd_not_needed'] = 'Aggiornamento non necessario.'; // cpg 1.5
}


// ------------------------------------------------------------------------- //
// File db_ecard.php
// ------------------------------------------------------------------------- //
if (defined('DB_ECARD_PHP')) {
$lang_db_ecard_php['title'] = 'Cartoline inviate';
$lang_db_ecard_php['ecard_sender'] = 'Mittente';
$lang_db_ecard_php['ecard_recipient'] = 'Destinatario';
$lang_db_ecard_php['ecard_date'] = 'Data';
$lang_db_ecard_php['ecard_display'] = 'Mostra cartolina';
$lang_db_ecard_php['ecard_name'] = 'Nome';
$lang_db_ecard_php['ecard_email'] = 'E-mail';
$lang_db_ecard_php['ecard_ip'] = 'Indirizzo IP';
$lang_db_ecard_php['ecard_ascending'] = 'ascendente';
$lang_db_ecard_php['ecard_descending'] = 'discendente';
$lang_db_ecard_php['ecard_sorted'] = 'Ordinato';
$lang_db_ecard_php['ecard_by_date'] = 'per data';
$lang_db_ecard_php['ecard_by_sender_name'] = 'per nome mittente';
$lang_db_ecard_php['ecard_by_sender_email'] = 'per e-mail mittente';
$lang_db_ecard_php['ecard_by_sender_ip'] = 'per indirizzo IP mittente';
$lang_db_ecard_php['ecard_by_recipient_name'] = 'per nome destinatario';
$lang_db_ecard_php['ecard_by_recipient_email'] = 'per e-mail destinatario';
$lang_db_ecard_php['ecard_number'] = 'Visualizzate voci da %s a %s di %s';
$lang_db_ecard_php['ecard_goto_page'] = 'vai a pagina';
$lang_db_ecard_php['ecard_records_per_page'] = 'Voci per pagina';
$lang_db_ecard_php['check_all'] = 'Seleziona tutti';
$lang_db_ecard_php['uncheck_all'] = 'Deseleziona tutti';
$lang_db_ecard_php['ecards_delete_selected'] = 'Cancella cartoline selezionate';
$lang_db_ecard_php['ecards_delete_confirm'] = 'Sei sicuro di voler eliminare le voci? Spunta la casella!';
$lang_db_ecard_php['ecards_delete_sure'] = 'Sono sicuro';
$lang_db_ecard_php['invalid_data'] = 'Le informazioni delle cartoline a cui stai accedendo sono state corrotte dal tuo programma di posta elettronica. Controla che il collegamento sia completo.';
}

// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //
if (defined('DB_INPUT_PHP')) {
$lang_db_input_php['empty_name_or_com'] = 'Devi scrivere il tuo nome e un commento';
$lang_db_input_php['com_added'] = 'Il tuo commento &egrave; stato inserito'; // cpg1.5
$lang_db_input_php['alb_need_title'] = 'Devi immettere un titolo per l\'album!';
$lang_db_input_php['no_udp_needed'] = 'Non sono necessari aggiornamenti.';
$lang_db_input_php['alb_updated'] = 'L\'album &egrave; stato aggiornato';
$lang_db_input_php['unknown_album'] = 'L\'album selezionato non esiste o non hai il permesso di caricare in questo album';
$lang_db_input_php['no_pic_uploaded'] = 'Nessun file &egrave; stato caricato!<br />Se hai davvero selezionato un file da caricare, controlla che il server permetta il caricamento di file...';
$lang_db_input_php['err_mkdir'] = 'Impossibile creare la cartella %s!';
$lang_db_input_php['dest_dir_ro'] = 'Lo script non ha i permessi per scrivere nella cartella di destinazione %s!';
$lang_db_input_php['err_move'] = 'Impossibile spostare %s in %s!';
$lang_db_input_php['err_fsize_too_large'] = 'La dimensione del file che hai caricato &egrave; troppo grande (il massimo consentito &egrave; %s x %s)!';
$lang_db_input_php['err_imgsize_too_large'] = 'La dimensione del file che hai caricato &egrave; troppo grande (il massimo consentito &egrave; %s KB)!';
$lang_db_input_php['err_invalid_img'] = 'Il formato del file che hai caricato non &egrave; valido!';
$lang_db_input_php['allowed_img_types'] = 'Puoi caricare solo %s immagini.';
$lang_db_input_php['err_insert_pic'] = 'Il file \'%s\' non pu&ograve; essere inserito nell\'album ';
$lang_db_input_php['upload_success'] = 'Il file &egrave; stato caricato con successo.<br />Sar&agrave; visibile dopo l\'approvazione dell\'amministratore.';
$lang_db_input_php['notify_admin_email_subject'] = '%s - Avviso di caricamento';
$lang_db_input_php['notify_admin_email_body'] = 'Un\'immagine &egrave; stata caricata da %s e richiede la tua approvazione. Visita %s';
$lang_db_input_php['info'] = 'Informazione';
$lang_db_input_php['com_updated'] = 'Commento aggiornato'; // cpg1.5
$lang_db_input_php['alb_updated'] = 'Album aggiornato';
$lang_db_input_php['err_comment_empty'] = 'Il commento &egrave; vuoto!';
$lang_db_input_php['err_invalid_fext'] = 'Sono ammessi solo file con le seguenti estensioni:'; // js-alert
$lang_db_input_php['no_flood'] = 'Spiacente, ma sei l\'autore dell\'ultimo commento inserito per questo file<br />Modifica il commento precedente se vuoi cambiarlo';
$lang_db_input_php['redirect_msg'] = 'Stai per essere reindirizzato.<br /><br />Premi su \'CONTINUA\' se la pagina non si ricarica automaticamente';
$lang_db_input_php['upl_success'] = 'Il tuo file &egrave; stato caricato correttamente';
$lang_db_input_php['email_comment_subject'] = 'Un commento &egrave; stato inserito nella Galleria Fotografica Coppermine';
$lang_db_input_php['email_comment_body'] = 'Qualcuno ha scritto un commento nella tua galleria. Leggilo a';
$lang_db_input_php['album_not_selected'] = 'Album non selezionato';
$lang_db_input_php['com_author_error'] = 'Un utente registrato sta usando questo nome utente. Autenticati o usane un altro';
}

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //
if (defined('DELETE_PHP')) {
$lang_delete_php['orig_pic'] = 'Immagine originale'; // cpg1.5
$lang_delete_php['fs_pic'] = 'Immagine a grandezza piena';
$lang_delete_php['del_success'] = 'Cancellata con successo';
$lang_delete_php['ns_pic'] = 'Immagine normale';
$lang_delete_php['err_del'] = 'non pu&ograve; essere cancellata';
$lang_delete_php['thumb_pic'] = 'miniatura';
$lang_delete_php['comment'] = 'commento';
$lang_delete_php['im_in_alb'] = 'immagine nell\'album';
$lang_delete_php['alb_del_success'] = 'Album &laquo;%s&raquo; cancellato';
$lang_delete_php['alb_mgr'] = 'Gestione album';
$lang_delete_php['err_invalid_data'] = 'Dati non validi ricevuti in \'%s\'';
$lang_delete_php['create_alb'] = 'Creazione album \'%s\'';
$lang_delete_php['update_alb'] = 'Aggiornamento album \'%s\' con titolo \'%s\' e indice \'%s\'';
$lang_delete_php['del_pic'] = 'Cancella immagine';
$lang_delete_php['del_alb'] = 'Cancella album';
$lang_delete_php['del_user'] = 'Cancella utente';
$lang_delete_php['err_unknown_user'] = 'L\'utente selezionato non esiste!';
$lang_delete_php['err_empty_groups'] = 'Non c\'&egrave; una tabella gruppi, o la tabella gruppi &egrave; vuota!';
$lang_delete_php['comment_deleted'] = 'Il commento &egrave; stato cancellato con successo';
$lang_delete_php['npic'] = 'Foto';
$lang_delete_php['pic_mgr'] = 'Gestione foto';
$lang_delete_php['update_pic'] = 'Aggiornamento foto \'%s\' con nome del file \'%s\' e indice \'%s\'';
$lang_delete_php['username'] = 'Nome utente';
$lang_delete_php['anonymized_comments'] = '%s commento/i reso/i anonimo/i';
$lang_delete_php['anonymized_uploads'] = '%s caricamento/i pubblico/i reso/i anonimo/i';
$lang_delete_php['deleted_comments'] = '%s commento/i cancellato/i';
$lang_delete_php['deleted_uploads'] = '%s caricamento/i pubblico/i cancellato/i';
$lang_delete_php['user_deleted'] = 'cancellato l\'utente %s';
$lang_delete_php['activate_user'] = 'Attiva l\'utente';
$lang_delete_php['user_already_active'] = 'L\'utenza &egrave; gi&agrave; attivata';
$lang_delete_php['activated'] = 'Attivato';
$lang_delete_php['deactivate_user'] = 'Disattivare utente';
$lang_delete_php['user_already_inactive'] = 'L\'utenza &egrave; gi&agrave; disattivata';
$lang_delete_php['deactivated'] = 'Disattivato';
$lang_delete_php['reset_password'] = 'Reimposta password';
$lang_delete_php['password_reset'] = 'Reimposta password a %s';
$lang_delete_php['change_group'] = 'Modifica il gruppo primario';
$lang_delete_php['change_group_to_group'] = 'Modifica da %s a %s';
$lang_delete_php['add_group'] = 'Aggiungi un gruppo secondario';
$lang_delete_php['add_group_to_group'] = 'Aggiunto l\'utente %s al gruppo %s. &Egrave; adesso membro di %s come gruppo primario e di %s come gruppo secondario.';
$lang_delete_php['status'] = 'Stato';
$lang_delete_php['updating_album'] = 'Aggiornamento album '; // cpg1.5
$lang_delete_php['moved_picture_to_position'] = 'Spostata foto %s nella posizione %s'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //
if (defined('DISPLAYIMAGE_PHP')){
$lang_display_image_php['confirm_del'] = 'Sei sicuro che vuoi CANCELLARE questo file?\\nAnche i commenti verranno cancellati.'; // js-alert
$lang_display_image_php['del_pic'] = 'Cancella questo file';
$lang_display_image_php['size'] = '%s x %s pixels';
$lang_display_image_php['views'] = '%s volte';
$lang_display_image_php['slideshow'] = 'Presentazione';
$lang_display_image_php['stop_slideshow'] = 'Ferma la presentazione';
$lang_display_image_php['view_fs'] = 'Clicca per vedere l\'immagine alla massima grandezza';
$lang_display_image_php['edit_pic'] = 'Modifica le informazioni sul file';
$lang_display_image_php['crop_pic'] = 'Taglia e ruota';
$lang_display_image_php['set_player'] = 'Cambia riproduttore';

$lang_picinfo['title'] = 'Informazioni sul file';
$lang_picinfo['Album name'] = 'Nome album';
$lang_picinfo['Rating'] = 'Valutazione (%s voti)';
$lang_picinfo['Date Added'] = 'Data di inserimento';
$lang_picinfo['Dimensions'] = 'Dimensioni';
$lang_picinfo['Displayed'] = 'Visualizzato';
$lang_picinfo['URL'] = 'URL';
$lang_picinfo['Make'] = 'Marca';
$lang_picinfo['Model'] = 'Modello';
$lang_picinfo['DateTime'] = 'Giorno e ora';
$lang_picinfo['ISOSpeedRatings'] = 'ISO';
$lang_picinfo['MaxApertureValue'] = 'Apertura Massima';
$lang_picinfo['FocalLength'] = 'Lunghezza focale';
$lang_picinfo['Comment'] = 'Commento';
$lang_picinfo['addFav'] = 'Aggiungi ai preferiti';
$lang_picinfo['addFavPhrase'] = 'Preferiti';
$lang_picinfo['remFav'] = 'Rimuovi dai preferiti';
$lang_picinfo['iptcTitle'] = 'Titolo IPTC';
$lang_picinfo['iptcCopyright'] = 'Copyright IPTC';
$lang_picinfo['iptcKeywords'] = 'Parole chiave IPTC';
$lang_picinfo['iptcCategory'] = 'Categoria IPTC';
$lang_picinfo['iptcSubCategories'] = 'Sottocategorie IPTC';
$lang_picinfo['ColorSpace'] = 'Spazio colore';
$lang_picinfo['ExposureProgram'] = 'Programma di esposizione';
$lang_picinfo['Flash'] = 'Flash';
$lang_picinfo['MeteringMode'] = 'Modalit&agrave; di misurazione';
$lang_picinfo['ExposureTime'] = 'Tempo di esposizione';
$lang_picinfo['ExposureBiasValue'] = 'Sottoesposizione';
$lang_picinfo['ImageDescription'] = 'Descrizione immagine';
$lang_picinfo['Orientation'] = 'Orientamento';
$lang_picinfo['xResolution'] = 'Risoluzione X';
$lang_picinfo['yResolution'] = 'Risoluzione Y';
$lang_picinfo['ResolutionUnit'] = 'Unit&agrave; della risoluzione';
$lang_picinfo['Software'] = 'Software';
$lang_picinfo['YCbCrPositioning'] = 'Posizionamento YCbCr';
$lang_picinfo['ExifOffset'] = 'Compensazione EXIF';
$lang_picinfo['IFD1Offset'] = 'Compensazione IFD1';
$lang_picinfo['FNumber'] = 'Numero F';
$lang_picinfo['ExifVersion'] = 'Versione EXIF';
$lang_picinfo['DateTimeOriginal'] = 'Data e Ora originali';
$lang_picinfo['DateTimedigitized'] = 'Data e ora digitalizzate';
$lang_picinfo['ComponentsConfiguration'] = 'Configurazione componenti';
$lang_picinfo['CompressedBitsPerPixel'] = 'Bit per pixel compressi';
$lang_picinfo['LightSource'] = 'Fonte di luce';
$lang_picinfo['ISOSetting'] = 'Impostazione ISO';
$lang_picinfo['ColorMode'] = 'Modalit&agrave; colore';
$lang_picinfo['Quality'] = 'Qualit&agrave;';
$lang_picinfo['ImageSharpening'] = 'Contrasto dell\'immagine';
$lang_picinfo['FocusMode'] = 'Modalit&agrave; di messa a fuoco';
$lang_picinfo['FlashSetting'] = 'Impostazioni flash';
$lang_picinfo['ISOSelection'] = 'Selezione ISO';
$lang_picinfo['ImageAdjustment'] = 'Regolazione immagine';
$lang_picinfo['Adapter'] = 'Adattatore';
$lang_picinfo['ManualFocusDistance'] = 'Distanza messa a fuoco manuale';
$lang_picinfo['DigitalZoom'] = 'Zoom Digitale';
$lang_picinfo['AFFocusPosition'] = 'Posizione messa a fuoco AF';
$lang_picinfo['Saturation'] = 'Saturazione';
$lang_picinfo['NoiseReduction'] = 'Riduzione disturbo';
$lang_picinfo['FlashPixVersion'] = 'Versione FlashPix';
$lang_picinfo['ExifImageWidth'] = 'Larghezza immagine EXIF';
$lang_picinfo['ExifImageHeight'] = 'Altezza immagine EXIF';
$lang_picinfo['ExifInteroperabilityOffset'] = 'Compensazione interoperabilit&agrave; EXIF';
$lang_picinfo['FileSource'] = 'Origine file';
$lang_picinfo['SceneType'] = 'Tipo di scena';
$lang_picinfo['CustomerRender'] = 'Presentazione personalizzata';
$lang_picinfo['ExposureMode'] = 'Modalit&agrave; esposizione';
$lang_picinfo['WhiteBalance'] = 'Bilanciamento del bianco';
$lang_picinfo['DigitalZoomRatio'] = 'Rapporto di zoom digitale';
$lang_picinfo['SceneCaptureMode'] = 'Modalit&agrave; di acquisizione della scena';
$lang_picinfo['GainControl'] = 'Controllo del guadagno';
$lang_picinfo['Contrast'] = 'Contrasto';
$lang_picinfo['Sharpness'] = 'Nitidezza';
$lang_picinfo['ManageExifDisplay'] = 'Gestione visualizzazione dati EXIF';
$lang_picinfo['success'] = 'Informazioni aggiornate correttamente.';
$lang_picinfo['show_details'] = 'Mostra dettagli'; // cpg1.5
$lang_picinfo['hide_details'] = 'Nascondi dettagli'; // cpg1.5
$lang_picinfo['download_URL'] = 'Collegamento diretto';
$lang_picinfo['movie_player'] = 'Riproduci il file con la tua applicazione standard';

$lang_display_comments['comment_x_to_y_of_z'] = '%d a %d di %d'; // cpg1.5
$lang_display_comments['page'] = 'Pagina'; // cpg1.5
$lang_display_comments['edit_title'] = 'Modifica questo commento';
$lang_display_comments['delete_title'] = 'Cancella questo commento'; // cpg1.5
$lang_display_comments['confirm_delete'] = 'Sei sicuro di voler cancellare questo commento?'; // js-alert
$lang_display_comments['add_your_comment'] = 'Aggiungi il tuo commento';
$lang_display_comments['name'] = 'Nome';
$lang_display_comments['comment'] = 'Commento';
$lang_display_comments['your_name'] = 'Il tuo nome';
$lang_display_comments['report_comment_title'] = 'Segnala questo commento all\'amministratore';
$lang_display_comments['pending_approval'] = 'Il commento sar&agrave; visibile dopo l\'approvazione dell\'amministratore'; // cpg1.5
$lang_display_comments['unapproved_comment'] = 'Commento non approvato'; // cpg1.5
$lang_display_comments['pending_approval_message'] = 'Qualcuno ha inserito un commento qui. Sar&agrave; visibile dopo l\'approvazione dell\'amministratore.'; // cpg1.5
$lang_display_comments['approve'] = 'Approva commento'; // cpg1.5
$lang_display_comments['disapprove'] = 'Segna il commento come non approvato'; // cpg1.5
$lang_display_comments['log_in_to_comment'] = 'Qui non sono ammessi commenti anonimi. %sAutenticati%s per inserire il tuo commento'; // cpg1.5 // do not translate the %s placeholders - they will be used as wrappers for the link (<a>)
$lang_display_comments['default_username_message'] = 'Immetti il tuo nome per il commento'; // cpg1.5
$lang_display_comments['comment_rejected'] = 'Il tuo commento &egrave; stato respinto'; // cpg1.5

$lang_fullsize_popup['click_to_close'] = 'Clicca sulla foto per chiudere questa finestra';
$lang_fullsize_popup['close_window'] = 'chiudi finestra'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP')) {
$lang_ecard_php['title'] = 'Spedisci una cartolina';
$lang_ecard_php['invalid_email'] = 'Attenzione: indirizzo di posta elettronica non valido:'; // cpg1.5
$lang_ecard_php['ecard_title'] = 'Una cartolina da %s per te';
$lang_ecard_php['error_not_image'] = 'Solo le immagini possono essere spedite come cartolina.'; // cpg1.5
$lang_ecard_php['error_not_image_flash'] = 'Solo le immagini e i filmati Flash possono essere spediti come cartolina.'; // cpg1.5
$lang_ecard_php['view_ecard'] = 'Collegamento alternativo se la cartolina non si vede correttamente';
$lang_ecard_php['view_ecard_plaintext'] = 'Per vedere la cartolina, copia e incolla questo collegamento nella barra indirizzi del tuo navigatore web:';
$lang_ecard_php['view_more_pics'] = 'Visualizza altre immagini!';
$lang_ecard_php['send_success'] = 'La tua cartolina &egrave; stata spedita';
$lang_ecard_php['send_failed'] = 'Spiacente ma il server non &egrave; in grado di spedire la tua cartolina...';
$lang_ecard_php['from'] = 'Da';
$lang_ecard_php['your_name'] = 'Il tuo nome';
$lang_ecard_php['your_email'] = 'Il tuo indirizzo di posta elettronica';
$lang_ecard_php['to'] = 'A';
$lang_ecard_php['rcpt_name'] = 'Nome del destinatario';
$lang_ecard_php['rcpt_email'] = 'Indirizzo di posta elettronica del destinatario';
$lang_ecard_php['greetings'] = 'Intestazione';
$lang_ecard_php['message'] = 'Messaggio';
$lang_ecard_php['ecards_footer'] = 'Spedita da %s con indirizzo %s alle ore %s (Ora della galleria)';
$lang_ecard_php['preview'] = 'Anteprima della cartolina';
$lang_ecard_php['preview_button'] = 'Anteprima';
$lang_ecard_php['submit_button'] = 'Spedisci cartolina';
$lang_ecard_php['preview_view_ecard'] = 'Questo sar&agrave; il collegamento alternativo alla cartolina una volta generata. Non funziona per le anteprime.';
}

// ------------------------------------------------------------------------- //
// File report_file.php
// ------------------------------------------------------------------------- //

if (defined('REPORT_FILE_PHP')) {
$lang_report_php['title'] = 'Segnala all\'amministratore';
$lang_report_php['invalid_email'] = '<strong>Attenzione</strong> : indirizzo di posta elettronica non valido!';
$lang_report_php['report_subject'] = 'Una segnalazione da %s nella galleria %s';
$lang_report_php['view_report'] = 'Collegamento alternativo se la segnalazione non si vede correttamente';
$lang_report_php['view_report_plaintext'] = 'Per vedere la segnalazione, copia e incolla questo collegamento nella barra degli indirizzi del tuo navigatore web:';
$lang_report_php['view_more_pics'] = 'Galleria';
$lang_report_php['send_success'] = 'La tua segnalazione &egrave; stata spedita';
$lang_report_php['send_failed'] = 'Spiacente ma il server non &egrave; in grado di spedire la tua segnalazione...';
$lang_report_php['from'] = 'Da';
$lang_report_php['your_name'] = 'Il tuo nome';
$lang_report_php['your_email'] = 'Il tuo indirizzo di posta elettronica';
$lang_report_php['to'] = 'A';
$lang_report_php['administrator'] = 'Amministratore/Moderatore';
$lang_report_php['subject'] = 'Oggetto';
$lang_report_php['comment_field_name'] = 'Segnalazione sul commento di "%s"';
$lang_report_php['reason'] = 'Motivo';
$lang_report_php['message'] = 'Messaggio';
$lang_report_php['report_footer'] = 'Spedito da %s con indirizzo IP %s alle ore %s (Ora della galleria)';
$lang_report_php['obscene'] = 'osceno';
$lang_report_php['offensive'] = 'offensivo';
$lang_report_php['misplaced'] = 'fuori tema/fuori posto';
$lang_report_php['missing'] = 'mancante';
$lang_report_php['issue'] = 'errore/non visibile';
$lang_report_php['other'] = 'altro';
$lang_report_php['refers_to'] = 'Il file delle segnalazioni si riferisce a';
$lang_report_php['reasons_list_heading'] = 'motivo/i della segnalazione:';
$lang_report_php['no_reason_given'] = 'nessun motivo indicato';
$lang_report_php['go_comment'] = 'Vai al commento';
$lang_report_php['view_comment'] = 'Mostra la segnalazione completa con il commento';
$lang_report_php['type_file'] = 'file';
$lang_report_php['type_comment'] = 'commento';
$lang_report_php['invalid_data'] = 'Le informazioni per la segnalazione a cui stai tentando di accedere sono state danneggiate dal tuo programma di posta elettronica. Verifica che il collegamento sia completo.';
}

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) {
$lang_editpics_php['pic_info'] = 'Informazioni sul file';
$lang_editpics_php['desc'] = 'Descrizione';
$lang_editpics_php['approval'] = 'Approvazione'; //cpg 1.5
$lang_editpics_php['approved'] = 'Approvata'; // cpg 1.5
$lang_editpics_php['unapproved'] = 'Non approvata'; // cpg 1.5
$lang_editpics_php['new_keyword'] = 'Nuova parola chiave';
$lang_editpics_php['new_keywords'] = 'Trovata nuova parola chiave';
$lang_editpics_php['existing_keyword'] = 'Parola chiave esistente';
$lang_editpics_php['pic_info_str'] = '%s &times; %s - %s KB - %s visualizzazioni - %s voti';
$lang_editpics_php['approve'] = 'Approva file';
$lang_editpics_php['postpone_app'] = 'Rimanda approvazione';
$lang_editpics_php['del_pic'] = 'Cancella file';
$lang_editpics_php['del_all'] = 'cancella TUTTI i file';
$lang_editpics_php['read_exif'] = 'Rileggi le informazioni EXIF';
$lang_editpics_php['reset_view_count'] = 'Azzera il contatore delle visualizzazioni';
$lang_editpics_php['reset_all_view_count'] = 'Azzera TUTTI i contatori delle visualizzazioni';
$lang_editpics_php['reset_votes'] = 'Azzera i voti';
$lang_editpics_php['reset_all_votes'] = 'Azzera TUTTI i voti';
$lang_editpics_php['del_comm'] = 'Cancella commenti';
$lang_editpics_php['del_all_comm'] = 'Cancella TUTTI i commenti';
$lang_editpics_php['upl_approval'] = 'Approvazione caricamento';
$lang_editpics_php['edit_pics'] = 'Modifica file';
$lang_editpics_php['edit_pic'] = 'modifica file'; // cpg 1.5
$lang_editpics_php['see_next'] = 'Vedi file seguenti';
$lang_editpics_php['see_prev'] = 'Vedi precedenti';
$lang_editpics_php['n_pic'] = '%s file';
$lang_editpics_php['n_of_pic_to_disp'] = 'Numero di file da visualizzare';
$lang_editpics_php['crop_title'] = 'Utilit%agrave;di fotoritocco Coppermine';
$lang_editpics_php['preview'] = 'Anteprima';
$lang_editpics_php['save'] = 'Salva immagine';
$lang_editpics_php['save_thumb'] = 'Salva come miniatura';
$lang_editpics_php['gallery_icon'] = 'Rendila la mia icona';
$lang_editpics_php['sel_on_img'] = 'La selezione deve essere interamente nell\'immagine!'; // js-alert
$lang_editpics_php['album_properties'] = 'Propriet&agrave; dell\'album';
$lang_editpics_php['parent_category'] = 'Categoria superiore';
$lang_editpics_php['thumbnail_view'] = 'Vista miniature';
$lang_editpics_php['select_unselect'] = 'seleziona/deseleziona tutto';
$lang_editpics_php['file_exists'] = 'Il file di destinazione \'%s\' esiste gi&agrave;.';
$lang_editpics_php['rename_failed'] = 'Impossibile rinominare \'%s\' in \'%s\'.';
$lang_editpics_php['src_file_missing'] = 'Il file originale \'%s\' non esiste.';
$lang_editpics_php['mime_conv'] = 'Non &grave; possibile convertire il file \'%s\' in \'%s\'';
$lang_editpics_php['forb_ext'] = 'Estensione dell\'immagine non consentita.';
$lang_editpics_php['error_editor_class'] = 'La classe del tuo metodo di ridimensionamento non &egrave; implementata nel programma'; // cpg 1.5
$lang_editpics_php['error_document_size'] = 'Il documento non ha larghezza o altezza'; // cpg 1.5 // js-alert
$lang_editpics_php['success_picture'] = 'Immagine salvata con successo - puoi %schiudere%s questa finestra adesso'; // cpg1.5 // do not translate "%s" here
$lang_editpics_php['success_thumb'] = 'Miniatura salvata con successo - puoi %schiudere%s questa finestra adesso'; // cpg1.5 // do not translate "%s" here
$lang_editpics_php['rotate'] = 'Ruota'; // cpg 1.5
$lang_editpics_php['mirror'] = 'Rifletti'; // cpg 1.5
$lang_editpics_php['scale'] = 'Scala'; // cpg 1.5
$lang_editpics_php['new_width'] = 'Nuova larghezza'; // cpg 1.5
$lang_editpics_php['new_height'] = 'Nuova altezza'; // cpg 1.5
$lang_editpics_php['enable_clipping'] = 'Abilita ritaglio, applica alla rifilatura'; // cpg 1.5
$lang_editpics_php['jpeg_quality'] = 'Qualit&agrave; JPEG in uscita'; // cpg 1.5
$lang_editpics_php['or'] = 'OPPURE'; // cpg 1.5
$lang_editpics_php['approve_pic'] = 'Approva file'; // cpg 1.5
$lang_editpics_php['approve_all'] = 'Approva TUTTI i file'; // cpg 1.5
$lang_editpics_php['error_empty'] = 'L\'album &egrave; vuoto'; // cpg1.5
$lang_editpics_php['error_approval_empty'] = 'Nessuna altra immagine da approvare'; // cpg1.5
$lang_editpics_php['error_linked_only'] = 'L\'album contiene solamente file collegati, che non puoi modificare qu&igrave;'; // cpg1.5
$lang_editpics_php['note_approve_public'] = 'I file spostati in un album pubblico devono essere prima approvati da un amministratore.'; // cpg1.5
$lang_editpics_php['note_approve_private'] = 'I file spostati in un album privato devono essere prima approvati da un amministratore.' ; // cpg1.5
$lang_editpics_php['note_edit_control'] = 'I file spostati in un album pubblico non possono essere modificati.'; // cpg1.5
$lang_editpics_php['confirm_move'] = 'Sei sicuro di voler spostare questo file?'; // cpg1.5 //js-alert
$lang_editpics_php['success_changes'] = 'Le modifiche sono state salvate con successo'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File forgot_passwd.php
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) {
$lang_forgot_passwd_php['forgot_passwd'] = 'Promemoria della password';
$lang_forgot_passwd_php['err_already_logged_in'] = 'Sei gi&agrave; autenticato!';
$lang_forgot_passwd_php['enter_email'] = 'Inserisci il tuo indirizzo di posta elettronica';
$lang_forgot_passwd_php['submit'] = 'vai';
$lang_forgot_passwd_php['illegal_session'] = 'La sessione per il recupero della password non &egrave; valida oppure &egrave; scaduta.';
$lang_forgot_passwd_php['failed_sending_email'] = 'Il messaggio di posta elettronica con il promemoria della password non pu&ograve; essere spedito!';
$lang_forgot_passwd_php['email_sent'] = 'Un messaggio di posta elettronica con il tuo nome utente e una nuova password &egrave; stata spedito a %s';
$lang_forgot_passwd_php['verify_email_sent'] = 'Un messaggio di posta elettronica &egrave; stato spedito a %s. Per favore controlla la tua casella di posta per completare il processo.';
$lang_forgot_passwd_php['err_unk_user'] = 'L\'utente selezionato non esiste!';
$lang_forgot_passwd_php['account_verify_subject'] = '%s - Richiesta di nuova password';
$lang_forgot_passwd_php['passwd_reset_subject'] = '%s - La tua nuova password';
$lang_forgot_passwd_php['account_verify_email'] = <<< EOT
Hai fatto richiesta di una nuova password. Se intenzione di procedere col recapito di una nuova password, clicca sul collegamento seguente:

<a href="{VERIFY_LINK}">{VERIFY_LINK}</a>


Grazie,

L'amministrazione di {SITE_NAME}

EOT;

$lang_forgot_passwd_php['reset_email'] = <<< EOT
Ecco la nuova password che hai richiesto:

Nome utente: {USER_NAME}
Password: {PASSWORD}

Vai a <a href="{SITE_LINK}">{SITE_LINK}</a> per autenticarti.


Grazie,

L'amministrazione di {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //
if (defined('GROUPMGR_PHP')) {
$lang_groupmgr_php['group_manager'] = 'Gestione gruppi'; // cpg1.5.x
$lang_groupmgr_php['group_name'] = 'Gruppi';
$lang_groupmgr_php['permissions'] = 'Permessi';
$lang_groupmgr_php['public_albums'] = 'Caricamento negli album pubblici';
$lang_groupmgr_php['personal_gallery'] = 'Galleria personale';
$lang_groupmgr_php['disk_quota'] = 'Spazio disco';
$lang_groupmgr_php['rating'] = 'Valutazione';
$lang_groupmgr_php['ecards'] = 'Cartoline';
$lang_groupmgr_php['comments'] = 'Commenti';
$lang_groupmgr_php['allowed'] = 'Permesso';
$lang_groupmgr_php['approval'] = 'Approvazione';
$lang_groupmgr_php['create_new_group'] = 'Crea un nuovo gruppo';
$lang_groupmgr_php['del_groups'] = 'Cancella il/i gruppo/i selezionato/i';
$lang_groupmgr_php['confirm_del'] = 'Attenzione: quando cancelli un gruppo, gli utenti che vi appartengono vengono trasferiti nel gruppo \'Registrati\'!\n\nVuoi procedere?'; // js-alert
$lang_groupmgr_php['title'] = 'Gestione gruppi utenti';
$lang_groupmgr_php['reset_to_default'] = 'Reimposta il nome predefinito (%s) - raccomandato!';
$lang_groupmgr_php['error_group_empty'] = 'La tabella dei gruppi era vuota!<br />I gruppi predefiniti sono stati creati, ricarica questa pagina';
$lang_groupmgr_php['explain_greyed_out_title'] = 'Perch&egrave; questa riga &egrave; in grigio?';
$lang_groupmgr_php['explain_guests_greyed_out_text'] = 'Non puoi modificare le propriet&agrave; di questo gruppo perchè il livello di accesso di questo gruppo &egrave; NESSUNO. Tutti gli utenti non autenticati (membri del gruppo %s) non possono fare nient\'altro che autenticarsi, perci&ograve; a loro non si applicano le impostazioni del gruppo. Cambia il livello di accesso, qui o nella pagina di configurazione della galleria sotto la voce "Impostazioni utente", "Consenti accesso ad utenti non autenticati".';
$lang_groupmgr_php['group_assigned_album'] = 'Album assegnato/i';
$lang_groupmgr_php['access_level'] = 'Livello di accesso'; // cpg1.5
$lang_groupmgr_php['thumbnail_intermediate_full'] = 'Miniatura, immagine intermedia e a grandezza piena'; // cpg1.5
$lang_groupmgr_php['thumbnail_intermediate'] = 'Miniatura e immagine intermedia'; // cpg1.5
$lang_groupmgr_php['thumbnail_only'] = 'Solo miniatura'; // cpg1.5
$lang_groupmgr_php['none'] = 'Nessuno'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //
if (defined('INDEX_PHP')){
$lang_index_php['welcome'] = 'Presentazione';

$lang_album_admin_menu['confirm_delete'] = 'Sei sicuro di voler CANCELLARE questo album?\\nAnche tutti i file e i commenti verranno cancellati.'; // js-alert
$lang_album_admin_menu['delete'] = 'Cancella';
$lang_album_admin_menu['modify'] = 'Propriet&agrave;';
$lang_album_admin_menu['edit_pics'] = 'Modifica file';
$lang_album_admin_menu['cat_locked'] = 'Questo album &egrave; stato bloccato per effettuare modifiche'; // cpg1.5.x

$lang_list_categories['home'] = 'Inizio';
$lang_list_categories['stat1'] = '[pictures] file in [albums] album e [cat] categorie con [comments] commenti, visti [views] volte'; // do not translate the stuff in square brackets
$lang_list_categories['stat2'] = '[pictures] file in [albums] album, visti [views] volte'; // do not translate the stuff in square brackets
$lang_list_categories['xx_s_gallery'] = 'La galleria di %s';
$lang_list_categories['stat3'] = '[pictures] file in [albums] album con [comments] commenti, visti [views] volte'; // do not translate the stuff in square brackets

$lang_list_users['user_list'] = 'Elenco utenti';
$lang_list_users['no_user_gal'] = 'Non ci sono gallerie utente';
$lang_list_users['n_albums'] = '%s album';
$lang_list_users['n_pics'] = '%s file';

$lang_list_albums['n_pictures'] = '%s file';
$lang_list_albums['last_added'] = ', l\'ultimo inserito il %s';
$lang_list_albums['n_link_pictures'] = '%s file collegati';
$lang_list_albums['total_pictures'] = '%s file totali';
$lang_list_albums['alb_hits'] = 'Album visto %s volte'; // cpg1.5
$lang_list_albums['from_category'] = ' - Dalla categoria: '; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File install.php
// ------------------------------------------------------------------------- //

if (defined('INSTALL_PHP')) {
$lang_install['already_succ'] = 'Il programma di installazione &egrave; gi&agrave; stato eseguito con successo una volta e adesso &egrave; bloccato.';
$lang_install['already_succ_explain'] = 'Se vuoi eseguire nuovamente il programma di installazione, devi prima cancellare il file \'include/config.inc.php\' che &egrave; stato creato nella cartella dove hai messo Coppermine. Puoi farlo attraverso un qualsiasi programma FTP';
$lang_install['cant_read_tmp_conf'] = 'Il programma di installazione non pu&ograve; leggere il file di configurazione temporaneo %s.';
$lang_install['cant_write_tmp_conf'] = 'Il programma di installazione non pu&ograve; scrivere il file di configurazione temporaneo %s.';
$lang_install['review_permissions'] = 'Controlla i permessi delle cartelle.';
$lang_install['change_lang'] = 'Cambia lingua';
$lang_install['check_path'] = 'Controlla il percorso';
$lang_install['continue'] = 'Passo successivo';
$lang_install['conv_said'] = 'Il programma di conversione ha detto:';
$lang_install['license_info'] = 'Coppermine &egrave; un pacchetto per galleria di immagini e file multimediali rilasciato sotto la licenza GNU GPL v3. Installandolo, accetti di essere soggetto alla licenza Coppermine:';
$lang_install['cpg_info_frames'] = 'Il tuo navigatore web non sembra in grado di visualizzare frames in linea. Puoi trovare la licenza all\'interno della cartella \'docs\' compresa nel pacchetto Coppermine.';
$lang_install['license'] = 'Accordo di licenza Coppermine';
$lang_install['create_table'] = 'Creazione tabella \'%s\'';
$lang_install['db_populating'] = 'Sto tentando di inserire i dati nel database.';
$lang_install['db_alr_populated'] = 'I dati richiesti erano gi&agrave; inseriti nel database.';
$lang_install['dir_ok'] = 'Cartella trovata';
$lang_install['directory'] = 'Cartella';
$lang_install['email'] = 'Indirizzo di posta elettronica';
$lang_install['email_no_match'] = 'Gli indirizzi di posta elettronica non corrispondono o non sono validi.';
$lang_install['email_verif'] = 'Controlla l\'e-mail';
$lang_install['err_cpgnuke'] = '<h1>ERRORE</h1>Sembra che tu stia tentando di installare la versione standalone di Coppermine nel tuo portale Nuke.<br />Questa versione pu&ograve; essere utilizzata soltanto come standalone!<br />Alcuni server possono visualizzare questo avvertimento anche se non hai un portale Nuke installato - se questo &egrave; il tuo caso, <a href="%s?continue_anyway=1">continua</a> con l\'installazione. Se invece stai usando un portale Nuke, potresti dare un\'occhiata a <a href=\"http://www.cpgnuke.com/\">CpgNuke</a> o usare uno dei <a href=\"http://sourceforge.net/project/showfiles.php?group_id=89658&amp;package_id=95984\">Port di Coppermine</a> (non supportati) - non continuare!';
$lang_install['error'] = 'ERRORE';
$lang_install['error_need_corr'] = '&Egrave; stato riscontrato il seguente errore che deve essere prima corretto:';
$lang_install['finish'] = 'Completa l\'installazione';
$lang_install['gd_note'] = '<strong>Importante :</strong> le vecchie versioni della libreria grafica GD supportano solo immagini JPEG e PNG. Se questo &egrave; il tuo caso, allora lo script non sar&agrave; in grado di creare le miniature per le immagini GIF.';
$lang_install['go_to_main'] = 'Vai alla pagina principale';
$lang_install['im_no_convert_ex'] = 'Il pacchetto di installazione ha individuato il programma \'convert\' di ImageMagick in \'%s\', tuttavia non pu&ograve; essere eseguito dallo script.<br />Puoi prendere in considerazione la possibilit&agrave; di usare GD invece di ImageMagick.';
$lang_install['im_not_found'] = 'Il programma di installazione ha cercato di individuare ImageMagick, ma non pu&ograve; determinarne l\'esistenza, oppure c\'&egrave; stato un errore. <br />Coppermine pu&ograve; utilizzare il programma \'convert\' <a href="http://www.imagemagick.org/">ImageMagick</a> per creare le miniature. La qualit&agrave; delle immagini prodotte da ImageMagick &egrave; superiore a GD1 ma equivalente a GD2.<br />Se ImageMagick &egrave; installato nel tuo sistema e vuoi utilizzarlo, <br />devi inserire qui sotto il percorso completo del programma \'convert\'. <br />In Windows il percorso dovrebbe somigliare a \'c:/ImageMagick/\' e non dovrebbe contenere spazi, su Unix &egrave qualcosa di simile a \'/usr/bin/\'.<br />Se non hai idea di avere ImageMagick o meno, lascia quasto campo vuoto - il programma di installazione cercher&agrave; di usare GD2 come utilit&agrave; predefinita (quella che ha la maggior parte degli utenti). <br />Puoi modificare questa impostazione anche in seguito (nella schermata di configurazione di Coppermine), quindi non temere se non sei sicuro di cosa inserire in questo campo - lascialo vuoto.';
$lang_install['im_packages'] = 'Il tuo server supporta la/e seguente/i libreria/e di immagini';
$lang_install['im_path'] = 'Percorso di ImageMagick:';
$lang_install['im_path_space'] = 'Il percorso di ImageMagick (\'%s\') contiene almeno uno spazio. Questo pu&ograve; causare problemi nello script.<br />Devi spostare ImageMagick in un\'altra cartella.';
$lang_install['installation'] = 'installazione';
$lang_install['installer_locked'] = 'Il programma di installazione &egrave; bloccato';
$lang_install['installer_selected'] = 'Il programma di installazione selezionato';
$lang_install['inv_im_path'] = 'Il programma di installazione non riesce a trovare la cartella \'%s\' che hai specificato per ImageMagick oppure non sono presenti i permessi per accedervi. Controlla che quello che hai scritto sia corretto e di avere accesso alla cartella specificata.';
$lang_install['lets_go'] = 'Iniziamo!';
$lang_install['mysql_create_btn'] = 'Genera';
$lang_install['mysql_create_db'] = 'Genera un nuovo database MySQL';
$lang_install['mysql_db_name'] = 'Nome del database MySQL';
$lang_install['mysql_error'] = 'Errore MySQL: ';
$lang_install['mysql_host'] = 'Host MySQL<br />(in genere va bene \'localhost\')';
$lang_install['mysql_username'] = 'Nome utente MySQL'; // cpg1.5
$lang_install['mysql_password'] = 'Password MySQL'; // cpg1.5
$lang_install['mysql_no_create_db'] = 'Non &egrave; stato possibile creare il database MySQL.';
$lang_install['mysql_no_sel_dbs'] = 'Non &egrave; stato possibile individuare database MySQL disponibili';
$lang_install['mysql_succ'] = 'Connessione stabilita con successo con il database';
$lang_install['mysql_tbl_pref'] = 'Prefisso tabelle MySQL';
$lang_install['mysql_test_connection'] = 'Prova connessione';
$lang_install['mysql_wrong_db'] = 'MySQL non riesce a trovare un database chiamato \'%s\', controlla il valore che hai inserito';
$lang_install['n_a'] = 'N/D';
$lang_install['no_admin_email'] = 'Devi inserire un indirizzo di posta elettronica per l\'amministratore';
$lang_install['no_admin_password'] = 'Devi inserire una password per l\'amministratore';
$lang_install['no_admin_username'] = 'Devi inserire un nome utente per l\'amministratore';
$lang_install['no_dir'] = 'Cartella non disponibile';
$lang_install['no_gd'] = 'L\'installazione di PHP non sembra comprendere l\'estensione per la libreria grafica \'GD\' e non hai indicato di voler utilizzare ImageMagick. Coppermine &egrave; stato configurato per utilizzare GD2 in quanto il riconoscimento automatico di GD a volte non va a buon fine. Se GD &egrave; installato nel tuo sistema lo script funzioner&agrave;, altrimenti dovrai installare ImageMagick.';
$lang_install['no_mysql_conn'] = 'Non &egrave; stato possibile creare una connessione MySQL, controlla i parametri MySQL inseriti';
$lang_install['no_mysql_support'] = 'PHP non ha il supporto a MySQL abilitato.';
$lang_install['no_thumb_method'] = 'Devi scegliere un programma di manipolazione immagini (GD/IM)';
$lang_install['nok'] = 'Non corretto';
$lang_install['not_here_yet'] = 'Non c\'&egrave; niente qui, premi %squi%s per andare indietro.';
$lang_install['ok'] = 'OK';
$lang_install['on_q'] = 'in richiesta';
$lang_install['or'] = 'oppure';
$lang_install['pass_err'] = 'Le password non corrispondono, hai usato caratteri non consentiti o non l\'hai inserita.';
$lang_install['password'] = 'Password';
$lang_install['password_verif'] = 'Verifica password';
$lang_install['perm_error'] = 'I permessi di \'%s\' sono impostati a %s, per favore impostali a';
$lang_install['perm_ok'] = 'I permessi in alcune cartelle sono stati verificati e sembrano essere a posto. <br />Vai avanti al prossimo passo.';
$lang_install['perm_not_ok'] = 'I permessi in alcune cartelle non sono impostati corretamente.<br />Cambia i permessi delle cartelle qui sotto marcate con "Non corretto".'; // cpg1.5
$lang_install['please_go_back'] = '%sPremi qui%s per tornare indietro e correggere l\'errore prima di procedere.';
$lang_install['populate_db'] = 'Popola il database';
$lang_install['ready_to_roll'] = '<a href="index.php">Coppermine</a> &egrave; stato configurato correttamente ed &egrave pronto per essere utilizzato.<br /><a href="login.php">Accedi</a> usando le informazioni che hai fornito per il tuo account di amministrazione.';
$lang_install['sect_create_adm'] = 'Questa sezione richiede informazioni per creare il tuo account di amministrazione di Coppermine. Usa solo caratteri alfanumerici. Inserisci le informazioni attentamente!';
$lang_install['sect_mysql_info'] = 'Questa sezione richiede informazioni su come accedere al tuo database MySQL.<br />Se non sai cosa inserire contatta l\'assistenza del tuo servizio di hosting.';
$lang_install['sect_mysql_sel_db'] = 'Qui devi scegliere quale database vuoi utilizzare per Coppermine.<br />Se il tuo account MySQL ha i privilegi necessari, puoi creare un nuovo database dal programma di installazione, oppure puoi utilizzare un database gi&agrave; esistente. Se non gradisci entrambe le opzioni, devi prima creare un database al di fuori del programma di installazione di Coppermine, ritornare quindi a questo punto e selezionare il nuovo database dal menu a tendina qui sotto. Puoi anche modificare il prefisso per le tabelle (senza usare punti), ma lasciare i prefissi preimpostati &egrave; consigliato.';
$lang_install['select_lang'] = 'Seleziona la lingua predefinita: ';
$lang_install['sql_file_not_found'] = 'Non &egrave; stato possibile trovare il file \'%s\'. Controlla di aver caricato tutti i file di Coppermine sul tuo server.';
$lang_install['status'] = 'Stato';
$lang_install['subdir_called'] = 'Una sottocartella chiamata \'%s\' normalmente dovrebbe esistere nella cartella dove hai caricato Coppermine.<br />Il programma di installazione non riesce a trovarla. Controlla di aver caricato tutti i file di Coppermine sul tuo server.';
$lang_install['title_admin'] = 'Crea l\'amministratore di Coppermine';
$lang_install['title_dir_check'] = 'Verifica i permessi delle cartelle';
$lang_install['title_file_check'] = 'Verifica dei file di installazione';
$lang_install['title_finished'] = 'Installazione completata';
$lang_install['title_imp'] = 'Selezione libreria immagini';
$lang_install['title_imp_test'] = 'Controllo libreria immagini';
$lang_install['title_mysql_db_sel'] = 'Selezione del database MySQL';
$lang_install['title_mysql_pop'] = 'Creazione struttura del database';
$lang_install['title_mysql_user'] = 'Autenticazione dell\'utente MySQL';
$lang_install['title_welcome'] = 'Benvenuto all\'installazione di Coppermine';
$lang_install['tmp_conf_error'] = 'Impossibile scrivere il file di configurazione temporaneo - verifica che la cartella \'include\' sia scrivibile dallo script.';
$lang_install['tmp_conf_ser_err'] = 'Si &egrave; verificato un errore grave nel programma di installazione, prova a ricaricare la pagina o ricomincia rimuovendo il file \'include/config.tmp\'.';
$lang_install['try_again'] = 'Prova di nuovo!';
$lang_install['unable_write_config'] = 'Impossibile scrivere il file di configurazione';
$lang_install['user_err'] = 'Il nome utente dell\'amministratore deve contenere solo caratteri alfanumerici e non pu&ograve; essere vuoto.';
$lang_install['username'] = 'Nome utente';
$lang_install['your_admin_account'] = 'Il tuo account di amministrazione';
$lang_install['no_cookie'] = 'Il tuo browser non ha accettato il nostro cookie. &Egrave; consigliato accettare i cookie.';
$lang_install['no_javascript'] = 'Il tuo browser non sembra avere Javascript abilitato - &egrave; vivamente consigliato abilitarlo.';
$lang_install['register_globals_detected'] = 'Sembra che la tua configurazione PHP abbia \'register_globals\' abilitata - dovresti disabilitarla per ragioni di sicurezza.';
$lang_install['more'] = 'Altro';
$lang_install['version_undetected'] = 'Lo script non &egrave; riuscito a determinare la versione di %s utilizzata dal tuo server. Accertati che sia almeno la versione %s.';
$lang_install['version_incompatible'] = 'Lo script ha riconosciuto una versione non compatibile (%s) di %s sul tuo server.<br />Accertati di usare una versione compatibile (%s o pi&ugrave; evoluta) prima di continuare!';
$lang_install['read_gif'] = 'Leggi/Scrivi i file .gif';
$lang_install['read_png'] = 'Leggi/Scrivi i file .png';
$lang_install['read_jpg'] = 'Leggi/Scrivi i file .jpg';
$lang_install['write_error'] = 'Non posso salvare l\'immagine generata su disco.';
$lang_install['read_error'] = 'Non posso leggere l\'immagine sorgente.';
$lang_install['combine_error'] = 'Non posso combinare le immagini sorgenti';
$lang_install['text_error'] = 'Non posso aggiungere testo all\'immagine sorgente';
$lang_install['scale_error'] = 'Non posso ridimensionare l\'immagine sorgente';
$lang_install['pixels'] = 'pixel';
$lang_install['combine'] = 'Combina 2 immagini';
$lang_install['text'] = 'Scrivi testo sull\'immagine';
$lang_install['scale'] = 'Ridimensiona un\'immagine';
$lang_install['generated_image'] = 'Immagine generata';
$lang_install['reference_image'] = 'Immagine di riferimento';
$lang_install['imp_test_error'] = 'C\'&egrave; stato un errore in una o pi&ugrave; prove, accertati di aver selezionato il corretto pacchetto di gestione immagini e che sia configurato correttamente!';
$lang_install['writable'] = 'Scrivibile';
$lang_install['not_writable'] = 'Non scrivibile';
$lang_install['not_exist'] = 'Non esiste';
$lang_install['old_install'] = 'Questa &egrave; la nuova installazione guidata. Premi %squi%s per la schermata di installazione classica.'; //cpg1.5

}

// ------------------------------------------------------------------------- //
// File keywordmgr.php
// ------------------------------------------------------------------------- //
if (defined('KEYWORDMGR_PHP')) {
$lang_keywordmgr_php['title'] = 'Gestione parole chiave';
$lang_keywordmgr_php['search'] = 'Cerca';
$lang_keywordmgr_php['keyword_test_search'] = 'Cerca %s in una nuova finestra';
$lang_keywordmgr_php['keyword_del'] = 'Cancella la parola chiave %s';
$lang_keywordmgr_php['confirm_delete'] = 'Sei sicuro di voler cancellare la parola chiave %s da tutta la galleria?'; // js-alert
$lang_keywordmgr_php['change_keyword'] = 'Cambia parola chiave';
}

// ------------------------------------------------------------------------- //
// File langmgr.php
// ------------------------------------------------------------------------- //
if (defined('LANGMGR_PHP')) {
$lang_langmgr_php['title'] = 'Gestione lingue';
$lang_langmgr_php['english_language_name'] = 'Inglese';
$lang_langmgr_php['native_language_name'] = 'Nativa';
$lang_langmgr_php['custom_language_name'] = 'Personalizzata';
$lang_langmgr_php['language_name'] = 'Nome lingua';
$lang_langmgr_php['language_file'] = 'File della lingua';
$lang_langmgr_php['flag'] = 'Bandiera';
$lang_langmgr_php['file_available'] = 'Disponibile';
$lang_langmgr_php['enabled'] = 'Abilitata';
$lang_langmgr_php['complete'] = 'Completa';
$lang_langmgr_php['default'] = 'Predefinita';
$lang_langmgr_php['missing'] = 'mancante';
$lang_langmgr_php['broken'] = 'sembra essere danneggiato o inaccessibile';
$lang_langmgr_php['exists_in_db_and_file'] = 'esiste nel database e come file';
$lang_langmgr_php['exists_as_file_only'] = 'esiste solo come file';
$lang_langmgr_php['pick_a_flag'] = 'Scegline uno';
$lang_langmgr_php['replace_x_with_y'] = 'Sostituisci %s con %s';
$lang_langmgr_php['tanslator_information'] = 'Informazioni sul traduttore';
$lang_langmgr_php['cpg_version'] = 'Versione Coppermine';
$lang_langmgr_php['hide_details'] = 'Nascondi i dettagli';
$lang_langmgr_php['show_details'] = 'Mostra i dettagli';
$lang_langmgr_php['loading'] = 'Caricamento in corso';
$lang_langmgr_php['english_missing'] = 'Il file della lingua inglese manca, sebbene non dovrebbe mai essere rimosso. Devi ripristinarlo immediatamente.';
$lang_langmgr_php['enable_at_least_one'] = 'Devi abilitare almeno una lingua perch&egrave; la galleria funzioni';
$lang_langmgr_php['enable_default'] = 'Hai scelto una lingua predefinita che non &egrave; abilitata. Seleziona un\'altra lingua predefinita o abilita la lingua che hai selezionato come predefinita!';
$lang_langmgr_php['available_default'] = 'Hai scelto una lingua predefinita che non &egrave; disponibile. Seleziona un\'altra lingua predefinita!';
$lang_langmgr_php['version_does_not_match'] = 'La versione di questo file non corrisponde alla tua versione di Coppermine. Usalo con attenzione e provalo accuratamente!';
$lang_langmgr_php['no_version'] = 'Non &egrave; stato possibile ottenere informazioni sulla versione. &Egrave; verosimile che questo file di lingua non funzioni proprio o non sia veramente un file di lingua.';
$lang_langmgr_php['filesize'] = 'La dimensione %s non &egrave; plausibile';
$lang_langmgr_php['content_missing'] = 'Il file non sembra contenere le informazioni necessarie, pertanto &egrave; probabilmente non &egrave; un file di lingua valido.';
$lang_langmgr_php['status'] = 'Stato';
$lang_langmgr_php['default_language'] = 'Lingua predefinita impostata a %s';
}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //
if (defined('LOGIN_PHP')) {
$lang_login_php['login'] = 'Login';
$lang_login_php['enter_login_pswd'] = 'Inserisci il tuo nome utente e la tua password per accedere';
$lang_login_php['username'] = 'Nome utente';
$lang_login_php['email'] = 'Indirizzo di posta elettronica'; // cpg1.5
$lang_login_php['both'] = 'Nome utente / Indirizzo di posta elettronica'; // cpg1.5
$lang_login_php['password'] = 'Password';
$lang_login_php['remember_me'] = 'Ricordami';
$lang_login_php['welcome'] = 'Benvenuto %s ...';
$lang_login_php['err_login'] = 'Accesso fallito. Prova di nuovo.';
$lang_login_php['err_already_logged_in'] = 'Hai gi&agrave; effettuato il login!';
$lang_login_php['forgot_password_link'] = 'Ho dimenticato la mia password';
$lang_login_php['cookie_warning'] = 'Attenzione, il tuo browser non accetta i cookie dello script';
$lang_login_php['send_activation_link'] = 'Non hai ricevuto il link di attivazione?';
$lang_login_php['force_login'] = 'Devi effettuare il login per vedere questa pagina'; // cpg1.5
$lang_login_php['force_login_title'] = 'Effettua il login per continuare'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) {
$lang_logout_php['logout'] = 'Logout';
$lang_logout_php['bye'] = 'Arrivederci %s ...';
$lang_logout_php['err_not_logged_in'] = 'Non hai effettuato il login!'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File minibrowser.php
// ------------------------------------------------------------------------- //
if (defined('MINIBROWSER_PHP')) {
$lang_minibrowser_php['up'] = 'su di un livello';
$lang_minibrowser_php['current_path'] = 'percorso attuale';
$lang_minibrowser_php['select_directory'] = 'scegli una cartella';
$lang_minibrowser_php['click_to_close'] = 'Premi sull\'immagine per chiudere questa finestra';
$lang_minibrowser_php['folder'] = 'Cartella'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File mode.php
// ------------------------------------------------------------------------- //
if (defined('MODE_PHP')) {
$lang_mode_php[0] = 'Controlli di amministrazione nascosti'; // cpg1.5
$lang_mode_php[1] = 'Controlli di amministrazione resi visibili'; // cpg1.5
$lang_mode_php['news_hide'] = 'Novit&agrave; nascoste'; // cpg1.5
$lang_mode_php['news_show'] = 'Novit&agrave; rese visibili'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //
if (defined('MODIFYALB_PHP')) {
$lang_modifyalb_php['upd_alb_n'] = 'Aggiorna album %s';
$lang_modifyalb_php['related_tasks'] = 'Operazioni correlate'; // cpg1.5
$lang_modifyalb_php['choose_album'] = 'Scegli album'; // cpg1.5
$lang_modifyalb_php['general_settings'] = 'Impostazioni generali';
$lang_modifyalb_php['alb_title'] = 'Titolo dell\'album';
$lang_modifyalb_php['alb_cat'] = 'Categoria dell\'album';
$lang_modifyalb_php['alb_desc'] = 'Descrizione dell\'album';
$lang_modifyalb_php['alb_keyword'] = 'Parola chiave dell\'album';
$lang_modifyalb_php['alb_thumb'] = 'Miniature dell\'album';
$lang_modifyalb_php['alb_perm'] = 'Permessi per questo album';
$lang_modifyalb_php['can_view'] = 'L\'album pu&ograve; essere visto da';
$lang_modifyalb_php['can_upload'] = 'I visitatori possono caricare i file';
$lang_modifyalb_php['can_post_comments'] = 'I visitatori possono inserire commenti';
$lang_modifyalb_php['can_rate'] = 'I visitatori possono votare le immagini';
$lang_modifyalb_php['user_gal'] = 'Galleria utente';
$lang_modifyalb_php['my_gal'] = '* La mia galleria *'; // cpg 1.5
$lang_modifyalb_php['no_cat'] = '* Nessuna categoria *';
$lang_modifyalb_php['alb_empty'] = 'L\'album &egrave; vuoto';
$lang_modifyalb_php['last_uploaded'] = 'Le ultime caricate';
$lang_modifyalb_php['public_alb'] = 'Tutti (album pubblico)';
$lang_modifyalb_php['me_only'] = 'Solo io';
$lang_modifyalb_php['owner_only'] = 'Solo il proprietario dell\'album (%s)';
$lang_modifyalb_php['group_only'] = 'I membri del gruppo \'%s\'';
$lang_modifyalb_php['err_no_alb_to_modify'] = 'Non ci sono album che puoi modificare nel database.';
$lang_modifyalb_php['update'] = 'Aggiorna album';
$lang_modifyalb_php['reset_album'] = 'Reimposta album';
$lang_modifyalb_php['reset_views'] = 'Reimposta il contatore di visualizzazioni a &quot;0&quot; in %s';
$lang_modifyalb_php['reset_rating'] = 'Azzera i voti a tutte le immagini in %s';
$lang_modifyalb_php['delete_comments'] = 'Cancella tutti i commenti fatti in %s';
$lang_modifyalb_php['delete_files'] = 'Cancella %sirreversibilmente%s tutti i file in %s';
$lang_modifyalb_php['views'] = 'visualizzazioni';
$lang_modifyalb_php['votes'] = 'voti';
$lang_modifyalb_php['comments'] = 'commenti';
$lang_modifyalb_php['files'] = 'file';
$lang_modifyalb_php['submit_reset'] = 'invia modifiche';
$lang_modifyalb_php['reset_views_confirm'] = 'Sono sicuro';
$lang_modifyalb_php['notice1'] = '(*) a seconda delle impostazioni dei %sgruppi%s'; // do not translate the %s placeholders
$lang_modifyalb_php['can_moderate'] = 'L\'album pu&ograve; essere moderato da'; // cpg 1.5
$lang_modifyalb_php['admins_only'] = 'Solo gli amministratori'; // cpg 1.5
$lang_modifyalb_php['alb_password'] = 'Password dell\'album (Nuova password)';
$lang_modifyalb_php['alb_password_hint'] = 'Suggerimento per la password dell\'album';
$lang_modifyalb_php['edit_files'] = 'Modifica file';
$lang_modifyalb_php['parent_category'] = 'Categoria madre';
$lang_modifyalb_php['thumbnail_view'] = 'Visualizzazione miniature';
$lang_modifyalb_php['random_image'] = 'Immagine casuale'; // cpg 1.5
$lang_modifyalb_php['password_protect'] = 'Questo album &egrave protetto da password (Spunta per SI)'; //cpg1.5
}

// ------------------------------------------------------------------------- //
// File phpinfo.php
// ------------------------------------------------------------------------- //
if (defined('PHPINFO_PHP')) {
$lang_phpinfo_php['php_info'] = 'Informazioni PHP';
$lang_phpinfo_php['explanation'] = 'Questi sono i dati generati dalla funzione PHP <a href="http://www.php.net/phpinfo">phpinfo()</a>, mostrati all\'interno di Coppermine.';
$lang_phpinfo_php['no_link'] = 'Lasciare che altri vedano il tuo phpinfo pu&ograve; costituire un rischio per la sicurezza, ecco perch&egrave; questa pagina &egrave; visibile solo quando sei connesso come amministratore. Non puoi mettere un collegamento a questa pagina per mostrarla ad altri, avranno negato l\'accesso.';
}

// ------------------------------------------------------------------------- //
// File picmgr.php
// ------------------------------------------------------------------------- //
if (defined('PICMGR_PHP')) {
$lang_picmgr_php['pic_mgr'] = 'Gestione immagini';
$lang_picmgr_php['confirm_modifs'] = 'Eseguire davvero le modifiche?'; // cpg1.5 // js-alert
$lang_picmgr_php['no_change'] = 'Non hai fatto alcuna modifica!';
$lang_picmgr_php['no_album'] = '* Nessun album *';
$lang_picmgr_php['explanation_header'] = 'Il criterio di ordinamento personalizzato che puoi specificare in questa pagina sar&agrave; preso in considerazione solo se';
$lang_picmgr_php['explanation1'] = 'l\'amministratore ha impostato l\'"Ordinamento predefinito per i file" nella configurazione su "Posizione discendente" o "Posizione ascendente" (impostazione globale per tutti gli utenti che non hanno scelto un altro criterio di ordinamento individuale)';
$lang_picmgr_php['explanation2'] = 'l\'utente ha scelto "Poszione discendente" o "Posizione ascendente" nella pagina delle miniature (impostazione su base utente)';
$lang_picmgr_php['change_album'] = 'Se cambi l\'album, le modifiche andranno perse!'; // cpg1.5 // js-alert
$lang_picmgr_php['submit_reminder'] = 'Le modifiche all\'ordinamento non sono salvate finch&egrave; non premi su &quot;Applica modifiche&quot;.'; // cpg1.5
}


// ------------------------------------------------------------------------- //
// File pluginmgr.php
// ------------------------------------------------------------------------- //
if (defined('PLUGINMGR_PHP')){
$lang_pluginmgr_php['confirm_uninstall'] = 'Sei sicuro di voler DISINSTALLARE questo plugin?';
$lang_pluginmgr_php['confirm_remove'] = 'NOTA: l\'API del plugin &egrave; disabilitata. Vuoi RIMUOVERE MANUALMENTE questo plugin, ignorando ogni azione di pulizia'; // cpg1.5
$lang_pluginmgr_php['confirm_delete'] = 'Sei sicuro di voler CANCELLARE questo plugin?';
$lang_pluginmgr_php['pmgr'] = 'Gestione plugin';
$lang_pluginmgr_php['explanation'] = 'Installa / disinstalla / gestisci plugin usando questa pagina.'; // cpg1.5
$lang_pluginmgr_php['plugin_enabled'] = 'API del plugin abilitata'; // cpg1.5
$lang_pluginmgr_php['name'] = 'Nome';
$lang_pluginmgr_php['author'] = 'Autore';
$lang_pluginmgr_php['desc'] = 'Descrizione';
$lang_pluginmgr_php['vers'] = 'v';
$lang_pluginmgr_php['i_plugins'] = 'Plugin installati';
$lang_pluginmgr_php['n_plugins'] = 'Plugin non installati';
$lang_pluginmgr_php['none_installed'] = 'Nessuno installato';
$lang_pluginmgr_php['operation'] = 'Operazione';
$lang_pluginmgr_php['not_plugin_package'] = 'Il file caricato non &egrave; un pacchetto plugin.';
$lang_pluginmgr_php['copy_error'] = 'C\'&egrave; stato un errore copiando il pacchetto nella cartella dei plugin.';
$lang_pluginmgr_php['upload'] = 'Carica';
$lang_pluginmgr_php['configure_plugin'] = 'Configura plugin';
$lang_pluginmgr_php['cleanup_plugin'] = 'Pulizia plugin';
$lang_pluginmgr_php['extra'] = 'Extra'; // cpg1.5
$lang_pluginmgr_php['install_info'] = 'Informazioni di installazione'; // cpg1.5
$lang_pluginmgr_php['plugin_disabled_note'] = 'L\'API del plugin &egrave; disabilitata, pertanto l\'operazione non &egrave; permessa.'; // cpg1.5
$lang_pluginmgr_php['install'] = 'installa'; // cpg1.5
$lang_pluginmgr_php['uninstall'] = 'disinstalla'; // cpg1.5
$lang_pluginmgr_php['minimum_requirements_not_met'] = 'Requisiti minimi non soddisfatti'; // cpg1.5
$lang_pluginmgr_php['confirm_version'] = 'Non &egrave; stato possibile determinare i requisiti di versione per questo plugin. Normalmente questo indica che il plugin non &egrave; progettato per la tua versione di Coppermine e potrebbe quindi destabilizzare la tua galleria. Vuoi continuare lo stesso (non raccomandato)?'; // cpg1.5 // js-alert
}

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //
if (defined('RATEPIC_PHP')) {
$lang_rate_pic_php['already_rated'] = 'Spiacente ma hai gi&agrave; votato questa foto';
$lang_rate_pic_php['rate_ok'] = 'Il tuo voto &egrave; stato accettato';
$lang_rate_pic_php['forbidden'] = 'Non puoi votare le tue immagini.';
}

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //
if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {
$lang_register_php['disclamer'] = <<< EOT
Bench&egrave; Gli amministratori di {SITE_NAME} cercheranno di rimuovere o modificare pi&ugrave; rapidamente possibile tutto il materiale obiettivamente sgradevole, &egrave; impossibile controllare ogni commento. Perci&ograve; riconosci che tutti i contenuti pubblicati di questo sito esprimono il punto di vista e le opinioni dell'autore e non degli amministratori o del webmaster (eccetto quelli inviati dagli stessi) e per questo non sono perseguibili.<br />
<br />
Accetti di non inviare materiale abusivo, osceno, volgare, diffamatorio, odioso, minatorio, a contenuto sessuale o che possa violare qualunque legge vigente. Accetti che il webmaster, l'amministratore e i moderatori di {SITE_NAME} hanno il diritto di rimuovere o modificare ogni contenuto in qualsiasi momento gli sembri opportuno. Come utente accetti che ogni informazione che hai inserito sopra venga conservata in un database. Anche se queste informazioni non saranno divulgate a terzi senza il tuo consenso, il webmaster e l'amministratore non possono essere ritenuti responsabili per qualsiasi tentativo di attacco che possa portare alla compromissione dei dati.<br />
<br />
Questo sito fa uso di cookie per conservare informazioni sul tuo computer locale. Questi cookie servono solo per migliorare la tua esperienza di navigazione nel sito. L'indirizzo di posta elettronica viene utilizzato solo per confermare i dettagli della registrazione e la password.<br />
<br />
Cliccando 'Accetto' di seguito accetti di essere vincolato da queste condizioni.
EOT;
$lang_register_php['page_title'] = 'Registrazione utente';
$lang_register_php['term_cond'] = 'Termini e condizioni';
$lang_register_php['i_agree'] = 'Accetto';
$lang_register_php['submit'] = 'Invia registrazione';
$lang_register_php['err_user_exists'] = 'Il nome utente che hai immesso esiste gi&agrave;, scegline un altro';
$lang_register_php['err_global_pw'] = 'Password globale di registrazione non valida'; // cpg1.5
$lang_register_php['err_global_pass_same'] = 'La tua password dovrebbe essere diversa dalla password globale'; // cpg1.5
$lang_register_php['err_duplicate_email'] = 'Un\'altro utente si &egrave; gi&agrave; registrato con l\'indirizzo di posta elettronica che hai inserito';
$lang_register_php['err_disclaimer'] = 'Devi accettare i termini e le condizioni'; // cpg1.5
$lang_register_php['enter_info'] = 'Inserisci le informazioni di registrazione';
$lang_register_php['required_info'] = 'Informazioni obbligatorie';
$lang_register_php['optional_info'] = 'Informazioni facoltative';
$lang_register_php['username'] = 'Nome utente';
$lang_register_php['password'] = 'Password';
$lang_register_php['password_again'] = 'Reinserisci la password';
$lang_register_php['global_registration_pw'] = 'Password di registrazione globale'; // cpg1.5
$lang_register_php['email'] = 'E-mail';
$lang_register_php['location'] = 'Provenienza';
$lang_register_php['interests'] = 'Interessi';
$lang_register_php['website'] = 'Sito web';
$lang_register_php['occupation'] = 'Professione';
$lang_register_php['error'] = 'ERRORE';
$lang_register_php['confirm_email_subject'] = '%s - Conferma registrazione';
$lang_register_php['information'] = 'Informazioni';
$lang_register_php['failed_sending_email'] = 'L\'email di conferma della registrazione non pu&ograve; essere inviata';
$lang_register_php['thank_you'] = 'Grazie per esserti registrato.<br />Una email contenente le istruzioni su come attivare il tuo account &egrave; stata spedita all\'indirizzo di posta elettronica che hai fornito';
$lang_register_php['acct_created'] = 'Il tuo account &egrave; stato creato e adesso puoi accedere con il tuo nome utente e la tua password';
$lang_register_php['acct_active'] = 'Il tuo account adesso &egrave; stato attivato e puoi accedere con il tuo nome utente e la tua password';
$lang_register_php['acct_already_act'] = 'L\'account &egrave; gi&agrave; attivo!';
$lang_register_php['acct_act_failed'] = 'Questo account non pu&ograve; essere attivato!';
$lang_register_php['err_unk_user'] = 'L\'utente selezionato non esiste!';
$lang_register_php['x_s_profile'] = 'Il profilo di %s';
$lang_register_php['group'] = 'Gruppo';
$lang_register_php['reg_date'] = 'Registrato';
$lang_register_php['disk_usage'] = 'Spazio utilizzato';
$lang_register_php['change_pass'] = 'Cambia password';
$lang_register_php['current_pass'] = 'Password attuale';
$lang_register_php['new_pass'] = 'Nuova password';
$lang_register_php['new_pass_again'] = 'Ancora la nuova password';
$lang_register_php['err_curr_pass'] = 'La password attuale non &egrave; corretta';
$lang_register_php['change_pass'] = 'Cambia la mia password';
$lang_register_php['update_success'] = 'Il tuo profilo &egrave; stato aggiornato';
$lang_register_php['pass_chg_success'] = 'La tua password &egrave; stata modificata';
$lang_register_php['pass_chg_error'] = 'La tua password non &egrave; stata modificata';
$lang_register_php['notify_admin_email_subject'] = '%s - Notifica di registrazione';
$lang_register_php['last_uploads'] = 'Ultimo file caricato'; // cpg1.5
$lang_register_php['last_uploads_detail'] = 'Premi per vedere tutte i file caricati da %s'; // cpg1.5
$lang_register_php['last_comments'] = 'Ultimo commento'; // cpg1.5
$lang_register_php['you'] = 'tu'; // cpg1.5
$lang_register_php['last_comments_detail'] = 'Premi per vedere tutti i commenti fatti da %s'; // cpg1.5
$lang_register_php['notify_admin_email_body'] = 'Un nuovo utente con nome utente "%s" si &egrave; registrato nella tua galleria';
$lang_register_php['pic_count'] = 'file caricati';
$lang_register_php['notify_admin_request_email_subject'] = '%s - Richiesta di registrazione';
$lang_register_php['thank_you_admin_activation'] = 'Grazie.<br />La tua richiesta di attivazione &egrave; stata inoltrata all\'amministratore. Riceverai un\'email se verr&agrave; approvata.';
$lang_register_php['acct_active_admin_activation'] = 'L\'account adesso &egrave; attivo e una mail &egrave; stata inviata all\'utente.';
$lang_register_php['notify_user_email_subject'] = '%s - Notifica di attivazione';
$lang_register_php['delete_my_account'] = 'Cancella il mio account utente'; // cpg1.5
$lang_register_php['warning_delete'] = 'Attenzione: la cancellazione dell\'account non pu&ograve; essere annullata. I %sfile che hai caricato%s negli album pubblici e %si tuoi commenti%s non vengono cancellati con la cancellazione del tuo account! Verranno comunque cancellati i file che hai caricato nella tua galleria personale.'; // cpg1.5 // The %s-placeholders mustn't be removed, they will later be replaced by the wrappers for the links
$lang_register_php['i_am_sure'] = 'Sono sicuro di voler cancellare il mio account utente'; // cpg1.5
$lang_register_php['really_delete'] = 'Vuoi veramente cancellare il tuo account utente?'; // cpg1.5 // js-alert
$lang_register_php['edit_xs_profile'] = 'Modifica il profilo di %s'; // cpg1.5
$lang_register_php['edit_my_profile'] = 'Modifica il mio profilo'; // cpg1.5
$lang_register_php['none'] = 'nessuno'; // cpg1.5
$lang_register_php['user_name_banned'] = 'Il nome utente che hai selezionato non &egrave; permesso o &egrave; stato estromesso. Scegli un altro nome utente'; // cpg1.5
$lang_register_php['email_address_banned'] = 'Sei estromesso da questa galleria. Non ti &egrave; permesso registrarti di nuovo. V&agrave; via!'; // cpg1.5
$lang_register_php['email_warning1'] = 'Il campo email non deve essere vuoto!'; // cpg1.5
$lang_register_php['email_warning2'] = 'L\'indirizzo di posta elettronica che hai inserito non &egrave; valido. Controllalo!'; // cpg1.5
$lang_register_php['username_warning1'] = 'Il campo nome utente non deve essere vuoto!'; // cpg1.5
$lang_register_php['username_warning2'] = 'Il nome utente deve essere lungo almeno 2 caratteri!'; // cpg1.5
$lang_register_php['password_warning1'] = 'La password deve essere lunga almeno 2 caratteri!'; // cpg1.5
$lang_register_php['password_warning2'] = 'Il nome utente e la password devono essere diversi!'; // cpg1.5
$lang_register_php['password_verification_warning1'] = 'Le due password non corrispondono, inseriscile nuovamente!'; // cpg1.5
$lang_register_php['form_not_submit'] = 'Il modulo non &egrave; stato inviato - ci sono errori che devi prima correggere!'; // cpg1.5
$lang_register_php['banned'] = 'Estromesso!'; // cpg1.5

$lang_register_php['confirm_email'] = <<< EOT
Grazie per esserti registrato su {SITE_NAME}

Per attivare il tuo account con nome utente "{USER_NAME}", devi cliccare sul collegamento qui sotto oppure copiarlo e incollarlo nel tuo browser.
<a href="{ACT_LINK}">{ACT_LINK}</a>

Saluti,

L'amministrazione di {SITE_NAME}

EOT;

$lang_register_approve_email = <<< EOT
Un nuovo utente con nome "{USER_NAME}" si &egrave; registrato alla tua galleria.
Per attivare l'account, devi cliccare sul collegamento qui sotto o copiarlo e incollarlo nel tuo browser.

<a href="{ACT_LINK}">{ACT_LINK}</a>

EOT;

$lang_register_php['activated_email'] = <<< EOT
Il tuo account &egrave; stato approvato e attivato.

Adesso puoi accedere al sito <a href="{SITE_LINK}">{SITE_LINK}</a> usando il tuo nome utente "{USER_NAME}"


Saluti,

L'amministrazione di {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //
if (defined('REVIEWCOM_PHP')) {
$lang_reviewcom_php['title'] = 'Controlla commenti';
$lang_reviewcom_php['no_comment'] = 'Non ci sono commenti da controllare';
$lang_reviewcom_php['n_comm_del'] = '%s commento/i cancellato/i';
$lang_reviewcom_php['n_comm_disp'] = 'Numero di commenti da mostrare';
$lang_reviewcom_php['see_prev'] = 'Guarda i precedenti';
$lang_reviewcom_php['see_next'] = 'Guarda i successivi';
$lang_reviewcom_php['del_comm'] = 'Cancella i commenti selezionati';
$lang_reviewcom_php['user_name'] = 'Nome';
$lang_reviewcom_php['date'] = 'Data';
$lang_reviewcom_php['comment'] = 'Commento';
$lang_reviewcom_php['file'] = 'File';
$lang_reviewcom_php['name_a'] = 'Nome utente ascendente';
$lang_reviewcom_php['name_d'] = 'User name discendente';
$lang_reviewcom_php['date_a'] = 'Data ascendente';
$lang_reviewcom_php['date_d'] = 'Data discendente';
$lang_reviewcom_php['comment_a'] = 'Testo commento ascendente';
$lang_reviewcom_php['comment_d'] = 'Testo commento discendente';
$lang_reviewcom_php['file_a'] = 'File ascendente';
$lang_reviewcom_php['file_d'] = 'File discendente';
$lang_reviewcom_php['approval_a'] = 'Approvazione ascendente'; // cpg1.5
$lang_reviewcom_php['approval_d'] = 'Approvazione discendente'; // cpg1.5
$lang_reviewcom_php['ip_a'] = 'Indirizzo IP ascendente'; // cpg1.5
$lang_reviewcom_php['ip_d'] = 'Indirizzo IP discendente'; // cpg1.5
$lang_reviewcom_php['akismet_a'] = 'Valutazione Akismet (commenti validi in fondo)'; // cpg1.5
$lang_reviewcom_php['akismet_d'] = 'Valutazione Akismet (commenti validi all\'inizio)'; // cpg1.5
$lang_reviewcom_php['n_comm_appr'] = '%s commento/i approvato/i'; // cpg1.5
$lang_reviewcom_php['n_comm_unappr'] = '%s commento/i non approvato/i'; // cpg1.5
$lang_reviewcom_php['configuration_changed'] = 'Configurazione approvazioni modificata'; // cpg1.5
$lang_reviewcom_php['only_approval'] = 'mostra solo commenti da approvare'; // cpg1.5
$lang_reviewcom_php['approval'] = 'Approvato'; // cpg1.5
$lang_reviewcom_php['save_changes'] = 'Salva le modifiche'; // cpg1.5
$lang_reviewcom_php['n_confirm_delete'] = 'Vuoi veramente cancellare il/i commento/i selezionato/i?'; // cpg1.5
$lang_reviewcom_php['with_selected'] = 'Con i selezionati'; // cpg1.5
$lang_reviewcom_php['delete'] = 'cancella'; // cpg1.5
$lang_reviewcom_php['approve'] = 'approva'; // cpg1.5
$lang_reviewcom_php['disapprove'] = 'segna come non approvato'; // cpg1.5
$lang_reviewcom_php['do_nothing'] = 'non fare nulla'; // cpg1.5
$lang_reviewcom_php['comment_approved'] = 'Commento approvato'; // cpg1.5
$lang_reviewcom_php['comment_unapproved'] = 'Commento segnato come non approvato'; // cpg1.5
$lang_reviewcom_php['ban_and_delete'] = 'Estrometti utente e cancella commento/i'; // cpg1.5
$lang_reviewcom_php['akismet_status'] = 'Akismet ha detto'; // cpg1.5
$lang_reviewcom_php['is_spam'] = '&egrave; spam'; // cpg1.5
$lang_reviewcom_php['is_not_spam'] = 'non &egrave; spam'; // cpg1.5
$lang_reviewcom_php['akismet'] = 'Akismet'; // cpg1.5
$lang_reviewcom_php['akismet_count'] = 'Akismet ha trovato %s messaggi spam per te finora'; // cpg1.5
$lang_reviewcom_php['akismet_test_result'] = 'Risultato del test della tua chiave API Akismet %s'; // cpg1.5
$lang_reviewcom_php['invalid'] = 'non valida'; // cpg1.5
$lang_reviewcom_php['missing_gallery_url'] = 'Devi specificare l\'URL di una galleria nella configurazione di Coppermine'; // cpg1.5
$lang_reviewcom_php['unable_to_connect'] = 'Impossibile connettersi a akismet.com'; // cpg1.5
$lang_reviewcom_php['not_found'] = 'L\'URL di destinazione non &egrave; stato trovato. Forse la struttura di akismet.com &egrave; cambiata.'; // cpg1.5
$lang_reviewcom_php['unknown_error'] = 'Errore sconosciuto'; // cpg1.5
$lang_reviewcom_php['error_message'] = 'Il messaggio di errore restituito era'; // cpg1.5
$lang_reviewcom_php['ip_address'] = 'Indirizzo IP'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File sidebar.php
// ------------------------------------------------------------------------- //
if (defined('SIDEBAR_PHP')) {
$lang_sidebar_php['sidebar'] = 'Barra laterale'; // cpg1.5
$lang_sidebar_php['install'] = 'installa'; // cpg1.5
$lang_sidebar_php['install_explain'] = 'Tra i molti metodi per accedere velocemente alle informazioni sul sito, forniamo delle barre laterali per i browser pi&ugrave; diffusi e utilizzati su diversi sistemi operativi per raggiungere facilmente le pagine. Qui puoi trovare informazioni sull\'installazione e rimozione nei browser supportati'; // cpg1.5
$lang_sidebar_php['os_browser_detect'] = 'Riconoscimento del sistema operativo e del browser'; // cpg1.5
$lang_sidebar_php['os_browser_detect_explain'] = 'Lo script sta cercando di riconoscere il tuo sistema operativo e la versione del browser - attendi un attimo. Se il riconoscimento automatico fallisce, puoi eventualmente %ssvelare%s tutte le opzioni possibili di installazione della barra laterale manualmente.'; // cpg1.5
$lang_sidebar_php['mozilla'] = 'Mozilla, Firefox, Netscape 6+, Konqueror 3.2+'; // cpg1.5
$lang_sidebar_php['mozilla_explain'] = 'Se usi Mozilla 0.9.4 o successivo, puoi %saggiungere la nostra barra laterale al tuo insieme%s. Puoi disinstallare questa sidebar usando il pannello "Personalizza Sidebar" di Mozilla.'; // cpg1.5
$lang_sidebar_php['ie_mac'] = 'Internet Explorer 5 e superiore su Mac OS'; // cpg1.5
$lang_sidebar_php['ie_mac_explain'] = 'Se usi Internet Explorer 5 o superiore su MacOS, %sapri la nostra pagina delle barre laterali%s in una finestra separata. In questa finestra, apri la scheda "Page Holder" sul lato sinistro della finestra. Premi su "Aggiungi". Se la vuoi tenere per uso futuro, premi su "Preferiti" e seleziona "Aggiungi ai preferiti di Page Holder".'; // cpg1.5
$lang_sidebar_php['ie_win'] = 'Internet Explorer 5 e superiore su Windows'; // cpg1.5
$lang_sidebar_php['ie_win_explain'] = 'Se usi Internet Explorer 5 o superiore su Windows, puoi aggiungere la barra laterale alla toolbar Collegamenti, oppure puoi aggiungerla ai preferiti e, cliccandoci sopra, puoi vedere la nostra barra visualizzata al posto della solita barra di ricerca cliccando con il tasto destro %squi%s e selezionando "Aggiungi ai preferiti" dal menu contestuale. Questo collegamento non installa la nostra barra come barra di ricerca predefinita, quindi non viene apportata alcuna modifica al tuo sistema.'; // cpg1.5
$lang_sidebar_php['ie7_win'] = 'Internet Explorer 7 su Windows XP/Vista'; // cpg1.5
$lang_sidebar_php['ie7_win_explain'] = 'Se usi Internet Explorer 7 su Windows, puoi aggiungere un pop-up di navigazione alla toolbar dei Collegamenti, oppure puoi aggiungerla nei preferiti e, cliccandoci sopra, puoi vedere la nostra barra visualizzata come una finestra pop-up cliccando col tasto destro %squi%s e selezionando "Aggiungi ai preferiti" dal menu contestuale. Nelle precedenti versioni di IE, era possibile aggiungere la barra laterale attuale, ma in IE7 non puoi farlo senza effettuare complicate modifiche al registro. &Egrave; consigliato utilizzare un altro browser se si vuole utilizzare la sidebar attuale.'; // cpg1.5
$lang_sidebar_php['opera'] = 'Opera 6 e superiore'; // cpg1.5
$lang_sidebar_php['opera_explain'] = 'Se stai utilizzando Opera, puoi %scliccare su questo collegamento per aggiungere la nostra sidebar al tuo insieme%s. Poi spunta "Mostra nel pannello". Puoi disinstallare la barra laterale cliccando col tasto destro sulla sua scheda e scegliendo "Cancella" dal menu contestuale.'; // cpg1.5
$lang_sidebar_php['additional_options'] = 'Opzioni aggiuntive'; // cpg1.5
$lang_sidebar_php['additional_options_explain'] = 'Se hai un browser diverso da quelli menzionati sopra, premi %squi%s per visualizzare tutte le opzioni possibili per la barra laterale.'; // cpg1.5
$lang_sidebar_php['cannot_add_sidebar'] = 'La Sidebar non pu&ograve essere aggiunta! Il tuo browser non supporta questa opzione!'; // cpg1.5 // js-alert
$lang_sidebar_php['search'] = 'Cerca'; // cpg1.5
$lang_sidebar_php['reload'] = 'Ricarica'; // cpg1.5
}


// ------------------------------------------------------------------------- //
// File search.php
// ------------------------------------------------------------------------- //
if (defined('SEARCH_PHP')){
$lang_search_php['title'] = 'Cerca';
$lang_search_php['submit_search'] = 'cerca';
$lang_search_php['keyword_list_title'] = 'Lista parole chiave';
$lang_search_php['keyword_msg'] = 'La lista qui sopra non &egrave; completa. Non include le parole nei nomi dei file o nelle descrizioni. Prova a fare una ricerca nel testo completo.';
$lang_search_php['edit_keywords'] = 'Modifica parole chiave';
$lang_search_php['search in'] = 'Cerca in:';
$lang_search_php['ip_address'] = 'Indirizzo IP';
$lang_search_php['imgfields'] = 'Cerca nei file';
$lang_search_php['albcatfields'] = 'Cerca negli album e nelle categorie';
$lang_search_php['age'] = 'Et&agrave;';
$lang_search_php['newer_than'] = 'Pi&ugrave; recenti di';
$lang_search_php['older_than'] = 'Pi&ugrave; vecchie di';
$lang_search_php['days'] = 'giorni';
$lang_search_php['all_words'] = 'Corrispondenza di tutte le parole (AND)';
$lang_search_php['any_words'] = 'Corrispondenza di una delle parole (OR)';
$lang_search_php['regex'] = 'Corrispondenza con espressioni regolari';
$lang_search_php['album_title'] = 'Titoli degli album';
$lang_search_php['category_title'] = 'Titoli delle categorie';
}

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //
if (defined('SEARCHNEW_PHP')) {
$lang_search_new_php['page_title'] = 'Cerca nuove immagini';
$lang_search_new_php['select_dir'] = 'Seleziona cartella';
$lang_search_new_php['select_dir_msg'] = 'Questa funzione ti permette di aggiungere una serie di file che hai caricato sul tuo server via FTP.<br />Seleziona la cartella in cui hai caricato i file.';
$lang_search_new_php['no_pic_to_add'] = 'Non ci sono file da aggiungere';
$lang_search_new_php['need_one_album'] = 'Hai bisogno di almeno un album per usare questa funzione';
$lang_search_new_php['warning'] = 'Attenzione';
$lang_search_new_php['change_perm'] = 'lo script non pu&ograve; scrivere in questa cartella, devi cambiarne i permessi a 755 o 777 prima di tentare di aggiungere i file!';
$lang_search_new_php['target_album'] = '<strong>Metti i file di &quot;</strong>%s<strong>&quot; in </strong>%s';
$lang_search_new_php['folder'] = 'Cartella';
$lang_search_new_php['image'] = 'file';
$lang_search_new_php['result'] = 'Risultato';
$lang_search_new_php['dir_ro'] = 'Non scrivibile. ';
$lang_search_new_php['dir_cant_read'] = 'Non leggibile. ';
$lang_search_new_php['insert'] = 'Aggiunta nuovi file alla galleria in corso';
$lang_search_new_php['list_new_pic'] = 'Elenco dei nuovi file';
$lang_search_new_php['insert_selected'] = 'Inserire i file selezionati';
$lang_search_new_php['no_pic_found'] = 'Non &egrave; stato trovato alcun nuovo file';
$lang_search_new_php['be_patient'] = 'Abbi pazienza, lo script ha bisogno di tempo per aggiungere i file';
$lang_search_new_php['no_album'] = 'nessun album selezionato';
$lang_search_new_php['result_icon'] = 'permi per i dettagli o per ricaricare';
$lang_search_new_php['notes'] = <<< EOT
    <ul>
        <li>%s: il file &egrave; stato aggiunto con successo</li>
        <li>%s: il file &egrave; un duplicato ed &egrave; gi&agrave; nel database</li>
        <li>%s: non &egrave; stato possibile aggiungere il file, controlla la configurazione e i permessi delle cartelle dove si trovano i file</li>
        <li>%s: devi prima selezionare un album</li>
        <li>%s: il file &egrave; danneggiato o inaccessibile</li>
        <li>%s: tipo di file sconosciuto</li>
        <li>%s: il file &egrave; in realt&agrave; un'immagine GIF</li>
        <li>Se le icone non appaiono premi sul file danneggiato per vedere eventuali messaggi di errore generati da PHP</li>
        <li>Se il browser va in timeout, premi il bottone ricarica</li>
    </ul>
EOT;
// Translator note: Do not translate the %s placeholders - they are being replaced with icons
$lang_search_new_php['check_all'] = 'Seleziona tutti';
$lang_search_new_php['uncheck_all'] = 'Deseleziona tutti';
$lang_search_new_php['no_folders'] = 'Non ci sono ancora cartelle dentro la cartella "albums". Assicurati di creare almeno una cartella personalizzata dentro la cartella "albums" e caricaci dentro tramite FTP i tuoi file. Non puoi caricare nella cartelle "userpics" ed "edit", sono riservate ai caricamenti http e per uso interno.';
$lang_search_new_php['browse_batch_add'] = 'Interfaccia navigabile'; // cpg1.5
$lang_search_new_php['display_thumbs_batch_add'] = 'Mostra miniature di anteprima'; // cpg1.5
$lang_search_new_php['edit_pics'] = 'Modifica file';
$lang_search_new_php['edit_properties'] = 'Propriet&agrave; dell\'album';
$lang_search_new_php['view_thumbs'] = 'Visualizzazione miniature';
$lang_search_new_php['add_more_folder'] = 'Aggiungi cumulativamente altri file dalla cartella %s'; // cpg1.5
}

// ------------------------------------------------------------------------- //
//File send_activation.php
// ------------------------------------------------------------------------- //
if (defined('SEND_ACTIVATION_PHP')) {
$lang_send_activation_php['err_already_logged_in'] = 'Hai gi&agrave; effettuato il login!'; // cpg1.5
$lang_send_activation_php['activation_not_required'] = 'Questo sito non richiede attivazione via email'; // cpg1.5
$lang_send_activation_php['err_unk_user'] = 'L\'utente selezionato non esiste!'; // cpg1.5
$lang_send_activation_php['resend_act_link'] = 'Reinvia collegamento per l\'attivazione'; // cpg1.5
$lang_send_activation_php['enter_email'] = 'Inserisci il tuo indirizzo di posta elettronica'; // cpg1.5
$lang_send_activation_php['submit'] = 'Vai'; // cpg1.5
$lang_send_activation_php['failed_sending_email'] = 'L\'invio dell\'email con il collegamento per l\'attivazione non &egrave; riuscito'; // cpg1.5
$lang_send_activation_php['activation_email_sent'] = 'Un\'email con il collegamento per l\'attivazione &egrave; stata spedita a %s. Controlla le tua casella di posta elettronica per completare il processo'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File stat_details.php
// ------------------------------------------------------------------------- //

if (defined('STAT_DETAILS_PHP')) {
$lang_stat_details_php['show_hide'] = 'mostra/nascondi questa colonna';
$lang_stat_details_php['title'] = 'Dettagli statistici'; // cpg1.5
$lang_stat_details_php['vote'] = 'Dettagli sui voti';
$lang_stat_details_php['hits'] = 'Dettagli sulle visualizzazioni';
$lang_stat_details_php['stats'] = 'Statistiche sui voti';
$lang_stat_details_php['users'] = 'Statistiche utente';
$lang_stat_details_php['sdate'] = 'Data';
$lang_stat_details_php['rating'] = 'Valutazione';
$lang_stat_details_php['search_phrase'] = 'Frase ricercata';
$lang_stat_details_php['referer'] = 'Referenza';
$lang_stat_details_php['browser'] = 'Browser';
$lang_stat_details_php['os'] = 'Sistema operativo';
$lang_stat_details_php['ip'] = 'IP';
$lang_stat_details_php['uid'] = 'Utente'; // cpg1.5
$lang_stat_details_php['sort_by_xxx'] = 'Ordina per %s';
$lang_stat_details_php['ascending'] = 'ascendente';
$lang_stat_details_php['descending'] = 'discendente';
$lang_stat_details_php['internal'] = 'int';
$lang_stat_details_php['close'] = 'chiudi';
$lang_stat_details_php['hide_internal_referers'] = 'Nascondi riferenze interne';
$lang_stat_details_php['date_display'] = 'Visualizzazione data';
$lang_stat_details_php['records_per_page'] = 'voci per pagina';
$lang_stat_details_php['submit'] = 'invia / ricarica';
$lang_stat_details_php['overall_stats'] = 'Statistiche complessive'; // cpg1.5
$lang_stat_details_php['stats_by_os'] = 'Statistiche per sistema operativo'; // cpg1.5
$lang_stat_details_php['number_of_hits'] = 'Numero di visualizzazioni'; // cpg1.5
$lang_stat_details_php['total'] = 'Totale'; // cpg1.5
$lang_stat_details_php['stats_by_browser'] = 'Statistiche per browser'; // cpg1.5
$lang_stat_details_php['overall_stats_config'] = 'Configurazione statistiche complessive'; // cpg1.5
$lang_stat_details_php['hit_details'] = 'Conserva statistiche dettagliate delle visualizzazioni'; // cpg1.5
$lang_stat_details_php['hit_details_explanation'] = 'Conserva statistiche dettagliate delle visualizzazioni'; // cpg1.5
$lang_stat_details_php['vote_details'] = 'Conserva statistiche dettagliate dei voti'; // cpg1.5
$lang_stat_details_php['vote_details_explanation'] = 'Conserva statistiche dettagliate dei voti'; // cpg1.5
$lang_stat_details_php['empty_hits_table'] = 'Cancella tutte le statistiche delle visualizzazioni'; // cpg1.5
$lang_stat_details_php['empty_hits_table_confirm'] = 'Sei assolutamente sicuro di voler cancellare TUTTE le voci delle statistiche delle visualizzazioni per l\'INTERA galleria? Questa operazione non pu&ograve; essere annullata!'; // cpg1.5 // js-alert
$lang_stat_details_php['empty_votes_table'] = 'Cancella tutte le statistiche dei voti'; // cpg1.5
$lang_stat_details_php['empty_votes_table_confirm'] = 'Sei assolutamente sicuro di voler cancellare TUTTE le voci delle statistiche dei voti per l\'INTERA galleria? Questa operazione non pu&ograve; essere annullata!'; // cpg1.5 // js-alert
$lang_stat_details_php['submit'] = 'Invia'; // cpg1.5
$lang_stat_details_php['upd_success'] = 'La configurazione di Coppermine &egrave stata aggiornata'; // cpg1.5
$lang_stat_details_php['votes'] = 'voti'; // cpg1.5
$lang_stat_details_php['reset_votes_individual'] = 'Azzera il/i voto/i selezionato/i'; // cpg1.5
$lang_stat_details_php['reset_votes_individual_confirm'] = 'Sei sicuro di voler cancellare i voti selezionati? Questa operazione non pu&ograve; essere annullata!'; // cpg1.5
$lang_stat_details_php['back_to_intermediate'] = 'Torna alla visualizzazione dei file intermedi'; // cpg1.5
$lang_stat_details_php['records_on_page'] = '%s voci su %s pagina/e'; // cpg1.5
$lang_stat_details_php['guest'] = 'Visitatore'; // cpg1.5
$lang_stat_details_php['not_implemented'] = 'non ancora implementato'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) {
$lang_upload_php['title'] = 'Carica file';
$lang_upload_php['restrictions'] = 'Restrizioni'; // cpg1.5
$lang_upload_php['choose_method'] = 'Seleziona metodo di caricamento'; // cpg1.5
$lang_upload_php['upload_swf'] = 'Immagini multiple - gestito da Flash (raccomandato)'; // cpg1.5
$lang_upload_php['upload_single'] = 'semplice - un file per volta'; // cpg1.5
$lang_upload_php['up_instr_1'] = 'Seleziona un album dal menu a tendina';
$lang_upload_php['up_instr_2'] = 'Premi il pulsante "Sfoglia" qui sotto e naviga fino al file che vuoi caricare. Puoi selezionare pi&ugrave; file alla volta con Ctrl+Click.';
$lang_upload_php['up_instr_3'] = 'Seleziona altri file da caricare ripetendo il passo 2';
$lang_upload_php['up_instr_4'] = 'Premi sul pulsante "Continua" dopo che &egrave; terminato il caricamento di tutti i file (il pulsante apparir&agrave; solo quando avrai caricato almeno un file).';
$lang_upload_php['up_instr_5'] = 'Sarai rinviato ad una schermata dove potrai inserire informazioni dettagliate sui file caricati. Dopo aver riempito i campi, invia il modulo usando il pulsante "Applica modifiche" alla fine della pagina.';
$lang_upload_php['restriction_zip'] = 'I file ZIP rimarranno compressi, non saranno estratti sul server.';
$lang_upload_php['restriction_filesize'] = 'La dimensione dei file caricate dal tuo client sul server non deve superare %s per ciascuno.';
$lang_upload_php['reg_instr_1'] = 'Azione non valida per la creazione del modulo.';
$lang_upload_php['no_name'] = 'Nome file non disponibile'; // cpg 1.5
$lang_upload_php['no_tmp_name'] = 'Impossibile caricare'; // cpg 1.5
$lang_upload_php['no_post'] = 'File non caricato tramite POST.';
$lang_upload_php['forb_ext'] = 'Estensione file non permessa.';
$lang_upload_php['exc_php_ini'] = 'Superata la dimensione del file consentita nel php.ini.';
$lang_upload_php['exc_file_size'] = 'Superata la dimensione del file permessa da CPG.';
$lang_upload_php['partial_upload'] = 'Caricamento solo parziale.';
$lang_upload_php['no_upload'] = 'Non &egrave; avvenuto alcun caricamento.';
$lang_upload_php['unknown_code'] = 'Codice di errore caricamento PHP sconosciuto.';
$lang_upload_php['impossible'] = 'Impossibile spostare.';
$lang_upload_php['not_image'] = 'Non &egrave; un\'immagine/corrotta';
$lang_upload_php['not_GD'] = 'Non &egrave; un\'estensione GD.';
$lang_upload_php['pixel_allowance'] = 'L\'altezza e/o la larghezza dell\'immagine caricata &egrave; maggiore di quanto permesso dalla configurazione della galleria.';
$lang_upload_php['failure'] = 'Caricamento fallito';
$lang_upload_php['no_place'] = 'Non &egrave; stato possibile inserire l\'immagine precedente.';
$lang_upload_php['max_fsize'] = 'La dimensione massima ammessa dei file &egrave; %s';
$lang_upload_php['picture'] = 'File';
$lang_upload_php['pic_title'] = 'Titolo file';
$lang_upload_php['description'] = 'Descrizione file';
$lang_upload_php['keywords_sel'] = 'Seleziona una parola chiave';
$lang_upload_php['err_no_alb_uploadables'] = 'Spiacente, non ti &egrave; permesso caricare immagini in alcun album';
$lang_upload_php['close'] = 'Chiudi';
$lang_upload_php['no_keywords'] = 'Spiacente, nessuna parola chiave disponibile!';
$lang_upload_php['regenerate_dictionary'] = 'Rigenera dizionario';
$lang_upload_php['allowed_types'] = 'Ti &egrave; permesso caricare file con le seguenti estensioni:'; // cpg1.5
$lang_upload_php['allowed_img_types'] = 'Estensioni per immagini: %s'; // cpg1.5
$lang_upload_php['allowed_mov_types'] = 'Estensioni per i video: %s'; // cpg1.5
$lang_upload_php['allowed_doc_types'] = 'Estensioni per i documenti: %s'; // cpg1.5
$lang_upload_php['allowed_snd_types'] = 'Estensioni per gli audio: %s'; // cpg1.5
$lang_upload_php['please_wait'] = 'Attendi finch&egrave; lo script sta caricando - potrebbe volerci un po\''; // cpg1.5
$lang_upload_php['alternative_upload'] = 'Metodo di caricamento alternativo'; // cpg1.5
$lang_upload_php['xp_publish_promote'] = 'Se usi Windows XP/Vista, puoi altresì utilizzare la procedura guidata di caricamento di Windows XP per caricare file, che offre una interfaccia utente pi&ugrave; semplice direttamente sul client.'; // cpg1.5
$lang_upload_php['err_js_disabled'] = 'Non &egrave; stato possibile avviare l\'interfaccia di caricamento Flash. Devi avere JavaScript abilitato per poterla utilizzare.'; // cpg1.5
$lang_upload_php['err_flash_disabled'] = 'L\'interfaccia di caricamento sta impiegando troppo tempo per avviarsi oppure l\'avvio &egrave; fallito. Assicurati che il plugin Flash sia abilitato e di avere installata una versione funzionante di Flash Player.'; // cpg1.5
$lang_upload_php['err_alternate_method'] = 'In alternativa puoi utilizzare l\'interfaccia di caricamento <a href="upload.php?single=1">file per file</a>.'; // cpg1.5
$lang_upload_php['err_flash_version'] = 'Non &egrave; stato possibile avviare l\'interfaccia di caricamento. Potresti dover installare o aggiornare il Flash Player. Visita il <a href="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash">sito di Adobe</a> per ottenere il Flash Player.'; // cpg1.5
$lang_upload_php['flash_loading'] = 'L\'interfaccia di caricamento si sta avviando. Attendi un attimo...'; // cpg1.5

$lang_upload_swf_php['browse'] = 'Sfoglia...'; //cpg1.5
$lang_upload_swf_php['cancel_all'] = 'Annulla tutti i caricamenti'; //cpg1.5
$lang_upload_swf_php['upload_queue'] = 'Coda di caricamento'; //cpg1.5
$lang_upload_swf_php['files_uploaded'] = 'File caricati'; //cpg1.5
$lang_upload_swf_php['all_files'] = 'Tutti i file'; //cpg1.5
$lang_upload_swf_php['status_pending'] = 'In attesa...'; //cpg1.5
$lang_upload_swf_php['status_uploading'] = 'Caricamento in corso...'; //cpg1.5
$lang_upload_swf_php['status_complete'] = 'Completati.'; //cpg1.5
$lang_upload_swf_php['status_cancelled'] = 'Annullati.'; //cpg1.5
$lang_upload_swf_php['status_stopped'] = 'Interrotti.'; //cpg1.5
$lang_upload_swf_php['status_failed'] = 'Caricamento fallito.'; //cpg1.5
$lang_upload_swf_php['status_too_big'] = 'Il file &egrave; troppo grande.'; //cpg1.5
$lang_upload_swf_php['status_zero_byte'] = 'Non si possono caricare file di zero Byte.'; //cpg1.5
$lang_upload_swf_php['status_invalid_type'] = 'Tipo di file non valido.'; //cpg1.5
$lang_upload_swf_php['status_unhandled'] = 'Errore non gestito'; //cpg1.5
$lang_upload_swf_php['status_upload_error'] = 'Errore di caricamento: '; //cpg1.5
$lang_upload_swf_php['status_server_error'] = 'Errore server (IO)'; //cpg1.5
$lang_upload_swf_php['status_security_error'] = 'Errore di sicurezza'; //cpg1.5
$lang_upload_swf_php['status_upload_limit'] = 'Limite di caricamento superato.'; //cpg1.5
$lang_upload_swf_php['status_validation_failed'] = 'Convalida fallita. Caricamento saltato.'; //cpg1.5
$lang_upload_swf_php['queue_limit'] = 'Hai cercato di caricare troppi file.'; //cpg1.5
$lang_upload_swf_php['upload_limit_1'] = 'Hai raggiunto il limite di caricamento.'; //cpg1.5
$lang_upload_swf_php['upload_limit_2'] = 'Puoi selezionare fino a %s file'; //cpg1.5
}
// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //
if (defined('USERMGR_PHP')) {
$lang_usermgr_php['memberlist'] = 'Elenco utenti';
$lang_usermgr_php['user_manager'] = 'Gestione utenti';
$lang_usermgr_php['title'] = 'Gestisci utenti';
$lang_usermgr_php['name_a'] = 'Nome ascendente';
$lang_usermgr_php['name_d'] = 'Nome discendente';
$lang_usermgr_php['group_a'] = 'Gruppo ascendente';
$lang_usermgr_php['group_d'] = 'Gruppo discendente';
$lang_usermgr_php['reg_a'] = 'Data registrazione ascendente';
$lang_usermgr_php['reg_d'] = 'Data registrazione discendente';
$lang_usermgr_php['pic_a'] = 'Numero file ascendente';
$lang_usermgr_php['pic_d'] = 'Numero file discendente';
$lang_usermgr_php['disku_a'] = 'Utilizzo disco ascendente';
$lang_usermgr_php['disku_d'] = 'Utilizzo disco discendente';
$lang_usermgr_php['lv_a'] = 'Ultima visita ascendente';
$lang_usermgr_php['lv_d'] = 'Ultima visita discendente';
$lang_usermgr_php['sort_by'] = 'Ordina utenti per';
$lang_usermgr_php['err_no_users'] = 'La tabella degli utenti &egrave; vuota!';
$lang_usermgr_php['err_edit_self'] = 'Non puoi modificare il tuo profilo, usa a questo scopo il link \'Mio profilo\'';
$lang_usermgr_php['with_selected'] = 'Se selezionati:';
$lang_usermgr_php['delete_files_no'] = 'Conserva i file pubblici (ma rendili anonimi)';
$lang_usermgr_php['delete_files_yes'] = 'Cancella anche i file pubblici';
$lang_usermgr_php['delete_comments_no'] = 'Conserva i commenti (ma rendili anonimi)';
$lang_usermgr_php['delete_comments_yes'] = 'Cancella anche i commenti';
$lang_usermgr_php['activate'] = 'Attiva';
$lang_usermgr_php['deactivate'] = 'Disattiva';
$lang_usermgr_php['reset_password'] = 'Reimposta Password';
$lang_usermgr_php['change_primary_membergroup'] = 'Cambia il gruppo primario';
$lang_usermgr_php['add_secondary_membergroup'] = 'Aggiungi gruppo secondario';
$lang_usermgr_php['name'] = 'Nome utente';
$lang_usermgr_php['group'] = 'Gruppo';
$lang_usermgr_php['inactive'] = 'Inattivo';
$lang_usermgr_php['operations'] = 'Operazioni';
$lang_usermgr_php['pictures'] = 'File';
$lang_usermgr_php['disk_space_used'] = 'Spazio utilizzato';
$lang_usermgr_php['disk_space_quota'] = 'Spazio utilizzabile'; // cpg1.5
$lang_usermgr_php['registered_on'] = 'Registrazione';
$lang_usermgr_php['last_visit'] = 'Ultima visita';
$lang_usermgr_php['u_user_on_p_pages'] = '%d utenti su %d pagina/e';
$lang_usermgr_php['confirm_del'] = 'Sei sicuro di voler CANCELLARE questo utente?\\nAnche tutti i suoi file e i suoi album verranno cancellati.'; // js-alert
$lang_usermgr_php['mail'] = 'EMAIL';
$lang_usermgr_php['err_unknown_user'] = 'L\'utente selezionato non esiste!';
$lang_usermgr_php['modify_user'] = 'Modifica utente';
$lang_usermgr_php['notes'] = 'Note';
$lang_usermgr_php['note_list'] = 'Se non vuoi cambiare la password attuale, lascia vuoto il campo "password"';
$lang_usermgr_php['password'] = 'Password';
$lang_usermgr_php['user_active'] = 'L\'utente &egrave; attivo';
$lang_usermgr_php['user_group'] = 'Gruppo utente';
$lang_usermgr_php['user_email'] = 'Email utente';
$lang_usermgr_php['user_web_site'] = 'Sito dell\'utente';
$lang_usermgr_php['create_new_user'] = 'Crea un nuovo utente';
$lang_usermgr_php['user_location'] = 'Provenienza dell\'utente';
$lang_usermgr_php['user_interests'] = 'Interessi dell\'utente';
$lang_usermgr_php['user_occupation'] = 'Professione dell\'utente';
$lang_usermgr_php['user_profile1'] = '$user_profile1';
$lang_usermgr_php['user_profile2'] = '$user_profile2';
$lang_usermgr_php['user_profile3'] = '$user_profile3';
$lang_usermgr_php['user_profile4'] = '$user_profile4';
$lang_usermgr_php['user_profile5'] = '$user_profile5';
$lang_usermgr_php['user_profile6'] = '$user_profile6';
$lang_usermgr_php['latest_upload'] = 'File caricati di recente';
$lang_usermgr_php['no_latest_upload'] = 'Non ha ancora caricato alcun file'; // cpg1.5
$lang_usermgr_php['last_comments'] = 'Ultimi commenti'; // cpg1.5
$lang_usermgr_php['no_last_comments'] = 'Non ha fatto alcun commento'; // cpg1.5
$lang_usermgr_php['comments'] = 'Commenti'; // cpg1.5
$lang_usermgr_php['never'] = 'mai';
$lang_usermgr_php['search'] = 'Ricerca utente';
$lang_usermgr_php['submit'] = 'Invia';
$lang_usermgr_php['search_submit'] = 'Vai!';
$lang_usermgr_php['search_result'] = 'Risultati della ricerca per: ';
$lang_usermgr_php['alert_no_selection'] = 'Devi prima selezionare almeno un utente!'; // js-alert
$lang_usermgr_php['select_group'] = 'Seleziona gruppo';
$lang_usermgr_php['groups_alb_access'] = 'Permessi album per gruppo';
$lang_usermgr_php['category'] = 'Categoria';
$lang_usermgr_php['modify'] = 'Modifica?';
$lang_usermgr_php['group_no_access'] = 'Questo gruppo non ha accessi speciali';
$lang_usermgr_php['notice'] = 'Avviso';
$lang_usermgr_php['group_can_access'] = 'Gli album a cui solo "%s" pu&ograve; accedere';
$lang_usermgr_php['send_login_data'] = 'Invia dati di login a questo utente (la password verr&agrave; spedita via email)'; // cpg1.5
$lang_usermgr_php['send_login_email_subject'] = 'Le informazioni sul tuo nuovo account'; // cpg1.5
$lang_usermgr_php['failed_sending_email'] = 'La email con i dati di login non pu&ograve; essere spedita!'; // cpg1.5
$lang_usermgr_php['view_profile'] = 'Vedi il profilo'; // cpg1.5
$lang_usermgr_php['edit_profile'] = 'Modifica il profilo'; // cpg1.5
$lang_usermgr_php['ban_user'] = 'Estrometti utente'; // cpg1.5
$lang_usermgr_php['user_is_banned'] = 'L\'utente &egrave; estromesso'; // cpg1.5
$lang_usermgr_php['status'] = 'Stato'; // cpg1.5
$lang_usermgr_php['status_active'] = 'attivo'; // cpg1.5
$lang_usermgr_php['status_inactive'] = 'non attivo'; // cpg1.5
$lang_usermgr_php['total'] = 'Totale'; // cpg1.5
$lang_usermgr_php['send_login_data_email'] = <<< EOT
&Egrave; stato creato un nuovo account per te su {SITE_NAME}.

Adesso puoi accedere al sito <a href="{SITE_LINK}">{SITE_LINK}</a> usando il nome utente "{USER_NAME}" e la password "{USER_PASS}"


Saluti,

L'amministrazione di {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File update.php
// ------------------------------------------------------------------------- //
if (defined('UPDATE_PHP')) {
$lang_update_php['title'] = 'Utilit&agrave; di aggiornamento'; // cpg1.5
$lang_update_php['welcome_updater'] = 'Benvenuto all\'aggiornamento di Coppermine'; // cpg1.5
$lang_update_php['could_not_authenticate'] = 'Non &egrave; stato possibile autenticarti'; // cpg1.5
$lang_update_php['provide_admin_account'] = 'Immetti i dettagli del tuo account di amministrazione di Coppermine o i dati di accesso al tuo account MySQL'; // cpg1.5
$lang_update_php['try_again'] = 'Prova di nuovo'; // cpg1.5
$lang_update_php['mysql_connect_error'] = 'Non &egrave; stato possibile creare una connessione MySQL'; // cpg1.5
$lang_update_php['mysql_database_error'] = 'MySQL non &ègrave; riuscito a trovare un database chiamato %s'; // cpg1.5
$lang_update_php['mysql_said'] = 'MySQL ha detto'; // cpg1.5
$lang_update_php['check_config_file'] = 'Per favore controlla i dettagli MySQL in %s'; // cpg1.5
$lang_update_php['performing_database_updates'] = 'Aggiornamenti del database in corso'; // cpg1.5
$lang_update_php['performing_file_updates'] = 'Aggiornamenti dei files in corso'; // cpg1.5
$lang_update_php['already_done'] = 'Gi&agrave; fatto'; // cpg1.5
$lang_update_php['password_encryption'] = 'Cifratura delle password'; // cpg1.5
$lang_update_php['alb_password_encryption'] = 'Cifratura delle password degli album'; // cpg1.5
$lang_update_php['category_tree'] = 'Albero delle categorie'; // cpg1.5
$lang_update_php['authentication_needed'] = '&Egrave; necessaria l\'autenticazione'; // cpg1.5
$lang_update_php['username'] = 'Nome utente'; // cpg1.5
$lang_update_php['password'] = 'Password'; // cpg1.5
$lang_update_php['update_completed'] = 'Aggiornamento completato'; // cpg1.5
$lang_update_php['check_versions'] = 'Si consiglia di %sverificare le versioni dei file%s se hai appena aggiornato da una precedente versione di Coppermine'; // cpg1.5 // Leave the %s untouched when translating - it wraps the link
$lang_update_php['start_page'] = 'Se non lo hai fatto (o se non vuoi fare la verifica), puoi andare alla %sPagina iniziale della tua galleria%s'; // cpg1.5 // Leave the %s untouched when translating - it wraps the link
$lang_update_php['errors_encountered'] = 'Sono stati riscontrati i seguenti errori, che devono essere prima corretti'; // cpg1.5
$lang_update_php['delete_file'] = 'Cancella %s'; // cpg1.5
$lang_update_php['could_not_delete'] = 'Non posso cancellare per mancanza di permsssi. Cancella i file manualmente!'; // cpg1.5
$lang_update_php['rename_file'] = 'Rinomina %s in %s'; // cpg1.5
$lang_update_php['could_not_rename'] = 'Non posso rinominare per mancanza di permsssi. Rinomina i file manualmente!'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //
if (defined('UTIL_PHP')) {
$lang_util_php['title'] = 'Strumenti di amministrazione'; // cpg1.5
$lang_util_php['file'] = 'File';
$lang_util_php['problem'] = 'Problema';
$lang_util_php['status'] = 'Stato';
$lang_util_php['title_set_to'] = 'titolo impostato a';
$lang_util_php['submit_form'] = 'invia';
$lang_util_php['titles_updated'] = '%s Titoli aggiornati.'; // cpg1.5
$lang_util_php['updated_successfully'] = 'aggiornato con successo'; // cpg1.5
$lang_util_php['error_create'] = 'ERRORE nella creazione di';
$lang_util_php['continue'] = 'Elabora altri file'; // cpg1.5
$lang_util_php['main_success'] = 'Il file %s &egrave; stato impostato con successo come file principale';
$lang_util_php['error_rename'] = 'Errore nel rinominare %s in %s';
$lang_util_php['error_not_found'] = 'Il file %s non &egrave; stato trovato';
$lang_util_php['back'] = 'Torna all\'inizio degli strumenti di amministrazione'; // cpg1.5
$lang_util_php['thumbs_wait'] = 'Aggiornamento miniature e/o immagini ridimensionate in corso, attendere...';
$lang_util_php['thumbs_continue_wait'] = 'Passaggio all\'aggiornamento di miniature e/o immagini ridimensionate in corso...';
$lang_util_php['titles_wait'] = 'Aggiornamento titoli in corso, attendere...';
$lang_util_php['delete_wait'] = 'Cancellazione titoli in corso, attendere...';
$lang_util_php['replace_wait'] = 'Cancellazione degli originali e loro sostituzione con immagini ridimensionate in corso, attendere...';
$lang_util_php['update'] = 'Aggiorna miniature e/o immagini ridimensionate';
$lang_util_php['update_what'] = 'Cosa dev\'essere aggiornato';
$lang_util_php['update_thumb'] = 'Solo miniature';
$lang_util_php['update_pic'] = 'Solo immagini ridimensionate';
$lang_util_php['update_both'] = 'Sia miniatute che immagini ridimensionate';
$lang_util_php['update_number'] = 'Numero di immagini elaborate per clic';
$lang_util_php['update_option'] = '(Prova a impostare ad un valore inferiore questa opzione se riscontri problemi di timeout)';
$lang_util_php['update_missing'] = 'Aggiorna solamente file mancanti'; // cpg1.5
$lang_util_php['filename_title'] = 'Nome file &rArr; Titolo file';
$lang_util_php['filename_how'] = 'Come dev\'essere modificato il titolo dell\'immagine';
$lang_util_php['filename_remove'] = 'Togli l\'estensione (.jpg o altra) e sostituisci  _ (trattini bassi) con spazi'; // cpg1.5
$lang_util_php['filename_euro'] = 'Cambia 2003_11_23_13_20_20.jpg in 23/11/2003 13:20';
$lang_util_php['filename_us'] = 'Cambia 2003_11_23_13_20_20.jpg in 11/23/2003 13:20';
$lang_util_php['filename_time'] = 'Cambia 2003_11_23_13_20_20.jpg in 13:20';
$lang_util_php['notitle'] = 'Applica solo a file con titolo vuoto'; // cpg1.5
$lang_util_php['delete_title'] = 'Cancella i titoli dei file';
$lang_util_php['delete_title_explanation'] = 'Rimuover&agrave; tutti i titoli dei file nell\'album specificato.';
$lang_util_php['delete_original'] = 'Cancella le foto a dimensione originale';
$lang_util_php['delete_original_explanation'] = 'Rimuover&agrave; le immagini a grandezza piena.';
$lang_util_php['delete_intermediate'] = 'Cancella le immagini intermedie';
$lang_util_php['delete_intermediate_explanation1'] = 'Canceller&agrave; le immagini intermedie (normali).'; // cpg1.5
$lang_util_php['delete_intermediate_explanation2'] = 'Usa questa funzione per liberare spazio se hai disabilitato \'Crea immagini intermedie\' nella configurazione dopo aver aggiunto immagini.'; // cpg1.5
$lang_util_php['delete_intermediate_check'] = 'L\'opzione di configurazione \'Crea immagini intermedie\' &egrave; attualmente %s.'; // cpg1.5
$lang_util_php['no_image'] = '%s &egrave; stata saltata perch&egrave non &egrave; un\'immagine.'; // cpg1.5
$lang_util_php['enabled'] = 'abilitato'; // cpg1.5
$lang_util_php['disabled'] = 'disabilitato'; // cpg1.5
$lang_util_php['delete_replace'] = 'Cancella le immagini originali sostituendole con la versione ridimensionata';
$lang_util_php['titles_deleted'] = 'Tutti i titoli specificati nell\'album sono stati rimossi';
$lang_util_php['deleting_intermediates'] = 'Cancellazione immagini intermedie in corso, attendere...';
$lang_util_php['searching_orphans'] = 'Ricerca file mancanti in corso, attendere...';
$lang_util_php['delete_orphans'] = 'Cancella commenti sui file mancanti';
$lang_util_php['delete_orphans_explanation'] = 'Identificher&agrave; e ti permetter&agrave; di cancellare tutti i commenti associati a file non pi&ugrave; presenti nella galleria.<br />Controlla tutti gli album.';
$lang_util_php['update_full_normal_thumb'] = 'Tutto: originali, ridimensionate e miniature'; // cpg1.5
$lang_util_php['update_full_normal'] = 'Sia quelle a grandezza piena che le ridimensionate (se &egrave; disponibile una copia originale)'; // cpg1.5
$lang_util_php['update_full'] = 'Solo quelle a grandezza piena (se &egrave; disponibile una copia originale)'; // cpg1.5
$lang_util_php['delete_back'] = 'Cancella il backup delle immagini originali per l\'applicazione della filigrana'; // cpg1.5
$lang_util_php['delete_back_explanation'] = 'Canceller&agrave; l\'immagine di backup. Risparmierai un po\' di spazio su disco ma non sarai pi&ugrave; in grado di rimuovere la filigrana!!! Dopo questa operazione la filigrana sar&agrave; permanente.'; // cpg1.5
$lang_util_php['finished'] = '<br />Aggiornamento miniature/immagini terminato!<br />'; // cpg1.5
$lang_util_php['autorefresh'] = 'Ricaricamento automatico (non &egrave; pi&ugrave; necessario premere il pulsante \'continua\')'; // cpg1.5
$lang_util_php['refresh_db'] = 'Ricarica informazioni sulle dimensioni e la grandezza dei file.';
$lang_util_php['refresh_db_explanation'] = 'Ri-legger&agrave; la grandezza e le dimensioni dei file. Usa questa opzione se le quote disco non sono corrette o se hai modificato manualmente i file.';
$lang_util_php['reset_views'] = 'Azzera il contatore delle visualizzazioni';
$lang_util_php['reset_views_explanation'] = 'Imposta tutti i contatori delle visualizzazioni a 0 nell\'album specificato.';
$lang_util_php['reset_success'] = 'Azzeramento effettuato con successo'; // cpg1.5
$lang_util_php['orphan_comment'] = 'Trovati commenti orfani';
$lang_util_php['delete_all'] = 'Cancella tutto';
$lang_util_php['delete_all_orphans'] = 'Cancello tutti gli orfani?';
$lang_util_php['comment'] = 'Commento: ';
$lang_util_php['nonexist'] = 'collegato al file inesistente # ';
$lang_util_php['delete_old'] = 'Cancella file che sono pi&ugrave; vecchi di un determinato numero di giorni'; // cpg1.5
$lang_util_php['delete_old_explanation'] = 'Canceller&agrave; i file che sono pi&ugrave; vecchi del numero di giorni specificato (grndezza piena, intermedie, miniature). Usa questa funzione per liberare spazio su disco.'; // cpg1.5
$lang_util_php['delete_old_warning'] = 'Attenzione: i file che specifichi saranno cancellati davvero senza ulteriori avvertimenti!'; // cpg1.5
$lang_util_php['deleting_old'] = 'Cancellazione immagini vecchie in corso, attendere...'; // cpg1.5
$lang_util_php['older_than'] = 'Cancella file pi&ugrave; vecchi di %s giorni'; // cpg1.5
$lang_util_php['del_orig'] = 'Il file originale %s &egrave; stato cancellatao con successo'; // cpg1.5
$lang_util_php['del_intermediate'] = 'L\'immagine intermedia %s &egrave; stata cancellata con successo'; // cpg1.5
$lang_util_php['del_thumb'] = 'La miniatura %s &egrave; stata cancellata con successo'; // cpg1.5
$lang_util_php['del_error'] = 'Errore nella cancellazione di %s!'; // cpg1.5
$lang_util_php['affected_records'] = '%s elementi interessati.'; // cpg1.5
$lang_util_php['all_albums'] = 'Tutti gli album'; // cpg1.5
$lang_util_php['update_result'] = 'Risultati dell\'aggiornamento'; // cpg1.5
$lang_util_php['incorrect_filesize'] = 'La dimensione totale del file non &egrave; corretta'; // cpg1.5
$lang_util_php['database'] = 'Database: '; // cpg1.5
$lang_util_php['bytes'] = ' bytes'; // cpg1.5
$lang_util_php['actual'] = 'Attuale: '; // cpg1.5
$lang_util_php['updated'] = 'Aggiornato'; // cpg1.5
$lang_util_php['filesize_error'] = 'Non &egrave; stato possibile recuperare la dimensione del file (pu&ograve; essere un file non valida), verr&agrave; saltato....'; // cpg1.5
$lang_util_php['skipped'] = 'Saltati'; // cpg1.5
$lang_util_php['incorrect_dimension'] = 'Le dimensioni non sono corrette'; // cpg1.5
$lang_util_php['dimension_error'] = 'Non &egrave; stato possibile recuperare informazioni sulle dimensioni, verr&agrave; saltato....'; // cpg1.5
$lang_util_php['cannot_fix'] = 'Non &egrave; possibile correggere'; // cpg1.5
$lang_util_php['fullpic_error'] = 'Il file %s non esiste!'; // cpg1.5
$lang_util_php['no_prob_detect'] = 'Nessun problema riscontrato'; // cpg1.5
$lang_util_php['no_prob_found'] = 'Non sono stati trovati problemi.'; // cpg1.5
$lang_util_php['keyword_convert'] = 'Conversione separatore parole chiave'; // cpg1.5
$lang_util_php['keyword_from_to'] = 'Converti il separatore delle parole chiave da %s a %s'; // cpg1.5
$lang_util_php['keyword_set'] = 'Imposta sul nuovo valore il separatore delle parole chiave della galleria'; // cpg1.5
$lang_util_php['keyword_replace_before'] = 'Prima della conversione, sostituisci %s con %s'; // cpg1.5
$lang_util_php['keyword_replace_after'] = 'Dopo la conversione, sostituisci %s con %s'; // cpg1.5
$lang_util_php['keyword_replace_values'] = array('_'=>'trattino basso', '-'=>'trattino', '~'=>'tilde'); // cpg1.5
$lang_util_php['keyword_explanation'] = 'Convertir&agrave; il separatore delle parole chiave di tutti i tuoi file da un valore ad un altro. Leggi la documentazione di aiuto per i dettagli.'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File versioncheck.php
// ------------------------------------------------------------------------- //
if (defined('VERSIONCHECK_PHP')) {
$lang_versioncheck_php['title'] = 'Controllo versione';
$lang_versioncheck_php['versioncheck_output'] = 'Risultato del controllo versione';
$lang_versioncheck_php['file'] = 'file';
$lang_versioncheck_php['folder'] = 'cartella';
$lang_versioncheck_php['outdated'] = 'pi&ugrave; vecchi di %s';
$lang_versioncheck_php['newer'] = 'pi&ugrave; recenti di %s';
$lang_versioncheck_php['modified'] = 'modificato';
$lang_versioncheck_php['not_modified'] = 'non modificato'; // cpg1.5
$lang_versioncheck_php['needs_change'] = 'deve essere cambiato';
$lang_versioncheck_php['review_permissions'] = 'Verifica permessi';
$lang_versioncheck_php['inaccessible'] = 'Il file &egrave; inaccessibile';
$lang_versioncheck_php['review_version'] = 'Il tuo file non &egrave; aggiornato';
$lang_versioncheck_php['review_dev_version'] = 'Il tuo file &egrave; pi&ugrave; recente di quanto previsto';
$lang_versioncheck_php['review_modified'] = 'Il file pu&ograve; essere corrotto (oppure l\'hai modificato di proposito)';
$lang_versioncheck_php['review_missing'] = '%s mancante o inaccessibile';
$lang_versioncheck_php['existing'] = 'esistente';
$lang_versioncheck_php['review_removed_existing'] = 'Il file deve essere rimosso per ragioni di sicurezza';
$lang_versioncheck_php['counter'] = 'Contatore';
$lang_versioncheck_php['type'] = 'Tipo';
$lang_versioncheck_php['path'] = 'Percorso';
$lang_versioncheck_php['missing'] = 'Mancante';
$lang_versioncheck_php['permissions'] = 'Permessi';
$lang_versioncheck_php['version'] = 'Versione';
$lang_versioncheck_php['revision'] = 'Revisione';
$lang_versioncheck_php['modified'] = 'Modificato';
$lang_versioncheck_php['comment'] = 'Commento';
$lang_versioncheck_php['help'] = 'Aiuto';
$lang_versioncheck_php['repository_link'] = 'Collegamento al deposito';
$lang_versioncheck_php['browse_corresponding_page_subversion'] = 'Sfoglia la pagina corrispondente a questo file nel deposito della sottoversione del progetto';
$lang_versioncheck_php['mandatory'] = 'indispensabile';
$lang_versioncheck_php['mandatory_missing'] = 'Un file indispensabile &egrave; mancante'; // cpg1.5
$lang_versioncheck_php['optional'] = 'opzionale';
$lang_versioncheck_php['removed'] = 'rimosso'; // cpg1.5
$lang_versioncheck_php['options'] = 'Opzioni';
$lang_versioncheck_php['display_output'] = 'Mostra risultato';
$lang_versioncheck_php['on_screen'] = 'Schermo intero';
$lang_versioncheck_php['text_only'] = 'Solo testo';
$lang_versioncheck_php['errors_only'] = 'Mostra solo potenziali errori';
$lang_versioncheck_php['hide_images'] = 'Nascondi immagini'; // cpg1.5
$lang_versioncheck_php['no_modification_check'] = 'Non controllare le immagini modificate'; // cpg1.5
$lang_versioncheck_php['do_not_connect_to_online_repository'] = 'Non connetterti al deposito on-line';
$lang_versioncheck_php['online_repository_explain'] = 'raccomandato solo se la connessione fallisce';
$lang_versioncheck_php['submit'] = 'invia / ricarica';
$lang_versioncheck_php['select_all'] = 'Seleziona tutto'; // js-alert
$lang_versioncheck_php['files_folder_processed'] = 'Visualizzazione in corso di %s elementi su %s cartelle/file elaborati con %s potenziali problemi';
$lang_versioncheck_php['read'] = 'Leggi'; // cpg1.5
$lang_versioncheck_php['write'] = 'Scrivi'; // cpg1.5
$lang_versioncheck_php['warning'] = 'Attenzione'; // cpg1.5
$lang_versioncheck_php['not_applicable'] = 'n/a'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File view_log.php
// ------------------------------------------------------------------------- //
if (defined('VIEWLOG_PHP')) {
$lang_viewlog_php['delete_all'] = 'Cancella tutti i rapporti';
$lang_viewlog_php['delete_this'] = 'Cancella questo rapporto';
$lang_viewlog_php['view_logs'] = 'Visualizza rapporti';
$lang_viewlog_php['no_logs'] = 'Non sono stati creati rapporti.';
$lang_viewlog_php['last_updated'] = 'ultimo aggiornamento'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File xp_publish.php
// ------------------------------------------------------------------------- //
if (defined('XP_PUBLISH_PHP')) {
$lang_xp_publish_php['title'] = 'Pubblicazione sul web guidata di XP';
$lang_xp_publish_php['client_header'] = 'Programma di XP per la pubblicazione sul web guidata'; // cpg1.5
$lang_xp_publish_php['requirements'] = 'Requisiti'; // cpg1.5
$lang_xp_publish_php['windows_xp'] = 'Windows XP / Vista'; // cpg1.5
$lang_xp_publish_php['no_windows_xp'] = 'Sembra che tu abbia un sistema operativo diverso e non supportato'; // cpg1.5
$lang_xp_publish_php['no_os_detect'] = 'Non &egrave; stato possibile riconoscere il tuo sistema operativo'; // cpg1.5
$lang_xp_publish_php['requirement_http_upload'] = 'Una installazione funzionante di Coppermine nella quale il caricamento via http funzioni correttamente'; // cpg1.5
$lang_xp_publish_php['requirement_ie'] = 'Microsoft Internet Explorer'; // cpg1.5
$lang_xp_publish_php['requirement_permissions'] = 'L\'amministratore della galleria deve averti concesso il premesso di caricare'; // cpg1.5
$lang_xp_publish_php['requirement_login'] = 'Devi aver effettuato il login per caricare'; // cpg1.5
$lang_xp_publish_php['no_ie'] = 'Sembra che tu stia usando un browser diverso e non supportato'; // cpg1.5
$lang_xp_publish_php['no_browser_detect'] = 'Non &egrave; stato possibile riconoscere il tuo browser'; // cpg1.5
$lang_xp_publish_php['no_gallery_name'] = 'Devi specificare un nome per la galleria nella configurazione'; // cpg1.5
$lang_xp_publish_php['no_gallery_description'] = 'Devi specificare una descrizione per la galleria nella configurazione'; // cpg1.5
$lang_xp_publish_php['howto_install'] = 'Come installare'; // cpg1.5
$lang_xp_publish_php['install_right_click'] = 'Clicca col tasto destro su %squesto collegamento%s e seleziona &quot;salva destinazione con nome...&quot;'; // cpg1.5 // translator note: don't replace the %s - that placeholder token needs to go untranslated
$lang_xp_publish_php['install_save'] = 'Salva il file sul tuo computer. Quando salvi il file, accertati che il nome del file proposto sia<tt>cpg_###.reg</tt> (### rappresenta un formato ora numerico). Se necessario, imposta tu questa sintassi (lasciando i numeri)'; // cpg1.5
$lang_xp_publish_php['install_execute'] = 'Dopo che hai finito di scaricare, esegui il file facendoci doppio clic per registrare il tuo server con la pubblicazione guidata sul web'; // cpg1.5
$lang_xp_publish_php['usage'] = 'Utilizzo'; // cpg1.5
$lang_xp_publish_php['select_files'] = 'In Esplora risorse, seleziona i file che vuoi caricare'; // cpg1.5
$lang_xp_publish_php['display_tasks'] = 'Assicurati che le cartelle non siano visualizzate nella barra sinistra di Esplora risorse'; // cpg1.5
$lang_xp_publish_php['publish_on_the_web'] = 'premi su&quot;Pubblica xxx sul web&quot; nel pannello di sinistra'; // cpg1.5
$lang_xp_publish_php['confirm_selection'] = 'Conferma la tua selezione dei file'; // cpg1.5
$lang_xp_publish_php['select_service'] = 'Nella lista dei servizi che compaiono, seleziona quello per la tua galleria fotografica (ha il nome della tua galleria)'; // cpg1.5
$lang_xp_publish_php['enter_login'] = 'Inserisci i dati per il login se richiesto'; // cpg1.5
$lang_xp_publish_php['select_album'] = 'Seleziona l\'album di destinazione per le tue immagini o creane uno nuovo'; // cpg1.5
$lang_xp_publish_php['next'] = 'Premi su &quot;avanti&quot;'; // cpg1.5
$lang_xp_publish_php['upload_starts'] = 'Il caricamento delle tue foto dovrebbe partire'; // cpg1.5
$lang_xp_publish_php['upload_completed'] = 'Quando &egrave; completato, controlla la tua galleria per vedere se le immagini sono state aggiunte correttamente'; // cpg1.5
$lang_xp_publish_php['welcome'] = 'Benvenuto <strong>%s</strong>,';
$lang_xp_publish_php['need_login'] = 'Devi effettuare il login alla galleria usando Internet Explorer prima di poter utilizzare quesa procedura guidata.<p/><p>Quando lo esegui, non dimenticare di selezionare l\'opzione &quot;Ricordami&quot; se &egrave; presente.';
$lang_xp_publish_php['no_alb'] = 'Spiacente, ma non ci sono album dove ti &egrave; permesso caricare immagini con questa procedura guidata.';
$lang_xp_publish_php['upload'] = 'Carica le tue immagini dentro un album esistente';
$lang_xp_publish_php['create_new'] = 'Crea un nuovo album per le tue immagini';
$lang_xp_publish_php['category'] = 'Categoria';
$lang_xp_publish_php['new_alb_created'] = 'Il tuo nuovo album &quot;<strong>%s</strong>&quot; &egrave; stato creato.';
$lang_xp_publish_php['continue'] = 'Premi &quot;Avanti&quot; per iniziare a caricare le tue immagini';
$lang_xp_publish_php['link'] = '';
}

// ------------------------------------------------------------------------- //
// Core plugins
// ------------------------------------------------------------------------- //
if (defined('CORE_PLUGIN')) {
$lang_plugin_php['usergal_alphatabs_config_name'] = 'Schede alfabetiche galleria utente'; // cpg1.5
$lang_plugin_php['usergal_alphatabs_config_description'] = 'Cosa fa: mostra schede dalla A alla Z in testa alle gallerie utente, che i visitatori possono cliccare per andare direttamente a una pagina che mostra tutte le gallerie degli utenti il cui nome utente inizia con quella lettera. Plugin consigliato solo se si ha un numero veramente grande di gallerie utente.'; // cpg1.5
$lang_plugin_php['usergal_alphatabs_jump_by_username'] = 'Naviga per nome utente'; // cpg1.5
$lang_plugin_php['sample_config_name'] = 'Plugin di esempio'; // cpg1.5
$lang_plugin_php['sample_config_description'] = 'Questo &egrave; un plugin di esempio. Non fa niente di particolarmente utile - &egrave; pensato solo per dimostrare cosa possono fare i plugin e come scriverli. Se abilitato, mostrer&agrave; un testo di esempio in rosso.'; // cpg1.5
$lang_plugin_php['sample_plugin_documentation'] = 'Documentazione Plugin'; // cpg1.5
$lang_plugin_php['sample_plugin_support'] = 'Assistenza Plugin'; // cpg1.5
$lang_plugin_php['sample_install_explain'] = 'Inserisci il nome utente (\'foo\') e la password (\'bar\') per installare'; // cpg1.5
$lang_plugin_php['sample_install_username'] = 'Nome utente'; // cpg1.5
$lang_plugin_php['sample_install_password'] = 'Password'; // cpg1.5
$lang_plugin_php['sample_output'] = 'Questi sono dati esemplificativi restituiti dal plugin di esempio'; // cpg1.5
$lang_plugin_php['opensearch_config_name'] = 'OpenSearch'; // cpg1.5
$lang_plugin_php['opensearch_config_description'] = 'Un\'implementazione di <a href="http://www.opensearch.org/" rel="external" class="external">OpenSearch</a> per Coppermine.<br />Se abilitato, i visitatori possono aggiungere la tua galleria alla barra di ricerca dei loro browser.'; // cpg1.5
$lang_plugin_php['opensearch_search'] = 'Cerca %s'; // cpg1.5
$lang_plugin_php['opensearch_extra'] = 'Puoi voler aggiungere altro testo al tuo sito per spiegare cosa fa questo plugin'; // cpg1.5
$lang_plugin_php['opensearch_failed_to_open_file'] = 'Impossibile aprire il file %s - controlla i permessi'; // cpg1.5
$lang_plugin_php['opensearch_failed_to_write_file'] = 'Impossibile scrivere nel file %s - controlla i permessi'; // cpg1.5
$lang_plugin_php['opensearch_form_header'] = 'Inserisci i dettagli da usare per il file della descrizione'; // cpg1.5
$lang_plugin_php['opensearch_gallery_url'] = 'URL della galleria (deve essere corretto)'; // cpg1.5
$lang_plugin_php['opensearch_display_name'] = 'Nome come visualizzato nel browser'; // cpg1.5
$lang_plugin_php['opensearch_description'] = 'Descrizione'; // cpg1.5
$lang_plugin_php['opensearch_character_limit'] = 'limite di %s caratteri'; // cpg1.5
$lang_plugin_php['onlinestats_description'] = 'Mostra un blocco in ogni pagina della galleria che visualizza utenti e visitatori attualmente in linea.';
$lang_plugin_php['onlinestats_name'] = 'Chi &egrave; in linea?';
$lang_plugin_php['onlinestats_config_extra'] = 'Per abilitare questo plugin (far s&igrave; che mostri effettivamente il blocco onlinestats), la stringa "onlinestats" (separata da una /) &egrave; stata aggiunta "al contenuto della pagina principale" nella sezione "Visualizzazione elenco album" della <a href="admin.php">Configurazione di Coppermine</a>. Le impostazioni adesso dovrebbero somigliare a "breadcrumb/catlist/alblist/onlinestats" o analoghe. Per cambiare la posizione del blocco, sposta la stringa "onlinestats" all\'interno di quel campo della configurazione.';
$lang_plugin_php['onlinestats_config_install'] = 'Il plugin esegue interrogazioni aggiuntive al database ogni volta che viene eseguito, consumando cicli di CPU e utilizzando risorse. Se la tua galleria Coppermine &egrave; lenta o ha molti utenti, non dovresti usarlo.';
$lang_plugin_php['onlinestats_we_have_reg_member'] = 'C\'&egrave; %s utente registrato';
$lang_plugin_php['onlinestats_we_have_reg_members'] = ' Ci sono %s utenti registrati';
$lang_plugin_php['onlinestats_most_recent'] = 'L\'ultimo utente registrato &egrave; %s';
$lang_plugin_php['onlinestats_is'] = 'In totale c\'&egrave; %s visitatore on-line';
$lang_plugin_php['onlinestats_are'] = 'In totale ci sono %s visitatori on-line';
$lang_plugin_php['onlinestats_and'] = 'e';
$lang_plugin_php['onlinestats_reg_member'] = '%s utente registrato';
$lang_plugin_php['onlinestats_reg_members'] = '%s utenti registrati';
$lang_plugin_php['onlinestats_guest'] = '%s visitatore';
$lang_plugin_php['onlinestats_guests'] = '%s visitatori';
$lang_plugin_php['onlinestats_record'] = 'Record di utenti in linea: %s il %s';
$lang_plugin_php['onlinestats_since'] = 'Utenti registrati che sono stati in linea negli ultimi %s minuti: %s';
$lang_plugin_php['onlinestats_config_text'] = 'Per quanto tempo vuoi mantenere gli utenti elencati come in linea prima che vengano considerati usciti?';
$lang_plugin_php['onlinestats_minute'] = 'minuti';
$lang_plugin_php['onlinestats_remove'] = 'Rimuovi la tabella che era stata usata per immagazzinare i dati degli utenti in linea?';
$lang_plugin_php['link_target_name'] = 'Destinazione del collegamento';
$lang_plugin_php['link_target_description'] = 'Modifica il modo con cui vengono aperti i collegamenti esterni: quando questo plugin &egrave; abilitato, tutti i collegamenti che contengono l\'attributo \'rel="external"\' si apriranno in una nuova finestra (anzich&egrave; nella stessa).';
$lang_plugin_php['link_target_extra'] = 'Questo plugin incide soprattutto sul collegamento "Powered by Coppermine" in fondo alle pagine della galleria.';
$lang_plugin_php['link_target_recommendation'] = '&Egrave; consigliato di non usare questo plugin per evitare imposizioni arbitrarie ai tuoi utenti: aprire i collegamenti in una nuova finestra &egrave; un\'imposizione arbitraria.';
}

?>