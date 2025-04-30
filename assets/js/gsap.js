const heroSlides = [
    { bg: "./assets/img/hero-bg/MAIN-COVER-BANNER-1.webp" },
    { bg: "./assets/img/hero-bg/MAIN-COVER-BANNER-2.png" },
    { bg: "./assets/img/hero-bg/MAIN-COVER-BANNER-3.png" },
    { bg: "./assets/img/hero-bg/MAIN-COVER-BANNER-5.png" }
  ];
  
  const heroSection = document.getElementById("hero-section");
  const heroBackground = document.querySelector(".hero-background");
  let currentIndex = 0;
  let slideInterval;
  
  function preloadImages() {
    heroSlides.forEach(({ bg }) => {
      const img = new Image();
      img.src = bg;
    });
  }
  
  function animateBackground() {
    gsap.killTweensOf(heroBackground);
    gsap.fromTo(heroBackground, 
      { scale: 1 }, 
      { scale: 1.3, duration: 6, ease: "none", repeat: -1, yoyo: true }
    );
  }
  
  function updateBackground(index) {
    heroBackground.style.backgroundImage = `url(${heroSlides[index].bg})`;
  }
  
  function changeHeroContent(manualIndex = null) {
    const newIndex = manualIndex !== null ? manualIndex : (currentIndex + 1) % heroSlides.length;
  
    gsap.to(heroBackground, {
      opacity: 0,
      y: 10,
      duration: 0.4,
      onComplete: () => {
        currentIndex = newIndex;
        updateBackground(currentIndex);
  
        gsap.fromTo(heroBackground, 
          { opacity: 0, y: 10 }, 
          { opacity: 1, y: 0, duration: 0.6, ease: "power2.out" }
        );
      }
    });
  }
  
  function startSlider() {
    slideInterval = setInterval(changeHeroContent, 8000);
  }
  
  preloadImages();
  updateBackground(currentIndex);
  animateBackground();
  startSlider();
  