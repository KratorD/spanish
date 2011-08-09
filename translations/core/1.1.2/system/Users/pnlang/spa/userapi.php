<?php
/**
 * Zikula Application Framework
 *
 * @copyright (c) 2001, Zikula Development Team
 * @link http://www.zikula.org
 * @version $Id: userapi.php 22281 2007-06-26 19:27:44Z markwest $
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 * @author Xiaoyu Huang
 * @package Zikula_System_Modules
 * @subpackage Users
*/

/**
 * translated by
 * @author Mateo Tibaquira [mateo]
 */

// welcome e-mail
define('_USERS_YOURACCOUNTPENDING', 'Tu solicitud de registro esta pendiente para ser revisada por el administrador del sitio. Por favor se paciente. La confirmaci�n se te enviar� por correo electr�nico despu�s de la revisi�n.');
define('_USERS_FOLLOWINGMEM','La informaci�n almacenada sobre usted es la siguiente:');
define('_USERS_KEEPTHISEMAILSAFE', 'Por favor manten este mensaje de correo electr�nico seguro: es el �nico recordatorio de tu contrase�a.');
define('_USERS_USEDEMAILTOREGISTER','Tu � alguien m�s ha usado tu correo electr�nico (%email%) para registrar una cuenta en %sitename%.');
define('_USERS_WELCOMESUBJECT','Contrase�a para %uname% desde %sitename%');
define('_USERS_WELCOMETOSITE', 'Bienvenido a %sitename% (%siteurl%)!');
define('_USERS_YOURAPPLICATIONAPPROVED', 'Gracias por tu comprensi�n. Su solicitud de registro ha sido aprobada. Tu contrase�a fue enviada en el mensaje que recibiste previamente.');
define('_USERS_YOUCANCHANGEITAT','Puedes cambiarla despues de iniciar sesi�n en %url%');

// password e-mail
define('_USERS_ACCOUNTHASEMAIL','la cuenta de usuario \'%uname%\' en %sitename% tiene este correo electr�nico asociado a esta.');
define('_USERS_AWEBUSERHASREQUESTEDPASSWORD','Alguien con esta direcci�n IP %hostname% acaba de solicitar que se env�e una contrase�a.');
define('_USERS_IFYOUDIDNOTASK','Si tu no hiciste esta petici�n, no te preocupes. Tu estas viendo este mensaje, no \'ellos\'. Si esto fue un error simplemente ingresa con tu nueva contrase�a.');
define('_USERS_PASSWORDFOR','Contrase�a para %uname%');
define('_USERS_YOURNEWPASSWORDIS','Tu nueva contrase�a es: %password%.');

// lost password code e-mail
define('_USERS_CODEFOR','C�odigo de confirmaci�n para %uname%');
define('_USERS_AWEBUSERHASREQUESTEDCODE', 'Alguien con la direcci�n IP %hostname% acaba de solicitar un c�digo de confirmaci�n para cambiar tu contrase�a.');
define('_USERS_YOURCODEIS','Tu c�digo de confirmaci�n es: %code%');
define('_USERS_WITHTHISCODE','Con este c�digo de confirmaci�n, puedes crear una nueva contrase�a haciendo click en %url%');
define('_USERS_IFYOUDIDNOTASK2','Si no solicitaste este c�digo, no te preocupes. S�lo borra este mensaje.');

// activation e-mail
define('_USERS_ACTIVATIONSUBJECT', 'Activaci�n de %uname%');
define('_USERS_ACIVATEYOURACCOUNTLINK', 'Por favor haz click en el siguiente enlace para completar el proceso de registro.');
define('_USERS_ONCEACTIVATED', 'Una vez activada, la informaci�n de su cuenta ser� la siguiente:');

// admin notification e-mail
define('_USERS_NOTIFYREGEMAILSUBJECT','Un nuevo usuario se ha registrado en el sitio!'); 
define('_USERS_NOTIFYREGEMAILBODY','Un nuevo miembro se ha registrado en el sitio. Nombre de usuario: %uname% '); 
define('_USERS_NOTIFYACTEMAILSUBJECT','Una nueva cuenta de usuario ha sido activada en el sitio!'); 
define('_USERS_NOTIFYACTEMAILBODY','Una nueva cuenta de usuario ha sido activada en el sitio. Nombre de usuario: %uname% '); 

// session expired template
define('_USERS_SESSIONEXPIREDHEADER', 'Tu sesi�n ha expirado.');
define('_USERS_SESSIONEXPIREDTEXT', 'Por tu seguridad, esta sesi�n ha expirado porque has estado inactivo. Por favor <a href="%u%">inicia sesi�n</a> de nuevo para acceder a los servicios.');
