# Design Accessible

[![Design Accessible](https://raw.githubusercontent.com/astranchet/design-accessible/main/content/og.png)](https://design-accessible.fr/)

[Design Accessible](https://design-accessible.fr/) rassemble des ressources sur l'accessibilité pour les designers : 
- 👉 Qu'est-ce que l'accessibilité ?
- ✅ La checklist du designer
- ✨ Plus de 100 ressources (typo, recherche, couleurs, dark mode...)

Que vous soyez UX, UI, UX Researcher, UX Writer, ou même dev ou chef de projet curieux, [Design Accessible](https://design-accessible.fr/) vous permettra de trouver des ressources utiles, actionnables et en français pour votre projet.

## Bugs et améliorations

Si vous trouvez des bugs ou si vous avez des demandes de fonctionnalités, vous pouvez ouvrir une issue sur GitHub.

Une seule personne travaille sur ce projet. Les fonctionnalités seront donc ajoutées au fil de l'eau. Les améliorations de l'accessibilité sont prioritaires. Les points suivants sont déjà sur la feuille de route :

* Filtres multiples
* Recherche

## Ressources

Si vous voyez une ressource qui ne devrait pas être ici ou si vous voulez en ajouter une, vous pouvez : 
- Ouvrir une nouvelle issue.
- Envoyer un email à `contributions / arobase / design-accessible.fr`.

## Lancer le projet en local

### Démarrer le serveur

```
php -S localhost:8000
sass --watch assets/sass/main.scss:assets/css/main.css
```

### Importer des ressources

Un script permet d'importer des ressources depuis un tableau Airtable 

```
python3 bin/fetch_airtable.py > content/ressources/ressources.txt
```

### Documentation

Le projet tourne avec [Kirby](https://getkirby.com) :
- [Documentation](https://getkirby.com/docs/guide) – Documentation officielle, référence et cookbooks.

## À propos de l'autrice

Anne-Sophie Tranchet ([@annso_](https://twitter.com/annso_)) est UX/UI Designer indépendante et engagée. Elle est spécialisée dans le design de service public. Elle conçoit des produits inclusifs et accessibles à toutes et tous.

Elle a conçu [Design Accessible](https://design-accessible.fr/) en mai 2020, après de nombreuses heures de lecture, de synthèse et de rédaction. Initialement, les ressources étaient publiées sur son [blog](https://blog.hello-bokeh.fr/).