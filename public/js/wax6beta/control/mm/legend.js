wax = wax || {};
wax.mm = wax.mm || {};

// Legend Control
// --------------
// The Modest Maps version of this control is a very, very
// light wrapper around the `/lib` code for legends.
wax.mm.legend = function(map, tilejson) {
    tilejson = tilejson || {};
    var l, // parent legend
        legend = {};

    legend.add = function() {
        l = wax.legend()
            .content(tilejson.legend || '');
        return this;
    };

    legend.content = function(x) {
        if (x) l.content(x.legend || '');
    };

    legend.element = function() {
        return l.element();
    };

    legend.appendTo = function(elem) {
        wax.u.$(elem).appendChild(l.element());
        return this;
    };

    return legend.add();
};
