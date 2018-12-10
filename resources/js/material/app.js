require('../bootstrap');

require('material-dashboard/assets/js/core/bootstrap-material-design.min');

require('material-dashboard/assets/js/plugins/perfect-scrollbar.jquery.min');

require('../material/matrial-dashboard');
require('select2/dist/js/select2');
require('leaflet');
require('../../plugins/material-cards-master/js/jquery.material-cards');
$(function () {

    $('.select').select2({
        placeholder: 'Select',
        minimumResultsForSearch: -1,
        minimumInputLength:2,
        allowClear: true,
        theme: "material",
        menuPlacement: "top"
    });

    $(".select2-selection__arrow")
        .addClass("material-icons")
        .html("arrow_drop_down");

    $('.list-card > .mc-btn-action').click(function () {
        var card = $(this).parent('.list-card');
        var icon = $(this).children('i');
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
    var marker = L.icon({
        iconUrl: '/marker-icon.png',
        shadowUrl: '/marker-shadow.png',
        iconSize: [25, 41],
        iconAnchor: [12, 41],
        popupAnchor: [1, -34],
        tooltipAnchor: [16, -28],
        shadowSize: [41, 41]
    });
    var options = {
        center: [35.10418, -106.62987],
        zoom: 10
    }

    var map = L.map('mapid', options);

    L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {attribution: 'OSM'})
        .addTo(map);

    // map.on('click',
    // 	function(e){
    // 		//var coord = e.latlng.toString().split(',');
    // 		//var lat = coord[0].split('(');
    // 		//var lng = coord[1].split(')');
    // 		//alert("You clicked the map at LAT: " + lat[1] + " and LONG: " + lng[0]);
    // 		L.marker(e.latlng).addTo(map);
    // 	});

    var myMarker = L.marker([35.10418, -106.6287], {icon: marker, title: "MyPoint", alt: "The Big I", draggable: true})
        .addTo(map)
        .on('dragend', function () {
            var coord = String(myMarker.getLatLng()).split(',');
            console.log(coord);
            var lat = coord[0].split('(');
            console.log(lat);
            var lng = coord[1].split(')');
            console.log(lng);
            myMarker.bindPopup("Moved to: " + lat[1] + ", " + lng[0] + ".");
        });
});

