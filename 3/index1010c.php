<?php
session_start();

// Verifica se os dados do formulário foram enviados
if(isset($_GET["Nick"]) && isset($_GET["Idade"])) {
    // Obtém os dados do formulário
    $nick = $_GET["Nick"];
    $idade = $_GET["Idade"];

    // Gera uma nova linha para a tabela
    $dobrasPrincipais = ["Água", "Terra", "Fogo", "Ar"];
    $dobraPrincipal = $dobrasPrincipais[array_rand($dobrasPrincipais)];

    $subDobras = [
        "Água" => ["Nenhuma", "Sangue", "Plantas", "Veneno"],
        "Terra" => ["Nenhuma", "Magma", "Metal", "Areia", "Cristal"],
        "Fogo" => ["Nenhuma", "Relâmpago", "Fogo Azul", "Combustão"],
        "Ar" => ["Nenhuma", "Voo", "Espírito", "Som"]
    ];

    $subDobra = $subDobras[$dobraPrincipal][array_rand($subDobras[$dobraPrincipal])];

    // Adiciona o novo jogador à sessão
    $_SESSION['players'][] = array(
        'nick' => $nick,
        'idade' => $idade,
        'dobraPrincipal' => $dobraPrincipal,
        'subDobra' => $subDobra
    );
}
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

      <p>Clique <a href="index1010a.php">aqui</a> para voltar a página inicial</p>

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

      <form action="index1010c.php" method="GET">
        Nick: <input name="Nick"/>
        Idade: <input name="Idade"/>
        <button>Salvar</button>
      </form>

      
          <br/>

      <p><b><i>Tabela de Jogadores</i></b></p>
      <br/>
      <table border="1">
        <caption><b><i>Tabela de Jogadores</i></b></caption>
        <thead>
        <tr>
          <th><b>Nick Name</b></th>
          <th><b>Idade</b></th>
          <th><b>Dobra Principal</b></th>
          <th><b>Sub-Dobra</b></th>
        </tr>
      </thead>
         <?php
      // Exibe todos os jogadores da sessão
      if(isset($_SESSION['players'])) {
          foreach($_SESSION['players'] as $player) {
              echo "<tr><td>".htmlspecialchars($player['nick'])."</td><td>".htmlspecialchars($player['idade'])."</td><td>".htmlspecialchars($player['dobraPrincipal'])."</td><td>".htmlspecialchars($player['subDobra'])."</td></tr>";
          }
      }
      ?>
        
      </table>

    </body>
    
  </html>