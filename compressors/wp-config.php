<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'compressor');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '$}vL},@ W*W{g*l`K0{>Qp,d^V6 efdw53-e*uZf7FZ]u-w{=yMX(oS1O-3d((R/');
define('SECURE_AUTH_KEY',  'KiH,k<gr2~CfyI1CM`I3B$G-ZOV9^w[J EIL0T`>fP#d7=,mQ9U3>#*&u69B>ZM(');
define('LOGGED_IN_KEY',    'riEdA-F:}rHiw~%e%8~;l5yCL)vPK:*{4{2K1)!zf.>h708!?{OJ7n^pLYb-B(P|');
define('NONCE_KEY',        '%h-!H@i~<8P0fz*9(%%QEs{%EI>PE+>&!Rf=$qIhdeyA7=*#P2JR+dL8_4>9^o? ');
define('AUTH_SALT',        'I(3 WSzqheEe[ccc]S!O:e1q%&Uc^fcANDEDM}MK:t}*fHNiY?wp-1MW?Pz6KNtr');
define('SECURE_AUTH_SALT', '~2YtF~*T9eY%nAI/}Ubd7CO?1x<gIRy2ALu1~W)bqj9P:P4:^aJ6<s.}EYvl`>du');
define('LOGGED_IN_SALT',   'MFxl$&Nxq(P#k/=Fg:#w*%(*riBU|((!j-mGFm{$Ae=[=U|@rYg+y6;5gu[jNO*6');
define('NONCE_SALT',       '5AVa]K[|sw^mhAW)Sg7A?dau,ZET/u*^GVc(bt9taxsoeCEtgqF%$kH|[Wwd6De1');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
