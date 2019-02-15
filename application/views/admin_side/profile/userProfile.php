
<div class="content-wrapper">
            <div style="clear:both; height:20px;"></div>
            <div style="clear:both; height:20px;"></div>
            <div class="clearfix"></div>
            <?php
				// echo "<pre>";print_r($userData);die();
			?>
			<!-- New_Talent_Desktop_Table -->
			<?php if($this->session->flashdata('success')){ ?>
								
				<div class="alert alert-success">
					<a href="#" class="close" data-dismiss="alert">&times;</a>
					<strong>Account created!</strong><?php echo $this->session->flashdata('success'); ?>
				</div>
			<?php } ?>

			<?php if($this->session->flashdata('errors')){ ?>
				<div class="alert alert-danger">
					<a href="#" class="close" data-dismiss="alert">&times;</a>	
				  <strong>Alert!</strong><?php echo $this->session->flashdata('errors'); ?>
				</div>
			<?php } ?>
            <div class="col-sm-12 profile_mobile_padd p0">
				<div class="profile_main dsk_tbl_dsply">

					<div class="col-md-8 profile_data">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">User profile</h4>
                            </div>
                            <div class="content">
                                <form method="post" id="formpost">
                                	<input type="hidden" name="action" id="action" value="update_userProfile">
                                	<input type="hidden" name="user_id" id="user_id" value="<?php echo $userData->id;?>">
									<div class="col-md-6">
										<div class="form-group form_field">
											<label for="input-name">Name </label>
											<input type="text" id="input-name" name="name" class="form-control" placeholder="Name" value="<?php echo $userData->firstname;?>">
											<div class="error"></div>
										</div>										
									</div>

									<div class="col-md-6">
										<div class="form-group form_field">
											<label for="input-title">Title</label>
											 <input type="text" id="input-title" name="title" class="form-control" placeholder="Title" value="<?php echo $userData->jobTitle;?>">
											 <div class="error"></div>
										</div>
										
									</div>
									<div class="col-md-6">
										<div class="form-group form_field">
											<label for="input-email">Email address</label>
											<input type="email" id="input-email" name="email" class="form-control" placeholder="Email" value="<?php echo $userData->email;?>">
										<div class="error"></div>
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group form_field">
											<label for="input-phone">Phone number</label>
											<input type="text" id="input-phone" name="phone" class="form-control" placeholder="Phone number" value="<?php echo $userData->phone;?>">
										<div class="error"></div>
										</div>
									</div>
									<!-- <div class="col-md-6">
										<div class="form-group">
											<label>Company profile </label>
											<input type="text" class="form-control" placeholder="Company profile">
										</div>
									</div> -->
									<div class="col-md-6">
										<div class="form-group form_field">
											<label for="input-companyName">Company name </label>
											<input type="text" id="input-companyName" name="companyName" class="form-control" placeholder="Company name" value="<?php echo $userData->companyName;?>">
										<div class="error"></div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group form_field">
											<label for="input-companyWebsite">Company website </label>
											<input type="text" id="input-companyWebsite" name="companyWebsite" class="form-control" placeholder="Company website" value="<?php echo $userData->companyWebsite;?>">
										<div class="error"></div>
										</div>
									</div>
									<!-- <div class="col-md-6">
										<div class="form-group">
											<label>Agency website</label>
											<input type="text" class="form-control" placeholder="Agency website">
										</div>
									</div> -->

									<div class="col-md-6">
										<div class="form-group form_field">
											<label>Base Location</label>
											<select id="input-country" name="country" class="active_select role_detail_banking form-control" txt-attr="Base location - ">
												<option value="">Current location</option>
												<?php foreach($countries as $country){?>
													<option value="<?php echo $country->country_code;?>" <?php echo ($country->country_code==$userData->country)?'selected':'';?> ><?php echo $country->country_name;?></option>
												<?php }?>
											</select>
										<div class="error"></div>
										</div>
									</div>

									<div class="clearfix"></div>
									<div id="button_checked_profile">
										<div class="header">
											<h4 class="title">Invite additional users</h4>
										</div>

										<div class="clear10"></div>

										<div class="col-sm-6">
											<div class="green_hover_new">
												<input id="contract_type_4" class="display_none_talent3" type="checkbox">
												<label for="contract_type_4">Invite user - same access</label>
											</div>
										</div>

										<div class="col-sm-6">
											<div class="green_hover_new">
												<input id="contract_type_5" class="display_none_talent3" type="checkbox">
												<label for="contract_type_5">Invite user - sub recruiter</label>
											</div>
										</div>
									</div>
									<div class="clear10"></div>
									<div class="col-sm-12">
										<button type="button" id="btn_action" class="btn_update pull-right">Update</button>
									</div>
									<div class="clear10"></div>
									<div class="col-sm-12">
										<div class="signature_logo">
											<div class="col-sm-6 border_sign">
												<img src="<?php echo base_url();?>public/admin/img/sign.png">
											</div>
											<div class="col-sm-6">
												<img src="<?php echo base_url();?>public/admin/img/logo.png">
											</div>
											<div class="clear10"></div>
										</div>
									</div>
                                    <div class="clearfix"></div>
                                </form>

								<div class="clearfix"></div>

							</div>
                        </div>
                    </div>

					<div class="col-md-4">
                        <div class="card card-user">
                            <div class="image">
                                <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&amp;fm=jpg&amp;h=300&amp;q=75&amp;w=400" alt="...">
                            </div>
                            <div class="content">
                                <div class="author">
                                    <a href="#">			
                                       	<div class="avatar-upload">
									        <div class="avatar-edit">
									            <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
									            <label for="imageUpload"></label>
									        </div>
									        <div class="avatar-preview">
									            <div id="imagePreview" style="background-image: url(<?php echo $userData->avatar; ?>);">
									            </div>
									        </div>
    									</div>	
    									<h4 class="title"><?php echo $userData->firstname;?> <?php echo $userData->lastname;?><br></h4>
                                    </a>
                                </div>
                                <p class="description text-center"> "Lamborghini Mercy <br>
									Loreum Ipsum Dolor amet <br>
									Loreum Ipsum Dolor amet dolor"
                                </p>
                            </div>
                            <hr>
                            <div class="text-center">
                                <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-twitter-square" aria-hidden="true"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>
								<button href="#" class="btn btn-simple"><i class="fa fa-linkedin-square" aria-hidden="true"></i></button>
                            </div>
                        </div>
                    </div>

				</div>


            </div>

            <div style="clear:both; height:20px;"></div>

            <!-- content -->

        </div>