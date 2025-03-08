<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="src/styles/global.css">
    <link rel="stylesheet" href="src/styles/home.css">
    <link rel="stylesheet" href="src/styles/modal.css">


    <title>Music Database</title>
</head>
<body>
    <div class="modal-add-music">
        <div class="modal-add-music-content">
            <div class="modal-add-music-wrapper">
                <div class="name-music">
                    <label for="name">Name:</label>
                    <input type="text" id="name">

                </div>
                
                <div class="wrapper-duration-rate">
                    <div class="duration-music">
                        <label for="duration-music">Duration:</label>
                        <input type="number" id="duration-music">
                    </div>
                    <div class="rate-music">
                        <label for="rate-music">Rate:</label>
                        <input type="number" id="rate-music">
                    </div>
                    
                </div>
                <div class="btn-add">
                        <button>Add</button>
                    </div>


            </div>
        </div>
    </div>
    <div class="container">
        <div class="title">
            <h1>Music Database</h1>
        </div>
        
        <div class="album-form">
            <form action="#" method="post">

                <div class="wrapper-album-band-name">
                    <div class="album-name">
                        <label for="album-name">Album name:</label>
                        <input type="text" name="album-name" id="album-name">
                    </div>

                    <div class="band-name">
                        <label for="band-name">Band Name:</label>
                        <select name="band-name" id="band-name">
                            <option value="Pink Floyd" selected>Pink Floyd</option>
                        </select>
                    </div>
                </div>

                <div class="wrapper-album-desc">
                    <label for="album-desc">Descrition: </label>
                    <textarea name="album-desc" id="album-desc"></textarea>
                </div>

                <div class="wrapper-musics">
                    <div class="label-btn-add">
                        <label for="">Musics:</label>
                        <button class="btn-add-music">Add</button>
                    </div>
                    
                    <div class="musics">
                        
                    </div>
                </div>



                <div class="wrapper-rate-duration">
                    <div class="album-rate">
                        <label for="album-rate">Rate: </label>
                        <input type="number" name="album-rate" id="album-rate">
                    </div>

                    <div class="album-duration">
                        <label for="album-duration">Duration: </label>
                        <input type="number" name="album-duration" id="album-duration">
                    </div>
                </div>

                <div class="wrapper-file-img">
                    <label for="file-img">Image:</label>
                    <input type="file" name="file-img" id="file-img">
                </div>

                <div class="wrapper-btn-submit">
                    <input type="submit" value="Enviar">
                </div>


            </form>
        </div>

        <div class="albuns">
            <div class="album">
                <div class="album-content">
                    <div class="album-img-name-band">
                        <div class="album-img">
                            <img src="assets/img/darksideofthemoon.png">
                        </div>

                        <div class="album-name-band">
                            <span class="album-name">The Dark Side of the Moon</span>
                            <span class="album-band">Pink Floyd</span>
                        </div>

                    </div>
                    <hr>
                    <div class="album-descrition">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat rem dolor provident distinctio vitae 
                            doloremque maiores sequi dolorem, optio quasi, architecto officia voluptatem similique ut beatae quam iste, quaerat dolores!</p>

                    </div>
                    <hr>
                    <div class="album-rate-duration">
                        <div class="album-rate">
                            <span>Rate:</span>
                            <span class="rate">0</span>
                            <span>/ 10</span>
                        </div>
                        <div class="album-duration">
                            <span>Duration:</span>
                            <span class="duration">3251</span>
                            <span>s</span>
                        </div>
                    </div>
                </div>  
            </div>
        </div>

    </div>

    <script src="src/js/modalFunctions.js"></script>
    <script src="src/js/addMusic.js"></script>
    
</body>
</html>