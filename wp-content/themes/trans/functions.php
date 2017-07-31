<?php
/*Widgets*/
add_theme_support('widgets');

// Область виджетов в футере
    register_sidebar(array(
        'name' => __('Виджеты для футера'),
        'id' => 'footer-widget-area',
        'description' => __('Виджеты в футере'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3><a href="#">',
        'after_title' => '</a></h3>',
    ));

class WP_Copyright_Widget extends WP_Widget {
     public function __construct() {
           parent::__construct(
                 'widget_copyright',
                 'Копирайт сайта',
                 array( 'description' => __( 'Копирайт в футере сайта', 'text_domain' ), )
           );
     }
     public function update( $new_instance, $old_instance ) {
           $instance = array();
           $instance['title'] = strip_tags( $new_instance['title'] );
           return $instance;
     }
     public function form( $instance ) {
?>
           <p>
                 <label for="<?php echo $this->get_field_id( 'title' ); ?>">Заголовок</label>
                 <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" 
                  name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" 
                  value="<?php echo $instance['title']; ?>" />
           </p>
<?php
     }
     public function widget( $args, $instance ) {
?>
           <div class="col-md-3 col-sm-12">
           <?php echo $instance[ 'title' ]; ?>
           </div>
<?php
     }
}
add_action( 'widgets_init', function(){
     register_widget( 'WP_Copyright_Widget' );
});

class WP_Address_Widget extends WP_Widget {
     public function __construct() {
           parent::__construct(
                 'widget_address',
                 'Адрес сайта',
                 array( 'description' => __( 'Адрес в футере сайта', 'text_domain' ), )
           );
     }
     public function update( $new_instance, $old_instance ) {
           $instance = array();
           $instance['title'] = strip_tags( $new_instance['title'] );
           return $instance;
     }
     public function form( $instance ) {
?>
           <p>
                 <label for="<?php echo $this->get_field_id( 'title' ); ?>">Заголовок</label>
                 <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" 
                  name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" 
                  value="<?php echo $instance['title']; ?>" />
           </p>
<?php
     }
     public function widget( $args, $instance ) {
?>
           <div class="col-md-3 col-sm-4"><i class="fa-map-marker"></i> <?php echo $instance[ 'title' ]; ?>
           </div>
<?php
     }
}
add_action( 'widgets_init', function(){
     register_widget( 'WP_Address_Widget' );
});

class WP_Phone_Widget extends WP_Widget {
     public function __construct() {
           parent::__construct(
                 'widget_phone',
                 'Телефон сайта',
                 array( 'description' => __( 'Телефон в футере сайта', 'text_domain' ), )
           );
     }
     public function update( $new_instance, $old_instance ) {
           $instance = array();
           $instance['title'] = strip_tags( $new_instance['title'] );
           return $instance;
     }
     public function form( $instance ) {
?>
           <p>
                 <label for="<?php echo $this->get_field_id( 'title' ); ?>">Заголовок</label>
                 <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" 
                  name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" 
                  value="<?php echo $instance['title']; ?>" />
           </p>
<?php
     }
     public function widget( $args, $instance ) {
?>
           <div class="col-md-2 col-sm-4"><i class="fa-phone"></i> <a href="tel:<?php echo preg_replace("/[^0-9]/", '', $instance[ 'title' ]); ?>"> <?php echo $instance[ 'title' ]; ?></a>
           </div>
<?php
     }
}
add_action( 'widgets_init', function(){
     register_widget( 'WP_Phone_Widget' );
});

class WP_Email_Widget extends WP_Widget {
     public function __construct() {
           parent::__construct(
                 'widget_email',
                 'E-mail сайта',
                 array( 'description' => __( 'E-mail в футере сайта', 'text_domain' ), )
           );
     }
     public function update( $new_instance, $old_instance ) {
           $instance = array();
           $instance['title'] = strip_tags( $new_instance['title'] );
           return $instance;
     }
     public function form( $instance ) {
?>
           <p>
                 <label for="<?php echo $this->get_field_id( 'title' ); ?>">Заголовок</label>
                 <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" 
                  name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" 
                  value="<?php echo $instance['title']; ?>" />
           </p>
<?php
     }
     public function widget( $args, $instance ) {
?>
           <div class="col-md-2 col-sm-4"><i class="fa-envelope"></i> <a href="mailto:<?php echo $instance[ 'title' ]; ?>"><?php echo $instance[ 'title' ]; ?></a>
           </div>
<?php
     }
}
add_action( 'widgets_init', function(){
     register_widget( 'WP_Email_Widget' );
});

class WP_Social_Widget extends WP_Widget {
     public function __construct() {
           parent::__construct(
                 'widget_social',
                 'Соц. копки сайта',
                 array( 'description' => __( 'Соц. копки в футере сайта', 'text_domain' ), )
           );
     }
     public function update( $new_instance, $old_instance ) {
           $instance = array();
           $instance['title'] = strip_tags( $new_instance['title'] );
           $instance['content'] = trim( $new_instance['content'] );
           return $instance;
     }
     public function form( $instance ) {
?>
           <p>
                 <label for="<?php echo $this->get_field_id( 'title' ); ?>">Заголовок</label>
                 <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" 
                  name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" 
                  value="<?php echo $instance['title']; ?>" />
                  <label for="<?php echo $this->get_field_id( 'content' ); ?>">Содержимое</label>
                  <br>
                 <textarea name="<?php echo $this->get_field_name( 'content' ); ?>" id="<?php echo $this->get_field_id( 'content' ); ?>" cols="30" rows="10"><?php echo $instance['content']; ?></textarea>
           </p>
<?php
     }
     public function widget( $args, $instance ) {
?>
           <div class="col-md-2 col-sm-12"><?php echo $instance[ 'content' ]; ?></div>
<?php
     }
}
add_action( 'widgets_init', function(){
     register_widget( 'WP_Social_Widget' );
});

function enqueue_styles() {
    wp_enqueue_style( 'whitesquare-style', get_stylesheet_uri());
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css' );
    wp_enqueue_style( 'main', get_template_directory_uri() . '/css/style.css' );
    wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/css/font-awesome.css' );
    wp_enqueue_style( 'bxslider', get_template_directory_uri() . '/slider/jquery.bxslider.min.css' );
}
add_action('wp_enqueue_scripts', 'enqueue_styles');

function enqueue_scripts () {

}
add_action('wp_enqueue_scripts', 'enqueue_scripts');

/* Menu */
if (function_exists('add_theme_support')) {
    add_theme_support('menus');
}
?>