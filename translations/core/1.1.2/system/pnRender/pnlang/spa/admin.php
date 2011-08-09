<?php
/**
 * $Id: admin.php 22138 2007-06-01 10:19:14Z markwest $
 *
 * * pnRender *
 *
 * Zikula wrapper class for Smarty
 *
 * * License *
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU GENERAL PUBLIC LICENSE (GPL)
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY -- without even the implied warranty -- of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * @author      Zikula Development Team
 * @version     .7/.8
 * @link        http://www.zikula.org                 Zikula home page
 * @link        http://smarty.php.net                 Smarty home page
 * @license     http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @package     Zikula_System_Modules
 * @subpackage  pnRender
 */

/**
 * translated by
 * @author Mateo Tibaquira [mateo]
 */

define('_PNRENDER_ADMIN',                'Administraci�n de pnRender');
define('_PNRENDER_SMARTYVERSION',        'Versi�n de <a href="http://smarty.net">Smarty</a>');

define('_PNRENDER_COMPILE_SETTINGS',     'Ajustes de compilaci�n');
define('_PNRENDER_COMPILE_CHECK',        'Checkeo de compilaci�n');
define('_PNRENDER_FORCE_COMPILE',        'Forzar compilaci�n');
define('_PNRENDER_CLEAR_COMPILED',       'Borrar plantillas compiladas');
define('_PNRENDER_COMPILED_CLEARED',     'Plantillas compiladas borradas');
define('_PNRENDER_COMPILE_DIR',          'Carpeta para las plantillas compiladas');

define('_PNRENDER_CACHE_SETTINGS',       'Ajustes de cache');
define('_PNRENDER_CACHE_ENABLE',         'Habilitar cache');
define('_PNRENDER_CACHE_LIFETIME',       'Tiempo de vida para p�ginas cacheadas');
define('_PNRENDER_CLEAR_CACHED',         'Borrar p�ginas cacheadas');
define('_PNRENDER_CACHE_CLEARED',        'Cach� limpiado');
define('_PNRENDER_CACHE_DIR',            'Carpeta para las plantillas cacheadas');
define('_PNRENDER_CACHETIMENOTE1',       'Un tiempo de vida de 0 pone al cache a regenerarse siempre - equivalente a no cachear.');
define('_PNRENDER_CACHETIMENOTE2',       'Un tiempo de vida de -1 har� que el cache nunca expire'); 

define('_PNRENDER_DEBUG_SETTINGS',       'Ajustes de depuraci�n');
define('_PNRENDER_EXPOSE_TEMPLATE',      'Exponer informaci�n de la plantilla entre comentarios');
define('_PNRENDER_EXPOSE_TEMPLATEHINT',  'Cuidado: Cuando uses themes como RSS esta opci�n da�ar� tu salida RSS!');
