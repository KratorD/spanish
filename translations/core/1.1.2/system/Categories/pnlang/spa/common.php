<?php
/**
 * Zikula Application Framework
 *
 * @copyright value4business GmbH
 * @link http://www.zikula.org
 * @version $Id: common.php 23014 2007-10-19 12:04:14Z rgasch $
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 * @author Robert Gasch robert.gasch@value4business.com
 * @package Zikula_Core
 */

/**
 * translated by
 * @author Mateo Tibaquira [mateo]
 */

// general
define('_CATEGORIES_IPATH',             'I-ruta');
define('_CATEGORIES_PATH',              'Ruta');
define('_CATEGORIES_ROOTCAT',           'Categor�a raiz');

// navigation
define('_CATEGORIES_REGISTRY',			'Registro de categor�as');
define('_CATEGORIES_VIEWCATEGORIES',    'Ver categor�as');
define('_CATEGORIES_CREATECATEGORY',    'Crear categor�a');
define('_CATEGORIES_MODIFYCATEGORY',    'Modicar categor�a');
define('_CATEGORIES_DELETECATEGORY',    'Borrar categor�a');
define('_CATEGORIES_CONFIRMDELETECATEGORY', 'Realmente quieres borrar esta categor�a?');

// view template
define('_CATEGORIES_VIEW_TITLE',        'Lista de Categor�as');

// user template
define('_CATEGORIES_EDIT_SUBCATEGORIES','Editar subcategor�as bajo este nodo');
define('_CATEGORIES_EDIT_USER',         'Editar tus categor�as de usuario');
define('_CATEGORIES_EDIT_USER_DISABLED','Disculpa, la edici�n de categor�as de usuario no est� habilitada. El administrador del sitio puede habilitar esta caracter�stica');
define('_CATEGORIES_EDIT_USER_NOT_OWN', 'Disculpa, parece que est�s tratando de editar las categor�as de otro usuario. Esto s�lo se le permite a los administradores del sitio.');

// new/edit template
define('_CATEGORIES_ADDITIONALDATA',    'Campos de informaci�n adicional');
define('_CATEGORIES_ADVANCED',          'Cambiar a modo avanzado');
define('_CATEGORIES_ATTRIBUTES',        'Atributos');
define('_CATEGORIES_ATTRIBUTE_ADD',     'A�adir un Atributo');
define('_CATEGORIES_ATTRIBUTE_NAME',    'Nombre del Atributo');
define('_CATEGORIES_ATTRIBUTE_VALUE',   'Valor del Atributo');
define('_CATEGORIES_BACK_TO_REFERER',   'Volver al m�dulo de referencia');
define('_CATEGORIES_BASEINFO',          'Informaci�n b�sica de la categor�a');
define('_CATEGORIES_CATEGORY_IS_LOCKED','Esta categor�a ha sido bloqueada por el administrador y no puede ser editada.');
define('_CATEGORIES_CATEGORY_DELETE_CONFIRM',	'Estas seguro que quieres borrar la categor�a [');
define('_CATEGORIES_CATEGORY_DELETE_CONFIRM_QM','] ?');
define('_CATEGORIES_COPY_SUCCESS',      'La categor�a [%s] ha sido copiada exitosamente');
define('_CATEGORIES_DELETE_SUCCESS',    'La categor�a [%s] ha sido borrada exitosamente');
define('_CATEGORIES_INSERT_SUCCESS',    'La categor�a [%s] ha sido insertada exitosamente');
define('_CATEGORIES_IS_LEAF',           'Esta Categor�a es un nodo hoja');
define('_CATEGORIES_IS_LOCKED',         'Esta Categor�a est� bloqueada');
define('_CATEGORIES_LOCALISATION',      'Texto localizado');
define('_CATEGORIES_LOCALNAME_UNDEFINED', 'Nombre localizado no definido');
define('_CATEGORIES_META',              'Meta datos de la categor�a');
define('_CATEGORIES_MOVE_SUCCESS',		'La categor�a [%s] ha sido movida exitosamente');
define('_CATEGORIES_PARENT',            'Padre');
define('_CATEGORIES_REBUILD_SUCCESS',   'las rutas de la categor�a han sido reconstruidos exitosamente');
define('_CATEGORIES_ROOT_PARENT_LOCKED','Categor�a padre para un nodo ra�z no puede ser cambiado');
define('_CATEGORIES_SECURITY_DOMAIN',   'Dominio de seguridad');
define('_CATEGORIES_SORT_VALUE',        'Orden');
define('_CATEGORIES_STATUS',            'Activo');
define('_CATEGORIES_SYSTEM_INFO',       'Informaci�n del Sistema de Categor�as');
define('_CATEGORIES_UPDATE_SUCCESS',    'La categor�a [%s] ha sido actualizada exitosamente');
define('_CATEGORIES_VALUE',             'Valor');

// preferences template
define('_CATEGORIES_PREFS',             'Preferencias');
define('_CATEGORIES_PREFS_USERROOTCAT',     'Categor�a ra�z para las categor�as de los usuarios');
define('_CATEGORIES_PREFS_ALLOWUSERCATEDIT',    'permitir a cada usuario editar sus propias categor�as');
define('_CATEGORIES_PREFS_AUTOCREATEUSERCAT',   'Autocrear categor�a de usuario en la carpeta ra�z');
define('_CATEGORIES_PREFS_AUTOCREATEUSERDEFAULTCAT',    'Autocrear la categor�a de usuario predeterminada');
define('_CATEGORIES_PREFS_USERDEFAULTCATNAME',  'Categor�a de usuario por defecto');
define('_CATEGORIES_REBUILDPATHS',      'Reconstruir rutas');
// list template
define('_CATEGORIES_RESEQUENCE',        'Re-sequence');

