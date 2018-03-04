

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Detail Ijin Magang</h1>
                </div>
            </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a href="<?php echo base_url()."index.php/ijin_magang/createDetail?id=".$_GET['id'];?>" class="btn btn-success">Tambah Mahasiswa</a>
                                 <a href="<?php echo base_url()."index.php/ijin_magang/cetak?id=".$_GET['id'];?>" target="_blank" class="btn btn-primary">Cetak</a> 
                            </div>
                            <!-- /.panel-heading -->

                             <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <table width="100%" border="0">
                                            <?php foreach ($magang as $key) {?>
                                        <tr>
                                            <td width="25%">kepada</td>
                                            <td>: <?php echo $key->kepada?></td>
                                        </tr>
                                        <tr>
                                            <td width="25%">alamat_kepada</td>
                                            <td>: <?php echo $key->alamat_kepada?></td>
                                        </tr>
                                        <tr>
                                            <td width="25%">tempat_penelitian</td>
                                            <td>: <?php echo $key->tempat_penelitian?></td>
                                        </tr>
                                        <tr>
                                            <td width="25%">tanggal_mulai</td>
                                            <td>: <?php echo $key->tanggal_mulai?></td>
                                        </tr>
                                        <tr>
                                            <td width="25%">tanggal_selesai</td>
                                            <td>: <?php echo $key->tanggal_selesai?></td>
                                        </tr>
                                        <tr>
                                            <td width="25%">nama_instansi</td>
                                            <td>: <?php echo $key->nama_instansi?></td>
                                        </tr>
                                        <tr>
                                            <td width="25%">nama_pembimbing</td>
                                            <td>: <?php echo $key->nama_pembimbing?></td>
                                        </tr>
                                        <tr>
                                            <td width="25%">nip_pembimbing</td>
                                            <td>: <?php echo $key->nip_pembimbing?></td>
                                        </tr>
                                         <?php }?>
                                    </table>
                                </div>
                            </div>


                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <td>NIM</td>
                                                <th>Topik</th>
                                                <th>Setting</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             <?php foreach ($mahasiswa as $detail) {?>
                                            <tr class="odd gradeX">
                                                <td><?php echo $detail->nama; ?></td>
                                                <td><?php echo $detail->nim; ?></td>
                                                <td><?php echo $detail->topik; ?></td>
                                                <td class="center">
                                                    <a href="<?php echo base_url()."index.php/ijin_magang/deleteDetail?id=".$detail->id."&id_magang=".$_GET['id'];?>" class="btn btn-danger">Delete</a> 
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                    <br>
                                </div>
                                <!-- /.table-responsive -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>

        </div>
    </div>
