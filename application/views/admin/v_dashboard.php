<?php
    error_reporting(0);
    $query=$this->db->query("SELECT * FROM tbl_inbox WHERE inbox_status='1'");
    $query2=$this->db->query("SELECT * FROM tbl_komentar WHERE komentar_status='0'");
    $jum_comment=$query2->num_rows();
    $jum_pesan=$query->num_rows();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PT. MPA | Dashboard</title>
    <link rel="shorcut icon" type="text/css" href="<?php echo base_url().'assets/images/Logo.png'?>">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?php echo base_url().'assets/bootstrap/css/bootstrap.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/font-awesome/css/font-awesome.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/AdminLTE.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/skins/_all-skins.min.css'?>">
    <?php
        /* Mengambil query report*/
        foreach($visitor as $result)
        {
            $bulan[] = $result->tgl; //ambil bulan
            $value[] = (float) $result->jumlah; //ambil nilai
        }
        /* end mengambil query*/
    ?>
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <?php
    $this->load->view('admin/v_header');
  ?>
        <aside class="main-sidebar">
            <section class="sidebar">
                <ul class="sidebar-menu">
                    <li class="header">Menu Utama</li>
                    <li class="active">
                        <a href="<?php echo base_url().'admin/dashboard'?>">
                            <i class="fa fa-home"></i> <span>Dashboard</span>
                            <span class="pull-right-container">
                                <small class="label pull-right"></small>
                            </span>
                        </a>
                    </li>

                    <!-- <li>
                        <a href="<?php echo base_url().'admin/slider'?>">
                            <i class="fa fa-image"></i> <span>Slider</span>
                            <span class="pull-right-container">
                                <small class="label pull-right"></small>
                            </span>
                        </a>
                    </li> -->

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-newspaper-o"></i>
                            <span>Berita</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo base_url().'admin/tulisan'?>"><i class="fa fa-list"></i> List
                                    Berita</a></li>
                            <li><a href="<?php echo base_url().'admin/tulisan/add_tulisan'?>"><i
                                        class="fa fa-thumb-tack"></i> Post Berita</a></li>
                            <li><a href="<?php echo base_url().'admin/kategori'?>"><i class="fa fa-wrench"></i>
                                    Kategori</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="<?php echo base_url().'admin/pengguna'?>">
                            <i class="fa fa-users"></i> <span>Pengguna</span>
                            <span class="pull-right-container">
                                <small class="label pull-right"></small>
                            </span>
                        </a>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-camera"></i>
                            <span>Gallery</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo base_url().'admin/album'?>"><i class="fa fa-clone"></i> Album</a>
                            </li>
                            <li><a href="<?php echo base_url().'admin/galeri'?>"><i class="fa fa-picture-o"></i>
                                    Photos</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="<?php echo base_url().'admin/product'?>">
                            <i class="fa fa-graduation-cap"></i> <span>Product</span>
                            <span class="pull-right-container">
                                <small class="label pull-right"></small>
                            </span>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo base_url().'admin/inbox'?>">
                            <i class="fa fa-envelope"></i> <span>Inbox</span>
                            <span class="pull-right-container">
                                <small class="label pull-right bg-green"><?php echo $jum_pesan;?></small>
                            </span>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo base_url().'admin/komentar'?>">
                            <i class="fa fa-comments"></i> <span>Komentar</span>
                            <span class="pull-right-container">
                                <small class="label pull-right bg-green"><?php echo $jum_comment;?></small>
                            </span>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo base_url().'admin/login/logout'?>">
                            <i class="fa fa-sign-out"></i> <span>Sign Out</span>
                            <span class="pull-right-container">
                                <small class="label pull-right"></small>
                            </span>
                        </a>
                    </li>
                </ul>
            </section>
        </aside>

        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                    Dashboard
                    <small></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Dashboard</li>
                </ol>
            </section>

            <section class="content">

                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-aqua"><i class="fa fa-chrome"></i></span>
                            <?php
                  $query=$this->db->query("SELECT * FROM tbl_pengunjung WHERE pengunjung_perangkat='Chrome'");
                  $jml=$query->num_rows();
              ?>
                            <div class="info-box-content">
                                <span class="info-box-text">Chrome</span>
                                <span class="info-box-number"><?php echo $jml;?></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-red"><i class="fa fa-firefox"></i></span>
                            <?php
              $query=$this->db->query("SELECT * FROM tbl_pengunjung WHERE pengunjung_perangkat='Firefox' OR pengunjung_perangkat='Mozilla'");
              $jml=$query->num_rows();
            ?>
                            <div class="info-box-content">
                                <span class="info-box-text">Mozilla Firefox</span>
                                <span class="info-box-number"><?php echo $jml;?></span>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix visible-sm-block"></div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-green"><i class="fa fa-bug"></i></span>
                            <?php
                $query=$this->db->query("SELECT * FROM tbl_pengunjung WHERE pengunjung_perangkat='Googlebot'");
                $jml=$query->num_rows();
              ?>
                            <div class="info-box-content">
                                <span class="info-box-text">Googlebot</span>
                                <span class="info-box-number"><?php echo $jml;?></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-yellow"><i class="fa fa-opera"></i></span>
                            <?php
              $query=$this->db->query("SELECT * FROM tbl_pengunjung WHERE pengunjung_perangkat='Opera'");
              $jml=$query->num_rows();
            ?>
                            <div class="info-box-content">
                                <span class="info-box-text">Opera</span>
                                <span class="info-box-number"><?php echo $jml;?></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">Pengunjung bulan ini</h3>
                            </div>
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-12">
                                            <canvas id="canvas" width="1000" height="280"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8">
                        <div class="box box-success">
                            <div class="box-header with-border">
                                <h3 class="box-title">Posting Populer</h3>
                                <table class="table">
                                    <?php
                $query=$this->db->query("SELECT * FROM tbl_tulisan ORDER BY tulisan_views DESC");
                foreach ($query->result_array() as $i) :
                $tulisan_id=$i['tulisan_id'];
                $tulisan_judul=$i['tulisan_judul'];
                $tulisan_views=$i['tulisan_views'];
              ?>
                                    <tr>
                                        <td><?php echo $tulisan_judul;?></td>
                                        <td><?php echo $tulisan_views.' Views';?></td>
                                    </tr>
                                    <?php endforeach;?>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="info-box bg-yellow">
                            <span class="info-box-icon"><i class="fa fa-safari"></i></span>
                            <?php
              $query=$this->db->query("SELECT * FROM tbl_pengunjung WHERE pengunjung_perangkat='Safari'");
              $jml=$query->num_rows();
            ?>
                            <div class="info-box-content">
                                <span class="info-box-text">Safari</span>
                                <span class="info-box-number"><?php echo number_format($jml);?></span>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 100%"></div>
                                </div>
                                <span class="progress-description">
                                    Penggunjung
                                </span>
                            </div>
                        </div>

                        <div class="info-box bg-green">
                            <span class="info-box-icon"><i class="fa fa-globe"></i></span>
                            <?php
              $query=$this->db->query("SELECT * FROM tbl_pengunjung WHERE pengunjung_perangkat='Other' OR pengunjung_perangkat='Internet Explorer'");
              $jml=$query->num_rows();
            ?>
                            <div class="info-box-content">
                                <span class="info-box-text">Lainnya</span>
                                <span class="info-box-number"><?php echo number_format($jml);?></span>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 100%"></div>
                                </div>
                                <span class="progress-description">
                                    Pengunjung
                                </span>
                            </div>
                        </div>

                        <div class="info-box bg-red">
                            <span class="info-box-icon"><i class="fa fa-users"></i></span>
                            <?php
              $query=$this->db->query("SELECT * FROM tbl_pengunjung WHERE DATE_FORMAT(pengunjung_tanggal,'%m%y')=DATE_FORMAT(DATE_SUB(CURDATE(), INTERVAL 1 MONTH),'%m%y')");
              $jml=$query->num_rows();
            ?>
                            <div class="info-box-content">
                                <span class="info-box-text">Pengunjung Bulan Lalu</span>
                                <span class="info-box-number"><?php echo number_format($jml);?></span>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 100%"></div>
                                </div>
                                <span class="progress-description">
                                    Pengunjung
                                </span>
                            </div>
                        </div>

                        <div class="info-box bg-aqua">
                            <span class="info-box-icon"><i class="fa fa-users"></i></span>
                            <?php
              $query=$this->db->query("SELECT * FROM tbl_pengunjung WHERE DATE_FORMAT(pengunjung_tanggal,'%m%y')=DATE_FORMAT(CURDATE(),'%m%y')");
              $jml=$query->num_rows();
            ?>
                            <div class="info-box-content">
                                <span class="info-box-text">Pengunjung Bulan Ini</span>
                                <span class="info-box-number"><?php echo number_format($jml);?></span>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 100%"></div>
                                </div>
                                <span class="progress-description">
                                    Pengunjung
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 1.0
            </div>
            <strong>Copyright &copy; <?= date('Y'); ?> <a href="#">PT. Mandiri Palmera Agrindo</a>.</strong> All rights
            reserved.
        </footer>
    </div>

    <script src="<?php echo base_url().'assets/plugins/jQuery/jquery-2.2.3.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/bootstrap/js/bootstrap.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/plugins/fastclick/fastclick.js'?>"></script>
    <script src="<?php echo base_url().'assets/dist/js/app.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/plugins/sparkline/jquery.sparkline.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'?>"></script>
    <script src="<?php echo base_url().'assets/plugins/slimScroll/jquery.slimscroll.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/plugins/chartjs/Chart.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/dist/js/pages/dashboard2.js'?>"></script>
    <script src="<?php echo base_url().'assets/dist/js/demo.js'?>"></script>
    <script>
    var lineChartData = {
        labels: <?php echo json_encode($bulan);?>,
        datasets: [{
            fillColor: "rgba(60,141,188,0.9)",
            strokeColor: "rgba(60,141,188,0.8)",
            pointColor: "#3b8bba",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(152,235,239,1)",
            data: <?php echo json_encode($value);?>
        }]
    }

    var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Line(lineChartData);

    var canvas = new Chart(myLine).Line(lineChartData, {
        scaleShowGridLines: true,
        scaleGridLineColor: "rgba(0,0,0,.005)",
        scaleGridLineWidth: 0,
        scaleShowHorizontalLines: true,
        scaleShowVerticalLines: true,
        bezierCurve: true,
        bezierCurveTension: 0.4,
        pointDot: true,
        pointDotRadius: 4,
        pointDotStrokeWidth: 1,
        pointHitDetectionRadius: 2,
        datasetStroke: true,
        tooltipCornerRadius: 2,
        datasetStrokeWidth: 2,
        datasetFill: true,
        legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].strokeColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
        responsive: true
    });
    </script>

</body>

</html>