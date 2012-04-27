<?php
/*********************************************
  Coppermine 1.5.x Plugin - External tracker
  ********************************************
  Copyright (c) 2009 - 2010 papukaija
  
  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.

  ********************************************
  $HeadURL$
  $Revision$
**********************************************/

$ext_js .= <<< EOT
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-24694388-1']);
  _gaq.push(['_setDomainName', 'jak95.ru']);
  _gaq.push(['_setCampNameKey', 'http://www.jak95.ru/joomla']);
  _gaq.push(['_setCampTermKey', 'Путешествуем с Щербиниными']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
EOT;
?>