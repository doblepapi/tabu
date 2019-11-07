(function() {
    var map;
    var _icon_counter = 0;
  
    const icons = {
      icon1: {
        icon: 'http://maps.google.com/mapfiles/kml/paddle/1.png',
      },
      icon2: {
        icon: 'http://maps.google.com/mapfiles/kml/paddle/2.png',
      },
    };
  
    function addPointToPlace(event, icon) {
      // Extraer latitud y longitud del punto en el mapa
      const myLatLng = {
        lat: event.latLng.lat(),
        lng: event.latLng.lng(),
      };
      // Escribir mensaje de donde se va a poner el punto
      console.log('Add point to', event.latLng.lat(), event.latLng.lng());
      // Crear un marcador con la ubicación
      const marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: '' + myLatLng.lat + ',' + myLatLng.lng + '',
        animation: google.maps.Animation.DROP,
      });
      // cambiar el icono
      marker.setIcon(icon);
    }
  
    function initMap() {
      map = new google.maps.Map(document.getElementById('map'), {
        center: { lat: 41.6867865, lng: 0.6246724 },
        zoom: 8,
      });
  
      // agregamos un listener para el icono
      google.maps.event.addListener(map, 'click', function(event) {
        var icon;
        // si el contador de icono es par:
        if (_icon_counter % 2 === 0) {
          icon = icons.icon1.icon;
        } else {
          icon = icons.icon2.icon;
        }
        _icon_counter += 1;
        addPointToPlace(event, icon);
      });
    }
  
    window.initMap = function() {
      setTimeout(initMap, 30);
    };
  })();
