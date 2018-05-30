// Clears the text inputs of the register page
function clearForm(form){
  var response = confirm("clear form?");
  if (response == true){
    return form.reset();
  }
}

// Regex for postal code input
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

//validate form with submit button
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
