
<style>
.multi-select-btn-slcted{
background: #42C500;
color: #fff;
}
</style>

<div class="content-wrapper">
    <div class="clearfix"></div>
<!-- New_Talent_Desktop_Table -->
    <div class="col-sm-12">
		<div class="clear20"></div>
		<div class="panel with-nav-tabs panel-default">
            <?php
                $data['dropDown_1'] = 5;//hirng manger and client or busines are adrop dropDown
                $data['dropDown_2'] = 6;//hirng manger and client or busines are adrop dropDown
                $data['dropDown_3'] = 7; //hirng manger and client or busines are adrop dropDown
                $data['dropDown_4'] = 8;//hirng manger and client or busines are adrop dropDown
                $data['quick_job_tab'] = 'quick_page'; //quick job and ful job request page 
                $data['full_job_tab'] = 'full_job_page';//quick job and ful job request page
                $data['quick_hiring_manager_availability']='desk'; //hirng manger availiability quick calendar tabs 
                $data['full_hiring_manager_availability']='page'; // hiring manger == full page tabs
                $data['quick_job_select']='page'; //make job id unique
                $data['quick_job_level_select']='page'; //make job level id unique
                $data['quick_job_level_id']='page'; //make job level value id unique
                $data['quick_hiringManagerTab']='page'; //make hiring manger availavility id unique
                // full request job varibales of checkboxs select and deselect
                $data['full_job_select']='page'; //make job id unique
                $data['full_job_level_select']='page'; //make job level id unique    this class is used for multiple class 
                $data['form_fields_class']=''; // separete form fields in page and modal
                $data['modal_hiring_area']=''; // separete form fields in page and modal

                
                $this->load->view('admin_side/talentRequests/header-common/job_request',$data);
            ?>
        </div>
    </div>			
    <div style="clear:both; height:10px;"></div>
    <?php 
        // $this->load->view('admin_side/talentRequests/header-common/client_or_business_modal');
    ?>
    <!-- content -->
</div>