<template>
    <div class="grid-x conference">
        <div class="medium-offset-1 medium-10 column">
            <h6 class="text-center"><strong>OUR CONFERENCES</strong></h6>
            <div class="my-slick-carousel">
                <div class="column medium-6 small-6 textOverImage"
                     style="background-image: url('storage/conference2.jpg');background-repeat: no-repeat;">
                    <div class="hover-height">
                        <div class="link-slider">
                            <h3>The Future of GIS <br/>in our Region</h3>
                            <p>Promoting growth in our<br/> chapters and communities</p>
                            <button type="button" class="button button_conference">View Conference</button>
                        </div>
                    </div>
                </div>
                <div class="column medium-6 small-6 textOverImage"
                     style="background-image: url('storage/group_photo.jpg');background-repeat: no-repeat;">
                    <div class="hover-height">
                        <div class="link-slider">
                            <h3>The Future of GIS <br/>in our Region</h3>
                            <p>Promoting growth in our<br/> chapters and communities</p>
                            <button type="button " class="button  button_conference">View Conference</button>
                        </div>
                    </div>
                </div>
                <div class="column medium-6 small-6 textOverImage"
                     style="background-image: url('storage/speaker.jpg');background-repeat: no-repeat;">
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
            dots: false,
            dotsClass: 'slick-dots',
            mobileFirst: true
        });
    });
</script>
