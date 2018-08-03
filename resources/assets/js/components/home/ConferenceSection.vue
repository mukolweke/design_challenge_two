<template>
    <div class="grid-x member">
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

<style scoped>
    .member{
        margin-top: 20px;
        margin-bottom:30px;
    }
    .hover_btn {
        background: white;
        color: black;
        border-radius: 50px;
        width: 40%;
    }
    .hover-height {
        height: 350px;
        transition: 0.7s;
    }

    .hover-height:hover {
        transition: 0.7s;
        cursor: pointer;
    }

    h5 {
        font-weight: 600;
    }

    .hover-height {
        height: 350px;
        color: white;
    }

    .hover-height:hover {
        cursor: pointer;
        color: white;
    }

    .textOverImage {
        background-size: 100%;
        transition: 0.7s;
        margin:4px;
        background-position: center;
    }

    .textOverImage:hover {
        background-size: 110%;
        transition: 0.7s;
    }

    .view_pr {
        width: 15%;
        margin-left: 0;
    }

    hr {
        border-bottom: 1px solid #f68c1e;
    }

    .button_conference {
        background-color: #ffffff;
        color: black;
        font-weight: bold;
        border-radius: 30px;
    }

    .slick-dots{
        list-style: none;
    }

</style>