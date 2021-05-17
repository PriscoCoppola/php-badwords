<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BadWords</title>
</head>
<body>
    
    <!-- PARAGRAPH -->
    <?php 
    $paragraph = 'Chiunque smetta di imparare è vecchio, che abbia 20 o 80 anni. Chiunque continua ad imparare resta giovane. La più grande cosa nella vita è mantenere la propria mente giovane.';
    ?>
    
     <p><?php echo $paragraph; ?></p>

    <!-- LENGTH PARAGRAPH -->
     <p>La lunghezza del testo del paragrafo è <?php echo strlen($paragraph) ?></p>

    <!-- PARAGRAPH CENSURED -->
     <?php
     $text = $_GET['badword'];
     $replaced = str_replace($text, '***', $paragraph);
     ?>
     
     <p><?php echo $replaced; ?></p>
</body>
</html>