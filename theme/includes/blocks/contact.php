<section class="contact">
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