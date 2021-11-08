<?php
Class M_captcha extends Model {
	
	function M_captcha(){
		parent::Model();
	}

	function GenerateCaptcha(){
		$captcha = array(
		'word'		=> '',
		'img_path'	 	=> realpath('captcha').'/',
		'img_url'	 	=>  base_url().'captcha/',
		'font_path'	 	=> './system/fonts/mvboli.ttf',
		'img_width'	=> '150',
		'img_height' 	=> 50,
		'expiration' 	=> 3600
		 );
		return create_captcha($captcha);
	}
}
?>