# gestion_disque

# Test technique pour le poste de Stagiaire

##### Description du projet

Créer une application de gestion de disque.

Vous pourrez voir le rendu via le lien :http://fandd.fr/testStage/public/

****NB****:
- Le projet se trouve dans le dossier testStage
 

### ****Outils et Framework utilisés****

<table>

<tbody>

<tr>

<td align="center" valign="middle">

<a href="https://cli.vuejs.org" target="_blank">

<img width="100px" src="https://router.vuejs.org/logo.png">

</a>

</td>

<td align="center" valign="middle">

<a href="https://laravel.com" target="_blank">

<img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a>

</td>

<a href="https://getbootstrap.com/" target="_blank">

<p> Bootstrap </p>

</a>

</td>

</tr>

</tbody>

</table>

  

### Comment lancer le projet ?

  
Ce projet nécessite préalablement l'installation de Node.JS, Npm et Composer:


| NodeJS + Npm | [https://www.npmjs.com/get-npm](https://www.npmjs.com/get-npm "https://www.npmjs.com/get-npm") | 
| Composer | [https://getcomposer.org/download/](https://getcomposer.org/download/ "https://getcomposer.org/download/") | 


  

##### Ouvrez le projet dans un éditeur de texte

Mettez vous à la racine du projet via une ligne de commande et exécuter les commandes suivantes.

- Installer les dépendances



```sh

composer install

```


```sh

npm install

```


- Créer une base de données mysql et nommez là testStage ( le fichier .sql se trouve à la racine du dépôt )



- Nettoyer le projet

```sh

php artisan cache:clear

```

```sh

php artisan view:clear

```

```sh

php artisan config:clear

```




- Démarrer le serveur

```sh

php artisan serve

```



#### Contributeur

- Blé Esolin
