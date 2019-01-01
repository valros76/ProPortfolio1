<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="public/css/style.css"/>
    <title>Portfolio Professionnel</title>
</head>
<body>

    <header>
        <h1>Portfolio Professionnel</h1>
        <nav class="headMenu">
            <ul>
                <li><a href="?action=home">Home</a></li>
                <li><a href="?action=portfolios">Mes Portfolios</a></li>
                <li><a href="?action=contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section class="content">
        
        <article>
            <h3>Shifumi</h3>
            <div class="textArticleHome">
                <button class="btn btn-info game">Pierre</button>
                <button class="btn btn-success game">Feuille</button>
                <button class="btn btn-warning game">Ciseaux</button>
                <hr/>
                <div id="resultatJoueur" style="display:inline-block;">Joueur : X</div>
                <hr width="50px"/>
                <div>
                    VS
                </div>
                <hr width="50px"/>
                <div id="resultatRobot" style="display:inline-block;">
                    Robot : X
                </div>
                <br/>
                <br/>
                <hr/>
                <div class="resultat">
                </div>
                <hr/>
            </div>
        </article>
        </section>

    
    <footer>
        <p>
            Créé par Valérian Dufrène - 2018
        </p>
    </footer>

    <script src="public/js/shifumi.js"></script>

</body>
</html>