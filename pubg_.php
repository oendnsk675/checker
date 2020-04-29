<?php
//*
//*
//*
//*
error_reporting(0);

function get($url)
{

     $ch = curl_init();
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
     curl_setopt($ch, CURLOPT_HEADER, 1);
     curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
     curl_setopt($ch, CURLOPT_URL, $url);
     $res = curl_exec($ch);

	 return $res;
}

function login($url, $data, $header=true)

{
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	$page = curl_exec($ch);

	return $page;
}
function cari($string, $start, $end)
{
		  $str = explode($start, $string);
		  $str = explode($end, $str[1]);
		  return $str[0];
}
function inStr($s, $as)
{
	    $s = strtoupper($s);
	    if(!is_array($as)) $as=array($as);
	    for($i=0;$i<count($as);$i++) if(strpos(($s),strtoupper($as[$i]))!==false) return true;
	    return false;
}
?>