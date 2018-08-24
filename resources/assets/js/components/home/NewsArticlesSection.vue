<template>
    <div class="article_section" style="">
        <div class="grid-x">
            <div class="medium-offset-1 small-offset-1"></div>
            <div class="medium-3 small-12 column">
                <h5>NEWS & ARTICLES</h5>
            </div>
        </div>
        <div class="grid-x">
            <div class="medium-offset-1"></div>
            <div class="medium-3 small-12 column panel_article">
                <h5>SCGIS Conference: Maps for advocacy session.</h5>
                <p>Lorem ipsum is simply a dummy text of the printing
                    and typsetting industry. Lorem ipsum has been the
                    industry's standard dummy text ever since...</p>

                <p><br/><span class="info">Posted on:&nbsp;</span>Date is 17th July</p>
            </div>
            <div class="medium-3 small-12 column panel_article" style="background: #5d7a37;color:white;">
                <h5>CrisisMapping Typhoon Haiyan (Yolanda)</h5>
                <br/>
                <p>Lorem ipsum is simply a dummy text of the printing
                    and typsetting industry. Lorem ipsum has been the
                    industry's standard dummy text ever since....</p>

                <p><br/><span class="info">Posted on:&nbsp;</span>Date is 17th July</p>
            </div>
            <div class="medium-3 small-12 column panel_article">
                <h5>Web GIS Spurs Open Culture Towards Government</h5>
                <p>Lorem ipsum is simply a dummy text of the printing
                    and typsetting industry. Lorem ipsum has been the
                    industry's standard dummy text ever since...</p>

                <p><br/><span class="info">Posted on:&nbsp;</span>Date is 17th July</p>
            </div>
        </div>
        <br/>
    </div>
</template>

<script>
    export default {
        name: "NewsArticlesSection"
    }
</script>


<style scoped>
    .article_section{
        height: 450px; margin-top: 20px;
    }
    @media only screen and (max-width: 421px) {
        .article_section{
            height: auto; margin-top: 20px;
        }

        .panel_article{
            padding: 25px;
            height: 150px;
        }
    }
</style>