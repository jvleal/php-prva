<?php
    $arquivo = fopen("registro.txt", "r");
    $arquivo2 = fopen("registro2.txt", "a+");
    while(!feof($arquivo))
    {
        $pessoa = explode("|", fgets($arquivo));
    }
    fclose($arquivo);
    $posicao = $_GET['posicao'];
    $nome = $_POST['nome'];
    $salario = $_POST['salario'];
    $funcao = $_POST['funcao'];
    $pessoa[$posicao] = $nome;
    $pessoa[$posicao+1] = $salario;
    $pessoa[$posicao+2] = $funcao;
    unlink("registro.txt");
    rename("registro2.txt","registro.txt");
    $arquivo = fopen("registro.txt", "a+");
    $contador = count($pessoa);
    $i = 0;
    while($i <= $contador - 1)
    {
        $gravar = $pessoa[$i]."|";
        fwrite($arquivo, $gravar);
        $i++;
    }
    fclose($arquivo2);
    fclose($arquivo);
    echo "<script>
            alert('registro editado com sucesso!');
            window.location.href='index.php';
            </script>";
?>