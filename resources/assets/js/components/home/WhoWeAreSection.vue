<template>
    <div>
        <div class="who_we_are">
            <div class="grid-x" style="margin-top:50px;">
                <div class="medium-6 small-12 column mobile" style="background: url('storage/Bitmap.png') no-repeat;">
                    <!--<img src="storage/Bitmap.png" alt=""/>-->
                </div>
                <div class="medium-6 small-12 column" style="padding: 80px;">
                    <h5>
                        <small>who we are</small>
                    </h5>
                    <h2>Meeting the needs of the <br>
                        conservation GIS community
                    </h2>

                    <p>Lorem ipsum is simply a dummy text of the printing <br>
                        and typsetting industry. Lorem ipsum has been the <br>
                        industry's standard dummy text ever since...</p>

                    <a href="#" class="button button_meeting">Learn more about <strong>&nbsp;SCGIS</strong></a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "WhoWeAreSection"
    }
</script>

<style scoped>
    @media only screen and (max-width: 421px) {
        .mobile{
            background-repeat: no-repeat;
        }
    }
</style>