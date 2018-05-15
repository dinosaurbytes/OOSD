function validate() {
  if (document.getElementById("name").value == "") {
    alert("User name may not be blank");
  } else if (document.getElementById("address").value == "") {
    alert("Address may not be blank");
  } else if (document.getElementById("city").value == "") {
    alert("City may not be blank");
  } else if (document.getElementById("province").value == "") {
    alert("Province may not be blank");
  } else if (document.getElementById("postalCode").value == "") {
    alert("Postal Code may not be blank");
  } else {
    confirm("Would you like to submit or cancel?");
  }
}

function clearForm(form){
  var response = confirm("clear form?");
  if (response == true){
    form.reset();
  }
}
