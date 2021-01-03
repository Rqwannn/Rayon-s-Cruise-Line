function scrollTop(target,durasi){
    const infoJelajahi = document.querySelector(target);
        let targetGetPosition = infoJelajahi.getBoundingClientRect().top;
        let startPosition = window.pageYOffset;
        let distance = targetGetPosition - startPosition;
        let startTime = null;
        
        function animasi(waktuSekarang){
            if(startTime === null) startTime = waktuSekarang;
            let timeElapsed = waktuSekarang - startTime;
            let run = ease(timeElapsed,startPosition,distance,durasi);
            window.scrollTo(0,run);
            if(timeElapsed < durasi) requestAnimationFrame(animasi);
        }

        function ease(t,b,c,d){
            return c * Math.sin(t/d * (Math.PI/2)) + b;
        }

        requestAnimationFrame(animasi);
}

const secondBtn = document.querySelector(".edit-card-circle");

    secondBtn.addEventListener("click", () =>{
        scrollTop(".kapal-section-1", 3000);
    })

