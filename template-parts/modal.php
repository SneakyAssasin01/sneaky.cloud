<?php
$computer_option = computer_repair_options();
?>
<?php
if(isset($computer_option['is_modal_enable']) 
        && $computer_option['is_modal_enable'] == 1){
    ?>
    <div id="modalForm1" class="form-modal mfp-hide">
        <?php if(isset($computer_option['modal_title'])  && $computer_option['modal_title']){ ?>
             <h3><?php echo esc_html($computer_option['modal_title']);?></h3>
         <?php }?>
         <?php echo sprintf(__('%s','computer-repair'),  do_shortcode($computer_option['modal_mc_form']));  ?>
    </div>

<?php }