<?php
    $where = array('setting_id' => 19);
    $table = 'ts_setting_values';
    $jobfields = GetSettingsData($table, $where);
    // specfied location of the job 
    $where1 = array('setting_id' => 20);
    $joblocations = GetSettingsData($table, $where1); 
    // annual pay for the job
    $where2 = array('setting_id' => 21);
    $payannuals = GetSettingsData($table, $where2);
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
    <div class="login_bg">
        Quick Job
    </div>

    <div class="login_area">
        <div class="container">
            <div class="">

            <div class="clearfix"></div>

            <!-- New_Talent_Desktop_Table -->

            <div class="col-sm-12 p0">
                <div class="clear20"></div>
                <div class="panel with-nav-tabs panel-default">
    

    
                        <div class="panel-body">
                            <div class="tab-content">
                            <!--job_popup Start -->
                            
                                
                                <div class="tab-pane fade in active" id="tab1default_job">
                                    <!-- Quick_job_desktop -->
                                    
                                    <div class="quick_desktop_tbl">
                                        <!-- form submitted in public/js.main.js file -->
                                        <form id="front_job_request_form" method="post">
                                        <table class="table table-bordered table-hover table_new_talent" id="button_checked" style="background:#fff;">  

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

                                                        <input id="talent_job" name="talent_job" type="checkbox" class="display_none_talent3">

                                                        <label for="talent_job">Job</label>

                                                    </td>

                                                    <td valign="middle" class="green_hover">

                                                        <select class="active_select" name="front_job_field" id="front_job_field" txt-attr="Job field - ">
                                                            <option value="">Job field</option>
                                                            <?php foreach ($jobfields as $jobfield) { ?>
                                                                <option value="<?php echo $jobfield['value_id']; ?>"><?php echo $jobfield['value_name']; ?></option>
                                                            <?php } ?>
                                                        </select>

                                                    </td>

                                                    <td valign="middle">

                                                        <input name="front_job_title" id="front_job_title" type="text" class="green_hover" placeholder="Job Title">

                                                    </td>

                                                    <td valign="middle" class="green_hover">
                                                        <select name="front_job_location" id="front_job_location" class="test1 desktop_cities_multiple" multiple="multiple">
                                                            <option value="">Location</option>
                                                                <?php foreach ($joblocations as $joblocation) { ?>
                                                                <option value="<?php echo $joblocation['value_id']; ?>"><?php echo $joblocation['value_name']; ?></option>
                                                                <?php } ?>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <!-- user email from front end via job request start -->
                                                <tr class="front_job_user_email">

                                                    <td class="td_1_green_label">

                                                        <input id="user_email" name="user_email" type="checkbox" class="display_none_talent3">

                                                        <label for="user_email">Email Address</label>

                                                    </td>
                                                    <td valign="middle" colspan="3">
                                                        <input name="front_user_email" id="front_user_email" type="text" class="green_hover" placeholder="Email Address">
                                                    </td>
                                                </tr>
                                                <!-- user email from front end via job request end -->
                                                <tr class="level_jb_pop_quick_job">
                                                    <td class="td_1_green_label">
                                                        <input id="full_request03_quick_job" type="checkbox" class="display_none_talent3">
                                                        <label for="full_request03_quick_job">Level</label>
                                                    </td>
                                                    <td valign="middle" class="green_hover">
                                                        <input id="leader_of_leader_jb_pop_quick_job" name="front_job_level" class="display_none_talent3" type="checkbox" value="Leader of leaders">
                                                        <label for="leader_of_leader_jb_pop_quick_job">Leader of leaders</label>
                                                    </td>
                                                    <td valign="middle" class="green_hover">
                                                        <input id="leader_of_professional_jb_pop_quick_job" name="front_job_level" class="display_none_talent3" type="checkbox" value="Leader of professionals">
                                                        <label for="leader_of_professional_jb_pop_quick_job">Leader of professionals</label>
                                                    </td>                                                   
                                                    
                                                    <td valign="middle" class="green_hover">
                                                        <input id="individual_prefossional_jb_pop_quick_job" name="front_job_level" class="display_none_talent3" type="checkbox" value="Individual professional">
                                                        <label for="individual_prefossional_jb_pop_quick_job">Individual professional</label>
                                                    </td>
                                                </tr>

                                                
                            <tr class="contract">
                                    <td class="td_1_green_label">
                                        <input id="proof0120" type="checkbox" class="display_none_talent3">
                                        <label for="proof0120">Contract type</label>
                                    </td>

                                    <td valign="middle" class="green_hover">
                                        <input id="perm" class="display_none_talent3" name="front_contract_type" type="checkbox" value="Permanent"></input>
                                        <label for="perm">Permanent</label>
                                    </td>

                                    <td valign="middle" class="green_hover">
                                        <!--fixed_term_talent_request-->
                                        <input id="ftc" class="display_none_talent3" name="front_contract_type" type="checkbox" value="Fixed-term"></input>
                                        <label for="ftc">Fixed-term</label>
                                    </td>

                                    <td valign="middle" class="green_hover">
                                        <input id="contractor_page_desk" class="display_none_talent3" name="front_contract_type" type="checkbox" value="Contractor">
                                        <label for="contractor_page_desk">Contractor</label>
                                    </td>
                                </tr>

                                

                                <tr class="div_contr_mnth_ntj talent_request_length_months" style="display: table-row;">
                                    <td class="td_1_green_label">
                                        <input id="length_in_months" type="checkbox" class="display_none_talent3">
                                        <label for="length_in_months">Contract months</label>
                                    </td>
                                    <td colspan="3">
                                        <div class="panel with-nav-tabs panel-default">
                                            <div class="panel-heading">
                                                <ul class="nav nav-tabs" id="select_days_label">
                                                    <li>
                                                        <a href="#">
                                                            <input id="length_months_1" name="front_contract_months" value="1" type="checkbox" class="display_none_talent3 contract_mnth_sel_one_ntj">
                                                            <label for="length_months_1">1</label>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <input id="length_months_2" type="checkbox" name="front_contract_months" value="2" class="display_none_talent3 contract_mnth_sel_one_ntj">
                                                            <label for="length_months_2">2</label>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <input id="length_months_3" type="checkbox" name="front_contract_months" value="3" class="display_none_talent3 contract_mnth_sel_one_ntj">
                                                            <label for="length_months_3">3</label>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <input id="length_months_4" type="checkbox" class="display_none_talent3 contract_mnth_sel_one_ntj" name="front_contract_months" value="4">
                                                            <label for="length_months_4">4</label>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <input id="length_months_5" type="checkbox" class="display_none_talent3 contract_mnth_sel_one_ntj" name="front_contract_months" value="5">
                                                            <label for="length_months_5">5</label>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <input id="length_months_6" type="checkbox" class="display_none_talent3 contract_mnth_sel_one_ntj" name="front_contract_months" value="6">
                                                            <label for="length_months_6">6</label>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <input id="length_months_7" type="checkbox" class="display_none_talent3 contract_mnth_sel_one_ntj" name="front_contract_months" value="7">
                                                            <label for="length_months_7">7</label>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <input id="length_months_8" type="checkbox" class="display_none_talent3 contract_mnth_sel_one_ntj" name="front_contract_months" value="8">
                                                            <label for="length_months_8">8</label>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <input id="length_months_9" type="checkbox" class="display_none_talent3 contract_mnth_sel_one_ntj" name="front_contract_months" value="9">
                                                            <label for="length_months_9">9</label>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <input id="length_months_10" type="checkbox" class="display_none_talent3 contract_mnth_sel_one_ntj" name="front_contract_months" value="10">
                                                            <label for="length_months_10">10</label>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <input id="length_months_11" type="checkbox" class="display_none_talent3 contract_mnth_sel_one_ntj" name="front_contract_months" value="11">
                                                            <label for="length_months_11">11</label>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <input id="length_months_12" type="checkbox" class="display_none_talent3 contract_mnth_sel_one_ntj" name="front_contract_months" value="12">
                                                            <label for="length_months_12">12</label>
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
                                        <select class="active_select drp_gray_clr_select active_annual" name="front_annual_pay" id="pay_frst_drp" txt-attr="Pay annual - ">
                                            <option value="">Pay - annual</option>
                                            <?php foreach ($payannuals as $payannual) { ?>
                                                <option value="<?php echo $payannual['value_id']; ?>">$<?php 
                                                $number = number_format($payannual['value_name']); 
                                                echo $number; ?></option>

                                            <?php } ?>
                                        </select>

                                        <select class="active_select drp_gray_clr_select active_annual" name="front_daily_pay" id="pay_dialy_drp_des_ntj" txt-attr="Daily - ">
                                            <option value="">Daily</option>
                                            <?php foreach ($paydaily as $paydaily) { ?>
                                                <option value="<?php echo $paydaily['value_id']; ?>">$<?php 
                                                $number = number_format($paydaily['value_name']); 
                                                echo $number; ?></option>

                                            <?php } ?>
                                        </select>
                                    </td>

                                    <td valign="middle" class="green_hover">
                                        <input id="proof01031" type="checkbox" name="front_flexible_on_pay" value="true" class="display_none_talent3">
                                        <label for="proof01031">Flexible on pay</label>
                                    </td>

                                    <td valign="middle" class="green_hover">
                                        <select class="active_select" name="front_bonus" id="pay_bonus_percentage" txt-attr="Bonus - ">
                                            <option value="">Bonus</option>
                                            <?php foreach ($bonus as $bonus) { ?>
                                            <option value="<?php echo $bonus['value_id']; ?>"><?php echo $bonus['value_name']; ?>%</option>
                                            <?php } ?>
                                        </select>
                                    </td>
                                </tr>

                                                
                                                <tr id="date_time_tabs">

                                                    <td valign="middle" class="pdg_talent_sub_left td_1_green_label" style="border-bottom: solid 0px #fff !important;">

                                                        <input id="talent_HM" type="checkbox" class="display_none_talent3">

                                                        <label for="talent_HM" data-placement="top" data-toggle="popover" data-trigger="hover" data-content="Red: Description _ Green: Description">Hiring manager availablity </label>

                                                    </td>

                                                    <td colspan="3">

                                                        <div class="panel with-nav-tabs panel-default">
                                                            <div class="panel-heading">

                                                                <ul class="nav nav-tabs">

                                                                    <li><a href="javascript:void(0);"  attr-id="date_time_pop1" class="hm_avail_qk_jb_pop_desk" onclick="hm_availability_click(this)">All</a></li>
                                                                    
                                                                    <li><a href="javascript:void(0);"  attr-id="date_time_pop2" class="hm_avail_qk_jb_pop_desk" onclick="hm_availability_click(this)">Monday</a></li>

                                                                    <li><a href="javascript:void(0);"  attr-id="date_time_pop3" class="hm_avail_qk_jb_pop_desk" onclick="hm_availability_click(this)">Tuesday</a></li>

                                                                    <li><a href="javascript:void(0);"  attr-id="date_time_pop4" class="hm_avail_qk_jb_pop_desk" onclick="hm_availability_click(this)">Wednesday</a></li>

                                                                    <li><a href="javascript:void(0);"  attr-id="date_time_pop5" class="hm_avail_qk_jb_pop_desk" onclick="hm_availability_click(this)">Thursday</a></li>

                                                                    <li><a href="javascript:void(0);"  attr-id="date_time_pop6" class="hm_avail_qk_jb_pop_desk" onclick="hm_availability_click(this)">Friday</a></li>

                                                                </ul>

                                                            </div>

                                                            <div class="panel-body">

                                                                <div class="tab-content hm_tb_content_qk_jb_pop_desk">
                                                                    <div class="tab-pane fade in " id="date_time_pop1">
                                                                        <ul class="today_time" all-click="1">
                                                                            <li all-li-click="1">
                                                                                <input id="all_pop_like001" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-all-800" value="all-8:00">
                                                                                <label for="all_pop_like001">8:00</label>
                                                                            </li>
                                                                            <li all-li-click="2">
                                                                                <input id="all_pop_like002" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-all-830" value="all-8:30">
                                                                                <label for="all_pop_like002">8:30</label>
                                                                            </li>
                                                                            <li all-li-click="3">
                                                                                <input id="all_pop_like003" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-all-900" value="all-9:00">
                                                                                <label for="all_pop_like003">9:00</label>
                                                                            </li>
                                                                            <li all-li-click="4">
                                                                                <input id="all_pop_like004" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-all-930" value="all-9:30">
                                                                                <label for="all_pop_like004">9:30</label>
                                                                            </li>
                                                                            <li all-li-click="5">

                                                                                <input id="all_pop_like005" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-all-1000" value="all-10:00">

                                                                                <label for="all_pop_like005">10:00</label>

                                                                            </li>

                                                                            <li all-li-click="6">

                                                                                <input id="all_pop_like006" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-all-1030" value="all-10:30">

                                                                                <label for="all_pop_like006">10:30</label>

                                                                            </li>

                                                                        </ul>

                                                                        <div class="clearfix"></div>

                                                                        <ul class="today_time" all-click="2">

                                                                            <li all-li-click="1">

                                                                                <input id="all_pop_like007" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-all-1100" value="all-11:00">

                                                                                <label for="all_pop_like007">11:00</label>

                                                                            </li>

                                                                            <li all-li-click="2">

                                                                                <input id="all_pop_like008" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-all-1130" value="all-11:30">

                                                                                <label for="all_pop_like008">11:30</label>

                                                                            </li>

                                                                            <li all-li-click="3">

                                                                                <input id="all_pop_like009" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-all-1200" value="all-12:00">

                                                                                <label for="all_pop_like009">12:00</label>

                                                                            </li>

                                                                            <li all-li-click="4">

                                                                                <input id="all_pop_like0010" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-all-1230" value="all-12:30">

                                                                                <label for="all_pop_like0010">12:30</label>

                                                                            </li>

                                                                            <li all-li-click="5">

                                                                                <input id="all_pop_like0011" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-all-1300" value="all-13:00">

                                                                                <label for="all_pop_like0011">13:00</label>

                                                                            </li>

                                                                            <li all-li-click="6">

                                                                                <input id="all_pop_like0012" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-all-1330" value="all-13:30">

                                                                                <label for="all_pop_like0012">13:30</label>

                                                                            </li>

                                                                        </ul>

                                                                        <div class="clearfix"></div>

                                                                        <ul class="today_time" all-click="3">

                                                                            <li all-li-click="1">

                                                                                <input id="all_pop_like0013" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-all-1400" value="all-14:00">

                                                                                <label for="all_pop_like0013">14:00</label>

                                                                            </li>

                                                                            <li all-li-click="2">

                                                                                <input id="all_pop_like0014" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-all-1430" value="all-14:30">

                                                                                <label for="all_pop_like0014">14:30</label>

                                                                            </li>

                                                                            <li all-li-click="3">

                                                                                <input id="all_pop_like0015" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-all-1500" value="all-15:00">

                                                                                <label for="all_pop_like0015">15:00</label>

                                                                            </li>

                                                                            <li all-li-click="4">

                                                                                <input id="all_pop_like0016" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-all-1530" value="all-15:30">

                                                                                <label for="all_pop_like0016">15:30</label>

                                                                            </li>

                                                                            <li all-li-click="5">

                                                                                <input id="all_pop_like0017" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-all-1600" value="all-16:00">

                                                                                <label for="all_pop_like0017">16:00</label>

                                                                            </li>

                                                                            <li all-li-click="6">

                                                                                <input id="all_pop_like0018" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-all-1630" value="all-16:30">

                                                                                <label for="all_pop_like0018">16:30</label>

                                                                            </li>

                                                                        </ul>

                                                                        <div class="clearfix"></div>

                                                                        <ul class="today_time" all-click="4">

                                                                            <li all-li-click="1">

                                                                                <input id="all_pop_like0019" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-all-1700" value="all-17:00">

                                                                                <label for="all_pop_like0019">17:00</label>

                                                                            </li>

                                                                            <li all-li-click="2">

                                                                                <input id="all_pop_like0020" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-all-1730" value="all-17:30">

                                                                                <label for="all_pop_like0020">17:30</label>

                                                                            </li>

                                                                            <li all-li-click="3">

                                                                                <input id="all_pop_like0021" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-all-1800" value="all-18:00">

                                                                                <label for="all_pop_like0021">18:00</label>

                                                                            </li>

                                                                            <li all-li-click="4">

                                                                                <input id="all_pop_like0022" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-all-830" value="all-8:30">

                                                                                <label for="all_pop_like0022">18:30</label>

                                                                            </li>

                                                                            <li all-li-click="5">

                                                                                <input id="all_pop_like0023" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-all-1900" value="all-19:00">

                                                                                <label for="all_pop_like0023">19:00</label>

                                                                            </li>

                                                                            <li all-li-click="6">

                                                                                <input id="all_pop_like0024" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-all-1930" value="all-19:30">

                                                                                <label for="all_pop_like0024">19:30</label>

                                                                            </li>

                                                                        </ul>

                                                                    </div>


                                                        
                                                                    <div class="tab-pane fade in" id="date_time_pop2">
                                                                        <ul class="today_time" all-click="1">
                                                                            <li all-li-click="1">
                                                                                <input id="pop_intro001" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-mon-800" value="mon-8:00">
                                                                                <label for="pop_intro001">8:00</label>
                                                                            </li>
                                                                            <li all-li-click="2">
                                                                                <input id="pop_intro002" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-mon-830" value="mon-8:30">
                                                                                <label for="pop_intro002">8:30</label>
                                                                            </li>
                                                                            <li all-li-click="3">
                                                                                <input id="pop_intro003" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-mon-900" value="mon-9:00">
                                                                                <label for="pop_intro003">9:00</label>
                                                                            </li>
                                                                            <li all-li-click="4">
                                                                                <input id="pop_intro004" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-mon-930" value="mon-9:30">
                                                                                <label for="pop_intro004">9:30</label>
                                                                            </li>
                                                                            <li all-li-click="5">
                                                                                <input id="pop_intro005" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-mon-1000" value="mon-10:00">
                                                                                <label for="pop_intro005">10:00</label>
                                                                            </li>
                                                                            <li all-li-click="6">
                                                                                <input id="pop_intro006" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-mon-1030" value="mon-10:30">
                                                                                <label for="pop_intro006">10:30</label>
                                                                            </li>
                                                                        </ul>
                                                                        <div class="clearfix"></div>
                                                                        <ul class="today_time" all-click="2">
                                                                            <li all-li-click="1">
                                                                                <input id="pop_intro007" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-mon-1100" value="mon-11:00">
                                                                                <label for="pop_intro007">11:00</label>
                                                                            </li>
                                                                            <li all-li-click="2">
                                                                                <input id="pop_intro008" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-mon-1130" value="mon-11:30">
                                                                                <label for="pop_intro008">11:30</label>
                                                                            </li>
                                                                            <li all-li-click="3">
                                                                                <input id="pop_intro009" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-mon-1200" value="mon-12:00">
                                                                                <label for="pop_intro009">12:00</label>

                                                                            </li>

                                                                            <li all-li-click="4">

                                                                                <input id="pop_intro0010" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-mon-1230" value="mon-12:30">

                                                                                <label for="pop_intro0010">12:30</label>

                                                                            </li>

                                                                            <li all-li-click="5">

                                                                                <input id="pop_intro0011" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-mon-1300" value="mon-13:00">

                                                                                <label for="pop_intro0011">13:00</label>

                                                                            </li>

                                                                            <li all-li-click="6">

                                                                                <input id="pop_intro0012" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-mon-1330" value="mon-13:30">

                                                                                <label for="pop_intro0012">13:30</label>

                                                                            </li>

                                                                        </ul>

                                                                        <div class="clearfix"></div>

                                                                        <ul class="today_time" all-click="3">

                                                                            <li all-li-click="1">

                                                                                <input id="pop_intro0013" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-mon-1400" value="mon-14:00">

                                                                                <label for="pop_intro0013">14:00</label>

                                                                            </li>

                                                                            <li all-li-click="2">

                                                                                <input id="pop_intro0014" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-mon-1430" value="mon-14:30">

                                                                                <label for="pop_intro0014">14:30</label>

                                                                            </li>

                                                                            <li all-li-click="3">

                                                                                <input id="pop_intro0015" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-mon-1500" value="mon-15:00">

                                                                                <label for="pop_intro0015">15:00</label>

                                                                            </li>

                                                                            <li all-li-click="4">

                                                                                <input id="pop_intro0016" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-mon-1530" value="mon-15:30">

                                                                                <label for="pop_intro0016">15:30</label>

                                                                            </li>

                                                                            <li all-li-click="5">

                                                                                <input id="pop_intro0017" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-mon-1600" value="mon-16:00">

                                                                                <label for="pop_intro0017">16:00</label>

                                                                            </li>

                                                                            <li all-li-click="6">

                                                                                <input id="pop_intro0018" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-mon-1630" value="mon-16:30">

                                                                                <label for="pop_intro0018">16:30</label>

                                                                            </li>

                                                                        </ul>

                                                                        <div class="clearfix"></div>

                                                                        <ul class="today_time" all-click="4">

                                                                            <li all-li-click="1">

                                                                                <input id="pop_intro0019" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-mon-1700" value="mon-17:00">

                                                                                <label for="pop_intro0019">17:00</label>

                                                                            </li>

                                                                            <li all-li-click="2">

                                                                                <input id="pop_intro0020" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-mon-1730" value="mon-17:30">

                                                                                <label for="pop_intro0020">17:30</label>

                                                                            </li>

                                                                            <li all-li-click="3">

                                                                                <input id="pop_intro0021" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-mon-1800" value="mon-18:00">

                                                                                <label for="pop_intro0021">18:00</label>

                                                                            </li>

                                                                            <li all-li-click="4">

                                                                                <input id="pop_intro0022" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-mon-1830" value="mon-18:30">

                                                                                <label for="pop_intro0022">18:30</label>

                                                                            </li>

                                                                            <li all-li-click="5">

                                                                                <input id="pop_intro0023" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-mon-1900" value="mon-19:00">

                                                                                <label for="pop_intro0023">19:00</label>

                                                                            </li>

                                                                            <li all-li-click="6">

                                                                                <input id="pop_intro0024" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-mon-1930" value="mon-19:30">

                                                                                <label for="pop_intro0024">19:30</label>

                                                                            </li>

                                                                        </ul>

                                                                    </div>

                                                                    <div class="tab-pane fade in" id="date_time_pop3">

                                                                        <ul class="today_time" all-click="1">

                                                                            <li all-li-click="1">

                                                                                <input id="pop_meeting001" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-tue-800" value="tue-8:00">

                                                                                <label for="pop_meeting001">8:00</label>

                                                                            </li>

                                                                            <li all-li-click="2">

                                                                                <input id="pop_meeting002" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-tue-830" value="tue-8:30">

                                                                                <label for="pop_meeting002">8:30</label>

                                                                            </li>

                                                                            <li all-li-click="3">

                                                                                <input id="pop_meeting003" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-tue-900" value="tue-9:00">

                                                                                <label for="pop_meeting003">9:00</label>

                                                                            </li>

                                                                            <li all-li-click="4">

                                                                                <input id="pop_meeting004" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-tue-930" value="tue-9:30">

                                                                                <label for="pop_meeting004">9:30</label>

                                                                            </li>

                                                                            <li all-li-click="5">

                                                                                <input id="pop_meeting005" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-tue-1000" value="tue-10:00">

                                                                                <label for="pop_meeting005">10:00</label>

                                                                            </li>

                                                                            <li all-li-click="6">

                                                                                <input id="pop_meeting006" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-tue-1030" value="tue-10:30">

                                                                                <label for="pop_meeting006">10:30</label>

                                                                            </li>

                                                                        </ul>

                                                                        <div class="clearfix"></div>

                                                                        <ul class="today_time" all-click="2">

                                                                            <li all-li-click="1">

                                                                                <input id="pop_meeting007" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-tue-1100" value="tue-11:00">

                                                                                <label for="pop_meeting007">11:00</label>

                                                                            </li>

                                                                            <li all-li-click="2">

                                                                                <input id="pop_meeting008" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-tue-1130" value="tue-11:30">

                                                                                <label for="pop_meeting008">11:30</label>

                                                                            </li>

                                                                            <li all-li-click="3">

                                                                                <input id="pop_meeting009" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-tue-1200" value="tue-12:00">

                                                                                <label for="pop_meeting009">12:00</label>

                                                                            </li>

                                                                            <li all-li-click="4">

                                                                                <input id="pop_meeting0010" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-tue-1230" value="tue-12:30">

                                                                                <label for="pop_meeting0010">12:30</label>

                                                                            </li>

                                                                            <li all-li-click="5">

                                                                                <input id="pop_meeting0011" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-tue-1300" value="tue-13:00">

                                                                                <label for="pop_meeting0011">13:00</label>

                                                                            </li>

                                                                            <li all-li-click="6">

                                                                                <input id="pop_meeting0012" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-tue-1330" value="tue-13:30">

                                                                                <label for="pop_meeting0012">13:30</label>

                                                                            </li>

                                                                        </ul>

                                                                        <div class="clearfix"></div>

                                                                        <ul class="today_time" all-click="3">

                                                                            <li all-li-click="1">

                                                                                <input id="pop_meeting0013" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-tue-1400" value="tue-14:00">

                                                                                <label for="pop_meeting0013">14:00</label>

                                                                            </li>

                                                                            <li all-li-click="2">

                                                                                <input id="pop_meeting0014" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-tue-1430" value="tue-14:30">

                                                                                <label for="pop_meeting0014">14:30</label>

                                                                            </li>

                                                                            <li all-li-click="3">

                                                                                <input id="pop_meeting0015" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-tue-1500" value="tue-15:00">

                                                                                <label for="pop_meeting0015">15:00</label>

                                                                            </li>

                                                                            <li all-li-click="4">

                                                                                <input id="pop_meeting0016" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-tue-1530" value="tue-15:30">

                                                                                <label for="pop_meeting0016">15:30</label>

                                                                            </li>

                                                                            <li all-li-click="5">

                                                                                <input id="pop_meeting0017" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-tue-1600" value="tue-16:00">

                                                                                <label for="pop_meeting0017">16:00</label>

                                                                            </li>

                                                                            <li all-li-click="6">

                                                                                <input id="pop_meeting0018" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-tue-1630" value="tue-16:30">

                                                                                <label for="pop_meeting0018">16:30</label>

                                                                            </li>

                                                                        </ul>

                                                                        <div class="clearfix"></div>

                                                                        <ul class="today_time" all-click="4">

                                                                            <li all-li-click="1">

                                                                                <input id="pop_meeting0019" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-tue-1700" value="tue-17:00">

                                                                                <label for="pop_meeting0019">17:00</label>

                                                                            </li>

                                                                            <li all-li-click="2">

                                                                                <input id="pop_meeting0020" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-tue-1730" value="tue-17:30">

                                                                                <label for="pop_meeting0020">17:30</label>

                                                                            </li>

                                                                            <li all-li-click="3">

                                                                                <input id="pop_meeting0021" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-tue-1800" value="tue-18:00">

                                                                                <label for="pop_meeting0021">18:00</label>

                                                                            </li>

                                                                            <li all-li-click="4">

                                                                                <input id="pop_meeting0022" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-tue-1830" value="tue-18:30">

                                                                                <label for="pop_meeting0022">18:30</label>

                                                                            </li>

                                                                            <li all-li-click="5">

                                                                                <input id="pop_meeting0023" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-tue-1900" value="tue-19:00">

                                                                                <label for="pop_meeting0023">19:00</label>

                                                                            </li>

                                                                            <li all-li-click="6">

                                                                                <input id="pop_meeting0024" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-tue-1930" value="tue-19:30">

                                                                                <label for="pop_meeting0024">19:30</label>

                                                                            </li>

                                                                        </ul>

                                                                    </div>

                                                                    <div class="tab-pane fade in" id="date_time_pop4">

                                                                        <ul class="today_time" all-click="1">

                                                                            <li all-li-click="1">

                                                                                <input id="pop_call001" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-wed-800" value="wed-8:00">

                                                                                <label for="pop_call001">8:00</label>

                                                                            </li>

                                                                            <li all-li-click="2">

                                                                                <input id="pop_call002" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-wed-830" value="wed-8:30">

                                                                                <label for="pop_call002">8:30</label>

                                                                            </li>

                                                                            <li all-li-click="3">

                                                                                <input id="pop_call003" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-wed-900" value="wed-9:00">

                                                                                <label for="pop_call003">9:00</label>

                                                                            </li>

                                                                            <li all-li-click="4">

                                                                                <input id="pop_call004" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-wed-930" value="wed-9:30">

                                                                                <label for="pop_call004">9:30</label>

                                                                            </li>

                                                                            <li all-li-click="5">

                                                                                <input id="pop_call005" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-wed-1000" value="wed-10:00">

                                                                                <label for="pop_call005">10:00</label>

                                                                            </li>

                                                                            <li all-li-click="6">

                                                                                <input id="pop_call006" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-wed-1030" value="wed-10:30">

                                                                                <label for="pop_call006">10:30</label>

                                                                            </li>

                                                                        </ul>

                                                                        <div class="clearfix"></div>

                                                                        <ul class="today_time" all-click="2">

                                                                            <li all-li-click="1">

                                                                                <input id="pop_call007" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-wed-1100" value="wed-11:00">

                                                                                <label for="pop_call007">11:00</label>

                                                                            </li>

                                                                            <li all-li-click="2">

                                                                                <input id="pop_call008" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-wed-1130" value="wed-11:30">

                                                                                <label for="pop_call008">11:30</label>

                                                                            </li>

                                                                            <li all-li-click="3">

                                                                                <input id="pop_call009" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-wed-1200" value="wed-12:00">

                                                                                <label for="pop_call009">12:00</label>

                                                                            </li>

                                                                            <li all-li-click="4">

                                                                                <input id="pop_call0010" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-wed-1230" value="wed-12:30">

                                                                                <label for="pop_call0010">12:30</label>

                                                                            </li>

                                                                            <li all-li-click="5">

                                                                                <input id="pop_call0011" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-wed-1300" value="wed-13:00">

                                                                                <label for="pop_call0011">13:00</label>

                                                                            </li>

                                                                            <li all-li-click="6">

                                                                                <input id="pop_call0012" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-wed-1330" value="wed-13:30">

                                                                                <label for="pop_call0012">13:30</label>

                                                                            </li>

                                                                        </ul>

                                                                        <div class="clearfix"></div>

                                                                        <ul class="today_time" all-click="3">

                                                                            <li all-li-click="1">

                                                                                <input id="pop_call0013" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-wed-1400" value="wed-14:00">

                                                                                <label for="pop_call0013">14:00</label>

                                                                            </li>

                                                                            <li all-li-click="2">

                                                                                <input id="pop_call0014" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-wed-1430" value="wed-14:30">

                                                                                <label for="pop_call0014">14:30</label>

                                                                            </li>

                                                                            <li all-li-click="3">

                                                                                <input id="pop_call0015" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-wed-1500" value="wed-15:00">

                                                                                <label for="pop_call0015">15:00</label>

                                                                            </li>

                                                                            <li all-li-click="4">

                                                                                <input id="pop_call0016" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-wed-1530" value="wed-15:30">

                                                                                <label for="pop_call0016">15:30</label>

                                                                            </li>

                                                                            <li all-li-click="5">

                                                                                <input id="pop_call0017" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-wed-1600" value="wed-16:00">

                                                                                <label for="pop_call0017">16:00</label>

                                                                            </li>

                                                                            <li all-li-click="6">

                                                                                <input id="pop_call0018" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-wed-1630" value="wed-16:30">

                                                                                <label for="pop_call0018">16:30</label>

                                                                            </li>

                                                                        </ul>

                                                                        <div class="clearfix"></div>

                                                                        <ul class="today_time" all-click="4">

                                                                            <li all-li-click="1">

                                                                                <input id="pop_call0019" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-wed-1700" value="wed-17:00">

                                                                                <label for="pop_call0019">17:00</label>

                                                                            </li>

                                                                            <li all-li-click="2">

                                                                                <input id="pop_call0020" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-wed-1730" value="wed-17:30">

                                                                                <label for="pop_call0020">17:30</label>

                                                                            </li>

                                                                            <li all-li-click="3">

                                                                                <input id="pop_call0021" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-wed-1800" value="wed-18:00">

                                                                                <label for="pop_call0021">18:00</label>

                                                                            </li>

                                                                            <li all-li-click="4">

                                                                                <input id="pop_call0022" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-wed-1830" value="wed-18:30">

                                                                                <label for="pop_call0022">18:30</label>

                                                                            </li>

                                                                            <li all-li-click="5">

                                                                                <input id="pop_call0023" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-wed-1900" value="wed-19:00">

                                                                                <label for="pop_call0023">19:00</label>

                                                                            </li>

                                                                            <li all-li-click="6">

                                                                                <input id="pop_call0024" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-wed-1930" value="wed-19:30">

                                                                                <label for="pop_call0024">19:30</label>

                                                                            </li>

                                                                        </ul>

                                                                    </div>

                                                                    <div class="tab-pane fade in" id="date_time_pop5">

                                                                        <ul class="today_time" all-click="1">

                                                                            <li all-li-click="1">

                                                                                <input id="pop_friday001" class="display_none_talent3" type="checkbox"  onclick="clickMe(this)" backround-attr="" name="front-thu-800" value="thu-8:00">

                                                                                <label for="pop_friday001">8:00</label>

                                                                            </li>

                                                                            <li all-li-click="2">

                                                                                <input id="pop_friday002" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-thu-830" value="thu-8:30">

                                                                                <label for="pop_friday002">8:30</label>

                                                                            </li>

                                                                            <li all-li-click="3">

                                                                                <input id="pop_friday003" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-thu-900" value="thu-9:00">

                                                                                <label for="pop_friday003">9:00</label>

                                                                            </li>

                                                                            <li all-li-click="4">

                                                                                <input id="pop_friday004" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-thu-930" value="thu-9:30">

                                                                                <label for="pop_friday004">9:30</label>

                                                                            </li>

                                                                            <li all-li-click="5">

                                                                                <input id="pop_friday005" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-thu-1000" value="thu-10:00">

                                                                                <label for="pop_friday005">10:00</label>

                                                                            </li>

                                                                            <li all-li-click="6">

                                                                                <input id="pop_friday006" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-thu-1030" value="thu-10:30">

                                                                                <label for="pop_friday006">10:30</label>

                                                                            </li>

                                                                        </ul>

                                                                        <div class="clearfix"></div>

                                                                        <ul class="today_time" all-click="2">

                                                                            <li all-li-click="1">

                                                                                <input id="pop_friday007" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-thu-1100" value="thu-11:00">

                                                                                <label for="pop_friday007">11:00</label>

                                                                            </li>

                                                                            <li all-li-click="2">

                                                                                <input id="pop_friday008" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-thu-1130" value="thu-11:30">

                                                                                <label for="pop_friday008">11:30</label>

                                                                            </li>

                                                                            <li all-li-click="3">

                                                                                <input id="pop_friday009" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-thu-1200" value="thu-12:00">

                                                                                <label for="pop_friday009">12:00</label>

                                                                            </li>

                                                                            <li all-li-click="4">

                                                                                <input id="pop_friday0010" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-thu-1230" value="thu-12:30">

                                                                                <label for="pop_friday0010">12:30</label>

                                                                            </li>

                                                                            <li all-li-click="5">

                                                                                <input id="pop_friday0011" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-thu-1300" value="thu-13:00">

                                                                                <label for="pop_friday0011">13:00</label>

                                                                            </li>

                                                                            <li all-li-click="6">

                                                                                <input id="pop_friday0012" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-thu-1330" value="thu-13:30">

                                                                                <label for="pop_friday0012">13:30</label>

                                                                            </li>

                                                                        </ul>

                                                                        <div class="clearfix"></div>

                                                                        <ul class="today_time" all-click="3">

                                                                            <li all-li-click="1">

                                                                                <input id="pop_friday0013" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-thu-1400" value="thu-14:00">

                                                                                <label for="pop_friday0013">14:00</label>

                                                                            </li>

                                                                            <li all-li-click="2">

                                                                                <input id="pop_friday0014" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-thu-1430" value="thu-14:30">

                                                                                <label for="pop_friday0014">14:30</label>

                                                                            </li>

                                                                            <li all-li-click="3">

                                                                                <input id="pop_friday0015" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-thu-1500" value="thu-15:00">

                                                                                <label for="pop_friday0015">15:00</label>

                                                                            </li>

                                                                            <li all-li-click="4">

                                                                                <input id="pop_friday0016" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-thu-1530" value="thu-15:30">

                                                                                <label for="pop_friday0016">15:30</label>

                                                                            </li>

                                                                            <li all-li-click="5">

                                                                                <input id="pop_friday0017" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-thu-1600" value="thu-16:00">

                                                                                <label for="pop_friday0017">16:00</label>

                                                                            </li>

                                                                            <li all-li-click="6">

                                                                                <input id="pop_friday0018" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-thu-1630" value="thu-16:30">

                                                                                <label for="pop_friday0018">16:30</label>

                                                                            </li>

                                                                        </ul>

                                                                        <div class="clearfix"></div>

                                                                        <ul class="today_time" all-click="4">

                                                                            <li all-li-click="1">

                                                                                <input id="pop_friday0019" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-thu-1700" value="thu-17:00">

                                                                                <label for="pop_friday0019">17:00</label>

                                                                            </li>

                                                                            <li all-li-click="2">

                                                                                <input id="pop_friday0020" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-thu-1730" value="thu-17:30">

                                                                                <label for="pop_friday0020">17:30</label>

                                                                            </li>

                                                                            <li all-li-click="3">

                                                                                <input id="pop_friday0021" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-thu-1800" value="thu-18:00">

                                                                                <label for="pop_friday0021">18:00</label>

                                                                            </li>

                                                                            <li all-li-click="4">

                                                                                <input id="pop_friday0022" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-thu-1830" value="thu-18:30">

                                                                                <label for="pop_friday0022">18:30</label>

                                                                            </li>

                                                                            <li all-li-click="5">

                                                                                <input id="pop_friday0023" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-thu-1900" value="thu-19:00">
                                                                                <label for="pop_friday0023">19:00</label>
                                                                            </li>
                                                                            <li all-li-click="6">
                                                                                <input id="pop_friday0024" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-thu-1930" value="thu-19:30">
                                                                                <label for="pop_friday0024">19:30</label>
                                                                            </li>
                                                                        </ul>
                                                                    </div>

                                                                    <div class="tab-pane fade in" id="date_time_pop6">
                                                                        <ul class="today_time" all-click="1">
                                                                            <li all-li-click="1">
                                                                                <input id="index_pop_tab_1" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-fri-800" value="fri-8:00">
                                                                                <label for="index_pop_tab_1">8:00</label>
                                                                            </li>
                                                                            <li all-li-click="2">
                                                                                <input id="index_pop_tab_2" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-fri-830" value="fri-8:30">
                                                                                <label for="index_pop_tab_2">8:30</label>
                                                                            </li>
                                                                            <li all-li-click="3">
                                                                                <input id="index_pop_tab_3" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-fri-900" value="fri-9:00">
                                                                                <label for="index_pop_tab_3">9:00</label>
                                                                            </li>
                                                                            <li all-li-click="4">
                                                                                <input id="index_pop_tab_4" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-fri-930" value="fri-9:30">
                                                                                <label for="index_pop_tab_4">9:30</label>
                                                                            </li>
                                                                            <li all-li-click="5">
                                                                                <input id="index_pop_tab_5" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-fri-1000" value="fri-10:00">
                                                                                <label for="index_pop_tab_5">10:00</label>
                                                                            </li>
                                                                            <li all-li-click="6">
                                                                                <input id="index_pop_tab_6" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-fri-1030" value="fri-10:30">
                                                                                <label for="index_pop_tab_6">10:30</label>
                                                                            </li>
                                                                        </ul>

                                                                        <div class="clearfix"></div>

                                                                        <ul class="today_time" all-click="2">
                                                                            <li all-li-click="1">
                                                                                <input id="index_pop_tab_7" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-fri-1100" value="fri-11:00">
                                                                                <label for="index_pop_tab_7">11:00</label>
                                                                            </li>
                                                                            <li all-li-click="2">
                                                                                <input id="index_pop_tab_8" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-fri-1130" value="fri-11:30">
                                                                                <label for="index_pop_tab_8">11:30</label>
                                                                            </li>
                                                                            <li all-li-click="3">
                                                                                <input id="index_pop_tab_9" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-fri-1200" value="fri-12:00">
                                                                                <label for="index_pop_tab_9">12:00</label>
                                                                            </li>
                                                                            <li all-li-click="4">
                                                                                <input id="index_pop_tab_10" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-fri-1230" value="fri-12:30">
                                                                                <label for="index_pop_tab_10">12:30</label>
                                                                            </li>
                                                                            <li all-li-click="5">
                                                                                <input id="index_pop_tab_11" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-fri-1300" value="fri-13:00">
                                                                                <label for="index_pop_tab_11">13:00</label>
                                                                            </li>
                                                                            <li all-li-click="6">
                                                                                <input id="index_pop_tab_12" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-fri-1330" value="fri-13:30">
                                                                                <label for="index_pop_tab_12">13:30</label>
                                                                            </li>

                                                                        </ul>

                                                                        <div class="clearfix"></div>

                                                                        <ul class="today_time" all-click="3">
                                                                            <li all-li-click="1">
                                                                                <input id="index_pop_tab_13" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-fri-1400" value="fri-14:00">
                                                                                <label for="index_pop_tab_13">14:00</label>
                                                                            </li>
                                                                            <li all-li-click="2">
                                                                                <input id="index_pop_tab_14" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-fri-1430" value="fri-14:30">
                                                                                <label for="index_pop_tab_14">14:30</label>
                                                                            </li>
                                                                            <li all-li-click="3">
                                                                                <input id="index_pop_tab_15" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-fri-1500" value="fri-15:00">
                                                                                <label for="index_pop_tab_15">15:00</label>
                                                                            </li>
                                                                            <li all-li-click="4">
                                                                                <input id="index_pop_tab_16" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-fri-1530" value="fri-15:30">
                                                                                <label for="index_pop_tab_16">15:30</label>
                                                                            </li>
                                                                            <li all-li-click="5">
                                                                                <input id="index_pop_tab_17" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-fri-1600" value="fri-16:00">
                                                                                <label for="index_pop_tab_17">16:00</label>
                                                                            </li>
                                                                            <li all-li-click="6">
                                                                                <input id="index_pop_tab_18" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-fri-1630" value="fri-16:30">
                                                                                <label for="index_pop_tab_18">16:30</label>
                                                                            </li>
                                                                        </ul>

                                                                        <div class="clearfix"></div>

                                                                        <ul class="today_time" all-click="4">
                                                                            <li all-li-click="1">
                                                                                <input id="index_pop_tab_19" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-fri-1700" value="fri-17:00">
                                                                                <label for="index_pop_tab_19">17:00</label>
                                                                            </li>
                                                                            <li all-li-click="2">
                                                                                <input id="index_pop_tab_20" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-fri-1730" value="fri-17:30">
                                                                                <label for="index_pop_tab_20">17:30</label>
                                                                            </li>
                                                                            <li all-li-click="3">
                                                                                <input id="index_pop_tab_21" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-fri-1800" value="fri-18:00">
                                                                                <label for="index_pop_tab_21">18:00</label>
                                                                            </li>
                                                                            <li all-li-click="4">
                                                                                <input id="index_pop_tab_22" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-fri-1830" value="fri-18:30">
                                                                                <label for="index_pop_tab_22">18:30</label>
                                                                            </li>
                                                                            <li all-li-click="5">
                                                                                <input id="index_pop_tab_23" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-fri-1900" value="fri-19:00">
                                                                                <label for="index_pop_tab_23">19:00</label>
                                                                            </li>
                                                                            <li all-li-click="6">
                                                                                <input id="index_pop_tab_24" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" name="front-fri-1930" value="fri-19:30">
                                                                                <label for="index_pop_tab_24">19:30</label>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                
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
                                                        <!-- form submitted in public/js.main.js file -->
                                                        <button type="submit" id="front_job_request_form_btn" class="btn btn-info btn-lg btn_request btn_quick_popup">Job Request</button>
                                                    </td>
                                                    <td style="border: none;"></td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </form>

                                    </div>
                                
                                    <!-- Quick_Job_Mobile -->
                                    
                                    <div class="panel-group wrap ntj_qj_div_jb_pop_mb" id="bs-collapse">
                                       
                                        <!-- end of panel_1 -->

                                        
                                        <!-- end of panel_2 -->
                                        
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <a data-toggle="collapse"  href="#role_popup">
                                                    <h4 class="panel-title">Request Job Details <i class="fa fa-angle-down" aria-hidden="true"></i></h4>
                                                </a>
                                            </div>
                                            <div id="role_popup" class="panel-collapse collapse">
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
                                                    <select class="active_select lvel_led_jb_pop_mb"  txt-attr="Level - ">
                                                        <option value="">Level</option>
                                                        <option value="leader_of_leaders">Leader of leaders</option>
                                                        <option value="leader_of_professional">Leader of professionals</option>
                                                        <option value="individual_prefossional">Individual professional</option>
                                                    </select>
                                                    
                                                    <!--<select class="active_select lvel_direct_report_jb_pop_mb">
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
                                                    <select class="active_select lvel_size_total_func_jb_pop_mb">
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
                                                    </select>-->
                                                    
                                                    <div class="clear5"></div>
                                                    
                                                    
                                                    <select class="test1 quick_cities_multiple" multiple="multiple">
                                                        <option value="0">Auckland</option>
                                                        <option value="1">Hamilton</option>
                                                        <option value="2">Wellington</option>
                                                        <option value="3">Christchurch</option>
                                                        <option value="4">Regional</option>
                                                        <option value="5">Other city</option>
                                                        <option value="6">Home working</option>
                                                    </select>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end of panel_2 -->
                                        
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <a data-toggle="collapse"  href="#hr_mange_time_popup">
                                                    <h4 class="panel-title">Hiring manager availability <i class="fa fa-angle-down" aria-hidden="true"></i></h4>
                                                </a>
                                            </div>
                                            <div id="hr_mange_time_popup" class="panel-collapse collapse">
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
                                                                            <input id="full_like001" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="full_like001">8:00</label>
                                                                        </li>
                                                                        <li all-li-click="2">
                                                                            <input id="full_like002" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="full_like002">8:30</label>
                                                                        </li>

                                                                        <li all-li-click="3">
                                                                            <input id="full_like003" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="full_like003">9:00</label>
                                                                        </li>
                                                                        <li all-li-click="4">
                                                                            <input id="full_like004" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="full_like004">9:30</label>
                                                                        </li>
                                                                        <li all-li-click="5">
                                                                            <input id="full_like005" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="full_like005">10:00</label>
                                                                        </li>
                                                                        <li all-li-click="6">
                                                                            <input id="full_like006" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="full_like006">10:30</label>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="clearfix"></div>
                                                                    <ul class="today_time" all-click="2">
                                                                        <li all-li-click="1">
                                                                            <input id="full_like007" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="full_like007">11:00</label>
                                                                        </li>
                                                                        <li all-li-click="2">
                                                                            <input id="full_like008" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="full_like008">11:30</label>
                                                                        </li>
                                                                        <li all-li-click="3">
                                                                            <input id="full_like009" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="full_like009">12:00</label>
                                                                        </li>
                                                                        <li all-li-click="4">
                                                                            <input id="full_like0010" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="full_like0010">12:30</label>
                                                                        </li>
                                                                        <li all-li-click="5">
                                                                            <input id="full_like0011" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="full_like0011">13:00</label>
                                                                        </li>
                                                                        <li all-li-click="6">
                                                                            <input id="full_like0012" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="full_like0012">13:30</label>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="clearfix"></div>
                                                                    <ul class="today_time" all-click="3">
                                                                        <li all-li-click="1">
                                                                            <input id="full_like0013" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="full_like0013">14:00</label>
                                                                        </li>
                                                                        <li all-li-click="2">
                                                                            <input id="full_like0014" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="full_like0014">14:30</label>
                                                                        </li>
                                                                        <li all-li-click="3">
                                                                            <input id="full_like0015" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="full_like0015">15:00</label>
                                                                        </li>
                                                                        <li all-li-click="4">
                                                                            <input id="full_like0016" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="full_like0016">15:30</label>
                                                                        </li>
                                                                        <li all-li-click="5">
                                                                            <input id="full_like0017" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="full_like0017">16:00</label>
                                                                        </li>
                                                                        <li all-li-click="6">
                                                                            <input id="full_like0018" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="full_like0018">16:30</label>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="clearfix"></div>
                                                                    <ul class="today_time" all-click="4">
                                                                        <li all-li-click="1">
                                                                            <input id="full_like0019" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="full_like0019">17:00</label>
                                                                        </li>
                                                                        <li all-li-click="2">
                                                                            <input id="full_like0020" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="full_like0020">17:30</label>
                                                                        </li>
                                                                        <li all-li-click="3">
                                                                            <input id="full_like0021" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="full_like0021">18:00</label>
                                                                        </li>
                                                                        <li all-li-click="4">
                                                                            <input id="full_like0022" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="full_like0022">18:30</label>
                                                                        </li>
                                                                        <li all-li-click="5">
                                                                            <input id="full_like0023" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="full_like0023">19:00</label>
                                                                        </li>
                                                                        <li all-li-click="6">
                                                                            <input id="full_like0024" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="full_like0024">19:30</label>
                                                                        </li>
                                                                    </ul>
                                                                </div>

                                                                <div class="tab-pane fade" id="time_talent_pop2">
                                                                    <ul class="today_time" all-click="1">
                                                                        <li all-li-click="1">
                                                                            <input id="full_intro001" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="full_intro001">8:00</label>
                                                                        </li>
                                                                        <li all-li-click="2">
                                                                            <input id="full_intro002" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="full_intro002">8:30</label>
                                                                        </li>
                                                                        <li all-li-click="3">
                                                                            <input id="full_intro003" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="full_intro003">9:00</label>
                                                                        </li>
                                                                        <li all-li-click="4">
                                                                            <input id="full_intro004" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="full_intro004">9:30</label>
                                                                        </li>
                                                                        <li all-li-click="5">
                                                                            <input id="full_intro005" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="full_intro005">10:00</label>
                                                                        </li>
                                                                        <li all-li-click="6">
                                                                            <input id="full_intro006" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="full_intro006">10:30</label>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="clearfix"></div>
                                                                    <ul class="today_time" all-click="2">
                                                                        <li all-li-click="1">
                                                                            <input id="full_intro007" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="full_intro007">11:00</label>
                                                                        </li>
                                                                        <li all-li-click="2">
                                                                            <input id="full_intro008" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="full_intro008">11:30</label>
                                                                        </li>
                                                                        <li all-li-click="3">
                                                                            <input id="full_intro009" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="full_intro009">12:00</label>
                                                                        </li>
                                                                        <li all-li-click="4">
                                                                            <input id="full_intro0010" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="full_intro0010">12:30</label>
                                                                        </li>
                                                                        <li all-li-click="5">
                                                                            <input id="full_intro0011" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="full_intro0011">13:00</label>
                                                                        </li>
                                                                        <li all-li-click="6">
                                                                            <input id="full_intro0012" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="full_intro0012">13:30</label>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="clearfix"></div>
                                                                    <ul class="today_time" all-click="3">
                                                                        <li all-li-click="1">
                                                                            <input id="full_intro0013" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="full_intro0013">14:00</label>
                                                                        </li>
                                                                        <li all-li-click="2">
                                                                            <input id="full_intro0014" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="full_intro0014">14:30</label>
                                                                        </li>
                                                                        <li all-li-click="3">
                                                                            <input id="full_intro0015" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="full_intro0015">15:00</label>
                                                                        </li>
                                                                        <li all-li-click="4">
                                                                            <input id="full_intro0016" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="full_intro0016">15:30</label>
                                                                        </li>
                                                                        <li all-li-click="5">
                                                                            <input id="full_intro0017" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="full_intro0017">16:00</label>
                                                                        </li>
                                                                        <li all-li-click="6">
                                                                            <input id="full_intro0018" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="full_intro0018">16:30</label>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="clearfix"></div>
                                                                    <ul class="today_time" all-click="4">
                                                                        <li all-li-click="1">
                                                                            <input id="full_intro0019" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="full_intro0019">17:00</label>
                                                                        </li>
                                                                        <li all-li-click="2">
                                                                            <input id="full_intro0020" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="full_intro0020">17:30</label>
                                                                        </li>
                                                                        <li all-li-click="3">
                                                                            <input id="full_intro0021" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="full_intro0021">18:00</label>
                                                                        </li>
                                                                        <li all-li-click="4">
                                                                            <input id="full_intro0022" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="full_intro0022">18:30</label>
                                                                        </li>
                                                                        <li all-li-click="5">
                                                                            <input id="full_intro0023" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="full_intro0023">19:00</label>
                                                                        </li>
                                                                        <li all-li-click="6">
                                                                            <input id="full_intro0024" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="full_intro0024">19:30</label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                
                                                                <div class="tab-pane fade" id="time_talent_pop3">
                                                                    <ul class="today_time" all-click="1">
                                                                        <li all-li-click="1">
                                                                            <input id="meeting001" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="meeting001">8:00</label>
                                                                        </li>
                                                                        <li all-li-click="2">
                                                                            <input id="meeting002" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="meeting002">8:30</label>
                                                                        </li>
                                                                        <li all-li-click="3">
                                                                            <input id="meeting003" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="meeting003">9:00</label>
                                                                        </li>
                                                                        <li all-li-click="4">
                                                                            <input id="meeting004" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="meeting004">9:30</label>
                                                                        </li>
                                                                        <li all-li-click="5">
                                                                            <input id="meeting005" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="meeting005">10:00</label>
                                                                        </li>
                                                                        <li all-li-click="6">
                                                                            <input id="meeting006" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="meeting006">10:30</label>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="clearfix"></div>
                                                                    <ul class="today_time" all-click="2">
                                                                        <li all-li-click="1">
                                                                            <input id="meeting007" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="meeting007">11:00</label>
                                                                        </li>
                                                                        <li all-li-click="2">
                                                                            <input id="meeting008" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="meeting008">11:30</label>
                                                                        </li>
                                                                        <li all-li-click="3">
                                                                            <input id="meeting009" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="meeting009">12:00</label>
                                                                        </li>
                                                                        <li all-li-click="4">
                                                                            <input id="meeting0010" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="meeting0010">12:30</label>
                                                                        </li>
                                                                        <li all-li-click="5">
                                                                            <input id="meeting0011" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="meeting0011">13:00</label>
                                                                        </li>
                                                                        <li all-li-click="6">
                                                                            <input id="meeting0012" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="meeting0012">13:30</label>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="clearfix"></div>
                                                                    <ul class="today_time" all-click="3">
                                                                        <li all-li-click="1">
                                                                            <input id="meeting0013" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="meeting0013">14:00</label>
                                                                        </li>
                                                                        <li all-li-click="2">
                                                                            <input id="meeting0014" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="meeting0014">14:30</label>
                                                                        </li>
                                                                        <li all-li-click="3">
                                                                            <input id="meeting0015" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="meeting0015">15:00</label>
                                                                        </li>
                                                                        <li all-li-click="4">
                                                                            <input id="meeting0016" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="meeting0016">15:30</label>
                                                                        </li>
                                                                        <li all-li-click="5">
                                                                            <input id="meeting0017" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="meeting0017">16:00</label>
                                                                        </li>
                                                                        <li all-li-click="6">
                                                                            <input id="meeting0018" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="meeting0018">16:30</label>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="clearfix"></div>
                                                                    <ul class="today_time" all-click="4">
                                                                        <li all-li-click="1">
                                                                            <input id="meeting0019" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="meeting0019">17:00</label>
                                                                        </li>
                                                                        <li all-li-click="2">
                                                                            <input id="meeting0020" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="meeting0020">17:30</label>
                                                                        </li>
                                                                        <li all-li-click="3">
                                                                            <input id="meeting0021" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="meeting0021">18:00</label>
                                                                        </li>
                                                                        <li all-li-click="4">
                                                                            <input id="meeting0022" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="meeting0022">18:30</label>
                                                                        </li>
                                                                        <li all-li-click="5">
                                                                            <input id="meeting0023" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="meeting0023">19:00</label>
                                                                        </li>
                                                                        <li all-li-click="6">
                                                                            <input id="meeting0024" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="meeting0024">19:30</label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                
                                                                <div class="tab-pane fade" id="time_talent_pop4">

                                                                    <ul class="today_time" all-click="1">
                                                                        <li all-li-click="1">
                                                                            <input id="call001" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="call001">8:00</label>
                                                                        </li>
                                                                        <li all-li-click="2">
                                                                            <input id="call002" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="call002">8:30</label>
                                                                        </li>

                                                                        <li all-li-click="3">
                                                                            <input id="call003" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="call003">9:00</label>
                                                                        </li>

                                                                        <li all-li-click="4">
                                                                            <input id="call004" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="call004">9:30</label>
                                                                        </li>

                                                                        <li all-li-click="5">
                                                                            <input id="call005" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="call005">10:00</label>
                                                                        </li>

                                                                        <li all-li-click="6">
                                                                            <input id="call006" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="call006">10:30</label>
                                                                        </li>
                                                                    </ul>

                                                                    <div class="clearfix"></div>

                                                                    <ul class="today_time" all-click="2">
                                                                        <li all-li-click="1">
                                                                            <input id="call007" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="call007">11:00</label>
                                                                        </li>

                                                                        <li all-li-click="2">
                                                                            <input id="call008" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="call008">11:30</label>
                                                                        </li>

                                                                        <li all-li-click="3">
                                                                            <input id="call009" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="call009">12:00</label>
                                                                        </li>

                                                                        <li all-li-click="4">
                                                                            <input id="call0010" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="call0010">12:30</label>
                                                                        </li>

                                                                        <li all-li-click="5">
                                                                            <input id="call0011" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="call0011">13:00</label>
                                                                        </li>

                                                                        <li all-li-click="6">
                                                                            <input id="call0012" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="call0012">13:30</label>
                                                                        </li>
                                                                    </ul>

                                                                    <div class="clearfix"></div>
                                                                    <ul class="today_time" all-click="3">
                                                                        <li all-li-click="1">
                                                                            <input id="call0013" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="call0013">14:00</label>
                                                                        </li>

                                                                        <li all-li-click="2">
                                                                            <input id="call0014" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="call0014">14:30</label>
                                                                        </li>

                                                                        <li all-li-click="3">
                                                                            <input id="call0015" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

                                                                            <label for="call0015">15:00</label>
                                                                        </li>

                                                                        <li all-li-click="4">
                                                                            <input id="call0016" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

                                                                            <label for="call0016">15:30</label>
                                                                        </li>

                                                                        <li all-li-click="5">
                                                                            <input id="call0017" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="call0017">16:00</label>
                                                                        </li>

                                                                        <li all-li-click="6">
                                                                            <input id="call0018" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="call0018">16:30</label>
                                                                        </li>
                                                                    </ul>

                                                                    <div class="clearfix"></div>

                                                                    <ul class="today_time" all-click="4">
                                                                        <li all-li-click="1">
                                                                            <input id="call0019" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="call0019">17:00</label>
                                                                        </li>

                                                                        <li all-li-click="2">
                                                                            <input id="call0020" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="call0020">17:30</label>
                                                                        </li>

                                                                        <li all-li-click="3">
                                                                            <input id="call0021" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="call0021">18:00</label>
                                                                        </li>

                                                                        <li all-li-click="4">
                                                                            <input id="call0022" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="call0022">18:30</label>
                                                                        </li>

                                                                        <li all-li-click="5">
                                                                            <input id="call0023" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="call0023">19:00</label>
                                                                        </li>

                                                                        <li all-li-click="6">
                                                                            <input id="call0024" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="call0024">19:30</label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            
                                                                <div class="tab-pane fade" id="time_talent_pop5">
                                                                    <ul class="today_time" all-click="1">
                                                                        <li all-li-click="1">
                                                                            <input id="friday001" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="friday001">8:00</label>
                                                                        </li>

                                                                        <li all-li-click="2">
                                                                            <input id="friday002" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="friday002">8:30</label>
                                                                        </li>

                                                                        <li all-li-click="3">
                                                                            <input id="friday003" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="friday003">9:00</label>
                                                                        </li>

                                                                        <li all-li-click="4">
                                                                            <input id="friday004" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="friday004">9:30</label>
                                                                        </li>

                                                                        <li all-li-click="5">
                                                                            <input id="friday005" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="friday005">10:00</label>
                                                                        </li>

                                                                        <li all-li-click="6">
                                                                            <input id="friday006" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="friday006">10:30</label>
                                                                        </li>
                                                                    </ul>

                                                                    <div class="clearfix"></div>

                                                                    <ul class="today_time" all-click="2">
                                                                        <li all-li-click="1">
                                                                            <input id="friday007" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="friday007">11:00</label>
                                                                        </li>

                                                                        <li all-li-click="2">
                                                                            <input id="friday008" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="friday008">11:30</label>
                                                                        </li>

                                                                        <li all-li-click="3">
                                                                            <input id="friday009" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="friday009">12:00</label>
                                                                        </li>

                                                                        <li all-li-click="4">
                                                                            <input id="friday0010" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="friday0010">12:30</label>
                                                                        </li>

                                                                        <li all-li-click="5">
                                                                            <input id="friday0011" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="friday0011">13:00</label>
                                                                        </li>

                                                                        <li all-li-click="6">
                                                                            <input id="friday0012" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="friday0012">13:30</label>
                                                                        </li>

                                                                    </ul>

                                                                    <div class="clearfix"></div>

                                                                    <ul class="today_time" all-click="3">
                                                                        <li all-li-click="1">
                                                                            <input id="friday0013" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="friday0013">14:00</label>
                                                                        </li>

                                                                        <li all-li-click="2">
                                                                            <input id="friday0014" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="friday0014">14:30</label>
                                                                        </li>

                                                                        <li all-li-click="3">
                                                                            <input id="friday0015" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="friday0015">15:00</label>
                                                                        </li>

                                                                        <li all-li-click="4">
                                                                            <input id="friday0016" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="friday0016">15:30</label>
                                                                        </li>

                                                                        <li all-li-click="5">
                                                                            <input id="friday0017" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="friday0017">16:00</label>
                                                                        </li>

                                                                        <li all-li-click="6">
                                                                            <input id="friday0018" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="friday0018">16:30</label>
                                                                        </li>
                                                                    </ul>

                                                                    <div class="clearfix"></div>

                                                                    <ul class="today_time" all-click="4">
                                                                        <li all-li-click="1">
                                                                            <input id="friday0019" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="friday0019">17:00</label>
                                                                        </li>

                                                                        <li all-li-click="2">
                                                                            <input id="friday0020" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="friday0020">17:30</label>
                                                                        </li>

                                                                        <li all-li-click="3">
                                                                            <input id="friday0021" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="friday0021">18:00</label>
                                                                        </li>

                                                                        <li all-li-click="4">
                                                                            <input id="friday0022" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="friday0022">18:30</label>
                                                                        </li>

                                                                        <li all-li-click="5">
                                                                            <input id="friday0023" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="friday0023">19:00</label>
                                                                        </li>

                                                                        <li all-li-click="6">
                                                                            <input id="friday0024" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="friday0024">19:30</label>
                                                                        </li>
                                                                    </ul>
                                                                
                                                                </div>
                                                    
                                                                <div class="tab-pane fade" id="time_talent_pop6">
                                                                    <ul class="today_time" all-click="1">
                                                                        <li all-li-click="1">
                                                                            <input id="friday001" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="friday001">8:00</label>
                                                                        </li>

                                                                        <li all-li-click="2">
                                                                            <input id="friday002" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="friday002">8:30</label>
                                                                        </li>

                                                                        <li all-li-click="3">
                                                                            <input id="friday003" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="friday003">9:00</label>
                                                                        </li>

                                                                        <li all-li-click="4">
                                                                            <input id="friday004" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="friday004">9:30</label>
                                                                        </li>

                                                                        <li all-li-click="5">
                                                                            <input id="friday005" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="friday005">10:00</label>
                                                                        </li>

                                                                        <li all-li-click="6">
                                                                            <input id="friday006" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="friday006">10:30</label>
                                                                        </li>
                                                                    </ul>

                                                                    <div class="clearfix"></div>

                                                                    <ul class="today_time" all-click="2">
                                                                        <li all-li-click="1">
                                                                            <input id="friday007" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="friday007">11:00</label>
                                                                        </li>

                                                                        <li all-li-click="2">
                                                                            <input id="friday008" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="friday008">11:30</label>
                                                                        </li>

                                                                        <li all-li-click="3">
                                                                            <input id="friday009" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="friday009">12:00</label>
                                                                        </li>

                                                                        <li all-li-click="4">
                                                                            <input id="friday0010" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="friday0010">12:30</label>
                                                                        </li>

                                                                        <li all-li-click="5">
                                                                            <input id="friday0011" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="friday0011">13:00</label>
                                                                        </li>

                                                                        <li all-li-click="6">
                                                                            <input id="friday0012" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="friday0012">13:30</label>
                                                                        </li>

                                                                    </ul>

                                                                    <div class="clearfix"></div>

                                                                    <ul class="today_time" all-click="3">
                                                                        <li all-li-click="1">
                                                                            <input id="friday0013" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="friday0013">14:00</label>
                                                                        </li>

                                                                        <li all-li-click="2">
                                                                            <input id="friday0014" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="friday0014">14:30</label>
                                                                        </li>

                                                                        <li all-li-click="3">
                                                                            <input id="friday0015" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="friday0015">15:00</label>
                                                                        </li>

                                                                        <li all-li-click="4">
                                                                            <input id="friday0016" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="friday0016">15:30</label>
                                                                        </li>

                                                                        <li all-li-click="5">
                                                                            <input id="friday0017" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="friday0017">16:00</label>
                                                                        </li>

                                                                        <li all-li-click="6">
                                                                            <input id="friday0018" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="friday0018">16:30</label>
                                                                        </li>
                                                                    </ul>

                                                                    <div class="clearfix"></div>

                                                                    <ul class="today_time" all-click="4">
                                                                        <li all-li-click="1">
                                                                            <input id="friday0019" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="friday0019">17:00</label>
                                                                        </li>

                                                                        <li all-li-click="2">
                                                                            <input id="friday0020" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="friday0020">17:30</label>
                                                                        </li>

                                                                        <li all-li-click="3">
                                                                            <input id="friday0021" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="friday0021">18:00</label>
                                                                        </li>

                                                                        <li all-li-click="4">
                                                                            <input id="friday0022" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="friday0022">18:30</label>
                                                                        </li>

                                                                        <li all-li-click="5">
                                                                            <input id="friday0023" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="friday0023">19:00</label>
                                                                        </li>

                                                                        <li all-li-click="6">
                                                                            <input id="friday0024" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
                                                                            <label for="friday0024">19:30</label>
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
                    </div>
                    <div class="clearfix"></div>
                </div>
               
            </div>
        
</div>
                
                <div style="clear:both; height:10px;"></div>

            <!-- content -->

        </div>
        </div>
    </div>

