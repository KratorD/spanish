<?php

// language defines for the upgrade process
define('_UPG_DONOTFORGETTOREMOVEFILES', 'No olvides borrar los archivos install.php, upgrade.php, upgrade10xto11x.php y la carpeta install de tu sitio. Estos no son necesitados luego y pueden comprometer el sitio si alguien los encuentra.');
define('_UPG_NEWFEATURESINTRO', 'Aqui una breve introducci�n a los cambios en Zikula 1.1.0. Para una lista m�s detallada de cambios y arreglos v�ase <a href="http://code.zikula.org/core/milestone/1.1.0">esta lista</a>');
define('_UPG_THANKSFORUPGRADINGTO110', 'Gracias por actualizarse a Zikula 1.1.0');
define('_UPG_CONTINUETO110NEWS', '<a href="upgrade10xto11x.php?action=learnmore&amp;lang=%lang%">Click aqui</a> para saber m�s acerca de las nuevas caracter�sticas en esta versi�n o <a href="admin.php">ve al panel de administraci�n de tu sitio</a>.');
define('_UPG_110FEATURE01', 'a�adido: Hooks de inicio del sistema (init): ejecutan funcionalidades en el arranque del sistema, ej. para incluir c�digos de ejecuci�n de m�dulos como <a title="scribite!: el administrador de editores WYSIWYG para Zikula" href="http://code.zikula.org/scribite">Scribite!</a> - que ya no necesita cambios en el theme (<a href="http://code.zikula.org/core/ticket/214">#214</a>).');
define('_UPG_110FEATURE02', 'a�adido: El plugin modulestylesheet no se necesita m�s, los estilos son cargados autom�ticamente cuando una funci�n de un m�dulo es llamada. Si usas este plugin en las plantillas de tu theme, ver�s un aviso s�lo mostrado al administrador (<a href="http://code.zikula.org/core/ticket/269">#269</a>).');
define('_UPG_110FEATURE03', 'a�adido: Selecciona tu m�dulo para gestionar perfiles: Escoge entre Profile, <a href="http://code.zikula.org/myprofile">MyProfile</a> y cualquier otro m�dulo que se identifique como capaz de mostrar la informaci�n de usuario (<a href="http://code.zikula.org/core/ticket/249">#249</a>).');
define('_UPG_110FEATURE04', 'a�adido: El m�dulo MailUsers fue integrado al m�dulo Users (<a href="http://code.zikula.org/core/ticket/69">#69</a>).');
define('_UPG_110FEATURE05', 'a�adido: El m�dulo Members_List fue integrado al m�dulo Profile (<a href="http://code.zikula.org/core/ticket/68">#68</a>).');
define('_UPG_110FEATURE06', 'a�adido: Funcionalidades mejoradas de Pages, Feeds y AuthLDAP (<a href="http://code.zikula.org/core/ticket/94">#94</a>, <a href="http://code.zikula.org/core/ticket/100">#100</a>, <a href="http://code.zikula.org/core/ticket/103">#103</a>, <a href="http://code.zikula.org/core/ticket/108">#108</a>, <a href="http://code.zikula.org/core/ticket/120">#120</a>, <a href="http://code.zikula.org/core/ticket/222">#222</a>, <a href="http://code.zikula.org/core/ticket/263">#263</a>, <a href="http://code.zikula.org/core/ticket/264">#264</a>, <a href="http://code.zikula.org/core/ticket/337">#337</a>).');
define('_UPG_110FEATURE07', 'arreglado: varios bugs en ObjectLib (<a href="http://code.zikula.org/core/ticket/215">#215</a>, <a href="http://code.zikula.org/core/ticket/291">#291</a>).');
define('_UPG_110FEATURE08', 'arreglado: muchos otros bugs');

