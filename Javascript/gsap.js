gsap.to(".nav", { stagger: 0.5, opacity: 1 }, "+1.5");
gsap.to(".img", { stagger: 0.5, opacity: 1 });
gsap.to(".brand-text", { opacity: 1 }, ">");

let images = gsap.utils.toArray(".section-3-sub");

let t1 = gsap.timeline({
  scrollTrigger: {
    trigger: ".about-cols",
    start: "top center",
    duration: 2,
  },
});

let t2 = gsap.timeline({
  scrollTrigger: {
    trigger: ".section-3-text",
    start: "center bottom",
  },
});

let t3 = gsap.timeline({
  scrollTrigger: {
    trigger: ".socials",
    start: "bottom top",
  },
});

let t4 = gsap.timeline({
  scrollTrigger: {
    trigger: ".contact-form",
    start: "center bottom",
  },
});

t1.fromTo(
  ".about-col",
  { opacity: 0 },
  (".about-col", { stagger: 0.5, opacity: 1 })
);
t2.fromTo(
  ".section-3-text",
  { transform: "translateY(100)", backgroundColor: "whitesmoke" },
  (".section-3-text",
  {
    color: "white",
    transform: "translateY(0)",
    backgroundImage:
      "url('https://thumbs.gfycat.com/LatePositiveHerculesbeetle-size_restricted.gif')",
  })
);
t2.to(".section-3-text > *", {
  opacity: 1,
  duration: 1.4,
  ease: "power1.out",
  y: 0,
});

ScrollTrigger.matchMedia({
  "(min-width: 1200px)": function () {
    gsap.to(images, {
      xPercent: -100 * (images.length - 1),
      ease: "none",
      scrollTrigger: {
        trigger: ".section-3-container",
        pin: true,
        scrub: 1,
        snap: 1 / (images.length - 1),
        end: "520%",
      },
    });

    let t4 = gsap.timeline({
      scrollTrigger: {
        trigger: ".contact-form",
        start: "bottom bottom",
      },
    });

    t4.to(".contact-form", {
      opacity: 1,
      duration: 1,
      ease: "power1.out",
      y: 0,
    });
  },
});

t3.fromTo(
  ".socials-img",
  { opacity: 0, y: 300 },
  { stagger: 0.3, opacity: 1, y: 0 }
);
t4.to(".contact-form", { opacity: 1, duration: 1, ease: "power1.out", y: 0 });
