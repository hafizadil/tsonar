   $(document).ready(function() {
      $('#example').DataTable();
    });

    $('#myTable').DataTable( {
      responsive: true
    });

    jQuery.extend(jQuery.expr[':'], {
      focusable: function (el, index, selector) {
        return $(el).is('a, button, select, :input, [tabindex]');
      }
    });

    $(document).on('keypress', 'input,select', function (e) {
      if (e.which == 13) {
        e.preventDefault();
        // Get all focusable elements on the page
        var $canfocus = $(':focusable');
        var index = $canfocus.index(document.activeElement) + 1;
        if (index >= $canfocus.length) index = 0;
        $canfocus.eq(index).focus();
      }
    });
  $(document).ready(function(){
    $('[data-toggle="popover"]').popover();
  });

    $(document).ready(function(){
      
      $('body').on('click', function(e)
      {
        if($(e.target).parents('.cal_drp_tab').length)
        {
          console.log("length");
          e.preventDefault();
        }
      })
    });


function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
      });
}

/*An array containing all the country names in the world:*/
// var countries = ["client 1","Client 2","Client 3"];

/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
// autocomplete(document.getElementById("myInput"), countries);


//modal for adding new setting 
// $('#newsetting').on('change',function(){

//    var option_new=$(this).val();
   // alert(option_new);
//   if(option_new=='new_setting'){
   
//     $('#modal_new_setting').show();
//   }
// });

//modal for closing new setting modal
// $('#close_newmodal_setting').on('click',function(){
  
//   $('#modal_new_setting').toggle();
// });


// Save Setting Name 

$("#save_setting_value").on("click", function(){

    if ($('#value_name').val() == "") 
    {
        $('#msg').html('Please Enter Value Name');
        $('#msg').show();
        return false;
    }

    var data = {
        'setting_id':$('#setting_id').val(),
        'value_name':$('#value_name').val()
      };
      $.ajax({

        type : "POST",

        url : base_url+"save_setting_value",

        data: {setting_data: data},

        dataType : "json",

        success : function (response) {

          window.location.reload(true);
        
        }

      });

});

//Deleting Setting from Table

$('.delete_setting').on("click", function(){


  var value_id= $(this).attr('id');
  alertify.confirm("This is a confirm dialog.",
    function(){
      alertify.success('Ok');
        $.ajax({
           
            type: 'post',
            url: base_url+'delete_setting',
            data: { value_id: value_id},
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
});


//update inner Status in Settings 
$('.update_status').on("click", function() 
{

    var value_id =  $(this).attr('id');
    alertify.confirm("This is a confirm dialog.",
      function(){
        alertify.success('Ok');
        $.ajax({
          url: base_url+'change_status',
          type: "post",
          data: { value_id: value_id},
          success: function (response) 
          {
             location.reload();
          }

      });
      },
      function(){
        alertify.error('Cancel');
      });
    
});

//update outer Status in Settings 
$('.update_outer_status').on("click", function() 
{
  var value_id =  $(this).attr('id');
  alertify.confirm("This is a confirm dialog.",
    function(){
      alertify.success('Ok');
        $.ajax({
            url: base_url+'change_outer_status',
            type: "post",
            data: { outer_status: value_id},
            success: function (response) 
            {
               location.reload();
            }

        });
      },
    function(){
      alertify.error('Cancel');
    });
});



/*-------------Update inner Setting Js------------*/

function showUpdateSettingModal(modalId) {

  $.ajax({
        url : base_url+"admin/settings/getinnersettingmodal/"+modalId,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
          //console.log(data);
          $('[name="value_id"]').val(data[0].value_id);
          $('[name="Value_Name"]').val(data[0].value_name);
          $('#updateInnerSetting').modal('show'); // show bootstrap modal when complete loaded
          $('.modal-title').text(data[0].value_name); // Set title to Bootstrap modal title

        }
    });
}

function updateinnerSeting(id) {

  var id   = $('[name="value_id"]').val(); 
  var data = {
      'value_name':$('[name="Value_Name"]').val()
  };

  $.ajax({
        type: "POST",
        url: base_url+'admin/settings/updateinnerSeting', 
        data: {updateinnerSeting:data, id:id},
        dataType: "json", 
        success: function(data)
        {
          window.location.reload(true);
        }
  });
}

/*-------------Update Setting Js------------*/

//update_outer_setting

function updateOuterSetting(modalId) {

    //$('#settingform')[0].reset();
   //Ajax Load data from ajax
    $.ajax({
        url : base_url+"admin/settings/getsettingmodal/" + modalId,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
          //console.log(data[0].setting_id);
            $('[name="settingouterId"]').val(data[0].setting_id);
            $('[name="settingOuterName"]').val(data[0].setting_name);
            $('#updateoutersetting').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text(data[0].setting_name); // Set title to Bootstrap modal title

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });

  $("#updateoutersetting_"+modalId).modal('show');
}

function updateSeting() {


  if ($('[name="settingOuterName"]').val() == "") 
  {
    $('#msg').html('Please Enter Value Name');
    $('#msg').show();
    return false;
  }

  var id   = $('[name="settingouterId"]').val(); 
  var data = {
      'setting_name':$('[name="settingOuterName"]').val()
  };

  $.ajax({
        type: "POST",
        url: base_url+'admin/settings/updateouterSeting', 
        data: {updateOuterSetting:data, id:id},
        dataType: "json", 
        success: function(data)
        {
          window.location.reload(true);
        }
  });
}

//Delete OUter Setttig
$('.delete_outer_setting').on("click", function(){


  var setting_id= $(this).attr('id');

    alertify.confirm("This is a confirm dialog.",
    function(){
      alertify.success('Ok');
      $.ajax({
         
          type: 'post',
          url: base_url+'delete_outer_setting',
          data: { setting_id: setting_id},
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
});