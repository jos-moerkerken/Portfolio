gsap.registerPlugin(ScrollTrigger);

gsap.from(".project.animate-1", {
    y: 300,
    // opacity: 0,
    scrollTrigger: {
        trigger: ".projectContainer",
        start: "top 80%",
        end: "top 40%",
        scrub: 1.5,
        // markers: true,
    }
  })
   
gsap.from(".project.animate-2", {
    y: 300,
    // opacity: 0,
    scrollTrigger: {
        trigger: ".projectContainer",
        start: "top 70%",
        end: "top 40%",
        scrub: 1.5,
    }
  })



  gsap.to(".parallax", {
    yPercent: -25,
    ease: "none",
    scrollTrigger: {
      trigger: ".parallax",
      // start: "top bottom", // the default values
      // end: "bottom top",
      scrub: true
    }, 
  });


  $("header .button").click(function() {
    $('html,body').animate({
        scrollTop: $(".footer").offset().top},
        'slow');
});







const details = gsap.utils.toArray(".desktopContentSection:not(:first-child)")
const photos = gsap.utils.toArray(".desktopPhoto:not(:first-child)")


gsap.set(photos, {yPercent:101})

const allPhotos = gsap.utils.toArray(".desktopPhoto")


// create
let mm = gsap.matchMedia();

// add a media query. When it matches, the associated function will run
mm.add("(min-width: 600px)", () => {

  // this setup code only runs when viewport is at least 600px wide
  console.log("desktop")
	
  ScrollTrigger.create({
	trigger:".gallery",
	start:"top top",
	end:"bottom bottom",
	pin:".right"
})

//create scrolltrigger for each details section
//trigger photo animation when headline of each details section 
//reaches 80% of window height
details.forEach((detail, index)=> {

	let headline = detail.querySelector("h3")
	let animation = gsap.timeline()
	   .to(photos[index], {yPercent:0})
	   .set(allPhotos[index], {autoAlpha:0})
	ScrollTrigger.create({
		trigger:headline,
		start:"top 80%",
		end:"top 50%",
		animation:animation,
		scrub:true,
		markers:false
	})
})
	
	
  
  return () => { // optional
    // custom cleanup code here (runs when it STOPS matching)
	  console.log("mobile")
  };
});


let bgImage2 = document.querySelector(".video-container");
      gsap.fromTo(
        bgImage2,
        {
          clipPath: "inset(30% 30% 30% 30%)",
          // transform: "scale(.9)"
        },
        {
          clipPath: "inset(0% 0% 0% 0%)",
          // transform: "scale(1)",
          ease: "none",

          scrollTrigger: {
            trigger: ".video-section",
            scrub: 1.2,
            start: "top 50%",
            end: "top 20%",
          },
        }
      );




