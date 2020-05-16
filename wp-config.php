<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'wp' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'p<yV)7ITh;/ITk $1^DcE=R.D~j0##iZj+Aag]&ies.AN0I#-}+G;~<A!mrpR/mz' );
define( 'SECURE_AUTH_KEY',  'P*MW7.+F1$Exh=;pw$@mgNo:;?48f~TXi0&NceBu*-Ks+!Y-)..gp/AXHY0<2K0(' );
define( 'LOGGED_IN_KEY',    'ULs*<U!-CylW*|A$:}p{M!!N2gY$!D$m@VS1c]i9Bq!V2etktS]1Fg(@0~_9UHMW' );
define( 'NONCE_KEY',        'qD(fvRacrJG}<z-&|w~2,$,Gt4nNh1,ne+TcKv[t@Zf)-s)S;{pmR->Dy*i2%:9J' );
define( 'AUTH_SALT',        'JwDLBNnoQ6Z qmdT(ZC N=;NDkQyOtE86(xU1<#Q$OtHs>9)w3=u4/J56Af7P!|*' );
define( 'SECURE_AUTH_SALT', 'mzNA.A2.Xi:kHQ_v#W#OknIHdZ|T397&M[5|?~i*XG9c70]X.9cE0VzdfP|73JB@' );
define( 'LOGGED_IN_SALT',   'G3{;u:|#mo_j}Pi:(idTQ9KD!iyJD>rltUn/<]Q6,[Wr{6-~w5;!*,s9qv>zEeO}' );
define( 'NONCE_SALT',       'Z4q%d}m|<sn}J(T$p;sR4(3XS-eJ@,qV}+1*A^hb3X-lc-6:N2oZ+0%cI,O|R;i(' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
