gsap.registerPlugin(ScrollTrigger);

// --------------- Intro animation ---------------




// window.addEventListener('DOMContentLoaded', ()=> {
//   if (!sessionStorage.getItem("introLoaded")) {
//     $(".introAnimation").removeClass("hide");
//     $(".marquee").removeClass("hide");
//     sessionStorage.setItem("introLoaded", "true");
//     $(document).ready(function() {
//       gsap.to('.introAnimation', {
//         top: '-100vh',
//         delay: 5,
//         duration: 2,
//         ease: Expo.easeOut
//       })
//     })
//   }
// })



window.addEventListener('DOMContentLoaded', ()=> {
  if (!sessionStorage.getItem("introLoaded")) {
    document.getElementByClassName("introAnimation").classList.remove("hide");
    document.getElementByClassName("marquee").classList.remove("hide");
    sessionStorage.setItem("introLoaded", "true");
    document.ready(function() {
      gsap.to('.introAnimation', {
        top: '-100vh',
        delay: 5,
        duration: 2,
        ease: Expo.easeOut
      })
    })
  }
})


gsap.to('.marquee.hide', {
  top: '0px',
  // opacity: 0,
  duration: 2,
  delay: 5.2,
  ease: Expo.easeOut
})

// --------------- Navigation mobile ---------------


const menu_btn = document.querySelector('.hamburger');
const mobile_menu = document.querySelector('.mobile-nav');

menu_btn.addEventListener('click', function () {
  menu_btn.classList.toggle('is-active');
  mobile_menu.classList.toggle('is-active');
});


// --------------- Navigation scroll ---------------

window.onload = function () {
	window.addEventListener('scroll', function (e) {
		if (window.pageYOffset > 100) {
			document.querySelector("header").classList.add('is-scrolling');
		} else {
			document.querySelector("header").classList.remove('is-scrolling');
		}
	});
}

// --------------- Second nav ---------------


const nav = document.getElementById("nav");


for(const link of nav.getElementsByTagName("a")) {
    link.onmousemove = e => {
        const rect = link.getBoundingClientRect(),
              img = link.querySelector("img");

    img.style.left = `${e.clientX - rect.left}px`;
    img.style.top = `${e.clientY - rect.top}px`;
    }
}

// --------------- Video scale on scroll ---------------

let bgImage = document.querySelector(".video-container");
      gsap.fromTo(
        bgImage,
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


// --------------- Video scale on scroll ---------------



      gsap.from(".project1", {
        y: 500,
        // opacity: 0,
        scrollTrigger: {
            trigger: ".projectContainer",
            start: "top 80%",
            end: "top 40%",
            scrub: 1.5,
            // markers: true,
        }
      })
       
    gsap.from(".project2", {
        y: 500,
        // opacity: 0,
        scrollTrigger: {
            trigger: ".projectContainer",
            start: "top 70%",
            end: "top 40%",
            scrub: 1.5,
        }
      })
      
    gsap.from(".project3", {
        y: 500,
        // opacity: 0,
        scrollTrigger: {
            trigger: ".projectContainer",
            start: "top 60%",
            end: "top 40%",
            scrub: 1.5,
        }
      })



    //   $("header .button").click(function() {
    //     $('html,body').animate({
    //         scrollTop: $(".footer").offset().top},
    //         'slow');
    // });

  //   document.querySelector("header .button").click(function() {
  //     document.querySelector('html,body').animate({
  //         scrollTop: document.querySelector(".footer").offset().top},
  //         'slow');
  // });


    var splitText = new SplitType('#split-text')

    gsap.to('.footer h1 .char', {
      y: 0,
      // type: "lines",
      stagger: .02,
      delay: 0,
      duration: .1,
      scrollTrigger: {
        trigger: ".footer",
        start: "top 30%"
      }
    })

  
    
const container = document.querySelector(".scrollContainer");
const sections = gsap.utils.toArray(".scrollContainer section");
const texts = gsap.utils.toArray(".anim");
const mask = document.querySelector(".mask");

let scrollTween = gsap.to(sections, {
  xPercent: -100 * (sections.length - 1),
  ease: "none",
  scrollTrigger: {
    trigger: ".scrollContainer",
    pin: true,
    scrub: 1,
    end: "+=3000",
    //snap: 1 / (sections.length - 1),
    // markers: true,
  }
});

console.log(1 / (sections.length - 1))

//Progress bar animation

gsap.to(mask, {
  width: "100%",
  scrollTrigger: {
    trigger: ".wrapper",
    start: "top left",
    scrub: 1
  }
});

// whizz around the sections
sections.forEach((section) => {
  // grab the scoped text
  let text = section.querySelectorAll(".anim");
  
  // bump out if there's no items to animate
  if(text.length === 0)  return 
  
  // do a little stagger
  gsap.from(text, {
    y: 0,
    opacity: 0,
    duration: 2,
    ease: "power3",
    stagger: 0.1,
    scrollTrigger: {
      trigger: section,
      containerAnimation: scrollTween,
      start: "left center",
      // markers: true
    }
  });
});

    