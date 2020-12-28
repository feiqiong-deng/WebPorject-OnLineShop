// product information for loading
var p1 = {
  "basic": {
    "name": "Beats Solo3 Wireless Headphones",
    "brand": "Brand: Beats",
    "rating": "4.8 | 12,588 ratings",
    "price": 149.99
  },
  "details": ["Pure Adaptive Noise Cancelling (Pure ANC) actively blocks external noise",
    "Up to 22 hours of battery life enables fully-featured all-day wireless playback",
    "Apple W1 chip for Class 1 Wireless Bluetooth connectivity and battery efficiency",
    "With Fast Fuel, a 10-minute charge gives 3 hours of play when battery is low",
    "Soft over-ear cushions for extended comfort and added noise isolation"
  ],
  "images": ["HP1.png", "HP2.png", "HP3.png", "HP4.png", "HP5.png", "HP6.png"]
};

var p2 = {
  "basic": {
    "name": "Sony Noise Cancelling Headphones",
    "brand": "Brand: Sony",
    "rating": "2.3 | 23,456 ratings",
    "price": 27.99
  },
  "details": ["DIGITAL NOISE CANCELLING: Industry leading ANC lends a personalized, virtually soundproof experience",
    "VOICE ASSISTANT: Alexa enabled for voice access to music, information and more. Activate with a simple touch",
    "QUICK ATTENTION MODE: Cover the right ear cup to turn down your music for instant, easy conversation",
    "SMART LISTENING: Adjusts the ambient sound to your activity to give you the best noise cancellation",
    "TOUCH CONTROLS: Control music tracks and volume, activate your voice assistant and take phone calls"
  ],
  "images": ["SY1.png", "SY2.png", "SY3.png", "SY4.png", "SY5.png", "SY6.png"]
};

var p3 = {
  "basic": {
    "name": "Sennheiser HD Bluetooth Headphones",
    "brand": "Brand: Sennheiser",
    "rating": "3.8 | 1,556 ratings",
    "price": 59.99
  },
  "details": ["Bluetooth 4.0 and aptX technologies to deliver exceptional wireless sound quality",
    "NoiseGard active noise cancellation to reduce ambient noise levels improving the listening experience",
    "Up to 19 hour battery life with Bluetooth and NoiseGard activated and is supplied with connecting cable for battery-free listening",
    "2 year warranty when purchased from an authorized Sennheiser dealer.Frequency response Microphone -100 - 10,000 Hz",
    "Intuitive ear-cup mounted controls for changing tracks and for making calls via the integrated microphone. Dual omnidirectional microphones"
  ],
  "images": ["SH1.png", "SH2.png", "SH3.png", "SH4.png", "SH2.png", "SH3.png"]
};

var p4 = {
  "basic": {
    "name": "Bose QuietComfort Wireless Headphones",
    "brand": "Brand: Bose",
    "rating": "4.6 | 10,234 ratings",
    "price": 199.99
  },
  "details": ["Alexa enabled for voice access to music, information and more",
    "Noise rejecting dual microphone system for clear sound and voice pick up",
    "Balanced audio performance at any volume. Audio cable: 1.2 meter. USB cable: 30.5 centimeter",
    "Three levels of world class noise cancellation for a better listening experience in any environment"
  ],
  "images": ["BS1.png", "BS2.png", "BS3.png", "BS4.png", "BS5.png", "BS2.png"]
};

var p5 = {
  "basic": {
    "name": "JVC Noise Cancelling Wireless Headpones",
    "brand": "Brand: JVC",
    "rating": "1.9 | 1,234 ratings",
    "price": 24.99
  },
  "details": ["COMFORT FIT FOR LONG USE - Soft head and ear pads provide maximum comfort, especially during long listening sessions",
    "LONG LASTING BATTERY - 11 Hours of Wireless Listening Between Charges",
    "FLAT FOLDABLE SWIVEL DESIGN - The swivel design allows the headphones to fold flat and compact, easy to store in your bag when travelling",
    "EASY MUSIC AND PHONE CONTROL FROM ON HEADPHONE CONTROLS - Change Volume, Turn On or Off Bass Boost, Noise Cancel on/off, Skip or Replay Songs, or Answer a Phone Call",
    "DEEP BASE SOUND WITH BASE BOOST BUTTON - Enjoy your music with powerful bass, created by large 30mm drive units and Bass Boost Function"
  ],
  "images": ["J1.png", "J2.png", "J3.png", "J4.png", "J5.png", "J1.png"]
};

// Loading the information
window.onload = function () {
  url_id = window.location.search.split('id=')[1];

  // Loading the basic information of each product
  if (url_id !== '') {
    for (var key in window[url_id].basic) {
      document.getElementById(key).innerHTML = window[url_id].basic[key];
    }

    // Loading the details of each product
    var i, txt = "";
    for (i of window[url_id].details) {
      txt += "  " + "* " + i + "<br>";
    }
    document.getElementById("details").innerHTML = txt;

    // Loading the images of each product
    var j, productImage, productSmallImage;
    productImage = document.querySelectorAll(".mySlides img");
    productSmallImage = document.querySelectorAll(".column img");
    for (j = 0; j < productImage.length; j++) {
      productImage[j].src = window[url_id].images[j];
      productSmallImage[j].src = window[url_id].images[j];
    }
  }
}

// Updating the total price as the quantity changes
function totoalPrice() {
  var price = document.getElementById("price").innerHTML;
  var number = document.getElementById("number").value;
  var totoalPrice = parseFloat(price) * number;
  if (!isNaN(totoalPrice))
    document.getElementById("totalPrice").value = totoalPrice.toFixed(2);
}

// The product image slide show.
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) { slideIndex = 1 }
  if (n < 1) { slideIndex = slides.length }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " active";
  captionText.innerHTML = dots[slideIndex - 1].alt;
}