<?php 
//Call Helper for Getting Update Setting Modal Data
$display_setting = UpdateSetingModalData(); 

?>
 <footer class="main-footer"><strong>Copyright &copy; 2018 <a href="<?php echo base_url('dashboard');?>">Entros</a>.</strong> All rights reserved.

        </footer>
    </div>
<style type="text/css">
.fa-wrap-multiple .fs-wrap{
	outline: none !important;
}

	.fa-wrap-multiple .fs-label-wrap{
		border: 1px solid #e4e4e4;
    	width: 220px;
	}
	.green_hover_new
	{
	background-color: #314D68 !important;
    min-height: 20px;
    white-space: normal !important;
    font-size: 20px;
    border-radius: 6px;
    border: none;
    color: #fff;
    font-weight: 400;
    width: 100%;
    text-align: center;
    padding: 0px;
    font-size: 17px;
	}
	    
	#button_checked input:checked + label {
        white-space: normal !important;
    border-radius: 6px;
    border: none;
    color: #fff;
    font-weight: 400;
    background-color: #42C500 !important;
    width: 100%;
    text-align: center;
    padding: 0px;
    padding-top: 9px;
    font-size: 17px;
}

#open_modal .modal-dialog {
    width: 90%;
}
</style>
	<!-- new entry modal -->
	<div class="modal fade" id="myModal_new_entry" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h2 class="modal-title">Add new entry</h2>
				</div>
				<div class="modal-body">
					<form>
						<div class="col-md-6">
							<div class="form-group">
								<label>Hire number </label>
								<input type="text" class="form-control" placeholder="Serial no.">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Amount</label>
								 <input type="text" class="form-control" placeholder="Amount">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="exampleInputEmail1">Leader of leaders</label>
								<input type="text" class="form-control" placeholder="Leader of leaders">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label>Leader of professionals</label>
								<input type="text" class="form-control" placeholder="Leader of professionals">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Individual professionals</label>
								<input type="text" class="form-control" placeholder="Individual professionals">
							</div>
						</div>

						<div class="clearfix"></div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default btn-success" data-dismiss="modal">Add Now</button>
				</div>
			</div>
		</div>
	</div>
	<!-- new entry modal -->
	<!-- edit modal -->
	<div class="modal fade" id="myModal_start_fee" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h2 class="modal-title">Edit hire entry</h2>
				</div>
				<div class="modal-body">
					<form>
						<div class="col-md-8">
							<div class="form-group">
								<label>Field name </label>
								<input type="text" class="form-control" placeholder="Field name">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Percentage</label>
								<input type="text" class="form-control" placeholder="Percentage">
							</div>
						</div>
						<div class="clearfix"></div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default btn-success" data-dismiss="modal">Save</button>
				</div>
			</div>
		</div>
	</div>
	
	<!--- myModal2 --->
	<div id="myModal2" class="modal fade" role="dialog">
		<div class="modal-dialog modal_wdith_intro2">
			<!-- Modal content-->
			<div class="modal-content">

				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">×</button>
					<h2 class="modal-title">Intros</h2>
				</div>

				<div class="modal-body" style="padding:0px;">
					<div class="col-sm-12 p0" style="border-bottom: 1px solid #e4e4e4;">
					<div class="col-sm-4 modal_12_location">
						<ul class="products-list product-list-in-box">
							<li class="item">
								<div class="product-img">
									<img src="<?php echo base_url();?>public/admin/dist/img/default-50x50.gif" alt="Product Image">
								</div>
								<div class="product-info">
									<a href="#" data-toggle="modal" data-target="#myModal2" class="product-title">John Smith</a>
									<span class="product-description">
										<i class="fa fa-map-marker" aria-hidden="true"></i>San Franicso, CA
									</span>
									<strong><br/>Hiring</strong>
									<br/> Lorem IPsum
									<br>
									<strong>Successor Ready</strong>
									<br> Lorem IPsum<strong></strong>
									<br/>
									<strong>Qulification required</strong>
									<br> Lorem IPsum
									<br/>
									<strong>Contract types</strong>
									<br> Lorem IPsum
									<br>
								</div>
							</li>
						</ul>
					</div>
					<!-- div design -->

					<div class="col-sm-5 modal_12_bullet">
						<div class="clear5"></div>
						<div class="clear5"></div>

						<span class="label label-warning pull-right" style="margin-right:5px; float:inherit !important;">&nbsp;</span>
						<a href="javascript:void(0)" class="product-title">Software engineer </a>
						<div class="clear5"></div>
						<div class="clear5"></div>
						<div class="clear5"></div>
						<div class="clear5"></div>
						<p>Bullet Point Recruiter highlight</p>
						<p>Bullet Point Recruiter highlight</p>
						<p>Bullet Point Recruiter highlight</p>
						<p>Bullet Point Recruiter highlight</p>
						<p>Bullet Point Recruiter highlight</p>
					</div>
					<!-- div design -->

					<div class="col-sm-3">
						<br>
						<button type="button" class="btn btn-info btn-lg">Create Intro</button>
					</div>
					<!-- div design -->

					</div>
					
					<div class="clear5"></div>
					<div class="clear5"></div>

					<div class="col-sm-12 p0" style="border-bottom: 1px solid #e4e4e4;">
					<div class="col-sm-4 modal_12_location">
						<ul class="products-list product-list-in-box">

							<li class="item">

								<div class="product-img">

									<img src="<?php echo base_url();?>public/admin/dist/img/default-50x50.gif" alt="Product Image">

								</div>

								<div class="product-info">

									<a href="#" data-toggle="modal" data-target="#myModal2" class="product-title">John Smith

														</a>

									<span class="product-description">

						   <i class="fa fa-map-marker" aria-hidden="true"></i>

	   San Franicso, CA

							</span>

									<strong><br />

	Hiring</strong>

									<br /> Lorem IPsum

									<br>

									<strong>Successor Ready</strong>

									<br> Lorem IPsum<strong></strong>

									<br />

									<strong>Qulification required</strong>

									<br> Lorem IPsum

									<br />

									<strong></strong>

									<strong>Contract types</strong>

									<br> Lorem IPsum

									<br>

								</div>

							</li>

						</ul>

					</div>
					<!-- div design -->

					<div class="col-sm-5 modal_12_bullet">
						<div class="clear5"></div>
						<div class="clear5"></div>

						<span class="label label-warning pull-right" style="margin-right:5px; float:inherit !important;">&nbsp;</span>
						<a href="javascript:void(0)" class="product-title">Software engineer </a>
						<div class="clear5"></div>
						<div class="clear5"></div>
						<div class="clear5"></div>
						<div class="clear5"></div>
						<p>Bullet Point Recruiter highlight</p>
						<p>Bullet Point Recruiter highlight</p>
						<p>Bullet Point Recruiter highlight</p>
						<p>Bullet Point Recruiter highlight</p>
						<p>Bullet Point Recruiter highlight</p>
					</div>
					<!-- div design -->

					<div class="col-sm-3">
						<br>
						<button type="button" class="btn btn-info btn-lg">Create Intro</button>
					</div>
					<!-- div design -->
					</div>
					<div class="clear5"></div>
					<div class="clear5"></div>
					<div class="col-sm-12 p0" style="border-bottom: 1px solid #e4e4e4;">
					<div class="col-sm-4 modal_12_location">
						<ul class="products-list product-list-in-box">

							<li class="item">

								<div class="product-img">

									<img src="<?php echo base_url();?>public/admin/dist/img/default-50x50.gif" alt="Product Image">

								</div>

								<div class="product-info">

									<a href="#" data-toggle="modal" data-target="#myModal2" class="product-title">John Smith

														</a>

									<span class="product-description">

						   <i class="fa fa-map-marker" aria-hidden="true"></i>

	   San Franicso, CA

							</span>

									<strong><br />

	Hiring</strong>

									<br /> Lorem IPsum

									<br>

									<strong>Successor Ready</strong>

									<br> Lorem IPsum<strong></strong>

									<br />

									<strong>Qulification required</strong>

									<br> Lorem IPsum

									<br />

									<strong></strong>

									<strong>Contract types</strong>

									<br> Lorem IPsum

									<br>

								</div>

							</li>

						</ul>

					</div>
					<!-- div design -->

					<div class="col-sm-5 modal_12_bullet">
						<div class="clear5"></div>
						<div class="clear5"></div>

						<span class="label label-warning pull-right" style="margin-right:5px; float:inherit !important;">&nbsp;</span>
						<a href="javascript:void(0)" class="product-title">Software engineer </a>
						<div class="clear5"></div>
						<div class="clear5"></div>
						<div class="clear5"></div>
						<div class="clear5"></div>
						<p>Bullet Point Recruiter highlight</p>
						<p>Bullet Point Recruiter highlight</p>
						<p>Bullet Point Recruiter highlight</p>
						<p>Bullet Point Recruiter highlight</p>
						<p>Bullet Point Recruiter highlight</p>
					</div>
					<!-- div design -->

					<div class="col-sm-3">
						<br>
						<button type="button" class="btn btn-info btn-lg">Create Intro</button>
					</div>
					<!-- div design -->
					</div>
					<div class="clear5"></div>
					<div class="clear5"></div>
					<div class="col-sm-12 p0" style="border-bottom: 1px solid #e4e4e4;">
					<div class="col-sm-4 modal_12_location">
						<ul class="products-list product-list-in-box">

							<li class="item">

								<div class="product-img">

									<img src="<?php echo base_url();?>public/admin/dist/img/default-50x50.gif" alt="Product Image">

								</div>

								<div class="product-info">

									<a href="#" data-toggle="modal" data-target="#myModal2" class="product-title">John Smith

														</a>

									<span class="product-description">

						   <i class="fa fa-map-marker" aria-hidden="true"></i>

	   San Franicso, CA

							</span>

									<strong><br />

	Hiring</strong>

									<br /> Lorem IPsum

									<br>

									<strong>Successor Ready</strong>

									<br> Lorem IPsum<strong></strong>

									<br />

									<strong>Qulification required</strong>

									<br> Lorem IPsum

									<br />

									<strong></strong>

									<strong>Contract types</strong>

									<br> Lorem IPsum

									<br>

								</div>

							</li>

						</ul>

					</div>
					<!-- div design -->

					<div class="col-sm-5 modal_12_bullet">
						<div class="clear5"></div>
						<div class="clear5"></div>

						<span class="label label-warning pull-right" style="margin-right:5px; float:inherit !important;">&nbsp;</span>
						<a href="javascript:void(0)" class="product-title">Software engineer </a>
						<div class="clear5"></div>
						<div class="clear5"></div>
						<div class="clear5"></div>
						<div class="clear5"></div>
						<p>Bullet Point Recruiter highlight</p>
						<p>Bullet Point Recruiter highlight</p>
						<p>Bullet Point Recruiter highlight</p>
						<p>Bullet Point Recruiter highlight</p>
						<p>Bullet Point Recruiter highlight</p>
					</div>
					<!-- div design -->

					<div class="col-sm-3">
						<br>
						<button type="button" class="btn btn-info btn-lg">Create Intro</button>
					</div>
					<!-- div design -->
					</div>
					<div class="clear5"></div>
					<div class="clear5"></div>
					
					<div class="col-sm-4 modal_12_location">
						<ul class="products-list product-list-in-box">

							<li class="item">

								<div class="product-img">

									<img src="<?php echo base_url();?>public/admin/dist/img/default-50x50.gif" alt="Product Image">

								</div>

								<div class="product-info">

									<a href="#" data-toggle="modal" data-target="#myModal2" class="product-title">John Smith

														</a>

									<span class="product-description">

						   <i class="fa fa-map-marker" aria-hidden="true"></i>

	   San Franicso, CA

							</span>

									<strong><br />

	Hiring</strong>

									<br /> Lorem IPsum

									<br>

									<strong>Successor Ready</strong>

									<br> Lorem IPsum<strong></strong>

									<br />

									<strong>Qulification required</strong>

									<br> Lorem IPsum

									<br />

									<strong></strong>

									<strong>Contract types</strong>

									<br> Lorem IPsum

									<br>

								</div>

							</li>

						</ul>

					</div>
					<!-- div design -->

					<div class="col-sm-5 modal_12_bullet">
						<div class="clear5"></div>
						<div class="clear5"></div>

						<span class="label label-warning pull-right" style="margin-right:5px; float:inherit !important;">&nbsp;</span>
						<a href="javascript:void(0)" class="product-title">Software engineer </a>
						<div class="clear5"></div>
						<div class="clear5"></div>
						<div class="clear5"></div>
						<div class="clear5"></div>
						<p>Bullet Point Recruiter highlight</p>
						<p>Bullet Point Recruiter highlight</p>
						<p>Bullet Point Recruiter highlight</p>
						<p>Bullet Point Recruiter highlight</p>
						<p>Bullet Point Recruiter highlight</p>
					</div>
					<!-- div design -->

					<div class="col-sm-3">
						<br>
						<button type="button" class="btn btn-info btn-lg">Create Intro</button>
					</div>
					<!-- div design -->
					
					<div class="clear5"></div>
					<div class="clear5"></div>

					<div class="clearfix"></div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--- myModal2 --->

	<!--- myModal3 --->
	
	<!--- myModal3 --->

	<!--- myModal4 --->
	<div id="myModal4" class="modal fade" role="dialog">
        <div class="modal-dialog modal_wdith_intro">

            <!-- Modal content-->

            <div class="modal-content">

                <div class="modal-header">

                    <div class="col-sm-6 modal_intro">

                        <h2>Talent Detail </h2>

                    </div>

                    <button type="button" class="close modal_intro_close" data-dismiss="modal" style="margin-top: 0px !important;">&times;</button>

                    <h4 class="modal-title"></h4>

                </div>

                <div class="modal-body" style="padding-top:0px; padding-bottom:0px;">

                    <div class="col-sm-12 table_talent_h" style="padding:10px;">

                        <table width="100%" border="0" cellspacing="2" cellpadding="2">

                            <tr>

                                <td><strong>Added to pool</strong>

                                </td>

                                <td><strong>Interview sceduled</strong></td>

                                <td><strong>HM has interacted</strong></td>

                                <td><strong>Intro Created</strong></td>

                            </tr>

                            <tr>

                                <td>Lorem Ipsum dolor site amet text</td>

                                <td>Lorem Ipsum dolor site amet text</td>

                                <td>Lorem Ipsum dolor site amet text</td>

                                <td>Lorem Ipsum dolor site amet text</td>

                            </tr>

                            <tr>

                                <td>Lorem Ipsum dolor site amet text</td>

                                <td>Lorem Ipsum dolor site amet text</td>

                                <td>Lorem Ipsum dolor site amet text</td>

                                <td>Lorem Ipsum dolor site amet text</td>

                            </tr>

                            <tr>

                                <td>Lorem Ipsum dolor site amet text</td>

                                <td>Lorem Ipsum dolor site amet text</td>

                                <td>Lorem Ipsum dolor site amet text</td>

                                <td>Lorem Ipsum dolor site amet text</td>

                            </tr>

                            <tr>

                                <td>Lorem Ipsum dolor site amet text</td>

                                <td>Lorem Ipsum dolor site amet text</td>

                                <td>Lorem Ipsum dolor site amet text</td>

                                <td>Lorem Ipsum dolor site amet text</td>

                            </tr>

                            <tr>

                                <td>Lorem Ipsum dolor site amet text</td>

                                <td>Lorem Ipsum dolor site amet text</td>

                                <td>Lorem Ipsum dolor site amet text</td>

                                <td>Lorem Ipsum dolor site amet text</td>

                            </tr>

                            <tr>

                                <td>Lorem Ipsum dolor site amet text</td>

                                <td>Lorem Ipsum dolor site amet text</td>

                                <td>Lorem Ipsum dolor site amet text</td>

                                <td>Lorem Ipsum dolor site amet text</td>

                            </tr>

                            <tr>

                                <td>Lorem Ipsum dolor site amet text</td>

                                <td>Lorem Ipsum dolor site amet text</td>

                                <td>Lorem Ipsum dolor site amet text</td>

                                <td>Lorem Ipsum dolor site amet text</td>

                            </tr>

                            <tr>

                                <td>Lorem Ipsum dolor site amet text</td>

                                <td>Lorem Ipsum dolor site amet text</td>

                                <td>Lorem Ipsum dolor site amet text</td>

                                <td>Lorem Ipsum dolor site amet text</td>

                            </tr>

                            <tr>

                                <td>Lorem Ipsum dolor site amet text</td>

                                <td>Lorem Ipsum dolor site amet text</td>

                                <td>Lorem Ipsum dolor site amet text</td>

                                <td>Lorem Ipsum dolor site amet text</td>

                            </tr>

                            <tr>

                                <td>Lorem Ipsum dolor site amet text</td>

                                <td>Lorem Ipsum dolor site amet text</td>

                                <td>Lorem Ipsum dolor site amet text</td>

                                <td>Lorem Ipsum dolor site amet text</td>

                            </tr>

                            <tr>

                                <td>Lorem Ipsum dolor site amet text</td>

                                <td>Lorem Ipsum dolor site amet text</td>

                                <td>Lorem Ipsum dolor site amet text</td>

                                <td>Lorem Ipsum dolor site amet text</td>

                            </tr>

                        </table>

                    </div>

                    <div class="clear10"></div>

                </div>

                <div class="modal-footer">

                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                </div>

            </div>

        </div>

    </div>

    <!---job index page popup start-->

    <!-- modal 5 start -->
    <?php
	// echo "<pre>";print_r($talent_requests_hiring_manager);
