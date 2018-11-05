$(document).ready(function() {


	//datetime picker
	$(function() {
		// $('#datelogin').dateDropper({});
		// $('#datelogin').dateDropper({});
		$('#datelogin').datepicker({
			format: 'yyyy-mm-dd'
		});

	});

	//input name
// console.log(base_url + "base/getContent");

	// (function() {
	// 	$.ajax(
	// 		{url : base_url + "base/getContent", type: 'GET', dataType: 'json'}
	// 	).then(function(res) {
			// var alumnis = JSON.parse(res);
			// console.log(res);
			
			// var alumnis = res.map(function(alumni) {
			// 	var alum = alumni.nama.toUpperCase() + ' PRODI ' + alumni.prodi.toUpperCase();
			// 	return alum;
			// })
			// // var nims = res.map(function(alumni) {
			// //   return alumni.nim;
			// // })
			// $("#namaselect").autocomplete({
			// 	minLength: 4,
			// 	source: alumnis,
			// 	focus:function(e, u) {
			// 		var valueNama = u.item.label;
			// 		var replaceNama = valueNama.replace(/ PRODI.*/, '');
			// 		$('#namaselect').val(replaceNama);
			// 	},
			// 	select: function(e, u) {
			// 		var valueNama = u.item.label;
			// 		var replaceNama = valueNama.replace(/ PRODI.*/, '');
			// 		// console.log(replaceNama);
			// 		var selectedName = replaceNama;
			// 		// console.log(u.item.label);
			// 		var alumniTarget = res.find(function(item) {
			// 			return item.nama === selectedName;
			// 		})
			// 		$('#nim').val(alumniTarget.nim);
			// 		$('#namaselect').val(replaceNama);
			// 		console.log(alumniTarget.nama);
			// 		// console.log(alumniTarget);
			// 		return false;
			// 	}
			// })
			// $("#mk-fullscreen-search-input").autocomplete({
			// 	minLength: 4,
			// 	source: alumnis,
			// 	focus:function(e, u) {
			// 		var valueNama = u.item.label;
			// 		var replaceNama = valueNama.replace(/ PRODI.*/, '');
			// 		$('#namaselect').val(replaceNama);
			// 	},
			// 	select: function(e, u) {
			// 		var valueNama = u.item.label;
			// 		var replaceNama = valueNama.replace(/ PRODI.*/, '');
			// 		// console.log(replaceNama);
			// 		var selectedName = replaceNama;
			// 		// console.log(u.item.label);
			// 		var alumniTarget = res.find(function(item) {
			// 			return item.nama === selectedName;
			// 		})
			// 		// $('#nama_profile').append("<a id="nama_profile">"+alumniTarget.NAMA+"</a>");
			// 		// console.log(alumniTarget.NIM);
			// 		// console.log(alumniTarget.NAMA);
			// 		// console.log(alumniTarget.AGAMA);
			// 		var w = window.open(site_url + "/base/profile/" + alumniTarget.nim, "_self");

			// 		// w.document.load(
			// 		//   $('#nim').val(alumniTarget.NIM)
			// 		//
			// 		// );
			// 		// console.log(alumniTarget);
			// 		return false;
			// 	}
			// });
			// console.log(namas);
			// console.log(alumnis);
	// 	})
	// })();
		$.ajax({
			url: base_url + "base/getContent",
			type: "GET",
			dataType: "json",
			success: function (res) {
					// console.log(res);

					var alumnis = res.map(function(alumni) {
						var alum = alumni.nama.toUpperCase() + ' PRODI ' + alumni.namaunit.toUpperCase();
						// var alum  = alumni.nama;
						// console.log(alum);
						return alum;
					})
					// var nims = res.map(function(alumni) {
					//   return alumni.nim;
					// })
					$("#namaselect").autocomplete({
						minLength: 4,
						source: alumnis,
						select: function(e, u) {
							var valueNama = u.item.label;
							var replaceNama = valueNama.replace(/ PRODI.*/, '');
							// console.log(replaceNama);
							var selectedName = valueNama;
							// console.log(u.item);
							var alumniTarget = res.find(function(item) {
								return item.nama === replaceNama;
							})
							$('#nim').val(alumniTarget.nim);
							$('#namaselect').val(valueNama);
							$('#namaHidden').val(replaceNama);
							// console.log(alumniTarget.nama);
							// console.log(alumniTarget);
							return false;
						}
					})
					$("#mk-fullscreen-search-input").autocomplete({
						minLength: 4,
						source: alumnis,
						focus:function(e, u) {
							var valueNama = u.item.label;
							var replaceNama = valueNama.replace(/ PRODI.*/, '');
							$('#namaselect').val(replaceNama);
						},
						select: function(e, u) {
							var valueNama = u.item.label;
							var replaceNama = valueNama.replace(/ PRODI.*/, '');
							// console.log(replaceNama);
							var selectedName = replaceNama;
							// console.log(u.item.label);
							var alumniTarget = res.find(function(item) {
								return item.nama === selectedName;
							})
							// $('#nama_profile').append("<a id="nama_profile">"+alumniTarget.NAMA+"</a>");
							// console.log(alumniTarget.NIM);
							// console.log(alumniTarget.NAMA);
							// console.log(alumniTarget.AGAMA);
							var w = window.open(site_url + "/base/profile/" + alumniTarget.nim, "_self");
		
							// w.document.load(
							//   $('#nim').val(alumniTarget.NIM)
							//
							// );
							// console.log(alumniTarget);
							return false;
						}
					});
			}
	});



	// //smooth scroll
	$('a[href*="#"]')
		// Remove links that don't actually link to anything
		.not('[href="#"]')
		.not('[href="#0"]')
		.click(function(event) {
			// On-page links
			if (
				location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
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
							$target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
							$target.focus(); // Set focus again
						};
					});
				}
			}
		});



	var divmenu = $('.icon-box').length > 0
	if (divmenu) {

		$('.icon-box .entry-content').each(function() {
			var isiAwal = $(this).text();
			$(this).text(isiAwal.substr(0, 100) + " ...")
		})
	}



});


//sho hide button
function showStuff(idtohide, idtoshow, btn) {
	document.getElementById(idtoshow).style.display = 'block';
	document.getElementById(idtohide).style.display = 'none';
	$('.alert').remove();
}
