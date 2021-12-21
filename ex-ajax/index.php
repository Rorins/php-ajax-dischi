<!-- Stampare a schermo i dischi musicali (file allegato) in due modi diversi:
- Utilizzando Html, JS, Vue e Axios (CDN), PHP: Al caricamento della pagina axios chiederà attraverso una chiamata API i dischi a file PHP e li stamperà attraverso Vue. -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
    <!--VUE JS-->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
</head>
<body>

<div id="app">
<?php //HEADER
 include_once __DIR__ . '/partials/templates/header.php'; ?>


<main>

<div class="container">
<ul>
    <li v-for="(element,index) in disks" :key="` element-${index}` " >
    <img class="poster" :src="element.poster" alt="element.title">
        <h4>{{element.title}}</h4>
        <h4>{{element.author}}</h4>
        <h4>{{element.year}}</h4>
        <h4>{{element.genre}}</h4>
    </li>
</ul>
</div>

</main>


</div>
    
<!--JS-->
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="./js/main.js"></script>

</body>
</html>