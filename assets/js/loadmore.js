$(document).ready(function(){
    readmoreberita(0);

    $("#load_more").click(function(e){
        e.preventDefault();
        var page = $(this).data('val');
        readmoreberita(page);

    });
    //video_baru();
});

var readmoreberita = function(page){
    $("#tunggu").show();
    var coba1 = $('#coba1').val();

    $("#load_more").hide();
    // $("#tunggu").show();
    $.ajax({
        url:  site_url+"/base/get_loadmore",
        type:'GET',
        data: {page:coba1}
    }).done(function(response){
      // console.log(response);
      var par = parseInt(coba1)+1;
      // alert(par);
       $('#coba1').val(par);
        $("#berita-list").append(response);
        $("#load_more").show();
        $("#tunggu").hide();
        $('#load_more').data('val', ($('#load_more').data('val')+1));
        //scroll();
        if(response == ""){
            $("#load_more").hide();
        }
        ///////////////////////////////////////////////////

        var hasBeritaList = $('#berita-list').length > 0;
        if (hasBeritaList) {
          // $('.event_date_sql').empty();
          $('#berita-list .event_date').each(function () {
            var dateSQL = $(this).find('.event_date_sql').text();
            // console.log(dateSQL)
            var dateMoment = moment(dateSQL).format('YYYY-MM-DD');
            // console.log([dateMoment])
            var date = moment(dateSQL).format('D');
            var month = moment(dateSQL).format('MMMM');
            // console.log(date, month);
            $(this).find('.event_day').text(date);
            $(this).find('.event_month').text(month);

          })

          $('.event_isi').each(function () {
            var isiAwal = $(this).text();
            $(this).text(isiAwal.substr(0, 320) + "...")
          })
        }
    });

};
