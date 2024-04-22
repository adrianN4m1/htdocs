<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Contacts - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
    <link rel="stylesheet" href="assets/css/Roboto.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/Banner-Heading-Image-images.css">
    <link rel="stylesheet" href="assets/css/Button-modal-ecommerce-modal-ecommerce-1.css">
    <link rel="stylesheet" href="assets/css/Button-modal-ecommerce-modal-ecommerce.css">
    <link rel="stylesheet" href="assets/css/Dynamic-Table.css">
    <link rel="stylesheet" href="assets/css/shopping-ecommerce-products.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md sticky-top navbar-shrink py-3" id="mainNav">
    <div class="container"><a class="navbar-brand d-flex align-items-center" href="/"><span class="bs-icon-sm bs-icon-circle bs-icon-primary shadow d-flex justify-content-center align-items-center me-2 bs-icon"><i class="fas fa-gas-pump"></i></span><span>Starubigaz</span></a>
            <div class="collapse navbar-collapse" id="navcol-1" style="margin-right: 0px;">
            <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php?user_id=<?php include('parameters.php')?>">Home</a></li>
                    <li class="nav-item"><a class="nav-link active" href="buy_list.php?user_id=<?php include('parameters.php')?>">Buy</a></li>
                    <li class="nav-item"><a class="nav-link" href="rewards.php?user_id=<?php include('parameters.php')?>">Rewards</a></li>
                    <li class="nav-item"><a class="nav-link" href="transactions.php?user_id=<?php include('parameters.php')?>">Transactions</a></li>
                    <li class="nav-item"><a class="nav-link" href="settings.php?user_id=<?php include('parameters.php')?>">Settings</a></li>
                </ul>
                </div><a href="cart.php?user_id=<?php include('parameters.php')?>"><i class="fas fa-shopping-bag" style="font-size: 20px;color: var(--bs-yellow);margin-right: 6px;"></i></a><span><?php include('getlistcount.php')?></span>
        </div>
    </nav>
    <section class="py-5">
        <div class="container py-5">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <p class="fw-bold text-success mb-2">Customer-level</p>
                    <h2 class="fw-bold">Manage your Account</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row" style="border: 1px solid var(--bs-gray-400);border-radius: 8px;">
                <div class="col-md-6" style="border-radius: 8px;border: 1px none var(--bs-gray-400);">
                    <section class="py-5">
                        <div class="container">
                            <div class="row mb-1" style="padding-bottom: 2px;margin-bottom: 0px;">
                                <div class="col-md-8 col-xl-6 text-center mx-auto">
                                    <p class="fw-bold text-success mb-2">Personal Details</p>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="col">
                                    <div>
                                        <form class="p-3 p-xl-4" method="post">
                                            <div class="mb-3">
                                                <p style="margin-bottom: 0px;">Username</p><input class="form-control" type="text" id="name-1" name="first-name" placeholder="SevNaMukhangKalapatix82">
                                            </div>
                                            <div class="mb-3">
                                                <p style="margin-bottom: 0px;">First Name</p><input class="form-control" type="text" id="name-6" name="first-name" placeholder="Sev">
                                            </div>
                                            <div class="mb-3">
                                                <p style="margin-bottom: 0px;">Last Name</p><input class="form-control" type="text" id="name-2" name="first-name" placeholder="Constantino">
                                            </div>
                                            <div class="mb-3">
                                                <p style="margin-bottom: 0px;">Mobile Number</p><input class="form-control" type="text" id="name-5" name="mobile-number" placeholder="09876543210">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-md-6" style="border-radius: 8px;border: 1px none var(--bs-gray-400);">
                    <section class="py-5">
                        <div class="container">
                            <div class="row mb-1" style="padding-bottom: 2px;margin-bottom: 0px;">
                                <div class="col-md-8 col-xl-6 text-center mx-auto">
                                    <p class="fw-bold text-success mb-2">Credentials</p>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="col">
                                    <div>
                                        <form class="p-3 p-xl-4" method="post">
                                            <div class="mb-3">
                                                <p style="margin-bottom: 0px;">email</p><input class="form-control" type="text" id="name-4" name="first-name" placeholder="Sev">
                                            </div>
                                            <div class="mb-3">
                                                <p style="margin-bottom: 0px;">password</p><input class="form-control" type="password" value="downtownkinaladgad">
                                            </div>
                                            <hr>
                                            <div class="mb-3">
                                                <p style="margin-bottom: 0px;">re-enter passwod&nbsp;&nbsp;</p><input class="form-control" type="password">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section><button class="btn btn-primary text-bg-primary float-end" type="button" style="margin-top: 0px;">Save Changes</button>
                </div>
                <div class="col"></div>
                <div class="col-md-6"></div>
            </div>
        </div>
    </section>
    <footer class="ms-auto bg-primary-gradient">
        <div class="container py-4 py-lg-5" style="margin-top: 20px;">
            <hr>
            <div class="text-muted d-flex justify-content-between align-items-center pt-3">
                <p class="mb-0">Copyright © 2024 Starubigaz</p>
            </div>
        </div>
    </footer>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bold-and-bright.js"></script>
    <script src="assets/js/Button-modal-ecommerce-jquery.touchSwipe.min.js"></script>
    <script src="assets/js/Dynamic-Table-dynamic-table.js"></script>
</body>

</html>