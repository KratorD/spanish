<?php
/**
 * Zikula Application Framework
 *
 * @copyright (c) 2004, Zikula Development Team
 * @link http://www.zikula.org
 * @version $Id: user.php 22138 2007-06-01 10:19:14Z markwest $
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 * @package Zikula_System_Modules
 * @subpackage  Zikula_Errors
 */

/**
 * translated by
 * @author Mateo Tibaquira [mateo]
 */

// 404 template
define('_ERRORS_404', 'P�gina no encontrada');
define('_ERRORS_MAILED','Los detalles de este error son autom�ticamente enviados al correo electr�nico del administrador del sitio.');
define('_ERRORS_SORRY_404','Lo sentimos. La p�gina que solicitaste, %page%, no existe en "%sitename%".');
define('_ERRORS_SEARCH', 'Buscar');
define('_ERRORS_USESEARCH', 'Tambi�n puedes <a href="%url%">buscar</a> en este sitio para encontrar lo que est�s buscando.');

// 403 template
define('_ERRORS_403', 'Acceso Denegado');
define('_ERRORS_LOGIN', 'Iniciar sesi�n');
define('_ERRORS_LOGINTEXT', 'No est�s conectado. <a href="%url%">Iniciando sesi�n</a> <em>quiz�s</em> tengas permisos de acceder a esta p�gina.');
define('_ERRORS_SORRY_403', 'Disculpa! No tienes autorizaci�n para acceder a esta p�gina');

// error type text
define('_ERRORS_USER_NOTICE', 'Error no cr�tico');
define('_ERRORS_USER_NOTICE_TEXT', 'Ha ocurrido un error no cr�tico. El siguiente mensaje de error fue retornado por el sistema');
define('_ERRORS_USER_WARNING', 'Advertencia');
define('_ERRORS_USER_WARNING_TEXT', 'Ha ocurrido un error no cr�tico. El siguiente mensaje de error fue retornado por el sistema');
define('_ERRORS_USER_ERROR', 'Error cr�tico');
define('_ERRORS_USER_ERROR_TEXT', 'Ha ocurrido un error desconocido. El siguiente mensaje de error fue retornado por el sistema');
define('_ERRORS_USER_UNKNOWN', 'Error desconocido');
define('_ERRORS_USER_UNKNOWN_TEXT', 'Ha ocurrido un error desconocido. El siguiente mensaje de error fue retornado por el sistema');

// system error template
define('_ERRORS_SYSTEMERROR', 'Error del Sistema');
define('_ERRORS_TECHNICALINFO', 'Informaci�n t�cnica adicional');
// additional text appended to any error mesages should the user have administrative permissions
// format is error message (_ERRORS_LOCATION)
define('_ERRORS_LOCATION', 'archivo <strong>%file%</strong> en la l�nea %line%');

// general error template
define('_ERRORS_ERROR', 'Error en %sitename%');
