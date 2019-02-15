
       
        $('#example').DataTable();
      

        $('#myTable').DataTable({
            responsive: true
        });
   
        jQuery.extend(jQuery.expr[':'], {
            focusable: function(el, index, selector) {
                return $(el).is('a, button, select, :input, [tabindex]');
            }
        });

        $(document).on('keypress', 'input,select', function(e) {
            if (e.which == 13) {
                e.preventDefault();
                // Get all focusable elements on the page
                var $canfocus = $(':focusable');
                var index = $canfocus.index(document.activeElement) + 1;
                if (index >= $canfocus.length) index = 0;
                $canfocus.eq(index).focus();
            }
        });


            $('body').on('click', function(e) {
                if ($(e.target).parents('.cal_drp_tab').length) {
                    console.log("length");
                    e.preventDefault();
                }
            });



$('.add_pool').on('click', function () {
    $('#msg').html("");

    var pool_name = $('[name="pool_name"]').val();

    if (pool_name === "") {
        $('#msg').html('Please Enter Pool Name');
        $('#msg').show();
        return false;
    }

    $.ajax({
        type:"POST",
        url:base_url+"add_poool",
        data: {PoolName: pool_name},
        dataType:"JSON",
        success: function (data) 
        {
            window.location.reload(true);
        }

    });
});

function getpooldata(id) {

    $(".append_Pool_data_"+id).html("");
    
    $.ajax({
        type:"POST",
        url:base_url+"getpooldata",
        data: {pool_id: id},
        dataType:"JSON",
        beforeSend: function(){
            // Show image container
            $("#loader_"+id).show();
        },
        success: function (data) 
        {
            if (data == false) {

                $('.append_Pool_data_'+id).append('<div class="no_record_found" style="display: inherit !important; width:100%; text-align:center;">No Record Found</div>');

            }
            else
            {
                //var content = '';

                $.each(data, function (i, record) {
                   
                    $('.append_Pool_data_'+id).append('<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">'+
                                    '<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#myModall3">'+
                                                '<center>'+
                                                    '<label>'+record.name+'</label>'+
                                                '</center>'+
                                            '</div>'+
                                            '<div class="event_client_price event_heading pool_head_main">'+
                                                '<center>'+
                                                    '<label><img src="public/admin/img/'+record.file_name+'"></label>'+
                                                '</center>'+
                                            '</div>'+

                                            '<div class="event_client_price event_heading pool_head_main">'+
                                                '<center>'+
                                                    '<label>AK, WL</label>'+
                                                '</center>'+
                                            '</div>'+
                                            '<div class="event_client_price event_heading pool_head_main">'+
                                                '<center>'+
                                                    '<label>150k</label>'+
                                                '</center>'+
                                            '</div>'+
                                            '<div class="event_client_price event_heading pool_head_main">'+
                                                '<button type="button" class="btn-success"></button>'+
                                            '</div>'+
                                            '<div class="event_client_price event_heading pool_head_main">'+
                                                '<center>'+
                                                    '<label>6 days</label>'+
                                                '</center>'+
                                            '</div>'+
                                        '</div>');
                });
                
            }
            
            //window.location.reload(true);
        },
        complete:function(data){
            // Hide image container
            $("#loader_"+id).hide();
        }

    });

}

