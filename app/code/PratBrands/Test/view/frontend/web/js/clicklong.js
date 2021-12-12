define(['jquery'], function($) {
    'use strict';
    return function(config, element) {
        $(element).click(function(){
            $(".short-description").hide();
            $(".large-description").show();
        });
    }
});

