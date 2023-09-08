<!--Counter Inbox-->
<?php
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
    <title>PT. MPA | Gallery</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="shorcut icon" type="text/css" href="<?php echo base_url().'assets/images/Logo.png'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/bootstrap/css/bootstrap.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/font-awesome/css/font-awesome.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/datatables/dataTables.bootstrap.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/AdminLTE.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/skins/_all-skins.min.css'?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/plugins/toast/jquery.toast.min.css'?>" />
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
                    <li>
                        <a href="<?php echo base_url().'admin/dashboard'?>">
                            <i class="fa fa-home"></i> <span>Dashboard</span>
                            <span class="pull-right-container">
                                <small class="label pull-right"></small>
                            </span>
                        </a>
                    </li>

                    <li class="treeview active">
                        <a href="<?php echo base_url().'admin/slider'?>">
                            <i class="fa fa-image"></i> <span>Slider</span>
                            <span class="pull-right-container">
                                <small class="label pull-right"></small>
                            </span>
                        </a>
                    </li>

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
                            <li class="active"><a href="<?php echo base_url().'admin/galeri'?>"><i
                                        class="fa fa-picture-o"></i> Photos</a></li>
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
                        <a href="<?php echo base_url().'administrator/logout'?>">
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
                    Gallery Photos
                    <small></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Photos</li>
                </ol>
            </section>

            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">

                            <div class="box">
                                <div class="box-header">
                                    <a class="btn btn-success btn-flat" data-toggle="modal" data-target="#myModal"><span
                                            class="fa fa-plus"></span> Add Photo</a>
                                </div>
                                <div class="box-body">
                                    <table id="example1" class="table table-striped" style="font-size:13px;">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Slider</th>
                                                <th style="text-align:right;">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $no = 1;
                                                foreach ($slider as $s) {
                                            ?>
                                            <tr>
                                                <td><?= $no++;?></td>
                                                <td><img src="<?= base_url('assets/images/slider/' . $s->slider_gambar) ?>"
                                                        style="width:80px;"></td>
                                                <td style="text-align:right;">
                                                    <a class="btn" data-toggle="modal"
                                                        data-target="#ModalEdit<?= $s->slider_id;?>"><span
                                                            class="fa fa-pencil"></span>
                                                    </a>
                                                    <a onclick="javascript: return confirm('Apakah Anda Yakin Menghapus Slider Ini !!!')"
                                                        class="fa fa-trash"
                                                        href="<?= base_url() ?>admin/slider/delete/<?= $s->slider_id ?>/<?= $s->slider_gambar ?>">
                                                    </a>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
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
        <div class="control-sidebar-bg"></div>
    </div>

    <!--Modal Add Slider-->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true"><span class="fa fa-close"></span></span></button>
                    <h4 class="modal-title" id="myModalLabel">Add Photo</h4>
                </div>
                <form class="form-horizontal" action="<?php echo base_url().'admin/Slider/upload'?>" method="post"
                    enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="image" class="col-sm-4 control-label">Photo</label>
                            <div class="col-sm-7">
                                <input type="file" id="image" name="image" class="form-control mb-5px" required />
                                <span class="text-danger">Maximal Size 2 MB</span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="<?php echo base_url().'assets/plugins/jQuery/jquery-2.2.3.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/bootstrap/js/bootstrap.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/plugins/datatables/jquery.dataTables.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/plugins/datatables/dataTables.bootstrap.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/plugins/slimScroll/jquery.slimscroll.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/plugins/fastclick/fastclick.js'?>"></script>
    <script src="<?php echo base_url().'assets/dist/js/app.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/dist/js/demo.js'?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/plugins/toast/jquery.toast.min.js'?>"></script>
    <script>
    $(function() {
        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });
    });
    </script>
    <?php if($this->session->flashdata('msg')=='error'):?>
    <script type="text/javascript">
    $.toast({
        heading: 'Error',
        text: "Password dan Ulangi Password yang Anda masukan tidak sama.",
        showHideTransition: 'slide',
        icon: 'error',
        hideAfter: false,
        position: 'bottom-right',
        bgColor: '#FF4859'
    });
    </script>

    <?php elseif($this->session->flashdata('msg')=='success'):?>
    <script type="text/javascript">
    $.toast({
        heading: 'Success',
        text: "Photo Berhasil disimpan ke database.",
        showHideTransition: 'slide',
        icon: 'success',
        hideAfter: false,
        position: 'bottom-right',
        bgColor: '#7EC857'
    });
    </script>
    <?php elseif($this->session->flashdata('msg')=='info'):?>
    <script type="text/javascript">
    $.toast({
        heading: 'Info',
        text: "Photo berhasil di update",
        showHideTransition: 'slide',
        icon: 'info',
        hideAfter: false,
        position: 'bottom-right',
        bgColor: '#00C9E6'
    });
    </script>
    <?php elseif($this->session->flashdata('msg')=='success-hapus'):?>
    <script type="text/javascript">
    $.toast({
        heading: 'Success',
        text: "Photo Berhasil dihapus.",
        showHideTransition: 'slide',
        icon: 'success',
        hideAfter: false,
        position: 'bottom-right',
        bgColor: '#7EC857'
    });
    </script>
    <?php else:?>

    <?php endif;?>
</body>

</html>