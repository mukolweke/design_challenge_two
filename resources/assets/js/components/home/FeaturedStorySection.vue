<template>
    <div class="featured">
        <h6 class="text-center"><strong>FEATURED STORIES</strong></h6>
        <div class="grid-x images">
            <div class="medium-offset-1 medium-10 small-12">
                <div class="grid-x">
                    <div class="columns medium-6 small-12 textOverImage"
                         style="background-image: url('storage/green_back.jpg');">
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
                    <div class="columns medium-6 small-12 textOverImage"
                         style="background-image: url('storage/bitmap2.png');">
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
                <div class="grid-x">
                    <div class="columns medium-5 small-12 textOverImage"
                         style="background-image: url('storage/bitmap3.png');">
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
                    <div class="columns medium-7 small-12 textOverImage"
                         style="background-image: url('storage/bitmap4.png');">
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
                <div class="grid-x">
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
    .featured{
        margin-top: 20px;
    }
    h5{
        font-weight: 600;
    }
    .images{
        margin-top:20px;
    }
    .hover-height {
        height: 350px;
        transition: 0.7s;
        color: white;
    }

    .hover-height:hover {
        transition: 0.7s;
        cursor: pointer;
        color: white;
    }

    .textOverImage{
        background-size: 100%;
        background-position: center;
        transition: 0.5s;
    }

    .textOverImage:hover{
        background-size:110%;
    }

    .textOverImage:after{
        content: attr(data-text)
    }

    .text-slider {
        display: block;
        padding-top: 200px;
        padding-left: 30px;
    }

    .link-slider{
        display: none;
        padding-top: 10px;
        padding-left: 30px;
        color: white;
    }

    .link-slider:hover{
        display: block;
    }

    .view_pr{
        width: 15%;
        margin-left: 0;
    }

    hr{
        border-bottom: 1px solid darkorange;
    }

    a{
        margin-top:0;
        color: white;
        pointer: cursor;
    }

    .button_view{
        padding-top: 20px;
        margin: 0 auto;
        background-color: #f4f4f4;
        color: black;
        font-weight:bold;
        height:60px;
        border-radius: 20px;
    }

    .button_view:hover{
        background-color: #8a8a8a;
    }

    .btn{
        margin-top: 40px;
        margin-bottom: 40px;
    }
</style>