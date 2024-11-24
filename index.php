<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kabupaten Sleman</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <link rel="stylesheet" href="plugin/leaflet-search-master/dist/leaflet-search.min.css">
    <link rel="stylesheet" href="plugin/Leaflet.defaultextent-master/dist/leaflet.defaultextent.css">

    <!-- leaflet css link  -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    />

    <title>Web-GIS with geoserver and leaflet</title>

    <style>
      body {
        margin: 0;
        padding: 0;
      }
      #map {
        width: 100%;
        height: calc(100vh - 56px);
      }
    </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><i class="fa-solid fa-map-location-dot"></i>Kabupaten Sleman</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="http://geoportal.slemankab.go.id/" target="_blank"><i
                                class="fa-solid fa-layer-group"></i> Sumber Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#infoModal"><i
                                class="fa-solid fa-circle-info"></i> Info</a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>
    <div id="map"></div>
    <!-- Info Modal -->
    <div class="modal fade" id="infoModal" tabindex="-1" aria-labelledby="infoModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="infoModalLabel">Info Pembuat</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table table-striped table-bordered">
                        <tr>
                            <th>Nama</th>
                            <td>Eka Nafi' Prameysti</td>
                        </tr>
                        <tr>
                            <th>NIM</th>
                            <td>23/515913/SV/22642</td>
                        </tr>
                        <tr>
                            <th>Kelas</th>
                            <td>A</td>
                        </tr>
                        <tr>
                            <th>GitHub</th>
                            <td><a href="https://github.com/ekaprameysti" target="_blank"
                                    rel="noopener noreferrer">https://github.com/ekaprameysti</a></td>
                        </tr>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Feature Modal -->
    <div class="modal fade" id="featureModal" tabindex="-1" aria-labelledby="featureModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="featureModalTitle"></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="featureModalBody">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <script src="plugin/leaflet-search-master/dist/leaflet-search.min.js"></script>
    <script src="plugin/Leaflet.defaultextent-master/dist/leaflet.defaultextent.js"></script>

  </body>
</html>

<!-- leaflet js link  -->
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

<!-- jquery link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- leaflet geoserver request link  -->
<script src="lib/L.Geoserver.js"></script>

<script>
  var map = L.map("map").setView([-7.693787957859059, 110.39823831570061], 12);

  var osm = L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
    maxZoom: 19,
    attribution:
      '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
  });

  osm.addTo(map);

  // wms request
  var wmsLayer1 = L.Geoserver.wms("http://localhost:8080/geoserver/wms", {
    layers: "pgweb_10:ADMINISTRASIDESA_AR_25K",
    transparent: true,
  });
  wmsLayer1.addTo(map);

  //https://geoportal.slemankab.go.id/geoserver/geonode/jalan_ln/ows
  var wmsLayer2 = L.Geoserver.wms("https://geoportal.slemankab.go.id/geoserver/wms", {
    layers: "geonode:jalan_ln",
    transparent: true,
  });
  wmsLayer2.addTo(map);

  var wmsLayer3 = L.Geoserver.wms("http://localhost:8080/geoserver/wms", {
    layers: "pgweb10:Jumlah_Penduduk",
    transparent: true,
  });
  wmsLayer3.addTo(map);

  var layerLegend = L.Geoserver.legend("http://localhost:8080/geoserver/wms", {
    layers: "pgweb_10:ADMINISTRASIDESA_AR_25K",
    // style: `stylefile`,
  });
  layerLegend.addTo(map);

  var baseMaps = {
    "OpenSreetMap": osm
  };

  var overlayMaps = {
    "Batas Administrasi Desa": wmsLayer1,
    "Jalan": wmsLayer2,
    "Penduduk": wmsLayer3
  };
  var layerControl = L.control.layers(baseMaps, overlayMaps).addTo(map);
  //Logo Watermark
  L.Control.Watermark = L.Control.extend({
            onAdd: function (map) {
                var img = L.DomUtil.create('img');

                img.src = 'icon/logo-sv-ugm.png';
                img.style.width = '350px';

                return img;
            },

            onRemove: function (map) {
                // Nothing to do here
            }
        });

        L.control.watermark = function (opts) {
            return new L.Control.Watermark(opts);
        }

        L.control.watermark({ position: 'bottomright' }).addTo(map);
</script>
