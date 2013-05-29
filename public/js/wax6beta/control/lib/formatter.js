// Formatter
// ---------
//
// This code is no longer the recommended code path for Wax -
// see `template.js`, a safe implementation of Mustache templates.
wax.formatter = function(x) {
    var formatter = {},
        f;

    // Prevent against just any input being used.
    if (x && typeof x === 'string') {
        try {
            // Ugly, dangerous use of eval.
            eval('f = ' + x);
        } catch (e) {
            if (console) console.log(e);
        }
    } else if (x && typeof x === 'function') {
        f = x;
    } else {
        f = function() {};
    }

    function urlX(url) {
        if (/^(https?:\/\/|data:image)/.test(url)) {
            return url;
        }
    }

    function idX(id) {
        return id;
    }

    // Wrap the given formatter function in order to
    // catch exceptions that it may throw.
    formatter.format = function(options, data) {
        try {
            return html_sanitize(f(options, data), urlX, idX);
        } catch (e) {
            if (console) console.log(e);
        }
    };

    return formatter;
};
