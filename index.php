<?php

?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <link rel="icon" href="http://www.thesoftwareguy.in/favicon.ico" type="image/x-icon" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Parsing smileys for chat script using php and ajax - thesoftwareguy7</title>
        <link rel="stylesheet" href="style.css" type="text/css" />
        <script src="jquery-1.9.0.min.js" type="text/javascript"></script>
        <script type="text/javascript">

            function addslashes(str) {
                return (str + '').replace(/[\\"']/g, '\\$&').replace(/\u0000/g, '\\0');
            }

            $(document).ready(function() {
                $("#f").submit(function(event) {
                    event.preventDefault();
                    var str = '';
                    str = $.trim($("#t").val());
                    if (str.length > 0) {
                        $("#t").val('');
                        $.ajax({
                            type: "POST",
                            url: "parsetext.php",
                            data: {str: addslashes(str)},
                            cache: false,
                            success: function(html) {
                                $("#mbox").append(html);
                            },
                            error: function(html) {
                                //alert("Failed");
                            }
                        });
                    }
                });
            });
        </script>
    </head>
    <body>
        <div id="container">
            <div id="body">
                <div class="mainTitle" >Parse Smiley for Chat using php and Ajax</div>
                <div class="height10"></div>
                <div class="height10"></div>
                <article>
                    <div style="margin:10px;">
                        <p>Smiley set taken from <a href="http://mazenl77.deviantart.com/art/Mazes-Mini-64091616" target="_blank">deviantart.com</a></p>
                    </div>
                    <div class="leftSideBar">
                        <table id="tableshow">
                            <tr>
                                <th>smiley</th>
                                <th>shortcode</th>
                                <th>&nbsp;</th>
                                <th>smiley</th>
                                <th>shortcode</th>
                                <th>&nbsp;</th>
                                <th>smiley</th>
                                <th>shortcode</th>
                            </tr>
                            <tr>
                                <td><img src="images/alien1.png" alt="alien" title="alien" /></td>
                                <td>:aln</td>
                                <td>&nbsp;</td>
                                <td><img src="images/annoyed.png" alt="annoyed" title="thinking" /></td>
                                <td>:thk</td>
                                <td>&nbsp;</td>
                                <td><img src="images/angel.png" alt="angel" title="angel" /></td>
                                <td>:ang</td>
                            </tr>
                            <tr>
                                <td><img src="images/zzz.png" alt="zzz" title="sleep" /></td>
                                <td>:slp</td>
                                <td>&nbsp;</td>
                                <td><img src="images/blanco.png" alt="blanco" title="blank face" /></td>
                                <td>:blnk</td>
                                <td>&nbsp;</td>
                                <td><img src="images/zip_it.png" alt="zip_it" title="Keep Secret" /></td>
                                <td>:zip</td>
                            </tr>
                            <tr>
                                <td><img src="images/boring.png" alt="boring" title="boring" /></td>
                                <td>:bor</td>
                                <td>&nbsp;</td>
                                <td><img src="images/brb.png" alt="brb" title="be right back" /></td>
                                <td>:brb</td>
                                <td>&nbsp;</td>
                                <td><img src="images/busy.png" alt="busy" title="busy" /></td>
                                <td>:bsy</td>
                            </tr>
                            <tr>
                                <td><img src="images/cellphone.png" alt="cellphone" title="On Call" /></td>
                                <td>:cell</td>
                                <td>&nbsp;</td>
                                <td><img src="images/clock.png" alt="clock" title="Time Please" /></td>
                                <td>:tp</td>
                                <td>&nbsp;</td>
                                <td><img src="images/cool.png" alt="cool" title="cool" /></td>
                                <td>:cool</td>
                            </tr>
                            <tr>
                                <td><img src="images/crazy.png" alt="crazy" title="crazy"  /></td>
                                <td>:czy</td>
                                <td>&nbsp;</td>
                                <td><img src="images/cry.png" alt="cry" title="cry" /></td>
                                <td>:cry</td>
                                <td>&nbsp;</td>
                                <td><img src="images/devil.png" alt="devil" title="devil" /></td>
                                <td>:dvl</td>
                            </tr>
                            <tr>
                                <td><img src="images/blush.png" alt="blush" title="blush" /></td>
                                <td>:blush</td>
                                <td>&nbsp;</td>
                                <td><img src="images/dnd.png" alt="dnd" title="Stop" /></td>
                                <td>:stop</td>
                                <td>&nbsp;</td>
                                <td><img src="images/flower.png" alt="flower" title="flower" /></td>
                                <td>:flwr</td>
                            </tr>
                            <tr>
                                <td><img src="images/heart.png" alt="heart" title="heart" /></td>
                                <td>:heart</td>
                                <td>&nbsp;</td>
                                <td><img src="images/geek.png" alt="geek" title="geek" /></td>
                                <td>:geek</td>
                                <td>&nbsp;</td>
                                <td><img src="images/gift.png" alt="gift" title="gift" /></td>
                                <td>:gift</td>
                            </tr>
                            <tr>
                                <td><img src="images/ill.png" alt="ill" title="ill" /></td>
                                <td>:ill</td>
                                <td>&nbsp;</td>
                                <td><img src="images/in_love.png" alt="in_love" title="in love" /></td>
                                <td>:love</td>
                                <td>&nbsp;</td>
                                <td><img src="images/text_file.png" alt="text_file" title="file" /></td>
                                <td>:file</td>
                            </tr>
                            <tr>
                                <td><img src="images/kissy.png" alt="kissy" title="kissy" /></td>
                                <td>:kiss</td>
                                <td>&nbsp;</td>
                                <td><img src="images/laugh.png" alt="laugh" title="laugh" /></td>
                                <td>:laugh</td>
                                <td>&nbsp;</td>
                                <td><img src="images/mail.png" alt="mail" title="mail" /></td>
                                <td>:mail</td>
                            </tr>
                            <tr>
                                <td><img src="images/music2.png" alt="music2" title="music2" /></td>
                                <td>:music</td>
                                <td>&nbsp;</td>
                                <td><img src="images/not_guilty.png" alt="not_guilty" title="Whistle" /></td>
                                <td>:whst</td>
                                <td>&nbsp;</td>
                                <td><img src="images/please.png" alt="please" title="please" /></td>
                                <td>:please</td>
                            </tr>
                            <tr>
                                <td><img src="images/info.png" alt="info" title="info" /></td>
                                <td>:info</td>
                                <td>&nbsp;</td>
                                <td><img src="images/sad.png" alt="sad" title="sad" /></td>
                                <td>:sad</td>
                                <td>&nbsp;</td>
                                <td><img src="images/silly.png" alt="silly" title="silly" /></td>
                                <td>:silly</td>
                            </tr>
                            <tr>
                                <td><img src="images/oh.png" alt="oh" title="Laugh Out Loud" /></td>
                                <td>:lol</td>
                                <td>&nbsp;</td>
                                <td><img src="images/speechless.png" alt="speechless" title="speechless" /></td>
                                <td>:slps</td>
                                <td>&nbsp;</td>
                                <td><img src="images/surprised.png" alt="surprised" title="surprised" /></td>
                                <td>:srpd</td>
                            </tr>
                            <tr>
                                <td><img src="images/tease.png" alt="tease" title="tease" /></td>
                                <td>:tease</td>
                                <td>&nbsp;</td>
                                <td><img src="images/wink.png" alt="wink" title="wink" /></td>
                                <td>:wink</td>
                                <td>&nbsp;</td>
                                <td><img src="images/xd.png" alt="Big Grin" title="Big Grin" /></td>
                                <td>:grin</td>
                            </tr>
                        </table>
                    </div>
                    <div class="rightSideBar">
                        <div class="messageBox" id="mbox"> </div>
                        <div class="inputBox">
                            <form method="post" name="f" method="post" id="f" action="" >
                                <input type="text" name="t" id="t" value="" class="textbox" autocomplete="off" placeholder="Enter message" />
                                <input type="submit" name="send" value="Send" class="but">
                            </form>
                        </div>
                    </div>
                    <div style="height: 10px; clear: both;"></div>
<div style="margin:10px 0;width:100%;float: left;">
	<div style="width:35%;float: left;margin:0 auto;text-align: center;">
		<iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2FThesoftwareguy7&amp;width&amp;height=360&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true&amp;appId=198210627014732" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:360px;" allowTransparency="true"></iframe>
	</div>
	<div style="width:35%;float: left;margin:0 auto;text-align: center;">
		<!-- Place this tag where you want the widget to render. -->
		<div class="g-person" data-href="https://plus.google.com/116523474604785207782"  data-rel="author" data-layout="potrait"></div>

		<!-- Place this tag after the last widget tag. -->
		<script type="text/javascript">
			(function() {
				var po = document.createElement('script');
				po.type = 'text/javascript';
				po.async = true;
				po.src = 'https://apis.google.com/js/platform.js';
				var s = document.getElementsByTagName('script')[0];
				s.parentNode.insertBefore(po, s);
			})();
		</script>
	</div>
	<div style="width:30%;float: left;margin:0 auto;text-align: center;">
		<a class="twitter-follow-button"
		href="https://twitter.com/thesoftwareguy7"
		data-show-count="true" 
		data-lang="en" data-size="large" >
		Follow @thesoftwareguy7
		</a>
		<script type="text/javascript">
		window.twttr = (function (d, s, id) {
		var t, js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src= "https://platform.twitter.com/widgets.js";
		fjs.parentNode.insertBefore(js, fjs);
		return window.twttr || (t = { _e: [], ready: function (f) { t._e.push(f) } });
		}(document, "script", "twitter-wjs"));
		</script>
	</div>
</div>
<div style="height: 10px; clear: both;"></div>
                </article>
                <footer>
                    <div class="copyright"> &copy; 2013 <a href="http://www.thesoftwareguy.in" target="_blank">thesoftwareguy</a>. All rights reserved </div>
                    <div class="footerlogo"><a href="http://www.thesoftwareguy.in" target="_blank"><img src="http://www.thesoftwareguy.in/thesoftwareguy-logo-small.png	" width="200" height="47" alt="thesoftwareguy logo" /></a> </div>
                </footer>
            </div>
        </div>
    </body>
</html>
