<!DOCTYPE html>

<?

// Регистрация

# Соединямся с БД
mysql_connect("localhost", "root", "");
mysql_select_db("test");

if(isset($_POST['submit']))
{
    $err = array();

    # проверям логин
    if(!preg_match("/^[a-zA-Z0-9]+$/",$_POST['login']))
    {
        $err[] = "Logarea trebuie sa fie din caractere latine";
    }
    
    if(strlen($_POST['login']) < 3 or strlen($_POST['login']) > 30)
    {
        $err[] = "Login trebuie sa fie in deapazonul 3-30 caractere";
    }
    
    # проверяем, не сущестует ли пользователя с таким именем
    $query = mysql_query("SELECT COUNT(user_id) FROM users WHERE user_login='".mysql_real_escape_string($_POST['login'])."'");
    if(mysql_result($query, 0) > 0)
    {
        $err[] = "Utilizatorul cu acest nume exista in baza de date";
    }
    
    # Если нет ошибок, то добавляем в БД нового пользователя
    if(count($err) == 0)
    {
        
        $login = $_POST['login'];
        
        # Убераем лишние пробелы и делаем двойное шифрование
        $password = md5(md5(trim($_POST['password'])));
        
        mysql_query("INSERT INTO users SET user_login='".$login."', user_password='".$password."'");
        //header("Location: login.php"); exit();
    }
    else
    {
        print "<b>Eroare la inregistrare:</b><br>";
        foreach($err AS $error)
        {
            print $error."<br>";
        }
    }
}

?>
<html>
<head>
    <meta http-equiv="content-type" content="text/html" charset="utf-8">
    <meta name="keywords" content="test,site,website"/>
    <meta name="description" content="Acest sait este de testare"/>
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <link href="img/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
    <title>TEST</title>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script>
        $(document).ready (function () {
            $("#send").click(function () {
                var name = $("#subject").val();
                var email = $("#email").val();
                var subject = $("#name").val();
                var message = $("#message").val();
                var fail = "";
                if (subject.length < 3) fail = "Tema are mai putin de 3 caractere";
                else if (email.split('@'.length - 1 == 0 || email.split('.').length - 1 == 1))
                    fail = "Nu ati introdus emailul corect";
                else if (name.length < 5)
                    fail = "Numele este mai putin de 3 caractere";
                else if (message.length < 20)
                    fail = "Mesajul contine mai putin de 20 caractere";
                if (fail != "")
                    $('#messageShow').html(fail + "<div class='clear'>><br></div>");
                $('#messageShow').show();
                return false;

            });

        });
        </script>
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
           <form method="POST">
Login <input name="login" type="text"><br>
Parola <input name="password" type="password"><br>
<input name="submit" type="submit" value="Inregistrare">
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