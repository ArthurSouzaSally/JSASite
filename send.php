
<?php

// enviar para: andreiasolucaorc@hotmail.com

$para = "andreiasolucaorc@hotmail.com";

$nome = $_POST["i1"]; // nome
$mail = $_POST["i2"]; // email
$fone = $_POST["i3"]; // telefone
$condominio = $_POST["i4"]; // condominio
$cell = $_POST["i5"]; // celular
$mensagem = $_POST["i6"]; // mensagem

$paraMail = "
NOME DO CLIENTE:    ".$nome."
EMAIL PARA CONTATO: ".$mail."
TELEFONE:           ".$fone."
CELULAR:            ".$cell."
CONDOMINIO:         ".$condominio."

MENSAGEM:
".$mensagem;

// banco de emails
$f = fopen("extras/mails.txt","a");
fwrite($f, $mail."<br/>\n");
fclose($f);

// enviar proposta
if(mail($para,"PROPOSTA DO SITE DE: ".$nome,$paraMail,"de JSA SITE")){
	echo "1";
}else{
	echo "0";
}

?>
