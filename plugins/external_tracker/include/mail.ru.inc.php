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
<script type="text/javascript">//<![CDATA[
	var a='',js=10;try{a+=';r='+escape(document.referrer);}catch(e){}try{a+=';j='+navigator.javaEnabled();js=11;}catch(e){}
	try{s=screen;a+=';s='+s.width+'*'+s.height;a+=';d='+(s.colorDepth?s.colorDepth:s.pixelDepth);js=12;}catch(e){}
	try{if(typeof((new Array).push('t'))==="number")js=13;}catch(e){}
	try{document.write('<a href="http://top.mail.ru/jump?from=2188224">'+
	'<img src="http://d3.c6.b1.a2.top.mail.ru/counter?id=2188224;t=52;js='+js+a+';rand='+Math.random()+
	'" alt="Рейтинг@Mail.ru" style="border:0;" height="31" width="88" \/><\/a>');}catch(e){}//]]>
</script>
<noscript>
	<p><a href="http://top.mail.ru/jump?from=2188224">
	<img src="http://d3.c6.b1.a2.top.mail.ru/counter?js=na;id=2188224;t=52" 
	style="border:0;" height="31" width="88" alt="Рейтинг@Mail.ru" /></a></p>
</noscript>
EOT;
?>