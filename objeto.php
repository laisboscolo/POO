<!-- exemplo em php -->
<?php
$aluno = [
"nome" => "Lais",
"idade" => 16,

"estudar" => function() use (&$aluno){
    echo "{$aluno['nome']} está estudando";
}

];

$aluno['estudar']();
?>