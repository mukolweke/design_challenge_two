<template>
    <div class="header_main">
        <div class="title-bar" data-responsive-toggle="second-menu" data-hide-for="medium">
            <button class="menu-icon" type="button" data-toggle="second-menu"></button>
            <div class="title-bar-title">Menu</div>
        </div>

        <div class="top-bar my_nav_two" id="second-menu" style="background: transparent !important;">
            <div class="top-bar-left">
                <ul class="menu">
                    <li><img src="storage/logo.svg" alt="logo"></li>
                </ul>
            </div>
            <div class="top-bar-right">
                <ul class="dropdown menu" data-dropdown-menu>
                    <li>
                        <a href="#">WHO WE ARE</a>
                        <ul class="menu vertical">
                            <li><a href="#">One</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">CONFERENCE</a>
                        <ul class="menu vertical">
                            <li><a href="#">One</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">MEMBERSHIP</a>
                        <ul class="menu vertical">
                            <li><a href="#">One</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">DISCUSSIONS</a>
                        <ul class="menu vertical">
                            <li><a href="#">One</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">MEDIA CENTRE</a>
                        <ul class="menu vertical">
                            <li><a href="#">One</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">SUPPORT</a>
                        <ul class="menu vertical">
                            <li><a href="#">One</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="button button_join">JOIN NOW</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "HeaderTwo"
    }
</script>

<style scoped>
    .top-bar, .top-bar ul {
        background-color: transparent;
        color: white;
    }
    ul li a{
        color: white;
        background:transparent;
    }
    a:hover{
        color: white;
        background:transparent;
    }
</style>