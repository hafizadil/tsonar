<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php $this->load->view('admin_side/include/head');?>

<body class="hold-transition skin-blue sidebar-mini">

    <div class="wrapper">
		<header class="main-header">

            <!-- Logo -->

            <a href="<?php echo base_url('dashboard'); ?>" class="logo">

                <span class="logo-lg">Entros</span>

            </a>

            <!-- Header Navbar: style can be found in header.less -->

            <nav class="navbar navbar-static-top">

                <!-- Sidebar toggle button-->

                <div class="mobile_div_left">
					<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">

						<span class="sr-only">Toggle navigation</span>

					</a>

					<div class="dropdown index_page_modal_dropdwon">

						<button class="btn btn-primary dropdown-toggle button_adnew" type="button" data-toggle="dropdown"><i class="fa fa-plus" aria-hidden="true"></i> &nbsp; &nbsp; Add

						</button>

						<ul class="dropdown-menu dropdown_z_index">
                            <?php
                            if ($this->session->userdata('role_id')==1) 
                            {
                            ?>
							<li><a href="#" data-toggle="modal" data-target="#header_talent_dropdown_menu">Talent</a></li>
							<li><a href="#" data-toggle="modal" data-target="#myModal_job_header"> Job</a></li>
							<li><a href="#" data-toggle="modal" data-target="#myModal_job_detail_edit"> Intro</a></li>
							<li><a href="#" data-toggle="modal" onclick="HeaderPools()"> Pool</a></li>
                            <?php
                            }
                            if ($this->session->userdata('role_id')==5) {
                            ?>
                            <li><a href="#" data-toggle="modal" data-target="#myModal_job_header"> Job</a></li>
                            <li><a href="<?php echo base_url('Professional');?>" > Professional </a></li>
                            <li><a href="<?php echo base_url('EmergingTalent');?>" > Emerging Talent </a></li>
                            <li><a href="<?php echo base_url('Temp');?>" > Temporary Talent </a></li>
                            <li><a href="<?php echo base_url('SalaryBenchmarking');?>" > Salary Benchmarking</a></li>
                            <li><a href="<?php echo base_url('TalentBenchmarking');?>" > Talent Benchmarking</a></li>
                            <li><a href="<?php echo base_url('MarketMapTalentIntros');?>" > Market Map and Talent Intros</a></li>
                            <li><a href="<?php echo base_url('LeaverSurvey');?>" > Leaver Survey</a></li>
                            <li><a href="<?php echo base_url('LeaverInterview');?>" >Leaver Interview</a></li>
                            <li><a href="<?php echo base_url('Support');?>" > Support</a></li>
                            <?php
                            }
                            ?>
						</ul>

					</div>
                </div>

                <div class="pull-left col-sm-6 mobile_display">

                </div>

                <!-- Navbar Right Menu -->

                <div class="navbar-custom-menu">

                    <ul class="nav navbar-nav navbar_mobile_padd">

                        <li>

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                                <i class="fa fa-home" aria-hidden="true"></i>

                            </a>

                        </li>

                        <li>

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                                <i class="fa fa-user-o" aria-hidden="true"></i>

                            </a>

                        </li>

                        <li>

                            <li class="dropdown notifications-menu" id="calendar_dropdown">

							<a href="#" class="dropdown-toggle"> <i class="fa fa-calendar-o" aria-hidden="true"></i> <span class="label label-warning">10</span> </a>
                            <ul class="dropdown-menu">
                                <li>

                                    <ul class="menu">
                                        <div class="panel with-nav-tabs panel-default" id="date_tabs">
											<div class="panel-heading">
												<ul class="nav nav-tabs">
													<li class="active"><a href="#tab1default_index" data-toggle="tab">Day</a></li>
													<li><a href="#tab2default_index" data-toggle="tab">Week</a></li>
													<li><a href="#tab3default_index" data-toggle="tab">Month</a></li>
													<li><a href="#tab4default_index" data-toggle="tab">Year</a></li>
												</ul>
											</div>
											<div class="panel-body">
												<div class="tab-content">
													<div class="tab-pane fade in active" id="tab1default_index">
														<div id="parent_div">
															<div class="link_top_maind">

																<div class="sibling-highlight date_events">
                                                                        <ul>
                                                                            <li>
                                                                                <a href="#"> <img src="<?php echo base_url();?>public/admin/dist/img/user_top.png" class="link_top_img1" alt=""> <span class="label label-info top_hdr_icon">10</span> </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#"> <img src="<?php echo base_url();?>public/admin/dist/img/link_top.png" class="link_top_img2" alt=""> <span class="label label-info top_hdr_icon">10</span> </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#"> <img src="<?php echo base_url();?>public/admin/dist/img/thumb_top.png" class="link_top_img3" alt=""> <span class="label label-info top_hdr_icon">10</span> </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#"> <img src="<?php echo base_url();?>public/admin/dist/img/tick_top.png" class="link_top_img3" alt=""> <span class="label label-info top_hdr_icon">10</span> </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#"> <img src="<?php echo base_url();?>public/admin/dist/img/dollar_top.png" class="link_top_img3" alt=""> <span class="label label-info top_hdr_icon">10</span> </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                
															</div>
														</div>
													</div>
													<div class="tab-pane fade" id="tab2default_index">
														<div id="parent_div">
															<div class="link_top_maind">

																<div class="sibling-highlight date_events">
                                                                        <ul>
                                                                            <li>
                                                                                <a href="#"> <img src="<?php echo base_url();?>public/admin/dist/img/user_top.png" class="link_top_img1" alt=""> <span class="label label-info top_hdr_icon">10</span> </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#"> <img src="<?php echo base_url();?>public/admin/dist/img/link_top.png" class="link_top_img2" alt=""> <span class="label label-info top_hdr_icon">10</span> </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#"> <img src="<?php echo base_url();?>public/admin/dist/img/thumb_top.png" class="link_top_img3" alt=""> <span class="label label-info top_hdr_icon">10</span> </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#"> <img src="<?php echo base_url();?>public/admin/dist/img/tick_top.png" class="link_top_img3" alt=""> <span class="label label-info top_hdr_icon">10</span> </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#"> <img src="<?php echo base_url();?>public/admin/dist/img/dollar_top.png" class="link_top_img3" alt=""> <span class="label label-info top_hdr_icon">10</span> </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                
															</div>
														</div>
													</div>
													<div class="tab-pane fade" id="tab3default_index">
														<div id="parent_div">
															<div class="link_top_maind">

																<div class="sibling-highlight date_events">
                                                                        <ul>
                                                                            <li>
                                                                                <a href="#"> <img src="<?php echo base_url();?>public/admin/dist/img/user_top.png" class="link_top_img1" alt=""> <span class="label label-info top_hdr_icon">10</span> </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#"> <img src="<?php echo base_url();?>public/admin/dist/img/link_top.png" class="link_top_img2" alt=""> <span class="label label-info top_hdr_icon">10</span> </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#"> <img src="<?php echo base_url();?>public/admin/dist/img/thumb_top.png" class="link_top_img3" alt=""> <span class="label label-info top_hdr_icon">10</span> </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#"> <img src="<?php echo base_url();?>public/admin/dist/img/tick_top.png" class="link_top_img3" alt=""> <span class="label label-info top_hdr_icon">10</span> </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#"> <img src="<?php echo base_url();?>public/admin/dist/img/dollar_top.png" class="link_top_img3" alt=""> <span class="label label-info top_hdr_icon">10</span> </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                
															</div>
														</div>
													</div>
													<div class="tab-pane fade" id="tab4default_index">
														<div id="parent_div">
															<div class="link_top_maind">

																<div class="sibling-highlight date_events">
                                                                        <ul>
                                                                            <li>
                                                                                <a href="#"> <img src="<?php echo base_url();?>public/admin/dist/img/user_top.png" class="link_top_img1" alt=""> <span class="label label-info top_hdr_icon">10</span> </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#"> <img src="<?php echo base_url();?>public/admin/dist/img/link_top.png" class="link_top_img2" alt=""> <span class="label label-info top_hdr_icon">10</span> </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#"> <img src="<?php echo base_url();?>public/admin/dist/img/thumb_top.png" class="link_top_img3" alt=""> <span class="label label-info top_hdr_icon">10</span> </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#"> <img src="<?php echo base_url();?>public/admin/dist/img/tick_top.png" class="link_top_img3" alt=""> <span class="label label-info top_hdr_icon">10</span> </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#"> <img src="<?php echo base_url();?>public/admin/dist/img/dollar_top.png" class="link_top_img3" alt=""> <span class="label label-info top_hdr_icon">10</span> </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                
															</div>
														</div>
													</div>

												</div>
											</div>
										</div>
                                    </ul>
                                </li>

                            </ul>

                        </li>


                        </li>

                        <li class="dropdown messages-menu">

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                                <i class="fa fa-envelope-o"></i>

                            </a>

                            <ul class="dropdown-menu">

                                <li>

                                    <ul class="menu">

                                        <li>

                                            <!-- start message -->

                                            <a href="#">

                                                <div class="pull-left">

                                                    <img src="<?php echo base_url();?>public/admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                                </div>

                                                <h4>

                                                Support Team

                                                <small><i class="fa fa-clock-o"></i> 5 mins</small>

                                            </h4>

                                                <p>Why not buy a new awesome theme?</p>

                                            </a>

                                        </li>

                                        <!-- end message -->

                                        <li>

                                            <a href="#">

                                                <div class="pull-left">

                                                    <img src="<?php echo base_url();?>public/admin/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">

                                                </div>

                                                <h4>

                                                AdminLTE Design Team

                                                <small><i class="fa fa-clock-o"></i> 2 hours</small>

                                            </h4>

                                                <p>Why not buy a new awesome theme?</p>

                                            </a>

                                        </li>

                                        <li>

                                            <a href="#">

                                                <div class="pull-left">

                                                    <img src="<?php echo base_url();?>public/admin/dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">

                                                </div>

                                                <h4>

                                                Developers

                                                <small><i class="fa fa-clock-o"></i> Today</small>

                                            </h4>

                                                <p>Why not buy a new awesome theme?</p>

                                            </a>

                                        </li>

                                        <li>

                                            <a href="#">

                                                <div class="pull-left">

                                                    <img src="<?php echo base_url();?>public/admin/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">

                                                </div>

                                                <h4>

                                                Sales Department

                                                <small><i class="fa fa-clock-o"></i> Yesterday</small>

                                            </h4>

                                                <p>Why not buy a new awesome theme?</p>

                                            </a>

                                        </li>

                                        <li>

                                            <a href="#">

                                                <div class="pull-left">

                                                    <img src="<?php echo base_url();?>public/admin/dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">

                                                </div>

                                                <h4>

                                                Reviewers

                                                <small><i class="fa fa-clock-o"></i> 2 days</small>

                                            </h4>

                                                <p>Why not buy a new awesome theme?</p>

                                            </a>

                                        </li>

                                    </ul>

                                </li>

                                <li class="footer"><a href="#">See All Messages</a></li>

                            </ul>

                        </li>

                        <li class="dropdown notifications-menu">

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                                <i class="fa fa-bell-o"></i>

                                <span class="label label-warning">10</span>

                            </a>

                            <ul class="dropdown-menu">

                                <li>

                                    <!-- inner menu: contains the actual data -->

                                    <ul class="menu">

                                        <li>

                                            <a href="#">

                                                <i class="fa fa-users text-aqua"></i> 5 new members joined today

                                            </a>

                                        </li>

                                        <li>

                                            <a href="#">

                                                <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the page and may cause design problems

                                            </a>

                                        </li>

                                        <li>

                                            <a href="#">

                                                <i class="fa fa-users text-red"></i> 5 new members joined

                                            </a>

                                        </li>

                                        <li>

                                            <a href="#">

                                                <i class="fa fa-shopping-cart text-green"></i> 25 sales made

                                            </a>

                                        </li>

                                        <li>

                                            <a href="#">

                                                <i class="fa fa-user text-red"></i> You changed your username

                                            </a>

                                        </li>

                                    </ul>

                                </li>

                                <li class="footer"><a href="#">View all</a></li>

                            </ul>

                        </li>


                    </ul>

                </div>

            </nav>
        </header>