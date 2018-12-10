require('./front/contact');
import iziToast from 'izitoast';

var marker = L.icon({
    iconUrl: 'marker-icon.png',
    shadowUrl: 'marker-shadow.png',

    iconSize: [25, 41],
    iconAnchor: [12, 41],
    popupAnchor: [1, -34],
    tooltipAnchor: [16, -28],
    shadowSize: [41, 41]
});

iziToast.settings({
    timeout: 5000, // default timeout
    resetOnHover: true,
    // icon:'icomoon',
    closeOnEscape: true,
    transitionIn: 'flipInX',
    transitionOut: 'flipOutX',
    displayMode: 2,
    position: 'topRight', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter, center
});

$(function () {

    var map = L.map('map').setView([51.505, -0.09], 13);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);


    L.marker([51.5, -0.09], {icon: marker}).addTo(map)
        .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
        .openPopup();

    let form = $('#contact-form');
    form[0].reset();

    $('.contact_button').on('click', function (e) {
        iziToast.destroy();
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
                    icon: 'fa fa-envelope',
                    title: 'Sucess',
                    message: 'Message Send Succesfully!'
                });
            },
            'error': function (errors) {
                iziToast.error({
                    timeout: 0,
                    icon: 'fa fa-exclamation-triangle',
                    title: 'Error',
                    message: 'Please check highlighted field!',
                    position: "bottomLeft",
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

    var lat, lng;

    map.addEventListener('mousemove', function(ev) {
        lat = ev.latlng.lat;
        lng = ev.latlng.lng;
    });
    document.getElementById("map").addEventListener("contextmenu", function (event) {
        // Prevent the browser's context menu from appearing
        event.preventDefault();

        // Add marker
        // L.marker([lat, lng], ....).addTo(map);
        alert(lat + ' - ' + lng);

        return false; // To disable default popup.
    });
});
