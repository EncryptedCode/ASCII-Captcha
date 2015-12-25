<?php
	function CaptchaAscii($char){
		$charAscii = 'null';
		switch($char){
			case '0':
				$charAscii =  '  ___  ' . '<br>'
							. ' / _ \ ' . '<br>'
							. '| | | |' . '<br>'
							. '| |_| |' . '<br>'
							. ' \___/ ' . '<br>'
							. '       ';
				break;
			case '1':
				$charAscii =  ' _ ' . '<br>'
							. '/ |' . '<br>'
							. '| |' . '<br>'
							. '| |' . '<br>'
							. '|_|' . '<br>'
							. '   ';
				break;
			case '2':
				$charAscii =  ' ____  ' . '<br>'
							. '|___ \ ' . '<br>'
							. '  __) |' . '<br>'
							. ' / __/ ' . '<br>'
							. '|_____|' . '<br>'
							. '       ';
				break;
			case '3':
				$charAscii =  ' _____ ' . '<br>'
							. '|___ / ' . '<br>'
							. '  |_ \ ' . '<br>'
							. ' ___) |' . '<br>'
							. '|____/ ' . '<br>'
							. '       ';
				break;
			case '4':
				$charAscii =  ' _  _   ' . '<br>'
							. '| || |  ' . '<br>'
							. '| || |_ ' . '<br>'
							. '|__   _|' . '<br>'
							. '   |_|  ' . '<br>'
							. '		   ';
				break;
			case '5':
				$charAscii =  ' ____  ' . '<br>'
							. '| ___| ' . '<br>'
							. '|___ \ ' . '<br>'
							. ' ___) |' . '<br>'
							. '|____/ ' . '<br>'
							. '       ';
				break;
			case '6':
				$charAscii =  '  __   ' . '<br>'
							. ' / /_  ' . '<br>'
							. '|  _ \ ' . '<br>'
							. '| (_) |' . '<br>'
							. ' \___/ ' . '<br>'
							. '       ';
				break;
			case '7':
				$charAscii =  ' _____ ' . '<br>'
							. '|___  |' . '<br>'
							. '   / / ' . '<br>'
							. '  / /  ' . '<br>'
							. ' /_/   ' . '<br>'
							. '       ';
				break;
			case '8':
				$charAscii =  '  ___  ' . '<br>'
							. ' ( _ ) ' . '<br>'
							. ' / _ \ ' . '<br>'
							. '| (_) |' . '<br>'
							. ' \___/ ' . '<br>'
							. '       ';
				break;
			case '9':
				$charAscii =  '  ___  ' . '<br>'
							. ' / _ \ ' . '<br>'
							. '| (_) |' . '<br>'
							. ' \__, |' . '<br>'
							. '   /_/ ' . '<br>'
							. '       ';
				break;
			case 'A':
				$charAscii =  '    _     ' . '<br>'
							. '   / \    ' . '<br>'
							. '  / _ \   ' . '<br>'
							. ' / ___ \  ' . '<br>'
							. '/_/   \_\ ' . '<br>'
							. '          ';
				break;
				
			case 'B':
				$charAscii =  ' ____  ' . '<br>'
							. '| __ ) ' . '<br>'
							. '|  _ \ ' . '<br>'
							. '| |_) |' . '<br>'
							. '|____/ ' . '<br>'
							. '       ';
				break;
				
			case 'C':
				$charAscii =  '  ____ ' . '<br>'
							. ' / ___|' . '<br>'
							. '| |    ' . '<br>'
							. '| |___ ' . '<br>'
							. ' \____|' . '<br>'
							. '       ';
				break;
				
			case 'D':
				$charAscii =  ' ____  ' . '<br>'
							. '|  _ \ ' . '<br>'
							. '| | | |' . '<br>'
							. '| |_| |' . '<br>'
							. '|____/ ' . '<br>'
							. '       ';
				break;
				
			case 'E':
				$charAscii =  ' _____ ' . '<br>'
							. '| ____|' . '<br>'
							. '|  _|  ' . '<br>'
							. '| |___ ' . '<br>'
							. '|_____|' . '<br>'
							. '       ';
				break;
				
			case 'F':
				$charAscii =  ' _____ ' . '<br>'
							. '|  ___|' . '<br>'
							. '| |_   ' . '<br>'
							. '|  _|  ' . '<br>'
							. '|_|    ' . '<br>'
							. '       ';
				break;
				
			case 'G':
				$charAscii =  '  ____ ' . '<br>'
							. ' / ___|' . '<br>'
							. '| |  _ ' . '<br>'
							. '| |_| |' . '<br>'
							. ' \____|' . '<br>'
							. '       ';
				break;
				
			case 'H':
				$charAscii =  ' _   _ ' . '<br>'
							. '| | | |' . '<br>'
							. '| |_| |' . '<br>'
							. '|  _  |' . '<br>'
							. '|_| |_|' . '<br>'
							. '       ';
				break;
				
			case 'I':
				$charAscii =  ' ___ ' . '<br>'
							. '|_ _|' . '<br>'
							. ' | | ' . '<br>'
							. ' | | ' . '<br>'
							. '|___|' . '<br>'
							. '     ';
				break;
				
			case 'J':
				$charAscii =  '     _ ' . '<br>'
							. '    | |' . '<br>'
							. ' _  | |' . '<br>'
							. '| |_| |' . '<br>'
							. ' \___/ ' . '<br>'
							. '       ';
				break;
				
			case 'K':
				$charAscii =  ' _  __ ' . '<br>'
							. '| |/ / ' . '<br>'
							. '| ´ /  ' . '<br>'
							. '| . \  ' . '<br>'
							. '|_|\_\ ' . '<br>'
							. '       ';
				break;
				
			case 'L':
				$charAscii =  ' _     ' . '<br>'
							. '| |    ' . '<br>'
							. '| |    ' . '<br>'
							. '| |___ ' . '<br>'
							. '|_____|' . '<br>'
							. '       ';
				break;
				
			case 'M':
				$charAscii =  ' __  __ ' . '<br>'
							. '|  \/  |' . '<br>'
							. '| |\/| |' . '<br>'
							. '| |  | |' . '<br>'
							. '|_|  |_|' . '<br>'
							. '        ';
				break;
				
			case 'N':
				$charAscii =  ' _   _ ' . '<br>'
							. '| \ | |' . '<br>'
							. '|  \| |' . '<br>'
							. '| |\  |' . '<br>'
							. '|_| \_|' . '<br>'
							. '       ';
				break;
				
			case 'Ñ':
				$charAscii =  '  /\/|' . '<br>'
							. ' |/\/ ' . '<br>'
							. '| \| |' . '<br>'
							. '| .` |' . '<br>'
							. '|_|\_|' . '<br>'
							. '      ';
				break;
				
			case 'O':
				$charAscii =  '  ___  ' . '<br>'
							. ' / _ \ ' . '<br>'
							. '| | | |' . '<br>'
							. '| |_| |' . '<br>'
							. ' \___/ ' . '<br>'
							. '       ';
				break;
				
			case 'P':
				$charAscii =  ' ____  ' . '<br>'
							. '|  _ \ ' . '<br>'
							. '| |_) |' . '<br>'
							. '|  __/ ' . '<br>'
							. '|_|    ' . '<br>'
							. '       ';
				break;
				
			case 'Q':
				$charAscii =  '  ___   ' . '<br>'
							. ' / _ \  ' . '<br>'
							. '| | | | ' . '<br>'
							. '| |_| | ' . '<br>'
							. ' \__\_\ ' . '<br>'
							. '        ';
				break;
				
			case 'R':
				$charAscii =  ' ____   ' . '<br>'
							. '|  _ \  ' . '<br>'
							. '| |_) | ' . '<br>'
							. '|  _ <  ' . '<br>'
							. '|_| \_\ ' . '<br>'
							. '        ';
				break;
				
			case 'S':
				$charAscii =  ' ____ ' . '<br>'
							. '/ ___| ' . '<br>'
							. '\___ \ ' . '<br>'
							. ' ___) |' . '<br>'
							. '|____/ ' . '<br>'
							. '       ';
				break;
				
			case 'T':
				$charAscii =  ' _____ ' . '<br>'
							. '|_   _|' . '<br>'
							. '  | |  ' . '<br>'
							. '  | |  ' . '<br>'
							. '  |_|  ' . '<br>'
							. '       ';
				break;
				
			case 'U':
				$charAscii =  ' _   _ ' . '<br>'
							. '| | | |' . '<br>'
							. '| | | |' . '<br>'
							. '| |_| |' . '<br>'
							. ' \___/ ' . '<br>'
							. '       ';
				break;
				
			case 'V':
				$charAscii =  '__     __' . '<br>'
							. '\ \   / /' . '<br>'
							. ' \ \ / / ' . '<br>'
							. '  \ V /  ' . '<br>'
							. '   \_/   ' . '<br>'
							. '         ';
				break;
				
			case 'W':
				$charAscii =  '__        __' . '<br>'
							. '\ \      / /' . '<br>'
							. ' \ \ /\ / / ' . '<br>'
							. '  \ V  V /  ' . '<br>'
							. '   \_/\_/   ' . '<br>'
							. '            ';
				break;
				
			case 'X':
				$charAscii =  '__  __ ' . '<br>'
							. '\ \/ / ' . '<br>'
							. ' \  /  ' . '<br>'
							. ' /  \  ' . '<br>'
							. '/_/\_\ ' . '<br>'
							. '       ';
				break;
				
			case 'Y':
				$charAscii =  '__   __' . '<br>'
							. '\ \ / /' . '<br>'
							. ' \ V / ' . '<br>'
							. '  | |  ' . '<br>'
							. '  |_|  ' . '<br>'
							. '       ';
				break;
				
			case 'Z':
				$charAscii =  ' _____' . '<br>'
							. '|__  /' . '<br>'
							. '  / / ' . '<br>'
							. ' / /_ ' . '<br>'
							. '/____|' . '<br>'
							. '      ';
				break;
				
			case 'a':
				$charAscii =  '       ' . '<br>'
							. '  __ _ ' . '<br>'
							. ' / _` |' . '<br>'
							. '| (_| |' . '<br>'
							. ' \__,_|' . '<br>'
							. '       ';
				break;
				
			case 'b':
				$charAscii =  ' _     ' . '<br>'
							. '| |__  ' . '<br>'
							. '| ´_ \ ' . '<br>'
							. '| |_) |' . '<br>'
							. '|_.__/ ' . '<br>'
							. '       ';
				break;
				
			case 'c':
				$charAscii =  '      ' . '<br>'
							. '  ___ ' . '<br>'
							. ' / __|' . '<br>'
							. '| (__ ' . '<br>'
							. ' \___|' . '<br>'
							. '      ';
				break;
				
			case 'd':
				$charAscii =  '     _ ' . '<br>'
							. '  __| |' . '<br>'
							. ' / _` |' . '<br>'
							. '| (_| |' . '<br>'
							. ' \__,_|' . '<br>'
							. '       ';
				break;
				
			case 'e':
				$charAscii =  '       ' . '<br>'
							. '  ___  ' . '<br>'
							. ' / _ \ ' . '<br>'
							. '|  __/ ' . '<br>'
							. ' \___| ' . '<br>'
							. '       ';
				break;
				
			case 'f':
				$charAscii =  '  __ ' . '<br>'
							. ' / _|' . '<br>'
							. '| |_ ' . '<br>'
							. '|  _|' . '<br>'
							. '|_|  ' . '<br>'
							. '     ';
				break;
				
			case 'g':
				$charAscii =  '       ' . '<br>'
							. '  __ _ ' . '<br>'
							. ' / _` |' . '<br>'
							. '| (_| |' . '<br>'
							. ' \__, |' . '<br>'
							. ' |___/ ';
				break;
				
			case 'h':
				$charAscii =  ' _     ' . '<br>'
							. '| |__  ' . '<br>'
							. '| ´_ \ ' . '<br>'
							. '| | | |' . '<br>'
							. '|_| |_|' . '<br>'
							. '       ';
				break;
				
			case 'i':
				$charAscii =  ' _ ' . '<br>'
							. '(_)' . '<br>'
							. '| |' . '<br>'
							. '| |' . '<br>'
							. '|_|' . '<br>'
							. '   ';
				break;
				
			case 'j':
				$charAscii =  '   _ ' . '<br>'
							. '  (_)' . '<br>'
							. '  | |' . '<br>'
							. '  | |' . '<br>'
							. ' _/ |' . '<br>'
							. '|__/ ';
				break;
				
			case 'k':
				$charAscii =  ' _     ' . '<br>'
							. '| | __ ' . '<br>'
							. '| |/ / ' . '<br>'
							. '|   <  ' . '<br>'
							. '|_|\_\ ' . '<br>'
							. '       ';
				break;
				
			case 'l':
				$charAscii =  ' _ ' . '<br>'
							. '| |' . '<br>'
							. '| |' . '<br>'
							. '| |' . '<br>'
							. '|_|' . '<br>'
							. '   ';
				break;
				
			case 'm':
				$charAscii =  '           ' . '<br>'
							. ' _ __ ___  ' . '<br>'
							. '| ´_ ` _ \ ' . '<br>'
							. '| | | | | |' . '<br>'
							. '|_| |_| |_|' . '<br>'
							. '           ';
				break;
				
			case 'n':
				$charAscii =  '       ' . '<br>'
							. ' _ __  ' . '<br>'
							. '| ´_ \ ' . '<br>'
							. '| | | |' . '<br>'
							. '|_| |_|' . '<br>'
							. '       ';
				break;
				
			case 'ñ':
				$charAscii =  '  /\/| ' . '<br>'
							. ' |/\/  ' . '<br>'
							. '| ´_ \ ' . '<br>'
							. '| | | |' . '<br>'
							. '|_| |_|' . '<br>'
							. '       ';
				break;
				
			case 'o':
				$charAscii =  '       ' . '<br>'
							. '  ___  ' . '<br>'
							. ' / _ \ ' . '<br>'
							. '| (_) |' . '<br>'
							. ' \___/ ' . '<br>'
							. '       ';
				break;
				
			case 'p':
				$charAscii =  '       ' . '<br>'
							. ' _ __  ' . '<br>'
							. '| ´_ \ ' . '<br>'
							. '| |_) |' . '<br>'
							. '| .__/ ' . '<br>'
							. '|_|    ';
				break;
				
			case 'q':
				$charAscii =  '       ' . '<br>'
							. '  __ _ ' . '<br>'
							. ' / _` |' . '<br>'
							. '| (_| |' . '<br>'
							. ' \__, |' . '<br>'
							. '    |_|';
				break;
				
			case 'r':
				$charAscii =  '      ' . '<br>'
							. ' _ __ ' . '<br>'
							. '| ´__|' . '<br>'
							. '| |   ' . '<br>'
							. '|_|   ' . '<br>'
							. '      ';
				break;
				
			case 's':
				$charAscii =  '      ' . '<br>'
							. ' ___  ' . '<br>'
							. '/ __| ' . '<br>'
							. '\__ \ ' . '<br>'
							. '|___/ ' . '<br>'
							. '      ';
				break;
				
			case 't':
				$charAscii =  ' _   ' . '<br>'
							. '| |_ ' . '<br>'
							. '| __|' . '<br>'
							. '| |_ ' . '<br>'
							. ' \__|' . '<br>'
							. '     ';
				break;
				
			case 'u':
				$charAscii =  '       ' . '<br>'
							. ' _   _ ' . '<br>'
							. '| | | |' . '<br>'
							. '| |_| |' . '<br>'
							. ' \__,_|' . '<br>'
							. '       ';
				break;
				
			case 'v':
				$charAscii =  '       ' . '<br>'
							. '__   __' . '<br>'
							. '\ \ / /' . '<br>'
							. ' \ V / ' . '<br>'
							. '  \_/  ' . '<br>'
							. '       ';
				break;
				
			case 'w':
				$charAscii =  '          ' . '<br>'
							. '__      __' . '<br>'
							. '\ \ /\ / /' . '<br>'
							. ' \ V  V / ' . '<br>'
							. '  \_/\_/  ' . '<br>'
							. '          ';
				break;
				
			case 'x':
				$charAscii =  '       ' . '<br>'
							. '__  __ ' . '<br>'
							. '\ \/ / ' . '<br>'
							. ' >  <  ' . '<br>'
							. '/_/\_\ ' . '<br>'
							. '       ';
				break;
				
			case 'y':
				$charAscii =  '       ' . '<br>'
							. ' _   _ ' . '<br>'
							. '| | | |' . '<br>'
							. '| |_| |' . '<br>'
							. ' \__, |' . '<br>'
							. ' |___/ ';
				break;
				
			case 'z':
				$charAscii =  '     ' . '<br>'
							. ' ____' . '<br>'
							. '|_  /' . '<br>'
							. ' / / ' . '<br>'
							. '/___|' . '<br>'
							. '     ';
				break;
		};
		return str_replace(' ', '&nbsp;', $charAscii);
	};
	$captchaChar = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'Ñ', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'ñ', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
	$captchaChar1 = $captchaChar[mt_rand(0, count($captchaChar)-1)];
	$captchaChar2 = $captchaChar[mt_rand(0, count($captchaChar)-1)];
	$captchaChar3 = $captchaChar[mt_rand(0, count($captchaChar)-1)];
	$captchaChar4 = $captchaChar[mt_rand(0, count($captchaChar)-1)];
	$captchaChar5 = $captchaChar[mt_rand(0, count($captchaChar)-1)];
	$captchaChar6 = $captchaChar[mt_rand(0, count($captchaChar)-1)];
	$captchaResult = $captchaChar1 . $captchaChar2 . $captchaChar3 . $captchaChar4 . $captchaChar5 . $captchaChar6;
?>
<div id="captcha">
	<font face="Monospace, Consolas,Courier New,Droid Sans Mono,Mónaco,Profont">
		<div style="display: inline-block;">
			<?=CaptchaAscii($captchaChar1);?>
		</div>
		<div style="display: inline-block;">
			<?=CaptchaAscii($captchaChar2);?>
		</div>
		<div style="display: inline-block;">
			<?=CaptchaAscii($captchaChar3);?>
		</div>
		<div style="display: inline-block;">
			<?=CaptchaAscii($captchaChar4);?>
		</div>
		<div style="display: inline-block;">
			<?=CaptchaAscii($captchaChar5);?>
		</div>
		<div style="display: inline-block;">
			<?=CaptchaAscii($captchaChar6);?>
		</div>
	</font>
</div>
<?=$captchaResult?>
