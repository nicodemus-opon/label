<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/profile.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>
        RippleTune | Digital music distribution
    </title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />

    <meta property="og:title" content="RippleTune | Digital music distribution" />
    <meta property="og:url" content="https://www.rippletune.com" />
    <meta property="og:description" content="Digital music distribution platform for indie artists ">
    <meta property="og:image" content="//www.rippletune.com/assets/img/profile.png">
    <meta property="og:type" content="website" />



    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

   
    <!-- CSS Files -->

    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/aos.css" rel="stylesheet" />



    <link href="../assets/css/now-ui-kit.min.css?v=1.2.1" rel="stylesheet" />
    <style>
    html,
    body {
        font-family: 'Montserrat', sans-serif;
        height: 100%;
    }

    .main {


        background-image: url('assets/img/bgimg.png');


        background-size: cover;
        background-position: center center;
        background-attachment: fixed;
        background-repeat: no-repeat;
        min-height: 640px;

        /* necessary? is this positioned relative or absolute elsewhere? z-index: -10;*/
        position: relative;
        height: 100%;


    }

    @font-face {
        font-family: myFirstFont;
        src: url(../assets/img/tt.otf);
    }

    .mainn {


        background-image: url('../assets/img/rapper.jpg');



        background-position: center center;
        background-attachment: fixed;
        background-repeat: no-repeat;
        z-index: -10;

        /* necessary? is this positioned relative or absolute elsewhere? */
        position: relative;



    }

    .mainn::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, .55);
        z-index: -9
            /*Moved one position above the -10 background: rgba(20, 20, 20, .65);*/
    }
    </style>

    <style>
    /* Slider */

    .slick-slide {
        margin: 0px 20px;
    }

    .slick-slide img {
        width: 68px;
    }

    .slick-slider {
        position: relative;
        display: block;
        box-sizing: border-box;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        -webkit-touch-callout: none;
        -khtml-user-select: none;
        -ms-touch-action: pan-y;
        touch-action: pan-y;
        -webkit-tap-highlight-color: transparent;
    }

    .slick-list {
        position: relative;
        display: block;
        overflow: hidden;
        margin: 0;
        padding: 0;
    }

    .slick-list:focus {
        outline: none;
    }

    .slick-list.dragging {
        cursor: pointer;
        cursor: hand;
    }

    .slick-slider .slick-track,
    .slick-slider .slick-list {
        -webkit-transform: translate3d(0, 0, 0);
        -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
        -o-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }

    .slick-track {
        position: relative;
        top: 0;
        left: 0;
        display: block;
    }

    .slick-track:before,
    .slick-track:after {
        display: table;
        content: '';
    }

    .slick-track:after {
        clear: both;
    }

    .slick-loading .slick-track {
        visibility: hidden;
    }

    .slick-slide {
        display: none;
        float: left;
        height: 100%;
        min-height: 1px;
    }

    [dir='rtl'] .slick-slide {
        float: right;
    }

    .slick-slide img {
        display: block;
    }

    .slick-slide.slick-loading img {
        display: none;
    }

    .slick-slide.dragging img {
        pointer-events: none;
    }

    .slick-initialized .slick-slide {
        display: block;
    }

    .slick-loading .slick-slide {
        visibility: hidden;
    }

    .slick-vertical .slick-slide {
        display: block;
        height: auto;
        border: 1px solid transparent;
    }

    .slick-arrow.slick-hidden {
        display: none;
    }
    </style>

</head>