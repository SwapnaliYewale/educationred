
 <form method="post" action="<?php echo base_url('admin/countrycontroller/submit'); ?>"  enctype="multipart/form-data">
                         <div class="col-md-6 col-md-offset-3">
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Add Country</h3>
                                </div>
                                <div class="box-body">
                                    <!-- Date range -->
                                    <div class="form-group">
                                        <label>Country Name:</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-list"></i>
                                            </div>
                                            <input type="text" class="form-control pull-right" id="cname" name="cname" required="">
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->

                                    <!-- Date and time range -->
                                    <div class="form-group">
                                        <label>Title:</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-file-text"></i>
                                            </div>
                                            <input  type="text" class="form-control pull-right" id="title" name="title" required="">  
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->

                                    <div class="form-group">
                                        <label>Why this btn:</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-file-text"></i>
                                            </div>
                                            <input type="text" class="form-control pull-right" id="whythisbtn" name="whythisbtn" required="">
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->

                                    <div class="form-group">
                                        <label>University btn:</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-file-text"></i>
                                            </div>
                                            <input type="text" class="form-control pull-right" id="universitybtn" name="universitybtn" required="">  
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->

                                    

                                    <!-- Date and time range -->
                                    <div class="form-group">
                                        <label>Description:</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-file-text"></i>
                                            </div>
                                            <textarea type="text" class="form-control pull-right" id="sdescription" name="sdescription" required=""></textarea>  
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->                                     

                                     <div class="form-group">
                                        <label>Image:</label>
                                        <div class="input-group">
                                            <input type="file" name="userfile" id="userfile" size="20" />
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->

                                     <div class="form-group">
                                        <label>Banner Image:</label>
                                        <div class="input-group">
                                            <input type="file" name="userfile1" id="userfile1" size="20" />
                                        </div>
                                    </div> 

                                     <div class="form-group">
                                        <label>Flag Image:</label>
                                        <div class="input-group">
                                            <input type="file" name="userfile2" id="userfile2" size="20" />
                                        </div>
                                    </div> <!-- /.form group

                                    Date and time range -->
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="submit" name="btnUpdate" class="btn btn-primary" value="Add Country">
                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                             <a href="<?php echo base_url('list-country'); ?>" class="btn btn-danger">Back</a><br>
                                        </div>
                                    </div><!-- /.form group -->

                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
</form>