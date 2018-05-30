function loadImageTable() {

// Declare the object arrays for images and text description
  imgArray = [];
  imgArray[0] = new Image();
  imgArray[0].src = "images/destinationPhoto1.jpg";
  imgArray[1] = new Image();
  imgArray[1].src = "images/destinationPhoto2.jpg";
  imgArray[2] = new Image();
  imgArray[2].src = "images/destinationPhoto3.jpg";
  imgArray[3] = new Image();
  imgArray[3].src = "images/destinationPhoto4.jpg";

  textArray = [];
  textArray[0] = new Text();
  textArray[0] = "Hawaii: An isolated volcanic archipelago in the Central Pacific. Its islands are renowned for their rugged landscapes of cliffs, waterfalls, tropical foliage and beaches with gold, red, black and even green sands.";
  textArray[1] = new Text();
  textArray[1] = "Japan:  Island nation in the Pacific Ocean with dense cities, imperial palaces, mountainous national parks and thousands of shrines and temples.";
  textArray[2] = new Text();
  textArray[2] = "Amsterdam: Known for its artistic heritage, elaborate canal system and narrow houses with gabled facades, legacies of the city's 17th-century Golden Age.";
  textArray[3] = new Text();
  textArray[3] = "London: 21st-century city with history stretching back to Roman times. At its centre stand the imposing Houses of Parliament, the iconic big ben clock tower and Westminster Abbey, site of British monarch coronations.";

  urlArray = [];
  urlArray[0] = new Text();
  urlArray[0] = "https://www.tripadvisor.ca/Tourism-g28932-Hawaii-Vacations.html";
  urlArray[1] = new Text();
  urlArray[1] = "https://www.tripadvisor.ca/Tourism-g294232-Japan-Vacations.html";
  urlArray[2] = new Text();
  urlArray[2] = "https://www.tripadvisor.ca/Tourism-g188590-Amsterdam_North_Holland_Province-Vacations.html";
  urlArray[3] = new Text();
  urlArray[3] = "https://www.tripadvisor.ca/Tourism-g186338-London_England-Vacations.html";

// On load, display the first image and text descrition at index 0
  document.getElementById("urlAnchor").innerHTML = textArray[0];

  document.getElementById("travelPic").src = imgArray[0].src;
}

// Function to Loop though images and descriptions
var index =1;

function loadChange(){
var image = document.getElementById("travelPic");
  if(index%textArray.length != 0){
  document.getElementById("urlAnchor").innerHTML = textArray[index];
  document.getElementById("travelPic").src = imgArray[index].src;
  index++;
  }
  else{
  document.getElementById("urlAnchor").innerHTML = textArray[0];
  document.getElementById("travelPic").src = imgArray[0].src;
  index = 1;
  }
}
function openUrl() {
  var url = urlArray[index-1];
    	myWindow = window.open(url ,'_blank', 'location=yes,height=570,width=520,scrollbars=yes,status=yes');
      setTimeout(function () { myWindow.close();}, 5000);

}
