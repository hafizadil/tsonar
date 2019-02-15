
<aside class="main-sidebar">
			<section class="sidebar">
				<ul class="sidebar-menu">
					<li class="dropdown user user-menu">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<img src="<?php echo base_url();?>public/admin/dist/img/user7-128x128.jpg" class="user-image" alt="User Image">
						</a>
						<ul class="dropdown-menu sidebar_profile">
							<!-- User image -->
							<li class="user-header">
								<img src="<?php echo base_url();?>public/admin/dist/img/user7-128x128.jpg" class="img-circle" alt="User Image">
								<p>
									Alexander Pierce - Web Developer
									<small>Member since Nov. 2012</small>
								</p>
							</li>

							<!-- Menu Body -->

							<?php
								// echo "<pre>";print_r($this->session->userdata('role_id_reg'));
							?>

							<!-- Menu Footer-->

							<li class="user-footer">
								<div class="pull-left">
									<a href="<?php echo base_url('userProfile');?>" class="btn btn-default btn-flat">Profile</a>
								</div>

								<div class="pull-right">
									<a href="<?php echo base_url('logout');?>" class="btn btn-default btn-flat">Sign out</a>
								</div>
								<div class="clearfix"></div>
							</li>
						</ul>
					</li>
					<?php
						if ($this->session->userdata('role_id_reg')==1) 
						{ 	 
					?>
					<li class="treeview <?php if($page=='userProfile' || $page=='agencyRecruiterProfile' ){echo 'active';}?>">

						<a href="#">
							<i class="fa fa-user"></i>
							<span>Profile</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>

						<ul class="treeview-menu">
							<li class="<?php if($page=='agencyRecruiterProfile'  ){echo 'active';}?>" ><a href="<?php echo base_url('agencyRecruiterProfile');?>"><i class="fa fa-circle-o"></i> Agency recruiter profile</a></li>
							<li class="<?php if($page=='userProfile'  ){echo 'active';}?>"><a href="<?php echo base_url('userProfile');?>"><i class="fa fa-circle-o"></i> User profile</a></li>
						</ul>
					</li>

					<li class="treeview <?php if($page=='dashboard'  ){echo 'active';}?>">
						<a href="<?php echo base_url('dashboard');?>">
							<i class="fa fa-dashboard"></i> <span>Dashboards</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
					</li>

					<li class="<?php if($page=='hiringSpecialists' || $page=='hiringServices' ||$page=='hiringBillings' || $page=='hiringReports' || $page=='adminClients' || $page=='hiringForms'){echo 'active';}?>">
						<a href="">
							<i class="fa fa-dashboard"></i> <span>Admin Pages</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<!-- <li class="<?php if($page=='recruiterSystemAdmin'  ){echo 'active';}?>">
								<a href="<?php echo base_url('recruiterSystemAdmin'); ?>">
									<i class="fa fa-circle-o"></i> Recruiter system admin
								</a>
							</li>
							<li class="<?php if($page=='agencyUsage'  ){echo 'active';}?>">
								<a href="<?php echo base_url('agencyUsage'); ?>">
									<i class="fa fa-circle-o"></i> Agency usage
								</a>
							</li>
							<li class="<?php if($page=='startingFeeMatrix'  ){echo 'active';}?>">
								<a href="<?php echo base_url('startingFeeMatrix'); ?>">
									<i class="fa fa-circle-o"></i> Starting fee matrix
								</a>
							</li> -->
							<li class="<?php if($page=='adminClients' ){echo 'active';}?>">
								<a href="<?php echo base_url('adminClients'); ?>">
									<i class="fa fa-circle-o"></i> Clients
								</a>
							</li>
							<li class="<?php if($page=='hiringSpecialists' ){echo 'active';}?>">
								<a href="<?php echo base_url('hiringSpecialists'); ?>">
									<i class="fa fa-circle-o"></i> Specialists
								</a>
							</li>
							<li class="<?php if($page=='hiringServices' ){echo 'active';}?>">
								<a href="<?php echo base_url('hiringServices'); ?>">
									<i class="fa fa-circle-o"></i> Services
								</a>
							</li>
							<li class="<?php if($page=='hiringBillings' ){echo 'active';}?>">
								<a href="<?php echo base_url('hiringBillings'); ?>">
									<i class="fa fa-circle-o"></i> Billing
								</a>
							</li>
							<li class="<?php if($page=='hiringReports' ){echo 'active';}?>">
								<a href="<?php echo base_url('hiringReports'); ?>">
									<i class="fa fa-circle-o"></i> Reports
								</a>
							</li>
							<li class="<?php if($page=='hiringForms' ){echo 'active';}?>">
								<a href="<?php echo base_url('hiringForms'); ?>">
									<i class="fa fa-circle-o"></i> Forms
								</a>
							</li>
							<!-- <li class="<?php if($page=='discounts'  ){echo 'active';}?>">
								<a href="<?php echo base_url('discounts'); ?>">
									<i class="fa fa-circle-o"></i> Discounts
								</a>
							</li> -->
						</ul>
					</li>

					 <li class="treeview <?php if($page=='talentRequests'  ){echo 'active';}?>">
                        <a href="<?php echo base_url('talentRequests'); ?>">
                            <i class="fa fa-files-o"></i>
                            <span>Talent request</span>
                            <span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
                        </a>
                    </li>

					<li class="treeview <?php if($page=='jobIntro'  ){echo 'active';}?>">
						<a href="<?php echo base_url('jobIntro');?>">
							<i class="fa fa-adjust"></i>
							<span>Jobs- Intros </span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
					</li>
					
					<li class="<?php if($page=='pools'  ){echo 'active';}?>">
						<a href="<?php echo base_url('pools');?>"><i class="fa fa-book"></i> <span>Pools</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
					</li>

					<!-- <li class="treeview">
						<a href="data.html">
							<i class="fa fa-database" aria-hidden="true"></i>
							<span>Data </span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
					</li> -->

					<li class="treeview <?php if($page=='feedback'  ){echo 'active';}?>">
						<a href="<?php echo base_url('feedback');?>">
							<i class="fa fa-database" aria-hidden="true"></i>
							<span>Feedback </span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
					</li>


					

					<li class="treeview <?php if($page=='calendar'  ){echo 'active';}?>">
						<a href="<?php echo base_url('calendar');?>"><i class="fa fa-calendar"></i> <span>Calendar</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
					</li>

					<li class="treeview <?php if($page=='myTeam'  ){echo 'active';}?>">
						<a href="<?php echo base_url('myTeam');?>"><i class="fa fa-book"></i> <span>My team</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
					</li>

					<li class=" <?php if($page=='settings'  ){echo 'active';}?>">
						<a href="<?php echo base_url('settings');?>"><i class="fa fa-cog"></i> <span>settings</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
					</li>
					
					<?php
						}
					if ($this->session->userdata('role_id_reg')==5) 
					{
					?>
					<li class="treeview <?php if($page=='userProfile'  ){echo 'active';}?>">
						<a href="<?php echo base_url('userProfile');?>"><i class="fa fa-book"></i> <span>Client Admin Profile</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
					</li>
					<li class="treeview <?php if($page=='agencyRecruiterProfile'  ){echo 'active';}?>">
						<a href="<?php echo base_url('agencyRecruiterProfile');?>"><i class="fa fa-book"></i> <span>Company Profile</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
					</li>
					<li class="treeview <?php if($page=='dashboard'  ){echo 'active';}?>">
						<a href="<?php echo base_url('dashboard');?>">
							<i class="fa fa-dashboard"></i> <span>Dashboards</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
					</li>
					<li class="treeview <?php if($page=='hiringForms'  ){echo 'active';}?>">
						<a href="<?php echo base_url('hiringForms');?>">
							<i class="fa fa-dashboard"></i> <span>Users</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
					</li>
					<li class="treeview <?php if($page=='hiringBillings'  ){echo 'active';}?>">
						<a href="<?php echo base_url('hiringBillings');?>">
							<i class="fa fa-dashboard"></i> <span>Billings</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
					</li>
					<li class="treeview <?php if($page=='hiringReports'  ){echo 'active';}?>">
						<a href="<?php echo base_url('hiringReports');?>">
							<i class="fa fa-dashboard"></i> <span>Reprots</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
					</li>
					<!-- <li class="treeview <?php if($page=='myTeam'  ){echo 'active';}?>">
						<a href="<?php echo base_url('myTeam');?>"><i class="fa fa-book"></i> <span>Support</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
					</li>  -->
					<!-- <li class="treeview <?php if($page=='userProfile' || $page=='agencyRecruiterProfile' ){echo 'active';}?>">

						<a href="#">
							<i class="fa fa-user"></i>
							<span>Hire Now</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>

						<ul class="treeview-menu">
							<li class="<?php if($page=='agencyRecruiterProfile'  ){echo 'active';}?>" ><a href="<?php echo base_url('agencyRecruiterProfile');?>"><i class="fa fa-circle-o"></i>Professional</a></li>
							<li class="<?php if($page=='userProfile'  ){echo 'active';}?>"><a href="<?php echo base_url('userProfile');?>"><i class="fa fa-circle-o"></i>Emerging Talent</a></li>
							<li class="<?php if($page=='userProfile'  ){echo 'active';}?>"><a href="<?php echo base_url('userProfile');?>"><i class="fa fa-circle-o"></i>Temp</a></li>
						</ul>
					</li>
					<li class="treeview <?php if($page=='userProfile' || $page=='agencyRecruiterProfile' ){echo 'active';}?>">

						<a href="#">
							<i class="fa fa-user"></i>
							<span>Market Insights</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>

						<ul class="treeview-menu">
							<li class="<?php if($page=='salaryBenchmarking'  ){echo 'active';}?>" ><a href="<?php echo base_url('salaryBenchmarking');?>"><i class="fa fa-circle-o"></i> Salary Benchmarking</a></li>
							
							<li class="<?php if($page=='userProfile'  ){echo 'active';}?>"><a href="<?php echo base_url('userProfile');?>"><i class="fa fa-circle-o"></i> Talent Benchmark</a></li>
							<li class="<?php if($page=='userProfile'  ){echo 'active';}?>"><a href="<?php echo base_url('userProfile');?>"><i class="fa fa-circle-o"></i> Market map & talent intros</a></li>
						</ul>
					</li>
					<li class="treeview <?php if($page=='userProfile' || $page=='agencyRecruiterProfile' ){echo 'active';}?>">

						<a href="#">
							<i class="fa fa-user"></i>
							<span>Leaver Insights</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>

						<ul class="treeview-menu">
							<li class="<?php if($page=='agencyRecruiterProfile'  ){echo 'active';}?>" ><a href="<?php echo base_url('agencyRecruiterProfile');?>"><i class="fa fa-circle-o"></i>Leaver Survey</a></li>
							<li class="<?php if($page=='userProfile'  ){echo 'active';}?>"><a href="<?php echo base_url('userProfile');?>"><i class="fa fa-circle-o"></i>Leaver Interview</a></li>
						</ul>
					</li>
					<li class="treeview <?php if($page=='myTeam'  ){echo 'active';}?>">
						<a href="<?php echo base_url('myTeam');?>"><i class="fa fa-book"></i> <span>Support</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
					</li> -->
					<?php
						}
					?>
				</ul>
			</section>
		</aside>

        <div class="clear20"></div>
        <div class="clear20"></div>
        <div class="clear20"></div>