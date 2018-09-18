<?php

function changeTitle($str,$strSymbol = '-', $case=MB_CASE_LOWER){
	// MB_CASE_UPPER/MB_CASE_TITLE/MB_CASE_LOWER
	$str=trim($str);
	if($str=="") return "";
	$str=str_replace('"', '', $str);
	$str=str_replace("'", '', $str);
	$str=stripUnicode( $str);
	$str=mb_convert_case($str,$case,'utf-8');
	$str=preg_replace('[\W|_]+/',$strSymbol, $str);
	return $str;
}

function stripUnicode($str){
	if (!$str) return '';

	$unicode = array(
		'a'=>'á|à|ả|ã|ạ|ă|ằ|ắ|ẵ|ặ|â|ấ|ầ|ẫ|ẩ|ậ',
		'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ằ|Ẵ|Ẳ|Ặ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
		'u'=>'ú|ù|ũ|ủ|ụ|ư|ừ|ứ|ử|ữ|ự',
		'U'=>'U|Ù|Ú|Ủ|Ũ|Ụ|Ư|Ừ|Ứ|Ử|Ữ|Ự',
		'e'=>'ê|ề|ế|ể|ễ|ệ|è|é|ẻ|ẽ|ẹ',
		//còn nhiều
	);
	foreach ($unicode as $khongdau => $codau) {
		$arr=explode("|", $codau);
		$str=str_replace($arr, $khongdau, $str);
	}
	return $str;
}


?>