<?php
    namespace PHP\Modelo\DAO;
    require_once('Conexao.php');
    use PHP\Modelo\DAO\Conexao;

    class Excluir
    {
        function excluirCliente(
            Conexao $conexao,
            int $cpf
        ){
            $conn = $conexao->conectar();
            $sql = "delete from cliente where codigo = '$cpf'";
            $result = mysqli_query($conn, $sql);
            mysqli_close($conn);

            if($result){
                echo "Deletado com sucesso!";
            }else{
                echo "Não deletado!";
            }
        }

        function excluirFuncionario(
            Conexao $conexao,
            int $cpf
        ){
                $conn = $conexao->conectar();
                $sqlFun = "delete from funcionario where codigo = '$cpf'";
                $funResult = mysqli_query($conn, $sqlFun);
                mysqli_close($conn);
                if($funResult){
                    echo "Deletado com sucesso!";
                }else{
                    echo "Não Deletado!";
                }
        }
    }//Fim da classe

?>