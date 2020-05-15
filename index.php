<?php
    //Inclusão de um arquivo php chamado para conexão com autenticação para o banco de dados e suas configurações
    include_once("conexao.php");

    //Declaração da variável "nome" para atribuir o valor do "name" do input do formulário
    $nome= filter_input(INPUT_POST,'nome',FILTER_SANITIZE_STRING);
    //Declaração da variável "sobrenome" para atribuir o valor do "name" do input do formulário
    $sobrenome= filter_input(INPUT_POST,'sobrenome',FILTER_SANITIZE_STRING);
    //Declaração da variável "sexo" para atribuir o valor do "name" do input do formulário
    $sexo= filter_input(INPUT_POST,'sexo',FILTER_SANITIZE_STRING);
    //Declaração da variável "cpf" para atribuir o valor do "name" do input do formulário
    $cpf= filter_input(INPUT_POST,'cpf',FILTER_SANITIZE_STRING);
    //Declaração da variável "email" para atribuir o valor do "name" do input do formulário
    $email= filter_input(INPUT_POST,'email',FILTER_SANITIZE_STRING);
    //Declaração da variável "telefone" para atribuir o valor do "name" do input do formulário
    $telefone= filter_input(INPUT_POST,'telefone',FILTER_SANITIZE_STRING);
    //Declaração da variável "estado" para atribuir o valor do "name" do input do formulário
    $estado= filter_input(INPUT_POST,'estado',FILTER_SANITIZE_STRING);
    //Declaração da variável "cidade" para atribuir o valor do "name" do input do formulário
    $cidade= filter_input(INPUT_POST,'cidade',FILTER_SANITIZE_STRING);
    //Declaração da variável "titulo" para atribuir o valor do "name" do input do formulário
    $titulo= filter_input(INPUT_POST,'titulo',FILTER_SANITIZE_STRING);
    //Declaração da variável "urgencia" para atribuir o valor do "name" do input do formulário
    $urgencia= filter_input(INPUT_POST,'urgencia',FILTER_SANITIZE_STRING);
    //Declaração da variável "descricao" para atribuir o valor do "name" do input do formulário
    $descricao= filter_input(INPUT_POST,'descricao',FILTER_SANITIZE_STRING);
    //Declaração da variável "senha" para atribuir o valor do "name" do input do formulário
    $senha= filter_input(INPUT_POST,'senha',FILTER_SANITIZE_STRING);

    //Condição "if" aplicada para uma conexão que dê erro, retornando assim uma página php informando que deu problema na conexão
    if($conn->connect_error){
        die("Conexão Abortada".$conn->connect_error);
    }

    //Criação de uma váriavel que atribui a inserção dos dados de cada campo em uma tabela "usuario" a cada vez que o Usuário cadastre no formulário
    $insert_produto="insert into usuario (nome, sobrenome,sexo, cpf, email, telefone, estado, cidade, titulo, urgencia, descricao, senha) values ('$nome', '$sobrenome','$sexo', '$cpf', '$email', '$telefone', '$estado', '$cidade', '$titulo', '$urgencia', '$descricao', '$senha')";
    
    //Condição "if" aplicada para uma conexão que foi concluída, retornando uma página php informando que foi enviado ao banco de dados
    if($conn->query($insert_produto) === true) {
        echo "linha inserida";
    } else {
        echo "Erro: ".$insert_produto."<br>".$conn->error;
    }

    //Fechar conexão com banco
    $conn->close();
?>