describe('pointselector', function() {
    var map, callbackResult, pointselector;

    beforeEach(function() {
        callbackResult = null;
        var div = document.createElement('div');
        div.style.width = '400px';
        div.style.height = '400px';

        map = new MM.Map(div, new MM.TemplatedMapProvider(
            'http://{S}tile.openstreetmap.org/{Z}/{X}/{Y}.png', ['a.']));
        map.setCenterZoom(new MM.Location(37.811530, -122.2666097), 10);
        pointselector = wax.mm.pointselector(map, {}, {
            callback: function() {
                callbackResult = arguments;
            }
        });
    });

    it('can add locations', function() {
        runs(function() {
            pointselector.addLocation(
                new MM.Location(37.811530, -122.2666097));
        });
        waits(100);
        runs(function() {
            expect(callbackResult.length).toEqual(1);
            expect(callbackResult[0][0].lat).toEqual(37.811530);
            expect(callbackResult[0][0].lon).toEqual(-122.2666097);
        });
    });

    it('can add and remove locations', function() {
        runs(function() {
            var l = new com.modestmaps.Location(37.811530, -122.2666097);
            pointselector.addLocation(l);
            pointselector.deleteLocation(l);
        });
        waits(100);
        runs(function() {
            expect(callbackResult.length).toEqual(1);
            expect(callbackResult[0].length).toEqual(0);
        });
    });

    it('can be removed', function() {
        for (var i = 0; i < 10; i++) {
            var l = new com.modestmaps.Location(i, i);
            pointselector.addLocation(l);
        }
        pointselector.remove(map);
        expect(pointselector.locations().length).toEqual(0);
    });
});
