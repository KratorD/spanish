<?php
/**
 * Zikula Application Framework
 *
 * @copyright (c) 2001, Zikula Development Team
 * @link http://www.zikula.org
 * @version $Id: user.php 22851 2007-10-07 17:08:59Z landseer $
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 * @package Zikula_System_Modules
 * @subpackage Users
*/

/**
 * translated by
 * @author Mateo Tibaquira [mateo]
 */

// general
define('_USERS', 'Cuentas de Usuario');

// view template
define('_USERS_REGISTER', 'Registrarse');
define('_USERS_REGISTRATIONANDLOGIN', 'Iniciar sesi�n & Registro');
define('_USERS_RETRIEVEPASS', 'Recuperar de contrase�a perdida');
define('_USERS_SELECTOPTION', 'Por favor escoge una opci�n:');

// loginscreen template
define('_USERS_REMEMBERME', 'Recordarme');

// check age template
//define('_USERS_CONSENT', '(Haciendo click en el enlace de arriba certificas que tienes %a% a�os o m�s, o que tienes consentimiento de tus padres para registrarte aqu�.)');
define('_USERS_MUSTBE', 'Se requiere que tengas %a% a�os o m�s, o tener consentimiento de tus padres para crear una cuenta en este sitio. Por favor haz la selecci�n apropiada abajo:');
define('_USERS_OVERAGE', 'Tengo %a% o m�s, o tengo consentimiento de mis padres.');
define('_USERS_REGISTRATION', 'Registro de nueva cuenta');
define('_USERS_UNDERAGE', 'Soy menor de %a%, y no tengo consentimiento de mis padres.');

// registration page
define('_USERS_SUBMITREGISTRATION', 'Enviar Registro');
define('_USERS_ADDITIONALINFO', 'Informaci�n Adicional');
define('_USERS_ALLOWEMAILVIEW','Permitirle a otros usuarios ver tu correo electr�nico');
define('_USERS_COOKIEWARNING','Debido a que varias caracter�sticas de este sitio usan cookies, se recomienda tener habilitadas las cookies en la configuraci�n de tu navegador.');
define('_USERS_EMAILAGAIN','Correo electr�nico (verificaci�n)');
define('_USERS_PASSWDAGAIN','Contrase�a (verificaci�n)');
define('_USERS_PASSWILLSEND','Cuando el registro sea completado, tu contrase�a ser� enviada al correo electr�nico ingresado.');
//define('_USERS_REGNEWUSER','Registro de nuevo usuario');
define('_USERS_REGISTRATIONAGREEMENT','Estoy de acuerdo con los <a href="%touurl%">T�rminos de Uso</a> y las <a href="%ppurl%">Pol�ticas de Privacidad</a> de este sitio');
define('_USERS_REGISTRATIONAGREEMENTTOU','Estoy de acuerdo con los <a href="%touurl%">T�rminos de Uso</a> de este sitio'); 
define('_USERS_REGISTRATIONAGREEMENTPP','Estoy de acuerdo con la <a href="%ppurl%">Pol�tica de Privacidad</a> de este sitio'); 
define('_USERS_REGISTRATIONCHECK', 'Verifica tus datos');
//define('_USERS_REGISTERNOW','Reg�strate ahora! Es gratis!');
//define('_USERS_WEDONTGIVE','Tu informaci�n personal no ser� vendida o entregada a otros.');
define('_USERS_REQUIREDLABEL', '*'); 
define('_USERS_REQUIREDTEXT','* Indica un campo obligatorio.');

// terms of use (tied to the legal module
define('_USERS_CONFIRMTERMSOFUSEHINT', 'Los T�rminos de Uso han cambiado. Por favor lee y acepta la nueva versi�n activando la siguiente casilla de verificaci�n. Si no los aceptas, desafortunadamente, no ser�s capaz de iniciar sesi�n.');
define('_USERS_CONFIRMTERMSOFUSE', 'Acepto los <a href="' . pnConfigGetVar('entrypoint', 'index.php') . '?module=Legal&amp;func=termsofuse">T�rminos de Uso</a>');

