<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <!-- <link rel="icon" href="%PUBLIC_URL%/icon.svg" /> -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <meta name="description" content="Web site created by @babjonii" />
    <!-- <link rel="apple-touch-icon" href="%PUBLIC_URL%/icon.svg" /> -->
    <!-- <link rel="manifest" href="%PUBLIC_URL%/manifest.json" /> -->

    <!--Stylesheets starts here-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;1,400&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/fontawesome/css/all.css">
    <link rel="stylesheet" href="./assets/styles.css">

    <title>All House Plans</title>
</head>

<body>
    <div class="dashboardMain">

        <?php include "./components/Header.php" ?>

        <div class="w-100 flex-grow-1 ">
            <div class="d-flex flex-row d-none">
                <?php include "./components/Menu.html" ?>

                <?php include "settings.html" ?>
            </div>


            <div class="w-100">
                <img src="https://via.placeholder.com/1980x120.png" class="img-fluid" alt="TOP" />

                
                <div class="financingMainSection3 flex-wrap">
                    <div class="px-4">

                    <p class="text-danger">Showing 50 out of 50 available plans</p>
                        <div class="d-flex flex-row flex-wrap justify-content-center">

                        <?php 
                            for ($i = 1; $i <= 12; $i++) {
                            ?>
                            <div class="" style="margin-right: 1em; margin-left: 1em">
                                <img src="https://via.placeholder.com/400x280.png" alt="placeholder" class="img-fluid"
                                    style="border-radius: 1.5em;" />
                                <div class="px-4 pt-2">
                                    <p class="h5">ROMAN</p>
                                    <div class="text-danger">
                                        <small>3 bed/2 bath</small>
                                        <small>xxxx sq. ft</small>
                                    </div>
                                </div>
                            </div>
                            <?php

                                }
                            ?>

                            <!-- <div class="">
                                <img src="https://via.placeholder.com/300x180.png" alt="placeholder" class="img-fluid"
                                    style="border-radius: 1.5em;" />
                                <div class="px-4 pt-2">
                                    <p class="h5">ROMAN</p>
                                    <div class="text-danger">
                                        <small>3 bed/2 bath</small>
                                        <small>xxxx sq. ft</small>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <img src="https://via.placeholder.com/300x180.png" alt="placeholder" class="img-fluid"
                                    style="border-radius: 1.5em;" />
                                <div class="px-4 pt-2">
                                    <p class="h5">ROMAN</p>
                                    <div class="text-danger">
                                        <small>3 bed/2 bath</small>
                                        <small>xxxx sq. ft</small>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <img src="https://via.placeholder.com/300x180.png" alt="placeholder" class="img-fluid"
                                    style="border-radius: 1.5em;" />
                                <div class="px-4 pt-2">
                                    <p class="h5">ROMAN</p>
                                    <div class="text-danger">
                                        <small>3 bed/2 bath</small>
                                        <small>xxxx sq. ft</small>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <img src="https://via.placeholder.com/300x180.png" alt="placeholder" class="img-fluid"
                                    style="border-radius: 1.5em;" />
                                <div class="px-4 pt-2">
                                    <p class="h5">ROMAN</p>
                                    <div class="text-danger">
                                        <small>3 bed/2 bath</small>
                                        <small>xxxx sq. ft</small>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <img src="https://via.placeholder.com/300x180.png" alt="placeholder" class="img-fluid"
                                    style="border-radius: 1.5em;" />
                                <div class="px-4 pt-2">
                                    <p class="h5">ROMAN</p>
                                    <div class="text-danger">
                                        <small>3 bed/2 bath</small>
                                        <small>xxxx sq. ft</small>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <img src="https://via.placeholder.com/300x180.png" alt="placeholder" class="img-fluid"
                                    style="border-radius: 1.5em;" />
                                <div class="px-4 pt-2">
                                    <p class="h5">ROMAN</p>
                                    <div class="text-danger">
                                        <small>3 bed/2 bath</small>
                                        <small>xxxx sq. ft</small>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <img src="https://via.placeholder.com/300x180.png" alt="placeholder" class="img-fluid"
                                    style="border-radius: 1.5em;" />
                                <div class="px-4 pt-2">
                                    <p class="h5">ROMAN</p>
                                    <div class="text-danger">
                                        <small>3 bed/2 bath</small>
                                        <small>xxxx sq. ft</small>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <img src="https://via.placeholder.com/300x180.png" alt="placeholder" class="img-fluid"
                                    style="border-radius: 1.5em;" />
                                <div class="px-4 pt-2">
                                    <p class="h5">ROMAN</p>
                                    <div class="text-danger">
                                        <small>3 bed/2 bath</small>
                                        <small>xxxx sq. ft</small>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <img src="https://via.placeholder.com/300x180.png" alt="placeholder" class="img-fluid"
                                    style="border-radius: 1.5em;" />
                                <div class="px-4 pt-2">
                                    <p class="h5">ROMAN</p>
                                    <div class="text-danger">
                                        <small>3 bed/2 bath</small>
                                        <small>xxxx sq. ft</small>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <img src="https://via.placeholder.com/300x180.png" alt="placeholder" class="img-fluid"
                                    style="border-radius: 1.5em;" />
                                <div class="px-4 pt-2">
                                    <p class="h5">ROMAN</p>
                                    <div class="text-danger">
                                        <small>3 bed/2 bath</small>
                                        <small>xxxx sq. ft</small>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <img src="https://via.placeholder.com/300x180.png" alt="placeholder" class="img-fluid"
                                    style="border-radius: 1.5em;" />
                                <div class="px-4 pt-2">
                                    <p class="h5">ROMAN</p>
                                    <div class="text-danger">
                                        <small>3 bed/2 bath</small>
                                        <small>xxxx sq. ft</small>
                                    </div>
                                </div>
                            </div> -->
                        </div>

                    </div>

                </div>

            </div>

        </div>

        <?php include "./components/Footer.html" ?>

    </div>

</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script src="./assets/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="./assets/js/bootstrap.min.js" crossorigin="anonymous"></script>

<script>
    $(function () {
        // Check the initial Position of the fixed_nav_container
        var stickyHeaderTop = $('#ribbon').offset().top;

        $(window).scroll(function () {
            if ($(window).scrollTop() > stickyHeaderTop) {
                $('#ribbon').css({ position: 'sticky', top: '0px' });
            } else {
                $('#ribbon').css({ position: 'relative', top: '0px' });
            }
        });

        $(function () {
            $('a[href*=#]:not([href=#])').click(function () {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.substr(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            });
        });

    });
</script>

</html>