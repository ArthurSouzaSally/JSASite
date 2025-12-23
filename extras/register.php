
<?php

$senha = $_GET["senha"];

if($senha!="senhordoscondominiosjsa"){
	echo "<script>window.location.replace('index.html')</script>";
}else{
	if($_GET["mail"]!=""){
		$mail = $_GET["mail"];
		$f = fopen("mails.txt","r");
		$n = 0;
		while(!feof($f)){
			if($mail."<br/>\n"==fgets($f)){
				$n=1;
				echo "<script>alert('EMAIL JÁ EXISTE');</script>";
			}
		}
		fclose($f);
		if($n==0){
			$f = fopen("mails.txt","a");
			fwrite($f, $mail."<br/>\n");
			fclose($f);
			echo "<script>alert('EMAIL ADICIONADO');</script>";
		}
		echo "<script>window.location.replace('register.php?senha=senhordoscondominiosjsa')</script>";
	}
	if($_GET["dmail"]!=""){
		$mail = $_GET["dmail"];
		$f = fopen("mails.txt","r");
		$n = "";
		while(!feof($f)){
			$compara = fgets($f);
			if($mail."<br/>\n"!=$compara){
				$n=$n.$compara;
			}else{
				echo "<script>alert('EMAIL DELETADO');</script>";
			}
		}
		fclose($f);
		$f = fopen("mails.txt","w");
		fwrite($f, $n);
		fclose($f);
		echo "<script>window.location.replace('register.php?senha=senhordoscondominiosjsa')</script>";
	}
	if($_GET["tituloT"]!="" and $_GET["msgT"]!=""){
		$titulo = str_replace("%20"," ",$_GET["tituloT"]);
		$titulo = str_replace("%C3%A7","ç",$titulo); // ç
		$titulo = str_replace("%C3%87","Ç",$titulo); // Ç
		$titulo = str_replace("%C3%A3","ã",$titulo); // ã
		$titulo = str_replace("%C3%83","Ã",$titulo); // Ã
		$titulo = str_replace("%C3%A1","á",$titulo); // á
		$titulo = str_replace("%C3%81","Á",$titulo); // Á
		$titulo = str_replace("%C3%A2","â",$titulo); // â
		$titulo = str_replace("%C3%82","Â",$titulo); // Â
		$titulo = str_replace("%C3%A0","à",$titulo); // à
		$titulo = str_replace("%C3%80","À",$titulo); // À
		$titulo = str_replace("%C3%A9","é",$titulo); // é
		$titulo = str_replace("%C3%89","É",$titulo); // É
		$titulo = str_replace("%C3%A8","è",$titulo); // è
		$titulo = str_replace("%C3%88","È",$titulo); // È
		$titulo = str_replace("%C3%AA","ê",$titulo); // ê
		$titulo = str_replace("%C3%8A","Ê",$titulo); // Ê
		$titulo = str_replace("%C3%AD","í",$titulo); // í
		$titulo = str_replace("%C3%8D","Í",$titulo); // Í
		$titulo = str_replace("%C3%AC","ì",$titulo); // ì
		$titulo = str_replace("%C3%8C","Ì",$titulo); // Ì
		$titulo = str_replace("%C3%AE","î",$titulo); // î
		$titulo = str_replace("%C3%8E","Î",$titulo); // Î
		$titulo = str_replace("%C3%B5","õ",$titulo); // õ
		$titulo = str_replace("%C3%95","Õ",$titulo); // Õ
		$titulo = str_replace("%C3%B3","ó",$titulo); // ó
		$titulo = str_replace("%C3%93","Ó",$titulo); // Ó
		$titulo = str_replace("%C3%B2","ò",$titulo); // ò
		$titulo = str_replace("%C3%92","Ò",$titulo); // Ò
		$titulo = str_replace("%C3%B4","ô",$titulo); // ô
		$titulo = str_replace("%C3%94","Ô",$titulo); // Ô
		$titulo = str_replace("%C3%BA","ú",$titulo); // ú
		$titulo = str_replace("%C3%9A","Ú",$titulo); // Ú
		$titulo = str_replace("%C3%B9","ù",$titulo); // ù
		$titulo = str_replace("%C3%99","Ù",$titulo); // Ù
		$titulo = str_replace("%C3%BB","û",$titulo); // û
		$titulo = str_replace("%C3%9B","Û",$titulo); // Û
		$msg = str_replace("%20"," ",$_GET["msgT"]);
		$msg = str_replace("%C3%A7","ç",$msg); // ç
		$msg = str_replace("%C3%87","Ç",$msg); // Ç
		$msg = str_replace("%C3%A3","ã",$msg); // ã
		$msg = str_replace("%C3%83","Ã",$msg); // Ã
		$msg = str_replace("%C3%A1","á",$msg); // á
		$msg = str_replace("%C3%81","Á",$msg); // Á
		$msg = str_replace("%C3%A2","â",$msg); // â
		$msg = str_replace("%C3%82","Â",$msg); // Â
		$msg = str_replace("%C3%A0","à",$msg); // à
		$msg = str_replace("%C3%80","À",$msg); // À
		$msg = str_replace("%C3%A9","é",$msg); // é
		$msg = str_replace("%C3%89","É",$msg); // É
		$msg = str_replace("%C3%A8","è",$msg); // è
		$msg = str_replace("%C3%88","È",$msg); // È
		$msg = str_replace("%C3%AA","ê",$msg); // ê
		$msg = str_replace("%C3%8A","Ê",$msg); // Ê
		$msg = str_replace("%C3%AD","í",$msg); // í
		$msg = str_replace("%C3%8D","Í",$msg); // Í
		$msg = str_replace("%C3%AC","ì",$msg); // ì
		$msg = str_replace("%C3%8C","Ì",$msg); // Ì
		$msg = str_replace("%C3%AE","î",$msg); // î
		$msg = str_replace("%C3%8E","Î",$msg); // Î
		$msg = str_replace("%C3%B5","õ",$msg); // õ
		$msg = str_replace("%C3%95","Õ",$msg); // Õ
		$msg = str_replace("%C3%B3","ó",$msg); // ó
		$msg = str_replace("%C3%93","Ó",$msg); // Ó
		$msg = str_replace("%C3%B2","ò",$msg); // ò
		$msg = str_replace("%C3%92","Ò",$msg); // Ò
		$msg = str_replace("%C3%B4","ô",$msg); // ô
		$msg = str_replace("%C3%94","Ô",$msg); // Ô
		$msg = str_replace("%C3%BA","ú",$msg); // ú
		$msg = str_replace("%C3%9A","Ú",$msg); // Ú
		$msg = str_replace("%C3%B9","ù",$msg); // ù
		$msg = str_replace("%C3%99","Ù",$msg); // Ù
		$msg = str_replace("%C3%BB","û",$msg); // û
		$msg = str_replace("%C3%9B","Û",$msg); // Û
		$msg = str_replace("%3C","<",$msg); // <
		$msg = str_replace("%3E",">",$msg); // >
		// lista de opções fodas
		$msg = str_replace("__CI__","<center>",$msg);
		$msg = str_replace("__CE__","</center>",$msg);
		$msg = str_replace("__BI__","<b>",$msg);
		$msg = str_replace("__BE__","</b>",$msg);
		$msg = str_replace("__II__","<i>",$msg);
		$msg = str_replace("__IE__","</i>",$msg);
		$msg = str_replace("__N__","<br/>",$msg);
		$msg = str_replace("__n__","<br/>",$msg);
		$msg = str_replace("__SITE__","<a href='http://www.jsasolucao.com.br'>site</a>",$msg); // link do site
		$msg = str_replace("__site__","<a href='http://www.jsasolucao.com.br'>site</a>",$msg); // link do site
		$msg = str_replace("__LOGO__","<a href='http://www.jsasolucao.com.br'><img src='http://www.jsasolucao.com.br/extras/Marca.png' height='100px'/></a>",$msg); // imagem
		$msg = str_replace("__logo__","<a href='http://www.jsasolucao.com.br'><img src='http://www.jsasolucao.com.br/extras/Marca.png' height='100px'/></a>",$msg); // imagem
		$msg = str_replace("__NOME__","<center><a href='http://www.jsasolucao.com.br'><img src='http://www.jsasolucao.com.br/extras/Logo.png' height='100px'/></a></center><br/>",$msg); // Nome
		$msg = str_replace("__nome__","<center><a href='http://www.jsasolucao.com.br'><img src='http://www.jsasolucao.com.br/extras/Logo.png' height='100px'/></a></center><br/>",$msg); // Nome
		$msg = str_replace("__BACK__","<center><a href='http://www.jsasolucao.com.br'><img src='http://www.jsasolucao.com.br/extras/back_mail.png' width='100%'/></a></center>",$msg); // fundo do site
		$msg = str_replace("__back__","<center><a href='http://www.jsasolucao.com.br'><img src='http://www.jsasolucao.com.br/extras/back_mail.png' width='100%'/></a></center>",$msg); // fundo do site
		$cabeca = "MIME-Version: 1.0"."\r\n"."Content-type: text/html; charset=utf-8;"."\r\n";
		if(mail('comercial@orgomaq.com.br',$titulo,$msg,$cabeca,"-f<atendimento@jsasolucao.com.br>")){
			echo "<script>alert(\"EMAIL TESTE ENVIADO PARA comercial@orgomaq.com.br\");</script>";
			echo "<script>window.location.replace('register.php?senha=senhordoscondominiosjsa');</script>";
		}else{
			echo "<script>alert(\"ERRO NO ENVIO DO EMAIL DE TESTE, RECARREGUE A PAGINA E TENTE DE NOVO\");</script>";
			echo "<script>window.location.replace('register.php?senha=senhordoscondominiosjsa');</script>";
		}
	}
	if($_GET["titulo"]!="" and $_GET["msg"]!=""){
		$f = fopen("mails.txt","r");
		$o = 0;
		while(!feof($f)){
			$para = str_replace("<br/>\n","",fgets($f));
			$titulo = str_replace("%20"," ",$_GET["titulo"]);
			$titulo = str_replace("%C3%A7","ç",$titulo); // ç
			$titulo = str_replace("%C3%87","Ç",$titulo); // Ç
			$titulo = str_replace("%C3%A3","ã",$titulo); // ã
			$titulo = str_replace("%C3%83","Ã",$titulo); // Ã
			$titulo = str_replace("%C3%A1","á",$titulo); // á
			$titulo = str_replace("%C3%81","Á",$titulo); // Á
			$titulo = str_replace("%C3%A2","â",$titulo); // â
			$titulo = str_replace("%C3%82","Â",$titulo); // Â
			$titulo = str_replace("%C3%A0","à",$titulo); // à
			$titulo = str_replace("%C3%80","À",$titulo); // À
			$titulo = str_replace("%C3%A9","é",$titulo); // é
			$titulo = str_replace("%C3%89","É",$titulo); // É
			$titulo = str_replace("%C3%A8","è",$titulo); // è
			$titulo = str_replace("%C3%88","È",$titulo); // È
			$titulo = str_replace("%C3%AA","ê",$titulo); // ê
			$titulo = str_replace("%C3%8A","Ê",$titulo); // Ê
			$titulo = str_replace("%C3%AD","í",$titulo); // í
			$titulo = str_replace("%C3%8D","Í",$titulo); // Í
			$titulo = str_replace("%C3%AC","ì",$titulo); // ì
			$titulo = str_replace("%C3%8C","Ì",$titulo); // Ì
			$titulo = str_replace("%C3%AE","î",$titulo); // î
			$titulo = str_replace("%C3%8E","Î",$titulo); // Î
			$titulo = str_replace("%C3%B5","õ",$titulo); // õ
			$titulo = str_replace("%C3%95","Õ",$titulo); // Õ
			$titulo = str_replace("%C3%B3","ó",$titulo); // ó
			$titulo = str_replace("%C3%93","Ó",$titulo); // Ó
			$titulo = str_replace("%C3%B2","ò",$titulo); // ò
			$titulo = str_replace("%C3%92","Ò",$titulo); // Ò
			$titulo = str_replace("%C3%B4","ô",$titulo); // ô
			$titulo = str_replace("%C3%94","Ô",$titulo); // Ô
			$titulo = str_replace("%C3%BA","ú",$titulo); // ú
			$titulo = str_replace("%C3%9A","Ú",$titulo); // Ú
			$titulo = str_replace("%C3%B9","ù",$titulo); // ù
			$titulo = str_replace("%C3%99","Ù",$titulo); // Ù
			$titulo = str_replace("%C3%BB","û",$titulo); // û
			$titulo = str_replace("%C3%9B","Û",$titulo); // Û
			$msg = str_replace("%20"," ",$_GET["msg"]);
			$msg = str_replace("%C3%A7","ç",$msg); // ç
			$msg = str_replace("%C3%87","Ç",$msg); // Ç
			$msg = str_replace("%C3%A3","ã",$msg); // ã
			$msg = str_replace("%C3%83","Ã",$msg); // Ã
			$msg = str_replace("%C3%A1","á",$msg); // á
			$msg = str_replace("%C3%81","Á",$msg); // Á
			$msg = str_replace("%C3%A2","â",$msg); // â
			$msg = str_replace("%C3%82","Â",$msg); // Â
			$msg = str_replace("%C3%A0","à",$msg); // à
			$msg = str_replace("%C3%80","À",$msg); // À
			$msg = str_replace("%C3%A9","é",$msg); // é
			$msg = str_replace("%C3%89","É",$msg); // É
			$msg = str_replace("%C3%A8","è",$msg); // è
			$msg = str_replace("%C3%88","È",$msg); // È
			$msg = str_replace("%C3%AA","ê",$msg); // ê
			$msg = str_replace("%C3%8A","Ê",$msg); // Ê
			$msg = str_replace("%C3%AD","í",$msg); // í
			$msg = str_replace("%C3%8D","Í",$msg); // Í
			$msg = str_replace("%C3%AC","ì",$msg); // ì
			$msg = str_replace("%C3%8C","Ì",$msg); // Ì
			$msg = str_replace("%C3%AE","î",$msg); // î
			$msg = str_replace("%C3%8E","Î",$msg); // Î
			$msg = str_replace("%C3%B5","õ",$msg); // õ
			$msg = str_replace("%C3%95","Õ",$msg); // Õ
			$msg = str_replace("%C3%B3","ó",$msg); // ó
			$msg = str_replace("%C3%93","Ó",$msg); // Ó
			$msg = str_replace("%C3%B2","ò",$msg); // ò
			$msg = str_replace("%C3%92","Ò",$msg); // Ò
			$msg = str_replace("%C3%B4","ô",$msg); // ô
			$msg = str_replace("%C3%94","Ô",$msg); // Ô
			$msg = str_replace("%C3%BA","ú",$msg); // ú
			$msg = str_replace("%C3%9A","Ú",$msg); // Ú
			$msg = str_replace("%C3%B9","ù",$msg); // ù
			$msg = str_replace("%C3%99","Ù",$msg); // Ù
			$msg = str_replace("%C3%BB","û",$msg); // û
			$msg = str_replace("%C3%9B","Û",$msg); // Û
			$msg = str_replace("%3C","<",$msg); // <
			$msg = str_replace("%3E",">",$msg); // >
			// lista de opções fodas
			$msg = str_replace("__CI__","<center>",$msg);
			$msg = str_replace("__CE__","</center>",$msg);
			$msg = str_replace("__BI__","<b>",$msg);
			$msg = str_replace("__BE__","</b>",$msg);
			$msg = str_replace("__II__","<i>",$msg);
			$msg = str_replace("__IE__","</i>",$msg);
			$msg = str_replace("__N__","<br/>",$msg);
			$msg = str_replace("__n__","<br/>",$msg);
			$msg = str_replace("__SITE__","<a href='http://www.jsasolucao.com.br'>site</a>",$msg); // link do site
			$msg = str_replace("__site__","<a href='http://www.jsasolucao.com.br'>site</a>",$msg); // link do site
			$msg = str_replace("__LOGO__","<a href='http://www.jsasolucao.com.br'><img src='http://www.jsasolucao.com.br/extras/Marca.png' height='100px'/></a>",$msg); // imagem
			$msg = str_replace("__logo__","<a href='http://www.jsasolucao.com.br'><img src='http://www.jsasolucao.com.br/extras/Marca.png' height='100px'/></a>",$msg); // imagem
			$msg = str_replace("__NOME__","<center><a href='http://www.jsasolucao.com.br'><img src='http://www.jsasolucao.com.br/extras/Logo.png' height='100px'/></a></center><br/>",$msg); // Nome
			$msg = str_replace("__nome__","<center><a href='http://www.jsasolucao.com.br'><img src='http://www.jsasolucao.com.br/extras/Logo.png' height='100px'/></a></center><br/>",$msg); // Nome
			$msg = str_replace("__BACK__","<center><a href='http://www.jsasolucao.com.br'><img src='http://www.jsasolucao.com.br/extras/back_mail.png' width='100%'/></a></center>",$msg); // fundo do site
			$msg = str_replace("__back__","<center><a href='http://www.jsasolucao.com.br'><img src='http://www.jsasolucao.com.br/extras/back_mail.png' width='100%'/></a></center>",$msg); // fundo do site
			$cabeca = "MIME-Version: 1.0"."\r\n"."Content-type: text/html; charset=utf-8;"."\r\n";
			if(mail($para,$titulo,$msg,$cabeca,"-f<atendimento@jsasolucao.com.br>")){
				$o = $o + 1;
			}
		}
		echo "<script>alert('".$o." Emails foram Enviados');</script>";
		fclose($f);
		echo "<script>window.location.replace('register.php?senha=senhordoscondominiosjsa');</script>";
	}
}

