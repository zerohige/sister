<?php include 'header.php'; ?>
<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <h4 style="margin-bottom: 0px">Preview File</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu" style="padding-top: 0px">
                                <li><a href="#">Home</a> <span class="bread-slash">/</span></li>
                                <li><span class="bread-blod">Preview File</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel">

                <div class="panel-heading">
                    <h3 class="panel-title">Preview File</h3>
                </div>
                <div class="panel-body">

                    <a href="arsip.php" class="btn btn-sm btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>

                    <br>
                    <br>

                    <?php 
                    $id = mysqli_real_escape_string($koneksi, $_GET['id']);  
                    $data = mysqli_query($koneksi,"SELECT * FROM arsip,kategori,petugas WHERE arsip_petugas=petugas_id AND arsip_kategori=kategori_id AND arsip_id='$id'");
                    
                    if (!$data || mysqli_num_rows($data) == 0) {
                        echo "Data tidak ditemukan.";
                        exit;
                    }

                    while($d = mysqli_fetch_array($data)){
                        ?>

                        <div class="row">
                            <div class="col-lg-4">

                                <table class="table">
                                    <tr>
                                        <th>Kode File</th>
                                        <td><?php echo htmlspecialchars($d['File_kode']); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Waktu Upload</th>
                                        <td><?php echo date('H:i:s  d-m-Y', strtotime($d['arsip_waktu_upload'])); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Nama File</th>
                                        <td><?php echo htmlspecialchars($d['arsip_nama']); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Kategori</th>
                                        <td><?php echo htmlspecialchars($d['kategori_nama']); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Jenis File</th>
                                        <td><?php echo htmlspecialchars($d['arsip_jenis']); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Petugas Pengupload</th>
                                        <td><?php echo htmlspecialchars($d['petugas_nama']); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Keterangan</th>
                                        <td><?php echo htmlspecialchars($d['arsip_keterangan']); ?></td>
                                    </tr>
                                </table>

                            </div>
                            <div class="col-lg-8">

                                <?php 
                                $file = htmlspecialchars($d['arsip_file']);
                                if(in_array($d['arsip_jenis'], ["png", "jpg", "gif", "jpeg"])){
                                    ?>
                                    <img src="../arsip/<?php echo $file; ?>" alt="Preview file">
                                    <?php
                                } elseif($d['arsip_jenis'] == "pdf"){
                                    ?>
                                    <div class="pdf-singe-pro">
                                        <iframe src="../arsip/<?php echo $file; ?>" width="100%" height="500px"></iframe>
                                    </div>
                                    <?php
                                } else {
                                    ?>
                                    <p>Preview tidak tersedia, silahkan <a target="_blank" style="color: blue" href="../arsip/<?php echo $file; ?>">Download di sini.</a></p>
                                    <?php
                                }
                                ?>

                            </div>
                        </div>

                        <?php 
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
