<div class="modal" id="header_talent_dropdown_menu">
	<div class="modal-dialog">
		<div class="modal-content">

			<!-- Modal Header -->
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">×</button>
				<h2 class="modal-title">Talent</h2>
			</div>

			<!-- Modal body -->
			<div class="modal-body">
				<div class="drag_drop_box">
					<input type="file" name="file-5[]" id="file-5" class="inputfile inputfile-4" data-multiple-caption="{count} files selected" multiple />
					<label for="file-5">
					<figure>
						<svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/>
						</svg>
					</figure>
					<span>Choose a file&hellip;</span></label>
				</div>
			</div>

			<div class="clear20"></div>

			<form method="post" id="talentform" >
				<input type="hidden" name="action" id="talent_action" value="addTalent">
				<div class="col-md-6">
					<div class="form-group input_login">
						<label>Name</label>
						<input type="text" name="name" id="input_name" class="form-control" placeholder="Name">
						<div class="error"></div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group input_login">
						<label>Location</label>
						<select class="test1 location_talent_add" name="location" id="input_location" multiple="multiple">
							<?php
							 	$setting_id =20;
							  	$locations = get_setting_values($setting_id);
							  	foreach ($locations as $location) 
							  		{ ?> 
										<option value='<?php echo $location->value_id?>'>
											<?php echo  $location->value_name;?>
										</option>
								<?php } ?>
							?>
						</select>
						<div class="error"></div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group input_login">
						<label>Mobile</label>
						<input type="text" name="mobileNo" id="input_mobileNo" class="form-control" placeholder="Mobile">
						<div class="error"></div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group input_login">
						<label>Email</label>
						<input type="email" name="email" id="input_email" class="form-control" placeholder="Email">
						<div class="error"></div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group input_login">
						<label>Current company</label>
						<input type="text" name="curr_company" id="input_curr_company" class="form-control" placeholder="Current company">
						<div class="error"></div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group input_login">
						<label>Previous company</label>
						<input type="text" name="prev_company" id="input_prev_company" class="form-control" placeholder="Previous company">
						<div class="error"></div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group input_login ui calendar" id="div_curr_job_sdate">
						<label>Current job start date</label>
						<input type="text" name="curr_job_sdate" id="input_curr_job_sdate" class="form-control" placeholder="Current job start date">
							<div class="error"></div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group input_login ui calendar" id="div_prev_job_sdate">
						<label>Previous job start date</label>
						<input type="text" name="prev_job_sdate" id="input_prev_job_sdate" class="form-control" placeholder="Previous job start date">
						<div class="error"></div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group input_login">
						<label>Current Job title</label>
						<input type="text" name="curr_job_title" id="input_curr_job_title" class="form-control" placeholder="Current Job title">
						<div class="error"></div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group input_login">
						<label>Previous Job title</label>
						<input type="text" name="prev_job_title" id="input_prev_job_title" class="form-control" placeholder="Previous Job title">
						<div class="error"></div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group input_login">
						<label>Qualifications</label>
						<input type="text" name="education" id="input_education" class="form-control" placeholder="Qualifications">
						<div class="error"></div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group input_login">
						<label>Skills</label>
						<input type="text" name="skills" id="input_skills" class="form-control" placeholder="Skills">
						<div class="error"></div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group input_login">
						<label>Job Field</label>
						<select class="test location_talent_add" name="job_field" id="input_job_field" multiple="multiple">
									<?php $setting_id =19;  $job_fields = get_setting_values($setting_id); ?>
									<?php foreach ($job_fields as $key => $job_field) { ?> 
										<option value='<?= $job_field->value_id?>'>
											<?= $job_field->value_name;;?>
										</option>
									<?php } ?>
						</select>

						<div class="error"></div>
					</div>
				</div>
				<div class="clearfix"></div>
			</form>

				<div class="clear20"></div>
				<div class="clearfix"></div>

					<!-- Modal footer -->
				<div class="modal-footer">
					<button type="button" class="btn btn-success" id="submitTalent">Save</button>
				</div>
				</div>
			</div>
		</div>