<?php include("../includes/head.php") ?>


<body class="" style="background: #000000">
<?php include("../includes/navbar.php") ?>
    <div class="section bg-transparent text-white" data-background-color="black">
        <div class="container">
            <div class="row" style="padding-top: 40px;">

                <div class="col-md-6">
                    <div class="jumbotron bg-transparent">
                        <h1>Beta Program</h1>
                        <p> Our Services are  currently not available but feel free to join our beta programme and become
                            an
                            essential part of the process</p>
                        <!--form >
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon3"><i
                                            class="now-ui-icons ui-1_email-85"></i></span>
                            </div>
                            <input type="email" class="input-lg form-control"
                                   placeholder="Your email address" >

                        </div>
                        <input class="btn-primary btn btn-block" type="submit" value="Join Beta">
                    </form-->
                        <form class="form form-newsletter" action="https://formcarry.com/s/spMXMnjgoPF" method="POST"
                            accept-charset="UTF-8">
                            <div class="form-group">
                                <input type="email" name="email_beta" id="basic-url" class="form-control"
                                    placeholder="Your good email...">
                            </div>

                            <button type="submit" class="btn btn-primary btn-icon btn-round" name="button">
                                <i class="now-ui-icons ui-1_send"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 "
                    style="background-image: url('../assets/img/beta.jpg');background-size: contain;background-position: center; background-repeat: no-repeat">


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
</script>