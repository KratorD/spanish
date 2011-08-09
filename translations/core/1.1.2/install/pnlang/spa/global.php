<?php

// installer page language strings
define('_INSTALLER', 'Instalaci�n de Zikula');
define('_INSTALLERPLEASEREFERTOGUIDE', 'Por favor consulta la <a style="color:red" href="docs/install.html" onclick="window.open(\'docs/install.html\');return false;">
Gu�a de instalaci�n</a> durante este proceso');
define('_INSTALLERQUALITY', 'NOTA: Las distribuciones oficiales de Zikula S�LO estan disponibles en zikula.org. Para certeza de la calidad, por favor asegurate que est�s instalando una distribuci�n oficial.');

// installer tasks
define('_INSTALLERTASKS', 'Tareas del instalador');
define('_INSTALLERTASK0', 'Existing Install Login');
define('_INSTALLERTASK1', 'Escoger lenguaje');
define('_INSTALLERTASK2', 'Aceptar licencia');
define('_INSTALLERTASK3', 'Requerimientos del sistema');
define('_INSTALLERTASK4', 'Informaci�n de la Base de Datos');
define('_INSTALLERTASK5', 'Seleccionar tipo de instalaci�n');
define('_INSTALLERTASK6', 'Crear el usuario Administrador');
define('_INSTALLERTASK7', 'Seleccionar p�gina de inicio');
define('_INSTALLERTASK8', 'Seleccionar theme');
define('_INSTALLERTASK9', 'Listo!');

// installer resources
define('_INSTALLERESOURCES', 'Recursos �tiles');
define('_INSTALLERGUIDE', 'Gu�a de instalaci�n');
define('_INSTALLERDOCS', 'Documentaci�n de Zikula');
define('_INSTALLERFORUMS', 'Foros de soporte');

// standard buttons
define('_RECHECK', 'Volver a verificar');

// task templates
// _lang.htm
define('_INSTALLERCHOOSELANG', 'Escoger lenguaje');

// _licence.htm
define('_INSTALLERTHISSCRIPT', 'Este script instalar� la base de datos de Zikula y te ayudar� a ajustar las variables que necesitas para comenzar.
Te llevar� a trav�s de serie de p�ginas. Cada p�gina establece una porci�n diferente del script. Estimamos que este proceso completo
tomar� acerca de diez minutos. En el momento que te quedes atascado, por favor visita nuestro foro de soporte para ayudarte.');
define('_INSTALLERLICENSE', 'Por favor, lea nuestra licencia a trav�s de la GNU Licencia P�blica General. Zikula es desarrollado como software libre,
pero existen ciertos requisitos para la distribuci�n y edici�n.');
define('_INSTALLERGNUURL1', 'http://www.gnu.org/licenses/gpl.html');
define('_INSTALLERGNULINKTEXT1', 'GNU Licencia P�blica General');
define('_INSTALLERGNUURL2', 'http://www.gnu.org/philosophy/');
define('_INSTALLERGNULINKTEXT2', 'Filosof�a del proyecto GNU');
define('_ACCEPTLICENCE', 'Aceptar Licencia');

// _requirements.htm
define('_INSTALLERPHP', 'PHP');
define('_INSTALLERPHPMBSTRINGOK', 'Tu instalaci�n PHP tiene las funciones de cadenas multi-byte disponibles.');
define('_INSTALLERPHPMBSTRINGNOTOK', 'Tu instalaci�n PHP no tiene las funciones de cadenas multi-byte disponibles. Zikula no ser� capaz de manejar caracteres multi-byte.');
define('_INSTALLERPHPTOKENOK', 'Tu instalaci�n PHP tiene las funciones token disponibles.');
define('_INSTALLERPHPTOKENNOTOK', 'Tu instalaci�n PHP no tiene las funciones token disponibles - son requeridas por el sistema de renderizado de Zikula.');
define('_INSTALLERPHPVEROK', 'Tu versi�n de PHP es %v y cumple el requisito del sistema de m�nimo la versi�n 4.3.0.');
define('_INSTALLERPHPVERNOTOK', 'Tu versi�n de PHP es %v y no cumple el requisito del sistema de m�nimo la versi�n 4.3.0.');
define('_INSTALLERFILESYSTEMPERMS', 'Permisos del sistema de archivos');
define('_INSTALLERFILEWRITABLE', '%f es escribible.');
define('_INSTALLERFILENOTWRITABLE', 'No se puede escribir en %f - por favor aseg�rate que los permisos del archivo son correctos.');
define('_INSTALLERWPPERMISSIONURL', 'http://www.wikipedia.org/wiki/File_system_permissions');
define('_INSTALLERWPPERMISSIONLINKTEXT', 'Permisos del sistema de archivos');
define('_INSTALLERPERSONALCONFIG', 'Archivo de configuraci�n personal');
define('_INSTALLERPERSONALCONFIGDOESNOTEXIST', '%f no existe');
define('_INSTALLERPERSONALCONFIGEXISTS', '%f existe. Renombra este archivo antes de continuar con esta instalaci�n.');

// _dbinformation.htm
// database field labels
define('_INSTALLERDBTYPE', 'Tipo de Base de Datos');
define('_INSTALLERDBTABLETYPE', 'Tipo de Tabla (s�lo para MySQL)');
define('_INSTALLERDBHOST', 'Servidor');
define('_INSTALLERDBUSERNAME', 'Usuario');
define('_INSTALLERDBPASSWORD', 'Constrase�a');
define('_INSTALLERDBNAME', 'Nombre de la Base de Datos');
define('_INSTALLERTABLEPREFIX', 'Prefijo de tablas (para compartir tablas)');
define('_INSTALLERCREATEDB', 'Crear la base de datos');
define('_INSTALLERCREATEDBFAILED', 'No se pudo crear la base de datos - por favor verifica la informaci�n y asegurate de tener los suficientes privilegios');
define('_INSTALLERDBINFOFROMHOST', 'Las credenciales de la Base de Datos te las proporciona tu host o administrador.');
define('_INSTALLERCONNECTDBFAILED', 'No se pudo conectar a la base de datos - por favor verifica la informaci�n del formulario');

// database types (used in dbtypes plugin)
define('_INSTALLERDBTYPEMYSQL', 'MySQL');
define('_INSTALLERDBTYPEMYSQLI', 'MySQL Improved');
define('_INSTALLERDBTYPEMSSQL', 'MSSql (Alpha)');
define('_INSTALLERDBTYPEOCI', 'Oracle (Alpha) via oci8 driver');
define('_INSTALLERDBTYPEORACLE', 'Oracle (Alpha) via oracle driver');
define('_INSTALLERDBTYPEPOSTGRES', 'Postgres');


// _login.htm
define('_INSTALLERADMINLOGINREQUIRED', 'EL script ha detectado una instalaci�n existente. Debes iniciar sesi�n como administrador para proceder.');
define('_INSTALLERLOGINUSERNAME', 'Usuario administrador:');
define('_INSTALLERLOGINPASSWORD', 'Contrase�a:');
define('_INSTALLERLOGINFAILED', 'Inicio de sesi�n fallido, verifica tus datos e int�ntalo de nuevo.');
define('_INSTALLERNOTADMINUSER', 'El usuario que has usado no tiene privilegios administrativos.');


// _installationtype.htm
define('_INSTALLERSELECTTYPE', 'Por favor selecciona el tipo de instalaci�n');
define('_INSTALLERBASIC', 'Basica - s�lo son instalados los m�dulos requiridos para la operaci�n b�sica del sitio');
define('_INSTALLERCOMPLETE', 'Completa - todos los m�dulos encontrados en el sistema son instalados.');
define('_INSTALLERBLOG', 'Blog - se instalan los m�dulos que sirven para montar un Blog');

// _createadmin.htm
define('_INSTALLERADMINNAME', 'Nombre');
define('_INSTALLERADMINUSERNAME', 'Nombre de Usuario');
define('_INSTALLERADMINPASSWORD', 'Contrase�a');
define('_INSTALLERADMINRETYPEPASSWORD', 'Contrase�a de nuevo');
define('_INSTALLERADMINEMAIL', 'Correo electr�nico');
define('_INSTALLERADMINURL', 'URL');
define('_INSTALLERPASSWORDCOMPAREFAILED', 'Falla al crear el usuario administrador - por favor verifica tus credenciales');
define('_INSTALLEREMAILVALIDATEFAILED', 'Falla al validar el correo electr�nico del administrador - por favor verificalo');
define('_INSTALLERURLVALIDATECOMPAREFAILED', 'Falla al validar la url del administrador - por favor verificala');
define('_INSTALLERUSERVALIDATECOMPAREFAILED', 'Espacios y s�mbolos no son permitidos en el nombre de usuario');

// _gotosite.htm
define('_INSTALLERCREDITS', 'Los Cr�ditos');
define('_INSTALLERTEAM', 'Estos son los scripts y las personas que hacen posible a Zikula. Tomate alg�n tiempo y perm�tele saber a esas personas cuanto aprecias sus trabajos.
Si quieres ser listado aqu�, cont�ctanos acerca de ser parte del Equipo de Desarrollo. Siempre estamos buscando algo de ayuda.');
define('_INSTALLERPROBLEMS', 'Ahora has completado la instalaci�n de Zikula. Si encuentras cualquier tipo de problemas, h�ganoslo saber.  Y aseg�rate de borrar este script.
No lo vas a necesitar de nuevo.');
define('_INSTALLERGOTOSITE', 'Ir a tu sitio Zikula');

// _selectmodule.htm
define('_INSTALLERSELECTMODULE', 'Selecciona el m�dulo encargado de la p�gina de inicio');
define('_INSTALLERMODULES', 'Los m�dulos son usados para extender la funcionalidad de un sitio. Muchos m�s est�n disponibles en el <a href="http://code.zikula.org/community-spanish/downloads">Paquete de Complementos (ValueAddons)</a> y la <a href="http://community.zikula.org/module-Database-main-tid-3.htm">Base de Datos de M�dulos</a> de terceras partes. Por favor selecciona el m�dulo encargado de la p�gina de inicio de tu nuevo sitio. <strong>Nota:</strong> Puedes cambiar esto luego.');
define('_INSTALLERPNMODULESSURL', 'http://community.zikula.org/module-Database-main-tid-3.htm');
define('_INSTALLERPNMODULES', 'Base de Datos de M�dulos');

// _selecttheme.htm
define('_INSTALLERSELECTHEME', 'Selecciona el theme por defecto');
define('_INSTALLERTHEMES', 'Los themes son usados para alterar completamente la apariencia del sitio. Zikula incluye un n�mero peque�o de themes por defecto. Muchos m�s est�n disponibles en la <a href="http://community.zikula.org/module-Database-main-tid-4.htm">Base de Datos de Themes</a>. Por favor selecciona un theme por defecto para tu nuevo sitio - puedes cambiarlo luego.');
define('_INSTALLERPNTHEMESURL', 'http://community.zikula.org/module-Database-main-tid-4.htm');
define('_INSTALLERPNTHEMES', 'Base de Datos de Themes');

// modify_config.php
define('_INSTALLERMODIFYFILE_1','Error: no se puede de abrir para lectura:');
define('_INSTALLERMODIFYFILE_2','Error: no se puede de abrir para escritura:');
define('_INSTALLERMODIFYFILE_3','0 l�neas cambiadas, no hizo nada');
