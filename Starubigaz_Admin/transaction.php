<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/-Login-form-Page-BS4--Login-form-Page-BS4.css">
    <link rel="stylesheet" href="assets/css/Add-Another-Button-1.css">
    <link rel="stylesheet" href="assets/css/Add-Another-Button.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Basic-icons.css">
    <link rel="stylesheet" href="assets/css/Projects-Grid-images.css">
    <script src="js/search.js"></script>
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="width: 100%;">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-gas-pump" style="transform: scale(1);"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>Starubigaz</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link" href="index.php?user_id=<?php include('parameters.php')?>"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="inventory.php?user_id=<?php include('parameters.php')?>"><i class="fas fa-database"></i><span>Products</span></a><a class="nav-link active" href="branch_information.php?user_id=<?php include('parameters.php')?>"><i class="fas fa-info"></i><span>&nbsp;Branch Info</span></a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"><a class="nav-link" href="rewards.php?user_id=<?php include('parameters.php')?>"><i class="fas fa-award"></i><span>Rewards</span></a><a class="nav-link" href="transaction.php?user_id=<?php include('parameters.php')?>"><i class="fas fa-cash-register"></i><span>Transactions</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top" style="margin: 0px;padding: 0px;">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <ul class="navbar-nav flex-nowrap ms-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><i class="fas fa-search"></i></a>
                                <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in" aria-labelledby="searchDropdown">
                                    <form class="me-auto navbar-search w-100">
                                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                            <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link"
                                        aria-expanded="false" data-bs-toggle="dropdown" href="#"><span
                                            class="d-none d-lg-inline me-2 text-gray-600 small"><?php include("getname.php")?></span><img class="border rounded-circle img-profile"
                                            src="assets/img/avatars/avatar1.jpeg"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a
                                            class="dropdown-item" href="profile.php?user_id=<?php include ('parameters.php') ?>"><i
                                                class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a><a
                                            class="dropdown-item" href="#"><i
                                                class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Settings</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="/login.php"><i
                                                class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="row gy-4" style="margin-bottom: 20px;padding-top: 0px;margin-top: -24px;margin-left: 20px;margin-right: 20px;">
                    <div class="col">
                        <h3>Transaction History</h3>
                        <div class="row">
                            <div class="col col-md-5"><input class="d-xxl-flex align-items-xxl-center form-control form-control-sm" type="search" aria-controls="dataTable" placeholder="Search" style="margin-top: 12px;margin-bottom: 8px;" id="searchInput" onkeyup="searchTable()"></div>
                        </div>
                        <div style="height: 60vh;overflow-y: scroll;">
                            <hr>
                            <div class="table-responsive">
                                <table class="table" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>Transaction ID</th>
                                            <th>Date</th>
                                            <th>Customer Name</th>
                                            <th>Points Earned</th>
                                            <th>Total Amount</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php include("php/transaction/transaction_display.php")?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © Starubikals 2024</span></div>
                </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="edit-award-modal" style="border-style: solid;">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Reward</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div style="padding-bottom: 0px;margin-bottom: 13px;"><input type="text" id="reward_id" placeholder="Reward ID" name="username" style="width: 100%;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;" disabled="">
                        <p class="text-end" style="margin: 0px;padding: 0px;border-color: var(--bs-modal-border-color);color: var(--bs-blue);font-size: 10px;">This is an auto-generated text</p>
                        <hr>
                    </div>
                    <div style="padding-bottom: 0px;margin-bottom: 14px;"></div>
                    <div style="padding-bottom: 0px;margin-bottom: 14px;"></div>
                    <div style="padding-bottom: 0px;margin-bottom: 14px;">
                        <p style="margin-bottom: -3px;font-size: 10px;">Reward Name</p><input type="text" id="username-1" placeholder="Mannequin" name="mobile_number" style="width: 100%;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;">
                    </div>
                    <div style="padding-bottom: 0px;margin-bottom: 14px;">
                        <p style="margin-bottom: -3px;font-size: 10px;">Point Value</p>
                        <div><span style="margin-right: 3px;">P</span><input type="text" id="username-4" placeholder="60.02" name="username" style="--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;"></div>
                    </div>
                    <div style="padding-bottom: 0px;margin-bottom: 14px;">
                        <p style="margin-bottom: -3px;font-size: 10px;">Description(specify...)</p><textarea style="width: 100%;height: 81px;"></textarea>
                    </div>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button><button class="btn btn-primary" type="button">Save</button></div>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="receipt-modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Receipt - transaction_id</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <div style="margin-bottom: 10px;">
                                <p class="d-inline">Order ID :&nbsp;</p><span style="font-weight: bold;">0x9536</span>
                            </div>
                        </div>
                        <div class="col">
                            <div style="margin-bottom: 10px;">
                                <p class="d-inline">Date :&nbsp;</p><span style="font-weight: bold;">10/23/2024</span>
                            </div>
                        </div>
                    </div>
                    <div style="margin-bottom: 10px;">
                        <p class="d-inline">Points Earned :&nbsp;</p><span style="font-weight: bold;">9.78</span>
                    </div>
                    <div style="margin-bottom: 10px;">
                        <p class="d-inline">Customer name :&nbsp;</p><span style="font-weight: bold;">Sev Constantino</span>
                    </div>
                    <hr>
                    <div style="margin-bottom: 10px;"><span style="font-weight: bold;color: rgb(133,135,150);">Order Summary</span>
                        <div style="height: 40vh;overflow-y: scroll;">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th class="text-end">price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>x4</td>
                                            <td>Diesel</td>
                                            <td class="text-end" style="font-weight: bold;">P100</td>
                                        </tr>
                                        <tr>
                                            <td>x2</td>
                                            <td>Gasoline</td>
                                            <td class="text-end" style="font-weight: bold;">P12</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div>
                        <p class="d-inline" style="font-weight: bold;color: rgb(65,65,65);font-size: 20px;">Total :&nbsp;</p>
                        <p class="d-inline" style="color: rgb(65,65,65);font-weight: bold;font-size: 20px;">P170.00</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>