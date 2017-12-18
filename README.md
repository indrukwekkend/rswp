[![Build Status](https://travis-ci.org/odil-io/rswp.svg?branch=master)](https://travis-ci.org/odil-io/rswp)
[![Dependency Status](https://img.shields.io/david/odil-io/rswp.svg)](https://david-dm.org/odil-io/rswp#info=Dependencies)

# Het RSWP Thema

### Snel Start

Zorg ervoor dat AMPPS een domein heeft draaien op `rswp.dev`.
Dit is nodig omdat `gulp` is ingesteld op `http://rswp.dev/`. Verander je dit dan sloop je het voor andere contributors van dit project.

Zorg ervoor dat het domein op AMPPS  WordPress 4.8 of hoger heeft geinstalleerd.

Ga naar de map van het project (normaal: `/AMPPS-ROOT/www/rswp.dev/wp-content/themes/rswp`)

In deze map voer je de volgende commandos uit:

1. `npm install` voor de benodigde NPM pakketten
2. `composer install` voor de `vendor` map plus benodigde PHP pakketten
3. `bower install` voor alle Bower paketten
4. `gulp` om het thema werkbaar te maken
5. `gulp watch` om de default browser te starten op `localhost:3000`

Optioneel, gebruik `sh start` om bovengenoemde commandos geautomatiseerd uit te voeren.

Nu start je browser op `localhost:3000` welke gelinkt is op `http://rswp.dev`.

### Vereisten

#### Systeem
 * AMPPS 3.6 of hoger
 * PHP 7 of hoger

#### Plugins
* [Advanced Custom Fields](https://www.advancedcustomfields.com/)
* [Advanced Custom Fields: Post2Post Add-on](https://wordpress.org/plugins/post-2-post-for-acf/)
* [Advanced Custom Fields: Gravityforms Add-on](https://wordpress.org/plugins/acf-gravityforms-add-on/)
* [Gravityforms](http://gravityforms.com/)


### Ontwikkelaars Info

Dit thema gebruikt:
 - Roots/Sage 8.5.3
 - Bootstrap 4.0.0-beta
 - [Bootstrap Navwalker](https://github.com/wp-bootstrap/wp-bootstrap-navwalker)
 - [TGMPA](https://github.com/TGMPA/TGM-Plugin-Activation/)
 - [Cuztom](http://github.com/gizburdt/cuztom/)
