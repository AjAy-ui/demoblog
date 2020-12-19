<?php
//author meta
add_action('admin_menu', 'blog_options');

function blog_options() {   
    add_meta_box("demo-meta-box", "Sub Title", "blog_opt", "blog", "normal", "high", null);
}

function blog_opt($post_id) {
    global $post;
    $blog = get_post_meta($post->ID, 'blog', true);
    ?>
    <table cellpadding="5" cellspacing="10">
        <tr>
            <td class="left"><label for="blog">Sub Title</label></td>
            <td  class="right" >
                <input value="<?php echo $blog; ?>" type="text" name="blog" id="blog">
            </td>
        </tr>
    </table>
    <?php
}
add_action('save_post', 'blog_options_save');
function blog_options_save($post_id) {
    global $post;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
        return $post->ID;
    if(isset($_POST['blog'])){
        update_post_meta($post_id, 'blog',$_POST['blog']);
    }
   }
?>