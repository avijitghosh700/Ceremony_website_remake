let map;
let ceremony = { lat: 38.9763871, lng: -76.5122784 }; 

function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
    center: ceremony,
    zoom: 18
  });

  let marker = new google.maps.Marker({
    position: ceremony,
    map: map
  });
}

window.addEventListener('load', initMap);