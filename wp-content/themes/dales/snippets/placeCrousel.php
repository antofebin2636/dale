<section class="PlaceCarousel CtaBox__items">
    <div class="Section__inner">
        <div class="Outer">
            <div class="Section__header">
                <h3 class="Title" data-title>Places to go</h3>
            </div>
            <div class="Section__body">
                <div class="PlaceCarousel__wrapper" data-module="place-carousel" data-up>
                    <div class="glide" data-carousel>
                        <div class="glide__track" data-glide-el="track">
                            <div class="glide__slides">
                                <?php for ($c=1;$c<5;$c++) {?>
                                <div class="glide__slide CarouselBox">
                                    <div class="GlideImg--box">
                                        <img src="<?php echo get_template_directory_uri() ?>/images/places/places-<?php echo $c;?>.png" alt="" />
                                    </div>
                                    <span class="Title"><a href="">Towns & Villages</a></span>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="glide__arrows" data-glide-el="controls">
                            <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><img src="<?php echo get_template_directory_uri() ?>/images/arrow-lt.png" alt=""></button>
                            <button class="glide__arrow glide__arrow--right" data-glide-dir=">"><img src="<?php echo get_template_directory_uri() ?>/images/arrow-rg.png" alt=""></button>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>