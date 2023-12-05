gsap.registerPlugin(ScrollTrigger);

// --------------- Intro animation ---------------



// window.addEventListener('DOMContentLoaded', ()=> {
//   $(document).ready(function() {
//     gsap.to('.introAnimation', {
//       top: '-100vh',
//       delay: 5,
//       duration: 2,
//       ease: Expo.easeOut
//     })
//   })
//   })

window.addEventListener('DOMContentLoaded', ()=> {
  if (!sessionStorage.getItem("introLoaded")) {
    $(".introAnimation").removeClass("hide");
    $(".marquee").removeClass("hide");
    sessionStorage.setItem("introLoaded", "true");
    $(document).ready(function() {
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

	const menu_btn = document.querySelector('.hamburger');
	const mobile_menu = document.querySelector('.mobile-nav');

	menu_btn.addEventListener('click', function () {
		menu_btn.classList.toggle('is-active');
		mobile_menu.classList.toggle('is-active');
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



      $("header .button").click(function() {
        $('html,body').animate({
            scrollTop: $(".footer").offset().top},
            'slow');
    });


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

    

    const races = document.querySelector(".scrollQuote .content");
    console.log(races.offsetWidth)
    
    function getScrollAmount() {
      let racesWidth = races.scrollWidth;
      return -(racesWidth - window.innerWidth);
    }
    
    const tween = gsap.to(races, {
      x: getScrollAmount,
      duration: 3,
      ease: "none",
    });
    
    
    ScrollTrigger.create({
      trigger:".scrollQuote",
      start:"top",
      end: () => `+=${getScrollAmount() * -1}`,
      pin:true,
      animation:tween,
      scrub:1,
      invalidateOnRefresh:true,
  
    })
    
    