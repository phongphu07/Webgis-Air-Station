<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>WEB GIS</title>
    <link href="img/logo.png" rel="shortcut icon" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
    />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
      integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb"
      crossorigin="anonymous"
    />
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
      integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
      integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="resources/ol.css" />
    <link rel="stylesheet" href="resources/ol-layerswitcher.css" />
    <link rel="stylesheet" href="./style.css" />
    <link rel="stylesheet" href="./style2.css" />
  </head>
  <style>
    li {
      float: left;
    }
  </style>

  <body>
    <!-- ======= Header ======= -->
    <?php include "../header.php" ?>
    <!-- End Header -->
    <br /><br /><br />
    <nav
      class="navbar navbar-expand-lg navbar-light"
      style="height: 80px; margin-top: 0px"
    >
      <a
        class="navbar-brand"
        style="margin-left: 30%; font-weight: bold"
        href="#"
      >
        WEBGIS THỂ HIỆN THÔNG TIN VÙNG NGẬP LỤT Ở BẾN TRE
      </a>
    </nav>

    <div style="float: left; width: 20%; height: 80%">
      <div style="float: right">
        <img
          style="margin-left: 20%; padding-top: 6%"
          src="./img/logo.png"
          width="140px"
          height="150px"
        /><br />
        <h5 style="padding-top: 8%">Trường Đại học Tài nguyên</h5>
        <h5 style="margin-left: 5%">và môi trường TPHCM</h5>
        <div class="checkbox_form" style="margin-left: 10%">
          <input type="checkbox" name="" id="checkvung" checked />
          <label for="checkbox"> Lê Ngọc Thanh Ngân</label>
        </div>
      </div>
    </div>

    <div
      style="float: left; width: 56%; height: 75%"
      id="map"
      class="map"
    ></div>

    <!-- display legend-->

    <div style="float: left; width: 20%; height: 80%">
      <h3 style="text-align: center; margin-top: 10px; margin-bottom: 30px">
        CHÚ GIẢI
      </h3>

      <!--Hien Trang-->

      <div class="line1">
        <img
          src="http://localhost:8080/geoserver/wms?REQUEST=GetLegendGraphic&VERSION=1.0.0&FORMAT=image/png&WIDTH=20&HEIGHT=20&STRICT=false&style=DACN:style_lulut"
          alt=""
        />
        <a> Vùng lũ </a>
        <!-- Cần thay localhost: cổng của các bạn và Layer= ... -->
        <!-- Link khi mở openlayer ở geoserver có đầy đủ thông tin -->
      </div>
    </div>
    <script src="resources/ol.js"></script>
    <script src="resources/ol-layerswitcher.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="resources/L.Geoserver.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
      var mapView = new ol.View({
        center: ol.proj.fromLonLat([106.66932546719237, 10.764025358410986]),
        zoom: 9.8,
      });

      var map = new ol.Map({
        target: "map",
        view: mapView,
      });

      var noneTile = new ol.layer.Tile({
        title: "Tắt",
        visible: false,
        type: "base",
      });

      var osmTile = new ol.layer.Tile({
        title: "Bật",
        visible: true,
        type: "base",
        source: new ol.source.OSM(),
      });

      var baseGroup = new ol.layer.Group({
        title: "Bản đồ nền",
        fold: true,
        layers: [osmTile, noneTile],
      });
      map.addLayer(baseGroup);
      var Poligon2 = new ol.layer.Tile({
        title: "Trạm quan trắc",
        source: new ol.source.TileWMS({
          url: "http://localhost:8082/geoserver/DoAn2023/wms",
          params: { LAYERS: "DoAn2023:LamDong_2017", TILED: true },
          serverType: "geoserver",
          visible: true,
        }),
      });
      var Point2 = new ol.layer.Tile({
        title: "Bản đồ ô nhiễm",
        source: new ol.source.TileWMS({
          url: "http://localhost:8082/geoserver/DoAn2023/wms",
          params: { LAYERS: "DoAn2023:LamDong_2018", TILED: true },
          serverType: "geoserver",
          visible: true,
        }),
      });

      var overlayGroup3 = new ol.layer.Group({
        title: "Không Khí",
        fold: true,
        layers: [Poligon2, Point2],
      });
      map.addLayer(overlayGroup3);

      var Line = new ol.layer.Tile({
        title: "Ranh giới Huyện",
        source: new ol.source.TileWMS({
          url: "http://localhost:8082/geoserver/DoAnGIS/wms",
          params: { LAYERS: "DoAnGIS:HuyenTinhLD", TILED: true },
          serverType: "geoserver",
          visible: true,
        }),
      });

      var Line2 = new ol.layer.Tile({
        title: "Sông",
        source: new ol.source.TileWMS({
          url: "http://localhost:8080/geoserver/DACN/wms",
          params: { LAYERS: "DACN:Song", TILED: true },
          serverType: "geoserver",
          visible: true,
        }),
      });

      var overlayGroup2 = new ol.layer.Group({
        title: "TP.HCM",
        fold: true,
        layers: [Line, Line2],
      });
      map.addLayer(overlayGroup2);

      var layerSwitcher = new ol.control.LayerSwitcher({
        activationMode: "click",
        startActive: false,
        groupSelectStyle: "children",
      });
      map.addControl(layerSwitcher);

      var mousePosition = new ol.control.MousePosition({
        className: "mousePosition",
        projection: "EPSG: 4326",
        coordinateFormat: function (coordinate) {
          return ol.coordinate.format(coordinate, "{y},{x}", 5);
        },
      });
      map.addControl(mousePosition);

      var scaleControl = new ol.control.ScaleLine({
        bar: true,
        text: true,
      });

      var fsButton = document.createElement("button");
      fsButton.innerHTML = '<i class="bi bi-arrows-fullscreen"></i>';
      fsButton.className = "myButton";
      fsButton.style ="position: absolute;top: 52px;left: -26px;width: 23px; height:23px; background-color: rgba(0,60,136,.5)";

      var fsElement = document.createElement("div");
      fsElement.className = "fsButtonDiv";
      fsElement.appendChild(fsButton);

      var fsControl = new ol.control.Control({
        element: fsElement,
      });

      fsButton.addEventListener("click", () => {
        var mapEle = document.getElementById("map");
        if (mapEle.requestFullscreen) {
          mapEle.requestFullscreen();
        } else if (mapEle.msRequestFullscreen) {
          mapEle.msRequestFullscreen();
        } else if (mozRequestFullscreen) {
          mapEle.mozRequestFullscreen();
        } else if (mapEle.webkitRequestFullscreen) {
          mapEle.webkitRequestFullscreen();
        }
      });
      map.addControl(fsControl);
    </script>
  </body>
</html>
