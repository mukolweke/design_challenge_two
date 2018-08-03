<template>
    <div class="grid-x member">
        <div class="medium-offset-1 medium-10 columns">
            <p><b>PANEL MEMBERS</b></p>
            <div class="grid-x" style="height: 350px;">
                <div class="column medium-4 small-12 textOverImage"
                     style="background-image: url('storage/client1.jpg');">
                    <div class="hover-height">
                        <div class="link-slider">
                            <div class="grid-x">
                                <div class="small-9 column">
                                    <h5>Dr Lilian Pintea </h5>
                                    <p>
                                        Vice President Conservation Science, the Jance Goodall
                                        Institute.
                                    </p>
                                </div>
                                <div class="small-3 column">
                                    <button class="button button_go"><i class="fi-arrow-right"></i></button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="column medium-4 small-12 textOverImage"
                     style="background-image: url('storage/client2.jpg');">
                    <div class="hover-height">
                        <div class="link-slider">
                            <div class="grid-x">
                                <div class="small-9 column">
                                    <h5>Dr. Michael Wamaye </h5>
                                    <p>
                                        Head of our design and development team.
                                    </p>
                                </div>
                                <div class="small-3 column">
                                    <button class="button button_go"><i class="fi-arrow-right"></i></button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="column medium-4 small-12 textOverImage"
                     style="background-image: url('storage/client3.jpg');">
                    <div class="hover-height">
                        <div class="link-slider">
                            <div class="grid-x">
                                <div class="small-9 column">
                                    <h5>Mr. Chaka Williams </h5>
                                    <p>
                                        Head of our Software Engineering department.
                                    </p>
                                </div>
                                <div class="small-3 column">
                                    <button class="button button_go"><i class="fi-arrow-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "MembersSection"
    }
</script>

<style scoped>
    .member{
        margin-top:40px;
        margin-bottom:70px;
    }
     h5{
         font-weight: 600;
     }

    .hover-height {
        height: 350px;
        color: white;
    }

    .hover-height:hover {
        cursor: pointer;
        color: white;
    }

    .textOverImage{
        background-size: cover;
        background-position: center;
        border-bottom: 3px solid orangered;
    }

    .textOverImage:hover{
        height: 300px;
    }

    .textOverImage:after{
        content: attr(data-text)
    }

    .link-slider{
        padding-top: 310px;
        transition: 0.7s;
        padding-left: 30px;
        display: none;
        color: black;
        font-weight: bold;
    }

    .link-slider:hover{
        display: block;
        transition: 0.7s;
    }

    .view_pr{
        width: 15%;
        margin-left: 0;
    }

    hr{
        border-bottom: 1px solid #f68c1e;
    }

    .button_go{
        width: 50px;
        background-color: #f68c1e;
        color: black;
        font-weight:bold;
        height:50px;
        border-radius: 60%;
    }
    .fi-arrow-right{
        background-color: transparent;
        color:white;
    }

</style>