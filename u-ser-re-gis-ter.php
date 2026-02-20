<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>User Sinup</title>
    <link rel="icon" type="image/png" href="./assets/img/favicon.png" />
    <!-- GLOBAL MAINLY STYLES-->
    <link href="admin/assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="admin/assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="admin/assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="admin/assets/css/main.css" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
    <link href="admin/assets/css/pages/auth-light.css" rel="stylesheet" />
    <style>
        /* Basic styling */
        body {
            font-family: Arial, sans-serif;
            background-color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .content form {
            padding: 15px 20px 20px 20px;
            background-color: rgba(252, 248, 253, 0.0);
            color: white;
        }

        .content {
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px #0e4a1c;
            width: 100%;
            max-width: 500px;
            box-sizing: border-box;
        }

        h2.login-title {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .input-group-icon {
            position: relative;
        }

        .input-group-icon .input-icon {
            position: absolute;
            top: 50%;
            left: 12px;
            transform: translateY(-50%);
        }

        .form-control {
            width: 100%;
            padding: 12px 5px;
            padding-left: 11px;
            border: 1px solid #638f6d63;
            border-radius: 5px;
            font-size: 14px;
        }

        .ui-checkbox {
            display: flex;
            align-items: center;
        }

        .ui-checkbox input {
            margin-right: 5px;
        }

        .btn-primary {
            background-color: #227034;
            border-color: #227034;
            color: white;
            padding: 12px;
            border-radius: 5px;
            text-align: center;
            width: 100%;
        }

        .btn-primary:hover {
            background-color: #227034 !important;
            cursor: pointer;
        }

        label {
            font-size: 15px;
            color: black;
            font-weight: bold;
            color: white;
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .content {
                padding: 20px;
                width: 90%;
            }

            h2.login-title {
                font-size: 20px;
            }
        }

        @media (max-width: 576px) {
            .form-control {
                padding: 10px 15px;
            }

            .btn-primary {
                padding: 10px;
            }
        }

        .bg-silver-300 {
            background-color: #fff !important;
        }
    </style>
</head>

<body class="bg-silver-300">
    <div class="content">
        <form id="login-form" method="POST" action="admin/user_insert.php">
            <h2 class="login-title mb-5 text-dark">User Sinup</h2>
            <div class="form-group mb-0">
                <div class="input-group-icon right">
                    <label for="email">Name</label>
                    <div class="input-icon mt-3"><img width="20" height="20" src="https://img.icons8.com/ios-glyphs/30/737373/user--v1.png" alt="user--v1"/></div>
                    <input type="text" name="name" class="form-control" placeholder="Enter your Name" required>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group-icon right">
                    <label for="email">Email</label>
                    <div class="input-icon"><i class="fa fa-envelope mt-4"></i></div>
                    <input type="email" name="email" class="form-control" placeholder="Enter your Email" required>
                </div>
            </div>
            <div class="form-group mt-4" style="position: relative;">
                <input type="password" id="password" name="password" class="form-control" placeholder="Enter Password">
                <img id="togglePassword" src="https://img.icons8.com/ios-filled/50/737373/hide.png"
                    alt="Hide/Show Password"
                    style="position: absolute; right: 8px; top: 50%; transform: translateY(-50%); cursor: pointer; width: 25px; height: 25px;">
            </div>
          
            <div class="form-group mt-4" style="position: relative; margin-top: 15px;">
                <input type="password" id="confirmPassword" name="confirm-password" class="form-control"
                    placeholder="Enter Confirm Password">
                <img id="toggleConfirmPassword" src="https://img.icons8.com/ios-filled/50/737373/hide.png"
                    alt="Hide/Show Confirm Password"
                    style="position: absolute; right: 8px; top: 50%; transform: translateY(-50%); cursor: pointer; width: 25px; height: 25px;">
            </div>

            <div class="form-group d-flex justify-content-between mb-0">
                <label class="ui-checkbox ui-checkbox-info text-dark">
                    <input type="checkbox">
                    <span class="input-span"></span> Remember me
                </label>
            </div>
            <div class="form-group mt-2">
                <button type="submit" name="Submit"
                    class="btn btn-primary btn-block text-white mt-3 mb-0 fw-bold fs-4 mt-5">Register</button>
            </div>
        </form>
    </div>

    <!-- CORE PLUGINS -->
    <script src="admin/assets/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="admin/assets/vendors/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
    <script src="admin/assets/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL PLUGINS -->
    <script src="admin/assets/vendors/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src="admin/assets/js/app.js" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script>
        const password = document.getElementById('password');
        const toggle = document.getElementById('togglePassword');

        toggle.addEventListener('click', () => {
            if (password.type === 'password') {
                password.type = 'text';
                toggle.src = "https://img.icons8.com/ios-filled/50/737373/visible.png";
            } else {
                password.type = 'password';
                toggle.src = "https://img.icons8.com/ios-filled/50/737373/hide.png";
            }
        });

        const confirmPassword = document.getElementById('confirmPassword');
        const toggleConfirm = document.getElementById('toggleConfirmPassword');

        toggleConfirm.addEventListener('click', () => {
            if (confirmPassword.type === 'password') {
                confirmPassword.type = 'text';
                toggleConfirm.src = "https://img.icons8.com/ios-filled/50/737373/visible.png";
            } else {
                confirmPassword.type = 'password';
                toggleConfirm.src = "https://img.icons8.com/ios-filled/50/737373/hide.png";
            }
        });
    </script>
</body>

</html>