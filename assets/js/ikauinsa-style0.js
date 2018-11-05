$(document).ready(function () {

  //datetime picker
  $(function(){
  $('#datelogin').dateDropper({});
  });

  //input name
  (function(){
    $.ajax(
      site_url + '/base/get_alumni'
    ).then (function (res) {
      var alumnis = JSON.parse(res);
      var namas = alumnis.map(function(alumni) {
        return alumni.NAMA;
      })
      $("#namaselect").autocomplete({
        source: namas,
        select: function (e, u) {
          console.log(u.item.label);
          var selectedName = u.item.label;
          var alumniTarget = alumnis.find(function (item) {
            return item.NAMA === selectedName;
          })
          $('#nim').val(alumniTarget.NIM);
          // console.log(alumniTarget.NIM);
          // console.log(alumniTarget);
        }
      });
      $("#mk-fullscreen-search-input").autocomplete({
        source: namas,
        select: function (e, u) {
          console.log(u.item.label);
          var selectedName = u.item.label;
          // var alumniTarget = alumnis.find(function (item) {
          //   return item.NAMA === selectedName;
          // })
          // $('#nim').val(alumniTarget.NIM);
          // console.log(alumniTarget.NIM);
          // console.log(alumniTarget);
        }
      });
      // console.log(namas);
      // console.log(alumnis);
    })
  })();

  // //smooth scroll
  $('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
      &&
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });

  var hasBeritaList = $('#berita-list').length > 0
  if (hasBeritaList) {
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

    $('#berita-list .event_isi').each(function () {
      var isiAwal = $(this).text();
      $(this).text(isiAwal.substr(0, 145) + "...")
    })
  }

});
