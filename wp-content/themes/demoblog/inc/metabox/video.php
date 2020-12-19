<?php
//author meta
add_action('admin_menu', 'video_options');

function video_options() {   
    add_meta_box('author_type_options', 'Testimonial Rating', 'video', 'event');
}

function video($post_id) {
    global $post;
    $video = get_post_meta($post->ID, 'video', true);
    ?>
    <table cellpadding="5" cellspacing="10">
        <tr>
            <td class="left"><label for="video">Video link:</label></td>
            <td  class="right" >
                <input value="<?php echo $video; ?>" type="text" name="video" id="video">
            </td>
        </tr>
    </table>
    <?php
}
add_action('save_post', 'video_options_save');
function video_options_save($post_id) {
    global $post;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
        return $post->ID;
    if(isset($_POST['video'])){
        update_post_meta($post_id, 'video',$_POST['video']);
    }
   }
?>