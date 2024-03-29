<?php 
	$edit_data = $this->db->get_where('librarian' , array('librarian_id' => $param2))->result_array();
	foreach ($edit_data as $row):
?>

<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title">
            		<i class="entypo-plus-circled"></i>
					<?php echo get_phrase('Librarian');?>
            	</div>
            </div>
			<div class="panel-body">
				
                <?php echo form_open(base_url() . 'index.php?admin/librarian/edit/' . $row['librarian_id'] , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('Teacher');?></label>
                        
						<div class="col-sm-5">
							<select name="teacher_id" class="form-control select2" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
                              <option value=""><?php echo get_phrase('select');?></option>
                              <?php 
									$teachers = $this->db->get('teacher')->result_array();
									foreach($teachers as $row3):
										?>
                                		<option value="<?php echo $row3['teacher_id'];?>"
                                        	<?php if($row['teacher_id'] == $row3['teacher_id'])echo 'selected';?>>
													<?php echo $row3['fname']." ".$row3['mname']." ".$row3['lname'];?>
                                                </option>
	                                <?php
									endforeach;
								  ?>
                          </select>
						</div> 
					</div>
                    
                    <div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" class="btn btn-default"><?php echo get_phrase('update');?></button>
						</div>
					</div>
                <?php echo form_close();?>
            </div>
        </div>
    </div>
</div>
<?php endforeach;?>