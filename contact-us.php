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

    <title>Regime-Contact Us</title>
</head>

<body>
    <div class="dashboardMain">

        <?php include "./components/Header.php" ?>

        <div class="w-100 flex-grow-1 ">
            <div class="d-flex flex-row d-none">
                <?php include "./components/Menu.html" ?>

                <?php include "settings.html" ?>
            </div>

        <div class="financingMainSection3" id="contact">

            <h3><u>CONTACT US</u></h3>
            <p class="font2em">
                Building a home is an exciting process, but we know there can be questions that come up along the way -
                no
                matter what phase of the homebuilding
                journey you are in. we've been doing this a long time and have worked to make the process as easy and
                stress
                free as possible.
                Please provide your feedbackor questions below and we will be happy to get back to you as quickly as
                possible.
            </p>

            <br />
            <form method="post" action="#" class="form form-group">
                <div class="d-flex flex-column">
                    <label for="topic">Choose a topic</label>
                    <input type="text" name="topic" />
                </div>

                <div class="rowBtn my-3">
                    <div class="d-flex flex-column">
                        <label for="first_name">First Name</label>
                        <input type="text" name="first_name" />
                    </div>

                    <div class="d-flex flex-column">
                        <label for="last_name">Second Name</label>
                        <input type="text" name="last_name" />
                    </div>
                </div>

                <div class="rowBtn">
                    <div class="d-flex flex-column">
                        <label for="email">Email</label>
                        <input type="email" name="email" />
                    </div>

                    <div class="d-flex flex-column">
                        <label for="phone">Phone</label>
                        <input type="tel" name="mobile" />
                    </div>
                </div>

                <div class="d-flex flex-column my-3">
                    <label for="comments">Comments</label>
                    <textarea name="comments" rows="4"></textarea>

                </div>

            </form>

            <div>
                <br />
                <h3><u>REACH US DIRECTLY</u></h3>
                <div class="d-flex flex-column">
                    <span class="font2em">+255 123 456 789</span>
                    <span class="font2em my-2">email@host.com</span>
                    <span class="font2em">Physical Address</span>
                </div>
            </div>


            </div>
        </div>

        <div>
            <?php include "./components/Footer.html" ?>
        </div>
    </div>

</body>
<script src="./assets/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="./assets/js/bootstrap.min.js" crossorigin="anonymous"></script>

</html>