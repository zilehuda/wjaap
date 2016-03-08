<?php
header('Content-Type:text/html;charset=utf-8');
function youdao ($text) {
    if(empty($text))return false;
    $text = urlencode($text);
    //$doctype = "xml|json|jsonp";
    $url = "http://fanyi.youdao.com/openapi.do?keyfrom=mx2014com&key=2086412533&type=data&doctype=json&version=1.1&q=" . $text;
    $info = file_get_contents($url);
    $info = json_decode($info);
    $info = $info->translation;
    return $info[0];
}

function farsinum($str)
 {
   $ret = "";
   for ($i = 0; $i < strlen($str); ++$i) {
         $c = $str[$i];
         if( $c >= '0' && $c <= '9' )
                 $out .= pack("C*", 0xDB, 0xB0 + $c);
         else
                 $ret .= $c;
   }
   return $ret;
 } 

print_r(farsinum('he12356llo Worlssd '));die;

// Strips the UTF-8 mark: (hex value: EF BB BF)
function trimUTF8BOM($data){ 
    if(substr($data, 0, 3) == pack('CCC', 239, 187, 191)) {
        return substr($data, 3);
    }
    return $data;
 }


$data = 'abcdessdf';
var_dump(trimUTF8BOM($data));


if (@$HTTP_SERVER_VARS["HTTP_X_FORWARDED_FOR"]) {
	$ip = $HTTP_SERVER_VARS["HTTP_X_FORWARDED_FOR"];
} elseif (@$HTTP_SERVER_VARS["HTTP_CLIENT_IP"]) {
	$ip = $HTTP_SERVER_VARS["HTTP_CLIENT_IP"];
} elseif (@$HTTP_SERVER_VARS["REMOTE_ADDR"]) {
	$ip = $HTTP_SERVER_VARS["REMOTE_ADDR"];
} elseif (getenv("HTTP_X_FORWARDED_FOR")) {
	$ip = getenv("HTTP_X_FORWARDED_FOR");
} elseif (getenv("HTTP_CLIENT_IP")) {
	$ip = getenv("HTTP_CLIENT_IP");
} elseif (getenv("REMOTE_ADDR")) {
	$ip = getenv("REMOTE_ADDR");
} else {
	$ip = "Unknown";
}

echo $ip;die;

