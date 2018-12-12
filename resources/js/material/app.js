require('../bootstrap');

require('material-dashboard/assets/js/core/bootstrap-material-design.min');

require('material-dashboard/assets/js/plugins/perfect-scrollbar.jquery.min');

require('../material/matrial-dashboard');
require('select2/dist/js/select2');
require('../../plugins/material-cards-master/js/jquery.material-cards');
$(function () {

    $('.select').select2({
        placeholder: 'Select',
        minimumResultsForSearch: -1,
        theme: "material",
        menuPlacement: "top"
    });
    $('.select-long').select2({
        allowClear: true,
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

    let key = 'VEmkGxQ03GpPqxAa4wOJePszcKvlXmgK';
    let latLng = [38.890385, -77.031989];
    let zoom = 14;

    $('.country').on('change', function (e) {
        e.preventDefault();
        $('.address').val('');
        $('.city').val('');
        let selectedText = $(this).find('option:selected').text();
        // let url = 'http://www.mapquestapi.com/geocoding/v1/address?key=' + key + '&location=' + selectedText;
        let url = 'https://restcountries.eu/rest/v2/name/' + selectedText + '?fullText=true';

        $.getJSON(url, function (result) {
            // let data = result.results[0];
            // let countryCo = result.results[0].locations[0].latLng;
            let countryCo = result[0].latlng;
            if (map !== 'undefined') {
                map.remove();
                mapload(countryCo, 8);
            }
        });
        let cityUrl = '/realtors/get-city?country='+selectedText;
            $.getJSON(cityUrl,function (e) {

            })

    });
    mapload(latLng, zoom);
    let theMarker = {};

    var popup = L.popup(),
        geocode,
        map;

    let marker = L.icon({
        iconUrl: '/marker-icon.png',
        shadowUrl: '/marker-shadow.png',
        iconSize: [25, 41],
        iconAnchor: [12, 41],
        popupAnchor: [1, -34],
        tooltipAnchor: [16, -28],
        shadowSize: [41, 41]
    });

    function mapload(latLng, zoom) {
        map = new L.map('map', {
            layers: MQ.mapLayer(),
            center: latLng,
            zoom: zoom,

        })
            .on('click', function (e) {
                if (theMarker !== undefined) {
                    map.removeLayer(theMarker);
                }
                geocode.reverse(e.latlng);
                theMarker = L.marker(e.latlng, {
                    icon: marker,
                    draggable: true,
                }).addTo(map).bindPopup(popup.setLatLng(e.latlng).openOn(this));
            });

        geocode = MQ.geocode({}).on('success', function (e) {
            popup.setContent(geocode.describeLocation(e.result.best));
            updateAddress(geocode.describeLocation(e.result.best));
        });

    }

    function updateAddress(address) {
        let addressfield = $('.address');
        addressfield.parent().addClass('is-filled');
        let regX = /(<([^>]+)>)/ig;
        let regS = /,\s*$/;
        addressfield.val(address.replace(regX, ", ").replace(regS, ""));
    }


// let marker = L.icon({
//     iconUrl: '/marker-icon.png',
//     shadowUrl: '/marker-shadow.png',
//     iconSize: [25, 41],
//     iconAnchor: [12, 41],
//     popupAnchor: [1, -34],
//     tooltipAnchor: [16, -28],
//     shadowSize: [41, 41]
// });
// let options = {
//     center: [35.10418, -106.62987],
//     zoom: 10
// };
//
// // map(options, marker);
//
// function map(options, marker) {
//     let map = L.map('mapid', options);
//
//     L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {attribution: 'OSM'})
//         .addTo(map);
//     let theMarker = {};
//     let latlng = {};
//
//     map.on('click', function (e) {
//         lat = e.latlng.lat;
//         lon = e.latlng.lng;
//
//         //Clear existing marker,
//
//         if (theMarker !== undefined) {
//             map.removeLayer(theMarker);
//         }
//         latlng = {
//             lat: lat,
//             lng: lon,
//         };
//         mylatlng(latlng);
//
//         //Add a marker to show where you clicked.
//         theMarker = L.marker([lat, lon], {
//             icon: marker,
//             draggable: true,
//         }).addTo(map).bindPopup("You clicked the map at LAT: " + lat + " and LONG: " + lon)
//             .openPopup().on('dragend', function () {
//                 let coord = String(theMarker.getLatLng()).split(',');
//                 let lat = coord[0].split('(');
//                 let lng = coord[1].split(')');
//                 latlng = {
//                     lat: lat,
//                     lng: lng,
//                 };
//                 mylatlng(latlng);
//                 theMarker.bindPopup("Moved to: " + lat[1] + ", " + lng[0] + ".").openPopup();
//             });
//     });
//
//     function mylatlng(latlng) {
//
//     }
// }
})
;

