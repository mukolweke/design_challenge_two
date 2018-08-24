<template>
    <div class="featured">
        <h6 class="text-center"><strong>FEATURED STORIES</strong></h6>
        <div class="grid-x images">
            <div class="medium-offset-1 medium-10 small-12">
                <div class="grid-x" style="height: 420px;">
                    <div class="column medium-6 small-12 textOverImage"
                         style="background-image: url('storage/Bity.png');background-repeat: no-repeat;">
                        <div class="hover-height">
                            <div class="text-slider">
                                <h5>Master's Thesis</h5>
                            </div>
                            <div class="link-slider">
                                <hr class="view_pr"/>
                                <a href="#">View Project ></a>
                            </div>
                        </div>
                    </div>
                    <div class="column medium-6 small-12 img2 textOverImage"
                         style="background-image: url('storage/satelite.png');background-repeat: no-repeat;">
                        <div class="hover-height">
                            <div class="text-slider">
                                <h5>Catalog and classification of online <br>
                                    Free GIS Training Courses</h5>
                            </div>
                            <div class="link-slider">
                                <hr class="view_pr"/>
                                <a href="#">View Project ></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-x" style="height: 420px;">
                    <div class="column medium-5 small-12 textOverImage"
                         style="background-image: url('storage/bitmap3.png');background-repeat: no-repeat;">
                        <div class="hover-height">
                            <div class="text-slider">
                                <h5>Caribou and mining <br> Story Map</h5>
                            </div>
                            <div class="link-slider">
                                <hr class="view_pr"/>
                                <a href="#">View Project ></a>
                            </div>
                        </div>
                    </div>
                    <div class="column medium-7 small-12 textOverImage"
                         style="background-image: url('storage/bitmap4.png');background-repeat: no-repeat;">
                        <div class="hover-height">
                            <div class="text-slider">
                                <h5>Quantifying The Impact of Multi-Annual <br>
                                    Drought on California's Agriculture Industry <br>
                                </h5>
                            </div>
                            <div class="link-slider">
                                <hr class="view_pr"/>
                                <a href="#">View Project ></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-x btn_grid">
                    <div class="cell small-offset-4 small-4 medium-offset-4 medium-4 large-4 btn">
                        <a href="#" class="button expanded button_view" style="">View All Project</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "FeaturedStorySection"
    }
</script>

<style scoped>
    @media only screen and (max-width: 421px) {
        .textOverImage{
            height:auto;
        }

        .btn_grid{
            margin-top:160px;
        }

        .img2 .textOverImage{
            width: 95%;
        }

        .button_view{
            width: auto;
        }

        .hover-height .text-slider {
            display: block;
            padding-top: 50px;
            padding-left: 30px;
        }
    }
</style>
