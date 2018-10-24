<script>
  var google_maps = [];
  function resizeMaps(){
    for (var i = 0; i < google_maps.length; i++) {
      google.maps.event.trigger(google_maps[i], "resize");
    }
  }
  function getStoreUrl(store){
    var cookie = readCookie('geo-ip-api');
    var url = 'https://www.google.com/maps/dir/' + cookie + '/' + store.lat + ',' + store.lng + '/';
    return url;
  }
  function onFindCurrentPosition(){
    var currentPosition = getCurrentPosition();
    if(currentPosition){
      setCookie('geo-ip-api', currentPosition);
      updateStoreAddressGoogle();
    }
  }
  $(document).ready(function (){
    setCookie('geo-ip-api', '0');
    updateStoreAddressGoogle();
    findCurrentPosition();
  });
  function initMap() {
    var stores = [];
    stores.push({
      lat:-22.7900049,
      lng:-43.3723029,
      name:'Hyundai - Itavema Motors RJ - São João de Meriti',
      address:'Rua Senador Nereu Ramos, 852, Jardim Meriti, São João de Meriti, Rio de Janeiro'
    });
    stores.push({
      lat:-22.9008047,
      lng:-43.5684973,
      name:'Hyundai - Itavema Motors RJ - Campo Grande',
      address:'Rua Maria de Jesus Botelho, 33, Campo Grande, Rio de Janeiro, Rio de Janeiro'
    });
    stores.push({
      lat:-22.7976292,
      lng:-43.2967492,
      name:'Hyundai - Itavema Motors RJ - Duque de Caxias',
      address:'Av. Brigadeiro Lima e Silva, 521, Duque de Caxias, Rio de Janeiro, Rio de Janeiro'
    });
    stores.push({
      lat:-22.9038035,
      lng:-43.2728104,
      name:'Hyundai - Itavema Motors RJ - Méier',
      address:'Rua Vinte e Quatro de Maio, 1047, Méier, Rio de Janeiro, Rio de Janeiro'
    });
    if(!stores.length){ return false; }
    var divs_maps = document.getElementsByName('map');
    if (!divs_maps.length){
      divs_maps = [document.getElementById('map')];
    }
    for(var j = 0; j < divs_maps.length; j++){
      var lat = stores[0].lat - 0.25 + 0.19;
      var lng = stores[0].lng - 0.4 + 0.10;
      if($(divs_maps[j]).hasClass('mapa-internos')){
        lng += 0.10;
      }
      google_maps[j] = new google.maps.Map(divs_maps[j], {
        center: {lat: lat, lng: lng},
        scrollwheel: false, zoom: 11,
        styles: [{
          "featureType": "water",
          "elementType": "geometry.fill",
          "stylers": [{
            "color": "#d3d3d3"
          }]
        },
        {
          "featureType": "transit",
          "stylers": [{
            "color": "#808080"
          }, {
            "visibility": "off"
          }]
        },
          {
            "featureType": "road.highway",
            "elementType": "geometry.stroke",
            "stylers": [{
              "visibility": "on"
            }, {
              "color": "#b3b3b3"
            }]
          }, {
            "featureType": "road.highway",
            "elementType": "geometry.fill",
            "stylers": [{
              "color": "#ffffff"
            }]
          }, {
              "featureType": "road.local",
              "elementType": "geometry.fill",
              "stylers": [{
                "visibility": "on"
              }, {
                "color": "#ffffff"
              }, {
                "weight": 1.8
              }]
            }, {
              "featureType": "road.local",
              "elementType": "geometry.stroke",
              "stylers": [{
                "color": "#d7d7d7"
              }]
            }, {
              "featureType": "poi",
              "elementType": "geometry.fill",
              "stylers": [{
                "visibility": "on"
              }, {
                "color": "#ebebeb"
              }]
            }, {
              "featureType": "administrative",
              "elementType": "geometry",
              "stylers": [{
                "color": "#a7a7a7"
              }]
            }, {
              "featureType": "road.arterial",
              "elementType": "geometry.fill",
              "stylers": [{ "color": "#ffffff"
            }]
          }, {
            "featureType": "road.arterial",
            "elementType": "geometry.fill",
            "stylers": [{
              "color": "#ffffff"
            }]
          }, {
            "featureType": "landscape",
            "elementType": "geometry.fill", 
            "stylers": [{
              "visibility": "on"
            }, {
              "color": "#efefef"
            }]
          }, {
            "featureType": "road",
            "elementType": "labels.text.fill",
            "stylers": [{
              "color": "#696969"
            }]
          }, {
            "featureType": "administrative",
            "elementType": "labels.text.fill",
            "stylers": [{
              "visibility": "on"
            }, {
              "color": "#737373"
            }]
          }, {
            "featureType": "poi",
            "elementType": "labels.icon",
            "stylers": [{
              "visibility": "off"
            }]
          }, {
            "featureType": "poi",
            "elementType": "labels",
            "stylers": [{
              "visibility": "off"
            }]
          }, {
            "featureType": "road.arterial",
            "elementType": "geometry.stroke",
            "stylers": [{ "color": "#d6d6d6"
          }]
        }, {
          "featureType": "road",
          "elementType": "labels.icon",
          "stylers": [{
            "visibility": "off"
          }]
        }, {}, {
          "featureType": "poi",
          "elementType": "geometry.fill",
          "stylers": [{
            "color": "#dadada"
          }]
        }],
        mapTypeId: google.maps.MapTypeId.ROADMAP,
      });
      for (var i = 0; i < stores.length; i++) {
        var iwHTML = '<div class="infoWin"><h4>' + stores[i].name + '</h4><p>' + stores[i].address + '</p>';
        var url = getStoreUrl(stores[i]);
        iwHTML = iwHTML + '<a lat_lng="' + stores[i].lat + ',' + stores[i].lng + '" href="' + url + '" target="_BLANK" class="btn btn-primary">Endereço</a>'; iwHTML = iwHTML + '</div>';
        var mark = new google.maps.Marker({ map: google_maps[j], position: stores[i], title: stores[i].name, info: iwHTML, icon: 'assets/img/pin.png', index: j });
        mark.addListener('click', function () {
          var clickedMark = $(this)[0];
          var infowindow = new google.maps.InfoWindow({ content: clickedMark.info });
          infowindow.open(google_maps[clickedMark.index], clickedMark);
          setTimeout(function (){
            updateStoreAddressGoogle();
          }, 100);
        });
      }
    }
  }
  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAFx42yMoMPnLLaSpOtVrBnkp12-xyQBIg&callback=initMap" async defer></script>
