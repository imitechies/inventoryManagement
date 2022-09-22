<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>@yield('title')</title>
        @include('include/header-url')
    </head>
    <body class="sb-nav-fixed">
        @include('include/navbar')
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                @include('include/sidebar')
            </div>
            <div id="layoutSidenav_content">
                <section class="main mt-5">
                    <div class="container-fluid px-4">
                       @section('main')
                       @show
                    </div>
                </section>

                <!-- footer section -->

                <section class="footer">
                    @include('include/footer')
                </section>

                <!-- footer section -->
            </div>
        </div>
        <!-- script section  -->
        
        @include('include/script')

         <!-- script section  -->
    </body>
</html>
