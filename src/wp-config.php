<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wp-first-site' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '^ZCi#wOII$v#UhIcUTVlICpW;wO+)~Wg?Qh9a7jU>jH+PyLTw>~ur*FpvC+!?2PL' );
define( 'SECURE_AUTH_KEY',  'W<[@Zn<<N>[|gZWU}M 8PR.}z:V`(A wCN`[e[6cBl_!&@)>SJajiZLQ$>#e7jX`' );
define( 'LOGGED_IN_KEY',    'sksKoLqymyl,qNAgSOCq.V%]sNYw+iXH*kw.Xh`&;6p;32vL*B&KOFrpOB*Q]|i9' );
define( 'NONCE_KEY',        'F@C6x__,2u?b3#3Y[&u)DLQGsr)Pf%#D2<m|tDCA##Ge1WG>|L`zlCfm)m~Y)yeb' );
define( 'AUTH_SALT',        'eZF(Co;v1_Pe;5L6uo29M+nA@8L}StyZ^3O*1yQ5J<P [T];j;|~k!cZs,T1?Q%0' );
define( 'SECURE_AUTH_SALT', 'xnRS-GEL>DX.=-qzwX^Fr(`/|!D)D@Jt+j@ClOz%cp]H|9!^^meWvDC>4DOoe]|0' );
define( 'LOGGED_IN_SALT',   'd%5VIu{If:94CzWM!!%0(MHR 1|S5zcAp&&CiXT,/;@TU(9g13S?|ph67aAnLe>o' );
define( 'NONCE_SALT',       'do>(P#:];Yk}n:KSbEWCm]U@y!Aj2.F^;>x=L.3P:>~fw!<TXL^)bXX$E|zPx8TR' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
