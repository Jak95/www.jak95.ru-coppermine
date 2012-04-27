<?php
	$documentRoot = $_SERVER['DOCUMENT_ROOT'];
	$dir = "{$documentRoot}";
	
	$result = getDirectory($dir, 0, 0);
	echo json_encode($result);
	//print_r($result);
	
	function getDirectory( $path = '.', $level = 0, $debug ) {
		$result = array();
		$keys = array("name", "fullpath", "children");
		$ignore = array( 'cgi-bin', '.', '..' ); 
		// Directories to ignore when listing output. Many hosts 
		// will deny PHP access to the cgi-bin. 
		$dh = @opendir( $path ); 
		// Open the directory to the handle $dh 
		while( false !== ( $file = readdir( $dh ) ) ) {
		// Loop through the directory 
			if( !in_array( $file, $ignore ) ) {
			// Check that this file is not to be ignored 
				$spaces = str_repeat( '&nbsp;', ( $level * 4 ) ); 
				// Just to add spacing to the list, to better 
				// show the directory tree. 
				if( is_dir( "$path/$file" ) ) {
				// Its a directory, so we need to keep reading down... 
					
					if ($debug == 1) {
						echo "<strong>$spaces $file</strong><br />"; 
					}
					$subresult = getDirectory( "$path/$file", ($level + 1), $debug ); 
					$values = array($file, "$path/$file", $subresult);
					$subarray = array_combine($keys, $values);
					@array_push ($result, $subarray);
					// Re-call this same function but on a new directory.
					// this is what makes function recursive.
				} else {
					//echo "$spaces $file<br />"; 
					// Just print out the filename 
				}
			}
		}
		 
		closedir( $dh );
		// Close the directory handle 
		return $result;
	}
	
	// function getDirectory( $path = '.', $level = 0, $debug ) {
		// $result = array();
		// $keys = array("name");
		// $ignore = array( 'cgi-bin', '.', '..' ); 
		// // Directories to ignore when listing output. Many hosts 
		// // will deny PHP access to the cgi-bin. 
		// $dh = @opendir( $path ); 
		// // Open the directory to the handle $dh 
		// while( false !== ( $file = readdir( $dh ) ) ) {
		// // Loop through the directory 
			// if( !in_array( $file, $ignore ) ) {
			// // Check that this file is not to be ignored 
				// $spaces = str_repeat( '&nbsp;', ( $level * 4 ) ); 
				// // Just to add spacing to the list, to better 
				// // show the directory tree. 
				// if( is_dir( "$path/$file" ) ) {
				// // Its a directory, so we need to keep reading down... 
					// $values = array($file);
					// $subarray = array_combine($keys, $values);
					// @array_push ($result, $subarray);
					// if ($debug == 1) {
						// echo "<strong>$spaces $file</strong><br />"; 
					// }
					// //	getDirectory( "$path/$file", ($level + 1), $debug ); 
					// // Re-call this same function but on a new directory.
					// // this is what makes function recursive.
				// } else {
					// //echo "$spaces $file<br />"; 
					// // Just print out the filename 
				// }
			// }
		// }
		 
		// closedir( $dh );
		// // Close the directory handle 
		// return $result;
	// }

?>