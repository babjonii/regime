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

    <title>Renovations</title>
</head>

<body>
    <div class="dashboardMain">

        <?php include "./components/Header.php" ?>

        <div class="w-100 flex-grow-1 ">
            <div class="d-flex flex-row d-none">
                <?php include "./components/Menu.html" ?>

                <?php include "settings.html" ?>
            </div>

            <div class="">
                <section class="titleSection" id="renovations">
                    <h1 class="page-header text-white">RENOVATIONS</h1>
                    <p class="text-white">As with all projects, a home renovation comes with lots of <br />planning and
                        hard work,
                        but it
                        is a phenomenal way to breathe <br />new life into an old home.</p>
                </section>

                <div class="financingMainSection">
                    <div class="financingMainSection1 flex-wrap">
                        <div class="col-lg-5 col-md-6 col-sm-12 p-5">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel ligula lacinia, pharetra
                                sapien
                                vitae,
                                efficitur
                                tortor. Sed ac elit ac nunc varius faucibus vitae et lorem.
                                <br />
                                <br />
                                Vivamus consectetur vulputate sapien,
                                in iaculis ligula
                                luctus ac. Maecenas bibendum neque sed ligula volutpat, eget mollis nunc varius.
                                Phasellus eu eros
                                nec
                                lorem pretium
                                mollis non vehicula orci. In sagittis tristique ultricies.
                                <br />
                                <br />
                                Nunc posuere dui eget dictum sodales.
                                Praesent elit arcu,
                                egestas vel odio ut, mattis pretium mi. Phasellus ultricies pulvinar urna sit amet
                                cursus.
                            </p>
                        </div>
                        <div class="d-flex col-lg-5 col-md-6 col-sm-12" id="sectionImage">
                            <image src="assets/images/ren2.jpeg" class="image-fluid financeSectionImage" alt="image" />
                        </div>
                    </div>

                    <div class="financingMainSection3">
                        <p class="text-black-50 fw-bold">Each type of build project is unique, and have a process
                            specifically to
                            serve
                            homeowners interested in renovation projects;</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel ligula lacinia, pharetra
                            sapien
                            vitae,
                            efficitur
                            tortor. Sed ac elit ac nunc varius faucibus vitae et lorem. Vivamus consectetur vulputate
                            sapien,
                            in iaculis ligula
                            luctus ac. Maecenas bibendum neque sed ligula volutpat, eget mollis nunc varius. Phasellus
                            eu
                            eros
                            nec
                            lorem pretium tortor. Sed ac elit ac nunc varius faucibus vitae et lorem. Vivamus
                            consectetur
                            vulputate
                            sapien,
                            in iaculis ligula
                            lorem pretium tortor. Sed ac elit ac nunc varius faucibus vitae et lorem.
                            <br /><br />
                            Vivamus consectetur
                            vulputate
                            sapien,
                            in iaculis ligula
                            luctus ac. Maecenas bibendum neque sed ligula volutpat, eget mollis nunc varius. Phasellus
                            eu
                            eros
                            nec
                            lorem pretium
                            mollis non vehicula orci. In sagittis tristique ultricies.
                        </p>
                    </div>


                    <div class="paleBackground" id="largeText">
                        <p className="">For more information about and inspiration on renovations, visit our <a
                                href="special-projects.php"><u>special
                                    projects</u></a></p>

                    </div>

                </div>
            </div>

            <?php include "./components/Footer.html" ?>
        </div>
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