<!DOCTYPE html>

<html>
<head>
    <title>Lista de Clientes</title>
    <meta charset="utf-8"/>
    <?php
        //Fazendo conexão.
	    $servidor = "localhost";
	    $usuario = "root";
	    $senha = "";
        $conexao = mysqli_connect("$servidor", "$usuario", "$senha", "meubanco");
    ?>
</head>
<body>

    <?php
    $sql = "SELECT * FROM `meubanco`.`cliente` ORDER BY `nome`";
    $result = mysqli_query($conexao, $sql);
    if(mysqli_num_rows($result) == ''){
        echo "Não existe clientes cadastrados!";
    }
    else{ 
        while($res_1 = mysqli_fetch_assoc($result)){ 
        $id = $res_1['id'];
        $nome = $res_1['nome'];
        $email = $res_1['email'];
        $sexo = $res_1['sexo'];
        $rua = $res_1['rua'];
        $bairro = $res_1['bairro'];
        $cidade = $res_1['cidade'];
        $estado = $res_1['estado'];
        $cep = $res_1['cep'];
        $obs = $res_1['observacoes'];

    echo "<strong>ID:</strong> " . $id . "<br/>";
    echo "<strong>Nome:</strong> " . $nome . "<br/>";
    echo "<strong>Email:</strong> " . $email . "<br/>";
    echo "<strong>Sexo:</strong> " . $sexo . "<br/>";
    echo "<strong>Rua:</strong> " . $rua . "<br/>";
    echo "<strong>Bairo:</strong> " . $bairro . "<br/>";
    echo "<strong>Cidade:</strong> " . $cidade . "<br/>";
    echo "<strong>Estado:</strong> " . $estado . "<br/>";
    echo "<strong>CEP:</strong> " . $cep . "<br/>";
    echo "<strong>Observações:</strong> " . $obs . "<br/><br/>";
        }
    } ?>
</body>
</html>