/*----------------Coding For Header Pools--------------------------*/
function HeaderPools() {
    $('#accordion1').html('');
    $.ajax({
        url : base_url+"GetHeaderPools",
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
            $.each(data, function (i, record) {
            
            $('#accordion1').append('<div class="panel panel-default">'+
                                '<div class="panel-heading" onclick="getpoolinnerdata('+record.id+')" role="tab" id="heading'+record.id+'">'+
                                    '<a role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapse'+record.id+'" aria-expanded="false" aria-controls="collapse'+record.id+'">'+
                                        '<div class="desktop_ceremony event_client_pbox" id="pool_job_category">'+
                                            '<div class="event_client_price event_heading pool_head_main">'+
                                                '<center>'+
                                                    '<label>'+record.pool_name+'</label>'+
                                                '</center>'+
                                            '</div>'+
                                            '<div class="event_client_price event_heading pool_head_main">'+
                                                '<center>'+
                                                    '<label>14</label>'+
                                                '</center>'+
                                            '</div>'+

                                            '<div class="event_client_price event_heading pool_head_main">'+
                                                '<center>'+
                                                    '<label>35</label>'+
                                                '</center>'+
                                            '</div>'+
                                            '<div class="event_client_price event_heading pool_head_main">'+
                                                '<center>'+
                                                    '<label>65</label>'+
                                                '</center>'+
                                            '</div>'+
                                            '<div class="event_client_price event_heading pool_head_main">'+
                                                '<center>'+
                                                    '<label>3</label>'+
                                                '</center>'+
                                            '</div>'+
                                            '<div class="event_client_price event_heading pool_head_main">'+
                                                '<center>'+
                                                    '<label>44k</label>'+
                                                '</center>'+
                                            '</div>'+
                                        '</div>'+
                                        
                                    '</a>'+
                                '</div>'+
                                '<div id="collapse'+record.id+'" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading'+record.id+'">'+
                                    '<div class="panel-body">'+
                                        '<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">'+
                                            '<div class="event_client_price event_heading pool_head_main">'+
                                                '<center>'+
                                                    '<span><i class="fa fa-user-o" aria-hidden="true"></i></span>'+
                                                '</center>'+
                                            '</div>'+
                                            '<div class="event_client_price event_heading">'+
                                                '<center>'+
                                                    '<label><img src="'+base_url+'public/admin/img/rect_full_ff.png"></label>'+
                                                '</center>'+
                                            '</div>'+

                                            '<div class="event_client_price event_heading">'+
                                                '<center>'+
                                                    '<span><i class="fa fa-map-marker" aria-hidden="true"></i></span>'+
                                                '</center>'+
                                            '</div>'+
                                            '<div class="event_client_price event_heading">'+
                                                '<center>'+
                                                    '<span><i class="fa fa-usd" aria-hidden="true"></i></span>'+
                                                '</center>'+
                                            '</div>'+
                                            '<div class="event_client_price event_heading">'+
                                                '<center>'+
                                                    '<label><img src="'+base_url+'public/admin/img/life_line.png"></label>'+
                                                '</center>'+
                                            '</div>'+
                                            '<div class="event_client_price event_heading">'+
                                                '<center>'+
                                                    '<label><img src="'+base_url+'public/admin/img/clock.png"></label>'+
                                                '</center>'+
                                            '</div>'+
                                        '</div>'+
                                        
                                        '<div class="clear5"></div>'+
                                        
                                        '<div id="job_inner_data" class="append_header_pooldata_'+record.id+'">'+
                                    
                                        '</div>'+
                                    '</div>'+
                                
                                '</div>'+
                            '</div>');
                });
            $('#pool_project_manager').modal('show');
        
        }
    });
    
}

function getpoolinnerdata(id) {
    $(".append_header_pooldata_"+id).html("");
    
    $.ajax({
        type:"POST",
        url:base_url+"getpooldata",
        data: {pool_id: id},
        dataType:"JSON",
        success: function (data) 
        {
            if (data == false) {

                $('.append_header_pooldata_'+id).append('<div class="no_record_found" style="display: inherit !important; width:100%; text-align:center;">No Record Found</div>');

            }
            else
            {
                //var content = '';

                $.each(data, function (i, record) {

                    $('.append_header_pooldata_'+id).append('<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">'+
                                    '<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#myModall3">'+
                                                '<center>'+
                                                    '<label>'+record.name+'</label>'+
                                                '</center>'+
                                            '</div>'+
                                            '<div class="event_client_price event_heading pool_head_main">'+
                                                '<center>'+
                                                    '<label><img src="public/admin/img/'+record.file_name+'"></label>'+
                                                '</center>'+
                                            '</div>'+

                                            '<div class="event_client_price event_heading pool_head_main">'+
                                                '<center>'+
                                                    '<label>AK, WL</label>'+
                                                '</center>'+
                                            '</div>'+
                                            '<div class="event_client_price event_heading pool_head_main">'+
                                                '<center>'+
                                                    '<label>150k</label>'+
                                                '</center>'+
                                            '</div>'+
                                            '<div class="event_client_price event_heading pool_head_main">'+
                                                '<button type="button" class="btn-success"></button>'+
                                            '</div>'+
                                            '<div class="event_client_price event_heading pool_head_main">'+
                                                '<center>'+
                                                    '<label>6 days</label>'+
                                                '</center>'+
                                            '</div>'+
                                        '</div>');
                });
                
            }
            
            //window.location.reload(true);
        }

    });
}
/*----------------Coding For Header Pools--------------------------*/
