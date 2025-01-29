<?php
    namespace PHP\Modelo\DAO;
    require_once('Conexao.php');
    use PHP\Modelo\DAO\Conexao;

    class Consultar{
        function consultarClienteIndividual(
            Conexao $conexao,
            int $cpf
        ){
            try{
                $conn = $conexao->conectar();
                $sql = "select * from cliente where codigo = '$cpf'";
                $sqlFun = "select * from funcionario where codigo = ''$cpf";
                $funResult = mysqli_query($conn, $sqlFun);
                $result = mysqli_query($conn, $sql);

                while($dados = mysqli_fetch_Array($result)){
                    if($dados['codigo'] = $cpf){
                        echo "<br>CPF: ".$dados['codigo']."<br>Nome: ".$dados['nome']."<br>Telefone: ".$dados['telefone']."<br>Endereço: ".$dados['endereco']."<br>Total: ".$dados['total'];
                        return;//Finalizar o While
                    }
                    return "Código digitado invalido!";
                }//Fim do while

                while($dados = mysqli_fetch_Array($funResult)){
                    if($dados['codigo'] = $cpf){
                        echo "<br>CPF: ".$dados['codigo']."<br>Nome: ".$dados['nome']."<br>Telefone: ".$dados['telefone']."<br>Endereço: ".$dados['endereco']."<br>Total: ".$dados['salario'];
                        return;//Finalizar o While
                    }
                    return "Código digitado invalido!";
                }//Fim do while

            }catch(Except $erro){
                echo $erro;
            }
        }//Fim do consultrarClienteIndividual
    }//Fim da classe


?>