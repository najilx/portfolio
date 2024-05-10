document.addEventListener("DOMContentLoaded", function() {
    const changingText = document.getElementById("changingText");
    const texts = ["student", "developer", "designer"]; // Add more texts as needed
    let index = 0;
  
    setInterval(function() {
      changingText.textContent = "I am a " + texts[index];
      index = (index + 1) % texts.length;
    }, 1500); // Change text every 2 seconds (2000 milliseconds)
  });
  