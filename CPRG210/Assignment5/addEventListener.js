window.onload = function (){

// call and remove EventListeners
  document.getElementById("name").addEventListener("focus", nameHelp);
  document.getElementById("name").addEventListener("blur", removenameHelp);
  document.getElementById("address").addEventListener("focus", addressHelp);
  document.getElementById("address").addEventListener("blur", removeAddressHelp);
  document.getElementById("city").addEventListener("focus", cityHelp);
  document.getElementById("city").addEventListener("blur", removeCityHelp);
  document.getElementById("province").addEventListener("focus", provinceHelp);
  document.getElementById("province").addEventListener("blur", removeProvinceHelp);
  document.getElementById("postalCode").addEventListener("focus", postalCodeHelp);
  // document.getElementById("postalCode").addEventListener("blur", removePostalCodeHelp);

//functions for the EventListeners
  function nameHelp(){
    document.getElementById("customerNameHelp").innerHTML = "Input your name.";
  }
  function removenameHelp(){
    document.getElementById("customerNameHelp").innerHTML = "";
  }
  function addressHelp(){
    document.getElementById("addressHelp").innerHTML = "Input your Address.";
  }
  function removeAddressHelp(){
    document.getElementById("addressHelp").innerHTML = "";
  }
  function cityHelp(){
    document.getElementById("cityHelp").innerHTML = "Input your City.";
  }
  function removeCityHelp(){
    document.getElementById("cityHelp").innerHTML = "";
  }
  function provinceHelp(){
    document.getElementById("provinceHelp").innerHTML = "Input your Province.";
  }
  function removeProvinceHelp(){
    document.getElementById("provinceHelp").innerHTML = "";
  }
  function postalCodeHelp(){
    document.getElementById("postalCodeHelp").innerHTML = "Input your Postal Code.";
  }
  function removePostalCodeHelp(){
    document.getElementById("postalCodeHelp").innerHTML = "";
  }
};



// window.onload = function (){
//   document.getElementById("name").addEventListener("click", function(){
//     document.getElementById("customerNameHelp").innerHTML = "Input your name.";
//   });
// };
