
 <form method="post" action="<?php echo base_url('admin/countrycontroller/update'); ?>"  enctype="multipart/form-data">
    <input type="hidden" name="contry_id" value="<?php echo $upload_data->contry_id; ?>">
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
                            <input type="text" class="form-control pull-right" id="cname" name="cname" required="" value="<?php echo $upload_data->contry_name; ?>">
                        </div><!-- /.input group -->
                    </div><!-- /.form group -->

                    <!-- Date and time range -->
                    <div class="form-group">
                        <label>title:</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-file-text"></i>
                            </div>
                            <input type="text" class="form-control pull-right" id="title" name="title" required="" value="<?php echo $upload_data->title; ?>"> 
                        </div><!-- /.input group -->
                    </div><!-- /.form group -->

                     <div class="form-group">
                        <label>Why this btn:</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-file-text"></i>
                            </div>
                            <input type="text" class="form-control pull-right" id="whythisbtn" name="whythisbtn" value="<?php echo $upload_data->whystudy; ?>" required="">
                        </div><!-- /.input group -->
                    </div><!-- /.form group -->

                    <div class="form-group">
                        <label>University btn:</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-file-text"></i>
                            </div>
                            <input type="text" class="form-control pull-right" id="universitybtn" name="universitybtn" value="<?php echo $upload_data->universitybtn; ?>" required="">  
                        </div><!-- /.input group -->
                    </div><!-- /.form group -->

                   

                    <!-- Date and time range -->
                    <div class="form-group">
                        <label>Description:</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-file-text"></i>
                            </div>
                            <textarea type="text" class="form-control pull-right" id="sdescription" name="sdescription" required="" ><?php echo $upload_data->description; ?></textarea>  
                        </div><!-- /.input group -->
                    </div><!-- /.form group -->                                     

                     <div class="form-group">
                        <label>Image:</label>
                        <div class="input-group">
                            <input type="file" name="userfile" id="userfile" size="20" value="<?php echo
                            $upload_data->image; ?>"/> 
                            <img id="userfile" src="<?php echo base_url(); ?>assets/admin/uploads/<?php echo $upload_data->image; ?>" style="width: 300px; height: 100px;">
                        </div><!-- /.input group -->
                    </div><!-- /.form group -->

                        <div class="form-group">
                        <label>Banner Image:</label>
                        <div class="input-group">
                            <input type="file" name="userfile1" id="userfile1" size="20" value="<?php echo
                            $upload_data->banner_image; ?>"/> 
                            <img id="userfile" src="<?php echo base_url(); ?>assets/admin/uploadimage/<?php echo $upload_data->banner_image; ?>" style="width: 300px; height: 100px;">
                        </div><!-- /.input group -->
                    </div><!-- /.form group -->

                    <div class="form-group">
                        <label>Flag Image:</label>
                        <div class="input-group">
                            <input type="file" name="userfile2" id="userfile2" size="20" value="<?php echo
                            $upload_data->flag_image; ?>"/> 
                              <img id="userfile" src="<?php echo base_url(); ?>assets/admin/uploadflag/<?php echo $upload_data->flag_image; ?>" style="width: 300px; height: 100px;">
                        </div><!-- /.input group -->
                    </div><!-- /.form group -->

                    <div class="form-group">                                      
                        <div class="input-group">
                            <input type="submit" name="btnUpdate" class="btn btn-primary" value="Update">
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            
                             <a href="<?php echo base_url('list-country'); ?>" class="btn btn-default">Back</a>
                        </div>
                    </div><!-- /.form group -->

                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
    </form>
