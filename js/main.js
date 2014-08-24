
//init
$(document).ready(function(){
layers = [
          new ol.layer.Tile({
            source: new ol.source.OSM()
          })
        ];

olmap = new ol.Map({
        target: 'map',
		
        layers: layers,
        view: new ol.View({
          center: [0,0],
          zoom: 2
        })
      });
});	  

//$(document).ready(function(){
//ActionListeners
//Toolbar
$('.toolset a.layers').click(function(e){
	e.preventDefault();
	$('.side-panel').toggle();
	$('.toolset a.layers').toggleClass('on');
	$('.map').toggleClass('shrinked');
});



//});
//
	  
//Utils
$(document).ready(function() {
		// Launch TipTip tooltip
		$('.tiptip').tipTip();
	});
