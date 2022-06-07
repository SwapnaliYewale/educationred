
 <form method="post" action="<?php echo base_url('admin/universitycontroller/submit'); ?>"  enctype="multipart/form-data">
                         <div class="col-md-6 col-md-offset-3">
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Add University</h3>
                                </div>
                                <div class="box-body">
                                    <!-- Date range -->
                                    <div class="form-group">
                                        <label>Country Name:</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-list"></i>
                                            </div>
                                            <select type="text" class="form-control pull-right" id="cid" name="cid" required="">
                                                <?php
                                                foreach ($upload_data as  $udata) {
                                                    ?>
                                              <option value="<?php echo $udata->contry_id; ?>"><?php echo "$udata->contry_name";?></option>
                                                <?php
                                                 } 
                                                 ?>
                                            </select>
                                            
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->

                                    <!-- Date and time range -->
                                    <div class="form-group">
                                        <label>University Name:</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-file-text"></i>
                                            </div>
                                            <textarea type="text" class="form-control pull-right" id="uname" name="uname" required=""></textarea>  
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->


                                    <!-- Date and time range -->
                                    <div class="form-group">
                                        <label>Url:</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-file-text"></i>
                                            </div>
                                            <textarea type="text" class="form-control pull-right" id="urls" name="urls" required=""></textarea>  
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->                                     

                                    

                                    <!-- Date and time range -->
                                    <div class="form-group">
                                        
                                        <div class="input-group">
                                          
                                            <input type="submit" name="btnUpdate" class="btn btn-primary" value="Add University">
                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                             <a href="<?php echo base_url('list-university'); ?>" class="btn btn-danger">Back</a><br>
                                        </div>
                                    </div><!-- /.form group -->

                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
</form>