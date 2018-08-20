<template>
    <div class="grid-x conference">
        <div class="medium-offset-1 medium-10 columns">
            <h6 class="text-center"><strong>OUR CONFERENCES</strong></h6>
            <div class="row small-collapse medium-uncollapse">

                <!--<slick ref="slick" :options="slickOptions">-->
                    <!---->
                <!--</slick>-->

                <div class="my-slick-carousel">
                    <div class="column medium-4 small-4 textOverImage"
                         style="background-image: url('storage/conference2.jpg');">
                        <div class="hover-height">
                            <div class="link-slider">
                                <h3>The Future of GIS <br/>in our Region</h3>
                                <p>Promoting growth in our<br/> chapters and communities</p>
                                <button type="button" class="button button_conference">View Conference</button>
                            </div>
                        </div>
                    </div>
                    <div class="column medium-4 small-4 textOverImage"
                         style="background-image: url('storage/group_photo.jpg');">
                        <div class="hover-height">
                            <div class="link-slider">
                                <h3>The Future of GIS <br/>in our Region</h3>
                                <p>Promoting growth in our<br/> chapters and communities</p>
                                <button type="button " class="button  button_conference">View Conference</button>
                            </div>
                        </div>
                    </div>
                    <div class="column medium-4 small-4 textOverImage"
                         style="background-image: url('storage/speaker.jpg');">
                        <div class="hover-height">
                            <div class="link-slider">
                                <h3>The Future of GIS <br/>in our Region</h3>
                                <p>Promoting growth in our<br/> chapters and communities</p>
                                <button type="button" class="button  button_conference">View Conference</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import Slick from 'vue-slick';

    export default {
        name: "ConferenceSection",


    }

    $(document).ready(function () {
        $('.my-slick-carousel').slick({
            slidesToShow: 2,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            arrows: false,
            adaptiveHeight: true,

            mobileFirst: true
        });
    });
</script>
