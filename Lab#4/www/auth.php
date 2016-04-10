<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html" charset="utf-8">
    <meta name="keywords" content="test,site,website"/>
    <meta name="description" content="Acest sait este de testare"/>
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <link href="img/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
    <title>TEST</title>
<body>
<div id="page-wrap">
    <header>
        <a href="index.php" title="Principala" id="logo">Test-Site</a>
        <span class="contact"><a href="about.php" title="Informatie">Despre noi
        </a></span> <input type="text" class="field" placeholder="Cauta"/>
        <span class="right"><span class="contact"><a href="reg.php" tile="Inregistrare">Inregistrare
        </a></span> <span class="contact"><a href="auth.php" title="Logare">Logare</a></span></span>

    </header>
    <div class="clear"><br /></div>
    <center>
        <div id="menu">Categorii<hr /></div>
        <div id="menuHrefs">
             <a href="about.php">Despre noi</a>
                <a href="feedback.php">Contacte</a>
                <a href="auth.php">Logare</a>
                <a href="reg.php">Inregistrare</a>
                <a href="calendar.php">Calendar</a>
        </div>
    </center>
    <div id="wrapper">
        <div id="articles">
            <form action="" method="post" >
                <label for="subject">Tema de conversare</label>
                <input type="text" id="subject" name="subject" placeholder="Tema de conversatie" />
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="adress@example.com" />
                <label for="name">Numele tau</label>
                <input type="text" id="name" name="name" placeholder="Introdu numele tau" />
                <label for="message">Introdu mesajul tau</label>
                <textarea id="message" name="message" placeholder="Introdu mesajul tau"></textarea>
                <input type="submit" value="Trimite" id="send" name="send" />
            </form>
        </div>

    </div>

</div>
</div>
<footer>
    <span class="left"> Toate drepturile de autor sunt rezervate &copy; 2016</span>
    <span class="right">Facebook<img src="img/face.jpg" alt="Facebook" title="Facebook"/> </span>
</footer>

</body>



</head>

</html>