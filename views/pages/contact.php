<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="public/css/style.css"/>
    <title>Contact</title>
</head>
<body>

    <header>
        <h1>Contact</h1>
        <nav class="headMenu">
            <ul>
                <li><a href="?action=home">Home</a></li>
                <li><a href="?action=portfolios">Mes Portfolios</a></li>
                <li><a href="?action=contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section>
        <article>
            <h2>Contact</h2>
            <p>
                Je m'appelle Valérian Dufrène.<br/>
                Vous pouvez me contacter par email (si vous avez une application de mail par défaut, elle s'ouvrira en cliquant sur le lien) : <a href="mailto:valerian.dufrene@gmail.com">valerian.dufrene@gmail.com</a>.<br/>
                Ou par ce formulaire : (Tous les champs sont obligatoires)<br/>
                <form class="contactForm" action="" method="post">
                    <label for="nom">Votre nom</label>
                    <input type="text" name="nom" required/>
                    <br/>
                    <label for="mail">Votre adresse email</label>
                    <input type="email" name="mail" required/>
                    <br/>
                    <label for="message">Votre message</label>
                    <textarea id="messageContact" name="message" placeholder="Votre message ici..." required></textarea>
                    <br/>
                    <input type="submit" value="Envoyer" name="submitContact"/>
                </form>
            </p>
        </article>
    </section>
    
    <footer>
        <p>
            Créé par Valérian Dufrène - 2018
        </p>
    </footer>

</body>
</html>