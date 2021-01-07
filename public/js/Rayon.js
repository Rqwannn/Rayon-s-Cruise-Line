const conten = document.querySelector(".menu-tujuan-first");
const conten2 = document.querySelector(".menu-tujuan-second");
const conten3 = document.querySelector(".menu-tujuan-third");
const btn11 = document.querySelector(".btn-1");
const btn22 = document.querySelector(".btn-2");
const btn33 = document.querySelector(".btn-3");

btn11.addEventListener("click", function () {
  conten.style.display = "block";
  conten2.style.display = "none";
  conten3.style.display = "none";
  btn11.style.transform = "translate(25px, 1px) rotate(180deg)";
  btn22.style.transform = "translate(25px, 1px) rotate(0)";
  btn33.style.transform = "translate(25px, 1px) rotate(0)";
});

btn22.addEventListener("click", function () {
  conten.style.display = "none";
  conten2.style.display = "block";
  conten3.style.display = "none";
  btn11.style.transform = "translate(25px, 1px) rotate(0)";
  btn22.style.transform = "translate(25px, 1px) rotate(180deg)";
  btn33.style.transform = "translate(25px, 1px) rotate(0)";
});

btn33.addEventListener("click", function () {
  conten.style.display = "none";
  conten2.style.display = "none";
  conten3.style.display = "block";
  btn11.style.transform = "translate(25px, 1px) rotate(0)";
  btn22.style.transform = "translate(25px, 1px) rotate(0)";
  btn33.style.transform = "translate(25px, 1px) rotate(180deg)";
});

const loading = document.getElementById("loader");

window.addEventListener("load", function () {
  setTimeout(function () {
    loading.style.display = "none";
  }, 500);
});

const smallImg = document.querySelectorAll(".small-img");
const container = document.querySelector(".card-slide");
const largeImg = document.querySelector("#slides");

container.addEventListener("click", function (element) {
  if (element.target.className == "small-img") {
    largeImg.src = element.target.src;
    largeImg.classList.add("animasi");
    setTimeout(function () {
      largeImg.classList.remove("animasi");
    }, 500);
  }
});

// window.addEventListener("scroll", function (){
//     var navbar = document.querySelector(".side-bar");
//     navbar.classList.toggle("sticky", window.scrollY > 0);
// });

const tanggat = new Date("september 23, 2020 18:30:00").getTime();

const hitungMundur = setInterval(function () {
  const sekarang = new Date().getTime();
  const selisih = tanggat - sekarang;
  const hari = Math.floor(selisih / (1000 * 60 * 60 * 24));
  const jam = Math.floor((selisih % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  const menit = Math.floor((selisih % (1000 * 60 * 60)) / (1000 * 60));
  const detik = Math.floor((selisih % (1000 * 60)) / 1000);
  const teks = document.getElementById("text-penawaran");
  teks.innerHTML =
    "Batas Penawaran Tinggal <br>" +
    hari +
    " " +
    ":" +
    " " +
    jam +
    " " +
    ":" +
    " " +
    menit +
    " " +
    ":" +
    " " +
    detik;

  if (selisih <= 0) {
    clearInterval(hitungMundur);
    teks.innerHTML = "Penawaran Sudah Habis !";
  }
}, 1000);

var content = document.querySelector("#home-header-info");
var content2 = document.querySelector("#home-header-info-2");
var btnColor = document.querySelector("#header-color");
var btnColor2 = document.querySelector("#header-color2");
var pesiar = document.querySelector("#header-pesiar");
var feri = document.querySelector("#header-feri");
var text = document.getElementById("text-js");
var submit = document.getElementById("submit");

content.addEventListener("click", function () {
  content2.style.background = "#1877f2";
  btnColor2.style.color = "#fff";
  content.style.background = "#fff";
  btnColor.style.color = "#000";
  pesiar.style.display = "none";
  feri.style.display = "block";
  text.style.display = "none";
});

content2.addEventListener("click", function () {
  content2.style.background = "#fff";
  btnColor2.style.color = "#000";
  content.style.background = "#1877f2";
  btnColor.style.color = "#fff";
  pesiar.style.display = "block";
  feri.style.display = "none";
  text.style.display = "none";
});

const submitValidasi = document.getElementById("submit");

submitValidasi.addEventListener("click", function(e){
  var tiket = document.getElementById("tiket");
  var berangkat = document.getElementById("berangkat");
  var tujuan = document.getElementById("tujuan");
  var tanggal = document.getElementById("tanggal");
  var text = document.getElementById("text-js");
  const section = document.querySelector(".section");
  const sectionCenter = document.querySelector(".section-center");
  const sectionSatu = document.querySelector(".section-1");
  const sectionDua = document.querySelector(".section-2");
  const sectionTiga = document.querySelector(".section-3");
  const sectionEmpat = document.querySelector(".section-4");
  const sectionTiket = document.querySelector(".section-info-tiket");
  const scrollDown = document.querySelector(".scroll-info-tiket");
  
  if (tiket.value.length > 0 && berangkat.value.length > 1 && tujuan.value.length > 1 && tanggal.value.length > 1) {
      e.preventDefault();
        text.innerHTML = "Pencarian Sedang Di Proses";
        text.style.color = "green";
        text.style.display = "block";
        section.style.display = "none";
        sectionCenter.style.display = "none";
        sectionSatu.style.display = "none";
        sectionDua.style.display = "none";
        sectionTiga.style.display = "none";
        sectionEmpat.style.display = "none";
        sectionTiket.style.height = "150vh";
        sectionTiket.style.margin = "0 0 300px 0";
        scrollDown.style.transform = "translateY(-10%)";
    }
})

var tutupInfo = document.querySelector("#close-info");
var regis = document.getElementById("text-js");
const section = document.querySelector(".section");
const sectionCenter = document.querySelector(".section-center");
const sectionSatu = document.querySelector(".section-1");
const sectionDua = document.querySelector(".section-2");
const sectionTiga = document.querySelector(".section-3");
const sectionEmpat = document.querySelector(".section-4");

const sectionTiket = document.querySelector(".section-info-tiket");
const scrollDown = document.querySelector(".scroll-info-tiket");

tutupInfo.addEventListener("click", function () {
  regis.style.display = "none";
  section.style.display = "block";
  sectionCenter.style.display = "block";
  sectionSatu.style.display = "block";
  sectionDua.style.display = "block";
  sectionTiga.style.display = "block";
  sectionEmpat.style.display = "block";
  sectionTiket.style.margin = "0";
  sectionTiket.style.height = "0vh";
  scrollDown.style.transform = "translateY(-300%)";
});

//    var terbaru = document.querySelector("#terbaru-1");
//    var persiapan = document.querySelector("#persiapan-1");
//    var isiTerbaru = document.querySelector(".pelayanan-right-container");
//    var isiPersiapan = document.querySelector(".pelayanan-right-container-2");

//    terbaru.addEventListener("click", function(){
//     terbaru.style.color = "#1877f2";
//     persiapan.style.color = "#000";
//     isiTerbaru.style.display = "block";
//     isiPersiapan.style.display = "none";
//    });

//    persiapan.addEventListener("click", function(){
//     terbaru.style.color = "#000";
//     persiapan.style.color = "#1877f2";
//     isiTerbaru.style.display = "none";
//     isiPersiapan.style.display = "block";
//    });

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
  scrollTop(".header-img", 3000);
});
