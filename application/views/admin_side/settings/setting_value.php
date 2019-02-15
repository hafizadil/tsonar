        <div class="content-wrapper">
			<div style="clear:both; height:20px;"></div>
			<div style="clear:both; height:20px;"></div>
			<div class="clearfix"></div>

			<div class="col-sm-12">
				<h2 data-toggle="collapse" data-target="#system_admin_filter" class="detail_popup">
				Add Value</h2>
				<?php
				  // echo "<pre>"; print_r($setting_name); 
					// die();
				?>
				<div class="collapse" id="system_admin_filter">
				<div class="filter_category">
					<div class="col-sm-12 price_box">
						<div class="clear20"></div>
						<form action="#" method="post">

							<div class="col-sm-4 form_padd_left">
								<input type="hidden" id="setting_id" name="setting_id" value="<?php echo $setting_name[0]->setting_id; ?>">
								<div class="autocomplete" style="width:100%;">
									<input id="value_name" type="text" name="value_name"  placeholder=" Value Name" required="">

								</div>
								
							</div>
							<span id="msg" style="color: red"></span>
							<div class="col-sm-4 form_padd_left">
								<button type="button" id="save_setting_value" class="listing_search" href="#">Add</button>
							</div>

						</form>
					</div>

					<div class="clear20"></div>

					<div class="col-sm-12 price_box">
						<div class="col-sm-4 form_padd_left">
							
						</div>

						<div class="col-sm-4 form_padd_left">
						
						</div>
						<div class="col-sm-2 form_padd_left">
							
						</div>
					</div>
					<div class="clearfix"></div>

					<div class="clear20"></div>
				</div>
			
				</div>
			</div>

			<div class="clear20"></div>

			<div class="col-sm-12">
				
					
					<?php
						foreach ($setting_name as $setting)
						{ ?>
					<h2>
							<?=$setting->setting_name?></h2>
					<?php }
					?>				
			
				<div class="collapse" id="system_admin_filter">
				<div class="filter_category">
					<div class="col-sm-12 price_box">
						<div class="clear20"></div>
						<form action="save_value" method="post">
						<div class="col-sm-4 form_padd_left">
							
							<select class="picks_value" id = "newsetting" name= "settings" txt-attr="Job field - ">

								<!-- <option value="">Select</option>
								<option value="new_setting">Add New Setting</option> -->
												<?php
													foreach ($setttings as $settting)
													{ ?>
												<option id ="<?php echo $settting['setting_id']?>"value="<?php echo $settting['setting_id']?>"><?=$settting['setting_name']?></option>
												<?php }
												?>
								
							</select>
						
						</div>



		

						<div class="col-sm-4 form_padd_left">
							
								<div class="autocomplete" style="width:100%;">
									<input id="value_name" type="text" name="value_name"  placeholder=" Value Name">
								</div>
							
						</div>
						<div class="col-sm-4 form_padd_left">
							<button type="submit" class="listing_search" href="#">Add</button>
						</div>

						</form>
					</div>

					<div class="clear20"></div>

					<div class="col-sm-12 price_box">
						<div class="col-sm-4 form_padd_left">
							
						</div>

						<div class="col-sm-4 form_padd_left">
						
						</div>
						<div class="col-sm-2 form_padd_left">
							
						</div>
					</div>
					<div class="clearfix"></div>

					<div class="clear20"></div>
				</div>
			
				</div>
			</div>

			<div class="clear20"></div>

			<div class="col-sm-12">
				
				<table id="example" class="display" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>Sr. No.</th>
							<!-- <th>Setting Name</th> -->
							<th class="none">Setting Values</th>
							<th>Value Status</th>
							<th>Actions</th>
						</tr>
					</thead>
					
					<tbody>
						<?php //echo "<pre>"; print_r($display_setting[0]->value_name); ?>
						<?php if (!empty($display_setting[0]->value_name)) { ?>
							
						

						  <?php $row_count = 0; ?>
							<?php
									foreach ($display_setting as $display)
									{ ?>
							<?php $row_count++; ?>
						<tr>
                       
							<td><?php echo $row_count;?>.</td>
												
							<!-- <td><?=$display->setting_name?></td> -->
							<td><?=$display->value_name?></td>
							

                                <td>
                                	<?php if ($display->value_status == 1 ) {
									echo '<button type="button" id="'.$display->value_id.'" class="button btn-xs btn-success update_status"
										  value="'.$display->value_id.'" >
										  <span>Activate</span>
										  </button>';
									}else{ 
									echo '<button type="button" id="'.$display->value_id.'" class="button btn-xs btn-danger update_status"
										  value="'.$display->value_id.'" >
										  <span>Deactivate</span>
										  </button>'; 
									} ?>

                                	<!-- <?php //if($display->value_status==0){?>
                                		<span class="label label-sm label-danger"><?php //echo "Deactive";//}else{?> 
                                		</span>
								  <span class="label label-sm label-success"><?php //echo "Active";}?> 
                                		</span> -->
									
								

								</td>
								
							<td align="center">
								<button type="button" id="<?=$display->value_id?>" data-toggle="modal" onclick="showUpdateSettingModal('<?php echo $display->value_id; ?>')" class="button btn-xs btn-primary" id="<?=$display->value_id; ?>">
									<i class="fa fa-edit" aria-hidden="true"></i>
								</button>
								
								<button type="button" class="button btn-xs btn-danger delete_setting" id="<?=$display->value_id; ?>">
									<i class="fa fa-trash" aria-hidden="true"></i>
								</button>
							</td>
							
						</tr>
						<?php }
								
							 } 
							  ?>
						
					</tbody>
				</table>
			</div>	
			
			<div style="clear:both; height:20px;"></div>
			<div class="clearfix"></div>
		</div>
		<!-- /.modal for setting -->	
		<!-- <div class="modal" id="modal_new_setting">
		<div class="modal-dialog">
			<div class="modal-content"> -->

				<!-- Modal Header -->
				<!-- <div class="modal-header">
					<button type="button" class="close" id = "close_newmodal_setting" data-dismiss="modal">×</button>
					<h2 class="modal-title">Settings</h2>
				</div> -->

				<!-- Modal body -->
				<!-- <div class="modal-body">
					<form >
						<div class="col-md-8 p0">
							<div class="form-group">

								<label>Setting Name</label>
								<input type="text" class="form-control" id="setting_name" placeholder="">
								
								
							</div>
						</div>
						<div class="clearfix"></div>
					</form>
				</div>
 -->
				<!-- Modal footer -->
				<!-- <div class="modal-footer">
					<button type="button" class="btn btn-success" id="insert" data-dismiss="modal">Save</button>
				</div>
			</div>
		</div>
	</div> -->


