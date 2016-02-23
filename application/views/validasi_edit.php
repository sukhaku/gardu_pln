<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data Gardu</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
<div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Ubah Gardu
                        </div>
                        <div class="panel-body">
                            <form role="form" method="post" action="<?php echo site_url();?>/dashboard/save_edit_gardu">
                                <div class="form-group">
                                    <label>Nama Gardu</label>
                                                <input class="form-control" name="id_gardu" type="hidden" value="<?php echo set_value('id_gardu');?>"/><?php echo form_error('nama_gardu');?>  
                                
                                        <input class="form-control" name="nama_gardu" type="text" value="<?php echo set_value('nama_gardu');?>"/><?php echo form_error('nama_gardu');?>  
                                </div>
                                <div class="form-group">
                                    <label>Jenis Gardu</label>
                                        <select class="form-control" name="jenis_gardu">
                                            <?php 
                                                foreach ($jenis_gardu as $value) {
                                                    if($value->id_jenis_gardu==set_value('jenis_gardu')){
                                                        echo"<option value=$value->id_jenis_gardu selected>$value->nama_jenis_gardu</option>";
                                                    }else{
                                                        echo"<option value=$value->id_jenis_gardu>$value->nama_jenis_gardu</option>";    
                                                    }
                                                }
                                            ?>
                                            
                                        </select>
                                </div>
    
                                <div class="form-group">
                                    <label>GI Gardu</label>
                                        <select class="form-control" name="gi_gardu">
                                            <?php 
                                                foreach ($gi_gardu as $value) {
                                                    if($value->id_gi_gardu==set_value('gi_gardu')){
                                                        echo"<option value=$value->id_gi_gardu selected>$value->nama_gi_gardu</option>";
                                                    }else{
                                                        echo"<option value=$value->id_gi_gardu>$value->nama_gi_gardu</option>";
                                                    }
                                                }
                                            ?>
                                            
                                        </select>
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea class="form-control" rows="3" name="alamat"><?php echo set_value('alamat')?></textarea><?php echo form_error('alamat');?>
    
                                </div>
                                <div class="form-group">
                                    <label>Temp Gardu</label>
                                        <input class="form-control" name="temp_gardu" type="text" value="<?php echo set_value('temp_gardu');?>"/> <?php echo form_error('temp_gardu'); ?>                                        
                                </div>
                                <div class="form-group">
                                    <label>Trafo</label>
                                        <select class="form-control" name="jenis_trafo">
                                            <?php 
                                                foreach ($trafo_list as $value) {
                                                    if($value->id_name==set_value('jenis_trafo')){
                                                        echo"<option value=$value->id_name selected>$value->name_trafo</option>";
                                                    }else{
                                                        echo"<option value=$value->id_name>$value->name_trafo</option>";    
                                                    }
                                                }
                                            ?>
                                            
                                        </select>
                                </div>

                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <button type="reset" class="btn btn-default">Reset</button>

    
                            </form>    
                        </div>
                        <div class="panel-footer">
                            
                        </div>
                    </div>
                </div>
</div>