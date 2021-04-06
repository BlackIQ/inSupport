<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Narbon Support - Login</title>
    <!--<script src="https://kit.fontawesome.com/4a679d8ec0.js" crossorigin="anonymous"></script>-->
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 login-section-wrapper">
                    <div class="login-wrapper my-auto">
                        <h1 class="display-6">Login to your account</h1>
                        <hr class="border-dark border">
                        <br>
                        <form action="#!">
                            <div>
                                <div>
                                    <div class="form-group mb-4">
                                        <label for="code" class="text-muted">Personal Code</label>
                                        <input type="text" name="code" id="code" class="form-control border-dark text-dark" placeholder="Personal Code">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="password" class="text-muted">Password</label>
                                        <input type="password" name="password" id="password" class="form-control border-dark text-dark" placeholder="Passsword">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <button name="login" id="login" class="btn btn-dark" type="submit">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>