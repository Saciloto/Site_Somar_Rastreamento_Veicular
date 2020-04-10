<?php
// Função que recebe os dados do formulário e envia um email com os dados para a somar
$name = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$fone = addslashes($_POST['fone']);
$select = addslashes($_POST['select']);
$emailsender = "website@somarrastreamento.com.br";

$to = "faleconosco@somarrastreamento.com.br;somarrastreamento@gmail.com";
$subject = "Contato - Site Somar";
$body = "Nome: ".$name."\n".
        "Email: " .$email."\n".
        "Telefone: ".$fone. "\n".
        "Plano escolhido: ".$select. "\n";
$header = "From:website@somarrastreamento.com.br\n".
          "Reply-To:".$email."\n".
          "x=Mailer:PHP".phpversion().
          "MIME-Version: 1.1\n".
          "Return-Path: Contato <website@somarrastreamento.com.br>\n";  

        
        if(mail($to,$subject,$body,$header,"-r".$emailsender)){
            echo '<!DOCTYPE html>';
            echo '<html xmlns="http://www.w3.org/1999/xhtml">';
            echo '<head>';
            echo '   <meta http-equiv="refresh" content="5; url=http://somarrastreamento.com.br/siteNovo/">';
            echo '</head>';
            echo '<body>';
            echo '<p>Seu email foi enviado com sucesso.</p>';
            echo '<a href="http://somarrastreamento.com.br/siteNovo/">Prosseguir</a>';
            echo '</body>';
            echo '</html>';
            
        }else{
            echo '<!DOCTYPE html>';
            echo '<html xmlns="http://www.w3.org/1999/xhtml">';
            echo '<head>';
            echo '   <meta http-equiv="refresh" content="5; url=http://somarrastreamento.com.br/siteNovo/">';
            echo '</head>';
            echo '<body>';
            echo '<p>Seu email não foi enviado, por favor tente novamente mais tarde.</p>';
            echo '<a href="http://somarrastreamento.com.br/siteNovo/">Prosseguir</a>';
            echo '</body>';
            echo '</html>';

    };
?>