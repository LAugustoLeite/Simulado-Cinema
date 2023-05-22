<!DOCTYPE html>
<head>
    <script src="./script.js" defer></script>
</head>
<html>
<head>
    <title>Tela Principal</title>
    <style>
        /* Estilos CSS */
        body {
            background-color: #941f1f;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
        }
        header {
            background-color: #000;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        .main{
            display: flex;
            justify-content: center;
            align-items: start;
        }
        .movie-card {
            width: 200px;
            background-color: #fff;
            border-radius: 5px;
            margin: 10px;
            padding: 10px;
            float: left;
            
        }
        .movie-card img {
            width: 100%;
            height: 290px;
        }
        .movie-card h3 {
            font-size: 15px;
            margin: 0;
            padding: 10px 0;
            text-align: center;
            color: #000;
        }
        .movie-card a{
            text-decoration: none
        }
        .movie-card .btn-compra{
            background-color: #941f1f;
            color: #fff;
        }
        #container{
            display: inline-block;
            transition: ease-in-out 1s;
            width: auto;
            height: auto;
        }

    </style>
</head>
<body>
    <header>
        <h1>Cinema SENAI</h1>
    </header>

    <main>
        <div class="main">
            <div class="movie-card">
                <img src="./img/orfa.jpg" alt="Filme 1">
                <h3>A Orfã 2</h3>
                <a href=""><h3 class="btn-compra">Comprar</h3></a>
                <button id="action-btn"><h3>Sinopse</h3></button>
                <div id="container">Esther consegue escapar de um centro psiquiátrico onde está confinada e viaja para os Estados Unidos se passando por filha desaparecida de uma família rica. No entanto, uma mãe superprotetora fará de tudo por sua família, não importando os meios.</div>
            </div>
            <div class="movie-card">
                <img src="./img/naosepreocupe.jpg" alt="Filme 2">
                <h3>Não Se Preocupe, Querida</h3>
            </div>
            <div class="movie-card">
                <img src="./img/AmulherRei.jpg" alt="Filme 3">
                <h3>A Mulher Rei</h3>
            </div>
            <div class="movie-card">
                <img src="./img/otelefone.jpg" alt="Filme 4">
                <h3>O Telefone Preto</h3>
            </div>
            <div class="movie-card">
                <img src="./img/Avatar2.jpg" alt="Filme 5">
                <h3>Avatar 2</h3>
            </div>
            <div class="movie-card">
                <img src="./img/Sorria.jpg" alt="Filme 6">
                <h3>Sorria</h3>
            </div>
            <div class="movie-card">
                <img src="./img/Queda.jpg" alt="Filme 7">
                <h3>A Queda</h3>
            </div>
        </div>
    </main>
</body>
</html>