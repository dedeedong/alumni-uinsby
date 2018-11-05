$(document).ready(function () {
    $("#sidebar").mCustomScrollbar({
        theme: "minimal"
    });

    $('#sidebarCollapse').on('click', function () {
        $('#sidebar, #content').toggleClass('active');
        $('.collapse.in').toggleClass('in');
        $('a[aria-expanded=true]').attr('aria-expanded', 'false');
    });

    (function(){
      $.ajax(
        site_url + '/careeruinsa/get_np'
      ).then (function (res) {
        var nps = JSON.parse(res);
        var namas = nps.map(function(np) {
          return np.NAMA;
        })
        // console.log(namas);
        $("#np").autocomplete({
          source: namas,
          select: function (e, u) {
            // console.log(u);
            var selectedName = u.item.label;
            var np = nps.find(function (item) {
              return item.NAMA === selectedName;
            })
            // console.log(selectedName);
          }
        });
      })
    })();
});
$(document).ready(function() {
    $('#example').DataTable();
} );
$(document).ready(function() {
    $('#tabel1').DataTable();
    $('#tabel2').DataTable();
    $('#tabel3').DataTable();
    $('#tabel4').DataTable();
    $('#tabel5').DataTable();
    $('#tabelinfo').DataTable();
    $('#alumnitable').DataTable( {
        "bFilter": false,
        "bPaginate": false,
        "bSort" : false,
        "bInfo": false
    } );
    $('#tablehardskill').DataTable( {
        "bFilter": false,
        "bPaginate": false,
        "bSort" : false,
        "bInfo": false
    } );
    $('#tablehardskill1').DataTable( {
        // "bFilter": false,
        "bPaginate": false,
        "bSort" : false,
        "bInfo": false
    } );
    $('#tablesoftskill').DataTable( {
        "bFilter": false,
        "bPaginate": false,
        "bSort" : false,
        "bInfo": false
    } );
    $('#tablebahasa').DataTable( {
        "bFilter": false,
        "bPaginate": false,
        "bSort" : false,
        "bInfo": false
    } );
    $('#tabellanguageskill').DataTable( {
        // "bFilter": false,
        "bPaginate": false,
        "bSort" : false,
        "bInfo": false
    } );
    $('#tableriwayat').DataTable( {
        "bFilter": false,
        "bPaginate": false,
        "bSort" : false,
        "bInfo": false
    } );
    $('#tabelsoft').DataTable({
        // "bFilter": false,
        "bPaginate": false,
        "bSort" : false,
        "bInfo": false
    });
} );

