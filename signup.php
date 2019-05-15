<?php include "header.php"; ?>

<main>

    <div class="container">
        <form action="includes/signup.inc.php" method="post">
            <div class="form-group w-50 mt-5 mx-auto">

                <input class="form-control" type="text" id="uid" name="uid" placeholder="Username">

                <input class="form-control mt-3" type="text" id="mail" name="mail" placeholder="E-mail">

                <input class="form-control mt-3" type="password" id="pwd" name="pwd" placeholder="Password">

                <input class="form-control mt-3" type="password" id="pwd-repeat" name="pwd-repeat"
                    placeholder="Repeat password">

                <button class="btn btn-outline-primary btn-lg mt-3" type="submit" name="signup-submit"><i
                        class="fas fa-sign-in-alt mr-2"></i>SignUp</button>
            </div>
        </form>
    </div>

</main>

<?php include "footer.php"; ?>