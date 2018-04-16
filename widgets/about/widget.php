    <?php
// Creating the widget
class wpb_widget extends WP_Widget
{
    private $domain = "wpb_widget_domain";
    private $socialMedia = [
        "youtube",
        "snapchat",
        "instagram",
        "facebook",
        "pinterest",
        "twitter",
    ];

    public function __construct()
    {
        parent::__construct(
            'about_widget',
            __('About', $domain),
            array('description' =>
                __('Widget to show personal information', $domain),
            )
        );
    }

    public function widget($args, $instance)
    {
        $title = apply_filters('widget_title', $instance['title']);
        // before and after widget arguments are defined by themes
        echo $args['before_widget'];
        require "front-end.php";
        echo $args['after_widget'];
    }

    // Widget Backend
    public function form($instance)
    {
        if (isset($instance['title'])) {
            $title = $instance['title'];
        } else {
            $title = __('Welkom', $domain);
        }
        if (isset($instance['about'])) {
            $about = $instance['about'];
        } else {
            $about = __('Over ons', $domain);
        }
        require "back-end.php";
    }

    // Updating widget replacing old instances with new
    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        $instance['about'] = (!empty($new_instance['about'])) ? strip_tags($new_instance['about']) : '';
        foreach ($socialMedia as $media) {
            $instance[$media] = (!empty($new_instance[$media])) ? strip_tags($new_instance[$media]) : '';
        }
        return $new_instance;
    }
}

// Register and load the widget
function wpb_load_widget()
{
    register_widget('wpb_widget');
}
add_action('widgets_init', 'wpb_load_widget');