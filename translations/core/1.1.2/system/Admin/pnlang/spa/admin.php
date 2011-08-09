<?php
/**
 * Zikula Application Framework
 *
 * @copyright (c) 2002, Zikula Development Team
 * @link http://www.zikula.org
 * @version $Id: admin.php 22259 2007-06-25 12:59:35Z markwest $
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 * @package     Zikula_System_Modules
 * @subpackage  Zikula_Admin
 */

/**
 * translated by
 * @author Mateo Tibaquira [mateo]
 */

// general defines
define('_ADMIN', 'Administraci�n');
define('_ADMINPANEL', 'Panel de Administraci�n');
define('_ADMIN_ONLINEMANUAL', 'Ayuda en l�nea');
define('_ADMIN_TITLE', 'Gestor del panel de administraci�n');
define('_ADMIN_PNSECURITYANALYZER', 'Advertencias del Analizador de Seguridad');
define('_MODULESCATEGORIZATION', 'Categorizaci�n de los M�dulos');
define('_MODIFYADMINPANELCONFIG', 'Configuraci�n del Panel');
define('_MODULECATEGORIESLISTVIEW', 'Lista de Categor�as');
define('_NEWMODULECATEGORY', 'Crear una Categor�a');
define('_ADMIN_NEWCATEGORY', 'Nueva Categor�a');
define('_ADMIN_EXISTINGCATEGORY', 'Categor�a Existente');

// menu
define('_VIEWMODULECATEGORIES', 'Lista de Categor�as de M�dulos');
define('_ADMIN_MODIFYMODULECATEGORY', 'Modicar categor�a de m�dulos');
define('_ADMIN_CREATEMODULECATEGORY', 'Crear categor�a de m�dulos');
define('_ADMIN_DELETEMODULECATEGORY', 'Borrar categor�a de m�dulos');
define('_ADMIN_CONFIRMDELETEMODULECATEGORY', 'Realmente quieres borrar esta categor�a de m�dulos?');

// error messages
define('_ADMIN_DELETEFAILEDDEFAULT', 'Disculpa! No puedes borrar la categor�a por defecto del Panel de Administraci�n.');
define('_ADMIN_DELETEFAILEDSTART', 'Disculpa! No puedes borrar la categor�a que se muestra por defecto en el Panel de Administraci�n.');
define('_ADMIN_FAILEDADDMODTOCAT', 'Error! No se pudo a�adir un m�dulo a la categor�a.');
define('_ADMIN_NOADMINLINKS', 'Esta categor�a de administraci�n est� vac�a. Probablemente terminaste aqu� porque tienes acceso administrativo a un m�dulo que no est� en la categor�a por defecto.');

// modify config
define('_ADMIN_GENERALSETTINGS', 'Ajustes generales');
define('_ADMIN_DISPLAYICONS', 'Mostrar �conos');
define('_ADMIN_DISPLAYNAMETYPE', 'Visualizaci�n de los nombres de los m�dulos'); 
define('_ADMIN_DISPLAYNAMETYPE_DISPLAYNAME', 'Nombre p�blico'); 
define('_ADMIN_DISPLAYNAMETYPE_REALNAME', 'Nombre real'); 
define('_ADMIN_DISPLAYNAMETYPE_BOTH', 'Ambos');
define('_ADMIN_IGNOREINSTALLERCHECK', 'Ignorar la verificaci�n del instalador');
define('_ADMIN_IGNOREINSTALLERCHECKWARNING', 'Advertencia! S�lo habilita la opci�n anterior si este sitio est� aislado de Internet, de otro modo la seguridad puede est�r comprometida si omites remover el script de Instalaci�n de la raiz del sitio.');
define('_ADMIN_PANELDISPLAYSETTINGS', 'Ajustes de la Pantalla');
define('_ADMIN_MODULESPERPAGE', 'M�dulos por p�gina');
define('_ADMIN_MODULESPERROW', 'M�dulos por fila');
define('_ADMIN_THEME', 'Theme a usar');
define('_ADMIN_THEMESITE', 'Usar el Theme del sitio');
define('_ADMIN_SKIN', 'Estilos a usar');
define('_ADMIN_STARTCATEGORY', 'Categor�a inicialmente seleccionada');
define('_ADMIN_DEFAULTCATEGORY', 'Categor�a por defecto para M�dulos recien instalados');

