// Event Listner Functiion
function loadEventListener() {

  var needHint = document.getElementById("myForm");

  for (var i = 0; i < needHint.length; i++) {
    if (needHint[i].type == "text") {
      needHint[i].addEventListener("focus", getHint);
      needHint[i].addEventListener("blur", removeHint);
      console.log(needHint[i]);
    }
  }

  function getHint() {
    this.nextElementSibling.innerHTML = "Input your " + this.id;
  }

  function removeHint() {
    if (this.id == "postalCode") {} else {
      this.nextElementSibling.innerHTML = "";
    }
  }
}
