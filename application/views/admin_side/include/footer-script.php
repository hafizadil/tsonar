    
    <script src="<?php echo base_url();?>public/admin/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <script src="<?php echo base_url();?>public/admin/js/notify.js"></script>
    <script src="<?php echo base_url();?>public/admin/js/alertifyjs/alertify.js"></script>
    <script src="<?php echo base_url();?>public/js/custom.js"></script>
    <script src="<?php echo base_url();?>public/js/canvas.min.js"></script>
    <script src="<?php echo base_url();?>public/admin/js/topnavbar_script.js"></script>
    <script src="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.js"></script>
    <?php
    if ($page=='SalaryBenchmarking') 
    {
    ?>
    <script src="<?php echo base_url();?>public/admin/js/client/salary_benchmarking_script1.js"></script>        
    <?php
    }
    if ($page=='settings') {
    ?>
    <script src="https://cdn.datatables.net/v/dt/dt-1.10.16/r-2.2.1/datatables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>public/admin/js/settingsScript.js"></script>
    <?php
    }
    if ($page=='hiringSpecialists' || $page=='hiringServices' || $page=='hiringBillings' || $page=='hiringReports' || $page=='hiringForms') {
    ?>
    <script src="https://cdn.datatables.net/v/dt/dt-1.10.16/r-2.2.1/datatables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>public/admin/js/clientAdminScript.js"></script>
    <?php
    }
    if ($page=='clientAdminUsers') {
    ?>
    <script src="https://cdn.datatables.net/v/dt/dt-1.10.16/r-2.2.1/datatables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>public/admin/js/clientAdminScript.js"></script>
    <script src="<?php echo base_url();?>public/admin/js/client/clientAdminUsersScript.js"></script>
    <?php
    }
    if ($page=='clientAdminBiliings') {
    ?>
    <script src="https://cdn.datatables.net/v/dt/dt-1.10.16/r-2.2.1/datatables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>public/admin/js/clientAdminScript.js"></script>
    <script src="<?php echo base_url();?>public/admin/js/clientAdminBillingsScript.js"></script>
    <?php
    }
    if ($page=='clientAdminReports') {
    ?>
    <script src="https://cdn.datatables.net/v/dt/dt-1.10.16/r-2.2.1/datatables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>public/admin/js/clientAdminScript.js"></script>
    <script src="<?php echo base_url();?>public/admin/js/clientAdminReportsScript.js"></script>
    <?php
    }
    if ($page=='recruiterSystemAdmin') {
    ?>
    <script src="https://cdn.datatables.net/v/dt/dt-1.10.16/r-2.2.1/datatables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>public/admin/js/recruiterSystemAdminScript.js"></script>
    <?php
    }
    if ($page=='adminClients') {
    ?>
    <script src="https://cdn.datatables.net/v/dt/dt-1.10.16/r-2.2.1/datatables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>public/admin/js/adminClients.js"></script>
    <?php
    }
    ?>
    <script src="<?php echo base_url();?>public/admin/js/fSelect.js"></script>
    <script src="<?php echo base_url();?>public/admin/js/fSelectcustom.js"></script>
    <script src="<?php echo base_url();?>public/admin/js/custom.js"></script>
    <script src="<?php echo base_url();?>public/admin/js/general_js.js"></script>
    <script src="<?php echo base_url();?>public/admin/js/mobile_new_talent_file.js"></script>
    <script src="<?php echo base_url();?>public/admin/js/dropdown_current_bussiness.js"></script>
    <?php
    if ($page=='pools') {
    ?>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>

    <?php
    }     
    ?>
	<script src="<?php echo base_url();?>public/admin/js/desktop_new_talent_file.js"></script>
	<script src="<?php echo base_url();?>public/admin/js/agency_recruiter_profile.js"></script>  
	<script src="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.js"></script>
	<script src="<?php echo base_url();?>public/admin/js/custom-file-input.js"></script>
    <!-- custom sripts for different pages -->
    <?php
    if ($page=='jobIntro') {
            ?>
    <script src="<?php echo base_url();?>public/admin/js/jobIntroScript1.js"></script>        
            <?php
        }
    if ($page=='dashboard') {
        ?>
    <script src="<?php echo base_url();?>public/admin/js/dashboardScript1.js"></script>        
    <?php
    }
    if ($page=='agencyUsage') {
    ?>
    <script src="<?php echo base_url();?>public/admin/js/agencyUsageScript1.js"></script>        
    <?php
    }
    if ($page=='pools') {
    ?>
    <script src="<?php echo base_url();?>public/admin/js/poolsScript1.js"></script>        
    <?php
    }
    if ($page=='feedback') {
    ?>
    <script src="<?php echo base_url();?>public/admin/js/feedbackScript1.js"></script>        
    <?php
    }
    if ($page=='TalentBenchmarking') 
    {
    ?>
    <script src="<?php echo base_url();?>public/admin/js/client/talent_benchmarking_script1.js"></script>        
    <?php
    }
    if ($page=='EmergingTalent') 
    {
    ?>
    <script src="<?php echo base_url();?>public/admin/js/client/emerging_talent_script1.js"></script>        
    <?php
    }
       
    ?>  
    <!-- Bootstrap 3.3.6 -->
    <script src="<?php echo base_url();?>public/admin/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>public/admin/js/talentRequestsScript1.js"></script>

    <!-- FastClick -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="<?php echo base_url();?>public/admin/plugins/fastclick/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url();?>public/admin/dist/js/app.min.js"></script>
    <!-- Sparkline -->
    <script src="<?php echo base_url();?>public/admin/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="<?php echo base_url();?>public/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?php echo base_url();?>public/admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="<?php echo base_url();?>public/admin/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- ChartJS 1.0.1 -->
    <script src="<?php echo base_url();?>public/admin/plugins/chartjs/Chart.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?php echo base_url();?>public/admin/dist/js/pages/dashboard2.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url();?>public/admin/dist/js/demo.js"></script>
    <!-- fullCalendar 2.2.5 -->
    <script src='<?php echo base_url();?>public/admin/js/moment.min.js'></script>
    <script src="<?php echo base_url();?>public/admin/js/fullcalendar.min.js"></script>
    <script src='<?php echo base_url();?>public/admin/js/theme-chooser.js'></script>
    <script src="<?php echo base_url();?>public/admin/js/talentRequestsScript2.js"></script> 

    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>public/admin/js/poolsScript1.js"></script>
    

    <!-- Graph Script -->
    <script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>

    <!-- custome script of different pages -->

    <?php if ($page=='userProfile') {
    ?>
    <script src="<?php echo base_url();?>public/admin/js/userProfileScript.js"></script>        
    <?php
    }
    if ($page=='calendar') {
    ?>          
    <script src="<?php echo base_url();?>public/admin/js/calendarScript1.js"></script>        
    <?php
    }
    if ($page=='agencyRecruiterProfile' ) {
    ?>
    <script src="<?php echo base_url();?>public/admin/js/agencyRecruiterProfileScript.js"></script>
    <?php
    }
    if ($page=='dashboard' && $this->session->userdata('role_id')==1) {
    ?>
    <script src="<?php echo base_url();?>public/admin/js/dashboardScript2.js"></script> 
    <?php 
    }


    if ($page == 'dashboard' && $this->session->userdata('role_id')==5) { ?>

    <script src="<?php echo base_url();?>public/admin/js/clientdashboard.js"></script>       
    
    <?php
    }
    if ($page=='agencyUsage') {
    ?>
    <script src="<?php echo base_url();?>public/admin/js/agencyUsageScript2.js"></script>        
    <?php
    }
    if ($page=='startingFeeMatrix') {
    ?>
    <script src="<?php echo base_url();?>public/admin/js/startingFeeMatrixScript.js"></script>        
    <?php
    }
    if ($page=='adminClients') {
    ?>
    <script src="<?php echo base_url();?>public/admin/js/clientsScript.js"></script>        
    <?php
    }
    if ($page=='discounts') {
    ?>
    <script src="<?php echo base_url();?>public/admin/js/discountScript.js"></script>        
    <?php
    }
    if ($page=='jobIntro') {
    ?>
    <script src="<?php echo base_url();?>public/admin/js/jobIntroScript2.js"></script>        
    <?php
    }
    if ($page=='pools') {
    ?>
    <script src="<?php echo base_url();?>public/admin/js/poolsScript2.js"></script>        
    <?php
    }
    if ($page=='feedback') {
    ?>
    <script src="<?php echo base_url();?>public/admin/js/feedbackScript2.js"></script>        
    <?php
    }
    if ($page=='calendar') {
    ?>
    <script src="<?php echo base_url();?>public/admin/js/calendarScript2.js"></script>        
    <?php
    }
    if ($page=='myTeam') {
    ?>
    <script src="<?php echo base_url();?>public/admin/js/myTeamScript.js"></script>        
    <?php
    }
    if ($page=='SalaryBenchmarking') 
    {
    ?>
    <script src="<?php echo base_url();?>public/admin/js/client/salary_benchmarking_script1.js"></script>        
    <?php
    }
    if ($page=='TalentBenchmarking') 
    {
    ?>
    <script src="<?php echo base_url();?>public/admin/js/client/talent_benchmarking_script2.js"></script>        
    <?php
    }
    if ($page=='EmergingTalent') 
    {
    ?>
    <script src="<?php echo base_url();?>public/admin/js/client/emerging_talent_script2.js"></script>        
    <?php
    }
    if ($page=='Professional') 
    {
    ?>
    <script src="<?php echo base_url();?>public/admin/js/client/professional_script.js"></script>        
    <?php
    }
    if ($page=='LeaverSurvey') 
    {
    ?>
    <script src="<?php echo base_url();?>public/admin/js/client/leaver_survey_script.js"></script>        
    <?php
    }
    if ($page=='LeaverInterview') 
    {
    ?>
    <script src="<?php echo base_url();?>public/admin/js/client/leaver_interview_script.js"></script>        
    <?php
    }
    ?>

