<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link href="{{ asset('resources/css/form.css') }}" rel="stylesheet">
</head>
<body>
    <?php
    // Start a new or resume an existing session
    session_start();
include(resource_path('views/header.blade.php'));
    // Check for error message
    if (isset($_SESSION['error'])) {
        echo '<div id="popup-container">
            <div id="popup" class="popup">
            <h2 id="popup-message">' . $_SESSION['error'] . '</h2>
            <div id="okDiv">
            <button type="button" id="okBtn" onclick="closePopup()">Ok</button>
            </div>
            </div>
            </div>';
        unset($_SESSION['error']);       //destroy the session variable
    }

    // Check for success message
    if (isset($_SESSION['success'])) {
        echo '<div id="popup-container">
            <div id="popup" class="popup">
            <h2 id="popup-message">' . $_SESSION['success'] . '</h2>
            <div id="okDiv">
            <button type="button" id="okBtn" onclick="closePopup()">Ok</button>
            </div>
            </div>
            </div>';
        unset($_SESSION['success']);
    }
    ?>
    <div class="container row">
        <div class="form col-6">
            <form id="form" class="group" method="post" action="db_ops.php" enctype="multipart/form-data">
                <h1>Sign Up</h1>
                <div class="row" id="fields-error">
                    <div class="col"> * indicates required fields</div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="fname">Full Name <span> * </span> </label>
                    </div>
                    <div class="col-75">
                        <input name="fullname" type="text" id="fname" placeholder="Enter Your Name" required>
                    </div>
                </div>
                <div class="row" id="name-error">
                    <div class="col"></div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label for="uname">Username <span> * </span></label>
                    </div>
                    <div class="col-75">
                        <input name="username" type="text" id="uname" placeholder="Enter Your Username" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label for="date">Birthdate <span> * </span></label>
                    </div>
                    <div class="col-75">
                        <input name="birthdate" type="date" id="date" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label for="phone">Phone <span> * </span></label>
                    </div>
                    <div class="col-75">
                        <input name="phone" type="text" id="phone" placeholder="01010101010" required maxlength="11" minlength="11">
                    </div>
                </div>
                <div class="row" id="phone-error">
                    <div class="col"></div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="address">Address <span> * </span></label>
                    </div>
                    <div class="col-75">
                        <input name="address" type="text" id="address" placeholder="St-region-city" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label for="pass">Password <span> * </span></label>
                    </div>
                    <div class="col-75">
                        <input name="password" type="password" id="pass" placeholder="Enter Strong Password" required>
                    </div>
                    <div class="row" id="pass-error">

                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label for="cpass">Confirm Password <span> * </span></label>
                    </div>
                    <div class="col-75">
                        <input type="password" id="cpass" placeholder="Enter Password" required>
                    </div>
                    <div class="row" id="cpass-error">

                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label for="img">Your Image <span> * </span></label>
                    </div>
                    <div class="col-75">
                        <input name="imageName" type="file" id="img" class="no-bg" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label for="email">Email <span> * </span></label>
                    </div>
                    <div class="col-75">
                        <input name="email" type="email" id="email" placeholder="name@gmail.com" required>
                    </div>
                    <div class="row" id="email-error">
                        <div class="col"></div>
                    </div>
                </div>

                <div id="Bdiv">
                    <input type="submit" disabled value="Submit" id="submitB" action="upload.php">
                </div>

                <p>Already have an account?
                    <a class="text-white text-decoration-none" href="">Signin</a>
                </p>

            </form>
        </div>
        <div class="get-actors col-6">
            <button id="actorsID" class="actors">Get actors</button>
            <div class="actor"></div>
        </div>
    </div>

    <script src="../js/clientSideValidation.js"></script>
    <script src="../js/api_ops.js"></script>
    <?php include(resource_path('views/footer.blade.php')); ?>

</body>
</html>