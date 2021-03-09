<div class="box">
    <style scoped>
        .box {
            display: grid;
            grid-template-columns: max-content 1fr;
            grid-row-gap: 10px;
            grid-column-gap: 20px;
        }
        .field {
            display: contents;
        }
    </style>
<?php
    $specialsTitle = get_post_meta($post->ID, 'specialsTitle', true);
    $specialsDescription = get_post_meta($post->ID, 'specialsDescription', true);
    $specials3 = get_post_meta($post->ID, 'specials3', true);
?>
    <p class="field">
        <label for="specialsTitle">Specials Title</label>
        <input id="specialsTitle" 
               type="text" 
               name="specialsTitle"
               value="<?php echo esc_attr($specialsTitle); ?>">
    </p>

    <p class="field">
        <label for="specialsDescription">Specials Description</label>
        <input id="specialsDescription"  
                  name="specialsDescription"
                  type="text"
                  value="<?php echo esc_attr($specialsDescription); ?>">
    </p>

    <p class="field">
        <label for="specials3">Specials 3</label>
        <input type="text" 
               name="specials3" 
               id="specials3"
               value="<?php echo esc_attr($specials3); ?>">
    </p>
</div><!-- /.box -->
