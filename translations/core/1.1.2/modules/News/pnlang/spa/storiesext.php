<?php
/**
 * Zikula Application Framework
 *
 * @copyright (c) 2001, Zikula Development Team
 * @link http://www.zikula.org
 * @version $Id: stories.php 22139 2007-06-01 10:57:16Z markwest $
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 * @package Zikula_Value_Addons
 * @subpackage News
*/

/**
 * translated by
 * @author Mateo Tibaquira [mateo]
 */

define('_STORIES_ADDITIONALINFO', 'Informaci�n adicional del bloque');

define('_STORIES_BASICINFO', 'Informaci�n b�sica del bloque');

define('_STORIES_CATEGORIES_REGISTRY', 'Registro de categor�as');
define('_STORIES_CATEGORY', 'Selecciona 0 o m�s categor�as');
define('_STORIES_COUNTER', 'N�mero de lecturas');

define('_STORIES_DATEFORMAT', 'Formato de la fecha');
define('_STORIES_DATEFORMATLINK', 'Descripci�n strftime');
define('_STORIES_DISPCOMMENTS', 'Mostrar el n�mero de comentarios');
define('_STORIES_DISPDATE', 'Mostrar la fecha del art�culo');
define('_STORIES_DISPHOMETEXT', 'Mostrar el resumen del art�culo');
define('_STORIES_DISPLAYALL', 'Mostrar todos los art�culos');
define('_STORIES_DISPLAYFRONTPAGE', 'Mostrar s�lo los art�culos de la p�gina principal');
define('_STORIES_DISPLAYNONFRONTPAGE', 'Mostrar s�lo los art�culos no publicados en la principal');
define('_STORIES_DISPNEWIMAGE', 'Mostrar una im�gen para los titulares recientes');
define('_STORIES_DISPREADS', 'Mostrar el n�mero de lecturas');
define('_STORIES_DISPUNAME', 'Mostrar el nombre del autor');

define('_STORIES_EMPTYRESULT', 'No hay art�culos recientes');

define('_STORIES_FADESCROLLING', 'Deslizador con desvanecimiento');

define('_STORIES_HOMETEXTCLASS', 'Clase CSS opcional para el texto resumen'); 
define('_STORIES_HOMETEXTWARNING', 'Al delimitar el resumen, los elementos HTML incompletos ser�n corregidos por el plugin truncatehtml.');
define('_STORIES_HOMETEXTWRAPTEXT', 'Texto sufijo para delimitar el resumen'); 

define('_STORIES_MARQUEESCROLLING', 'Deslizador como marquesina');
define('_STORIES_MAXDAYS', 'L�mite m�ximo de d�as de publicado (0 : sin l�mite)');
define('_STORIES_MAXHOMETEXTLENGTH', 'Largo m�ximo del texto resumen (0 : sin l�mite)'); 
define('_STORIES_MAXNUM', 'N�mero m�ximo de art�culos a mostrar');
define('_STORIES_MAXTITLELENGTH', 'Largo m�ximo del t�tulo (0 : sin l�mite)');

define('_STORIES_NEWIMAGEALT', 'NUEVO');
define('_STORIES_NEWIMAGELIMIT', 'L�mite de d�as para considerar un art�culo como reciente');
define('_STORIES_NEWIMAGESET', 'El conjunto de im�genes a usar (plugin pnimg)');
define('_STORIES_NEWIMAGESRC', 'El nombre de la im�gen a usar (plugin pnimg)');
define('_STORIES_NEWSSETTING', 'Configuraci�n del m�dulo');
define('_STORIES_NOSCROLLING', 'Sin deslizador');

define('_STORIES_ORDER', 'Art�culos ordenados por');

define('_STORIES_PAUSESCROLLING', 'Deslizador vertical con pausa');

define('_STORIES_SCROLLDELAY', 'Retraso entre fotogramas/ retraso de inicio para marquesina (msec)');
define('_STORIES_SCROLLING', 'Usar deslizador para los elementos');
define('_STORIES_SCROLLINGDESC', 'Los art�culos pueden ser puestos en un deslizador din�mico.<br />El dezlizador vertical con pausa est� basado en <a href="http://www.dynamicdrive.com/dynamicindex2/crosstick.htm">Pausing up/down</a>, el deslizador con desvanecimiento (efecto de gradiente seco s�lo en IE) basado en <a href="http://www.dynamicdrive.com/dynamicindex2/memoryticker.htm">memoryticker</a> y el Deslizador como marquesina est� basado en <a href="http://www.dynamicdrive.com/dynamicindex2/cmarquee2.htm" target="_new">Marquee II</a>.');
define('_STORIES_SCROLLMSPEED', 'Velocidad de la marquesina 1-10');
define('_STORIES_SCROLLSTYLE', 'Definiciones de estilos para el deslizador');
define('_STORIES_SELECTNONE', 'Ninguno');
define('_STORIES_SHOWEMPTYRESULT', 'Mostrar \''._STORIES_EMPTYRESULT.'\' cuando no hay art�culos en vez de el bloque vac�o');
define('_STORIES_SPLITCHAR', 'Caracter de corte para la informaci�n adicional');

define('_STORIES_TEMPLATE_BLOCK', 'Plantilla para mostrar el bloque (dejar vac�a por defecto)');
define('_STORIES_TEMPLATE_OVERRIDE', 'Especificaci�n de plantillas personalizadas');
define('_STORIES_TEMPLATE_OVERRIDE_INFO', 'Si no quieres usar las plantillas predeterminadas, tienes que especificar otra aqui. Cada elemento por defecto es formateado con news_block_storiesext_row.htm. La plantila por defecto para el bloque depende de la configuraci�n del deslizador, la est�tica por defecto es news_block_storiesext.htm y para los deslizadores es news_block_storiesext_scrollNAME.htm.');
define('_STORIES_TEMPLATE_ROW', 'Plantilla para formatear cada elemento (dejar vac�a por defecto)');
define('_STORIES_TITLEWRAPTXT', 'Texto sufijo para delimitar el t�tulo');

define('_STORIES_WHICHSTORIES', 'Art�culos a mostrar (p�gina principal)');
