/**
 * This file is part of a markocupic Contao Bundle.
 *
 * (c) Marko Cupic 2020 <m.cupic@gmx.ch>
 * @author     Marko Cupic
 * @package    Contao form multirow text field
 * @license    MIT
 * @see        https://github.com/markocupic/contao-form-multirow-text-field-bundle
 *
 */
(function ($) {
    $(document).ready(function () {
        "use strict";

        /**
         * Add remove row event to button
         */
        $('.form-multirow-text-remove-row-btn').map(function () {
            $(this).click(function (e) {
                e.preventDefault();
                let row = $(this).closest("tr");
                if ($(row).siblings('tr').length === 0) {
                    return false;
                }
                $(row).remove();
            });
        });

        /**
         * Add clone row event to button
         */
        $('.form-multirow-text-clone-row-btn').map(function () {
            $(this).click(function (e) {
                e.preventDefault();
                let button = e.target;
                let master = $(button).closest("tr");
                $(master)
                .clone(true, true)// Deepclone (include events)
                .insertAfter($(master));
            });
        });

    })
})(jQuery);