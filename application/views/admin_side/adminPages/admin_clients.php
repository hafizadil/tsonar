 <style type="text/css">
                 #open_modal .modal-dialog{
                    width: 100%;
                 }
                 .talent_heading h2{
                    font-size: 34px;
                    color: #314D68;
                    font-weight: 500;
                 }
                 .talent_heading{
                    margin-bottom: 70px;
                 }
                 .services_heading_tsonr h3{
                     color: #314D68;
                    font-weight: 700;
                    font-size: 34px;
                 }
                 .box_tsonr_user{
                  
                    min-height: 20px;
                    padding: 19px;
                    margin-bottom: 20px;
                    background-color: #f5f5f5;
                    border: 1px solid #e3e3e3;
                    border-radius: 4px;
                    box-shadow: inset 0 1px 1px rgba(0,0,0,.05);

                 }

                 #open_modal .modal-header h4 {
					    color: #fff;
					    font-size: 24px;
					}

                 .box_tsonr_user h2{
                    color: #9aaf24;
                    font-weight: 700;
                    font-size: 28px;
                 }
                 .box_tsonr_btn a{
                    white-space: normal !important;
                    word-wrap: break-word;
                    padding-left: 10px;
                    padding-right: 10px;
                    padding: 10px 16px;
                    font-size: 20px;
                    line-height: 1.33;
                    border-radius: 6px; 
                    border: none;
                    color: #fff;
                    font-weight: 700;
                    background-color: #314D68 !important;
                    min-height: 20px;
                    width: 100%;
                 }
                 .box_tsonr_btn a:hover, .box_tsonr_btn a:active, .box_tsonr_btn a:focus {
                    opacity: .85;
                    color: #fff !important;
                 }
                 .tson_btn_mrg_btm{margin-bottom: 30px;
                 }
                 .services_heading_tsonr p{
                    color: #314D68;
                    font-size: 16px;
                 }
                 .services_hiring_mrg_btm{
                    margin-bottom: 5px;
                 }
                 .back_restart_btn a{
                    color: #333;
                    background-color: #fff;
                    border: 2px solid #314D68;
                    white-space: normal !important;
                    word-wrap: break-word;
                    padding-left: 10px;
                    padding-right: 10px;
                    padding: 6px 12px;
                    font-size: 16px;
                    line-height: 1.5;
                    border-radius: 4px;
                 }
                 .back_restart_btn a:hover, .back_restart_btn a:active, .back_restart_btn a:focus{
                     color: #333;
                    background-color: #edf1d7;
                    border-color: #314D68;
                 }
                 .restart_tsonr_btnn{
                    margin-left: 10px;
                 }
                 .box_2_pad_btm{
                    padding-bottom: 40px;
                 }

              
                 @media only screen and (min-width: 768px) and (max-width: 1024px){
                    .box_tsonr_btn a{
                        font-size: 14px;
                    }
                    .clear_20_mbl{
                        height: 10px;
                    }
                 }
                 @media only screen and (min-width: 320px) and (max-width: 767px){
                    .box_tsonr_btn {
                        margin-bottom: 10px;
                    }
                    .clear_20_mbl{
                        height: 0px;
                    }
                 }

                    

             </style>

  <div class="content-wrapper">
            <div style="clear:both; height:20px;"></div>

            <div class="clearfix"></div>

			<!-- New_Talent_Desktop_Table -->

            <div class="col-sm-12">
				<!-- <button type="submit" class="button btn-lg btn_entry_new pull-right" data-toggle="modal" data-target="#myModal_new_client"> -->
				<div class="col-sm-6">
					<h1>Clients</h1>
				</div>
				<div class="col-sm-6">
					<button type="submit" class="button btn-lg btn_entry_new pull-right" data-toggle="modal" onclick="add_client()" >
					Add Client
				</button>
				</div>
				
			</div>

			<!-- Print Success Message or Error Message -->
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
			<!-- Print Success Message or Error Message -->

			<div class="clear10"></div>

			<div class="col-sm-12 p0">
				<div id="discounts" style="background: #ecf0f5; padding: 0px 15px;">
					<div class="clear10"></div>
					<!-- Harry New-->
				
				<table id="example" class="display" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>Sr. No.</th>
							<th class="none">Client Name</th>
							<th>Client Email</th>
							<th>Actions</th>
						</tr>
					</thead>
					
					<tbody>
						<?php  
						if (!empty($allClients)) {
						
						$sr_no = 0;

						foreach ($allClients as $allClient) {

						$sr_no++;
						//echo "<pre>"; print_r($allClient); die();
						?>
						<tr>
							<td><?php echo $sr_no; ?></td>
							<td><?php echo $allClient['firstname']." ".$allClient['lastname']; ?></td>
                            <td>
                            	<?php echo $allClient['email']; ?>
                            <!-- <button type="button" id="" class="button btn-xs btn-success update_status"
								value="" ><span>Activate</span></button>
									
							<button type="button" id="" class="button btn-xs btn-danger update_status"
								value="" ><span>Deactivate</span></button> -->
							</td>
							
							<td align="center">
								<button type="button" data-toggle="modal" class="button btn-xs btn-primary" onclick="edit_client(<?php echo $allClient['id'] ?>)">
									<i class="fa fa-edit" aria-hidden="true"></i>
								</button>
								

								<button type="button" class="button btn-xs btn-danger" onclick="DeleteClient(<?php echo $allClient['id'] ?>)">
									<i class="fa fa-trash" aria-hidden="true"></i>
								</button>

								<a target="_blank" href="<?php echo base_url(); ?>ClientsHiringManager/<?php echo $allClient['id'] ?>">Browse</a>


								<button type="button" class="btn btn-info btn-lg" style="padding: 0px; font-size: 12px; height: 30px; width: 100px;" id="user_permission_id" onclick="test(<?php echo $allClient['id'] ?>)" value="<?php echo $allClient['id'] ?>" data-toggle="modal" >User Permission</button>
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
