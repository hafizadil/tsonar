        <div class="content-wrapper">
            <?php
            $data = array();
                // echo "<pre>";print_r($talents);die();
            ?>
            <div class="clear20"></div>
            <div class="clear20"></div>
            <div class="clearfix"></div>

            <!-- Harry -->
            <div class="col-xs-12 col-sm-4 po_right update_ipad updates_mobile_display">

                <div class="box">

                    <div class="box-header">

                        <h3 class="box-title">Updates</h3>

                        <div class="box-tools search_box_tool">

                            <div class="input-group input-group-sm" style="width: 150px;">

                            <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                                <div class="input-group-btn">

                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>

                                </div>

                            </div>

                        </div>
                        <div class=" pull-right">

                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>

                            </button>

                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>

                            </button>

                            </div>
                    </div>

                    <!-- /.box-header -->

                    <div class="box-body table-responsive no-padding update_box_scroll">

                        <table class="table table-hover" id="table_scroll_remove">

                            <tr>

                                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>

                            </tr>

                            <tr style="background-color:#fff6f6; color:red;">

                                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>

                            </tr>

                            <tr>

                                <td style="color:#42c500;">Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.

                                </td>

                            </tr>

                            <tr style="background-color:#fff6f6; color:blue;">

                                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>

                            </tr>

                            <tr>

                                <td style="color:#42c500;">Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.

                                </td>

                            </tr>

                            <tr style="background-color:#fff6f6; color:blue;">

                                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>

                            </tr>

                        </table>

                    </div>

                    <!-- /.box-body -->

                </div>

                <!-- /.box -->

            </div>
            <!-- Harry -->

            <div class="clearfix mobile_clear"></div>
            <?php
                if ($this->session->userdata('role_id')==1) {
                
            ?>
            <div class="col-md-2 po_right">

                <div class="box box-default">

                    <div class="box-header with-border">

                        <h3 class="box-title">Talent</h3>

                        <div class="box-tools pull-right">

                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>

                            </button>

                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>

                            </button>

                        </div>

                    </div>

                    <!-- /.box-header -->

                    <div class="box-body ">

                        <div class="row">

                            <div class="col-md-12">

                                <div class="chart-responsive" style="height:180px;">

                                   <!--  <img src="<?php echo base_url();?>public/admin/dist/progress_bar.jpg" style="margin-top:10px;" class="img-responsive" alt=""> -->

                                   <body>
                                <div id="chartContainer1" style="height: 180px; width: 100%;"></div>
                                <div id="total1" style="position:absolute;left:60px;top:-90px;height:20px;width:100%;line-height:360px;text-align:auto;color:grey;font-size:22px;"></div>
                               
                                <style>
                                .canvasjs-chart-credit{display: none}
                                </style>
                                </body>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- /.box -->

                <!-- PRODUCT LIST -->

                <!-- /.box -->

            </div>

            <div class="col-sm-4 po_right updates_mobile_display">

                        <div class="box box-primary">

                            <div class="box-header with-border">

                                <h3 class="box-title">Talent</h3>

                                <div class="box-tools pull-right">

                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>

                                    </button>

                                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>

                                </div>

                            </div>

                            <!-- /.box-header -->

                            <div class="box-body bottom_box_scroll" id="style-1">

                                <table width="100%" border="0" cellspacing="2" cellpadding="2">
                                    
                                    <tr>
                                        <td width="60%">

                                            <ul class="products-list product-list-in-box">

                                                <li class="item">

                                                    <div class="product-img">
                                                        <img src="<?php echo base_url();?>public/admin/dist/img/default-50x50.gif" alt="Product Image" data-toggle="modal" data-target="#myModall3">
                                                    </div>

                                                    <div class="product-info">
                                                        <a href="#" class="product-title" data-toggle="modal" data-target="#myModall3">
                                                        John Doe
                                                        </a>
                                                        <br>
                                                        <a href="javascript:void(0)" class="product-title" data-toggle="modal" data-target="#myModall3">
                                                        Software engineer
                                                        </a>
                                                        <span class="product-description">
                                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                            San Franicso, CA
                                                        </span>
                                                    </div>

                                                </li>

                                            </ul>

                                        </td>

                                        <td width="40%">

                                            <table width="100%" border="0" cellspacing="2" cellpadding="2">

                                                <tbody>

                                                    <tr>

                                                        <td align="center" valign="top" height="30"><span class="label label-warning pull-right" style="margin-right:auto; float:inherit !important;">&nbsp;</span>

                                                        </td>

                                                    </tr>

                                                </tbody>

                                            </table>

                                        </td>
                                    </tr>

                                    <tr>

                                        <td>

                                            <ul class="products-list product-list-in-box">

                                                <li class="item">

                                                    <div class="product-img"><img src="<?php echo base_url();?>public/admin/dist/img/default-50x50.gif" alt="Product Image" data-toggle="modal" data-target="#myModall3"></div>

                                                    <div class="product-info"><a href="javascript:void(0)" class="product-title" data-toggle="modal" data-target="#myModall3"> John Doe ONE</a>

                                                        <br>

                                                        <a href="javascript:void(0)" class="product-title" data-toggle="modal" data-target="#myModall3"> Software

                                                        engineer </a> <span class="product-description"> <i

                                                            class="fa fa-map-marker" aria-hidden="true"></i> San Franicso, CA </span>

                                                    </div>

                                                </li>

                                            </ul>

                                        </td>

                                        <td>

                                            <table width="100%" border="0" cellspacing="2" cellpadding="2">

                                                <tbody>

                                                    <tr>

                                                        <td align="center" valign="top" height="30"><span class="label label-info pull-right" style="margin-right:auto; float:inherit !important;">&nbsp;</span>

                                                        </td>

                                                    </tr>

                                                </tbody>

                                            </table>

                                        </td>

                                    </tr>

                                    <tr>

                                        <td>

                                            <ul class="products-list product-list-in-box">

                                                <li class="item">

                                                    <div class="product-img"><img src="<?php echo base_url();?>public/admin/dist/img/default-50x50.gif" alt="Product Image" data-toggle="modal" data-target="#myModall3"></div>

                                                    <div class="product-info"><a href="javascript:void(0)" class="product-title" data-toggle="modal" data-target="#myModall3"> John Doe </a>

                                                        <br>

                                                        <a href="javascript:void(0)" class="product-title" data-toggle="modal" data-target="#myModall3"> Software

                                                        engineer </a> <span class="product-description"> <i

                                                            class="fa fa-map-marker" aria-hidden="true"></i> San Franicso, CA </span>

                                                    </div>

                                                </li>

                                            </ul>

                                        </td>

                                        <td>

                                            <table width="100%" border="0" cellspacing="2" cellpadding="2">

                                                <tbody>

                                                    <tr>

                                                        <td align="center" valign="top" height="30"><span class="label label-success  pull-right" style="margin-right:auto; float:inherit !important;">&nbsp;</span>

                                                        </td>

                                                    </tr>

                                                </tbody>

                                            </table>

                                        </td>

                                    </tr>

                                    <tr>

                                        <td>

                                            <ul class="products-list product-list-in-box">

                                                <li class="item">

                                                    <div class="product-img"><img src="<?php echo base_url();?>public/admin/dist/img/default-50x50.gif" alt="Product Image" data-toggle="modal" data-target="#myModall3"></div>

                                                    <div class="product-info"><a href="javascript:void(0)" class="product-title" data-toggle="modal" data-target="#myModall3"> John Doe </a>

                                                        <br>

                                                        <a href="javascript:void(0)" class="product-title" data-toggle="modal" data-target="#myModall3"> Software

                                                        engineer </a> <span class="product-description"> <i

                                                            class="fa fa-map-marker" aria-hidden="true"></i> San Franicso, CA </span>

                                                    </div>

                                                </li>

                                            </ul>

                                        </td>

                                        <td>

                                            <table width="100%" border="0" cellspacing="2" cellpadding="2">

                                                <tbody>

                                                    <tr>

                                                        <td align="center" valign="top" height="30"><span class="label label-success  pull-right" style="margin-right:auto; float:inherit !important;">&nbsp;</span>

                                                        </td>

                                                    </tr>

                                                </tbody>

                                            </table>

                                        </td>

                                    </tr>

                                    <tr>

                                        <td>

                                            <ul class="products-list product-list-in-box">

                                                <li class="item">

                                                    <div class="product-img"><img src="<?php echo base_url();?>public/admin/dist/img/default-50x50.gif" alt="Product Image" data-toggle="modal" data-target="#myModall3"></div>

                                                    <div class="product-info"><a href="javascript:void(0)" class="product-title" data-toggle="modal" data-target="#myModall3"> John Doe </a>

                                                        <br>

                                                        <a href="javascript:void(0)" class="product-title" data-toggle="modal" data-target="#myModall3"> Software

                                                        engineer </a> <span class="product-description"> <i

                                                            class="fa fa-map-marker" aria-hidden="true"></i> San Franicso, CA </span>

                                                    </div>

                                                </li>

                                            </ul>

                                        </td>

                                        <td>

                                            <table width="100%" border="0" cellspacing="2" cellpadding="2">

                                                <tbody>

                                                    <tr>

                                                        <td align="center" valign="top" height="30"><span class="label label-success  pull-right" style="margin-right:auto; float:inherit !important;">&nbsp;</span>

                                                        </td>

                                                    </tr>

                                                </tbody>

                                            </table>

                                        </td>

                                    </tr>

                                    <tr>

                                        <td>

                                            <ul class="products-list product-list-in-box">

                                                <li class="item">

                                                    <div class="product-img"><img src="<?php echo base_url();?>public/admin/dist/img/default-50x50.gif" alt="Product Image" data-toggle="modal" data-target="#myModall3"></div>

                                                    <div class="product-info"><a href="javascript:void(0)" class="product-title" data-toggle="modal" data-target="#myModall3"> John Doe </a>

                                                        <br>

                                                        <a href="javascript:void(0)" class="product-title" data-toggle="modal" data-target="#myModall3"> Software

                                                        engineer </a> <span class="product-description"> <i

                                                            class="fa fa-map-marker" aria-hidden="true"></i> San Franicso, CA </span>

                                                    </div>

                                                </li>

                                            </ul>

                                        </td>

                                        <td>

                                            <table width="100%" border="0" cellspacing="2" cellpadding="2">

                                                <tbody>

                                                    <tr>

                                                        <td align="center" valign="top" height="30"><span class="label label-success  pull-right" style="margin-right:auto; float:inherit !important;">&nbsp;</span>

                                                        </td>

                                                    </tr>

                                                </tbody>

                                            </table>

                                        </td>

                                    </tr>

                                </table>

                            </div>

                            <!-- /.box-body -->

                            <!-- /.box-footer -->

                        </div>

                        <!-- /.box -->

                    </div>



            <div class="col-md-2 po_right">

                <div class="box box-default">

                    <div class="box-header with-border">

                        <h3 class="box-title">Jobs</h3>  <!-- Jobs ONE -->

                        <div class="box-tools pull-right">

                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>

                            </button>

                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>

                            </button>

                        </div>

                    </div>

                    <!-- /.box-header -->

                    <div class="box-body">

                        <div class="row">

                            <div class="col-md-12">

                                <div class="chart-responsive" style="height:180px;">

                                   <!--  <img src="<?php echo base_url();?>public/admin/dist/progress_bar.jpg" style="margin-top:10px;" class="img-responsive" alt=""> -->

                                   <body>
                                <div id="chartContainer2" style="height: 180px; width: 100%;"></div>
                                <div id="total2" style="position:absolute;left:60px;top:-90px;height:20px;width:100%;line-height:360px;text-align:auto;color:grey;font-size:22px;"></div>
                              
                                <style>
                                .canvasjs-chart-credit{display: none}
                                </style>
                                </body>

                                </div>

                                <!-- ./chart-responsive -->

                            </div>

                            <!-- /.col -->

                            <!-- /.col -->

                        </div>

                        <!-- /.row -->

                    </div>

                    <!-- /.footer -->

                </div>

                <!-- /.box -->

                <!-- PRODUCT LIST -->

                <!-- /.box -->

            </div>

             <div class="col-sm-4 po_right updates_mobile_display">

                        <div class="box box-primary">

                            <div class="box-header with-border">

                                <h3 class="box-title">Jobs ONE</h3>

                                <div class="box-tools pull-right">

                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>

                                    </button>

                                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>

                                </div>

                            </div>

                            <!-- /.box-header -->

                            <div class="box-body bottom_box_scroll scrollbar" id="style-1">

                                <table width="100%" border="0" cellspacing="2" cellpadding="2">

                                    <tr>

                                        <td width="60%">

                                            <ul class="products-list product-list-in-box">

                                                <li class="item">

                                                    <div class="product-img">

                                                        <img src="<?php echo base_url();?>public/admin/dist/img/default-50x50.gif" alt="Product Image" data-toggle="modal" data-target="#myModal5">

                                                    </div>

                                                    <div class="product-info">

                                                        <a href="#" class="product-title" data-toggle="modal" data-target="#myModal5">Software engineer

                                                        (Entry or Senior)
                                                        </a>

                                                        <span class="product-description">
                                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                        San Franicso, CA
                                                        </span>

                                                    </div>

                                                </li>

                                                <!-- /.item -->

                                            </ul>

                                        </td>

                                        <td width="40%">

                                            <table width="100%" border="0" cellspacing="2" cellpadding="2">

                                                <tr>

                                                    <td height="30" align="center" valign="top"><span class="label label-info pull-right" style="margin-right:auto; float:inherit !important;">&nbsp;</span>

                                                    </td>

                                                    <td align="center" valign="top"><span class="label label-warning pull-right" style="margin-right:auto; float:inherit !important;">&nbsp;</span>

                                                    </td>

                                                    <td align="center" valign="top"><span class="label label-success pull-right" style="margin-right:auto; float:inherit !important;">&nbsp;</span>

                                                    </td>

                                                </tr>

                                                <tr>

                                                    <td height="30" align="center" valign="top"><span class="label label-info pull-right" style="margin-right:auto; float:inherit !important;">&nbsp;</span>

                                                    </td>

                                                    <td align="center" valign="top"><span class="label label-info pull-right" style="margin-right:auto; float:inherit !important;">&nbsp;</span>

                                                    </td>

                                                    <td align="center" valign="top"><span class="label label-success pull-right" style="margin-right:auto; float:inherit !important;">&nbsp;</span>

                                                    </td>

                                                </tr>

                                            </table>

                                        </td>

                                    </tr>

                                    <tr>

                                        <td width="60%">

                                            <ul class="products-list product-list-in-box">

                                                <li class="item">

                                                    <div class="product-img">

                                                        <img src="<?php echo base_url();?>public/admin/dist/img/default-50x50.gif" alt="Product Image" data-toggle="modal" data-target="#myModal5">

                                                    </div>

                                                    <div class="product-info">

                                                        <a href="javascript:void(0)" class="product-title" data-toggle="modal" data-target="#myModal5">Software engineer

                                                        (Entry or Senior)

                                                    </a>

                                                        <span class="product-description">

                       <i class="fa fa-map-marker" aria-hidden="true"></i>

   San Franicso, CA

                        </span>

                                                    </div>

                                                </li>

                                                <!-- /.item -->

                                                <!-- /.item -->

                                                <!-- /.item -->

                                                <!-- /.item -->

                                            </ul>

                                        </td>

                                        <td width="40%">

                                            <table width="100%" border="0" cellspacing="2" cellpadding="2">

                                                <tr>

                                                    <td height="30" align="center" valign="top"><span class="label label-info pull-right" style="margin-right:auto; float:inherit !important;">&nbsp;</span>

                                                    </td>

                                                    <td align="center" valign="top"><span class="label label-warning pull-right" style="margin-right:auto; float:inherit !important;">&nbsp;</span>

                                                    </td>

                                                    <td align="center" valign="top"><span class="label label-success pull-right" style="margin-right:auto; float:inherit !important;">&nbsp;</span>

                                                    </td>

                                                </tr>

                                                <tr>

                                                    <td height="30" align="center" valign="top"><span class="label label-info pull-right" style="margin-right:auto; float:inherit !important;">&nbsp;</span>

                                                    </td>

                                                    <td align="center" valign="top"><span class="label label-info pull-right" style="margin-right:auto; float:inherit !important;">&nbsp;</span>

                                                    </td>

                                                    <td align="center" valign="top"><span class="label label-success pull-right" style="margin-right:auto; float:inherit !important;">&nbsp;</span>

                                                    </td>

                                                </tr>

                                            </table>

                                        </td>

                                    </tr>

                                    <tr>

                                        <td width="60%">

                                            <ul class="products-list product-list-in-box">

                                                <li class="item">

                                                    <div class="product-img">

                                                        <img src="<?php echo base_url();?>public/admin/dist/img/default-50x50.gif" alt="Product Image" data-toggle="modal" data-target="#myModal5">

                                                    </div>

                                                    <div class="product-info">

                                                        <a href="javascript:void(0)" class="product-title" data-toggle="modal" data-target="#myModal5">Software engineer

                                                        (Entry or Senior)

                                                    </a>

                                                        <span class="product-description">

                       <i class="fa fa-map-marker" aria-hidden="true"></i>

   San Franicso, CA

                        </span>

                                                    </div>

                                                </li>

                                                <!-- /.item -->

                                                <!-- /.item -->

                                                <!-- /.item -->

                                                <!-- /.item -->

                                            </ul>

                                        </td>

                                        <td width="40%">

                                            <table width="100%" border="0" cellspacing="2" cellpadding="2">

                                                <tr>

                                                    <td height="30" align="center" valign="top"><span class="label label-info pull-right" style="margin-right:auto; float:inherit !important;">&nbsp;</span>

                                                    </td>

                                                    <td align="center" valign="top"><span class="label label-warning pull-right" style="margin-right:auto; float:inherit !important;">&nbsp;</span>

                                                    </td>

                                                    <td align="center" valign="top"><span class="label label-success pull-right" style="margin-right:auto; float:inherit !important;">&nbsp;</span>

                                                    </td>

                                                </tr>

                                                <tr>

                                                    <td height="30" align="center" valign="top"><span class="label label-info pull-right" style="margin-right:auto; float:inherit !important;">&nbsp;</span>

                                                    </td>

                                                    <td align="center" valign="top"><span class="label label-info pull-right" style="margin-right:auto; float:inherit !important;">&nbsp;</span>

                                                    </td>

                                                    <td align="center" valign="top"><span class="label label-success pull-right" style="margin-right:auto; float:inherit !important;">&nbsp;</span>

                                                    </td>

                                                </tr>

                                            </table>

                                        </td>

                                    </tr>

                                    <tr>

                                        <td width="60%">

                                            <ul class="products-list product-list-in-box">

                                                <li class="item">

                                                    <div class="product-img">

                                                        <img src="<?php echo base_url();?>public/admin/dist/img/default-50x50.gif" alt="Product Image" data-toggle="modal" data-target="#myModal5">

                                                    </div>

                                                    <div class="product-info">

                                                        <a href="javascript:void(0)" class="product-title" data-toggle="modal" data-target="#myModal5">Software engineer

                                                        (Entry or Senior)

                                                    </a>

                                                        <span class="product-description">

                       <i class="fa fa-map-marker" aria-hidden="true"></i>

   San Franicso, CA

                        </span>

                                                    </div>

                                                </li>

                                                <!-- /.item -->

                                                <!-- /.item -->

                                                <!-- /.item -->

                                                <!-- /.item -->

                                            </ul>

                                        </td>

                                        <td width="40%">

                                            <table width="100%" border="0" cellspacing="2" cellpadding="2">

                                                <tr>

                                                    <td height="30" align="center" valign="top"><span class="label label-info pull-right" style="margin-right:auto; float:inherit !important;">&nbsp;</span>

                                                    </td>

                                                    <td align="center" valign="top"><span class="label label-warning pull-right" style="margin-right:auto; float:inherit !important;">&nbsp;</span>

                                                    </td>

                                                    <td align="center" valign="top"><span class="label label-success pull-right" style="margin-right:auto; float:inherit !important;">&nbsp;</span>

                                                    </td>

                                                </tr>

                                                <tr>

                                                    <td height="30" align="center" valign="top"><span class="label label-info pull-right" style="margin-right:auto; float:inherit !important;">&nbsp;</span>

                                                    </td>

                                                    <td align="center" valign="top"><span class="label label-info pull-right" style="margin-right:auto; float:inherit !important;">&nbsp;</span>

                                                    </td>

                                                    <td align="center" valign="top"><span class="label label-success pull-right" style="margin-right:auto; float:inherit !important;">&nbsp;</span>

                                                    </td>

                                                </tr>

                                            </table>

                                        </td>

                                    </tr>

                                    <tr>

                                        <td width="60%">

                                            <ul class="products-list product-list-in-box">

                                                <li class="item">

                                                    <div class="product-img">

                                                        <img src="<?php echo base_url();?>public/admin/dist/img/default-50x50.gif" alt="Product Image" data-toggle="modal" data-target="#myModal5">

                                                    </div>

                                                    <div class="product-info">

                                                        <a href="javascript:void(0)" class="product-title" data-toggle="modal" data-target="#myModal5">Software engineer

                                                        (Entry or Senior)

                                                    </a>

                                                        <span class="product-description">

                       <i class="fa fa-map-marker" aria-hidden="true"></i>

   San Franicso, CA

                        </span>

                                                    </div>

                                                </li>

                                                <!-- /.item -->

                                                <!-- /.item -->

                                                <!-- /.item -->

                                                <!-- /.item -->

                                            </ul>

                                        </td>

                                        <td width="40%">

                                            <table width="100%" border="0" cellspacing="2" cellpadding="2">

                                                <tr>

                                                    <td height="30" align="center" valign="top"><span class="label label-info pull-right" style="margin-right:auto; float:inherit !important;">&nbsp;</span>

                                                    </td>

                                                    <td align="center" valign="top"><span class="label label-warning pull-right" style="margin-right:auto; float:inherit !important;">&nbsp;</span>

                                                    </td>

                                                    <td align="center" valign="top"><span class="label label-success pull-right" style="margin-right:auto; float:inherit !important;">&nbsp;</span>

                                                    </td>

                                                </tr>

                                                <tr>

                                                    <td height="30" align="center" valign="top"><span class="label label-info pull-right" style="margin-right:auto; float:inherit !important;">&nbsp;</span>

                                                    </td>

                                                    <td align="center" valign="top"><span class="label label-info pull-right" style="margin-right:auto; float:inherit !important;">&nbsp;</span>

                                                    </td>

                                                    <td align="center" valign="top"><span class="label label-success pull-right" style="margin-right:auto; float:inherit !important;">&nbsp;</span>

                                                    </td>

                                                </tr>

                                            </table>

                                        </td>

                                    </tr>

                                    <tr>

                                        <td width="60%">

                                            <ul class="products-list product-list-in-box">

                                                <li class="item">

                                                    <div class="product-img">

                                                        <img src="<?php echo base_url();?>public/admin/dist/img/default-50x50.gif" alt="Product Image" data-toggle="modal" data-target="#myModal5">

                                                    </div>

                                                    <div class="product-info">

                                                        <a href="javascript:void(0)" class="product-title" data-toggle="modal" data-target="#myModal5">Software engineer

                                                        (Entry or Senior)

                                                    </a>

                                                        <span class="product-description">

                       <i class="fa fa-map-marker" aria-hidden="true"></i>

   San Franicso, CA

                        </span>

                                                    </div>

                                                </li>

                                                <!-- /.item -->

                                                <!-- /.item -->

                                                <!-- /.item -->

                                                <!-- /.item -->

                                            </ul>

                                        </td>

                                        <td width="40%">

                                            <table width="100%" border="0" cellspacing="2" cellpadding="2">

                                                <tr>

                                                    <td height="30" align="center" valign="top"><span class="label label-info pull-right" style="margin-right:auto; float:inherit !important;">&nbsp;</span>

                                                    </td>

                                                    <td align="center" valign="top"><span class="label label-warning pull-right" style="margin-right:auto; float:inherit !important;">&nbsp;</span>

                                                    </td>

                                                    <td align="center" valign="top"><span class="label label-success pull-right" style="margin-right:auto; float:inherit !important;">&nbsp;</span>

                                                    </td>

                                                </tr>

                                                <tr>

                                                    <td height="30" align="center" valign="top"><span class="label label-info pull-right" style="margin-right:auto; float:inherit !important;">&nbsp;</span>

                                                    </td>

                                                    <td align="center" valign="top"><span class="label label-info pull-right" style="margin-right:auto; float:inherit !important;">&nbsp;</span>

                                                    </td>

                                                    <td align="center" valign="top"><span class="label label-success pull-right" style="margin-right:auto; float:inherit !important;">&nbsp;</span>

                                                    </td>

                                                </tr>

                                            </table>

                                        </td>

                                    </tr>

                                </table>

                            </div>

                            <!-- /.box-body -->

                            <!-- /.box-footer -->

                        </div>

                        <!-- /.box -->

                    </div>


            <div class="clearfix mobile_clear"></div>

            <div class="col-xs-12 col-sm-4 po_right update_ipad update_desktop_div">

                <div class="box">

                    <div class="box-header">

                        <h3 class="box-title">Updates</h3>

                        <div class="box-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                        <!-- <div class=" pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div> -->
                    </div>

                    <!-- /.box-header -->

                    <div class="box-body table-responsive no-padding update_box_scroll">

                        <table class="table table-hover">

                            <tr>

                                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>

                            </tr>

                            <tr style="background-color:#fff6f6; color:red;">

                                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>

                            </tr>

                            <tr>

                                <td style="color:#42c500;">Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.

                                </td>

                            </tr>

                            <tr style="background-color:#fff6f6; color:blue;">

                                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>

                            </tr>

                            <tr>

                                <td style="color:#42c500;">Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.

                                </td>

                            </tr>

                            <tr style="background-color:#fff6f6; color:blue;">

                                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>

                            </tr>

                        </table>

                    </div>

                    <!-- /.box-body -->

                </div>

                <!-- /.box -->

            </div>

            <div class="clearfix mobile_clear"></div>

            <div class="col-md-2 po_right">

                <div class="box box-default">

                    <div class="box-header with-border">

                        <h3 class="box-title">Intros</h3>

                        <div class="box-tools pull-right">

                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>

                            </button>

                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>

                            </button>

                        </div>

                    </div>

                    <!-- /.box-header -->

                    <div class="box-body">

                        <div class="row">

                            <div class="col-md-12">

                                <div class="chart-responsive" style="height:180px;">

                                    <!-- <img src="<?php echo base_url();?>public/admin/dist/progress_bar.jpg" style="margin-top:10px;" class="img-responsive" alt=""> -->

                                    <body>
                                <div id="chartContainer3" style="height: 180px; width: 100%;"></div>
                                <div id="total3" style="position:absolute;left:60px;top:-90px;height:20px;width:100%;line-height:360px;text-align:auto;color:grey;font-size:22px;"></div>
                                
                                <style>
                                .canvasjs-chart-credit{display: none}
                                </style>
                                </body>

                                </div>

                                <!-- ./chart-responsive -->

                            </div>

                            <!-- /.col -->

                            <!-- /.col -->

                        </div>

                        <!-- /.row -->

                    </div>

                    <!-- /.footer -->

                </div>

                <!-- /.box -->

                <!-- PRODUCT LIST -->

                <!-- /.box -->

            </div>

            
            <div class="col-sm-4 updates_mobile_display">

                        <div class="box box-primary">

                            <div class="box-header with-border">

                                <h3 class="box-title">Intros </h3>

                                <div class="box-tools pull-right">

                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>

                                    </button>

                                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>

                                </div>

                            </div>

                            <!-- /.box-header -->

                            <div class="box-body bottom_box_scroll">

                                <table width="100%" border="0" cellspacing="2" cellpadding="2">

                                    <tr>

                                        <td>

                                            <ul class="products-list product-list-in-box">

                                                <li class="item">

                                                    <div class="product-img">

                                                        <img src="<?php echo base_url();?>public/admin/dist/img/default-50x50.gif" alt="Product Image" data-toggle="modal" data-target="#myModal2">

                                                    </div>

                                                    <div class="product-info">

                                                        <a href="#" data-toggle="modal" data-target="#myModal" class="product-title">John Smith

                                                        </a>

                                                        <span class="product-description">

                                                            <i class="fa fa-map-marker" aria-hidden="true"></i>

                                                            San Franicso, CA

                                                        </span>

                                                    </div>

                                                </li>

                                            </ul>

                                        </td>

                                        <td align="center" valign="middle">-</td>

                                        <td align="center" valign="middle"><a href="javascript:void(0)" class="product-title" data-toggle="modal" data-target="#myModal2">Software engineer

                                    </a>

                                            <span class="label label-info calendar_box_decline" data-target="#reject_intro_modal" data-toggle="modal">&nbsp;</span>

                                        </td>

                                    </tr>

                                    <tr>

                                        <td>

                                            <ul class="products-list product-list-in-box">

                                                <li class="item">

                                                    <div class="product-img"><img src="<?php echo base_url();?>public/admin/dist/img/default-50x50.gif" alt="Product Image" data-toggle="modal" data-target="#myModal2" /></div>

                                                    <div class="product-info">

                                                        <a href="#" data-toggle="modal" data-target="#myModal" class="product-title">John Smith

                                                        </a>

                                                        <span class="product-description">

                                                            <i class="fa fa-map-marker" aria-hidden="true"></i>

                                                            San Franicso, CA

                                                        </span>

                                                    </div>

                                                </li>

                                            </ul>

                                        </td>

                                        <td align="center" valign="middle">-</td>

                                        <td align="center" valign="middle"><a href="#" data-toggle="modal" data-target="#myModal2" class="product-title">Software engineer </a>

                                            <span class="label label-info calendar_box_wait" data-toggle="modal" data-target="#intro_waiting_modal">&nbsp;</span>

                                        </td>

                                    </tr>

                                    <tr>

                                        <td>

                                            <ul class="products-list product-list-in-box">

                                                <li class="item">

                                                    <div class="product-img"><img src="<?php echo base_url();?>public/admin/dist/img/default-50x50.gif" alt="Product Image" data-toggle="modal" data-target="#myModal2" /></div>

                                                    <div class="product-info">

                                                        <a href="#" data-toggle="modal" data-target="#myModal" class="product-title">John Smith

                                                        </a>

                                                        <span class="product-description">

                                                            <i class="fa fa-map-marker" aria-hidden="true"></i>

                                                            San Franicso, CA

                                                        </span>

                                                    </div>

                                                </li>

                                            </ul>

                                        </td>

                                        <td align="center" valign="middle">-</td>

                                        <td align="center" valign="middle"><a href="#" data-toggle="modal" data-target="#myModal2" class="product-title">Software engineer </a>

                                            <span class="label label-info calendar_box_decline" data-target="#reject_intro_modal" data-toggle="modal">&nbsp;</span>

                                        </td>

                                    </tr>

                                    <tr>

                                        <td>

                                            <ul class="products-list product-list-in-box">

                                                <li class="item">

                                                    <div class="product-img"><img src="<?php echo base_url();?>public/admin/dist/img/default-50x50.gif" alt="Product Image" data-toggle="modal" data-target="#myModal2" /></div>

                                                    <div class="product-info">

                                                        <a href="#" data-toggle="modal" data-target="#myModal" class="product-title">John Smith

                                                        </a>

                                                        <span class="product-description">

                                                            <i class="fa fa-map-marker" aria-hidden="true"></i>

                                                            San Franicso, CA

                                                        </span>

                                                    </div>

                                                </li>

                                            </ul>

                                        </td>

                                        <td align="center" valign="middle">-</td>

                                        <td align="center" valign="middle"><a href="javascript:void(0)" class="product-title" data-toggle="modal" data-target="#myModal2">Software engineer </a>

                                            <span class="label label-info calendar_box_decline" data-target="#reject_intro_modal" data-toggle="modal">&nbsp;</span>

                                        </td>

                                    </tr>

                                    <tr>

                                        <td>

                                            <ul class="products-list product-list-in-box">

                                                <li class="item">

                                                    <div class="product-img"><img src="<?php echo base_url();?>public/admin/dist/img/default-50x50.gif" alt="Product Image" data-toggle="modal" data-target="#myModal2" /></div>

                                                    <div class="product-info">

                                                        <a href="#" data-toggle="modal" data-target="#myModal" class="product-title">John Smith

                                                        </a>

                                                        <span class="product-description">

                                                            <i class="fa fa-map-marker" aria-hidden="true"></i>

                                                            San Franicso, CA

                                                        </span>

                                                    </div>

                                                </li>

                                            </ul>

                                        </td>

                                        <td align="center" valign="middle">-</td>

                                        <td align="center" valign="middle"><a href="javascript:void(0)" class="product-title" data-toggle="modal" data-target="#myModal2">Software engineer </a>

                                            <span class="label label-info calendar_box_hold" data-toggle="modal" data-target="#save_draft_modal">&nbsp;</span>

                                        </td>

                                    </tr>

                                    <tr>

                                        <td>

                                            <ul class="products-list product-list-in-box">

                                                <li class="item">

                                                    <div class="product-img"><img src="<?php echo base_url();?>public/admin/dist/img/default-50x50.gif" alt="Product Image" data-toggle="modal" data-target="#myModal2" /></div>

                                                    <div class="product-info">

                                                        <a href="#" data-toggle="modal" data-target="#myModal" class="product-title">John Smith

                                                        </a>

                                                        <span class="product-description">

                                                            <i class="fa fa-map-marker" aria-hidden="true"></i>

                                                            San Franicso, CA

                                                        </span>

                                                    </div>

                                                </li>

                                            </ul>

                                        </td>

                                        <td align="center" valign="middle">-</td>

                                        <td align="center" valign="middle"><a href="javascript:void(0)" class="product-title" data-toggle="modal" data-target="#myModal2">Software engineer </a>

                                            <span class="label label-info calendar_box_proceed" data-toggle="modal" data-target="#send_intro_modal">&nbsp;</span>

                                        </td>

                                    </tr>

                                    <tr>

                                        <td>

                                            <ul class="products-list product-list-in-box">

                                                <li class="item">

                                                    <div class="product-img"><img src="<?php echo base_url();?>public/admin/dist/img/default-50x50.gif" alt="Product Image" data-toggle="modal" data-target="#myModal2" /></div>

                                                    <div class="product-info">

                                                        <a href="#" data-toggle="modal" data-target="#myModal" class="product-title">John Smith

                                                        </a>

                                                        <span class="product-description">

                                                            <i class="fa fa-map-marker" aria-hidden="true"></i>

                                                            San Franicso, CA

                                                        </span>

                                                    </div>

                                                </li>

                                            </ul>

                                        </td>

                                        <td align="center" valign="middle">-</td>

                                        <td align="center" valign="middle"><a href="javascript:void(0)" class="product-title" data-toggle="modal" data-target="#myModal2">Software engineer </a>

                                            <span class="label label-info calendar_box_wait" data-toggle="modal" data-target="#intro_waiting_modal">&nbsp;</span>

                                        </td>

                                    </tr>

                                </table>

                            </div>

                            <!-- /.box-body -->

                            <!-- /.box-footer -->

                        </div>

                        <!-- /.box -->

                    </div>


            <div class="col-md-2">

                <div class="box box-default">

                    <div class="box-header with-border">

                        <h3 class="box-title">Outcome</h3>

                        <div class="box-tools pull-right">

                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>

                            </button>

                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>

                            </button>

                        </div>

                    </div>

                    <!-- /.box-header -->

                    <div class="box-body">

                        <div class="row">

                            <div class="col-md-12">

                                <div class="chart-responsive" style="height:180px;">

                                   <!--  <img src="<?php echo base_url();?>public/admin/dist/progress_bar.jpg" style="margin-top:10px;" class="img-responsive" alt=""> -->
                                   <body>
                                <div id="chartContainer4" style="height: 180px; width: 100%;"></div>
                                <div id="total4" style="position:absolute;left:55px;top:-90px;height:20px;width:100%;line-height:360px;text-align:auto;color:grey;font-size:22px;"></div>
                              
                                <style>
                                .canvasjs-chart-credit{display: none}
                                </style>
                                </body>

                                </div>

                                <!-- ./chart-responsive -->

                            </div>

                            <!-- /.col -->

                            <!-- /.col -->

                        </div>

                        <!-- /.row -->

                    </div>

                    <!-- /.footer -->

                </div>

                <!-- /.box -->

                <!-- PRODUCT LIST -->

                <!-- /.box -->

            </div>

            <!-- Main content -->

            <div class="col-md-6" style="display:none">

                <div class="box">

                    <div class="box-header with-border">

                        <h3 class="box-title">Hires report</h3>

                        <div class="box-tools pull-right">

                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>

                            </button>

                            <div class="btn-group">

                                <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">

                                    <i class="fa fa-wrench"></i></button>

                                <ul class="dropdown-menu" role="menu">

                                    <li><a href="#">Action</a></li>

                                    <li><a href="#">Another action</a></li>

                                    <li><a href="#">Something else here</a></li>

                                    <li class="divider"></li>

                                    <li><a href="#">Separated link</a></li>

                                </ul>

                            </div>

                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>

                            </button>

                        </div>

                    </div>

                    <!-- /.box-header -->

                    <div class="box-body ">

                        <div class="row">

                            <div class="col-md-8">

                                <p class="text-center">

                                    <strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>

                                </p>

                                <div class="chart">

                                    <!-- Sales Chart Canvas -->

                                    <canvas id="salesChart" style="height: 180px;"></canvas>

                                </div>

                                <!-- /.chart-responsive -->

                            </div>

                            <!-- /.col -->

                            <div class="col-md-4">

                                <p class="text-center">

                                    <strong>Number of hires</strong>

                                </p>

                                <div class="progress-group">

                                    <span class="progress-text">Users</span>

                                    <span class="progress-number"><b>160</b>/200</span>

                                    <div class="progress sm">

                                        <div class="progress-bar progress-bar-aqua" style="width: 80%"></div>

                                    </div>

                                </div>

                                <!-- /.progress-group -->

                                <div class="progress-group">

                                    <span class="progress-text">Sub Recruiters</span>

                                    <span class="progress-number"><b>310</b>/400</span>

                                    <div class="progress sm">

                                        <div class="progress-bar progress-bar-red" style="width: 80%"></div>

                                    </div>

                                </div>

                                <!-- /.progress-group -->

                                <!-- /.progress-group -->

                                <!-- /.progress-group -->

                            </div>

                            <!-- /.col -->

                        </div>

                        <!-- /.row -->

                    </div>

                    <!-- ./box-body -->

                    <div class="box-footer">

                        <div class="row">

                            <!-- /.col -->

                            <!-- /.col -->

                            <div class="col-sm-4 col-xs-6">

                                <div class="description-block border-right">

                                    <h5 class="description-header">150</h5>

                                    <span class="description-text">Total hires </span>

                                </div>

                                <!-- /.description-block -->

                            </div>

                            <div class="col-sm-4 col-xs-6">

                                <div class="description-block border-right">

                                    <span class="description-percentage text-green"><i

                                        class="fa fa-caret-up"></i> 20%</span>

                                    <h5 class="description-header">$24,813.53</h5>

                                    <span class="description-text">Total fees</span>

                                </div>

                                <!-- /.description-block -->

                            </div>

                            <!-- /.col -->

                            <div class="col-sm-4 col-xs-6">

                                <div class="description-block">

                                    <span class="description-percentage text-red"><i

                                        class="fa fa-caret-down"></i> 18%</span>

                                    <h5 class="description-header">1200</h5>

                                    <span class="description-text">GOAL COMPLETIONS</span>

                                </div>

                                <!-- /.description-block -->

                            </div>

                        </div>

                        <!-- /.row -->

                    </div>

                    <!-- /.box-footer -->

                </div>

                <!-- /.box -->

            </div>

            <section class="content">

                <!-- Info boxes -->

                <div class="row">

                    <div class="clearfix visible-sm-block"></div>

                </div>

                <!-- /.row -->

                <div class="row">

                    <div class="col-sm-4 po_right update_desktop_div">

                        <div class="box box-primary">

                            <div class="box-header with-border">

                                <h3 class="box-title">Talent</h3>

                                <div class="box-tools pull-right">

                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>

                                    </button>

                                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>

                                </div>

                            </div>

                            <!-- /.box-header -->

                            <div class="box-body bottom_box_scroll" id="style-1">

                                <table width="100%" border="0" cellspacing="2" cellpadding="2">
                                    <!-- desktop div talents start -->
                                    <?php
                                        // echo "<pre>";print_r($talents);die();
                                    if (!empty($talents)) {
                                        rsort($talents);
                                    foreach ($talents as $talent) {
                                    ?>
                                    <tr>

                                        <td width="60%">

                                            <ul class="products-list product-list-in-box">

                                                <li class="item">

                                                    <div class="product-img">

                                                        <img src="<?php echo base_url();?>public/admin/dist/img/default-50x50.gif" alt="Image" onclick="dasboard_talent_modal_click('<?php echo $talent['talent_id'];?>')">

                                                    </div>

                                                    <div class="product-info">

                                                        <a style="cursor: pointer;" class="product-title" onclick="dasboard_talent_modal_click('<?php echo $talent['talent_id'];?>')">

                                                        <?php
                                                            echo  $talent['name'];
                                                        ?>

                                                    </a>

                                                        <br>

                                                        <a href="javascript:void(0)" class="product-title" onclick="dasboard_talent_modal_click('<?php echo $talent['talent_id'];?>')">

                                                        <?php
                                                            echo  $talent['current_job_title'];
                                                        ?>
                                                        </a>

                                                        <span class="product-description">

                                                        <i class="fa fa-map-marker" aria-hidden="true"></i>

                                                        <?php
                                                            $locations =  fetch_values_name_id($talent['location']);
                                                            // echo "<pre>";print_r($locations);
                                                            foreach ($locations as  $value) {
                                                                echo $value->value_name.", ";
                                                            }
                                                        ?>

                                                        </span>

                                                    </div>

                                                </li>

                                            </ul>

                                        </td>

                                        <td width="40%">

                                            <table width="100%" border="0" cellspacing="2" cellpadding="2">

                                                <tbody>

                                                    <tr>

                                                        <td align="center" valign="top" height="30"><span class="label label-warning pull-right" style="margin-right:auto; float:inherit !important;">&nbsp;</span>

                                                        </td>

                                                    </tr>

                                                </tbody>

                                            </table>

                                        </td>

                                    </tr>
                                    <!-- modal for talent -->

                                    <!-- modal for talneet ends -->
                                    <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "No Data Found !";
                                    }
                                    ?>
                                    <!-- desktop div talents ends -->

                                </table>

                            </div>

                            <!-- /.box-body -->

                            <!-- /.box-footer -->

                        </div>

                        <!-- /.box -->

                    </div>

                    <div class="col-sm-4 po_right update_desktop_div">

                        <div class="box box-primary">

                            <div class="box-header with-border">

                                <h3 class="box-title">Jobs</h3><!-- Jobs Three -->

                                <div class="box-tools pull-right">

                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>

                                    </button>

                                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>

                                </div>

                            </div>

                            <!-- /.box-header -->

                            <div class="box-body bottom_box_scroll scrollbar" id="style-1">

                                <table width="100%" border="0" cellspacing="2" cellpadding="2">
                                    <tr>
                                        <?php
                                        if (!empty($talent_requests)) {
                                            rsort($talent_requests);
                                            foreach ($talent_requests as  $talent_request) {
                                             
                                        ?>
                                        <td width="60%">
                                            <ul class="products-list product-list-in-box">
                                                <li class="item">
                                                    <div class="product-img">
                                                        <?php
                                                            if(empty($talent_request['attachments'])){
                                                                ?>
                                                                <!-- function is defined in dashboadscript1.js -->
                                                                    <img onclick="dasboard_job_modal_click('<?php
                                                                echo $talent_request['talent_request_id'];
                                                            ?>')" src="<?php echo base_url();?>uploads/dummy.png" alt="Image">            
                                                                <?php
                                                            } else{
                                                                ?>
                                                                <img onclick="dasboard_job_modal_click('<?php
                                                                echo $talent_request['talent_request_id'];
                                                            ?>')" src="<?php echo base_url();?>uploads/<?php echo $talent_request['attachments'];?>" alt="Image">
                                                            <?php
                                                            }
                                                        ?>
                                                        
                                                    </div>
                                                    <div class="product-info">
                                                        <a href="javascript:void(0)" onclick="dasboard_job_modal_click('<?php
                                                                echo $talent_request['talent_request_id'];
                                                            ?>')" class="product-title" >
                                                            <?php
                                                                $feilds =  fetch_values_name_id($talent_request['job_field']);
                                                                foreach ($feilds as  $value) 
                                                                {
                                                                    echo substr($value->value_name, 0,19)." ";
                                                                }
                                                                echo "<br/>";
                                                               echo  substr($talent_request['job_title'], 0,19);
                                                            ?>
                                                            
                                                        </a>
                                                        <span class="product-description">
                                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                            <?php
                                                            $locations =  fetch_values_name_id($talent_request['job_location']);
                                                            // echo "<pre>";print_r($locations);
                                                            foreach ($locations as  $value) 
                                                            {
                                                                echo $value->value_name.", ";
                                                            }
                                                            ?>
                                                        </span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </td>
                                        <td width="40%">
                                            <table width="100%" border="0" cellspacing="2" cellpadding="2">
                                                <tr>
                                                    <td height="30" align="center" valign="top"><span class="label label-info pull-right" style="margin-right:auto; float:inherit !important;">&nbsp;</span>
                                                    </td>
                                                    <td align="center" valign="top"><span class="label label-warning pull-right" style="margin-right:auto; float:inherit !important;">&nbsp;</span>
                                                    </td>
                                                    <td align="center" valign="top"><span class="label label-success pull-right" style="margin-right:auto; float:inherit !important;">&nbsp;</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td height="30" align="center" valign="top"><span class="label label-info pull-right" style="margin-right:auto; float:inherit !important;">&nbsp;</span>
                                                    </td>
                                                    <td align="center" valign="top"><span class="label label-info pull-right" style="margin-right:auto; float:inherit !important;">&nbsp;</span>
                                                    </td>
                                                    <td align="center" valign="top"><span class="label label-success pull-right" style="margin-right:auto; float:inherit !important;">&nbsp;</span>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <?php
                                        }
                                    }else
                                    {
                                        echo "No Record Found!";
                                    }
                                    ?>
                                    <!-- job stlaentr reuqest are entertained overhere ends -->
                                 


                                </table>

                            </div>

                            <!-- /.box-body -->

                            <!-- /.box-footer -->

                        </div>

                        <!-- /.box -->

                    </div>

                    <!-- Left col -->

                    <!-- /.col -->

                    <div class="col-sm-4 update_desktop_div">

                        <div class="box box-primary">

                            <div class="box-header with-border">

                                <h3 class="box-title">Intros</h3>

                                <div class="box-tools pull-right">

                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>

                                    </button>

                                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>

                                </div>

                            </div>

                            <!-- /.box-header -->

                            <div class="box-body bottom_box_scroll">

                                <table width="100%" border="0" cellspacing="2" cellpadding="2">

                                    <tr>

                                        <td>

                                            <ul class="products-list product-list-in-box">

                                                <li class="item">

                                                    <div class="product-img">

                                                        <img src="<?php echo base_url();?>public/admin/dist/img/default-50x50.gif" alt="Product Image" data-toggle="modal" data-target="#myModal2">

                                                    </div>

                                                    <div class="product-info">

                                                       <a style="cursor: pointer;" onclick="dashboard_intros_modal_click(1)" class="product-title">John Smith<br>
                                                        Microsoft INC.
                                                        </a>
                                                        <span class="product-description">

                                                            <i class="fa fa-map-marker" aria-hidden="true"></i>

                                                            San Franicso, CA

                                                        </span>

                                                    </div>

                                                </li>

                                            </ul>

                                        </td>

                                        <td align="center" valign="middle">-</td>

                                        <td align="center" valign="middle"><a href="javascript:void(0)" class="product-title" data-toggle="modal" data-target="#myModal2">Software engineer

                                    </a>

                                            <span class="label label-info calendar_box_decline" data-target="#reject_intro_modal" data-toggle="modal">&nbsp;</span>

                                        </td>

                                    </tr>

                                    <tr>

                                        <td>

                                            <ul class="products-list product-list-in-box">

                                                <li class="item">

                                                    <div class="product-img"><img src="<?php echo base_url();?>public/admin/dist/img/default-50x50.gif" alt="Product Image" data-toggle="modal" data-target="#myModal2" /></div>

                                                    <div class="product-info">

                                                        <a style="cursor: pointer;" onclick="dashboard_intros_modal_click(1)" class="product-title">John Smith<br>
                                                        Microsoft INC.
                                                        </a>
                                                        <span class="product-description">

                                                            <i class="fa fa-map-marker" aria-hidden="true"></i>

                                                            San Franicso, CA

                                                        </span>

                                                    </div>

                                                </li>

                                            </ul>

                                        </td>

                                        <td align="center" valign="middle">-</td>

                                        <td align="center" valign="middle"><a style="cursor: pointer;" data-toggle="modal" data-target="#myModal2" class="product-title">Software engineer </a>

                                            <span class="label label-info calendar_box_wait" data-toggle="modal" data-target="#intro_waiting_modal">&nbsp;</span>

                                        </td>

                                    </tr>

                                    <tr>

                                        <td>

                                            <ul class="products-list product-list-in-box">

                                                <li class="item">

                                                    <div class="product-img"><img src="<?php echo base_url();?>public/admin/dist/img/default-50x50.gif" alt="Product Image" data-toggle="modal" data-target="#myModal2" /></div>

                                                    <div class="product-info">

                                                       <a style="cursor: pointer;" onclick="dashboard_intros_modal_click(1)" class="product-title">John Smith<br>
                                                        Microsoft INC.
                                                        </a>
                                                        <span class="product-description">

                                                            <i class="fa fa-map-marker" aria-hidden="true"></i>

                                                            San Franicso, CA

                                                        </span>

                                                    </div>

                                                </li>

                                            </ul>

                                        </td>

                                        <td align="center" valign="middle">-</td>

                                        <td align="center" valign="middle"><a style="cursor: pointer;" data-toggle="modal" data-target="#myModal2" class="product-title">Software engineer </a>

                                            <span class="label label-info calendar_box_decline" data-target="#reject_intro_modal" data-toggle="modal">&nbsp;</span>

                                        </td>

                                    </tr>

                                    <tr>

                                        <td>

                                            <ul class="products-list product-list-in-box">

                                                <li class="item">

                                                    <div class="product-img"><img src="<?php echo base_url();?>public/admin/dist/img/default-50x50.gif" alt="Product Image" data-toggle="modal" data-target="#myModal2" /></div>

                                                    <div class="product-info">

                                                       <a style="cursor: pointer;" onclick="dashboard_intros_modal_click(1)" class="product-title">John Smith<br>
                                                        Microsoft INC.
                                                        </a>
                                                        <span class="product-description">

                                                            <i class="fa fa-map-marker" aria-hidden="true"></i>

                                                            San Franicso, CA

                                                        </span>

                                                    </div>

                                                </li>

                                            </ul>

                                        </td>

                                        <td align="center" valign="middle">-</td>

                                        <td align="center" valign="middle"><a href="javascript:void(0)" class="product-title" data-toggle="modal" data-target="#myModal2">Software engineer </a>

                                            <span class="label label-info calendar_box_decline" data-target="#reject_intro_modal" data-toggle="modal">&nbsp;</span>

                                        </td>

                                    </tr>

                                    <tr>

                                        <td>

                                            <ul class="products-list product-list-in-box">

                                                <li class="item">

                                                    <div class="product-img"><img src="<?php echo base_url();?>public/admin/dist/img/default-50x50.gif" alt="Product Image" data-toggle="modal" data-target="#myModal2" /></div>

                                                    <div class="product-info">

                                                       <a  style="cursor: pointer;" onclick="dashboard_intros_modal_click(1)" class="product-title">John Smith<br>
                                                        Microsoft INC.
                                                        </a>
                                                        <span class="product-description">

                                                            <i class="fa fa-map-marker" aria-hidden="true"></i>

                                                            San Franicso, CA

                                                        </span>

                                                    </div>

                                                </li>

                                            </ul>

                                        </td>

                                        <td align="center" valign="middle">-</td>

                                        <td align="center" valign="middle"><a href="javascript:void(0)" class="product-title" data-toggle="modal" data-target="#myModal2">Software engineer </a>

                                            <span class="label label-info calendar_box_hold" data-toggle="modal" data-target="#save_draft_modal">&nbsp;</span>

                                        </td>

                                    </tr>

                                    <tr>

                                        <td>

                                            <ul class="products-list product-list-in-box">

                                                <li class="item">

                                                    <div class="product-img"><img src="<?php echo base_url();?>public/admin/dist/img/default-50x50.gif" alt="Product Image" data-toggle="modal" data-target="#myModal2" /></div>

                                                    <div class="product-info">

                                                       <a  style="cursor: pointer;" onclick="dashboard_intros_modal_click(1)" class="product-title">John Smith<br>
                                                        Microsoft INC.
                                                        </a>
                                                        Microsoft INC.
                                                        <span class="product-description">

                                                            <i class="fa fa-map-marker" aria-hidden="true"></i>

                                                            San Franicso, CA

                                                        </span>

                                                    </div>

                                                </li>

                                            </ul>

                                        </td>

                                        <td align="center" valign="middle">-</td>

                                        <td align="center" valign="middle"><a href="javascript:void(0)" class="product-title" data-toggle="modal" data-target="#myModal2">Software engineer </a>

                                            <span class="label label-info calendar_box_proceed" data-toggle="modal" data-target="#send_intro_modal">&nbsp;</span>

                                        </td>

                                    </tr>

                                    <tr>

                                        <td>

                                            <ul class="products-list product-list-in-box">

                                                <li class="item">

                                                    <div class="product-img"><img src="<?php echo base_url();?>public/admin/dist/img/default-50x50.gif" alt="Product Image" data-toggle="modal" data-target="#myModal2" /></div>

                                                    <div class="product-info">

                                                        <a  style="cursor: pointer;" onclick="dashboard_intros_modal_click(1)" class="product-title">John Smith<br>
                                                        Microsoft INC.
                                                        </a>
                                                        
                                                        <span class="product-description">

                                                            <i class="fa fa-map-marker" aria-hidden="true"></i>

                                                            San Franicso, CA

                                                        </span>

                                                    </div>

                                                </li>

                                            </ul>

                                        </td>

                                        <td align="center" valign="middle">-</td>

                                        <td align="center" valign="middle"><a href="javascript:void(0)" class="product-title" data-toggle="modal" data-target="#myModal2">Software engineer </a>

                                            <span class="label label-info calendar_box_wait" data-toggle="modal" data-target="#intro_waiting_modal">&nbsp;</span>

                                        </td>

                                    </tr>

                                </table>

                            </div>

                            <!-- /.box-body -->

                            <!-- /.box-footer -->

                        </div>

                        <!-- /.box -->

                    </div>

                    <!-- /.col -->

                </div>

                <!-- /.row -->

            </section>

            <!-- /.content -->
            <?php
            }
                if ($this->session->userdata('role_id')==5) 
                {
                 
            ?>
            <div class="col-sm-12">
                <div id="tabs_client_admin">
                    <ul id="myTabs" class="nav nav-pills nav-justified" role="tablist" data-tabs="tabs">
                        <li class="active"><a href="#current_activity" data-toggle="tab">Current activity</a></li>
                        <li><a href="#draft_tab" data-toggle="tab">Draft</a></li>
                        <li><a href="#Completed" data-toggle="tab">Completed</a></li>
                        <li><a href="#Cancelled" data-toggle="tab">Cancelled</a></li>
                    </ul>
                    <div class="clear20"></div>
                    <div class="tab-content" >
                        <div role="tabpanel" class="tab-pane fade in active" id="current_activity">
                            <div class="col-sm-3 col-xs-12">
                                
                                <ul class="graph_values">
                                    <li class="mian_toggle" data-toggle="collapse" data-target="#hire_now"><b>Hire now</b> <span class="badge badge-secondary">6</span></li>
                                    
                                    <div id="hire_now" class="collapse">
                                        <li>Professional <span class="badge badge-secondary">4</span></li>
                                        <li>Emerging talent <span class="badge badge-secondary">0</span></li>
                                        <li>Temp <span class="badge badge-secondary">2</span></li>
                                    </div>
                                    
                                    <li class="mian_toggle" data-toggle="collapse" data-target="#market_insigths"><b>Market insights</b> <span class="badge badge-secondary">3</span></li>
                                    
                                    <div id="market_insigths" class="collapse">
                                        <li>Salary benchmark <span class="badge badge-secondary">1</span></li>
                                        <li>Talent benchmark <span class="badge badge-secondary">1</span></li>
                                        <li>Market map & talent intros <span class="badge badge-secondary">1</span></li>
                                    </div>
                                    
                                    <li class="mian_toggle" data-toggle="collapse" data-target="#leaver_insights"><b>Leaver insights</b> <span class="badge badge-secondary">23</span></li>
                                    <div id="leaver_insights" class="collapse">
                                        <li>Leaver survey <span class="badge badge-secondary">21</span></li>
                                        <li>Leaver interview <span class="badge badge-secondary">2</span></li>
                                    </div>
                                
                                    <li><b>Support</b> <span class="badge badge-secondary">3</span></li>
                                </ul>
                            </div>
                            
                            <div class="col-sm-9 col-xs-12">
                                <div class="col-sm-8 p0 badge_main">
                                    <p>
                                        <span class="badge badge-primary">&nbsp; </span>
                                        Hire Now
                                    </p>
                                    <p>
                                        <span class="badge badge-secondary">&nbsp; </span>
                                        Market Insight
                                    </p>
                                    <p>
                                        <span class="badge badge-success">&nbsp; </span>
                                        Leaver Insight
                                    </p>
                                    <p>
                                        <span class="badge badge-danger">&nbsp; </span>
                                        Support
                                    </p>
                                    
                                    </p>
                                    
                                </div>
                                
                                <div class="col-sm-4 text-right">
                                    <p>Weekly active users</p>
                                </div>
                                
                                <div class="clearfix"></div>
                                <div id="chartContainer_current_activity" style="height: 300px; width: 764px;"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        
                        <div role="tabpanel" class="tab-pane fade" id="draft_tab">
                            <div class="col-sm-3 col-xs-12">
                                <ul class="graph_values">
                                    <li class="mian_toggle" data-toggle="collapse" data-target="#hire_now1"><b>Hire now</b> <span class="badge badge-secondary">6</span></li>
                                    
                                    <div id="hire_now1" class="collapse">
                                        <li>Professional <span class="badge badge-secondary">4</span></li>
                                        <li>Emerging talent <span class="badge badge-secondary">0</span></li>
                                        <li>Temp <span class="badge badge-secondary">2</span></li>
                                    </div>
                                    
                                    <li class="mian_toggle" data-toggle="collapse" data-target="#market_insigths1"><b>Market insights</b> <span class="badge badge-secondary">3</span></li>
                                    
                                    <div id="market_insigths1" class="collapse">
                                        <li>Salary benchmark <span class="badge badge-secondary">1</span></li>
                                        <li>Talent benchmark <span class="badge badge-secondary">1</span></li>
                                        <li>Market map & talent intros <span class="badge badge-secondary">1</span></li>
                                    </div>
                                    
                                    <li class="mian_toggle" data-toggle="collapse" data-target="#leaver_insights1"><b>Leaver insights</b> <span class="badge badge-secondary">23</span></li>
                                    <div id="leaver_insights1" class="collapse">
                                        <li>Leaver survey <span class="badge badge-secondary">21</span></li>
                                        <li>Leaver interview <span class="badge badge-secondary">2</span></li>
                                    </div>
                                
                                    <li><b>Support</b> <span class="badge badge-secondary">3</span></li>
                                </ul>
                            </div>
                            
                            <div class="col-sm-9 col-xs-12">
                                <div class="col-sm-8 p0 badge_main">
                                    <p>
                                        <span class="badge badge-primary">&nbsp; </span>
                                        Gmail
                                    </p>
                                    <p>
                                        <span class="badge badge-secondary">&nbsp; </span>
                                        Drive
                                    </p>
                                    <p>
                                        <span class="badge badge-success">&nbsp; </span>
                                        Calendar
                                    </p>
                                    <p>
                                        <span class="badge badge-danger">&nbsp; </span>
                                        Google +
                                    </p>
                                    <p>
                                        <span class="badge badge-warning">&nbsp; </span>
                                        Classroom
                                    </p>
                                    
                                </div>
                                
                                <div class="col-sm-4 text-right">
                                    <p>Weekly active users</p>
                                </div>
                                
                                <div class="clearfix"></div>
                                <div id="chartContainer_draft" style="height: 300px;width: 764px; "></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="Completed">
                            <div class="col-sm-3 col-xs-12">
                                <ul class="graph_values">
                                    <li class="mian_toggle" data-toggle="collapse" data-target="#hire_now2"><b>Hire now</b> <span class="badge badge-secondary">6</span></li>
                                    
                                    <div id="hire_now2" class="collapse">
                                        <li>Professional <span class="badge badge-secondary">4</span></li>
                                        <li>Emerging talent <span class="badge badge-secondary">0</span></li>
                                        <li>Temp <span class="badge badge-secondary">2</span></li>
                                    </div>
                                    
                                    <li class="mian_toggle" data-toggle="collapse" data-target="#market_insigths2"><b>Market insights</b> <span class="badge badge-secondary">3</span></li>
                                    
                                    <div id="market_insigths2" class="collapse">
                                        <li>Salary benchmark <span class="badge badge-secondary">1</span></li>
                                        <li>Talent benchmark <span class="badge badge-secondary">1</span></li>
                                        <li>Market map & talent intros <span class="badge badge-secondary">1</span></li>
                                    </div>
                                    
                                    <li class="mian_toggle" data-toggle="collapse" data-target="#leaver_insights2"><b>Leaver insights</b> <span class="badge badge-secondary">23</span></li>
                                    <div id="leaver_insights2" class="collapse">
                                        <li>Leaver survey <span class="badge badge-secondary">21</span></li>
                                        <li>Leaver interview <span class="badge badge-secondary">2</span></li>
                                    </div>
                                
                                    <li><b>Support</b> <span class="badge badge-secondary">3</span></li>
                                </ul>
                            </div>
                            
                            <div class="col-sm-9 col-xs-12">
                                <div class="col-sm-8 p0 badge_main">
                                    <p>
                                        <span class="badge badge-primary">&nbsp; </span>
                                        Gmail
                                    </p>
                                    <p>
                                        <span class="badge badge-secondary">&nbsp; </span>
                                        Drive
                                    </p>
                                    <p>
                                        <span class="badge badge-success">&nbsp; </span>
                                        Calendar
                                    </p>
                                    <p>
                                        <span class="badge badge-danger">&nbsp; </span>
                                        Google +
                                    </p>
                                    <p>
                                        <span class="badge badge-warning">&nbsp; </span>
                                        Classroom
                                    </p>
                                    
                                </div>
                                
                                <div class="col-sm-4 text-right">
                                    <p>Weekly active users</p>
                                </div>
                                
                                <div class="clearfix"></div>
                                <div id="chartContainer_completed" style="height: 300px; width: 764px;"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="Cancelled">
                            <div class="col-sm-3 col-xs-12">
                                <ul class="graph_values">
                                    <li class="mian_toggle" data-toggle="collapse" data-target="#hire_now3"><b>Hire now</b> <span class="badge badge-secondary">6</span></li>
                                    
                                    <div id="hire_now3" class="collapse">
                                        <li>Professional <span class="badge badge-secondary">4</span></li>
                                        <li>Emerging talent <span class="badge badge-secondary">0</span></li>
                                        <li>Temp <span class="badge badge-secondary">2</span></li>
                                    </div>
                                    
                                    <li class="mian_toggle" data-toggle="collapse" data-target="#market_insigths3"><b>Market insights</b> <span class="badge badge-secondary">3</span></li>
                                    
                                    <div id="market_insigths3" class="collapse">
                                        <li>Salary benchmark <span class="badge badge-secondary">1</span></li>
                                        <li>Talent benchmark <span class="badge badge-secondary">1</span></li>
                                        <li>Market map & talent intros <span class="badge badge-secondary">1</span></li>
                                    </div>
                                    
                                    <li class="mian_toggle" data-toggle="collapse" data-target="#leaver_insights3"><b>Leaver insights</b> <span class="badge badge-secondary">23</span></li>
                                    <div id="leaver_insights3" class="collapse">
                                        <li>Leaver survey <span class="badge badge-secondary">21</span></li>
                                        <li>Leaver interview <span class="badge badge-secondary">2</span></li>
                                    </div>
                                
                                    <li><b>Support</b> <span class="badge badge-secondary">3</span></li>
                                </ul>
                            </div>
                            
                            <div class="col-sm-9 col-xs-12">
                                <div class="col-sm-8 p0 badge_main">
                                    <p>
                                        <span class="badge badge-primary">&nbsp; </span>
                                        Gmail
                                    </p>
                                    <p>
                                        <span class="badge badge-secondary">&nbsp; </span>
                                        Drive
                                    </p>
                                    <p>
                                        <span class="badge badge-success">&nbsp; </span>
                                        Calendar
                                    </p>
                                    <p>
                                        <span class="badge badge-danger">&nbsp; </span>
                                        Google +
                                    </p>
                                    <p>
                                        <span class="badge badge-warning">&nbsp; </span>
                                        Classroom
                                    </p>
                                    
                                </div>
                                
                                <div class="col-sm-4 text-right">
                                    <p>Weekly active users</p>
                                </div>
                                
                                <div class="clearfix"></div>
                                <div id="chartContainer_cancelled" style="height: 300px; width: 764px;"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="clear20"></div>
            <?php
                }
            ?>
        </div>

        <!-- /.content-wrapper -->
       <!--  -->
