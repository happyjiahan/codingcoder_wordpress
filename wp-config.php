<?php
/**
 * WordPress基础配置文件。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以不使用网站，您需要手动复制这个文件，
 * 并重命名为“wp-config.php”，然后填入相关信息。
 *
 * 本文件包含以下配置选项：
 *
 * * MySQL设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define('DB_NAME', '9TlIUpI8');

/** MySQL数据库用户名 */
define('DB_USER', '9TlIUpI8');

/** MySQL数据库密码 */
define('DB_PASSWORD', 'oYJO3zECXH3N');

/** MySQL主机 */
define('DB_HOST', 'localhost');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8mb4');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/
 * WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '?a)VWZFzeoN|3>-<K1(j8&XjyBR=jl.U=#fx{n{ED9zTQTOMik/.X+4scH8T[ik7');
define('SECURE_AUTH_KEY',  '+Sh0,J/35C8*$$HLB`oq#?!qT7Sd7A{z>>[KPp7-P4.sLefN+LNL+O#)T-t]HXYb');
define('LOGGED_IN_KEY',    'zY&O5AgAGA+Mw>~joEF#&:dn5Rr9=!gKe!|61qVJ#I@iRq:p;81P8uiJ8Gmb+Kt@');
define('NONCE_KEY',        'n|:BS~5Rzz|>/|oU<%4j^r+8k~[XI~r>Xml$<]eqHQzst:TGS-#-G@F(o-*U;m3a');
define('AUTH_SALT',        '%-dez-Wx.xNH}JfC:;+_lGX)s^e>|T7.NPa-1 ,Sz=DneO=-2-ge<k~7?hG%[#EQ');
define('SECURE_AUTH_SALT', '<gjj+3tq2d*?k_I|+}v4]q2b{,_C&Yo#?9!3qJf*j;DpxEkCthF91ZMh?]Ha+?|H');
define('LOGGED_IN_SALT',   '12SX6]bU#!;11(U*z<]/Tj.hR.|tl6+=hb1%o!~]: 4WiZO)Qq_z,F_,bjt}|qnp');
define('NONCE_SALT',       'RRxiF,.W-Ytf~d$!}+c.)Y$Z>J}>FbG1k)XgiTyw8)H}kdbY8+fy# FLG-~Tz :#');

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'wp_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问Codex。
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/**
 * zh_CN本地化设置：启用ICP备案号显示
 *
 * 可在设置→常规中修改。
 * 如需禁用，请移除或注释掉本行。
 */
define('WP_ZH_CN_ICP_NUM', true);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** 设置WordPress变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');
