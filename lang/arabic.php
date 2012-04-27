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
  $HeadURL: https://coppermine.svn.sourceforge.net/svnroot/coppermine/trunk/cpg1.5.x/lang/arabic.php $
  $Revision: 8359 $
**********************************************/

if (!defined('IN_COPPERMINE')) die('Not in Coppermine...');

// info about translators and translated language
$lang_translation_info['lang_name_english'] = 'Arabic';
$lang_translation_info['lang_name_native'] = 'العربية';
$lang_translation_info['lang_country_code'] = 'sa';
$lang_translation_info['trans_name'] = array('Nancy4', 'KoD');
$lang_translation_info['trans_email'] = array('', 'knightofdark@live.com');
$lang_translation_info['trans_website'] = array('http://forum.coppermine-gallery.net/index.php?action=profile;u=64270', 'http://forum.nor-amal.com');
$lang_translation_info['trans_date'] = '2011-09-16';


$lang_charset = 'utf-8';
$lang_text_dir = 'rtl'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Bytes, Kibibytes, Mebibytes, Gibibytes
$lang_byte_units = array('بايت', 'كيلوبايت', 'ميجابايت', 'جيجابايت');
$lang_decimal_separator = array(',', '.'); //cpg1.5 // symbol used to separate thousands from hundreds and rounded number from decimal place

// Day of weeks and months
$lang_day_of_week = array('الأحد', 'الأثنين', 'الثلاثاء', 'الأربعاء', 'الخميس', 'الجمعة', 'السبت');
$lang_month = array('يناير', 'فبراير', 'مارس', 'أبريل', 'مايو', 'يونيو', 'يوليو', 'أغسطس', 'سبتمبر', 'أكتوبر', 'نوفمبر', 'ديسمبر');

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$lang_date['album'] = '%B %d, %Y';
$lang_date['lastcom'] = '%m/%d/%y at %H:%M';
$lang_date['lastup'] = '%B %d, %Y';
$lang_date['register'] = '%B %d, %Y';
$lang_date['lasthit'] = '%B %d, %Y at %I:%M %p';
$lang_date['comment'] = '%B %d, %Y at %I:%M %p';
$lang_date['log'] = '%B %d, %Y at %I:%M %p';
$lang_date['scientific'] = '%Y-%m-%d %H:%M:%S';

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'assrammer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack','penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names['random'] = 'صور متفرقة';
$lang_meta_album_names['lastup'] = 'أحدث الصور';
$lang_meta_album_names['lastalb'] = 'أحدث الألبومات';
$lang_meta_album_names['lastcom'] = 'أحدث التعليقات';
$lang_meta_album_names['topn'] = 'الأعلى مشاهدة';
$lang_meta_album_names['toprated'] = 'الأعلى تقييماً';
$lang_meta_album_names['lasthits'] = 'أحدث المشاهدات';
$lang_meta_album_names['search'] = 'نتائج البحث عن الصور';
$lang_meta_album_names['album_search'] = 'نتائج البحث عن الألبومات';
$lang_meta_album_names['category_search'] = 'نتائج البحث عن الأقسام';
$lang_meta_album_names['favpics'] = 'الصور المفضلة';
$lang_meta_album_names['datebrowse'] = 'عرض بواسطة التاريخ'; //cpg1.5

$lang_errors['access_denied'] = 'ليس لديك صلاحية لعرض هذه الصفحة';
$lang_errors['invalid_form_token'] = 'لم يتم العثور على رمز صحيح.'; //cpg1.5
$lang_errors['perm_denied'] = 'ليس لديك صلاحية لعمل ذلك';
$lang_errors['param_missing'] = 'تم طلب هذا السكربت بدون المتغيرات الكاملة له.';
$lang_errors['non_exist_ap'] = 'الألبوم/الملف المختار غير موجود';
$lang_errors['quota_exceeded'] = 'الحد الأقصى لحجم الملفات قد تم بلوغه'; //cpg1.5
$lang_errors['quota_exceeded_details'] = 'الحد الأقصى المتاح لك رفعه هو [quota]K, ملفاتك الحالية حجمها [space]K, إضافة هذا الملف سيجعلك تتعدى الحد الأقصى'; //cpg1.5
$lang_errors['gd_file_type_err'] = 'عند استخدام مكتبة GD image امتداد الصور المسموح بها هو فقط JPEG و PNG.';
$lang_errors['invalid_image'] = 'الصور التي رفعتها معطوبة أو لا يمكن لـمكتبة GD التعامل معها';
$lang_errors['resize_failed'] = 'غير قادر على عمل مصغرات أو إعادة تحجيم الصورة.';
$lang_errors['no_img_to_display'] = 'لا يوجد صورة للعرض';
$lang_errors['non_exist_cat'] = 'القسم المختار غير موجود';
$lang_errors['directory_ro'] = 'المجلد \'%s\' ليس قابل للكتابة, الملفات لا يمكن حذفها';
$lang_errors['pic_in_invalid_album'] = 'الملفات في ألبوم غير موجود (%s)!?';
$lang_errors['banned'] = 'لقد تم منعك من إستخدام هذا الموقع';
$lang_errors['offline_title'] = 'مغلق';
$lang_errors['offline_text'] = 'الموقع مغلق مؤقتاً لإجراء صيانة - سنعود سريعاً بإذن الله';
$lang_errors['ecards_empty'] = 'حاليا لا توجد سجلات لبطاقات إلكترونية لعرضها.';
$lang_errors['database_query'] = 'هناك خطأ في معالجة الامر';
$lang_errors['non_exist_comment'] = 'التعليق المختار غير موجود';
$lang_errors['captcha_error'] = 'رمز التأكيد غير صحيح'; // cpg1.5
$lang_errors['login_needed'] = 'تحتاج إلى %sregister%s/%slogin%s لدخول هذه الصفحة'; // cpg1.5
$lang_errors['error'] = 'خطأ'; // cpg1.5
$lang_errors['critical_error'] = 'خطأ فادح'; // cpg1.5
$lang_errors['access_thumbnail_only'] = 'مصرح لك بمشاهدة المصغرات فقط.'; // cpg1.5
$lang_errors['access_intermediate_only'] = 'ليس لديك صلاحية لعرض الصور بالحجم الكامل'; // cpg1.5
$lang_errors['access_none'] = 'ليس لديك صلاحية لعرض أى ملفات'; // cpg1.5
$lang_errors['register_globals_title'] = 'التسجيل العام يعمل!';// cpg1.5
$lang_errors['register_globals_warning'] = 'إعدادات register_globals على مزودك تعمل, وهذا خطر أمني. ينصح وبشدة أن تقوم بإيقافه.'; //cpg1.5

$lang_bbcode_help_title = 'مساعدة BBCode';
$lang_bbcode_help = 'يمكنك اضافة روابط قابلة للنقر وبعض الإضافات للحقل بإستخدام BBCode tags: <li>[b]عريض[/b] =&gt; <strong>عريض</strong></li><li>[i]مائل[/i] =&gt; <i>مائل</i></li><li>[url=http://yoursite.com/]نص الرابط[/url] =&gt; <a href="http://yoursite.com">نص الرابط</a></li><li>[email]user@domain.com[/email] =&gt; <a href="mailto:user@domain.com">ايميلك الإلكتروبي@.com</a></li><li>[color=red]النص[/color] =&gt; <span style="color:red">نص</span></li><li>[img]http://documentation.coppermine-gallery.net/images/browser.png[/img] =&gt; <img src="docs/images/browser.png" border="0" alt="" /></li>';

$lang_common['yes'] = 'نعم'; // cpg1.5
$lang_common['no'] = 'لا'; // cpg1.5
$lang_common['back'] = 'رجوع'; // cpg1.5
$lang_common['continue'] = 'استمرار'; // cpg1.5
$lang_common['information'] = 'معلومات'; // cpg1.5
$lang_common['error'] = 'خطأ'; // cpg1.5
$lang_common['check_uncheck_all'] = 'تحديد/عدم تحديد الكل'; // cpg1.5
$lang_common['confirm'] = 'تأكيد'; // cpg1.5
$lang_common['captcha_help_title'] = 'رمز الحماية (captcha)'; // cpg1.5
$lang_common['captcha_help'] = 'لحماية الموقع من التسجيلات الآلية, يجب عليك كتابة رمز الحماية الظاهر فى الصورة'; // cpg1.5
$lang_common['title'] = 'العنوان'; // cpg1.5
$lang_common['caption'] = 'الوصف'; // cpg1.5
$lang_common['keywords'] = 'الكلمات الإستدلالية(لتسهيل البحث)'; // cpg1.5
$lang_common['keywords_insert1'] = 'الكلمات الإستدلالية (الفصل بـ %s)'; // cpg1.5
$lang_common['keywords_insert2'] = 'إدخال من قائمة'; // cpg1.5
$lang_common['keyword_separator'] = 'فاصل الكلمات الإستدلالية'; //cpg1.5
$lang_common['keyword_separators'] = array(' '=>'مسافة', ','=>'فاصلة', ';'=>'فاصلة نقطية'); // cpg1.5
$lang_common['owner_name'] = 'اسم المالك'; // cpg1.5
$lang_common['filename'] = 'اسم الصورة'; // cpg1.5
$lang_common['filesize'] = 'حجم الملف'; // cpg1.5
$lang_common['album'] = 'ألبوم'; // cpg1.5
$lang_common['file'] = 'صورة'; // cpg1.5
$lang_common['date'] = 'التاريخ'; // cpg1.5
$lang_common['help'] = 'مساعدة'; // cpg1.5
$lang_common['close'] = 'غلق'; // cpg1.5
$lang_common['go'] = 'اذهب'; // cpg1.5
$lang_common['javascript_needed'] = 'هذه الصفحة تتطلب الجافا لعرضها, برجاء تشغيل الجافا من متصفحك'; // cpg1.5
$lang_common['move_up'] = 'الإنتقال لأعلى'; // cpg1.5
$lang_common['move_down'] = 'الإنتقال لأسفل'; // cpg1.5
$lang_common['move_top'] = 'التحريك للمقدمة'; // cpg1.5
$lang_common['move_bottom'] = 'التحريك للنهاية'; // cpg1.5
$lang_common['delete'] = 'حذف'; // cpg1.5
$lang_common['edit'] = 'تعديل'; // cpg1.5
$lang_common['username_if_blank'] = 'غير معرف'; // cpg1.5
$lang_common['albums_no_category'] = 'ألبومات بلا أقسام'; // cpg1.5
$lang_common['personal_albums'] = '* الألبومات الشخصية'; // cpg1.5
$lang_common['select_album'] = 'إختيار ألبوم'; // cpg1.5
$lang_common['ok'] = 'موافق'; // cpg1.5
$lang_common['status'] = 'الحالة'; // cpg1.5
$lang_common['apply_changes'] = 'تطبيق التغييرات'; // cpg1.5
$lang_common['done'] = 'تم'; // cpg1.5
$lang_common['album_properties'] = 'خواص الألبوم'; // cpg1.5
$lang_common['parent_category'] = 'القسم الأب'; // cpg1.5
$lang_common['edit_files'] = 'تعديل الملفات'; // cpg1.5
$lang_common['thumbnail_view'] = 'عرض المصغرات'; // cpg1.5
$lang_common['album_manager'] = 'إدارة الألبوم'; // cpg1.5
$lang_common['more'] = 'المزيد'; // cpg1.5

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu['home_title'] = 'الإنتقال للصفحة الرئيسية';
$lang_main_menu['home_lnk'] = 'الصفحة الرئيسية';
$lang_main_menu['alb_list_title'] = 'الإنتقال لقائمةالألبومات';
$lang_main_menu['alb_list_lnk'] = 'قائمة الألبومات';
$lang_main_menu['my_gal_title'] = 'الإنتقال لمعرض الصور الخاصة بك';
$lang_main_menu['my_gal_lnk'] = 'مكتبتى الخاصة';
$lang_main_menu['my_prof_title'] = 'الإنتقال لملفى الشخصى';
$lang_main_menu['my_prof_lnk'] = 'ملفى الشخصى';
$lang_main_menu['adm_mode_title'] = 'تفعيل عرض الخيارات الإدارية'; // cpg1.5
$lang_main_menu['adm_mode_lnk'] = 'عرض الخيارات الإدارية'; // cpg1.5
$lang_main_menu['usr_mode_title'] = 'تعطيل عرض الخيارات الإارية'; // cpg1.5
$lang_main_menu['usr_mode_lnk'] = 'إخفاء الخيارات الإدارية'; // cpg1.5
$lang_main_menu['upload_pic_title'] = 'تحميل صورة جديد فى أحد الألبومات';
$lang_main_menu['upload_pic_lnk'] = 'رفع صورة';
$lang_main_menu['register_title'] = 'للإشتراك و عمل عضوية خاصة بك';
$lang_main_menu['register_lnk'] = 'عضوية جديدة';
$lang_main_menu['login_title'] = 'تسجيل الدخول للموقع بحسابى الشخصى';
$lang_main_menu['login_lnk'] = 'تسجيل الدخول';
$lang_main_menu['logout_title'] = 'تسجيل الخروج من الموقع';
$lang_main_menu['logout_lnk'] = 'تسجيل الخروج';
$lang_main_menu['lastup_title'] = 'عرض أحدث الصور المضافة';
$lang_main_menu['lastup_lnk'] = 'أحدث الإضافات';
$lang_main_menu['lastcom_title'] = 'عرض أحدث التعليقات على الصور';
$lang_main_menu['lastcom_lnk'] = 'أحدث التعليقات';
$lang_main_menu['topn_title'] = 'عرض أعلى الصور فى مرات المشاهدة';
$lang_main_menu['topn_lnk'] = 'الأعلى مشاهدة';
$lang_main_menu['toprated_title'] = 'عرض أعلى الصور تقييماً';
$lang_main_menu['toprated_lnk'] = 'الأعلى تقييماً';
$lang_main_menu['search_title'] = 'البحث فى معرض الصور';
$lang_main_menu['search_lnk'] = 'بحث';
$lang_main_menu['fav_title'] = 'عرض قائمة صورك المفضلة';
$lang_main_menu['fav_lnk'] = 'صورى المفضلة';
$lang_main_menu['memberlist_title'] = 'عرض قائمة الأعضاء فى معرض الصور';
$lang_main_menu['memberlist_lnk'] = 'قائمة الأعضاء';
$lang_main_menu['browse_by_date_lnk'] = 'بواسطة التاريخ'; // cpg1.5
$lang_main_menu['browse_by_date_title'] = 'عرض الصور بواسطة تاريخ إضافتها'; // cpg1.5
$lang_main_menu['contact_title'] = 'تواصل مع %s'; // cpg1.5
$lang_main_menu['contact_lnk'] = 'مراسلة'; // cpg1.5
$lang_main_menu['sidebar_title'] = 'أضف قائمة جانبية إلى متصفحك'; // cpg1.5
$lang_main_menu['sidebar_lnk'] = 'قائمة جانبية'; // cpg1.5

$lang_gallery_admin_menu['upl_app_title'] = 'الموافقة على الملفات الجديدة';
$lang_gallery_admin_menu['upl_app_lnk'] = 'الموافقة على الملفات';
$lang_gallery_admin_menu['admin_title'] = 'إذهب إلى الإعدادات';
$lang_gallery_admin_menu['admin_lnk'] = 'الإعدادات';
$lang_gallery_admin_menu['albums_title'] = 'إذهب إلى إعدادات الإلبوم';
$lang_gallery_admin_menu['albums_lnk'] = 'الألبومات';
$lang_gallery_admin_menu['categories_title'] = 'إذهب إلى اعدادات القسم';
$lang_gallery_admin_menu['categories_lnk'] = 'الأقسام';
$lang_gallery_admin_menu['users_title'] = 'إذهب إلى إعدادات العضو';
$lang_gallery_admin_menu['users_lnk'] = 'الأعضاء';
$lang_gallery_admin_menu['groups_title'] = 'إذهب إلى إعدادات المجموعة';
$lang_gallery_admin_menu['groups_lnk'] = 'المجموعات';
$lang_gallery_admin_menu['comments_title'] = 'مراجعة جميع التعليقات';
$lang_gallery_admin_menu['comments_lnk'] = 'مراجعة التعليقات';
$lang_gallery_admin_menu['searchnew_title'] = 'إذهب إلى إضافة عملية باتش';
$lang_gallery_admin_menu['searchnew_lnk'] = 'إضافة ملفات باتش';
$lang_gallery_admin_menu['util_title'] = 'إذهب إلى أدوات المدير';
$lang_gallery_admin_menu['util_lnk'] = 'أدوات المدير';
$lang_gallery_admin_menu['key_lnk'] = 'ملف الترجمات';
$lang_gallery_admin_menu['ban_title'] = 'إذهب إلى الأعضاء المحظورين';
$lang_gallery_admin_menu['ban_lnk'] = 'حظر الأعضاء';
$lang_gallery_admin_menu['db_ecard_title'] = 'مراجعة البطاقات الإلكترونية';
$lang_gallery_admin_menu['db_ecard_lnk'] = 'عرض البطاقات الإلكترونية';
$lang_gallery_admin_menu['pictures_title'] = 'رتب صوري';
$lang_gallery_admin_menu['pictures_lnk'] = 'رتب صوري';
$lang_gallery_admin_menu['documentation_lnk'] = 'الوثائق';
$lang_gallery_admin_menu['documentation_title'] = 'Coppermine إرشادات';
$lang_gallery_admin_menu['phpinfo_lnk'] = 'معلومات PHP'; // cpg1.5
$lang_gallery_admin_menu['phpinfo_title'] = 'يحتوي على معلومات تقنية عن السيرفر. ربما تحتاج أن ترفق معلومات من هنا في حالة طلب منك ذلك من قبل الدعم الفني.'; // cpg1.5
$lang_gallery_admin_menu['update_database_lnk'] = 'تحديث قاعدة البيانات'; // cpg1.5
$lang_gallery_admin_menu['update_database_title'] = 'إذا كنت غيرت بعض ملفات النظام, أو قمت بتعديل أو تحديث نسخة النظام , الرجاء التأكد من تشغيل تحديث قاعدة البيانات مرة واحدة. هذا سوف يقوم بعمل الجداول والإعدادات الضرورية في قاعدة بيانات النظام.'; // cpg1.5
$lang_gallery_admin_menu['view_log_files_lnk'] = 'مشاهدة ملفات الأحداث'; // cpg1.5
$lang_gallery_admin_menu['view_log_files_title'] = 'النظام يتسطيع تعقب العديد من أعمال الأعضاء. من هنا تستطيع مشاهدة الاحداث إذا قمت بتفعيل ذلك من خلال إعدادات النظام.'; // cpg1.5
$lang_gallery_admin_menu['check_versions_lnk'] = 'التحقق من النسخة'; // cpg1.5
$lang_gallery_admin_menu['check_versions_title'] = 'تحقق من نسخة الملفات إذا كنت استبدلت جميع الملفات بعد التحديث, أو أن ملفات النظام تم تحديثها بعد إصدار الحزمة.'; // cpg1.5
$lang_gallery_admin_menu['bridgemgr_lnk'] = 'مدير الجسر'; // cpg1.5
$lang_gallery_admin_menu['bridgemgr_title'] = 'تفعيل \ تعطيل التكامل (نظام الجسر) للنظام مع التطبيقات الأخرى (مثلا BBS).'; // cpg1.5
$lang_gallery_admin_menu['pluginmgr_lnk'] = 'مدير الإضافات Plugins'; // cpg1.5
$lang_gallery_admin_menu['pluginmgr_title'] = 'مدير الإضافات Plugins'; // cpg1.5
$lang_gallery_admin_menu['overall_stats_lnk'] = 'الإحصاءات العامة'; // cpg1.5
$lang_gallery_admin_menu['overall_stats_title'] = 'عرض الإحصاءات العامة للنقرات من قبل المتصفح ونظام التشغيل (إذا كان الخيار المقابل في الإعدادات مفعل).'; // cpg1.5
$lang_gallery_admin_menu['keywordmgr_lnk'] = 'مدير الترجمات'; // cpg1.5
$lang_gallery_admin_menu['keywordmgr_title'] = 'مدير الترجمات (اذا كان الخيار المقابل في الإعدادات مفعل).'; // cpg1.5
$lang_gallery_admin_menu['exifmgr_lnk'] = 'EXIF مدير'; // cpg1.5
$lang_gallery_admin_menu['exifmgr_title'] = 'إدارة عرض EXIF (اذا كان الخيار المقابل في الإعدادات مفعل).'; // cpg1.5
$lang_gallery_admin_menu['shownews_lnk'] = 'عرض الأخبار'; // cpg1.5
$lang_gallery_admin_menu['shownews_title'] = 'عرض الأخبار من coppermine-gallery.net'; // cpg1.5

$lang_user_admin_menu['albmgr_title'] = 'إنشاء وترتيب الألبومات';
$lang_user_admin_menu['albmgr_lnk'] = 'إنشاء \ ترتيب الألبومات';
$lang_user_admin_menu['modifyalb_title'] = 'إذهب إلى تعديل ألبوماتي';
$lang_user_admin_menu['modifyalb_lnk'] = 'عدل ألبوماتي';
$lang_user_admin_menu['my_prof_title'] = 'إذهب إلى ملفي الشخصي';
$lang_user_admin_menu['my_prof_lnk'] = 'ملفي الشخصي';

$lang_cat_list['category'] = 'قسم';
$lang_cat_list['albums'] = 'ألبومات';
$lang_cat_list['pictures'] = 'صور';

$lang_album_list['album_on_page'] = '%d البوم فى %d صفحات';

$lang_thumb_view['date'] = 'تاريخ';
//Sort by filename and title
$lang_thumb_view['name'] = 'اسم الصورة';
$lang_thumb_view['sort_da'] = 'عرض بواسطة التاريخ تصاعدياً';
$lang_thumb_view['sort_dd'] = 'عرض بواسطة التاريخ تنازلياً';
$lang_thumb_view['sort_na'] = 'عرض بواسطة الإسم تصاعدياً';
$lang_thumb_view['sort_nd'] = 'عرض بواسطة الإسم تنازلياً';
$lang_thumb_view['sort_ta'] = 'عرض بواسطة العنوان تصاعدياً';
$lang_thumb_view['sort_td'] = 'عرض بواسطة العنوان تنازلياً';
$lang_thumb_view['position'] = 'المكان';
$lang_thumb_view['sort_pa'] = 'عرض بواسطة المكان تصاعدياً';
$lang_thumb_view['sort_pd'] = 'عرض بواسطة المكان تنازلياً';
$lang_thumb_view['download_zip'] = 'التنزيل كملف مضغوط';
$lang_thumb_view['pic_on_page'] = '%d صورة فى %d صفحات';
$lang_thumb_view['user_on_page'] = '%d عضو فى %d صفحة';
$lang_thumb_view['enter_alb_pass'] = 'أدخل كلمة سر الألبوم';
$lang_thumb_view['invalid_pass'] = 'كلمة سر غير صحيحة';
$lang_thumb_view['pass'] = 'كلمة السر';
$lang_thumb_view['submit'] = 'إرسال';
$lang_thumb_view['zipdownload_copyright'] = 'برجاء إحترام حقوق ملكية الملفات التى تحملها و لا تغير أى من هيئتها'; // cpg1.5
$lang_thumb_view['zipdownload_username'] = 'هذا الملف المضغوط يحتوى على الملفات المفضلة للعضو %s'; // cpg1.5

$lang_img_nav_bar['thumb_title'] = 'العودة لصفحة المصغرات';
$lang_img_nav_bar['pic_info_title'] = 'عرض/إخفاء معلومات الصورة';
$lang_img_nav_bar['slideshow_title'] = 'عرض متتالى';
$lang_img_nav_bar['ecard_title'] = 'أرسل هذا الصورة لصديق';
$lang_img_nav_bar['ecard_disabled'] = 'خاصية الإرسال معطلة';
$lang_img_nav_bar['ecard_disabled_msg'] = 'ليس لديك صلاحية إرسال الملفات'; // js-alert
$lang_img_nav_bar['prev_title'] = 'عرض الصورة السابق';
$lang_img_nav_bar['next_title'] = 'عرض الصورة التالى';
$lang_img_nav_bar['pic_pos'] = 'FILE %s/%s';
$lang_img_nav_bar['report_title'] = 'التبليغ عن هذا الملف لإدارة الموقع';
$lang_img_nav_bar['go_album_end'] = 'التقديم للنهاية';
$lang_img_nav_bar['go_album_start'] = 'العودة للبداية';

