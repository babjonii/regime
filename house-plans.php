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

    <title>Project Plans</title>
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

                <div class="p-3" style="background-color: #F2F2F2;">
                    <div class="m-2 plansImageContainer px-lg-5 px-md-3 px-sm-3">
                        <div class="d-flex flex-row col-lg-7 col-sm-12 col-md-6">
                            <img src="https://via.placeholder.com/980x480.png" class="img-fluid" alt="INNER" />
                        </div>
                        <div class="d-flex flex-row flex-wrap justify-content-end col-lg-5 col-mg-6 col-sm-12">
                            <img src="https://via.placeholder.com/320x220.png"
                                class="img-fluid imgRounded heightFitcontent pb-2" alt="INNER" />
                            <img src="https://via.placeholder.com/320x220.png"
                                class="img-fluid imgRounded heightFitcontent pb-1" alt="INNER" />
                            <img src="https://via.placeholder.com/320x220.png"
                                class="img-fluid imgRounded heightFitcontent pb-2" alt="INNER" />
                        </div>
                    </div>

                    <div class="paleBackground">
                        <p class="h4">ROMAN</p>
                        <small class="text-muted">Lorem ipsum manta</small>

                        <div class="d-flex flex-row justify-content-between flex-wrap my-3">

                            <div>
                                <p class="">Bedrooms</p>
                                <small class="text-muted">2 Beds</small>
                            </div>
                            <div>
                                <p class="">Bathrooms</p>
                                <small class="text-muted">2</small>
                            </div>
                            <div>
                                <p class="">Square Metres</p>
                                <small class="text-muted">3000</small>
                            </div>
                            <div>
                                <p class="">Site Footprint</p>
                                <small class="text-muted">50 ft. 52 ft</small>
                            </div>
                            <div>
                                <p class="">Build Time</p>
                                <small class="text-muted">8 weeks</small>
                            </div>
                            <div>
                                <p class="">Starting Price</p>
                                <small class="text-muted"><u>Tsh 7000000</u></small>
                            </div>
                        </div>

                        <div class="d-flex flex-row justify-content-between flex-wrap">
                            <div class="d-flex flex-row justify-content-between col-lg-4 col-md-5 col-sm-12">
                                <div class="features bg-light text-center">
                                    <a href="all-house-plans.php">
                                        <i class="fa-solid fa-camera fa-xl"></i> &nbsp;
                                        <span class="text-uppercase">Gallery</span>
                                    </a>
                                </div>
                                <div class="features bg-light text-center">
                                    <i class="fa-solid fa-circle-info fa-xl"></i> &nbsp;
                                    <span class="text-uppercase">Features</span>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-5 col-sm-12 d-flex justify-content-end">
                                <div class="bg-dark features text-white">
                                    <a href="contact-us.php">
                                        <span class="text-uppercase">Get in Touch</span>
                                    </a>
                                </div>

                            </div>
                        </div>
                        <div class="d-flex flex-row my-3">
                            <div class="col-6 bg-light p-5 brL10">
                                <p class="mb-3 fw-bold">CUSTOMIZE TO PLAN</p>

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ultrices lectus
                                    sit amet
                                    ante luctus, vitae
                                    pulvinar lorem vestibulum. Suspendisse in leo id libero auctor porttitor ut eu nunc.
                                    Praesent
                                    pharetra metus sit amet
                                    velit faucibus, nec aliquet ligula aliquet.</p>
                            </div>
                            <div class="col-6 brR10" id="customizePlansBG">
                            </div>
                        </div>
                    </div>

                </div>

                <div class="financingMainSection3 flex-wrap">
                    <div class="px-4">
                        <p class="mb-3 h4">DESCRIPTION</p>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ultrices lectus sit amet
                            ante luctus, vitae
                            pulvinar lorem vestibulum. Suspendisse in leo id libero auctor porttitor ut eu nunc.
                            Praesent
                            pharetra metus sit amet
                            pulvinar lorem vestibulum. Suspendisse in leo id libero auctor porttitor ut eu nunc.
                            Praesent
                            pharetra metus sit amet
                            pulvinar lorem vestibulum. Suspendisse in leo id libero auctor porttitor ut eu nunc.
                            Praesent
                            pharetra metus sit amet
                            velit faucibus, nec aliquet ligula aliquet.</p>

                        <br />

                        <p class="mb-3 h4">SIMILAR HOUSE PLANS</p>

                        <div class="d-flex flex-row flex-wrap justify-content-between">
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