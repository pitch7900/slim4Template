
/**
 * hide the loader once image is loaded
 * @param {type} id
 * @returns {undefined}
 */
function on_img_load(id) {
//    $('#content_' + id).removeClass("invisible").trigger('classChange');
//    $('#contentloader_' + id).addClass("invisible").trigger('classChange');
}


/**
 * Create a put function for jquery 
 * http://stepansuvorov.com/blog/2014/04/jquery-put-and-delete/
 * @param {type} url
 * @param {type} data
 * @param {type} callback
 * @param {type} type
 * @returns {jqXHR}
 */
$.put = function (url, data, callback, type) {
    if ($.isFunction(data)) {
        type = type || callback,
                callback = data,
                data = {};
    }

    return $.ajax({
        url: url,
        type: 'PUT',
        success: callback,
        data: data,
        contentType: type
    });
};
/**
 * Create a delete function for jquery 
 * http://stepansuvorov.com/blog/2014/04/jquery-put-and-delete/
 * @param {type} url
 * @param {type} data
 * @param {type} callback
 * @param {type} type
 * @returns {jqXHR}
 */
$.delete = function (url, data, callback, type) {

    if ($.isFunction(data)) {
        type = type || callback,
                callback = data,
                data = {};
    }

    return $.ajax({
        url: url,
        type: 'DELETE',
        success: callback,
        data: data,
        contentType: type
    });
};

/**
 * Return the device screen size as seen by bootstrap
 * @returns {jQuery}
 */
var getBootstrapDeviceSize = function () {
    return $('#users-device-size').find('div:visible').first().attr('id');
}

/**
 * Convert a cariage return to <br>. Same as php function http://php.net/manual/fr/function.nl2br.php
 * @param {type} str
 * @param {type} is_xhtml
 * @returns {String}
 */
var nl2br = function (str, is_xhtml) {
    var breakTag = (is_xhtml || typeof is_xhtml === 'undefined') ? '<br />' : '<br>';
    return (str + '').replace(/([^>\r\n]?)(\r\n|\n\r|\r|\n)/g, '$1' + breakTag + '$2');
}

/**
 * Convert a <br> to cariage return
 * @param {type} str
 * @returns {unresolved}
 */
function br2nl(str) {
    return str.replace(/(<br\s*[\/]?>)(\r\n|\n\r|\r|\n)|(<br\s*[\/]?>)/gi, "\n");
}

/**
 * Return true if the current device is touch device and false otherwise
 * From https://stackoverflow.com/questions/4817029/whats-the-best-way-to-detect-a-touch-screen-device-using-javascript/4819886#4819886
 * @returns {MediaQueryList.matches|Boolean}
 */
function is_touch_device() {
    var prefixes = ' -webkit- -moz- -o- -ms- '.split(' ');
    var mq = function (query) {
        return window.matchMedia(query).matches;
    };

    if (('ontouchstart' in window) || window.DocumentTouch && document instanceof DocumentTouch) {
        return true;
    }

    // include the 'heartz' as a way to have a non matching MQ to help terminate the join
    // https://git.io/vznFH
    var query = ['(', prefixes.join('touch-enabled),('), 'heartz', ')'].join('');
    return mq(query);
}
