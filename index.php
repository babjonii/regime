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

    <title>Regime</title>
</head>

<body>
    <noscript>You need to enable JavaScript to run this app.</noscript>
    <div id="root">
        <div>
            <?php include "./pages/dashboard.php" ?>
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
    $(function(){
    // Check the initial Position of the fixed_nav_container
    var stickyHeaderTop = $('#ribbon').offset().top;

    $(window).scroll(function(){
            if( $(window).scrollTop() > stickyHeaderTop ) {
                    $('#ribbon').css({position: 'sticky', top: '0px'});  
            } else {
                    $('#ribbon').css({position: 'relative', top: '0px'});
            }
    });

    $(function() {
    $('a[href*=#]:not([href=#])').click(function() {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.substr(1) +']');
        if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top
            }, 1000);
            return false;
        }
        });
    });
  
    // $('a[href*="outdoors"]').on('click', function (e) {
    //     e.preventDefault();

    //     $('html, body').animate({
    //         scrollTop: $($(this).attr('href')).offset().top
    //     }, 500, 'linear');
    //         });
    //     })
    });
</script>
</html>