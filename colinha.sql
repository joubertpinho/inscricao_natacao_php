<?php 

if(empty($nome))
 {
	$_SESSION['mensagem-de-erro'] = "O nome não pode ser vazio , por favor preencha  novamente ";
	header("Location: index.php");
   
}
else if(strlen($nome) < 4 )
 {
	$_SESSION['mensagem-de-erro'] = "O nome deve conter mais de 4
	letras ";
	header("Location: index.php");
    return;
}
else if(strlen($nome) > 30 )
 {
	$_SESSION['mensagem-de-erro'] = "O nome deve conter menos de 30 letras ";
	header("Location: index.php");
    return;
}

else if(!is_numeric($idade))
{
  	$_SESSION['mensagem-de-erro'] = "Informe um número para idade ";
	header("Location: index.php");
    return;    
}