?>
<div id="dashboard_job_modal_div"></div>
<div id="dashboard_talent_modal_div"></div>
<div id="dashboard_intros_modal_div"></div>

	<!-- NAVBAR INTROS MODAL START -->
	<?php
		$this->load->view('admin_side/jobIntro/intros_modal/job_intros_modal');
	?>
	<!-- NAVBAR INTROS MODAL ENDS -->
	
    <!-- modal 5 ends -->




	<div id="myModal_decline" class="modal fade" role="dialog">

        <div class="modal-dialog modal_wdith_intro">

            <!-- Modal content-->

            <div class="modal-content">
				<div class="modal-header">
					<div class="col-sm-11 modal_intro intro_builder">
						<h2>Job details</h2>
					</div>
					<div class="col-sm-1 p0">
						<button type="button" class="close" data-dismiss="modal">×</button>
					</div>
				</div>
				<div class="clear10"></div>
                <div class="col-sm-6">

                    <h3 data-toggle="collapse" data-target="#demo001" class="collapse_heading">Candidate info </h3>

                    <div id="demo001" class="collapse">

                        <div class="col-sm-12 modal_intro p0 ">
                            <div class="col-sm-3 p0">
                                <img src="<?php echo base_url();?>public/admin/dist/img/1.jpg" class="img-responsive" alt="">
							</div>
							<div class="col-sm-9 candidate_info_tab">
								<div class="col-sm-7 job_padd_left">
									<label>First name: </label>
								</div>
								<div class="col-sm-5">
									<p onclick="changeColor(this)" backround-attr="">Alexander</p>
								</div>
								<div class="col-sm-7 job_padd_left">
									<label>Last name: </label>
								</div>
								<div class="col-sm-5">
									<p onclick="changeColor(this)" backround-attr="">Pierce</p>
								</div>
								<div class="col-sm-7 job_padd_left">
									<label>Current job &amp; company: </label>
								</div>
								<div class="col-sm-5">
									<p onclick="changeColor(this)" backround-attr="">Lorem Ipsum</p>
								</div>
								<div class="col-sm-7 job_padd_left">
									<label>Past job &amp; company: </label>
								</div>
								<div class="col-sm-5">
									<p onclick="changeColor(this)" backround-attr="">Lorem Ipsum</p>
								</div>
							</div>

							<div class="clear20"></div>

							<div class="candidate_info_tab">
								<div class="col-sm-8 p0">
									<label>Recruiter summary endorsement:</label>
								</div>
								<div class="col-sm-4 p0">
									<p onclick="changeColor(this)" backround-attr="">Lorem Ipsum</p>
								</div>

								<div class="clearfix"></div>

								<div class="col-sm-8 p0">
									<label>Key points address sign requirements:</label>
								</div>
								<div class="col-sm-4 p0">
									<p onclick="changeColor(this)" backround-attr="">Lorem Ipsum</p>
								</div>

								<div class="clearfix"></div>

								<div class="col-sm-8 p0">
									<label>Key Points address sign requirements:</label>
								</div>
								<div class="col-sm-4 p0">
									<p onclick="changeColor(this)" backround-attr="">Lorem Ipsum</p>
								</div>
							</div>

							<div class="clear20"></div>

							<div class="col-sm-10 p0">
								<input name="" class="form-control" type="text">
							</div>

							<div class="clear20"></div>

							<div class="col-sm-12 p0"><strong>Person Description</strong></div>
							<div class="col-sm-12 p0">
								<p onclick="changeColor(this)" backround-attr="">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled</p>
							</div>

							<hr>
							<div class="clear10"></div>

							<button type="button" class="btn btn_candidate">Chnage Template</button>
							<button type="button" class="btn btn_candidate">Save Template</button>
							<div class="clear10"></div>
							<label> Photo Imported from Linkedin</label>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <h3 data-toggle="collapse" data-target="#demo010" class="collapse_heading">Job details</h3>
                    <div id="demo010" class="collapse">
                        <div class="col-sm-12 modal_intro p0 candidate_info_tab">
                            <div class="col-sm-5 p0">
								<label>Job Ttile:</label>
							</div>

                            <div class="col-sm-7">
								<p onclick="changeColor(this)" backround-attr="">Lorem IPsum</p>
							</div>

							<div class="clearfix"></div>

                            <div class="col-sm-5 p0">
								<label>Location:</label>
							</div>

                            <div class="col-sm-7">
								<p onclick="changeColor(this)" backround-attr="">Lorem IPsum</p>
							</div>

							<div class="clearfix"></div>

                            <div class="col-sm-5 p0">
								<label>Hiring:</label>
							</div>

                            <div class="col-sm-7">
								<p onclick="changeColor(this)" backround-attr="">Lorem IPsum</p>
							</div>

							<div class="clearfix"></div>

                            <div class="col-sm-5 p0">
								<label>Experience for role:</label>
							</div>


                            <div class="col-sm-7">
								<p onclick="changeColor(this)" backround-attr="">Lorem IPsum</p>
							</div>

							<div class="clearfix"></div>

							<div class="col-sm-5 p0">
								<label>Capabillity for role:</label>
							</div>

                            <div class="col-sm-7">
								<p onclick="changeColor(this)" backround-attr="">Lorem IPsum</p>
							</div>

							<div class="clearfix"></div>

                            <div class="col-sm-5 p0">
								<label>Successor Ready:</label>
							</div>

                            <div class="col-sm-7">
								<p onclick="changeColor(this)" backround-attr="">Lorem IPsum</p>
							</div>

							<div class="clearfix"></div>

                            <div class="col-sm-5 p0">
								<label>Qulification required:</label>
							</div>

                            <div class="col-sm-7">
								<p onclick="changeColor(this)" backround-attr="">Lorem IPsum</p>
							</div>

							<div class="clearfix"></div>

                            <div class="col-sm-5 p0">
								<label>Contract types:</label>
							</div>

                            <div class="col-sm-7">
								<p onclick="changeColor(this)" backround-attr="">Lorem IPsum</p>
							</div>

							<div class="clearfix"></div>

                            <div class="col-sm-5 p0">
								<label>Ideal Start dates:</label>
							</div>

                            <div class="col-sm-7">
								<p onclick="changeColor(this)" backround-attr="">Loreum Ipsum</p>
							</div>

							<div class="clearfix"></div>

                            <div class="col-sm-5 p0">
								<label>Flexible Working:</label>
							</div>

                            <div class="col-sm-7">
								<p onclick="changeColor(this)" backround-attr="">Loreum Ipsum</p>
							</div>

							<div class="clearfix"></div>


                            <div class="col-sm-12 p0"><label>Key Capability required</label></div>

                            <div class="col-sm-12 p0"><label>Key Capability required</label></div>

                            <div class="col-sm-12 p0"><label>Key Capability required</label></div>

                            <div class="clear5"></div>

                            <div class="col-sm-12 p0"><label>JD Link</label></div>

                            <div class="clear5"></div>

                            <div class="col-sm-12 p0"><label>HM Availablility</label></div>

                            <div class="col-sm-4 p0">
                                <button type="button" class="btn btn_candidate">Intrested</button>
                            </div>

                            <div class="col-sm-4 p0">
                                <button type="button" class="btn btn_candidate">Decline</button>
                            </div>

                            <div class="col-sm-4 p0">
                                <button type="button" class="btn btn_candidate">Next Steps</button>
                            </div>

                            <div class="clear10"></div>

                            <div class="col-sm-4 p0"><p onclick="changeColor(this)" backround-attr="">IN-formal meeting call</p></div>

                            <div class="col-sm-4 p0"><p onclick="changeColor(this)" backround-attr="">Just Reject Information</p></div>

                            <div class="clear10"></div>

                            <div class="col-sm-4 p0">
                                <button type="button" class="btn btn_candidate">Full tsonar</button>
                            </div>

                            <div class="col-sm-4 p0">
                                <button type="button" class="btn btn_candidate"> No rejections</button>
                            </div>

                            <div class="col-sm-4 p0">
                                <button type="button" class="btn btn_candidate">Manual</button>
                            </div>

                            <div class="clear5"></div>

                            <div class="col-sm-12 p0"><p onclick="changeColor(this)" backround-attr="">Video Call / Skype etc intrview Hold until more candidates</p></div>

                        </div>

                    </div>

                </div>

                <div class="clear20"></div>

                <div class="modal-body candidate_info_tab" style="padding:0px 15px;">
                    <div class="col-sm-12 p0">
                        <h3 class="intro_candidate">Software Engineer - Germany - Yearly - $ 20,000</h3>
                    </div>

                    <div class="clear10"></div>

                    <div class="col-sm-2 p0">

                        <img src="<?php echo base_url();?>public/admin/img/img_new.jpg" class="img-responsive" style="width:128px; height:128px;" alt="">

                    </div>

                    <div class="col-sm-10 p0">
                        <div class="col-sm-12 p0" style="">
                            <div class="col-sm-3"><label>Name:</label></div>
                            <div class="col-sm-3"><p onclick="changeColor(this)" backround-attr="">Harry James</p></div>
							<div class="col-sm-3"><label>Location:</label></div>
                            <div class="col-sm-3"><p onclick="changeColor(this)" backround-attr="">Berlin, Germany</p></div>
                        </div>

                        <div class="col-sm-12 p0" style="">
							<div class="col-sm-3"><label>Salary:</label></div>
                            <div class="col-sm-3"><p onclick="changeColor(this)" backround-attr="">$ 20,000</p></div>
							<div class="col-sm-3"><label>Contract:</label></div>
                            <div class="col-sm-3"><p onclick="changeColor(this)" backround-attr="">Yearly</p></div>
                        </div>

                        <div class="col-sm-12 p0" style="">
                            <div class="col-sm-3"><label>Flexi:</label></div>
                            <div class="col-sm-3"><p onclick="changeColor(this)" backround-attr="">Lorem Ipsum</p></div>
							<div class="col-sm-3"><label>Availability:</label></div>
                            <div class="col-sm-3"><p onclick="changeColor(this)" backround-attr="">9 AM To 5 PM</p></div>
                        </div>

                        <div class="col-sm-12 p0" style="">
                            <div class="col-sm-3"><label>Current:</label></div>
                            <div class="col-sm-3"><p onclick="changeColor(this)" backround-attr="">MS Computer Sciene</p></div>
							<div class="col-sm-3"><label>Past:</label></div>
                            <div class="col-sm-3"><p onclick="changeColor(this)" backround-attr="">BS Computer Science</p></div>
                        </div>

                        <div class="col-sm-12 p0" style="">
                            <div class="col-sm-3"><label>Education:</label></div>
                            <div class="col-sm-3"><p onclick="changeColor(this)" backround-attr="">Software Engineering</p></div>
                        </div>
                    </div>

                    <div class="clear10"></div>

					<div class="points_setting">
                    <div class="col-sm-6 responsible_padd_left">
                        <h3>Responsibilities</h3>
                        <ul>
                            <li onclick="changeColor(this)" backround-attr=""><i class="fa fa-caret-right" aria-hidden="true"></i> Bullet Point Recruiter highlight</li>
                            <li onclick="changeColor(this)" backround-attr=""><i class="fa fa-caret-right" aria-hidden="true"></i> Bullet Point Recruiter highlight</li>
							<li onclick="changeColor(this)" backround-attr=""><i class="fa fa-caret-right" aria-hidden="true"></i> Bullet Point Recruiter highlight</li>
							<li onclick="changeColor(this)" backround-attr=""><i class="fa fa-caret-right" aria-hidden="true"></i> Bullet Point Recruiter highlight</li>
							<li onclick="changeColor(this)" backround-attr=""><i class="fa fa-caret-right" aria-hidden="true"></i> Bullet Point Recruiter highlight</li>
                        </ul>
                    </div>

                    <div class="col-sm-6 responsible_padd_right">
                        <h3>Key Achievments</h3>
                        <ul>
                            <li onclick="changeColor(this)" backround-attr=""><i class="fa fa-caret-right" aria-hidden="true"></i> Bullet Point Recruiter highlight</li>
                            <li onclick="changeColor(this)" backround-attr=""><i class="fa fa-caret-right" aria-hidden="true"></i> Bullet Point Recruiter highlight</li>
							<li onclick="changeColor(this)" backround-attr=""><i class="fa fa-caret-right" aria-hidden="true"></i> Bullet Point Recruiter highlight</li>
							<li onclick="changeColor(this)" backround-attr=""><i class="fa fa-caret-right" aria-hidden="true"></i> Bullet Point Recruiter highlight</li>
							<li onclick="changeColor(this)" backround-attr=""><i class="fa fa-caret-right" aria-hidden="true"></i> Bullet Point Recruiter highlight</li>
                        </ul>
                    </div>

                    <div class="col-sm-12 p0">
                        <h3>Key Strengths</h3>
                        <ul>
                            <li onclick="changeColor(this)" backround-attr=""><i class="fa fa-caret-right" aria-hidden="true"></i> Communicating to stakeholders including executive level</li>
                            <li onclick="changeColor(this)" backround-attr=""><i class="fa fa-caret-right" aria-hidden="true"></i> Designing operations models to meet cost savings and efficiencies</li>
                        </ul>
                    </div>

                    <div class="col-sm-12 p0">
                        <h3>Areas developed</h3>
                        <ul>
                            <li onclick="changeColor(this)" backround-attr=""><i class="fa fa-caret-right" aria-hidden="true"></i> Communicating to stakeholders including executive level</li>
                            <li onclick="changeColor(this)" backround-attr=""><i class="fa fa-caret-right" aria-hidden="true"></i> Designing operations models to meet cost savings and efficiencies</li>
                        </ul>
                    </div>

                    <div class="col-sm-12 p0">
                        <h3>Areas developing</h3>
                        <ul>
                            <li onclick="changeColor(this)" backround-attr=""><i class="fa fa-caret-right" aria-hidden="true"></i> Communicating to stakeholders including executive level</li>
                            <li onclick="changeColor(this)" backround-attr=""><i class="fa fa-caret-right" aria-hidden="true"></i> Designing operations models to meet cost savings and efficiencies</li>
                        </ul>
                    </div>

                    <div class="col-sm-12 p0">
                        <h3>Areas developing</h3>
						<ul>
                            <li onclick="changeColor(this)" backround-attr=""><i class="fa fa-caret-right" aria-hidden="true"></i> Overall reasons why the hiring manager should interview the candidate</li>
                        </ul>
                    </div>


					</div>
                    <div class="clearfix"></div>
                </div>

                <div class="clear10"></div>

                <div class="modal-footer">
					<div class="col-sm-12">
						<button type="button" class="btn btn-info btn-lg pull-right" data-dismiss="modal">Save</button>
					</div>

                </div>

            </div>
        </div>

    </div>

	<div id="myModal6" class="modal fade">

        <div class="modal-dialog modal_wdith_intro">

            <!-- Modal content-->

            <div class="modal-content">

                <div class="modal-header">

                    <div class="col-sm-6 modal_intro">

                        <h2>Job Detail </h2>

                    </div>

                    <button type="button" class="close modal_intro_close" data-dismiss="modal" style="margin-top: 0px !important;">&times;</button>

                    <h4 class="modal-title"></h4>

                </div>

                <div class="modal-body" style="padding-top:0px; padding-bottom:0px;">

                    <div class="col-sm-12 table_talent_h" style="padding:10px;">

                        <table width="100%" border="0" cellspacing="2" cellpadding="2">

                            <tr>

                                <td><strong>Assigned Candidate</strong>

                                </td>

                                <td><strong>Intro Created</strong></td>

                                <td><strong>Lorem Ipsum Dolor</strong></td>

                                <td><strong>Lorem Ipsum Dolor</strong></td>

                            </tr>

                            <tr>

                                <td>Lorem Ipsum dolor site amet text</td>

                                <td>Lorem Ipsum dolor site amet text</td>

                                <td>Lorem Ipsum dolor site amet text</td>

                                <td>Lorem Ipsum dolor site amet text</td>

                            </tr>

                            <tr>

                                <td>Lorem Ipsum dolor site amet text</td>

                                <td>Lorem Ipsum dolor site amet text</td>

                                <td>Lorem Ipsum dolor site amet text</td>

                                <td>Lorem Ipsum dolor site amet text</td>

                            </tr>

                            <tr>

                                <td>Lorem Ipsum dolor site amet text</td>

                                <td>Lorem Ipsum dolor site amet text</td>

                                <td>Lorem Ipsum dolor site amet text</td>

                                <td>Lorem Ipsum dolor site amet text</td>

                            </tr>

                            <tr>

                                <td>Lorem Ipsum dolor site amet text</td>

                                <td>Lorem Ipsum dolor site amet text</td>

                                <td>Lorem Ipsum dolor site amet text</td>

                                <td>Lorem Ipsum dolor site amet text</td>

                            </tr>

                            <tr>

                                <td>Lorem Ipsum dolor site amet text</td>

                                <td>Lorem Ipsum dolor site amet text</td>

                                <td>Lorem Ipsum dolor site amet text</td>

                                <td>Lorem Ipsum dolor site amet text</td>

                            </tr>

                            <tr>

                                <td>Lorem Ipsum dolor site amet text</td>

                                <td>Lorem Ipsum dolor site amet text</td>

                                <td>Lorem Ipsum dolor site amet text</td>

                                <td>Lorem Ipsum dolor site amet text</td>

                            </tr>

                            <tr>

                                <td>Lorem Ipsum dolor site amet text</td>

                                <td>Lorem Ipsum dolor site amet text</td>

                                <td>Lorem Ipsum dolor site amet text</td>

                                <td>Lorem Ipsum dolor site amet text</td>

                            </tr>

                            <tr>

                                <td>Lorem Ipsum dolor site amet text</td>

                                <td>Lorem Ipsum dolor site amet text</td>

                                <td>Lorem Ipsum dolor site amet text</td>

                                <td>Lorem Ipsum dolor site amet text</td>

                            </tr>

                            <tr>

                                <td>Lorem Ipsum dolor site amet text</td>

                                <td>Lorem Ipsum dolor site amet text</td>

                                <td>Lorem Ipsum dolor site amet text</td>

                                <td>Lorem Ipsum dolor site amet text</td>

                            </tr>

                            <tr>

                                <td>Lorem Ipsum dolor site amet text</td>

                                <td>Lorem Ipsum dolor site amet text</td>

                                <td>Lorem Ipsum dolor site amet text</td>

                                <td>Lorem Ipsum dolor site amet text</td>

                            </tr>

                            <tr>

                                <td>Lorem Ipsum dolor site amet text</td>

                                <td>Lorem Ipsum dolor site amet text</td>

                                <td>Lorem Ipsum dolor site amet text</td>

                                <td>Lorem Ipsum dolor site amet text</td>

                            </tr>

                        </table>

                    </div>

                    <div class="clear10"></div>

                </div>

                <div class="modal-footer">

                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                </div>

            </div>

        </div>

    </div>

	<!-- Job  Modal start-->
	<div class="modal" id="myModal_job_header">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h2 class="modal-title">Talent request</h2>
				</div>
				<div class="modal-body">
					<div class="panel with-nav-tabs panel-default">
					<?php 
					$data['dropDown_1'] = 1;
                	$data['dropDown_2'] = 2;
                	$data['dropDown_3'] = 3; 
                	$data['dropDown_4'] = 4;
                	$data['quick_job_tab'] = 'quick_modal';
                	$data['full_job_tab'] = 'full_job_modal';
                	$data['quick_hiring_manager_availability']='modal'; //hirng manger availiability quick calendar tabs modal 
                	$data['full_hiring_manager_availability']='modal';//hirng manger availiability full calendar tabs modal
                	$data['quick_job_select']='modal'; //make job id unique
                	$data['quick_job_level_select']='modal'; //make job level id unique
                	$data['quick_job_level_id']='modal'; //make job level value id unique
                	$data['quick_hiringManagerTab']='modal'; //make hiring manger availavility id unique
                	// full request job varibales of checkboxs select and deselect
                	$data['full_job_select']='modal'; //make job id unique
                	$data['full_job_level_select']='modal'; //make job level id unique
                	$data['form_fields_class']='_modal'; // separete form fields in page and modal
                	$data['modal_hiring_area']='modal'; // separete form fields in page and modal and calendar fielsds

                	




                	
					$this->load->view('admin_side/talentRequests/header-common/job_request',$data);
					?>
				<div class="clearfix"></div>
				 <?php 
			        // $this->load->view('admin_side/talentRequests/header-common/client_or_business_modal');
			    ?>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
