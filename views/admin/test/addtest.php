
 <form method="post" action="<?php echo base_url('submit-test'); ?>"  enctype="multipart/form-data">
                         <div class="col-md-6 col-md-offset-3">
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Add Test</h3>
                                </div>
                                <div class="box-body">
                                    <!-- Date range -->
                                    <div class="form-group">
                                        <label>Test Name:</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-list"></i>
                                            </div>
                                            <input type="text" class="form-control pull-right" id="tname" name="tname" required="">
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->
                                    
                                    <div class="form-group">
                                        <label>Fullform Test Name:</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-list"></i>
                                            </div>
                                            <input type="text" class="form-control pull-right" id="ftname" name="ftname" required="">
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->

                                    <div class="form-group">
                                        <label>Question:</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-file-text"></i>
                                            </div>
                                            <textarea type="text" class="form-control pull-right" id="question" name="question" required=""></textarea>  
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
                                        <div class="input-group">
                                            <input type="submit" name="btnUpdate" class="btn btn-primary" value="Add Test">
                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                             <a href="<?php echo base_url('list-test'); ?>" class="btn btn-danger">Back</a><br>
                                        </div>
                                    </div><!-- /.form group -->

                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
</form>