// delete template
define('_CATEGORIES_SUBCATS_DELETE',        'Borrar todas las subcategor�as');
define('_CATEGORIES_SUBCATS_MOVE',          'Mover todas las subcategor�as a la categor�a siguiente');
define('_CATEGORIES_SUBCATS_STATUS',        'Esta categor�a contiene %c% subcategor�as directas.');
define('_CATEGORIES_SUBCATS_WARNING',       'Por favor escoge tambi�n qu� hacer con las subcategor�as de esta categor�a:');

// module registry template
define('_CATEGORIES_REGISTRY_PROPERTY',     'Nombre de la Propiedad');
define('_CATEGORIES_REGISTRY_DELETE_SUCCESS', 'El Registro de categor�a ha sido borrado exitosamente');
define('_CATEGORIES_REGISTRY_SAVE_SUCCESS', 'El Registro de categor�a ha sido guardado exitosamente');
define('_CATEGORIES_REGISTRY_TABLE',        'Tabla');
define('_CATEGORIES_REGISTRY_DELETE_CONFIRM', 'Realmente quieres borrar este registro?');

// move template
define('_CATEGORIES_MOVE_TITLE',            'Mover una categor�a');

// copy template
define('_CATEGORIES_COPY_DESCRIPTION',      'Copiar esta categor�a y todas las subcategor�as de esta categor�a');
define('_CATEGORIES_COPY_TITLE',            'Copiar categor�as');

// modify config template
define('_CATEGORIES_CONFIG_REBUILD',        'Esta function te permite reconstruir todas las rutas internas del sistema');
define('_CATEGORIES_CONFIG_REBUILD_INFO',   '<br /><br />Puedes ejecutar esta acci�n dando click en el bot�n de envio a continuaci�n. Dependiendo del n�mero de categor�as en tu sistema, esta acci�n puede sobrepasar el l�mite de tiempo o memoria de PHP.');
define('_CATEGORIES_CONFIG_REBUILD_PATHS',  'Reconstruir rutas');

// user editing
define('_CATEGORIES_YOURCATEGORIES',        'Tus categor�as');

// error/status messages
define('_CATEGORIES_DOCROOT_CANT_RETRIEVE', 'Error! Can\'t access root directory');
define('_CATEGORIES_DOCROOT_INVALID',       'Error! Invalid \'document root\' parameter in URL');
define('_CATEGORIES_EDITCAT_INVALID',       'Error! Can\'t edit: category is invalid');
define('_CATEGORIES_EDITCAT_NOT_VALUEPARENT',   'Error! The specified category is not a top-level category');
define('_CATEGORIES_EDITCAT_NOT_LEAF',		'Error! Sorry! The specified category is not a leaf-level category');
define('_CATEGORIES_EDITCAT_NOT_SUBCAT',    'Error! The specified category is not a child of the document root');
define('_CATEGORIES_INVALID_CID',		'Error! Sorry! An invalid category ID was received');
define('_CATEGORIES_INVALID_DIRECTION',		'Error! Sorry! An invalid direction was received');
define('_CATEGORIES_INVALID_DOCROOT',		'Error! Sorry! An invalid docroot was received');
define('_CATEGORIES_NAME_EMPTY',        'Error! El Nombre no puede quedar vac�o');
define('_CATEGORIES_NO_USERCATNAME',        'Error! Unable to determine user category root node name');
define('_CATEGORIES_ROOT_CANT_EDIT',        'Error! The root directory cannot be modified in \'user\' mode');
define('_CATEGORIES_UNABLE_TO_RETRIEVE',	'Error! Sorry! Unable to retrieve category with id [%d]');
define('_CATEGORIES_USERCAT_NOAUTOCREATE',  'Error! The user root category node for this user doesn\'t exist and the autocreate flag is not set');
define('_CATEGORIES_USERCAT_LOGGED_IN',     'Error! The user category edit mode is only available logged-in users');
define('_CATEGORIES_USERDOCROOT_EMPTY',     'Error! Could not determine the User root node');
define('_CATEGORIES_USERDOCROOT_INVALID',   'Error! The User root node seems to point towards an invalid category');
define('_CATEGORIES_VALUE_EMPTY',           'Error! El Valor no puede quedar vac�o');
define('_CATEGORIES_REGISTRY_MODULE_EMPTY', 'Error! Debes seleccionar un m�dulo');
define('_CATEGORIES_REGISTRY_TABLE_EMPTY',  'Error! Debes seleccionar una tabla del m�dulo');
define('_CATEGORIES_REGISTRY_PROPERTY_EMPTY','Error! Debes digitar un nombre para la propiedad');
define('_CATEGORIES_REGISTRY_CATEGORY_EMPTY','Error! Debes seleccionar una categor�a');
define('_CATEGORIES_REGISTRY_PROPERTY_DUPLICATE','Error! Esta propiedad ya existe para el m�dulo y tabla indicados');
