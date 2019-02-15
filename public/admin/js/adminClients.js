$(document).ready(function() {
    $('#example').DataTable();

    $("input").change(function(){
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });
    $("textarea").change(function(){
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });
    $("select").change(function(){
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });
});


/*-----------------Clients----------------*/

function add_client()
{
    save_method = 'add';
    $('#form')[0].reset(); // reset form on modals
    $('.col-md-6').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    $('#myModal_new_client').modal('show'); // show bootstrap modal
    $('.modal-title').text('Add New Client'); // Set Title to Bootstrap modal title
}
function edit_client(id)
{
    save_method = 'update';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string

    //Ajax Load data from ajax
    $.ajax({
        url : base_url+"GetUpdateClient/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
            $('[name="id"]').val(data[0].id);
            $('[name="fname"]').val(data[0].firstname);
            $('[name="lname"]').val(data[0].lastname);
            $('[name="email"]').val(data[0].email);
            $('[name="phone"]').val(data[0].phone);
            $('[name="gender"]').val(data[0].gender);
            $('[name="state"]').val(data[0].state);
            $('[name="zipcode"]').val(data[0].zipcode);
            $('[name="city"]').val(data[0].city);
            $('[name="country"]').val(data[0].country);
            $('#myModal_new_client').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Client'); // Set title to Bootstrap modal title

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
}

function reload_table()
{
    table.ajax.reload(null,false); //reload datatable ajax 
}

function save()
{
    $('#Add_Clients').text('saving...'); //change button text
    $('#Add_Clients').attr('disabled',true); //set button disable 
    var url;

    if(save_method == 'add') {
        url = base_url+"AddClient";
    } else {
        url = base_url+"UpdateClient";
    }

    // ajax adding data to database
    $.ajax({
        url : url,
        type: "POST",
        data: $('#form').serialize(),
        dataType: "JSON",
        success: function(data)
        {

            if(data.status) //if success close modal and reload ajax table
            {
                $('#myModal_new_client').modal('hide');
                window.location.reload(true);
            }
            else
            {
                for (var i = 0; i < data.inputerror.length; i++) 
                {
                    $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
                    $('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]); //select span help-block class set text error string
                }
            }
            $('#Add_Clients').text('Add Now'); //change button text
            $('#Add_Clients').attr('disabled',false); //set button enable 


        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            /*alert('Error adding / update data');
            $('#Add_Clients').text('Add Now'); //change button text
            $('#Add_Clients').attr('disabled',false); //set button enable */
            alertify.error('Cancel')

        }
    });
}

function DeleteClient(id) {

  	alertify.confirm("Confirm","Are You Sure, proceed?",
	function(){
  		alertify.success('Ok');
    	$.ajax({
       
            type: 'post',
            url: base_url+'DeleteClient',
            data: { clientID: id},
            dataType: "JSON",
            success: function (data) {

                location.reload();
            },
            error: function (data) {
                alert("error"+data);
            }

    	});
  	},
  	function(){
    	alertify.error('Cancel');
	});
}

/*---------------------------Clients---------------------------*/

/*-----------------Clients Hiring Managers---------------------*/
/*function gethiringmangerclients() {
    $('#append_client_hiringmangers').html('');
    $.ajax({
        url : base_url+"gethiringmangerclients",
        type: "POST",
        success: function(data)
        {
            
            var output = [];
            var response = $.parseJSON(data);
            $.each(response, function(key, value)
            {
                output.push('<option value="'+ value.id +'">'+value.firstname+' '+value.lastname+'</option>');
            });

            $('#append_client_hiringmangers').html(output.join(''));

        }
    });
}*/

function add_hiring_manager() {

    save_method = 'add';
    $('#client_hiring_manager_form')[0].reset(); // reset form on modals
    $('.col-md-8').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    $('#client_hiring_manager').modal('show'); // show bootstrap modal
    $('.modal-title').text('Add Hiring Manager'); // Set Title to Bootstrap modal title
    $('#append_client_hiringmangers').attr('disabled', true);

}


$('#client_hiring_manager').on('shown.bs.modal', function (e) {
    var clientname = $('#clientName').text();
    $('#append_client_hiringmangers').html('');
    $.ajax({
        url : base_url+"gethiringmangerclients",
        type: "POST",
        success: function(data)
        {

            var output = [];
            var response = $.parseJSON(data);
            $.each(response, function(key, value)
            {
                if (clientname == value.firstname+' '+value.lastname) {
                    output.push('<option value="'+ value.id +'" selected>'+value.firstname+' '+value.lastname+'</option>');
                }else{
                    output.push('<option value="'+ value.id +'">'+value.firstname+' '+value.lastname+'</option>');
                }
            });

            $('#append_client_hiringmangers').html(output.join(''));

        }
    });
})

function save_hiring_manger()
{
    $('#client_hiring_manager_btn').text('saving...'); //change button text
    $('#client_hiring_manager_btn').attr('disabled',true); //set button disable 
    var url;

    if(save_method == 'add') {
        url = base_url+"Addhiringmangerclients";
    } else {
        url = base_url+"UpdateClientHiringmanger";
    }

    var data = $("#client_hiring_manager_form").serializeArray();
            
    var clientid = $('#append_client_hiringmangers').val();
    data.push({name: 'client', value: clientid});

    // ajax adding data to database
    $.ajax({
        url : url,
        type: "POST",
        data: data,
        dataType: "JSON",
        success: function(data)
        {

            if(data.status) //if success close modal and reload ajax table
            {
                $('#client_hiring_manager').modal('hide');
                window.location.reload(true);
            }
            else
            {
                for (var i = 0; i < data.inputerror.length; i++) 
                {
                    $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
                    $('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]); //select span help-block class set text error string
                }
            }
            $('#client_hiring_manager_btn').text('Save'); //change button text
            $('#client_hiring_manager_btn').attr('disabled',false); //set button enable 


        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error adding / update data');
            $('#client_hiring_manager_btn').text('Add Now'); //change button text
            $('#client_hiring_manager_btn').attr('disabled',false); //set button enable 
        }
    });
}


function edit_hiring_manager(id)
{

    save_method = 'update';
    $('#client_hiring_manager_form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    $('#append_client_hiringmangers').attr('disabled', true);

    //Ajax Load data from ajax
    $.ajax({
        url : base_url+"Getupdatehiringmangerclients/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {

            $('[name="client_hiring_id"]').val(data[0].hiringmanager_id);
            $('[name="clienthiringManagerName"]').val(data[0].hiringmanager_name);
            $('[name="clienthiringManagerEmail"]').val(data[0].hiringmanager_email);
            $('[name="clienthiringManagerJobTitle"]').val(data[0].hiringmanager_jobtitle);
            $('#client_hiring_manager').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Hiring Manager'); // Set title to Bootstrap modal title

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
}

function delete_hiring_manager(id) {
    alertify.confirm("Confirm","Are You Sure, proceed?",
    function(){
        alertify.success('Ok');
        $.ajax({
       
            type: 'post',
            url: base_url+'DeleteClientHiringmanger',
            data: { clientID: id},
            dataType: "JSON",
            success: function (data) {

                location.reload();
            },
            error: function (data) {
                
            }

        });
    },
    function(){
        alertify.error('Cancel');
    });
}

/*-----------------Clients Hiring Managers---------------------*/
/*-----------------Client Permission---------------------*/
function test(id) {

    $('[name="user_id"]').val(id);
    $('#open_modal').modal('show');
    
}

$('.permission').on('click', function (e) {
    

    var data = {
        user_id : $('#user_id').val(),

        permission_id : $(this).data('value'),

        status : 1
    }    

    alertify.confirm("Confirm","Are You Sure, proceed?",
    function(){
    $.ajax({
       
            type: 'post',
            url: base_url+'UpdateUserPermission',
            data: { permission_data: data},
            dataType: "JSON",
            success: function (data) {

                location.reload();
            },
            error: function (data) {
                
            }

        });
    },
    function(){
        alertify.error('Cancel');
    });
    
});

/*-----------------Client Permission---------------------*/

/*---------------------Irfan----------------*/


    $('.boxx_2').hide();
    $('.boxx_3').hide();
    $('.boxx_4').hide();
    $('.boxx_5').hide();
    $('.boxx_6').hide();
    $(document).ready(function(){
        $('.btn_hiring_prof').click(function(){
            $('.boxx_1').hide();
            $('.boxx_2').show();
           
        });
        $('.second_btn').click(function(){
            $('.boxx_2').hide();
            $('.boxx_3').show();
           
        });
        $('.third_btn').click(function(){
            $('.boxx_3').hide();
            $('.boxx_4').show();
           
        });
         $('.foruth_btn').click(function(){
            $('.boxx_4').hide();
            $('.boxx_5').show();
           
        });
          $('.fifth_btn').click(function(){
            $('.boxx_5').hide();
            $('.boxx_6').show();
           
        });
       
           $('.restart_tsonr_btnn').click(function(){
             $('.boxx_2').hide();
            $('.boxx_1').show();
        });
           
            $('.back_step_tsnor').click(function(){
            $('.boxx_2').hide();
            $('.boxx_1').show();
        });
            $('.back_step_tsnor_2').click(function(){
            $('.boxx_3').hide();
            $('.boxx_2').show();
        });
           
            $('.restart_tsonr_btnn_2').click(function(){
            $('.boxx_2').hide();
            $('.boxx_3').hide();
            $('.boxx_1').show();
        });
             $('.back_step_tsnor_2').click(function(){
            
            $('.boxx_3').hide();
            $('.boxx_2').show();
            
        });
         


    });

/*---------------------Irfan----------------*/