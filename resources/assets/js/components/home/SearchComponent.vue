<template>
    <div class="grid-x" style="margin-top: 7%;">
        <div class="small-12 medium-offset-2 medium-8 cell">
            <div class="input-group" style="padding: 10px;">
                <span class="input-group-label"><i class="fi-magnifying-glass"
                                                   style="transform: rotate(270deg);"></i></span>
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

<style scoped lang="scss">

    .input-group {
        height: 100px;
        margin: 0 auto;

        .fi-magnifying-glass {
            font-size: 50px;
        }

        .fi-arrow-right {
            font-size: 50px;
        }

        button {
            background-color: #5d7a37;
        }
    }

    /**/
</style>