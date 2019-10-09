<?php include("../includes/head.php") ?>

<style>


</style>

<body class="" style="background: #000000;">
    <?php include("../includes/navbar.php") ?>
    <div class="section bg-transparent text-white" data-background-color="black">
        <div class="container" style="">
            <div class="row" style="padding-top: 40px;">

                <div class="col-md-6">
                    <div class="jumbotron bg-transparent">
                        <img src="../assets/img/julie.jpg" height="300px" alt="Raised Image" class="roundedb img-raised rounded-circle">
                        <h3 class="title"><b>ArtistName</b></h1>
                        <button class="btn btn-primary btn-iconn btn-round">
                                <i class="fab fa-instagram"></i> Instagram
                            </button>

                            <button class="btn btn-neutral btn-iconn btn-round">
                                <i class="fab fa-twitter"></i> Twitter
                            </button>
                            
                            <button class="btn btn-neutral btn-iconn btn-round">
                                <i class="fab fa-facebook"></i> Facebook
                            </button>
                            
                            <p> Our Services are currently not available but feel free to join our beta programme and
                                become
                                an
                                essential part of the process</p>


                    </div>
                </div>
                <div class="col-lg-6 pt-5 ">
                    <h2 class="title">Latest Release </h3>
                        <iframe width="100%" height="300" scrolling="no" frameborder="no" allow="autoplay"
                            src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/672029780&color=%236c5c34&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
                        <div class="card bg-transparent">
                            <div class="card-body">
                                <h2 class="title">Platforms </h3>

                                    <ul class="list-group list-group-flush ">
                                        <li class="list-group-item bg-transparent">
                                            <img src="../assets/img/lnks/youtube.png" class="svgb" style="height:48px;">
                                            <a href="https://www.youtube.com/channel/UCRFGrHE3q0sa92Jr6Us5Ntw"
                                                class="btn btn-link btn-lg text-white">YouTube</a>
                                        </li>
                                        <li class="list-group-item bg-dark">
                                            <img src="../assets/img/lnks/spotify.png" class="svgb" style="height:48px;">
                                            <a href="https://www.youtube.com/channel/UCRFGrHE3q0sa92Jr6Us5Ntw"
                                                class="btn btn-link btn-lg text-white">Spotify</a></li>
                                        <li class="list-group-item bg-transparent">
                                            <img src="../assets/img/lnks/itunes.png" class="svgb" style="height:48px;">
                                            <a href="https://www.youtube.com/channel/UCRFGrHE3q0sa92Jr6Us5Ntw"
                                                class="btn btn-link btn-lg text-white">iTunes</a></li>
                                        <li class="list-group-item bg-dark">
                                            <img src="../assets/img/lnks/soundcloud.png" class="svgb"
                                                style="height:48px;">
                                            <a href="https://www.youtube.com/channel/UCRFGrHE3q0sa92Jr6Us5Ntw"
                                                class="btn btn-link btn-lg text-white">Soundcloud</a></li>
                                    </ul>

                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <?php include("../includes/footer.php") ?>
    <?php include("../includes/end.php") ?>

    <script>
    $("meta[property='og:title']").attr("content", document.title);
    $("meta[property='og:url']").attr("content", location.toString());
    var desc = $("meta[name='Description']").attr("content");
    $("meta[property='og:description']").attr("content", desc);
    $("meta[name='twitter:card']").attr("content", desc);
    </script>


</body>

</html>
<script>
$(document).ready(function() {
    //$("nav").removeClass("navbar-transparent ");
    //$("nav").removeAttr("color-on-scroll")
    $(".ccc").removeClass("btn-neutral ");
    $(".ccc").addClass("btn-primary");
});

jQuery('img.svg').each(function() {
    var $img = jQuery(this);
    var imgID = $img.attr('id');
    var imgClass = $img.attr('class');
    var imgURL = $img.attr('src');

    jQuery.get(imgURL, function(data) {
        // Get the SVG tag, ignore the rest
        var $svg = jQuery(data).find('svg');

        // Add replaced image's ID to the new SVG
        if (typeof imgID !== 'undefined') {
            $svg = $svg.attr('id', imgID);
        }
        // Add replaced image's classes to the new SVG
        if (typeof imgClass !== 'undefined') {
            $svg = $svg.attr('class', imgClass + ' replaced-svg');
        }

        // Remove any invalid XML tags as per http://validator.w3.org
        $svg = $svg.removeAttr('xmlns:a');

        // Check if the viewport is set, if the viewport is not set the SVG wont't scale.
        if (!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
            $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
        }

        // Replace image with new SVG
        $img.replaceWith($svg);

    }, 'xml');

});
</script>