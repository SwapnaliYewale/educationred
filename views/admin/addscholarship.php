
 <form method="post" action="<?php echo base_url('admin/scolarshipcontroller/submit'); ?>"  enctype="multipart/form-data">
                         <div class="col-md-6 col-md-offset-3">
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Add Scholarship</h3>
                                </div>
                                <div class="box-body">
                                    <!-- Date range -->
                                    <div class="form-group">
                                        <label>Scholarship Name:</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-list"></i>
                                            </div>
                                            <input type="text" class="form-control pull-right" id="scholname" name="scholname" required="">
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->

                                    

                                    <!-- Date and time range -->
                                    <div class="form-group">
                                        <label>Schol Description:</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-file-text"></i>
                                            </div>
                                            <textarea type="text" class="form-control pull-right" id="scholdescription" name="scholdescription"></textarea>  
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->                                     

                                    <div class="form-group">
                                        <label>Scholarship Banner Image:</label>
                                        <div class="input-group">
                                            <input type="file" name="scholbannerimg" id="scholbannerimg" size="20" />
                                        </div>
                                    </div>

                                       <div class="form-group">
                                        <label>Scholarship Image:</label>
                                        <div class="input-group">
                                            <input type="file" name="scholimg" id="scholimg" size="20" />
                                        </div>
                                    </div> 

                                    

                                     
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="submit" name="btnUpdate" class="btn btn-primary" value="Add Scholarship">
                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                             <a href="<?php echo base_url('list-scholarship'); ?>" class="btn btn-danger">Back</a><br>
                                        </div>
                                    </div><!-- /.form group -->

                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
</form>