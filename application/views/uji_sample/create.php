

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Buat Ijin Uji Sample</h1>
                </div>
            </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Form Ijin Uji Sample
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <form role="form" method="post" action="<?php echo base_url();?>index.php/uji_sample/save">
                                            <div class="form-group">
                                                <label>Nama Instansi</label>
                                                <input required="true" type="text" name="nama_instansi" class="form-control">
                                            </div>
                                        <div class="form-group">
                                                <label>Kepada</label>
                                                <input required="true" type="text" name="kepada" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Alamat Instansi</label>
                                                <input required="true" type="text" name="alamat_kepada" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Kota Instansi</label>
                                                <input required="true" type="text" name="tempat_penelitian" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Nama</label>
                                                <input required="true" type="text" name="nama" class="form-control">
                                            </div>
                                                   <div class="form-group">
                                                <label>NIM</label>
                                                <input required="true" type="text" name="nim" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Topik</label>
                                                <input required="true" type="text" name="topik" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Tanggal Mulai</label>
                                                <input required="true" type="date" name="tanggal_mulai" class="form-control">
                                            </div>
                                                   <div class="form-group">
                                                <label>Tanggal Selesai</label>
                                                <input required="true" type="date" name="tanggal_selesai" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Nama Pembimbing</label>
                                                <input required="true" type="text" name="nama_pembimbing" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>NIP Pembimbing</label>
                                                <input required="true" type="text" name="nip_pembimbing" class="form-control">
                                            </div>
                                                           
                                             <div class="form-group">
                                                <input type="submit" value="Submit" >
                                                <input type="reset" value="Reset" >
                                            </div>
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
