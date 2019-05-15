<?php

session_start();
if (isset($_SESSION['userId'])) {
    header("location: ./profile.php");
}


?>
<?php include 'header.php' ?>

<main>

    <div class="container">
        <form action="includes/login.inc.php" method="post">
            <div class="form-group w-50 mt-5 mx-auto">

                <input id="inp1" class="form-control" type="text" id="mailid" name="username" autocomplete="username"
                    placeholder="Username" value="" required>

                <input id="inp2" class="form-control input mt-3" type="password" autocomplete="passd" id="pwd"
                    name="password" placeholder="Password" value="" required>

                <button id="subm" class="btn btn-outline-primary btn-lg mt-3" type="submit" name="login-submit"><i
                        class="fas fa-sign-in-alt mr-2"></i>Login</button>

                <?php include 'footer.php' ?>
            </div>
            <script>
            var input1 = document.getElementById("inp1");
            var input2 = document.getElementById("inp2");
            var butt = document.getElementById("subm");
            butt.onclick = function() {
                if (input1.value == "" && input2.value == "") {
                    input1.classList.add("is-invalid");
                    input2.classList.add("is-invalid");
                }
                if (input1.value == "") {
                    input1.classList.add("is-invalid");
                }
                if (input2.value == "") {
                    input2.classList.add("is-invalid");
                }
            }
            </script>
    </div>