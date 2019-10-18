define([
    'uiComponent',
    'jquery',
    'ko'
], function (Component, $, ko) {
    'use strict';
    return Component.extend({
        stockQty: ko.observable(''),
        isLoading: ko.observable(false),
        resultBlockVisibility: ko.observable(false),
        url: '',
        productId: '',
        initialize: function () {
            this._super();
            return this;
        },
        showQty: function () {
            this.isLoading(true);
            var self = this;
            $.ajax({
                url: self.url,
                type: 'post',
                data: {
                    id: self.productId
                },
                dataType: 'json'})
                .done(function (data) {
                    if (data.qty) {
                        self.stockQty(data.qty);
                        self.resultBlockVisibility(true);
                    }
                }).always(function () {
                self.isLoading(false);
            });
        }
    });
});
