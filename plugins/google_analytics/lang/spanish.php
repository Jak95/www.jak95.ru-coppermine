<?php
/*********************************************
  Coppermine 1.5.x Plugin - Google Anylytics 
  ********************************************
  Copyright (c) 2009 papukaija
  
  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.

  ********************************************
  $HeadURL$
  $Revision$
  $LastChangedBy$
  $Date$
**********************************************/
if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...'); }

$lang_google_analytics = array(
'ga_yes'                      => 'Si',
'ga_no'                       => 'No',
'ga_install'                  => 'Instalar',
'ga_cancel'                   => 'Cancelar',
'ga_submit'                   => 'Enviar',
'clean_up_question'           => '¿Quitar el seguimiento?',
'clean_up_note'               => '** Google Analytics dejará de seguir tu galería. **',
'clean_up_inst'               => 'La cookie se ha instalado o actualizado con éxito. Esta cookie expirará en 10 años.',

'plugin_description'          => 'Este plugin añade el código de seguimiento de <a href="http://www.google.com/analytics/" rel="external" class="external">Google Analytics</a> a cada página de la galería, salvo al entrar como administrador. También se puede desactivar el seguimiento mediante una cookie tras la instalación del plugin, con lo que no se seguirá para ningún usuario desde ese ordenador.',

'plugin_details_notinstalled' => '<a href="http://forum.coppermine-gallery.net/index.php/topic,61232.0.html" rel="external" class="admin_menu external">'.cpg_fetch_icon('announcement', 1).'Anuncio del plugin '.$name.'</a>',

'plugin_details_installed'    => '<a href="index.php?file=google_analytics/cookie" title="Install or update the cookie">Instalar o actualizar la cookie</a><br /><a href="http://forum.coppermine-gallery.net/index.php/topic,61232.0.html" rel="external" class="admin_menu external">'.cpg_fetch_icon('announcement', 1).'Anuncio del plugin '.$name.'</a>',

'author'                      => '<a href="http://forum.coppermine-gallery.net/index.php?action=profile;u=56739" rel="external" class="external">papukaija</a>, v1.1 por <a href="http://forum.coppermine-gallery.net/index.php?action=profile;u=24278" rel="external" class="external">André</a>',
);
?>