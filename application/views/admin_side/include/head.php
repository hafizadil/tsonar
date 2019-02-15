<?php
    // echo "<pre>";print($page);die();
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Entros</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?php echo base_url();?>public/admin/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo base_url();?>public/admin/plugins/morris/morris.css">
    <link rel="stylesheet" href="<?php echo base_url();?>public/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url();?>public/admin/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>public/admin/dist/css/skins/_all-skins.min.css">
        <!-- include the style -->
    <link rel="stylesheet" href="<?php echo base_url();?>public/admin/js/alertifyjs/css/alertify.min.css" />
    <!-- include a theme -->
    <link rel="stylesheet" href="<?php echo base_url();?>public/admin/js/alertifyjs/css/themes/default.min.css" />
	<link rel="stylesheet" href="<?php echo base_url();?>public/admin/dist/css/dropdown_current_bussiness.css">
    <link href="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url();?>public/admin/dist/css/sub_pages.css">
    <?php
        if ( $page=='calendar') {
            ?>
            
            <link rel="stylesheet" href="<?php echo base_url();?>public/admin/dist/css/recruiter_profile.css">
            <link rel="stylesheet" href="<?php echo base_url();?>public/admin/plugins/morris/morris.css">
            <link rel="stylesheet" href="<?php echo base_url();?>public/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
            <?php
        }
    ?>
	<link rel="stylesheet" href="<?php echo base_url();?>public/admin/dist/css/admin_pages.css">
    <!-- fullCalendar 2.2.5-->
    
    <link rel='stylesheet' href='<?php echo base_url();?>public/admin/dist/css/fullcalendar.min.css'/>
    <link rel='stylesheet' href='<?php echo base_url();?>public/admin/dist/css/fullcalendar.print.min.css' media='print'/>
	<link rel="stylesheet" href="<?php echo base_url();?>public/admin/dist/css/fSelect.css" rel="stylesheet">
	<script defer="defer">var base_url = '<?php echo base_url();?>';</script>
    <?php
        if ($page=='agencyRecruiterProfile' || $page=='userProfile' ||  $page=='feedback' )
        {
            ?>
                <link rel="stylesheet" href="<?php echo base_url();?>public/admin/dist/css/recruiter_profile.css">
                
                <link rel="stylesheet" href="<?php echo base_url();?>public/admin/dist/css/admin_pages.css">
            <?php
        }
        if ($page=='clientAdminProfile' || $page=='CompanyProfile' ){
            ?>
                <link rel="stylesheet" href="<?php echo base_url();?>public/admin/dist/css/recruiter_profile.css">
                
                <link rel="stylesheet" href="<?php echo base_url();?>public/admin/dist/css/admin_pages.css">
            <?php
        }
        if ($page=='dashboard') {
            ?>
            <link rel="stylesheet" href="<?php echo base_url();?>public/admin/dist/css/home_header.css">
            <?php
        }
        if ($page=='settings') {
            ?>
            
            <link rel="stylesheet" href="<?php echo base_url();?>public/admin/dist/css/system_admin.css">
            <link rel="stylesheet" href="https://cdn.datatables.net/v/dt/dt-1.10.16/r-2.2.1/datatables.min.css">
            <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
            <?php
        }
        if ($page=='adminClients') {
        ?>
        
        <link rel="stylesheet" href="<?php echo base_url();?>public/admin/dist/css/system_admin.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/v/dt/dt-1.10.16/r-2.2.1/datatables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
        <?php
        }

        if ($page=='recruiterSystemAdmin' || $page=='hiringSpecialists' || $page=='hiringServices' || $page=='hiringBillings' || $page=='hiringReports' || $page=='hiringForms' ) {
            ?>
            
            <link rel="stylesheet" href="<?php echo base_url();?>public/admin/dist/css/system_admin.css">
            <link rel="stylesheet" href="https://cdn.datatables.net/v/dt/dt-1.10.16/r-2.2.1/datatables.min.css">
            <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
            <?php
        }
        if ($page== "clientAdminUsers" || $page== "clientAdminBillings" ||  $page== "clientAdminReports") {
            ?>
            
            <link rel="stylesheet" href="<?php echo base_url();?>public/admin/dist/css/system_admin.css">
            <link rel="stylesheet" href="https://cdn.datatables.net/v/dt/dt-1.10.16/r-2.2.1/datatables.min.css">
            <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
            <?php
        }
        if ($page=='talentRequests' || $page=='myTeam' ) {
            ?>
            
            <?php
        }
        if ($page=='agencyUsage' ||  $page=='startingFeeMatrix' || $page=='discounts' || $page=='adminClients') {
            ?>
            
            <link rel="stylesheet" href="<?php echo base_url();?>public/admin/dist/css/system_admin.css">
            <?php
        }
        if ($page=='jobIntro') {
            ?>

            <link rel="stylesheet" href="<?php echo base_url();?>public/admin/plugins/morris/morris.css">
            <link rel="stylesheet" href="<?php echo base_url();?>public/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
            <?php
        }
        if ($page=='pools') {
            ?>
            <link rel="stylesheet" href="<?php echo base_url();?>public/admin/dist/css/home_header.css">
            <link rel="stylesheet" href="<?php echo base_url();?>public/admin/dist/css/system_admin.css">
            <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
            <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
            <?php
        }
    ?>
    
</head>
