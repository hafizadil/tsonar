        <div class="content-wrapper">
			<div style="clear:both; height:20px;"></div>
			<div style="clear:both; height:20px;"></div>
			<div class="clearfix"></div>
			<?php //echo "<pre>"; print_r($setttings); ?>
			<div class="col-sm-12">
				<h2 data-toggle="collapse" data-target="#system_admin_filter" class="detail_popup">
				Add Value</h2>
				<div class="collapse" id="system_admin_filter">
				<div class="filter_category">
					<div class="col-sm-12 price_box">
						<div class="clear20"></div>
						<form action="save_setting" method="post">

							<div class="col-sm-4 form_padd_left">
								
									<div class="autocomplete" style="width:100%;">
										<input id="setting_name" type="text" name="setting_name"  placeholder=" Setting Name" required="">
									</div>
								
							</div>
							<div class="col-sm-4 form_padd_left">
								<button type="submit" class="listing_search" id="save_setting_name" href="#">Add</button>
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
							<th>Setting Name</th>
							<th class="none">Setting Status</th>
							<th>Actions</th>
						</tr>
					</thead>
					
					<tbody>
							<?php
							if (!empty($setttings)) { 
								
							$row_count = 0;
								foreach ($setttings as $settting)
							{ ?>
							<?php $row_count++; ?>
						<tr>
							
							<td><?php echo $row_count;?>.</td>				
							<td><?php echo $settting['setting_name']; ?></td>
							<td><?php if ($settting['setting_status'] == 1 ) {
									echo '<button type="button" id="'.$settting['setting_id'].'" class="button btn-xs btn-success update_outer_status"
										  value="'.$settting['setting_id'].'" >
										  <span>Activate</span>
										  </button>';
								}else{ 
									echo '<button type="button" id="'.$settting['setting_id'].'" class="button btn-xs btn-danger update_outer_status"
										  value="'.$settting['setting_id'].'" >
										  <span>Deactivate</span>
										  </button>'; 
								} ?>
								
							</td>
							<td align="center">
								<button type="button" id="<?php echo $settting['setting_id']?>" data-toggle="modal" onclick=updateOuterSetting('<?php echo $settting["setting_id"]?>') class="button btn-xs btn-primary" id="<?php echo $settting['setting_id']?>">
									<i class="fa fa-edit" aria-hidden="true"></i>
								</button>
								

								<button type="button" class="button btn-xs btn-danger delete_outer_setting" id="<?php echo $settting['setting_id']?>">
									<i class="fa fa-trash" aria-hidden="true"></i>
								</button>

								<a target="_blank" href="<?=base_url();?>value_setting/<?php echo $settting['setting_id']; ?>">Browse</a>
							</td>
						</tr>
						<?php } }
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
				</div> -->

				<!-- Modal footer -->
				<!-- <div class="modal-footer">
					<button type="button" class="btn btn-success" id="insert" data-dismiss="modal">Save</button>
				</div>
			</div>
		</div>
	</div> -->


