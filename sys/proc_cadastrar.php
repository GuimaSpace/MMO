<?php
include_once("conn.php");
$dados = filter_input_array(INPUT_POST);

if (check() == false) {
    echo "Ocorreu algum erro";
}elseif (check() == true) {
    $token = generate_token();
    $query_inserir = "INSERT INTO tb_users (user_token, user_complete_name, user_nickname, user_email, user_password) VALUES ('$token', :completename, :Nick_Name, :Email, :Senha)";
    $query=$conn->prepare($query_inserir);
    $query->bindParam(':completename', $dados['Complete_Name'], PDO::PARAM_STR);
    $query->bindParam(':Nick_Name', $dados['Nick_Name'], PDO::PARAM_STR);
    $query->bindParam(':Email', $dados['Email'], PDO::PARAM_STR);
    $query->bindParam(':Senha', $dados['Senha'], PDO::PARAM_STR);
    $query->execute();
}

function check(){
    $dados = filter_input_array(INPUT_POST);
    if (in_array("", $dados)) {
        $empty_input = true;
        unset($dados);
        return false;
    }elseif (!filter_var($dados['Email'],FILTER_VALIDATE_EMAIL)) {
            $empty_input = true;
            unset($dados);
            return false;
    }else{
        return true;
    }
}

function generate_token(){
    return $token_usuario = md5(uniqid(mt_rand(),true));
}
?>