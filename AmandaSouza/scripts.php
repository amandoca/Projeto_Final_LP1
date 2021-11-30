  <!--  SCRIPTS  -->
  <!-- JQuery -->
  <script type="text/javascript" src="../AmandaSouza/mdb/js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="../AmandaSouza/mdb/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="../AmandaSouza/mdb/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="../AmandaSouza/mdb/js/mdb.min.js"></script>
  <script>
    new WOW().init();

    // MDB Lightbox Init
    $(function () {
      $("#mdb-lightbox-ui").load("../AmandaSouza/mdb-addons/mdb-lightbox-ui.html");
    });

</script>


  <script src="https://maps.google.com/maps/api/js"></script>
    
  <script>
    function init_map() {

      var var_location = new google.maps.LatLng(40.725118, -73.997699);

      var var_mapoptions = {
        center: var_location,

        zoom: 14
      };

      var var_marker = new google.maps.Marker({
        position: var_location,
        map: var_map,
        title: "New York"
      });

      var var_map = new google.maps.Map(document.getElementById("map-container"),
        var_mapoptions);

      var_marker.setMap(var_map);

    }

    google.maps.event.addDomListener(window, 'load', init_map);
  </script>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link rel="icon" href="../AmandaSouza/mdb/img/favicon-32x32.png" />
  <link href="../AmandaSouza/css/bootstrap.min.css" rel="stylesheet">
  <link href="../AmandaSouza/css/mdb.min.css" rel="stylesheet">