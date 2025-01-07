const musicSubmit = document.querySelector(".submit-music");
const nameMusic = document.querySelector(".name-music > input");
const durationMusic = document.querySelector(".duration-music > input");
const rateMusic = document.querySelector(".rate-music > input");
let idCount = 1;



function addMusic(){
    let name = nameMusic.value;
    let duration = durationMusic.value;
    let rate = rateMusic.value;



}

musicSubmit.addEventListener('click', addMusic)

