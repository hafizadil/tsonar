<div class="content-wrapper">
    <div style="clear:both; height:20px;"></div>
    <div style="clear:both; height:20px;"></div>
    <div class="clearfix"></div>
    <?php //echo "<pre>"; print_r($talentRequests); echo "<br>"; die('Test'); ?>
    <div class="col-sm-12">
        <h2 data-toggle="collapse" data-target="#pools_filter" class="detail_popup">Filters</h2>
		<div class="collapse" id="pools_filter">
		<div class="filter_category" id="pools_filter_bar">
            <div class="col-sm-12 price_box">
               <div class="clear20"></div>
				<div class="col-sm-4 form_padd_left">
                    <form autocomplete="off" action="/action_page.php">
                        <div class="autocomplete" style="width:100%;">
                            <input id="name" type="text" name="" placeholder="Name">
                        </div>
                    </form>
                </div>
				
				<div class="col-sm-4 form_padd_left">
                    <form autocomplete="off" action="/action_page.php">
                        <div class="autocomplete" style="width:100%;">
                            <input id="skills" type="text" name="" placeholder="Skills">
                        </div>
                    </form>
                </div>
                
				<div class="col-sm-4 form_padd_left">
                    <select class="form-control">
						<option value="">Job Field</option>
						<option value="1">Project Manager</option>
						<option value="2">Software Engineer</option>
						<option value="3">Web Developer</option>
					</select>
                </div>
				
				<div class="clear10"></div>
				
				
				<div class="col-sm-4 form_padd_left">
                    <select class="form-control">
						<option value="">Pool Name</option>
						<option value="1">JavaScript</option>
						<option value="2">Php</option>
						<option value="3">Andriod</option>
						<option value="3">Node.js</option>
						<option value="3">React.js</option>
					</select>
                </div>
				<div class="col-sm-4 form_padd_left">
                    <select class="form-control">
						<option value="">Level</option>
						<option value="1">Leader of Leaders</option>
						<option value="2">Leader of Professional</option>
						<option value="3">Individual Professional</option>
					</select>
                </div>
				
				<div class="col-sm-4 form_padd_left">
                    <select class="form-control">
						<option value="">Location</option>
						<option value="0">Auckland</option>
						<option value="1">Hamilton</option>
						<option value="2">Wellington</option>
						<option value="3">Christchurch</option>
						<option value="4">Regional</option>
						<option value="4">Other City</option>
						<option value="4">Home</option>
						<option value="4">International</option>
					</select>
                </div>
				
				<div class="clear10"></div>
				
				<div class="col-sm-4 form_padd_left">
                    <select class="form-control">
						<option value="">Salary</option>
						<option value="0">$ 30,000</option>
						<option value="1">$ 10,000</option>
						<option value="2">$ 19,000</option>
						<option value="3">$ 8,000</option>
						<option value="4">$ 6,000</option>
						<option value="4">$ 14,000</option>
						<option value="4">$ 6,000</option>
						<option value="4">$ 3,000</option>
					</select>
                </div>
				
            </div>

            <div class="clear20"></div>

            <div class="col-sm-12 price_box">
                <div class="col-sm-8"></div>
                <div class="col-sm-4 form_padd_left">
                    <button type="button" class="listing_search pull-right" href="#">Search</button>
                </div>
            </div>
            <div class="clearfix"></div>

            <div class="clear20"></div>
        </div>
		</div>
    </div>
	<div class="clear20"></div>
    <div class="col-sm-12">
		<div id="pool_members" style="background: #fff; padding: 0px 15px;">
            <div class="clear10"></div>
			<!-- <button type="submit" class="button btn-lg btn_entry_new pull-right" data-toggle="modal" data-target="#pool_entry_data">
			Add Pool
			</button> -->
			<div class="clear10"></div>
            <!-- Harry New-->
            <div class="col-sm-12 p0">
                <div class="desktop_ceremony event_client_pbox ">
					<div class="event_client_price event_heading pool_head_main">
						<center>
							<label>Review Requests</label>
						</center>
					</div>
					<div class="event_client_price event_heading">
						<center>
							<span><i class="fa fa-user" aria-hidden="true"></i></span>
						</center>
					</div>

					<div class="event_client_price event_heading">
						<center>
							<span><i class="fa fa-link" aria-hidden="true"></i></span>
						</center>
					</div>
					<div class="event_client_price event_heading">
						<center>
							<span><i class="fa fa-thumbs-up" aria-hidden="true"></i></span>
						</center>
					</div>
					<div class="event_client_price event_heading">
						<center>
							<label><img src="<?php echo base_url();?>public/admin/img/user_done.png"></label>
						</center>
					</div>
					<div class="event_client_price event_heading">
						<center>
							<label><img src="<?php echo base_url();?>public/admin/img/dollar.png"></label>
						</center>
					</div>
				</div>
				
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingOne">
							<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category">
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>Talent Requests</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>14</label>
										</center>
									</div>

									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>35</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>65</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>3</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>44k</label>
										</center>
									</div>
								</div>
								
							</a>
						</div>
						<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
							<div class="panel-body">
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<span><i class="fa fa-user-o" aria-hidden="true"></i></span>
										</center>
									</div>
									<div class="event_client_price event_heading">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/rect_full_ff.png"></label>
										</center>
									</div>

									<div class="event_client_price event_heading">
										<center>
											<span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
										</center>
									</div>
									<div class="event_client_price event_heading">
										<center>
											<span><i class="fa fa-usd" aria-hidden="true"></i></span>
										</center>
									</div>
									<div class="event_client_price event_heading">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/life_line.png"></label>
										</center>
									</div>
									<div class="event_client_price event_heading">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/clock.png"></label>
										</center>
									</div>
								</div>
								
								<div class="clear5"></div>
								
								<div id="job_inner_data">
								<?php foreach ($talentRequests as $talentRequest) { ?>
									<?php //echo "<pre>"; print_r($talentRequest); ?>
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
									<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#myModall3">
										<center>
											<label><?php echo $talentRequest['job_title']; ?></label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/rect_1.png"></label>
										</center>
									</div>

									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>AK, WL</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>150k</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<button type="button" class="btn-success"></button>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>6 days</label>
										</center>
									</div>
								</div>

								<?php } ?>
								
								<!-- <div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
									<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#myModall3">
										<center>
											<label>Sarah Brown</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/rect_2.png"></label>
										</center>
									</div>

									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>AK</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>700d</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<button type="button" class="btn-info"></button>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>2 months</label>
										</center>
									</div>
								</div>
								
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
									<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#myModall3">
										<center>
											<label>Harry Green</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/rect_3.png"></label>
										</center>
									</div>

									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>WL</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>95k</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<button type="button" class="btn-warning"></button>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>4 days</label>
										</center>
									</div>
								</div>
								
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
									<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#myModall3">
										<center>
											<label>Barry Orange</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/rect_1.png"></label>
										</center>
									</div>

									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>AK</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>200k</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<button type="button" class="btn-danger"></button>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>6 months</label>
										</center>
									</div>
								</div>
								
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
									<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#myModall3">
										<center>
											<label>Sam Blue</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/rect_2.png"></label>
										</center>
									</div>

									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>WL</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>150k</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<button type="button" class="btn-success"></button>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>6 days</label>
										</center>
									</div>
								</div>
								
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
									<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#myModall3">
										<center>
											<label>Theresa Red</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/rect_3.png"></label>
										</center>
									</div>

									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>AK</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>700d</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<button type="button" class="btn-info"></button>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>2 months</label>
										</center>
									</div>
								</div>
								
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
									<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#myModall3">
										<center>
											<label>Molly Jones</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/rect_1.png"></label>
										</center>
									</div>

									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>WL</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>95k</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<button type="button" class="btn-warning"></button>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>4 days</label>
										</center>
									</div>
								</div>
								
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
									<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#myModall3">
										<center>
											<label>Jeff Black</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/rect_2.png"></label>
										</center>
									</div>

									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>AK</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>200k</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<button type="button" class="btn-danger"></button>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>6 months</label>
										</center>
									</div>
								</div>
								
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
									<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#myModall3">
										<center>
											<label>Henry Baker</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/rect_3.png"></label>
										</center>
									</div>

									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>AK</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>150k</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<button type="button" class="btn-success"></button>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>6 days</label>
										</center>
									</div>
								</div>
								
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
									<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#myModall3">
										<center>
											<label>James Brown</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/rect_1.png"></label>
										</center>
									</div>

									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>AK</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>700d</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<button type="button" class="btn-info"></button>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>2 months</label>
										</center>
									</div>
								</div>
								
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
									<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#myModall3">
										<center>
											<label>Kristy Cameron</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/rect_2.png"></label>
										</center>
									</div>

									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>WL</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>95k</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<button type="button" class="btn-warning"></button>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>4 days</label>
										</center>
									</div>
								</div>
								
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
									<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#myModall3">
										<center>
											<label>Holly Packer</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/rect_3.png"></label>
										</center>
									</div>

									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>WL</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>200k</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<button type="button" class="btn-danger"></button>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>6 months</label>
										</center>
									</div>
								</div>
								
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
									<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#myModall3">
										<center>
											<label>Peter Piper</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/rect_1.png"></label>
										</center>
									</div>

									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>AK</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>700d</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<button type="button" class="btn-success"></button>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>4 days</label>
										</center>
									</div>
								</div>
								
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
									<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#myModall3">
										<center>
											<label>Liam Squire</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/rect_2.png"></label>
										</center>
									</div>

									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>AK</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>95k</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<button type="button" class="btn-info"></button>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>6 months</label>
										</center>
									</div>
								</div> -->
							
								</div>
							</div>
						
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingTwo">
							<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category">
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>Php</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>10</label>
										</center>
									</div>

									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>13</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>45</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>3</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>33k</label>
										</center>
									</div>
								</div>
							</a>
						</div>
						<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
							<div class="panel-body">
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<span><i class="fa fa-user-o" aria-hidden="true"></i></span>
										</center>
									</div>
									<div class="event_client_price event_heading">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/rect_full_ff.png"></label>
										</center>
									</div>

									<div class="event_client_price event_heading">
										<center>
											<span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
										</center>
									</div>
									<div class="event_client_price event_heading">
										<center>
											<span><i class="fa fa-usd" aria-hidden="true"></i></span>
										</center>
									</div>
									<div class="event_client_price event_heading">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/life_line.png"></label>
										</center>
									</div>
									<div class="event_client_price event_heading">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/clock.png"></label>
										</center>
									</div>
								</div>
								
								<div class="clear5"></div>
								
								<div id="job_inner_data">
								
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
									<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#myModall3">
										<center>
											<label>Richard	White</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/rect_1.png"></label>
										</center>
									</div>

									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>AK, WL</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>150k</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<button type="button" class="btn-success"></button>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>6 days</label>
										</center>
									</div>
								</div>
								
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
									<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#myModall3">
										<center>
											<label>Sarah Brown</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/rect_2.png"></label>
										</center>
									</div>

									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>AK</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>700d</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<button type="button" class="btn-info"></button>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>2 months</label>
										</center>
									</div>
								</div>
								
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
									<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#myModall3">
										<center>
											<label>Harry Green</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/rect_3.png"></label>
										</center>
									</div>

									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>WL</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>95k</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<button type="button" class="btn-warning"></button>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>4 days</label>
										</center>
									</div>
								</div>
								
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
									<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#myModall3">
										<center>
											<label>Barry Orange</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/rect_1.png"></label>
										</center>
									</div>

									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>AK</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>200k</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<button type="button" class="btn-danger"></button>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>6 months</label>
										</center>
									</div>
								</div>
								
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
									<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#myModall3">
										<center>
											<label>Sam Blue</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/rect_2.png"></label>
										</center>
									</div>

									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>WL</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>150k</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<button type="button" class="btn-success"></button>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>6 days</label>
										</center>
									</div>
								</div>
								
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
									<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#myModall3">
										<center>
											<label>Theresa Red</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/rect_3.png"></label>
										</center>
									</div>

									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>AK</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>700d</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<button type="button" class="btn-info"></button>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>2 months</label>
										</center>
									</div>
								</div>
								
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
									<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#myModall3">
										<center>
											<label>Molly Jones</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/rect_1.png"></label>
										</center>
									</div>

									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>WL</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>95k</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<button type="button" class="btn-warning"></button>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>4 days</label>
										</center>
									</div>
								</div>
								
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
									<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#myModall3">
										<center>
											<label>Jeff Black</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/rect_2.png"></label>
										</center>
									</div>

									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>AK</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>200k</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<button type="button" class="btn-danger"></button>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>6 months</label>
										</center>
									</div>
								</div>
								
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
									<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#myModall3">
										<center>
											<label>Henry Baker</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/rect_3.png"></label>
										</center>
									</div>

									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>AK</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>150k</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<button type="button" class="btn-success"></button>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>6 days</label>
										</center>
									</div>
								</div>
								
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
									<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#myModall3">
										<center>
											<label>James Brown</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/rect_1.png"></label>
										</center>
									</div>

									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>AK</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>700d</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<button type="button" class="btn-info"></button>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>2 months</label>
										</center>
									</div>
								</div>
								
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
									<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#myModall3">
										<center>
											<label>Kristy Cameron</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/rect_2.png"></label>
										</center>
									</div>

									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>WL</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>95k</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<button type="button" class="btn-warning"></button>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>4 days</label>
										</center>
									</div>
								</div>
								
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
									<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#myModall3">
										<center>
											<label>Holly Packer</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/rect_3.png"></label>
										</center>
									</div>

									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>WL</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>200k</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<button type="button" class="btn-danger"></button>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>6 months</label>
										</center>
									</div>
								</div>
								
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
									<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#myModall3">
										<center>
											<label>Peter Piper</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/rect_1.png"></label>
										</center>
									</div>

									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>AK</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>700d</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<button type="button" class="btn-success"></button>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>4 days</label>
										</center>
									</div>
								</div>
								
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
									<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#myModall3">
										<center>
											<label>Liam Squire</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/rect_2.png"></label>
										</center>
									</div>

									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>AK</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>95k</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<button type="button" class="btn-info"></button>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>6 months</label>
										</center>
									</div>
								</div>
							
								</div>
							</div>
						
						</div>
					</div>
					
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingThree">
							<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category">
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>Andriod</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>22</label>
										</center>
									</div>

									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>46</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>80</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>5</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>58k</label>
										</center>
									</div>
								</div>
							</a>
						</div>
						<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
							<div class="panel-body">
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<span><i class="fa fa-user-o" aria-hidden="true"></i></span>
										</center>
									</div>
									<div class="event_client_price event_heading">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/rect_full_ff.png"></label>
										</center>
									</div>

									<div class="event_client_price event_heading">
										<center>
											<span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
										</center>
									</div>
									<div class="event_client_price event_heading">
										<center>
											<span><i class="fa fa-usd" aria-hidden="true"></i></span>
										</center>
									</div>
									<div class="event_client_price event_heading">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/life_line.png"></label>
										</center>
									</div>
									<div class="event_client_price event_heading">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/clock.png"></label>
										</center>
									</div>
								</div>
								
								<div class="clear5"></div>
								
								<div id="job_inner_data">
								
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
									<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#myModall3">
										<center>
											<label>Richard	White</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/rect_1.png"></label>
										</center>
									</div>

									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>AK, WL</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>150k</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<button type="button" class="btn-success"></button>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>6 days</label>
										</center>
									</div>
								</div>
								
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
									<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#myModall3">
										<center>
											<label>Sarah Brown</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/rect_2.png"></label>
										</center>
									</div>

									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>AK</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>700d</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<button type="button" class="btn-info"></button>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>2 months</label>
										</center>
									</div>
								</div>
								
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
									<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#myModall3">
										<center>
											<label>Harry Green</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/rect_3.png"></label>
										</center>
									</div>

									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>WL</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>95k</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<button type="button" class="btn-warning"></button>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>4 days</label>
										</center>
									</div>
								</div>
								
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
									<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#myModall3">
										<center>
											<label>Barry Orange</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/rect_1.png"></label>
										</center>
									</div>

									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>AK</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>200k</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<button type="button" class="btn-danger"></button>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>6 months</label>
										</center>
									</div>
								</div>
								
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
									<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#myModall3">
										<center>
											<label>Sam Blue</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/rect_2.png"></label>
										</center>
									</div>

									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>WL</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>150k</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<button type="button" class="btn-success"></button>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>6 days</label>
										</center>
									</div>
								</div>
								
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
									<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#myModall3">
										<center>
											<label>Theresa Red</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/rect_3.png"></label>
										</center>
									</div>

									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>AK</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>700d</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<button type="button" class="btn-info"></button>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>2 months</label>
										</center>
									</div>
								</div>
								
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
									<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#myModall3">
										<center>
											<label>Molly Jones</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/rect_1.png"></label>
										</center>
									</div>

									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>WL</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>95k</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<button type="button" class="btn-warning"></button>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>4 days</label>
										</center>
									</div>
								</div>
								
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
									<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#myModall3">
										<center>
											<label>Jeff Black</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/rect_2.png"></label>
										</center>
									</div>

									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>AK</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>200k</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<button type="button" class="btn-danger"></button>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>6 months</label>
										</center>
									</div>
								</div>
								
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
									<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#myModall3">
										<center>
											<label>Henry Baker</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/rect_3.png"></label>
										</center>
									</div>

									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>AK</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>150k</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<button type="button" class="btn-success"></button>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>6 days</label>
										</center>
									</div>
								</div>
								
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
									<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#myModall3">
										<center>
											<label>James Brown</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/rect_1.png"></label>
										</center>
									</div>

									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>AK</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>700d</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<button type="button" class="btn-info"></button>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>2 months</label>
										</center>
									</div>
								</div>
								
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
									<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#myModall3">
										<center>
											<label>Kristy Cameron</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/rect_2.png"></label>
										</center>
									</div>

									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>WL</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>95k</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<button type="button" class="btn-warning"></button>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>4 days</label>
										</center>
									</div>
								</div>
								
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
									<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#myModall3">
										<center>
											<label>Holly Packer</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/rect_3.png"></label>
										</center>
									</div>

									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>WL</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>200k</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<button type="button" class="btn-danger"></button>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>6 months</label>
										</center>
									</div>
								</div>
								
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
									<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#myModall3">
										<center>
											<label>Peter Piper</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/rect_1.png"></label>
										</center>
									</div>

									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>AK</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>700d</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<button type="button" class="btn-success"></button>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>4 days</label>
										</center>
									</div>
								</div>
								
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
									<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#myModall3">
										<center>
											<label>Liam Squire</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/rect_2.png"></label>
										</center>
									</div>

									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>AK</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>95k</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<button type="button" class="btn-info"></button>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>6 months</label>
										</center>
									</div>
								</div>
							
								</div>
							</div>
						
						</div>
					</div>
				
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingThree">
							<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#node_collapse" aria-expanded="false" aria-controls="node_collapse">
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category">
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>Node.js</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>8</label>
										</center>
									</div>

									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>6</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>60</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>-</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>-</label>
										</center>
									</div>
								</div>
							</a>
						</div>
						<div id="node_collapse" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
							<div class="panel-body">
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<span><i class="fa fa-user-o" aria-hidden="true"></i></span>
										</center>
									</div>
									<div class="event_client_price event_heading">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/rect_full_ff.png"></label>
										</center>
									</div>

									<div class="event_client_price event_heading">
										<center>
											<span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
										</center>
									</div>
									<div class="event_client_price event_heading">
										<center>
											<span><i class="fa fa-usd" aria-hidden="true"></i></span>
										</center>
									</div>
									<div class="event_client_price event_heading">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/life_line.png"></label>
										</center>
									</div>
									<div class="event_client_price event_heading">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/clock.png"></label>
										</center>
									</div>
								</div>
								
								<div class="clear5"></div>
								
								<div id="job_inner_data">
								
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
									<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#myModall3">
										<center>
											<label>Richard	White</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/rect_1.png"></label>
										</center>
									</div>

									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>AK, WL</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>150k</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<button type="button" class="btn-success"></button>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>6 days</label>
										</center>
									</div>
								</div>
								
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
									<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#myModall3">
										<center>
											<label>Sarah Brown</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/rect_2.png"></label>
										</center>
									</div>

									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>AK</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>700d</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<button type="button" class="btn-info"></button>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>2 months</label>
										</center>
									</div>
								</div>
								
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
									<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#myModall3">
										<center>
											<label>Harry Green</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/rect_3.png"></label>
										</center>
									</div>

									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>WL</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>95k</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<button type="button" class="btn-warning"></button>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>4 days</label>
										</center>
									</div>
								</div>
								
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
									<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#myModall3">
										<center>
											<label>Barry Orange</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/rect_1.png"></label>
										</center>
									</div>

									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>AK</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>200k</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<button type="button" class="btn-danger"></button>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>6 months</label>
										</center>
									</div>
								</div>
								
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
									<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#myModall3">
										<center>
											<label>Sam Blue</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/rect_2.png"></label>
										</center>
									</div>

									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>WL</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>150k</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<button type="button" class="btn-success"></button>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>6 days</label>
										</center>
									</div>
								</div>
								
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
									<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#myModall3">
										<center>
											<label>Theresa Red</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/rect_3.png"></label>
										</center>
									</div>

									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>AK</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>700d</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<button type="button" class="btn-info"></button>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>2 months</label>
										</center>
									</div>
								</div>
								
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
									<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#myModall3">
										<center>
											<label>Molly Jones</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/rect_1.png"></label>
										</center>
									</div>

									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>WL</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>95k</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<button type="button" class="btn-warning"></button>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>4 days</label>
										</center>
									</div>
								</div>
								
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
									<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#myModall3">
										<center>
											<label>Jeff Black</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/rect_2.png"></label>
										</center>
									</div>

									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>AK</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>200k</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<button type="button" class="btn-danger"></button>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>6 months</label>
										</center>
									</div>
								</div>
								
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
									<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#myModall3">
										<center>
											<label>Henry Baker</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/rect_3.png"></label>
										</center>
									</div>

									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>AK</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>150k</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<button type="button" class="btn-success"></button>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>6 days</label>
										</center>
									</div>
								</div>
								
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
									<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#myModall3">
										<center>
											<label>James Brown</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/rect_1.png"></label>
										</center>
									</div>

									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>AK</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>700d</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<button type="button" class="btn-info"></button>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>2 months</label>
										</center>
									</div>
								</div>
								
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
									<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#myModall3">
										<center>
											<label>Kristy Cameron</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/rect_2.png"></label>
										</center>
									</div>

									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>WL</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>95k</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<button type="button" class="btn-warning"></button>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>4 days</label>
										</center>
									</div>
								</div>
								
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
									<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#myModall3">
										<center>
											<label>Holly Packer</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/rect_3.png"></label>
										</center>
									</div>

									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>WL</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>200k</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<button type="button" class="btn-danger"></button>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>6 months</label>
										</center>
									</div>
								</div>
								
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
									<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#myModall3">
										<center>
											<label>Peter Piper</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/rect_1.png"></label>
										</center>
									</div>

									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>AK</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>700d</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<button type="button" class="btn-success"></button>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>4 days</label>
										</center>
									</div>
								</div>
								
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
									<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#myModall3">
										<center>
											<label>Liam Squire</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/rect_2.png"></label>
										</center>
									</div>

									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>AK</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>95k</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<button type="button" class="btn-info"></button>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>6 months</label>
										</center>
									</div>
								</div>
							
								</div>
							</div>
						
						</div>
					</div>
				
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingThree">
							<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#react_collapse" aria-expanded="false" aria-controls="react_collapse">
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category">
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>React.js</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>5</label>
										</center>
									</div>

									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>12</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>83</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>1</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>15k</label>
										</center>
									</div>
								</div>
							</a>
						</div>
						<div id="react_collapse" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
							<div class="panel-body">
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<span><i class="fa fa-user-o" aria-hidden="true"></i></span>
										</center>
									</div>
									<div class="event_client_price event_heading">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/rect_full_ff.png"></label>
										</center>
									</div>

									<div class="event_client_price event_heading">
										<center>
											<span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
										</center>
									</div>
									<div class="event_client_price event_heading">
										<center>
											<span><i class="fa fa-usd" aria-hidden="true"></i></span>
										</center>
									</div>
									<div class="event_client_price event_heading">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/life_line.png"></label>
										</center>
									</div>
									<div class="event_client_price event_heading">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/clock.png"></label>
										</center>
									</div>
								</div>
								
								<div class="clear5"></div>
								
								<div id="job_inner_data">
								
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
									<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#myModall3">
										<center>
											<label>Richard	White</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/rect_1.png"></label>
										</center>
									</div>

									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>AK, WL</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>150k</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<button type="button" class="btn-success"></button>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>6 days</label>
										</center>
									</div>
								</div>
								
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
									<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#myModall3">
										<center>
											<label>Sarah Brown</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/rect_2.png"></label>
										</center>
									</div>

									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>AK</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>700d</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<button type="button" class="btn-info"></button>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>2 months</label>
										</center>
									</div>
								</div>
								
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
									<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#myModall3">
										<center>
											<label>Harry Green</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/rect_3.png"></label>
										</center>
									</div>

									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>WL</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>95k</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<button type="button" class="btn-warning"></button>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>4 days</label>
										</center>
									</div>
								</div>
								
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
									<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#myModall3">
										<center>
											<label>Barry Orange</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/rect_1.png"></label>
										</center>
									</div>

									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>AK</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>200k</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<button type="button" class="btn-danger"></button>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>6 months</label>
										</center>
									</div>
								</div>
								
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
									<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#myModall3">
										<center>
											<label>Sam Blue</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/rect_2.png"></label>
										</center>
									</div>

									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>WL</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>150k</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<button type="button" class="btn-success"></button>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>6 days</label>
										</center>
									</div>
								</div>
								
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
									<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#myModall3">
										<center>
											<label>Theresa Red</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/rect_3.png"></label>
										</center>
									</div>

									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>AK</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>700d</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<button type="button" class="btn-info"></button>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>2 months</label>
										</center>
									</div>
								</div>
								
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
									<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#myModall3">
										<center>
											<label>Molly Jones</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/rect_1.png"></label>
										</center>
									</div>

									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>WL</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>95k</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<button type="button" class="btn-warning"></button>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>4 days</label>
										</center>
									</div>
								</div>
								
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
									<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#myModall3">
										<center>
											<label>Jeff Black</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/rect_2.png"></label>
										</center>
									</div>

									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>AK</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>200k</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<button type="button" class="btn-danger"></button>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>6 months</label>
										</center>
									</div>
								</div>
								
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
									<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#myModall3">
										<center>
											<label>Henry Baker</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/rect_3.png"></label>
										</center>
									</div>

									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>AK</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>150k</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<button type="button" class="btn-success"></button>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>6 days</label>
										</center>
									</div>
								</div>
								
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
									<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#myModall3">
										<center>
											<label>James Brown</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/rect_1.png"></label>
										</center>
									</div>

									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>AK</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>700d</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<button type="button" class="btn-info"></button>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>2 months</label>
										</center>
									</div>
								</div>
								
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
									<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#myModall3">
										<center>
											<label>Kristy Cameron</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/rect_2.png"></label>
										</center>
									</div>

									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>WL</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>95k</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<button type="button" class="btn-warning"></button>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>4 days</label>
										</center>
									</div>
								</div>
								
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
									<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#myModall3">
										<center>
											<label>Holly Packer</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/rect_3.png"></label>
										</center>
									</div>

									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>WL</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>200k</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<button type="button" class="btn-danger"></button>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>6 months</label>
										</center>
									</div>
								</div>
								
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
									<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#myModall3">
										<center>
											<label>Peter Piper</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/rect_1.png"></label>
										</center>
									</div>

									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>AK</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>700d</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<button type="button" class="btn-success"></button>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>4 days</label>
										</center>
									</div>
								</div>
								
								<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
									<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#myModall3">
										<center>
											<label>Liam Squire</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label><img src="<?php echo base_url();?>public/admin/img/rect_2.png"></label>
										</center>
									</div>

									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>AK</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>95k</label>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<button type="button" class="btn-info"></button>
										</center>
									</div>
									<div class="event_client_price event_heading pool_head_main">
										<center>
											<label>6 months</label>
										</center>
									</div>
								</div>
							
								</div>
							</div>
						
						</div>
					</div>
				
				</div>
                
                <div class="clearfix"></div>
            </div>

            <div class="clear10"></div>
        </div>
    </div>

    <div class="clear20"></div>

    <div style="clear:both; height:20px;"></div>
    <div class="clearfix"></div>
</div>
        <!-- /.content-wrapper -->