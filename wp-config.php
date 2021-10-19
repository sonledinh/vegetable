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
define( 'DB_NAME', 'vegetable' );

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
define( 'AUTH_KEY',         '&3UNQ8%=U3E@<l7f6]`FRs32F$gh@:W:ScU+Th ylw tG<3)I^=D*^@3^VGPgG!x' );
define( 'SECURE_AUTH_KEY',  'qGB]l8CC%e^DT>^v|3WR==n_+PDXU%p8,&f_.Mz&U|@-(*&>Os=sZjPt=M1]h!K&' );
define( 'LOGGED_IN_KEY',    'Lo_Z]t`?UDaU=kNBGjg~o}G*0#]5y^&AbZ)548-l5i[^c}m*=ZaH=A]KEN6m-%Bz' );
define( 'NONCE_KEY',        ']N;E!>Oni?!R7k:)nO!VIN{LWZ_AyL{3cy54rWHHiaeq4+JV&9Y o,naD`$D6Y.v' );
define( 'AUTH_SALT',        'ZGJ?e>;kN7ApY3N@bmDfVl(P7AjfnK-zbgM$8RxvTP_oM+l`ZJm~+h=DESxE`{gd' );
define( 'SECURE_AUTH_SALT', '3P+jW-uLJRbWw OQRx?o[OMhKX6*@~}}04}9][/@UhZ*<Utd.,bV&xouhPzoEnP,' );
define( 'LOGGED_IN_SALT',   '.k!BGY:HHwBQXmC} dt0;5i@MVi;Hh^>JXF=6x<P{f/<N]6KLV!-0BuC>azS#taL' );
define( 'NONCE_SALT',       ',wQyY8=MXVC9xlhgV.:s:Xnxw3)5 /k6!~)Xh}=eoz@sR;&j,HkD-<lAXne/vNVe' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

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