$lang_rate_pic['rate_this_pic'] = 'قيم هذا الصورة ';
$lang_rate_pic['no_votes'] = 'لا يوجد اى تقييم بعد';
$lang_rate_pic['rating'] = '(التقييم الحالى : %s / %s طبقاً لـ %s صوت)';
$lang_rate_pic['rubbish'] = 'سئ';
$lang_rate_pic['poor'] = 'متواضع المستوى';
$lang_rate_pic['fair'] = 'عادى';
$lang_rate_pic['good'] = 'جيد';
$lang_rate_pic['excellent'] = 'ممتاز';
$lang_rate_pic['great'] = 'أكثر من رائع';
$lang_rate_pic['js_warning'] = 'ليمكنك التقييم يجب تفعيل الجافا سكريبت فى متصفحك'; // cpg1.5
$lang_rate_pic['already_voted'] = 'لقد قمت بتقييم هذا الصورة بالفعل'; // cpg1.5
$lang_rate_pic['forbidden'] = 'لا يمكنك تقييم صورك الشخصية'; // cpg1.5
$lang_rate_pic['rollover_to_rate'] = 'مرر لتقييم الصورة'; // cpg1.5

// ------------------------------------------------------------------------- //
// File include/functions.inc.php
// ------------------------------------------------------------------------- //

$lang_cpg_die['file'] = 'صورة: ';
$lang_cpg_die['line'] = 'سطر: ';

$lang_display_thumbnails['dimensions'] = 'الأبعاد=';
$lang_display_thumbnails['date_added'] = 'تاريخ الإضافة=';

$lang_get_pic_data['n_comments'] = '%s تعليق';
$lang_get_pic_data['n_views'] = '%s زيارة';
$lang_get_pic_data['n_votes'] = '(%s تقييم)';

$lang_cpg_debug_output['debug_info'] = 'معلومات المصحح';
$lang_cpg_debug_output['debug_output'] = 'مخرجات المصحح'; // cpg1.5
$lang_cpg_debug_output['select_all'] = 'تحديد الكل';
$lang_cpg_debug_output['copy_and_paste_instructions'] = 'اذا كنت قمت بطلب مساعدة من الدعم الفني لـ Coppermine , قم بنسخ ولصق مخرج المصحح هذا في ردك في حالة طلب منك ذلك, أيضا قم بإضافة رسائل الخطأ (في حالة وجودها). فقط قم بوضع debug_output (مخرج المصحح) في صفحة الدعم الفني في حالة طلب منك الداعم ذلك أكيدا! تأكد من استبدال كلمات المرور بـ*** قبل اضافة الرد.'; // cpg1.5
$lang_cpg_debug_output['debug_output_explain'] = 'ملاحظة: هذا للمعلومية فقط ولا يعني أن هناك خطأ في المعرض.'; // cpg1.5
$lang_cpg_debug_output['phpinfo'] = 'عرض معلومات PHP';
$lang_cpg_debug_output['notices'] = 'ملاحظات';
$lang_cpg_debug_output['notices_help_admin'] = 'الملاحظات تظهر في هذه الصفحة لأنك (كمدير للمعرض) قمت بتفعيل هذه الخاصية من الإعدادات عامدا. هذا لا يعني بالضرورة أن هناك خطأ في المعرض. في الحقيقة هذه خاصية للمطورين الماهرين في البرمجة لتعقب الأخطاء. إذا كان عرض الملاحظات يضايقك و\أو لا كنت تملك فكرة عن هذه الملاحظات قم بإيقاف هذه الخاصية من الإعدادات.'; // cpg1.5
$lang_cpg_debug_output['notices_help_non_admin'] = 'الملاحظات المعروضة هنا قد قام المدير عامدا بتفعيلها. وهذا لا يعني أن هناك خطأ من زاويتك. يمكنك بأمان أن تتجاهل الملاحظات المعروضة هنا.'; // cpg1.5
$lang_cpg_debug_output['show_hide'] = 'إظهار \ إخفاء'; // cpg1.5

$lang_language_selection['reset_language'] = 'اللغة الأساسية';
$lang_language_selection['choose_language'] = 'إختر لغتك';

$lang_theme_selection['reset_theme'] = 'الإستايل الأساسى';
$lang_theme_selection['choose_theme'] = 'إختر ستايلك';

$lang_version_alert['version_alert'] = 'نسخة غير مدعومة!';
$lang_version_alert['no_stable_version'] = 'أنت تشغل نظام Coppermine %s (%s) الذي يعنى بالأعضاء المحترفين -هذه النسخة تأتي بلا دعم أو أي ضمانات. استخدمها تحت مخاطرتك الخاصة أو قم بإنزال النسخة إلى أحدث نسخة ثابتة اذا كنت تحتاج للدعم الفني!';
$lang_version_alert['gallery_offline'] = 'المعرض حاليا مغلق وسوف يعرض للمدير فقط. لا تنسى فتحه بعد الإنتهاء من الصيانة.';
$lang_version_alert['coppermine_news'] = 'الأخبار من coppermine-gallery.net'; // cpg1.5
$lang_version_alert['no_iframe'] = 'متصفحك لا يعرض الإطارات المضمنة'; // cpg1.5
$lang_version_alert['hide'] = 'إخفاء'; // cpg1.5

$lang_create_tabs['previous'] = 'السابق'; // cpg1.5
$lang_create_tabs['next'] = 'التالى'; // cpg1.5
$lang_create_tabs['jump_to_page'] = 'الإنتقال للصفحة'; // cpg1.5

$lang_get_remote_file_by_url['no_data_returned'] = 'لا يوجد بيانات مرجعة %s'; // cpg1.5
$lang_get_remote_file_by_url['curl'] = 'CURL'; // cpg1.5
$lang_get_remote_file_by_url['fsockopen'] = 'إتصال socket (FSOCKOPEN)'; // cpg1.5
$lang_get_remote_file_by_url['fopen'] = 'fopen'; // cpg1.5
$lang_get_remote_file_by_url['curl_not_available'] = 'Curl غير موجود على مزودك'; // cpg1.5
$lang_get_remote_file_by_url['error_number'] = 'رقم الخطأ: %s'; // cpg1.5
$lang_get_remote_file_by_url['error_message'] = 'رسالة الخطأ: %s'; // cpg1.5

// ------------------------------------------------------------------------- //
// File include/mailer.inc.php
// ------------------------------------------------------------------------- //
$lang_mailer['provide_address'] = 'يجب تزويدنا بواحد على الاقل ';
$lang_mailer['mailer_not_supported'] = ' المراسل غير مدعوم.';
$lang_mailer['execute'] = 'لم يتمكن من تنفيذ: ';
$lang_mailer['instantiate'] = 'لم يتمكن من إعداد خاصية البريد.';
$lang_mailer['authenticate'] = 'خطأ SMTP: لم يتمكن من التحقق.';
$lang_mailer['from_failed'] = 'العناوين التالية فشلت: ';
$lang_mailer['recipients_failed'] = 'خطأ SMTP: التالي ';
$lang_mailer['data_not_accepted'] = 'خطأ SMTP: البيانات لم تقبل.';
$lang_mailer['connect_host'] = 'خطأ SMTP: لم يتمكن من الإتصال بمضيف SMTP.';
$lang_mailer['file_access'] = 'لم يتمكن من الوصول للملف: ';
$lang_mailer['file_open'] = 'خطأ بالملف: لم يتم فتح الملف: ';
$lang_mailer['encoding'] = 'ترميز غير معروف: ';
$lang_mailer['signing'] = 'خطأ بالتسجيل: ';

// ------------------------------------------------------------------------- //
// File include/plugin_api.inc.php
// ------------------------------------------------------------------------- //
$lang_plugin_api['error_install'] = 'لم يتمكن من تنصيب الإضافة plugin \'%s\'';
$lang_plugin_api['error_uninstall'] = 'لم يتمكن من حذف الإضافة plugin \'%s\'';
$lang_plugin_api['error_sleep'] = 'لم يتمكن من إيقاف الإضافة plugin \'%s\''; // cpg1.5

// ------------------------------------------------------------------------- //
// File include/smilies.inc.php
// ------------------------------------------------------------------------- //
if (defined('SMILIES_PHP')) {
$lang_smilies_inc_php['Exclamation'] = 'تعجب';
$lang_smilies_inc_php['Question'] = 'سؤال';
$lang_smilies_inc_php['Very Happy'] = 'سعيد جدا';
$lang_smilies_inc_php['Smile'] = 'مبتسم';
$lang_smilies_inc_php['Sad'] = 'حزين';
$lang_smilies_inc_php['Surprised'] = 'متفاجئ';
$lang_smilies_inc_php['Shocked'] = 'مصعوق';
$lang_smilies_inc_php['Confused'] = 'محتار';
$lang_smilies_inc_php['Cool'] = 'حركات';
$lang_smilies_inc_php['Laughing'] = 'يضحك';
$lang_smilies_inc_php['Mad'] = 'غاضب';
$lang_smilies_inc_php['Razz'] = 'Razz';
$lang_smilies_inc_php['Embarrassed'] = 'خجول'; // cpg1.5
$lang_smilies_inc_php['Crying or Very sad'] = 'يبكي أو حزين جدا';
$lang_smilies_inc_php['Evil or Very Mad'] = 'شرير أو غاضب جدا';
$lang_smilies_inc_php['Twisted Evil'] = 'شر محض';
$lang_smilies_inc_php['Rolling Eyes'] = 'عيون تدور';
$lang_smilies_inc_php['Wink'] = 'غمزة';
$lang_smilies_inc_php['Idea'] = 'فكرة';
$lang_smilies_inc_php['Arrow'] = 'سهم';
$lang_smilies_inc_php['Neutral'] = 'طبيعي';
$lang_smilies_inc_php['Mr. Green'] = 'سيد أخضر';
};

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //
if (defined('ALBMGR_PHP')) {
$lang_albmgr_php['title'] = 'إدارة الألبوم'; // cpg1.5
$lang_albmgr_php['alb_need_name'] = 'يجب إدخال إسم للألبوم'; // js-alert
$lang_albmgr_php['confirm_modifs'] = 'هل تود تأكيد التعديلات المطلوبة'; // js-alert
$lang_albmgr_php['no_change'] = 'لم تقم بأى تعديل'; // js-alert
$lang_albmgr_php['new_album'] = 'ألبوم جديد';
$lang_albmgr_php['delete_album'] = 'حذف ألبوم'; // cpg1.5
$lang_albmgr_php['confirm_delete1'] = 'تأكيد حذف هذا الألبوم؟'; // js-alert
$lang_albmgr_php['confirm_delete2'] = 'كل الصور و التعليقات سوف يتم حذفها نهائياً'; // js-alert
$lang_albmgr_php['select_first'] = 'قم بإختيار ألبوم أولاً'; // js-alert
$lang_albmgr_php['my_gallery'] = '* معرضى الشخصى *';
$lang_albmgr_php['no_category'] = '* بدون قسم *';
$lang_albmgr_php['select_category'] = 'إختر قسم';
$lang_albmgr_php['category_change'] = 'لو قمت بتغيير القسم, كل تغييراتك سوف تضيع دون أن يتم حفظها'; // cpg1.5
$lang_albmgr_php['page_change'] = 'كل تغييراتك ستضيع بدون حفظ إذا اتبعت هذا الرابط'; // cpg1.5
$lang_albmgr_php['cancel'] = 'إلغاء'; // cpg1.5
$lang_albmgr_php['submit_reminder'] = 'كل التغييرات لن يتم حفظها إلا بالضغط على &quot;حفظ التغييرات&quot;.'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) {
$lang_banning_php['title'] = 'حظر الأعضاء';
$lang_banning_php['user_name'] = 'اسم المستخدم';
$lang_banning_php['user_account'] = 'حساب المستخدم';
$lang_banning_php['email_address'] = 'البريد الإلكتروني'; // cpg1.5
$lang_banning_php['ip_address'] = 'عنوان IP';
$lang_banning_php['expires'] = 'الإنتهاء'; // cpg1.5
$lang_banning_php['expiry_date'] = 'تاريخ الإنتهاء'; // cpg1.5
$lang_banning_php['expired'] = 'منتهي'; // cpg1.5
$lang_banning_php['edit_ban'] = 'حفظ التغيرات';
$lang_banning_php['add_new'] = 'إضافة حظر جديد';
$lang_banning_php['add_ban'] = 'إضافة';
$lang_banning_php['error_user'] = 'لم يتم العثور على العضو';
$lang_banning_php['error_specify'] = 'يجب تحديد اسم مستخدم أو عنوان IP';
$lang_banning_php['error_ban_id'] = 'رقم حظر خاطئ!';
$lang_banning_php['error_admin_ban'] = 'لا يمكنك حظر نفسك!';
$lang_banning_php['error_server_ban'] = 'كنت على وشك حظر مزودك الخاص? كح كح ...لا يمكنك فعل ذلك';
$lang_banning_php['skipping'] = 'تخطي ذلك الأمر'; // cpg1.5
$lang_banning_php['lookup_ip'] = 'بحث عنوان IP';
$lang_banning_php['select_date'] = 'إختيار تاريخ';
$lang_banning_php['delete_comments'] = 'حذف التعليق'; // cpg1.5
$lang_banning_php['current'] = 'الحالي'; // cpg1.5
$lang_banning_php['all'] = 'جميع'; // cpg1.5
$lang_banning_php['none'] = 'لا شيء'; // cpg1.5
$lang_banning_php['view'] = 'عرض'; // cpg1.5
$lang_banning_php['ban_id'] = 'رقم الحظر'; // cpg1.5
$lang_banning_php['existing_bans'] = 'حظر موجود'; // cpg1.5
$lang_banning_php['no_banning_when_bridged'] = 'أنت حاليا تشغل معرضك مع برنامج آخر. استخدم نظام حضر ذلك التطبيق بدلا من استخدام نظام coppermine. بالكاد يتم تطبيق ميكانيكية الحظر عندما يكون coppermine متكامل مع تطبيق آخر.'; // cpg1.5
$lang_banning_php['records_on_page'] = '%d سجل على %d صفحة(صفحات)'; // cpg1.5
$lang_banning_php['ascending'] = 'تصاعدي'; // cpg1.5
$lang_banning_php['descending'] = 'تنازلي'; // cpg1.5
$lang_banning_php['sort_by'] = 'ترتيب حسب'; // cpg1.5
$lang_banning_php['sorted_by'] = 'مرتب حسب'; // cpg1.5
$lang_banning_php['ban_record_x_updated'] = 'سجل الحظر %s قد حدث'; // cpg1.5
$lang_banning_php['ban_record_x_deleted'] = 'سجل الحظر %s قد حذف'; // cpg1.5
$lang_banning_php['new_ban_record_created'] = 'تم إنشاء حظر سجل حظر جديد'; // cpg1.5
$lang_banning_php['ban_record_x_already_exists'] = 'نظام الحظر لـ %s موجود مسبقا!'; // cpg1.5
$lang_banning_php['comment_deleted'] = '%s التعليق من قبل %s تم حذفه'; // cpg1.5
$lang_banning_php['comments_deleted'] = '%s التعليقات من قبل %s تم حذفها'; // cpg1.5
$lang_banning_php['email_field_invalid'] = 'أدخل بريد الكتروني صالح'; // cpg1.5
$lang_banning_php['ip_address_field_invalid'] = 'أدخل عنوان IP صالح (x.x.x.x)'; // cpg1.5
$lang_banning_php['expiry_field_invalid'] = 'أدخل تاريخ انتهاء صالح (سنة-شهر-يوم)'; // cpg1.5
$lang_banning_php['form_not_submit'] = 'لم يتم ارسال الطلب - هناك أخطاء يجبب تصحيحها أولا!'; // cpg1.5
};

// ------------------------------------------------------------------------- //
// File bridgemgr.php
// ------------------------------------------------------------------------- //
if (defined('BRIDGEMGR_PHP')) {
$lang_bridgemgr_php['title'] = 'معالج الربط';
$lang_bridgemgr_php['back'] = 'السابق';
$lang_bridgemgr_php['next'] = 'التالي';
$lang_bridgemgr_php['start_wizard'] = 'إبدأ معالج الربط';
$lang_bridgemgr_php['finish'] = 'إنهاء';
$lang_bridgemgr_php['no_action_needed'] = 'هذه العملية لا تحتاج إلى أي عمل. فقط اضغط \'التالي\' للمتابعة.';
$lang_bridgemgr_php['reset_to_default'] = '‘عادة القيمة الإفتراضية';
$lang_bridgemgr_php['choose_bbs_app'] = 'إختر تطبيق لربط Coppermine به';
$lang_bridgemgr_php['support_url'] = 'اذهب هنا للدعم الفني لهذا التطبيق';
$lang_bridgemgr_php['settings_path'] = 'المسار(المسارات) مستخدمة من قبل ربط التطبيق';
$lang_bridgemgr_php['full_forum_url'] = 'رابط ربط التطبيق';
$lang_bridgemgr_php['relative_path_of_forum_from_webroot'] = 'الرابط الكامل لربط التطبيق';
$lang_bridgemgr_php['relative_path_to_config_file'] = 'الرابط النسبي لملف الإعدادات config file';
$lang_bridgemgr_php['cookie_prefix'] = 'بادئة الـCookie';
$lang_bridgemgr_php['special_settings'] = 'إعدادات ربط التطبيق الخاصة بالتطبيقات';
$lang_bridgemgr_php['use_post_based_groups'] = 'استخدام مجموعات خاصة لربط التطبيق?';
$lang_bridgemgr_php['use_post_based_groups_yes'] = 'نعم';
$lang_bridgemgr_php['use_post_based_groups_no'] = 'لا';
$lang_bridgemgr_php['error_title'] = 'تحتاج إلى تصحيح هذه الأخطاء قبل أن يمكنك الإستمرار. اذهب للخلف.';
$lang_bridgemgr_php['error_specify_bbs'] = 'يجب عليك إختيار تطبيق لربطه بـ Coppermine حتى يتم تثبيته.';
$lang_bridgemgr_php['finalize'] = 'تفعيل \ تعطيل الربط';
$lang_bridgemgr_php['finalize_explanation'] = 'حتى الآن, تم حفظ الإعدادات في قاعدة البيانات ولكن برنامج تكامل الربط غير مفعل. يمكنك تعطيل أو تفعيل التكامل لاحقا في أي وقت. تأكد من تذكرك لإسم مستخدم المدير وكلمة المرور لنسخه Coppermine,  ربما تحتاجها لاحقا لعمل أي تغييرات. إذا حدث أي شيء خاطئ, اذهب إلى %s وقم بتعطيل الربط هناك, بإستخدام النسخة الغير مربوطة وحساب المدير (بالعادة يتم تعيينها أثناء تنصيب Coppermine ).';
$lang_bridgemgr_php['your_bridge_settings'] = 'إعدادات ربطك';
$lang_bridgemgr_php['title_enable'] = 'تفعيل التكامل \ الربط مع %s';
$lang_bridgemgr_php['bridge_enable_yes'] = 'تفعيل';
$lang_bridgemgr_php['bridge_enable_no'] = 'تعطيل';
$lang_bridgemgr_php['error_must_not_be_empty'] = 'يجب أن لا يكون فارغا';
$lang_bridgemgr_php['error_either_be'] = 'يجب أن يكون %s أو %s';
$lang_bridgemgr_php['error_folder_not_exist'] = '%s غير موجود. صحح القيمة المدخلة لـ %s';
$lang_bridgemgr_php['error_cookie_not_readible'] = 'Coppermine لا يستطيع قراءة اسم cookie %s. صحح القيمة المدخلة لـ %s, أو إذهب إلى شاشة المدير لربط تطبيقك وتأكد بأن مسار الـcookie قابل للقراءة من قبل Coppermine.';
$lang_bridgemgr_php['error_mandatory_field_empty'] = 'لا يمكنك ترك الحقل %s فارغا - قم بتعبئته بالقيمة المناسبة.';
$lang_bridgemgr_php['error_no_trailing_slash'] = 'يجب أن يكون هناك شرطة مائلة في نهاية الحقل %s.';
$lang_bridgemgr_php['error_trailing_slash'] = 'يجب أن يكون هناك شرطة مائلة في الحقل %s.';
$lang_bridgemgr_php['error_prefix_and_table'] = '%s و ';
$lang_bridgemgr_php['recovery_title'] = 'مدير الربط: إستعادة الطوارئ';
$lang_bridgemgr_php['recovery_explanation'] = 'إذا كنت قد أتيت هنا لإدارة ربط معرضك, عليك أولا أن تسجل الدخول كمدير. إذا لم تستطع تسجيل الدخول لأن الربط لا يعمل كما هو متوقع, تستطيع تعطيل الربط مع هذه الصفحة. إدخال اسم المستخدم وكلمة المرور لن يسجل دخولك , سوف فقط يقوم بتعطيل الربط. لمزيد من المعلومات راجع الوثائق.';
$lang_bridgemgr_php['username'] = 'اسم المستخدم';
$lang_bridgemgr_php['password'] = 'كلمة المرور';
$lang_bridgemgr_php['disable_submit'] = 'ارسال';
$lang_bridgemgr_php['recovery_success_title'] = 'تم التحقق بنجاح';
$lang_bridgemgr_php['recovery_success_content'] = 'You have successfully disabled bridging. Your Coppermine install runs now in standalone mode.';
$lang_bridgemgr_php['recovery_success_advice_login'] = 'Log in as admin to edit your bridge settings and/or enable bridging again.';
$lang_bridgemgr_php['goto_login'] = 'إذهب إلى صفحة تسجيل الدخول';
$lang_bridgemgr_php['goto_bridgemgr'] = 'إذهب إلى مدير الربط';
$lang_bridgemgr_php['recovery_failure_title'] = 'التحقق فشل';
$lang_bridgemgr_php['recovery_failure_content'] = 'You supplied the wrong credentials. You will have to supply the admin account data of the standalone version (usually the account you set up during Coppermine install).';
$lang_bridgemgr_php['try_again'] = 'حاول مرة أخرى';
$lang_bridgemgr_php['recovery_wait_title'] = 'وقت الإنتظار لم ينتهي';
$lang_bridgemgr_php['recovery_wait_content'] = 'For security reasons this script does not allow failed logons in short succession, so you will have to wait a bit until you\'re allowed to try to authenticate.';
$lang_bridgemgr_php['wait'] = 'انتظر';
$lang_bridgemgr_php['browse'] = 'استعرض';
}

