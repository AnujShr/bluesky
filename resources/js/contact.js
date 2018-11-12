require('./front/contact');
import iziToast from 'izitoast';

iziToast.settings({
    timeout: 5000, // default timeout
    resetOnHover: true,
    // icon:'icomoon',
    transitionIn: 'flipInX',
    transitionOut: 'flipOutX',
    position: 'topRight', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter, center
});

$(function () {

    let form = $('#contact-form');
    form[0].reset();

    $('.contact_button').on('click', function (e) {
        e.preventDefault();
        clearErrorDisplay();
        $.ajax({
            'url': 'contact',
            'type': 'post',
            'datatype': 'json',
            'data': form.serialize(),
            'success': function (response) {
                form[0].reset();
                iziToast.success({
                    timeout: 5000,
                    icon: 'fa fa-bullhorn',
                    title: 'Contact',
                    message: 'Message Send Succesfully!'
                });
            },
            'error': function (errors) {
                iziToast.error({
                    timeout: 0,
                    icon: 'fa fa-exclamation',
                    title: 'Error',
                    message: 'Please check highlighted field!',
                    position: "bottomLeft"
                });

                let el = $('#contact-form');
                $.each(errors.responseJSON.errors, function (key, value) {

                    var elm = $('#' + key);
                    elm.addClass('invalid');
                    elm.parent('div').children('span').addClass('text-danger').html(value[0]);
                });
                el.find("input,textarea").each(function (id, dom) {
                    if ($(dom).hasClass('invalid') === false) {
                        $(dom).addClass('valid valid-text');
                    }
                });
            }
        });
    });

    function clearErrorDisplay() {
        let el = $('#contact-form');

        el.find("input,textarea").removeClass('invalid');
        el.find('span').removeClass('text-danger').html('');
    }
});
