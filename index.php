<?php      
 error_reporting(0);
         
        session_destroy();
        session_start();
        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];

        if($_POST['Enviar']){
            if(!empty($nome) && !empty($email)){
                $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, email) VALUES('$nome', '$email')");
            }
        } 
        
   
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles/style.css" rel="stylesheet">
    <link href="styles/fonts.css" rel="stylesheet">
    <link href="styles/media.css" rel="stylesheet">
    <title>Landing Page</title>
</head>
<body>


    <header>
        <div id="title">
            <h1>My Gesthor</h1>

        </div>
        
    </header>


    <main>
        <aside>


            <p>Inscreva-se</p>
            <form action="index.php" method="post">  
                <h3>De 10 de outubro a 01 de dezembro</h3>
                <input type="hidden" name="nome">
                <input type="text" placeholder="Nome" id="nome" name="nome" value="">
                <input type="email" placeholder="E-mail" id="email" name="email" value="">
                <input type="submit"value="Enviar" id="submit" name="Enviar">


            </form>
        </aside>
        
    <article>

    </article>

    </main>

    <div class="mygesthor">
        <p><span class="titulo-mygesthor"><strong> MY GESTHOR: </strong></span></p><br><p class="sobre-mygesthor">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
        </p>
    </div>









  

</body>
</html>