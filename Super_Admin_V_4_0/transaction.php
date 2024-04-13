<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Table - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/-Login-form-Page-BS4--Login-form-Page-BS4.css">
    <link rel="stylesheet" href="assets/css/Add-Another-Button-1.css">
    <link rel="stylesheet" href="assets/css/Add-Another-Button.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Basic-icons.css">
    <link rel="stylesheet" href="assets/css/Projects-Grid-images.css">
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
                <li class="nav-item"><a class="nav-link" href="index.php"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="inventory.php"><i class="fas fa-database"></i><span>Inventory</span></a><a class="nav-link" href="suppliers.php"><i class="fas fa-truck"></i><span>Suppliers</span></a><a class="nav-link" href="branches.php"><i class="fas fa-warehouse"></i><span>Branches</span></a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"><a class="nav-link" href="branch_owners.php"><i class="fas fa-user-tie"></i><span>Branch Admins</span></a><a class="nav-link active" href="rewards.php"><i class="fas fa-award"></i><span>Rewards</span></a></li>
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
                                            class="d-none d-lg-inline me-2 text-gray-600 small">Super Admin</span><img class="border rounded-circle img-profile"
                                            src="assets/img/avatars/avatar1.jpeg"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a
                                            class="dropdown-item" href="../profile.html"><i
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
                <div class="container-fluid">
                    <div class="card shadow">
                        <div class="card-header py-3" style="display: inline-block;">
                            <p class="text-primary m-0 fw-bold">Transaction</p>
                        </div>
                        <div class="card-body" style="height: auto;">
                            <div class="row">
                                <div class="col" style="text-align: right;">
                                    <div class="text-md-end dataTables_filter" id="dataTable_filter-1">
                                        <p style="text-align: left;padding-bottom: 0px;margin-bottom: 0px;">Customer Reference Number</p><label class="form-label" style="width: 100%;"><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="202010815" style="width: 100%;"></label>
                                    </div>
                                </div>
                                <div class="col" style="text-align: right;">
                                    <div class="text-md-end dataTables_filter" id="dataTable_filter-2">
                                        <p style="text-align: left;padding-bottom: 0px;margin-bottom: 0px;">Name</p><label class="form-label" style="width: 100%;"><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Sev Constantino" style="width: 100%;padding-bottom: 0px;" readonly="" disabled=""></label>
                                        <p style="text-align: right;padding-bottom: 0px;margin-bottom: 0px;color: var(--bs-blue);font-size: 12px;padding-top: 0px;margin-top: 0px;">Auto Generated Text</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="padding-bottom: 23px;">
                                <div class="col" style="text-align: right;">
                                    <div class="text-md-end dataTables_filter" id="dataTable_filter-3">
                                        <p style="text-align: left;padding-bottom: 0px;margin-bottom: 0px;">Quantity</p><input type="number" style="width: 100%;color: var(--bs-secondary);border-radius: 0;border-style: none;border-color: var(--bs-card-bg);border-top-style: solid;border-top-color: var(--bs-card-border-color);border-right-style: solid;border-right-color: var(--bs-card-border-color);border-bottom-style: solid;border-bottom-color: var(--bs-card-border-color);border-left-style: solid;border-left-color: var(--bs-card-border-color);border-top-left-radius: 4;border-top-right-radius: 4;border-bottom-right-radius: 4;border-bottom-left-radius: 4;">
                                    </div>
                                </div>
                                <div class="col" style="text-align: right;">
                                    <div class="text-md-end dataTables_filter" id="dataTable_filter-4">
                                        <p style="text-align: left;padding-bottom: 0px;margin-bottom: 0px;">Total Price</p>
                                        <div style="display: flex;"><span style="display: inline;position: static;text-align: left;font-weight: bold;margin-right: 6px;">P</span><input class="border-2" type="number" style="width: 100%;color: var(--bs-secondary);border-radius: 0;border-style: none;border-color: var(--bs-card-bg);border-top-style: solid;border-top-color: var(--bs-card-border-color);border-right-style: solid;border-right-color: var(--bs-card-border-color);border-bottom-style: solid;border-bottom-color: var(--bs-card-border-color);border-left-style: solid;border-left-color: var(--bs-card-border-color);border-top-left-radius: 80;border-top-right-radius: 4;border-bottom-right-radius: 4;border-bottom-left-radius: 4;"></div>
                                    </div>
                                </div>
                                <div class="col" style="text-align: right;">
                                    <div class="text-md-end dataTables_filter" id="dataTable_filter-5">
                                        <p style="text-align: left;padding-bottom: 0px;margin-bottom: 0px;">Amount Paid</p>
                                        <div style="display: flex;"><span style="display: inline;position: static;text-align: left;font-weight: bold;margin-right: 6px;">P</span><input class="border-2" type="number" style="width: 100%;color: var(--bs-secondary);border-radius: 0;border-style: none;border-color: var(--bs-card-bg);border-top-style: solid;border-top-color: var(--bs-card-border-color);border-right-style: solid;border-right-color: var(--bs-card-border-color);border-bottom-style: solid;border-bottom-color: var(--bs-card-border-color);border-left-style: solid;border-left-color: var(--bs-card-border-color);border-top-left-radius: 80;border-top-right-radius: 4;border-bottom-right-radius: 4;border-bottom-left-radius: 4;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="padding-bottom: 23px;">
                                <div class="col" style="text-align: right;">
                                    <div class="text-md-end dataTables_filter" id="dataTable_filter-6">
                                        <p style="text-align: left;padding-bottom: 0px;margin-bottom: 0px;">Reference Number(for Online payments only)</p><input type="number" style="width: 100%;color: var(--bs-secondary);border-radius: 0;border-style: none;border-color: var(--bs-card-bg);border-top-style: solid;border-top-color: var(--bs-card-border-color);border-right-style: solid;border-right-color: var(--bs-card-border-color);border-bottom-style: solid;border-bottom-color: var(--bs-card-border-color);border-left-style: solid;border-left-color: var(--bs-card-border-color);border-top-left-radius: 4;border-top-right-radius: 4;border-bottom-right-radius: 4;border-bottom-left-radius: 4;">
                                    </div>
                                </div>
                                <div class="col" style="text-align: right;">
                                    <div class="text-md-end dataTables_filter" id="dataTable_filter-8"></div>
                                    <div class="text-md-end dataTables_filter" id="dataTable_filter-7">
                                        <p style="text-align: left;padding-bottom: 0px;margin-bottom: 0px;">Change</p>
                                        <div style="display: flex;"><span style="display: inline;position: static;text-align: left;font-weight: bold;margin-right: 6px;">P</span><input class="border-2" type="number" style="width: 100%;color: var(--bs-secondary);border-radius: 0;border-style: none;border-color: var(--bs-card-bg);border-top-style: solid;border-top-color: var(--bs-card-border-color);border-right-style: solid;border-right-color: var(--bs-card-border-color);border-bottom-style: solid;border-bottom-color: var(--bs-card-border-color);border-left-style: solid;border-left-color: var(--bs-card-border-color);border-top-left-radius: 80;border-top-right-radius: 4;border-bottom-right-radius: 4;border-bottom-left-radius: 4;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="padding-bottom: 23px;">
                                <div class="col" style="text-align: right;"><button class="btn btn-outline-primary text-truncate text-end float-none float-sm-none add-another-btn" data-bss-hover-animate="pulse" type="button" style="width: 159px;position: relative;">Add Transaction<i class="fas fa-plus-circle edit-icon"></i></button></div>
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
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>