/* "Stop" messages following security analyzer check for installer files and PSAK prior to admin panel being displayed */
define('_ADMIN_PSAKWARNING', 'Detente por favor! el Swiss Army Knife (archivo \'psak.php\') est� en la raiz del sitio, pero debe ser removido antes de poder acceder al Panel de Administraci�n.');
define('_ADMIN_INSTALLWARNING','Detente por favor! El archivo de instalaci�n \'install.php\' y la carpeta \'install\' est�n en la raiz del sitio, pero deben ser removidos antes de poder acceder al Panel de Administraci�n.');
define('_ADMIN_UPGRADEWARNING', 'Detente por favor! El script de actualizaci�n (archivo \'upgrade.php\') est� en la raiz del sitio, pero debe ser removido antes de poder acceder al Panel de Administraci�n.'); 
define('_ADMIN_UPGRADE10XWARNING', 'Detente por favor! El script de actualizaci�n (archivo \'upgrade10xto11x.php\') est� en la raiz del sitio, pero debe ser removido antes de poder acceder al Panel de Administraci�n.');
 
// Zikula security analyzer defines
define('_ADMIN_UPGRADE_PHP','El archivo de instalaci�n \'upgrade.php\' est� en la raiz del sitio, pero deber�a ser removido.');
define('_ADMIN_UPGRADE10X_PHP','El archivo de instalaci�n \'upgrade10xto11x.php\' est� en la raiz del sitio, pero deber�a ser removido.'); 
define('_ADMIN_CONFIG_PHP','El archivo de configuraci�n \'config/config.php\' es escribible, pero deber�a ser de s�lo lectura (644 o 444).');
define('_ADMIN_MAGIC_QUOTES','La directiva PHP \'magic_quotes_gpc\' est� en ON, pero deber�a estar en OFF.');
define('_ADMIN_REGISTER_GLOBALS','La directiva PHP \'register_globals\' est� en ON, pero deber�a estar en OFF.');
define('_ADMIN_PNTEMP_HTACCESS','No est� el archivo \'.htaccess\' en la carpeta de temporales (\'/pnTemp\' u otro nombre), pero deber�a estar presente.');
define('_ADMIN_SAFEHTML', 'El filtro de salida SafeHTML no est� habilitado en el m�dulo Centro de Seguridad, pero preferiblemente deber�a estarlo.');
define('_ADMIN_SECURITYCENTERNOTINSTALLED', 'El m�dulo Centro de Seguridad no est� instalado, pero preferiblemente deber�a estarlo.');
define('_ADMIN_SECURITYCENTERNOTENABLED', 'El m�dulo Centro de Seguridad no est� activado, pero preferiblemente deber�a estarlo.');
define('_ADMIN_LEGACY_MODE','El soporte a m�dulos antiguos est� habilitado, pero preferiblemente deber�a estar deshabilitado.');

