<?php  
/**
 * Class hashtext
 * 
 *  Clase para encriptar cadenas de texto.
 *  
 * PHP versión 7.1.3
 *
 * @package Nimter Framework
 * @author Alexis Mora
 * @version 1.2.0
 * 
 **/

namespace Nimter\Core\helpers;

class hashtext
{
	/** 
     * Function cipher
	 * 
     * Cifra una cadena de texto
     * 
	 * @param string $text
     * @return string - Devuelve una cadena cifrada
	 * 
     **/
	public static function cipher($text)
	{
		global $config;

		$sk = $config['security']['secret_key'];
		$siv = $config['security']['secret_iv'];
		$sm = $config['security']['method'];

	    $key = hash('sha256', $sk);
	    $iv = substr(hash('sha256', $siv), 0, 16);
	    $hash = openssl_encrypt($text, $sm, $key, 0, $iv);
	    $hash = base64_encode($hash);

	    return $hash;
	}

	/**
	 * Function decrypt
	 *
	 * Descifra una cadena cifrada
	 *
	 * @param string $hash
	 * @return string -  Devuelve una cadena de texto
	 * 
	 **/
	public static function decrypt($hash)
	{
		global $config;

		$sk = $config['security']['secret_key'];
		$siv = $config['security']['secret_iv'];
		$sm = $config['security']['method'];

	    $key = hash('sha256', $sk);
	    $iv = substr(hash('sha256', $siv), 0, 16);
	    $text = openssl_decrypt(base64_decode($hash), $sm, $key, 0, $iv);

	    return $text;
	}	
}
?>