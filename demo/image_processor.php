<?php
if (isset($_GET['img'])) {
	$src = $_GET['img'];
	//$src = 'assets/'.$src;
	$src = ltrim($src, '/');
	//$src = 'img/race.jpg';
	$base = explode(".", $src);
	$base_title = $base[0];
	$default_blur = 40;
	
	if (isset($_GET['depth'])) {
		$depth = $_GET['depth'];
	} else {
		$depth = $default_blur;
	}
	
	//$base_title = preg_replace('/^\//', '', $base_title);
	$base_extension = $base[1];
	$new_image = $base_title.'-blur-'.$depth.''.'.'.$base_extension;
	$new_background = $base_title.'-blur2'.'.'.$base_extension;
	if (file_exists($new_image)) {
		//echo 'already exists '.$new_image;
		// File already exists, so load it.
		//$im = imagecreatefromjpeg($new_image);
		//header('Content-Type: image/jpeg');
		//$im_output = imagejpeg($im);
		echo $new_image;
	} else {
		//echo 'making it';
		// The file doesn't exist, so, make it
		$im = imagecreatefromjpeg($src);
		//$gaussian = array(array(1.0, 2.0, 1.0), array(2.0, 4.0, 2.0), array(1.0, 2.0, 1.0));
		$gaussian = array(array(1.0, 2.0, 1.0), array(2.0, 4.0, 2.0), array(1.0, 2.0, 1.0));
		imageconvolution($im, $gaussian, 16, 0);
		for ($i = 1; $i <= $depth; $i++) {
			imagefilter($im, IMG_FILTER_GAUSSIAN_BLUR);
		}
		
		header('Content-Type: image/jpeg');
		$im_output = imagejpeg($im, $new_image, 70);
		echo $new_image;
	}
	//imagedestroy($im_output);
} else {
	// Photo not found
	echo "Photo not found ".$src;
}
?>