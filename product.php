<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>ADW2022 - Product</title>
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
                            <h1 class="h3 mb-0 text-gray-900">Product</h1>
                        </div>

                        <!-- Content 1: Card Summary -->
                        <div class="row">
                            <!-- Total Product Card -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Products</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-900">
                                                    <?php
                                                        $mysqli = mysqli_connect("localhost","root","","dw_production");
                                                        $sql = "SELECT COUNT(product_id) as jumlah_produk from product";
                                                        $query = mysqli_query($mysqli,$sql);
                                                        while($row2=mysqli_fetch_array($query)){
                                                            echo number_format($row2['jumlah_produk'],0,".",",");
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

                            <!-- Total Transaction Product -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-warning shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total Transactions Product</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-900">
                                                    <?php
                                                        $mysqli = mysqli_connect("localhost","root","","dw_production");
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

                        <!-- CHART -->
                        <!-- Content 2: Product Charts -->
                        <div class="row">
                            <!-- Pie Chart -->
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
                                                                format: '{point.name}: {point.y:.f}'
                                                            }
                                                        }
                                                    },
                                                    tooltip: {
                                                        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                                                        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.f}</b> of total<br/>'
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

                            <!-- Bar Chart -->
                            <div class="col-xl-8 col-lg-7">
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Total Penjualan Produk Berdasarkan Tahun dan Lokasi</h6>
                                    </div>
                                    <div class="card-body-store">
                                        <div class="chart-area-store">
                                            <div id="canvas-holder2" style="width:100%">
                                                <canvas id="chart-area"></canvas>
                                                <?php
                                                // Menghubungkan ke database
                                                $koneksi = mysqli_connect("localhost", "root", "", "dw_production");
                                                
                                                // Memeriksa koneksi database
                                                if (mysqli_connect_errno()) {
                                                    echo "Koneksi database gagal: " . mysqli_connect_error();
                                                    exit();
                                                }
                                                
                                                // Query untuk menghitung jumlah penjualan berdasarkan tahun 
                                                $queryJumlahPenjualan = "SELECT tahun, sum(orderQty) as jumlah from fact_production fp 
                                                join time_dimens td on fp.time_id = td.time_id group by tahun";
                                                $resultJumlahPenjualan = mysqli_query($koneksi, $queryJumlahPenjualan);
                                                
                                                // Menyimpan jumlah penjualan dalam variabel
                                                $totalT3 = 0;
                                                $totalT4 = 0;
                                                
                                                // Mengekstrak nilai jumlah penjualan berdasarkan tahun 
                                                while ($rowJumlahPenjualan = mysqli_fetch_array($resultJumlahPenjualan)) {
                                                    if ($rowJumlahPenjualan['tahun'] == '2003') {
                                                        $totalT3 = (int)$rowJumlahPenjualan['jumlah'];
                                                    } elseif ($rowJumlahPenjualan['tahun'] == '2004') {
                                                        $totalT4 = (int)$rowJumlahPenjualan['jumlah'];
                                                    } 
                                                }
                                                
                                                // Query untuk mengambil data drilldown 2003 berdasarkan lokasi
                                                $queryT3Drilldown = "SELECT td.tahun, l.location_name, sum(fp.orderQty) as jumlah from fact_production fp
                                                join time_dimens td on fp.time_id = td.time_id 
                                                join location l on fp.location_id = l.location_id 
                                                where td.tahun='2003' group by l.location_name";
                                                $resultT3Drilldown = mysqli_query($koneksi, $queryT3Drilldown);
                                                
                                                // Menyimpan data drilldown 2003 dalam format yang sesuai
                                                $T3DrilldownData = array();
                                                while ($rowT3Drilldown = mysqli_fetch_array($resultT3Drilldown)) {
                                                    $T3DrilldownData[] = array(
                                                        $rowT3Drilldown['location_name'],
                                                        (int)$rowT3Drilldown['jumlah']
                                                    );
                                                }
                                                
                                                // Query untuk mengambil data drilldown 2004 berdasarkan lokasi
                                                $queryT4Drilldown = "SELECT td.tahun, l.location_name as location_name, sum(fp.orderQty) as jumlah from fact_production fp
                                                join time_dimens td on fp.time_id = td.time_id 
                                                join location l on fp.location_id = l.location_id 
                                                where td.tahun='2004' group by l.location_name";
                                                $resultT4Drilldown = mysqli_query($koneksi, $queryT4Drilldown);
                                                
                                                // Menyimpan data drilldown 2004 dalam format yang sesuai
                                                // Menyimpan data drilldown 2004 dalam format yang sesuai
                                                $T4DrilldownData = array();
                                                while ($rowT4Drilldown = mysqli_fetch_array($resultT4Drilldown)) {
                                                    $T4DrilldownData[] = array(
                                                        $rowT4Drilldown['location_name'],
                                                        (int)$rowT4Drilldown['jumlah']
                                                    );
                                                }
                                                
                                                // Menutup koneksi database
                                                mysqli_close($koneksi);
                                                ?> 

                                                <script>
                                                    // Membuat grafik pie dengan menggunakan Highcharts
                                                Highcharts.chart('canvas-holder2', {
                                                    chart: {
                                                        type: 'column'
                                                    },
                                                    title: {
                                                        text: 'Total Penjualan Berdasarkan Tahun'
                                                    },
                                                    subtitle: {
                                                        text: 'Klik untuk melihat lebih detail total penjualan tahun berdasarkan lokasi'
                                                    },
                                                    yAxis: {
                                                        title: {
                                                            text: 'Total Penjualan'
                                                        }
                                                    },
                                                    series: [{
                                                        name: 'Total Penjualan per Tahun by lokasi',
                                                        colorByPoint: true,
                                                        data: [{
                                                            name: '2003',
                                                            y: <?php echo $totalT3; ?>,
                                                            drilldown: '2003'
                                                        }, {
                                                            name: '2004',
                                                            y: <?php echo $totalT4; ?>,
                                                            drilldown: '2004'
                                                        }]
                                                    }],
                                                    drilldown: {
                                                        breadcrumbs: {
                                                        position: {
                                                            align: 'right'
                                                        }
                                                    },
                                                        series: [{
                                                            id: '2003',
                                                            name: 'Total Penjualan Tahun 2003 by lokasi',
                                                            data: <?php echo json_encode($T3DrilldownData); ?>
                                                        }, {
                                                            id: '2004',
                                                            name: 'Total Penjualan Tahun 2004 by lokasi',
                                                            data: <?php echo json_encode($T4DrilldownData); ?>
                                                        }],
                                                    }
                                                });
                                                </script>
                                            </div>
                                        </div>
                                        <figure class="highcharts-figure">
                                                <div id="container"></div>
                                                <p class="highcharts-description"></p>
                                        </figure>
                                        <!-- Styling for the bar chart can be found in the
                                        <code>/js/demo/chart-bar-demo3.js</code> file. -->
                                    </div>
                                </div>
                            </div>

                        <?php
                        // Menghubungkan ke database
                        $koneksi = mysqli_connect("localhost", "root", "", "dw_production");

                        // Memeriksa koneksi database
                        if (mysqli_connect_errno()) {
                            echo "Koneksi database gagal: " . mysqli_connect_error();
                            exit();
                        }

                        // Query untuk menghitung jumlah penjualan berdasarkan tahun 
                        $queryJumlahPenjualan = "SELECT tahun, sum(orderQty) as jumlah from fact_production fp 
                            join time_dimens td on fp.time_id = td.time_id group by tahun";
                        $resultJumlahPenjualan = mysqli_query($koneksi, $queryJumlahPenjualan);

                        // Menyimpan jumlah penjualan dalam variabel
                        $totalT3 = 0;
                        $totalT4 = 0;

                        // Mengekstrak nilai jumlah penjualan berdasarkan tahun 
                        while ($rowJumlahPenjualan = mysqli_fetch_array($resultJumlahPenjualan)) {
                            if ($rowJumlahPenjualan['tahun'] == '2003') {
                                $totalT3 = (int)$rowJumlahPenjualan['jumlah'];
                            } elseif ($rowJumlahPenjualan['tahun'] == '2004') {
                                $totalT4 = (int)$rowJumlahPenjualan['jumlah'];
                            }
                        }

                        // Query untuk mengambil data drilldown 2003 berdasarkan lokasi
                        $queryT3Drilldown = "SELECT tahun, location_name, sum(orderQty) as jumlah from fact_production fp
                            join time_dimens td on fp.time_id = td.time_id 
                            join location l on fp.location_id = l.location_id 
                            where tahun='2003' group by location_name";
                        $resultT3Drilldown = mysqli_query($koneksi, $queryT3Drilldown);

                        // Menyimpan data drilldown 2003 dalam format yang sesuai
                        $T3DrilldownData = array();
                        while ($rowT3Drilldown = mysqli_fetch_array($resultT3Drilldown)) {
                            $T3DrilldownData[] = array(
                                $rowT3Drilldown['location_name'],
                                (int)$rowT3Drilldown['jumlah']
                            );
                        }

                        // Query untuk mengambil data drilldown 2004 berdasarkan lokasi
                        $queryT4Drilldown = "SELECT tahun, location_name, sum(orderQty) as jumlah from fact_production fp
                            join time_dimens td on fp.time_id = td.time_id 
                            join location l on fp.location_id = l.location_id 
                            where tahun='2004' group by location_name";
                        $resultT4Drilldown = mysqli_query($koneksi, $queryT4Drilldown);

                        // Menyimpan data drilldown 2003 dalam format yang sesuai
                        // Menyimpan data drilldown 2004 dalam format yang sesuai
                        $T4DrilldownData = array();
                        while ($rowT4Drilldown = mysqli_fetch_array($resultT4Drilldown)) {
                            $T4DrilldownData[] = array(
                                $rowT4Drilldown['location_name'],
                                (int)$rowT4Drilldown['jumlah']
                            );
                        }

                        // Menutup koneksi database
                        mysqli_close($koneksi);
                        ?>

                        <script src="https://code.highcharts.com/highcharts.js"></script>
                        <script src="https://code.highcharts.com/modules/data.js"></script>
                        <script src="https://code.highcharts.com/modules/drilldown.js"></script>
                        <script src="https://code.highcharts.com/modules/exporting.js"></script>
                        <script src="https://code.highcharts.com/modules/export-data.js"></script>
                        <script src="https://code.highcharts.com/modules/accessibility.js"></script>
                        <script>
                            // Membuat grafik pie dengan menggunakan Highcharts
                            Highcharts.chart('chart-area', {
                                chart: {
                                    type: 'column'
                                },
                                title: {
                                    text: 'Total Penjualan Berdasarkan Tahun'
                                },
                                subtitle: {
                                    text: 'Klik untuk melihat lebih detail total penjualan tahun berdasarkan lokasi'
                                },
                                yAxis: {
                                    title: {
                                        text: 'Total Penjualan'
                                    }
                                },
                                series: [{
                                    name: 'Total Penjualan per Tahun by lokasi',
                                    colorByPoint: true,
                                    data: [{
                                        name: '2003',
                                        y: <?php echo $totalT3; ?>,
                                        drilldown: '2003'
                                    }, {
                                        name: '2004',
                                        y: <?php echo $totalT4; ?>,
                                        drilldown: '2004'
                                    }]
                                }],
                                drilldown: {
                                    breadcrumbs: {
                                        position: {
                                            align: 'right'
                                        }
                                    },
                                    series: [{
                                        id: '2003',
                                        name: 'Total Penjualan Tahun 2003 by lokasi',
                                        data: <?php echo json_encode($T3DrilldownData); ?>
                                    }, {
                                        id: '2004',
                                        name: 'Jumlah Penjualan Tahun 2004 by lokasi',
                                        data: <?php echo json_encode($T4DrilldownData); ?>
                                    }],
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
        <!-- JavaScript for Doughnut Chart Total Pembelian berdasarkan Category-->
        <script>
            var config = {
                type: 'doughnut',
                data: {
                    datasets: [{
                        data:<?php echo json_encode($total); ?>,
                        backgroundColor: [
                        '#191970',
                        '#0000CD',
                        '#4169E1',
                        '#4682B4',
                        '#912CEE',
                        '#7B68EE',
                        '#6495ED',
                        '#00BFFF',
                        '#87CEFA',
                        '#B0C4DE',
                        '#48D1CC',
                        '#7FFFD4',
                        '#AFEEEE',
                        '#E0FFFF',
                        ],
                        label: 'Total Produk berdasarkan Category'
                    }],
                    labels: <?php echo json_encode($jenis_vendor); ?>},
                options: {
                    responsive: true
                }
            };

            window.onload = function() {
                var ctx = document.getElementById('chart-area').getContext('2d');
                window.myPie = new Chart(ctx, config);
            };

            document.getElementById('randomizeData').addEventListener('click', function() {
                config.data.datasets.forEach(function(dataset) {
                    dataset.data = dataset.data.map(function() {
                        return randomScalingFactor();
                    });
                });

                window.myPie.update();
            });

            var colorNames = Object.keys(window.chartColors);
            document.getElementById('addDataset').addEventListener('click', function() {
                var newDataset = {
                    backgroundColor: [],
                    data: [],
                    label: 'New dataset ' + config.data.datasets.length,
                };

                for (var index = 0; index < config.data.labels.length; ++index) {
                    newDataset.data.push(randomScalingFactor());

                    var colorName = colorNames[index % colorNames.length];
                    var newColor = window.chartColors[colorName];
                    newDataset.backgroundColor.push(newColor);
                }

                config.data.datasets.push(newDataset);
                window.myPie.update();
            });

            document.getElementById('removeDataset').addEventListener('click', function() {
                config.data.datasets.splice(0, 1);
                window.myPie.update();
            });
        </script>

                                            <script>
                                                // Mendefinisikan data yang akan ditampilkan dalam grafik pie
                                                var data = [
                                                    <?php
                                                    while ($row = mysqli_fetch_array($result1)) {
                                                        echo "['" . $row['type'] . "', " . $row['jumlah'] . "],";
                                                    }
                                                    ?>
                                                    ['Sales Order', <?php echo $jumlah_sales_order; ?>]
                                                ];

                                                // Menyiapkan data drilldown
                                                var drilldownData = <?php echo json_encode($drilldownData); ?>;

                                                // Membuat grafik pie dengan menggunakan Highcharts
                                                Highcharts.chart('container', {
                                                    chart: {
                                                        type: 'pie'
                                                    },
                                                    title: {
                                                        text: 'Jumlah Penjualan Berdasarkan Type Transaction'
                                                    },
                                                    subtitle: {
                                                        text: 'Klik untuk melihat lebih detail jumlah penjualan type transaction berdasarkan lokasi dan tahun'
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
                                                                format: '{point.name}: {point.y:.1f}%'
                                                            }
                                                        }
                                                    },
                                                    tooltip: {
                                                        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                                                        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
                                                    },
                                                    series: [{
                                                        name: 'Jumlah Penjualan by Type Transaction',
                                                        colorByPoint: true,
                                                        data: data
                                                    }],
                                                    drilldown: {
                                                        series: drilldownData
                                                    }
                                                });
                                            </script>
        <!-- <script type="text/javascript">
            Highcharts.chart('container', {
                chart: {
                type: 'pie'
            },
            title: {
                text: 'Persentase Total Pembelian Produk Berdasarkan Category'},
                subtitle: {
                    text:'Klik pada salah satu bagian Pie untuk melihat total pembelian produk berdasarkan category'
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
                    series:{
                        dataLabels: {
                            enabled: true,
                            format:'{point.name}: {point.y:.1f}%'
                        }
                    }
                },
                tooltip: {
                    headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                    pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
                },
                series: [
                    {
                        name: "Total Pembelian berdasarkan Category",
                        colorByPoint: true,
                        data:
                            <?php
                            $datanya = $json_all_kat;
                            $data1 = str_replace('["', '{"',$datanya) ;
                            $data2 = str_replace('"]', '"}',$data1) ;
                            $data3 = str_replace('[[', '[', $data2);
                            $data4 = str_replace(']]', ']', $data3);
                            $data5 = str_replace(':', '" : "', $data4);
                            $data6 = str_replace('"name"', 'name', $data5);
                            $data7 = str_replace('"drilldown"', 'drilldown', $data6);
                            $data8 = str_replace('"y"', 'y', $data7);
                            $data9 = str_replace('",', ',', $data8);
                            $data10 = str_replace(',y', '",y', $data9);
                            $data11 = str_replace(',y : "', ',y : ', $data10);
                            echo $data11;
                            ?>
                    }
                ],
                drilldown: {
                    series: [
                        <?php
                        echo $string_data;
                        ?>
                    ]
                }
            });
        </script> -->
        
        <!-- JavaScript for Bar Chart -->
        <script src="js/demo/chart-bar-demo3.js"></script>
    </body>
</html>