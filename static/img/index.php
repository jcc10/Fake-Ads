<?php
	function showfile($file){
		$string = "<a href=\"./$file\">" . $file . "</a><br />\n";
		echo $string;
	}
	function main(){
		$files = scandir(".");
		foreach($files as $file) {
			if ($file == ".") {
				Null;
			} elseif ($file == "..") {
				Null;
			} elseif ($file[0] == ".") {
				Null;
			} elseif ($file == "index.php") {
				
			} else {
				showfile($file);
			}
		}
	}
	main()
?>