?>

<!DOCTYPE html>

<html lang="pt">

<head>

<meta charset="UTF-8"/>

<title>JSA CONJUNTO</title>

<link rel="shortcut icon" href="Marca.png"/>

<style type="text/css">

</style>

<script type="text/javascript" src="jquery.js"></script>

<script type="text/javascript">

document.onselectstart=new Function ("return false")
document.oncontextmenu=new Function ("return false")

if (window.sidebar){
document.onmousedown=disableselect
document.onclick=reEnable
}

function formulario(num){
	if(num==1){ // enviar email
		titulo = document.getElementById("titulo").value;
		msg = document.getElementById("msg").value;
		if(titulo!=""){
			if(msg!=""){
				<?php
				if($senha=="senhordoscondominiosjsa"){
					echo "window.location=\"http://www.jsasolucao.com.br/extras/register.php?senha=senhordoscondominiosjsa&titulo=\"+titulo+\"&msg=\"+msg;";
				}
				?>
			}else{
				alert("PRECISA TER MENSAGEM");
			}
		}else{
			alert("Os EMAILS PRECISAM TER UM TITULO");
		}
	}
	if(num==2){ // adicionar email
		mail = document.getElementById("mail").value;
		<?php
			if($senha=="senhordoscondominiosjsa"){
				echo "if(mail!=\"\"){";
				echo "window.location=\"http://www.jsasolucao.com.br/extras/register.php?senha=senhordoscondominiosjsa&mail=\"+mail;";
				echo "}";
			}
		?>
	}
	if(num==3){ // deletar email
		mail = document.getElementById("mail").value;
		<?php
			if($senha=="senhordoscondominiosjsa"){
				echo "if(mail!=\"\"){";
				echo "window.location=\"http://www.jsasolucao.com.br/extras/register.php?senha=senhordoscondominiosjsa&dmail=\"+mail;";
				echo "}";
			}
		?>
	}
	if(num==4){ // testar email
		titulo = document.getElementById("titulo").value;
		msg = document.getElementById("msg").value;
		if(titulo!=""){
			if(msg!=""){
				<?php
				if($senha=="senhordoscondominiosjsa"){
					echo "window.location=\"http://www.jsasolucao.com.br/extras/register.php?senha=senhordoscondominiosjsa&tituloT=\"+titulo+\"&msgT=\"+msg;";
				}
				?>
			}else{
				alert("PRECISA TER MENSAGEM");
			}
		}else{
			alert("Os EMAILS PRECISAM TER UM TITULO");
		}
	}
}

