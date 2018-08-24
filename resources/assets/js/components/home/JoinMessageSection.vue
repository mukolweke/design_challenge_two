<template>
    <div class="grid-x join_message">
        <div class="large-12 small-12 medium-12 cell">
            <div class="message_info">
                <h1 class="text-center">Want to Join SCGIS Community?</h1>
                <p class="text-center">We can't wait for you to be a member of the community.</p>
                <div class="center_btn">
                    <button type="button" class="button">Join Now!</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "JoinMessageSection"
    }
</script>


<style scoped>
    @media only screen and (max-width: 421px) {
        .join_message {
            height: 350px;
        }

        .message_info{
            height: 400px;
        }
    }
</style>