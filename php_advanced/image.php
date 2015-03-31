<?php
	
	// $random_rgb = array();
	// for ($i = 0; $i <= 255; $i++)
	// {
	// 	$random_rgb[] = $i;
	// }
	$random_r = rand(0,255);
	$random_g = rand(0,255);
	$random_b = rand(0,255);

	$random_r1 = rand(0,255);
	$random_g1 = rand(0,255);
	$random_b1 = rand(0,255);

	$random_r2 = rand(0,255);
	$random_g2 = rand(0,255);
	$random_b2 = rand(0,255);

	$alphabet = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
	$random_text = array();
	for ($j = 0; $j < 10; $j++)
	{
		$random_text[] = $alphabet[rand(0, count($alphabet))];
	}
	$text_choice = implode(' ', $random_text);

	$some_img = imagecreate(300, 200);
	$background_color = imagecolorallocate($some_img, $random_r, $random_g, $random_b);
	$text_color = imagecolorallocate($some_img, $random_r1, $random_g1, $random_b1);
	$line_color = imagecolorallocate($some_img, $random_r2, $random_g2, $random_b2);
	imagestring($some_img, 32, 60, 70, $text_choice, $text_color);
	imagesetthickness($some_img, 3);
	imageline($some_img, 80, 100, 130, 40, $line_color);

	header('Content-type: img/png');
	imagepng($some_img);
	imagecolordeallocate( $line_color );
	imagecolordeallocate( $text_color );
	imagecolordeallocate( $background_color );
	imagedestroy( $some_img );

?>