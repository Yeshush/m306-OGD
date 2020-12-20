/* global L */

const Attribution = '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors';
const tileURL = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';

const map = L.map('map', {
    center: [47.577331, 9.000088],
    zoom: 10,
    minZoom: 10,
    maxBounds: [
        //south west
        [47.314953, 8.536811],
        //north east
        [47.760957, 9.609610]]
});

//add map layer 
L.tileLayer(tileURL, {Attribution}).addTo(map);
//layer nutzflaechen
const nutzflaechen = L.tileLayer.wms('https://ows.geo.tg.ch/geofy_access_proxy/landwirtschaft_kulturflaechen?', {
    version: '1.3.0',
    transparent: true,
    format: 'image/png',
    layers: 'Nutzungsflaechen',
    crs: L.CRS.EPSG4326
});
//layer nutzungsflaechen_flaechen_tg
const nutzungsflaechen_flaechen_tg = L.tileLayer.wms('https://ows.geo.tg.ch/geofy_access_proxy/landwirtschaft_kulturflaechen?', {
    version: '1.3.0',
    transparent: true,
    format: 'image/png',
    layers: 'nutzungsflaechen_flaechen_tg',
    crs: L.CRS.EPSG4326
});
//layer nutzungsflaechen_hauptkulturen
const nutzungsflaechen_hauptkulturen = L.tileLayer.wms('https://ows.geo.tg.ch/geofy_access_proxy/landwirtschaft_kulturflaechen?', {
    version: '1.3.0',
    transparent: true,
    format: 'image/png',
    layers: 'nutzungsflaechen_hauptkulturen',
    crs: L.CRS.EPSG4326
});
//layer nutzungsflaechen_
const nutzungsflaechen_ = L.tileLayer.wms('https://ows.geo.tg.ch/geofy_access_proxy/landwirtschaft_kulturflaechen?', {
    version: '1.3.0',
    transparent: true,
    format: 'image/png',
    layers: 'nutzungsflaechen_',
    crs: L.CRS.EPSG4326
});

//layer Array
const layers = {
    "Nutzungsflächen (Hauptkategorien Textur)": nutzflaechen,
    "Nutzungsflächen (BFF QI Fläche TG)": nutzungsflaechen_flaechen_tg,
    "Nutzungsflächen (Hauptkategorien)": nutzungsflaechen_hauptkulturen,
    "Nutzungsflächen": nutzungsflaechen_
};

//add layer controll
L.control.layers(layers).addTo(map);

//add scale bar to map
L.control.scale({
    metric: true,
    imperial: false
}).addTo(map).addTo(map);

//get selected layer
var currentLayername;
//add legend 
const legend = L.control({position: 'bottomright'});
map.on('baselayerchange', function (e) {
   currentLayername = e.name;
   legend.onAdd = function (map) {
    var div = L.DomUtil.create('div', 'Legend');
    if(currentLayername.valueOf()==="Nutzungsflächen (Hauptkategorien Textur)"){
    div.innerHTML = '<img src="img/nutzflaechen.png">';
    }else if (currentLayername.valueOf()==="Nutzungsflächen (BFF QI Fläche TG)"){
       div.innerHTML = '<img src="img/nutzungsflaechen_flaechen_tg.png">'; 
    }else if (currentLayername.valueOf()==="Nutzungsflächen (Hauptkategorien)"){
       div.innerHTML = '<img src="img/nutzungsflaechen_hauptkulturen.png">'; 
    }else if (currentLayername.valueOf()==="Nutzungsflächen"){
       div.innerHTML = '<img src="img/nutzungsflaechen_.png">'; 
    }
    return div;
};
legend.addTo(map);
});





    