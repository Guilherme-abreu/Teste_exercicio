<?php

//configuração do banco de dados

$host = 'localhost';
$dbname = 'livro';
$username = 'root';
$password = '';

//criar a conexão com o banco de dados

$conn = new mysql($host,$username,$password,$dbname);

//verificar se houve erro na conexão

if($conn->conect_error){
    die("Falha na conexão",$conn->conect_error);

}
echo "Conexão realizada com sucesso";

//Dados a serem inseridos

$sql = "INSERT INTO autores (nome,nacionalidade,datanascimento) VALUES ('Machado de Assis', 'Brasil',''06/21/39')"

//executo a instrução e verificor erro 

if($conn->query($sql) === TRUE){
    ECHO "DADOS INSERIDOS COM SUCESSO";
}else{
    echo "Erro ao inserir dados",$conn->error;

}

$conn->close()

?>