define([
    "jquery",
    "jquery/ui"
], function($){
    "use strict";

    function main(config, element) {
        var $element = $(element);
        var AjaxUrl = config.AjaxUrl;
        console.log(AjaxUrl);
        var dataForm = $('#curr-form');
        dataForm.mage('validation', {});

        $(document).on('click','.submit',function(event) {

            if (dataForm.valid()){
                event.preventDefault();
                var param = dataForm.serialize();
                $.ajax({
                    showLoader: true,
                    url: AjaxUrl,
                    data: param,
                    type: "POST"
                }).done(function (result) {
                    console.log(result);
                    $('#pln').val(result.currency);
                    return true;
                }).fail(function (jqXHR, textStatus, error){
                    console.log('Error in submitting form with currency:' + error);

                });
            }
        });
    };
    return main;


});