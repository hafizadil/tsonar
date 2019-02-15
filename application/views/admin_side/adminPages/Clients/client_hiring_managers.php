  <div class="content-wrapper">
            <div style="clear:both; height:20px;"></div>

            <div class="clearfix"></div>

			<!-- New_Talent_Desktop_Table -->
			<?php //echo "<pre>"; print_r($HiringManager); ?>
            <div class="col-sm-12">
            	<div class="col-sm-6 p0">
					<h1><label id="clientName"><?php echo $Clinet[0]['firstname']." ".$Clinet[0]['lastname'];  ?></label></h1>
				</div>
				<div class="col-sm-6 p0">
					<button type="submit" class="button btn-lg btn_entry_new pull-right" data-toggle="modal" onclick="add_hiring_manager()" style="width: 200px!important;">
					Add Hiring Manager
					</button>
				</div>
			</div>
			<?php if($this->session->flashdata('success')): ?>
			<div class="col-sm-6">

				<div class="alert alert-success fade in alert-dismissible" style="margin-top:18px;">
				    <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
				    <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>
				</div>
				
			</div>
			<?php endif; ?>

			<?php if($this->session->flashdata('error')): ?>
			<div class="col-sm-6">
				<div class="alert alert-danger">
				  	<strong>Danger!</strong> <?php echo $this->session->flashdata('error'); ?>
				</div>
			</div>
			<?php endif; ?>

			<div class="clear10"></div>

			<div class="col-sm-12 p0">
				<div id="discounts" style="background: #ecf0f5; padding: 0px 15px;">
					<div class="clear10"></div>
					<!-- Harry New-->
				
				<table id="example" class="display" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>Sr. No.</th>
							<th class="none">Hiring Manager Name</th>
							<th>Hiring Manager Email</th>
							<th>Hiring Manager Title</th>
							<th>Actions</th>
						</tr>
					</thead>
					
					<tbody>
						<?php  
						if (!empty($HiringManager)) {
						
						$sr_no = 0;

						foreach ($HiringManager as $value) {

						$sr_no++;
						//echo "<pre>"; print_r($value); die('Test');
						
						?>
						<tr>
							<td><?php echo $sr_no; ?></td>
							<td><?php echo $value['hiringmanager_name']; ?></td>
                            <td><?php echo $value['hiringmanager_email']; ?></td>
                            <td><?php echo $value['hiringmanager_jobtitle']; ?></td>
							
							<td align="center">
								<button type="button" data-toggle="modal" class="button btn-xs btn-primary" onclick="edit_hiring_manager(<?php echo $value['hiringmanager_id']; ?>)">
									<i class="fa fa-edit" aria-hidden="true"></i>
								</button>
								

								<button type="button" class="button btn-xs btn-danger" onclick="delete_hiring_manager(<?php echo $value['hiringmanager_id']; ?>)">
									<i class="fa fa-trash" aria-hidden="true"></i>
								</button>
							</td>
							
						</tr>
						<?php } 
						} 
						?>
					</tbody>
				</table>


					<div class="clear10"></div>
				</div>
            </div>


            <div style="clear:both; height:20px;"></div>

            <!-- content -->

        </div>


