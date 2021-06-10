<!DOCTYPE html>

<html>
<head>
    <title>Lista de Clientes</title>
    <meta charset="utf-8"/>
     <style type="text/css" media="all">
        th, td {
            border-bottom: 1px solid #ddd;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        table {
            margin-bottom: 40px;
        }
    </style>

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
    else{ ?>

      <table width="900" >
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Sexo</th>
            <th>Rua</th>
            <th>Bairro</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>CEP</th>
            <th>Observações</th>
        </tr>
        
        <?php
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
        ?>

        <tr>
            <td>    <?php echo $id ?>       </td>
            <td>    <?php echo $nome ?>     </td>
            <td>    <?php echo $email ?>    </td>
            <td>    <?php echo $sexo ?>     </td>
            <td>    <?php echo $rua ?>      </td>
            <td>    <?php echo $bairro ?>   </td>
            <td>    <?php echo $cidade ?>   </td>
            <td>    <?php echo $estado ?>   </td>
            <td>    <?php echo $cep ?>      </td>
            <td>    <?php echo $obs ?>      </td>
        </tr>
        <?php
        }
        }?>
      </table>
</body>
</html>