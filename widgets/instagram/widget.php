    <?php
// Creating the widget
class wpinsta_widget extends WP_Widget
{
    private $domain = "wpinsta_widget_domain";
    private $data = [
        "username",
    ];

    public function __construct()
    {
        parent::__construct(
            'instagram_widget',
            __('Instagram', $domain),
            array('description' =>
                __('Widget to show instagram timeline', $domain),
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
        require "back-end.php";
    }

    // Updating widget replacing old instances with new
    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        foreach ($data as $media) {
            $instance[$media] = (!empty($new_instance[$media])) ? strip_tags($new_instance[$media]) : '';
        }
        return $new_instance;
    }
}

// Register and load the widget
function wpinsta_load_widget()
{
    register_widget('wpinsta_widget');
}
add_action('widgets_init', 'wpinsta_load_widget');