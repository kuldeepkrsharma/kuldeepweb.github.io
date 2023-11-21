

document.addEventListener("DOMContentLoaded", function() {
  // Number of animated boxes
  var numBoxes = 25;

  // Get the container element
  var container = document.querySelector(".box-animation");

  // Generate and append animated boxes
  for (var i = 0; i < numBoxes; i++) {
    var animatedBox = document.createElement("div");
    animatedBox.className = "animated-box";
    container.appendChild(animatedBox);

    // Set random position
    animatedBox.style.left = Math.random() * (container.clientWidth - 5) + "px";
    animatedBox.style.top = Math.random() * (container.clientHeight - 5) + "px";
  }

  // Apply GSAP animation to each animated box
  const animatedBoxes = document.querySelectorAll(".animated-box");
  animatedBoxes.forEach((box) => {
    gsap.to(box, {
      x: Math.random() * 800 - 200, // Random horizontal position between -200 and 200
      y: Math.random() * 800 - 200, // Random vertical position between -200 and 200
      rotation: Math.random() * 360, // Random rotation between 0 and 360 degrees
      duration: 20,
      repeat: -1,
    });
  });
});
  

  





