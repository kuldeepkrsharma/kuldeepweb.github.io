const animatedBoxes = document.querySelectorAll(".animated-box");
  animatedBoxes.forEach((box) => {
    gsap.to(box, {
      x: Math.random() * 4000 - 200, // Random horizontal position between -200 and 200
      y: Math.random() * 4000 - 200, // Random vertical position between -200 and 200
      rotation: Math.random() * 360, // Random rotation between 0 and 360 degrees
      duration: 100,
      repeat: -1,
    });
  });

  

  





