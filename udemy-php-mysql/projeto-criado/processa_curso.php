<?php

include_once 'db.php';

$nome_curso = $_POST['nome_curso'];
$carga_horaria = $_POST['carga_horaria'];

$queryInsertCurso = "INSERT INTO CURSO(nomeCurso, duracaoCurso) values 
('$nome_curso', $carga_horaria)";

mysqli_query($conexao, $queryInsertCurso);

header('location:index.php?pagina=cursos');