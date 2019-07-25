<?php
/**
 * Created by PhpStorm.
 * User: odikk
 * Date: 24/06/2019
 * Time: 21:41
 */

session_start();
include_once('../config/connect.php');

$queryDataPeminjaman = "SELECT * FROM peminjaman";
$dataPeminjam = mysqli_query($conn, $queryDataPeminjaman);

$namaUser = $_SESSION['nama'];
if($namaUser == null){
    header("Location: ../index.php");
    $_POST['echo'] = "Silahkan Login terlebih Dahulu !";
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Perpustakaan | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="index.php" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>P</b></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>PERPUSTAKAAN</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->
<!--                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                            <span class="hidden-xs"><?php echo $namaUser?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                <p>
                                    <?php echo $namaUser?>
                                </p>
                            </li>

                            <!-- Menu Footer-->
                            <li class="user-footer">

                                <div class="pull-right">
                                    <a href="logout.php"  class="btn btn-default btn-flat" name="sign-out">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->

                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p><?php echo $namaUser;?></p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">MAIN MENU</li>
<!--                Sidebar-->
<!--                <li class="treeview active">-->
<!--                    <a href="#">-->
<!--                        <i class="fa fa-home"></i> <span>Tampil Data</span>-->
<!--                        <span class="pull-right-container">-->
<!--                  <i class="fa fa-angle-left pull-right"></i>-->
<!--                </span>-->
<!--                    </a>-->
<!--                    <ul class="treeview-menu">-->
<!--                        <li ><a href="tampilbuku.php"><i class="fa fa-circle-o"></i> Tampil Data Buku</a></li>-->
<!--                        <li class="active"><a href="index.php"><i class="fa fa-circle-o"></i> Tampil Data Peminjaman</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
                <li class="active"><a href="index.php"><i class="fa fa-book"></i> <span>Data Peminjaman</span></a></li>

                <li><a href="inputpeminjaman.php"><i class="fa fa-edit"></i> <span>Input Peminjaman</span></a></li>
<!--                <li class="treeview">-->
<!--                    <a href="#">-->
<!--                        <i class="fa fa-table"></i> <span>Tables</span>-->
<!--                        <span class="pull-right-container">-->
<!--                  <i class="fa fa-angle-left pull-right"></i>-->
<!--                </span>-->
<!--                    </a>-->
<!--                    <ul class="treeview-menu">-->
<!--                        <li><a href="simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>-->
<!--                        <li ><a href="data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>-->
<!--                    </ul>-->
<!--                </li>-->

        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Data Peminjaman Buku
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Data Peminjaman</a></li>

            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Tabel Peminjaman</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th class="text-center">No. </th>
<!--                                    <th>ID Peminjaman.</th>-->
                                    <th class="text-center">Nama Buku</th>
                                    <th class="text-center">Nama Peminjam</th>
                                    <th class="text-center">Tanggal Pinjam</th>
                                    <th class="text-center">Tanggal Kembali</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $i = 1;

                                    while($rowpeminjaman = mysqli_fetch_array($dataPeminjam)){


                                        echo "<tr>";
                                        echo "<td class='text-center'>$i</td>";
//                                        echo "<td>".$rowpeminjaman['nomor']."</td>";
                                        echo "<td class='text-center'>".$rowpeminjaman['nama_buku']."</td>";
                                        echo "<td class='text-center'>".$rowpeminjaman['nama_peminjam']."</td>";
                                        echo "<td class='text-center'>".$rowpeminjaman['tanggal_pinjam']."</td>";
                                        echo "<td class='text-center'>".$rowpeminjaman['tanggal_kembali']."</td>";
                                        echo "<td class='text-center'><a href='updatepeminjaman.php?id=".$rowpeminjaman['id_peminjaman']."'><button class='btn btn-primary'>Edit</button></a> <a href='hapuspeminjaman.php?id=".$rowpeminjaman['id_peminjaman']."' onclick=\"return confirm(' you want to delete?');\"><button class='btn btn-danger'>Hapus</button></a></td>";


                                        echo "</tr>";
                                        $i++;
                                    }

                                ?>
                                </tbody>
<!--                                <tfoot>-->
<!--                                <tr>-->
<!--                                    <th>No.</th>-->
<!--                                    <th>Nama Peminjam</th>-->

<!--                                    <th>Nama Buku</th>-->
<!--                                    <th>Tanggal Pinjam</th>-->
<!--                                    <th>Tanggal Kembali</th>-->
<!--                                </tr>-->
<!--                                </tfoot>-->
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->


                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 1.0.0
        </div>
        <strong>Copyright &copy; 2019 <b>Ariesta Agung</b>.</strong> All rights
        reserved.
    </footer>


</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
    $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging'      : true,
            'lengthChange': false,
            'searching'   : false,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false
        })
    });


    //$("#delete-button").click(function(){
    //  if(confirm("Are you sure you want to delete this?")){
    //            $("#delete-button").attr("href", '<?php //echo "hapuspeminjaman.php?id=" . $rowpeminjaman['id_peminjaman'] ?>//');
    //            return true;
    //        }
    //        else{
    //            return false;
    //        }
    //});

</script>
</body>
</html>

