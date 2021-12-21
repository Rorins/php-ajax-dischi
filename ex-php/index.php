<!-- Stampare a schermo i dischi musicali (file allegato) in due modi diversi:
- Solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi. Teniamo i dati dei dischi in un file separato.-->

<?php //DATABASE
require_once __DIR__ . '/partials/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php foreach($database as $element){?>
    <h4><?php echo $element['title'];?></h4>
    <h4><?php echo $element['author'];?></h4>
    <h4><?php echo $element['year'];?></h4>
    <img src="<?php echo $element['poster'];?>" alt="">
    <h4><?php echo $element['genre'];?></h4>
<?php } ?>

</body>
</html>