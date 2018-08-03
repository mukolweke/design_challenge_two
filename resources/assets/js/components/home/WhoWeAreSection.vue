<template>
    <div>
        <div class="meeting">
            <div class="grid-x" style="margin-top:40px;">
                <div class="medium-6 small-12 column mobile" style="background: url('storage/Bitmap.png') no-repeat;">
                    <img src="" alt=""/>
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

                    <a href="#" class="button large button_meeting">Learn more about <strong>SCGIS</strong></a>
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
    .meeting {
        padding-top: 10px;
        background-color: #fafafa;
    }

    .mobile {
        background-size: cover;
        background-color: #fafafa;
    }

    h2 {
        font-weight: 200;
    }

    .button_meeting {
        background: darkorange;
        font-weight: 600;
        border-radius: 25px;
        height: 50px;
    }

    .button_meeting:hover {
        background-color: orange;
        transition: 2ms;
    }
</style>