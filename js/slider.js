// JavaScript for Slider
document.addEventListener("DOMContentLoaded", function () {
    const slider = document.getElementById("slider");
    const images = slider.querySelectorAll("img");
    let currentIndex = 0;
  
    function showNextImage() {
      images[currentIndex].classList.remove("active");
      images[currentIndex].classList.add("previous");
  
      currentIndex = (currentIndex + 1) % images.length;
  
      images[currentIndex].classList.remove("previous");
      images[currentIndex].classList.add("active");
    }
  
    // Initialize the first image
    images[currentIndex].classList.add("active");
  
    // Change the image every 3 seconds
    setInterval(showNextImage, 3000);
  });
  