

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">List Ijin Uji Sample</h1>
                </div>
            </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a href="<?php echo base_url()."index.php/uji_sample/create";?>" class="btn btn-success">Buat Surat Ijin Uji Sample</a>
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <td>Nama Instansi</td>
                                                <th>Nama Mahasiswa</th>
                                                <th>Tanggal Mulai</th>
                                                <th>Topik</th>
                                                <th>Cetak</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php foreach ($uji_sample as $key) {?>
                                            <tr class="odd gradeX">
                                                <td><?php echo $key->nama_instansi; ?></td>
                                                <td><?php echo $key->nama; ?></td>
                                                <td><?php echo $key->tanggal_mulai; ?></td>
                                                <td><?php echo $key->topik; ?></td>
                                                <td class="center"><a href="<?php echo base_url()."index.php/uji_sample/cetak?id=".$key->id;?>" target="_blank" class="btn btn-primary">Cetak</a> <a href="<?php echo base_url()."index.php/uji_sample/show?id=".$key->id;?>" class="btn btn-warning">Edit</a></td>
                                            </tr>
                                            <?php }?>
                                        </tbody>
                                    </table>
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
