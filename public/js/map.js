/* ----- Google Map ----- */
if ($("#map").length) {
    function initialize() {
        var mapOptions = {
            zoom: 16,
            scrollwheel: false,
            center: new google.maps.LatLng(10.8231, 106.6297) // Tọa độ trung tâm cho TP.HCM
        };
        var map = new google.maps.Map(document.getElementById('map'),
            mapOptions);
        var marker = new google.maps.Marker({
            position: map.getCenter(),
            //icon: 'images/locating.png', // Nếu bạn muốn sử dụng biểu tượng tùy chỉnh
            map: map
        });
    }
    google.maps.event.addDomListener(window, 'load', initialize);
}
