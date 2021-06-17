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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'art' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'mysql' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'mysql' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'VfEqTpZeDGkqBNbEoY+T})CT9In@g:F{D;6m(ZP>x}qn+e^ Nd=B$`.C63+=nPOy' );
define( 'SECURE_AUTH_KEY',  '$z0>j?3|}Y`4>Q!IQXH_6`mGp=Au):-F:C[#><j_N]m_Vsg<8{d&Ri<r/P(/baz0' );
define( 'LOGGED_IN_KEY',    'D1kT[Bc,h2wgV2,GoyJ=o873*cv>asPRsq=R O(_D;.{D:-VQrdEns:QT~I^U%rE' );
define( 'NONCE_KEY',        'nN:M%Gk+57?F#sp. /lUEM,_s2K0[SvR5.=JU[E{<4SIb1$dil.,R<u^FcCxyaT*' );
define( 'AUTH_SALT',        'SxPy{3kV/.{Lr?N<0% zJ r+|0eU niv7Z5t]o9TpE.r?Tc4[(DbN2Z`.^RcAcLJ' );
define( 'SECURE_AUTH_SALT', 'H=HervNi]U4NYS,%p+P^bV}nyaIN]0c@)G$fp}Ht6oy~m=a1]%?|?%2{L1x6allN' );
define( 'LOGGED_IN_SALT',   ']]jM?2np2d`1gQSYE4[,RjoZG@{$k#|X XvS!N[/e8FlhkPGF&!GC?Om4+3dged-' );
define( 'NONCE_SALT',       'rse8h{*p460u`(1?rV.?AI|N?SYf8_49[/_Qa7/HW=G|iA__?[xgd^tWwJgkH<jX' );

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
