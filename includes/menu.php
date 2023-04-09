<ul>
<?php
$paginas =[
    ['nombre'=>"Inicio",   'url'=>"index"],
    ['nombre'=>"Página 2", 'url'=>"pagina-2"],
    ['nombre'=>"Página 3", 'url'=>"pagina-3"],
    ['nombre'=>"Página 4", 'url'=>"pagina-4"]
]; 

for ($i = 0; $i<=count($paginas)-1; $i++) {

    echo '<li><a href="'.$paginas[$i]['url'].'.php">'.$paginas[$i]['nombre'].'</a></li>';

}
?>
</ul>