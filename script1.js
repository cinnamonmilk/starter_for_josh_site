/* gsap.from('.navbar-brand', {opacity:0, duration:2.5, y:-20, ease: "bounce.out"})
gsap.from('.tag', {opacity:0, duration:2, x:-50, delay:1.4}); */
gsap.registerPlugin(ScrollTrigger);

gsap.timeline()
.from('.navbar', {opacity:0, duration:0.5})
.from('.navbar-brand', {opacity:0, duration:1, y:-30, ease: "bounce.out"})
.from('.tag', {opacity:0, duration:1.5, x:-50,});

const tl = gsap.timeline({
    scrollTrigger: {
     trigger: '.aboutbg',
     markers:true,
     start:"bottom 90%", 
     end:"top 30%",
     scrub:3, 
          }
  
});

tl.from('.about-text',{
 duration:1,
      y:250,
 opacity:0,
}).from('.blocker',{
 duration:1,
 x:250,
opacity:0,
});