// ------------------------------------------------------------------------- //
// File calendar.php
// ------------------------------------------------------------------------- //
if (defined('CALENDAR_PHP')) {
$lang_calendar_php['title'] = 'التقويم';
$lang_calendar_php['clear_date'] = 'حذف التاريخ';
$lang_calendar_php['files'] = 'ملفات'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //
if (defined('CATMGR_PHP')) {
$lang_catmgr_php['miss_param'] = 'المعلومات المطلوبة لـ \'%s\' لم يتم تزويدها!';
$lang_catmgr_php['unknown_cat'] = 'القسم المختار غير موجود بقاعدة البيانات';
$lang_catmgr_php['usergal_cat_ro'] = 'معرض العضو لا يمكن حذفه!';
$lang_catmgr_php['manage_cat'] = 'إدارة الأقسام';
$lang_catmgr_php['confirm_delete'] = 'هل أنت متأكد أنك تريد حذف هذا القسم؟'; // js-alert
$lang_catmgr_php['category'] = 'الأقسام'; // cpg1.5
$lang_catmgr_php['operations'] = 'العمليات';
$lang_catmgr_php['move_into'] = 'نقل إلى';
$lang_catmgr_php['update_create'] = 'تحديث \ إنشاء قسم';
$lang_catmgr_php['parent_cat'] = 'القسم الأب';
$lang_catmgr_php['cat_title'] = 'عنوان القسم';
$lang_catmgr_php['cat_thumb'] = 'مصغرات القسم';
$lang_catmgr_php['cat_desc'] = 'وصف القسم';
$lang_catmgr_php['categories_alpha_sort'] = 'ترتيب الأقسام أبجديا (بدل الترتيب المخصص)';
$lang_catmgr_php['save_cfg'] = 'حفظ الإعدادات';
$lang_catmgr_php['no_category'] = '* لا يوجد قسم *'; // cpg1.5
$lang_catmgr_php['group_create_alb'] = 'المجموعات مسموح لها إنشاء معرض في هذا القسم'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File contact.php
// ------------------------------------------------------------------------- //
if (defined('CONTACT_PHP')) {
$lang_contact_php['title'] = 'مراسلة'; // cpg1.5
$lang_contact_php['your_name'] = 'الإسم'; // cpg1.5
$lang_contact_php['your_email'] = 'البريد الإلكترونى'; // cpg1.5
$lang_contact_php['subject'] = 'عنوان الرسالة'; // cpg1.5
$lang_contact_php['your_message'] = 'رسالتك إلينا'; // cpg1.5
$lang_contact_php['name_field_mandatory'] = 'رجاء كتابة اسمك'; // cpg1.5 // js-alert
$lang_contact_php['name_field_invalid'] = 'رجاء كتابةاسمك الحقيقى'; // cpg1.5 // js-alert
$lang_contact_php['email_field_mandatory'] = 'رجاء كتابة بريدك الإلكترونى'; // cpg1.5 // js-alert
$lang_contact_php['email_field_invalid'] = 'رجاء كتابة بريد إلكترونى صحيح'; // cpg1.5 // js-alert
$lang_contact_php['subject_field_mandatory'] = 'رجاء كتابة عنوان يعبر عن محتوى رسالتك'; // cpg1.5 // js-alert
$lang_contact_php['message_field_mandatory'] = 'رجاء كتابة رسالتك'; // cpg1.5 // js-alert
$lang_contact_php['confirmation'] = 'تأكيد'; // cpg1.5
$lang_contact_php['email_headline'] = 'تم إرسال البريد الإلكتروني %s بإستخدام الأسماء من %s من عنوان الـIP %s'; // cpg1.5
$lang_contact_php['registered_user'] = 'عضو مسجل'; // cpg1.5
$lang_contact_php['guest'] = 'زائر'; // cpg1.5
$lang_contact_php['unknown'] = 'غير معرف'; // cpg1.5
$lang_contact_php['user_info'] = ' %s المسمى %s بالبريد الإلكتروني %s قال:'; // cpg1.5
$lang_contact_php['failed_sending_email'] = 'لم ينجح إرسال الرسالة, برجاء المحاولة لاحقاً'; // cpg1.5
$lang_contact_php['email_sent'] = 'لقد تم إرسال رسالتك بنجاح'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //
if (defined('ADMIN_PHP')) {
$lang_admin_php['title'] = 'إعدادات المعرض';
$lang_admin_php['general_settings'] = 'إعدادات عامة'; // cpg1.5
$lang_admin_php['language_charset_settings'] = 'إعدادات اللغة'; // cpg1.5
$lang_admin_php['themes_settings'] = 'إعدادات المظهر'; // cpg1.5
$lang_admin_php['album_list_view'] = 'عرض قائمة الألبومات'; // cpg1.5
$lang_admin_php['thumbnail_view'] = 'عرض المصغرات'; // cpg1.5
$lang_admin_php['image_view'] = 'عرض الصور'; // cpg1.5
$lang_admin_php['comment_settings'] = 'إعدادات العليق'; // cpg1.5
$lang_admin_php['thumbnail_settings'] = 'إعدادات المصغرات'; // cpg1.5
$lang_admin_php['file_settings'] = 'إعدادات الملفات'; // cpg1.5
$lang_admin_php['image_watermarking'] = 'العلامة المائية للصور'; // cpg1.5
$lang_admin_php['registration'] = 'التسجيل'; // cpg1.5
$lang_admin_php['user_settings'] = 'إعدادات العضو'; // cpg1.5
$lang_admin_php['custom_fields_user_profile'] = 'حقول خاصة بملفات الأعضاء (أتركه خاليا إذا كان لا يستخدم). إستخدم الملف الخاص 6 للحقول الطويلة مثل السيرة'; // cpg1.5
$lang_admin_php['custom_fields_image_description'] = 'حقول خاصة لوصف الصور (اتركه خاليا في حالة عدم استخدامه)'; // cpg1.5
$lang_admin_php['cookie_settings'] = 'Cookies إعدادات'; // cpg1.5
$lang_admin_php['email_settings'] = 'إعدادات البريد الإلكتروني (غالب لا يكون هناك داعي للتغيير هنا; إذا كنت غير متأكد دع الحقول فارغة)'; // cpg1.5
$lang_admin_php['logging_stats'] = 'السجل والإحصاءات'; // cpg1.5
$lang_admin_php['maintenance_settings'] = 'إعدادات الصيانة'; // cpg1.5
$lang_admin_php['manage_exif'] = 'إدارة عرض EXIF';
$lang_admin_php['manage_plugins'] = 'إدارة الإضافات plugins';
$lang_admin_php['manage_keyword'] = 'إدارة اللغات';
$lang_admin_php['restore_cfg'] = 'إعادة إفتراضيات المصنع';
$lang_admin_php['restore_cfg_confirm'] = 'هل أنت متأكد من أنك تريد إرجاع كافة الإعدادات؟ لا يمكن عكس العملية!'; // cpg1.5 // js-alert
$lang_admin_php['save_cfg'] = 'حفظ الإعدادات الجديدة';
$lang_admin_php['notes'] = 'ملاحظات';
$lang_admin_php['info'] = 'معلومات';
$lang_admin_php['upd_success'] = 'تم حفظ إعدادات Coppermine';
$lang_admin_php['restore_success'] = 'تمت إستعادة الإعدادات الإفتراضية لـCoppermine';
$lang_admin_php['name_a'] = 'الإسم تصاعديا';
$lang_admin_php['name_d'] = 'الإسم تنازليا';
$lang_admin_php['title_a'] = 'العنوان تصاعديا';
$lang_admin_php['title_d'] = 'العنوان تنازليا';
$lang_admin_php['date_a'] = 'التاريخ تصاعديا';
$lang_admin_php['date_d'] = 'التاريخ تنازليا';
$lang_admin_php['pos_a'] = 'التعقيب تصاعديا';
$lang_admin_php['pos_d'] = 'التعقيب تنازليا';
$lang_admin_php['th_any'] = 'أقصى هيئة';
$lang_admin_php['th_ht'] = 'الإرتفاع';
$lang_admin_php['th_wd'] = 'العرض';
$lang_admin_php['th_ex'] = 'بالضبط'; // cpg1.5
$lang_admin_php['debug_everyone'] = 'الجميع';
$lang_admin_php['debug_admin'] = 'المدير فقط';
$lang_admin_php['no_logs'] = 'مطفأ';
$lang_admin_php['log_normal'] = 'عادي';
$lang_admin_php['log_all'] = 'الكل';
$lang_admin_php['view_logs'] = 'عرض السجلات';
$lang_admin_php['click_expand'] = 'إضغط على اسم القسم للتوسيع';
$lang_admin_php['click_collapse'] = 'إضغط على اسم القسم للتقليص'; // cpg1.5
$lang_admin_php['expand_all'] = 'توسيع الكل';
$lang_admin_php['toggle_all'] = 'عكس الكل'; // cpg1.5
$lang_admin_php['notice1'] = '(*) هذه الإعدادات لا ينبغي تغييرها في حالة وجود ملفات في قاعدة البيانات.';
$lang_admin_php['notice2'] = '(**) عندما تغير هذا الإعداد فقط الملفات المضافة لاحقا سوف تتأثر, لهذا ينصح بعدم تغيير هذا الإعداد في حالة وجود ملفات في المعرض.ولكنك تستطيع تطبيق الإعداد للملفات الموجودة من خلال &quot;<a href="util.php">أدوات المدير</a> (إعادة تحجيم الصورة)&quot; من قائمة المدير.';
$lang_admin_php['notice3'] = '(***) جميع السجلات مكتوبة بالإنجليزية.';
$lang_admin_php['bbs_disabled'] = 'الخاصية معطلة في حالة استخدام التكامل';
$lang_admin_php['auto_resize_everyone'] = 'الجميع';
$lang_admin_php['auto_resize_user'] = 'العضو فقط';
$lang_admin_php['ascending'] = 'تصاعديا';
$lang_admin_php['descending'] = 'تنازليا';
$lang_admin_php['collapse_all'] = 'تقليص الكل'; // cpg1.5
$lang_admin_php['separate_page'] = 'في صفحة مستقلة'; // cpg1.5
$lang_admin_php['inline'] = 'مضمنة'; // cpg1.5
$lang_admin_php['guests_only'] = 'الزوار فقط'; // cpg1.5
$lang_admin_php['wm_bottomright'] = 'أسفل اليمين'; // cpg1.5
$lang_admin_php['wm_bottomleft'] = 'أسفل اليسار'; // cpg1.5
$lang_admin_php['wm_topleft'] = 'أعلى اليسار'; // cpg1.5
$lang_admin_php['wm_topright'] = 'أعلى اليمين'; // cpg1.5
$lang_admin_php['wm_center'] = 'الوسط'; // cpg1.5
$lang_admin_php['wm_both'] = 'كلاهما'; // cpg1.5
$lang_admin_php['wm_original'] = 'أصلي'; // cpg1.5
$lang_admin_php['wm_resized'] = 'معاد تحجيمه'; // cpg1.5
$lang_admin_php['gallery_name'] = 'اسم المعرض'; // cpg1.5
$lang_admin_php['gallery_description'] = 'وصف المعرض'; // cpg1.5
$lang_admin_php['gallery_admin_email'] = 'البريد الإلكتروني لمدير المعرض'; // cpg1.5
$lang_admin_php['ecards_more_pic_target'] = 'رابط مجلد المعرض'; // cpg1.5
$lang_admin_php['ecards_more_pic_target_detail'] = '(مع الخط المائل في النهاية, لا \'index.php\' أو شيء مماثل في النهاية)'; // cpg1.5
$lang_admin_php['home_target'] = 'رابط الصفحة الرئيسية لموقعك'; // cpg1.5
$lang_admin_php['enable_zipdownload'] = 'السماح بتحميل المفضلة كملف مضغوط'; // cpg1.5
$lang_admin_php['enable_zipdownload_no_textfile'] = 'فقط المفضلات'; // cpg1.5
$lang_admin_php['enable_zipdownload_additional_textfile'] = 'المفضلات وملف اقرأني'; // cpg1.5
$lang_admin_php['time_offset'] = 'فرق التوقيت مقارنة بقرينيتش GMT'; // cpg1.5
$lang_admin_php['time_offset_detail'] = '(الوقت حاليا: %s)'; // cpg1.5
$lang_admin_php['enable_help'] = 'تفعيل أيقونات المساعدة'; // cpg1.5
$lang_admin_php['enable_help_description'] = 'المساعدة موجودة جزيئا بالإنجليزية فقط'; // cpg1.5
$lang_admin_php['clickable_keyword_search'] = 'تفعيل اللغات القابلة للنقر في البحث'; // cpg1.5
$lang_admin_php['keyword_separator'] = 'الفاصل بين اللغات'; // cpg1.5
$lang_admin_php['keyword_convert'] = 'تحويل فاصل اللغات'; // cpg1.5
$lang_admin_php['enable_plugins'] = 'تفعيل الإضافات plugins'; // cpg1.5
$lang_admin_php['purge_expired_bans'] = 'تنظيف الحظر المنتهي آليا'; // cpg1.5
$lang_admin_php['browse_batch_add'] = 'تصفح واجهة اضافة الباتش'; // cpg1.5
$lang_admin_php['batch_proc_limit'] = 'عملية التزامن لواجهة اضافة الباتش'; // cpg1.5
$lang_admin_php['display_thumbs_batch_add'] = 'عرض مصغرات في واجهة اضافة الباتش'; // cpg1.5
$lang_admin_php['lang'] = 'اللغة الإفتراضية'; // cpg1.5
$lang_admin_php['language_autodetect'] = 'إكتشاف اللغة آليا'; // cpg1.5
$lang_admin_php['charset'] = 'ترميز الحرف'; // cpg1.5
// 'previous_next_tab'] = 'Display previous/next on tabbed pages'; // cpg1.5
$lang_admin_php['theme'] = 'Theme'; // cpg1.5
$lang_admin_php['custom_lnk_name'] = 'عنوان مخصص لرابط القائمة'; // cpg1.5
$lang_admin_php['custom_lnk_url'] = 'رابط مخصص للقائمة'; // cpg1.5
$lang_admin_php['enable_menu_icons'] = 'تفعيل أيقونات القائمة'; // cpg1.5
$lang_admin_php['show_bbcode_help'] = 'عرص مساعدة BBCode'; // cpg1.5
$lang_admin_php['vanity_block'] = 'Show the vanity block on themes that are defined as XHTML and CSS compliant'; // cpg1.5
$lang_admin_php['highlight_multiple'] = 'لإختيار سطور متعددة, قم بالضغط المستمر على [Ctrl]-key'; // cpg1.5
$lang_admin_php['custom_header_path'] = 'عنوان مخصص لـ custom header include'; // cpg1.5
$lang_admin_php['custom_footer_path'] = 'عنوان مخصص لـ footer include'; // cpg1.5
$lang_admin_php['browse_by_date'] = 'تفعيل التصفح بالتاريخ'; // cpg1.5
$lang_admin_php['display_redirection_page'] = 'عرض صفحات التحويل'; // cpg1.5
$lang_admin_php['display_xp_publish_link'] = 'Promote usage of XP Publisher by displaying a corresponding link on upload page'; // cpg1.5
$lang_admin_php['main_table_width'] = 'عرض القائمة الرئيسية'; // cpg1.5
$lang_admin_php['pixels_or_percent'] = 'بكسل أو %'; // cpg1.5
$lang_admin_php['subcat_level'] = 'عدد مستويات الأقسام الفرعية للعرض'; // cpg1.5
$lang_admin_php['albums_per_page'] = 'عدد الألبومات للعرض'; // cpg1.5
$lang_admin_php['album_list_cols'] = 'عدد الأعمدة لقائمة الألبومات'; // cpg1.5
$lang_admin_php['alb_list_thumb_size'] = 'مقاس مصغرة الألبوم'; // cpg1.5
$lang_admin_php['main_page_layout'] = 'محتويات الصفحة الرئيسية'; // cpg1.5
$lang_admin_php['first_level'] = 'Show first level album thumbnails in categories'; // cpg1.5
$lang_admin_php['categories_alpha_sort'] = 'ترتيب الأقسام أبجديا'; // cpg1.5
$lang_admin_php['categories_alpha_sort_details'] = '(بدلا من الترتيب المخصص)'; // cpg1.5
$lang_admin_php['link_pic_count'] = 'أظهر عدد الملفات المربوطة'; // cpg1.5
$lang_admin_php['thumbcols'] = 'عدد أعمدة المصغرات في الصفحة'; // cpg1.5
$lang_admin_php['thumbrows'] = 'عدد صفوف المصغرات في الصفحة'; // cpg1.5
$lang_admin_php['max_tabs'] = 'Maximum number of tabs to display'; // cpg1.5
$lang_admin_php['tabs_dropdown'] = 'Show dropdown list of all pages next to tabs'; // cpg1.5
$lang_admin_php['caption_in_thumbview'] = 'Display file caption (in addition to title) below the thumbnail'; // cpg1.5
$lang_admin_php['views_in_thumbview'] = 'عرض عدد المشاهدات أسفل المصغرة'; // cpg1.5
$lang_admin_php['display_comment_count'] = 'عرض عدد التعليقات أسفل المصغرة'; // cpg1.5
$lang_admin_php['display_uploader'] = 'Display uploader name below the thumbnail'; // cpg1.5
// 'display_admin_uploader'] = 'Display name of admin uploaders below the thumbnail'; // cpg1.5
$lang_admin_php['display_filename'] = 'عرض اسم الملف أسفل المصغرة'; // cpg1.5
$lang_admin_php['display_thumbnail_rating'] = 'عرض التقييم أسغل المصغرة'; // cpg1.5
$lang_admin_php['alb_desc_thumb'] = 'عرض وصف الألبوم'; // cpg1.5
$lang_admin_php['thumbnail_to_fullsize'] = 'الذهاب مباشرة من المصغرات إلى كامل حجم الصورة'; // cpg1.5
$lang_admin_php['default_sort_order'] = 'ترتيب الملفات الإفتراضي'; // cpg1.5
$lang_admin_php['min_votes_for_rating'] = 'Minimum number of votes for a file to appear in the \'top rated\' list'; // cpg1.5
$lang_admin_php['picture_table_width'] = 'Width of the table for file display'; // cpg1.5
$lang_admin_php['display_pic_info'] = 'File information is visible by default'; // cpg1.5
$lang_admin_php['picinfo_movie_download_link'] = 'Display movie download link in the file information area'; // cpg1.5
$lang_admin_php['max_img_desc_length'] = 'أقصى طول لوصف الصورة'; // cpg1.5
$lang_admin_php['max_com_wlength'] = 'الحد الأقصى لعدد الحروف في الكلمة'; // cpg1.5
$lang_admin_php['display_film_strip'] = 'إظهار قصاصة الفلم'; // cpg1.5
$lang_admin_php['max_film_strip_items'] = 'عدد المواد في قصاصة الفلم'; // cpg1.5
$lang_admin_php['slideshow_interval'] = 'مدة عرض الشرائح'; // cpg1.5
$lang_admin_php['milliseconds'] = 'جزء من الثانية'; // cpg1.5
$lang_admin_php['slideshow_interval_detail'] = '1 ثانية = 1000 جزء من الثانية'; // cpg1.5
$lang_admin_php['slideshow_hits'] = 'Count hits in slideshow'; // cpg1.5
$lang_admin_php['ecard_flash'] = 'السماح بالفلاش في البطاقات الألكترونية'; // cpg1.5
$lang_admin_php['not_recommended'] = 'لا ينصح به'; // cpg1.5
$lang_admin_php['recommended'] = 'ينصح به'; // cpg1.5
$lang_admin_php['transparent_overlay'] = 'Insert a transparent overlay to minimize image theft'; // cpg1.5
$lang_admin_php['old_style_rating'] = 'الذهاب إلى نظام التقييم القديم'; // cpg1.5
$lang_admin_php['old_style_rating_extra'] = 'This will disable the \'Number of rating stars to be used\' option'; // cpg1.5
$lang_admin_php['rating_stars_amount'] = 'Number of rating stars to be used when voting'; // cpg1.5
$lang_admin_php['rate_own_files'] = 'الأعضاء يستطيعون تقييم ملفاتهم الخاصة'; // cpg1.5
$lang_admin_php['filter_bad_words'] = 'تصفية الملفات السيئة من التعليقات'; // cpg1.5
$lang_admin_php['enable_smilies'] = 'السماح بالإبتسامات في التعليقات'; // cpg1.5
$lang_admin_php['disable_comment_flood_protect'] = 'السماح بالتعليقات المتتالية في نفس الصورة لنفس العضو'; // cpg1.5
$lang_admin_php['disable_comment_flood_protect_details'] = '(تعطيل الحماية من الفيضان)'; // cpg1.5
$lang_admin_php['max_com_lines'] = 'أقصى عدد أسطر التعليق'; // cpg1.5
$lang_admin_php['max_com_size'] = 'أقصى طول للتعليق'; // cpg1.5
$lang_admin_php['email_comment_notification'] = 'إخطار المدير على التعليقات عن طريق البريد الإلكتروني'; // cpg1.5
$lang_admin_php['comments_sort_descending'] = 'ترتيب التعليقات'; // cpg1.5
$lang_admin_php['comments_per_page'] = 'التعليقات لكل صفحة'; // cpg1.5
$lang_admin_php['comments_anon_pfx'] = 'Prefix for anonymous comments authors'; // cpg1.5
$lang_admin_php['comment_approval'] = 'التعليقات تتطلب الموافقة'; // cpg1.5
$lang_admin_php['display_comment_approval_only'] = 'Only display comments needing approval on the &quot;Review Comments&quot; page'; // cpg1.5
$lang_admin_php['comment_placeholder'] = 'Display placeholder text to end users for comments waiting for admin approval'; // cpg1.5
$lang_admin_php['comment_user_edit'] = 'السماح للأعضاء بتعديل تعليقاتهم'; // cpg1.5
$lang_admin_php['comment_captcha'] = 'Display Captcha (Visual Confirmation) for adding comments'; // cpg1.5
$lang_admin_php['comment_akismet_enable'] = 'Akismet Options'; // cpg1.5
$lang_admin_php['comment_akismet_enable_description'] = 'What should be done if Akismet rejects a comment as spam?'; // cpg1.5
$lang_admin_php['comment_akismet_applicable_only'] = 'Options only apply if Akismet has been enabled by entering a valid API key'; // cpg1.5
$lang_admin_php['comment_akismet_enable_approval'] = 'Allow comments that fail to pass Akismet, but mark them unapproved'; // cpg1.5
$lang_admin_php['comment_akismet_drop_tell'] = 'Drop comment that fails to validate, and tell author that it was rejected'; // cpg1.5
$lang_admin_php['comment_akismet_drop_lie'] = 'Drop comment that fails to validate, but tell author (spammer) it has been added'; // cpg1.5
$lang_admin_php['comment_akismet_api_key'] = 'Akismet API key'; // cpg1.5
$lang_admin_php['comment_akismet_api_key_description'] = 'Leave empty to disable Akismet'; // cpg1.5
$lang_admin_php['comment_akismet_group'] = 'Apply Akismet for comments made by'; // cpg1.5
$lang_admin_php['comment_promote_registration'] = 'Ask guests to log in to post comments'; // cpg1.5
$lang_admin_php['thumb_width'] = 'Max dimension of a thumbnail (width, if you use "exact" in "Use dimension")'; // cpg1.5
$lang_admin_php['thumb_use'] = 'Use dimension'; // cpg1.5
$lang_admin_php['thumb_use_detail'] = '(width or height or max aspect for thumbnail)'; // cpg1.5
$lang_admin_php['thumb_height'] = 'Height of a thumbnail'; // cpg1.5
$lang_admin_php['thumb_height_detail'] = '(only applies if you use &quot;exact&quot; in &quot;Use dimension&quot;)'; // cpg1.5
$lang_admin_php['movie_audio_document'] = 'movie, audio, document'; // cpg1.5
$lang_admin_php['thumb_pfx'] = 'The prefix for thumbnails'; // cpg1.5
$lang_admin_php['enable_unsharp'] = 'Thumb Sharpening: enable Unsharp Mask'; // cpg1.5
$lang_admin_php['unsharp_amount'] = 'Thumb Sharpening amount'; // cpg1.5
$lang_admin_php['unsharp_radius'] = 'Thumb Sharpening radius'; // cpg1.5
$lang_admin_php['unsharp_threshold'] = 'Thumb Sharpening threshold'; // cpg1.5
$lang_admin_php['jpeg_qual'] = 'Quality for JPEG files'; // cpg1.5
$lang_admin_php['make_intermediate'] = 'Create intermediate pictures'; // cpg1.5
$lang_admin_php['picture_use'] = 'استخدم الأبعاد'; // cpg1.5
$lang_admin_php['picture_use_detail'] = '(width or height or max aspect for an intermediate picture)'; // cpg1.5
$lang_admin_php['picture_use_thumb'] = 'إعجاب المصغرات'; // cpg1.5
$lang_admin_php['picture_width'] = 'Max width or height of an intermediate picture'; // cpg1.5
$lang_admin_php['max_upl_size'] = 'حجم الملف الأقصى للرفع'; // cpg1.5
$lang_admin_php['kilobytes'] = 'ك.ب'; // cpg1.5
$lang_admin_php['pixels'] = 'بكسل'; // cpg1.5
$lang_admin_php['max_upl_width_height'] = 'Max width or height for uploaded pictures'; // cpg1.5
$lang_admin_php['auto_resize'] = 'Auto resize images that are larger than max width or height'; // cpg1.5
$lang_admin_php['fullsize_padding_x'] = 'Horizontal padding for full-size pop-up'; // cpg1.5
$lang_admin_php['fullsize_padding_y'] = 'Vertical padding for full-size pop-up'; // cpg1.5
$lang_admin_php['allow_private_albums'] = 'Albums can be private'; // cpg1.5
$lang_admin_php['allow_private_albums_note'] = '(Note: if you switch from \'yes\' to \'no\' any current private albums will be visible)'; // cpg1.5
$lang_admin_php['show_private'] = 'Show private album icon to unlogged user'; // cpg1.5
$lang_admin_php['forbiden_fname_char'] = 'Characters forbidden in filenames'; // cpg1.5
$lang_admin_php['silly_safe_mode'] = 'Enable &quot;silly safe mode&quot;'; // cpg1.5
$lang_admin_php['allowed_img_types'] = 'انواع الصور المسموح بها'; // cpg1.5
$lang_admin_php['allowed_mov_types'] = 'أنواع الملفات المسموح بها'; // cpg1.5
$lang_admin_php['media_autostart'] = 'Movie playback autostart'; // cpg1.5
$lang_admin_php['allowed_snd_types'] = 'نوع الصوتيات المسموح بها'; // cpg1.5
$lang_admin_php['allowed_doc_types'] = 'أنواع المستندات المسموح بها'; // cpg1.5
$lang_admin_php['thumb_method'] = 'Method for resizing images'; // cpg1.5
$lang_admin_php['impath'] = 'Path to ImageMagick \'convert\' utility'; // cpg1.5
$lang_admin_php['impath_example'] = '(مثال /usr/bin/)'; // cpg1.5
$lang_admin_php['im_options'] = 'Additional command line options for ImageMagick'; // cpg1.5
$lang_admin_php['read_exif_data'] = 'Read EXIF data from JPEG files'; // cpg1.5
$lang_admin_php['read_iptc_data'] = 'Read IPTC data from JPEG files'; // cpg1.5
$lang_admin_php['fullpath'] = 'The album directory'; // cpg1.5
$lang_admin_php['userpics'] = 'The directory for user files'; // cpg1.5
$lang_admin_php['normal_pfx'] = 'The prefix for intermediate pictures'; // cpg1.5
$lang_admin_php['default_dir_mode'] = 'النمط الإفتراضي للمجلدات'; // cpg1.5
$lang_admin_php['default_file_mode'] = 'النمط الإفتراضي للملفات'; // cpg1.5
$lang_admin_php['enable_watermark'] = 'العلامة المائية للصور'; // cpg1.5
$lang_admin_php['enable_thumb_watermark'] = 'Watermark custom thumbs'; // cpg1.5
$lang_admin_php['where_put_watermark'] = 'أين توضع العلامة المائية'; // cpg1.5
$lang_admin_php['which_files_to_watermark'] = 'أي الملفات لوضع العلامة المائية عليه'; // cpg1.5
$lang_admin_php['watermark_file'] = 'أي الملفات لإستخدامه كعلامة مائية'; // cpg1.5
$lang_admin_php['watermark_transparency'] = 'شفاف لكامل الصورة'; // cpg1.5
$lang_admin_php['zero_2_hundred'] = '0-100'; // cpg1.5
$lang_admin_php['reduce_watermark'] = 'Downsize watermark if width of a picture is smaller than entered value. That is the 100% reference point. Resizing of the watermark is linear (0 to disable)'; // cpg1.5
$lang_admin_php['watermark_transparency_featherx'] = 'ضع شفايفة اللون x'; // cpg1.5
$lang_admin_php['watermark_transparency_feathery'] = 'ضع شفافية اللون y'; // cpg1.5
$lang_admin_php['gd2_only'] = 'GD2 فقط'; // cpg1.5
$lang_admin_php['allow_user_registration'] = 'السماح بتسجيل الأعضاء الجدد'; // cpg1.5
$lang_admin_php['global_registration_pw'] = 'كلمة المرور العامة للتسجيل'; // cpg1.5
$lang_admin_php['user_registration_disclaimer'] = 'Display disclaimer on user registration'; // cpg1.5
$lang_admin_php['registration_captcha'] = 'Display Captcha (Visual Confirmation) on registration page'; // cpg1.5
$lang_admin_php['reg_requires_valid_email'] = 'User registration requires email verification'; // cpg1.5
$lang_admin_php['reg_notify_admin_email'] = 'Notify admin of user registration by email'; // cpg1.5
$lang_admin_php['admin_activation'] = 'Admin activation of registrations'; // cpg1.5
$lang_admin_php['personal_album_on_registration'] = 'Create user album in personal gallery on registration'; // cpg1.5
$lang_admin_php['allow_unlogged_access'] = 'Allow unlogged users (guest or anonymous) access'; // cpg1.5
$lang_admin_php['thumbnail_intermediate_full'] = 'thumbnail, intermediate, and full-size image'; // cpg1.5
$lang_admin_php['thumbnail_intermediate'] = 'thumbnail and intermediate image'; // cpg1.5
$lang_admin_php['thumbnail_only'] = 'مصغرات فقط'; // cpg1.5
$lang_admin_php['upload_mechanism'] = 'Default upload method'; // cpg1.5
$lang_admin_php['upload_swf'] = 'advanced - multiple files, Flash-driven (recommended)'; // cpg1.5
$lang_admin_php['upload_single'] = 'بسيط - ملف واحد كل مرة'; // cpg1.5
$lang_admin_php['allow_user_upload_choice'] = 'Allow users to choose the upload method'; // cpg1.5
$lang_admin_php['allow_duplicate_emails_addr'] = 'Allow two users to have the same email address'; // cpg1.5
$lang_admin_php['upl_notify_admin_email'] = 'Notify admin of user upload awaiting approval'; // cpg1.5
$lang_admin_php['allow_memberlist'] = 'Allow logged in users to view the memberlist'; // cpg1.5
$lang_admin_php['allow_email_change'] = 'Allow users to change email address in their profile'; // cpg1.5
$lang_admin_php['allow_user_account_delete'] = 'Allow users to delete their own user account'; // cpg1.5
$lang_admin_php['users_can_edit_pics'] = 'Allow users to retain control over their pics in public galleries'; // cpg1.5
$lang_admin_php['allow_user_move_album'] = 'Allow users to move their albums from/to allowed categories'; // cpg1.5
$lang_admin_php['allow_user_album_keyword'] = 'Allow users to assign album keywords'; // cpg1.5
$lang_admin_php['allow_user_edit_after_cat_close'] = 'Allow users to edit their albums when in a locked category'; // cpg1.5
$lang_admin_php['login_method_username'] = 'اسم المستخدم'; // cpg1.5
$lang_admin_php['login_method_email'] = 'عنوان البريد الإلكتروني'; // cpg1.5
$lang_admin_php['login_method_both'] = 'كلاهما'; // cpg1.5
$lang_admin_php['login_method'] = 'How do you want your users to be able to login'; // cpg1.5
$lang_admin_php['login_threshold'] = 'Number of failed login attempts until temporary ban'; // cpg1.5
$lang_admin_php['login_threshold_detail'] = '(to avoid brute force attacks)'; // cpg1.5
$lang_admin_php['login_expiry'] = 'Duration of a temporary ban after failed logins'; // cpg1.5
$lang_admin_php['minutes'] = 'دقائق'; // cpg1.5
$lang_admin_php['report_post'] = 'Enable Report to Admin'; // cpg1.5
$lang_admin_php['user_profile1_name'] = 'Profile 1 name'; // cpg1.5
$lang_admin_php['user_profile2_name'] = 'Profile 2 name'; // cpg1.5
$lang_admin_php['user_profile3_name'] = 'Profile 3 name'; // cpg1.5
$lang_admin_php['user_profile4_name'] = 'Profile 4 name'; // cpg1.5
$lang_admin_php['user_profile5_name'] = 'Profile 5 name'; // cpg1.5
$lang_admin_php['user_profile6_name'] = 'Profile 6 name'; // cpg1.5
$lang_admin_php['user_field1_name'] = 'اسم الحقل 1'; // cpg1.5
$lang_admin_php['user_field2_name'] = 'اسم الحقل 2'; // cpg1.5
$lang_admin_php['user_field3_name'] = 'اسم الحقل 3'; // cpg1.5
$lang_admin_php['user_field4_name'] = 'اسم الحقل 4'; // cpg1.5
$lang_admin_php['cookie_name'] = 'اسم الـCookie'; // cpg1.5
$lang_admin_php['cookie_path'] = 'مسار الـCookie'; // cpg1.5
$lang_admin_php['smtp_host'] = 'SMTP Host (في حالة تركه فارغا, سوف تستخدم دالة sendmail)'; // cpg1.5
$lang_admin_php['smtp_username'] = 'اسم مستخدم SMTP'; // cpg1.5
$lang_admin_php['smtp_password'] = 'كلمة مرور SMTP'; // cpg1.5
$lang_admin_php['log_mode'] = 'نمط الولوج'; // cpg1.5
$lang_admin_php['log_mode_details'] = 'جميع السجلات تكتب بالإنجليزية.'; // cpg1.5
$lang_admin_php['log_ecards'] = 'سجل البطاقات الإلكترونية'; // cpg1.5
$lang_admin_php['log_ecards_detail'] = 'Note: logging can have legal impacts. The user should be informed on registration that ecards are being logged. It is recommended to provide a separate page with a privacy policy as well.'; // cpg1.5
$lang_admin_php['vote_details'] = 'Keep detailed vote statistics'; // cpg1.5
$lang_admin_php['hit_details'] = 'Keep detailed hit statistics'; // cpg1.5
$lang_admin_php['display_stats_on_index'] = 'Display statistics on index page'; // cpg1.5
$lang_admin_php['count_file_hits'] = 'Count file views'; // cpg1.5
$lang_admin_php['count_album_hits'] = 'Count album views'; // cpg1.5
$lang_admin_php['count_admin_hits'] = 'Count admin views'; // cpg1.5
$lang_admin_php['debug_mode'] = 'تفعيل نمط المصحح'; // cpg1.5
$lang_admin_php['debug_notice'] = 'عرض الملاحظات في نمط المصحح'; // cpg1.5
$lang_admin_php['offline'] = 'المعرض معطل'; // cpg1.5
$lang_admin_php['display_coppermine_news'] = 'عرض الأخبار من coppermine-gallery.net'; // cpg1.5
$lang_admin_php['display_coppermine_detail'] = 'سوف يعرض للمدير فقط'; // cpg1.5
$lang_admin_php['config_setting_invalid'] = 'The value you have set for &laquo;%s&raquo; is invalid, please review it.'; // cpg1.5
$lang_admin_php['config_setting_ok'] = 'Your setting for &laquo;%s&raquo; has been saved.'; // cpg1.5
$lang_admin_php['contact_form_settings'] = 'جهات الإتصال من الإعدادات'; // cpg1.5
$lang_admin_php['contact_form_guest_enable'] = 'Display contact form to anonymous visitors (guests)'; // cpg1.5
$lang_admin_php['contact_form_registered_enable'] = 'Display contact form to registered users'; // cpg1.5
$lang_admin_php['with_captcha'] = 'مع captcha'; // cpg1.5
$lang_admin_php['without_captcha'] = 'بدون captcha'; // cpg1.5
$lang_admin_php['optional'] = 'اختياري'; // cpg1.5
$lang_admin_php['mandatory'] = 'مطلوب'; // cpg1.5
$lang_admin_php['contact_form_guest_name_field'] = 'Display sender name field for guests'; // cpg1.5
$lang_admin_php['contact_form_guest_email_field'] = 'Display sender email field for guests'; // cpg1.5
$lang_admin_php['contact_form_subject_field'] = 'Display subject field'; // cpg1.5
$lang_admin_php['contact_form_subject_content'] = 'Subject line for emails generated by contact form'; // cpg1.5
$lang_admin_php['contact_form_sender_email'] = 'Use the sender\'s email address as &quot;from&quot; address'; // cpg1.5
$lang_admin_php['allow_no_link'] = 'allow, but don\'t display link'; // cpg1.5
$lang_admin_php['allow_show_link'] = 'allow and promote it by displaying a link'; // cpg1.5
$lang_admin_php['display_sidebar_user'] = 'Sidebar for registered users'; // cpg1.5
$lang_admin_php['display_sidebar_guest'] = 'Sidebar for guests'; // cpg1.5
$lang_admin_php['do_not_change'] = 'Don\'t change this unless you REALLY know what you\'re doing!'; // cpg1.5
$lang_admin_php['reset_to_default'] = 'Reset to default'; // cpg1.5
$lang_admin_php['no_change_needed'] = 'No change needed, config option already is set to default'; // cpg1.5
$lang_admin_php['enabled'] = 'مفعل'; // cpg1.5
$lang_admin_php['disabled'] = 'معطل'; // cpg1.5
$lang_admin_php['none'] = 'لا يوجد'; // cpg1.5
$lang_admin_php['warning_change'] = 'When changing this setting, only the files that are added from that point on are affected, so it\'s advisable that this setting is not changed if there are already files in the gallery. You can, however, apply the changes to the existing files with the "admin tools (resize pictures)" utility from the admin menu.'; // cpg1.5
$lang_admin_php['warning_exist'] = 'These settings mustn\'t be changed if you already have files in your database.'; // cpg1.5
$lang_admin_php['warning_dont_submit'] = 'If you are not sure about the impact that changing this setting will have, do not submit the form and review the documentation first.'; // cpg1.5 // js-alert
$lang_admin_php['menu_only'] = 'القائمة فقط'; // cpg1.5
$lang_admin_php['everywhere'] = 'كل مكان'; // cpg1.5
$lang_admin_php['manage_languages'] = 'إدارة اللغة'; // cpg1.5
$lang_admin_php['form_token_lifetime'] = 'Form token lifetime'; // cpg1.5
$lang_admin_php['seconds'] = 'ثواني'; // cpg1.5
$lang_admin_php['display_reset_boxes_in_config'] = 'عرض صندوق إعادة التهئية في الإعدادات'; // cpg1.5
$lang_admin_php['upd_not_needed'] = 'لا يحتاج إلى تحديث.'; // cpg 1.5
}


// ------------------------------------------------------------------------- //
// File db_ecard.php
// ------------------------------------------------------------------------- //
if (defined('DB_ECARD_PHP')) {
$lang_db_ecard_php['title'] = 'الصور المرسلة';
$lang_db_ecard_php['ecard_sender'] = 'المرسل';
$lang_db_ecard_php['ecard_recipient'] = 'المتلقى';
$lang_db_ecard_php['ecard_date'] = 'التاريخ';
$lang_db_ecard_php['ecard_display'] = 'عرض الصورة المرسل';
$lang_db_ecard_php['ecard_name'] = 'الإسم';
$lang_db_ecard_php['ecard_email'] = 'البريد الإلكترونى';
$lang_db_ecard_php['ecard_ip'] = 'IP';
$lang_db_ecard_php['ecard_ascending'] = 'تصاعدى';
$lang_db_ecard_php['ecard_descending'] = 'تنازلى';
$lang_db_ecard_php['ecard_sorted'] = 'مرتبة';
$lang_db_ecard_php['ecard_by_date'] = 'بالتاريخ';
$lang_db_ecard_php['ecard_by_sender_name'] = 'بإسم المرسل';
$lang_db_ecard_php['ecard_by_sender_email'] = 'بالبريد الإلكتروني للمرسل';
$lang_db_ecard_php['ecard_by_sender_ip'] = 'بعنوان الـIP للمرسل';
$lang_db_ecard_php['ecard_by_recipient_name'] = 'بإسم المستقبل';
$lang_db_ecard_php['ecard_by_recipient_email'] = 'بالبريد الإلكتروني للمستقبل';
$lang_db_ecard_php['ecard_number'] = 'عرض السجل %s إلى %s من %s';
$lang_db_ecard_php['ecard_goto_page'] = 'إذهب إلى صفحة';
$lang_db_ecard_php['ecard_records_per_page'] = 'سجل بكل صفحة';
$lang_db_ecard_php['check_all'] = 'اختيار الكل';
$lang_db_ecard_php['uncheck_all'] = 'عدم اختيار الكل';
$lang_db_ecard_php['ecards_delete_selected'] = 'حذف البطاقات الإلكترونية المختارة';
$lang_db_ecard_php['ecards_delete_confirm'] = 'هل أنت متأكد أنك تريد حذف السجلات؟ أشر المربع!';
$lang_db_ecard_php['ecards_delete_sure'] = 'أنا متأكد';
$lang_db_ecard_php['invalid_data'] = 'The data for the ecard you are trying to access has been corrupted by your mail client. Check the link is complete.';
}

// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //
if (defined('DB_INPUT_PHP')) {
$lang_db_input_php['empty_name_or_com'] = 'يجب كتابة اسمك و تعليقك';
$lang_db_input_php['com_added'] = 'تم إضافة تعليقك'; // cpg1.5
$lang_db_input_php['alb_need_title'] = 'يجب عليك إدخال عنوان للألبوم';
$lang_db_input_php['no_udp_needed'] = 'لا حاجة لتحديث';
$lang_db_input_php['alb_updated'] = 'تم تحديث الألبوم';
$lang_db_input_php['unknown_album'] = 'الألبوم الذى قمت بإختياره غير موجود أو لا تملك الصلاحيات لرفع الملفات إليه';
$lang_db_input_php['no_pic_uploaded'] = 'No file was uploaded!<br />If you have really selected a file to upload, check that the server allows file uploads...';
$lang_db_input_php['err_mkdir'] = 'Failed to create directory %s!';
$lang_db_input_php['dest_dir_ro'] = 'Destination directory %s is not writable by the script!';
$lang_db_input_php['err_move'] = 'يستحيل نقل %s إلى %s!';
$lang_db_input_php['err_fsize_too_large'] = 'أبعاد الملف الذى قمت برفعه كبيرة جداً (الأبعاد القصوى للملف هى %s x %s)!';
$lang_db_input_php['err_imgsize_too_large'] = 'حجم الملف الذى قمت برفعه كبير جداً (الحج الأقصى المسموح به هو %s KB)!';
$lang_db_input_php['err_invalid_img'] = ' إمتداد الملف الذى قمت برفعه غير مسموح';
$lang_db_input_php['allowed_img_types'] = 'يمكنك فقط رفع امتدادات %s .';
$lang_db_input_php['err_insert_pic'] = 'الملف \'%s\' لا يمكن إضافته للألبوم ';
$lang_db_input_php['upload_success'] = 'لقد تم رفع الملف بنجاح<br />سيتم عرضه فور موافقة إدارة الموقع';
$lang_db_input_php['notify_admin_email_subject'] = '%s - تنبيهات الرفع';
$lang_db_input_php['notify_admin_email_body'] = 'تم رفع صورة من قبل %s تحتاج إلى الموافقة. قم بزيارة %s';
$lang_db_input_php['info'] = 'معلومات';
$lang_db_input_php['com_added'] = 'تم إضافة التعليق';
$lang_db_input_php['com_updated'] = 'تم تحديث التعليق'; // cpg1.5
$lang_db_input_php['alb_updated'] = 'تم تحديث الألبوم';
$lang_db_input_php['err_comment_empty'] = 'تعليقك فارغ';
$lang_db_input_php['err_invalid_fext'] = 'فقط الملفات بالإمتدادات التالية هى المقبولة:'; // js-alert
$lang_db_input_php['no_flood'] = 'نأسف لكنك أنت صاحب آخر تعليق <br />رجاء تعديل تعليقك السابق فى حال رغبتك فى الإضافة إليه';
$lang_db_input_php['redirect_msg'] = 'يتم تحويلك الأن.<br /><br />برجاء الضغط على \'استمرار\' إذا لم يتم نقلك أوتوماتيكياً';
$lang_db_input_php['upl_success'] = 'لقد تم إضافة الصورة بنجاح';
$lang_db_input_php['email_comment_subject'] = 'تمت إضافة تعليق فى معرض الصور';
$lang_db_input_php['email_comment_body'] = 'قام أحدهم بالتعليق على معرضك. شاهد التعليق في';
$lang_db_input_php['album_not_selected'] = 'لم يتم إختيار الألبوم';
$lang_db_input_php['com_author_error'] = 'عضو مسجل يستخدم هذا اللقب. سجل الدخول أو استخدم لقبا آخر';
}

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //
if (defined('DELETE_PHP')) {
$lang_delete_php['orig_pic'] = 'الصورة الأصلية'; // cpg1.5
$lang_delete_php['fs_pic'] = 'كامل حجم الصورة';
$lang_delete_php['del_success'] = 'حذفت بنجاح';
$lang_delete_php['ns_pic'] = 'الحجم العادي للصورة';
$lang_delete_php['err_del'] = 'can\'t be deleted';
$lang_delete_php['thumb_pic'] = 'مصغرات';
$lang_delete_php['comment'] = 'تعليق';
$lang_delete_php['im_in_alb'] = 'صورة في الألبوم';
$lang_delete_php['alb_del_success'] = 'الألبوم &laquo;%s&raquo; حذف';
$lang_delete_php['alb_mgr'] = 'مدير الألبوم';
$lang_delete_php['err_invalid_data'] = 'Invalid data received in \'%s\'';
$lang_delete_php['create_alb'] = 'Creating album \'%s\'';
$lang_delete_php['update_alb'] = 'Updating album \'%s\' with title \'%s\' and index \'%s\'';
$lang_delete_php['del_pic'] = 'حذف الملف';
$lang_delete_php['del_alb'] = 'حذف الألبوم';
$lang_delete_php['del_user'] = 'حذف العضو';
$lang_delete_php['err_unknown_user'] = 'The selected user does not exist!';
$lang_delete_php['err_empty_groups'] = 'There\'s no group table, or the group table is empty!';
$lang_delete_php['comment_deleted'] = 'Comment was successfully deleted';
$lang_delete_php['npic'] = 'صورة';
$lang_delete_php['pic_mgr'] = 'مدير الصور';
$lang_delete_php['update_pic'] = 'Updating picture \'%s\' with filename \'%s\' and index \'%s\'';
$lang_delete_php['username'] = 'اسم المستخدم';
$lang_delete_php['anonymized_comments'] = '%s comment(s) anonymized';
$lang_delete_php['anonymized_uploads'] = '%s public upload(s) anonymized';
$lang_delete_php['deleted_comments'] = '%s comment(s) deleted';
$lang_delete_php['deleted_uploads'] = '%s public upload(s) deleted';
$lang_delete_php['user_deleted'] = 'user %s deleted';
$lang_delete_php['activate_user'] = 'تفعيل العضو';
$lang_delete_php['user_already_active'] = 'الحساب مفعل قبلا';
$lang_delete_php['activated'] = 'مفعل';
$lang_delete_php['deactivate_user'] = 'إلغاء تفعيل العضو';
$lang_delete_php['user_already_inactive'] = 'الحساب مفعل قبلا';
$lang_delete_php['deactivated'] = 'إلغاء التفعيل';
$lang_delete_php['reset_password'] = 'إعادة تعيين كلمة(كلمات) المرور';
$lang_delete_php['password_reset'] = 'إعادة تعيين كلمة المرور إلى %s';
$lang_delete_php['change_group'] = 'تغيير المجموعة الرئيسية';
$lang_delete_php['change_group_to_group'] = 'تغيير من %s إلى %s';
$lang_delete_php['add_group'] = 'اضافة مجموعة فرعية';
$lang_delete_php['add_group_to_group'] = 'Adding user %s to group %s. He\'s now member of %s as primary and of %s as secondary membergroup(s).';
$lang_delete_php['status'] = 'الحالة';
$lang_delete_php['updating_album'] = 'تحديث الألبوم '; // cpg1.5
$lang_delete_php['moved_picture_to_position'] = 'Moved picture %s to position %s'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //
if (defined('DISPLAYIMAGE_PHP')){
$lang_display_image_php['confirm_del'] = 'هل أنت متأكد أنك تود حذف هذا الملف؟\\nالتعليقات سوف تحذف أيضا.'; // js-alert
$lang_display_image_php['del_pic'] = 'حذف هذا الملف';
$lang_display_image_php['size'] = '%s x %s بكسل';
$lang_display_image_php['views'] = '%s مرة';
$lang_display_image_php['slideshow'] = 'عرض متتالى';
$lang_display_image_php['stop_slideshow'] = 'إيقاف العرض المتتالى';
$lang_display_image_php['view_fs'] = 'اضغط لعرض الصورة بالحجم الكامل';
$lang_display_image_php['edit_pic'] = 'تعديل بيانات الصورة';
$lang_display_image_php['crop_pic'] = 'القطع و التدوير';
$lang_display_image_php['set_player'] = 'تغيير المشغل';

$lang_picinfo['title'] = 'معلومات الصورة';
$lang_picinfo['Album name'] = 'اسم الألبوم';
$lang_picinfo['Rating'] = 'التقييم (%s صوت)';
$lang_picinfo['Date Added'] = 'تاريخ الإضافة';
$lang_picinfo['Dimensions'] = 'الأبعاد';
$lang_picinfo['Displayed'] = 'تم عرضه';
$lang_picinfo['URL'] = 'الرابط';
$lang_picinfo['Make'] = 'إنشاء';
$lang_picinfo['Model'] = 'Model';
$lang_picinfo['DateTime'] = 'التاريخ والوقت';
$lang_picinfo['ISOSpeedRatings'] = 'ISO';
$lang_picinfo['MaxApertureValue'] = 'Max Aperture';
$lang_picinfo['FocalLength'] = 'Focal length';
$lang_picinfo['Comment'] = 'تعليق';
$lang_picinfo['addFav'] = 'أضف لمفضلتك';
$lang_picinfo['addFavPhrase'] = 'فى مفضلتك';
$lang_picinfo['remFav'] = 'حذف من مفضلتى';
$lang_picinfo['iptcTitle'] = 'عنوان IPTC';
$lang_picinfo['iptcCopyright'] = 'IPTC Copyright';
$lang_picinfo['iptcKeywords'] = 'IPTC Keywords';
$lang_picinfo['iptcCategory'] = 'IPTC Category';
$lang_picinfo['iptcSubCategories'] = 'IPTC Sub Categories';
$lang_picinfo['ColorSpace'] = 'Color Space';
$lang_picinfo['ExposureProgram'] = 'Exposure Program';
$lang_picinfo['Flash'] = 'Flash';
$lang_picinfo['MeteringMode'] = 'Metering Mode';
$lang_picinfo['ExposureTime'] = 'Exposure Time';
$lang_picinfo['ExposureBiasValue'] = 'Exposure Bias';
$lang_picinfo['ImageDescription'] = 'وصف الصورة';
$lang_picinfo['Orientation'] = 'Orientation';
$lang_picinfo['xResolution'] = 'X Resolution';
$lang_picinfo['yResolution'] = 'Y Resolution';
$lang_picinfo['ResolutionUnit'] = 'Resolution Unit';
$lang_picinfo['Software'] = 'البرنامج';
$lang_picinfo['YCbCrPositioning'] = 'YCbCrPositioning';
$lang_picinfo['ExifOffset'] = 'EXIF Offset';
$lang_picinfo['IFD1Offset'] = 'IFD1 Offset';
$lang_picinfo['FNumber'] = 'FNumber';
$lang_picinfo['ExifVersion'] = 'EXIF إصدار';
$lang_picinfo['DateTimeOriginal'] = 'DateTime Original';
$lang_picinfo['DateTimedigitized'] = 'DateTime digitized';
$lang_picinfo['ComponentsConfiguration'] = 'Components Configuration';
$lang_picinfo['CompressedBitsPerPixel'] = 'Compressed Bits Per Pixel';
$lang_picinfo['LightSource'] = 'Light Source';
$lang_picinfo['ISOSetting'] = 'ISO Setting';
$lang_picinfo['ColorMode'] = 'Color Mode';
$lang_picinfo['Quality'] = 'Quality';
$lang_picinfo['ImageSharpening'] = 'Image Sharpening';
$lang_picinfo['FocusMode'] = 'Focus Mode';
$lang_picinfo['FlashSetting'] = 'Flash Setting';
$lang_picinfo['ISOSelection'] = 'ISO Selection';
$lang_picinfo['ImageAdjustment'] = 'Image Adjustment';
$lang_picinfo['Adapter'] = 'Adapter';
$lang_picinfo['ManualFocusDistance'] = 'Manual Focus Distance';
$lang_picinfo['DigitalZoom'] = 'Digital Zoom';
$lang_picinfo['AFFocusPosition'] = 'AF Focus Position';
$lang_picinfo['Saturation'] = 'Saturation';
$lang_picinfo['NoiseReduction'] = 'Noise Reduction';
$lang_picinfo['FlashPixVersion'] = 'FlashPix إصدار';
$lang_picinfo['ExifImageWidth'] = 'EXIF Image Width';
$lang_picinfo['ExifImageHeight'] = 'EXIF Image Height';
$lang_picinfo['ExifInteroperabilityOffset'] = 'EXIF Interoperability Offset';
$lang_picinfo['FileSource'] = 'File Source';
$lang_picinfo['SceneType'] = 'Scene Type';
$lang_picinfo['CustomerRender'] = 'Customer Render';
$lang_picinfo['ExposureMode'] = 'Exposure Mode';
$lang_picinfo['WhiteBalance'] = 'White Balance';
$lang_picinfo['DigitalZoomRatio'] = 'Digital Zoom Ratio';
$lang_picinfo['SceneCaptureMode'] = 'Scene Capture Mode';
$lang_picinfo['GainControl'] = 'الحصول على التحكم';
$lang_picinfo['Contrast'] = 'Contrast';
$lang_picinfo['Sharpness'] = 'الحدية';
$lang_picinfo['ManageExifDisplay'] = 'Manage EXIF Display';
$lang_picinfo['success'] = 'تم تحديث البيانات بنجاح';
$lang_picinfo['show_details'] = 'عرض التفاصيل'; // cpg1.5
$lang_picinfo['hide_details'] = 'إخفاء التفاصيل'; // cpg1.5
$lang_picinfo['download_URL'] = 'رابط مباشر';
$lang_picinfo['movie_player'] = 'فتح الملف فى المشغل الأساسى لديك';

$lang_display_comments['comment_x_to_y_of_z'] = '%d إلى %d من %d'; // cpg1.5
$lang_display_comments['page'] = 'صفحة'; // cpg1.5
$lang_display_comments['edit_title'] = 'تعديل هذا التعليق';
$lang_display_comments['delete_title'] = 'حذف هذا التعليق'; // cpg1.5
$lang_display_comments['confirm_delete'] = 'تأكيد حذف هذا التعليق؟'; // js-alert
$lang_display_comments['add_your_comment'] = 'أضف تعليقك';
$lang_display_comments['name'] = 'الإسم';
$lang_display_comments['comment'] = 'التعليق';
$lang_display_comments['your_name'] = 'Anon';
$lang_display_comments['report_comment_title'] = 'التبليغ عن هذا التعليق لإدارة الموقع';
$lang_display_comments['pending_approval'] = 'التعليق سيكون ظاهراً بعد موافقة إدارة الموقع عليه.'; // cpg1.5
$lang_display_comments['unapproved_comment'] = 'تعليق غير موافق عليه بعد'; // cpg1.5
$lang_display_comments['pending_approval_message'] = 'تمت إافة تعليق هنا لكنه سيكون ظاهراً بعد عرضه من قبل الإدارة'; // cpg1.5
$lang_display_comments['approve'] = 'الموافقة على التعليق'; // cpg1.5
$lang_display_comments['disapprove'] = 'عدم الموافقةعلى التعليق'; // cpg1.5
$lang_display_comments['log_in_to_comment'] = 'تعليقات الزوار غير متاحة %sسجل دخولك%s لنشر تعليقك'; // cpg1.5 // do not translate the %s placeholders - they will be used as wrappers for the link (<a>)
$lang_display_comments['default_username_message'] = 'رجاء كتابة اسمك للتعليق'; // cpg1.5
$lang_display_comments['comment_rejected'] = 'تم رفض تعليقك'; // cpg1.5

$lang_fullsize_popup['click_to_close'] = 'اضغط على الصورة لغلق هذه الصفحة';
$lang_fullsize_popup['close_window'] = 'إغلاق هذه النافذة'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP')) {
$lang_ecard_php['title'] = 'أرسل لصديق';
$lang_ecard_php['invalid_email'] = 'تحذير: البريد الإلكتورنى غير صحيح:'; // cpg1.5
$lang_ecard_php['ecard_title'] = ' صورة من %s إليك';
$lang_ecard_php['error_not_image'] = 'فقط الصور يمكن إرسالها لصديق'; // cpg1.5
$lang_ecard_php['error_not_image_flash'] = 'فقط الصور و ملفات الفلاش يمكن إرسالها لصديق'; // cpg1.5
$lang_ecard_php['view_ecard'] = 'رابط بديل إذا لم يتم عرض الملف بشكل صحيح';
$lang_ecard_php['view_ecard_plaintext'] = 'لعرض هذا الصورة المرسل إليك, يرجى نسخ الرابط التالى و لصقه فى مكان العنوان لمتصفحك:';
$lang_ecard_php['view_more_pics'] = 'عرض المزيد من الصور';
$lang_ecard_php['send_success'] = 'تم الإرسال لصديقك بنجاح';
$lang_ecard_php['send_failed'] = 'نأسف لكن لا يمكن إرسال رسالتك حالياً لعطل تقنى';
$lang_ecard_php['from'] = 'من';
$lang_ecard_php['your_name'] = 'اسمك';
$lang_ecard_php['your_email'] = 'بريدك الإلكترونى';
$lang_ecard_php['to'] = 'إلى';
$lang_ecard_php['rcpt_name'] = 'اسم متلقى الرسالة';
$lang_ecard_php['rcpt_email'] = 'البريد الإلكترونى لمتلقى الرسالة';
$lang_ecard_php['greetings'] = 'العنوان';
$lang_ecard_php['message'] = 'الرسالة';
$lang_ecard_php['ecards_footer'] = 'Sent by %s from IP %s at %s (Gallery time)';
$lang_ecard_php['preview'] = 'عرض للملف قبل إرساله';
$lang_ecard_php['preview_button'] = 'عرض';
$lang_ecard_php['submit_button'] = 'إرسال';
$lang_ecard_php['preview_view_ecard'] = 'This will be the alternative link to the ecard once it has been generated. It won\'t work for previews.';
}

// ------------------------------------------------------------------------- //
// File report_file.php
// ------------------------------------------------------------------------- //

if (defined('REPORT_FILE_PHP')) {
$lang_report_php['title'] = 'تبليغ الإدارة عن مخالفة';
$lang_report_php['invalid_email'] = '<strong>تحذير</strong> :بريد الكترونى غير صحيح';
$lang_report_php['report_subject'] = 'A report from %s on a gallery %s';
$lang_report_php['view_report'] = 'Alternative link if the report does not display correctly';
$lang_report_php['view_report_plaintext'] = 'To view the report, copy and paste this url into your browser\'s address bar:';
$lang_report_php['view_more_pics'] = 'المزيد من الصور';
$lang_report_php['send_success'] = 'تمت إضافة تبليغك';
$lang_report_php['send_failed'] = 'Sorry but the server can\'t send your report...';
$lang_report_php['from'] = 'من';
$lang_report_php['your_name'] = 'اسمك';
$lang_report_php['your_email'] = 'بريدك الإلكترونى';
$lang_report_php['to'] = 'إلى';
$lang_report_php['administrator'] = 'مدير/مشرف';
$lang_report_php['subject'] = 'العنوان';
$lang_report_php['comment_field_name'] = 'Reporting on comment by "%s"';
$lang_report_php['reason'] = 'السبب';
$lang_report_php['message'] = 'الرسالة';
$lang_report_php['report_footer'] = 'Sent by %s from IP %s at %s (Gallery time)';
$lang_report_php['obscene'] = 'رأى مهين';
$lang_report_php['offensive'] = 'كلمات مشينة';
$lang_report_php['misplaced'] = 'خارج الموضوع';
$lang_report_php['missing'] = 'تضليل';
$lang_report_php['issue'] = 'الصورة غير معروضة';
$lang_report_php['other'] = 'غير ذلك';
$lang_report_php['refers_to'] = 'File report refers to';
$lang_report_php['reasons_list_heading'] = 'سبب التبليغ:';
$lang_report_php['no_reason_given'] = 'لم يتم إعطاء أسباب';
$lang_report_php['go_comment'] = 'Go to comment';
$lang_report_php['view_comment'] = 'View full report with comment';
$lang_report_php['type_file'] = 'ملف';
$lang_report_php['type_comment'] = 'تعليق';
$lang_report_php['invalid_data'] = 'The data for the report you are trying to access has been corrupted by your mail client. Check the link is complete.';
}

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) {
$lang_editpics_php['pic_info'] = 'معلومات الملف';
$lang_editpics_php['desc'] = 'الوصف';
$lang_editpics_php['approval'] = 'موافقة'; //cpg 1.5
$lang_editpics_php['approved'] = 'موافق عليه'; // cpg 1.5
$lang_editpics_php['unapproved'] = 'غير موافق عليه'; // cpg 1.5
$lang_editpics_php['new_keyword'] = 'New keyword';
$lang_editpics_php['new_keywords'] = 'New keywords found';
$lang_editpics_php['existing_keyword'] = 'Existing keyword';
$lang_editpics_php['pic_info_str'] = '%s &times; %s - %s KB - %s views - %s votes';
$lang_editpics_php['approve'] = 'الموافقة على الملف';
$lang_editpics_php['postpone_app'] = 'تأجيل الموافقة';
$lang_editpics_php['del_pic'] = 'حذف الملف';
$lang_editpics_php['del_all'] = 'حذف جميع الملفات';
$lang_editpics_php['read_exif'] = 'Read EXIF info again';
$lang_editpics_php['reset_view_count'] = 'Reset view counter';
$lang_editpics_php['reset_all_view_count'] = 'Reset ALL view counters';
$lang_editpics_php['reset_votes'] = 'Reset votes';
$lang_editpics_php['reset_all_votes'] = 'Reset ALL votes';
$lang_editpics_php['del_comm'] = 'Delete comments';
$lang_editpics_php['del_all_comm'] = 'Delete ALL comments';
$lang_editpics_php['upl_approval'] = 'Upload approval';
$lang_editpics_php['edit_pics'] = 'تعديل الملفات';
$lang_editpics_php['edit_pic'] = 'تعديل الملف'; // cpg 1.5
$lang_editpics_php['see_next'] = 'مشاهدة الملفات التالي';
$lang_editpics_php['see_prev'] = 'مشاهدة الملفات السابقة';
$lang_editpics_php['n_pic'] = '%s ملفات';
$lang_editpics_php['n_of_pic_to_disp'] = 'Number of files to display';
$lang_editpics_php['crop_title'] = 'Coppermine Picture Editor';
$lang_editpics_php['preview'] = 'Preview';
$lang_editpics_php['save'] = 'Save picture';
$lang_editpics_php['save_thumb'] = 'Save as thumbnail';
$lang_editpics_php['gallery_icon'] = 'Make this my icon';
$lang_editpics_php['sel_on_img'] = 'The selection has to be entirely on the image!'; // js-alert
$lang_editpics_php['album_properties'] = 'Album properties';
$lang_editpics_php['parent_category'] = 'Parent category';
$lang_editpics_php['thumbnail_view'] = 'Thumbnail view';
$lang_editpics_php['select_unselect'] = 'select/unselect all';
$lang_editpics_php['file_exists'] = 'Destination file \'%s\' already exists.';
$lang_editpics_php['rename_failed'] = 'Failed to rename \'%s\' to \'%s\'.';
$lang_editpics_php['src_file_missing'] = 'Source file \'%s\' is missing.';
$lang_editpics_php['mime_conv'] = 'Cannot convert file from \'%s\' to \'%s\'';
$lang_editpics_php['forb_ext'] = 'Forbidden file extension.';
$lang_editpics_php['error_editor_class'] = 'Editor class for your resize method not implemented'; // cpg 1.5
$lang_editpics_php['error_document_size'] = 'Document has no width or height'; // cpg 1.5 // js-alert
$lang_editpics_php['success_picture'] = 'Picture successfully saved - you can %sclose%s this window now'; // cpg1.5 // do not translate "%s" here
$lang_editpics_php['success_thumb'] = 'Thumbnail successfully saved - you can %sclose%s this window now'; // cpg1.5 // do not translate "%s" here
$lang_editpics_php['rotate'] = 'Rotate'; // cpg 1.5
$lang_editpics_php['mirror'] = 'Mirror'; // cpg 1.5
$lang_editpics_php['scale'] = 'Scale'; // cpg 1.5
$lang_editpics_php['new_width'] = 'New width'; // cpg 1.5
$lang_editpics_php['new_height'] = 'New height'; // cpg 1.5
$lang_editpics_php['enable_clipping'] = 'Enable clipping, apply to crop'; // cpg 1.5
$lang_editpics_php['jpeg_quality'] = 'JPEG Output Quality'; // cpg 1.5
$lang_editpics_php['or'] = 'OR'; // cpg 1.5
$lang_editpics_php['approve_pic'] = 'Approve file'; // cpg 1.5
$lang_editpics_php['approve_all'] = 'Approve ALL files'; // cpg 1.5
$lang_editpics_php['error_empty'] = 'Album is empty'; // cpg1.5
$lang_editpics_php['error_approval_empty'] = 'No more pictures to approve'; // cpg1.5
$lang_editpics_php['error_linked_only'] = 'Album only contains linked files, which you cannot edit here'; // cpg1.5
$lang_editpics_php['note_approve_public'] = 'Files moved to a public album must be approved by an admin.'; // cpg1.5
$lang_editpics_php['note_approve_private'] = 'Files moved to a private gallery album must be approved by an admin.' ; // cpg1.5
$lang_editpics_php['note_edit_control'] = 'Files moved to a public album cannot be edited.'; // cpg1.5
$lang_editpics_php['confirm_move'] = 'Are you sure you want to move this file?'; // cpg1.5 //js-alert
$lang_editpics_php['success_changes'] = 'Changes successfully saved'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File forgot_passwd.php
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) {
$lang_forgot_passwd_php['forgot_passwd'] = 'Password reminder';
$lang_forgot_passwd_php['err_already_logged_in'] = 'You are already logged in!';
$lang_forgot_passwd_php['enter_email'] = 'Enter your email address';
$lang_forgot_passwd_php['submit'] = 'go';
$lang_forgot_passwd_php['illegal_session'] = 'Forgot password session invalid or has expired.';
$lang_forgot_passwd_php['failed_sending_email'] = 'The password reminder email can\'t be sent!';
$lang_forgot_passwd_php['email_sent'] = 'An email with your username and new password was sent to %s';
$lang_forgot_passwd_php['verify_email_sent'] = 'An email has been sent to %s. Please check your email to complete the process.';
$lang_forgot_passwd_php['err_unk_user'] = 'Selected user does not exist!';
$lang_forgot_passwd_php['account_verify_subject'] = '%s - New password request';
$lang_forgot_passwd_php['passwd_reset_subject'] = '%s - Your new password';
$lang_forgot_passwd_php['account_verify_email'] = <<< EOT
You have requested a new password. If you would like to proceed with having a new password sent to you, click on the following link:

<a href="{VERIFY_LINK}">{VERIFY_LINK}</a>


Regards,

The management of {SITE_NAME}

EOT;

$lang_forgot_passwd_php['reset_email'] = <<< EOT
Here is the new password you requested:

Username: {USER_NAME}
Password: {PASSWORD}

Go to <a href="{SITE_LINK}">{SITE_LINK}</a> to log in.


Regards,

The management of {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //
if (defined('GROUPMGR_PHP')) {
$lang_groupmgr_php['group_manager'] = 'Group manager'; // cpg1.5.x
$lang_groupmgr_php['group_name'] = 'Group';
$lang_groupmgr_php['permissions'] = 'Permissions';
$lang_groupmgr_php['public_albums'] = 'Public albums upload';
$lang_groupmgr_php['personal_gallery'] = 'Personal gallery';
$lang_groupmgr_php['disk_quota'] = 'Quota';
$lang_groupmgr_php['rating'] = 'Rating';
$lang_groupmgr_php['ecards'] = 'Ecards';
$lang_groupmgr_php['comments'] = 'Comments';
$lang_groupmgr_php['allowed'] = 'Allowed';
$lang_groupmgr_php['approval'] = 'Approval';
$lang_groupmgr_php['create_new_group'] = 'Create new group';
$lang_groupmgr_php['del_groups'] = 'Delete selected group(s)';
$lang_groupmgr_php['confirm_del'] = 'Warning, when you delete a group, users that belong to this group will be transferred to the \'Registered\' group!\n\nDo you want to proceed?'; // js-alert
$lang_groupmgr_php['title'] = 'Manage user groups';
$lang_groupmgr_php['reset_to_default'] = 'Reset to default name (%s) - recommended!';
$lang_groupmgr_php['error_group_empty'] = 'Group table was empty!<br />Default groups created, please reload this page';
$lang_groupmgr_php['explain_greyed_out_title'] = 'Why is this row grayed out?';
$lang_groupmgr_php['explain_guests_greyed_out_text'] = 'You cannot change the properties of this group because the access level of this group is NONE. All unlogged users (members of the group %s) can\'t do anything but login; therefore group settings don\'t apply for them. Change the access level here or on the Gallery Configuration page under "User Settings", "Allow unlogged users access".';
$lang_groupmgr_php['group_assigned_album'] = 'assigned album(s)';
$lang_groupmgr_php['access_level'] = 'Access level'; // cpg1.5
$lang_groupmgr_php['thumbnail_intermediate_full'] = 'thumbnail, intermediate, and full-size image'; // cpg1.5
$lang_groupmgr_php['thumbnail_intermediate'] = 'thumbnail and intermediate image'; // cpg1.5
$lang_groupmgr_php['thumbnail_only'] = 'thumbnail only'; // cpg1.5
$lang_groupmgr_php['none'] = 'none'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //
if (defined('INDEX_PHP')){
$lang_index_php['welcome'] = 'مرحباً';

$lang_album_admin_menu['confirm_delete'] = 'Are you sure you want to DELETE this album?\\nAll files and comments will also be deleted.'; // js-alert
$lang_album_admin_menu['delete'] = 'حذف';
$lang_album_admin_menu['modify'] = 'تعديل';
$lang_album_admin_menu['edit_pics'] = 'تعديل الملفات';
$lang_album_admin_menu['cat_locked'] = 'تم قفل الألبوم عن التعدديل'; // cpg1.5.x

$lang_list_categories['home'] = 'الرئيسية';
$lang_list_categories['stat1'] = '[pictures] صورة فى [albums] ألبوم و [cat] قسم, مع [comments] تعليق تم مشاهدتها [views] مرة'; // do not translate the stuff in square brackets
$lang_list_categories['stat2'] = '[pictures] صورة فى [albums] ألبوم تمت مشاهدتها [views] مرة'; // do not translate the stuff in square brackets
$lang_list_categories['xx_s_gallery'] = '%s\'s Gallery';
$lang_list_categories['stat3'] = '[pictures] ملفات في [albums] ألبوم مع [comments] تعليقات شوهدت [views] مرة'; // do not translate the stuff in square brackets

$lang_list_users['user_list'] = 'قائمة العضو';
$lang_list_users['no_user_gal'] = 'لا يوجد معرض للعضو';
$lang_list_users['n_albums'] = '%s ألبوم(ألبومات)';
$lang_list_users['n_pics'] = '%s ملف(ملفات)';

$lang_list_albums['n_pictures'] = '%s ملفات';
$lang_list_albums['last_added'] = ', آخر واحدة أضيفت في %s';
$lang_list_albums['n_link_pictures'] = '%s ملفات مرتبطة';
$lang_list_albums['total_pictures'] = '%s مجموع الملفات';
$lang_list_albums['alb_hits'] = 'الألبومات شوهدت %s مرة'; // cpg1.5
$lang_list_albums['from_category'] = ' - من قسم: '; // cpg1.5
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
$lang_install['im_not_found'] = 'المثبت حاول ايجاد ImageMagick, ولكنه لم يستطح تحديد وجوده أو أن هناك خطأ.<br />Coppermine يستطيع استخدام برنامج \'محول\'<a href="http://www.imagemagick.org/">ImageMagick</a> لعمل المصغرات. جودة الصور المنشأة من ImageMagick تفوق GD1 ولكنها مساوية لـGD2.<br /> إذا كان ImageMagick مثبت في نظامك وكنت تود استخدامه,<br /> تحتاج أن تدخل المسار الكامل لبرنامج التحويل بالأسفل. <br /> في نظام تشغيل Windows سوف يكون الرابط شبيه بـ \'c:/ImageMagick/\' يجب أن لا يحتوي على اي مسافات, على نظام Unix سوف يكون شبيها بـ\'/usr/bin/\'.<br /> إذا كنت لا تملك أي فكرة فيما إذا كنت تملك ImageMagick أم لا, اترك هذا الحقل فارغا - المثبت سوف يحاول عندئذ إستخدام GD2 بشكل إفتراضي (وهذا ما يملكه أغلب المستخدمين). <br /> تستطيع تغيير هذا لاحقا في شاشة إعدادات Coppermine, لذا لا تقلق اذا كنت غير متأكد ماذا تضع هنا - اتركه فارغا.';
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
$lang_install['status'] = 'Status';
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
$lang_keywordmgr_php['title'] = 'إدارة الترجمات';
$lang_keywordmgr_php['search'] = 'بحث';
$lang_keywordmgr_php['keyword_test_search'] = 'بحث في %s في نافذة جديدة';
$lang_keywordmgr_php['keyword_del'] = 'حذف الترجمة %s';
$lang_keywordmgr_php['confirm_delete'] = 'هل أنت متأك أنك تريد حذف الترجمة %s من كامل المعرض?'; // js-alert
$lang_keywordmgr_php['change_keyword'] = 'تغيير الترجمة';
}

// ------------------------------------------------------------------------- //
// File langmgr.php
// ------------------------------------------------------------------------- //
if (defined('LANGMGR_PHP')) {
$lang_langmgr_php['title'] = 'مدير الترجمات';
$lang_langmgr_php['english_language_name'] = 'الإنجليزية';
$lang_langmgr_php['native_language_name'] = 'الأم';
$lang_langmgr_php['custom_language_name'] = 'مخصصة';
$lang_langmgr_php['language_name'] = 'اسم اللغة';
$lang_langmgr_php['language_file'] = 'ملف اللغة';
$lang_langmgr_php['flag'] = 'علم';
$lang_langmgr_php['file_available'] = 'موجود';
$lang_langmgr_php['enabled'] = 'تفعيل';
$lang_langmgr_php['complete'] = 'كامل';
$lang_langmgr_php['default'] = 'افتراضي';
$lang_langmgr_php['missing'] = 'مفقود';
$lang_langmgr_php['broken'] = 'يبدو أنها معطلة أو غير قادر على الوصول إليها';
$lang_langmgr_php['exists_in_db_and_file'] = 'موجودة كملفات وفي قاعدة البيانات';
$lang_langmgr_php['exists_as_file_only'] = 'موجودة كملفات فقط';
$lang_langmgr_php['pick_a_flag'] = 'اختر واحدة';
$lang_langmgr_php['replace_x_with_y'] = 'إستبدال %s بـ %s';
$lang_langmgr_php['tanslator_information'] = 'معلومات المترجم';
$lang_langmgr_php['cpg_version'] = 'Coppermine إصدار';
$lang_langmgr_php['hide_details'] = 'إخفاء التفاصيل';
$lang_langmgr_php['show_details'] = 'إظهار التفاصيل';
$lang_langmgr_php['loading'] = 'تحميل';
$lang_langmgr_php['english_missing'] = 'The English language file is missing although it should never be removed. You need to restore it immediately.';
$lang_langmgr_php['enable_at_least_one'] = 'You need to enable at least one language for the gallery to work';
$lang_langmgr_php['enable_default'] = 'You chose a default language that is not enabled. Pick another default language or enable the language you selected as default!';
$lang_langmgr_php['available_default'] = 'You chose a default language that is not even available. Pick another default language!';
$lang_langmgr_php['version_does_not_match'] = 'The version of this file does not match your Coppermine version. Use with caution and test thoroughly!';
$lang_langmgr_php['no_version'] = 'No version information could be retrieved. It\'s very likely that this language file doesn\'t work at all or isn\'t an actual language file.';
$lang_langmgr_php['filesize'] = 'Filesize %s is implausible';
$lang_langmgr_php['content_missing'] = 'لا يبدو أن الملف يحتوي على المعلومات المطلوبة, لذلك لا يبدو أنه ملف لغة صالح.';
$lang_langmgr_php['status'] = 'الحالة';
$lang_langmgr_php['default_language'] = 'اللغة الإفتراضية هي %s';
}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //
if (defined('LOGIN_PHP')) {
$lang_login_php['login'] = 'تسجيل الدخول';
$lang_login_php['enter_login_pswd'] = 'رجاء إدخال اسم العضوية و كلمة السر لتسجيل الدخول';
$lang_login_php['username'] = 'اسم العضوية';
$lang_login_php['email'] = 'البريد الإلكترونى'; // cpg1.5
$lang_login_php['both'] = 'اسم العضوية أو البريد الإلكتورنى'; // cpg1.5
$lang_login_php['password'] = 'كلمة السر';
$lang_login_php['remember_me'] = 'تذكرنى';
$lang_login_php['welcome'] = 'مرحباً بك %s ...';
$lang_login_php['err_login'] = 'فشل تسجيل الدخول, برجاء المحاولة مرةأخرى';
$lang_login_php['err_already_logged_in'] = 'أنت مسجل دخولك بالفعل';
$lang_login_php['forgot_password_link'] = 'نسيت كلمة السر';
$lang_login_php['cookie_warning'] = 'متصفحك لا يدعم ملفات الكوكيز';
$lang_login_php['send_activation_link'] = 'لم تصلك رسالة التفعيل';
$lang_login_php['force_login'] = 'يجب عليك تسجيل الدخول لعرض هذه الصفحة'; // cpg1.5
$lang_login_php['force_login_title'] = 'سجل دخولك للإستمرار'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) {
$lang_logout_php['logout'] = 'تسجيل الخروج';
$lang_logout_php['bye'] = 'مع السلامة يا %s ...';
$lang_logout_php['err_not_logged_in'] = 'أنت غير مسجل دخولك'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File minibrowser.php
// ------------------------------------------------------------------------- //
if (defined('MINIBROWSER_PHP')) {
$lang_minibrowser_php['up'] = 'مستوى واحد للأعلى';
$lang_minibrowser_php['current_path'] = 'المسار الحالي';
$lang_minibrowser_php['select_directory'] = 'الرجاء اختيار مجلد';
$lang_minibrowser_php['click_to_close'] = 'اضغط على الصورة لإغلاق هذه النافذة';
$lang_minibrowser_php['folder'] = 'مجلد'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File mode.php
// ------------------------------------------------------------------------- //
if (defined('MODE_PHP')) {
$lang_mode_php[0] = 'إيقاف عرض تحكم المدير...'; // cpg1.5
$lang_mode_php[1] = 'تشغيل عرض تحكم المدير...'; // cpg1.5
$lang_mode_php['news_hide'] = 'إخفاء الأخبار...'; // cpg1.5
$lang_mode_php['news_show'] = 'إظهار الاخبار...'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //
if (defined('MODIFYALB_PHP')) {
$lang_modifyalb_php['upd_alb_n'] = 'تحديث الألبوم %s';
$lang_modifyalb_php['related_tasks'] = 'المهام ذات الصلة'; // cpg1.5
$lang_modifyalb_php['choose_album'] = 'اختيار ألبوم'; // cpg1.5
$lang_modifyalb_php['general_settings'] = 'إعدادات عامة';
$lang_modifyalb_php['alb_title'] = 'عنوان الألبوم';
$lang_modifyalb_php['alb_cat'] = 'قسم الألبوم';
$lang_modifyalb_php['alb_desc'] = 'وصف الألبوم';
$lang_modifyalb_php['alb_keyword'] = 'كلمات الألبوم';
$lang_modifyalb_php['alb_thumb'] = 'مصغرات الألبوم';
$lang_modifyalb_php['alb_perm'] = 'تصاريح الألبوم';
$lang_modifyalb_php['can_view'] = 'يمكن مشاهدة الألبوم من قبل';
$lang_modifyalb_php['can_upload'] = 'الزوار يمكنهم رفع الملفات';
$lang_modifyalb_php['can_post_comments'] = 'الزوار يمكنهم اضافة تعليقات';
$lang_modifyalb_php['can_rate'] = 'الزوار يمكنهم التقييم';
$lang_modifyalb_php['user_gal'] = 'معرض العضو';
$lang_modifyalb_php['my_gal'] = '* معرضي *'; // cpg 1.5
$lang_modifyalb_php['no_cat'] = '* لا يوجد قسم *';
$lang_modifyalb_php['alb_empty'] = 'الألبوم فارغ';
$lang_modifyalb_php['last_uploaded'] = 'آخر رفع';
$lang_modifyalb_php['public_alb'] = 'الجميع (ألبوم عام)';
$lang_modifyalb_php['me_only'] = 'أنا فقط';
$lang_modifyalb_php['owner_only'] = 'مالك ألبوم (%s) فقط';
$lang_modifyalb_php['group_only'] = 'أعضاء مجموعة \'%s\' فقط';
$lang_modifyalb_php['err_no_alb_to_modify'] = 'لا يوجد ألبوم تستطيع التعديل عليه في قاعدة البيانات.';
$lang_modifyalb_php['update'] = 'تحديث الألبوم';
$lang_modifyalb_php['reset_album'] = 'إعادة تهيئة الألبوم';
$lang_modifyalb_php['reset_views'] = 'إعادة المشاهدات إلى &quot;0&quot; في %s';
$lang_modifyalb_php['reset_rating'] = 'إعادة التقييم في جميع الملفات في %s';
$lang_modifyalb_php['delete_comments'] = 'حذف جميع التعليقات في %s';
$lang_modifyalb_php['delete_files'] = '%sلا يمكن التراجع عنها%s حذف جميع الملفات في %s';
$lang_modifyalb_php['views'] = 'مشاهدات';
$lang_modifyalb_php['votes'] = 'تصويت';
$lang_modifyalb_php['comments'] = 'تعليقات';
$lang_modifyalb_php['files'] = 'ملفات';
$lang_modifyalb_php['submit_reset'] = 'ارسال التعديلات';
$lang_modifyalb_php['reset_views_confirm'] = 'أنا متأكد';
$lang_modifyalb_php['notice1'] = '(*) يعتمد على %sإعدادات%s المجموعات'; // do not translate the %s placeholders
$lang_modifyalb_php['can_moderate'] = 'يمكن مراقبة الألبوم من قبل'; // cpg 1.5
$lang_modifyalb_php['admins_only'] = 'المدير فقط'; // cpg 1.5
$lang_modifyalb_php['alb_password'] = 'كلمة مرور الألبوم (كلمة مرور جديدة)';
$lang_modifyalb_php['alb_password_hint'] = 'تلميح كلمة مرور الألبوم';
$lang_modifyalb_php['edit_files'] = 'تعديل الملفات';
$lang_modifyalb_php['parent_category'] = 'القسم الأب';
$lang_modifyalb_php['thumbnail_view'] = 'عرض مصغرات';
$lang_modifyalb_php['random_image'] = 'صورة عشوائية'; // cpg 1.5
$lang_modifyalb_php['password_protect'] = 'الألبوم محمي بكلمة مرور؟ (إختر نعم)'; //cpg1.5
}

// ------------------------------------------------------------------------- //
// File phpinfo.php
// ------------------------------------------------------------------------- //
if (defined('PHPINFO_PHP')) {
$lang_phpinfo_php['php_info'] = 'معلومات PHP';
$lang_phpinfo_php['explanation'] = 'This is the output generated by the PHP function <a href="http://www.php.net/phpinfo">phpinfo()</a>, displayed within Coppermine.';
$lang_phpinfo_php['no_link'] = 'Having others see your phpinfo can be a security risk, that\'s why this page is only visible when you\'re logged in as admin. You cannot post a link to this page for others, they will be denied access.';
}

// ------------------------------------------------------------------------- //
// File picmgr.php
// ------------------------------------------------------------------------- //
if (defined('PICMGR_PHP')) {
$lang_picmgr_php['pic_mgr'] = 'مدير الصور';
$lang_picmgr_php['confirm_modifs'] = 'متأكد من عمل التعديلات؟'; // cpg1.5 // js-alert
$lang_picmgr_php['no_change'] = 'لم تقم بعمل تغييرات!';
$lang_picmgr_php['no_album'] = '* لا ألبوم *';
$lang_picmgr_php['explanation_header'] = 'The custom sort order you can specify on this page will only be taken into account if';
$lang_picmgr_php['explanation1'] = 'the admin has set the "Default sort order for files" in the config to "Position descending" or "Position ascending" (global setting for all users who haven\'t chosen another sort option individually)';
$lang_picmgr_php['explanation2'] = 'the user has chosen "Position descending" or "Position ascending" on the thumbnail page (per user setting)';
$lang_picmgr_php['change_album'] = 'If you change the album, your changes will be lost!'; // cpg1.5 // js-alert
$lang_picmgr_php['submit_reminder'] = 'Sorting changes are not saved until you click &quot;Apply changes&quot;.'; // cpg1.5
}


// ------------------------------------------------------------------------- //
// File pluginmgr.php
// ------------------------------------------------------------------------- //
if (defined('PLUGINMGR_PHP')){
$lang_pluginmgr_php['confirm_uninstall'] = 'Are you sure you want to UNINSTALL this plugin?';
$lang_pluginmgr_php['confirm_remove'] = 'NOTE: Plugin API is disabled. Do you want to MANUALLY REMOVE this plugin, ignoring any cleanup actions?'; // cpg1.5
$lang_pluginmgr_php['confirm_delete'] = 'Are you sure you want to DELETE this plugin?';
$lang_pluginmgr_php['pmgr'] = 'Plugin Manager';
$lang_pluginmgr_php['explanation'] = 'Install / uninstall / manage plugins using this page.'; // cpg1.5
$lang_pluginmgr_php['plugin_enabled'] = 'Plugin API enabled'; // cpg1.5
$lang_pluginmgr_php['name'] = 'Name';
$lang_pluginmgr_php['author'] = 'Author';
$lang_pluginmgr_php['desc'] = 'Description';
$lang_pluginmgr_php['vers'] = 'v';
$lang_pluginmgr_php['i_plugins'] = 'Installed Plugins';
$lang_pluginmgr_php['n_plugins'] = 'Plugins Not installed';
$lang_pluginmgr_php['none_installed'] = 'None Installed';
$lang_pluginmgr_php['operation'] = 'Operation';
$lang_pluginmgr_php['not_plugin_package'] = 'The file uploaded is not a plugin package.';
$lang_pluginmgr_php['copy_error'] = 'There was an error copying the package to the plugins folder.';
$lang_pluginmgr_php['upload'] = 'Upload';
$lang_pluginmgr_php['configure_plugin'] = 'Configure plugin';
$lang_pluginmgr_php['cleanup_plugin'] = 'Cleanup plugin';
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
$lang_rate_pic_php['already_rated'] = 'Sorry but you have already rated this file';
$lang_rate_pic_php['rate_ok'] = 'Your vote was accepted';
$lang_rate_pic_php['forbidden'] = 'You cannot rate your own files.';
}

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //
if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {
$lang_register_php['disclamer'] = <<< EOT
While the administrators of {SITE_NAME} will attempt to remove or edit any generally objectionable material as quickly as possible, it is impossible to review every post. Therefore you acknowledge that all posts made to this site express the views and opinions of the author and not the administrators or webmaster (except for posts by these people) and hence will not be held liable.<br />
<br />
You agree not to post any abusive, obscene, vulgar, slanderous, hateful, threatening, sexually-oriented or any other material that may violate any applicable laws. You agree that the webmaster, administrator and moderators of {SITE_NAME} have the right to remove or edit any content at any time should they see fit. As a user you agree to any information you have entered above being stored in a database. While this information will not be disclosed to any third party without your consent the webmaster and administrator cannot be held responsible for any hacking attempt that may lead to the data being compromised.<br />
<br />
This site uses cookies to store information on your local computer. These cookies serve only to improve your viewing pleasure. The email address is used only for confirming your registration details and password.<br />
<br />
By clicking 'I agree' below you agree to be bound by these conditions.
EOT;
$lang_register_php['page_title'] = 'تسجيل عضوية جديدة';
$lang_register_php['term_cond'] = 'شروط التسجيل';
$lang_register_php['i_agree'] = 'أوافق على هذه الشروط';
$lang_register_php['submit'] = 'إرسال';
$lang_register_php['err_user_exists'] = 'الإسم الذى اخترته موجود مسبقاً, برجاء إختيار اسم آخر';
$lang_register_php['err_global_pw'] = 'Invalid global registration password'; // cpg1.5
$lang_register_php['err_global_pass_same'] = 'Your password should be different from the global password'; // cpg1.5
$lang_register_php['err_duplicate_email'] = 'هناك عضوية أخرى مسجلة بهذا البريد الإلكترونى';
$lang_register_php['err_disclaimer'] = 'You need to agree to the disclaimer'; // cpg1.5
$lang_register_php['enter_info'] = 'Input registration information';
$lang_register_php['required_info'] = 'خانات مطلوبة';
$lang_register_php['optional_info'] = 'خانات إختيارية';
$lang_register_php['username'] = 'اسم العضوية';
$lang_register_php['password'] = 'كلمة السر';
$lang_register_php['password_again'] = 'أعد كتابة كلمة السر';
$lang_register_php['global_registration_pw'] = 'Global registration password'; // cpg1.5
$lang_register_php['email'] = 'البريد الإلكترونى';
$lang_register_php['location'] = 'المكان';
$lang_register_php['interests'] = 'الإهتمامات';
$lang_register_php['website'] = 'الموقع الشخصى';
$lang_register_php['occupation'] = 'المهنة';
$lang_register_php['error'] = 'خطأ';
$lang_register_php['confirm_email_subject'] = '%s - تفعيل العضوية';
$lang_register_php['information'] = 'معلومات';
$lang_register_php['failed_sending_email'] = 'فشل إرسال رسالة التأكيد لبريدك الإلكترونى';
$lang_register_php['thank_you'] = 'شكراً لإشتراكك.<br />تم إرسال رسالة إلى بريدك الإلكترونى لتفعيل عضويتك';
$lang_register_php['acct_created'] = 'تم عمل حسابك و يمكنك الأن تسجيل الدخول بإسم العضوية الذى اخترته';
$lang_register_php['acct_active'] = 'حسابك مفعل الأن ويمكنك تسجيل الدخول بإسم العضوية الذى اخترته';
$lang_register_php['acct_already_act'] = 'العضوية مفعلة بالفعل';
$lang_register_php['acct_act_failed'] = 'لا يمكن تفعيل هذه العضوية';
$lang_register_php['err_unk_user'] = 'العضو المحدد غير موجود';
$lang_register_php['x_s_profile'] = '%s\'s profile';
$lang_register_php['group'] = 'Group';
$lang_register_php['reg_date'] = 'Joined';
$lang_register_php['disk_usage'] = 'Disk usage';
$lang_register_php['change_pass'] = 'Change password';
$lang_register_php['current_pass'] = 'Current password';
$lang_register_php['new_pass'] = 'New password';
$lang_register_php['new_pass_again'] = 'New password again';
$lang_register_php['err_curr_pass'] = 'Current password is incorrect';
$lang_register_php['change_pass'] = 'Change my password';
$lang_register_php['update_success'] = 'Your profile was updated';
$lang_register_php['pass_chg_success'] = 'Your password was changed';
$lang_register_php['pass_chg_error'] = 'Your password was not changed';
$lang_register_php['notify_admin_email_subject'] = '%s - Registration notification';
$lang_register_php['last_uploads'] = 'Last uploaded file'; // cpg1.5
$lang_register_php['last_uploads_detail'] = 'Click to see all uploads by %s'; // cpg1.5
$lang_register_php['last_comments'] = 'Last comment'; // cpg1.5
$lang_register_php['you'] = 'you'; // cpg1.5
$lang_register_php['last_comments_detail'] = 'Click to see all comments made by %s'; // cpg1.5
$lang_register_php['notify_admin_email_body'] = 'A new user with the username "%s" has registered in your gallery';
$lang_register_php['pic_count'] = 'files uploaded';
$lang_register_php['notify_admin_request_email_subject'] = '%s - Registration request';
$lang_register_php['thank_you_admin_activation'] = 'Thank you.<br />Your request for account activation was sent to the admin. You will receive an email if approved.';
$lang_register_php['acct_active_admin_activation'] = 'The account is now active and an email has been sent to the user.';
$lang_register_php['notify_user_email_subject'] = '%s - Activation notification';
$lang_register_php['delete_my_account'] = 'Delete my user account'; // cpg1.5
$lang_register_php['warning_delete'] = 'Warning: deleting your account cannot be undone. The %sfiles you uploaded%s into public albums and %syour comments%s do not get deleted when deleting your user account! However, the files you uploaded into your personal gallery will be deleted.'; // cpg1.5 // The %s-placeholders mustn't be removed, they will later be replaced by the wrappers for the links
$lang_register_php['i_am_sure'] = 'I\'m sure that I want to delete my user account'; // cpg1.5
$lang_register_php['really_delete'] = 'Do you really want to delete your user account?'; // cpg1.5 // js-alert
$lang_register_php['edit_xs_profile'] = 'Edit the profile of %s'; // cpg1.5
$lang_register_php['edit_my_profile'] = 'Edit my profile'; // cpg1.5
$lang_register_php['none'] = 'none'; // cpg1.5
$lang_register_php['user_name_banned'] = 'The username you have chosen is not allowed/banned. Choose another user name'; // cpg1.5
$lang_register_php['email_address_banned'] = 'You are banned from this gallery. You are not allowed to re-register. Go away!'; // cpg1.5
$lang_register_php['email_warning1'] = 'The email address field mustn\'t be empty!'; // cpg1.5
$lang_register_php['email_warning2'] = 'The email address you entered is not valid. Review!'; // cpg1.5
$lang_register_php['username_warning1'] = 'The username field mustn\'t be empty!'; // cpg1.5
$lang_register_php['username_warning2'] = 'Username must be at least two characters long!'; // cpg1.5
$lang_register_php['password_warning1'] = 'The password must be at least two characters long!'; // cpg1.5
$lang_register_php['password_warning2'] = 'Username and password must be different!'; // cpg1.5
$lang_register_php['password_verification_warning1'] = 'The two passwords do not match, please enter them again!'; // cpg1.5
$lang_register_php['form_not_submit'] = 'The form hasn\'t been submit - there are errors that you need to correct first!'; // cpg1.5
$lang_register_php['banned'] = 'Banned!'; // cpg1.5

$lang_register_php['confirm_email'] = <<< EOT
Thank you for registering at {SITE_NAME}

In order to activate your account with username "{USER_NAME}", you need to click on the link below or copy and paste it in your web browser.
<a href="{ACT_LINK}">{ACT_LINK}</a>

Regards,

The management of {SITE_NAME}

EOT;

$lang_register_approve_email = <<< EOT
A new user with the username "{USER_NAME}" has registered in your gallery.
In order to activate the account, you need to click on the link below or copy and paste it in your web browser.

<a href="{ACT_LINK}">{ACT_LINK}</a>

EOT;

$lang_register_php['activated_email'] = <<< EOT
Your account has been approved and activated.

You can now log in at <a href="{SITE_LINK}">{SITE_LINK}</a> using the username "{USER_NAME}"


Regards,

The management of {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //
if (defined('REVIEWCOM_PHP')) {
$lang_reviewcom_php['title'] = 'Review comments';
$lang_reviewcom_php['no_comment'] = 'There are no comments to review';
$lang_reviewcom_php['n_comm_del'] = '%s comment(s) deleted';
$lang_reviewcom_php['n_comm_disp'] = 'Number of comments to display';
$lang_reviewcom_php['see_prev'] = 'See previous';
$lang_reviewcom_php['see_next'] = 'See next';
$lang_reviewcom_php['del_comm'] = 'Delete selected comments';
$lang_reviewcom_php['user_name'] = 'Name';
$lang_reviewcom_php['date'] = 'Date';
$lang_reviewcom_php['comment'] = 'Comment';
$lang_reviewcom_php['file'] = 'File';
$lang_reviewcom_php['name_a'] = 'User name ascending';
$lang_reviewcom_php['name_d'] = 'User name descending';
$lang_reviewcom_php['date_a'] = 'Date ascending';
$lang_reviewcom_php['date_d'] = 'Date descending';
$lang_reviewcom_php['comment_a'] = 'Comment message ascending';
$lang_reviewcom_php['comment_d'] = 'Comment message descending';
$lang_reviewcom_php['file_a'] = 'File ascending';
$lang_reviewcom_php['file_d'] = 'File descending';
$lang_reviewcom_php['approval_a'] = 'Approval ascending'; // cpg1.5
$lang_reviewcom_php['approval_d'] = 'Approval descending'; // cpg1.5
$lang_reviewcom_php['ip_a'] = 'IP address ascending'; // cpg1.5
$lang_reviewcom_php['ip_d'] = 'IP address descending'; // cpg1.5
$lang_reviewcom_php['akismet_a'] = 'Akismet rating (valid comments at the bottom)'; // cpg1.5
$lang_reviewcom_php['akismet_d'] = 'Akismet rating (valid comments at the top)'; // cpg1.5
$lang_reviewcom_php['n_comm_appr'] = '%s approved comment(s)'; // cpg1.5
$lang_reviewcom_php['n_comm_unappr'] = '%s unapproved comment(s)'; // cpg1.5
$lang_reviewcom_php['configuration_changed'] = 'Approval config changed'; // cpg1.5
$lang_reviewcom_php['only_approval'] = 'only display comments needing approval'; // cpg1.5
$lang_reviewcom_php['approval'] = 'Approved'; // cpg1.5
$lang_reviewcom_php['save_changes'] = 'Save changes'; // cpg1.5
$lang_reviewcom_php['n_confirm_delete'] = 'Do you really want to delete the selected comment(s)?'; // cpg1.5
$lang_reviewcom_php['with_selected'] = 'With selected'; // cpg1.5
$lang_reviewcom_php['delete'] = 'delete'; // cpg1.5
$lang_reviewcom_php['approve'] = 'approve'; // cpg1.5
$lang_reviewcom_php['disapprove'] = 'mark unapproved'; // cpg1.5
$lang_reviewcom_php['do_nothing'] = 'do nothing'; // cpg1.5
$lang_reviewcom_php['comment_approved'] = 'Comment approved'; // cpg1.5
$lang_reviewcom_php['comment_unapproved'] = 'Comment marked unapproved'; // cpg1.5
$lang_reviewcom_php['ban_and_delete'] = 'Ban user and delete comment(s)'; // cpg1.5
$lang_reviewcom_php['akismet_status'] = 'Akismet said'; // cpg1.5
$lang_reviewcom_php['is_spam'] = 'is spam'; // cpg1.5
$lang_reviewcom_php['is_not_spam'] = 'is not spam'; // cpg1.5
$lang_reviewcom_php['akismet'] = 'Akismet'; // cpg1.5
$lang_reviewcom_php['akismet_count'] = 'Akismet has found %s spam messages for you until now'; // cpg1.5
$lang_reviewcom_php['akismet_test_result'] = 'Test result for your Akismet API key %s'; // cpg1.5
$lang_reviewcom_php['invalid'] = 'invalid'; // cpg1.5
$lang_reviewcom_php['missing_gallery_url'] = 'You need to specify a gallery URL in Coppermine\'s config'; // cpg1.5
$lang_reviewcom_php['unable_to_connect'] = 'Unable to connect to akismet.com'; // cpg1.5
$lang_reviewcom_php['not_found'] = 'The target URL was not found. Maybe the site structure of akismet.com has changed.'; // cpg1.5
$lang_reviewcom_php['unknown_error'] = 'Unknown error'; // cpg1.5
$lang_reviewcom_php['error_message'] = 'The error message returned was'; // cpg1.5
$lang_reviewcom_php['ip_address'] = 'IP address'; // cpg1.5
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
$lang_sidebar_php['search'] = 'Search'; // cpg1.5
$lang_sidebar_php['reload'] = 'Reload'; // cpg1.5
}


// ------------------------------------------------------------------------- //
// File search.php
// ------------------------------------------------------------------------- //
if (defined('SEARCH_PHP')){
$lang_search_php['title'] = 'البحث';
$lang_search_php['submit_search'] = 'بحث';
$lang_search_php['keyword_list_title'] = 'Keyword list';
$lang_search_php['keyword_msg'] = 'The above list is not all inclusive. It does not include words from file titles or descriptions. Try a full-text search.';
$lang_search_php['edit_keywords'] = 'Edit keywords';
$lang_search_php['search in'] = 'Search in:';
$lang_search_php['ip_address'] = 'IP address';
$lang_search_php['imgfields'] = 'Search files';
$lang_search_php['albcatfields'] = 'Search albums and categories';
$lang_search_php['age'] = 'Age';
$lang_search_php['newer_than'] = 'Newer than';
$lang_search_php['older_than'] = 'Older than';
$lang_search_php['days'] = 'days';
$lang_search_php['all_words'] = 'Match all words (AND)';
$lang_search_php['any_words'] = 'Match any words (OR)';
$lang_search_php['regex'] = 'Match regular expressions';
$lang_search_php['album_title'] = 'Album titles';
$lang_search_php['category_title'] = 'Category titles';
}

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //
if (defined('SEARCHNEW_PHP')) {
$lang_search_new_php['page_title'] = 'Search new files';
$lang_search_new_php['select_dir'] = 'Select directory';
$lang_search_new_php['select_dir_msg'] = 'This function allows you to add a batch of files that you have uploaded to your server by FTP.<br />Select the directory where you have uploaded your files.';
$lang_search_new_php['no_pic_to_add'] = 'There is no file to add';
$lang_search_new_php['need_one_album'] = 'You need at least one album to use this function';
$lang_search_new_php['warning'] = 'Warning';
$lang_search_new_php['change_perm'] = 'the script can\'t write in this directory, you need to change its mode to 755 or 777 before trying to add the files!';
$lang_search_new_php['target_album'] = '<strong>Put files of &quot;</strong>%s<strong>&quot; into </strong>%s';
$lang_search_new_php['folder'] = 'Folder';
$lang_search_new_php['image'] = 'file';
$lang_search_new_php['result'] = 'Result';
$lang_search_new_php['dir_ro'] = 'Not writable. ';
$lang_search_new_php['dir_cant_read'] = 'Not readable. ';
$lang_search_new_php['insert'] = 'Adding new files to the gallery';
$lang_search_new_php['list_new_pic'] = 'List of new files';
$lang_search_new_php['insert_selected'] = 'Insert selected files';
$lang_search_new_php['no_pic_found'] = 'No new file was found';
$lang_search_new_php['be_patient'] = 'Please be patient, the script needs time to add the files';
$lang_search_new_php['no_album'] = 'no album selected';
$lang_search_new_php['result_icon'] = 'click for details or to reload';
$lang_search_new_php['notes'] = <<< EOT
    <ul>
        <li>%s: the file was successfully added</li>
        <li>%s: the file is a duplicate and is already in the database</li>
        <li>%s: the file could not be added, check your configuration and the permission of directories where the files are located</li>
        <li>%s: you need to select an album first</li>
        <li>%s: the file is broken or inacessible</li>
        <li>%s: unknown file type</li>
        <li>%s: the file is actually a GIF image</li>
        <li>If the icons do not appear click on the broken file to see any error message produced by PHP</li>
        <li>If your browser timeouts, hit the reload button</li>
    </ul>
EOT;
// Translator note: Do not translate the %s placeholders - they are being replaced with icons
$lang_search_new_php['check_all'] = 'تحديد الكل';
$lang_search_new_php['uncheck_all'] = 'إلغاء تحديد الكل';
$lang_search_new_php['no_folders'] = 'There are no folders inside the "albums" folder yet. Make sure to create at least one custom folder within "albums" folder and ftp-upload your files there. You mustn\'t upload to the "userpics" nor "edit" folders, they are reserved for http uploads and internal purposes.';
$lang_search_new_php['browse_batch_add'] = 'Browsable interface'; // cpg1.5
$lang_search_new_php['display_thumbs_batch_add'] = 'Display preview thumbnails'; // cpg1.5
$lang_search_new_php['edit_pics'] = 'Edit files';
$lang_search_new_php['edit_properties'] = 'Album properties';
$lang_search_new_php['view_thumbs'] = 'Thumbnail view';
$lang_search_new_php['add_more_folder'] = 'Batch-add more files from the folder %s'; // cpg1.5
}

// ------------------------------------------------------------------------- //
//File send_activation.php
// ------------------------------------------------------------------------- //
if (defined('SEND_ACTIVATION_PHP')) {
$lang_send_activation_php['err_already_logged_in'] = 'أنت مسجل الدخول بالفعل'; // cpg1.5
$lang_send_activation_php['activation_not_required'] = 'الموقع لا يحتاج إلى التفعيل البريدى'; // cpg1.5
$lang_send_activation_php['err_unk_user'] = 'العضو المطلوب غير موجود'; // cpg1.5
$lang_send_activation_php['resend_act_link'] = 'إعادة إرسال رسالة التفعيل'; // cpg1.5
$lang_send_activation_php['enter_email'] = 'رجاء كتابة بريدك الإلكترونى'; // cpg1.5
$lang_send_activation_php['submit'] = 'إرسال'; // cpg1.5
$lang_send_activation_php['failed_sending_email'] = 'فشل إرسال رسالة التفعيل'; // cpg1.5
$lang_send_activation_php['activation_email_sent'] = 'تم إرسال رسالة التفعيل إلى %s. رجاء فحص بريدك الإلكترونى لإكمال التفعيل'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File stat_details.php
// ------------------------------------------------------------------------- //

if (defined('STAT_DETAILS_PHP')) {
$lang_stat_details_php['show_hide'] = 'إظهار \ إخفاء هذا العمود';
$lang_stat_details_php['title'] = 'Statistic details'; // cpg1.5
$lang_stat_details_php['vote'] = 'تفاصيل التصويت';
$lang_stat_details_php['hits'] = 'تفاصيل النقر';
$lang_stat_details_php['stats'] = 'إحصاءات التصويت';
$lang_stat_details_php['users'] = 'إحصاءات الأعضاء';
$lang_stat_details_php['sdate'] = 'التاريخ';
$lang_stat_details_php['rating'] = 'التقييم';
$lang_stat_details_php['search_phrase'] = 'نص البحث';
$lang_stat_details_php['referer'] = 'الداعي';
$lang_stat_details_php['browser'] = 'المتصفح';
$lang_stat_details_php['os'] = 'نظام التشغيل';
$lang_stat_details_php['ip'] = 'IP';
$lang_stat_details_php['uid'] = 'العصو'; // cpg1.5
$lang_stat_details_php['sort_by_xxx'] = 'ترتيب حسب %s';
$lang_stat_details_php['ascending'] = 'تصاعديا';
$lang_stat_details_php['descending'] = 'تنازليا';
$lang_stat_details_php['internal'] = 'int';
$lang_stat_details_php['close'] = 'close';
$lang_stat_details_php['hide_internal_referers'] = 'hide internal referers';
$lang_stat_details_php['date_display'] = 'عرض التاريخ';
$lang_stat_details_php['records_per_page'] = 'سجل بكل صفحة';
$lang_stat_details_php['submit'] = 'ارسال \ تحديث';
$lang_stat_details_php['overall_stats'] = 'Overall Statistics'; // cpg1.5
$lang_stat_details_php['stats_by_os'] = 'Stats by operating systems'; // cpg1.5
$lang_stat_details_php['number_of_hits'] = 'عدد النقرات'; // cpg1.5
$lang_stat_details_php['total'] = 'المجموع'; // cpg1.5
$lang_stat_details_php['stats_by_browser'] = 'الإحصائات بالمستعرض'; // cpg1.5
$lang_stat_details_php['overall_stats_config'] = 'Overall stats configuration'; // cpg1.5
$lang_stat_details_php['hit_details'] = 'Keep detailed hit statistics'; // cpg1.5
$lang_stat_details_php['hit_details_explanation'] = 'Keep detailed hit statistics'; // cpg1.5
$lang_stat_details_php['vote_details'] = 'Keep detailed voting statistics'; // cpg1.5
$lang_stat_details_php['vote_details_explanation'] = 'Keep detailed voting statistics'; // cpg1.5
$lang_stat_details_php['empty_hits_table'] = 'Empty all hit stats'; // cpg1.5
$lang_stat_details_php['empty_hits_table_confirm'] = 'Are you absolutely sure that you want to delete ALL hit stat records for your ENTIRE gallery? This cannot be undone!'; // cpg1.5 // js-alert
$lang_stat_details_php['empty_votes_table'] = 'إفراغ كل إحصاءات الأصوات'; // cpg1.5
$lang_stat_details_php['empty_votes_table_confirm'] = 'Are you absolutely sure that you want to delete ALL voting records for your ENTIRE gallery? This cannot be undone!'; // cpg1.5 // js-alert
$lang_stat_details_php['submit'] = 'ارسال'; // cpg1.5
$lang_stat_details_php['upd_success'] = 'إعدادات Coppermine تم تحديثها'; // cpg1.5
$lang_stat_details_php['votes'] = 'أصوات'; // cpg1.5
$lang_stat_details_php['reset_votes_individual'] = 'إعادة تهيئة الصوت_الأصوات) المختارة'; // cpg1.5
$lang_stat_details_php['reset_votes_individual_confirm'] = 'Are you sure that you want to delete the selected votes? This cannot be undone!'; // cpg1.5
$lang_stat_details_php['back_to_intermediate'] = 'Back to intermediate file view'; // cpg1.5
$lang_stat_details_php['records_on_page'] = '%s سجل في  %s صفحه(صفحات)'; // cpg1.5
$lang_stat_details_php['guest'] = 'Guest'; // cpg1.5
$lang_stat_details_php['not_implemented'] = 'not implemented yet'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) {
$lang_upload_php['title'] = 'رفع ملف';
$lang_upload_php['restrictions'] = 'الشروط'; // cpg1.5
$lang_upload_php['choose_method'] = 'اختر طريقة الرفع'; // cpg1.5
$lang_upload_php['upload_swf'] = 'عدة ملفات - بإستخدام الفلاش (مفضل)'; // cpg1.5
$lang_upload_php['upload_single'] = 'طرقة أبسط - ملف واحد فى المرة الواحدة'; // cpg1.5
$lang_upload_php['up_instr_1'] = 'اختر ألبوم من القائمة المنسدلة للألبومات';
$lang_upload_php['up_instr_2'] = 'اضغط على زر الإستعراض لإختيار الملف التى ترغب فى رفعه من جهازك. يمكنك إختيار عدة ملفات فى مرة واحدة بإستخدام Ctrl+Click.';
$lang_upload_php['up_instr_3'] = 'إختر مزيد من الملفات للرفع بتكرار الخطوة رقم 2';
$lang_upload_php['up_instr_4'] = 'اضغط على زر "إستمرار" بعد إنتهاء رفع كل ملفاتك (خيار الإستمرار سيظهر فقط عند رفع ملف واحد على الأقل).';
$lang_upload_php['up_instr_5'] = 'سيتم نقلك إلى صفحة أخرى حيث يمكنك إضافة معلومات عن الملفات التى قمت برفعها. بعد ملئ الخانات يمكن الإنهاء بالضغط على "حفظ التغييرات" فى نهاية الصفحة';
$lang_upload_php['restriction_zip'] = 'الملفات المضغوطة التى تقوم برفعها ستظل مضغوطة, و لن يتم فك الضغط عنها فى السيرفر.';
$lang_upload_php['restriction_filesize'] = 'حجم الملفات التى تقوم برفعها لا يجب أن يتعدى %s لكل ملف.';
$lang_upload_php['reg_instr_1'] = 'Invalid action for form creation.';
$lang_upload_php['no_name'] = 'اسم الملف غير موجود'; // cpg 1.5
$lang_upload_php['no_tmp_name'] = 'غير قادر على الرفع'; // cpg 1.5
$lang_upload_php['no_post'] = 'File not uploaded by POST.';
$lang_upload_php['forb_ext'] = 'إمتداد ملف ممنوع رفعه';
$lang_upload_php['exc_php_ini'] = 'Exceeded filesize allowed in php.ini.';
$lang_upload_php['exc_file_size'] = 'Exceeded filesize permitted by CPG.';
$lang_upload_php['partial_upload'] = 'Only a partial upload.';
$lang_upload_php['no_upload'] = 'No upload occurred.';
$lang_upload_php['unknown_code'] = 'Unknown PHP upload error code.';
$lang_upload_php['impossible'] = 'Impossible to move.';
$lang_upload_php['not_image'] = 'Not an image/corrupt';
$lang_upload_php['not_GD'] = 'Not a GD extension.';
$lang_upload_php['pixel_allowance'] = 'طول أو عرض الملف المرفوع أعلى من المسموح فى الموقع';
$lang_upload_php['failure'] = 'فشل عملية الرفع';
$lang_upload_php['no_place'] = 'الملف السابق لا يمكن إستبداله';
$lang_upload_php['max_fsize'] = 'الحجم الأقصى المتاح هو %s';
$lang_upload_php['picture'] = 'صورة';
$lang_upload_php['pic_title'] = 'عنوان الصورة';
$lang_upload_php['description'] = 'وصف الصورة';
$lang_upload_php['keywords_sel'] = 'إختر كلمات مساعدة للبحث';
$lang_upload_php['err_no_alb_uploadables'] = 'نأسف, لا يوجد ألبومات يمكنك الرفع إليها';
$lang_upload_php['close'] = 'غلق';
$lang_upload_php['no_keywords'] = 'Sorry, no keywords available!';
$lang_upload_php['regenerate_dictionary'] = 'Regenerate dictionary';
$lang_upload_php['allowed_types'] = 'يمكنك فقط رفع ملفات بالإمتدادات التالية:'; // cpg1.5
$lang_upload_php['allowed_img_types'] = 'إمتداد الصور: %s'; // cpg1.5
$lang_upload_php['allowed_mov_types'] = 'إمتداد الفيديو: %s'; // cpg1.5
$lang_upload_php['allowed_doc_types'] = 'إمتداد المستندات: %s'; // cpg1.5
$lang_upload_php['allowed_snd_types'] = 'إمتداد الصوتيات: %s'; // cpg1.5
$lang_upload_php['please_wait'] = 'رجاء الإنتظار لحين رفع الملف..قد يأخذ ذلك بعض الوقت طبقاً لسرعة اتصالك بالأنترنت'; // cpg1.5
$lang_upload_php['alternative_upload'] = 'طريقة الرفع البديلة'; // cpg1.5
$lang_upload_php['xp_publish_promote'] = 'If you are running Windows XP/Vista, you can use the Windows XP Uploading Wizard as well to upload files, providing an easier user interface directly on the client.'; // cpg1.5
$lang_upload_php['err_js_disabled'] = 'واجهة الرفع الفلاشية لا يمكن تحميلها. يجب عليك تفعيل الجافا سكريبت فى متصفحك للإستفادة من الواجهة الفلاشية'; // cpg1.5
$lang_upload_php['err_flash_disabled'] = 'واجهة الرفع أخذت وقتاً طويلاً أو فشلت فى رفع الملف. رجاء التأكد من وجود الفلاش و تشغيله بشكل سليم فى متصفحك'; // cpg1.5
$lang_upload_php['err_alternate_method'] = 'بدلاً من ذلك يمكنك إستخدام <a href="upload.php?single=1">single</a> واجهة الرفع البسيطة'; // cpg1.5
$lang_upload_php['err_flash_version'] = 'واجهة الرفع لا يمكن تحميلها. ربما تحتاج إلى تحميل مشغل الفلاش أو تحديثه. رجاء زيارة <a href="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash">Adobe website</a> to get the Flash Player.'; // cpg1.5
$lang_upload_php['flash_loading'] = 'يتم تحميل واجهة الرفع الأن. رجاء الإنتظار لحظات...'; // cpg1.5

$lang_upload_swf_php['browse'] = 'إستعراض...'; //cpg1.5
$lang_upload_swf_php['cancel_all'] = 'إلغاء جميع عمليات الرفع'; //cpg1.5
$lang_upload_swf_php['upload_queue'] = 'إنتظار عملية الرفع'; //cpg1.5
$lang_upload_swf_php['files_uploaded'] = 'تم رفع الملفات'; //cpg1.5
$lang_upload_swf_php['all_files'] = 'كل الملفات'; //cpg1.5
$lang_upload_swf_php['status_pending'] = 'إنتظار...'; //cpg1.5
$lang_upload_swf_php['status_uploading'] = 'عملية الرفع جارية...'; //cpg1.5
$lang_upload_swf_php['status_complete'] = 'تم بنجاح'; //cpg1.5
$lang_upload_swf_php['status_cancelled'] = 'تم إلغائه'; //cpg1.5
$lang_upload_swf_php['status_stopped'] = 'توقف'; //cpg1.5
$lang_upload_swf_php['status_failed'] = 'فشلت عملية الرفع'; //cpg1.5
$lang_upload_swf_php['status_too_big'] = 'الملف كبير جدا'; //cpg1.5
$lang_upload_swf_php['status_zero_byte'] = 'لا يمكن رفع ملفات حجمها 0 كيلوبايت'; //cpg1.5
$lang_upload_swf_php['status_invalid_type'] = 'نوع ملف غير مدعوم'; //cpg1.5
$lang_upload_swf_php['status_unhandled'] = 'خطأ غير معروف'; //cpg1.5
$lang_upload_swf_php['status_upload_error'] = 'خطأ فى عملية الرفع: '; //cpg1.5
$lang_upload_swf_php['status_server_error'] = 'Server (IO) Error'; //cpg1.5
$lang_upload_swf_php['status_security_error'] = 'خطأ أمنى'; //cpg1.5
$lang_upload_swf_php['status_upload_limit'] = 'تخطيت الحد الأقصى للرفع'; //cpg1.5
$lang_upload_swf_php['status_validation_failed'] = 'Failed Validation. Upload skipped.'; //cpg1.5
$lang_upload_swf_php['queue_limit'] = 'لقد حاولت وضع ملفات كثيرة فى طابور الإنتظار'; //cpg1.5
$lang_upload_swf_php['upload_limit_1'] = 'لقد وصلت إلى الحد الأقصى للمفات المرفوعة'; //cpg1.5
$lang_upload_swf_php['upload_limit_2'] = 'يمكنك إختيار عدد ملفات حتى %s ملفات'; //cpg1.5
}
// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //
if (defined('USERMGR_PHP')) {
$lang_usermgr_php['memberlist'] = 'Memberlist';
$lang_usermgr_php['user_manager'] = 'User manager';
$lang_usermgr_php['title'] = 'Manage users';
$lang_usermgr_php['name_a'] = 'Name ascending';
$lang_usermgr_php['name_d'] = 'Name descending';
$lang_usermgr_php['group_a'] = 'Group ascending';
$lang_usermgr_php['group_d'] = 'Group descending';
$lang_usermgr_php['reg_a'] = 'Reg date ascending';
$lang_usermgr_php['reg_d'] = 'Reg date descending';
$lang_usermgr_php['pic_a'] = 'File count ascending';
$lang_usermgr_php['pic_d'] = 'File count descending';
$lang_usermgr_php['disku_a'] = 'Disk usage ascending';
$lang_usermgr_php['disku_d'] = 'Disk usage descending';
$lang_usermgr_php['lv_a'] = 'Last visit ascending';
$lang_usermgr_php['lv_d'] = 'Last visit descending';
$lang_usermgr_php['sort_by'] = 'Sort users by';
$lang_usermgr_php['err_no_users'] = 'User table is empty!';
$lang_usermgr_php['err_edit_self'] = 'You can\'t edit your own profile, use the \'My profile\' link for that';
$lang_usermgr_php['with_selected'] = 'With selected:';
$lang_usermgr_php['delete_files_no'] = 'keep public files (but anonymize)';
$lang_usermgr_php['delete_files_yes'] = 'delete public files as well';
$lang_usermgr_php['delete_comments_no'] = 'keep comments (but anonymize)';
$lang_usermgr_php['delete_comments_yes'] = 'delete comments as well';
$lang_usermgr_php['activate'] = 'Activate';
$lang_usermgr_php['deactivate'] = 'Deactivate';
$lang_usermgr_php['reset_password'] = 'Reset Password';
$lang_usermgr_php['change_primary_membergroup'] = 'Change primary membergroup';
$lang_usermgr_php['add_secondary_membergroup'] = 'Add secondary membergroup';
$lang_usermgr_php['name'] = 'User name';
$lang_usermgr_php['group'] = 'Group';
$lang_usermgr_php['inactive'] = 'Inactive';
$lang_usermgr_php['operations'] = 'Operations';
$lang_usermgr_php['pictures'] = 'Files';
$lang_usermgr_php['disk_space_used'] = 'Space used';
$lang_usermgr_php['disk_space_quota'] = 'Quota'; // cpg1.5
$lang_usermgr_php['registered_on'] = 'Registration';
$lang_usermgr_php['last_visit'] = 'Last visit';
$lang_usermgr_php['u_user_on_p_pages'] = '%d users on %d page(s)';
$lang_usermgr_php['confirm_del'] = 'Are you sure you want to DELETE this user?\\nAll his/her files and albums will also be deleted.'; // js-alert
$lang_usermgr_php['mail'] = 'MAIL';
$lang_usermgr_php['err_unknown_user'] = 'Selected user does not exist!';
$lang_usermgr_php['modify_user'] = 'Modify user';
$lang_usermgr_php['notes'] = 'Notes';
$lang_usermgr_php['note_list'] = 'If you don\'t want to change the current password, leave the "password" field blank';
$lang_usermgr_php['password'] = 'Password';
$lang_usermgr_php['user_active'] = 'User is active';
$lang_usermgr_php['user_group'] = 'User group';
$lang_usermgr_php['user_email'] = 'User email';
$lang_usermgr_php['user_web_site'] = 'User web site';
$lang_usermgr_php['create_new_user'] = 'Create new user';
$lang_usermgr_php['user_location'] = 'User location';
$lang_usermgr_php['user_interests'] = 'User interests';
$lang_usermgr_php['user_occupation'] = 'User occupation';
$lang_usermgr_php['user_profile1'] = '$user_profile1';
$lang_usermgr_php['user_profile2'] = '$user_profile2';
$lang_usermgr_php['user_profile3'] = '$user_profile3';
$lang_usermgr_php['user_profile4'] = '$user_profile4';
$lang_usermgr_php['user_profile5'] = '$user_profile5';
$lang_usermgr_php['user_profile6'] = '$user_profile6';
$lang_usermgr_php['latest_upload'] = 'Recent uploads';
$lang_usermgr_php['no_latest_upload'] = 'Has not uploaded any files'; // cpg1.5
$lang_usermgr_php['last_comments'] = 'Last comments'; // cpg1.5
$lang_usermgr_php['no_last_comments'] = 'Has not made any comments'; // cpg1.5
$lang_usermgr_php['comments'] = 'Comments'; // cpg1.5
$lang_usermgr_php['never'] = 'never';
$lang_usermgr_php['search'] = 'User search';
$lang_usermgr_php['submit'] = 'Submit';
$lang_usermgr_php['search_submit'] = 'Go!';
$lang_usermgr_php['search_result'] = 'Search results for: ';
$lang_usermgr_php['alert_no_selection'] = 'You have to select at least one user first!'; // js-alert
$lang_usermgr_php['select_group'] = 'Select group';
$lang_usermgr_php['groups_alb_access'] = 'Album permissions by group';
$lang_usermgr_php['category'] = 'Category';
$lang_usermgr_php['modify'] = 'Modify?';
$lang_usermgr_php['group_no_access'] = 'This group has no special access';
$lang_usermgr_php['notice'] = 'Notice';
$lang_usermgr_php['group_can_access'] = 'Album(s) that only "%s" can access';
$lang_usermgr_php['send_login_data'] = 'Send login data to this user (Password will be sent via email)'; // cpg1.5
$lang_usermgr_php['send_login_email_subject'] = 'Your new account information'; // cpg1.5
$lang_usermgr_php['failed_sending_email'] = 'The login data email can\'t be sent!'; // cpg1.5
$lang_usermgr_php['view_profile'] = 'View profile'; // cpg1.5
$lang_usermgr_php['edit_profile'] = 'Edit profile'; // cpg1.5
$lang_usermgr_php['ban_user'] = 'Ban user'; // cpg1.5
$lang_usermgr_php['user_is_banned'] = 'User is banned'; // cpg1.5
$lang_usermgr_php['status'] = 'Status'; // cpg1.5
$lang_usermgr_php['status_active'] = 'active'; // cpg1.5
$lang_usermgr_php['status_inactive'] = 'not active'; // cpg1.5
$lang_usermgr_php['total'] = 'Total'; // cpg1.5
$lang_usermgr_php['send_login_data_email'] = <<< EOT
تم إنشاء حسابك بنجاح فى {SITE_NAME}.

يمكنك الأن تسجيل الدخول عبر <a href="{SITE_LINK}">{SITE_LINK}</a> بإستخدام اسم العضو "{USER_NAME}" و رمز المرور "{USER_PASS}"


أطيب التمنيات,

إدارة {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File update.php
// ------------------------------------------------------------------------- //
if (defined('UPDATE_PHP')) {
$lang_update_php['title'] = 'Updater'; // cpg1.5
$lang_update_php['welcome_updater'] = 'Welcome to Coppermine update'; // cpg1.5
$lang_update_php['could_not_authenticate'] = 'Could not authenticate you'; // cpg1.5
$lang_update_php['provide_admin_account'] = 'Please provide your Coppermine admin account details or your MySQL account data'; // cpg1.5
$lang_update_php['try_again'] = 'Try again'; // cpg1.5
$lang_update_php['mysql_connect_error'] = 'Could not create a MySQL connection'; // cpg1.5
$lang_update_php['mysql_database_error'] = 'MySQL could not locate a database called %s'; // cpg1.5
$lang_update_php['mysql_said'] = 'MySQL said'; // cpg1.5
$lang_update_php['check_config_file'] = 'Please check the MySQL details in %s'; // cpg1.5
$lang_update_php['performing_database_updates'] = 'Performing Database Updates'; // cpg1.5
$lang_update_php['performing_file_updates'] = 'Performing File Updates'; // cpg1.5
$lang_update_php['already_done'] = 'Already Done'; // cpg1.5
$lang_update_php['password_encryption'] = 'Encryption of passwords'; // cpg1.5
$lang_update_php['alb_password_encryption'] = 'Encryption of album passwords'; // cpg1.5
$lang_update_php['category_tree'] = 'Category tree'; // cpg1.5
$lang_update_php['authentication_needed'] = 'Authentication needed'; // cpg1.5
$lang_update_php['username'] = 'Username'; // cpg1.5
$lang_update_php['password'] = 'Password'; // cpg1.5
$lang_update_php['update_completed'] = 'Update completed'; // cpg1.5
$lang_update_php['check_versions'] = 'It\'s recommended to %scheck your file versions%s if you just upgraded from an older version of Coppermine'; // cpg1.5 // Leave the %s untouched when translating - it wraps the link
$lang_update_php['start_page'] = 'If you didn\'t (or you don\'t want to check), you can go to %syour gallery\'s start page%s'; // cpg1.5 // Leave the %s untouched when translating - it wraps the link
$lang_update_php['errors_encountered'] = 'The following errors were encountered and need to be corrected first'; // cpg1.5
$lang_update_php['delete_file'] = 'Delete %s'; // cpg1.5
$lang_update_php['could_not_delete'] = 'Could not delete due to missing permissions. Delete the file manually!'; // cpg1.5
$lang_update_php['rename_file'] = 'Rename %s to %s'; // cpg1.5
$lang_update_php['could_not_rename'] = 'Could not rename due to missing permissions. Rename the file manually!'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //
if (defined('UTIL_PHP')) {
$lang_util_php['title'] = 'Admin tools'; // cpg1.5
$lang_util_php['file'] = 'File';
$lang_util_php['problem'] = 'Problem';
$lang_util_php['status'] = 'Status';
$lang_util_php['title_set_to'] = 'title set to';
$lang_util_php['submit_form'] = 'submit';
$lang_util_php['titles_updated'] = '%s Titles Updated.'; // cpg1.5
$lang_util_php['updated_successfully'] = 'updated successfully'; // cpg1.5
$lang_util_php['error_create'] = 'ERROR creating';
$lang_util_php['continue'] = 'Process more files'; // cpg1.5
$lang_util_php['main_success'] = 'The file %s was successfully used as main file';
$lang_util_php['error_rename'] = 'Error renaming %s to %s';
$lang_util_php['error_not_found'] = 'The file %s was not found';
$lang_util_php['back'] = 'back to Admin tools start'; // cpg1.5
$lang_util_php['thumbs_wait'] = 'Updating thumbnails and/or resized images, please wait...';
$lang_util_php['thumbs_continue_wait'] = 'Continuing to update thumbnails and/or resized images...';
$lang_util_php['titles_wait'] = 'Updating titles, please wait...';
$lang_util_php['delete_wait'] = 'Deleting titles, please wait...';
$lang_util_php['replace_wait'] = 'Deleting originals and replacing them with resized images, please wait..';
$lang_util_php['update'] = 'Update thumbs and/or resized photos';
$lang_util_php['update_what'] = 'What should be updated';
$lang_util_php['update_thumb'] = 'Only thumbnails';
$lang_util_php['update_pic'] = 'Only resized pictures';
$lang_util_php['update_both'] = 'Both thumbnails and resized pictures';
$lang_util_php['update_number'] = 'Number of processed images per click';
$lang_util_php['update_option'] = '(Try setting this option lower if you experience timeout problems)';
$lang_util_php['update_missing'] = 'Only update missing files'; // cpg1.5
$lang_util_php['filename_title'] = 'Filename &rArr; File title';
$lang_util_php['filename_how'] = 'How should the file title be modified';
$lang_util_php['filename_remove'] = 'Remove extension (.jpg or other) and replace _ (underscores) with spaces'; // cpg1.5
$lang_util_php['filename_euro'] = 'Change 2003_11_23_13_20_20.jpg to 23/11/2003 13:20';
$lang_util_php['filename_us'] = 'Change 2003_11_23_13_20_20.jpg to 11/23/2003 13:20';
$lang_util_php['filename_time'] = 'Change 2003_11_23_13_20_20.jpg to 13:20';
$lang_util_php['notitle'] = 'Apply only for files with empty titles'; // cpg1.5
$lang_util_php['delete_title'] = 'Delete file titles';
$lang_util_php['delete_title_explanation'] = 'This will remove all titles on files in the album you specify.';
$lang_util_php['delete_original'] = 'Delete original size photos';
$lang_util_php['delete_original_explanation'] = 'This will remove the full sized pictures.';
$lang_util_php['delete_intermediate'] = 'Delete intermediate pictures';
$lang_util_php['delete_intermediate_explanation1'] = 'This will delete intermediate (normal) pictures.'; // cpg1.5
$lang_util_php['delete_intermediate_explanation2'] = 'Use this to free up disk space if you have disabled \'Create intermediate pictures\' in config after adding pictures.'; // cpg1.5
$lang_util_php['delete_intermediate_check'] = 'The config option \'Create intermediate pictures\' is currently %s.'; // cpg1.5
$lang_util_php['no_image'] = '%s has been skipped because it is not an image.'; // cpg1.5
$lang_util_php['enabled'] = 'enabled'; // cpg1.5
$lang_util_php['disabled'] = 'disabled'; // cpg1.5
$lang_util_php['delete_replace'] = 'Deletes the original images replacing them with the sized versions';
$lang_util_php['titles_deleted'] = 'All titles in specified album removed';
$lang_util_php['deleting_intermediates'] = 'Deleting intermediate images, please wait...';
$lang_util_php['searching_orphans'] = 'Searching for orphans, please wait...';
$lang_util_php['delete_orphans'] = 'Delete comments on missing files';
$lang_util_php['delete_orphans_explanation'] = 'This will identify and allow you to delete any comments associated with files no longer in the gallery.<br />Checks all albums.';
$lang_util_php['update_full_normal_thumb'] = 'Everything: full-sized, resized and thumbs'; // cpg1.5
$lang_util_php['update_full_normal'] = 'Both resized and full sized (if an original copy is available)'; // cpg1.5
$lang_util_php['update_full'] = 'Just full sized (if an original copy is available)'; // cpg1.5
$lang_util_php['delete_back'] = 'Delete original image backup for watermarked images'; // cpg1.5
$lang_util_php['delete_back_explanation'] = 'This will delete the backup image. You will save some disk space but not be able anymore to undo the watermark!!! After that the watermark will be permanent.'; // cpg1.5
$lang_util_php['finished'] = '<br />Finished updating thumbs/images!<br />'; // cpg1.5
$lang_util_php['autorefresh'] = 'Auto refresh (no need to click continue button anymore)'; // cpg1.5
$lang_util_php['refresh_db'] = 'Reload file dimensions and size information.';
$lang_util_php['refresh_db_explanation'] = 'This will re-read file sizes and dimensions. Use this if quota\'s are incorrect or you have changed the files manually.';
$lang_util_php['reset_views'] = 'Reset view counters';
$lang_util_php['reset_views_explanation'] = 'Sets all file view counts to zero in the album specified.';
$lang_util_php['reset_success'] = 'Reset successful'; // cpg1.5
$lang_util_php['orphan_comment'] = 'تعليقات يتيمة وجدت';
$lang_util_php['delete_all'] = 'حذف الكل';
$lang_util_php['delete_all_orphans'] = 'حذف كل اليتامى?';
$lang_util_php['comment'] = 'تعليقات: ';
$lang_util_php['nonexist'] = 'مرفق بملف غير موجود # ';
$lang_util_php['delete_old'] = 'Delete files that are older than a set number of days'; // cpg1.5
$lang_util_php['delete_old_explanation'] = 'This will delete files that are older than the number of days you specify (full-size, intermediate, thumbnails). Use this feature to free up disk space.'; // cpg1.5
$lang_util_php['delete_old_warning'] = 'Warning: the files you specify will be deleted for good without further warnings!'; // cpg1.5
$lang_util_php['deleting_old'] = 'Deleting older images, please wait...'; // cpg1.5
$lang_util_php['older_than'] = 'Delete files older than %s days'; // cpg1.5
$lang_util_php['del_orig'] = 'The original file %s was successfully deleted'; // cpg1.5
$lang_util_php['del_intermediate'] = 'The intermediate image %s was successfully deleted'; // cpg1.5
$lang_util_php['del_thumb'] = 'The thumbnail %s was successfully deleted'; // cpg1.5
$lang_util_php['del_error'] = 'حذف الخطأ %s!'; // cpg1.5
$lang_util_php['affected_records'] = '%s سجلات متأثرة.'; // cpg1.5
$lang_util_php['all_albums'] = 'جميع الألبومات'; // cpg1.5
$lang_util_php['update_result'] = 'نتائج التحديث'; // cpg1.5
$lang_util_php['incorrect_filesize'] = 'الحجم الكلي للملف غير صحيح'; // cpg1.5
$lang_util_php['database'] = 'قاعدة البيانات: '; // cpg1.5
$lang_util_php['bytes'] = ' بايت'; // cpg1.5
$lang_util_php['actual'] = 'الحقيقي: '; // cpg1.5
$lang_util_php['updated'] = 'محدث'; // cpg1.5
$lang_util_php['filesize_error'] = 'Could not obtain file size (may be invalid file), skipping....'; // cpg1.5
$lang_util_php['skipped'] = 'تم تخطيه'; // cpg1.5
$lang_util_php['incorrect_dimension'] = 'Dimensions are incorrect'; // cpg1.5
$lang_util_php['dimension_error'] = 'Could not obtain dimension info, skipping....'; // cpg1.5
$lang_util_php['cannot_fix'] = 'Cannot fix'; // cpg1.5
$lang_util_php['fullpic_error'] = 'File %s does not exist!'; // cpg1.5
$lang_util_php['no_prob_detect'] = 'No problems detected'; // cpg1.5
$lang_util_php['no_prob_found'] = 'No problems were found.'; // cpg1.5
$lang_util_php['keyword_convert'] = 'Convert keyword separator'; // cpg1.5
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
$lang_versioncheck_php['title'] = 'التحقق من الإصدار';
$lang_versioncheck_php['versioncheck_output'] = 'مخرجات التحقق من الإصدار';
$lang_versioncheck_php['file'] = 'ملف';
$lang_versioncheck_php['folder'] = 'مجلد';
$lang_versioncheck_php['outdated'] = 'أقدم من %s';
$lang_versioncheck_php['newer'] = 'أحدث من %s';
$lang_versioncheck_php['modified'] = 'معدل';
$lang_versioncheck_php['not_modified'] = 'غير معدل'; // cpg1.5
$lang_versioncheck_php['needs_change'] = 'تغيير الإحتياجات';
$lang_versioncheck_php['review_permissions'] = 'مراجعة التصاريح';
$lang_versioncheck_php['inaccessible'] = 'الملف لا يمكن قراءته';
$lang_versioncheck_php['review_version'] = 'ملفك قديم';
$lang_versioncheck_php['review_dev_version'] = 'ملفك أحدث من الملف الذي تنتظره';
$lang_versioncheck_php['review_modified'] = 'ربما يكون الملف معطوبا (أو أنك قمت بتعديله بقصد)';
$lang_versioncheck_php['review_missing'] = '%s مفقود أو لا يمكن قراءته';
$lang_versioncheck_php['existing'] = 'موجود';
$lang_versioncheck_php['review_removed_existing'] = 'الملف يجب حذفه لأسباب أمنية';
$lang_versioncheck_php['counter'] = 'العداد';
$lang_versioncheck_php['type'] = 'النوع';
$lang_versioncheck_php['path'] = 'المسار';
$lang_versioncheck_php['missing'] = 'مفقود';
$lang_versioncheck_php['permissions'] = 'التصاريح';
$lang_versioncheck_php['version'] = 'إصدار';
$lang_versioncheck_php['revision'] = 'مراجعة';
$lang_versioncheck_php['modified'] = 'معدل';
$lang_versioncheck_php['comment'] = 'تعليق';
$lang_versioncheck_php['help'] = 'مساعدة';
$lang_versioncheck_php['repository_link'] = 'Repository link';
$lang_versioncheck_php['browse_corresponding_page_subversion'] = 'Browse page corresponding to this file in the project\'s subversion repository';
$lang_versioncheck_php['mandatory'] = 'أساسي';
$lang_versioncheck_php['mandatory_missing'] = 'ملف أساسي مفقود'; // cpg1.5
$lang_versioncheck_php['optional'] = 'اختياري';
$lang_versioncheck_php['removed'] = 'محذوف'; // cpg1.5
$lang_versioncheck_php['options'] = 'خيارات';
$lang_versioncheck_php['display_output'] = 'عرض المخرج';
$lang_versioncheck_php['on_screen'] = 'ملء الشاشة';
$lang_versioncheck_php['text_only'] = 'نص فقط';
$lang_versioncheck_php['errors_only'] = 'عرض الأخطاء الكامنة فقط';
$lang_versioncheck_php['hide_images'] = 'اخفاء الصور'; // cpg1.5
$lang_versioncheck_php['no_modification_check'] = 'Don\'t check for modified files'; // cpg1.5
$lang_versioncheck_php['do_not_connect_to_online_repository'] = 'Do not connect to the online repository';
$lang_versioncheck_php['online_repository_explain'] = 'only recommended if connection fails';
$lang_versioncheck_php['submit'] = 'ارسال \ تحديث';
$lang_versioncheck_php['select_all'] = 'اختيار الكل'; // js-alert
$lang_versioncheck_php['files_folder_processed'] = 'Displaying %s items of %s folders/files processed with %s potential issues';
$lang_versioncheck_php['read'] = 'قراءة'; // cpg1.5
$lang_versioncheck_php['write'] = 'كتابة'; // cpg1.5
$lang_versioncheck_php['warning'] = 'تحذير'; // cpg1.5
$lang_versioncheck_php['not_applicable'] = 'غير موجود'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File view_log.php
// ------------------------------------------------------------------------- //
if (defined('VIEWLOG_PHP')) {
$lang_viewlog_php['delete_all'] = 'حذف جميع السجلات';
$lang_viewlog_php['delete_this'] = 'حذف هذا السجل';
$lang_viewlog_php['view_logs'] = 'عرض السجلات';
$lang_viewlog_php['no_logs'] = 'لم تنشأ سجلات.';
$lang_viewlog_php['last_updated'] = 'آخر تحدبث'; // cpg1.5
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
$lang_plugin_php['usergal_alphatabs_config_name'] = 'ألسنة أبجدية لألبوم العضو'; // cpg1.5
$lang_plugin_php['usergal_alphatabs_config_description'] = 'ماذا تعمل: تعرض ألسنة من A إلى Z في أعلى ألبومات العضو يمكن للزوار النقر عليها للذهاب مباشرة للصفة التي تعرض جميع ألبومات العضو للأعضاء الذين تبدأ أسمائهم بذلك الحرف. الإضافة البرمجية ينصح بها فقط اذا كان هناك عدد كبير من ألبومات العضو.'; // cpg1.5
$lang_plugin_php['usergal_alphatabs_jump_by_username'] = 'الذهاب عن طريق اسم العضو'; // cpg1.5
$lang_plugin_php['sample_config_name'] = 'عينة إضافة برمجية'; // cpg1.5
$lang_plugin_php['sample_config_description'] = 'هذه عينة إضافة برمجيةplugin. لا تعمل أي شي مفيد بالتحديد - ولكنها عنيت لتشرح كيفية عمل الإضافات البرمجية وكيف يتم برمجتها. عندما يتم تفعيلها سوف تعرض عينة نص بالأحمر.'; // cpg1.5
$lang_plugin_php['sample_plugin_documentation'] = 'وثائق الإضافات البرمجية Plugins'; // cpg1.5
$lang_plugin_php['sample_plugin_support'] = 'الدعم الفني للإضافات البرمجية Plugin'; // cpg1.5
$lang_plugin_php['sample_install_explain'] = 'أدخل اسم المستخدم (\'foo\') وكلمة المرور (\'bar\') للتثبيت'; // cpg1.5
$lang_plugin_php['sample_install_username'] = 'اسم المستخدم'; // cpg1.5
$lang_plugin_php['sample_install_password'] = 'كلمة المرور'; // cpg1.5
$lang_plugin_php['sample_output'] = 'هذه عينة بيانات مرجوعة من عينة الإضافة البرمجية plugin'; // cpg1.5
$lang_plugin_php['opensearch_config_name'] = 'OpenSearch'; // cpg1.5
$lang_plugin_php['opensearch_config_description'] = 'تنفيذ من <a href="http://www.opensearch.org/" rel="external" class="external">OpenSearch</a> لـ Coppermine.<br />عند تفعيلها, يمكن للزوار اضافة معرضك إلى شريط البحث.'; // cpg1.5
$lang_plugin_php['opensearch_search'] = 'بحث %s'; // cpg1.5
$lang_plugin_php['opensearch_extra'] = 'ربما تود إضافة شرح عما تقوم به هذه الإضافة البرمجية Plugins عما تقوم به'; // cpg1.5
$lang_plugin_php['opensearch_failed_to_open_file'] = 'أخفق في محاولة فتح الملف %s - راجع التصاريح'; // cpg1.5
$lang_plugin_php['opensearch_failed_to_write_file'] = 'أخفق في محاولة الكتابة على الملف %s - راجع التصاريح'; // cpg1.5
$lang_plugin_php['opensearch_form_header'] = 'أدخل التفاصيل المراد وضعها في ملف الوثائق'; // cpg1.5
$lang_plugin_php['opensearch_gallery_url'] = 'رابط المعرض (يجب أن يكون صحيحا)'; // cpg1.5
$lang_plugin_php['opensearch_display_name'] = 'الإسم كما هو معروض في المتصفح'; // cpg1.5
$lang_plugin_php['opensearch_description'] = 'الوصف'; // cpg1.5
$lang_plugin_php['opensearch_character_limit'] = '%s حد الحروف'; // cpg1.5
$lang_plugin_php['onlinestats_description'] = 'يعرض صندوق في كل ألبوم يحوي الأعضاء والزوار المتصلين.';
$lang_plugin_php['onlinestats_name'] = 'من متواجد?';
$lang_plugin_php['onlinestats_config_extra'] = 'لتفعيل هذه الإضافة البرمجية (جعلها تظهر الإحصائات الحية), النص "onlinestats" (مفصولة بخط مائل) أضيفت إلى الصفحة الرئيسية في <a href="admin.php">إعدادات Coppermine</a> تحت مسمى "عرض قائمة الألبوم". الإعدادات الآن سوف تبدو شبيهة بي "breadcrumb/catlist/alblist/onlinestats". لتغيير مكان الصندوق انقل النص "onlinestats" حول حقل الإعدادات ذاك.';
$lang_plugin_php['onlinestats_config_install'] = 'هذه الإضافة تعمل على تشغيل مهام على قاعدة البيانات كل مرة تقوم بتشغيلها, تستهلك المعالج وموارده. إذا كان معرضك بطيئا أو عليه الكثير من الأعضاء, لا ينبغي لك استخدام هذه الإضافة.';
$lang_plugin_php['onlinestats_we_have_reg_member'] = 'هناك %s عضو مسجل';
$lang_plugin_php['onlinestats_we_have_reg_members'] = ' هناك %s أعضاء مسجلين';
$lang_plugin_php['onlinestats_most_recent'] = 'العضو الجديد هو %s';
$lang_plugin_php['onlinestats_is'] = 'كليا هناك %s زائر متصل';
$lang_plugin_php['onlinestats_are'] = 'كليا هناك %s زوار متصلون';
$lang_plugin_php['onlinestats_and'] = 'و';
$lang_plugin_php['onlinestats_reg_member'] = '%s عضو مسجل';
$lang_plugin_php['onlinestats_reg_members'] = '%s أعضاء مسجلين';
$lang_plugin_php['onlinestats_guest'] = '%s ضيف';
$lang_plugin_php['onlinestats_guests'] = '%s ضيوف';
$lang_plugin_php['onlinestats_record'] = 'أكثر عدد تواجد أعضاء هو: %s في %s';
$lang_plugin_php['onlinestats_since'] = 'الأعضاء المسجلون الذين تواجدوا خلال %s دقيقة: %s';
$lang_plugin_php['onlinestats_config_text'] = 'إلى متى تود الإحتفاظ بالأعضاء متصلين قبل أن يتم إعتبارهم رحلوا؟';
$lang_plugin_php['onlinestats_minute'] = 'دقائق';
$lang_plugin_php['onlinestats_remove'] = 'حذف الجداول التي كانت تحوي معلومات المتصلين؟';
$lang_plugin_php['link_target_name'] = 'وصل الهدف';
$lang_plugin_php['link_target_description'] = 'Changes the way external links are being opened: when this plugin is enabled, all links that contain the attribute rel="external" will open in a new window (instead of the same window).';
$lang_plugin_php['link_target_extra'] = 'This plugin has an impact mostly on the "Powered by Coppermine" link at the bottom of the gallery output.';
$lang_plugin_php['link_target_recommendation'] = 'ينصح بأن لا تستخدم هذه الإضافة البرمجية Plugins  للتبجح على المستخدمين لأن فتح الروابط في نافذة مستقلة يعني أنك تتبجح على زوار موقعك.';
}

?>