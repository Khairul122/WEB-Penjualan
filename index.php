<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login</title>
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Toastr CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />
    <!-- Custom styles for this specific design -->
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f9f9f9;
            font-family: 'Nunito', sans-serif;
        }

        .login-container {
            background-color: #f5f5f5;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
        }

        .login-container h1 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group input {
            width: calc(100% - 20px);
            padding: 10px;
            border-radius: 30px;
            border: 1px solid #ccc;
            outline: none;
            background-color: #e0e0e0;
        }

        .form-group input[type="password"] {
            padding-right: 40px;
        }

        .login-container button {
            width: 100%;
            padding: 10px;
            border-radius: 30px;
            border: none;
            background-color: #d68c6c;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }

        .credentials,
        .footer {
            position: absolute;
            padding: 10px 20px;
            background-color: #d68c6c;
            color: #fff;
            border-radius: 10px;
        }

        .credentials {
            top: 20px;
            right: 20px;
        }

        .footer {
            bottom: 20px;
            left: 20px;
        }
    </style>
</head>

<body>

    <div class="login-container">
        <h1>Login Admin</h1>
        <form onsubmit="login(event)">
            <div class="form-group">
                <input type="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Email">
            </div>
            <div class="form-group">
                <input type="password" id="exampleInputPassword" placeholder="Password">
            </div>
            <button type="submit">Login</button>
        </form>
    </div>

    <div class="credentials">
        <h4>CREDENTIALS</h4>
        <br>
        <p>Email : admin@gmail.com</p>
        <p>Password : 12345678</p>
    </div>

    <div class="footer">
        <p>© 2024 Sri Sutriyani</p>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <!-- Toastr JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }

        async function login(event) {
            event.preventDefault(); // Prevent the default form submission
            const email = document.getElementById('exampleInputEmail').value;
            const password = document.getElementById('exampleInputPassword').value;

            const response = await fetch('http://localhost/backend-penjualan/AdminAPI.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    action: 'login',
                    email: email,
                    password: password
                })
            });

            const result = await response.json();

            if (result.status === 'success') {
                toastr.success('Login berhasil!', 'Success');
                setTimeout(function () {
                    window.location.href = 'home.php';
                }, 2000); // Tunggu 2 detik sebelum redirect
            } else {
                toastr.error(result.message, 'Error');
            }
        }
    </script>
</body>

</html>
