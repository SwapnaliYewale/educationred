
 <form method="post" action="<?php echo base_url('admin/countryflagcontroller/update'); ?>"  enctype="multipart/form-data">
    <input type="hidden" name="Id" value="<?php echo $upload_data->Id; ?>">
                         <div class="col-md-6 col-md-offset-3">
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Change Country</h3>
                                </div>
                                <div class="box-body">
                                    <!-- Date range -->
                                    <div class="form-group">
                                        <label>Country Name:</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-list"></i>
                                            </div>
                                            <input type="text" class="form-control pull-right" id="cname" name="cname" required="" value="<?php echo $upload_data->Country_name; ?>">
                                        </div>
                                    </div><!-- /.form group -->

                                    <!-- Date and time range -->
                                    <div class="form-group">
                                        <label>Study In:</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-file-text"></i>
                                            </div>
                                            <input type="text" class="form-control pull-right" id="studyinc" name="studyinc" required="" value="<?php echo $upload_data->studyin; ?>"> 
                                        </div>
                                    </div><!-- /.form group -->

                                     
                                     <div class="form-group">
                                        <label>Front Flag:</label>
                                        <div class="input-group">
                                            <input type="file" name="userfile" id="userfile" size="20" value="<?php echo
                                            $upload_data->frontflag; ?>"/> 
                                            <img  src="<?php echo base_url(); ?>assets/admin/uploads/<?php echo $upload_data->frontflag;?>" height="100" width="100">
                                        </div>
                                    </div><!-- /.form group -->

                                       <!--  <div class="form-group">
                                        <label>Banner Image:</label>
                                        <div class="input-group">
                                            <input type="file" name="userfile1" id="userfile1" size="20" value="<?php echo
                                            $upload_data->bannerimag; ?>"/> 
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Flag Image:</label>
                                        <div class="input-group">
                                            <input type="file" name="userfile2" id="userfile2" size="20" value="<?php echo
                                            $upload_data->flag; ?>"/> 
                                        </div>
                                    </div>

                                    <div class="form-group">
                                    <label>Bottom Image:</label>
                                        <div class="input-group">
                                            <input type="file" name="userfile3" id="userfile3" size="20" value="<?php echo
                                            $upload_data->bottom_image; ?>"/> 
                                        </div>
                                    </div> -->

                                    <!-- Date and time range -->
                                    <div class="form-group">
                                        
                                        <div class="input-group">
                                          <!--   <button class="btn btn-primary pull-right" type="submit" id="submit" name="submit">
                                                <i class="fa fa-calendar"></i> --> <!-- Add course --> 
                                               <!--  <i class="fa fa-caret-down"> </i>-->
                                            <!-- </button> -->
                                            <input type="submit" name="btnUpdate" class="btn btn-primary" value="Update">
                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            
                                             <a href="<?php echo base_url('list-country-flag'); ?>" class="btn btn-default">Back</a>
                                        </div>
                                    </div><!-- /.form group -->

                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
</form>