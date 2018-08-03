<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Landing Page</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body id="top">

        <div id="app">
            <index_page></index_page>
        </div>


        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>

        {{--<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>--}}

        <script>
       $(document).foundation()

       $(document).ready(function () {
           $('.my-slick-carousel').slick({

           });
       });

       $(document).ready(() => {
           let offset = 600;
           let duration = 500;

           $(window).scroll(() => {
               if ($(this).scrollTop() > offset) {
                   $('.to-top').fadeIn(duration);
               } else {
                   $('.to-top').fadeOut(duration);
               }
           });

           $('.to-top').click(() => {
               $('body').animate({scrollTop: 0}, 600);
           });
       });
    </script>

    </body>
</html>
