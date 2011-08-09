<?php
/**
 * Zikula Application Framework
 *
 * @copyright (c) 2001, Zikula Development Team
 * @link http://www.zikula.org
 * @version $Id: userapi.php 21401 2007-02-16 11:52:12Z landseer $
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 * @package Zikula_Value_Addons
 * @subpackage News
*/

/**
 * translated by
 * @author Mateo Tibaquira [mateo]
 */

// general
define('_NEWS', 'Noticias');
define('_NEWS_AUTHOR', 'Autor');

// singular/plural
define('_NEWS_STORY', 'Art�culo');
define('_NEWS_STORY_LC', 'art�culo');
define('_NEWS_STORIES', 'Art�culos');

// status
define('_NEWS_ARCHIVED', 'Archivado');
define('_NEWS_DRAFT', 'Borrador');
define('_NEWS_PENDING', 'Pendiente');
define('_NEWS_PUBLISHED', 'Publicado');
define('_NEWS_REJECTED', 'Rechazado');
define('_NEWS_SCHEDULED', 'Programado');

// common defines
define('_NEWS_ALLOWCOMMENTS', 'Permitir comentarios en este art�culo');
define('_NEWS_NOCOMMENTS', 'Sin comentarios');
define('_NEWS_COMMENT', '1 comentario');
define('_NEWS_COMMENTS', '%count% comentarios');
define('_NEWS_COMMENTSQ', 'Comentarios?');
define('_NEWS_POSTEDBYANDON', 'Publicado por %username% el %date%');
define('_NEWS_READ', '1 lectura');
define('_NEWS_READS', '%count% lecturas');
define('_NEWS_SELFWRITTEN', ', %count% propios');
define('_NEWS_NOARTICLES', 'sin art�culos');
define('_NEWS_RSSFEED', 'Canal RSS');
define('_NEWS_NOARTICLESFOUND', 'No hay art�culos publicados actualmente');
define('_NEWS_NOARTICLESFOUNDINCAT', 'No hay art�culos publicados en la categor�a %cat%');

// date format nice defines
define('_NEWS_DAYSAGO', 'hace %days% d�as');
define('_NEWS_DAYSFROMNOW', '%days% d�as a partir de ahora');
define('_NEWS_HOURSAGO', 'hace %hours% horas');
define('_NEWS_HOURSFROMNOW', '%hours% horas a partir de ahora');
define('_NEWS_MINSAGO', 'hace %mins% mins');
define('_NEWS_MINSFROMNOW', '%mins% mins a partir de ahora');
define('_NEWS_SECSAGO', 'hace %secs% segs');
define('_NEWS_SECSFROMNOW', '%secs% segs a partir de ahora');
define('_NEWS_YESTERDAY', 'Ayer');
define('_NEWS_TOMORROW', 'Ma�ana');

// new/modify templates
// these are located in the common file to support user submission
// the following string is used in javascript, #{chars} is like %chars% in pnML
// for more information see http://prototypejs.org/api/template
// modules/News/pnjavascript/sizecheck.js
define('_NEWS_CHARSUSED', '#{chars} caract�res de 65536');
define('_NEWS_CONTENTTYPE', 'Tipo de formato del contenido');
define('_NEWS_EXTENDEDTEXT', 'Cuerpo del art�culo');
define('_ARTICLETITLE_FLC', 'T�tulo del art�culo');
define('_NEWS_NEWSARTICLEPREVIEW', 'Previsualizaci�n');

define('_NEWS_ATTRIBUTES', 'Atributos del art�culo');
define('_NEWS_ATTRIBUTE_NEW', 'Nuevo atributo del art�culo');
define('_NEWS_ENABLEATTRIBUTION', 'Habilitar atributos');
define('_NEWS_FORMATTEDTEXT', 'Texto Formateado');
define('_NEWS_FROM', 'Fecha de publicaci�n');
define('_NEWS_HOMETEXT', 'Resumen para el listado');
define('_NEWS_INHOME', 'Publicar en la p�gina frontal');
define('_NEWS_MAXCHARS', '(L�mite: 65536 caract�res)');
define('_NEWS_NOTES', 'Notas al pie');
define('_NEWS_OVERVIEW', 'Datos de cabecera');
define('_NEWS_ARTICLECONTENT', 'Contenido del art�culo');
define('_NEWS_PLAINTEXT', 'Texto Plano');
define('_NEWS_POSTORPREVIEW', 'Acci�n');
define('_NEWS_POSTSTORY', 'Publicar');
define('_NEWS_SUBMIT', 'Enviar art�culo');
define('_NEWS_PUBLISHEDSTATUS', 'Estado');
define('_NEWS_PREVIEW', 'Previsualizaci�n');
define('_NEWS_PREVIEWSTORY', 'Previsualizar');
define('_NEWS_PUBLICATIONSHOW', 'Mostrar Opciones de Publicaci�n');
define('_NEWS_PUBLICATIONHIDE', 'Ocultar Opciones de Publicaci�n');
define('_NEWS_NOLIMIT', 'Sin fecha de expiraci�n');
define('_NEWS_TO', 'Fecha de expiraci�n');
define('_NEWS_UNLIMITED', 'Sin l�mite temporal');
