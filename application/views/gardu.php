<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Data Gardu</h1>
    </div>
</div>
<div class="row">
     <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Gardu
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">


                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Gardu</th>
                                            <th>Jenis Gardu</th>
                                            <th>GI Gardu</th>
                                            <th>Alamat Gardu</th>
                                            <th>Temp Gardu</th>
                                            <th>Trafo</th>
                                            <th>Operasi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $no=1;
                                            foreach ($gardu as $gardu_show) {
                                                echo"<tr class=odd gradeX>
                                            <td>".$no."</td>
                                            <td>".$gardu_show->nama_gardu."</td>
                                            <td>".$gardu_show->nama_jenis_gardu."</td>
                                            <td>".$gardu_show->nama_gi_gardu."</td>
                                            <td>".$gardu_show->alamat_gardu."</td>
                                            <td>".$gardu_show->temp_gardu."</td>
                                            <td>".$gardu_show->name_trafo."</td>
                                            <td><a href=".site_url('')."/dashboard/edit_gardu/$gardu_show->id_gardu> <button type='button' class='btn btn-success btn-circle'><i class='fa fa-link'></i></button></a>
                                            <a href=".site_url('')."/dashboard/delete_gardu/$gardu_show->id_gardu><button type='button' class='btn btn-warning btn-circle'><i class='fa fa-times'></i></button></a>
                                            </td>
                                        </tr>";
                                             $no++;
                                            }
                                        ?>
                                        
                                    </tbody>
                                </table>

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