</div>
	<!-- job Modal end -->

	<div class="modal" id="client_business_area" >
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h2 class="modal-title">Client or bussiness area</h2>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <!-- form is being handled in public/js/custom file -->
                    <form method="post" id="formpost">
                    	<input type="hidden" name="action" id="action" value="submitClientBussinessArea">
                    	<div class="col-md-6">
							<div class="form-group change">
								<label>First Name </label>
								<input type="text" name="talent_cl_input_fname" id="talent_cl_input_fname" class="form-control" placeholder="First Name">
								<span class="help-block"></span>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group change">
								<label>Last Name</label>
								 <input type="text" name="talent_cl_input_lname" id="talent_cl_input_lname" class="form-control" placeholder="Last Name">
								 <span class="help-block"></span>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group change">
								<label for="exampleInputEmail1">Email Address</label>
								<input type="email" id="talent_cl_input_email" name="talent_cl_input_email" class="form-control" placeholder="Email Address" required="">
								<span class="help-block"></span>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group change">
								<label for="exampleInputEmail1">Phone Number</label>
								<input type="number" id="talent_cl_input_phone" name="talent_cl_input_phone" class="form-control" placeholder="Phone Number">
								<span class="help-block"></span>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group change">
								<label>Gender</label>
								<select name="talent_cl_input_gender" id="talent_cl_input_gender" class="form-control">
									<option value="">Select Gender</option>
									<option value="male">Male</option>
									<option value="female">Female</option>
								</select>
								<span class="help-block"></span>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group change">
								<label>State</label>
								<input type="text" id="talent_cl_input_state" name="talent_cl_input_state" class="form-control" placeholder="State">
								<span class="help-block"></span>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group change">
								<label>Zipcode</label>
								<input type="text" id="talent_cl_input_zipcode" name="talent_cl_input_zipcode" class="form-control" placeholder="Zipcode">
								<span class="help-block"></span>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group change">
								<label>City</label>
								<input type="text" id="talent_cl_input_city" name="talent_cl_input_city" class="form-control" placeholder="City">
								<span class="help-block"></span>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group change">
								<label>Country</label>
								<input type="text" id="talent_cl_input_country" name="talent_cl_input_country" class="form-control" placeholder="Country">
								<span class="help-block"></span>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group change">
								<label>Password</label>
								<input type="password" id="talent_cl_input_password" name="talent_cl_input_password" class="form-control" placeholder="Password">
								<span class="help-block"></span>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group change">
								<label>Confirm Password</label>
								<input type="password" id="talent_cl_input_conf_pass" name="talent_cl_input_conf_pass" class="form-control" placeholder="Confirm Password">
								<span class="help-block"></span>
							</div>
						</div>
                        <div class="clearfix"></div>
                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" id="save_Clientbussiness_area">Save</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="hiring_manager" >
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h2 class="modal-title">Hiring manager</h2>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <!-- // hiring manager form is being handled is admin/js/talentrequest -->
                    <form method="post" id="hiring_manager_form">
                        <div class="col-md-8 p0">
                            <input type="hidden" name="action" id="hiring_manager_action" value="submitHiringManager">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="hiringManagerName" id="hiringManager_name" placeholder="Name">
                                <div class="error" id="error_hiringManagerName"></div>
                                <div class="clear10"></div>
                                <label>Email</label>
                                <input type="email" class="form-control" name="hiringManagerEmail" id="hiringManagerEmail" placeholder="Email(enter over)">
                                <div class="error" id="error_hiringManagerEmail"></div>
                                <div class="clear10"></div>
                                <label>Job Title</label>
                                <input type="Text" class="form-control" name="hiringManagerJobTitle" id="hiringManagerJobTitle" placeholder="Job Title">
                                <div class="error" id="error_hiringManagerJobTitle"></div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" id="hiring_manager_btn" >Save</button>
                </div>
            </div>
        </div>
    </div>
    
	<?php 
		$this->load->view("admin_side/talentRequests/talent_modal/talentModal"); 
	?>


  <!-- add pool modal -->
  <div class="modal fade" id="pool_header_option" role="dialog">
      <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h2 class="modal-title">Add Pool</h2>
              </div>

              <div class="modal-body">

                  <div class="col-sm-12">
                      <button type="submit" class="button btn-lg btn_entry_new pull-right" data-toggle="modal" data-target="#pool_entry_data">
                          Add Pool
                      </button>
                  </div>

                  <div class="clearfix"></div>

                  <div class="col-sm-12">
                      <div id="pool_members" style="background: #fff; padding: 0px 15px;">
                          <div class="clear10"></div>
                          <!-- Harry New-->
                          <div class="col-sm-12 p0">
                              <div class="desktop_ceremony event_client_pbox mobile_heading_agency">
                                  <div class="event_client_price event_heading">
                                      <center>
                                          <label>Pool</label>
                                      </center>
                                  </div>
                                  <div class="event_client_price event_heading">
                                      <center>
                                          <label>Number of Candidates</label>
                                      </center>
                                  </div>

                                  <div class="event_client_price event_heading">
                                      <center>
                                          <label>Actions </label>
                                      </center>
                                  </div>
                              </div>

                              <div class="clear10"></div>

                              <div id="desktop_field_label">

                                  <div class="desktop_ceremony event_client_pbox">
                                      <div class="event_client_price">
                                          <center>
                                              <label>Pool</label>
                                              <p data-toggle="modal" data-target="#pool_project_manager">Javascript</p>
                                          </center>
                                      </div>
                                      <div class="event_client_price">
                                          <center>
                                              <label>Number of Candidates</label>
                                              <p>13</p>
                                          </center>
                                      </div>

                                      <div class="event_client_price actions_mobile">
                                          <center>
                                              <label>Actions </label>
                                          </center>
                                          <center>
                                              <button type="submit" class="button btn-sm btn-warning" data-toggle="modal" data-target="#pool_edit">
                                                  <i class="fa fa-pencil" aria-hidden="true"></i>
                                              </button>
                                              <button type="submit" class="button btn-sm btn-danger" data-toggle="modal" data-target="#pool_entry_delete">
                                                  <i class="fa fa-trash" aria-hidden="true"></i>
                                              </button>
                                          </center>
                                      </div>
                                  </div>

                                  <div class="clear10"></div>

                                  <div class="desktop_ceremony event_client_pbox">
                                      <div class="event_client_price">
                                          <center>
                                              <label>Pool</label>
                                              <p data-toggle="modal" data-target="#pool_software_eng">Php</p>
                                          </center>
                                      </div>
                                      <div class="event_client_price">
                                          <center>
                                              <label>Number of Candidates</label>
                                              <p>28</p>
                                          </center>
                                      </div>

                                      <div class="event_client_price actions_mobile">
                                          <center>
                                              <label>Actions </label>
                                          </center>
                                          <center>
                                              <button type="submit" class="button btn-sm btn-warning" data-toggle="modal" data-target="#pool_edit">
                                                  <i class="fa fa-pencil" aria-hidden="true"></i>
                                              </button>
                                              <button type="submit" class="button btn-sm btn-danger" data-toggle="modal" data-target="#pool_entry_delete">
                                                  <i class="fa fa-trash" aria-hidden="true"></i>
                                              </button>
                                          </center>
                                      </div>
                                  </div>

                                  <div class="clear10"></div>

                                  <div class="desktop_ceremony event_client_pbox">
                                      <div class="event_client_price">
                                          <center>
                                              <label>Pool</label>
                                              <p data-toggle="modal" data-target="#pool_web_developer">Andriod</p>
                                          </center>
                                      </div>
                                      <div class="event_client_price">
                                          <center>
                                              <label>Number of Candidates</label>
                                              <p>31</p>
                                          </center>
                                      </div>

                                      <div class="event_client_price actions_mobile">
                                          <center>
                                              <label>Actions </label>
                                          </center>
                                          <center>
                                              <button type="submit" class="button btn-sm btn-warning" data-toggle="modal" data-target="#pool_edit">
                                                  <i class="fa fa-pencil" aria-hidden="true"></i>
                                              </button>
                                              <button type="submit" class="button btn-sm btn-danger" data-toggle="modal" data-target="#pool_entry_delete">
                                                  <i class="fa fa-trash" aria-hidden="true"></i>
                                              </button>
                                          </center>
                                      </div>
                                  </div>

                                  <div class="clear10"></div>

                                  <div class="desktop_ceremony event_client_pbox">
                                      <div class="event_client_price">
                                          <center>
                                              <label>Pool</label>
                                              <p data-toggle="modal" data-target="#node_js">Node.js</p>
                                          </center>
                                      </div>
                                      <div class="event_client_price">
                                          <center>
                                              <label>Number of Candidates</label>
                                              <p>31</p>
                                          </center>
                                      </div>

                                      <div class="event_client_price actions_mobile">
                                          <center>
                                              <label>Actions </label>
                                          </center>
                                          <center>
                                              <button type="submit" class="button btn-sm btn-warning" data-toggle="modal" data-target="#pool_edit">
                                                  <i class="fa fa-pencil" aria-hidden="true"></i>
                                              </button>
                                              <button type="submit" class="button btn-sm btn-danger" data-toggle="modal" data-target="#pool_entry_delete">
                                                  <i class="fa fa-trash" aria-hidden="true"></i>
                                              </button>
                                          </center>
                                      </div>
                                  </div>

                                  <div class="clear10"></div>

                                  <div class="desktop_ceremony event_client_pbox">
                                      <div class="event_client_price">
                                          <center>
                                              <label>Pool</label>
                                              <p data-toggle="modal" data-target="#react_js">React.js</p>
                                          </center>
                                      </div>
                                      <div class="event_client_price">
                                          <center>
                                              <label>Number of Candidates</label>
                                              <p>31</p>
                                          </center>
                                      </div>

                                      <div class="event_client_price actions_mobile">
                                          <center>
                                              <label>Actions </label>
                                          </center>
                                          <center>
                                              <button type="submit" class="button btn-sm btn-warning" data-toggle="modal" data-target="#pool_edit">
                                                  <i class="fa fa-pencil" aria-hidden="true"></i>
                                              </button>
                                              <button type="submit" class="button btn-sm btn-danger" data-toggle="modal" data-target="#pool_entry_delete">
                                                  <i class="fa fa-trash" aria-hidden="true"></i>
                                              </button>
                                          </center>
                                      </div>
                                  </div>

                                  <div class="clear10"></div>
                              </div>

                              <div class="clearfix"></div>
                          </div>

                          <div class="clear10"></div>
                      </div>
                  </div>

                  <div class="clearfix"></div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-default btn-success" data-dismiss="modal">Add Now</button>
              </div>
          </div>
      </div>
  </div>
  <!-- add pool modal -->

	<!-- add pool modal -->
		<?php $this->load->view('admin_side/pools/pools_modal'); ?>
    <!-- add pool modal -->

	<!-- add pool modal -->
	<div class="modal fade" id="pool_entry_data" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h2 class="modal-title">Add Pool</h2>
				</div>
				<div class="modal-body">
					<form>
						<div class="col-md-6">
							<div class="form-group">
								<label>Pool</label>
								<input type="text" name="pool_name" class="form-control" placeholder="Pool" required="">
								<span id="msg" style="color: red"></span>
							</div>
						</div>

						<div class="clearfix"></div>
					</form>
					<div class="clearfix"></div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default btn-success add_pool" onclick="add_pool()">Add Now</button>
				</div>
			</div>
		</div>
	</div>
	<!-- add pool modal -->

	<!-- add pool modal -->
	<div class="modal fade" id="pool_edit" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h2 class="modal-title">Edit Pool</h2>
				</div>
				<div class="modal-body">
					<form>
						<div class="col-md-6">
							<div class="form-group">
								<label>Pool</label>
								<input type="text" class="form-control" placeholder="Pool">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Number of Candidates</label>
								<input type="text" class="form-control" placeholder="Number of candidates">
							</div>
						</div>

						<div class="clearfix"></div>
					</form>
					<div class="clearfix"></div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default btn-success" data-dismiss="modal">Add Now</button>
				</div>
			</div>
		</div>
	</div>
	<!-- add pool modal -->

	<!-- delete modal -->
	<div class="modal fade" id="pool_entry_delete" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h2 class="modal-title">Delete Pool Entry</h2>
				</div>
				<div class="modal-body">
					<h4>Are you sure to delete this Pool entry?</h4>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Delete</button>
				</div>
			</div>
		</div>
	</div>
	<!-- delete modal -->

	<!-- add pool modal -->
	<div class="modal fade" id="pool_edit_category" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h2 class="modal-title">Edit Pool</h2>
				</div>
				<div class="modal-body">
					<form>
						<div class="col-md-6">
							<div class="form-group">
								<label>No.</label>
								<input type="text" class="form-control" placeholder="Serial No.">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Name</label>
								<input type="text" class="form-control" placeholder="Name">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Status</label>
								<input type="text" class="form-control" placeholder="Status">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Location</label>
								<input type="text" class="form-control" placeholder="Location">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Pay</label>
								<input type="text" class="form-control" placeholder="Pay">
							</div>
						</div>

						<div class="clearfix"></div>
					</form>
					<div class="clearfix"></div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default btn-success" data-dismiss="modal">Add Now</button>
				</div>
			</div>
		</div>
	</div>
	<!-- add pool modal -->

	<!-- delete modal -->
	<div class="modal fade" id="send_to_agency" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h2 class="modal-title">Send to agency</h2>
				</div>
				<div class="modal-body">
					<div class="col-md-6 p0">
						<div class="form-group">
							<label>Agency name</label>
							<input type="text" class="form-control" placeholder="Agency name">
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-info" data-dismiss="modal">Send</button>
				</div>
			</div>
		</div>
	</div>
	<!-- delete modal -->

	<!-- intro status box -->
	<div class="modal" id="reject_intro_modal">
		<div class="modal-dialog">
			<div class="modal-content">

				<!-- Modal Header -->
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h2 class="modal-title">Rejected Intros</h2>
				</div>

				<!-- Modal body -->
				<div class="clear10"></div>
                <div class="col-sm-6">

                    <h3 data-toggle="collapse" data-target="#reject_intro_collapse" class="collapse_heading">Candidate info </h3>

                    <div id="reject_intro_collapse" class="collapse">

                        <div class="col-sm-12 modal_intro p0 ">
                            <div class="col-sm-3 p0">
                                <img src="<?php echo base_url();?>public/admin/dist/img/1.jpg" class="img-responsive" alt="">
							</div>
							<div class="col-sm-9 candidate_info_tab">
								<div class="col-sm-7 job_padd_left">
									<label>First name: </label>
								</div>
								<div class="col-sm-5">
									<p class="bg_red_reject">Alexander</p>
								</div>
								<div class="col-sm-7 job_padd_left">
									<label>Last name: </label>
								</div>
								<div class="col-sm-5">
									<p class="bg_red_reject">Pierce</p>
								</div>
								<div class="col-sm-7 job_padd_left">
									<label>Current job &amp; company: </label>
								</div>
								<div class="col-sm-5">
									<p onclick="changeColor(this)">Lorem Ipsum</p>
								</div>
								<div class="col-sm-7 job_padd_left">
									<label>Past job &amp; company: </label>
								</div>
								<div class="col-sm-5">
									<p class="bg_red_reject">Lorem Ipsum</p>
								</div>
							</div>

							<div class="clear20"></div>

							<div class="candidate_info_tab">
								<div class="col-sm-8 p0">
									<label>Recruiter summary endorsement:</label>
								</div>
								<div class="col-sm-4 p0">
									<p class="bg_red_reject">Lorem Ipsum</p>
								</div>

								<div class="clearfix"></div>

								<div class="col-sm-8 p0">
									<label>Key points address sign requirements:</label>
								</div>
								<div class="col-sm-4 p0">
									<p onclick="changeColor(this)">Lorem Ipsum</p>
								</div>

								<div class="clearfix"></div>

								<div class="col-sm-8 p0">
									<label>Key Points address sign requirements:</label>
								</div>
								<div class="col-sm-4 p0">
									<p class="bg_red_reject">Lorem Ipsum</p>
								</div>
							</div>

							<div class="clear20"></div>

							<div class="col-sm-10 p0">
								<input name="" class="form-control" type="text">
							</div>

							<div class="clear20"></div>

							<div class="col-sm-12 p0"><strong>Person Description</strong></div>
							<div class="col-sm-12 p0">
								<p class="bg_red_reject">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled</p>
							</div>

							<hr>
							<div class="clear10"></div>

							<button type="button" class="btn btn_candidate">Chnage Template</button>
							<button type="button" class="btn btn_candidate">Save Template</button>
							<div class="clear10"></div>
							<label class="bg_red_reject"> Photo Imported from Linkedin</label>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <h3 data-toggle="collapse" data-target="#reject_intro_collapse1" class="collapse_heading">Job details</h3>
                    <div id="reject_intro_collapse1" class="collapse">
                        <div class="col-sm-12 modal_intro p0 candidate_info_tab">
                            <div class="col-sm-5 p0">
								<label>Job Ttile:</label>
							</div>

                            <div class="col-sm-7">
								<p class="bg_red_reject">Lorem IPsum</p>
							</div>

							<div class="clearfix"></div>

                            <div class="col-sm-5 p0">
								<label>Location:</label>
							</div>

                            <div class="col-sm-7">
								<p onclick="changeColor(this)">Lorem IPsum</p>
							</div>

							<div class="clearfix"></div>

                            <div class="col-sm-5 p0">
								<label>Hiring:</label>
							</div>

                            <div class="col-sm-7">
								<p class="bg_red_reject">Lorem IPsum</p>
							</div>

							<div class="clearfix"></div>

                            <div class="col-sm-5 p0">
								<label>Experience for role:</label>
							</div>


                            <div class="col-sm-7">
								<p onclick="changeColor(this)">Lorem IPsum</p>
							</div>

							<div class="clearfix"></div>

							<div class="col-sm-5 p0">
								<label>Capabillity for role:</label>
							</div>

                            <div class="col-sm-7">
								<p class="bg_red_reject">Lorem IPsum</p>
							</div>

							<div class="clearfix"></div>

                            <div class="col-sm-5 p0">
								<label>Successor Ready:</label>
							</div>

                            <div class="col-sm-7">
								<p class="bg_red_reject">Lorem IPsum</p>
							</div>

							<div class="clearfix"></div>

                            <div class="col-sm-5 p0">
								<label>Qulification required:</label>
							</div>

                            <div class="col-sm-7">
								<p class="bg_red_reject">Lorem IPsum</p>
							</div>

							<div class="clearfix"></div>

                            <div class="col-sm-5 p0">
								<label>Contract types:</label>
							</div>

                            <div class="col-sm-7">
								<p onclick="changeColor(this)">Lorem IPsum</p>
							</div>

							<div class="clearfix"></div>

                            <div class="col-sm-5 p0">
								<label>Ideal Start dates:</label>
							</div>

                            <div class="col-sm-7">
								<p class="bg_red_reject">Loreum Ipsum</p>
							</div>

							<div class="clearfix"></div>

                            <div class="col-sm-5 p0">
								<label>Flexible Working:</label>
							</div>

                            <div class="col-sm-7">
								<p class="bg_red_reject">Loreum Ipsum</p>
							</div>

							<div class="clearfix"></div>


                            <div class="col-sm-12 p0"><label>Key Capability required</label></div>

                            <div class="col-sm-12 p0"><label>Key Capability required</label></div>

                            <div class="col-sm-12 p0"><label>Key Capability required</label></div>

                            <div class="clear5"></div>

                            <div class="col-sm-12 p0"><label>JD Link</label></div>

                            <div class="clear5"></div>

                            <div class="col-sm-12 p0"><label>HM Availablility</label></div>

                            <div class="col-sm-4 p0">
                                <button type="button" class="btn btn_candidate">Intrested</button>
                            </div>

                            <div class="col-sm-4 p0">
                                <button type="button" class="btn btn_candidate">Decline</button>
                            </div>

                            <div class="col-sm-4 p0">
                                <button type="button" class="btn btn_candidate">Next Steps</button>
                            </div>

                            <div class="clear10"></div>

                            <div class="col-sm-4 p0"><p onclick="changeColor(this)">IN-formal meeting call</p></div>

                            <div class="col-sm-4 p0"><p onclick="changeColor(this)">Just Reject Information</p></div>

                            <div class="clear10"></div>

                            <div class="col-sm-4 p0">
                                <button type="button" class="btn btn_candidate">Full tsonar</button>
                            </div>

                            <div class="col-sm-4 p0">
                                <button type="button" class="btn btn_candidate"> No rejections</button>
                            </div>

                            <div class="col-sm-4 p0">
                                <button type="button" class="btn btn_candidate">Manual</button>
                            </div>

                            <div class="clear5"></div>

                            <div class="col-sm-12 p0"><p onclick="changeColor(this)">Video Call / Skype etc intrview Hold until more candidates</p></div>

                        </div>

                    </div>

                </div>

                <div class="clear20"></div>

                <div class="modal-body candidate_info_tab" style="padding:0px 15px;">
                    <div class="col-sm-12 p0">
                        <h3 class="intro_candidate">Software Engineer - Germany - Yearly - $ 20,000</h3>
                    </div>

                    <div class="clear10"></div>

                    <div class="col-sm-2 p0">

                        <img src="<?php echo base_url();?>public/admin/img/img_new.jpg" class="img-responsive" style="width:128px; height:128px;" alt="">

                    </div>

                    <div class="col-sm-10 p0">
                        <div class="col-sm-12 p0" style="">
                            <div class="col-sm-3"><label>Name:</label></div>
                            <div class="col-sm-3"><p class="bg_red_reject">Harry James</p></div>
							<div class="col-sm-3"><label>Location:</label></div>
                            <div class="col-sm-3"><p class="bg_red_reject">Berlin, Germany</p></div>
                        </div>

                        <div class="col-sm-12 p0" style="">
							<div class="col-sm-3"><label>Salary:</label></div>
                            <div class="col-sm-3"><p onclick="changeColor(this)">$ 20,000</p></div>
							<div class="col-sm-3"><label>Contract:</label></div>
                            <div class="col-sm-3"><p onclick="changeColor(this)">Yearly</p></div>
                        </div>

                        <div class="col-sm-12 p0" style="">
                            <div class="col-sm-3"><label>Flexi:</label></div>
                            <div class="col-sm-3"><p onclick="changeColor(this)">Lorem Ipsum</p></div>
							<div class="col-sm-3"><label>Availability:</label></div>
                            <div class="col-sm-3"><p onclick="changeColor(this)">9 AM To 5 PM</p></div>
                        </div>

                        <div class="col-sm-12 p0" style="">
                            <div class="col-sm-3"><label>Current:</label></div>
                            <div class="col-sm-3"><p onclick="changeColor(this)">MS Computer Sciene</p></div>
							<div class="col-sm-3"><label>Past:</label></div>
                            <div class="col-sm-3"><p class="bg_red_reject">BS Computer Science</p></div>
                        </div>

                        <div class="col-sm-12 p0" style="">
                            <div class="col-sm-3"><label>Education:</label></div>
                            <div class="col-sm-3"><p class="bg_red_reject">Software Engineering</p></div>
                        </div>
                    </div>

                    <div class="clear10"></div>

					<div class="points_setting">
                    <div class="col-sm-6 responsible_padd_left">
                        <h3>Responsibilities</h3>
                        <ul>
                            <li class="bg_red_reject"><i class="fa fa-caret-right" aria-hidden="true"></i> Bullet Point Recruiter highlight</li>
                            <li onclick="changeColor(this)"><i class="fa fa-caret-right" aria-hidden="true"></i> Bullet Point Recruiter highlight</li>
							<li onclick="changeColor(this)"><i class="fa fa-caret-right" aria-hidden="true"></i> Bullet Point Recruiter highlight</li>
							<li onclick="changeColor(this)"><i class="fa fa-caret-right" aria-hidden="true"></i> Bullet Point Recruiter highlight</li>
							<li class="bg_red_reject"><i class="fa fa-caret-right" aria-hidden="true"></i> Bullet Point Recruiter highlight</li>
                        </ul>
                    </div>

                    <div class="col-sm-6 responsible_padd_right">
                        <h3>Key Achievments</h3>
                        <ul>
                            <li onclick="changeColor(this)"><i class="fa fa-caret-right" aria-hidden="true"></i> Bullet Point Recruiter highlight</li>
                            <li class="bg_red_reject"><i class="fa fa-caret-right" aria-hidden="true"></i> Bullet Point Recruiter highlight</li>
							<li onclick="changeColor(this)"><i class="fa fa-caret-right" aria-hidden="true"></i> Bullet Point Recruiter highlight</li>
							<li class="bg_red_reject"><i class="fa fa-caret-right" aria-hidden="true"></i> Bullet Point Recruiter highlight</li>
							<li onclick="changeColor(this)"><i class="fa fa-caret-right" aria-hidden="true"></i> Bullet Point Recruiter highlight</li>
                        </ul>
                    </div>

                    <div class="col-sm-12 p0">
                        <h3>Key Strengths</h3>
                        <ul>
                            <li onclick="changeColor(this)"><i class="fa fa-caret-right" aria-hidden="true"></i> Communicating to stakeholders including executive level</li>
                            <li class="bg_red_reject"><i class="fa fa-caret-right" aria-hidden="true"></i> Designing operations models to meet cost savings and efficiencies</li>
                        </ul>
                    </div>

                    <div class="col-sm-12 p0">
                        <h3>Areas developed</h3>
                        <ul>
                            <li class="bg_red_reject"><i class="fa fa-caret-right" aria-hidden="true"></i> Communicating to stakeholders including executive level</li>
                            <li onclick="changeColor(this)"><i class="fa fa-caret-right" aria-hidden="true"></i> Designing operations models to meet cost savings and efficiencies</li>
                        </ul>
                    </div>

                    <div class="col-sm-12 p0">
                        <h3>Areas developing</h3>
                        <ul>
                            <li class="bg_red_reject"><i class="fa fa-caret-right" aria-hidden="true"></i> Communicating to stakeholders including executive level</li>
                            <li onclick="changeColor(this)"><i class="fa fa-caret-right" aria-hidden="true"></i> Designing operations models to meet cost savings and efficiencies</li>
                        </ul>
                    </div>

                    <div class="col-sm-12 p0">
                        <h3>Areas developing</h3>
						<ul>
                            <li class="bg_red_reject"><i class="fa fa-caret-right" aria-hidden="true"></i> Overall reasons why the hiring manager should interview the candidate</li>
                        </ul>
                    </div>


					</div>
                    <div class="clearfix"></div>
                </div>

                <div class="clear10"></div>


				<!-- Modal footer -->
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				</div>

			</div>
		</div>
	</div>
	<!-- intro status box -->

	<div class="modal fade in" id="intro_waiting_modal">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">×</button>
					<h2 class="modal-title">Waiting Intro</h2>
				</div>
				<div class="modal-body">
					<div class="col-sm-12">
						<h3>MIKE ANDREW</h3>
						<span class="product-description">
							<i class="fa fa-map-marker" aria-hidden="true"></i> San Franicso, CA
						</span>
						<div class="clear10"></div>
						<div class="col-sm-4 p0">
							<label>Name</label>
						</div>
						<div class="col-sm-8">
							<p>MARK ANDREW</p>
						</div>
						<div class="clearfix"></div>
						<div class="clearfix"></div>
						<div class="col-sm-4 p0">
							<label>Title</label>
						</div>
						<div class="col-sm-8">
							<p>Loreum Ipsum</p>
						</div>
						<div class="clearfix"></div>
						<div class="clearfix"></div>
						<div class="col-sm-4 p0">
							<label>Email address</label>
						</div>
						<div class="col-sm-8">
							<p>abc@gmail.com</p>
						</div>
						<div class="clearfix"></div>
						<div class="clearfix"></div>
						<div class="col-sm-4 p0">
							<label>Phone number</label>
						</div>
						<div class="col-sm-8">
							<p>0900-78601</p>
						</div>
						<div class="clearfix"></div>
						<div class="clearfix"></div>
						<div class="col-sm-4 p0">
							<label>Agency website</label>
						</div>
						<div class="col-sm-8">
							<p>abc@gmail.com</p>
						</div>
						
						<div class="clearfix"></div>

					</div>
					<div class="clearfix"></div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Waiting</button>
				</div>
			</div>
		</div>
	</div>
	
	<div class="modal fade in" id="save_draft_modal">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">×</button>
					<h2 class="modal-title">Draft Intro</h2>
				</div>
				<div class="modal-body">
					<div class="col-sm-12">
						<h3>MIKE ANDREW</h3>
						<span class="product-description">
							<i class="fa fa-map-marker" aria-hidden="true"></i> San Franicso, CA
						</span>
						<div class="clear10"></div>
						<div class="col-sm-4 p0">
							<label>Name</label>
						</div>
						<div class="col-sm-8">
							<p>MARK ANDREW</p>
						</div>
						<div class="clearfix"></div>
						<div class="clearfix"></div>
						<div class="col-sm-4 p0">
							<label>Title</label>
						</div>
						<div class="col-sm-8">
							<p>Loreum Ipsum</p>
						</div>
						<div class="clearfix"></div>
						<div class="clearfix"></div>
						<div class="col-sm-4 p0">
							<label>Email address</label>
						</div>
						<div class="col-sm-8">
							<p>abc@gmail.com</p>
						</div>
						<div class="clearfix"></div>
						<div class="clearfix"></div>
						<div class="col-sm-4 p0">
							<label>Phone number</label>
						</div>
						<div class="col-sm-8">
							<p>0900-78601</p>
						</div>
						<div class="clearfix"></div>
						<div class="clearfix"></div>
						<div class="col-sm-4 p0">
							<label>Agency website</label>
						</div>
						<div class="col-sm-8">
							<p>abc@gmail.com</p>
						</div>
						
						<div class="clear10"></div>
						
						<div class="col-sm-12 p0">
							<ul>
								<li><i class="fa fa-caret-right" aria-hidden="true"></i> Bullet Point Recruiter highlight</li>
								<li><i class="fa fa-caret-right" aria-hidden="true"></i> Bullet Point Recruiter highlight</li>
								<li><i class="fa fa-caret-right" aria-hidden="true"></i> Bullet Point Recruiter highlight</li>
								<li><i class="fa fa-caret-right" aria-hidden="true"></i> Bullet Point Recruiter highlight</li>
								<li><i class="fa fa-caret-right" aria-hidden="true"></i> Bullet Point Recruiter highlight</li>
							</ul>
						</div>
						<div class="clearfix"></div>

					</div>
					<div class="clearfix"></div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Save as Draft</button>
				</div>
			</div>
		</div>
	</div>
	
	<div class="modal fade in" id="send_intro_modal">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">×</button>
					<h2 class="modal-title">Send Intro</h2>
				</div>
				<div class="modal-body">
					<div class="col-sm-12">
						<h3>MIKE ANDREW</h3>
						<span class="product-description">
							<i class="fa fa-map-marker" aria-hidden="true"></i> San Franicso, CA
						</span>
						<div class="clear10"></div>
						<div class="col-sm-4 p0">
							<label>Name</label>
						</div>
						<div class="col-sm-8">
							<p>MARK ANDREW</p>
						</div>
						<div class="clearfix"></div>
						<div class="clearfix"></div>
						<div class="col-sm-4 p0">
							<label>Title</label>
						</div>
						<div class="col-sm-8">
							<p>Loreum Ipsum</p>
						</div>
						<div class="clearfix"></div>
						<div class="clearfix"></div>
						<div class="col-sm-4 p0">
							<label>Email address</label>
						</div>
						<div class="col-sm-8">
							<p>abc@gmail.com</p>
						</div>
						<div class="clearfix"></div>
						<div class="clearfix"></div>
						<div class="col-sm-4 p0">
							<label>Phone number</label>
						</div>
						<div class="col-sm-8">
							<p>0900-78601</p>
						</div>
						<div class="clearfix"></div>
						<div class="clearfix"></div>
						<div class="col-sm-4 p0">
							<label>Agency website</label>
						</div>
						<div class="col-sm-8">
							<p>abc@gmail.com</p>
						</div>
						
						<div class="clear10"></div>
						
						<div class="col-sm-12 p0">
							<ul>
								<li><i class="fa fa-caret-right" aria-hidden="true"></i> Bullet Point Recruiter highlight</li>
								<li><i class="fa fa-caret-right" aria-hidden="true"></i> Bullet Point Recruiter highlight</li>
								<li><i class="fa fa-caret-right" aria-hidden="true"></i> Bullet Point Recruiter highlight</li>
								<li><i class="fa fa-caret-right" aria-hidden="true"></i> Bullet Point Recruiter highlight</li>
								<li><i class="fa fa-caret-right" aria-hidden="true"></i> Bullet Point Recruiter highlight</li>
							</ul>
						</div>
						
						<div class="col-sm-12 p0">
							<h3>Key Strengths</h3>
							<ul>
								<li onclick="changeColor(this)" backround-attr=""><i class="fa fa-caret-right" aria-hidden="true"></i> Communicating to stakeholders including executive level</li>
								<li onclick="changeColor(this)" backround-attr=""><i class="fa fa-caret-right" aria-hidden="true"></i> Designing operations models to meet cost savings and efficiencies</li>
							</ul>
						</div>
						
						<div class="col-sm-12 p0">
							<h3>Areas developed</h3>
							<ul>
								<li onclick="changeColor(this)" backround-attr=""><i class="fa fa-caret-right" aria-hidden="true"></i> Communicating to stakeholders including executive level</li>
								<li onclick="changeColor(this)" backround-attr=""><i class="fa fa-caret-right" aria-hidden="true"></i> Designing operations models to meet cost savings and efficiencies</li>
							</ul>
						</div>
						<div class="clearfix"></div>

					</div>
					<div class="clearfix"></div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default btn-success" data-dismiss="modal">Send Intro</button>
				</div>
			</div>
		</div>
	</div>
	
	<!-- delete modal -->
	<div class="modal fade" id="basic_template" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h2 class="modal-title">Basic Template</h2>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="comment">Free Text:</label>
						<textarea class="form-control" rows="5" id="comment"></textarea>
					</div>
					<div class="col-sm-12 upload-btn-wrapper text-center">
						<button class="btn_upload">CV Attach <span><i class="fa fa-address-card" aria-hidden="true"></i></span></button>
						<input type="file" name="myfile" />
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<!-- delete modal -->
	<!-- Update Inner Setting Modal -->
	
	<div class="modal fade" id="updateInnerSetting" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h2 class="modal-title"></h2>
				</div>
				<div class="modal-body">
					<div class="clear20"></div>

					<form id="formposts" action="" method="post">

						<div class="col-sm-4 form_padd_left">
							
								<div class="form-group">
									<input type="hidden" name="value_id">
									<input type="text" name="Value_Name" class="form-control" value="" placeholder=" Value Name">
								</div>
							
						</div>
						<div class="col-sm-4 form_padd_left">
							<button type="button" id="UpdateSetting" onclick="updateinnerSeting()" class="listing_search update_set">Update</button>
						</div>

					</form>
				</div>
				<div class="clear20"></div>
				<div class="clear20"></div>
				<div class="modal-footer">
					<button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	
	<!-- Update Setting Modal -->

	<!-- Update Outer Setting modal -->

	<div class="modal fade" id="updateoutersetting" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h2 class="modal-title"></h2>
				</div>
				<?php //echo "<pre>"; print_r($setttings); ?>
				<div class="modal-body">
					<div class="clear20"></div>

					<form id="settingform" action="" method="post">
						<input type="hidden" name="settingouterId">
						<div class="col-sm-4 form_padd_left">
								<div class="form-group">
									<input name="settingOuterName" type="text" class="form-control" placeholder=" Value Name" required="">
								</div>
							
						</div>
						<span id="msg"></span>
						<div class="col-sm-4 form_padd_left">
							<button type="button" onclick="updateSeting()" class="listing_search update_set">Update</button>
						</div>

					</form>
				</div>
				<div class="clear20"></div>
				<div class="clear20"></div>
				<div class="modal-footer">
					<button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Update Outer Setting  -->
	<!-- CLIENTS PERMISSION MODAL START -->
	<style type="text/css">
		.intro{
			opacity: 0.4;
		}
	</style>

	<div id="open_modal" class="modal fade" role="dialog">
		<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		<h4 class="modal-title">Client Permissions</h4>
		</div>
		<div class="clearfix"> </div>
		<div class="modal-body">

		<!-- zingtree Tsonar-->
		<input type="hidden" name="user_id" value="" id="user_id">
		<div class="col-sm-12 p0 text-center talent_heading">
		<h2>HI-ME Talent Acquisition </h2>
		</div>
		<div class="clearfix"> </div>
		<div class="boxx_1">
		<div class="col-sm-12 services_heading_tsonr">
		<h3>HI-ME Services</h3>
		</div>
		<div class="clear20"> </div>
		<div class="col-sm-12 box_tsonr_user">
		<div class="col-sm-12 tson_btn_mrg_btm">
		<h2>User selects which service they want </h2>
		</div>
		<div class="clearfix"> </div>
		<div class="col-sm-12 p0" id="button_checked">
		

		 <div class="col-sm-12 profile_mobile_padd p0">
					<div class="profile_main dsk_tbl_dsply">

						<div class="col-md-12 profile_data">
							<form id="permission_form">
	                        <div id="button_checked_profile">
					
								<div class="clear10"></div>
								<input type="hidden" name="user_id" value="" id="user_id">
								<div class="col-md-2">
									<div class="green_hover_new">
										<input id="contract_type_4" id="professional" name="professional" value="1" class="display_none_talent3" type="checkbox">
										<label for="contract_type_4">Professional</label>
									</div>
								</div>

								<div class="col-md-2">
									<div class="green_hover_new">
										<input id="contract_type_5" id="emerging_talent" name="emerging_talent" value="2" class="display_none_talent3" type="checkbox">
										<label for="contract_type_5">Emerging Talent</label>
									</div>
								</div>
								<div class="col-md-2">
									<div class="green_hover_new">
										<input id="contract_type_6" id="temporary" name="temporary" value="3" class="display_none_talent3" type="checkbox">
										<label for="contract_type_6">Temporary</label>
									</div>
								</div>

								<div class="col-md-2">
									<div class="green_hover_new">
										<input id="contract_type_7" id="leaverinterview" name="leaverinterview" value="4" class="display_none_talent3" type="checkbox">
										<label for="contract_type_7">Leaver Interview</label>
									</div>
								</div>
								<div class="col-md-2">
									<div class="green_hover_new">
										<input id="contract_type_8" id="leaversurvey" name="leaversurvey" value="5" class="display_none_talent3" type="checkbox">
										<label for="contract_type_8">Leaver Survey</label>
									</div>
								</div>

								<div class="col-md-2">
									<div class="green_hover_new">
										<input id="contract_type_9" id="support" name="support" value="6" class="display_none_talent3" type="checkbox">
										<label for="contract_type_9">Support</label>
									</div>
								</div>
							</div>
							</form>
	                    </div>

						
					</div>


	            </div>
		

		<!-- <div class="col-sm-2 box_tsonr_btn">
		    <a href="javascript:void(0);" data-value="3" class="btn btn-default permission">Hiring temporary staff </a>
		</div>

		<div class="col-sm-2 box_tsonr_btn">
		    <a href="javascript:void(0);" class="btn btn-default">Salary benchmarking </a>
		</div>


		<div class="col-sm-2 box_tsonr_btn">
		    <a href="javascript:void(0);" class="btn btn-default">Talent benchmarking </a>
		</div>


		<div class="col-sm-2 box_tsonr_btn">
		    <a href="javascript:void(0);" class="btn btn-default">Market map % on-going talent Intros </a>
		</div>
		</div>
		<div class="clear20 clear_20_mbl"> </div> -->
		<!-- <div class="col-sm-12 p0">
		<div class="col-sm-2 box_tsonr_btn">
		    <a href="javascript:void(0);" class="btn btn-default">Leaver survey </a>
		</div>
		<div class="col-sm-2 box_tsonr_btn">
		    <a href="javascript:void(0);" class="btn btn-default">Leaver interview </a>
		</div>
		<div class="col-sm-2 box_tsonr_btn">
		    <a href="javascript:void(0);" class="btn btn-default">Support </a>
		</div>
		</div> -->

		</div>
		<div class="clearfix"> </div>
		</div>

		<div class="boxx_2">
		<div class="col-sm-12 services_heading_tsonr services_hiring_mrg_btm">
		<h3>Hiring professionals</h3>
		<p>Takes user to talent request form (need to ask for client/user details for all pages - to discuss) </p>
		</div>
		<div class="clear20"> </div>
		<div class="col-sm-12 box_tsonr_user box_2_pad_btm">
		<div class="col-sm-12  tson_btn_mrg_btm">
		<h2>Has the user completed the form? </h2>

		</div>
		<div class="clearfix"> </div>


		<div class="col-sm-12 p0">
		<div class="col-sm-6 box_tsonr_btn">
		    <a href="javascript:void(0)" class="btn btn-default second_btn">Yes </a>
		</div>
		<div class="col-sm-6 box_tsonr_btn">
		    <a href="javascript:void(0)" class="btn btn-default">No </a>
		</div>

		</div>


		</div>

		<div class="col-sm-12">
		<div class="back_restart_btn">
		    <a href="#" class="back_step_tsnor" data-toggle="tooltip" title="Go back one step" data-placement="bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
		    <a href="#" data-toggle="tooltip" title="Restart from the begining" data-placement="bottom" class="restart_tsonr_btnn">Restart</a>
		</div>
		</div>
		<div class="clearfix"> </div>
		</div>

		<div class="boxx_3">
		<div class="col-sm-12 services_heading_tsonr services_hiring_mrg_btm">
		<h3>Welcome</h3>

		</div>
		<div class="clear20"> </div>
		<div class="col-sm-12 box_tsonr_user ">
		<div class="col-sm-12 tson_btn_mrg_btm">
		<h2>What process are we using for this client requirement?  </h2>

		</div>
		<div class="clearfix"> </div>


		<div class="col-sm-12 p0">
		<div class="col-sm-4 box_tsonr_btn">
		    <a href="javascript:void(0)" class="btn btn-default third_btn">Generalist recuriter only </a>
		</div>
		<div class="col-sm-4 box_tsonr_btn">
		    <a href="javascript:void(0)" class="btn btn-default">Generalist recuiter than expert if required </a>
		</div>
		<div class="col-sm-4 box_tsonr_btn">
		    <a href="javascript:void(0)" class="btn btn-default">Expert required only </a>
		</div>

		</div>


		</div>

		<div class="col-sm-12">
		<div class="back_restart_btn">
		    <a href="#" class="back_step_tsnor_2" data-toggle="tooltip" title="Go back one step" data-placement="bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
		    <a href="#" data-toggle="tooltip" title="Restart from the begining" data-placement="bottom" class="restart_tsonr_btnn restart_tsonr_btnn_2">Restart</a>
		</div>
		</div>
		<div class="clearfix"> </div>
		</div>

		<div class="boxx_4">
		<div class="col-sm-12 services_heading_tsonr services_hiring_mrg_btm">
		<h3>HI-ME Generalist Only</h3>
		<p>Send generalist recruiter the job requirements </p>

		</div>
		<div class="clear20"> </div>
		<div class="col-sm-12 box_tsonr_user box_2_pad_btm">
		<div class="col-sm-12 tson_btn_mrg_btm">
		<h2>When offered the job to recruit what decision did the generalist recruiter make? </h2>

		</div>
		<div class="clearfix"> </div>


		<div class="col-sm-12 p0">
		<div class="col-sm-4 box_tsonr_btn">
		    <a href="javascript:void(0)" class="btn btn-default foruth_btn">Accepted </a>
		</div>
		<div class="col-sm-4 box_tsonr_btn">
		    <a href="javascript:void(0)" class="btn btn-default">Request Changes </a>
		</div>
		<div class="col-sm-4 box_tsonr_btn">
		    <a href="javascript:void(0)" class="btn btn-default">Decline </a>
		</div>

		</div>


		</div>

		<div class="col-sm-12">
		<div class="back_restart_btn">
		    <a href="#" class="back_step_tsnor_3" data-toggle="tooltip" title="Go back one step" data-placement="bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
		    <a href="#" data-toggle="tooltip" title="Restart from the begining" data-placement="bottom" class="restart_tsonr_btnn restart_tsonr_btnn_3">Restart</a>
		</div>
		</div>
		<div class="clearfix"> </div>
		</div>

		<div class="boxx_5">
		<div class="col-sm-12 services_heading_tsonr services_hiring_mrg_btm">
		<h3>Accepted</h3>
		<p>Start engagement </p>
		<p>Invoice client open fee (invoice 1) </p>
		<p>Actions </p>
		<p>Pay generalist recruiter commission (commission 1) </p>

		</div>
		<div class="clear20"> </div>
		<div class="col-sm-12 box_tsonr_user box_2_pad_btm">
		<div class="col-sm-12 tson_btn_mrg_btm">
		<h2>Did the client hire a candidate from the generalist recruiter?</h2>

		</div>
		<div class="clearfix"> </div>


		<div class="col-sm-12 p0">
		<div class="col-sm-3 box_tsonr_btn">
		    <a href="javascript:void(0)" class="btn btn-default fifth_btn">Yes the job can be completed</a>
		</div>
		<div class="col-sm-3 box_tsonr_btn">
		    <a href="javascript:void(0)" class="btn btn-default">Yes - But we need help from an expert for more hires </a>
		</div>
		<div class="col-sm-3 box_tsonr_btn">
		    <a href="javascript:void(0)" class="btn btn-default">No - we need to use an expert </a>
		</div>
		<div class="col-sm-3 box_tsonr_btn">
		    <a href="javascript:void(0)" class="btn btn-default">No - We can cancel the request</a>
		</div>

		</div>


		</div>

		<div class="col-sm-12">
		<div class="back_restart_btn">
		    <a href="#"  data-toggle="tooltip" title="Go back one step" data-placement="bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
		    <a href="#" data-toggle="tooltip" title="Restart from the begining" data-placement="bottom" class="restart_tsonr_btnn">Restart</a>
		</div>
		</div>
		<div class="clearfix"> </div>
		</div>

		<div class="boxx_6">
		<div class="col-sm-12 services_heading_tsonr services_hiring_mrg_btm">
		<h3>Yes - The job can be completed</h3>
		<p>Actions: </p>
		<p>Apply appropriate discounts for the 12-month rolling requests </p>
		<p>Invoice client invoice 2 (direct hire)  </p>
		<p>Allocate general recruiter profit share points </p>
		<p>Send notification to general recruiter </p>
		<p>Send request for feedback to the client  </p>
		<p>Send request for feedback to the candidate </p>
		</div>
		<div class="clear20"> </div>


		<div class="col-sm-12">
		<div class="back_restart_btn">
		    <a href="#" data-toggle="tooltip" title="Go back one step" data-placement="bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
		    <a href="#" data-toggle="tooltip" title="Restart from the begining" data-placement="bottom" class="restart_tsonr_btnn">Restart</a>
		</div>
		</div>
		<div class="clearfix"> </div>
		</div>
		<!-- zingtree Tsonar-->
		<div class="clearfix"> </div>
		</div>
		<div class="modal-footer">
		<button type="button" class="btn btn-default" id="save_permission">Save Permission</button>
		</div>
		</div>

		</div>
	</div>
