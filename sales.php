<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>ADW2022 - Sales</title>
        <link rel="icon" href="img/logo.png">
        
        <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <!-- Custom styles and charts for this template-->
        <link href="css/sb-admin-2.min.css" rel="stylesheet">
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

                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                    <div class="sidebar-brand-icon">
                        <i class="fas fa-warehouse"></i>
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
                        <div class="input-group" style="margin-left: 10px; color: #000000; font-weight: 500; font-size: 15pt">Data Warehouse AdventureWorks2022</div>
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>

                        <!-- Top Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <div class="topbar-divider d-none d-sm-block"></div>
                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                    <img class="img-profile rounded-circle"src="img/user.webp">
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                    <!-- End of Topbar -->

                    <!-- Page Content -->
                    <div class="container-fluid">
                        <!-- Page Heading -->
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-900">Sales</h1>
                        </div>

                        <!-- Content 1: Card Summary -->
                        <div class="row">   

                        <!-- Total Transactions Card -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Total Penjualan</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-900">
                                                <?php
                                                    $mysqli = mysqli_connect("localhost","root","","dw_sales");
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

                            <!-- Total Incomes -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col auto">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Incomes Tahun 2002</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-900">
                                                    <?php  
                                                        $mysqli = mysqli_connect("localhost","root","","dw_sales");
                                                        $sql = "SELECT SUM(sub_total) as total from fact_sales sf JOIN time_dimens t ON sf.time_id=t.time_id  where t.tahun = 2002";
                                                        $query = mysqli_query($mysqli,$sql);
                                                        while($row2=mysqli_fetch_array($query)){
                                                            echo "$".number_format($row2['total']);
                                                        }
                                                    ?>  
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="far fa-calendar-alt fa-2x text-gray-400"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Total Products Sales in 2003 -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-success shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col auto">
                                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Produk Terjual pada Tahun 2003</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php
                                                        $sql = "SELECT COUNT(sf.salesOrder_id) total, t.tahun FROM fact_sales sf JOIN time_dimens t ON sf.time_id = t.time_id WHERE t.tahun=2003;";
                                                        $query = mysqli_query($mysqli,$sql);
                                                        while($row2=mysqli_fetch_array($query)){
                                                            echo number_format($row2['total'],0,".",",");
                                                        }
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                            <i class="fas fa-shopping-cart fa-2x text-gray-400"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                    
                            <!-- Average Incomes -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-warning shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col auto">
                                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Rata-rata Penjualan Produk tahun 2004</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php
                                                        $sql = "SELECT AVG(order_count) as avg, tahun
                                                        FROM (
                                                            SELECT COUNT(salesOrder_id) as order_count, tahun
                                                            FROM fact_sales sf
                                                            JOIN time_dimens t ON sf.time_id = t.time_id
                                                            WHERE tahun = 2004
                                                            GROUP BY tahun
                                                        ) subquery
                                                        GROUP BY tahun;";
                                                        $query = mysqli_query($mysqli,$sql);
                                                        while($row2=mysqli_fetch_array($query)){
                                                            echo number_format($row2['avg'],0,".",",");
                                                        }
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-400"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                            
                        </div>

                        <!-- Content 2: Sales Chart -->
                        <div class="row">
                            <div class="col-xl-8 col-lg-7">
                                <div class="card shadow mb-4">
                                    <!-- Card Header - Dropdown -->
                                    <div
                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">Total Pembelian Produk oleh Customer berdasarkan Territory</h6>
                                    </div>
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <div id="canvas-holder" style="width:100%">
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
                                                $queryJumlahPenjualan = "SELECT tipe, SUM(sub_total) AS jml 
                                                FROM fact_sales fs
                                                JOIN customer c ON c.customer_id = fs.customer_id
                                                GROUP BY tipe";
                                                $resultJumlahPenjualan = mysqli_query($koneksi, $queryJumlahPenjualan);
                                                
                                                // Menyimpan jumlah penjualan dalam variabel
                                                $totalCustI = 0;
                                                $totalCustS = 0;
                                                
                                                // Mengekstrak nilai jumlah penjualan berdasarkan tipe customer 'S'
                                                while ($rowJumlahPenjualan = mysqli_fetch_array($resultJumlahPenjualan)) {
                                                    if ($rowJumlahPenjualan['tipe'] == 'I') {
                                                        $totalCustI = (int)$rowJumlahPenjualan['jml'];
                                                    } elseif ($rowJumlahPenjualan['tipe'] == 'S') {
                                                        $totalCustS = (int)$rowJumlahPenjualan['jml'];
                                                    }
                                                }
                                                
                                                // Query untuk mengambil data drilldown sales order berdasarkan lokasi
                                                $queryCustIDrilldown = "SELECT c.tipe, t.name AS Territory, SUM(sub_total) AS jml
                                                FROM fact_sales fs 
                                                JOIN customer c ON c.customer_id  = fs.customer_id
                                                JOIN sales_territory t ON t.territory_id = fs.territory_id 
                                                WHERE c.tipe = 'I'
                                                GROUP BY t.name";
                                                $resultCustIDrilldown = mysqli_query($koneksi, $queryCustIDrilldown);
                                                
                                                // Menyimpan data drilldown sales order dalam format yang sesuai
                                                $CustIDrilldownData = array();
                                                while ($rowCustIDrilldown = mysqli_fetch_array($resultCustIDrilldown)) {
                                                    $CustIDrilldownData[] = array(
                                                        $rowCustIDrilldown['Territory'],
                                                        (int)$rowCustIDrilldown['jml']
                                                    );
                                                }
                                                
                                                // Query untuk mengambil data drilldown work order berdasarkan lokasi
                                                $queryCustSDrilldown = "SELECT c.tipe, t.name AS Territory, SUM(sub_total) AS jml
                                                FROM fact_sales fs 
                                                JOIN customer c ON c.customer_id  = fs.customer_id
                                                JOIN sales_territory t ON t.territory_id = fs.territory_id 
                                                WHERE c.tipe = 'S'
                                                GROUP BY t.name";
                                                $resultCustSDrilldown = mysqli_query($koneksi, $queryCustSDrilldown);
                                                
                                                // Menyimpan data drilldown work order dalam format yang sesuai
                                                $CustSDrilldownData = array();
                                                while ($rowCustSDrilldown = mysqli_fetch_array($resultCustSDrilldown)) {
                                                    $CustSDrilldownData[] = array(
                                                        $rowCustSDrilldown['Territory'],
                                                        (int)$rowCustSDrilldown['jml']
                                                    );
                                                }

                                                // Menutup koneksi database
                                                mysqli_close($koneksi);
                                                ?> 

                                                <script>
                                                // Membuat grafik pie dengan menggunakan Highcharts
                                                Highcharts.chart('canvas-holder', {
                                                    chart: {
                                                        type: 'bar'
                                                    },
                                                    title: {
                                                        text: 'Total Pembelian Produk oleh Customer berdasarkan Territory'
                                                    },
                                                    subtitle: {
                                                        text: 'Klik untuk melihat lebih detail Total Pembelian Produk oleh Customer berdasarkan Territory'
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
                                                                format: '{point.name}: ${point.y:,.0f}'
                                                            }
                                                        }
                                                    },
                                                    tooltip: {
                                                        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                                                        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>${point.y:,.0f}</b> of total<br/>'
                                                    },
                                                    series: [{
                                                        name: 'Total Pembelian Produk berdasarkan Tipe Customer',
                                                        colorByPoint: true,
                                                        data: [{
                                                            name: 'Individu',
                                                            y: <?php echo $totalCustI; ?>,
                                                            drilldown: 'individu'
                                                        }, {
                                                            name: 'Small Business',
                                                            y: <?php echo $totalCustS; ?>,
                                                            drilldown: 'smallb'
                                                        } 
                                                        
                                                        ]
                                                    }],
                                                    drilldown: {
                                                        series: [{
                                                            id: 'individu',
                                                            name: 'Total Pembelian Produk oleh Customer "Individu" by Territory',
                                                            data: <?php echo json_encode($CustIDrilldownData); ?>
                                                        }, {
                                                            id: 'smallb',
                                                            name: 'Total Pembelian Produk oleh Customer "Small Business" by Territory',
                                                            data: <?php echo json_encode($CustSDrilldownData); ?>
                                                        }
                                                        
                                                        ]
                                                    }
                                                });
                                                </script>

                                                
                                            </div>
                                    </div>
                                </div>
                            </div> 
                            <!-- SALES ORDER -->
                            <div class="col-xl-8 col-lg-7">
                                <div class="card shadow mb-4">
                                    <!-- Card Header - Dropdown -->
                                    <div
                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">Total Transaksi berdasarkan Tipe Kartu Kredit Customer</h6>
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
                                </div>
                            </div> 
                            <!-- Area Chart -->
                            <div class="col-xl-8 col-lg-7">
                                <div class="card shadow mb-4">
                                    <!-- Card Header - Dropdown -->
                                    <div
                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">Trend Pendapatan dari Penjualan Setiap Tahun</h6>
                                    </div>
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <div class="chart-area">
                                            <canvas id="myAreaChart2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>                                   

                            <div class="col-xl-8 col-lg-7">
                                <div class="card shadow mb-4">
                                    <!-- Card Header - Dropdown -->
                                    <div
                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">Trend Pendapatan dari Penjualan Setiap Bulan</h6>
                                    </div>
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <div class="chart-area">
                                            <canvas id="myAreaChart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
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
                        <h5 class="modal-title" id="exampleModalLabel">Are you sure, do you want to Leave this Site?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" button below if you are ready to end your current session.</div>
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

        <!-- JavaScript for Charts -->
        <!-- JavaScript Line Chart Trend Pendapatan Penjualan Setiap Tahun -->
        <script type="text/javascript">
            // Set new default font family and font color to mimic Bootstrap's default styling
            Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
            Chart.defaults.global.defaultFontColor = '#858796';

            function number_format(number, decimals, dec_point, thousands_sep) {
            // *     example: number_format(1234.56, 2, ',', ' ');
            // *     return: '1 234,56'
            number = (number + '').replace(',', '').replace(' ', '');
            var n = !isFinite(+number) ? 0 : +number,
                prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
                sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
                dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
                s = '',
                toFixedFix = function(n, prec) {
                var k = Math.pow(10, prec);
                return '' + Math.round(n * k) / k;
                };
            // Fix for IE parseFloat(0.55).toFixed(0) = 0;
            s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
            if (s[0].length > 3) {
                s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
            }
            if ((s[1] || '').length < prec) {
                s[1] = s[1] || '';
                s[1] += new Array(prec - s[1].length + 1).join('0');
            }
            return s.join(dec);
            }

            // Area Chart Example
            <?php
            $host= "localhost";
            $user= "root";
            $password= "";
            $database= "dw_sales";
            $conn= mysqli_connect($host, $user, $password, $database);
            $year = "SELECT DISTINCT(t.tahun) as year FROM fact_sales sf JOIN time_dimens t on t.time_id = sf.time_id";
            $amount = "SELECT SUM(sf.sub_total) as amount FROM fact_sales sf JOIN time_dimens t ON sf.time_id = t.time_id GROUP BY t.tahun";
            $i=1;
            $query_year=mysqli_query($conn, $year);
            $jumlah_year = mysqli_num_rows($query_year);
            $chart_year="";
            while($row=mysqli_fetch_array($query_year)){
            if ($i<$jumlah_year) {
                $chart_year.='"';
                $chart_year.=$row['year'];
                $chart_year.='",';
                $i++;
            }else{
                $chart_year.='"';
                $chart_year.=$row['year'];
                $chart_year.='"';
            }
            }
            $a=1;
            $query_amount = mysqli_query($conn, $amount);
            $jumlah_amount = mysqli_num_rows($query_amount);
            $chart_amount="";
            while ($row1=mysqli_fetch_array($query_amount)) {
                if ($a<$jumlah_amount) {
                    $chart_amount.=$row1['amount'];
                    $chart_amount.=',';
                    $a++;
                }else{
                    $chart_amount.=$row1['amount'];
                }
            }
            ?>
            var ctx = document.getElementById("myAreaChart2");
            var myLineChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: [<?php echo $chart_year; ?>],
                datasets: [{
                label: "Total Pendapatan Penjualan",
                lineTension: 0.3,
                backgroundColor: "rgba(78, 115, 223, 0.05)",
                borderColor: "rgba(78, 115, 223, 1)",
                pointRadius: 3,
                pointBackgroundColor: "rgba(78, 115, 223, 1)",
                pointBorderColor: "rgba(78, 115, 223, 1)",
                pointHoverRadius: 3,
                pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
                pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                pointHitRadius: 10,
                pointBorderWidth: 2,
                data: [<?php echo $chart_amount;?>],
                }],
            },
            options: {
                maintainAspectRatio: false,
                layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
                },
                scales: {
                xAxes: [{
                    time: {
                    unit: 'date'
                    },
                    gridLines: {
                    display: false,
                    drawBorder: false
                    },
                    ticks: {
                    maxTicksLimit: 7
                    }
                }],
                yAxes: [{
                    ticks: {
                    maxTicksLimit: 5,
                    padding: 10,
                    // Include a dollar sign in the ticks
                    callback: function(value, index, values) {
                        return '$' + number_format(value);
                    }
                    },
                    gridLines: {
                    color: "rgb(234, 236, 244)",
                    zeroLineColor: "rgb(234, 236, 244)",
                    drawBorder: false,
                    borderDash: [2],
                    zeroLineBorderDash: [2]
                    }
                }],
                },
                legend: {
                display: false
                },
                tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                titleMarginBottom: 10,
                titleFontColor: '#6e707e',
                titleFontSize: 14,
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                intersect: false,
                mode: 'index',
                caretPadding: 10,
                callbacks: {
                    label: function(tooltipItem, chart) {
                    var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                    return datasetLabel + ': $' + number_format(tooltipItem.yLabel);
                    }
                }
                }
            }
            });
        </script>

        <!-- JavaScript Line Chart Trend Pendapatan Penjualan Setiap Bulan -->
        <script type="text/javascript">
            // Set new default font family and font color to mimic Bootstrap's default styling
            Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
            Chart.defaults.global.defaultFontColor = '#858796';

            function number_format(number, decimals, dec_point, thousands_sep) {
            // *     example: number_format(1234.56, 2, ',', ' ');
            // *     return: '1 234,56'
            number = (number + '').replace(',', '').replace(' ', '');
            var n = !isFinite(+number) ? 0 : +number,
                prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
                sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
                dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
                s = '',
                toFixedFix = function(n, prec) {
                var k = Math.pow(10, prec);
                return '' + Math.round(n * k) / k;
                };
            // Fix for IE parseFloat(0.55).toFixed(0) = 0;
            s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
            if (s[0].length > 3) {
                s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
            }
            if ((s[1] || '').length < prec) {
                s[1] = s[1] || '';
                s[1] += new Array(prec - s[1].length + 1).join('0');
            }
            return s.join(dec);
            }

            // Area Chart Example
            <?php
            $host= "localhost";
            $user= "root";
            $password= "";
            $database= "dw_sales";
            $conn= mysqli_connect($host, $user, $password, $database);
            $bulan = "SELECT MONTHNAME(t.tanggallengkap) bulan FROM fact_sales sf JOIN time_dimens t ON sf.time_id = t.time_id GROUP BY t.bulan";
            $amount1 = "SELECT SUM(sf.sub_total) as amount FROM fact_sales sf JOIN time_dimens t ON sf.time_id = t.time_id WHERE t.tahun=2004 GROUP BY t.bulan";
            $amount2 = "SELECT SUM(sf.sub_total) as amount FROM fact_sales sf JOIN time_dimens t ON sf.time_id = t.time_id WHERE t.tahun=2003 GROUP BY t.bulan";
            $amount3 = "SELECT SUM(sf.sub_total) as amount FROM fact_sales sf JOIN time_dimens t ON sf.time_id = t.time_id WHERE t.tahun=2002 GROUP BY t.bulan";
            $i=1;
            $query_bulan=mysqli_query($conn, $bulan);
            $jumlah_bulan = mysqli_num_rows($query_bulan);
            $chart_bulan="";
            while($row=mysqli_fetch_array($query_bulan)){
            if ($i<$jumlah_bulan) {
                $chart_bulan.='"';
                $chart_bulan.=$row['bulan'];
                $chart_bulan.='",';
                $i++;
            }else{
                $chart_bulan.='"';
                $chart_bulan.=$row['bulan'];
                $chart_bulan.='"';
            }
            }
            $a=1;
            $query_amount1 = mysqli_query($conn, $amount1);
            $jumlah_amount1 = mysqli_num_rows($query_amount1);
            $chart_amount1="";
            while ($row1=mysqli_fetch_array($query_amount1)) {
                if ($a<$jumlah_amount1) {
                    $chart_amount1.=$row1['amount'];
                    $chart_amount1.=',';
                    $a++;
                }else{
                    $chart_amount1.=$row1['amount'];
                }
            }
            $b=1;
            $query_amount2 = mysqli_query($conn, $amount2);
            $jumlah_amount2 = mysqli_num_rows($query_amount2);
            $chart_amount2="";
            while ($row2=mysqli_fetch_array($query_amount2)) {
                if ($b<$jumlah_amount2) {
                    $chart_amount2.=$row2['amount'];
                    $chart_amount2.=',';
                    $b++;
                }else{
                    $chart_amount2.=$row2['amount'];
                }
            }
            $c=1;
            $query_amount3 = mysqli_query($conn, $amount3);
            $jumlah_amount3 = mysqli_num_rows($query_amount3);
            $chart_amount3="";
            while ($row3=mysqli_fetch_array($query_amount3)) {
                if ($c<$jumlah_amount3) {
                    $chart_amount3.=$row3['amount'];
                    $chart_amount3.=',';
                    $c++;
                }else{
                    $chart_amount3.=$row3['amount'];
                }
            }
            ?>
            var ctx = document.getElementById("myAreaChart");
            var myLineChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: [<?php echo $chart_bulan; ?>],
                datasets: [{
                label: "2004",
                lineTension: 0.3,
                backgroundColor: "rgba(7118, 123, 22, 0.05)",
                borderColor: "rgba(118, 123, 22, 1)",
                pointRadius: 3,
                pointBackgroundColor: "rgba(118, 123, 22, 1)",
                pointBorderColor: "rgba(118, 123, 22, 1)",
                pointHoverRadius: 3,
                pointHoverBackgroundColor: "rgba(118, 123, 22, 1)",
                pointHoverBorderColor: "rgba(118, 123, 22, 1)",
                pointHitRadius: 10,
                pointBorderWidth: 2,
                data: [<?php echo $chart_amount1;?>],
                },{
                label: "2003",
                lineTension: 0.3,
                backgroundColor: "rgba(198, 77, 96, 0.05)",
                borderColor: "rgba(198, 77, 96, 1)",
                pointRadius: 3,
                pointBackgroundColor: "rgba(198, 77, 96, 1)",
                pointBorderColor: "rgba(198, 77, 96, 1)",
                pointHoverRadius: 3,
                pointHoverBackgroundColor: "rgba(198, 77, 96, 1)",
                pointHoverBorderColor: "rgba(198, 77, 96, 1)",
                pointHitRadius: 10,
                pointBorderWidth: 2,
                data: [<?php echo $chart_amount2;?>],
                },{
                label: "2002",
                lineTension: 0.3,
                backgroundColor: "rgba(78, 115, 223, 0.05)",
                borderColor: "rgba(78, 115, 223, 1)",
                pointRadius: 3,
                pointBackgroundColor: "rgba(78, 115, 223, 1)",
                pointBorderColor: "rgba(78, 115, 223, 1)",
                pointHoverRadius: 3,
                pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
                pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                pointHitRadius: 10,
                pointBorderWidth: 2,
                data: [<?php echo $chart_amount3;?>],
                }
                ],
            },
            options: {
                maintainAspectRatio: false,
                layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
                },
                scales: {
                xAxes: [{
                    time: {
                    unit: 'date'
                    },
                    gridLines: {
                    display: false,
                    drawBorder: false
                    },
                    ticks: {
                    maxTicksLimit: 12
                    }
                }],
                yAxes: [{
                    ticks: {
                    maxTicksLimit: 5,
                    padding: 10,
                    // Include a dollar sign in the ticks
                    callback: function(value, index, values) {
                        return '$' + number_format(value);
                    }
                    },
                    gridLines: {
                    color: "rgb(234, 236, 244)",
                    zeroLineColor: "rgb(234, 236, 244)",
                    drawBorder: false,
                    borderDash: [2],
                    zeroLineBorderDash: [2]
                    }
                }],
                },
                legend: {
                display: true
                },
                tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                titleMarginBottom: 10,
                titleFontColor: '#6e707e',
                titleFontSize: 14,
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                intersect: false,
                mode: 'index',
                caretPadding: 10,
                callbacks: {
                    label: function(tooltipItem, chart) {
                    var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                    return datasetLabel + ': $' + number_format(tooltipItem.yLabel);
                    }
                }
                }
            }
            });
        </script>
        
    </body>
</html>