
var platform = new H.service.Platform({
  'app_id': 'wqVvmXUfmkEubBVWaEJC',
  'app_code': 'bGsmBkttNfi04TRc1N3s-w'
});

// default map layers:
var defaultLayers = platform.createDefaultLayers();

// when page is loaded:
document.addEventListener("DOMContentLoaded", function(){

  // instantiate map : 
  var map = new H.Map(document.getElementById('mapContainer'),
        defaultLayers.normal.map,{
          zoom: 16,
          center: { lat: 37.79206, lng: -122.3998 },
  });

  // instantiate map events:
  var mapEvents = new H.mapevents.MapEvents(map);

  // instantiate behavior:
  var behavior = new H.mapevents.Behavior(mapEvents);

  // instantiate default UI:
  var ui = new H.ui.UI.createDefault(map, defaultLayers);

  // instantiate zoom rectangle:
  var zoomRectangle = new H.ui.ZoomRectangle();
  zoomRectangle.setAlignment("right-middle");
  ui.addControl('zoomRectangle', zoomRectangle);

  // add window resize listener to adjust the map dimensions:
  window.addEventListener('resize', function() {
    map.getViewPort().resize();
  });

  // add map context menu event listener:
  map.addEventListener('contextmenu', onContextMenuRequested);
  function onContextMenuRequested(e) {
    
    // add contect item:
    // e.items.push(new H.util.ContextItem({
    //   label: "Hello Holberton School!",
    // }));
    
    var geocoder = platform.getGeocodingService();
    var parameters = {
        prox: map.screenToGeo(e.viewportX, e.viewportY).lat + ', ' + map.screenToGeo(e.viewportX, e.viewportY).lng,
        mode: 'retrieveAddresses',
        maxResults: 1
    };

    //define result function
    function reverseGeocodeResult (result, contextMenuEvent) {
        // Removes context item and add new one
        
        var address = result.Response.View[0].Result[0].Location.Address.Label;
        contextMenuEvent.items.pop();

        contextMenuEvent.items.push(new H.util.ContextItem({
          label: address,
        }));

        // Fires the context menu event again to display the new menu
        contextMenuEvent.currentTarget.dispatchEvent(contextMenuEvent);
        contextMenuEvent.stopPropagation();
    };
    
    geocoder.reverseGeocode(parameters, function(result) {
      reverseGeocodeResult(result, e);
    }, function(error) {
      console.log(error);
    });

  }

});
