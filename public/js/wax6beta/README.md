# Wax

Tools for improving web maps. The centerpiece of the code is a client implementation of the [MBTiles interaction specification](https://github.com/mapbox/mbtiles-spec).

For full documentation of supported mapping APIs and how to use Wax see http://mapbox.github.com/wax.

## Versions

There are three current development branches of Wax:

* `master` is 6.x
* 5.x supports **Modest Maps 1.0.0-alpha2 and later**, but supports the same API as 4.x
* 4.x supports **Modest Maps 0.x**, older versions of Modest Maps

To find more detail of what has changed in each version, consult `CHANGELOG.md`.

## Compatibility

* [Google Maps API v3](https://developers.google.com/maps/)
* [Leaflet 0.x.x](http://leaflet.cloudmade.com/)
* [Modest Maps 1.x.x](http://modestmaps.com/)
* [OpenLayers 2.11](http://openlayers.org/)
* [ESRI ArcGIS API 2.8](http://help.arcgis.com/en/webapi/javascript/arcgis/)

## Building Wax

For end users, a minified library is already provided in `dist/`.

But for developers you can rebuild a minified library by running:

    npm install --dev
    make

## Includes

Wax currently includes three externals:

* [reqwest](https://github.com/ded/reqwest) (MIT)
* [mustache.js](https://github.com/janl/mustache.js) (MIT)
* [html-sanitizer from Google Caja](http://code.google.com/p/google-caja/source/browse/trunk/src/com/google/caja/plugin/html-sanitizer.js) (Apache)

## Authors

- Tom MacWright (tmcw)
- Young Hahn (yhahn)
- Will White (willwhite)
