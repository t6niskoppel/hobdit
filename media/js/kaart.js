function initMap(){

    var map = new google.maps.Map(document.getElementById('map'),{
        
        center: {
            lat: 58.378213, 
            lng: 26.714624
        },
        zoom: 14,
        zoomControl: true,
        scaleControl: true,
        mapTypeControl: true,
        streetViewControl: true
    });   
    
    //kui geolocation lubatud siis keskmistan kaardi geolocationi peale, muidu 
    //muidu liivi 2
    if(navigator.geolocation){
        navigator.geolocation.getCurrentPosition(function(position){
            var pos = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
            };
    
            map.setCenter(pos);
        })
    }
    
    var content = '<div id="content">'+
            '<h1 id="firstHeading" class="firstHeading">Liivi 2</h1>'+
            '<div id="bodyContent">'+
            '<p>Selles hoones saab arendusmeeskond aeg-ajalt kokku. Kui\n\
            mitte siin siis paabeli õppehoones</p>'+
            '</div>'+
            '</div>';

        var infowindow = new google.maps.InfoWindow({ content: content });

        var marker = new google.maps.Marker({
          position: {
            lat: 58.378213, 
            lng: 26.714624
            },
          map: map,
          title: 'Liivi 2'
        });
        marker.addListener('click', function() {
          infowindow.open(map, marker);
        });
  }