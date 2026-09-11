window.onscroll = function () {
    myFunction();
};
var header = document.getElementById("header-top"),
    sticky = header.offsetTop;
function myFunction() {
    window.pageYOffset > sticky + 10 ? header.classList.add("sticky") : header.classList.remove("sticky");
}
function openModal() {
    document.getElementById("myModal").style.display = "block";
}
function closeModal() {
    document.getElementById("myModal").style.display = "none";
}
window.addEventListener("scroll", myFunction),
//         $(document).ready(function () {
//   $(".banner-slider").slick({
//     arrows: false,
//     infinite: true,
//     slidesToShow: 1,
//     slidesToScroll: 1,
//     dots: true,
//     autoplay: true,
//     autoplaySpeed: 22000,
//     speed: 500,
//     cssEase: "linear",
//      pauseOnHover: false,
//     pauseOnFocus: false,
//     pauseOnDotsHover: false,
//     responsive: [
//       {
//         breakpoint: 768,
//         settings: {
//           arrows: false
//         }
//       }
//     ]
//   });
// });

$(document).ready(function () {
  var $slider = $(".banner-slider");

  // Initialize slick slider
  $slider.slick({
    arrows: false,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    autoplay: true,
    autoplaySpeed: 5000, // normal slides 5 sec
    speed: 500,
    cssEase: "linear",
    pauseOnHover: false,
    pauseOnFocus: false,
    pauseOnDotsHover: false,
    responsive: [
      {
        breakpoint: 768,
        settings: { arrows: false }
      }
    ]
  });

  // Function to manage video slide
  function handleVideo($slide) {
    const video = $slide.find(".heroVideo").get(0);

    if (!video) {
      // No video → normal autoplay
      $slider.slick("slickPlay");
      return;
    }

    // Pause slick autoplay while video plays
    $slider.slick("slickPause");
    video.currentTime = 0;
    video.play();

    let checked = false;

    // Check periodically if video reached end (even in loop)
    const checkProgress = setInterval(function () {
      if (video.duration && video.currentTime / video.duration >= 0.98 && !checked) {
        checked = true;
        clearInterval(checkProgress);

        setTimeout(function () {
          $slider.slick("slickNext");
          $slider.slick("slickPlay");
        }, 0); // wait 1.5 sec after video completes
      }
    }, 70); // check every half-second
  }

  // On slide change
  $slider.on("afterChange", function (event, slick, currentSlide) {
    const $currentSlide = $(slick.$slides[currentSlide]);
    handleVideo($currentSlide);
  });

  // Initial load
  const $firstSlide = $slider.find(".slick-current");
  handleVideo($firstSlide);
});
    $(document).ready(function () {
        // $(".banner-slider").slick({ 
        //     arrows: !1, 
        //     infinite: !0, 
        //     slidesToShow: 1, 
        //     slidesToScroll: 1,
        //     dots: !0, 
        //     autoplay: true, 
        //     speed: 500, 
        //     autoplaySpeed: 9000, 
        //     cssEase: "linear", 
        //     responsive: [{ 
        //         breakpoint: 768, 
        //         settings: { arrows: !1 } }] }),

            $(".trust-slider-for").slick({
                centerMode: !0,
                centerPadding: "280px",
                slidesToScroll: 3,
                slidesToShow: 3,
                dots: !1,
                arrows: !1,
                autoplay: !0,
                autoplaySpeed: 2e3,
                asNavFor: ".trust-slider-nav",
                responsive: [
                    { breakpoint: 1440, settings: { arrows: !1, centerMode: !0, centerPadding: "80px", slidesToScroll: 3, slidesToShow: 3 } },
                    { breakpoint: 768, settings: { arrows: !1, centerMode: !0, centerPadding: "40px", slidesToScroll: 3, slidesToShow: 1 } },
                    { breakpoint: 1024, settings: { arrows: !1, centerMode: !0, centerPadding: "40px", slidesToScroll: 3, slidesToShow: 1 } },
                    { breakpoint: 480, settings: { arrows: !1, centerMode: !0, centerPadding: "40px", slidesToScroll: 3, slidesToShow: 1 } },
                    { breakpoint: 425, settings: { arrows: !1, centerMode: !0, centerPadding: "10px", slidesToScroll: 3, slidesToShow: 1 } },
                ],
            }),
            $(".trust-slider-nav").slick({
                slidesToShow: 1,
                arrows: !1,
                asNavFor: ".trust-slider-for",
                dots: !0,
                fade: !0,
                focusOnSelect: !0,
                centerMode: !0,
                responsive: [
                    { breakpoint: 768, settings: { arrows: !1, centerMode: !0, centerPadding: "40px", slidesToShow: 1 } },
                    { breakpoint: 480, settings: { arrows: !1, centerMode: !0, centerPadding: "40px", slidesToShow: 1 } },
                    { breakpoint: 425, settings: { arrows: !1, centerMode: !0, centerPadding: "10px", slidesToShow: 1 } },
                ],
            }),
            $(".brand-slider").slick({
                centerMode: !1,
                slidesToShow: 5,
                dots: !0,
                arrows: !1,
                autoplay: !0,
                autoplaySpeed: 2e3,
                responsive: [
                    { breakpoint: 1440, settings: { arrows: !1, centerMode: !0, centerPadding: "40px", slidesToShow: 3 } },
                    { breakpoint: 768, settings: { arrows: !1, centerMode: !0, centerPadding: "40px", slidesToShow: 2 } },
                    { breakpoint: 480, settings: { arrows: !1, centerMode: !0, centerPadding: "40px", slidesToShow: 1 } },
                ],
            }),
            $(".video-slider").slick({
                slidesToShow: 3,
                dots: !0,
                arrows: !1,
                autoplay: !0,
                autoplaySpeed: 2e3,
                useTransform: !1,
                responsive: [
                    { breakpoint: 1440, settings: { dots: !0, arrows: !1, centerMode: !0, centerPadding: "40px", slidesToShow: 3 } },
                    { breakpoint: 768, settings: { arrows: !1, centerMode: !0, centerPadding: "40px", slidesToShow: 2 } },
                    { breakpoint: 481, settings: { arrows: !1, centerMode: !0, centerPadding: "40px", slidesToShow: 1 } },
                ],
            }),
            $(".event-slider").slick({
                centerMode: !1,
                slidesToShow: 1,
                dots: !1,
                arrows: !1,
                autoplay: !0,
                autoplaySpeed: 2e3,
                responsive: [
                    { breakpoint: 768, settings: { slidesToShow: 2 } },
                    { breakpoint: 480, settings: { slidesToShow: 1 } },
                ],
            }),
            $(".product-detail").slick({ slidesToShow: 1, dots: !1, arrows: !0 }),
            $(document).ready(function () {
                $(".manufacturing").slick({ dots: !1, infinite: !0, speed: 500, slidesToShow: 1, slidesToScroll: 1, autoplay: !0, autoplaySpeed: 2e3 });
            });
    }),
    $(document).ready(function () {
        $(".cust_slid").slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            infinite: true,
            dots: !0,
            autoplay: true,
            arrows: !1,
            responsive: [
                { breakpoint: 1024, settings: { slidesToShow: 3, slidesToScroll: 3 } },
                { breakpoint: 768, settings: { slidesToShow: 2, slidesToScroll: 2 } },
                { breakpoint: 480, settings: { slidesToShow: 1, slidesToScroll: 1, dots: !1 } },
            ],
        });
    });
