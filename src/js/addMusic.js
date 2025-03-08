const btnAdd = document.querySelector(".btn-add > button");
const nameMusic = document.querySelector(".name-music > input");
const durationMusic = document.querySelector(".duration-music > input");
const rateMusic = document.querySelector(".rate-music > input");
const musicContainer = document.querySelector(".musics");
let orderMusic = 1;



function addMusicInContainer(){
    let name = nameMusic.value;
    let duration = durationMusic.value;
    let rate = rateMusic.value;

    if(name.trim() || duration.trim() || rate.trim()){
        musicContainer.innerHTML += `
        <div class="music">
            <div class="music-content">
                <div class="music-order">
                    <span>${orderMusic}</span>
                </div>
                <div class="music-name">
                    <span>${name}</span>
                </div>
                <div class="music-duration">
                    <span>${duration}</span>
                </div>
                <div class="music-rate">
                    <span class="rate">${rate}</span>
                    <span>/ 10</span>
                </div>

            </div>
        </div>
    `  
        orderMusic++
    }
    modalAddMusic.classList.remove("enable"); //element that belongs of modal functions file
}

btnAdd.addEventListener('click', addMusicInContainer)

