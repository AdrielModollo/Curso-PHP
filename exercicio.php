<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="recursos/css/estilo.css">
    <link rel="stylesheet" href="recursos/css/exercicio.css">
    <title>Exercicio</title>
</head>
<body class="exercicio">
    <!-- <header>teste</header>
    <main>teste</main>
    <footer>teste</footer>
    <nav>teste</nav>
    <span>teste</span> -->    
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Visualização do Exercício</h2>
    </header>
        <nav class="navegacao">
            <a href=<?= "/{$_GET['dir']}/{$_GET['file']}.php" ?>  class="verde">Sem formatação</a>
            <a href="index.php" class="vermelho">Voltar</a>
        </nav>
            <main class="principal">
            <div class="conteudo">
                <?php
                    //include('teste.php')
                    include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
                ?>


        </div>
    </main>
    <footer class="rodape">
            Adriel 
            
            <?php
                setlocale( LC_ALL, 'pt_BR', 'pt_BR.iso-8859-1', 'pt_BR.utf-8', 'portuguese' ); 
                 date_default_timezone_set('America/Sao_Paulo');
                 $date = date('Y-m-d H:i:s');
                 echo $date;
            ?>
    </footer>
</body>
</html>