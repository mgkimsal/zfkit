var superfundjson = {"center":[-104.26714999999999,32.0361,5],"id":"tmcw.superfund_48b16e","scheme":"xyz","basename":"superfund_48b16e.mbtiles","filesize":230178816,"bounds":[-175.9859,-9.9898,-32.5484,74.062],"minzoom":0,"maxzoom":11,"name":"Superfund","description":"A Map of Superfund Sites in the USA","legend":"<a href='http://www.epa.gov/enviro/geo_data.html'>EPA</a> public data","version":"1.0.0","template":"{{#__teaser__}}<h2>{{{fac_name}}}</h2>\n<h3>{{{loc_city}}}, {{{loc_state}}}</h3>\nEPA ID: <a href='http://oaspub.epa.gov/enviro/fii_query_dtl.disp_program_facility?p_registry_id={{{reg_id}}}'>{{{reg_id}}}</a>{{/__teaser__}}{{#__full__}}<h2>{{{fac_name}}}</h2>\n<h3>{{{loc_city}}}, {{{loc_state}}}</h3>\nEPA ID: <a href='http://oaspub.epa.gov/enviro/fii_query_dtl.disp_program_facility?p_registry_id={{{reg_id}}}'>{{{reg_id}}}</a>{{/__full__}}{{#__location__}}{{/__location__}}","grids":["http://a.tiles.mapbox.com/v3/tmcw.superfund_48b16e/{z}/{x}/{y}.grid.json","http://b.tiles.mapbox.com/v3/tmcw.superfund_48b16e/{z}/{x}/{y}.grid.json","http://c.tiles.mapbox.com/v3/tmcw.superfund_48b16e/{z}/{x}/{y}.grid.json","http://d.tiles.mapbox.com/v3/tmcw.superfund_48b16e/{z}/{x}/{y}.grid.json"],"tiles":["http://a.tiles.mapbox.com/v3/tmcw.superfund_48b16e/{z}/{x}/{y}.png","http://b.tiles.mapbox.com/v3/tmcw.superfund_48b16e/{z}/{x}/{y}.png","http://c.tiles.mapbox.com/v3/tmcw.superfund_48b16e/{z}/{x}/{y}.png","http://d.tiles.mapbox.com/v3/tmcw.superfund_48b16e/{z}/{x}/{y}.png"],"download":"http://a.tiles.mapbox.com/v3/tmcw.superfund_48b16e.mbtiles","webpage":"http://tiles.mapbox.com/tmcw/map/superfund_48b16e"};

describe('wax interaction', function() {
    var map;

    beforeEach(function() {
        callbackResult = null;
        var div = document.createElement('div');
        div.style.width = '400px';
        div.style.height = '400px';

        map = new com.modestmaps.Map(div, new com.modestmaps.TemplatedMapProvider(
            'http://{S}tile.openstreetmap.org/{Z}/{X}/{Y}.png', ['a.']));
        map.setCenterZoom(new com.modestmaps.Location(37.811530, -122.2666097), 10);
        pointselector = wax.mm.pointselector(map, {}, {
            callback: function() {
                callbackResult = arguments;
            }
        });
    });

    it('can be added to a map', function() {
        wax.mm.interaction()
            .map(map)
            .tilejson(superfundjson);
    });
});
