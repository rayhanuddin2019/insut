

(function ($) {
    'use strict';

    jQuery(document).on('widget-updated', function (e, widget) {
        if (jQuery(widget).find('.carbon-container').length) {
            alert(quomodo_market_obj.widget_update);
            location.reload(true);
        }
    });

})(jQuery);