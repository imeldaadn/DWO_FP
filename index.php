<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ADW2022 - Dashboard</title>
    <link rel="icon" href="img/logo.png">
    
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles and charts for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <script type="text/javascript" src="Chart.js"></script>

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/data.js"></script>
    <script src="https://code.highcharts.com/modules/drilldown.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>

    <!-- <link rel="stylesheet" href="/drilldown.css"/> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - ADW2022 -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-warehouse"></i> <!-- icon adw -->
                </div>
                <div class="sidebar-brand-text mx-3">DWO</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i> <!-- icon sub bab -->
                    <span>Dashboard</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider mt-2">

            <div class="sidebar-heading">
                OLAP
            </div>

            <li class="nav-item">
                <a class="nav-link" href="olap-production.php">
                    <i class="fa fa-boxes"></i>
                    <span>Production</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="olap-sales.php">
                    <i class="fa fa-chart-line"></i>
                    <span>Sales</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider mt-2">


            <div class="sidebar-heading">
                Chart Menu
            </div>

            <!-- Item - Items -->
            <li class="nav-item">
                <a class="nav-link" href="product.php">
                    <i class="fa fa-boxes"></i>
                    <span>Product Chart</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="sales.php">
                    <i class="fa fa-chart-line"></i>
                    <span>Sales Chart</span>
                </a>
            </li>
            

            <li class="nav-item">
                <a class="nav-link" href="customer.php">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Customer Chart</span>
                </a>
            </li>

            <!-- <li class="nav-item">
                <a class="nav-link" href="employee.php">
                    <i class="fas fa-fw fa-user-tie"></i>
                    <span>Employee Chart</span>
                </a>
            </li> -->

            
            <!-- <li class="nav-item">
                <a class="nav-link" href="shipment.php">
                    <i class="fas fa-ship"></i>
                    <span>Shipment Chart</span>
                </a>
            </li> -->

            

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline mt-4">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <div class="input-group" style="margin-left: 10px; color: #000000; font-weight: 500; font-size: 15pt">
                            Data Warehouse AdventureWorks dan OLAP
                    </div>
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <img class="img-profile rounded-circle"
                                    src="img/user.webp">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <!-- <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div> -->
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    LogOut
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-900">Summary</h1>
                       
                    </div>

                    <!-- Content Row 1 Summary -->
                    <div class="row">

                        <!-- Total Income Card -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col auto">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Products</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-900">
                                                <?php  
                                                    $mysqli = mysqli_connect("localhost","root","","dw_production");
                                                    $sql = "SELECT COUNT(product_id) as tot_produk from product";
                                                    $query = mysqli_query($mysqli,$sql);
                                                        while($row2=mysqli_fetch_array($query)){
                                                            echo number_format($row2['tot_produk']);
                                                        }
                                                ?>  
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-boxes fa-2x text-gray-400"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Total Employees Card -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total Transactions Product</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-900">
                                                <?php
                                                    $sql = "SELECT COUNT(transaction_id) as tot_trans from transaction";
                                                    $query = mysqli_query($mysqli,$sql);
                                                        while($row2=mysqli_fetch_array($query)){
                                                            echo number_format($row2['tot_trans'],0,".",",");
                                                        }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-users fa-2x text-gray-400"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Total Products Card -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Total Customers</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-900">
                                                <?php
                                                    $mysqli = mysqli_connect("localhost","root","","dw_sales");
                                                    $sql = "SELECT COUNT(customer_id) as tot_cust from customer";
                                                    $query = mysqli_query($mysqli,$sql);
                                                        while($row2=mysqli_fetch_array($query)){
                                                            echo number_format($row2['tot_cust'],0,".",",");
                                                        }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                           <i class="fa fa-user-tie fa-2x text-gray-400"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>            

                        <!-- Total Transactions Card -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Sales Order</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-900">
                                                <?php
                                                    $sql = "SELECT COUNT(salesOrder_id) as tot_sales from fact_sales";
                                                    $query = mysqli_query($mysqli,$sql);
                                                        while($row2=mysqli_fetch_array($query)){
                                                            echo number_format($row2['tot_sales'],0,".",",");
                                                        }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                           <i class="fa fa-cash-register fa-2x text-gray-400"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Total Transactions Card -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Incomes</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-900">
                                                <?php
                                                    $sql = "SELECT SUM(sub_total) as tot_incomes from fact_sales";
                                                    $query = mysqli_query($mysqli,$sql);
                                                        while($row2=mysqli_fetch_array($query)){
                                                            echo '$'.number_format($row2['tot_incomes']);
                                                        }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                           <i class="fa fa-dollar-sign fa-2x text-gray-400"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-900">Mondrian</h1>
                       
                    </div>

                    <!-- Content Row 2 OLAP -->
                    <div class="d-grid gap-2 d-md-block mb-4">
                        <button class="btn shadow mr-4" type="button" onclick="window.location.href='olap-production.php'" style="background-color: orange; height: 50px; width: 560px; color: white;"><b>OLAP Production</b></button>
                        <button class="btn shadow" type="button" onclick="window.location.href='olap-sales.php'" style="background-color: orange; height: 50px; width: 560px; color: white;"><b>OLAP Sales</b></button>
                    </div>

                    <!-- Collapsable Card -->
                    <!-- <div class="card shadow mb-4"> -->
                            
                            <!-- Card Header - Accordion -->
                            <!-- <a href="" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                                <h6 class="m-0 font-weight-bold text-dark">Mondrian OLAP - Production</h6>
                            </a> -->

                            <!-- Card Content - Collapse -->
                            <!-- <div class="collapse" id="collapseCardExample">
                                <div class="card-body">
                                    <iframe name="mondrian" src="http://localhost:8080/mondrian/" style="height: 400px;; width:100%; border:none; align-content:center"> </iframe>
                                </div>
                            </div> -->
                   <!--  </div> -->


                    <!-- <div class="row"> -->
                        <!-- <iframe name="mondrian" src="http://localhost:8080/mondrian/index.html" style="height:300px; width:100%; border:none; align-content:center"> </iframe> -->
                        <!-- <iframe name="mondrian" src="http://localhost:8080/mondrian/testpage.jsp?query=dwoadw1" style="height:1000px; width:100%; border:none; align-content:center"> </iframe>
                    </div>         -->

                    <!-- CHART -->
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-900">Chart</h1>
                    </div>
                    <div class="row">
                            <!-- PIE CHART DRILLDOWN PRODUCTION -->
                            <div class="col-xl-8 col-lg-7">
                                <div class="card shadow mb-4">
                                    <!-- Card Header -->
                                    <div
                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">Total Penjualan Produk berdasarkan Type Transaksi</h6>
                                    </div>
                                    <!-- Card Body -->
                                    <div class="card-body-store">
                                        <div class="chart-area-store">
                                            <div id="canvas-holder" style="width:100%">
                                                <canvas id="chart-area"></canvas>
                                                <?php
                                                // Menghubungkan ke database
                                                $koneksi = mysqli_connect("localhost", "root", "", "dw_production");
                                                
                                                // Memeriksa koneksi database
                                                if (mysqli_connect_errno()) {
                                                    echo "Koneksi database gagal: " . mysqli_connect_error();
                                                    exit();
                                                }
                                                
                                                // Query untuk menghitung jumlah penjualan berdasarkan jenis transaksi
                                                $queryJumlahPenjualan = "SELECT type, sum(orderQty) as jumlah FROM fact_production fp  
                                                join transaction t on fp.transaction_id = t.transaction_id GROUP BY type";
                                                $resultJumlahPenjualan = mysqli_query($koneksi, $queryJumlahPenjualan);
                                                
                                                // Menyimpan jumlah penjualan dalam variabel
                                                $totalSalesOrder = 0;
                                                $totalWorkOrder = 0;
                                                
                                                // Mengekstrak nilai jumlah penjualan berdasarkan jenis transaksi
                                                while ($rowJumlahPenjualan = mysqli_fetch_array($resultJumlahPenjualan)) {
                                                    if ($rowJumlahPenjualan['type'] == 'Sales Order') {
                                                        $totalSalesOrder = (int)$rowJumlahPenjualan['jumlah'];
                                                    } elseif ($rowJumlahPenjualan['type'] == 'Work Order') {
                                                        $totalWorkOrder = (int)$rowJumlahPenjualan['jumlah'];
                                                    } elseif ($rowJumlahPenjualan['type'] == 'Purchase Order') {
                                                        $totalPurchaseOrder = (int)$rowJumlahPenjualan['jumlah'];
                                                    }
                                                }
                                                
                                                // Query untuk mengambil data drilldown sales order berdasarkan lokasi
                                                $querySalesOrderDrilldown = "SELECT location_name, sum(orderQty) as jumlah, type FROM fact_production fp 
                                                join location l on fp.location_id = l.location_id 
                                                join `transaction` t on fp.transaction_id = t.transaction_id 
                                                where type = 'Sales Order' GROUP BY location_name";
                                                $resultSalesOrderDrilldown = mysqli_query($koneksi, $querySalesOrderDrilldown);
                                                
                                                // Menyimpan data drilldown sales order dalam format yang sesuai
                                                $salesOrderDrilldownData = array();
                                                while ($rowSalesOrderDrilldown = mysqli_fetch_array($resultSalesOrderDrilldown)) {
                                                    $salesOrderDrilldownData[] = array(
                                                        $rowSalesOrderDrilldown['location_name'],
                                                        (int)$rowSalesOrderDrilldown['jumlah']
                                                    );
                                                }
                                                
                                                // Query untuk mengambil data drilldown work order berdasarkan lokasi
                                                $queryWorkOrderDrilldown = "SELECT location_name, sum(orderQty) as jumlah, type FROM fact_production fp 
                                                join location l on fp.location_id = l.location_id 
                                                join `transaction` t on fp.transaction_id = t.transaction_id 
                                                where type = 'Work Order' GROUP BY location_name";
                                                $resultWorkOrderDrilldown = mysqli_query($koneksi, $queryWorkOrderDrilldown);
                                                
                                                // Menyimpan data drilldown work order dalam format yang sesuai
                                                $workOrderDrilldownData = array();
                                                while ($rowWorkOrderDrilldown = mysqli_fetch_array($resultWorkOrderDrilldown)) {
                                                    $workOrderDrilldownData[] = array(
                                                        $rowWorkOrderDrilldown['location_name'],
                                                        (int)$rowWorkOrderDrilldown['jumlah']
                                                    );
                                                }

                                                // Query untuk mengambil data drilldown purchase order berdasarkan lokasi
                                                $queryPurchaseOrderDrilldown = "SELECT location_name, sum(orderQty) as jumlah, type FROM fact_production fp 
                                                join location l on fp.location_id = l.location_id 
                                                join `transaction` t on fp.transaction_id = t.transaction_id 
                                                where type = 'Purchase Order' GROUP BY location_name";
                                                $resultPurchaseOrderDrilldown = mysqli_query($koneksi, $queryPurchaseOrderDrilldown);
                                                
                                                // Menyimpan data drilldown purchase order dalam format yang sesuai
                                                $purchaseOrderDrilldownData = array();
                                                while ($rowPurchaseOrderDrilldown = mysqli_fetch_array($resultPurchaseOrderDrilldown)) {
                                                    $purchaseOrderDrilldownData[] = array(
                                                        $rowPurchaseOrderDrilldown['location_name'],
                                                        (int)$rowPurchaseOrderDrilldown['jumlah']
                                                    );
                                                }
                                                // Menutup koneksi database
                                                mysqli_close($koneksi);
                                                ?> 

                                                <script>
                                                    // Membuat grafik pie dengan menggunakan Highcharts
                                                Highcharts.chart('canvas-holder', {
                                                    chart: {
                                                        type: 'pie'
                                                    },
                                                    title: {
                                                        text: 'Total Penjualan Berdasarkan Type Transaction'
                                                    },
                                                    subtitle: {
                                                        text: 'Klik untuk melihat lebih detail Total penjualan  berdasarkan type transaction'
                                                    },
                                                    accessibility: {
                                                        announceNewData: {
                                                            enabled: true
                                                        },
                                                        point: {
                                                            valueSuffix: '%'
                                                        }
                                                    },
                                                    plotOptions: {
                                                        series: {
                                                            dataLabels: {
                                                                enabled: true,
                                                                format: '{point.name}: {point.y:.0f}'
                                                            }
                                                        }
                                                    },
                                                    tooltip: {
                                                        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                                                        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.0f}</b> of total<br/>'
                                                    },
                                                    series: [{
                                                        name: 'Total Penjualan by Type Transaction',
                                                        colorByPoint: true,
                                                        data: [{
                                                            name: 'Sales Order',
                                                            y: <?php echo $totalSalesOrder; ?>,
                                                            drilldown: 'salesorder'
                                                        }, {
                                                            name: 'Work Order',
                                                            y: <?php echo $totalWorkOrder; ?>,
                                                            drilldown: 'workorder'
                                                        }, {
                                                            name: 'Purchase Order',
                                                            y: <?php echo $totalPurchaseOrder; ?>,
                                                            drilldown: 'purchaseorder'
                                                        }]
                                                    }],
                                                    drilldown: {
                                                        series: [{
                                                            id: 'salesorder',
                                                            name: 'Total Penjualan Sales Order by Location',
                                                            data: <?php echo json_encode($salesOrderDrilldownData); ?>
                                                        }, {
                                                            id: 'workorder',
                                                            name: 'Total Penjualan Work Order by Location',
                                                            data: <?php echo json_encode($workOrderDrilldownData); ?>
                                                        }, {
                                                            id: 'purchaseorder',
                                                            name: 'Total Penjualan Purchase Order by Location',
                                                            data: <?php echo json_encode($purchaseOrderDrilldownData); ?>
                                                        }]
                                                    }
                                                });
                                                </script>
                                            </div>
                                            <figure class="highcharts-figure">
                                                <div id="container"></div>
                                                <p class="highcharts-description"></p>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- PIE CHART DRILLDOWN SALES -->
                            <div class="col-xl-8 col-lg-7">
                                <div class="card shadow mb-4">
                                    <!-- Card Header - Dropdown -->
                                    <div
                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">Total Transaksi berdasarkan Tipe Kartu Kredit Customer di suatu Territory</h6>
                                    </div>
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <div id="canvas-holder1" style="width:100%">
                                            <canvas id="chart-area"></canvas>
                                                <?php
                                                // Menghubungkan ke database
                                                $koneksi = mysqli_connect("localhost", "root", "", "dw_sales");
                                                
                                                // Memeriksa koneksi database
                                                if (mysqli_connect_errno()) {
                                                    echo "Koneksi database gagal: " . mysqli_connect_error();
                                                    exit();
                                                }
                                                
                                                // Query untuk menghitung jumlah penjualan berdasarkan tipe customer 'I'
                                                $querySalesOrder = "SELECT count(salesOrder_id) as amount, cardType
                                                from fact_sales
                                                group by cardType;";
                                                $resultSalesOrder = mysqli_query($koneksi, $querySalesOrder);
                                                
                                                // Menyimpan jumlah penjualan dalam variabel
                                                $totColonial = 0;
                                                $totDisti = 0;
                                                $totSuper = 0;
                                                $totVista = 0;
                                                
                                                // Mengekstrak nilai jumlah penjualan berdasarkan tipe customer 'S'
                                                while ($rowSalesOrder = mysqli_fetch_array($resultSalesOrder)) {
                                                    if ($rowSalesOrder['cardType'] == 'ColonialVoice') {
                                                        $totColonial = (int)$rowSalesOrder['amount'];
                                                    } elseif ($rowSalesOrder['cardType'] == 'Distinguish') {
                                                        $totDisti = (int)$rowSalesOrder['amount'];
                                                    } elseif ($rowSalesOrder['cardType'] == 'SuperiorCard') {
                                                        $totSuper = (int)$rowSalesOrder['amount'];
                                                    } elseif ($rowSalesOrder['cardType'] == 'Vista') {
                                                        $totVista = (int)$rowSalesOrder['amount'];
                                                    }
                                                }
                                                
                                                // Query untuk mengambil data drilldown sales order berdasarkan lokasi
                                                $queryCardColonialDrilldown = "SELECT count(salesOrder_id) as amount, cardType, st.name as Territory
                                                from fact_sales fs 
                                                join sales_territory st on st.territory_id = fs.territory_id 
                                                where cardType = 'ColonialVoice'
                                                group by st.name;";
                                                $resultCardColonialDrilldown = mysqli_query($koneksi, $queryCardColonialDrilldown);
                                                
                                                // Menyimpan data drilldown sales order dalam format yang sesuai
                                                $CardColonialDrilldownData = array();
                                                while ($rowCardColonialDrilldown = mysqli_fetch_array($resultCardColonialDrilldown)) {
                                                    $CardColonialDrilldownData[] = array(
                                                        $rowCardColonialDrilldown['Territory'],
                                                        (int)$rowCardColonialDrilldown['amount']
                                                    );
                                                }
                                                
                                                // Query untuk mengambil data drilldown work order berdasarkan lokasi
                                                $queryCardDistiDrilldown = "SELECT count(salesOrder_id) as amount, cardType, st.name as Territory
                                                from fact_sales fs 
                                                join sales_territory st on st.territory_id = fs.territory_id 
                                                where cardType = 'Distinguish'
                                                group by st.name;";
                                                $resultCardDistiDrilldown = mysqli_query($koneksi, $queryCardDistiDrilldown);
                                                
                                                // Menyimpan data drilldown work order dalam format yang sesuai
                                                $CardDistiDrilldownData = array();
                                                while ($rowCardDistiDrilldown = mysqli_fetch_array($resultCardDistiDrilldown)) {
                                                    $CardDistiDrilldownData[] = array(
                                                        $rowCardDistiDrilldown['Territory'],
                                                        (int)$rowCardDistiDrilldown['amount']
                                                    );
                                                }

                                                // Query untuk mengambil data drilldown work order berdasarkan lokasi
                                                $queryCardSuperDrilldown = "SELECT count(salesOrder_id) as amount, cardType, st.name as Territory
                                                from fact_sales fs 
                                                join sales_territory st on st.territory_id = fs.territory_id 
                                                where cardType = 'SuperiorCard'
                                                group by st.name;";
                                                $resultCardSuperDrilldown = mysqli_query($koneksi, $queryCardSuperDrilldown);
                                                
                                                // Menyimpan data drilldown work order dalam format yang sesuai
                                                $CardSuperDrilldownData = array();
                                                while ($rowCardSuperDrilldown = mysqli_fetch_array($resultCardSuperDrilldown)) {
                                                    $CardSuperDrilldownData[] = array(
                                                        $rowCardSuperDrilldown['Territory'],
                                                        (int)$rowCardSuperDrilldown['amount']
                                                    );
                                                }

                                                // Query untuk mengambil data drilldown work order berdasarkan lokasi
                                                $queryCardVistaDrilldown = "SELECT count(salesOrder_id) as amount, cardType, st.name as Territory
                                                from fact_sales fs 
                                                join sales_territory st on st.territory_id = fs.territory_id 
                                                where cardType = 'Vista'
                                                group by st.name;";
                                                $resultCardVistaDrilldown = mysqli_query($koneksi, $queryCardVistaDrilldown);
                                                
                                                // Menyimpan data drilldown work order dalam format yang sesuai
                                                $CardVistaDrilldownData = array();
                                                while ($rowCardVistaDrilldown = mysqli_fetch_array($resultCardVistaDrilldown)) {
                                                    $CardVistaDrilldownData[] = array(
                                                        $rowCardVistaDrilldown['Territory'],
                                                        (int)$rowCardVistaDrilldown['amount']
                                                    );
                                                }



                                                // Menutup koneksi database
                                                mysqli_close($koneksi);
                                                ?> 

                                                <script>
                                                // Membuat grafik pie dengan menggunakan Highcharts
                                                Highcharts.chart('canvas-holder1', {
                                                    chart: {
                                                        type: 'pie'
                                                    },
                                                    title: {
                                                        text: 'Total Transaksi yang menggunakan Tipe Kartu Kredit tertentu di suatu Territory'
                                                    },
                                                    subtitle: {
                                                        text: 'Klik untuk melihat lebih detail Total Transaksi yang menggunakan Tipe Kartu Kredit tertentu di suatu Territory'
                                                    },
                                                    accessibility: {
                                                        announceNewData: {
                                                            enabled: true
                                                        },
                                                        point: {
                                                            valueSuffix: '%'
                                                        }
                                                    },
                                                    plotOptions: {
                                                        series: {
                                                            dataLabels: {
                                                                enabled: true,
                                                                format: '{point.name}: {point.y:.f}'
                                                            }
                                                        }
                                                    },
                                                    tooltip: {
                                                        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                                                        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.f}</b> of total<br/>'
                                                    },
                                                    series: [{
                                                        name: 'Total Transaksi berdasarkan Tipe Kartu Kredit Customer',
                                                        colorByPoint: true,
                                                        data: [{
                                                            name: 'ColonialVoice',
                                                            y: <?php echo $totColonial; ?>,
                                                            drilldown: 'cardColonial'
                                                        }, {
                                                            name: 'Distinguish',
                                                            y: <?php echo $totDisti; ?>,
                                                            drilldown: 'cardDisti'
                                                        }, {
                                                            name: 'SuperiorCard',
                                                            y: <?php echo $totSuper; ?>,
                                                            drilldown: 'cardSuper'
                                                        }, {
                                                            name: 'Vista',
                                                            y: <?php echo $totVista; ?>,
                                                            drilldown: 'cardVista'
                                                        }
                                                        
                                                        ]
                                                    }],
                                                    drilldown: {
                                                        series: [{
                                                            id: 'cardColonial',
                                                            name: 'Total Transaksi yang menggunakan Kartu Kredit "ColonialVoice" di suatu Territory',
                                                            data: <?php echo json_encode($CardColonialDrilldownData); ?>
                                                        }, {
                                                            id: 'cardDisti',
                                                            name: 'Total Transaksi yang menggunakan Kartu Kredit "Distinguish" di suatu Territory',
                                                            data: <?php echo json_encode($CardDistiDrilldownData); ?>
                                                        }, {
                                                            id: 'cardSuper',
                                                            name: 'Total Transaksi yang menggunakan Kartu Kredit "SuperiorCard" di suatu Territory',
                                                            data: <?php echo json_encode($CardSuperDrilldownData); ?>
                                                        }, {
                                                            id: 'cardVista',
                                                            name: 'Total Transaksi yang menggunakan Kartu Kredit "Vista" di suatu Territory',
                                                            data: <?php echo json_encode($CardVistaDrilldownData); ?>
                                                        }, 
                                                        
                                                        ]
                                                    }
                                                });
                                                </script>

                            
                        </div>
                    </div>
                    <!-- End of Page Content -->
                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; AdventureWorks2022</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->
            </div>
            <!-- End of Content Wrapper -->
        </div>
        <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Do you want to Leave this Site?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "LogOut" button below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-success" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

                    
</body>
</html>