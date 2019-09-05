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
define( 'DB_NAME', 'wp-theme' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'password' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '`Tm;fgV5xlt>d`~]/VLe !}VjJoK(d2_k&!bkLCjYdBaGA#0auFatATN@]BBlXK~' );
define( 'SECURE_AUTH_KEY',  '_a-FsboYk{)fp/:8N W^`T$^91Rg<e|X0%%:;-t%Pye[xv>#Z/~5e0fy(P,U,hbJ' );
define( 'LOGGED_IN_KEY',    '%9~Z9&Y01Wls&K@ sHGP*pa7[bt[4W;-NWXj7<6(nO,hC&o%0PhuankZT?E#e#>j' );
define( 'NONCE_KEY',        'p{C~IL(SoKa]hdcv]#W^_/B|(f{uys3+0+r>Iym]x5_?kiYWA9WD(M&`n</]/(F}' );
define( 'AUTH_SALT',        'EqcJbkYXVSmt HgCpUD~#3%Y5,1B+[}?+0Hz=3&s>/{5fX0!.N:tVr)&J07{6KUS' );
define( 'SECURE_AUTH_SALT', 'rm}TFosu=HAt9zwW#g{Z)<+(@9n};0?e3e[3RTEbC?g5[5i!QeVaG}k ivz[d6=/' );
define( 'LOGGED_IN_SALT',   'Ge$@<c<x)C(/TNpG]iJ&=Ev0@uV:]nP/(0,ph@Ss=1Ud#fs9;tDu5@5-n+<#x+Iw' );
define( 'NONCE_SALT',       'B$UrZwU(7?d7Q#-(669P2jElpq:94!`5y+g9-TQ]}IE]swmCA|Ch&?c@jJC|B8Yu' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

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

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
