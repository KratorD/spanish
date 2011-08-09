<?php
/**
 * Zikula Application Framework
 * @copyright (c) 2001, Zikula Development Team
 * @link http://www.zikula.org
 * @version $Id: userapi.php 22138 2007-06-01 10:19:14Z markwest $
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 * @package Zikula_System_Modules
 * @subpackage SecurityCenter
*/

/**
 * translated by
 * @author Mateo Tibaquira [mateo]
 */

define('_SECURITYCENTER_EMAILEMAILSECTIONBREAKER','\n=====================================\n');
define('_SECURITYCENTER_EMAILATTENTION','Para la atenci�n del administrador del sitio %sitename.\n');
define('_SECURITYCENTER_ANTICRACKERATDATEANDTIME','El %date a las %time');
define('_SECURITYCENTER_EMAILDETECTEDANDBLOCKED',' el c�digo de Zikula detect� que alguien trat� de enviar informaci�n a tu sitio que pudo haber sido planeado como un ataque. No entre en p�nico: podr�a ser inofensivo -- quiz�s esta detecci�n fue provocada por algo que usted hizo! De todos modos, fue detectado y bloqueado.\n');
define('_SECURITYCENTER_EMAILFILELINEANDTYPE','La actividad sospechosa fu� reconocida en el archivo %file en la l�nea %line, y es del tipo %type. \n');
define('_SECURITYCENTER_EMAILADDINITIONALINFO','Informaci�n adicional entregada por el c�digo que detect� esto: %info');
define('_SECURITYCENTER_EMAILSTARTFULLREPORT','\n\nAbajo usted encontrar� mucha informaci�n acerca de este ataque, esto puede ayudarle a usted para que encuentre lo que ocurri� y tal vez a quien lo hizo.\n\n');
define('_SECURITYCENTER_EMAILUSERINFOHEADER','Informaci�n acerca de este usuario:\n');
define('_SECURITYCENTER_EMAILNOTLOGGEDIN','Esta persona no estaba conectada.\n');
define('_SECURITYCENTER_ANTICRACKERUSERINFO','Nombre de usuario:  %uname\nCorreo electr�nico registrado de este usuario: %email\nNombre verdadero registrado de este usuario: %name');
define('_SECURITYCENTER_EMAILIPNUMBERS','Direcci�n IP: [nota: si est�s tratando con un cracker real, esta direcci�n IP puede que no sea la del computador de el/ella]\n\t IP de acuerdo a HTTP_CLIENT_IP: %HTTP_CLIENT_IP\n\t IP de acuerdo a REMOTE_ADDR: %REMOTE_ADDR\n\t IP de acuerdo a GetHostByName(\$REMOTE_ADDR): %$REMOTE_ADDR\n\n');
define('_SECURITYCENTER_EMAILREQUESTARRAY','Informaci�n en el arreglo \$_REQUEST \n');
define('_SECURITYCENTER_EMAILGETARRAY','Informaci�n en el arreglo \$_GET\nEsto es acerca de las variables que pueden haber estado presentes en la URL o en un formulario tipo \'GET\'.\n');
define('_SECURITYCENTER_EMAILPOSTARRAY','Informaci�n en el arreglo \$_POST\nEsto es acerca de elementos de formulario visibles e invisibles.\n');
define('_SECURITYCENTER_EMAILBROWSERINFO','Informaci�n del navegador\n');
define('_SECURITYCENTER_EMAILSERVERARRAY','Informaci�n en el arreglo \$_SERVER\n');
define('_SECURITYCENTER_EMAILENVARRAY','Informaci�n en el arreglo \$_ENV\n');
define('_SECURITYCENTER_EMAILCOOKIEARRAY','Informaci�n en el arreglo \$_COOKIE\n');
define('_SECURITYCENTER_EMAILFILESARRAY','Informaci�n en el arreglo \$_FILES\n');
define('_SECURITYCENTER_EMAILSESSIONARRAY','Informaci�n en el arreglo \$_SESSION\nEsta es la informaci�n de la sesi�n. Las variables\nempezando con ZSV son ZikulaSessionVariables.\n');
define('_SECURITYCENTER_EMAILEMAILSUBJECT','Intento de ataque a tu sitio? (tipo: %hack_type)');
