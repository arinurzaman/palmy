<!--Counter Inbox-->
<?php
$query = $this->db->query("SELECT * FROM tbl_inbox WHERE inbox_status='1'");
$query2 = $this->db->query("SELECT * FROM tbl_komentar WHERE komentar_status='0'");
$jum_comment = $query2->num_rows();
$jum_pesan = $query->num_rows();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PT. MPA | Product</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="shorcut icon" type="text/css" href="<?php echo base_url() . 'assets/images/Logo.png' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/bootstrap/css/bootstrap.min.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/font-awesome/css/font-awesome.min.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/datatables/dataTables.bootstrap.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/dist/css/AdminLTE.min.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/dist/css/skins/_all-skins.min.css' ?>">
    <link rel="stylesheet" type="text/css"
        href="<?php echo base_url() . 'assets/plugins/toast/jquery.toast.min.css' ?>" />
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
                        <a href="<?php echo base_url() . 'admin/dashboard' ?>">
                            <i class="fa fa-home"></i> <span>Dashboard</span>
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
                            <li><a href="<?php echo base_url() . 'admin/tulisan' ?>"><i class="fa fa-list"></i> List
                                    Berita</a></li>
                            <li><a href="<?php echo base_url() . 'admin/tulisan/add_tulisan' ?>"><i
                                        class="fa fa-thumb-tack"></i> Post Berita</a></li>
                            <li><a href="<?php echo base_url() . 'admin/kategori' ?>"><i class="fa fa-wrench"></i>
                                    Kategori</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo base_url() . 'admin/pengguna' ?>">
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
                            <li><a href="<?php echo base_url() . 'admin/album' ?>"><i class="fa fa-clone"></i> Album</a>
                            </li>
                            <li><a href="<?php echo base_url() . 'admin/galeri' ?>"><i class="fa fa-picture-o"></i>
                                    Photos</a></li>
                        </ul>
                    </li>

                    <li class="active">
                        <a href="<?php echo base_url() . 'admin/product' ?>">
                            <i class="fa fa-graduation-cap"></i> <span>Data Product</span>
                            <span class="pull-right-container">
                                <small class="label pull-right"></small>
                            </span>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo base_url() . 'admin/inbox' ?>">
                            <i class="fa fa-envelope"></i> <span>Inbox</span>
                            <span class="pull-right-container">
                                <small class="label pull-right bg-green"><?php echo $jum_pesan; ?></small>
                            </span>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo base_url() . 'admin/komentar' ?>">
                            <i class="fa fa-comments"></i> <span>Komentar</span>
                            <span class="pull-right-container">
                                <small class="label pull-right bg-green"><?php echo $jum_comment; ?></small>
                            </span>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo base_url() . 'administrator/logout' ?>">
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
                    Data Product
                    <small></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Product</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">

                            <div class="box">
                                <div class="box-header">
                                    <a class="btn btn-success btn-flat" data-toggle="modal" data-target="#myModal"><span
                                            class="fa fa-plus"></span> Add Product</a>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <table id="example1" class="table table-striped" style="font-size:13px;">
                                        <thead>
                                            <tr>
                                                <th>Photo</th>
                                                <th>Nama Product</th>
                                                <th>Title</th>
                                                <th>Keterangan</th>
                                                <th>Spesifikasi</th>
                                                <th style="text-align:right;">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                          $no = 0;
                          foreach ($data->result_array() as $i) :
                          $no++;
                          $id           = $i['product_id'];
                          $nama         = $i['product_nama'];
                          $title        = $i['product_title'];
                          $ket          = $i['product_ket'];
                          $spesifikasi  = $i['product_spesifikasi'];
                          $photo        = $i['product_photo'];
                      ?>
                                            <tr>
                                                <?php if (empty($photo)) : ?>
                                                <td><img width="40" height="40" class="img-circle"
                                                        src="<?php echo base_url() . 'assets/images/user_blank.png'; ?>">
                                                </td>
                                                <?php else : ?>
                                                <td><img width="40" height="40" class="img-circle"
                                                        src="<?php echo base_url() . 'assets/images/product/' . $photo; ?>">
                                                </td>
                                                <?php endif; ?>

                                                <td><?= $nama; ?></td>
                                                <td><?= $title; ?></td>
                                                <td><?= $ket; ?></td>
                                                <td><?= $spesifikasi; ?></td>

                                                <td style="text-align:right;">
                                                    <a class="btn" data-toggle="modal"
                                                        data-target="#ModalEdit<?= $id; ?>"><span
                                                            class="fa fa-pencil"></span></a>
                                                    <a class="btn" data-toggle="modal"
                                                        data-target="#ModalHapus<?= $id; ?>"><span
                                                            class="fa fa-trash"></span></a>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
        </div>

        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 1.0
            </div>
            <strong>Copyright &copy; <?= date('Y'); ?> <a href="#">PT. Mandiri Palmera Agrindo</a>.</strong> All rights
            reserved.
        </footer>
        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->

    <!--Modal Add Product-->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true"><span class="fa fa-close"></span></span></button>
                    <h4 class="modal-title" id="myModalLabel">Add Product</h4>
                </div>
                <form class="form-horizontal" action="<?php echo base_url() . 'admin/product/simpan_product' ?>"
                    method="post" enctype="multipart/form-data">
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Nama</label>
                            <div class="col-sm-7">
                                <input type="text" name="xnama" class="form-control" id="xnama" placeholder="Nama"
                                    required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="title" class="col-sm-4 control-label">Title</label>
                            <div class="col-sm-7">
                                <input type="text" name="xtitle" class="form-control" id="title" placeholder="Title"
                                    required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="ket" class="col-sm-4 control-label">Keterangan</label>
                            <div class="col-sm-7">
                                <input type="text" name="xket" class="form-control" id="ket" placeholder="Keterangan"
                                    required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="spesifikasi" class="col-sm-4 control-label">Spesifikasi</label>
                            <div class="col-sm-7">
                                <textarea name="xspesifikasi" id="xspesifikasi" class="form-control" cols="30" rows="10"
                                    placeholder="Spesifikasi" required></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Photo</label>
                            <div class="col-sm-7">
                                <input type="file" name="filefoto" />
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
    <!--End Modal Add Product-->

    <!--Modal Edit Product-->
    <?php foreach ($data->result_array() as $i) :
    $id           = $i['product_id'];
    $nama         = $i['product_nama'];
    $title        = $i['product_title'];
    $ket          = $i['product_ket'];
    $spesifikasi  = $i['product_spesifikasi'];
    $photo        = $i['product_photo'];
  ?>

    <div class="modal fade" id="ModalEdit<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true"><span class="fa fa-close"></span></span></button>
                    <h4 class="modal-title" id="myModalLabel">Edit Product</h4>
                </div>

                <form class="form-horizontal" action="<?php echo base_url() . 'admin/product/update_product' ?>"
                    method="post" enctype="multipart/form-data">

                    <div class="modal-body">
                        <input type="hidden" name="kode" value="<?php echo $id; ?>" />
                        <input type="hidden" value="<?php echo $photo; ?>" name="gambar">

                        <div class="form-group">
                            <label for="nama" class="col-sm-4 control-label">Nama</label>
                            <div class="col-sm-7">
                                <input type="text" name="xnama" value="<?php echo $nama; ?>" class="form-control"
                                    id="inputUserName" placeholder="Nama" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Title</label>
                            <div class="col-sm-7">
                                <input type="text" name="xtitle" value="<?php echo $title; ?>" class="form-control"
                                    id="inputUserName" placeholder="Title" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="ket" class="col-sm-4 control-label">Keterangan</label>
                            <div class="col-sm-7">
                                <input type="text" name="xket" value="<?php echo $ket; ?>" class="form-control"
                                    id="inputUserName" placeholder="Tempat Lahir" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="spesifikasi" class="col-sm-4 control-label">Spesifikasi</label>
                            <div class="col-sm-7">
                                <input type="text" name="xspesifikasi" value="<?php echo $spesifikasi; ?>"
                                    class="form-control" id="inputUserName" placeholder="Spesifikasi" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Photo</label>
                            <div class="col-sm-7">
                                <input type="file" name="filefoto" />
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
    <?php endforeach; ?>
    <!--End Modal Edit Product-->

    <?php foreach ($data->result_array() as $i) :
    $id           = $i['product_id'];
    $nama         = $i['product_nama'];
    $title        = $i['product_title'];
    $ket          = $i['product_ket'];
    $spesifikasi  = $i['product_spesifikasi'];
    $photo        = $i['product_photo'];
  ?>
    <!--Modal Hapus Product-->
    <div class="modal fade" id="ModalHapus<?php echo $id; ?>" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true"><span class="fa fa-close"></span></span></button>
                    <h4 class="modal-title" id="myModalLabel">Hapus Product</h4>
                </div>
                <form class="form-horizontal" action="<?php echo base_url() . 'admin/product/hapus_product' ?>"
                    method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <input type="hidden" name="kode" value="<?php echo $id; ?>" />
                        <input type="hidden" value="<?php echo $photo; ?>" name="gambar">
                        <p>Apakah Anda yakin mau menghapus product ini <b><?php echo $nama; ?></b> ?</p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--End Modal Hapus Product-->
    <?php endforeach; ?>

    <script src="<?php echo base_url() . 'assets/plugins/jQuery/jquery-2.2.3.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/bootstrap/js/bootstrap.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/plugins/datatables/jquery.dataTables.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/plugins/datatables/dataTables.bootstrap.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/plugins/slimScroll/jquery.slimscroll.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/plugins/fastclick/fastclick.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/dist/js/app.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/dist/js/demo.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'assets/plugins/toast/jquery.toast.min.js' ?>"></script>
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
    <?php if ($this->session->flashdata('msg') == 'error') : ?>
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

    <?php elseif ($this->session->flashdata('msg') == 'success') : ?>
    <script type="text/javascript">
    $.toast({
        heading: 'Success',
        text: "Product Berhasil disimpan ke database.",
        showHideTransition: 'slide',
        icon: 'success',
        hideAfter: false,
        position: 'bottom-right',
        bgColor: '#7EC857'
    });
    </script>
    <?php elseif ($this->session->flashdata('msg') == 'info') : ?>
    <script type="text/javascript">
    $.toast({
        heading: 'Info',
        text: "Product berhasil di update",
        showHideTransition: 'slide',
        icon: 'info',
        hideAfter: false,
        position: 'bottom-right',
        bgColor: '#00C9E6'
    });
    </script>
    <?php elseif ($this->session->flashdata('msg') == 'success-hapus') : ?>
    <script type="text/javascript">
    $.toast({
        heading: 'Success',
        text: "Product Berhasil dihapus.",
        showHideTransition: 'slide',
        icon: 'success',
        hideAfter: false,
        position: 'bottom-right',
        bgColor: '#7EC857'
    });
    </script>
    <?php else : ?>

    <?php endif; ?>
</body>

</html>