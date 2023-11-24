
var mapView = new ol.View({
    center: ol.proj.fromLonLat([106.66932546719237, 10.764025358410986]),
    zoom: 9,
});

var map = new ol.Map({
    target: 'map',
    view: mapView,
});


var noneTile = new ol.layer.Tile({
    title: 'Tắt',
    visible: false,
    type: 'base',
});

var osmTile = new ol.layer.Tile({
    title: 'Bật',
    visible: true,
    type: 'base',
    source: new ol.source.OSM()
});

var baseGroup = new ol.layer.Group({
    title: 'Bản đồ nền',
    fold: true,
    layers: [osmTile, noneTile]
});
map.addLayer(baseGroup);


var Poligon = new ol.layer.Tile({
    title: "Không Khí",
    source: new ol.source.TileWMS({
        url: 'http://localhost:8082/geoserver/DoAn2023/wms',
        params: { 'LAYERS': 'DoAn2023:LamDong_2017', 'TILED': true },
        serverType: 'geoserver',
        visible: true
    })
});


var Point = new ol.layer.Tile({
    title: "Các Huyện",
    source: new ol.source.TileWMS({
        url: 'http://localhost:8080/geoserver/DACN/wms',
        params: { 'LAYERS': 'DACN:RG_Point', 'TILED': true },
        serverType: 'geoserver',
        visible: true
    })
});
var Line = new ol.layer.Tile({
    title: "Ranh giới Huyện",
    source: new ol.source.TileWMS({
        url: 'http://localhost:8080/geoserver/DACN/wms',
        params: { 'LAYERS': 'DACN:RG_Line', 'TILED': true },
        serverType: 'geoserver',
        visible: true
    })
});

var Line2 = new ol.layer.Tile({
    title: "Sông",
    source: new ol.source.TileWMS({
        url: 'http://localhost:8080/geoserver/DACN/wms',
        params: { 'LAYERS': 'DACN:Song', 'TILED': true },
        serverType: 'geoserver',
        visible: true
    })
});

var overlayGroup2 = new ol.layer.Group({
    title: 'Bến Tre',
    fold: true,
    layers: [Poligon,Point,Line,Line2]
});
map.addLayer(overlayGroup2);

var layerSwitcher = new ol.control.LayerSwitcher({
    activationMode: 'click',
    startActive: false,
    groupSelectStyle: 'children'
});
map.addControl(layerSwitcher);
