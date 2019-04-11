<?php  
/**
 * Este archivo forma parte del Framework Nimter.
 *
 * Para más información acerca de los derechos de autor y la licencia, ver el archivo LICENSE.
 *  
 * PHP versión 7.1.3
 *
 * @package Nimter\Core\router
 * @author Alexis Mora <alexis.mora1v@gmail.com>
 * @version 1.2.0
 */

namespace Nimter\Core\Helpers;

use Nimter\Core\Init\ConfigReader AS config;

/**
 * Class Hashtext
 * 
 * Clase para cifrar cadenas de texto
 */
class Hashtext
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
		$config = config::config();

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
		$config = config::config();

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