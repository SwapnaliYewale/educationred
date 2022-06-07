
    <?php 
  if ($this->session->flashdata('success_msg')){
    
  ?> 
  <div class="alert alert-success text-center" style="margin-left:360px;margin-right:360px; ">
    <?php echo $this->session->flashdata('success_msg'); ?>
  </div>
  <?php } ?>
  <?php 
  if ($this->session->flashdata('error_msg')){
    
  ?> 
  <div class="alert alert-success text-center" style="margin-left:360px;margin-right:360px; ">
    <?php echo $this->session->flashdata('error_msg'); ?>
  </div>
  <?php } ?>    
    <!-- Right side column. Contains the navbar and content of the page -->
    <aside class="right-side">                
  

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">All Country</h3>    
                            <div class="box-tools pull-right">
                              <a href="<?php echo base_url('add-university');?>" class="btn btn-info">ADD</a>
                              <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fa fa-minus"></i></button>
                              <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                                <i class="fa fa-times"></i></button>
                            </div>                                
                        </div><!-- /.box-header -->
                        <div class="box-body table-responsive" style="overflow-x:auto; ">
                            <table id="viewcountry" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                  <td>University Id</td>
                                  <th>Country Id</th>
                                  <th>Country Name</th>
                                  <th>University Name</th>
                                  <th>Url</th>
                                  <th>Action</th>
                                </tr>
                                </thead>
                               <tbody>
                                   <?php if ($upload_data !='') { 
                                    $i = 0;
                                    foreach ($upload_data as  $udata) {
                                      $i++;
                                    ?> 

                                    
                                     <tr>
                                          <td><?php echo $i ;?></td>
                                           <td><?php echo $udata->contry_id;?></td>
                                         <td><?php echo $udata->contry_name;?></td>
                                          <td><?php echo $udata->university_name;?></td>
                                          <td><?php echo $udata->university_url;?></td>
                                          <td>
                                            <a href="<?php echo base_url();?>edit-university/<?php echo $udata->contry_id?>/<?php echo $udata->university_id?>" class="btn btn-info">Edit</a><br><br>
                                             <a href="<?php echo base_url();?>delete-university/<?php echo $udata->university_id?>" class="btn btn-danger">Delete</a>
                                          </td>
                                            <?php }
                                          } ?>
                                       </tr>
                                </tbody>
                               
                            </table>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                    
                   
                </div>
            </div>

        </section><!-- /.content -->
    </aside><!-- /.right-side -->
<!-- ./wrapper -->


