<?php
	// echo "<pre>";print_r($hiring_manager_availability_calendar);die();
$where = array('setting_id' => 19);
$table = 'ts_setting_values';
$jobfields = GetSettingsData($table, $where);
// specfied location of the job 
$where1 = array('setting_id' => 20);
$joblocations = GetSettingsData($table, $where1); 
// annual pay for the job
$where2 = array('setting_id' => 21);
$payannuals = GetSettingsData($table, $where2);
// direct repoerts to
$where3 = array('setting_id' => 23);
$direct_reports = GetSettingsData($table, $where3);
// total size of functions
$where4 = array('setting_id' => 24);
$total_size_of_functions = GetSettingsData($table, $where4);
// dailiy pay
$where5 = array('setting_id' => 25);
$paydaily = GetSettingsData($table, $where5);
// salary bonus
$where6 = array('setting_id' => 26);
$bonus = GetSettingsData($table, $where6);
// working hours
$where7 = array('setting_id' => 27);
$working_hour = GetSettingsData($table, $where7);
?>
 <div class="panel-heading" id="quick_job">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab1default_desk_version<?php echo $quick_job_tab;?>" data-toggle="tab">Quick job</a></li>
                    <li><a href="#tab2default_desk_version<?php echo $full_job_tab;?>" data-toggle="tab">Full request</a></li>
                </ul>
            </div>
            <div class="panel-body" style="padding: 0px;">
        <div class="tab-content">
            <!--job_popup Start -->
            <!-- Quick_job_desktop -->
            <div class="tab-pane fade in active" id="tab1default_desk_version<?php echo $quick_job_tab;?>">
                <div class="col-sm-12">
                <div class="quick_desktop_tbl">
                    <table class="table table-bordered table-hover table_new_talent" id="button_checked" style="background:#fff;">
                        <thead>
                            <tr id="current_status_tr_color">
                            	<!-- quick job form -->
                            	<form method="post" id="quick_job_request_form_<?php echo $full_job_level_select ;?>">
                                <input type="hidden" name="quick_talent_request_action" id="quick_talent_request_action" value="submitQuickTalentRequest">
                                <th width="27%"></th>
                                <th width="25%">
                                    <center>
                                        <div class="dropdown__select<?php echo $dropDown_1;?>" id="quick_client_business_area<?php echo $form_fields_class; ?>">
                                            <span class="caret"></span>
                                            <label class="dropdown__label">Client or Business Area</label>

                                            <input type="hidden" required name="quickClientBusiness<?php echo $form_fields_class; ?>" id="quickClientBusiness<?php echo $form_fields_class; ?>" value="">
                                            
                                            <div class="dropdown__content" id="quick_append_client_business_area<?php echo $form_fields_class; ?>">

                                            </div>
                                        </div>
                                    </center>
                                </th>
                                <th width="25%">
                                    <center>
                                        <div class="dropdown__select<?php echo $dropDown_2;?>" id="quick_Hiring_Managers<?php echo $form_fields_class; ?>">
                                            <span class="caret"></span>
                                            <label class="dropdown__label">Hiring Manager</label>
                                            <input type="hidden" required name="quickHiringManager<?php echo $form_fields_class; ?>" id="quickHiringManager<?php echo $form_fields_class; ?>" value="">
                                            <div class="dropdown__content" id="quick_append_hiring_mangers<?php echo $form_fields_class; ?>">
                                            
                                            </div>
                                        </div>    
                                    <center>
                                </th>
                                <th width="23%"></th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr class="portion_heading">
                                <td colspan="4">
                                    <center>
                                        <label>Role details</label>
                                    </center>
                                </td>
                            </tr>
                            <tr class="job_quick_pop_page_child">
                                
                                <td class="td_1_green_label">

                                    <input id="talent_job_<?php echo $quick_job_select; ?>"  type="checkbox" class="display_none_talent3">

                                    <label for="talent_job_<?php echo $quick_job_select; ?>">Job</label>

                                </td>

                                <td valign="middle" class="green_hover">

                                    <select class="active_select" id="quick_job_field<?php echo $form_fields_class; ?>"  name="quick_job_field<?php echo $form_fields_class; ?>" txt-attr="Job field - ">
                                       <?php foreach ($jobfields as $jobfield) { ?>
                                            <option value="<?php echo $jobfield['value_id']; ?>"><?php echo $jobfield['value_name']; ?></option>
                                        <?php } ?>
                                    </select>

                                </td>

                                <td valign="middle">
                                    <input name="quick_job_title<?php echo $form_fields_class; ?>" id="quick_job_title<?php echo $form_fields_class; ?>" type="text" class="green_hover" placeholder="Job Title">
                                </td>

                                <td valign="middle" class="green_hover">
                                    <select name="quick_jobLocation<?php echo $form_fields_class; ?>" id="quick_jobLocation<?php echo $form_fields_class; ?>" class="test1 desktop_cities_multiple" multiple="multiple">
                                        <option value="">Location</option>
                                        <?php foreach ($joblocations as $joblocation) { ?>
                                        <option value="<?php echo $joblocation['value_id']; ?>"><?php echo $joblocation['value_name']; ?></option>
                                        <?php } ?>
                                    </select>
                                </td>
                            </tr>

                            <tr class="level_jb_pop_quick_job_<?php echo $quick_job_level_select; ?>">
                                <td class="td_1_green_label">
                                    <input id="full_request03_quick_job_<?php echo $quick_job_level_id; ?>" type="checkbox" class="display_none_talent3">
                                    <label for="full_request03_quick_job_<?php echo $quick_job_level_id; ?>">Level</label>
                                </td>
                                <td valign="middle" class="green_hover">
                                    <input id="leader_of_leader_jb_pop_quick_job_<?php echo $quick_job_level_id; ?>" name="quick_job_level" class="display_none_talent3" type="checkbox" value="Leader of leaders">
                                    <label for="leader_of_leader_jb_pop_quick_job_<?php echo $quick_job_level_id; ?>">Leader of leaders</label>
                                </td>
                                <td valign="middle" class="green_hover">
                                    <input id="leader_of_professional_jb_pop_quick_job_<?php echo $quick_job_level_id; ?>" class="display_none_talent3" name="quick_job_level" value="Leader of professionals" type="checkbox">
                                    <label for="leader_of_professional_jb_pop_quick_job_<?php echo $quick_job_level_id; ?>">Leader of professionals</label>
                                </td>

                                <td valign="middle" class="green_hover">
                                    <input id="individual_prefossional_jb_pop_quick_job_<?php echo $quick_job_level_id; ?>" name="quick_job_level" value="Individual professional" class="display_none_talent3" type="checkbox">
                                    <label for="individual_prefossional_jb_pop_quick_job_<?php echo $quick_job_level_id; ?>">Individual professional</label>
                                </td>
                            </tr>

                            <tr class="contract">
                                    <td class="td_1_green_label">
                                        <input id="proof0120_quickjob_<?php echo $quick_job_level_id; ?>" name="quick_contract_type" type="checkbox" class="display_none_talent3">
                                        <label for="proof0120_quickjob_<?php echo $quick_job_level_id; ?>">Contract type</label>
                                    </td>

                                    <td valign="middle" class="green_hover">
                                        <input id="perm_quickjob_<?php echo $quick_job_level_id; ?>" name="quick_contract_type" value="Permanent" class="display_none_talent3" type="checkbox"></input>
                                        <label for="perm_quickjob_<?php echo $quick_job_level_id; ?>">Permanent</label>
                                    </td>

                                    <td valign="middle" class="green_hover">
                                        <!--fixed_term_talent_request-->
                                        <input id="ftc_quickjob_<?php echo $quick_job_level_id; ?>" value="Fixed-term" name="quick_contract_type" class="display_none_talent3" type="checkbox"></input>
                                        <label for="ftc_quickjob_<?php echo $quick_job_level_id; ?>">Fixed-term</label>
                                    </td>

                                    <td valign="middle" class="green_hover">
                                        <input id="contractor_quickjob_<?php echo $quick_job_level_id; ?>" value="Contractor" name="quick_contract_type" class="display_none_talent3" type="checkbox">
                                        <label for="contractor_quickjob_<?php echo $quick_job_level_id; ?>">Contractor</label>
                                    </td>
                            </tr>

                            <tr class="div_contract_month_quickjob_<?php echo $quick_job_level_id;?> talent_request_length_months" style="display: table-row;">
                                    <td class="td_1_green_label">
                                        <input id="length_in_months" type="checkbox" name="quick_contract_months" class="display_none_talent3">
                                        <label for="length_in_months">Contract months</label>
                                    </td>
                                    <td colspan="3">
                                        <div class="panel with-nav-tabs panel-default">
                                            <div class="panel-heading">
                                                <ul class="nav nav-tabs" id="select_days_label">
                                                    <li>
                                                        <a href="#">
                                                            <input id="<?php echo $quick_job_level_id; ?>_quickjob_length_months_1" type="checkbox" name="quick_contract_months" value="1" class="display_none_talent3 class_contract_quickjob_<?php echo $quick_job_level_id; ?>">
                                                            <label for="<?php echo $quick_job_level_id; ?>_quickjob_length_months_1">1</label>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <input id="<?php echo $quick_job_level_id; ?>_quickjob_length_months_2" type="checkbox" name="quick_contract_months" value="2" class="display_none_talent3 class_contract_quickjob_<?php echo $quick_job_level_id; ?>">
                                                            <label for="<?php echo $quick_job_level_id; ?>_quickjob_length_months_2">2</label>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <input id="<?php echo $quick_job_level_id; ?>_quickjob_length_months_3" type="checkbox" name="quick_contract_months" value="3" class="display_none_talent3 class_contract_quickjob_<?php echo $quick_job_level_id; ?>">
                                                            <label for="<?php echo $quick_job_level_id; ?>_quickjob_length_months_3">3</label>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <input id="<?php echo $quick_job_level_id; ?>_quickjob_length_months_4" type="checkbox" name="quick_contract_months" value="4" class="display_none_talent3 class_contract_quickjob_<?php echo $quick_job_level_id; ?>">
                                                            <label for="<?php echo $quick_job_level_id; ?>_quickjob_length_months_4">4</label>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <input id="<?php echo $quick_job_level_id; ?>_quickjob_length_months_5" type="checkbox" name="quick_contract_months" value="5" class="display_none_talent3 class_contract_quickjob_<?php echo $quick_job_level_id; ?>">
                                                            <label for="<?php echo $quick_job_level_id; ?>_quickjob_length_months_5">5</label>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <input id="<?php echo $quick_job_level_id; ?>_quickjob_length_months_6" type="checkbox" name="quick_contract_months" value="6" class="display_none_talent3 class_contract_quickjob_<?php echo $quick_job_level_id; ?>">
                                                            <label for="<?php echo $quick_job_level_id; ?>_quickjob_length_months_6">6</label>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <input id="<?php echo $quick_job_level_id; ?>_quickjob_length_months_7" type="checkbox" name="quick_contract_months" value="7" class="display_none_talent3 class_contract_quickjob_<?php echo $quick_job_level_id; ?>">
                                                            <label for="<?php echo $quick_job_level_id; ?>_quickjob_length_months_7">7</label>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <input id="<?php echo $quick_job_level_id; ?>_quickjob_length_months_8" type="checkbox" name="quick_contract_months" value="8" class="display_none_talent3 class_contract_quickjob_<?php echo $quick_job_level_id; ?>">
                                                            <label for="<?php echo $quick_job_level_id; ?>_quickjob_length_months_8">8</label>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <input id="<?php echo $quick_job_level_id; ?>_quickjob_length_months_9" type="checkbox" name="quick_contract_months" value="9" class="display_none_talent3 class_contract_quickjob_<?php echo $quick_job_level_id; ?>">
                                                            <label for="<?php echo $quick_job_level_id; ?>_quickjob_length_months_9">9</label>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <input id="<?php echo $quick_job_level_id; ?>_quickjob_length_months_10" type="checkbox" name="quick_contract_months" value="10" class="display_none_talent3 class_contract_quickjob_<?php echo $quick_job_level_id; ?>">
                                                            <label for="<?php echo $quick_job_level_id; ?>_quickjob_length_months_10">10</label>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <input id="<?php echo $quick_job_level_id; ?>_quickjob_length_months_11" type="checkbox" name="quick_contract_months" value="11" class="display_none_talent3 class_contract_quickjob_<?php echo $quick_job_level_id; ?>">
                                                            <label for="<?php echo $quick_job_level_id; ?>_quickjob_length_months_11">11</label>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <input id="<?php echo $quick_job_level_id; ?>_quickjob_length_months_12" type="checkbox" name="quick_contract_months" value="12" class="display_none_talent3 class_contract_quickjob_<?php echo $quick_job_level_id; ?>">
                                                            <label for="<?php echo $quick_job_level_id; ?>_quickjob_length_months_12">12</label>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                 <tr class="pay">
                                    <td class="td_1_green_label">
                                        <input id="proof0131" type="checkbox" class="display_none_talent3">
                                        <label for="proof0131">Pay</label>
                                    </td>

                                    <td valign="middle" class="green_hover">
                                        <select class="active_select drp_gray_clr_select active_annual" name="quick_annual_pay" id="pay_frst_drp_quickjob_<?php echo $full_job_level_select ;?>" txt-attr="Pay annual - ">
                                            <option value="">Pay - annual</option>
                                            <?php foreach ($payannuals as $payannual) { ?>
                                                <option value="<?php echo $payannual['value_id']; ?>">$<?php 
                                                $number = number_format($payannual['value_name']); 
                                                echo $number; ?></option>

                                            <?php } ?>
                                        </select>

                                        <select class="active_select drp_gray_clr_select active_annual" name="quick_daily_pay" id="pay_dialy_drp_des_ntj_quickjob_<?php echo $full_job_level_select ;?>" txt-attr="Daily - ">
                                            <option value="">Daily</option>
                                           <?php foreach ($paydaily as $pay_daily) { ?>
                                                <option value="<?php echo $pay_daily['value_id']; ?>">$<?php 
                                                $number = number_format($pay_daily['value_name']); 
                                                echo $number; ?></option>

                                            <?php } ?>
                                        </select>
                                    </td>

                                    <td valign="middle" class="green_hover">
                                        <input id="proof01031" type="checkbox" name="quick_flexible_pay" class="display_none_talent3">
                                        <label for="proof01031">Flexible on pay</label>
                                    </td>

                                    <td valign="middle" class="green_hover">
                                        <select class="active_select" name="bonus_buy_out" id="pay_bonus_percentage_quickjob_<?php echo $full_job_level_select ;?>" txt-attr="Bonus - ">
                                            <option value="">Bonus</option>
                                             <?php foreach ($bonus as $bonus_) { ?>
                                                <option value="<?php echo $bonus_['value_id']; ?>">$<?php 
                                                $number = number_format($bonus_['value_name']); 
                                                echo $number; ?></option>

                                            <?php } ?>
                                           
                                        </select>
                                    </td>
                                </tr>

                            <tr id="date_time_tabs">

                                <td valign="middle" class="pdg_talent_sub_left td_1_green_label" style="border-bottom: solid 0px #fff !important;">

                                    <input id="talent_HM_<?php echo $quick_hiringManagerTab; ?>" type="checkbox" class="display_none_talent3">

                                    <label for="talent_HM_<?php echo $quick_hiringManagerTab; ?>" data-placement="top" data-toggle="popover" data-trigger="hover" data-content="Red: Description _ Green: Description">Hiring Manager Availablity </label>

                                </td>

                                <td colspan="3">

                                    <div class="panel with-nav-tabs panel-default">
                                        <div class="panel-heading">

                                            <ul class="nav nav-tabs">

                                                <li><a href="javascript:void(0);" attr-id="date_time_pop_<?php echo $quick_hiring_manager_availability; ?>_1" class="hm_avail_qk_jb_pop_desk" onclick="hm_availability_click(this)">All</a></li>

                                                <li><a href="javascript:void(0);" attr-id="date_time_pop_<?php echo $quick_hiring_manager_availability; ?>_2" class="hm_avail_qk_jb_pop_desk" onclick="hm_availability_click(this)">Monday</a></li>

                                                <li><a href="javascript:void(0);" attr-id="date_time_pop_<?php echo $quick_hiring_manager_availability; ?>_3" class="hm_avail_qk_jb_pop_desk" onclick="hm_availability_click(this)">Tuesday</a></li>

                                                <li><a href="javascript:void(0);" attr-id="date_time_pop_<?php echo $quick_hiring_manager_availability; ?>_4" class="hm_avail_qk_jb_pop_desk" onclick="hm_availability_click(this)">Wednesday</a></li>

                                                <li><a href="javascript:void(0);" attr-id="date_time_pop_<?php echo $quick_hiring_manager_availability; ?>_5" class="hm_avail_qk_jb_pop_desk" onclick="hm_availability_click(this)">Thursday</a></li>

                                                <li><a href="javascript:void(0);" attr-id="date_time_pop_<?php echo $quick_hiring_manager_availability; ?>_6" class="hm_avail_qk_jb_pop_desk" onclick="hm_availability_click(this)">Friday</a></li>

                                            </ul>

                                        </div>

                                        <div class="panel-body">
                                       	<!-- quick job request calendar for manage availablity -->
                                            <div class="tab-content hm_tb_content_qk_jb_pop_desk">
                                                <!-- select availability all days slot start  -->
                                                <div class="tab-pane fade in " id="date_time_pop_<?php echo $quick_hiring_manager_availability; ?>_1">
                                                    <?php
                                                        foreach ($hiring_manager_availability_calendar as $hrManager_avail) 
                                                        {
                                                    ?>
                                                    <ul class="today_time" all-click="<?php echo $hrManager_avail->ul_id; ?>">
                                                        <li all-li-click="1">
                                                            <input id="<?php echo $full_job_level_select ;?>calendar_all_day<?php echo $hrManager_avail->slot_1; ?>"  class="display_none_talent3" name="<?php echo $modal_hiring_area; ?>quick-all-<?php echo $hrManager_avail->slot_1; ?>" value="all-<?php echo $hrManager_avail->slot_1; ?>" type="checkbox" onclick="clickMe(this)" backround-attr="" meetup-attr="">
                                                            <label for="<?php echo $full_job_level_select ;?>calendar_all_day<?php echo $hrManager_avail->slot_1; ?>"><?php echo $hrManager_avail->slot_1; ?></label>
                                                        </li>
                                                        <li all-li-click="2">
                                                            <input id="<?php echo $full_job_level_select ;?>calendar_all_day<?php echo $hrManager_avail->slot_2; ?>"  class="display_none_talent3" name="<?php echo $modal_hiring_area; ?>quick-all-<?php echo $hrManager_avail->slot_2; ?>" value="all-<?php echo $hrManager_avail->slot_2; ?>" type="checkbox" onclick="clickMe(this)" backround-attr="" meetup-attr="">
                                                            <label for="<?php echo $full_job_level_select ;?>calendar_all_day<?php echo $hrManager_avail->slot_2; ?>"><?php echo $hrManager_avail->slot_2; ?></label>
                                                        </li>
                                                        <li all-li-click="3">
                                                            <input id="<?php echo $full_job_level_select ;?>calendar_all_day<?php echo $hrManager_avail->slot_3; ?>"  class="display_none_talent3" name="<?php echo $modal_hiring_area; ?>quick-all-<?php echo $hrManager_avail->slot_3; ?>" value="all-<?php echo $hrManager_avail->slot_3; ?>" type="checkbox" onclick="clickMe(this)" backround-attr="" meetup-attr="">
                                                            <label for="<?php echo $full_job_level_select ;?>calendar_all_day<?php echo $hrManager_avail->slot_3; ?>"><?php echo $hrManager_avail->slot_3; ?></label>
                                                        </li>
                                                        <li all-li-click="4">
                                                            <input id="<?php echo $full_job_level_select ;?>calendar_all_day<?php echo $hrManager_avail->slot_4; ?>"  class="display_none_talent3" name="<?php echo $modal_hiring_area; ?>quick-all-<?php echo $hrManager_avail->slot_4; ?>" value="all-<?php echo $hrManager_avail->slot_4; ?>" type="checkbox" onclick="clickMe(this)" backround-attr="" meetup-attr="">
                                                            <label for="<?php echo $full_job_level_select ;?>calendar_all_day<?php echo $hrManager_avail->slot_4; ?>"><?php echo $hrManager_avail->slot_4; ?></label>
                                                        </li>
                                                        <li all-li-click="5">
                                                            <input id="<?php echo $full_job_level_select ;?>calendar_all_day<?php echo $hrManager_avail->slot_5; ?>"  class="display_none_talent3" name="<?php echo $modal_hiring_area; ?>quick-all-<?php echo $hrManager_avail->slot_5; ?>" value="all-<?php echo $hrManager_avail->slot_5; ?>" type="checkbox" onclick="clickMe(this)" backround-attr="" meetup-attr="">
                                                            <label for="<?php echo $full_job_level_select ;?>calendar_all_day<?php echo $hrManager_avail->slot_5; ?>"><?php echo $hrManager_avail->slot_5; ?></label>
                                                        </li>
                                                        <li all-li-click="6">
                                                            <input id="<?php echo $full_job_level_select ;?>calendar_all_day<?php echo $hrManager_avail->slot_6; ?>"  class="display_none_talent3" name="<?php echo $modal_hiring_area; ?>quick-all-<?php echo $hrManager_avail->slot_6; ?>" value="all-<?php echo $hrManager_avail->slot_6; ?>" type="checkbox" onclick="clickMe(this)" backround-attr="" meetup-attr="">
                                                            <label for="<?php echo $full_job_level_select ;?>calendar_all_day<?php echo $hrManager_avail->slot_6; ?>"><?php echo $hrManager_avail->slot_6; ?></label>
                                                        </li>
                                                    </ul>

                                                    <div class="clearfix"></div>
                                                    <?php
                                                        }
                                                    ?>
                                                </div>
                                                <!-- select hiring manager availability all days slot ends  -->
                                                <!-- select hiring manager availability mondays slot starts  -->
                                                <div class="tab-pane fade in" id="date_time_pop_<?php echo $quick_hiring_manager_availability; ?>_2">
                                                    <?php
                                                        foreach ($hiring_manager_availability_calendar as $hrManager_avail_mon) 
                                                        {
                                                    ?>
                                                    <ul class="today_time" all-click="<?php echo $hrManager_avail_mon->ul_id; ?>">
                                                        <li all-li-click="1">
                                                            <input id="<?php echo $full_job_level_select ;?>calendar_monday<?php echo $hrManager_avail_mon->slot_1; ?>"  class="display_none_talent3" name="<?php echo $modal_hiring_area; ?>quick-mon-<?php echo $hrManager_avail_mon->slot_1; ?>" value="mon-<?php echo $hrManager_avail_mon->slot_1; ?>" type="checkbox" onclick="clickMe(this)" backround-attr="" meetup-attr="">
                                                            <label for="<?php echo $full_job_level_select ;?>calendar_monday<?php echo $hrManager_avail_mon->slot_1; ?>"><?php echo $hrManager_avail_mon->slot_1; ?></label>
                                                        </li>
                                                        <li all-li-click="2">
                                                            <input id="<?php echo $full_job_level_select ;?>calendar_monday<?php echo $hrManager_avail_mon->slot_2; ?>"  class="display_none_talent3" name="<?php echo $modal_hiring_area; ?>quick-mon-<?php echo $hrManager_avail_mon->slot_2; ?>" value="mon-<?php echo $hrManager_avail_mon->slot_2; ?>" type="checkbox" onclick="clickMe(this)" backround-attr="" meetup-attr="">
                                                            <label for="<?php echo $full_job_level_select ;?>calendar_monday<?php echo $hrManager_avail_mon->slot_2; ?>"><?php echo $hrManager_avail_mon->slot_2; ?></label>
                                                        </li>
                                                        <li all-li-click="3">
                                                            <input id="<?php echo $full_job_level_select ;?>calendar_monday<?php echo $hrManager_avail_mon->slot_3; ?>"  class="display_none_talent3" name="<?php echo $modal_hiring_area; ?>quick-mon-<?php echo $hrManager_avail_mon->slot_3; ?>" value="mon-<?php echo $hrManager_avail_mon->slot_3; ?>" type="checkbox" onclick="clickMe(this)" backround-attr="" meetup-attr="">
                                                            <label for="<?php echo $full_job_level_select ;?>calendar_monday<?php echo $hrManager_avail_mon->slot_3; ?>"><?php echo $hrManager_avail_mon->slot_3; ?></label>
                                                        </li>
                                                        <li all-li-click="4">
                                                            <input id="<?php echo $full_job_level_select ;?>calendar_monday<?php echo $hrManager_avail_mon->slot_4; ?>"  class="display_none_talent3" name="<?php echo $modal_hiring_area; ?>quick-mon-<?php echo $hrManager_avail_mon->slot_4; ?>" value="mon-<?php echo $hrManager_avail_mon->slot_4; ?>" type="checkbox" onclick="clickMe(this)" backround-attr="" meetup-attr="">
                                                            <label for="<?php echo $full_job_level_select ;?>calendar_monday<?php echo $hrManager_avail_mon->slot_4; ?>"><?php echo $hrManager_avail_mon->slot_4; ?></label>
                                                        </li>
                                                        <li all-li-click="5">
                                                            <input id="<?php echo $full_job_level_select ;?>calendar_monday<?php echo $hrManager_avail_mon->slot_5; ?>"  class="display_none_talent3" name="<?php echo $modal_hiring_area; ?>quick-mon-<?php echo $hrManager_avail_mon->slot_5; ?>" value="mon-<?php echo $hrManager_avail_mon->slot_5; ?>" type="checkbox" onclick="clickMe(this)" backround-attr="" meetup-attr="">
                                                            <label for="<?php echo $full_job_level_select ;?>calendar_monday<?php echo $hrManager_avail_mon->slot_5; ?>"><?php echo $hrManager_avail_mon->slot_5; ?></label>
                                                        </li>
                                                        <li all-li-click="6">
                                                            <input id="<?php echo $full_job_level_select ;?>calendar_monday<?php echo $hrManager_avail_mon->slot_6; ?>"  class="display_none_talent3" name="<?php echo $modal_hiring_area; ?>quick-mon-<?php echo $hrManager_avail_mon->slot_6; ?>" value="mon-<?php echo $hrManager_avail_mon->slot_6; ?>" type="checkbox" onclick="clickMe(this)" backround-attr="" meetup-attr="">
                                                            <label for="<?php echo $full_job_level_select ;?>calendar_monday<?php echo $hrManager_avail_mon->slot_6; ?>"><?php echo $hrManager_avail_mon->slot_6; ?></label>
                                                        </li>
                                                    </ul>

                                                    <div class="clearfix"></div>
                                                    <?php
                                                        }
                                                    ?>
                                                </div>
                                                <!-- select hiring manager availability mondays slot ends  -->
                                                <!-- select hiring manager availability tuesday slot starts  -->
                                                <div class="tab-pane fade in" id="date_time_pop_<?php echo $quick_hiring_manager_availability; ?>_3">
                                                    <?php
                                                        foreach ($hiring_manager_availability_calendar as $hrManager_avail_tue) 
                                                        {
                                                    ?>
                                                    <ul class="today_time" all-click="<?php echo $hrManager_avail_tue->ul_id; ?>">
                                                        <li all-li-click="1">
                                                            <input id="<?php echo $full_job_level_select ;?>calendar_tuesday<?php echo $hrManager_avail_tue->slot_1; ?>"  class="display_none_talent3" name="<?php echo $modal_hiring_area; ?>quick-tue-<?php echo $hrManager_avail_tue->slot_1; ?>" value="tue-<?php echo $hrManager_avail_tue->slot_1; ?>" type="checkbox" onclick="clickMe(this)" backround-attr="" meetup-attr="">
                                                            <label for="<?php echo $full_job_level_select ;?>calendar_tuesday<?php echo $hrManager_avail_tue->slot_1; ?>"><?php echo $hrManager_avail_tue->slot_1; ?></label>
                                                        </li>
                                                        <li all-li-click="2">
                                                            <input id="<?php echo $full_job_level_select ;?>calendar_tuesday<?php echo $hrManager_avail_tue->slot_2; ?>"  class="display_none_talent3" name="<?php echo $modal_hiring_area; ?>quick-tue-<?php echo $hrManager_avail_tue->slot_2; ?>" value="tue-<?php echo $hrManager_avail_tue->slot_2; ?>" type="checkbox" onclick="clickMe(this)" backround-attr="" meetup-attr="">
                                                            <label for="<?php echo $full_job_level_select ;?>calendar_tuesday<?php echo $hrManager_avail_tue->slot_2; ?>"><?php echo $hrManager_avail_tue->slot_2; ?></label>
                                                        </li>
                                                        <li all-li-click="3">
                                                            <input id="<?php echo $full_job_level_select ;?>calendar_tuesday<?php echo $hrManager_avail_tue->slot_3; ?>"  class="display_none_talent3" name="<?php echo $modal_hiring_area; ?>quick-tue-<?php echo $hrManager_avail_tue->slot_3; ?>" value="tue-<?php echo $hrManager_avail_tue->slot_3; ?>" type="checkbox" onclick="clickMe(this)" backround-attr="" meetup-attr="">
                                                            <label for="<?php echo $full_job_level_select ;?>calendar_tuesday<?php echo $hrManager_avail_tue->slot_3; ?>"><?php echo $hrManager_avail_tue->slot_3; ?></label>
                                                        </li>
                                                        <li all-li-click="4">
                                                            <input id="<?php echo $full_job_level_select ;?>calendar_tuesday<?php echo $hrManager_avail_tue->slot_4; ?>"  class="display_none_talent3" name="<?php echo $modal_hiring_area; ?>quick-tue-<?php echo $hrManager_avail_tue->slot_4; ?>" value="tue-<?php echo $hrManager_avail_tue->slot_4; ?>" type="checkbox" onclick="clickMe(this)" backround-attr="" meetup-attr="">
                                                            <label for="<?php echo $full_job_level_select ;?>calendar_tuesday<?php echo $hrManager_avail_tue->slot_4; ?>"><?php echo $hrManager_avail_tue->slot_4; ?></label>
                                                        </li>
                                                        <li all-li-click="5">
                                                            <input id="<?php echo $full_job_level_select ;?>calendar_tuesday<?php echo $hrManager_avail_tue->slot_5; ?>"  class="display_none_talent3" name="<?php echo $modal_hiring_area; ?>quick-tue-<?php echo $hrManager_avail_tue->slot_5; ?>" value="tue-<?php echo $hrManager_avail_tue->slot_5; ?>" type="checkbox" onclick="clickMe(this)" backround-attr="" meetup-attr="">
                                                            <label for="<?php echo $full_job_level_select ;?>calendar_tuesday<?php echo $hrManager_avail_tue->slot_5; ?>"><?php echo $hrManager_avail_tue->slot_5; ?></label>
                                                        </li>
                                                        <li all-li-click="6">
                                                            <input id="<?php echo $full_job_level_select ;?>calendar_tuesday<?php echo $hrManager_avail_tue->slot_6; ?>"  class="display_none_talent3" name="<?php echo $modal_hiring_area; ?>quick-tue-<?php echo $hrManager_avail_tue->slot_6; ?>" value="tue-<?php echo $hrManager_avail_tue->slot_6; ?>" type="checkbox" onclick="clickMe(this)" backround-attr="" meetup-attr="">
                                                            <label for="<?php echo $full_job_level_select ;?>calendar_tuesday<?php echo $hrManager_avail_tue->slot_6; ?>"><?php echo $hrManager_avail_tue->slot_6; ?></label>
                                                        </li>
                                                    </ul>

                                                    <div class="clearfix"></div>
                                                    <?php
                                                        }
                                                    ?>
                                                </div>
                                                <!-- select hiring manager availability tuesday slot ends  -->
                                                <!-- select hiring manager availability wednesday slot starts  -->
                                                <div class="tab-pane fade in" id="date_time_pop_<?php echo $quick_hiring_manager_availability; ?>_4">
                                                   <?php
                                                        foreach ($hiring_manager_availability_calendar as $hrManager_avail_wed) 
                                                        {
                                                    ?>
                                                    <ul class="today_time" all-click="<?php echo $hrManager_avail_wed->ul_id; ?>">
                                                        <li all-li-click="1">
                                                            <input id="<?php echo $full_job_level_select ;?>calendar_wednesday<?php echo $hrManager_avail_wed->slot_1; ?>"  class="display_none_talent3" name="<?php echo $modal_hiring_area; ?>quick-wed-<?php echo $hrManager_avail_wed->slot_1; ?>" value="wed-<?php echo $hrManager_avail_wed->slot_1; ?>" type="checkbox" onclick="clickMe(this)" backround-attr="" meetup-attr="">
                                                            <label for="<?php echo $full_job_level_select ;?>calendar_wednesday<?php echo $hrManager_avail_wed->slot_1; ?>"><?php echo $hrManager_avail_wed->slot_1; ?></label>
                                                        </li>
                                                        <li all-li-click="2">
                                                            <input id="<?php echo $full_job_level_select ;?>calendar_wednesday<?php echo $hrManager_avail_wed->slot_2; ?>"  class="display_none_talent3" name="<?php echo $modal_hiring_area; ?>quick-wed-<?php echo $hrManager_avail_wed->slot_2; ?>" value="wed-<?php echo $hrManager_avail_wed->slot_2; ?>" type="checkbox" onclick="clickMe(this)" backround-attr="" meetup-attr="">
                                                            <label for="<?php echo $full_job_level_select ;?>calendar_wednesday<?php echo $hrManager_avail_wed->slot_2; ?>"><?php echo $hrManager_avail_wed->slot_2; ?></label>
                                                        </li>
                                                        <li all-li-click="3">
                                                            <input id="<?php echo $full_job_level_select ;?>calendar_wednesday<?php echo $hrManager_avail_wed->slot_3; ?>"  class="display_none_talent3" name="<?php echo $modal_hiring_area; ?>quick-wed-<?php echo $hrManager_avail_wed->slot_3; ?>" value="wed-<?php echo $hrManager_avail_wed->slot_3; ?>" type="checkbox" onclick="clickMe(this)" backround-attr="" meetup-attr="">
                                                            <label for="<?php echo $full_job_level_select ;?>calendar_wednesday<?php echo $hrManager_avail_wed->slot_3; ?>"><?php echo $hrManager_avail_wed->slot_3; ?></label>
                                                        </li>
                                                        <li all-li-click="4">
                                                            <input id="<?php echo $full_job_level_select ;?>calendar_wednesday<?php echo $hrManager_avail_wed->slot_4; ?>"  class="display_none_talent3" name="<?php echo $modal_hiring_area; ?>quick-wed-<?php echo $hrManager_avail_wed->slot_4; ?>" value="wed-<?php echo $hrManager_avail_wed->slot_4; ?>" type="checkbox" onclick="clickMe(this)" backround-attr="" meetup-attr="">
                                                            <label for="<?php echo $full_job_level_select ;?>calendar_wednesday<?php echo $hrManager_avail_wed->slot_4; ?>"><?php echo $hrManager_avail_wed->slot_4; ?></label>
                                                        </li>
                                                        <li all-li-click="5">
                                                            <input id="<?php echo $full_job_level_select ;?>calendar_wednesday<?php echo $hrManager_avail_wed->slot_5; ?>"  class="display_none_talent3" name="<?php echo $modal_hiring_area; ?>quick-wed-<?php echo $hrManager_avail_wed->slot_5; ?>" value="wed-<?php echo $hrManager_avail_wed->slot_5; ?>" type="checkbox" onclick="clickMe(this)" backround-attr="" meetup-attr="">
                                                            <label for="<?php echo $full_job_level_select ;?>calendar_wednesday<?php echo $hrManager_avail_wed->slot_5; ?>"><?php echo $hrManager_avail_wed->slot_5; ?></label>
                                                        </li>
                                                        <li all-li-click="6">
                                                            <input id="<?php echo $full_job_level_select ;?>calendar_wednesday<?php echo $hrManager_avail_wed->slot_6; ?>"  class="display_none_talent3" name="<?php echo $modal_hiring_area; ?>quick-wed-<?php echo $hrManager_avail_wed->slot_6; ?>" value="wed-<?php echo $hrManager_avail_wed->slot_6; ?>" type="checkbox" onclick="clickMe(this)" backround-attr="" meetup-attr="">
                                                            <label for="<?php echo $full_job_level_select ;?>calendar_wednesday<?php echo $hrManager_avail_wed->slot_6; ?>"><?php echo $hrManager_avail_wed->slot_6; ?></label>
                                                        </li>
                                                    </ul>

                                                    <div class="clearfix"></div>
                                                    <?php
                                                        }
                                                    ?>
                                                </div>
                                                <!-- select hiring manager availability wednesday slot ends  -->
                                                <!-- select hiring manager availability thursday slot starts  -->
                                                <div class="tab-pane fade in" id="date_time_pop_<?php echo $quick_hiring_manager_availability; ?>_5">
                                                   <?php
                                                        foreach ($hiring_manager_availability_calendar as $hrManager_avail_thu) 
                                                        {
                                                    ?>
                                                    <ul class="today_time" all-click="<?php echo $hrManager_avail_thu->ul_id; ?>">
                                                        <li all-li-click="1">
                                                            <input id="<?php echo $full_job_level_select ;?>calendar_thursday<?php echo $hrManager_avail_thu->slot_1; ?>"  class="display_none_talent3" name="<?php echo $modal_hiring_area; ?>quick-thu-<?php echo $hrManager_avail_thu->slot_1; ?>" value="thu-<?php echo $hrManager_avail_thu->slot_1; ?>" type="checkbox" onclick="clickMe(this)" backround-attr="" meetup-attr="">
                                                            <label for="<?php echo $full_job_level_select ;?>calendar_thursday<?php echo $hrManager_avail_thu->slot_1; ?>"><?php echo $hrManager_avail_thu->slot_1; ?></label>
                                                        </li>
                                                        <li all-li-click="2">
                                                            <input id="<?php echo $full_job_level_select ;?>calendar_thursday<?php echo $hrManager_avail_thu->slot_2; ?>"  class="display_none_talent3" name="<?php echo $modal_hiring_area; ?>quick-thu-<?php echo $hrManager_avail_thu->slot_2; ?>" value="thu-<?php echo $hrManager_avail_thu->slot_2; ?>" type="checkbox" onclick="clickMe(this)" backround-attr="" meetup-attr="">
                                                            <label for="<?php echo $full_job_level_select ;?>calendar_thursday<?php echo $hrManager_avail_thu->slot_2; ?>"><?php echo $hrManager_avail_thu->slot_2; ?></label>
                                                        </li>
                                                        <li all-li-click="3">
                                                            <input id="<?php echo $full_job_level_select ;?>calendar_thursday<?php echo $hrManager_avail_thu->slot_3; ?>"  class="display_none_talent3" name="<?php echo $modal_hiring_area; ?>quick-thu-<?php echo $hrManager_avail_thu->slot_3; ?>" value="thu-<?php echo $hrManager_avail_thu->slot_3; ?>" type="checkbox" onclick="clickMe(this)" backround-attr="" meetup-attr="">
                                                            <label for="<?php echo $full_job_level_select ;?>calendar_thursday<?php echo $hrManager_avail_thu->slot_3; ?>"><?php echo $hrManager_avail_thu->slot_3; ?></label>
                                                        </li>
                                                        <li all-li-click="4">
                                                            <input id="<?php echo $full_job_level_select ;?>calendar_thursday<?php echo $hrManager_avail_thu->slot_4; ?>"  class="display_none_talent3" name="<?php echo $modal_hiring_area; ?>quick-thu-<?php echo $hrManager_avail_thu->slot_4; ?>" value="thu-<?php echo $hrManager_avail_thu->slot_4; ?>" type="checkbox" onclick="clickMe(this)" backround-attr="" meetup-attr="">
                                                            <label for="<?php echo $full_job_level_select ;?>calendar_thursday<?php echo $hrManager_avail_thu->slot_4; ?>"><?php echo $hrManager_avail_thu->slot_4; ?></label>
                                                        </li>
                                                        <li all-li-click="5">
                                                            <input id="<?php echo $full_job_level_select ;?>calendar_thursday<?php echo $hrManager_avail_thu->slot_5; ?>"  class="display_none_talent3" name="<?php echo $modal_hiring_area; ?>quick-thu-<?php echo $hrManager_avail_thu->slot_5; ?>" value="thu-<?php echo $hrManager_avail_thu->slot_5; ?>" type="checkbox" onclick="clickMe(this)" backround-attr="" meetup-attr="">
                                                            <label for="<?php echo $full_job_level_select ;?>calendar_thursday<?php echo $hrManager_avail_thu->slot_5; ?>"><?php echo $hrManager_avail_thu->slot_5; ?></label>
                                                        </li>
                                                        <li all-li-click="6">
                                                            <input id="<?php echo $full_job_level_select ;?>calendar_thursday<?php echo $hrManager_avail_thu->slot_6; ?>"  class="display_none_talent3" name="<?php echo $modal_hiring_area; ?>quick-thu-<?php echo $hrManager_avail_thu->slot_6; ?>" value="thu-<?php echo $hrManager_avail_thu->slot_6; ?>" type="checkbox" onclick="clickMe(this)" backround-attr="" meetup-attr="">
                                                            <label for="<?php echo $full_job_level_select ;?>calendar_thursday<?php echo $hrManager_avail_thu->slot_6; ?>"><?php echo $hrManager_avail_thu->slot_6; ?></label>
                                                        </li>
                                                    </ul>

                                                    <div class="clearfix"></div>
                                                    <?php
                                                        }
                                                    ?>
                                                </div>
                                                <!-- select hiring manager availability thursday slot ends  -->
                                                <!-- select hiring manager availability friday slot starts  -->
                                                <div class="tab-pane fade in" id="date_time_pop_<?php echo $quick_hiring_manager_availability; ?>_6">
                                                   <?php
                                                        foreach ($hiring_manager_availability_calendar as $hrManager_avail_fri) 
                                                        {
                                                    ?>
                                                    <ul class="today_time" all-click="<?php echo $hrManager_avail_fri->ul_id; ?>">
                                                        <li all-li-click="1">
                                                            <input id="<?php echo $full_job_level_select ;?>calendar_friday<?php echo $hrManager_avail_fri->slot_1; ?>"  class="display_none_talent3" name="<?php echo $modal_hiring_area; ?>quick-fri-<?php echo $hrManager_avail_fri->slot_1; ?>" value="fri-<?php echo $hrManager_avail_fri->slot_1; ?>" type="checkbox" onclick="clickMe(this)" backround-attr="" meetup-attr="">
                                                            <label for="<?php echo $full_job_level_select ;?>calendar_friday<?php echo $hrManager_avail_fri->slot_1; ?>"><?php echo $hrManager_avail_fri->slot_1; ?></label>
                                                        </li>
                                                        <li all-li-click="2">
                                                            <input id="<?php echo $full_job_level_select ;?>calendar_friday<?php echo $hrManager_avail_fri->slot_2; ?>"  class="display_none_talent3" name="<?php echo $modal_hiring_area; ?>quick-fri-<?php echo $hrManager_avail_fri->slot_2; ?>" value="fri-<?php echo $hrManager_avail_fri->slot_2; ?>" type="checkbox" onclick="clickMe(this)" backround-attr="" meetup-attr="">
                                                            <label for="<?php echo $full_job_level_select ;?>calendar_friday<?php echo $hrManager_avail_fri->slot_2; ?>"><?php echo $hrManager_avail_fri->slot_2; ?></label>
                                                        </li>
                                                        <li all-li-click="3">
                                                            <input id="<?php echo $full_job_level_select ;?>calendar_friday<?php echo $hrManager_avail_fri->slot_3; ?>"  class="display_none_talent3" name="<?php echo $modal_hiring_area; ?>quick-fri-<?php echo $hrManager_avail_fri->slot_3; ?>" value="fri-<?php echo $hrManager_avail_fri->slot_3; ?>" type="checkbox" onclick="clickMe(this)" backround-attr="" meetup-attr="">
                                                            <label for="<?php echo $full_job_level_select ;?>calendar_friday<?php echo $hrManager_avail_fri->slot_3; ?>"><?php echo $hrManager_avail_fri->slot_3; ?></label>
                                                        </li>
                                                        <li all-li-click="4">
                                                            <input id="<?php echo $full_job_level_select ;?>calendar_friday<?php echo $hrManager_avail_fri->slot_4; ?>"  class="display_none_talent3" name="<?php echo $modal_hiring_area; ?>quick-fri-<?php echo $hrManager_avail_fri->slot_4; ?>" value="fri-<?php echo $hrManager_avail_fri->slot_4; ?>" type="checkbox" onclick="clickMe(this)" backround-attr="" meetup-attr="">
                                                            <label for="<?php echo $full_job_level_select ;?>calendar_friday<?php echo $hrManager_avail_fri->slot_4; ?>"><?php echo $hrManager_avail_fri->slot_4; ?></label>
                                                        </li>
                                                        <li all-li-click="5">
                                                            <input id="<?php echo $full_job_level_select ;?>calendar_friday<?php echo $hrManager_avail_fri->slot_5; ?>"  class="display_none_talent3" name="<?php echo $modal_hiring_area; ?>quick-fri-<?php echo $hrManager_avail_fri->slot_5; ?>" value="fri-<?php echo $hrManager_avail_fri->slot_5; ?>" type="checkbox" onclick="clickMe(this)" backround-attr="" meetup-attr="">
                                                            <label for="<?php echo $full_job_level_select ;?>calendar_friday<?php echo $hrManager_avail_fri->slot_5; ?>"><?php echo $hrManager_avail_fri->slot_5; ?></label>
                                                        </li>
                                                        <li all-li-click="6">
                                                            <input id="<?php echo $full_job_level_select ;?>calendar_friday<?php echo $hrManager_avail_fri->slot_6; ?>"  class="display_none_talent3" name="<?php echo $modal_hiring_area; ?>quick-fri-<?php echo $hrManager_avail_fri->slot_6; ?>" value="fri-<?php echo $hrManager_avail_fri->slot_6; ?>" type="checkbox" onclick="clickMe(this)" backround-attr="" meetup-attr="">
                                                            <label for="<?php echo $full_job_level_select ;?>calendar_friday<?php echo $hrManager_avail_fri->slot_6; ?>"><?php echo $hrManager_avail_fri->slot_6; ?></label>
                                                        </li>
                                                    </ul>

                                                    <div class="clearfix"></div>
                                                    <?php
                                                        }
                                                    ?>
                                                </div>
                                                <!-- select hiring manager availability friday slot ends  -->
                                            </div>

                                        </div>

                                    </div>

                                </td>

                            </tr>

                            <tr class="pdg_talent_sub_left">
                                <td colspan="4" class="pdg_talent_sub_left" style="border: none; height:90px !important; padding-top:20px !important; text-align:center !important;">
                                    <!-- <button type="button" class="btn btn-info btn-lg btn_quick_popup">Open Job</button> -->
                                    <!-- <button type="button" class="btn btn-info btn-lg btn_request btn_quick_popup">Request information</button> -->
                                    <!-- <button type="button" class="btn btn-info btn-lg btn_request btn_quick_popup">Send to agency</button> -->
                                    <button type="submit" class="btn btn-info btn-lg btn_request btn_quick_popup" id="quick_job_request_btn">Save</button>
                                </td>
                                <td style="border: none;"></td>
                            </tr>
                        </tbody>
                    </table>
                    </form>
                </div>
            </div>
                

                <!-- Quick_Job_Mobile mobile -->
				<div class="col-sm-12" style="padding: 0px 10px;">	
                <div class="panel-group wrap ntj_qj_div_jb_pop_mb" id="bs-collapse">
                    <div class="panel">
                        <div class="panel-heading">
                            <a data-toggle="collapse" href="#request_pop_1_desk">
                                <h4 class="panel-title">Client or business area <i class="fa fa-angle-down" aria-hidden="true"></i></h4>
                            </a>
                        </div>
                        <div id="request_pop_1_desk" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <select class="active_select cl_bs_area_jb_pop_mb" txt-attr="Business area - ">
                                    <option value="">Select</option>
                                    <option value="new">New</option>
                                    <option value="1">Business area</option>
                                    <option value="2">Business area 1</option>
                                    <option value="3">Business area 2</option>
                                    <option value="4">Business area 3</option>
                                </select>
                                <div class="clear5"></div>
                                <input name="" type="text" class="cl_bs_area_input_jb_pop_mb" style="display:none" placeholder="Name" />
                                <div class="clear5"></div>

                                <input name="" type="text" class="cl_bs_area_input_jb_pop_mb" style="display:none" placeholder="Role approver email - If required" />

                            </div>
                        </div>
                    </div>
                    <!-- end of panel_1 -->

                    <div class="panel" id="hiring_input_css">
                        <div class="panel-heading">
                            <a data-toggle="collapse" href="#request_pop_full01_desk">
                                <h4 class="panel-title">Hiring manager <i class="fa fa-angle-down" aria-hidden="true"></i></h4>
                            </a>
                        </div>
                        <div id="request_pop_full01_desk" class="panel-collapse collapse">
                            <div class="panel-body hm_new_client_jb_pop_mb" style="display:none">
                                <input name="" type="text" placeholder="Name" />
                                <div class="clear5"></div>
                                <input name="" type="email" placeholder="Email" />
                                <div class="clear5"></div>
                                <input name="" class="qj_jb_title_jb_pop_mb" type="text" placeholder="Job Title" />
                            </div>
                            <div class="clear5"></div>
                            <select class="active_select hm_bs_area_jb_pop_mb" style="display:none" txt-attr="Hiring manager - ">
                                <option value="">Select</option>
                                <option value="new">New</option>
                                <option value="1">Hiring manager</option>
                                <option value="2">Hiring manager 1</option>
                                <option value="3">Hiring manager 2</option>
                                <option value="4">Hiring manager 3</option>
                            </select>
                            <div class="clear5"></div>
                            <input name="" type="text" class="hm_new_input_jb_pop_mb" style="display:none" placeholder="Name" />
                            <div class="clear5"></div>
                            <input name="" class="hm_new_input_jb_pop_mb" type="email" placeholder="Email" />
                            <div class="clear5"></div>
                            <input name="" class="hm_new_input_jb_pop_mb" type="text" placeholder="Title" />
                        </div>
                    </div>
                    <!-- end of panel_2 -->

                    <div class="panel">
                        <div class="panel-heading">
                            <a data-toggle="collapse" href="#role_popup_desk">
                                <h4 class="panel-title">Role details <i class="fa fa-angle-down" aria-hidden="true"></i></h4>
                            </a>
                        </div>
                        <div id="role_popup_desk" class="panel-collapse collapse">
                            <div class="panel-body">
                                <select class="active_select" txt-attr="Job field - ">
                                    <option value="">Job field</option>
                                    <option value="1">Accounting</option>
                                    <option value="1">Administration & office support</option>
                                    <option value="1">Banking</option>
                                    <option value="1">Communications</option>
                                    <option value="1">Construction</option>
                                    <option value="1">Data & analytics</option>
                                    <option value="1">Digital</option>
                                    <option value="1">Engineering</option>
                                    <option value="1">Farming & agriculture</option>
                                    <option value="1">Finance</option>
                                    <option value="1">Human resources</option>
                                    <option value="1">Healthcare & medical</option>
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
                                <div class="clear5"></div>
                                <input name="" type="text" placeholder="Title">

                                <!--<select class="active_select lvel_led_jb_pop_mb">-->
                                <select class="active_select lvel_led_jb_pop_mb" txt-attr="Level - ">
                                    <option value="">Level</option>
                                    <option value="leader of leaders">Leader of leaders</option>
                                    <option value="leader of professional">Leader of professionals</option>
                                    <option value="individual prefossional">Individual professional</option>
                                </select>


                                <div class="clear5"></div>

                                <select class="test1 quick_cities_multiple" multiple="multiple">
                                    <option value="0">Auckland</option>
                                    <option value="1">Hamilton</option>
                                    <option value="2">Wellington</option>
                                    <option value="3">Christchurch</option>
                                    <option value="4">Regional</option>
                                    <option value="5">Other city</option>
                                    <option value="6">Home</option>
                                </select>

                            </div>
                        </div>
                    </div>
                    <!-- end of panel_2 -->

                    <div class="panel">
                        <div class="panel-heading">
                            <a data-toggle="collapse" href="#hr_mange_time_popup_desk">
                                <h4 class="panel-title">Hiring manager availability <i class="fa fa-angle-down" aria-hidden="true"></i></h4>
                            </a>
                        </div>
                        <div id="hr_mange_time_popup_desk" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="panel with-nav-tabs panel-default">
                                    <div class="panel-heading">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a href="#time_talent_pop1" data-toggle="tab" aria-expanded="false">All</a></li>
                                            <li><a href="#time_talent_pop2" data-toggle="tab" aria-expanded="false">M</a></li>
                                            <li><a href="#time_talent_pop3" data-toggle="tab" aria-expanded="false">T</a></li>
                                            <li><a href="#time_talent_pop4" data-toggle="tab" aria-expanded="false">W</a></li>
                                            <li><a href="#time_talent_pop5" data-toggle="tab" aria-expanded="false">T</a></li>
                                            <li><a href="#time_talent_pop6" data-toggle="tab" aria-expanded="true">F</a></li>
                                        </ul>
                                    </div>

                                    <div class="panel-body">
                                        <div class="tab-content">
                                            <div class="tab-pane fade in active" id="time_talent_pop1">
                                                <ul class="today_time" all-click="1">
                                                    <li all-li-click="1">
                                                        <input id="full_like001_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="full_like001_desk">8:00</label>
                                                    </li>
                                                    <li all-li-click="2">
                                                        <input id="full_like002_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="full_like002_desk">8:30</label>
                                                    </li>

                                                    <li all-li-click="3">
                                                        <input id="full_like003_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="full_like003_desk">9:00</label>
                                                    </li>
                                                    <li all-li-click="4">
                                                        <input id="full_like004_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="full_like004_desk">9:30</label>
                                                    </li>
                                                    <li all-li-click="5">
                                                        <input id="full_like005_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="full_like005_desk">10:00</label>
                                                    </li>
                                                    <li all-li-click="6">
                                                        <input id="full_like006_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="full_like006_desk">10:30</label>
                                                    </li>
                                                </ul>
                                                <div class="clearfix"></div>
                                                <ul class="today_time" all-click="2">
                                                    <li all-li-click="1">
                                                        <input id="full_like007_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="full_like007_desk">11:00</label>
                                                    </li>
                                                    <li all-li-click="2">
                                                        <input id="full_like008_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="full_like008_desk">11:30</label>
                                                    </li>
                                                    <li all-li-click="3">
                                                        <input id="full_like009_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="full_like009_desk">12:00</label>
                                                    </li>
                                                    <li all-li-click="4">
                                                        <input id="full_like0010_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="full_like0010_desk">12:30</label>
                                                    </li>
                                                    <li all-li-click="5">
                                                        <input id="full_like0011_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="full_like0011_desk">13:00</label>
                                                    </li>
                                                    <li all-li-click="6">
                                                        <input id="full_like0012_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="full_like0012_desk">13:30</label>
                                                    </li>
                                                </ul>
                                                <div class="clearfix"></div>
                                                <ul class="today_time" all-click="3">
                                                    <li all-li-click="1">
                                                        <input id="full_like0013_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="full_like0013_desk">14:00</label>
                                                    </li>
                                                    <li all-li-click="2">
                                                        <input id="full_like0014_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="full_like0014_desk">14:30</label>
                                                    </li>
                                                    <li all-li-click="3">
                                                        <input id="full_like0015_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="full_like0015_desk">15:00</label>
                                                    </li>
                                                    <li all-li-click="4">
                                                        <input id="full_like0016_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="full_like0016_desk">15:30</label>
                                                    </li>
                                                    <li all-li-click="5">
                                                        <input id="full_like0017_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="full_like0017_desk">16:00</label>
                                                    </li>
                                                    <li all-li-click="6">
                                                        <input id="full_like0018_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="full_like0018_desk">16:30</label>
                                                    </li>
                                                </ul>
                                                <div class="clearfix"></div>
                                                <ul class="today_time" all-click="4">
                                                    <li all-li-click="1">
                                                        <input id="full_like0019_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="full_like0019_desk">17:00</label>
                                                    </li>
                                                    <li all-li-click="2">
                                                        <input id="full_like0020_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="full_like0020_desk">17:30</label>
                                                    </li>
                                                    <li all-li-click="3">
                                                        <input id="full_like0021_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="full_like0021_desk">18:00</label>
                                                    </li>
                                                    <li all-li-click="4">
                                                        <input id="full_like0022_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="full_like0022_desk">18:30</label>
                                                    </li>
                                                    <li all-li-click="5">
                                                        <input id="full_like0023_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="full_like0023_desk">19:00</label>
                                                    </li>
                                                    <li all-li-click="6">
                                                        <input id="full_like0024_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="full_like0024_desk">19:30</label>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="tab-pane fade" id="time_talent_pop2">
                                                <ul class="today_time" all-click="1">
                                                    <li all-li-click="1">
                                                        <input id="full_intro001_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="full_intro001_desk">8:00</label>
                                                    </li>
                                                    <li all-li-click="2">
                                                        <input id="full_intro002_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="full_intro002_desk">8:30</label>
                                                    </li>
                                                    <li all-li-click="3">
                                                        <input id="full_intro003_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="full_intro003_desk">9:00</label>
                                                    </li>
                                                    <li all-li-click="4">
                                                        <input id="full_intro004_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="full_intro004_desk">9:30</label>
                                                    </li>
                                                    <li all-li-click="5">
                                                        <input id="full_intro005_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="full_intro005_desk">10:00</label>
                                                    </li>
                                                    <li all-li-click="6">
                                                        <input id="full_intro006_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="full_intro006_desk">10:30</label>
                                                    </li>
                                                </ul>
                                                <div class="clearfix"></div>
                                                <ul class="today_time" all-click="2">
                                                    <li all-li-click="1">
                                                        <input id="full_intro007_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="full_intro007_desk">11:00</label>
                                                    </li>
                                                    <li all-li-click="2">
                                                        <input id="full_intro008_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="full_intro008_desk">11:30</label>
                                                    </li>
                                                    <li all-li-click="3">
                                                        <input id="full_intro009_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="full_intro009_desk">12:00</label>
                                                    </li>
                                                    <li all-li-click="4">
                                                        <input id="full_intro0010_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="full_intro0010_desk">12:30</label>
                                                    </li>
                                                    <li all-li-click="5">
                                                        <input id="full_intro0011_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="full_intro0011_desk">13:00</label>
                                                    </li>
                                                    <li all-li-click="6">
                                                        <input id="full_intro0012_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="full_intro0012_desk">13:30</label>
                                                    </li>
                                                </ul>
                                                <div class="clearfix"></div>
                                                <ul class="today_time" all-click="3">
                                                    <li all-li-click="1">
                                                        <input id="full_intro0013_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="full_intro0013_desk">14:00</label>
                                                    </li>
                                                    <li all-li-click="2">
                                                        <input id="full_intro0014_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="full_intro0014_desk">14:30</label>
                                                    </li>
                                                    <li all-li-click="3">
                                                        <input id="full_intro0015_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="full_intro0015_desk">15:00</label>
                                                    </li>
                                                    <li all-li-click="4">
                                                        <input id="full_intro0016_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="full_intro0016_desk">15:30</label>
                                                    </li>
                                                    <li all-li-click="5">
                                                        <input id="full_intro0017_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="full_intro0017_desk">16:00</label>
                                                    </li>
                                                    <li all-li-click="6">
                                                        <input id="full_intro0018_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="full_intro0018_desk">16:30</label>
                                                    </li>
                                                </ul>
                                                <div class="clearfix"></div>
                                                <ul class="today_time" all-click="4">
                                                    <li all-li-click="1">
                                                        <input id="full_intro0019_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="full_intro0019_desk">17:00</label>
                                                    </li>
                                                    <li all-li-click="2">
                                                        <input id="full_intro0020_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="full_intro0020_desk">17:30</label>
                                                    </li>
                                                    <li all-li-click="3">
                                                        <input id="full_intro0021_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="full_intro0021_desk">18:00</label>
                                                    </li>
                                                    <li all-li-click="4">
                                                        <input id="full_intro0022_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="full_intro0022_desk">18:30</label>
                                                    </li>
                                                    <li all-li-click="5">
                                                        <input id="full_intro0023_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="full_intro0023_desk">19:00</label>
                                                    </li>
                                                    <li all-li-click="6">
                                                        <input id="full_intro0024_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="full_intro0024_desk">19:30</label>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="tab-pane fade" id="time_talent_pop3">
                                                <ul class="today_time" all-click="1">
                                                    <li all-li-click="1">
                                                        <input id="meeting001_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="meeting001_desk">8:00</label>
                                                    </li>
                                                    <li all-li-click="2">
                                                        <input id="meeting002_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="meeting002_desk">8:30</label>
                                                    </li>
                                                    <li all-li-click="3">
                                                        <input id="meeting003_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="meeting003_desk">9:00</label>
                                                    </li>
                                                    <li all-li-click="4">
                                                        <input id="meeting004_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="meeting004_desk">9:30</label>
                                                    </li>
                                                    <li all-li-click="5">
                                                        <input id="meeting005_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="meeting005_desk">10:00</label>
                                                    </li>
                                                    <li all-li-click="6">
                                                        <input id="meeting006_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="meeting006_desk">10:30</label>
                                                    </li>
                                                </ul>
                                                <div class="clearfix"></div>
                                                <ul class="today_time" all-click="2">
                                                    <li all-li-click="1">
                                                        <input id="meeting007_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="meeting007_desk">11:00</label>
                                                    </li>
                                                    <li all-li-click="2">
                                                        <input id="meeting008_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="meeting008_desk">11:30</label>
                                                    </li>
                                                    <li all-li-click="3">
                                                        <input id="meeting009_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="meeting009_desk">12:00</label>
                                                    </li>
                                                    <li all-li-click="4">
                                                        <input id="meeting0010_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="meeting0010_desk">12:30</label>
                                                    </li>
                                                    <li all-li-click="5">
                                                        <input id="meeting0011_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="meeting0011_desk">13:00</label>
                                                    </li>
                                                    <li all-li-click="6">
                                                        <input id="meeting0012_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="meeting0012_desk">13:30</label>
                                                    </li>
                                                </ul>
                                                <div class="clearfix"></div>
                                                <ul class="today_time" all-click="3">
                                                    <li all-li-click="1">
                                                        <input id="meeting0013_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="meeting0013_desk">14:00</label>
                                                    </li>
                                                    <li all-li-click="2">
                                                        <input id="meeting0014_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="meeting0014_desk">14:30</label>
                                                    </li>
                                                    <li all-li-click="3">
                                                        <input id="meeting0015_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="meeting0015_desk">15:00</label>
                                                    </li>
                                                    <li all-li-click="4">
                                                        <input id="meeting0016_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="meeting0016_desk">15:30</label>
                                                    </li>
                                                    <li all-li-click="5">
                                                        <input id="meeting0017_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="meeting0017_desk">16:00</label>
                                                    </li>
                                                    <li all-li-click="6">
                                                        <input id="meeting0018_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="meeting0018_desk">16:30</label>
                                                    </li>
                                                </ul>
                                                <div class="clearfix"></div>
                                                <ul class="today_time" all-click="4">
                                                    <li all-li-click="1">
                                                        <input id="meeting0019_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="meeting0019_desk">17:00</label>
                                                    </li>
                                                    <li all-li-click="2">
                                                        <input id="meeting0020_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="meeting0020_desk">17:30</label>
                                                    </li>
                                                    <li all-li-click="3">
                                                        <input id="meeting0021_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="meeting0021_desk">18:00</label>
                                                    </li>
                                                    <li all-li-click="4">
                                                        <input id="meeting0022_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="meeting0022_desk">18:30</label>
                                                    </li>
                                                    <li all-li-click="5">
                                                        <input id="meeting0023_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="meeting0023_desk">19:00</label>
                                                    </li>
                                                    <li all-li-click="6">
                                                        <input id="meeting0024_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="meeting0024_desk">19:30</label>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="tab-pane fade" id="time_talent_pop4">

                                                <ul class="today_time" all-click="1">
                                                    <li all-li-click="1">
                                                        <input id="call001_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="call001_desk">8:00</label>
                                                    </li>
                                                    <li all-li-click="2">
                                                        <input id="call002_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="call002_desk">8:30</label>
                                                    </li>

                                                    <li all-li-click="3">
                                                        <input id="call003_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="call003_desk">9:00</label>
                                                    </li>

                                                    <li all-li-click="4">
                                                        <input id="call004_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="call004_desk">9:30</label>
                                                    </li>

                                                    <li all-li-click="5">
                                                        <input id="call005_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="call005_desk">10:00</label>
                                                    </li>

                                                    <li all-li-click="6">
                                                        <input id="call006_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="call006_desk">10:30</label>
                                                    </li>
                                                </ul>

                                                <div class="clearfix"></div>

                                                <ul class="today_time" all-click="2">
                                                    <li all-li-click="1">
                                                        <input id="call007_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="call007_desk">11:00</label>
                                                    </li>

                                                    <li all-li-click="2">
                                                        <input id="call008_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="call008_desk">11:30</label>
                                                    </li>

                                                    <li all-li-click="3">
                                                        <input id="call009_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="call009_desk">12:00</label>
                                                    </li>

                                                    <li all-li-click="4">
                                                        <input id="call0010_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="call0010_desk">12:30</label>
                                                    </li>

                                                    <li all-li-click="5">
                                                        <input id="call0011_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="call0011_desk">13:00</label>
                                                    </li>

                                                    <li all-li-click="6">
                                                        <input id="call0012_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="call0012_desk">13:30</label>
                                                    </li>
                                                </ul>

                                                <div class="clearfix"></div>
                                                <ul class="today_time" all-click="3">
                                                    <li all-li-click="1">
                                                        <input id="call0013_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="call0013_desk">14:00</label>
                                                    </li>

                                                    <li all-li-click="2">
                                                        <input id="call0014_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="call0014_desk">14:30</label>
                                                    </li>

                                                    <li all-li-click="3">
                                                        <input id="call0015_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

                                                        <label for="call0015_desk">15:00</label>
                                                    </li>

                                                    <li all-li-click="4">
                                                        <input id="call0016_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

                                                        <label for="call0016_desk">15:30</label>
                                                    </li>

                                                    <li all-li-click="5">
                                                        <input id="call0017_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="call0017_desk">16:00</label>
                                                    </li>

                                                    <li all-li-click="6">
                                                        <input id="call0018_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="call0018_desk">16:30</label>
                                                    </li>
                                                </ul>

                                                <div class="clearfix"></div>

                                                <ul class="today_time" all-click="4">
                                                    <li all-li-click="1">
                                                        <input id="call0019_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="call0019_desk">17:00</label>
                                                    </li>

                                                    <li all-li-click="2">
                                                        <input id="call0020_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="call0020_desk">17:30</label>
                                                    </li>

                                                    <li all-li-click="3">
                                                        <input id="call0021_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="call0021_desk">18:00</label>
                                                    </li>

                                                    <li all-li-click="4">
                                                        <input id="call0022_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="call0022_desk">18:30</label>
                                                    </li>

                                                    <li all-li-click="5">
                                                        <input id="call0023_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="call0023_desk">19:00</label>
                                                    </li>

                                                    <li all-li-click="6">
                                                        <input id="call0024_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="call0024_desk">19:30</label>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="tab-pane fade" id="time_talent_pop5">
                                                <ul class="today_time" all-click="1">
                                                    <li all-li-click="1">
                                                        <input id="friday001_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="friday001_desk">8:00</label>
                                                    </li>

                                                    <li all-li-click="2">
                                                        <input id="friday002_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="friday002_desk">8:30</label>
                                                    </li>

                                                    <li all-li-click="3">
                                                        <input id="friday003_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="friday003_desk">9:00</label>
                                                    </li>

                                                    <li all-li-click="4">
                                                        <input id="friday004_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="friday004_desk">9:30</label>
                                                    </li>

                                                    <li all-li-click="5">
                                                        <input id="friday005_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="friday005_desk">10:00</label>
                                                    </li>

                                                    <li all-li-click="6">
                                                        <input id="friday006_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="friday006_desk">10:30</label>
                                                    </li>
                                                </ul>

                                                <div class="clearfix"></div>

                                                <ul class="today_time" all-click="2">
                                                    <li all-li-click="1">
                                                        <input id="friday007_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="friday007_desk">11:00</label>
                                                    </li>

                                                    <li all-li-click="2">
                                                        <input id="friday008_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="friday008_desk">11:30</label>
                                                    </li>

                                                    <li all-li-click="3">
                                                        <input id="friday009_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="friday009_desk">12:00</label>
                                                    </li>

                                                    <li all-li-click="4">
                                                        <input id="friday0010_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="friday0010_desk">12:30</label>
                                                    </li>

                                                    <li all-li-click="5">
                                                        <input id="friday0011_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="friday0011_desk">13:00</label>
                                                    </li>

                                                    <li all-li-click="6">
                                                        <input id="friday0012_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="friday0012_desk">13:30</label>
                                                    </li>

                                                </ul>

                                                <div class="clearfix"></div>

                                                <ul class="today_time" all-click="3">
                                                    <li all-li-click="1">
                                                        <input id="friday0013_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="friday0013_desk">14:00</label>
                                                    </li>

                                                    <li all-li-click="2">
                                                        <input id="friday0014_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="friday0014_desk">14:30</label>
                                                    </li>

                                                    <li all-li-click="3">
                                                        <input id="friday0015_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="friday0015_desk">15:00</label>
                                                    </li>

                                                    <li all-li-click="4">
                                                        <input id="friday0016_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="friday0016_desk">15:30</label>
                                                    </li>

                                                    <li all-li-click="5">
                                                        <input id="friday0017_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="friday0017_desk">16:00</label>
                                                    </li>

                                                    <li all-li-click="6">
                                                        <input id="friday0018_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="friday0018_desk">16:30</label>
                                                    </li>
                                                </ul>

                                                <div class="clearfix"></div>

                                                <ul class="today_time" all-click="4">
                                                    <li all-li-click="1">
                                                        <input id="friday0019_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="friday0019_desk">17:00</label>
                                                    </li>

                                                    <li all-li-click="2">
                                                        <input id="friday0020_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="friday0020_desk">17:30</label>
                                                    </li>

                                                    <li all-li-click="3">
                                                        <input id="friday0021_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="friday0021_desk">18:00</label>
                                                    </li>

                                                    <li all-li-click="4">
                                                        <input id="friday0022_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="friday0022_desk">18:30</label>
                                                    </li>

                                                    <li all-li-click="5">
                                                        <input id="friday0023_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="friday0023_desk">19:00</label>
                                                    </li>

                                                    <li all-li-click="6">
                                                        <input id="friday0024_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="friday0024_desk">19:30</label>
                                                    </li>
                                                </ul>

                                            </div>

                                            <div class="tab-pane fade" id="time_talent_pop6">
                                                <ul class="today_time" all-click="1">
                                                    <li all-li-click="1">
                                                        <input id="friday001_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="friday001_desk">8:00</label>
                                                    </li>

                                                    <li all-li-click="2">
                                                        <input id="friday002_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="friday002_desk">8:30</label>
                                                    </li>

                                                    <li all-li-click="3">
                                                        <input id="friday003_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="friday003_desk">9:00</label>
                                                    </li>

                                                    <li all-li-click="4">
                                                        <input id="friday004_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="friday004_desk">9:30</label>
                                                    </li>

                                                    <li all-li-click="5">
                                                        <input id="friday005_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="friday005_desk">10:00</label>
                                                    </li>

                                                    <li all-li-click="6">
                                                        <input id="friday006_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="friday006_desk">10:30</label>
                                                    </li>
                                                </ul>

                                                <div class="clearfix"></div>

                                                <ul class="today_time" all-click="2">
                                                    <li all-li-click="1">
                                                        <input id="friday007_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="friday007_desk">11:00</label>
                                                    </li>

                                                    <li all-li-click="2">
                                                        <input id="friday008_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="friday008_desk">11:30</label>
                                                    </li>

                                                    <li all-li-click="3">
                                                        <input id="friday009_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="friday009_desk">12:00</label>
                                                    </li>

                                                    <li all-li-click="4">
                                                        <input id="friday0010_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="friday0010_desk">12:30</label>
                                                    </li>

                                                    <li all-li-click="5">
                                                        <input id="friday0011_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="friday0011_desk">13:00</label>
                                                    </li>

                                                    <li all-li-click="6">
                                                        <input id="friday0012_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="friday0012_desk">13:30</label>
                                                    </li>

                                                </ul>

                                                <div class="clearfix"></div>

                                                <ul class="today_time" all-click="3">
                                                    <li all-li-click="1">
                                                        <input id="friday0013_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="friday0013_desk">14:00</label>
                                                    </li>

                                                    <li all-li-click="2">
                                                        <input id="friday0014_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="friday0014_desk">14:30</label>
                                                    </li>

                                                    <li all-li-click="3">
                                                        <input id="friday0015_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="friday0015_desk">15:00</label>
                                                    </li>

                                                    <li all-li-click="4">
                                                        <input id="friday0016_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="friday0016_desk">15:30</label>
                                                    </li>

                                                    <li all-li-click="5">
                                                        <input id="friday0017_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="friday0017_desk">16:00</label>
                                                    </li>

                                                    <li all-li-click="6">
                                                        <input id="friday0018_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="friday0018_desk">16:30</label>
                                                    </li>
                                                </ul>

                                                <div class="clearfix"></div>

                                                <ul class="today_time" all-click="4">
                                                    <li all-li-click="1">
                                                        <input id="friday0019_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="friday0019_desk">17:00</label>
                                                    </li>

                                                    <li all-li-click="2">
                                                        <input id="friday0020_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="friday0020_desk">17:30</label>
                                                    </li>

                                                    <li all-li-click="3">
                                                        <input id="friday0021_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="friday0021_desk">18:00</label>
                                                    </li>

                                                    <li all-li-click="4">
                                                        <input id="friday0022_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="friday0022_desk">18:30</label>
                                                    </li>

                                                    <li all-li-click="5">
                                                        <input id="friday0023_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="friday0023_desk">19:00</label>
                                                    </li>

                                                    <li all-li-click="6">
                                                        <input id="friday0024_desk" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                        <label for="friday0024_desk">19:30</label>
                                                    </li>
                                                </ul>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end of panel_6 -->
                    <div class="clear40"></div>
                    <button type="button" class="btn btn-info btn-lg btn_quick_mobile">Open Job</button>
                    <button type="button" class="btn btn-info btn-lg btn_request btn_quick_mobile">Request information</button>
                    <button type="button" class="btn btn-info btn-lg btn_request btn_quick_mobile">Send to agency</button>
                    <button type="button" class="btn btn-info btn-lg btn_request btn_quick_mobile">Save</button>
                </div>

				</div>
            </div>

            <div class="tab-pane fade" id="tab2default_desk_version<?php echo $full_job_tab;?>">
                <div class="col-sm-12" >
                    <div class="desktop_tbl_display dsk_tbl_dsply" id="fs_width_tablet">
                        <table class="table table-bordered table-hover table_new_talent" id="button_checked" style="background:#fff;">
                            <style>
                                #button_checked input {
                                    display: block;
                                }
                                
                                .pdg_talent_sub_left {
                                    padding-left: 0px !important;
                                }
                            </style>

                            <!-- Harry -->

                            <!-- Harry -->
                            <form method="post" id="talent_request_form_<?php echo $full_job_level_select; ?>" enctype="multipart/form-data">
                            <thead>
                            	<input type="hidden" name="full_talent_request_action" id="full_talent_request_action" value="submitTalentRequest">
                                   <tr id="current_status_tr_color">
                                        <th width="27%"></th>
                                        <th width="25%">
                                            <center>
                                                <div class="dropdown__select<?php echo $dropDown_3;?>" id="full_client_business_area<?php echo $form_fields_class; ?>">
                                                    <span class="caret"></span>
                                                    <label class="dropdown__label">Client or Business Area</label>
                                                    <input type="hidden" name="clientBusiness<?php echo $form_fields_class; ?>" id="clientBusiness<?php echo $form_fields_class; ?>">
                                                    <div class="dropdown__content" id="append_full_client_business_area<?php echo $form_fields_class; ?>">
                                                                
                                                    </div>
                                                </div>
                                            </center>
                                        </th>
                                        <th width="25%">
                                            <center>
                                                <div class="dropdown__select<?php echo $dropDown_4;?>" id="Hiring_Managers<?php echo $form_fields_class; ?>">
                                                    <span class="caret"></span>
                                                        <label class="dropdown__label">Hiring Manager</label>
                                                        <input type="hidden" name="hiringManager<?php echo $form_fields_class; ?>" id="hiringManager<?php echo $form_fields_class; ?>">
                                                        <div class="dropdown__content" id="append_full_hiring_mangers<?php echo $form_fields_class; ?>">
                                                            
                                                        </div>
                                                    </div>
                                            <center>
                                        </th>
                                        <th width="23%"></th>
                                    </tr>
                            </thead>

                            <tbody>
                                <tr class="portion_heading">
                                    <td colspan="4">
                                        <center>
                                            <label>Role details</label>
                                        </center>
                                    </td>
                                </tr>

                                <tr class="job">
                                    <td class="td_1_green_label">
                                        <input id="proof010_<?php echo $full_job_select;?>" type="checkbox" class="display_none_talent3">
                                        <label for="proof010_<?php echo $full_job_select;?>">Job</label>
                                    </td>

                                    <td valign="middle" class="green_hover">

                                        <select class="active_select role_detail_banking" id="jobField<?php echo $form_fields_class; ?>" name="jobField<?php echo $form_fields_class; ?>" txt-attr="Job field - ">
                                            <option value="">Job field</option>
                                            <?php
                                            rsort($jobfields);
                                             foreach ($jobfields as $jobfield) { ?>
                                            <option value="<?php echo $jobfield['value_id']; ?>"><?php echo $jobfield['value_name']; ?></option>
                                        <?php } ?>
                                        </select>
                                    </td>

                                    <td valign="middle">
                                        <input name="jobTitle<?php echo $form_fields_class; ?>" id="jobTitle<?php echo $form_fields_class; ?>" type="text" placeholder="Title" class="green_hover_input">
                                    </td>

                                    <td valign="middle" class="green_hover">
                                        <select name="jobLocation" id="jobLocation<?php echo $form_fields_class; ?>" required class="test1 job_details_multiple" multiple>
                                            <option value="">Location</option>
                                        <?php rsort($joblocations); foreach ($joblocations as $joblocation) { ?>
                                        <option value="<?php echo $joblocation['value_id']; ?>"><?php echo $joblocation['value_name']; ?></option>
                                        <?php } ?>
                                        </select>
                                    </td>
                                </tr>

                                <tr class="level">
                                    <td class="td_1_green_label">
                                        <input id="proof0110_<?php echo $full_job_level_select; ?>" type="checkbox" class="display_none_talent3">
                                        <label for="proof0110_<?php echo $full_job_level_select; ?>">Level</label>
                                    </td>

                                    <td valign="middle" class="green_hover">
                                        <input id="ntj_leader_of_leader_<?php echo $full_job_level_select; ?>" value="Leader of leaders" name="jobLevel" class="display_none_talent3" type="checkbox"></input>
                                        <label for="ntj_leader_of_leader_<?php echo $full_job_level_select; ?>">Leader of leaders</label>
                                    </td>

                                    <td valign="middle" class="green_hover">
                                        <input id="ntj_leader_of_professional_<?php echo $full_job_level_select; ?>" value="Leader of professionals" name="jobLevel" class="display_none_talent3" type="checkbox"></input>
                                        <label for="ntj_leader_of_professional_<?php echo $full_job_level_select; ?>">Leader of professionals</label>
                                    </td>
                                    <td valign="middle" class="green_hover">
                                        <input id="ntj_individual_prefossional_page_desk_<?php echo $full_job_level_select; ?>" name="jobLevel" value="Individual professional" class="display_none_talent3" type="checkbox">
                                        <label for="ntj_individual_prefossional_page_desk_<?php echo $full_job_level_select; ?>">Individual professional</label>
                                    </td>
                                </tr>

                                <tr class="adiv_level_page_pop_<?php echo $full_job_level_select; ?>" style="display: table-row;">
                                    <td class="td_1_green_label">
                                        <input id="team_new_talent_<?php echo $full_job_level_select; ?>" type="checkbox" class="display_none_talent3">
                                        <label for="team_new_talent_<?php echo $full_job_level_select; ?>">Team</label>
                                    </td>

                                    <td class="green_hover">
                                        <select class="active_select ntj_direct_report_<?php echo $full_job_level_select; ?>" name="teamDirectReport<?php echo $form_fields_class; ?>" id="teamDirectReport<?php echo $form_fields_class; ?>" txt-attr="Direct reports - ">
                                            <option value="">Direct reports</option>
                                            <?php foreach ($direct_reports as $direct_reports) { ?>
                                                <option value="<?php echo $direct_reports['value_id']; ?>"><?php 
                                                $number = number_format($direct_reports['value_name']); 
                                                echo $number; ?></option>

                                            <?php } ?>
                                        </select>
                                    </td>
                                    <td valign="middle" class="green_hover">
                                        <select name="totalTeamFunctions<?php echo $form_fields_class; ?>" id="totalTeamFunctions<?php echo $form_fields_class; ?>" class="active_select ntj_size_total_func_<?php echo $full_job_level_select; ?>" txt-attr="Total size of function - ">
                                            <option value="">Total size of function</option>
                                            <?php foreach ($total_size_of_functions as $total_size_of_functions) { ?>
                                                <option value="<?php echo $total_size_of_functions['value_id']; ?>">
                                                    <?php 
                                                echo $total_size_of_functions['value_name']; 
                                                  ?></option>

                                            <?php } ?>
                                        </select>
                                    </td>
                                </tr>

                                <tr class="contract">
                                    <td class="td_1_green_label">
                                        <input id="proof0120_<?php echo $full_job_level_select ;?>" name="contractType" type="checkbox" class="display_none_talent3">
                                        <label for="proof0120_<?php echo $full_job_level_select ;?>">Contract type</label>
                                    </td>

                                    <td valign="middle" class="green_hover">
                                        <input id="perm_<?php echo $full_job_level_select ;?>" name="contractType" value="Permanent" class="display_none_talent3" type="checkbox"></input>
                                        <label for="perm_<?php echo $full_job_level_select ;?>">Permanent</label>
                                    </td>

                                    <td valign="middle" class="green_hover">
                                        <!--fixed-term_talent_request-->
                                        <input id="ftc_<?php echo $full_job_level_select ;?>" name="contractType" value="Fixed-term" class="display_none_talent3" type="checkbox"></input>
                                        <label for="ftc_<?php echo $full_job_level_select ;?>">Fixed-term</label>
                                    </td>

                                    <td valign="middle" class="green_hover">
                                        <input id="contractor_page_desk_<?php echo $full_job_level_select ;?>" name="contractType" class="display_none_talent3" type="checkbox" value="Contractor">
                                        <label for="contractor_page_desk_<?php echo $full_job_level_select ;?>">Contractor</label>
                                    </td>
                                </tr>

                                <tr class="div_contr_mnth_ntj_<?php echo $full_job_level_select ;?> talent_request_length_months" style="display: table-row;">
                                    <td class="td_1_green_label">
                                        <input id="length_in_months_<?php echo $full_job_level_select ;?>" type="checkbox" class="display_none_talent3">
                                        <label for="length_in_months_<?php echo $full_job_level_select ;?>">Contract months</label>
                                    </td>
                                    <td colspan="3">
                                        <div class="panel with-nav-tabs panel-default">
                                            <div class="panel-heading">
                                                <ul class="nav nav-tabs" id="select_months_label">
                                                    <li>
                                                        <a href="#">
                                                            <input id="<?php echo $full_job_level_select ;?>_length_months_1" name="contractMonth" value="1" type="checkbox" class="display_none_talent3 contract_mnth_sel_one_ntj_<?php echo $full_job_level_select ;?>">
                                                            <label for="<?php echo $full_job_level_select ;?>_length_months_1">1</label>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <input id="<?php echo $full_job_level_select ;?>_length_months_2" name="contractMonth" value="2" type="checkbox" class="display_none_talent3 contract_mnth_sel_one_ntj_<?php echo $full_job_level_select ;?>">
                                                            <label for="<?php echo $full_job_level_select ;?>_length_months_2">2</label>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <input id="<?php echo $full_job_level_select ;?>_length_months_3" name="contractMonth" value="3" type="checkbox" class="display_none_talent3 contract_mnth_sel_one_ntj_<?php echo $full_job_level_select ;?>">
                                                            <label for="<?php echo $full_job_level_select ;?>_length_months_3">3</label>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <input id="<?php echo $full_job_level_select ;?>_length_months_4" name="contractMonth" value="4" type="checkbox" class="display_none_talent3 contract_mnth_sel_one_ntj_<?php echo $full_job_level_select ;?>">
                                                            <label for="<?php echo $full_job_level_select ;?>_length_months_4">4</label>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <input id="<?php echo $full_job_level_select ;?>_length_months_5" name="contractMonth" value="5" type="checkbox" class="display_none_talent3 contract_mnth_sel_one_ntj_<?php echo $full_job_level_select ;?>">
                                                            <label for="<?php echo $full_job_level_select ;?>_length_months_5">5</label>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <input id="<?php echo $full_job_level_select ;?>_length_months_6" name="contractMonth" value="6" type="checkbox" class="display_none_talent3 contract_mnth_sel_one_ntj_<?php echo $full_job_level_select ;?>">
                                                            <label for="<?php echo $full_job_level_select ;?>_length_months_6">6</label>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <input id="<?php echo $full_job_level_select ;?>_length_months_7" name="contractMonth" value="7" type="checkbox" class="display_none_talent3 contract_mnth_sel_one_ntj_<?php echo $full_job_level_select ;?>">
                                                            <label for="<?php echo $full_job_level_select ;?>_length_months_7">7</label>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <input id="<?php echo $full_job_level_select ;?>_length_months_8" name="contractMonth" value="8" type="checkbox" class="display_none_talent3 contract_mnth_sel_one_ntj_<?php echo $full_job_level_select ;?>">
                                                            <label for="<?php echo $full_job_level_select ;?>_length_months_8">8</label>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <input id="<?php echo $full_job_level_select ;?>_length_months_9" name="contractMonth" value="9" type="checkbox" class="display_none_talent3 contract_mnth_sel_one_ntj_<?php echo $full_job_level_select ;?>">
                                                            <label for="<?php echo $full_job_level_select ;?>_length_months_9">9</label>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <input id="<?php echo $full_job_level_select ;?>_length_months_10" name="contractMonth" value="10" type="checkbox" class="display_none_talent3 contract_mnth_sel_one_ntj_<?php echo $full_job_level_select ;?>">
                                                            <label for="<?php echo $full_job_level_select ;?>_length_months_10">10</label>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <input id="<?php echo $full_job_level_select ;?>_length_months_11"name="contractMonth" value="11" type="checkbox" class="display_none_talent3 contract_mnth_sel_one_ntj_<?php echo $full_job_level_select ;?>">
                                                            <label for="<?php echo $full_job_level_select ;?>_length_months_11">11</label>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <input id="<?php echo $full_job_level_select ;?>_length_months_12" name="contractMonth" value="12" type="checkbox" class="display_none_talent3 contract_mnth_sel_one_ntj_<?php echo $full_job_level_select ;?>">
                                                            <label for="<?php echo $full_job_level_select ;?>_length_months_12">12</label>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr class="pay">
                                    <td class="td_1_green_label">
                                        <input id="proof0131_<?php echo $full_job_level_select ;?>" type="checkbox" class="display_none_talent3">
                                        <label for="proof0131_<?php echo $full_job_level_select ;?>">Pay</label>
                                    </td>

                                    <td valign="middle" class="green_hover">
                                        <select class="active_select drp_gray_clr_select active_annual" id="pay_frst_drp_<?php echo $full_job_level_select ;?>" name="payAmountAnnual" txt-attr="Pay annual - ">
                                            <option value="">Pay - annual</option>
                                            <?php foreach ($payannuals as $payannual) { ?>
                                                <option value="<?php echo $payannual['value_id']; ?>">$<?php 
                                                $number = number_format($payannual['value_name']); 
                                                echo $number; ?></option>

                                            <?php } ?>
                                        </select>

                                        <select name="payAmountDaily" class="active_select drp_gray_clr_select active_annual" id="pay_dialy_drp_des_ntj_<?php echo $full_job_level_select ;?>" txt-attr="Daily - ">
                                            <option value="">Daily</option>
                                            <?php foreach ($paydaily as $paydaily) { ?>
                                                <option value="<?php echo $paydaily['value_id']; ?>">$<?php 
                                                $number = number_format($paydaily['value_name']); 
                                                echo $number; ?></option>

                                            <?php } ?>
                                        </select>
                                    </td>

                                    <td valign="middle" class="green_hover">
                                        <input id="proof01031_<?php echo $full_job_level_select ;?>" type="checkbox" name="flexiableOnpay" value="true" class="display_none_talent3">
                                        <label for="proof01031_<?php echo $full_job_level_select ;?>">Flexible on pay</label>
                                    </td>

                                    <td valign="middle" class="green_hover">
                                        <select class="active_select" name="bonus" id="pay_bonus_percentage<?php echo $form_fields_class;?>" txt-attr="Bonus - ">
                                            <option value="">Bonus</option>
                                            <?php foreach ($bonus as $bonus) { ?>
                                            <option value="<?php echo $bonus['value_id']; ?>"><?php echo $bonus['value_name']; ?>%</option>
                                            <?php } ?>
                                        </select>
                                    </td>
                                </tr>

                                <tr class="hours_page">
                                    <td class="td_1_green_label">
                                        <input id="proof01200_<?php echo $full_job_level_select ;?>" type="checkbox" name="workType" class="display_none_talent3">
                                        <label for="proof01200_<?php echo $full_job_level_select ;?>">Hours</label>
                                    </td>

                                    <td valign="middle" id="reset" class="green_hover">
                                        <input id="perm0010_<?php echo $full_job_level_select ;?>" name="workType" value="full-time" class="display_none_talent3" type="checkbox">
                                        <label for="perm0010_<?php echo $full_job_level_select ;?>">Full time</label>
                                    </td>

                                    <td valign="middle" class="green_hover">
                                        <input id="part_time01_<?php echo $full_job_level_select ;?>" name="workType" value="part-time" class="display_none_talent3" type="checkbox">
                                        <label for="part_time01_<?php echo $full_job_level_select ;?>">Part time</label>
                                    </td>

                                    <td class="green_hover">
                                        <select class="active_select hrs_pr_week_page_<?php echo $full_job_level_select ;?>" name="workingHours" txt-attr="Select hours - " id="workingHours" style="display: none;">
                                            <option value="">Select hours</option>
                                            <?php foreach ($working_hour as $working_hour) { ?>
                                            <option value="<?php echo $working_hour['value_id']; ?>"><?php echo $working_hour['value_name']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </td>
                                </tr>

                                <tr id="talent_request_home_days"  class="div_hours_days_page_desk_ntj_<?php echo $full_job_level_select ;?>">
                                    <td class="td_1_green_label">
                                        <input id="select_any_days_007_<?php echo $full_job_level_select ;?>" name="workingDay" type="checkbox" class="display_none_talent3">
                                        <label for="select_any_days_007_<?php echo $full_job_level_select ;?>">Select days</label>
                                    </td>
                                    <td colspan="3">
                                        <div class="panel with-nav-tabs panel-default">
                                            <div class="panel-heading">
                                                <ul class="nav nav-tabs" id="select_days_label">
                                                    <li>
                                                        <a href="#">
                                                            <input id="select_any_days_desk_ntj_<?php echo $full_job_level_select ;?>" name="workingDaysall" value="any-day" type="checkbox" class="display_none_talent3">
                                                            <label for="select_any_days_desk_ntj_<?php echo $full_job_level_select ;?>">Any days</label>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <input id="select_any_days_2_desk_ntj_<?php echo $full_job_level_select ;?>" type="checkbox" name="workingDayMon" value="monday" class="display_none_talent3">
                                                            <label for="select_any_days_2_desk_ntj_<?php echo $full_job_level_select ;?>">Monday</label>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <input id="select_any_days_3_desk_ntj_<?php echo $full_job_level_select ;?>" name="workingDayTue" value="tuesday" type="checkbox" class="display_none_talent3">
                                                            <label for="select_any_days_3_desk_ntj_<?php echo $full_job_level_select ;?>">Tuesday</label>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <input id="select_any_days_4_desk_ntj_<?php echo $full_job_level_select ;?>" name="workingDayWed" value="wednesday" type="checkbox" class="display_none_talent3">
                                                            <label for="select_any_days_4_desk_ntj_<?php echo $full_job_level_select ;?>">Wednesday</label>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <input id="select_any_days_5_desk_ntj_<?php echo $full_job_level_select ;?>" type="checkbox" name="workingDaythu" value="thursday" class="display_none_talent3">
                                                            <label for="select_any_days_5_desk_ntj_<?php echo $full_job_level_select ;?>">Thursday</label>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <input id="select_any_days_6_desk_ntj_<?php echo $full_job_level_select ;?>" name="workingDayFri" value="friday" type="checkbox" class="display_none_talent3">
                                                            <label for="select_any_days_6_desk_ntj_<?php echo $full_job_level_select ;?>">Friday</label>
                                                        </a>
                                                    </li>
                                                </ul>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr class="specific_skills">
                                    <td class="td_1_green_label">
                                        <input id="objective_desktop_version_<?php echo $full_job_level_select ;?>" type="checkbox" class="display_none_talent3">
                                        <label for="objective_desktop_version_<?php echo $full_job_level_select ;?>">Objectives </label>
                                    </td>

                                    <td valign="middle">
                                        <input name="objective_1<?php echo $form_fields_class;?>" id="objective_1<?php echo $form_fields_class;?>" class="green_hover" type="text" placeholder="1">
                                    </td>

                                    <td valign="middle">
                                        <input name="objective_2<?php echo $form_fields_class;?>" id="objective_2<?php echo $form_fields_class;?>" class="green_hover" type="text" placeholder="2">
                                    </td>

                                    <td valign="middle">
                                        <input name="objective_3<?php echo $form_fields_class;?>" id="objective_3<?php echo $form_fields_class;?>" class="green_hover" type="text" placeholder="3">
                                    </td>
                                </tr>

                                <tr class="portion_heading">
                                    <td colspan="4">
                                        <center>
                                            <label>Talent requirements</label>
                                        </center>
                                    </td>
                                </tr>

                                <tr class="capability">
                                    <td class="td_1_green_label">
                                        <input id="proof1150_<?php echo $full_job_level_select ;?>" name="levelCapability" type="checkbox" class="display_none_talent3">
                                        <label for="proof1150_<?php echo $full_job_level_select ;?>">Level Capability</label>
                                    </td>

                                    <td valign="middle" class="green_hover">
                                        <input id="Top_talent_<?php echo $full_job_level_select ;?>" name="levelCapability" class="display_none_talent3" type="checkbox" value="top talent"></input>
                                        <label for="Top_talent_<?php echo $full_job_level_select ;?>" data-toggle="popover" data-trigger="hover" title="" data-placement="top" data-content="Top 10% of talent market at this level">Top talent
                                        </label>
                                    </td>

                                    <td valign="middle" class="green_hover">
                                        <input id="solid_performer_<?php echo $full_job_level_select ;?>" name="levelCapability" class="display_none_talent3" type="checkbox" value="solid performer"></input>
                                        <label for="solid_performer_<?php echo $full_job_level_select ;?>" data-toggle="popover" data-trigger="hover" title="" data-placement="top" data-content="Good performance & capability at this level">Solid performer</label>
                                    </td>

                                    <td valign="middle" class="green_hover">
                                        <input id="High_potential_<?php echo $full_job_level_select ;?>"  name="levelCapability" class="display_none_talent3" type="checkbox" value="High potential"></input>
                                        <label for="High_potential_<?php echo $full_job_level_select ;?>" data-toggle="popover" data-trigger="hover" title="" data-placement="top" data-content="Demonstrated potential who, with support will develop into this level">High potential</label>
                                    </td>
                                </tr>

                                <tr class="experience">
                                    <td class="td_1_green_label">
                                        <input id="proof1153_<?php echo $full_job_level_select ;?>" type="checkbox" name="experience" class="display_none_talent3">
                                        <label for="proof1153_<?php echo $full_job_level_select ;?>">Experience</label>
                                    </td>

                                    <td valign="middle" class="green_hover">
                                        <input id="like_<?php echo $full_job_level_select ;?>" class="display_none_talent3" name="experience" value="equivalent" type="checkbox"></input>
                                        <label for="like_<?php echo $full_job_level_select ;?>" data-toggle="popover" data-trigger="hover" title="" data-placement="top" data-content="Direct expeience in this role type">Equivalent</label>
                                    </td>

                                    <td valign="middle" class="green_hover">
                                        <input id="Transferrable_skills_<?php echo $full_job_level_select ;?>" name="experience" class="display_none_talent3" type="checkbox" value="Transferrable skills"></input>
                                        <label for="Transferrable_skills_<?php echo $full_job_level_select ;?>" data-toggle="popover" data-trigger="hover" title="" data-placement="top" data-content="Relevant experience but may bring diverse skills">Transferrable skills</label>
                                    </td>

                                    <td valign="middle" class="green_hover">
                                        <input id="Open_minded_<?php echo $full_job_level_select ;?>" name="experience" class="display_none_talent3" type="checkbox" value="open minded"></input>
                                        <label for="Open_minded_<?php echo $full_job_level_select ;?>" data-toggle="popover" data-trigger="hover" title="" data-placement="top" data-content="Introductions to different career paths where candidates have learning agility and a strong desire to move into this role">Open minded</label>
                                    </td>
                                </tr>

                                <tr class="successor-ready">
                                    <td class="td_1_green_label">
                                        <input id="proof1154_<?php echo $full_job_level_select ;?>" type="checkbox" name="successor_Ready" class="display_none_talent3">
                                        <label for="proof1154_<?php echo $full_job_level_select ;?>">Successor ready</label>
                                    </td>

                                    <td valign="middle" class="green_hover">
                                        <input id="Within_3_years_<?php echo $full_job_level_select ;?>" name="successor_Ready" class="display_none_talent3" type="checkbox" value="with in 3 years"></input>
                                        <label for="Within_3_years_<?php echo $full_job_level_select ;?>">Within 3 years </label>
                                    </td>

                                    <td valign="middle" class="green_hover">
                                        <input id="After_3_years_<?php echo $full_job_level_select ;?>" name="successor_Ready" class="display_none_talent3" type="checkbox" value="after 3 years"></input>
                                        <label for="After_3_years_<?php echo $full_job_level_select ;?>">After 3 years </label>
                                    </td>

                                    <td valign="middle" class="green_hover">
                                        <input id="No_requirement_<?php echo $full_job_level_select ;?>" name="successor_Ready" class="display_none_talent3" type="checkbox" value="no requirement"></input>
                                        <label for="No_requirement_<?php echo $full_job_level_select ;?>">No requirement </label>
                                    </td>
                                </tr>

                                <tr class="qualification">
                                    <td class="td_1_green_label">
                                        <input id="proof1155_<?php echo $full_job_level_select ;?>" type="checkbox" value="qualification" name="qualification" class="display_none_talent3">
                                        <label for="proof1155_<?php echo $full_job_level_select ;?>">Qualification</label>
                                    </td>

                                    <td valign="middle" class="green_hover">
                                        <input id="Required_<?php echo $full_job_level_select ;?>" name="qualification" class="display_none_talent3" type="checkbox" value="required"></input>
                                        <label for="Required_<?php echo $full_job_level_select ;?>">Required </label>
                                    </td>

                                    <td valign="middle" class="green_hover">
                                        <input id="Preferred_<?php echo $full_job_level_select ;?>" name="qualification" class="display_none_talent3" type="checkbox" value="preferred"></input>
                                        <label for="Preferred_<?php echo $full_job_level_select ;?>">Preferred </label>
                                    </td>

                                    <td valign="middle" class="green_hover">
                                        <input id="No_requirement2_<?php echo $full_job_level_select ;?>" name="qualification" class="display_none_talent3" type="checkbox" value="no requirement"></input>
                                        <label for="No_requirement2_<?php echo $full_job_level_select ;?>">No requirement </label>
                                    </td>
                                </tr>

                                <tr class="specific_skills">
                                    <td class="td_1_green_label">
                                        <input id="objective_new_talent_<?php echo $full_job_level_select ;?>" type="checkbox" class="display_none_talent3" name="specificSkills">
                                        <label for="objective_new_talent_<?php echo $full_job_level_select ;?>">Specific skills</label>
                                    </td>

                                    <td valign="middle">
                                        <input name="skill_1<?php echo $form_fields_class;?>" id="skill_1<?php echo $form_fields_class;?>" class="green_hover" type="text" placeholder="1">
                                    </td>

                                    <td valign="middle">
                                        <input name="skill_2<?php echo $form_fields_class;?>" id="skill_2<?php echo $form_fields_class;?>" class="green_hover" type="text" placeholder="2">
                                    </td>

                                    <td valign="middle">
                                        <input name="skill_3<?php echo $form_fields_class;?>" id="skill_3<?php echo $form_fields_class;?>" class="green_hover" type="text" placeholder="3">
                                    </td>
                                </tr>

                                <tr class="portion_heading">
                                    <td colspan="4">
                                        <center>
                                            <label>Search assistance</label>
                                        </center>
                                    </td>
                                </tr>

                                <tr class="benefits">
                                    <td class="td_1_green_label">
                                        <input id="proof0140_<?php echo $full_job_level_select ;?>" name="bonusByOut" type="checkbox" class="display_none_talent3">
                                        <label for="proof0140_<?php echo $full_job_level_select ;?>">Bonus buy-out</label>
                                    </td>

                                    <td valign="middle" class="green_hover">
                                        <input id="Car_allowance_<?php echo $full_job_level_select ;?>" name="bonusByOut" class="display_none_talent3" type="checkbox" value="none"></input>
                                        <label for="Car_allowance_<?php echo $full_job_level_select ;?>">None</label>
                                    </td>

                                    <td valign="middle" class="green_hover">
                                        <input id="Car_allowance01_<?php echo $full_job_level_select ;?>" name="bonusByOut" class="display_none_talent3" type="checkbox" value="possible"></input>
                                        <label for="Car_allowance01_<?php echo $full_job_level_select ;?>">Possible</label>
                                    </td>

                                    <td valign="middle" class="green_hover">
                                        <input id="Car_allowance02_<?php echo $full_job_level_select ;?>" name="bonusByOut" class="display_none_talent3" type="checkbox" value="yes"></input>
                                        <label for="Car_allowance02_<?php echo $full_job_level_select ;?>">Yes</label>
                                    </td>
                                </tr>

                                <tr class="relocation-support">
                                    <td class="td_1_green_label">
                                        <input id="relocation_desktop_version_<?php echo $full_job_level_select ;?>" name="relocationAssistance" type="checkbox" class="display_none_talent3" value="relocation Assistance">
                                        <label for="relocation_desktop_version_<?php echo $full_job_level_select ;?>">Relocation assistance</label>
                                    </td>

                                    <td valign="middle" class="green_hover">
                                        <input id="relocation_ntj_none_<?php echo $full_job_level_select ;?>" name="relocationAssistance" class="display_none_talent3" value="none" type="checkbox"></input>
                                        <label for="relocation_ntj_none_<?php echo $full_job_level_select ;?>">None </label>
                                    </td>

                                    <td valign="middle" class="green_hover">
                                        <input id="relocation_ntj_cost_<?php echo $full_job_level_select ;?>" name="relocationAssistance" class="display_none_talent3" type="checkbox" value="Relocation costs"></input>
                                        <label for="relocation_ntj_cost_<?php echo $full_job_level_select ;?>">Relocation costs</label>
                                    </td>

                                    <td valign="middle" class="green_hover">
                                        <input id="relocation_ntj_visa_sponsor_<?php echo $full_job_level_select ;?>" name="relocationAssistance" class="display_none_talent3" value="Visa sponsorship" type="checkbox"></input>
                                        <label for="relocation_ntj_visa_sponsor_<?php echo $full_job_level_select ;?>">Visa sponsorship </label>
                                    </td>
                                </tr>

                                <tr class="home_flexi_desktop_working">
                                    <td class="td_1_green_label">
                                        <input id="home_flexi_dektop_version_<?php echo $full_job_level_select ;?>" name="flexibleWorking" type="checkbox" class="display_none_talent3">
                                        <label for="home_flexi_dektop_version_<?php echo $full_job_level_select ;?>">Home & flexible working</label>
                                    </td>

                                    <td valign="middle" class="green_hover">
                                        <input id="None_working_<?php echo $full_job_level_select ;?>" name="flexibleWorking" class="display_none_talent3" type="checkbox" value="None"></input>
                                        <label for="None_working_<?php echo $full_job_level_select ;?>">None </label>
                                    </td>

                                    <td valign="middle" class="green_hover">
                                        <input id="Some3_<?php echo $full_job_level_select ;?>" class="display_none_talent3" name="flexibleWorking" value="Occasional" type="checkbox"></input>
                                        <label for="Some3_<?php echo $full_job_level_select ;?>">Occasional</label>
                                    </td>

                                    <td valign="middle" class="green_hover">
                                        <input id="Fully_flexible2_<?php echo $full_job_level_select ;?>" name="flexibleWorking" class="display_none_talent3" value="Fully flexible" type="checkbox"></input>
                                        <label for="Fully_flexible2_<?php echo $full_job_level_select ;?>">Fully flexible </label>
                                    </td>
                                </tr>

                                <tr class="referral_candidate">
                                    <td class="td_1_green_label">
                                        <input id="referral_target_candidate_<?php echo $full_job_level_select ;?>" name="referral" type="checkbox" class="display_none_talent3">
                                        <label for="referral_target_candidate_<?php echo $full_job_level_select ;?>">Referral or target candidate</label>
                                    </td>

                                    <td valign="middle">
                                        <input name="referral_1<?php echo $form_fields_class;?>" id="referral_1<?php echo $form_fields_class;?>" class="green_hover" type="text" placeholder="Email or name">
                                    </td>

                                    <td valign="middle">
                                        <input name="referral_2<?php echo $form_fields_class;?>" id="referral_2<?php echo $form_fields_class;?>" class="green_hover" type="text" placeholder="Email or name">
                                    </td>

                                    <td valign="middle">
                                        <input name="referral_3<?php echo $form_fields_class;?>" id="referral_3<?php echo $form_fields_class;?>" class="green_hover" type="text" placeholder="Email or name">
                                    </td>
                                </tr>

                                <tr>
                                    <td class="td_1_green_label">
                                        <input id="proof1160_<?php echo $full_job_level_select ;?>" name="AdditionalSearch" type="checkbox" class="display_none_talent3">
                                        <label for="proof1160_<?php echo $full_job_level_select ;?>">Additional searh requirements</label>
                                    </td>

                                    <td colspan="3">
                                        <input name="AdditionalSearchTxt<?php echo $form_fields_class;?>" id="AdditionalSearchTxt<?php echo $form_fields_class;?>" class="green_hover" type="text" placeholder="free text">
                                    </td>
                                </tr>

                                <tr>
                                    <td class="td_1_green_label">
                                        <input id="proof11590_<?php echo $full_job_level_select ;?>" type="checkbox" class="display_none_talent3">
                                        <label for="proof11590_<?php echo $full_job_level_select ;?>" data-placement="top" data-toggle="popover" data-trigger="hover" data-content="Optional - create short, authentic video about the role and load to personal drop box/google drive and share the link here - click here for more details">Hiring manager Video Link
                                        </label>
                                    </td>

                                    <td colspan="3" valign="middle">
                                        <input name="videoLink<?php echo $form_fields_class;?>" id="videoLink<?php echo $form_fields_class;?>" class="green_hover" type="text" placeholder="Video Link">
                                    </td>
                                </tr>

                                <tr>
                                    <td class="td_1_green_label">
                                        <input id="proof1159_<?php echo $full_job_level_select ;?>" type="checkbox" class="display_none_talent3">
                                        <label for="proof1159_<?php echo $full_job_level_select ;?>">Attachments</label>
                                    </td>

                                    <td colspan="3" valign="middle">
                                        <input type="file" class="green_hover" name="fileField<?php echo $form_fields_class;?>" id="fileField<?php echo $form_fields_class;?>">
                                    </td>
                                </tr>
                                
                                <tr id="date_time_tabs">
                                    <td valign="middle" class="pdg_talent_sub_left td_1_green_label" style="    border-bottom: solid 0px #fff !important;">
                                        <input id="proof1161_<?php echo $full_job_level_select ;?>" type="checkbox" class="display_none_talent3">
                                        <label for="proof1161_<?php echo $full_job_level_select ;?>" data-placement="top" data-toggle="popover" data-trigger="hover" data-content="Red: Description _ Green: Description">Hiring manager availablity </label>
                                    </td>

                                    <td colspan="3">
                                        <div class="panel with-nav-tabs panel-default">
                                            <div class="panel-heading">
                                                <ul class="nav nav-tabs">
                                                    <li><a href="javascript:void(0);" attr-id="date_time_tab_<?php echo $full_hiring_manager_availability; ?>_1" class="hm_avail_desk_ntj" onclick="hm_availability_click(this)">All</a></li>
                                                    <li><a href="javascript:void(0);" attr-id="date_time_tab_<?php echo $full_hiring_manager_availability; ?>_2" class="hm_avail_desk_ntj" onclick="hm_availability_click(this)">Monday</a></li>
                                                    <li><a href="javascript:void(0);" attr-id="date_time_tab_<?php echo $full_hiring_manager_availability; ?>_3" class="hm_avail_desk_ntj" onclick="hm_availability_click(this)">Tuesday</a></li>
                                                    <li><a href="javascript:void(0);" attr-id="date_time_tab_<?php echo $full_hiring_manager_availability; ?>_4" class="hm_avail_desk_ntj" onclick="hm_availability_click(this)">Wednesday</a></li>
                                                    <li><a href="javascript:void(0);" attr-id="date_time_tab_<?php echo $full_hiring_manager_availability; ?>_5" class="hm_avail_desk_ntj" onclick="hm_availability_click(this)">Thursday</a></li>
                                                    <li><a href="javascript:void(0);" attr-id="date_time_tab_<?php echo $full_hiring_manager_availability; ?>_6" class="hm_avail_desk_ntj" onclick="hm_availability_click(this)">Friday</a></li>
                                                </ul>
                                            </div>
                                            <!-- Hiring manager Avaiblity timing Start-->
                                            <div class="panel-body">
                                                <div class="tab-content hm_tb_content_desk_ntj" id="remove_phone_color">
                                                    <!-- hring manger availability fu; request start -->
                                                    <div class="tab-pane fade in" id="date_time_tab_<?php echo $full_hiring_manager_availability; ?>_1" class="time_tab_desktop">
                                                        <?php
                                                        foreach ($hiring_manager_availability_calendar as $full_hrManager_avail) 
                                                        {
                                                    ?>
                                                    <ul class="today_time" all-click="<?php echo $full_hrManager_avail->ul_id; ?>">
                                                        <li all-li-click="1">
                                                            <input id="<?php echo $full_job_level_select ;?>full_calendar_all_day<?php echo $full_hrManager_avail->slot_1; ?>"  class="display_none_talent3" name="<?php echo $modal_hiring_area; ?>full-all-<?php echo $full_hrManager_avail->slot_1; ?>" value="all-<?php echo $full_hrManager_avail->slot_1; ?>" type="checkbox" onclick="clickMe(this)" backround-attr="" meetup-attr="">
                                                            <label for="<?php echo $full_job_level_select ;?>full_calendar_all_day<?php echo $full_hrManager_avail->slot_1; ?>"><?php echo $full_hrManager_avail->slot_1; ?></label>
                                                        </li>
                                                        <li all-li-click="2">
                                                            <input id="<?php echo $full_job_level_select ;?>full_calendar_all_day<?php echo $full_hrManager_avail->slot_2; ?>"  class="display_none_talent3" name="<?php echo $modal_hiring_area; ?>full-all-<?php echo $full_hrManager_avail->slot_2; ?>" value="all-<?php echo $full_hrManager_avail->slot_2; ?>" type="checkbox" onclick="clickMe(this)" backround-attr="" meetup-attr="">
                                                            <label for="<?php echo $full_job_level_select ;?>full_calendar_all_day<?php echo $full_hrManager_avail->slot_2; ?>"><?php echo $full_hrManager_avail->slot_2; ?></label>
                                                        </li>
                                                        <li all-li-click="3">
                                                            <input id="<?php echo $full_job_level_select ;?>full_calendar_all_day<?php echo $full_hrManager_avail->slot_3; ?>"  class="display_none_talent3" name="<?php echo $modal_hiring_area; ?>full-all-<?php echo $full_hrManager_avail->slot_3; ?>" value="all-<?php echo $full_hrManager_avail->slot_3; ?>" type="checkbox" onclick="clickMe(this)" backround-attr="" meetup-attr="">
                                                            <label for="<?php echo $full_job_level_select ;?>full_calendar_all_day<?php echo $full_hrManager_avail->slot_3; ?>"><?php echo $full_hrManager_avail->slot_3; ?></label>
                                                        </li>
                                                        <li all-li-click="4">
                                                            <input id="<?php echo $full_job_level_select ;?>full_calendar_all_day<?php echo $full_hrManager_avail->slot_4; ?>"  class="display_none_talent3" name="<?php echo $modal_hiring_area; ?>full-all-<?php echo $full_hrManager_avail->slot_4; ?>" value="all-<?php echo $full_hrManager_avail->slot_4; ?>" type="checkbox" onclick="clickMe(this)" backround-attr="" meetup-attr="">
                                                            <label for="<?php echo $full_job_level_select ;?>full_calendar_all_day<?php echo $full_hrManager_avail->slot_4; ?>"><?php echo $full_hrManager_avail->slot_4; ?></label>
                                                        </li>
                                                        <li all-li-click="5">
                                                            <input id="<?php echo $full_job_level_select ;?>full_calendar_all_day<?php echo $full_hrManager_avail->slot_5; ?>"  class="display_none_talent3" name="<?php echo $modal_hiring_area; ?>full-all-<?php echo $full_hrManager_avail->slot_5; ?>" value="all-<?php echo $full_hrManager_avail->slot_5; ?>" type="checkbox" onclick="clickMe(this)" backround-attr="" meetup-attr="">
                                                            <label for="<?php echo $full_job_level_select ;?>full_calendar_all_day<?php echo $full_hrManager_avail->slot_5; ?>"><?php echo $full_hrManager_avail->slot_5; ?></label>
                                                        </li>
                                                        <li all-li-click="6">
                                                            <input id="<?php echo $full_job_level_select ;?>full_calendar_all_day<?php echo $full_hrManager_avail->slot_6; ?>"  class="display_none_talent3" name="<?php echo $modal_hiring_area; ?>full-all-<?php echo $full_hrManager_avail->slot_6; ?>" value="all-<?php echo $full_hrManager_avail->slot_6; ?>" type="checkbox" onclick="clickMe(this)" backround-attr="" meetup-attr="">
                                                            <label for="<?php echo $full_job_level_select ;?>full_calendar_all_day<?php echo $full_hrManager_avail->slot_6; ?>"><?php echo $full_hrManager_avail->slot_6; ?></label>
                                                        </li>
                                                    </ul>

                                                    <div class="clearfix"></div>
                                                    <?php
                                                        }
                                                    ?>
                                                    </div>
                                                <!-- hiring manager availability full requesst ends -->
                                                <!-- monday timing for hiring manager availability timing start-->
                                                    <div class="tab-pane fade in" id="date_time_tab_<?php echo $full_hiring_manager_availability; ?>_2" class="time_tab_desktop">
                                                    <?php
                                                        foreach ($hiring_manager_availability_calendar as $full_hrManager_avail_mon) 
                                                        {
                                                    ?>
                                                    <ul class="today_time" all-click="<?php echo $full_hrManager_avail_mon->ul_id; ?>">
                                                        <li all-li-click="1">
                                                            <input id="<?php echo $full_job_level_select ;?>full_calendar_monday<?php echo $full_hrManager_avail_mon->slot_1; ?>"  class="display_none_talent3" name="<?php echo $modal_hiring_area; ?>full-mon-<?php echo $full_hrManager_avail_mon->slot_1; ?>" value="mon-<?php echo $full_hrManager_avail_mon->slot_1; ?>" type="checkbox" onclick="clickMe(this)" backround-attr="" meetup-attr="">
                                                            <label for="<?php echo $full_job_level_select ;?>full_calendar_monday<?php echo $full_hrManager_avail_mon->slot_1; ?>"><?php echo $full_hrManager_avail_mon->slot_1; ?></label>
                                                        </li>
                                                        <li all-li-click="2">
                                                            <input id="<?php echo $full_job_level_select ;?>full_calendar_monday<?php echo $full_hrManager_avail_mon->slot_2; ?>"  class="display_none_talent3" name="<?php echo $modal_hiring_area; ?>full-mon-<?php echo $full_hrManager_avail_mon->slot_2; ?>" value="mon-<?php echo $full_hrManager_avail_mon->slot_2; ?>" type="checkbox" onclick="clickMe(this)" backround-attr="" meetup-attr="">
                                                            <label for="<?php echo $full_job_level_select ;?>full_calendar_monday<?php echo $full_hrManager_avail_mon->slot_2; ?>"><?php echo $full_hrManager_avail_mon->slot_2; ?></label>
                                                        </li>
                                                        <li all-li-click="3">
                                                            <input id="<?php echo $full_job_level_select ;?>full_calendar_monday<?php echo $full_hrManager_avail_mon->slot_3; ?>"  class="display_none_talent3" name="<?php echo $modal_hiring_area; ?>full-mon-<?php echo $full_hrManager_avail_mon->slot_3; ?>" value="mon-<?php echo $full_hrManager_avail_mon->slot_3; ?>" type="checkbox" onclick="clickMe(this)" backround-attr="" meetup-attr="">
                                                            <label for="<?php echo $full_job_level_select ;?>full_calendar_monday<?php echo $full_hrManager_avail_mon->slot_3; ?>"><?php echo $full_hrManager_avail_mon->slot_3; ?></label>
                                                        </li>
                                                        <li all-li-click="4">
                                                            <input id="<?php echo $full_job_level_select ;?>full_calendar_monday<?php echo $full_hrManager_avail_mon->slot_4; ?>"  class="display_none_talent3" name="<?php echo $modal_hiring_area; ?>full-mon-<?php echo $full_hrManager_avail_mon->slot_4; ?>" value="mon-<?php echo $full_hrManager_avail_mon->slot_4; ?>" type="checkbox" onclick="clickMe(this)" backround-attr="" meetup-attr="">
                                                            <label for="<?php echo $full_job_level_select ;?>full_calendar_monday<?php echo $full_hrManager_avail_mon->slot_4; ?>"><?php echo $full_hrManager_avail_mon->slot_4; ?></label>
                                                        </li>
                                                        <li all-li-click="5">
                                                            <input id="<?php echo $full_job_level_select ;?>full_calendar_monday<?php echo $full_hrManager_avail_mon->slot_5; ?>"  class="display_none_talent3" name="<?php echo $modal_hiring_area; ?>full-mon-<?php echo $full_hrManager_avail_mon->slot_5; ?>" value="mon-<?php echo $full_hrManager_avail_mon->slot_5; ?>" type="checkbox" onclick="clickMe(this)" backround-attr="" meetup-attr="">
                                                            <label for="<?php echo $full_job_level_select ;?>full_calendar_monday<?php echo $full_hrManager_avail_mon->slot_5; ?>"><?php echo $full_hrManager_avail_mon->slot_5; ?></label>
                                                        </li>
                                                        <li all-li-click="6">
                                                            <input id="<?php echo $full_job_level_select ;?>full_calendar_monday<?php echo $full_hrManager_avail_mon->slot_6; ?>"  class="display_none_talent3" name="<?php echo $modal_hiring_area; ?>full-mon-<?php echo $full_hrManager_avail_mon->slot_6; ?>" value="mon-<?php echo $full_hrManager_avail_mon->slot_6; ?>" type="checkbox" onclick="clickMe(this)" backround-attr="" meetup-attr="">
                                                            <label for="<?php echo $full_job_level_select ;?>full_calendar_monday<?php echo $full_hrManager_avail_mon->slot_6; ?>"><?php echo $full_hrManager_avail_mon->slot_6; ?></label>
                                                        </li>
                                                    </ul>

                                                    <div class="clearfix"></div>
                                                    <?php
                                                        }
                                                    ?>
                                                    </div>
                                                    <!-- monday timing for hiring manager availability timing ends-->
                                                    <!-- tuesday timing for hiring manager availability timing start-->
                                                    <div class="tab-pane fade in" id="date_time_tab_<?php echo $full_hiring_manager_availability; ?>_3" class="time_tab_desktop">

                                                        <?php
                                                        foreach ($hiring_manager_availability_calendar as $full_hrManager_avail_tue) 
                                                        {
                                                    ?>
                                                    <ul class="today_time" all-click="<?php echo $full_hrManager_avail_tue->ul_id; ?>">
                                                        <li all-li-click="1">
                                                            <input id="<?php echo $full_job_level_select ;?>full_calendar_tuesday<?php echo $full_hrManager_avail_tue->slot_1; ?>"  class="display_none_talent3" name="<?php echo $modal_hiring_area; ?>full-tue-<?php echo $full_hrManager_avail_tue->slot_1; ?>" value="tue-<?php echo $full_hrManager_avail_tue->slot_1; ?>" type="checkbox" onclick="clickMe(this)" backround-attr="" meetup-attr="">
                                                            <label for="<?php echo $full_job_level_select ;?>full_calendar_tuesday<?php echo $full_hrManager_avail_tue->slot_1; ?>"><?php echo $full_hrManager_avail_tue->slot_1; ?></label>
                                                        </li>
                                                        <li all-li-click="2">
                                                            <input id="<?php echo $full_job_level_select ;?>full_calendar_tuesday<?php echo $full_hrManager_avail_tue->slot_2; ?>"  class="display_none_talent3" name="<?php echo $modal_hiring_area; ?>full-tue-<?php echo $full_hrManager_avail_tue->slot_2; ?>" value="tue-<?php echo $full_hrManager_avail_tue->slot_2; ?>" type="checkbox" onclick="clickMe(this)" backround-attr="" meetup-attr="">
                                                            <label for="<?php echo $full_job_level_select ;?>full_calendar_tuesday<?php echo $full_hrManager_avail_tue->slot_2; ?>"><?php echo $full_hrManager_avail_tue->slot_2; ?></label>
                                                        </li>
                                                        <li all-li-click="3">
                                                            <input id="<?php echo $full_job_level_select ;?>full_calendar_tuesday<?php echo $full_hrManager_avail_tue->slot_3; ?>"  class="display_none_talent3" name="<?php echo $modal_hiring_area; ?>full-tue-<?php echo $full_hrManager_avail_tue->slot_3; ?>" value="tue-<?php echo $full_hrManager_avail_tue->slot_3; ?>" type="checkbox" onclick="clickMe(this)" backround-attr="" meetup-attr="">
                                                            <label for="<?php echo $full_job_level_select ;?>full_calendar_tuesday<?php echo $full_hrManager_avail_tue->slot_3; ?>"><?php echo $full_hrManager_avail_tue->slot_3; ?></label>
                                                        </li>
                                                        <li all-li-click="4">
                                                            <input id="<?php echo $full_job_level_select ;?>full_calendar_tuesday<?php echo $full_hrManager_avail_tue->slot_4; ?>"  class="display_none_talent3" name="<?php echo $modal_hiring_area; ?>full-tue-<?php echo $full_hrManager_avail_tue->slot_4; ?>" value="tue-<?php echo $full_hrManager_avail_tue->slot_4; ?>" type="checkbox" onclick="clickMe(this)" backround-attr="" meetup-attr="">
                                                            <label for="<?php echo $full_job_level_select ;?>full_calendar_tuesday<?php echo $full_hrManager_avail_tue->slot_4; ?>"><?php echo $full_hrManager_avail_tue->slot_4; ?></label>
                                                        </li>
                                                        <li all-li-click="5">
                                                            <input id="<?php echo $full_job_level_select ;?>full_calendar_tuesday<?php echo $full_hrManager_avail_tue->slot_5; ?>"  class="display_none_talent3" name="<?php echo $modal_hiring_area; ?>full-tue-<?php echo $full_hrManager_avail_tue->slot_5; ?>" value="tue-<?php echo $full_hrManager_avail_tue->slot_5; ?>" type="checkbox" onclick="clickMe(this)" backround-attr="" meetup-attr="">
                                                            <label for="<?php echo $full_job_level_select ;?>full_calendar_tuesday<?php echo $full_hrManager_avail_tue->slot_5; ?>"><?php echo $full_hrManager_avail_tue->slot_5; ?></label>
                                                        </li>
                                                        <li all-li-click="6">
                                                            <input id="<?php echo $full_job_level_select ;?>full_calendar_tuesday<?php echo $full_hrManager_avail_tue->slot_6; ?>"  class="display_none_talent3" name="<?php echo $modal_hiring_area; ?>full-tue-<?php echo $full_hrManager_avail_tue->slot_6; ?>" value="tue-<?php echo $full_hrManager_avail_tue->slot_6; ?>" type="checkbox" onclick="clickMe(this)" backround-attr="" meetup-attr="">
                                                            <label for="<?php echo $full_job_level_select ;?>full_calendar_tuesday<?php echo $full_hrManager_avail_tue->slot_6; ?>"><?php echo $full_hrManager_avail_tue->slot_6; ?></label>
                                                        </li>
                                                    </ul>

                                                    <div class="clearfix"></div>
                                                    <?php
                                                        }
                                                    ?>
                                                    </div>
                                                    <!-- tuesday timing for hiring manager availability timing ends-->
                                                    <!-- wednesday timing for hiring manager availability timing start-->
                                                    <div class="tab-pane fade in" id="date_time_tab_<?php echo $full_hiring_manager_availability; ?>_4" class="time_tab_desktop">
                                                    <?php
                                                        foreach ($hiring_manager_availability_calendar as $full_hrManager_avail_wed) 
                                                        {
                                                    ?>
                                                    <ul class="today_time" all-click="<?php echo $full_hrManager_avail_wed->ul_id; ?>">
                                                        <li all-li-click="1">
                                                            <input id="<?php echo $full_job_level_select ;?>full_calendar_wednesday<?php echo $full_hrManager_avail_wed->slot_1; ?>"  class="display_none_talent3" name="<?php echo $modal_hiring_area; ?>full-wed-<?php echo $full_hrManager_avail_wed->slot_1; ?>" value="wed-<?php echo $full_hrManager_avail_wed->slot_1; ?>" type="checkbox" onclick="clickMe(this)" backround-attr="" meetup-attr="">
                                                            <label for="<?php echo $full_job_level_select ;?>full_calendar_wednesday<?php echo $full_hrManager_avail_wed->slot_1; ?>"><?php echo $full_hrManager_avail_wed->slot_1; ?></label>
                                                        </li>
                                                        <li all-li-click="2">
                                                            <input id="<?php echo $full_job_level_select ;?>full_calendar_wednesday<?php echo $full_hrManager_avail_wed->slot_2; ?>"  class="display_none_talent3" name="<?php echo $modal_hiring_area; ?>full-wed-<?php echo $full_hrManager_avail_wed->slot_2; ?>" value="wed-<?php echo $full_hrManager_avail_wed->slot_2; ?>" type="checkbox" onclick="clickMe(this)" backround-attr="" meetup-attr="">
                                                            <label for="<?php echo $full_job_level_select ;?>full_calendar_wednesday<?php echo $full_hrManager_avail_wed->slot_2; ?>"><?php echo $full_hrManager_avail_wed->slot_2; ?></label>
                                                        </li>
                                                        <li all-li-click="3">
                                                            <input id="<?php echo $full_job_level_select ;?>full_calendar_wednesday<?php echo $full_hrManager_avail_wed->slot_3; ?>"  class="display_none_talent3" name="<?php echo $modal_hiring_area; ?>full-wed-<?php echo $full_hrManager_avail_wed->slot_3; ?>" value="wed-<?php echo $full_hrManager_avail_wed->slot_3; ?>" type="checkbox" onclick="clickMe(this)" backround-attr="" meetup-attr="">
                                                            <label for="<?php echo $full_job_level_select ;?>full_calendar_wednesday<?php echo $full_hrManager_avail_wed->slot_3; ?>"><?php echo $full_hrManager_avail_wed->slot_3; ?></label>
                                                        </li>
                                                        <li all-li-click="4">
                                                            <input id="<?php echo $full_job_level_select ;?>full_calendar_wednesday<?php echo $full_hrManager_avail_wed->slot_4; ?>"  class="display_none_talent3" name="<?php echo $modal_hiring_area; ?>full-wed-<?php echo $full_hrManager_avail_wed->slot_4; ?>" value="wed-<?php echo $full_hrManager_avail_wed->slot_4; ?>" type="checkbox" onclick="clickMe(this)" backround-attr="" meetup-attr="">
                                                            <label for="<?php echo $full_job_level_select ;?>full_calendar_wednesday<?php echo $full_hrManager_avail_wed->slot_4; ?>"><?php echo $full_hrManager_avail_wed->slot_4; ?></label>
                                                        </li>
                                                        <li all-li-click="5">
                                                            <input id="<?php echo $full_job_level_select ;?>full_calendar_wednesday<?php echo $full_hrManager_avail_wed->slot_5; ?>"  class="display_none_talent3" name="<?php echo $modal_hiring_area; ?>full-wed-<?php echo $full_hrManager_avail_wed->slot_5; ?>" value="wed-<?php echo $full_hrManager_avail_wed->slot_5; ?>" type="checkbox" onclick="clickMe(this)" backround-attr="" meetup-attr="">
                                                            <label for="<?php echo $full_job_level_select ;?>full_calendar_wednesday<?php echo $full_hrManager_avail_wed->slot_5; ?>"><?php echo $full_hrManager_avail_wed->slot_5; ?></label>
                                                        </li>
                                                        <li all-li-click="6">
                                                            <input id="<?php echo $full_job_level_select ;?>full_calendar_wednesday<?php echo $full_hrManager_avail_wed->slot_6; ?>"  class="display_none_talent3" name="<?php echo $modal_hiring_area; ?>full-wed-<?php echo $full_hrManager_avail_wed->slot_6; ?>" value="wed-<?php echo $full_hrManager_avail_wed->slot_6; ?>" type="checkbox" onclick="clickMe(this)" backround-attr="" meetup-attr="">
                                                            <label for="<?php echo $full_job_level_select ;?>full_calendar_wednesday<?php echo $full_hrManager_avail_wed->slot_6; ?>"><?php echo $full_hrManager_avail_wed->slot_6; ?></label>
                                                        </li>
                                                    </ul>

                                                    <div class="clearfix"></div>
                                                    <?php
                                                        }
                                                    ?>
                                                    </div>
                                                    <!-- wednesday timing for hiring manager availability timing ends-->
                                                    <!-- tuhursday timing for hiring manager availability timing start-->
                                                    <div class="tab-pane fade in" id="date_time_tab_<?php echo $full_hiring_manager_availability; ?>_5" class="time_tab_desktop">
                                                    <?php
                                                        foreach ($hiring_manager_availability_calendar as $full_hrManager_avail_thu) 
                                                        {
                                                    ?>
                                                    <ul class="today_time" all-click="<?php echo $full_hrManager_avail_thu->ul_id; ?>">
                                                        <li all-li-click="1">
                                                            <input id="<?php echo $full_job_level_select ;?>full_calendar_thursday<?php echo $full_hrManager_avail_thu->slot_1; ?>"  class="display_none_talent3" name="<?php echo $modal_hiring_area; ?>full-thu-<?php echo $full_hrManager_avail_thu->slot_1; ?>" value="thu-<?php echo $full_hrManager_avail_thu->slot_1; ?>" type="checkbox" onclick="clickMe(this)" backround-attr="" meetup-attr="">
                                                            <label for="<?php echo $full_job_level_select ;?>full_calendar_thursday<?php echo $full_hrManager_avail_thu->slot_1; ?>"><?php echo $full_hrManager_avail_thu->slot_1; ?></label>
                                                        </li>
                                                        <li all-li-click="2">
                                                            <input id="<?php echo $full_job_level_select ;?>full_calendar_thursday<?php echo $full_hrManager_avail_thu->slot_2; ?>"  class="display_none_talent3" name="<?php echo $modal_hiring_area; ?>full-thu-<?php echo $full_hrManager_avail_thu->slot_2; ?>" value="thu-<?php echo $full_hrManager_avail_thu->slot_2; ?>" type="checkbox" onclick="clickMe(this)" backround-attr="" meetup-attr="">
                                                            <label for="<?php echo $full_job_level_select ;?>full_calendar_thursday<?php echo $full_hrManager_avail_thu->slot_2; ?>"><?php echo $full_hrManager_avail_thu->slot_2; ?></label>
                                                        </li>
                                                        <li all-li-click="3">
                                                            <input id="<?php echo $full_job_level_select ;?>full_calendar_thursday<?php echo $full_hrManager_avail_thu->slot_3; ?>"  class="display_none_talent3" name="<?php echo $modal_hiring_area; ?>full-thu-<?php echo $full_hrManager_avail_thu->slot_3; ?>" value="thu-<?php echo $full_hrManager_avail_thu->slot_3; ?>" type="checkbox" onclick="clickMe(this)" backround-attr="" meetup-attr="">
                                                            <label for="<?php echo $full_job_level_select ;?>full_calendar_thursday<?php echo $full_hrManager_avail_thu->slot_3; ?>"><?php echo $full_hrManager_avail_thu->slot_3; ?></label>
                                                        </li>
                                                        <li all-li-click="4">
                                                            <input id="<?php echo $full_job_level_select ;?>full_calendar_thursday<?php echo $full_hrManager_avail_thu->slot_4; ?>"  class="display_none_talent3" name="<?php echo $modal_hiring_area; ?>full-thu-<?php echo $full_hrManager_avail_thu->slot_4; ?>" value="thu-<?php echo $full_hrManager_avail_thu->slot_4; ?>" type="checkbox" onclick="clickMe(this)" backround-attr="" meetup-attr="">
                                                            <label for="<?php echo $full_job_level_select ;?>full_calendar_thursday<?php echo $full_hrManager_avail_thu->slot_4; ?>"><?php echo $full_hrManager_avail_thu->slot_4; ?></label>
                                                        </li>
                                                        <li all-li-click="5">
                                                            <input id="<?php echo $full_job_level_select ;?>full_calendar_thursday<?php echo $full_hrManager_avail_thu->slot_5; ?>"  class="display_none_talent3" name="<?php echo $modal_hiring_area; ?>full-thu-<?php echo $full_hrManager_avail_thu->slot_5; ?>" value="thu-<?php echo $full_hrManager_avail_thu->slot_5; ?>" type="checkbox" onclick="clickMe(this)" backround-attr="" meetup-attr="">
                                                            <label for="<?php echo $full_job_level_select ;?>full_calendar_thursday<?php echo $full_hrManager_avail_thu->slot_5; ?>"><?php echo $full_hrManager_avail_thu->slot_5; ?></label>
                                                        </li>
                                                        <li all-li-click="6">
                                                            <input id="<?php echo $full_job_level_select ;?>full_calendar_thursday<?php echo $full_hrManager_avail_thu->slot_6; ?>"  class="display_none_talent3" name="<?php echo $modal_hiring_area; ?>full-thu-<?php echo $full_hrManager_avail_thu->slot_6; ?>" value="thu-<?php echo $full_hrManager_avail_thu->slot_6; ?>" type="checkbox" onclick="clickMe(this)" backround-attr="" meetup-attr="">
                                                            <label for="<?php echo $full_job_level_select ;?>full_calendar_thursday<?php echo $full_hrManager_avail_thu->slot_6; ?>"><?php echo $full_hrManager_avail_thu->slot_6; ?></label>
                                                        </li>
                                                    </ul>

                                                    <div class="clearfix"></div>
                                                    <?php
                                                        }
                                                    ?>
                                                    </div>
                                                    <!-- thursday timing for hiring manager availability timing ends-->
                                                    <!-- friday timing for hiring manager availability timing start-->
                                                    <div class="tab-pane fade in" id="date_time_tab_<?php echo $full_hiring_manager_availability; ?>_6">
                                                        <?php
                                                        foreach ($hiring_manager_availability_calendar as $full_hrManager_avail_fri) 
                                                        {
                                                    ?>
                                                    <ul class="today_time" all-click="<?php echo $full_hrManager_avail_fri->ul_id; ?>">
                                                        <li all-li-click="1">
                                                            <input id="<?php echo $full_job_level_select ;?>full_calendar_friday<?php echo $full_hrManager_avail_fri->slot_1; ?>"  class="display_none_talent3" name="<?php echo $modal_hiring_area; ?>full-fri-<?php echo $full_hrManager_avail_fri->slot_1; ?>" value="fri-<?php echo $full_hrManager_avail_fri->slot_1; ?>" type="checkbox" onclick="clickMe(this)" backround-attr="" meetup-attr="">
                                                            <label for="<?php echo $full_job_level_select ;?>full_calendar_friday<?php echo $full_hrManager_avail_fri->slot_1; ?>"><?php echo $full_hrManager_avail_fri->slot_1; ?></label>
                                                        </li>
                                                        <li all-li-click="2">
                                                            <input id="<?php echo $full_job_level_select ;?>full_calendar_friday<?php echo $full_hrManager_avail_fri->slot_2; ?>"  class="display_none_talent3" name="<?php echo $modal_hiring_area; ?>full-fri-<?php echo $full_hrManager_avail_fri->slot_2; ?>" value="fri-<?php echo $full_hrManager_avail_fri->slot_2; ?>" type="checkbox" onclick="clickMe(this)" backround-attr="" meetup-attr="">
                                                            <label for="<?php echo $full_job_level_select ;?>full_calendar_friday<?php echo $full_hrManager_avail_fri->slot_2; ?>"><?php echo $full_hrManager_avail_fri->slot_2; ?></label>
                                                        </li>
                                                        <li all-li-click="3">
                                                            <input id="<?php echo $full_job_level_select ;?>full_calendar_friday<?php echo $full_hrManager_avail_fri->slot_3; ?>"  class="display_none_talent3" name="<?php echo $modal_hiring_area; ?>full-fri-<?php echo $full_hrManager_avail_fri->slot_3; ?>" value="fri-<?php echo $full_hrManager_avail_fri->slot_3; ?>" type="checkbox" onclick="clickMe(this)" backround-attr="" meetup-attr="">
                                                            <label for="<?php echo $full_job_level_select ;?>full_calendar_friday<?php echo $full_hrManager_avail_fri->slot_3; ?>"><?php echo $full_hrManager_avail_fri->slot_3; ?></label>
                                                        </li>
                                                        <li all-li-click="4">
                                                            <input id="<?php echo $full_job_level_select ;?>full_calendar_friday<?php echo $full_hrManager_avail_fri->slot_4; ?>"  class="display_none_talent3" name="<?php echo $modal_hiring_area; ?>full-fri-<?php echo $full_hrManager_avail_fri->slot_4; ?>" value="fri-<?php echo $full_hrManager_avail_fri->slot_4; ?>" type="checkbox" onclick="clickMe(this)" backround-attr="" meetup-attr="">
                                                            <label for="<?php echo $full_job_level_select ;?>full_calendar_friday<?php echo $full_hrManager_avail_fri->slot_4; ?>"><?php echo $full_hrManager_avail_fri->slot_4; ?></label>
                                                        </li>
                                                        <li all-li-click="5">
                                                            <input id="<?php echo $full_job_level_select ;?>full_calendar_friday<?php echo $full_hrManager_avail_fri->slot_5; ?>"  class="display_none_talent3" name="<?php echo $modal_hiring_area; ?>full-fri-<?php echo $full_hrManager_avail_fri->slot_5; ?>" value="fri-<?php echo $full_hrManager_avail_fri->slot_5; ?>" type="checkbox" onclick="clickMe(this)" backround-attr="" meetup-attr="">
                                                            <label for="<?php echo $full_job_level_select ;?>full_calendar_friday<?php echo $full_hrManager_avail_fri->slot_5; ?>"><?php echo $full_hrManager_avail_fri->slot_5; ?></label>
                                                        </li>
                                                        <li all-li-click="6">
                                                            <input id="<?php echo $full_job_level_select ;?>full_calendar_friday<?php echo $full_hrManager_avail_fri->slot_6; ?>"  class="display_none_talent3" name="<?php echo $modal_hiring_area; ?>full-fri-<?php echo $full_hrManager_avail_fri->slot_6; ?>" value="fri-<?php echo $full_hrManager_avail_fri->slot_6; ?>" type="checkbox" onclick="clickMe(this)" backround-attr="" meetup-attr="">
                                                            <label for="<?php echo $full_job_level_select ;?>full_calendar_friday<?php echo $full_hrManager_avail_fri->slot_6; ?>"><?php echo $full_hrManager_avail_fri->slot_6; ?></label>
                                                        </li>
                                                    </ul>

                                                    <div class="clearfix"></div>
                                                    <?php
                                                        }
                                                    ?>
                                                    </div>
                                                    <!-- tuesday friday for hiring manager availability timing ends-->
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr class="pdg_talent_sub_left">
                                    <td colspan="4" class="pdg_talent_sub_left" style="border: none; height:90px !important; padding-top:20px !important; text-align:center !important;">
                                        <!-- <button type="button" class="btn btn-info btn-lg btn_quick_popup">Open Job</button> -->
                                        <!-- <button type="button" class="btn btn-info btn-lg btn_request btn_quick_popup">Request information</button> -->
                                        <!-- <button type="button" class="btn btn-info btn-lg btn_request btn_quick_popup">Send to agency</button> -->
                                        <button type="submit" class="btn btn-info btn-lg btn_request btn_quick_popup" id="talent_request_btn">Save</button>
                                    </td>
                                    <td style="border: none;"></td>
                                </tr>
                            </form>
                            </tbody>
                        </table>
                    </div>
                    <!-- Table Desktop Ends -->
                    <!-- Table_mobile_tab starts-->
                    <div class="panel-group wrap mb-ntj_div" id="bs-collapse">
                        <div class="panel">
                            <div class="panel-heading">
                                <a data-toggle="collapse" href="#one">
                                    <h4 class="panel-title">Client or business area <i class="fa fa-angle-down" aria-hidden="true"></i></h4>
                                </a>
                            </div>
                            <div id="one" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <select class="active_select cl_bs_area" txt-attr="Business area - ">
                                        <option value="">Select</option>
                                        <option value="new">New</option>
                                        <?php
                                            foreach ($clientOrBussinessArea as $businessName) 
                                            {
                                        ?>
                                            <a class="dropdown__link" id="clientBusiness_<?php echo $businessName['clientbusiness_id'];?>"><?php echo $businessName['clientbusiness_name'];?></a>
                                        <?php 
                                    		} 
                                    	?>    
                                    </select>
                                    <div class="clear5"></div>
                                    <input name="" type="text" class="cl_bs_area_input" style="display:none" placeholder="Name" />

                                    <div class="clear5"></div>
                                    <input name="" type="text" class="cl_bs_area_input" style="display:none" placeholder="Role approver email - If required">

                                </div>
                            </div>
                        </div>
                        <!-- end of panel_1 -->

                        <div class="panel" id="hiring_input_css">
                            <div class="panel-heading">
                                <a data-toggle="collapse" href="#two">
                                    <h4 class="panel-title">Hiring manager <i class="fa fa-angle-down" aria-hidden="true"></i></h4>
                                </a>
                            </div>
                            <div id="two" class="panel-collapse collapse">
                                <div class="panel-body hm_new_client" style="display:none">
                                    <div class="clear5"></div>
                                    <input name="" type="text" placeholder="Name" />
                                    <div class="clear5"></div>
                                    <input name="" type="email" placeholder="Email" />
                                    <div class="clear5"></div>
                                    <input name="" type="text" class="hir_mangr_job_title_mb" placeholder="Job Title" />
                                </div>

                                <div class="clear5"></div>

                                <div class="panel-body" style="border: none;">
                                    <select class="active_select hm_bs_area" style="display:none" txt-attr="Hiring manager - ">
                                        <option value="">Select</option>
                                        <option value="new">New</option>
                                        <option value="1">Hiring manager</option>
                                        <option value="2">Hiring manager 1</option>
                                        <option value="3">Hiring manager 2</option>
                                        <option value="4">Hiring manager 3</option>
                                    </select>
                                    <div class="clear5"></div>
                                    <input name="" type="text" class="hm_new_input" style="display:none" placeholder="Name" />
                                    <div class="clear5"></div>
                                    <input name="" class="hm_new_input" type="email" placeholder="Email" />
                                    <div class="clear5"></div>
                                    <input name="" class="hm_new_input" type="text" placeholder="Title" />
                                </div>
                            </div>
                        </div>
                        <!-- end of panel_2 -->

                        <div class="panel">
                            <div class="panel-heading">
                                <a data-toggle="collapse" href="#three">
                                    <h4 class="panel-title">Role details <i class="fa fa-angle-down" aria-hidden="true"></i></h4>
                                </a>
                            </div>
                            <div id="three" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <select class="active_select role_detail_banking" txt-attr="Job field - ">
                                        <option value="">Job field</option>
                                        <option value="1">Accounting</option>
                                        <option value="1">Administration & office support</option>
                                        <option value="1">Banking</option>
                                        <option value="1">Communications</option>
                                        <option value="1">Construction</option>
                                        <option value="1">Data & analytics</option>
                                        <option value="1">Digital</option>
                                        <option value="1">Engineering</option>
                                        <option value="1">Farming & agriculture</option>
                                        <option value="1">Finance</option>
                                        <option value="1">Human resources</option>
                                        <option value="1">Healthcare & medical</option>
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

                                    <div class="clear5"></div>

                                    <input name="" type="text" placeholder="Title" />

                                    <select class="active_select level_pg_mb" txt-attr="Level - ">
                                        <option value="">Level</option>
                                        <option value="leader of leaders">Leader of leaders</option>
                                        <option value="leader of professional">Leader of professionals</option>
                                        <option value="individual prefossional">Individual professional</option>
                                    </select>

                                    <select class="active_select direct_report_pg_mb" txt-attr="Number of direct reports - ">
                                        <option value="">Number of direct reports</option>
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="1">5</option>
                                        <option value="1">6</option>
                                        <option value="1">7</option>
                                        <option value="1">8</option>
                                        <option value="1">9</option>
                                        <option value="1">10</option>
                                        <option value="1">11</option>
                                        <option value="1">12+</option>
                                    </select>

                                    <select class="active_select size_total_func_pg_mb" txt-attr="size of total function - ">
                                        <option value="">Approx. size of total function</option>
                                        <option value="1">0-10</option>
                                        <option value="1">10-20</option>
                                        <option value="1">20-30</option>
                                        <option value="1">30-40</option>
                                        <option value="1">40-50</option>
                                        <option value="1">50-60</option>
                                        <option value="1">60-70</option>
                                        <option value="1">70-80</option>
                                        <option value="1">80-90</option>
                                        <option value="1">90-100</option>
                                        <option value="1">100+</option>
                                    </select>

                                    <div class="clear5"></div>

                                    <select class="test1 cities_multiple" multiple="multiple">
                                        <option value="0">Auckland</option>
                                        <option value="1">Hamilton</option>
                                        <option value="2">Wellington</option>
                                        <option value="3">Christchurch</option>
                                        <option value="4">Regional</option>
                                        <option value="5">Other city</option>
                                        <option value="6">Home</option>
                                    </select>

                                    <div class="panel" id="panel_inner_checked">

                                        <div id="five" class="panel-collapse collapse in">
                                            <div class="panel-body">
                                                <div class="clear5"></div>
                                                <select class="active_select cntrct_mb" name="ftc" txt-attr="Contract type -">
                                                    <option value="">Select contract type</option>
                                                    <option value="1">Permanent</option>
                                                    <option value="2">Fixed-term employee</option>
                                                    <option value="3">Contractor</option>
                                                </select>

                                                <select class="active_select slct-nmr-mont-mb" txt-attr="Number of months - ">
                                                    <option value="">Select number of months</option>
                                                    <option value="1">1 - Month</option>
                                                    <option value="1">2 - Month</option>
                                                    <option value="1">3 - Month</option>
                                                    <option value="1">4 - Month</option>
                                                    <option value="1">5 - Month</option>
                                                    <option value="1">6 - Month</option>
                                                    <option value="1">7 - Month</option>
                                                    <option value="1">8 - Month</option>
                                                    <option value="1">9 - Month</option>
                                                    <option value="1">10 - Month</option>
                                                    <option value="1">11 - Month</option>
                                                    <option value="1">12 - Month</option>
                                                </select>
                                                <select class="active_select hrs_mb" name="ftc_hour" txt-attr="Hours -">
                                                    <option value="">Select hours</option>
                                                    <option value="2">Full time</option>
                                                    <option value="1">Part time</option>
                                                </select>

                                                <select class="active_select hrs_pr_week" style="display:none" name="ftc_hour" txt-attr="Select hours - ">
                                                    <option value="">Select hours</option>
                                                    <option value="1">20</option>
                                                    <option value="2">21</option>
                                                    <option value="2">22</option>
                                                    <option value="2">23</option>
                                                    <option value="2">24</option>
                                                    <option value="2">25</option>
                                                    <option value="2">26</option>
                                                    <option value="2">27</option>
                                                    <option value="2">28</option>
                                                    <option value="2">29</option>
                                                    <option value="2">30</option>
                                                    <option value="2">31</option>
                                                    <option value="2">32</option>
                                                    <option value="2">33</option>
                                                    <option value="2">34</option>
                                                    <option value="2">35</option>
                                                </select>
                                                <select class="test1 hrs_days_mb" multiple="multiple">
                                                    <option value="0">Any days</option>
                                                    <option value="1">Monday</option>
                                                    <option value="2">Tuesday</option>
                                                    <option value="3">Wednesday</option>
                                                    <option value="4">Thursday</option>
                                                    <option value="5">Friday</option>
                                                </select>

                                                <select class="active_select drp_gray_clr_select active_annual py_mb" txt-attr="Pay annual - ">
                                                    <option value="">Pay - annual</option>
                                                    <option value="1">$50,000</option>
                                                    <option value="1">$55,000</option>
                                                    <option value="1">$60,000</option>
                                                    <option value="1">$65,000</option>
                                                    <option value="1">$70,000</option>
                                                    <option value="1">$75,000</option>
                                                    <option value="1">$80,000</option>
                                                    <option value="1">$85,000</option>
                                                    <option value="1">$90,000</option>
                                                    <option value="1">$95,000</option>
                                                    <option value="1">$100,000</option>
                                                    <option value="1">$105,000</option>
                                                    <option value="1">$110,000</option>
                                                    <option value="1">$115,000</option>
                                                    <option value="1">$120,000</option>
                                                    <option value="1">$125,000</option>
                                                    <option value="1">$130,000</option>
                                                    <option value="1">$135,000</option>
                                                    <option value="1">$140,000</option>
                                                    <option value="1">$145,000</option>
                                                    <option value="1">$150,000</option>
                                                    <option value="1">$155,000</option>
                                                    <option value="1">$160,000</option>
                                                    <option value="1">$165,000</option>
                                                    <option value="1">$170,000</option>
                                                    <option value="1">$175,000</option>
                                                    <option value="1">$180,000</option>
                                                    <option value="1">$185,000</option>
                                                    <option value="1">$190,000</option>
                                                    <option value="1">$195,000</option>
                                                    <option value="1">$200,000</option>
                                                    <option value="1">$205,000</option>
                                                    <option value="1">$210,000</option>
                                                    <option value="1">$215,000</option>
                                                    <option value="1">$220,000</option>
                                                    <option value="1">$225,000</option>
                                                    <option value="1">$230,000</option>
                                                    <option value="1">$235,000</option>
                                                    <option value="1">$240,000</option>
                                                    <option value="1">$245,000</option>
                                                    <option value="1">$250,000</option>
                                                    <option value="1">$255,000</option>
                                                    <option value="1">$260,000</option>
                                                    <option value="1">$265,000</option>
                                                    <option value="1">$270,000</option>
                                                    <option value="1">$275,000</option>
                                                    <option value="1">$280,000</option>
                                                    <option value="1">$285,000</option>
                                                    <option value="1">$290,000</option>
                                                    <option value="1">$295,000</option>
                                                    <option value="1">$300,000</option>
                                                </select>

                                                <select class="active_select drp_gray_clr_select py_dly_mb" txt-attr="Daily - ">
                                                    <option value="">Daily</option>
                                                    <option value="1">$300</option>
                                                    <option value="1">$325</option>
                                                    <option value="1">$350</option>
                                                    <option value="1">$375</option>
                                                    <option value="1">$400</option>
                                                    <option value="1">$425</option>
                                                    <option value="1">$450</option>
                                                    <option value="1">$475</option>
                                                    <option value="1">$500</option>
                                                    <option value="1">$525</option>
                                                    <option value="1">$550</option>
                                                    <option value="1">$575</option>
                                                    <option value="1">$600</option>
                                                    <option value="1">$625</option>
                                                    <option value="1">$650</option>
                                                    <option value="1">$675</option>
                                                    <option value="1">$700</option>
                                                    <option value="1">$725</option>
                                                    <option value="1">$750</option>
                                                    <option value="1">$775</option>
                                                    <option value="1">$800</option>
                                                    <option value="1">$825</option>
                                                    <option value="1">$850</option>
                                                    <option value="1">$875</option>
                                                    <option value="1">$900</option>
                                                    <option value="1">$925</option>
                                                    <option value="1">$950</option>
                                                    <option value="1">$975</option>
                                                    <option value="1">$1,000</option>
                                                    <option value="1">$1,025</option>
                                                    <option value="1">$1,050</option>
                                                    <option value="1">$1,075</option>
                                                    <option value="1">$1,100</option>
                                                    <option value="1">$1,125</option>
                                                    <option value="1">$1,150</option>
                                                    <option value="1">$1,175</option>
                                                    <option value="1">$1,200</option>
                                                    <option value="1">$1,225</option>
                                                    <option value="1">$1,250</option>
                                                    <option value="1">$1,275</option>
                                                    <option value="1">$1,300</option>
                                                    <option value="1">$1,325</option>
                                                    <option value="1">$1,350</option>
                                                    <option value="1">$1,375</option>
                                                    <option value="1">$1,400</option>
                                                    <option value="1">$1,425</option>
                                                    <option value="1">$1,450</option>
                                                    <option value="1">$1,475</option>
                                                    <option value="1">$1,500</option>
                                                    <option value="1">$1,525</option>
                                                    <option value="1">$1,550</option>
                                                    <option value="1">$1,575</option>
                                                    <option value="1">$1,600</option>
                                                    <option value="1">$1,625</option>
                                                    <option value="1">$1,650</option>
                                                    <option value="1">$1,675</option>
                                                    <option value="1">$1,700</option>
                                                    <option value="1">$1,725</option>
                                                    <option value="1">$1,750</option>
                                                    <option value="1">$1,775</option>
                                                    <option value="1">$1,800</option>
                                                    <option value="1">$1,825</option>
                                                    <option value="1">$1,850</option>
                                                    <option value="1">$1,875</option>
                                                    <option value="1">$1,900</option>
                                                    <option value="1">$1,925</option>
                                                    <option value="1">$1,975</option>
                                                    <option value="1">$2,000</option>
                                                </select>

                                                <div class="clear5"></div>

                                                <div class="mobile_input">
                                                    <input id="flex_hours_1" class="" type="checkbox">
                                                    <label for="flex_hours_1">Flexible on pay</label>
                                                </div>

                                                <select class="active_select slct_bonus_mb" txt-attr="Bonus - ">
                                                    <option value="">Select bonus</option>
                                                    <option value="1">No bonus</option>
                                                    <option value="1">5% bonus</option>
                                                    <option value="1">10% bonus</option>
                                                    <option value="1">15% bonus</option>
                                                    <option value="1">20% bonus</option>
                                                    <option value="1">25% bonus</option>
                                                    <option value="1">30% bonus</option>
                                                    <option value="1">35% bonus</option>
                                                    <option value="1">40%+ bonus</option>
                                                </select>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="clear5"></div>

                                    <div class="panel-heading sub_heading">

                                        <h4 class="panel-title key_panel key_accountability_1" cls-attr="input_key">Specific role objectives +</h4>
                                    </div>
                                    <div class="clear5"></div>
                                    <div class="input_key">

                                    </div>

                                    <div class="clear5"></div>

                                    <div class="panel" id="panel_inner_checked">
                                        <div class="panel-heading sub_heading">
                                            <a>
                                                <h4 class="panel-title">Upload attachments (If available)</h4>
                                            </a>
                                        </div>
                                        <div class="clear5"></div>
                                        <div id="nine" class="panel-collapse collapse in">
                                            <div class="panel-body">
                                                <div class="clear5"></div>
                                                <input type="file" name="fileField" id="fileField">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end of panel_3 -->

                        <div class="panel">
                            <div class="panel-heading">
                                <a data-toggle="collapse" href="#talent_mob">
                                    <h4 class="panel-title">Talent requirements <i class="fa fa-angle-down" aria-hidden="true"></i></h4>
                                </a>
                            </div>
                            <div id="talent_mob" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <select class="active_select" txt-attr="Capability - ">
                                        <option value="">Capability</option>
                                        <option value="1">Top talent</option>
                                        <option value="1">Solid performer</option>
                                        <option value="1">High potential</option>
                                    </select>

                                    <select class="active_select" txt-attr="Experience - ">
                                        <option value="">Experience</option>
                                        <option value="1">Equivalent</option>
                                        <option value="1">Transferrable skills</option>
                                        <option value="1">Open minded</option>
                                    </select>

                                    <select class="active_select" txt-attr="Successor ready - ">
                                        <option value="">Successor ready</option>
                                        <option value="1">Within 3 years</option>
                                        <option value="1">After 3 years</option>
                                        <option value="1">No requirement</option>
                                    </select>

                                    <select class="active_select selct_qualfctn_mb" txt-attr="Qualification - ">
                                        <option value="">Qualification</option>
                                        <option value="1">Required</option>
                                        <option value="1">Preferred</option>
                                        <option value="1">No requirement</option>
                                    </select>

                                    <div class="panel-heading sub_heading">
                                        <h4 class="panel-title key_panel key_accountability_1" cls-attr="input_key_1">Specific skills +</h4>
                                    </div>
                                    <div class="clear5"></div>
                                    <div class="input_key_1">

                                    </div>
                                    <div class="clear5"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end of panel_4 -->

                        <div class="panel">
                            <div class="panel-heading">
                                <a data-toggle="collapse" href="#search_assist">
                                    <h4 class="panel-title">Search assistance <i class="fa fa-angle-down" aria-hidden="true"></i></h4>
                                </a>
                            </div>
                            <div id="search_assist" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="panel" id="panel_inner_checked">
                                        <!-- <div class="panel-heading sub_heading">
										<a>
											<h4 class="panel-title">Bonus buy-out </h4>
										</a>
									</div> -->
                                        <div id="bonus_buy" class="panel-collapse collapse in">
                                            <div class="panel-body">
                                                <div class="clear5"></div>

                                                <select class="active_select" txt-attr="Bonus buy-out - ">
                                                    <option value="">Bonus buy-out</option>
                                                    <option value="1">No</option>
                                                    <option value="2">Possible</option>
                                                    <option value="3">Yes</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="clear5"></div>

                                    <div class="panel" id="panel_inner_checked">

                                        <div id="relocate_assist" class="panel-collapse collapse in">
                                            <div class="panel-body">

                                                <select id="done" class="selectpicker relocate_details_multiple" multiple data-done-button="true">
                                                    <option value="none">Relocation - None </option>
                                                    <option value="relocation_cost">Relocation Costs</option>
                                                    <option value="visaspnsorship">Visa sponsorship</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="clear5"></div>

                                    <div class="panel" id="panel_inner_checked">

                                        <div id="lifestyle_flex" class="panel-collapse collapse in">
                                            <div class="panel-body">

                                                <select class="active_select" txt-attr="Home & flexible working - ">
                                                    <option value="">Select home & flexible working</option>
                                                    <option value="1">None</option>
                                                    <option value="1">Occassional</option>
                                                    <option value="1">Fully flexible</option>
                                                </select>

                                                <div class="clear5"></div>

                                                <div class="panel-heading sub_heading">
                                                    <h4 class="panel-title key_panel key_accountability_1" cls-attr="inpt_ntj_referal_dtl_mb" attr-placeholder="Referral email or name">Referrals</h4>
                                                </div>
                                                <div class="clear5"></div>
                                                <div class="inpt_ntj_referal_dtl_mb"></div>

                                                <div class="clear5"></div>

                                                <div class="panel" id="panel_inner_checked">

                                                    <div id="manage_video_1" class="panel-collapse collapse in">
                                                        <div class="panel-body">
                                                            <input class="form-control hir_mgr_vide_lnk_mb" type="text" placeholder="Hiring manager video Link">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end of panel_5 -->

                        <div class="panel">
                            <div class="panel-heading">
                                <a data-toggle="collapse" href="#hr_mange_time">
                                    <h4 class="panel-title">Hiring manager availability <i class="fa fa-angle-down" aria-hidden="true"></i></h4>
                                </a>
                            </div>
                            <div id="hr_mange_time" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="panel with-nav-tabs panel-default">
                                        <div class="panel-heading">
                                            <ul class="nav nav-tabs">
                                                <li class="active"><a href="#time_tab_mob1" data-toggle="tab" aria-expanded="false">All</a></li>
                                                <li><a href="#time_tab_mob2" data-toggle="tab" aria-expanded="false">M</a></li>
                                                <li><a href="#time_tab_mob3" data-toggle="tab" aria-expanded="false">T</a></li>
                                                <li><a href="#time_tab_mob4" data-toggle="tab" aria-expanded="false">W</a></li>
                                                <li><a href="#time_tab_mob5" data-toggle="tab" aria-expanded="false">T</a></li>
                                                <li><a href="#time_tab_mob6" data-toggle="tab" aria-expanded="true">F</a></li>
                                            </ul>
                                        </div>

                                        <div class="panel-body">
                                            <div class="tab-content all_clicks">
                                                <div class="tab-pane fade in active" id="time_tab_mob1">
                                                    <ul all-click="1" class="today_time all-tab-tm-mb">
                                                        <li all-li-click="1">
                                                            <input id="click_like001" class="display_none_talent3" type="checkbox" onclick="clickMe(this)"  backround-attr="">
                                                            <label for="click_like001">8:00</label>
                                                        </li>

                                                        <li all-li-click="2">
                                                            <input id="click_like002"_<?php echo $full_job_level_select ;?> class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_like002">8:30</label>
                                                        </li>

                                                        <li all-li-click="3">
                                                            <input id="click_like003" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_like003">9:00</label>
                                                        </li>

                                                        <li all-li-click="4">
                                                            <input id="click_like004" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_like004">9:30</label>
                                                        </li>

                                                        <li all-li-click="5">
                                                            <input id="click_like005" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_like005">10:00</label>
                                                        </li>

                                                        <li all-li-click="6">
                                                            <input id="click_like006" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_like006">10:30</label>
                                                        </li>
                                                    </ul>

                                                    <div class="clearfix"></div>

                                                    <ul all-click="2" class="today_time">
                                                        <li all-li-click="1">
                                                            <input id="click_like007" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_like007">11:00</label>
                                                        </li>

                                                        <li all-li-click="2">
                                                            <input id="click_like008" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_like008">11:30</label>
                                                        </li>

                                                        <li all-li-click="3">
                                                            <input id="click_like009" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_like009">12:00</label>
                                                        </li>

                                                        <li all-li-click="4">
                                                            <input id="click_like0010" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_like0010">12:30</label>
                                                        </li>

                                                        <li all-li-click="5">
                                                            <input id="click_like0011" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_like0011">13:00</label>
                                                        </li>

                                                        <li all-li-click="6">
                                                            <input id="click_like0012" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_like0012">13:30</label>
                                                        </li>
                                                    </ul>

                                                    <div class="clearfix"></div>

                                                    <ul all-click="3" class="today_time">
                                                        <li all-li-click="1">
                                                            <input id="click_like0013" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_like0013">14:00</label>
                                                        </li>

                                                        <li all-li-click="2">
                                                            <input id="click_like0014" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_like0014">14:30</label>
                                                        </li>

                                                        <li all-li-click="3">
                                                            <input id="click_like0015" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_like0015">15:00</label>
                                                        </li>

                                                        <li all-li-click="4">
                                                            <input id="click_like0016" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_like0016">15:30</label>
                                                        </li>

                                                        <li all-li-click="5">
                                                            <input id="click_like0017" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_like0017">16:00</label>
                                                        </li>

                                                        <li all-li-click="6">
                                                            <input id="click_like0018" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_like0018">16:30</label>
                                                        </li>

                                                    </ul>

                                                    <div class="clearfix"></div>

                                                    <ul all-click="4" class="today_time">
                                                        <li all-li-click="1">
                                                            <input id="click_like0019" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_like0019">17:00</label>
                                                        </li>

                                                        <li all-li-click="2">
                                                            <input id="click_like0020" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_like0020">17:30</label>
                                                        </li>

                                                        <li all-li-click="3">
                                                            <input id="click_like0021" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_like0021">18:00</label>
                                                        </li>

                                                        <li all-li-click="4">
                                                            <input id="click_like0022" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_like0022">18:30</label>
                                                        </li>

                                                        <li all-li-click="5">
                                                            <input id="click_like0023" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_like0023">19:00</label>
                                                        </li>

                                                        <li all-li-click="6">
                                                            <input id="click_like0024" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_like0024">19:30</label>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="tab-pane fade" id="time_tab_mob2">

                                                    <ul all-click="1" class="today_time">
                                                        <li all-li-click="1">
                                                            <input id="click_intro001" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_intro001">8:00</label>
                                                        </li>

                                                        <li all-li-click="2">
                                                            <input id="click_intro002" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_intro002">8:30</label>
                                                        </li>

                                                        <li all-li-click="3">
                                                            <input id="click_intro003" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_intro003">9:00</label>
                                                        </li>

                                                        <li all-li-click="4">
                                                            <input id="click_intro004" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_intro004">9:30</label>
                                                        </li>

                                                        <li all-li-click="5">
                                                            <input id="click_intro005" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_intro005">10:00</label>
                                                        </li>

                                                        <li all-li-click="6">
                                                            <input id="click_intro006" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_intro006">10:30</label>
                                                        </li>
                                                    </ul>

                                                    <div class="clearfix"></div>

                                                    <ul all-click="2" class="today_time">
                                                        <li all-li-click="1">
                                                            <input id="click_intro007" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_intro007">11:00</label>
                                                        </li>

                                                        <li all-li-click="2">
                                                            <input id="click_intro008" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_intro008">11:30</label>
                                                        </li>

                                                        <li all-li-click="3">
                                                            <input id="click_intro009" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_intro009">12:00</label>
                                                        </li>

                                                        <li all-li-click="4">
                                                            <input id="click_intro0010" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_intro0010">12:30</label>
                                                        </li>

                                                        <li all-li-click="5">
                                                            <input id="click_intro0011" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_intro0011">13:00</label>
                                                        </li>

                                                        <li all-li-click="6">
                                                            <input id="click_intro0012" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_intro0012">13:30</label>
                                                        </li>
                                                    </ul>

                                                    <div class="clearfix"></div>

                                                    <ul all-click="3" class="today_time">
                                                        <li all-li-click="1">
                                                            <input id="click_intro0013" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_intro0013">14:00</label>
                                                        </li>

                                                        <li all-li-click="2">
                                                            <input id="click_intro0014" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_intro0014">14:30</label>
                                                        </li>

                                                        <li all-li-click="3">
                                                            <input id="click_intro0015" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_intro0015">15:00</label>
                                                        </li>

                                                        <li all-li-click="4">
                                                            <input id="click_intro0016" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_intro0016">15:30</label>
                                                        </li>

                                                        <li all-li-click="5">
                                                            <input id="click_intro0017" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_intro0017">16:00</label>
                                                        </li>

                                                        <li all-li-click="6">
                                                            <input id="click_intro0018" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_intro0018">16:30</label>
                                                        </li>
                                                    </ul>

                                                    <div class="clearfix"></div>

                                                    <ul all-click="4" class="today_time">
                                                        <li all-li-click="1">
                                                            <input id="click_intro0019" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_intro0019">17:00</label>
                                                        </li>

                                                        <li all-li-click="2">
                                                            <input id="click_intro0020" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_intro0020">17:30</label>
                                                        </li>

                                                        <li all-li-click="3">
                                                            <input id="click_intro0021" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_intro0021">18:00</label>
                                                        </li>

                                                        <li all-li-click="4">
                                                            <input id="click_intro0022" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_intro0022">18:30</label>
                                                        </li>

                                                        <li all-li-click="5">
                                                            <input id="click_intro0023" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_intro0023">19:00</label>
                                                        </li>

                                                        <li all-li-click="6">
                                                            <input id="click_intro0024" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_intro0024">19:30</label>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="tab-pane fade" id="time_tab_mob3">
                                                    <ul all-click="1" class="today_time">
                                                        <li all-li-click="1">
                                                            <input id="click_meeting001" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_meeting001">8:00</label>
                                                        </li>

                                                        <li all-li-click="2">
                                                            <input id="click_meeting002" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_meeting002">8:30</label>
                                                        </li>

                                                        <li all-li-click="3">
                                                            <input id="click_meeting003" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_meeting003">9:00</label>
                                                        </li>

                                                        <li all-li-click="4">
                                                            <input id="click_meeting004" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_meeting004">9:30</label>
                                                        </li>

                                                        <li all-li-click="5">
                                                            <input id="click_meeting005" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_meeting005">10:00</label>
                                                        </li>

                                                        <li all-li-click="6">
                                                            <input id="click_meeting006" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_meeting006">10:30</label>
                                                        </li>
                                                    </ul>

                                                    <div class="clearfix"></div>

                                                    <ul all-click="2" class="today_time">

                                                        <li all-li-click="1">

                                                            <input id="click_meeting007" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

                                                            <label for="click_meeting007">11:00</label>

                                                        </li>

                                                        <li all-li-click="2">

                                                            <input id="click_meeting008" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

                                                            <label for="click_meeting008">11:30</label>

                                                        </li>

                                                        <li all-li-click="3">

                                                            <input id="click_meeting009" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

                                                            <label for="click_meeting009">12:00</label>

                                                        </li>

                                                        <li all-li-click="4">

                                                            <input id="click_meeting0010" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

                                                            <label for="click_meeting0010">12:30</label>

                                                        </li>

                                                        <li all-li-click="5">

                                                            <input id="click_meeting0011" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

                                                            <label for="click_meeting0011">13:00</label>

                                                        </li>

                                                        <li all-li-click="6">

                                                            <input id="click_meeting0012" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

                                                            <label for="click_meeting0012">13:30</label>

                                                        </li>

                                                    </ul>

                                                    <div class="clearfix"></div>

                                                    <ul all-click="3" class="today_time">

                                                        <li all-li-click="1">

                                                            <input id="click_meeting0013" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

                                                            <label for="click_meeting0013">14:00</label>

                                                        </li>

                                                        <li all-li-click="2">

                                                            <input id="click_meeting0014" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

                                                            <label for="click_meeting0014">14:30</label>

                                                        </li>

                                                        <li all-li-click="3">

                                                            <input id="click_meeting0015" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

                                                            <label for="click_meeting0015">15:00</label>

                                                        </li>

                                                        <li all-li-click="4">

                                                            <input id="click_meeting0016" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

                                                            <label for="click_meeting0016">15:30</label>

                                                        </li>

                                                        <li all-li-click="5">

                                                            <input id="click_meeting0017" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

                                                            <label for="click_meeting0017">16:00</label>

                                                        </li>

                                                        <li all-li-click="6">

                                                            <input id="click_meeting0018" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

                                                            <label for="click_meeting0018">16:30</label>

                                                        </li>

                                                    </ul>

                                                    <div class="clearfix"></div>

                                                    <ul all-click="4" class="today_time">

                                                        <li all-li-click="1">

                                                            <input id="click_meeting0019" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

                                                            <label for="click_meeting0019">17:00</label>

                                                        </li>

                                                        <li all-li-click="2">

                                                            <input id="click_meeting0020" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

                                                            <label for="click_meeting0020">17:30</label>

                                                        </li>

                                                        <li all-li-click="3">

                                                            <input id="click_meeting0021" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

                                                            <label for="click_meeting0021">18:00</label>

                                                        </li>

                                                        <li all-li-click="4">

                                                            <input id="click_meeting0022" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

                                                            <label for="click_meeting0022">18:30</label>

                                                        </li>

                                                        <li all-li-click="5">

                                                            <input id="click_meeting0023" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

                                                            <label for="click_meeting0023">19:00</label>

                                                        </li>

                                                        <li all-li-click="6">

                                                            <input id="click_meeting0024" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

                                                            <label for="click_meeting0024">19:30</label>

                                                        </li>

                                                    </ul>

                                                </div>

                                                <div class="tab-pane fade" id="time_tab_mob4">

                                                    <ul all-click="1" class="today_time">
                                                        <li all-li-click="1">
                                                            <input id="click_call001" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_call001">8:00</label>
                                                        </li>

                                                        <li all-li-click="2">
                                                            <input id="click_call002" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_call002">8:30</label>
                                                        </li>

                                                        <li all-li-click="3">
                                                            <input id="click_call003" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_call003">9:00</label>
                                                        </li>

                                                        <li all-li-click="4">
                                                            <input id="click_call004" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_call004">9:30</label>
                                                        </li>

                                                        <li all-li-click="5">
                                                            <input id="click_call005" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_call005">10:00</label>
                                                        </li>

                                                        <li all-li-click="6">
                                                            <input id="click_call006" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_call006">10:30</label>
                                                        </li>
                                                    </ul>

                                                    <div class="clearfix"></div>

                                                    <ul all-click="2" class="today_time">
                                                        <li all-li-click="1">
                                                            <input id="click_call007" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_call007">11:00</label>
                                                        </li>

                                                        <li all-li-click="2">
                                                            <input id="click_call008" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_call008">11:30</label>
                                                        </li>

                                                        <li all-li-click="3">
                                                            <input id="click_call009" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_call009">12:00</label>
                                                        </li>

                                                        <li all-li-click="4">
                                                            <input id="click_call0010" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_call0010">12:30</label>
                                                        </li>

                                                        <li all-li-click="5">
                                                            <input id="click_call0011" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_call0011">13:00</label>
                                                        </li>

                                                        <li all-li-click="6">
                                                            <input id="click_call0012" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_call0012">13:30</label>
                                                        </li>
                                                    </ul>

                                                    <div class="clearfix"></div>

                                                    <ul all-click="3" class="today_time">
                                                        <li all-li-click="1">
                                                            <input id="click_call0013" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_call0013">14:00</label>
                                                        </li>

                                                        <li all-li-click="2">
                                                            <input id="click_call0014" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_call0014">14:30</label>
                                                        </li>

                                                        <li all-li-click="3">
                                                            <input id="click_call0015" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

                                                            <label for="click_call0015">15:00</label>
                                                        </li>

                                                        <li all-li-click="4">
                                                            <input id="click_call0016" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

                                                            <label for="click_call0016">15:30</label>
                                                        </li>

                                                        <li all-li-click="5">
                                                            <input id="click_call0017" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_call0017">16:00</label>
                                                        </li>

                                                        <li all-li-click="6">
                                                            <input id="click_call0018" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_call0018">16:30</label>
                                                        </li>
                                                    </ul>

                                                    <div class="clearfix"></div>

                                                    <ul all-click="4" class="today_time">
                                                        <li all-li-click="1">
                                                            <input id="click_call0019" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_call0019">17:00</label>
                                                        </li>

                                                        <li all-li-click="2">
                                                            <input id="click_call0020" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_call0020">17:30</label>
                                                        </li>

                                                        <li all-li-click="3">
                                                            <input id="click_call0021" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_call0021">18:00</label>
                                                        </li>

                                                        <li all-li-click="4">
                                                            <input id="click_call0022" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_call0022">18:30</label>
                                                        </li>

                                                        <li all-li-click="5">
                                                            <input id="click_call0023" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_call0023">19:00</label>
                                                        </li>

                                                        <li all-li-click="6">
                                                            <input id="click_call0024" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_call0024">19:30</label>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="tab-pane fade" id="time_tab_mob5">
                                                    <ul all-click="1" class="today_time">
                                                        <li all-li-click="1">
                                                            <input id="click_friday001" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_friday001">8:00</label>
                                                        </li>

                                                        <li all-li-click="2">
                                                            <input id="click_friday002" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_friday002">8:30</label>
                                                        </li>

                                                        <li all-li-click="3">
                                                            <input id="click_friday003" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_friday003">9:00</label>
                                                        </li>

                                                        <li all-li-click="4">
                                                            <input id="click_friday004" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_friday004">9:30</label>
                                                        </li>

                                                        <li all-li-click="5">
                                                            <input id="click_friday005" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_friday005">10:00</label>
                                                        </li>

                                                        <li all-li-click="6">
                                                            <input id="click_friday006" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_friday006">10:30</label>
                                                        </li>
                                                    </ul>

                                                    <div class="clearfix"></div>

                                                    <ul all-click="2" class="today_time">
                                                        <li all-li-click="1">
                                                            <input id="click_friday007" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_friday007">11:00</label>
                                                        </li>

                                                        <li all-li-click="2">
                                                            <input id="click_friday008" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_friday008">11:30</label>
                                                        </li>

                                                        <li all-li-click="3">
                                                            <input id="click_friday009" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_friday009">12:00</label>
                                                        </li>

                                                        <li all-li-click="4">
                                                            <input id="click_friday0010" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_friday0010">12:30</label>
                                                        </li>

                                                        <li all-li-click="5">
                                                            <input id="click_friday0011" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_friday0011">13:00</label>
                                                        </li>

                                                        <li all-li-click="6">
                                                            <input id="click_friday0012" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_friday0012">13:30</label>
                                                        </li>

                                                    </ul>

                                                    <div class="clearfix"></div>

                                                    <ul all-click="3" class="today_time">
                                                        <li all-li-click="1">
                                                            <input id="click_friday0013" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_friday0013">14:00</label>
                                                        </li>

                                                        <li all-li-click="2">
                                                            <input id="click_friday0014" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_friday0014">14:30</label>
                                                        </li>

                                                        <li all-li-click="3">
                                                            <input id="click_friday0015" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_friday0015">15:00</label>
                                                        </li>

                                                        <li all-li-click="4">
                                                            <input id="click_friday0016" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_friday0016">15:30</label>
                                                        </li>

                                                        <li all-li-click="5">
                                                            <input id="click_friday0017" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_friday0017">16:00</label>
                                                        </li>

                                                        <li all-li-click="6">
                                                            <input id="click_friday0018" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_friday0018">16:30</label>
                                                        </li>
                                                    </ul>

                                                    <div class="clearfix"></div>

                                                    <ul all-click="4" class="today_time">
                                                        <li all-li-click="1">
                                                            <input id="click_friday0019" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_friday0019">17:00</label>
                                                        </li>

                                                        <li all-li-click="2">
                                                            <input id="click_friday0020" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_friday0020">17:30</label>
                                                        </li>

                                                        <li all-li-click="3">
                                                            <input id="click_friday0021" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_friday0021">18:00</label>
                                                        </li>

                                                        <li all-li-click="4">
                                                            <input id="click_friday0022" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_friday0022">18:30</label>
                                                        </li>

                                                        <li all-li-click="5">
                                                            <input id="click_friday0023" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_friday0023">19:00</label>
                                                        </li>

                                                        <li all-li-click="6">
                                                            <input id="click_friday0024" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="click_friday0024">19:30</label>
                                                        </li>
                                                    </ul>

                                                </div>

                                                <div class="tab-pane fade" id="time_tab_mob6">
                                                    <ul all-click="1" class="today_time">
                                                        <li all-li-click="1">
                                                            <input id="clk_friday001" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="clk_friday001">8:00</label>
                                                        </li>

                                                        <li all-li-click="2">
                                                            <input id="clk_friday002" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="clk_friday002">8:30</label>
                                                        </li>

                                                        <li all-li-click="3">
                                                            <input id="clk_friday003" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="clk_friday003">9:00</label>
                                                        </li>

                                                        <li all-li-click="4">
                                                            <input id="clk_friday004" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="clk_friday004">9:30</label>
                                                        </li>

                                                        <li all-li-click="5">
                                                            <input id="clk_friday005" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="clk_friday005">10:00</label>
                                                        </li>

                                                        <li all-li-click="6">
                                                            <input id="clk_friday006" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="clk_friday006">10:30</label>
                                                        </li>
                                                    </ul>

                                                    <div class="clearfix"></div>

                                                    <ul all-click="2" class="today_time">
                                                        <li all-li-click="1">
                                                            <input id="clk_friday007" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="clk_friday007">11:00</label>
                                                        </li>

                                                        <li all-li-click="2">
                                                            <input id="clk_friday008" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="clk_friday008">11:30</label>
                                                        </li>

                                                        <li all-li-click="3">
                                                            <input id="clk_friday009" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="clk_friday009">12:00</label>
                                                        </li>

                                                        <li all-li-click="4">
                                                            <input id="clk_friday0010" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="clk_friday0010">12:30</label>
                                                        </li>

                                                        <li all-li-click="5">
                                                            <input id="clk_friday0011" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="clk_friday0011">13:00</label>
                                                        </li>

                                                        <li all-li-click="6">
                                                            <input id="clk_friday0012" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="clk_friday0012">13:30</label>
                                                        </li>

                                                    </ul>

                                                    <div class="clearfix"></div>

                                                    <ul all-click="3" class="today_time">
                                                        <li all-li-click="1">
                                                            <input id="clk_friday0013" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="clk_friday0013">14:00</label>
                                                        </li>

                                                        <li all-li-click="2">
                                                            <input id="clk_friday0014" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="clk_friday0014">14:30</label>
                                                        </li>

                                                        <li all-li-click="3">
                                                            <input id="clk_friday0015" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="clk_friday0015">15:00</label>
                                                        </li>

                                                        <li all-li-click="4">
                                                            <input id="clk_friday0016" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="clk_friday0016">15:30</label>
                                                        </li>

                                                        <li all-li-click="5">
                                                            <input id="clk_friday0017" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="clk_friday0017">16:00</label>
                                                        </li>

                                                        <li all-li-click="6">
                                                            <input id="clk_friday0018" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="clk_friday0018">16:30</label>
                                                        </li>
                                                    </ul>

                                                    <div class="clearfix"></div>

                                                    <ul all-click="4" class="today_time">
                                                        <li all-li-click="1">
                                                            <input id="clk_friday0019" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="clk_friday0019">17:00</label>
                                                        </li>

                                                        <li all-li-click="2">
                                                            <input id="clk_friday0020" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="clk_friday0020">17:30</label>
                                                        </li>

                                                        <li all-li-click="3">
                                                            <input id="clk_friday0021" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="clk_friday0021">18:00</label>
                                                        </li>

                                                        <li all-li-click="4">
                                                            <input id="clk_friday0022" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="clk_friday0022">18:30</label>
                                                        </li>

                                                        <li all-li-click="5">
                                                            <input id="clk_friday0023" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="clk_friday0023">19:00</label>
                                                        </li>

                                                        <li all-li-click="6">
                                                            <input id="clk_friday0024" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                            <label for="clk_friday0024">19:30</label>
                                                        </li>
                                                    </ul>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end of panel_6 -->

                        <div class="clear40"></div>

                        <button type="button" class="btn btn-info btn-lg btn_quick_mobile">Open Job</button>

                        <button type="button" class="btn btn-info btn-lg btn_request btn_quick_mobile">Request information</button>

                        <button type="button" class="btn btn-info btn-lg btn_request btn_quick_mobile">Send to agency</button>

                        <button type="button" class="btn btn-info btn-lg btn_request btn_quick_mobile">Save</button>
                    </div>
                    <!-- endof #bs-collapse  -->
                </div>

            </div>
        </div>

        <!-- job_popup End -->
    </div>