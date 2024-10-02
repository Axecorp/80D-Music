<section class="contact">
<img src="<?php echo "/wp-content/uploads/2024/10/Group-206.png"; ?>" alt="" class="audio-img-7">
    <div class="contact-container">
        <div class="contact-text">
            <div class="heading">
                <h2><?php echo $block['heading']; ?></h2>
            </div>
            <div class="subtext">
                <?php echo $block['subtext']; ?>
            </div>
        </div>
        <div class="contact-form" id="contact">
            <?php echo do_shortcode('[gravityform id="1" title="false"]'); ?> 
        </div>
    </div>
</section>