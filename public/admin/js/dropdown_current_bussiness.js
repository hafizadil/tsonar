console.clear();

const DropDown = function() {

  let selectDropdown;
  let dropdownLabel;
  let dropdownContent;
  let dorpdownItems;
  
  function init(parentElem) {
    selectTheDom(parentElem);
    addEventListeners();
  }

  function selectTheDom(parentElem) {    
    selectDropdown = document.querySelector(parentElem);
    dropdownLabel = selectDropdown.querySelector(".dropdown__label");
    dropdownContent = selectDropdown.querySelector(".dropdown__content");
    dorpdownItems = dropdownContent.querySelectorAll("a");
  }

  function addEventListeners() {
    
    selectDropdown.addEventListener("click", toggleSelectDropdown);
    dropdownContent.addEventListener("click", selectItem);
  }

  function toggleSelectDropdown() {
    dropdownContent.classList.toggle("visible");
  }

  function selectItem(e) {
    e.preventDefault(); 
    var tagId = e.target.id;
    console.log(tagId);
    var targetId = tagId.split("_");
    
    if (e.target.classList.contains("dropdown__link")) 
    {
      // full job request modal
      if (targetId[0] == 'clientBusiness') 
      {
        $('#clientBusiness').val(targetId[1]);    
      }
      if (targetId[0] == 'hiringManager') 
      {
        $('#hiringManager').val(targetId[1]);    
      }
      // full request job modal
      if (targetId[0] == 'modalclientBusiness') 
      {
        $('#clientBusiness_modal').val(targetId[1]);    
      }
      if (targetId[0] == 'modalhiringManager') 
      {
        $('#hiringManager_modal').val(targetId[1]);    
      }
      // full request job ends
      // modal///////////////////////////////////
      
      if (targetId[0] == 'modalquickclientBusiness') 
      {
        $('#quickClientBusiness_modal').val(targetId[1]);    
      }
      if (targetId[0] == 'modalquickHiringManager') 
      {
        $('#quickHiringManager_modal').val(targetId[1]);    
      }

      // modal////////////////////////////////

      // quick request job 
      if (targetId[0] == 'quickclientBusiness') 
      {
        $('#quickClientBusiness').val(targetId[1]);    
      }
      if (targetId[0] == 'quickHiringManager') 
      {
        $('#quickHiringManager').val(targetId[1]);    
      }
      dropdownLabel.innerHTML = e.target.innerHTML;
    }
  }

  return {
    start: init
  };
};

const d1 = new DropDown();
d1.start(".dropdown__select1");
const d2 = new DropDown();
d2.start(".dropdown__select2");
const d3 = new DropDown();
d3.start(".dropdown__select3");
const d4 = new DropDown();
d4.start(".dropdown__select4");
const d5 = new DropDown();
d5.start(".dropdown__select5");
const d6 = new DropDown();
d6.start(".dropdown__select6");
const d7 = new DropDown();
d7.start(".dropdown__select7");
const d8 = new DropDown();
d8.start(".dropdown__select8");














