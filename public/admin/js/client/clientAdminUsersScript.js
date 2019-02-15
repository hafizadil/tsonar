$(document).ready(function() {
    $('#example').DataTable();

    $(".HM_change input").change(function(){
        $(this).parent().removeClass('has-error');
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

/*-----------------Clients Hiring Managers----------------*/

function add_hiringManager(id)
{

    save_method = 'add';
    $('#clientarea_hiringManager_form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    $('#clientarea_hirngManager').modal('show'); // show bootstrap modal
    $('.modal-title').text('Add New Hiring Manager'); // Set Title to Bootstrap modal title
}
function edit_HiringManager(id)
{
    save_method = 'update';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string

    //Ajax Load data from ajax
    $.ajax({
        url : base_url+"get_HiringManager/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
            $('[name="id"]').val(data[0].hiringmanager_id);
            $('[name="HM_Name"]').val(data[0].hiringmanager_name);
            $('[name="HM_Email"]').val(data[0].hiringmanager_email);
            $('[name="HM_JobTitle"]').val(data[0].hiringmanager_jobtitle);
            $('#clientarea_hirngManager').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Hiring Manager'); // Set title to Bootstrap modal title

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
}

function save_hiringManger()
{
    $('#Add_Clientarea_hirngManger').text('saving...'); //change button text
    $('#Add_Clientarea_hirngManger').attr('disabled',true); //set button disable 
    var url;

    if(save_method == 'add') {
        url = base_url+"add_HiringManager";
    } else {
        url = base_url+"update_HiringManager";
    }

    // ajax adding data to database
    $.ajax({
        url : url,
        type: "POST",
        data: $('#clientarea_hiringManager_form').serialize(),
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
                    $('[name="'+data.inputerror[i]+'"]').parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
                    $('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]); //select span help-block class set text error string
                }
            }
            $('#Add_Clientarea_hirngManger').text('Save'); //change button text
            $('#Add_Clientarea_hirngManger').attr('disabled',false); //set button enable 


        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            /*alert('Error adding / update data');
            $('#Add_Clientarea_hirngManger').text('Add Now'); //change button text
            $('#Add_Clientarea_hirngManger').attr('disabled',false); //set button enable */
            alertify.error('Cancel')

        }
    });
}


function delete_HiringManager(id) {

  	alertify.confirm("Confirm","Are You Sure, proceed?",
	function(){
  		alertify.success('Ok');
    	$.ajax({
       
            type: 'post',
            url: base_url+'delete_HiringManager',
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