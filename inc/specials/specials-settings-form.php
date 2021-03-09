
<div class="box">
    <style scoped>
        .box {
            display: grid;
            grid-template-columns: max-content .35fr;
            grid-row-gap: 20px;
            grid-column-gap: 5px;
        }
        .field {
            display: contents;
        }
    </style>
<?php
    $run_dates = get_post_meta($post->ID, 'runDates', true);
    $img_path = get_post_meta($post->ID, 'imgPath', true);
?>
    <p class="field">
        <label for="runDates">Run Dates</label>
        <input id="runDates" 
               type="text" 
               name="runDates"
               value="<?php echo esc_attr($run_dates); ?>">
    </p>
    <p class="field">
        <label for="imagePath">Image Path</label>
        <input id="imagePath" 
               type="text" 
               name="imagePath"
               value="<?php echo esc_attr($img_path); ?>">
    </p>
</div><!-- /.box -->
