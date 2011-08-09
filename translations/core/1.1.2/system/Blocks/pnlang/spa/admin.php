<?php
/**
 * Zikula Application Framework
 *
 * @copyright (c) 2002, Zikula Development Team
 * @link http://www.zikula.org
 * @version $Id: admin.php 22138 2007-06-01 10:19:14Z markwest $
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 * @package Zikula_System_Modules
 * @subpackage Blocks
 */

/**
 * translated by
 * @author Mateo Tibaquira [mateo]
 */

// help texts
define('_BLOCKS_ADMINHINT1', 'Esta es la lista de todos los bloques que est�n presentes en tu sistema (dependiendo de las opciones \'Mostrar todos los bloques\' o \'Mostrar los bloques activos\' en la parte superior de la pantalla. Esta lista no refleja el orden de los bloquen es las diferentes posiciones. Si tu quieres ajustar eso, If you want to adjust this, despl�zate hacia abajo (o <a href="#blockpositions">click aqu�</a>), y edit una posici�n de bloque.');
define('_BLOCKS_ADMINHINT2', 'Esta lista muestra todas las posiciones de bloques que han sido creadas. Para editar una posici�n de bloque o reordenar los bloques dentro de una posici�n, click en el icono de editar.');
define('_BLOCKS_ADMINHINT3', 'Los caracteres permitidos son a-z, A-Z, 0-9, gui�n (-) y gui�n bajo (_).'); 

// singular/plural
define('_BLOCKS_BLOCK', 'Bloque');
define('_BLOCKS_BLOCK_LC', 'bloque');
define('_BLOCKS_BLOCKS', 'Bloques');
define('_BLOCKS_BLOCKPOSITION', 'Posici�n de Bloques');
define('_BLOCKS_BLOCKPOSITION_LC', 'posici�n de bloques');
define('_BLOCKS_BLOCKPOSITIONS', 'Posiciones de Bloques');

// menu
define('_BLOCKS_SHOWACTIVEBLOCKS', 'Mostrar los bloques activos');
define('_BLOCKS_SHOWALLBLOCKS', 'Mostrar todos los bloques');
define('_BLOCKS_CREATEBLOCK', 'Crear bloque');
define('_BLOCKS_CREATEBLOCKPOSITION', 'Crear posici�n de bloques');
define('_BLOCKS_VIEWBLOCKS', 'Ver bloques');
define('_BLOCKS_VIEWBLOCKPOSITIONS', 'Ver posiciones de bloques');
define('_BLOCKS_DELETEBLOCK', 'Borrar bloque');
define('_BLOCKS_CONFIRMDELETEBLOCK', 'Realmente quieres borrar este bloque?');
define('_BLOCKS_DELETEBLOCKPOSITION', 'borrar posici�n de bloques');
define('_BLOCKS_CONFIRMDELETEBLOCKPOSITION', 'Realmente quieres borrar esta posici�n de bloques?');

// new/modify
define('_BLOCKS_ADVANCEDPLACEMENTTOGGLE', 'Click para mostrar/ocultar las opciones avanzadas de la colocaci�n de bloques');
define('_BLOCKS_COLLAPSABLE', 'Contraible');
define('_BLOCKS_COLLAPSED', 'Contra�do');
define('_BLOCKS_COLLAPSIBILITY', 'Contraibilidad');
define('_BLOCKS_CUSTOMBLOCKSETTINGS', 'Opciones espec�ficas del bloque');
define('_BLOCKS_DEFAULTSTATE', 'Estado del bloque por defecto');
define('_BLOCKS_EXPANDED', 'Expandido');
define('_BLOCKS_FUNCTIONFILTERING', 'Las siguientes opciones permiten que el bloque no sea mostrado en ciertos m�dulos y sus funciones');
define('_BLOCKS_PLACEMENT', 'Filtro para colocaci�n del bloque');
define('_BLOCKS_POSITIONS','Posici�n(es)');
define('_BLOCKS_REFRESH','Tiempo de actualizaci�n para el bloque (solo es usado por aquellos bloques que recogen informaci�n de fuentes externas)');
define('_BLOCKS_CLICKTOACTIVATE', 'click para activar este bloque');
define('_BLOCKS_CLICKTODEACTIVATE', 'click para desactivar este bloque');

// new/modify position
define('_BLOCKS_ASSIGNEDBLOCKS', 'Bloques asignados a esta posici�n');
define('_BLOCKS_BLOCKASSIGNMENTS', 'Asignaciones del bloque');
define('_BLOCKS_DRAGANDDROPHINT','Ordena tus bloques para esta posici�n arrastrando y soltando. El orden de los bloques tambi�n ser� guardado cualdo sueltes un bloque asignado en otro lugar.');
define('_BLOCKS_UNASSIGNEDBLOCKS', 'Bloques no asignados a �sta posici�n');

// modify config
define('_BLOCKS_COLLAPSEABLE','Habilitar menu con �cono contraible');

// view
define('_BLOCKS_ID', 'ID');
define('_BLOCKS_THEMETAG', 'Etiqueta para el Theme');

// time drop down
define('_BLOCKS_HALFHOUR','Media hora');
define('_BLOCKS_HOUR','Una hora');
define('_BLOCKS_TWOHOURS','Dos horas');
define('_BLOCKS_FOURHOURS','Cuatro horas');
define('_BLOCKS_TWELVEHOURS','Doce horas');
define('_BLOCKS_ONEDAY','Un d�a');
define('_BLOCKS_TWODAY','Dos d�as');
define('_BLOCKS_THREEDAY','Tres d�as');
define('_BLOCKS_FOURDAY','Cuatro d�as');
define('_BLOCKS_FIVEDAY','Cinco d�as');
define('_BLOCKS_SIXDAY','Seis d�as');
define('_BLOCKS_SEVENDAY','Siete d�as');

// errors/statuses
define('_BLOCKS_ACTIVATED','Bloque ahora activo');
define('_BLOCKS_DEACTIVATED','Bloque ahora inactivo');
