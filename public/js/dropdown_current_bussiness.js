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
    if (e.target.classList.contains("dropdown__link")) {
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














