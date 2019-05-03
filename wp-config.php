<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */
/*3*/
// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'wordpress');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'wordpress');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', '123456');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'I|p*3#/yLQ=IA|T:mR2HUK_j1ZdQ4-^*7R>u)oq{Z-d_1/ShQ.-%*eRhW1:}M1f{');
define('SECURE_AUTH_KEY',  '8x~NN^&GdL/5Kvm+? =o;W-#0EJO^9qaWA/&2| lx5~;~(L-4|aF8WD~PLBR5GNd');
define('LOGGED_IN_KEY',    'k!&a<.FykmP5gy669R;NWN=Vm4O=Dy/8vJ3qq8KziIl+-DqE`e*DScT95_{aj6R+');
define('NONCE_KEY',        'Oz,*W|B58M>W,Xt9w55#lWto;]K{DdnyiSBw<oX_K|@V}|[NejUu/H.fw:2Nw9i>');
define('AUTH_SALT',        '&RG[8G<d+Ij_B^{]|`V,:Jp.Q/5Q6F&::fD#8)~-/IbNZ]ORd$%.@VxiFuXb>@1V');
define('SECURE_AUTH_SALT', 'D$#rYf_5?@A9e%M qc;==!s6Nawp;-/0Tl.Oaw|J:}NrJx>w<q:A5CT1@0Z<hG*v');
define('LOGGED_IN_SALT',   'e,$0g|=gP+u{+Q{n1~o,aX0b5i`1Q%acX:){+Y6?g@|)CGPY`_Z_G_/H/HAY$pC$');
define('NONCE_SALT',       'DoyDY{4*6-(6Zajw{95WE|+p8Zd2|s#MDuUy, EW-vrS}bRWL;iF?{e5+~fv UbE');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
