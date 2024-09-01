<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario simples</title>
    <link rel="stylesheet" href="Formulario.css">
</head>
<body>
    <h1>Resultado do seu alistamento militar</h1>

    <div>
<?php
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $sexo = $_POST["Sexo"];

        if($sexo == 'Masculino' && $idade >= 18){
            echo   '<span class ="AUTORIZADO"> Você está apto a se alistar no serviço militar obrigatório. Ao prosseguir, você confirma sua elegibilidade e disposição para cumprir com as obrigações militares estabelecidas por lei. </span>';
        }
            else{
                if($idade <= 17){
                    echo '<span class ="AUTORIZADO"> Você não está apto a se alistar no serviço militar obrigatório, pois a idade mínima exigida é de 18 anos. Por favor, aguarde até completar a idade necessária para realizar o alistamento.';
                }
                    else{
                        if ($sexo == 'Feminino' && $idade >= 18){
                            echo '<span class ="AUTORIZADO">Você está apto a se alistar no serviço militar, porem você é do sexo feminino e logo não é obrigatorio.';
                        }
                    }
            }
  
            

?>
    </div>
</body>
</html>