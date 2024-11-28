<?php

function conectarBD(){

    $conexao = mysqli_connect("127.0.0.1",
                                "root", 
                                "", 
                                "confeitaria");
    return($conexao);
}

function inserirFuncao($funcao, $salario){

    $conexao = conectarBD(); 

    $consulta = "INSERT INTO funcoes (funcao, salario) VALUES ('$funcao', '$salario')";

}

function retornarFuncoes(){

    $conexao = conectarBD(); 
    
    $consulta = "SELECT * FROM funcoes";

    $listaClientes = mysqli_query($conexao, $consulta);

    return($listaClientes);
}

?>
