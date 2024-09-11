<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.notas{
            height: 60px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <?php 
       // Pegando dados do formulário utilizando o metódo get
       $saque = $_REQUEST['saque'] ?? 0;
       // se eu não passar nada o meu saque é de zero 

    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="saque"> Qual valor você deseja sacar? (R$)
        <sup>*</sup></label>
        <input type="number" name="saque" id="saque"
        step="5" required value="<?=$saque?>">
        <p style="font-size: 0.8em"><sup>*</sup>Notas disponíveis: R$100, R$10 e R$5<p>
        <input type="submit" value="Sacar">   
    
        </form>
        
    </main>
    <?php 
    $resto = $saque;
    //Saque de R$100
    $tot100 =floor($resto / 100);
    // floor função para arredondamento pra baixo exemplo se eu tiver 9.2 ele vai pegar 9
    $resto = $resto %  100;
   
   
    // Saque de R$50
    $tot50 = floor($resto / 50);
    $resto = $resto % 50;
   
    // Saque de R$10 
    $tot10 = floor($resto / 10);
    $resto = $resto % 10;
   
    // Saque de R$5
    $tot5 = floor($resto / 5);
    $resto = $resto % 5;    
      
    // toda nota que for da classe nota/ criar um style local somente pra classe nota 
    //
    ?>
<section>
    <h2>Saque de R$<?=number_format($saque, 2,",", ".")?> realizado</h2>
    <p>O caixa eletrÔnico vai te entregar as seguintes notas:</p>
    <ul>
        <li><img src="imagens/100-reais.jpg" alt="Notas de 100" class="notas"> x  <?=$tot100?></li>
        <li><img src="imagens/50-reais.jpg" alt="Notas de 100" class="notas">  x  <?=$tot50?></li>
        <li><img src="imagens/10-reais.jpg" alt="Notas de 100" class="notas">  x  <?=$tot10?></li>
        <li><img src="imagens/5-reais.jpg" alt="Notas de 100" class="notas">   x  <?=$tot5?></li>
    </ul>
</section>   
</body>
</html>