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
            flex-wrap:  wrap
        }
        .movie-card {
            width: 200px;
            background-color: #fff;
            border-radius: 5px;
            margin: 10px;
            padding: 10px;
            float: left;
            border: solid 2px;
            border-radius: 8px;
        }
        .movie-card img {
            width: 100%;
            height: 290px;
        }
        .movie-card .btn-compra, button h3 {
            font-size: 15px;
            margin: 0;
            padding: 10px 0;
            text-align: center;
            color: #000;
            cursor: pointer;
        }
        .movie-card .btn-compra:hover {
            transition: linear 0.2s;
            background-color: #ca221f;
        }
        .movie-card button:hover {
            background-color: #d8d8d8;
        }
        .movie-card div h3 {
            font-size: 15px;
            margin: 0;
            padding: 10px 0;
            color:#941f1f;
        }
        .movie-card div {
            transition: ease 2s;
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
        .movie-card div{
            display: none;
        }
        button{
            display: flex;
            width: 100%;
            align-items: center;
            justify-content: center;
            margin-top: 10px;
            border: solid 2px;
            border-radius: 8px;
        }
        .movie-card .btn-compra{
            /* border: solid 2px; */
            border-radius: 8px;
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
                <a href=""><h3 class="btn-compra">Comprar</h3></a>
                <button id="orfa-btn"><h3>Sinopse</h3></button>
                <div id="container-orfa"><h3>Esther consegue escapar de um centro psiquiátrico onde está confinada e viaja para os Estados Unidos se passando por filha desaparecida de uma família rica. No entanto, uma mãe superprotetora fará de tudo por sua família, não importando os meios.</h3></div>
            </div>
            <div class="movie-card">
                <img src="./img/naosepreocupe.jpg" alt="Filme 2">
                <a href=""><h3 class="btn-compra">Comprar</h3></a>
                <button id="querida-btn"><h3>Sinopse</h3></button>
                <div id="container-querida"><h3>Uma dona de casa que vive em uma comunidade experimental começa a suspeitar que a empresa de seu marido está escondendo segredos perturbadores.</h3></div>
            </div>
            <div class="movie-card">
                <img src="./img/AmulherRei.jpg" alt="Filme 3"></h3>
                <a href=""><h3 class="btn-compra">Comprar</h3></a>
                <button id="mulher-btn"><h3>Sinopse</h3></button>
                <div id="container-mulher"><h3>Em 1800, o general Nanisca treina um grupo de mulheres guerreiras para proteger o reino africano de Dahomey de um inimigo estrangeiro.</h3></div>
            </div>
            <div class="movie-card">
                <img src="./img/otelefone.jpg" alt="Filme 4">
                <a href=""><h3 class="btn-compra">Comprar</h3></a>
                <button id="telefone-btn"><h3>Sinopse</h3></button>
                <div id="container-telefone"><h3>Finney Shaw, de 13 anos, é sequestrado por um sádico assassino mascarado e mantido em um porão à prova de som. Até que um telefone desconectado na parede começa a tocar, e ele logo descobre que pode ouvir as vozes das vítimas anteriores do maníaco.</h3></div>
            </div>
            <div class="movie-card">
                <img src="./img/Avatar2.jpg" alt="Filme 5">
                <a href=""><h3 class="btn-compra">Comprar</h3></a>
                <button id="avatar-btn"><h3>Sinopse</h3></button>
                <div id="container-avatar"><h3>Após formar uma família, Jake Sully e Ney'tiri fazem de tudo para ficarem juntos. No entanto, eles devem sair de casa e explorar as regiões de Pandora quando uma antiga ameaça ressurge, e Jake deve travar uma guerra difícil contra os humanos.</h3></div>
            </div>
            <div class="movie-card">
                <img src="./img/Sorria.jpg" alt="Filme 6">                <a href=""><h3 class="btn-compra">Comprar</h3></a>
                <button id="sorria-btn"><h3>Sinopse</h3></button>
                <div id="container-sorria"><h3>Após um paciente cometer um suicídio brutal em sua frente, a psiquiatra Rose é perseguida por uma entidade maligna que muda de forma. Enquanto tenta escapar desse pesadelo, Rose também precisa enfrentar seu passado conturbado para sobreviver.</h3></div>
            </div>
            <div class="movie-card">
                <img src="./img/Queda.jpg" alt="Filme 7">
                <a href=""><h3 class="btn-compra">Comprar</h3></a>
                <button id="queda-btn"><h3>Sinopse</h3></button>
                <div id="container-queda"><h3>Para as melhores amigas Becky e Hunter, a vida é sobre vencer medos e ultrapassar limites. No entanto, depois de subir 600 metros até o topo de uma torre de rádio remota e abandonada, elas acabam presas lá em cima. Agora, suas habilidades de escalada são colocadas à prova enquanto lutam desesperadamente para sobreviver aos elementos, a falta de suprimentos e a altura vertiginosa.</h3></div>
            </div>
        </div>
    </main>
</body>
</html>