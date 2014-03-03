<?php
if (isset($_GET['img'])) {
	$src = $_GET['img'];
	$src = ltrim($src, '/');
	$base = explode(".", $src);
	$base_title = $base[0];
	
	$base_extension = $base[1];
	$new_image = $base_title.'-blur'.'.'.$base_extension;
	$new_background = $base_title.'-blur2'.'.'.$base_extension;
	if (file_exists($new_image)) {
		echo $new_image;
	} else {
		$im = imagecreatefromjpeg($src);
		$gaussian = array(array(1.0, 2.0, 1.0), array(2.0, 4.0, 2.0), array(1.0, 2.0, 1.0));
		imageconvolution($im, $gaussian, 16, 0);
		imagefilter($im, IMG_FILTER_GAUSSIAN_BLUR);
		imagefilter($im, IMG_FILTER_GAUSSIAN_BLUR);
		imagefilter($im, IMG_FILTER_GAUSSIAN_BLUR);
		imagefilter($im, IMG_FILTER_GAUSSIAN_BLUR);
		imagefilter($im, IMG_FILTER_GAUSSIAN_BLUR);
		imagefilter($im, IMG_FILTER_GAUSSIAN_BLUR);
		imagefilter($im, IMG_FILTER_GAUSSIAN_BLUR);
		imagefilter($im, IMG_FILTER_GAUSSIAN_BLUR);
		imagefilter($im, IMG_FILTER_GAUSSIAN_BLUR);
		imagefilter($im, IMG_FILTER_GAUSSIAN_BLUR);
		imagefilter($im, IMG_FILTER_GAUSSIAN_BLUR);
		imagefilter($im, IMG_FILTER_GAUSSIAN_BLUR);
		imagefilter($im, IMG_FILTER_GAUSSIAN_BLUR);
		imagefilter($im, IMG_FILTER_GAUSSIAN_BLUR);
		imagefilter($im, IMG_FILTER_GAUSSIAN_BLUR);
		imagefilter($im, IMG_FILTER_GAUSSIAN_BLUR);
		imagefilter($im, IMG_FILTER_GAUSSIAN_BLUR);
		imagefilter($im, IMG_FILTER_GAUSSIAN_BLUR);
		imagefilter($im, IMG_FILTER_GAUSSIAN_BLUR);
		imagefilter($im, IMG_FILTER_GAUSSIAN_BLUR);
		imagefilter($im, IMG_FILTER_GAUSSIAN_BLUR);
		imagefilter($im, IMG_FILTER_GAUSSIAN_BLUR);
		imagefilter($im, IMG_FILTER_GAUSSIAN_BLUR);
		imagefilter($im, IMG_FILTER_GAUSSIAN_BLUR);
		imagefilter($im, IMG_FILTER_GAUSSIAN_BLUR);
		imagefilter($im, IMG_FILTER_GAUSSIAN_BLUR);
		imagefilter($im, IMG_FILTER_GAUSSIAN_BLUR);
		imagefilter($im, IMG_FILTER_GAUSSIAN_BLUR);
		imagefilter($im, IMG_FILTER_GAUSSIAN_BLUR);
		imagefilter($im, IMG_FILTER_GAUSSIAN_BLUR);
		imagefilter($im, IMG_FILTER_GAUSSIAN_BLUR);
		imagefilter($im, IMG_FILTER_GAUSSIAN_BLUR);
			imagefilter($im, IMG_FILTER_GAUSSIAN_BLUR);
			imagefilter($im, IMG_FILTER_GAUSSIAN_BLUR);
			imagefilter($im, IMG_FILTER_GAUSSIAN_BLUR);
			imagefilter($im, IMG_FILTER_GAUSSIAN_BLUR);
			imagefilter($im, IMG_FILTER_GAUSSIAN_BLUR);
			imagefilter($im, IMG_FILTER_GAUSSIAN_BLUR);
			imagefilter($im, IMG_FILTER_GAUSSIAN_BLUR);
			imagefilter($im, IMG_FILTER_GAUSSIAN_BLUR);
			imagefilter($im, IMG_FILTER_GAUSSIAN_BLUR);
			imagefilter($im, IMG_FILTER_GAUSSIAN_BLUR);
			imagefilter($im, IMG_FILTER_GAUSSIAN_BLUR);
			imagefilter($im, IMG_FILTER_GAUSSIAN_BLUR);
			imagefilter($im, IMG_FILTER_GAUSSIAN_BLUR);
			imagefilter($im, IMG_FILTER_GAUSSIAN_BLUR);
			imagefilter($im, IMG_FILTER_GAUSSIAN_BLUR);
			imagefilter($im, IMG_FILTER_GAUSSIAN_BLUR);
			imagefilter($im, IMG_FILTER_GAUSSIAN_BLUR);
			imagefilter($im, IMG_FILTER_GAUSSIAN_BLUR);
			imagefilter($im, IMG_FILTER_GAUSSIAN_BLUR);
			imagefilter($im, IMG_FILTER_GAUSSIAN_BLUR);
			imagefilter($im, IMG_FILTER_GAUSSIAN_BLUR);
			imagefilter($im, IMG_FILTER_GAUSSIAN_BLUR);
			imagefilter($im, IMG_FILTER_GAUSSIAN_BLUR);
			imagefilter($im, IMG_FILTER_GAUSSIAN_BLUR);
			imagefilter($im, IMG_FILTER_GAUSSIAN_BLUR);
			imagefilter($im, IMG_FILTER_GAUSSIAN_BLUR);
			imagefilter($im, IMG_FILTER_GAUSSIAN_BLUR);
			imagefilter($im, IMG_FILTER_GAUSSIAN_BLUR);
			imagefilter($im, IMG_FILTER_GAUSSIAN_BLUR);
			imagefilter($im, IMG_FILTER_GAUSSIAN_BLUR);
			imagefilter($im, IMG_FILTER_GAUSSIAN_BLUR);
			imagefilter($im, IMG_FILTER_GAUSSIAN_BLUR);
		header('Content-Type: image/jpeg');
		$im_output = imagejpeg($im, $new_image, 70);
		echo $new_image;
	}
} else {
	// Photo not found
	echo "Photo not found ".$src;
}
?>