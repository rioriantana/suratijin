

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Ijin Penelitian</h1>
                </div>
            </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Form Ijin Penelitian
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <form role="form" method="post" action="<?php echo base_url();?>index.php/ijin_penelitian/update">


<?php
foreach ($penelitian as $key) {
?>
	
                                        
                                            <div class="form-group">
                                                <label>Nama Instansi</label>
                                                <input required="true" value="<?php echo $key->nama_instansi;?>" type="text" name="nama_instansi" class="form-control">
                                            </div>
                                        <div class="form-group">
                                                <label>Kepada</label>
                                                <input required="true" value="<?php echo $key->kepada;?>" type="text" name="kepada" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Alamat Instansi</label>
                                                <input required="true" value="<?php echo $key->alamat_kepada;?>" type="text" name="alamat_kepada" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Kota Instansi</label>
                                                <input required="true" value="<?php echo $key->tempat_penelitian;?>" type="text" name="tempat_penelitian" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Nama</label>
                                                <input required="true" value="<?php echo $key->nama;?>" type="text" name="nama" class="form-control">
                                            </div>
                                                   <div class="form-group">
                                                <label>NIM</label>
                                                <input required="true" value="<?php echo $key->nim;?>" type="text" name="nim" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Topik</label>
                                                <input required="true" value="<?php echo $key->topik;?>" type="text" name="topik" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Tanggal Mulai</label>
                                                <input required="true" value="<?php echo $key->tanggal_mulai;?>" type="date" name="tanggal_mulai" class="form-control">
                                            </div>
                                                   <div class="form-group">
                                                <label>Tanggal Selesai</label>
                                                <input required="true" value="<?php echo $key->tanggal_selesai;?>" type="date" name="tanggal_selesai" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Nama Pembimbing</label>
                                                <input required="true" value="<?php echo $key->nama_pembimbing;?>" type="text" name="nama_pembimbing" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>NIP Pembimbing</label>
                                                <input required="true" value="<?php echo $key->nip_pembimbing;?>" type="text" name="nip_pembimbing" class="form-control">
                                                <input value="<?php echo $key->id;?>" type="hidden" name="id" class="form-control">
                                            </div>
                                             <div class="form-group">
                                                <input type="submit" class="btn btn-primary" value="Submit" >
                                                <a href="<?php echo base_url()."index.php/ijin_penelitian/delete?id=".$key->id;?>" class="btn btn-danger" >Delete</a>
                                            </div>

<?php
}
?>
                                        </form>
                                    <br>
                                    <?php 
									echo $this->pagination->create_links();
									?>
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