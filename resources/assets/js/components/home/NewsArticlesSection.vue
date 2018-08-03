<template>
    <div class="article_section">
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

                <p><span class="info">Posted on:&nbsp;</span>Date is 17th July</p>
            </div>
            <div class="medium-3 small-12 column panel_article" style="background: #5d7a37;color:white;">
                <h5>CrisisMapping Typhoon Haiyan (Yolanda)</h5>
                <br/>
                <p>Lorem ipsum is simply a dummy text of the printing
                    and typsetting industry. Lorem ipsum has been the
                    industry's standard dummy text ever since....</p>

                <p><span class="info">Posted on:&nbsp;</span>Date is 17th July</p>
            </div>
            <div class="medium-3 small-12 column panel_article">
                <h5>Web GIS Spurs Open Culture Towards Government</h5>
                <p>Lorem ipsum is simply a dummy text of the printing
                    and typsetting industry. Lorem ipsum has been the
                    industry's standard dummy text ever since...</p>

                <p><span class="info">Posted on:&nbsp;</span>Date is 17th July</p>
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
    .info {
        color: gray;
        font-weight: 600;
    }

    h5 {
        font-weight: 700;
    }

    .article_section {
        padding: 30px;
    }

    .column {
        margin: 15px;
    }

    .panel_article {
        border: 1px solid gray;
        padding: 20px;
    }
</style>