</div>
	<!-- CLIENT PERMISSION MODAL ENDS -->


	<!-- new Client modal -->
	<div class="modal fade" id="myModal_new_client" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h2 class="modal-title">Add New Client</h2>
				</div>
				<div class="modal-body">
					<form method="post" id="form" enctype="multipart/form-data">
						<input type="hidden" name="id" value="">
						<div class="col-md-6">
							<div class="form-group" >
								<label>First Name </label>
								<input type="text" name="fname" id="cl_input_fname" class="form-control" placeholder="First Name">
								<span class="help-block"></span>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group" >
								<label>Last Name</label>
								 <input type="text" name="lname" id="cl_input_lname" class="form-control" placeholder="Last Name">
								 <span class="help-block"></span>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group" >
								<label for="exampleInputEmail1">Email Address</label>
								<input type="email" id="cl_input_email" name="email" class="form-control" placeholder="Email Address" required="">
								<span class="help-block"></span>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group" >
								<label for="exampleInputEmail1">Phone Number</label>
								<input type="number" id="cl_input_phone" name="phone" class="form-control" placeholder="Phone Number">
								<span class="help-block"></span>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group" >
								<label>Gender</label>
								<select name="gender" id="cl_input_gender" class="form-control">
									<option value="">Select Gender</option>
									<option value="male">Male</option>
									<option value="female"	>Female</option>
								</select>
								<span class="help-block"></span>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group" >
								<label>State</label>
								<input type="text" id="cl_input_state" name="state" class="form-control" placeholder="State">
								<span class="help-block"></span>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group" >
								<label>Zipcode</label>
								<input type="text" id="cl_input_zipcode" name="zipcode" class="form-control" placeholder="Zipcode">
								<span class="help-block"></span>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group" >
								<label>City</label>
								<input type="text" id="cl_input_city" name="city" class="form-control" placeholder="City">
								<span class="help-block"></span>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group" >
								<label>Country</label>
								<input type="text" id="cl_input_country" name="country" class="form-control" placeholder="Country">
								<span class="help-block"></span>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group" >
								<label>Password</label>
								<input type="password" id="cl_input_password" name="password" class="form-control" placeholder="Password">
								<span class="help-block"></span>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group" >
								<label>Confirm Password</label>
								<input type="password" id="cl_input_conf_pass" name="conf_pass" class="form-control" placeholder="Confirm Password">
								<span class="help-block"></span>
							</div>
						</div>
						<!-- <div class="col-md-6">
							<div class="form-group" >
								<label class="control-label">File Upload</label>
        						<input type="file" id="clImage" name="clientImage" class="form-control">
        						<span class="help-block"></span>
							</div>
						</div> -->
						<div class="clearfix"></div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" id="Add_Clients" onclick="save()" class="btn btn-default btn-success">Add Now</button>
				</div>
			</div>
		</div>
	</div>
	<!-- new Client modal -->

	 <!--------------- Client Hiring Manager -------------------->
    <div class="modal" id="client_hiring_manager" >
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h2 class="modal-title">Hiring manager</h2>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <!-- // hiring manager form is being handled is admin/js/talentrequest -->
                    <form method="post" id="client_hiring_manager_form">
                        <div class="col-md-8 p0">
                            <input type="hidden" name="client_hiring_id" value="" id="client_hiring_manager_action">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="clienthiringManagerName" id="clienthiringManager_name" placeholder="Name">
                                <span class="help-block"></span>
                                <div class="clear10"></div>
                                <label>Email</label>
                                <input type="email" class="form-control" name="clienthiringManagerEmail" id="clienthiringManagerEmail" placeholder="Email(enter over)">
                                <span class="help-block"></span>
                                <div class="clear10"></div>
                                <label>Job Title</label>
                                <input type="Text" class="form-control" name="clienthiringManagerJobTitle" id="clienthiringManagerJobTitle" placeholder="Job Title">
                                <span class="help-block"></span>
                                <div class="clear10"></div>
                                <label>Select Client</label>
                                <select name="client" class="form-control" id="append_client_hiringmangers">
                                </select>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" onclick="save_hiring_manger()" id="client_hiring_manager_btn" >Save</button>
                </div>
            </div>
        </div>
    </div>
    <!--------------- Client Hiring Manager -------------------->

    <!------------ Client Dashboard Hiring Manager ------------->
    <div class="modal" id="clientarea_hirngManager">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h2 class="modal-title">Hiring manager</h2>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <!-- // hiring manager form is being handled is admin/js/talentrequest -->
                    <form method="post" id="clientarea_hiringManager_form">
                        <div class="col-md-8 p0">
                            <input type="hidden" name="id" value="">
                            <div class="form-group HM_change">
                                <label>Name</label>
                                <input type="text" class="form-control" name="HM_Name" id="clientareahiringManager_name" placeholder="Name">
                                <span class="help-block"></span>
                            </div>
                                <div class="clear10"></div>
                            <div class="form-group HM_change">
                                <label>Email</label>
                                <input type="email" class="form-control" name="HM_Email" id="clientareahiringManagerEmail" placeholder="Email(enter over)">
                                <span class="help-block"></span>
                            </div>
                                <div class="clear10"></div>
                            <div class="form-group HM_change">
                                <label>Job Title</label>
                                <input type="Text" class="form-control" name="HM_JobTitle" id="clientareahiringManagerJobTitle" placeholder="Job Title">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" id="Add_Clientarea_hirngManger" onclick="save_hiringManger()" class="btn btn-success" >Save</button>
                </div>
            </div>
        </div>
    </div>
    <!------------ Client Dashboard Hiring Manager ------------->

<?php $this->load->view('admin_side/include/footer-script');?>
</body>
</html>