// finished registration template
define('_USERS_RETURNTOSTART', 'Regresar a la p�gina de inicio');

// lost password template
define('_USERS_CONFIRMATIONCODE','C�digo de confirmaci�n');
define('_USERS_NOPROBLEM','Por favor suministra YA SEA tu nombre de usuario � tu correo electr�nico a continuaci�n y haz click en el bot�n \'Enviar\'. Deja abierta �sta p�gina. A tu correo electr�nico llegar� un c�digo de confirmaci�n. Revisa tu correo, copia tu c�digo de confirmaci�n y vuelve a esta p�gina: digita YA SEA tu nombre de usuario � correo electr�nico m�s el c�digo de confirmaci�n que recibiste en el siguiente formulario, y haz click en el bot�n \'Enviar\'. Una nueva contrase�a ser� generado y enviado a tu correo, y entonces podr�s iniciar sesi�n con esa nueva contrase�a.');
define('_USERS_PASSWORDLOST','Recuperaci�n de Contrase�a Perdida');
define('_USERS_SENDPASSWORD','Enviar');

// login/logout templates
define('_USERS_LOGGINGREDIRECT', 'Si no eres redireccionado autom�ticamente, entonces haz click aqu�.');
define('_USERS_LOGGINGYOUIN', 'Iniciando sesi�n. Por favor espera...');
define('_USERS_YOUARELOGGEDOUT', 'Sesi�n cerrada exitosamente.');
define('_USERS_YOUARENOTLOGGEDOUT', 'Tu sesi�n no ha sido cerrada.');

// status/error messages
define('_USERS_ACTIVATIONINFO', 'Usa el enlace en el correo para activar tu cuenta.');
define('_USERS_AGEREQUIREMENTNOTMET','Error! debes tener %a% a�os o m�s, o tener consentimiento de tus padres para registrarte aqu�.');
define('_USERS_APPLICATIONRECEIVED', 'Gracias por registrarte! Tu solicitud ser� revisada en breve.');
define('_USERS_CODEMAILED','C�digo enviado al correo de %uname%');
define('_USERS_EMAILDOMAINBANNED','Error! este dominio de correo ha sido baneado para los registros.');
define('_USERS_EMAILREGISTERED','Error! este correo electr�nico ya est� registrado');
define('_USERS_EMAILSDIFF', 'No digistaste el mismo correo electr�nico en ambos cajas de texto. Por favor corrije y vuelve a intentarlo.');
define('_USERS_ERRORINREQUIREDFIELDS', 'Error! uno o m�s campos requeridos los dejaste en blanco o incompletos.');
define('_USERS_ERRORMUSTAGREE','Por favor confirma si aceptas los T�rminos de Uso y las Pol�ticas de Privacidad.');
define('_USERS_ERRORMUSTAGREETOU','Por favor confirma si aceptas los T�rminos de Uso.'); 
define('_USERS_ERRORMUSTAGREEPP','Por favor confirma si aceptas las Pol�ticas de Privacidad.'); 
define('_USERS_INVALIDREGCODE','Error! has suministrado un c�digo de registro no v�lido');
define('_USERS_LOGININCOMPLETE', 'Inicio de sesi�n incompleto, por favor lee la siguiente nota');
define('_USERS_LOGININCORRECT','Error! Nombre de usuario no reconocido o contrase�a no v�lida. Por favor vuelve a intentarlo...');
define('_USERS_MISSINGUSERNAME','Por favor digita un nombre de usuario.<br /><a href="javascript:history.back()">Click aqu� para volver</a>.');
define('_USERS_NOPROBLEMDETECTED', 'La informaci�n parece v�lida, haz click en \'Enviar Registro\' para continuar.');
define('_USERS_NOTALLOWREG','Disculpa! El registro de nuevos usuarios est� actualmente deshabilitado');
define('_USERS_NOTALLOWREGREASONS','Razones:');
define('_USERS_NOUSERINFOFOUND','Error! no se encontro la cuenta de usuario correspondiente');
define('_USERS_PASSWORDMAILED','Contrase�a enviada al correo electr�nico de %uname%');
define('_USERS_PASSWORDREQUIRED','Error! por favor digita una contrase�a.');
define('_USERS_PPROFILEMODULENOTAVAILABLE','Error! por favor instala el m�dulo Profile primero!');
define('_USERS_REGISTRATIONFAILED','Error! registro fallido. Por favor contacta al administrador.');
define('_USERS_USERACTIVATIONFAILED', 'Error! la activaci�n de tu cuenta ha fallado. Por favor contacta al administrador.');
define('_USERS_USERACTIVATED','Cuenta activada');
define('_USERS_USERAGENTBANNED','Error! ese agente de usuario est� baneado');
define('_USERS_USERNAMEINVALID','Disculpa! ese nombre de usuario no es aceptable. Por favor corrige e intenta de nuevo.');
define('_USERS_USERNAMENOSPACES','Error! tu nombre de usuari on o puede contener ning�n espacio');
define('_USERS_USERNAMETAKEN','Error! ese nombre de usuario ya est� registrado');
define('_USERS_USERNAMERESERVED','Error! ese nombre de usuario est� reservado');
define('_USERS_USERNAMETOOLONG','Error! ese nombre de usuario es muy largo. Tiene que tener menos de 25 letras de largo');
define('_USERS_YOUAREREGISTERED','Ahora est�s registrado!. Deber�s recibir tu informaci�n de la cuenta, incluyendo tu contrase�a, al correo electr�nico que has proporcionado.');
define('_USERS_YOURPASSMUSTBETHISLONG','Error! tu contrase�a debe tener al menos %x% caracteres');
define('_USERS_ACCOUNTPOSSIBLYINACTIVE', 'Si acabas de registrarte, por favor revisa tu correo electr�nico para activar tu cuenta antes de iniciar sesi�n.');

