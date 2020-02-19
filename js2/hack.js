// JavaScript Document
//<![CDATA[ 
 // array of possible countries in the same order as they appear in the country selection list 
 var districtLists = new Array(4);
 districtLists["empty"] = ["Select District"]; 
 districtLists["SOUTHERN"] = ["Ruhango", "Nyanza", "Huye", "Nyamagabe", "Nyaruguru", "Gisagara", "Kamonyi", "Muhanga"]; 
 districtLists["EASTERN"] = ["Nyagatare", "Bugesera", "Rwamagana", "Ngoma", "Kayonza", "Gatsibo", "Kirehe"]; 
 districtLists["NOTHERN"] = ["Musanze", "Rulindo", "Gicumbi", "Gakenke", "Ngororero"]; 
 districtLists["WESTERN"]= ["Rusizi", "Nyamasheke", "Rubavu", "Karongi", "Rutsiro","Nyabihu","Ngororero","Karongi"]; 
 districtLists["KIGALI"]= ["Gasabo", "Nyarugenge", "Kicukiro"];
 
 //districtLists["OTHERS"]= ["Other City, Specify in Sector Field"];
 
 /* CountryChange() is called from the onchange event of a select element. 
 * param selectObj - the select object which fired the on change event. 
 */ 
 function districtChange(selectObj) { 
 // get the index of the selected option 
 var idx = selectObj.selectedIndex; 
 // get the value of the selected option 
 var which = selectObj.options[idx].value; 
 // use the selected option value to retrieve the list of items from the countryLists array 
 cList = districtLists[which]; 
 // get the country select element via its known id 
 var cSelect = document.getElementById("district"); 
 // remove the current options from the country select 
 var len=cSelect.options.length; 
 while (cSelect.options.length > 0) { 
 cSelect.remove(0); 
 } 
 var newOption; 
 // create new options 
 for (var i=0; i<cList.length; i++) { 
 newOption = document.createElement("option"); 
 newOption.value = cList[i];  // assumes option string and value are the same 
 newOption.text=cList[i]; 
 // add the new option 
 try { 
 cSelect.add(newOption);  // this will fail in DOM browsers but is needed for IE 
 } 
 catch (e) { 
 cSelect.appendChild(newOption); 
 } 
 } 
 } 