<?php
error_reporting(E_WARNING);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>P&aacute;gina de Autentica&ccedil;&atilde;o</title>
<style type="text/css">
.div_principal
  {
  font-family: Verdana, Arial, Helvetica, sans-serif;
  font-size: 12px;
  text-align:center;
  border:3px solid #1C1C1C;
  background-color: #E0FFFF;
  height: 360px;
  width: 400px;
  border-radius: 10px;
  }

.div_2
  {
  text-align:center;
  border:3px solid #000000;
  background-color: #708090;
  height: 140px;
  width: 230px;
  border-radius: 10px;
  }

.btnPadrao
  {
  font-size:10px;
    font-weight:bold;
    color:white;
    background:#3A5FCD;
    border: thin outset #FFFFFF;
    width:80px;
    height:19px;
  border-radius:5px;
  }
</style>
</head>
<body>
  <form method="post" action="valida.php">
  <center>
  <div class="div_principal">
    <img src="cadeado_azul.jpg" width="53" height="53" style="margin-top: 40px;">
    <br>
    <br>
    <center>
    Digite o Usu&aacute;rio e a Senha
    <div class="div_2">
      <br>
      <div style="text-align:left;margin-left:35px;">
        Usu&aacute;rio<br>
        <input name="llllll" type="text" id="llllll" maxlength="30" style="width:150px;">
      </div>
      <br>
      <div style="text-align:left;margin-left:35px;">
        Senha<br>
        <input name="ssssss" type="password" id="ssssss" maxlength="30" style="width:150px;">
      </div>
      <br>
      <input type="submit" name="btn_entrar" id="btn_entrar" value="Entrar" class="btnPadrao">
    </div>
  <br>
  <br>
  <br>
  <span>Site de Estudo</span>
  </div>
  </form>
</body>
</html>