var slideIndex = 1;
function plusSlides(e) {
    showSlides((slideIndex += e));
}
function currentSlide(e) {
    showSlides((slideIndex = e));
}
function showSlides(e) {
    var s,
        o = document.getElementsByClassName("mySlides"),
        t = document.getElementsByClassName("demo"),
        n = document.getElementById("caption");
    for (e > o.length && (slideIndex = 1), e < 1 && (slideIndex = o.length), s = 0; s < o.length; s++) o[s].style.display = "none";
    for (s = 0; s < t.length; s++) t[s].className = t[s].className.replace(" active", "");
    (o[slideIndex - 1].style.display = "block"), (t[slideIndex - 1].className += " active"), (n.innerHTML = t[slideIndex - 1].alt);
}
showSlides(slideIndex);
var modal = document.getElementById("myModal"),
    img = document.getElementById("myImg"),
    modalImg = document.getElementById("img01"),
    captionText = document.getElementById("caption");
img.onclick = function () {
    (modal.style.display = "block"), (modalImg.src = this.src), (captionText.innerHTML = this.alt);
};
var span = document.getElementsByClassName("close")[0];
span.onclick = function () {
    modal.style.display = "none";
};
let mybutton = document.getElementById("btn-back-to-top");
function scrollFunction() {
    document.body.scrollTop > 20 || document.documentElement.scrollTop > 20 ? (mybutton.style.display = "block") : (mybutton.style.display = "none");
}
function backToTop() {
    (document.body.scrollTop = 0), (document.documentElement.scrollTop = 0);
}
(window.onscroll = function () {
    scrollFunction();
}),
    mybutton.addEventListener("click", backToTop);
