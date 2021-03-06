<?php
/**
 * Este archivo forma parte del Framework Nimter.
 *
 * Para más información acerca de los derechos de autor y la licencia, ver el archivo LICENSE.
 *  
 * PHP versión 7.1.3
 *
 * @package Nimter\Core\controllers
 * @author Alexis Mora <alexis.mora1v@gmail.com>
 * @version 1.2.0
 */

namespace Nimter\Core\Controllers;

/**
 * Class Icontrollers
 * 
 * Interfaz de la clase Controlllers
 */
interface Icontrollers
{
    public function __construct();
    public function start();
    public function render(string $view, array $params = array());
}
