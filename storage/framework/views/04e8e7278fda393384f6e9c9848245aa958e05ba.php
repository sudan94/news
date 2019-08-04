<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap Core CSS -->
    <link href="/front/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="/img/logo.ico">
    <link rel="stylesheet" href="/front/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/front/css/normalize.min.css">
    <link rel="stylesheet" href="/front/css/animate.css">
    <link rel="stylesheet" href="/front/css/style.css">
    <link rel="stylesheet" href="/front/css/responsive.css">


    <title>Singha Durbar News</title>
</head>

<body>

<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>



<i class="fa fa-arrow-circle-up fa-2x" aria-hidden="true" onclick="topFunction()" id="myBtn" title="Go to top"></i>

<!--=======================================
Top Navigation Block
========================================-->

<?php echo $__env->make('frontend.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make('frontend.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<?php echo $__env->yieldContent('content'); ?>

<?php echo $__env->make('frontend.pageNav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->yieldContent('footerContent'); ?>


<?php echo $__env->yieldContent('newsfeed'); ?>




<?php echo $__env->make('frontend.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<script src="/front/js/vendor/jquery-3.1.1.min.js"></script>
<script src="/front/js/customjs.js"></script>
<script src="/front/js/bootstrap.min.js"></script>
<script src="/js/custom.js"></script>

</body>
</html>

<style>
    #myBtn {
        display: none; /* Hidden by default */
        position: fixed; /* Fixed/sticky position */
        bottom: 20px; /* Place the button at the bottom of the page */
        right: 30px; /* Place the button 30px from the right */
        z-index: 99; /* Make sure it does not overlap */
        border: none; /* Remove borders */
        outline: none; /* Remove outline */
        background-color: #595e66; /* Set a background color */
        color: white; /* Text color */
        cursor: pointer; /* Add a mouse pointer on hover */
        padding: 15px; /* Some padding */
        border-radius: 10px; /* Rounded corners */
    }

    #myBtn:hover {
        background-color: #555; /* Add a dark-grey background on hover */
    }
</style>

<script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("myBtn").style.display = "block";
        } else {
            document.getElementById("myBtn").style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0; // For Chrome, Safari and Opera
        document.documentElement.scrollTop = 0; // For IE and Firefox
    }
</script>



