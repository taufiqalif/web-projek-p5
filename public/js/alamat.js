
  function initMap() {
    // Koordinat latitude dan longitude yang akan ditampilkan pada peta
    var myLatLng = { lat: -6.307256, lng: 107.334090 };

    // Buat peta dengan pusat pada koordinat yang telah ditentukan
    var map = new google.maps.Map(document.getElementById('map'), {
      center: myLatLng,
      zoom: 15
    });

    // Tambahkan marker pada peta
    var marker = new google.maps.Marker({
      position: myLatLng,
      map: map,
      title: 'SMPN 2 TELUKJAMBE BARAT'
    });
  }
