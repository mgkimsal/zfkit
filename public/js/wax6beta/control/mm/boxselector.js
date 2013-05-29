wax = wax || {};
wax.mm = wax.mm || {};

// Box Selector
// ------------
wax.mm.boxselector = function(map, tilejson, opts) {
    var mouseDownPoint = null,
        callback = ((typeof opts === 'function') ?
            opts :
            opts.callback),
        boxDiv,
        addEvent = MM.addEvent,
        removeEvent = MM.removeEvent,
        box,
        boxselector = {};

    function getMousePoint(e) {
        // start with just the mouse (x, y)
        var point = new MM.Point(e.clientX, e.clientY);
        // correct for scrolled document
        point.x += document.body.scrollLeft + document.documentElement.scrollLeft;
        point.y += document.body.scrollTop + document.documentElement.scrollTop;

        // correct for nested offsets in DOM
        for (var node = map.parent; node; node = node.offsetParent) {
            point.x -= node.offsetLeft;
            point.y -= node.offsetTop;
        }
        return point;
    }

    function mouseDown(e) {
        if (!e.shiftKey) return;

        mouseDownPoint = getMousePoint(e);

        boxDiv.style.left = mouseDownPoint.x + 'px';
        boxDiv.style.top = mouseDownPoint.y + 'px';

        addEvent(map.parent, 'mousemove', mouseMove);
        addEvent(map.parent, 'mouseup', mouseUp);

        map.parent.style.cursor = 'crosshair';
        return MM.cancelEvent(e);
    }


    function mouseMove(e) {
        var point = getMousePoint(e),
            style = boxDiv.style;
        style.display = 'block';
        if (point.x < mouseDownPoint.x) {
            style.left = point.x + 'px';
        } else {
            style.left = mouseDownPoint.x + 'px';
        }
        if (point.y < mouseDownPoint.y) {
            style.top = point.y + 'px';
        } else {
            style.top = mouseDownPoint.y + 'px';
        }
        style.width = Math.abs(point.x - mouseDownPoint.x) + 'px';
        style.height = Math.abs(point.y - mouseDownPoint.y) + 'px';
        return MM.cancelEvent(e);
    }

    function mouseUp(e) {
        var point = getMousePoint(e),
            l1 = map.pointLocation(point),
            l2 = map.pointLocation(mouseDownPoint);

        // Format coordinates like mm.map.getExtent().
        boxselector.extent([
            new MM.Location(
                Math.max(l1.lat, l2.lat),
                Math.min(l1.lon, l2.lon)),
            new MM.Location(
                Math.min(l1.lat, l2.lat),
                Math.max(l1.lon, l2.lon))
        ]);

        removeEvent(map.parent, 'mousemove', mouseMove);
        removeEvent(map.parent, 'mouseup', mouseUp);

        map.parent.style.cursor = 'auto';
    }

    function drawbox(map, e) {
        if (!boxDiv || !box) return;
        var br = map.locationPoint(box[1]),
            tl = map.locationPoint(box[0]),
            style = boxDiv.style;

        style.display = 'block';
        style.height = 'auto';
        style.width = 'auto';
        style.left = Math.max(0, tl.x) + 'px';
        style.top = Math.max(0, tl.y) + 'px';
        style.right = Math.max(0, map.dimensions.x - br.x) + 'px';
        style.bottom = Math.max(0, map.dimensions.y - br.y) + 'px';
    }

    boxselector.extent = function(x, silent) {
        if (!x) return box;

        box = [
            new MM.Location(
                Math.max(x[0].lat, x[1].lat),
                Math.min(x[0].lon, x[1].lon)),
            new MM.Location(
                Math.min(x[0].lat, x[1].lat),
                Math.max(x[0].lon, x[1].lon))
        ];

        drawbox(map);

        if (!silent) callback(box);
    };

    boxselector.add = function(map) {
        boxDiv = boxDiv || document.createElement('div');
        boxDiv.id = map.parent.id + '-boxselector-box';
        boxDiv.className = 'boxselector-box';
        map.parent.appendChild(boxDiv);

        addEvent(map.parent, 'mousedown', mouseDown);
        map.addCallback('drawn', drawbox);
        return this;
    };

    boxselector.remove = function() {
        map.parent.removeChild(boxDiv);
        removeEvent(map.parent, 'mousedown', mouseDown);
        map.removeCallback('drawn', drawbox);
    };

    return boxselector.add(map);
};
