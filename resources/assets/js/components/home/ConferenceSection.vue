<template>
    <div class="grid-x conference">
        <div class="medium-offset-1 medium-10 column">
            <h6 class="text-center" style="margin-bottom:10px;"><strong>OUR CONFERENCES</strong></h6>
            <div class="my-slick-carousel">
                <div class="column medium-6 small-12 textOverImage"
                     style="background-image: url('storage/conference2.jpg');background-repeat: no-repeat;">
                    <div class="hover-height">
                        <div class="link-slider">
                            <h2>The Future of GIS <br/> in our Region</h2>
                            <p>Promoting growth in our <br/> chapters and communities</p>
                            <button type="button" class="button button_conference">View Conference</button>
                        </div>
                    </div>
                </div>
                <div class="column medium-6 small-12 img2 textOverImage"
                     style="background-image: url('storage/group_photo.jpg');background-repeat: no-repeat;">
                    <div class="hover-height">
                        <div class="link-slider">
                            <h2>The Future of GIS <br/>in our Region</h2>
                            <p>Promoting growth in our<br/> chapters and communities</p>
                            <button type="button " class="button  button_conference">View Conference</button>
                        </div>
                    </div>
                </div>
                <div class="column medium-6 small-12 textOverImage"
                     style="background-image: url('storage/speaker.jpg');background-repeat: no-repeat;">
                    <div class="hover-height">
                        <div class="link-slider">
                            <h2>The Future of GIS <br/>in our Region</h2>
                            <p>Promoting growth in our<br/> chapters and communities</p>
                            <button type="button" class="button button_conference">View Conference</button>
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

<style scoped>
    .img2.textOverImage{
        background-size: 140%;
    }

    .img2.textOverImage:hover{
        background-size: 150%;
    }

    @media only screen and (max-width: 421px) {
        .conference{
            margin-top:10px;
        }

        .my-slick-carousel{
            height:220px;
            margin-top: 0;
            margin-bottom: 0;
        }
        .img2.textOverImage{
            background-size: 200%;
        }

        .img2.textOverImage:hover{
            background-size: 210%;
        }
    }
</style>
