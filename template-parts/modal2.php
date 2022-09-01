<?php
$computer_option = computer_repair_options();
?>
<?php
if(isset($computer_option['is_modal2_enable']) 
        && $computer_option['is_modal2_enable'] == 1){
    ?>

        <div id="modalForm2" class="form-modal form-modal--sm">
            <div class="drop-form">
            <?php if(isset($computer_option['modal2_title'])  && $computer_option['modal2_title']){ ?>
             <h3><?php echo esc_html($computer_option['modal2_title']);?></h3>
         <?php }?>
              <?php echo sprintf(__('%s','computer-repair'),  do_shortcode($computer_option['modal2_mc_form']));  ?>

            </div>
        </div>

<?php }