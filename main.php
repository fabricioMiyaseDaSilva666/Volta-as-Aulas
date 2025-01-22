<?php
    namespace PHP\Modelo;
    require_once('Cliente.php');
    require_once('Funcionario.php');
    use PHP\Modelo\Cliente;
    use PHP\Modelo\Funcionario;

    //Criando o objeto
    $cliente1 = new Cliente("12345678910","Amy Lee","1199999-12013","Rua Jiopa, 200",5000);
    $funcionario1 = new Funcionario("12345678910","Amy Lee","1199999-12013","Rua Jiopa, 200",1300);

    //Visualizar os dados
    echo $cliente1->imprimir();
    echo "<br><br>",$funcionario1->imprimir();

?>