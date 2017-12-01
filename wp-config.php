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

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'eyotaec_db');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'root');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'f2.q9.i1_e-yota_2_mysql');

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
 define('AUTH_KEY',         '=C*wsv_6tY~>=;nns?i!HDA7bF7y).,HcZZLM|5Kxrq/,2We2wh+q>uhf!BXeKk?');
 define('SECURE_AUTH_KEY',  'T#|Wg|{-aoCN(VdY*]x?Mil:[5R-vl+sv?xa24ak?^abb>d8`,ID$`V@6Z[SI,5H');
 define('LOGGED_IN_KEY',    '7A1KU_9k~q$byOc,V9E7^E@4q:EID.#7EtG}fN<BEpORp{U>^-=N_4DSjvPi#R]P');
 define('NONCE_KEY',        'pGUV!uIVBxu}LU5.k`-RL%Bv|8}W0Eh6$24i>+>qpd4O|r;v;4[OK(r[p%>kX+OJ');
 define('AUTH_SALT',        'D#if&GEAZ,q-flB|2_Ei?~wA.(t`t<|>vs+4qcg~8S2%NlFt*O)d>(D58@8cX|+d');
 define('SECURE_AUTH_SALT', 'Wy1Z,;c~)o##8[Z]6=G%c|8&!|>A>mHT+u=j-$,-<2d12=p4-rnS 7Nah)j#:XdO');
 define('LOGGED_IN_SALT',   'c-ep3WtLs+Dko##Xp_d0<?Q/S$hN%o`U7i21z-Y%+w;dDAF4$c|&KHoV$4iE0WMa');
 define('NONCE_SALT',       'qtCv/S>$rx5l_#=+([$jq4l]tOS1RA*WCeLu|=quxW.7p||t2fgsi01}`,MR`+Q|');

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
