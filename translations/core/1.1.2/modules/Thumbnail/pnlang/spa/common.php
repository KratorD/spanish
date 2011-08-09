<?php 
/**
 * translated by
 * @author Mateo Tibaquira [mateo]
 */

define('_THUMBNAIL_TITLE_PREFERENCES',		'Preferencias del m�dulo Thumbnail');
define('_THUMBNAIL_PREFERENCES_SIZE',		'Tama�o estandar de la miniatura');
define('_THUMBNAIL_PREFERENCES_OVERRIDE',	'Permitir invocar al m�dulo para usar otro tama�o');

define('_THUMBNAIL_TITLE_CHECKSETTINGS',	'Verificar configuraci�n');

define('_THUMBNAIL_SETTINGS',			'Ajustes');
define('_THUMBNAIL_SETTING',			'Configuraci�n');
define('_THUMBNAIL_MASTERVALUE',			'Valor maestro');
define('_THUMBNAIL_LOCALVALUE',			'Valor local');
define('_THUMBNAIL_COMMENTS',			'Comentarios');
define('_THUMBNAIL_VALUE',			'Valor');
define('_THUMBNAIL_FEATURES',			'Caracter�sticas');
define('_THUMBNAIL_FUNCTIONS',			'Funciones');
define('_THUMBNAIL_FUNCTION_EXISTS',			'funcion_existe:');
define('_THUMBNAIL_SCALE',			'&lt;-- malo . . . . . bueno --&gt;');

/* Check settingts */
define('_THUMBNAIL_CHECKSETTINGS_DESC',			'Este script analiza tu configuraci�n (phpThumb.config.php y servidor/PHP) para <a href="http://phpthumb.sourceforge.net"><strong>phpThumb()</strong></a>');


/* phpThum Stuff */
define('_THUMBNAIL_TITLE_PHPTHUMB_SETTINGS',			'configuraci�n phpThumb');

/* Settings */

