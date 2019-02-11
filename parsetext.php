<?php
                                    
function parseString($string ) {
	$my_smilies = array(
        ':aln' => '<img src="images/alien1.png" alt="" />',
		':thk' => '<img src="images/annoyed.png" alt="" />',
		':ang' => '<img src="images/angel.png" alt="" />',
		':slp<' => '<img src="images/zzz.png" alt="" />',
		':blnk' => '<img src="images/blanco.png" alt="" />',
		':zip' => '<img src="images/zip_it.png" alt="" />',
		':bor' => '<img src="images/boring.png" alt="" />',
		':brb' => '<img src="images/brb.png" alt="" />',
		':bsy' => '<img src="images/busy.png" alt="" />',
		':cell' => '<img src="images/cellphone.png" alt="" />',
		':tp' => '<img src="images/clock.png" alt="" />',
		':cool' => '<img src="images/cool.png" alt="" />',
		':czy' => '<img src="images/crazy.png" alt="" />',
		':cry' => '<img src="images/cry.png" alt="" />',
		':dvl' => '<img src="images/devil.png" alt="" />',
		':blush' => '<img src="images/blush.png" alt="" />',
		':stop' => '<img src="images/dnd.png" alt="" />',
		':flwr' => '<img src="images/flower.png" alt="" />',
		':heart' => '<img src="images/heart.png" alt="" />',
		':geek' => '<img src="images/geek.png" alt="" />',
		':gift' => '<img src="images/gift.png" alt="" />',
		':ill' => '<img src="images/ill.png" alt="" />',
		':love' => '<img src="images/in_love.png" alt="" />',
		':file' => '<img src="images/text_file.png" alt="" />',
		':kiss' => '<img src="images/kissy.png" alt="" />',
		':laugh' => '<img src="images/laugh.png" alt="" />',
		':mail' => '<img src="images/mail.png" alt="" />',
		':music' => '<img src="images/music2.png" alt="" />',
		':whst' => '<img src="images/not_guilty.png" alt="" />',
		':please' => '<img src="images/please.png" alt="" />',
		':info' => '<img src="images/info.png" alt="" />',
		':sad' => '<img src="images/sad.png" alt="" />',
		':silly' => '<img src="images/silly.png" alt="" />',
		':lol' => '<img src="images/oh.png" alt="" />',
		':slps' => '<img src="images/speechless.png" alt="" />',
		':srpd' => '<img src="images/surprised.png" alt="" />',
		':tease' => '<img src="images/tease.png" alt="" />',
		':wink' => '<img src="images/wink.png" alt="" />',
		':grin' => '<img src="images/xd.png" alt="" />'
    );
	
	return str_replace( array_keys($my_smilies), array_values($my_smilies), $string);
}

$str = stripslashes( $_POST["str"]);
echo '<strong>me: </strong> '.parseString($str).'<br>';
?>