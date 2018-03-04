

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Buat Ijin Pinjam Alat</h1>
                </div>
            </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Form Ijin Pinjam Alat
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <form role="form" method="post" action="<?php echo base_url();?>index.php/ijin_pinjam_alat/save">
                                        <?php
                                    foreach ($pinjam_alat as $key) {
                                    ?>
                                        <div class="form-group">
                                                <label>Nama Instansi</label>
                                                <input required="true" type="text" name="nama_instansi" value="<?php echo $key->nama_instansi;?>" class="form-control">
                                            </div>
                                        <div class="form-group">
                                                <label>Kepada</label>
                                                <input required="true" type="text" name="kepada" value="<?php echo $key->kepada;?>" class="form-control">
                                            </div>
                                        <div class="form-group">
                                                <label>Alamat Instansi</label>
                                                <input required="true" type="text" name="alamat_kepada" value="<?php echo $key->alamat_kepada;?>" class="form-control">
                                            </div>
                                        <div class="form-group">
                                                <label>Kota Instansi</label>
                                                <input required="true" type="text" name="tempat_instansi" value="<?php echo $key->tempat_instansi;?>" class="form-control">
                                            </div>
                                        <div class="form-group">
                                                <label>Nama Mahasiswa</label>
                                                <input required="true" type="text" name="nama" value="<?php echo $key->nama;?>" class="form-control">
                                            </div>
                                        <div class="form-group">
                                                <label>NIM</label>
                                                <input required="true" type="text" name="nim" value="<?php echo $key->nim;?>" class="form-control">
                                            </div>
                                        <div class="form-group">
                                                <label>Topik</label>
                                                <input required="true" type="text" name="topik" value="<?php echo $key->topik;?>" class="form-control">
                                            </div>
                                        <div class="form-group">
                                                <label>Nama Alat</label>
                                                <input required="true" type="text" name="nama_alat" value="<?php echo $key->nama_alat;?>" class="form-control">
                                            </div>
                                        <div class="form-group">
                                                <label>Tasnggal Mulai</label>
                                                <input required="true" type="date" name="tanggal_mulai" value="<?php echo $key->tanggal_mulai;?>" class="form-control">
                                            </div>
                                        <div class="form-group">
                                                <label>Tanggal Selesai</label>
                                                <input required="true" type="date" name="tanggal_selesai" value="<?php echo $key->tanggal_selesai;?>" class="form-control">
                                            </div>
                                        <div class="form-group">
                                                <label>Nama Pembimbing</label>
                                                <input required="true" type="text" name="nama_pembimbing" value="<?php echo $key->nama_pembimbing;?>" class="form-control">
                                            </div>
                                        <div class="form-group">
                                                <label>NIM Pembimbing</label>
                                                <input required="true" type="text" name="nip_pembimbing" value="<?php echo $key->nip_pembimbing;?>" class="form-control">
                                                <input required="true" type="hidden" name="id" value="<?php echo $key->id;?>" >
                                            </div>
                                             <div class="form-group">
                                                 <input type="submit" class="btn btn-primary" value="Submit" >
                                                <a href="<?php echo base_url()."index.php/ijin_pinjam_alat/delete?id=".$key->id;?>" class="btn btn-danger" >Delete</a>
                                            </div>
                                            <?php
                                                }
                                                ?>
                                        </form>
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
