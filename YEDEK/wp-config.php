<?php
/**
 * WordPress için taban ayar dosyası.
 *
 * Bu dosya şu ayarları içerir: MySQL ayarları, tablo öneki,
 * gizli anahtaralr ve ABSPATH. Daha fazla bilgi için 
 * {@link https://codex.wordpress.org/Editing_wp-config.php wp-config.php düzenleme}
 * yardım sayfasına göz atabilirsiniz. MySQL ayarlarınızı servis sağlayıcınızdan edinebilirsiniz.
 *
 * Bu dosya kurulum sırasında wp-config.php dosyasının oluşturulabilmesi için
 * kullanılır. İsterseniz bu dosyayı kopyalayıp, ismini "wp-config.php" olarak değiştirip,
 * değerleri girerek de kullanabilirsiniz.
 *
 * @package WordPress
 */

// ** MySQL ayarları - Bu bilgileri sunucunuzdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define('DB_NAME', 'italiana_wp');

/** MySQL veritabanı kullanıcısı */
define('DB_USER', 'italiana_adminDB');

/** MySQL veritabanı parolası */
define('DB_PASSWORD', 'FcAh)UFsQrra');

/** MySQL sunucusu */
define('DB_HOST', 'localhost');

/** Yaratılacak tablolar için veritabanı karakter seti. */
define('DB_CHARSET', 'utf8mb4');

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define('DB_COLLATE', '');

/**#@+
 * Eşsiz doğrulama anahtarları.
 *
 * Her anahtar farklı bir karakter kümesi olmalı!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz. Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '^QnJ/)K&kdWh:v$jLB4U2$KTO-:|( Sp>e%KXP)glq2.+!Zua_1.Tva7QH0ramcR');
define('SECURE_AUTH_KEY',  'v F`/rxBJC4DlF%H&b[57v7!W.te7;iX%Nk+<X}l6 u|D:5/> L5AY~s$q!PH,yS');
define('LOGGED_IN_KEY',    '[StB& 28FW#f!7R4ZYc4H{z8bE;Lna/KL`[X6OJ:|;u|^$|+I(kLaKYeX>`~L=t8');
define('NONCE_KEY',        '^846xCe4?d$;M,!cdy|.u_6eMgSpzhHNv~j[~W8Y~:6_OsD#!xOf3WU.KYn8}gQS');
define('AUTH_SALT',        'etxh{sqHY{4DB)rg3&h,9m!]k]BOTxd|g4m1yvjy<o%QxyyOwQda5eNGg{{e-!Q1');
define('SECURE_AUTH_SALT', 'ldU%Ua<Nne).DCG ?ev/9sCwlJ`@K;!UKjj;*a-<-N?>Je<P3SCuT=)8Gn07h,>?');
define('LOGGED_IN_SALT',   '=,8pI=]T*e)s90Wnu0-:P(/l.+j)],a/%U}utDdARSFeHOGcQM 0gdE%v_;5)=m6');
define('NONCE_SALT',       'Q]Necr0VxG:g7n]Tw5v$zQwvUw9P,7;8ubjKStMuR`BsH4qh&fipclDps/M(k(Nx');
/**#@-*/

/**
 * WordPress veritabanı tablo ön eki.
 *
 * Tüm kurulumlara ayrı bir önek vererek bir veritabanına birden fazla kurulum yapabilirsiniz.
 * Sadece rakamlar, harfler ve alt çizgi lütfen.
 */
$table_prefix  = 'wp_';

/**
 * Geliştiriciler için: WordPress hata ayıklama modu.
 *
 * Bu değeri "true" yaparak geliştirme sırasında hataların ekrana basılmasını sağlayabilirsiniz.
 * Tema ve eklenti geliştiricilerinin geliştirme aşamasında WP_DEBUG
 * kullanmalarını önemle tavsiye ederiz.
 */
define('WP_DEBUG', false);

/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** WordPress değişkenlerini ve yollarını kurar. */
require_once(ABSPATH . 'wp-settings.php');
