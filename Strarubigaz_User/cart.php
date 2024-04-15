<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Pricing - Brand</title>
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
                </div><a href="cart.php?user_id=<?php include('parameters.php')?>"><i class="fas fa-shopping-bag" style="font-size: 20px;color: var(--bs-yellow);margin-right: 6px;"></i></a><span><?php include('getlistcount.php')?></span>
        </div>
    </nav>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="padding-bottom: 27px;">
                    <h1>Your Tank</h1>
                    <p class="d-inline">Not Ready to checkout?&nbsp;</p><a href="rewards.html" style="font-style: italic;color: var(--bs-gray-dark);">Continue Shopping</a>
                </div>
            </div>
            <div class="row">
            <div class="col-7 col-md-6">
                <!-- <div class="col-7 col-md-6">
                    <div class="row" style="padding-top: 12px;padding-right: 20px;padding-left: 20px;padding-bottom: 20px;margin-bottom: -20px;">
                        <div class="col">
                            <div class="row">
                                <div class="col col-md-3" style="text-align: center;">
                                    <div style="width: 100%;height: 100%;"><img src="assets/img/products/1.jpg" style="border-radius: 10px;width: 100%;height: 100%;" height="600px"></div>
                                </div>
                                <div class="col">
                                    <h4>Lunchbox na blue</h4>
                                    <p class="d-inline">Quantity :&nbsp;</p><span>2</span>
                                    <div class="d-flex justify-content-between align-items-xxl-center" style="padding-top: 0px;">
                                        <p class="d-inline" style="font-size: 20px;font-weight: bold;margin-top: 20px;"><i class="fab fa-galactic-republic"></i>&nbsp;4.12</p><a href="#" style="color: var(--bs-red);font-size: 12px;text-decoration: underline;">remove</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                
                <?php include("php/cart/cart_list_display.php")?>
                </div>
                <div class="col-md-6">
                    <div class="sticky-top" style="padding-top: 80px;">
                        <h3 style="padding-top: 10px;margin-bottom: 50px;"><strong>Order Summary</strong></h3>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Item</th>
                                        <th>quantity</th>
                                        <th>price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- <tr style="border-color: rgb(255,255,255);">
                                        <td>Backpack ni Satanas</td>
                                        <td>1</td>
                                        <td>12.34</td>
                                    </tr>
                                    <tr style="border-color: rgb(255,255,255);">
                                        <td>Lunchbox na blue</td>
                                        <td>2</td>
                                        <td>8.12</td>
                                    </tr> -->
                                    <?php include("php/cart/cart_list_total.php")?>
                </div>
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