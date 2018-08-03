<template>
    <div class="grid-x" style="margin-top: 7%;">
        <div class="small-12 medium-offset-2 medium-8 cell">
            <div class="input-group">
                <span class="input-group-label"><i class="fi-magnifying-glass" style="transform: rotate(270deg);"></i></span>
                <input type="text" class="input-group-field" placeholder="What do you wish to learn Today?">
                <div class="input-group-button">
                    <button class="button" type="submit"><i class="fi-arrow-right"></i></button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "SearchComponent",

    }
</script>

<style scoped>
    .input-group{
        height: 100px;
        margin:0 auto;
    }
    button{
        background-color: #5d7a37;
    }
    /**/
</style>