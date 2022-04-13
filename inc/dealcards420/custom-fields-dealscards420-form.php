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
    $brand_name = get_post_meta($post->ID, 'brandName', true);
    $sale_date = get_post_meta($post->ID, 'saleDate', true);
    $deal_description = get_post_meta($post->ID, 'dealDescription', true);
    $exclusive420 = get_post_meta($post->ID, 'exclusive420', true);
    $deal_description420 = get_post_meta($post->ID, 'dealDescription420', true);
    $exclusions = get_post_meta($post->ID, 'exclusions', true);
?>
    <p class="field">
        <label for="brandName"><?php _e('Brand Name', 'wp-bootstrap-starter'); ?></label>
        <input id="brandName" 
               type="text" 
               name="brandName"
               value="<?php echo esc_attr($brand_name); ?>">
    </p>

    <p class="field">
        <label for="dealDescription"><?php _e('Deal Description', 'wp-bootstrap-starter'); ?></label>
        <input id="dealDescription"  
                  name="dealDescription"
                  type="text"
                  value="<?php echo esc_attr($deal_description); ?>">
    </p>

    <p class="field">
        <label for="saleDate"><?php _e('Sale Date', 'wp-bootstrap-starter'); ?></label>
        <input type="text" 
               name="saleDate" 
               id="saleDate"
               value="<?php echo esc_attr($sale_date); ?>">
    </p>

    <p class="field">
    <label for="exclusive420">Is this an exclusive 420 deal?</label>
    <br><br>
    <input type="radio" name="exclusive420" 
           value="yes"          
           <?php if($review_status === 'yes') { 
               echo 'checked="checked"'; 
             } 
           ?>/> Yes<br />
    <input type="radio" name="exclusive420" 
           value="no"
           <?php if($review_status === 'no') { 
               echo ' checked="checked"'; 
             } 
           ?>
           /> No
    </p>

    <p class="field">
        <label for="dealDescription420"><?php _e('420 Deal Description', 'wp-bootstrap-starter'); ?></label>
        <input id="dealDescription420"  
                  name="dealDescription420"
                  type="text"
                  value="<?php echo esc_attr($deal_description420); ?>">
    </p>

    <p class="field">
        <label for="exclusions"><?php _e('Exclusions', 'wp-bootstrap-starter'); ?></label>
        <input type="text" 
               name="exclusions" 
               id="exclusions"
               value="<?php echo esc_attr($exclusions); ?>">
</div><!-- /.box -->
