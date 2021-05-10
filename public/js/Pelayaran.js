const left = document.querySelector(".left");
const right = document.querySelector(".right");
const slider = document.querySelector(".slider");
const pelayaran = document.querySelector(".pelayaran-info");
const indicatorParent = document.querySelector(".control ul");
const indicators = document.querySelectorAll(".control li");
index = 0;

indicators.forEach((indicator, i) => {
  indicator.addEventListener("click", () => {
    document.querySelector(".control .selected").classList.remove("selected");
    indicator.classList.add("selected");
    slider.style.transform = "translateX(" + i * -25 + "%)";
    index = i;
  });
});

left.addEventListener("click", function () {
  index = index > 0 ? index - 1 : 0;
  document.querySelector(".control .selected").classList.remove("selected");
  indicatorParent.children[index].classList.add("selected");
  slider.style.transform = "translateX(" + index * -25 + "%)";
});

right.addEventListener("click", function () {
  index = index < 4 - 1 ? index + 1 : 3;
  document.querySelector(".control .selected").classList.remove("selected");
  indicatorParent.children[index].classList.add("selected");
  slider.style.transform = "translateX(" + index * -25 + "%)";
});

// var reset = document.querySelector(".reset");
// var text3 = document.querySelector(".inner");

// reset.addEventListener("click", function(){
//     text3.style.display = "none";
// });

const loading = document.getElementById("loader");

window.addEventListener("load", function () {
  setTimeout(function () {
    loading.style.display = "none";
  }, 500);
});

function scrollTop(target, durasi) {
  const infoJelajahi = document.querySelector(target);
  let targetGetPosition = infoJelajahi.getBoundingClientRect().top;
  let startPosition = window.pageYOffset;
  let distance = targetGetPosition - startPosition;
  let startTime = null;

  function animasi(waktuSekarang) {
    if (startTime === null) startTime = waktuSekarang;
    let timeElapsed = waktuSekarang - startTime;
    let run = ease(timeElapsed, startPosition, distance, durasi);
    window.scrollTo(0, run);
    if (timeElapsed < durasi) requestAnimationFrame(animasi);
  }

  function ease(t, b, c, d) {
    return c * Math.sin((t / d) * (Math.PI / 2)) + b;
  }

  requestAnimationFrame(animasi);
}

const secondBtn = document.querySelector(".edit-card-circle");

secondBtn.addEventListener("click", () => {
  scrollTop(".pelayaran-section-1", 3000);
});

const leftSlide = document.querySelector(".pelayaran-conten-left");
const leftSlide2 = document.querySelector(".pelayaran-conten-left-2");
const rightSlide = document.querySelector(".pelayaran-conten-right");
const rightSlide2 = document.querySelector(".pelayaran-conten-right-2");
const btnLeft = document.querySelector(".btn-slide-left");
const btnRight = document.querySelector(".btn-slide-right");

btnRight.addEventListener("click", function () {
  leftSlide.style.left = "100%";
  rightSlide.style.right = "100%";
  leftSlide2.style.right = "0";
  rightSlide2.style.left = "0";
  btnLeft.style.display = "initial";
  btnRight.style.display = "none";
  btnLeft.addEventListener("click", function () {
    leftSlide.style.left = "0";
    rightSlide.style.right = "0";
    leftSlide2.style.right = "150%";
    rightSlide2.style.left = "150%";
    btnLeft.style.display = "none";
    btnRight.style.display = "initial";
  });
});
