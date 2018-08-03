<template>
    <div class="map_bike" style="background: url('storage/Bitmap9.png');background-size: cover;">
        <div class="medium-offset-1 medium-10">
            <div class="grid-x">
                <div class="column medium-5 small-12" style="color:white;">
                    <h4>
                        Allowing conservation GIS
                        practitioners to attend the
                        Esri user conference and
                        SGIS annual conference .
                    </h4>
                    <p>
                        Lorem ipsum is simply a dummy text of the printing
                        and typsetting industry. Lorem ipsum has been the
                        industry's standard dummy text ever since...
                    </p>
                    <br>
                    <div class="grid-x grid-padding-x">
                        <div class="medium-3 small-3 cell">
                            <img src="storage/play_icon.svg"
                                 class="play-icon">
                        </div>
                        <div class="medium-9 small-9 cell">
                            <p class="span_head"><span class="head_bold">Learning more with GIS </span> <br>Improving
                                customer service<br>with
                                custom
                                IOS apps</p>
                        </div>
                    </div>
                </div>
                <div class="column small-12 medium-5"></div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "BannerMapSection"
    }
</script>

<style scoped>
    .map_bike{
        padding:150px;
    }
    h4 {
        font-size: 30px;
        font-weight: 100;
        font-family: "Proxima Nova", sans-serif;
        text-align: left;
    }

    .head_bold {
        font-weight: bold;
    }
</style>