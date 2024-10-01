<section class="links">
    <div class="links-container">
        <div class="heading">
            <h2><?php echo $block['heading']; ?></h2>
        </div>
        <div class="links-top-row">
            <?php foreach($block['top_row_links'] as $top){ ?>
                <a href="<?php echo $top['link']['url']; ?>">
                    <?php if($top['subtitle']){ ?>
                        <span><?php echo $top['subtitle']; ?></span>
                    <?php } ?>
                    <p><?php echo $top['title']; ?></p>
                </a>
            <?php } ?>
        </div>
        <div class="links-bottom-row">
            <?php foreach($block['bottom_row_links'] as $bottom){ ?>
                <a href="<?php echo $bottom['link']['url']; ?>">
                    <?php if($bottom['subtitle']){ ?>
                        <span><?php echo $bottom['subtitle']; ?></span>
                    <?php } ?>
                    <p><?php echo $bottom['title']; ?></p>
                </a>
            <?php } ?>
        </div>
    </div>
</section>