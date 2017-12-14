[![Build Status](https://travis-ci.org/newfishdev/creatego.svg?branch=master)](https://travis-ci.org/newfishdev/creatego)
[![Dependency Status](https://img.shields.io/david/newfishdev/creatego.svg)](https://david-dm.org/newfishdev/creatego#info=Dependencies)

# Het CreateGo Thema

Dit is het hoofd thema voor het gebruik in CreateGo websites.
Zie de releases tab voor versies die gereed zijn voor productie.

### Snel Start

Zorg ervoor dat AMPPS een domein heeft draaien op `creatego.dev`.
Dit is nodig omdat `gulp` is ingesteld op `http://creatego.dev/`. Verander je dit dan sloop je het voor andere contributors van dit project.

Zorg ervoor dat het domein op AMPPS  WordPress 4.8 of hoger heeft geinstalleerd.

Ga naar de map van het project (normaal: `/AMPPS-ROOT/www/creatego.dev/wp-content/themes/creatego`)

In deze map voer je de volgende commandos uit:

1. `npm install` voor de benodigde NPM pakketten
2. `composer install` voor de `vendor` map plus benodigde PHP pakketten
3. `bower install` voor alle Bower paketten
4. `gulp` om het thema werkbaar te maken
5. `gulp watch` om de default browser te starten op `localhost:3000`

Nu start je browser op `localhost:3000` welke gelinkt is op `http://creatego.dev`.

### Vereisten

#### Systeem
 * AMPPS 3.6 of hoger
 * PHP 7 of hoger

#### Plugins
* [Advanced Custom Fields / ACF](https://www.advancedcustomfields.com/)
* [Gravity Forms](http://gravityforms.com/)


### Ontwikkelaars Info

Dit thema gebruikt:
 - Roots/Sage 8.5.3
 - Bootstrap 4.0.0-beta
