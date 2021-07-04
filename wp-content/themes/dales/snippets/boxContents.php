<section class="BoxContent">
    <div class="Outer">
        <div class="BoxContent__inner">
            <div class="BoxContent__header">
                <h3 class="Title">What’s On in The Yorkshire Dales</h3>
                <span class="SubTitle">Stories and happenings from the Yorkshire Dales National Park</span>
            </div>

            <div class="BoxContent__body">
                <div class="BoxContent__columns">
                    <?php for($c=0;$c<3;$c++){ ?>
                    <div class="BoxContent__box">
                        <div class="Box__header">
                            <span class="Icon"><i class="fas fa-calendar-alt"></i></span>
                            <span class="Title">
                                Exhibition: Aftermath: Living through the peace
                            </span>
                        </div>
                        <div class="Box__body">
                            <p>The Green Howards Museum, Richmond North Yorkshire DL10 4QN United Kingdom</p>
                            <span class="Date Start--date">Starts: February 1st 2019, 10.00am</span>
                            <span class="Date End--date">Ends: May 29th 2019, 5.00pm</span>
                            <a href="" class="Box__cta UnderScore">Find our more</a>
                        </div>
                    </div>
                    <?php } ?>
                </div>

                <div class="Common--cta">
                    <a href="" class="Hover--trans">See all events</a>
                </div>

            </div>


            <div class="BoxContent__header Box--pad">
                <h3 class="Title">Plan Your Visit</h3>
                <span class="SubTitle">Get advice on bringing your dog, where to pick up wifi and information on the all important toilets and car parks.</span>
            </div>

            <div class="BoxContent__body">
                <div class="BoxContent__grid Section__columns">
                    <div class="Box--grid">
                        <img src="<?php echo get_template_directory_uri() ?>/images/Direction.svg" alt="">
                        <span class="Title">How to get here</span>
                    </div>
                    <div class="Box--grid">
                        <img src="<?php echo get_template_directory_uri() ?>/images/Parking.svg" alt="">
                        <span class="Title">Parking & Amenities</span>
                    </div>
                    <div class="Box--grid">
                        <img src="<?php echo get_template_directory_uri() ?>/images/Wheelchair.svg" alt="">
                        <span class="Title">Accessibilty</span>
                    </div>
                    <div class="Box--grid">
                        <img src="<?php echo get_template_directory_uri() ?>/images/Dog.svg" alt="">
                        <span class="Title">Dogs</span>
                    </div>
                </div>

                <div class="Common--cta">
                    <a href="" class="Hover--trans">Plan your visit</a>
                </div>
            </div>

        </div>
    </div>
</section>