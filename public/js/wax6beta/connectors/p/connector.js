;var wax = wax || {};
wax.p = wax.p || {};

wax.p.connector = function(tilejson) {
    var po = org.polymaps;
    if (tilejson.scheme === 'tms') {
        throw new Error('Wax only supports XYZ TileJSON urls.');
    }
    return po.image().url(tilejson.tiles[0].replace(/\{\w\}/g, function(m) {
        return m.toUpperCase();
    }));
};
