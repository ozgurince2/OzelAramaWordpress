<?php
/**
 * WordPress için taban ayar dosyası.
 *
 * Bu dosya şu ayarları içerir: MySQL ayarları, tablo öneki,
 * gizli anahtaralr ve ABSPATH. Daha fazla bilgi için 
 * {@link http://codex.wordpress.org/Editing_wp-config.php wp-config.php düzenleme}
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
define('DB_NAME', 'blogsite2');

/** MySQL veritabanı kullanıcısı */
define('DB_USER', 'root');

/** MySQL veritabanı parolası */
define('DB_PASSWORD', '');

/** MySQL sunucusu */
define('DB_HOST', 'localhost');

/** Yaratılacak tablolar için veritabanı karakter seti. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         ',iny:~N+|wy^E:,1J=]E+H_=Tf!zQKE-zN><>$fq9bVuP90)B[+;F+/qLSj9R$o}');
define('SECURE_AUTH_KEY',  'yVfmHDNJ1C]$K#oT0rh0?e+Saxn^^Fa[}+3et%6M>+2BsG1~1>X;-`RhZt}G}y]3');
define('LOGGED_IN_KEY',    'JB!2J-)48|r$1 3p<pq]l-PeKG8;o1I7-yg/lKV4Ivi|[N~,!q2?.:+ 1Qhs5lzh');
define('NONCE_KEY',        'j:MJ!fYDqb+X34ORF3sQ/Ynns=9U@@ tC%`i/%^C{<EsL5|fbEH-(=Lm3udsFl<E');
define('AUTH_SALT',        'TMt|9]nNxIoS2K|-fxE},%qFjozEi2;Guo^JA5Y$_X>^i!O^~k4kJ+ReYiyFpo%O');
define('SECURE_AUTH_SALT', 'PkWN:STSFDA@su$PI[|L_4af[cMh;jp;GEj*~R`s~/xS>@qb&#g Ga^750=TRqYT');
define('LOGGED_IN_SALT',   'W1UJG<hUpz45M3)=4T?_Som#kt[bCfk>Ouny}TMZ08rJ .fDm?1K+fl[Ztx~Y6Zo');
define('NONCE_SALT',       'QcKc/K/E-OG-@D)/Ix0,!^u7Qy+vq.{g-+PL2B)#GI$&2g~Jnj;(k#R KVBte;e%');
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
