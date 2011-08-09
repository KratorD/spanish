<?php
/**
 * Zikula Application Framework
 * @copyright (c) 2002, Zikula Development Team
 * @link http://www.zikula.org
 * @version $Id: admin.php 22596 2007-08-14 16:14:18Z pcornelissen $
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 * @package Zikula_System_Modules
 * @subpackage  Zikula_Modules
*/

/**
 * translated by
 * @author Mateo Tibaquira [mateo]
 */

// hooks
define('_MODULES_SETSYSTEMHOOKS', 'Hooks del sistema');
define('_MODULES_ENABLEHOOKSEXTENDED', 'Hooks para habilitarle a �ste m�dulo (configuraci�n extendida)');
define('_MODULES_ENABLEHOOKS', 'Hooks para habilitarle a �ste m�dulo');
define('_MODULES_EXTENDEDHOOKS', 'Configuraci�n Extendida de Hooks');
define('_MODULES_EXTENDEDHOOKSWARNING', 'Advertencia! Aqu� tu puedes habilitar hooks individualmente y cambiar el orden en el que son invocados. SI no est�s seguro acerca de las consecuencias, d�jalo como est�.<br /><br />Puedes mover los hooks usando arrastrar&soltar sobre las secciones. Mover un hook de una seccion a otra no funciona pues no tiene sentido.');
define('_MODULES_STANDARDHOOKS', 'Configuraci�n Estandar de Hooks');

// module dependencies
define('_MODULES_DEPENDENCYSTATE', 'Nivel');
define('_MODULES_DEPENDENCY_NOTFOUND', 'No encontrado en el sistema');
define('_MODULES_DEPENDENCY_NOTFOUNDREGENERATE', 'Aseg�rate que este m�dulo est� presente en el sistema (y la lista de m�dulos est� regenerada!)');
define('_MODULES_DEPENDENCY_REQUIRED', 'Requerido');
define('_MODULES_DEPENDENCY_OPTIONAL', 'Opcional');
define('_MODULES_DEPENDENCY_RECOMMENDED', 'Recomendado');
define('_MODULES_HASDEPENDENCIES', 'Este m�dulo tiene dependencias que acualmente no est�n en el sistema actualmente.');
define('_MODULES_REMOVEDEPENDENTS', 'Este m�dulo es usado por otros m�dulos presentes en tu sistema. Cualquier m�dulo con dependiente obligatoriamente ser� removido cuando se remueva �ste m�dulo.');

// errors, warnings and statuses
define('_MODULES_HASBLOCKSLEFT', 'Este m�dulo tiene algunos bloques activos, necesitas removerlos primero!');
define('_MODULES_MANDATORYCOREMODULE', 'Este m�dulo es necesitado obligatoriamente por el sistema y no puede ser desactivado');
define('_MODULES_MODULEISSTARTMODULE', 'Este m�dulo no puede ser desactivado porque est� configurado como el m�dulo de inicio.');
define('_MODULES_ACTIVATED', 'M�dule activado');
define('_MODULES_BLOCKSEXIST', 'Este m�dulo no puede ser removido pues hay bloques relacionados a este m�dulo activo.');
define('_MODULES_CONFIRMDELETE', 'Advertencia: Esta acci�n remover� permanentemente todos los datos asociados con este m�dulo incluyendo la informaci�n almacenada por los hooks de este m�dulo!');
define('_MODULES_DEACTIVATED', 'M�dulo desactivado');
define('_MODULES_DUPLICATEDISPLAYNAME', 'No se puede modificar el nombre p�blico del m�dulo - existe un m�dulo que ya lo tiene!');
define('_MODULES_FILESMISSING', 'Archivos perdidos');
define('_MODULES_INITIALISED', 'M�dulo instalado');
define('_MODULES_ITEMSPERPAGENUMERIC', 'El par�metro \'Elementos por p�gina\' debe ser un entero positivo. El valor que has introducido ha sido corregido.');
define('_MODULES_NOHOOKS', 'No hay hooks instalados');
define('_MODULES_NOSUCHMODID', 'Error! No existe tal ID de m�dulo');
define('_MODULES_NOMODID', 'No se ha especificado el ID del m�dulo');
define('_MODULES_NOMODS', 'No hay m�dulos disponibles');
define('_MODULES_UPGRADED', 'Nueva versi�n instalada');
define('_MODULES_REGENERATED', 'Lista de m�dulos regenerada desde el sistema de archivos');
define('_MODULES_REMOVED', 'M�dulo desinstalado');
define('_MODULES_UPDATEDINFORMATION', 'informaci�n del m�dulo actualizada');

define('_MODULES_ERRORS', 'La lista de m�dulos no pudo ser regenerada');
define('_MODULES_ERRORS_EXPLAIN', 'La lista de m�dulos no pudo ser regenerada porque los siguientes errores fueron encontrados en el sistema de archivos. Necesitas corregirlos para poder proceder.');
define('_MODULES_ERRORS_MODULENAMES', 'La siguiente tabla muestra una lista de modulos los cuales parecen aparecer en m�s de una carpeta. Necesitas borrar uno de los dos');
define('_MODULES_ERRORS_DISPLAYNAMES', 'La siguiente tabla muestra una lista de nombres p�blicos de m�dulos que parecen aparecer en m�s de una carpeta. Necesitas corregir o borrar uno de los dos.');

// interface components
define('_MODULES_ADMIN', 'Ir al panel de administraci�n de los m�dulos');
define('_MODULES_CONFIRMINITIALISE', 'Confirme la inicializaci�n del m�dulo');
define('_MODULES_DELETE', 'Remover m�dulo');
define('_MODULES_DISPNAME', 'Nombre p�blico');
define('_MODULES_GENERATE', 'Generar la lista de m�dulos');
define('_MODULES_INITIALISE', 'Instalar');
define('_MODULES_FILTERBYSTATE', 'Filtrar por estado');
define('_MODULES_INVALID', 'Inv�lido');
define('_MODULES_LOADLEGACY', 'Cargar el soporte de m�dulos antiguos');
define('_MODULES_MODIFY', 'Modificar m�dulo');
define('_MODULES_NAME', 'Nombre del m�dulo');
define('_MODULES_NEWDESCRIPTION', 'Digita la nueva descripci�n');
define('_MODULES_NEWNAME', 'Digita el nuevo nombre');
define('_MODULES_REGENERATE', 'Regenerar Lista');
define('_MODULES_UNINIT', 'No instalado');
define('_MODULES_UPGRADE', 'Actualizar');
define('_MODULES_REMOVE', 'Remover m�dulo');
define('_MODULES_STATE', 'Estado');
define('_MODULES_VERSION', 'Versi�n');
