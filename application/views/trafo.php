<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Data Trafo</h1>
    </div>
</div>
<div class="row">
     <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Trafo
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">


                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Trafo</th>
                                            <th>SN Trafo</th>
                                            <th>Tipe Trafo</th>
                                            <th>Kapasitas Trafo</th>
                                            <th>Hvnominal Trafo</th>
                                            <th>Lvnominal Trafo</th>
                                            <th>Temperatur Oil</th>
                                            <th>Born Trafo</th>
                                            <th>Operasi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $no=1;
                                            foreach ($trafo as $trafo_show) {
                                                echo"<tr class=odd gradeX>
                                            <td>".$no."</td>
                                            <td>".$trafo_show->name_trafo."</td>
                                            <td>".$trafo_show->sn_trafo."</td>
                                            <td>".$trafo_show->apasitas_trafo."</td>
                                            <td>".$trafo_show->hvnominal_trafo."</td>
                                            <td>".$trafo_show->lvnominal_trafo."</td>
                                            <td>".$trafo_show->temp_oil_trafo."</td>
                                            <td>".$trafo_show->born_trafo."</td>
                                            <td>".$trafo_show->type_trafo."</td>
                              
                                            <td><a href=".site_url('')."/dashboard/edit_trafo/$gardu_show->id_gardu> <button type='button' class='btn btn-success btn-circle'><i class='fa fa-link'></i></button></a>
                                            <a href=".site_url('')."/dashboard/delete_gardu/$gardu_show->id_gardu><button type='button' class='btn btn-warning btn-circle'><i class='fa fa-times'></i></button></a>
                                            </td>
                                        </tr>";
                                             $no++;
                                            }
                                        ?>
                                        
                                    </tbody>
                                </table>

                                <a href="<?php echo site_url()?>/dashboard/add_gardu/"><button type="button" class="btn btn-primary">Tambah Gardu</button></a>
                            <br><br>
                            </div>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
</div>