/* Defines for the Admin module's help page (davidnelson) */
define('_ADMINGENERALSETTINGSHELP', 'Actualmente existe s�lo una opci�n en la secci�n configuraci�n general:');
define('_ADMINDISPLAYSETTINGSHELP', 'Hay seis configuraci�n de la pantalla:');
define('_ADMINCATEGORYCONFIGURATIONHELP', 'En la secci�n de Categorizaci�n de los M�dulos, puedes elegir dos cosas:');
define('_ADMIN_DEFAULTCATEGORYEXPLAINED', 'Abra la lista desplegable y elija la categor�a en la que se pondr�n a todos los m�dulos reci�n instalados y activados.');
define('_YOUGETTHEMESSAGE','Ves el mensaje:');
define('_ADMINADDCATEGORYHELP','Te permite agregar una nueva categor�a a la lista de pesta�as. Tu puedes editar las siguientes:');
define('_ADMINADDCATEGORYHELP1', 'Digita el nombre a ser mostrado en las pesta�as de categor�as.');
define('_ADMINADDCATEGORYHELP2', 'Digita una descripci�n informativa a ser mostrada despu�s del nombre d ela categor�a, cuando esa categor�a sea mostrada en el Panel de Administraci�n.');
define('_ADMINUPDATECATEGORY','Editar');
define('_ADMINUPDATECATEGORYHELP','Te permite editar el nombre y la descripci�n de una categor�a existente.');
define('_ADMINDELETECATEGORY','Borrar');
define('_ADMINDELETECATEGORYHELP','Te permite borrar una categor�a del men� de pesta�as. Se te pedir� confirmaci�n antes de que se borre la categor�a.');
define('_ADMINVIEW','Vista de la lista de categor�as');
define('_ADMINVIEWHELP','Muestra la lista de las categor�as incluidas en el men� de pesta�as. En la columna de \'Acciones\' a la derecha, tu puedes escoger entre editar y borrar una categor�a:');
define('_ADMINMODIFYCONFIGHELP','La \'Configuraci�n del Panel\' contiene tres secciones: \'Ajustes generales\', \'Ajustes de la Pantalla\' y \'Categorizaci�n de los M�dulos\'. Cada una se explica a continuaci�n:');
define('_MODULECATEGORIZATION', 'Selecci�n de las Categor�as de M�dulos');
define('_ADMIN_DISPLAYICONSEXPLAINED','Cuando se activa, esta opci�n hace que sean mostrados los �conos gr�ficos de cada m�dulo en el Panel de Administraci�n.');
define('_ADMIN_MODULESPERPAGEEXPLAINED','Digita el n�mero total de M�dulos a ser mostrados en cada p�gina del Panel de Administraci�n.');
define('_ADMIN_MODULESPERROWEXPLAINED','Digita el n�mero total de M�dulos a ser mostrados en cada l�nea del Panel de Administraci�n.');
define('_ADMIN_THEMEEXPLAINED','Abre la lista desplegable y selecciona el Theme a ser aplicado al Panel de Administraci�n.');
define('_ADMIN_SKINNSEXPLAINED','Abre la lista desplegable y selecciona los Estilos a ser usados en el Panel de Administraci�n.');
define('_ADMIN_STARTCATEGORYEXPLAINED','Abre la lista desplegable y selecciona la categor�a a ser mostrada cuando se abra el Panel de Administraci�n por primera vez.');
define('_ADMINIGNOREINSTALLERCHECKHELP','Esta opci�n te permite deshabilitar la verificaci�n del Analizador de Seguridad para ver si el instalador est� en la carpeta raiz de tu sitio. Preferiblemente, deber�as dejar esta opci�n habilitada, pues un fallo de seguridad podr�a ocurrir f�cilmente si se omite eliminar los componentes del instalador despu�s de completar la instalaci�n.');
define('_ADMINSECURITYWARNINGSHELP','En el Panel de Administraci�n, se mostrar�n advertencias de seguridad  si el Analizador detecta potenciales vulnerabilidades en la instalaci�n de tu sitio. Si no ves las advertencias quiere decir que no se encontraron vulnerabilidades. Por favor lee la documentaci�n de seguridad para m�s informaci�n relacionada. Debajo est�n las explicaciones para cada vulnerabilidad posiblemente identificada.');
define('_ADMIN_INSTALLWARNING_HELP','Despu�s de completar el proceso de instalaci�n, es muy importante borrar el archivo instalador \'install.php\' y la carpeta \'install\' de la carpeta raiz del sitio, especificamente si el sitio est� disponible en Internet, sino podr�a haber una violaci�n de seguridad. Si el Analizador detecta esta vulnerabilidad, tienes que removerlos antes de poder acceder al Panel de Administraci�n. Adicionalmente, por favor consulta la documentaci�n para m�s informaci�n acerca de c�mo configurar �ptimamente el sitio desde el punto de vista de seguridad.');
define('_ADMIN_PSAKWARNING_HELP','La herramienta Swiss Army Knife (un archivo llamado \'psak.php\') es muy �til para resolver ciertos problemas, pero no la debes dejar en ninguna carpeta accesible desde Internet, porque esta deja una oportunidad f�cil para violar la seguridad.  Si el Analizador detecta esta vulnerabilidad, debes remover el archivo \'psak.php\' antes de poder acceder al Panel de Administraci�n.');
define('_ADMIN_CONFIG_PHP_HELP','Cuando un sitio es originalmente instalado, el script de Instalaci�n crea un archivo de configuraci�n llamado \'config.php\' que est� localizado en el subdirectorio \'config\' dentro de la carpeta raiz del sitio. Este no debe ser dejado con permiso de escritura, porque deja una oportunidad para violar la seguridad. Tu debes ajustar los permisos de ese archivo a s�lo lectura (644 o 444). Adicionalmente, por favor consulta la documentaci�n para m�s informaci�n acerca de c�mo configurar �ptimamente el sitio desde el punto de vista de seguridad.');
define('_ADMIN_LEGACY_MODE_HELP','Tienes la posibilidad de habilitar el soporte para M�dulos Zikula antiguos. No obstante, los M�dulos antiguos pueden tener agujeros de seguridad que comprometan la seguridad del sitio. Se te recomienda usar s�lo versiones actualizadas de los M�dulos que son compatibles con el API (Interfaz para Programaci�n de Aplicacion) oficial del proyecto. En este caso, el soporte para m�dulos antiguos puede ser deshabilitado (esta es la configuraci�n por defecto cuando un sitio es instalado por primera vez).');
define('_ADMIN_MAGIC_QUOTES_HELP','En algunos entornos de alojamiento, la bandera de PHP \'magic_quotes_gpc\' puede estar en ON. No obstante, esto crea una oportunidad para violaciones de seguridad. Si el sitio es accesible desde Internet, se te recomienda asegurarte que \'magic_quotes_gpc\' est� en OFF. Para instrucciones acerca de c�mo hacer esto, por favor consulta la documentaci�n de seguridad.');
define('_ADMIN_PNTEMP_HTACCESS_HELP','Si est� bien instalado, un sitio incluir� un archivo \'.htaccess\' en la carpeta de archivos temporales (que es llamada \'/pnTemp\', a menos que otro nombre sea utilizado). Sin embargo, algunos m�todos usador para transferir los archivos del paquete al espacio web puede dar lugar a este archivo no ha sido transferido. En este caso, se te recomienda crear uno (y asegurarte que el archivo \'.htaccess\' existe en algunas otras carpetas, tambi�n). para m�s informaci�n acerca de esto, por favor consulta la documentaci�n de seguridad.');
define('_ADMIN_REGISTER_GLOBALS_HELP','En algunos entornos de alojamiento, la bandera de PHP \'register_globals\' puede estar en ON. Nos obstante, esto puede crear una oportunidad para violaciones de seguridad. Si el sitio es accesible desde Internet, se te recomienda asegurarte que \'register_globals\' est� en OFF. Para instrucciones acerca de c�mo hacer esto, por favor consulta la documentaci�n de seguridad.');
define('_ADMIN_SAFEHTML_HELP','El filtro de salida SafeHTML es una caracter�stica del M�dulo de Centro de Seguridad que mejora la seguridad del sitio, y el Analizador de seguridad ha detectado que no est� habilitado. Se te recomienda asegurarte que est� habilitado. Tambi�n ver�s este mensaje si el M�dulo Centro de Seguridad no est� instalado o no est� habilitado. Para m� sinformaci�n acerca de esto, por favor consulta la ayuda en l�nea del Centro de Seguridad.');
define('_ADMIN_SECURITYCENTERNOTINSTALLED_HELP','Cuando un sitio es originalmente instalado, el Centro de Seguridad est� instalado y activado por defecto. Tu ver�s el mensaje anterior si el Centro de Seguridad ha sido removido. Se te recomienda dejar el Centro de Seguridad instalado, ya que aumenta la seguridad de tu sitio.');
define('_ADMIN_SECURITYCENTERNOTENABLED_HELP','Cuando un sitio es originalmente instalado, el Centor de Seguridad est� instalado y activado por defecto. Tu ver�s el mensaje anterior si el Centro de Seguridad ha sido desactivado. Se te recomienda dejar el Centro de Seguridad activado, ya que aumenta la seguridad de tu sitio.');
define('_ADMIN_UPGRADE_PHP_HELP','El archivo \'upgrade.php\' es usado por el script de Instalaci�n si un sitio Zikula 1.0.x previamente existente es actualizado a una versi�n m�s reciente. Una vez que el nuevo sitio est� funcionando correctamente, deber�as borrar este archivo pues no es requerido m�s y puede crear una posible violaci�n de seguridad.');
define('_ADMIN_MODULESCATEGORIZATIONEXPLAINED', 'Ver�s la lista de todos los M�dulos actualmente instalados y activados. Abra la lista desplegable junto a cada m�dulo y elija el m�dulo de la categor�a en la que dicho m�dulo debe colocarse.');
