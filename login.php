<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap Icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />

</head>

<body>

    <section class="page-section" id="contact">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-8 col-xl-6 text-center">
                <h2 class="mt-0">Login Perpus Online</h2>
                <hr class="divider" />
            </div>
            </div>
            <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
            <div class="col-lg-6">
                <form action="proses_login.php" method="post">
                <!-- username input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="username" type="text" placeholder="Enter your username..." name="username" value="">
                        <label for="username">Username</label>
                    </div>
                <!-- Email address input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="password" type="password" placeholder="..." name="password">
                        <label for="password">Password</label>
                    </div>
                <!-- Submit Button-->
                    <div class="d-grid">
                        <button class="btn btn-primary" id="submitButton" type="submit">Login</button>
                    </div>
                </form>
            </div>
            </div> 
        </div>
    </section>

</body>