//Cache directory
define('_THUMBNAIL_CACHE_DIR_DESC',			'Nota: esta carpeta debe ser escribible (usualmente chmod 777 es necesario) para que funcione el cache.
        Si la carpeta no es escribible no aparecer� ning�n error pero el cach� ser� deshabilitado.');
define('_THUMBNAIL_CACHE_DIR_CONF',			'Configuraci�n de la carpeta para el cache');
define('_THUMBNAIL_CACHE_DIR',			'Carpeta del cache');
define('_THUMBNAIL_SET_CACHE_DIR',			'establece cual es la carpera donde se guardan los elementos cacheados');
define('_THUMBNAIL_CACHE_DIR_WARNING_OFF',			'Advertencia de cache deshabilitado');
define('_THUMBNAIL_CACHE_DIR_WARNING_DESC',			'Si la [<em>Carpeta del cache</em>] no existe o no es escribible, y la [Advertencia de cache deshabilitado] est� deshabilitada, una im�gen de error ser� generada ya sea para establecer una carpeta v�alida o desactivar la alarma (y evitar confindir a la gente que no sabe del cache)');

//Cache culling
define('_THUMBNAIL_CACHE_CULLING',			'Cache selectivo');
define('_THUMBNAIL_CACHE_CULLING_DESC',			'phpThumb puede autom�ticamente limitar los contenidos de la carpeta del cache
        basado en la fecha de �ltimo acceso y/o el n�mero de archivos y/o tama�o total del archivo.');
define('_THUMBNAIL_CACHE_CULLING_CACHE_MAX_AGE',			'Edad m�xima del cache');
define('_THUMBNAIL_CACHE_CULLING_CACHE_MAX_AGE_DESC',			'[VAC�O] nunca borra las miniaturas cacheadas basado en la fecha de �ltimo acceso
                borra las miniaturas cacheadas que no han sido accedidas en m�s de [Edad m�xima del cache] d�as (este valor es el tiempo m�ximo en d�as desde el �ltimo acceso para evitar el borrado).');
define('_THUMBNAIL_CACHE_CULLING_CACHE_MAX_SIZE',			'Tama�o m�ximo del cache');
define('_THUMBNAIL_CACHE_CULLING_CACHE_MAX_SIZE_DESC',			'[VAC�O] nunca borra las miniaturas cacheadas basado en el tama�o en bytes de la carpeta
                borra las miniaturas cacheadas que no han sido visitadas recientemente cuando ha m�s de [Tama�o m�ximo del cache]MB de archivos cacheados (el valor es el m�ximo tama�o de bytes de todos los archivos cacheados).');  
define('_THUMBNAIL_CACHE_CULLING_CACHE_MAX_FILES',			'M�ximo de archivos cacheados');
define('_THUMBNAIL_CACHE_CULLING_CACHE_MAX_FILES_DESC',			'[VAC�O] nunca borra las miniaturas cacheadas basado en el n�mero de archivos cacheados
                borra las miniaturas cacheadas que no han sido visitadas recientemente cuando hay m�s de [M�ximo de archivos cacheados] archivos cacheados (el valor es el n�mero m�ximo de archivos cacheados a guardar).');    
                
//Source image cache configuration
define('_THUMBNAIL_SOURCE_IMG_CACHE_CONF',			'Configuraci�n del cache de im�genes externas');
define('_THUMBNAIL_SOURCE_IMG_CACHE_ENABLED',			'Habilitar cache externo');
define('_THUMBNAIL_SOURCE_IMG_CACHE_ENABLED_DESC',			'si est� habilitado, las im�genes obtenidas via HTTP son cacheadas en la [Carpeta de cache externo].');
            
define('_THUMBNAIL_CACHE_SOURCE_DIR',			'Carpeta de cache externo');
define('_THUMBNAIL_CACHE_SOURCE_DIR_DESC',			'establece la ruta de la carpeta donde se almacena el cache de im�genes externas no procesadas');

//cache source modification date configuration
define('_THUMBNAIL_CACHE_SOURCE_MOD_DATE_CONF',			'Configuraci�n de fechas de modificaci�n del cache externo');
define('_THUMBNAIL_CACHE_SOURCE_FILETIME_IGNORE_LOCAL',			'Ignorar la fecha de modificaci�n de im�genes externas');
define('_THUMBNAIL_CACHE_SOURCE_FILETIME_IGNORE_LOCAL_DESC',			'si est� habilitado, las im�genes locales no se les comprobar�n fechas de modificaci�n y la im�gen del cache ser� usada si est� disponible, a�n si en la fuente original ha cambiado o se ha eliminado.');
define('_THUMBNAIL_CACHE_SOURCE_FILETIME_IGNORE_REMOTE',			'Ignorar la fecha de modificaci�n remota');
define('_THUMBNAIL_CACHE_SOURCE_FILETIME_IGNORE_REMOTE_DESC',			'si est� habilitado, a las im�genes remotas no se les comprobar�n fechas de modificaci�n y la im�gen del cach� ser� usada si est� disponible, a�n si en la fuente original ha cambiado o se ha eliminado. 
                 <strong>ADVERTENCIA</strong>: el rendimiento del cache puede CAER mucho si esta opci�n est� deshabilitada.');
                
//Simplified cache filename configuration
define('_THUMBNAIL_SIMPLE_CACHE_FILENAME_CONF',			'Configuraci�n de nombres de archivo del cache simplificados');
define('_THUMBNAIL_SIMPLE_CACHE_FILENAME_CONF_DESC',			'En vez de crear un nombre de archivo �nico para el cache para todas las combinaciones de par�metros, crea archivos de cache "simples" (ej.: "imagen_thumb.jpg")<br />
        Si el [Nombre en el cache] no es vac�o, los par�metros GET (excepto \'src\') son ignorados y solamente los par�metros $PHPTHUMB_DEFAULTS
        (definidos al final de phpThumb.config.php) son usados para el procesamiento.<br />
        El caracter \'*\' DEBE ser usado para representar el nombre de la im�gen fuente.');
        
define('_THUMBNAIL_CACHE_DEFAULT_ONLY_SUFFIX',			'Nombre en el cache');
define('_THUMBNAIL_CACHE_DEFAULT_ONLY_SUFFIX_DESC',			'[VAC�O] cacheado en la manera normal de phpThumb<br />
            el nombre \'*_thumb\' aplicado a la imagen \'imagen.jpg\' se convierte en \'imagen_thumb.jpg\' (o \'imagen_thumb.png\' si la salida PNG es seleccionada, etc)<br />
            el nombre \'small-*\' aplicado a la imagen \'imagen.jpg\' se convierte en \'small-imagen.jpg\' (o \'small-imagen.png\' si la salida PNG es seleccionada, etc).');
            
define('_THUMBNAIL_CACHE_FORCE_PASSTHRU',			'Forzar cache Passthru');
define('_THUMBNAIL_CACHE_FORCE_PASSTHRU_DESC',			'si est� habilitado, los datos d ela im�gen cacheada ser�n siempre pasados al explorador; si est� deshabilitado, se usar� la redirecci�n HTTP.');

//Temp directory configuration
define('_THUMBNAIL_TEMP_DIR_CONF',			'Configuraci�n de la carpeta temporal');   
define('_THUMBNAIL_TEMP_DIR_CONF_DESC',			'phpThumb() quiz� necesite crar archivos temporales. Usualmente la carpeta temporal del sistema es escribible y puede ser usada.
        Deja este valor como NULL en la mayor�a de casos. Si obtienes errores acerca de "falla al abrir &lt;nombre-de-archivo&gt; para escritura"
        deber�s cambiar este valor por una ruta absoluta a una carpeta con permisos de escritura.');
define('_THUMBNAIL_TEMP_DIR',			'Carpeta temporal');

//Max pixels in source img
define('_THUMBNAIL_MAX_PIXELS_SOURCE_IMG_HEAD',			'N�mero m�ximo de pixeles en una im�gen para tratar de procesarla');
define('_THUMBNAIL_MAX_PIXELS_SOURCE_IMG_HEAD_DESC',			'Si es cero, entonces no hay l�mite en las dimensiones de la im�gen fuente.
        Si no es cero entonces este es el m�ximo n�mero de pixeles en la im�gen fuente
        que puede ser procesado normalmente, de otra manera la miniatura EXIF embebida ser�
        usada (si est� disponible) o un aviso de "im�gen my grande" ser� mostrado.
        Esto es para ser usado con im�genes fuentes muy grandes (> 1600x1200) y l�mites bajos
        de memoria PHP. Si PHP excede el l�mite de memoria el script usualmente muere y no arroja
        una salida visible. Para calcular este n�mero, multiplica las dimensiones de la im�gen
        m�s grande que puedas procesar conm tu l�mite de memoria (ej. 1600 * 1200 = 1920000)
        Como una gu�a general, este n�mero ser� cerca del 20% de tu configuraci�n de memoria PHP,
        as� 8M = 1,677,722; 16M = 3,355,443; 32M = 6,710,886; etc.');
define('_THUMBNAIL_MAX_PIXELS_SOURCE_IMG',			'M�ximo de pixeles por im�gen');
define('_THUMBNAIL_MAX_PIXELS_SOURCE_IMG_DESC',			'        <ul>
            <li>0 sin l�mite de memoria</li>
            <li>1920000 permite procesar im�genes de 1600x1200 (2Mpx), no mayores (cerca de 10MB se requieren)</li>
            <li>3355443 l�mite de memoria de 16MB</li>
            <li>3871488 permite procesar im�genes de 2272x1704 (4Mpx), no mayores (cerca de 16MB se requieren)</li>
        </ul>');    
  
//ImageMagick configuration
define('_THUMBNAIL_IMG_MAGIC_CONF',			'Configuraci�n de ImageMagick');
define('_THUMBNAIL_IMG_MAGIC_CONF_DESC',			'Si una im�gen fuente es m�s grande que el l�mite de memoria definido anteriormente
        [M�ximo de pixeles por im�gen] Y el programa ImageMagick\'s est� disponible, phpThumb()
        llamar� a ImageMagick para generar la miniatura de la im�gen fuente para evadir
        la limitaci�n de memoria. Dejando el valor como NULL har� que phpThumb() intente
        detectar la presencia de ImageMagick con `which`.');
define('_THUMBNAIL_IMG_MAGIC_PAHT',			'Ruta a ImageMagick');
define('_THUMBNAIL_IMG_MAGIC_PAHT_DESC',			'Windows: establece la ruta absoluta o vac�a para no usar Image Magic<br />
                *nix: ruta absoluta a "convert", o dejar como NULL si "convert" est� en la ruta');
                
//Default output configuration
define('_THUMBNAIL_DEFAULT_OUTPUT_CONF',			'Configuraci�n de slaida por defecto');
define('_THUMBNAIL_DEFAULT_OUTPUT_FORMAT',			'Formato de salida');
define('_THUMBNAIL_DEFAULT_OUTPUT_FORMAT_DESC',			'formato de salida predeterminado (\'jpeg\', \'png\' o \'gif\') - las miniaturas ser�n generadas en este formato (si est� disponible en tu versi�n de GD).');
define('_THUMBNAIL_DEFAULT_OUTPUT_MAXWIDTH',			'Ancho m�x. de salida');
define('_THUMBNAIL_DEFAULT_OUTPUT_MAXWIDTH_DESC',			'ancho de miniatura m�ximo por defecto. Si es cero entonces el ancho por defecto es el ancho de la im�gen fuente.');
define('_THUMBNAIL_DEFAULT_OUTPUT_MAXHEIGHT',			'Alto m�x. de salida');
define('_THUMBNAIL_DEFAULT_OUTPUT_MAXHEIGHT_DESC',			'alto de miniatura m�ximo por defecto. Si es cero entonces el alto por defecto es el alto de la im�gen fuente.');        
define('_THUMBNAIL_DEFAULT_OUTPUT_INTERLACE',			'Entrelazado de la salida');
define('_THUMBNAIL_DEFAULT_OUTPUT_INTERLACE_DESC',			'si est� habilitado aplica una salida entrelazada para GIF/PNG, y una progresiva para JPEG; si no, aplica una no-entrelazada para GIF/PNG, y la b�sica JPEG.');

//Error message configuration
define('_THUMBNAIL_ERR_MSG_CONF',			'Configuraci�n de mensajes de error');
define('_THUMBNAIL_ERR_IMG_WIDTH',			'Ancho de la im�gen de error');
define('_THUMBNAIL_ERR_IMG_WIDTH_DESC',			'ancho por defecto de las im�genes de error');
define('_THUMBNAIL_ERR_IMG_HEIGHT',			'Alto de la im�gen de error');
define('_THUMBNAIL_ERR_IMG_HEIGHT_DESC',			'alto por defecto de las im�genes de error');
define('_THUMBNAIL_ERR_MSG_IMG_DEFAULT',			'Mensaje por defecto de la im�gen de error');
define('_THUMBNAIL_ERR_MSG_IMG_DEFAULT_DESC',			'Establece el nombre de de la im�gen de error gen�rica (ej. \'/images/error.png\') que quieres que sea mostrada en vez de cualquier mensaje de error que pueda ocurrir. Esta opci�n es sobre-escrita por el par�metro \'err\', que hace lo mismo.');

define('_THUMBNAIL_ERR_IMG_BGCOLOR',			'Color de fondo del error');
define('_THUMBNAIL_ERR_IMG_BGCOLOR_DESC',			'color de fondo para las im�genes con mensajes de error.');
define('_THUMBNAIL_ERR_IMG_TEXTCOLOR',			'Color de la letra');
define('_THUMBNAIL_ERR_IMG_TEXTCOLOR_DESC',			'color del texto de los mensajes de error.');
define('_THUMBNAIL_ERR_IMG_FONTSIZE',			'Tama�o de la letra');
define('_THUMBNAIL_ERR_IMG_FONTSIZE_VAL_SAMALLEST',			'(el m�s peque�o)');
define('_THUMBNAIL_ERR_IMG_FONTSIZE_VAL_LARGEST',			'(el m�s grande)');
define('_THUMBNAIL_ERR_IMG_FONTSIZE_DESC',			'tama�o de los textos en los mensajes de error, de 1 (el m�s peque�o) a 5 (el m�s grande)');
define('_THUMBNAIL_ERR_DIE_MSG',			'die si hay un error');
define('_THUMBNAIL_ERR_DIE_MSG_DESC',			'die con mensaje de error si hay un error fatal (recomendado con phpThumb.php aut�nomo).');
define('_THUMBNAIL_ERR_SILENT_DIE',			'die silencioso si hay un error');
define('_THUMBNAIL_ERR_SILENT_DIE_DESC',			'simplemente die sin salida de ning�n tipo si hay un error fatal (no recomendado)');
define('_THUMBNAIL_ERR_DIE_SOURCE_FAIL',			'Die si no hay im�gen fuente');
define('_THUMBNAIL_ERR_DIE_SOURCE_FAIL_DESC',			'die con mensaje de error si la im�gen fuente no puede ser procesada por phpThumb() (usualmente porque la im�gen fuente est� corrupta de alguna forma).
            Si est� deshabilitada la im�gen fuente ser� pasada sin procesamiento, sino (por defecto), un mensaje de error es mostrado.');



//Off-server Thumbnailing Configuration
define('_THUMBNAIL_OFF_SRV_TMBN_CONF',			'Configuraci�n de miniaturas fuera del servidor');
define('_THUMBNAIL_OFF_SRV_TMBN_CONF_ENABLED',			'Habilitar');
define('_THUMBNAIL_OFF_SRV_TMBN_CONF_ENABLED_DESC',			'Si esta opci�n est� deshabilitada permitira procesar miniaturas desde cualquier dominio externo');
define('_THUMBNAIL_OFF_SRV_TMBN_CONF_VALID_DOMAINS',			'Dominios v�lidos');
define('_THUMBNAIL_OFF_SRV_TMBN_CONF_VALID_DOMAINS_DESC',			'Esta es la lista de dominios a los cuales es permitido crear miniaturas.
                El valor por defecto del dominio actual debe estar bien en la mayor�a de los casos, pero si es necesario puedes a�adir m�s dominios aqu�, en el formato www.ejemplo.com; www.ejemplo1.com.');
define('_THUMBNAIL_OFF_SRV_TMBN_CONF_ERASE_IMG',			'Borrar im�gen');
define('_THUMBNAIL_OFF_SRV_TMBN_CONF_ERASE_IMG_DESC',			'si est� habilitada, la miniatura es rellenada con $PHPTHUMB_CONFIG[\'nohotlink_fill_color\'] antes de aplicar el texto, sino, el texto es escrito sobre la miniatura.');
define('_THUMBNAIL_OFF_SRV_TMBN_CONF_ERR_MSG_TXT',			'Texto del mensaje');
define('_THUMBNAIL_OFF_SRV_TMBN_CONF_ERR_MSG_TXT_DESC',			'Texto del mensaje de error.');

//Off-server Linking Configuration
define('_THUMBNAIL_OFF_SRV_LINKING_CONF',			'Configuraci�n de enlazado fuera del servidor');
define('_THUMBNAIL_OFF_SRV_LINKING_CONF_ENABLED',			'Habilitar');
define('_THUMBNAIL_OFF_SRV_LINKING_CONF_ENABLED_DESC',			'Si esta opci�n est� deshabilitada permitira que las miniaturas sean enlazadas desde cualquier dominio, sino, s�lo los dominios listados a continuaci�n en [Dominios v�lidos] ser�n permitidos.');
define('_THUMBNAIL_OFF_SRV_LINKING_CONF_VALID_DOMAINS',			'Dominios v�lidos');
define('_THUMBNAIL_OFF_SRV_LINKING_CONF_VALID_DOMAINS_DESC',			'Esta es la lista de dominios para los cuales la generaci�n de miniaturas est� permitida.
                 El valor por defecto del dominio actual puede estar bien en la mayor�a de los casos, pero si es necesario, tu puedes a�adir m�s dominios aqu�, en el formato www.ejemplo.com; www.ejemplo1.com.');
define('_THUMBNAIL_OFF_SRV_LINKING_CONF_REQ_REFERER',			'Requerir referencia');
define('_THUMBNAIL_OFF_SRV_LINKING_CONF_REQ_REFERER_DESC',			'Si est� deshabilitado, permitir� llamadas aut�nomas a phpThumb(). Si est� habilitado entonces s�lo peticiones con un valor $_SERVER[\'HTTP_REFERER\'] en [Dominios v�lidos] son permitidos.');

define('_THUMBNAIL_OFF_SRV_LINKING_CONF_ERASE_IMG',			'Borrar im�gen');
define('_THUMBNAIL_OFF_SRV_LINKING_CONF_ERASE_IMG_DESC',			'si est� habilitada, la miniatura es rellenada con $PHPTHUMB_CONFIG[\'nohotlink_fill_color\'] antes que el texto sea aplicado, sino, el texto es escrito sobre la miniatura.');
define('_THUMBNAIL_OFF_SRV_LINKING_CONF_ERR_MSG_TXT',			'Texto del mensaje');
define('_THUMBNAIL_OFF_SRV_LINKING_CONF_ERR_MSG_TXT_DESC',			'Texto del mensaje de error. El nombre de tu servidor ser� a�adido a este texto'); 
 
//Border &amp; Background default colors
define('_THUMBNAIL_BORDER_BACKGROUND_CONF',			'Colores por defecto de borde &amp; fondo'); 
define('_THUMBNAIL_BORDER_BACKGROUND_BORDER_COLOR',			'Color de borde (hex)');                 
define('_THUMBNAIL_BORDER_BACKGROUND_BORDER_COLOR_DESC',			'Color de borde por defecto - en notacion hexadecimal de colores HTML.');                
define('_THUMBNAIL_BORDER_BACKGROUND_BACKGROUND_COLOR',			'Color de fondo (hex)');                 
define('_THUMBNAIL_BORDER_BACKGROUND_BACKGROUND_COLOR_DESC',			'Color de fondo predeterminado cuando el aspecto de la miniatura no se ajusta a la domension ajustada - en notacion hexadecimal de colores HTML'); 

//Watermark configuration
define('_THUMBNAIL_WATERMARK_CONF',			'Configuraci�n de marca de agua');                
define('_THUMBNAIL_WATERMARK_TTF_DIR',			'Carpeta de TTFs');
define('_THUMBNAIL_WATERMARK_TTF_DIR_DESC',			'Carpeta base donde est�n los archivos de las fuentes TTF');


//MySQL configuration
define('_THUMBNAIL_MYSQL_CONF',			'Configuraci�n de MySQL');   
define('_THUMBNAIL_MYSQL_CONF_DESC',			'Quiz�s quieras estraer datos de una base de datos en lugar de un archivo f�sico
        Si es as�, modifica la l�nea $PHPTHUMB_CONFIG[\'mysql_query\'] para adaptar la estructura de tu base de datos
        Nota: los datos extra�dos debe ser los datos binarios de la im�gen, no una URL o el nombre de archivo
        mira http://www.billy-corgan.com/blog/archive/000143.php para un breve tutorial sobre esta secci�n.
        <strong>Por razones de seguridad esta opci�n s�lo puede ser cambiada en el archivo de configuraci�n.</strong>');   

//Security configuration
define('_THUMBNAIL_SECURITY_CONF',			'Configuraci�n de seguridad');
define('_THUMBNAIL_SECURITY_HIGH_SEC_ENABLED',			'Habilitar seguridad m�xima');   
define('_THUMBNAIL_SECURITY_HIGH_SEC_ENABLED_DESC',			'si est� habilitada, requiere una [Contrase�a de alta seguridad] de al menos 5 caract�res, y requiere el uso de la funci�n phpThumbURL() (al final del archivo phpThumb.config.php) para generar URLs codificadas.'); 
define('_THUMBNAIL_SECURITY_HIGH_SEC_PW',			'Contrase�a de alta seguridad');  
define('_THUMBNAIL_SECURITY_HIGH_SEC_PW_DESC',			'requerida si est� habilitada [Habilitar seguridad m�xima], debe ser de al menos 5 caract�res de largo');  
define('_THUMBNAIL_SECURITY_DISABLE_DEBUG',			'Deshabilitar depuraci�n');
define('_THUMBNAIL_SECURITY_DISABLE_DEBUG_DESC',			'previene a phpThumb de mostrar cualquier informaci�n de tu sistema. Si se deshabilita, phpThumbDebug y los mensajes de error ser�n deshabilitados.');
define('_THUMBNAIL_SECURITY_ALLOW_SRC_ABOVE_DOCROOT',			'Permitir SRC antes de DOCROOT');
define('_THUMBNAIL_SECURITY_ALLOW_SRC_ABOVE_DOCROOT_DESC',			'si s�, permite a src estar en cualquier lugar de sistema de archivos; sino (por defecto), s�lo permite src dentro del document_root.');
define('_THUMBNAIL_SECURITY_ALLOW_SRC_ABOVE_PHPTHUMB',			'Permitir SRC antes de phpThumb');
define('_THUMBNAIL_SECURITY_ALLOW_SRC_ABOVE_PHPTHUMB_DESC',			'si s� (por defecto), permite a src estar en cualquier lugar de sistema de archivos; sino, s�lo se permitir�n src dentro de una sub-carpeta de phpThumb.');
define('_THUMBNAIL_SECURITY_ALLOW_PARAM_FILE',			'Permitir el par�metro File');
define('_THUMBNAIL_SECURITY_ALLOW_PARAM_FILE_DESC',			'si s�, permite el uso del par�metro \'file\'; sino (por defecto), el par�metro \'file\' es deshabilitado/ignorado.');
define('_THUMBNAIL_SECURITY_ALLOW_PARAM_GOTO',			'Permitir par�metro Goto');
define('_THUMBNAIL_SECURITY_ALLOW_PARAM_GOTO_DESC',			'si s�, permite el uso del par�metro \'goto\'; sino (por defecto), el par�metro \'goto\' es deshabilitado/ignorado.');

//Compatability settings

define('_THUMBNAIL_COMPATIBILITY_SETTINGS',			'Ajustes de compatibilidad');
define('_THUMBNAIL_COMPATIBILITY_DISABLE_PATHINFO_SETTINGS',			'Desactivar Parsing Pathinfo');
define('_THUMBNAIL_COMPATIBILITY_DISABLE_PATHINFO_SETTINGS_DESC',			'si s�, $_SERVER[PATH_INFO] no es analizado. Quiz�s sean necesarias algunas configuraciones del servidor para para permitir un comportamiento normal');
define('_THUMBNAIL_COMPATIBILITY_DISABLE_IMAGECOPYRESAMPLED',			'Desactivar Imagecopyresampled');
define('_THUMBNAIL_COMPATIBILITY_DISABLE_IMAGECOPYRESAMPLED_DESC',			'si s�, ImageCopyResampled es reemplazada con ImageCopyResampleBicubic. Quiz�s necesite de versiones buggy versions de PHP-GD.');
define('_THUMBNAIL_COMPATIBILITY_DISABLE_ONLYCREATEABLE_PASSTHRU',			'Desactivar onlycreateable passthru');
define('_THUMBNAIL_COMPATIBILITY_DISABLE_ONLYCREATEABLE_PASSTHRU_DESC',			'si s�, cualquier im�gen que pueda ser analizada por GetImageSize() puede transmitirse; sino, s�lo im�genes que puedan ser convertidas a GD por las funciones ImageCreateFrom(JPEG|GIF|PNG) son permitidas.');

//Speed optimizations configuration
define('_THUMBNAIL_SPEED_CONFIG',			'Configuraci�n de optimizaci�n de velocidad');
define('_THUMBNAIL_SPEED_PREFER_IMAGEMAGICK',			'Preferir Imagemagick');
define('_THUMBNAIL_SPEED_PREFER_IMAGEMAGICK_DESC',			'Si s�, usa ImageMagick para redimensionar las miniaturas si es posible, ya que es usualmente m�s r�pida que las funciones GD; sino, s�lo usa ImageMagick si el l�mite de memoria PHP es muy bajo.');
define('_THUMBNAIL_SPEED_USE_EXIF_THUMBNAIL',			'usar miniaturas exif por velocidad');
define('_THUMBNAIL_SPEED_USE_EXIF_THUMBNAIL_DESC',			'Si s�, y miniaturas EXIF est� disponible, y es m�s grande o igual a las dimensiones de la salida, usa miniaturas EXIF en vez de la fuente actual para generar miniaturas. El beneficio es s�lo velocidad, evitando redimensionar grandes im�genes.');                  

//Set parameters
define('_THUMBNAIL_SET_PARAM',			'Si cualquiera de los parametros son constantes para TODAS las im�genes, puedes establecerlos aqu�');
define('_THUMBNAIL_SET_PARAM_GETSTRING_OVERRIDE',			'Par�metros sobre-escriben valores por defecto');
define('_THUMBNAIL_SET_PARAM_GETSTRING_OVERRIDE_DESC',			'Si est� habilitado, cualquier par�metro en la URL sobre-escribir� los valores por defecto establecidos aqu�; sino, los par�metros aqu� definidos no pueden ser sobre-escritos en la URL.');
define('_THUMBNAIL_SET_PARAM_DISABLE_GETPARAMS',			'Deshabilitar los par�metros');
define('_THUMBNAIL_SET_PARAM_DISABLE_GETPARAMS_DESC',			'S� lo deshabilita, los par�metros GET ser�n ignorados (a excepci�n de \'src\') y s�lo luego los par�metros por defecto ser�n usados; sino, ambos ser�n usados (de�ndiendo de $PHPTHUMB_DEFAULTS_GETSTRINGOVERRIDE). Se auto-habilitar� si !empty($PHPTHUMB_CONFIG[\'cache_default_only_suffix\']).');