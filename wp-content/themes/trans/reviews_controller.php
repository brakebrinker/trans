<?php
/* Define these, So that WP functions work inside this file */
define('WP_USE_THEMES', false);
require( $_SERVER['DOCUMENT_ROOT'] .'/wp-blog-header.php');

require_once ABSPATH . 'wp-admin/includes/image.php';
require_once ABSPATH . 'wp-admin/includes/file.php';
require_once ABSPATH . 'wp-admin/includes/media.php';

require_once ABSPATH . 'wp-content/themes/trans/recaptchalib.php';
?>
<?php
//секретный ключ
$secret = "6Lc4OysUAAAAAHBpMBV1V98hXsZOaUWJIiLcXlGN";
//ответ
$response = null;
//проверка секретного ключа
$reCaptcha = new ReCaptcha($secret);

if(isset($_POST['send']) == '1') {
    if ($_POST["g-recaptcha-response"]) {
        $response = $reCaptcha->verifyResponse(
            $_SERVER["REMOTE_ADDR"],
            $_POST["g-recaptcha-response"]
        );
    }

    if ($response != null && $response->success) {
        $post_category = 22;

        $post_title = $_POST['form'] . ' ' . $_POST['name'];

        $post_content = $_POST['message'];
        $post_name = $_POST['name'];
        $post_photo = $_POST['photo'];

        $new_post = array(
        'ID' => '',
        'post_author' => $user->ID,
        'post_category' => array($post_category),
        'post_content' => $post_content,
        'post_title' => wp_strip_all_tags($post_title),
        'post_status' => 'pending',
        'meta_input' => array(
                               'имя' => $post_name
                             )
        );

        $post_id = wp_insert_post($new_post);

        update_field('имя', $post_name, $post_id);
           $attachment_id = media_handle_upload( 'photo', $post_id );
           if ( is_wp_error( $attachment_id ) ) {

           } else {
               update_post_meta( $post_id, '_thumbnail_id', $attachment_id );
           }

        // wp_redirect(site_url() . '/otzyvy');
        wp_safe_redirect(site_url() . '/spasibo-za-vash-otzyv');
        exit;
    } else {
        echo "Вы не прошли защиту от спама";
    }
}
?>