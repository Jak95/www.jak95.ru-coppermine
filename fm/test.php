<?php
	// Get the exif data
	$exif_data = exif_read_data( 'http://jak95.ru/coppermine/albums/Jak95/2011/Cambodia/01/VT_11_222_P1050821.jpg' );
	echo '<pre>';
	echo $exif_data[FileSize];
	//print_r($exif_data);
echo '</pre>';
?>