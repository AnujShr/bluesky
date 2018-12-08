require('../bootstrap');

require('material-dashboard/assets/js/core/bootstrap-material-design.min');

require('material-dashboard/assets/js/plugins/perfect-scrollbar.jquery.min');

require('../material/matrial-dashboard');

require('../../plugins/material-cards-master/js/jquery.material-cards');
$(function() {
    $('.list-card > .mc-btn-action').click(function () {
        var card = $(this).parent('.list-card');
        var icon = $(this).children('i');
        icon.addClass('fa-spin-fast');

        if (card.hasClass('mc-active')) {
            card.removeClass('mc-active');

            window.setTimeout(function() {
                icon
                    .removeClass('fa-arrow-left')
                    .removeClass('fa-spin-fast')
                    .addClass('fa-bars');

            }, 800);
        } else {
            card.addClass('mc-active');

            window.setTimeout(function() {
                icon
                    .removeClass('fa-bars')
                    .removeClass('fa-spin-fast')
                    .addClass('fa-arrow-left');

            }, 800);
        }
    });
});