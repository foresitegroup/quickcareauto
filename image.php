<?php
// PHP File used to quickly put some text over a poster image - for video or other.
// To use:  Use this file as the source file of an image.  Pass it two GET variables:  pat=path of image&text=text to overlay

header("Content-Type: image/jpeg");

// Open the image:
$image = imagecreatefromjpeg("images/coupon-side-470.jpg");

//$width = imagesx($image); // Gets the width - better to use imagesx here as we don't need to feed it a path, just a handle.
$width = 250;

$rectCol = imagecolorallocatealpha($image, 0, 0, 0, 40); // Create a black colour, slightly transparent
$textCol = imagecolorallocate($image, 255, 255, 255); // Create a white colour

// Fill the top of the image with this rectangle...
imagefilledrectangle($image, 0, 0, $width, 50, $rectCol);

$textX = 10;
$textY = 32; // X and Y values for the text generation

$font = 'fonts/grandesign_neue_serif.ttf'; // Replace this with the path to your font file.

// Write Text:
imagettftext($image, 10, 0, $textX, $textY, $textCol, $font, "The quick brown fox jumped over the lazy dog The quick brown fox jumped over the lazy dog");

// Now we're done editing... output the final image:
imagejpeg($image);

// Free up some space:
imagedestroy($image);
?>
