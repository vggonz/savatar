<?php

// Tamaño máximo en píxeles de los avatares, tanto ancho como alto
define("MAX_SIZE", 80);

// Tamaño máximo en kilobytes de los avatares
define("MAX_FILESIZE", 100);

// Directorio donde se guardarán las imágenes maestro
$pool_dir = "/savatar/pool";

// Directorio donde se irán almacenando los derivados en cache bajo demanda
$cache_dir = "/savatar/cache";

// Cadena de conexión a la base de datos
$db_url = "mysql://user:password@localhost/savatar";

// Ruta al avatar por defecto
$default_avatar = "/savatar/default.png";

// Remitente de los correos de validación
$email_from = "savatar@denibol.com";

// Tiempo máximo de espera hasta validar
$max_wait_time = 3600; // 1 hora

// Permisos de acceso de los avatares creados
$mod = 0600;
?>
