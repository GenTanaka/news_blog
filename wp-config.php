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
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
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
define( 'DB_NAME', 'news_blog' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'root' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'XtUF*o.R^Iq&,F_`f<E?Q 4^y`i4jnS Fp+-E5v<6yA`x>w,Lh6zR=|@]`l& _LW' );
define( 'SECURE_AUTH_KEY',  'kSaP)}sV)9P[><u2gU7&?U>}17D+ @L[5BJjE%gq*peJ:Id&@B5xBevaukUTG25|' );
define( 'LOGGED_IN_KEY',    'Ccs*I{~*/ 1_]9u4T__0j|pn=U,.9/ZyO!:)a//`&r+_~TceUoU:Hq 3O}#g6R}g' );
define( 'NONCE_KEY',        '+$]p-gzCUkoA8:azwrI*+S+6HLS4#Uiq#Bwz+-&ye{5U%O1A;svn|s_>w0n$VUI)' );
define( 'AUTH_SALT',        's:FjI|#E&^L#R:uSF|s4enIt}`u(U!5=L)6Q! `pSzL<3|uO~=L.0p,ef(Ex7<*5' );
define( 'SECURE_AUTH_SALT', '!`5aJ{{Qdk*VtBj_5}FMBc%o-u:|3|O_YfQRDXI[_LsRvYi9+&f]a6H+O?yb[?{t' );
define( 'LOGGED_IN_SALT',   'ra-&!%OOr/@V#U:{b$A/Qr8,plvV(Qu$2{f5d/rg^T@x_/O4pU]3;KgDreqqtk&j' );
define( 'NONCE_SALT',       'F$w!O)Q!,0f{!|>r7fl$}*jl>^n<+Fq!nvi4D#e7le7zZ*Xs!F5Jwowg_Cg{<;p(' );

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
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* カスタム値は、この行と「編集が必要なのはここまでです」の行の間に追加してください。 */



/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
