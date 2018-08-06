<template>
    <div>
        <div class="grid-x banner" style="background: url('storage/img1.png'); background-size:cover;">
            <div class="medium-12 small-12 columns">

                <banner_heading></banner_heading>

                <div class="hero grid-x">
                    <div class="medium-offset-1 columns">
                        <h2>Do yo want to be part of the <br>
                            <b>community</b> and make a <br>
                            difference in GIS</h2>

                        <p> If you are a GIS professional or are interested <br>
                            in using GIS for conversation</p>
                        <a href="#" class="button button_community_join">Join the Community</a>

                    </div>
                </div>
                <div>
                    <search_input></search_input>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
    import banner_heading from './HeaderTwo'
    import search_input from './SearchComponent'

    export default {
        name: "Banner",

        components: {banner_heading, search_input}
    }
</script>

<style scoped>
    .hero {
        padding: 80px;
        color: #ffffff;
    }

    .button_community_join {
        width: 200px;
    }

    .button {
        text-align: center;
        padding: 15px;
        border-radius: 50px;
        font-size: 14px;
        font-weight: 600;
        letter-spacing: 1.5px;
        background: orange;
    }

    .button:hover {
        background-color: darkorange;
    }
</style>