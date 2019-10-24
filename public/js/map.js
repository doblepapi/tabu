(function() {
    var map;
    function initMap() {
        map = new google.maps.Map(document.getElementById("map"), {
            center: { lat: 41.6867865, lng: 0.6246724 },
            zoom: 8
        });
    }
    window.initMap = function(){
        setTimeout(initMap, 30);
    }
})();
