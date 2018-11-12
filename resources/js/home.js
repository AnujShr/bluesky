require('../plugins/OwlCarousel2-2.2.1/owl.carousel.js');
require('./front/custom.js');
$(function() {
    $('.newsletter_button').click(function (e) {
        e.preventDefault();
        let form =$('#newsletter_form');
        let formData = form.serialize();
        $.ajax({
            'url': 'newsletter-subscribe',
            'type': 'post',
            'data': formData,
            'success': function (response) {
                form[0].reset();
                alert('Success');
            },
            error: function (errors) {
                $.each(errors.responseJSON.errors,function(key,value){
                    let keys = $('#'+key);
                    keys.addClass('form-group has-danger');
                    keys.children('span').html(value[0]);
                    keys.children('span').addClass('text-danger');
                    keys.children('input').addClass('form-control is-invalid');
                });
            }
        })

    });
});
