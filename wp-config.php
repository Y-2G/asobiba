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
define( 'DB_NAME', 'blog' );

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
define( 'AUTH_KEY',         'pNG,1Usoi@HI/ZANakqiN=VLH,G5@Wuv=)tw9q9C*iLa N,D1Y1/k{k-s[&$OdJR' );
define( 'SECURE_AUTH_KEY',  'X#Pn*lKr1J_FgRe!2K(H<Ep.V,fB&CW,e2x,Ev=/K$`~4Iu}!5;Ad$,H!LTT_4J0' );
define( 'LOGGED_IN_KEY',    'fjdzj^VU]$4TxiL))y10ok(=dmqWZb =@%E UW*qJx^^Q_Zy-r)USt9S| mMtj]`' );
define( 'NONCE_KEY',        'M3E24;D?/$RBT!z#NS$KP0.r{tC/{#HJky?)]T.GX$I=cd<?g!AQ.G2A|6?e;>@h' );
define( 'AUTH_SALT',        '_&wS45 8p@8N{<d4IDdn[a{m{OI;&(rLQG;tV%FK/S-I}`?{]6{Lcg>Ya.N+r@Y)' );
define( 'SECURE_AUTH_SALT', 'O[$?*:(,+vO%P==SqrTX[L}?#>lD^&NF:$@<P(aa|CB].0$y_UEU-M~Z^qZK O H' );
define( 'LOGGED_IN_SALT',   'w8Wx,poI9?i~YYEn$6]rNx].Kc`_@UINK1@ lNyjlULE@:>S(g^u1xt0GZ`z(piQ' );
define( 'NONCE_SALT',       '+XJIXz#{h^X%bV~n*3l>~>|S&Xk7>PD02)tZoOu}PjU$$p}mD}5`~Gstlt:w4s#R' );

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

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
