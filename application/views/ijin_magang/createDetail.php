

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Taambah Mahasiswa Magang</h1>
                </div>
            </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Form Mahasiswa Magang
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <form role="form" method="post" action="<?php echo base_url();?>index.php/ijin_magang/saveDetail">
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
                                                <input required="true" type="hidden" name="id_magang" value="<?php echo $_GET['id'];?>" class="form-control">
                                            </div>
                                            
                                             <div class="form-group">
                                                <input type="submit" value="Submit" >
                                                <input type="reset" value="Reset" >
                                            </div>
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
