<?php
    class Handler
    {
        public static function arrayHandler()
        {
            $a = [];
            $a['nome'] = $_POST['nome'];
            $a['salario'] = $_POST['salario'];
            $a['funcao'] = $_POST['funcao'];

            $gravar = $_POST['nome']."|".$_POST['salario']."|".$_POST['funcao']."|";
            $arquivo = fopen('registro.txt', 'a+');
            fwrite($arquivo, $gravar);
            fclose($arquivo);
            return $a;
        }
    }
?>