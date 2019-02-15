<div class="content-wrapper">
			<div style="clear:both; height:20px;"></div>
			<div style="clear:both; height:20px;"></div>
			<div class="clearfix"></div>



			<?php if($this->session->flashdata('success')): ?>
			<div class="col-sm-12">

				<div class="alert alert-success fade in alert-dismissible" style="margin-top:18px;">
				    <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
				    <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>
				</div>
				
			</div>
			<?php endif; ?>

			<?php if($this->session->flashdata('error')): ?>
			<div class="col-sm-12">
				<div class="alert alert-danger">
				  	<strong>Danger!</strong> <?php echo $this->session->flashdata('error'); ?>
				</div>
			</div>
			<?php endif; ?>





			<div class="col-sm-12">
				<div class="col-sm-6 p0"><h2 data-toggle="collapse" data-target="#system_admin_filter" class="detail_popup">Filters</h2>
				</div>
				<div class="col-sm-6 p0 ">
					<h2 class="detail_popup pull-right" onclick="add_hiringManager(<?php echo $this->session->userdata('id'); ?>)">Hiring Manager</h2>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clear20"> </div>
				<div class="collapse" id="system_admin_filter" style="padding-left: 15px; padding-right: 15px;">
				<div class="filter_category">
					<div class="col-sm-12 price_box">
						<div class="clear20"></div>
						
						<div class="col-sm-4 form_padd_left">
							<select class="picks_value" txt-attr="Job field - ">
								<option value="">Job field</option>
								<option value="1">Accounting</option>
								<option value="1">Administration &amp; office support</option>
								<option value="1">Banking</option>
								<option value="1">Communications</option>
								<option value="1">Construction</option>
								<option value="1">Data &amp; analytics</option>
								<option value="1">Digital</option>
								<option value="1">Engineering</option>
								<option value="1">Farming &amp; agriculture</option>
								<option value="1">Finance</option>
								<option value="1">Human resources</option>
								<option value="1">Healthcare &amp; medical</option>
								<option value="1">IT</option>
								<option value="1">Insurance</option>
								<option value="1">Legal</option>
								<option value="1">Manufacturing</option>
								<option value="1">Marketing</option>
								<option value="1">Procurement</option>
								<option value="1">Professional services</option>
								<option value="1">Retail</option>
								<option value="1">Risk</option>
								<option value="1">Sales</option>
								<option value="1">Supply chain</option>
							</select>
						</div>
						<div class="col-sm-4 form_padd_left">
							<form autocomplete="off" action="/action_page.php">
								<div class="autocomplete" style="width:100%;">
									<input id="myInput" type="text" name="myCountry"  placeholder="Client">
								</div>
							</form>
						</div>
						<div class="col-sm-4 form_padd_left">
							<input type="text" name="Agency" placeholder="Agency">
						</div>
					</div>

					<div class="clear20"></div>

					<div class="col-sm-12 price_box">
						<div class="col-sm-4 form_padd_left">
							<input type="text" name="Name" placeholder="Name">
						</div>

						<div class="col-sm-4 form_padd_left">
							<select class="picks_value">
								<option value="">Sort by Asec or Desc</option>
								<option value="1">10</option>
								<option value="2">15</option>
								<option value="3">20</option>
								<option value="4">25</option>
								<option value="5">30</option>
							</select>
						</div>
						<div class="col-sm-2 form_padd_left">
							<button type="button" class="listing_search" href="#">Search</button>
						</div>
					</div>
					<div class="clearfix"></div>

					<div class="clear20"></div>
				</div>
			
				</div>
			

			<div class="clear20"></div>

			<div class="col-sm-12">
				
				<table id="example" class="display" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>Sr.no</th>
							<th>Name</th>
							<th>Email</th>
							<th>Job Title</th>
							<th>Action</th>
						</tr>
					</thead>
					
					<tbody>
					<?php 
						if (!empty($HiringManagers)) { 

						$sr_no = 0;

						foreach ($HiringManagers as $HiringManager) {

						$sr_no++;
					?>
							
						<tr>
							<td><?php echo $sr_no; ?></td>
							<td><?php echo $HiringManager['hiringmanager_name']; ?></td>
							<td><?php echo $HiringManager['hiringmanager_email']; ?></td>
							<td><?php echo $HiringManager['hiringmanager_jobtitle']; ?></td>
							<td align="center">
								<button class="button btn-sm btn-success" onclick="edit_HiringManager(<?php echo $HiringManager['hiringmanager_id']; ?>)">
									<i class="fa fa-check" aria-hidden="true"></i>
								</button>
								<button class="button btn-sm btn-danger" onclick="delete_HiringManager(<?php echo $HiringManager['hiringmanager_id']; ?>)">
									<i class="fa fa-trash" aria-hidden="true"></i>
								</button>
							</td>
						</tr>

					<?php } } ?>
					</tbody>
				</table>
			</div>	
			
			<div style="clear:both; height:20px;"></div>
			<div class="clearfix"></div>
		</div>