function atualizar(){
	<?php
		if($senha=="senhordoscondominiosjsa"){
			echo '$("#corpo").load("mails.txt");';
			echo 'setTimeout(function(){atualizar();},10000);';
			echo 'mails = $("#corpo").html();';
			echo 'mails = mails.split("<br>");';
			echo '$("#quant").html(mails.length);';
		}
	?>
}

</script>

</head>

<body onload="atualizar()">

<!--
EM BREVE UMA ADMINISTRAÇÃO FODA DO SERVIDOR:
- Enviar Emails para os Usuarios de forma dinamica
- Adicionar ou Deletar Emails ao Banco de Dados
- Visualizar lista de Emails do Banco de Dados
- Pesquisar Emails no Banco de Dados
-->

<!-- o que funciona por enquanto:
h1, code, i, b, 
-->

<div style="position:fixed;top:0px;left:0px;right:0px;bottom:0px;">
	<table height="100%" width="100%" cellpadding="0px" cellspacing="0px" border="0">
		<tr height="60px">
			<td colspan="2">
				<img src="Marca.png" height="45px" style="float:left;"/><font style="font-size:40px;">ADMINISTRADOR DE EMAILS</font>
			</td>
		</tr>
		<tr>
			<td width="50%" align="center">
				<fieldset style="width:90%;border:1px solid grey;border-radius:3px;text-align:left;">
					<legend><b>INSTRUÇÕES DE USO:</b></legend>
					<code>
						<b>__NOME__</b> - Para adicionar a Logo da empresa no centro<br/>
						<b>__SITE__</b> - Para adicionar um link para o site<br/>
						<b>__LOGO__</b> - Para adicionar a LOGO da JSA<br/>
						<b>__BACK__</b> - Para adicionar o final bonito<br/>
						<b>__CI__</b>texto<b>__CE__</b> - Para centralizar texto<br/>
						<b>__BI__</b>texto<b>__BE__</b> - Para usar o texto em <b>negrito</b><br/>
						<b>__II__</b>texto<b>__IE__</b> - Para usar o texto em <i>italico</i><br/>
						<b>__N__</b> - Para pular para a linha de baixo<br/>
					</code>
				</fieldset>
				<br/>
				<fieldset style="width:90%;border:1px solid grey;border-radius:3px;text-align:left;">
					<legend><b>ENVIAR EMAIL:</b></legend>
					<input id="titulo" name="titulo" placeholder="TITULO" style="width:100%;border:1px solid lightgrey;border-radius:2px;" autocomplete="off" type="text"/><br/>
					<textarea id="msg" name="msg" placeholder="MENSAGEM" style="height:150px;width:100%;border:1px solid lightgrey;border-radius:2px;"></textarea><br/>
					<button onmouseup="formulario(1)">ENVIAR PARA TODOS</button>
					<button onmouseup="formulario(4)">TESTAR EMAIL</button>
				</fieldset>
			</td>
			<td width="50%" align="center">
				<fieldset style="width:90%;padding:5px;border:1px solid grey;border-radius:3px;text-align:left;">
					<legend><b>ADICIONAR EMAILS:</b></legend>
					<input type="text" id="mail" placeholder="E-MAIL" style="height:25px;width:99%;border:1px solid lightgrey;border-radius:2px;" autocomplete="off" name="mail"/><br/>
					<button onmouseup="formulario(2)">ADICIONAR</button>
					<button onmouseup="document.getElementById('mail').value='';">LIMPAR</button>
					<button onmouseup="formulario(3)">DELETAR</button>
					total:<font id="quant"></font>
				</fieldset>
				<br/>
				<div style="height:400px;width:90%;padding:5px;border:1px solid grey;border-radius:3px;overflow:auto;font-family:monospace;" id="corpo" align="left">
				</div>
			</td>
		</tr>
	</table>
</div>

</body>

</html>
