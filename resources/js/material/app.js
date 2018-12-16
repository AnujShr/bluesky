require('../bootstrap');

require('material-dashboard/assets/js/core/bootstrap-material-design.min');

require('material-dashboard/assets/js/plugins/perfect-scrollbar.jquery.min');

require('../material/matrial-dashboard');
require('select2/dist/js/select2');
require('../../plugins/material-cards-master/js/jquery.material-cards');
require('../material/add_property');

$(function () {
    $('.select').select2({
        placeholder: 'Select',
        minimumResultsForSearch: -1,
        theme: "material",
        menuPlacement: "top"
    });
    $('.select-long').select2({
        theme: "material",
        menuPlacement: "top"
    });

    $(".select2-selection__arrow")
        .addClass("material-icons")
        .html("arrow_drop_down");

    $('.list-card > .mc-btn-action').click(function () {
        let card = $(this).parent('.list-card');
        let icon = $(this).children('i');
        icon.addClass('fa-spin-fast');

        if (card.hasClass('mc-active')) {
            card.removeClass('mc-active');

            window.setTimeout(function () {
                icon
                    .removeClass('fa-arrow-left')
                    .removeClass('fa-spin-fast')
                    .addClass('fa-bars');

            }, 800);
        } else {
            card.addClass('mc-active');

            window.setTimeout(function () {
                icon
                    .removeClass('fa-bars')
                    .removeClass('fa-spin-fast')
                    .addClass('fa-arrow-left');

            }, 800);
        }
    });
});

