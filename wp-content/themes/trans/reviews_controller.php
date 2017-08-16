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
$c = true;

if(isset($_POST['send']) == '1') {
    $project_name = "Трансинженеринг";
    $admin_email  = $_POST['send_email'];
    $form_subject = "Новый отзыв на сайте Трансинженеринг";

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

        foreach ( $_POST as $key => $value ) {
            if ( $value != "" && $key != "project_name" && $key != "admin_email" && $key != "form_subject" ) {
                $message .= "
                " . ( ($c = !$c) ? '<tr>':'<tr style="background-color: #f8f8f8;">' ) . "
                <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>$key</b></td>
                <td style='padding: 10px; border: #e9e9e9 1px solid;'>$value</td>
            </tr>
            ";
            }
        }

        $message = "<table style='width: 100%;'>$message</table>";

        function adopt($text) {
            return '=?UTF-8?B?'.base64_encode($text).'?=';
        }

        $headers = "MIME-Version: 1.0" . PHP_EOL .
        "Content-Type: text/html; charset=utf-8" . PHP_EOL .
        'From: '.adopt($project_name).' <'.$admin_email.'>' . PHP_EOL .
        'Reply-To: '.$admin_email.'' . PHP_EOL;

        mail($admin_email, adopt($form_subject), $message, $headers );

/*        if (mail($admin_email, adopt($form_subject), $message, $headers )) { 
            echo "send"; 
        } else { 
            echo "error"; 
        } */
        exit;
    } else {
        echo "Вы не прошли защиту от спама";
    }
}
?>