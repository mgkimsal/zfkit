describe('google maps interaction', function() {
    var map;
    var tilejson = {
      tilejson: '1.0.0',
      scheme: 'tms',
      tiles: ['http://a.tiles.mapbox.com/mapbox/1.0.0/geography-class/{z}/{x}/{y}.png'],
      grids: ['http://a.tiles.mapbox.com/mapbox/1.0.0/geography-class/{z}/{x}/{y}.grid.json'],
      formatter: function(options, data) { return data.NAME; }
    };

    beforeEach(function() {
        callbackResult = null;
        var div = document.createElement('div');
        div.style.width = '400px';
        div.style.height = '400px';

        map = new google.maps.Map(div, {
            center: new google.maps.LatLng(0, 0),
            disableDefaultUI: true,
            zoom: 1,
            mapTypeId: google.maps.MapTypeId.ROADMAP });
        map.mapTypes.set('mb', new wax.g.connector(tilejson));
        map.setMapTypeId('mb');
    });

    it('can be added to a map', function() {
        wax.g.interaction(map, tilejson);
    });
});
