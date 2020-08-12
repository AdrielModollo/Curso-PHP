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
                        <li><a href="exercicio.php?dir=basico&file=desafio">Desafio PHP</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=int">Tipo Inteiro </a></li>
                        <li><a href="exercicio.php?dir=tipos&file=float">Tipo Float</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=aritmeticas">Operações Aritméticas</A></a></li>
                        <li><a href="exercicio.php?dir=tipos&file=desafio_precedencia">Desafio Precedência</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=string">Tipo String</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=desafio_string">Desafio String</A></a></li>
                        <li><a href="exercicio.php?dir=tipos&file=booleano">Tipo Booleano</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=conversao">Conversões</a></li>
                    </ul>
                    </div>
                    <div class="modulo orangered">
                        <h3> Modulo 02 - Váriaveis </h3>
                    <ul>
                        <li><a href="exercicio.php?dir=variaveis&file=variaveis">Variáveis</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=desafio_equacao">Desafio equação</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=atribuicoes">Atribuições</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=interpolacao">Interpolação</A></a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=variaveis_variaveis">Variáveis Variáveis</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=desafio_variaveis">Desafio Variáveis</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=valor_referencia"> Valor Referência</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=constante">Constantes</a></li>
                    </ul>
                    </div>
                    <div class="modulo yellow">
                        <h3> Modulo 03 - Controle </h3>
                    <ul>
                        <li><a href="exercicio.php?dir=controle&file=if_else">IF And if_else</A></a></li>
                        <li><a href="exercicio.php?dir=controle&file=operadores_relacionais">Operadores Relacionais</a></li>
                        <li><a href="exercicio.php?dir=controle&file=desafio_pi">Desafio PI</a></li>
                        <li><a href="exercicio.php?dir=controle&file=operadores_logicos">Operadores Logicos</a></li>
                        <li><a href="exercicio.php?dir=controle&file=desafio_opl">Desafio OPL</a></li>
                        <li><a href="exercicio.php?dir=controle&file=operador_ternario">Operador Ternario</a></li>
                        <li><a href="exercicio.php?dir=controle&file=switch">Switch</a></li>
                        <li><a href="exercicio.php?dir=controle&file=desafio_switch">Switch</a></li>
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