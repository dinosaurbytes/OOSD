function validate() {
  if (document.getElementById("name").value == "") {
    alert("User name may not be blank");
    return false;
  } else if (document.getElementById("address").value == "") {
    alert("Address may not be blank");
    return false;
  } else if (document.getElementById("city").value == "") {
    alert("City may not be blank");
    return false;
  } else if (document.getElementById("province").value == "") {
    alert("Province may not be blank");
    return false;
  } else if (document.getElementById("postalCode").value == "") {
    alert("Postal Code may not be blank");
    return false;
  } else {
    return confirm("Would you like to submit or cancel?");
  }
}

function clearForm(form){
  var response = confirm("clear form?");
  if (response == true){
    return form.reset();
  }
}

function processString(){
  var inputString1 = document.getElementById("name").value;
  var result1 = inputString1.match(/[^\W\s]/gi);
  if (result1 != null){
    document.getElementById("name").value = "";
    for(var i=0;i<result1.length;i++){
      document.getElementById("name").value += result1[i];
    }
  }
  var inputString2 = document.getElementById("address").value;
  var result2 = inputString2.match(/[^\W\s]/gi);
  if (result1 != null){
    document.getElementById("address").value = "";
    for(var j=0;j<result2.length;j++){
      document.getElementById("address").value += result2[j];
    }
  }
  var inputString3 = document.getElementById("city").value;
  var result3 = inputString1.match(/[^\W\s]/gi);
  if (result3 != null){
    document.getElementById("city").value = "";
    for(var k=0;k<result3.length;k++){
      document.getElementById("city").value += result3[k];
    }
  }
  var inputString4 = document.getElementById("province").value;
  var result4 = inputString1.match(/[^\W\s]/gi);
  if (result4 != null){
    document.getElementById("province").value = "";
    for(var l=0;l<result4.length;l++){
      document.getElementById("province").value += result4[l];
    }
  }
  var inputString5 = document.getElementById("postalCode").value;
  var result5 = inputString1.match(/[^\W\s]/gi);
  if (result5 != null){
    document.getElementById("postalCode").value = "";
    for(var m=0;m<result5.length;m++){
      document.getElementById("postalCode").value += result5[m];
    }
  }
}

function postalCodeCheck() {
  var str = document.getElementById("postalCode").value;
  var regex = /^[A-Z]\d[A-Z] ?\d[A-Z]\d$/;

  if (regex.test(str)){
    document.getElementById("postalCodeHelp").innerHTML = "";
  }
  else{
    document.getElementById("postalCode").focus();
    document.getElementById("postalCodeHelp").innerHTML = "Invalid format. Use (A#A #A#)";
  }
}
//     if ( (value.indexOf("-") !== -1 || value.indexOf(" ") !== -1 ) && value.length() == 7 ) {
//         return true;
//     } else if ( (value.indexOf("-") == -1 || value.indexOf(" ") == -1 ) && value.length() == 6 ) {
//         return true;
//     }
// } else {
//         return false;
// }





  // function() {
  // document.getElementById("customerNameHelp").innerHTML = "Input your name.";});


// function nameFocus(){
//   document.getElementById("customerNameHelp").innerHTML = "Input your name.";
// }
// function nameBlur(){
//   document.getElementById("customerNameHelp").innerHTML = "";
// }
// function addressFocus(){
//   document.getElementById("addressHelp").innerHTML = "Input your address.";
// }
// function addressBlur(){
//   document.getElementById("addressHelp").innerHTML = "";
// }
// function cityFocus(){
//   document.getElementById("cityHelp").innerHTML = "Input your city.";
// }
// function cityBlur(){
//   document.getElementById("cityHelp").innerHTML = "";
// }
// function provinceFocus(){
//   document.getElementById("provinceHelp").innerHTML = "Input your province.";
// }
// function provinceBlur(){
//   document.getElementById("provinceHelp").innerHTML = "";
// }
// function postalCodeFocus(){
//   document.getElementById("postalCodeHelp").innerHTML = "Input your postal code.";
// }
// function postalCodeBlur(){
//   document.getElementById("postalCodeHelp").innerHTML = "";
// }
//
// document.getElementById("myP").addEventListener("click", function() {
//     alert("You clicked the P element!");
// }, false);
