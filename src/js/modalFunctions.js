btnAddMusic = document.querySelector(".btn-add-music");
modalAddMusic = document.querySelector(".modal-add-music");

btnAddMusic.addEventListener("click", (e) =>{
    e.preventDefault();
    modalAddMusic.classList.add("enable");
})