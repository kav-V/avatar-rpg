<?php
// Inicia a sessão para acessar ou criar variáveis de sessão
session_start();

// Limpa os dados da sessão relacionados aos jogadores
unset($_SESSION['players']);
?>

<!DOCTYPE html>
  <html lang="pt">
    <head>
      <meta charset="utf-8">
       <title>RPG Universo Avatar</title>
        <link rel="stylesheet" type="text/css" href="styles.css">    
    </head>

    <body>
    
    <h1>Avatar</h1>

    <p><b><i>Bem Vindo a Seleção de Drobras</i></b></p>

    <br/>

    <div class="table-container">
    <table border="1">
       <caption><b><i>Tabela de Elementos</i></b></caption>
       <thead>
       <tr>
        <th><b>Dobra Principal</b></td>
        <th><b>SubDobra 1</b></th>
        <th><b>SubDobra 2</b></th>
        <th><b>SubDobra 3</b></th>
        <th><b>SubDobra 4</b></th>
      </tr>
    </thead>
      <tr>
        <td><b>Dobra de Água</b></td>
        <td>Dobra de Sangue</td>
        <td>Dobra de Plantas</td>
        <td>Dobra de Veneno</td>
      </tr>
      <tr>
        <td><b>Dobra de Terra</b></td>
        <td>Dobra de Magma</td>
        <td>Dobra de Metal</td>
        <td>Dobra de Areia</td>
        <td>Dobra de Cristal</td>
      </tr>
      <tr>
        <td><b>Dobra de Fogo</b></td>
        <td>Dobra de Relâmpago</td>
        <td>Fogo Azul</td>
        <td>Combustão</td>
      </tr>
      <tr>
        <td><b>Dobra de Ar</b></td>
        <td>Dobra de Voo</td>
        <td>Dobra de Espírito</td>
        <td>Dobra de Som</td>
      </tr>
    </table>

    <br/>

    <form action="index1010b.php"> <!-- encaminha para o arquivo entre aspas -->
      Nick: <input name="Nick"/>
      Idade: <input name="Idade"/>
      <button>Gerar Dobra</button>
    </form>

    </body>

  </html>