// upgrade76.php
define('_UPG_PROCEEDTOUPGRADE', 'Proceder a Actualizar');
define('_UPG_TITLE', 'Zikula serie v1.0 - Script de Actualizacion (para PostNuke .76x)');
define('_UPG_TITLE10X', 'Zikula serie Zikula v1.1.0 - Script de Actualizacion (para Zikula 1.0.x)');
define('_UPG_SUBTITLE', 'Script de Actualizacion de PostNuke (s�lo para versiones .76x)');
define('_UPG_SUBTITLE10X', 'Script de Actualizacion de Zikula (s�lo para versiones 1.0.x)');
define('_UPG_DESCRIPTION', 'Este script actualizar� PostNuke v0.76x a Zikula v1.0. Actualizaciones desde versiones anteriores de PostNuke no est�n soportadas por este script.');
define('_UPG_DESCRIPTION10X', 'Este script actualizar� Zikula 1.0.x a Zikula v1.1.x. Actualizaciones desde versiones anteriores no est�n soportadas por este script.');
define('_UPG_BACKUPNOTICE', 'ANTES de proceder deber�as hacer una copia de respaldo de tu base de datos');
define('_UPG_BACKUPHINT', 'Una herramienta recomendada para grabar y restaurar tu base de datos es <a href="http://mysqldumper.de/en/">MySQLDumper</a>. La mayor�a de hostings ofrece tambi�n <a href="http://www.phpmyadmin.net">phpMyAdmin</a> el cual puede hacer lo mismo, pero con menos comodidad.');
define('_UPG_BACKINGUPDB', 'Respaldando la base de datos de usuarios... ');
define('_UPG_DONE', 'hecho');
define('_UPG_USERDBSTRUCTUREUPGRADED', 'Estructura de la base de datos de Usuarios actualizada.');
define('_UPG_MODULEDBSTRUCTUREUPGRADED', 'Estructura de la base de datos de los M�dulos actualizada.');
define('_UPG_SUCCESSFUL', 'exitosa');
define('_UPG_FAILED', 'FALLIDA!');
define('_UPG_BLOCKSTABLEUPGRADED', 'Tablas de Bloques actualizada');
define('_UPG_RESETTHEMETOEXTRALITE', 'Theme reseteado a ExtraLite');
define('_UPG_DUDMIGRATED', 'Datos din�micos de Usuario migrados');
define('_UPG_SEARCHMODULEREINSTALLED', 'M�dulo de b�squeda reinstalado');
define('_UPG_FOOTERINFO', 'Para m�s informaci�n acerca del proceso de actualizaci�n, por favor lee la <a href="docs/upgrade.html">documentacion de actualizaci�n</a>, o visita el <a href="http://zikula.es/foros">foro de soporte</a> de la Comunidad Zikula en espa�ol');
define('_UPG_TIMEHINT', 'Advertencia: Dependiendo del n�mero de usuarios en tu sitio, esto puede tardar un tiempo. Si no est�s seguro, primero prueba la actualizaci�n en una instalaci�n local.');
define('_UPG_STARTUPGRADE', 'Click aqu� para comenzar el proceso de actualizaci�n.');
define('_UPG_USERSACTIVATED', 'usuarios existentes han sido activados');
define('_UPG_MEMHINT', 'Los l�mites de memoria no pudieron ser cambiados (a 64M), puedes tener problemas si tu sitio es muy grande.');

// upgrade.php
define('_UPG_CONTINUETOYOURSITE', 'Ir a tu sitio');
define('_UPG_MODULELISTREGENERATED', 'Lista de m�dulos regenerada');
define('_UPG_INSTALLNEWMODULES', 'Instalar nuevos m�dulos del sistema');
define('_UPG_STARTNEWMODULEINSTALL', 'Comenzando la instalaci�n de los nuevos m�dulos del sistema');
define('_UPG_INITIALISED', 'inicializado');
define('_UPG_NOTINITIALISED', 'no inicializado');
define('_UPG_NONEWMODSNEEDINIT', 'No se requiere inicializar ning�n nuevo m�dulo del sistema');
define('_UPG_INSTALLOFMODULESCOMPLETE', 'Instalaci�n de nuevos m�dulos del sistema completada');
define('_UPG_UPGRADEALLMODULES', 'Actualizar todos los m�dulos');
define('_UPG_STARTINGUPGRADE', 'Comenzando actualizaci�n');
define('_UPG_UPGRADED', 'actualizado');
define('_UPG_NOTUPGRADED', 'no actualizado');
define('_UPG_NOMODSNEEDUPGRADE', 'Ning�n m�dulo requiere ser actualizado');
define('_UPG_FINISHEDUPGRADE', 'Actualizaci�n finalizada - ');
define('_UPG_GOTOADMINPANEL', 'Ir al panel de administraci�n de <a href="%s">%s</a>');
define('_UPG_FORTHENEXTSTEPSPLEASELOGIN', 'Para los siguientes pasos de la actualizaci�n necesitas iniciar sesi�n. Por favor provee las credenciales de tu cuenta de administrador');
define('_UPG_USERNAME', 'Usuario');
define('_UPG_PASSWORD', 'Contrase�a');
define('_UPG_SUBMIT', 'Enviar');
define('_UPG_LOGINFAILED', 'Error al iniciar sesi�n en el sitio');
