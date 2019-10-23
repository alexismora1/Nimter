<?php
/**
 * Este archivo forma parte del Framework Nimter.
 *
 * Para más información acerca de los derechos de autor y la licencia, ver el archivo LICENSE.
 *
 * PHP versión 7.1.3
 *
 * @package Nimter\Core\Helpers
 * @author Alexis Mora <alexis.mora1v@gmail.com>
 * @version 1.3.0
 */

namespace Nimter\Core\Helpers;

/**
 * Class Sessions
 *
 * Clase para mantener las sesiones del navegador
 */
class Sessions
{
   /**
    * Function session_init
    *
    * Función estatica que inicializa la sesión
    *
    * @return void
    **/
   public static function sessionInit()
   {
      if ( session_id() === '' )
      {
         //Nombre de la session
         session_name(getenv('SESSION_NAME'));

         //Establece la duracion de las cookies y la sesión, e inicializa la sesión en el navegador
         session_set_cookie_params(getenv('SESSION_LIFETIME'));
         ini_set('session.gc_maxlifetime', getenv('SESSION_LIFETIME'));
         session_start(['cookie_lifetime' => getenv('SESSION_LIFETIME'), ]);
      }
   }

   /**
    * Function set
    *
    * Función que crea una variable de sesión
    *
    * @param string $name - Nombre de la variable de sesión
    * @param $value - Valor de la variable de sesión
    * @return void
    **/
   public static function set(string $name, $value)
   {
      $_SESSION[$name] = $value;
   }

   /**
    * Function get
    *
    * Función que obtiene la varaiables de sesión
    *
    * @param string $name - Nombre de la variable de sesión
    * @return void
    **/
   public static function get(string $name)
   {
      if (isset($_SESSION[$name])) {
         return $_SESSION[$name];
      } else {
         return null;
      }
   }

   /**
    * Function delete
    *
    * Función que eleimina una varaible de sesión
    *
    * @param string $name - Nombre de la variable de sesión
    * @return void
    **/
   public static function delete(string $name)
   {
      if (isset( $_SESSION[$name])) {
         unset($_SESSION[$name]);
      }
   }

   /**
    * Function destroy
    *
    * Función que elimina el arreglo de sesión y destruye la sesión
    *
    * @return void
    **/
   public static function destroy()
   {
      session_destroy();
      unset($_SESSION);
   }
}