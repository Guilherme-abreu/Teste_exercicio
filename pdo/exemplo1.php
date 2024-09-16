<?php

$host = 'localhost';
$dbname = 'livro';
$usename = 'root';
$password = '';

//  cria conexão com banco de dados usando PDO - PHP Data Object

try{
    $conn = new PDO("mysql:host = $host;dbname=$dbname",$username,$password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão realizada com sucesso<br>";
}
catch(PDOEXceptional $e){
    echo "Falha na conexão:",$e->getmessage();

}

// dados a serem inseridos

$nome = 'C.S Lewis';
$nacionalidade = 'Inglaterra';
$datanascimento = '1892-01-03';

$sql = "INSERT INTO autores(nome,nacionalidade,datanascimento 
Values (:nome,:nacionalidade,:datanascimento)";

//prepara a conexão

$stmt = $conn->prepare($sql);

//  Associe so valores aos parametros de consulta
$stmt->bindParam(':nome',$nomme);
$stmt->bindParam(':nacionalidade',$nacionalidade);
$stmt->bindParam(':datanascimento',$datanascimento);

// executa a consulta

if($stmt->execute()){
    echo "dados inseridos com sucesso";
}else{
    echo "Erro ao inserir dados";
}

// Feche a conexão
$conn = null;

?>