# Exercice 7

Faire en sort que lorsque l'on clique sur un film, une page ou un popup s'ouvre avec les détails de celui-ci.

Indices :

1. Créer un lien dans la structure html de `films.php`. Pensez aux paramètre GET
##### exemple :
```html
<a href='film.php?film=Les%20herbes%20folle'></a>
```

2. Une fois sur votre nouvelle page, récupérez le film voulu (que vous aurez passé en paramètre GET par exemple) puis faites un appel API
##### exemple :
```php
$url = 'https://api.themoviedb.org/3/search/movie?api_key=625b3e1220c0fca7c7ac7f6fcca786ac&language=fr-FR&query=' . $_GET['film'];
$apiResult = file_get_contents($url);
$decodedResult = json_decode($apiResult)->results[0];
```

3. Une fois le résulta obtenu, affichez les infos dynamiquement sur la page
##### exemple :
```html
<div class='detailFilm'>
    <h2><?=$decodedResult->title?></h2>
    <p><?=$decodedResult->overview?></p>
</div>
```