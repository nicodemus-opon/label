<?php include("../includes/head.php") ?>


<body class="" style="background: #000000">
    <?php include("../includes/navbar.php") ?>
    <div class="section bg-transparent text-white" data-background-color="black">
        <div class="container">
            <div class="row" style="padding-top: 40px;">

                <div class="col-md-6">
                    <div class="jumbotron bg-transparent">
                        <h1>Create an artist profile</h1>
                        <p> Our Services are currently not available but feel free to join our beta programme and become
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

                    </div>
                </div>
                <div class="col-lg-6 pt-5">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Email</label>
                                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Password</label>
                                <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Address</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2">Address 2</label>
                            <input type="text" class="form-control" id="inputAddress2"
                                placeholder="Apartment, studio, or floor">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity">City</label>
                                <input type="text" class="form-control" id="inputCity">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputState">State</label>
                                <select id="inputState" class="form-control">
                                    <option selected>Choose...</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputZip">Zip</label>
                                <input type="text" class="form-control" id="inputZip">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox"> Check me out
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Create Profile</button>
                    </form>
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