<?php
/**
 * WordPress基础配置文件。
 *
 * 本文件包含以下配置选项：MySQL设置、数据库表名前缀、密钥、
 * WordPress语言设定以及ABSPATH。如需更多信息，请访问
 * {@link http://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 * 编辑wp-config.php}Codex页面。MySQL设置具体信息请咨询您的空间提供商。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以手动复制这个文件，并重命名为“wp-config.php”，然后填入相关信息。
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define('DB_NAME', 'qdm169445656_db');

/** MySQL数据库用户名 */
define('DB_USER', 'qdm169445656');

/** MySQL数据库密码 */
define('DB_PASSWORD', 'WkMysql546431544');

/** MySQL主机 */
define('DB_HOST', 'localhost');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'T4Q>gV9J</s%jS,AV{KP+}Iob<CZ&2*UMjtO2ZA/iLc<kr[L(Z1&c@32c%dzLhB-');
define('SECURE_AUTH_KEY',  'Wla= R]zUizMs(tr]o$qBO9!ix+-;8Z90C}`L>CPY|bnh[xZuAP@oQ3h-/I.S+xX');
define('LOGGED_IN_KEY',    'p#X21Y8F#v|C=Dq`R|l:>k_NE;6-~-oci9V@07%#`.3INd*CB|W^=:IRM<8qzI+m');
define('NONCE_KEY',        '~K7i,:U`]a,KX/~+cc-Ovi-6[3Fo:&*B^+u{4Z)#_an*C _a39Jt`j[>Kld`VzFS');
define('AUTH_SALT',        ')z@ZOF*`1 0j^J]t1S#-tp4C4>-0->44D~D^Mb_w(g|#5A b-E:oslj;+1_xM-X}');
define('SECURE_AUTH_SALT', 'ht<k@-Qo:E_TJ0N8TU7-?Rb>[R7C`J0.HTx9& +,---fX^kcO(Z_86DF:hZ-0i9o');
define('LOGGED_IN_SALT',   '1hE2!RR%^,oCcj$aCDm~=$7sR|Ms,J8Uju=SS7J,u$1o/3>ft=jNK^)mfb! g+mr');
define('NONCE_SALT',       '}IUHt_8u8)dk?tq.1X2Yt{R2l8!=)p~f1mU;?S[Uf,0e5.,~@TbL{T*`wNlSDU[n');

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
