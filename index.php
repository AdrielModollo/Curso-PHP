<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="recursos/css/estilo.css">
    <link rel="stylesheet" href="recursos/css/exercicio.css">
    <title>Curso PHP</title>
</head>
<body>
    <!-- <header>teste</header>
    <main>teste</main>
    <footer>teste</footer>
    <nav>teste</nav>
    <span>teste</span> -->    
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Indice dos exercícios</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
                <nav class="modulos">
                    <div class="modulo verde">
                        <h3> Modulo 01 - Básico </h3>
                    <ul>
                        <li><a href="exercicio.php?dir=basico&file=ola">PHP básico</a></li>
                        <li><a href="exercicio.php?dir=basico&file=integracao">Integração</a></li>
                    </ul>
                    </div>
                    <div class="modulo vermelho">
                        <h3> Modulo 02- Básico </h3>
                    <ul>
                        <li><a href="exercicio.php?dir=basico&file=desafio">Desafio PHP</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=int">Tipo Inteiro </a></li>
                        <li><a href="exercicio.php?dir=tipos&file=float">Tipo Float</a></li>
                    </ul>
                    </div>
                    <div class="modulo black">
                        <h3> Modulo 03 - Básico </h3>
                    <ul>
                        <li><a href="exercicio.php?dir=tipos&file=aritmeticas">Operações Aritméticas</A></a></li>
                        <li><a href="exercicio.php?dir=tipos&file=desafio_precedencia">Desafio Precedência</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=string">Tipo String</a></li>
                    </ul>
                    </div>
                    <div class="modulo laranja">
                        <h3> Modulo 04 - Básico </h3>
                    <ul>
                        <li><a href="exercicio.php?dir=tipos&file=desafio_string">Desafio String</A></a></li>
                        <li><a href="exercicio.php?dir=tipos&file=booleano">Tipo Booleano</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=conversao">Conversões</a></li>
                    </ul>
                    </div>
                    <div class="modulo orangered">
                        <h3> Modulo 05 - Básico </h3>
                    <ul>
                        <li><a href="exercicio.php?dir=variaveis&file=variaveis">Variáveis</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=desafio_equacao">Desafio equação</a></li>
                        <li><a href="#">Exercicios C</a></li>
                    </ul>
                    </div>
                    <div class="modulo gray">
                        <h3> Modulo 06 - Básico </h3>
                    <ul>
                        <li><a href="#">Exercicios A</A></a></li>
                        <li><a href="#">Exercicios B</a></li>
                        <li><a href="#">Exercicios C</a></li>
                    </ul>
                    </div>
                    <div class="modulo blueviolet">
                        <h3> Modulo 07 - Básico </h3>
                    <ul>
                        <li><a href="#">Exercicios A</A></a></li>
                        <li><a href="#">Exercicios B</a></li>
                        <li><a href="#">Exercicios C</a></li>
                    </ul>
                    </div>
                    <div class="modulo yellow">
                        <h3> Modulo 08 - Básico </h3>
                    <ul>
                        <li><a href="#">Exercicios A</A></a></li>
                        <li><a href="#">Exercicios B</a></li>
                        <li><a href="#">Exercicios C</a></li>
                    </ul>
                    </div>
                    <div class="modulo yellowgreen">
                        <h3> Modulo 09 - Básico </h3>
                    <ul>
                        <li><a href="#">Exercicios A</A></a></li>
                        <li><a href="#">Exercicios B</a></li>
                        <li><a href="#">Exercicios C</a></li>
                    </ul>
                    </div>
                           
                </nav>
    </main>
    <footer class="rodape">
            Adriel 
            
            <?php
                 date_default_timezone_set('America/Sao_Paulo');
                 echo date('D/M/Y H:i:s');
            ?>
    </footer>
</body>
</html>