// users block - these defines are here because the blockey is 'user'
// hence this file is loaded by the block
define('_USERS_USERSBLOCK', 'Bloque personal');
define('_USERS_USERSBLOCKCONFIG', 'Configurar bloque personal');
define('_USERS_USERBLOCKENABLEHELP', 'Contenido del bloque');
define('_USERS_USERBLOCKENABLE', 'habilitar tu bloque de men� personal');
//define('_USERS_USERBLOCKCONTENTTIP', 'Tip: puedes usar c�digo HTML para incluir enlaces a p�ginas web en este sitio o en otro.');
define('_USERS_USERBLOCKUPDATED', 'Hecho! Bloque personal actualizado');
define('_USERS_USERBLOCKMENUFOR', 'Men� de %user%');

//new reg template
define('_USERS_REGTEXT', 'En este sitio tu puedes crear tu propio perfil de usuario en s�lo 4 pasos. Una vez que est�s registrado ganar�s acceso a caracter�sticas avanzadas.');
define('_USERS_REG_STEP1', 'Paso 1: Escoge tu nombre de usuario');
define('_USERS_REG_STEP2', 'Paso 2: Digita tu correo electr�nico');
define('_USERS_REG_STEP2_WITHPASSWORD', 'Step 2: Digita tu contrase�a y tu correo electr�nico');
define('_USERS_REG_STEP3', 'Paso 3: Acepta los T�rminos de Uso y escoge la visibilidad de tu correo electr�nico');
define('_USERS_REG_STEP4_ADDITIONALINFO', 'Paso 4: El registro a este sitio requiere la siguiente informaci�n adicional');
define('_USERS_REG_STEP4_SPAM', 'Paso 4: En orden de prevenir registros autom�ticos por favor responde la siguiente pregunta');
define('_USERS_REG_STEP5_SPAM', 'Paso 5: En orden de prevenir registros autom�ticos por favor responde la siguiente pregunta');
define('_USERS_REG_LASTSTEP', 'Finalmente, verifica tus datos y env�alos!');
