<?php
	/*$arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);

	echo json_encode($arr);*/
	
	$dir = $_GET["fullpath"];
	$filtered = $_GET["filtered"];
	if ($filtered == null) {
		$filtered = 'false';
	}
	$nonExtended = $_GET["nonExtended"];
	if ($nonExtended == null) {
		$nonExtended = 'false';
	}
	
	if (!is_null($dir)) {
		echo getListByPath($dir, $filtered, $nonExtended);
	}

	function getListByPath($dir, $filtered, $nonExtended) {
		//echo 'dir: '.$dir;
		//echo $filtered;
		$dir = @str_replace("/home/virtwww/w_jak95-ru_f22f6df1/http/", "../../", $dir);
		//echo $dir;
		$result = list_files($dir, "jpg", 0, 0, $filtered, $nonExtended);
		// $result = list_files("../albums/Jak95/2011/Cambodia/01", "jpg", 0, 0);
		return json_encode($result);
	}
	
	function list_files($directory, $stringSearch, $searchHandler, $outputHandler, $filtered, $nonExtended) {
	 $errorHandler = false;
	 $result = array();
	 $keyExtended = array("name", "little", "normal", "big", "fileSize", "width", "height", "make", "model", "dateTime");
	 if (! $directoryHandler = @opendir ($directory)) {
	  echo ("<pre>\nerror: directory \"$directory\" doesn't exist!\n</pre>\n");
	 return $errorHandler = true;
	 }
	 //if ($searchHandler === 0) 
	 {
	  while (false !== ($fileName = @readdir ($directoryHandler))) {
	   //echo $fileName;
	   //echo ($filtered == true);
	   if((@substr ($fileName, - @strlen ($stringSearch)) === $stringSearch) && ((@substr_count($fileName, "normal") > 0) || ($filtered == 'true'))) {
	    $big = @str_replace("normal_", "", $fileName);
		$little = @str_replace("normal_", "thumb_", $fileName);
		if ($nonExtended == 'true')
		{
			//$tmp = @str_replace("../../", "../../../", $directory);
			$tmp = @str_replace("../../", "http://www.jak95.ru/", $directory);
			$normal = "{$tmp}/{$fileName}";
		} else {
			$normal = "{$directory}/{$fileName}";
		}
		
		if ($nonExtended == 'false')
		{
			$ed = exif_read_data($normal);
			$values = array($fileName, "{$directory}/{$little}", "{$normal}", "{$directory}/{$big}", $ed[FileSize], $ed[COMPUTED][Width], $ed[COMPUTED][Height], $ed[Make], $ed[Model], $ed[DateTime]);
			$subarray = array_combine($keyExtended, $values);
			@array_push ($result, $subarray);
		} else {
			@array_push ($result, $normal);
		}
	   }
	  }
	 }
	 // if ($searchHandler === 1) {
	  // while(false !== ($fileName = @readdir ($directoryHandler))) {
	   // if(@substr_count ($fileName, $stringSearch) > 0) {
	    // $url = "{$directory}/{$fileName}";
	    // $ed = exif_read_data($url);
	    // $values = array($fileName, $url, $ed[FileSize], $ed[COMPUTED][Width], $ed[COMPUTED][Height], $ed[Make], $ed[Model], $ed[DateTime]);
	    // $subarray = array_combine($keyExtended, $values);
		// @array_push ($result, $subarray);
	   // }
	  // }
	 // }
	 if (($errorHandler === true) &&  (@count ($result) === 0)) {
	  echo ("<pre>\nerror: no filetype \"$fileExtension\" found!\n</pre>\n");
	 }
	 else {
	  sort ($result);
	  if ($outputHandler === 0) {
	   return $result;
	  }
	  if ($outputHandler === 1) {
	   echo ("<pre>\n");
	   print_r ($result);
	   echo ("</pre>\n"); 
	  }
	 }
	}

/*	
	function list_files__($directory, $stringSearch, $searchHandler, $outputHandler) {
	 $errorHandler = false;
	 $result = array();
	 if (! $directoryHandler = @opendir ($directory)) {
	  echo ("<pre>\nerror: directory \"$directory\" doesn't exist!\n</pre>\n");
	 return $errorHandler = true;
	 }
	 if ($searchHandler === 0) {
	  while (false !== ($fileName = @readdir ($directoryHandler))) {
	   if(@substr ($fileName, - @strlen ($stringSearch)) === $stringSearch) {
		@array_push ($result, $fileName);
	   }
	  }
	 }
	 if ($searchHandler === 1) {
	  while(false !== ($fileName = @readdir ($directoryHandler))) {
	   if(@substr_count ($fileName, $stringSearch) > 0) {
		@array_push ($result, $fileName);
	   }
	  }
	 }
	 if (($errorHandler === true) &&  (@count ($result) === 0)) {
	  echo ("<pre>\nerror: no filetype \"$fileExtension\" found!\n</pre>\n");
	 }
	 else {
	  sort ($result);
	  if ($outputHandler === 0) {
	   return $result;
	  }
	  if ($outputHandler === 1) {
	   echo ("<pre>\n");
	   print_r ($result);
	   echo ("</pre>\n"); 
	  }
	 }
	}
*/	
?>