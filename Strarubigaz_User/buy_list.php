<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Services - Brand</title>
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
                    <li class="nav-item"><a class="nav-link" href="contacts.php?user_id=<?php include('parameters.php')?>">Settings</a></li>
                </ul>
                </div><a href="cart.php?user_id=<?php include('parameters.php')?>"><i class="fas fa-shopping-bag" style="font-size: 20px;color: var(--bs-yellow);margin-right: 6px;"></i></a><span>0</span>
        </div>
    </nav>
    <div class="container py-5" style="padding-bottom: 0px;margin-bottom: -45px;">
        <div class="row mb-4 mb-lg-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2 class="fw-bold" style="font-style: italic;">"Fill up with ease, drive with peace"</h2>
            </div>
        </div>
        <hr>
    </div>
    <div class="container">
        <div class="row">
            <!-- <div class="col-md-3" style="padding-bottom: 20px;">
                <div class="d-xl-flex justify-content-xxl-center align-items-xxl-center" style="height: 200px;background: rgba(197,197,197,0.19);border-radius: 10px;"><img class="border rounded border-1" style="height: 100%;" src="assets/img/products/2.jpg"></div>
                <div>
                    <h6 style="font-weight: bold;color: var(--bs-gray-700);padding-top: 10px;">Backpack ni Satanas</h6>
                </div>
                <div class="d-flex justify-content-between justify-content-xxl-end">
                    <div class="d-inline"><span style="font-size: 9px;color: rgb(193,193,193);">Items available :&nbsp;</span><span style="font-weight: bold;">100</span></div>
                </div>
                <div class="row">
                    <div class="col col-md5"><a class="btn btn-primary" role="button" style="padding-right: 10px;padding-left: 10px;background: var(--bs-btn-active-bg);color: rgb(255,255,255);border-style: none;border-radius: 10px;width: 100%;margin-top: 10px;font-size: 12px;--bs-body-font-weight: normal;" href="item_information.html">Check Item</a></div>
                </div>
            </div> -->
            <?php include("php/buy_list/buy_list_display.php")?>
        </div>
    </div>
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