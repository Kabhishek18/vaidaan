<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
##Function names##
force_ssl
generateUUID
generateOrderID
trimDropDown
*/
if ( ! function_exists('force_ssl'))
{
	function force_ssl() {		
		if (!isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] != "on") {
			$url = "https://". $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
			redirect($url);
			exit;		
		}	
	}
}



if ( ! function_exists('generateUUID'))
{
	function generateUUID(){
		$charid = md5(uniqid(rand(), true).time());
		$hyphen = chr(45);// "-"
		$uuid = substr($charid, 0, 8).$hyphen
		  .substr($charid, 8, 4).$hyphen
		  .substr($charid,12, 4).$hyphen
		  .substr($charid,16, 4).$hyphen
		  .substr($charid,20,12);
		return $uuid;
	}
}



if ( ! function_exists('encrypt'))
{
	function encrypt($plainText,$key)
	{
		$key = hextobin(md5($key));
		$initVector = pack("C*", 0x00, 0x01, 0x02, 0x03, 0x04, 0x05, 0x06, 0x07, 0x08, 0x09, 0x0a, 0x0b, 0x0c, 0x0d, 0x0e, 0x0f);
		$openMode = openssl_encrypt($plainText, 'AES-128-CBC', $key, OPENSSL_RAW_DATA, $initVector);
		$encryptedText = bin2hex($openMode);
		return $encryptedText;
	}
}

if ( ! function_exists('decrypt'))
{
	function decrypt($encryptedText,$key)
	{
		$key = hextobin(md5($key));
		$initVector = pack("C*", 0x00, 0x01, 0x02, 0x03, 0x04, 0x05, 0x06, 0x07, 0x08, 0x09, 0x0a, 0x0b, 0x0c, 0x0d, 0x0e, 0x0f);
		$encryptedText = hextobin($encryptedText);
		$decryptedText = openssl_decrypt($encryptedText, 'AES-128-CBC', $key, OPENSSL_RAW_DATA, $initVector);
		return $decryptedText;
	}
}


if ( ! function_exists('hextobin'))
{
	function hextobin($hexString) 
	 { 
		$length = strlen($hexString); 
		$binString="";   
		$count=0; 
		while($count<$length) 
		{       
		    $subString =substr($hexString,$count,2);           
		    $packedString = pack("H*",$subString); 
		    if ($count==0)
		    {
				$binString=$packedString;
		    } 
		    
		    else 
		    {
				$binString.=$packedString;
		    } 
		    
		    $count+=2; 
		} 
	        return $binString; 
	  } 
}	  
?>
