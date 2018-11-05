$(document).ready(function () {
	$.ajax(
		site_url + '/perusahaan/get_data_rekan'
	).then(function (res) {
		var alumniss = JSON.parse(res);

		if (alumniss.STATUS == "swasta") {
			document.querySelector('input[name=status-perusahaan][value="swasta"]').checked = true;
		} else {
			document.querySelector('input[name=status-perusahaan][value="bumn"]').checked = true;
		}

		if (alumniss.SKALA == "lokal") {
			document.querySelector('input[name=skala-perusahaan][value="lokal"]').checked = true;
		} else if (alumniss.SKALA == "nasional") {
			document.querySelector('input[name=skala-perusahaan][value="nasional"]').checked = true;
		} else {
			document.querySelector('input[name=skala-perusahaan][value="multinasional"]').checked = true;
		}

		// console.log(alumniss);
	})
	$("#id_perusahaan").attr("readonly", "readonly");
	$("#nama_perusahaan").attr("readonly", "readonly");

	// select bahasa
	var bahasas="";
	var nobahasa = 0;
	var bahasasArrayString="";
	var arrayselectedbahasa = [];
	(function () {
		$.ajax(
			site_url + '/perusahaan/get_bahasa_id'
		).then(function (res) {
			var languageskills = JSON.parse(res);
			var nobahasa = 0;
			var bhsArrayString = languageskills.map(function (bhspar) {
				return bhspar.LANGUAGE;
			})
			function split(val) {
				return val.split(/,\s*/);
			}
            function extractLast(term) {
				return split(term).pop();
			}

			$("#selectbahasa")
				// don't navigate away from the field on tab when selecting an item
				.on("keydown", function (event) {
					if (event.keyCode === $.ui.keyCode.TAB &&
						$(this).autocomplete("instance").menu.active) {
						event.preventDefault();
					}
				})
				.autocomplete({
					minLength: 0,
					source: function (request, response) {
						// delegate back to autocomplete, but extract the last term
						response($.ui.autocomplete.filter(
							bhsArrayString, extractLast(request.term)));
					},
					focus: function () {
						// prevent value inserted on focus
						return false;
					},
					select: function (event, ui) {
						var terms = split(this.value);
						var inputValue = event.target.value;
						var valueArray = inputValue.split(', ');
						valueArray.splice(valueArray.length - 1);
						var selectedbhs = ui.item.label;
						var indexSelectedbhs = valueArray.indexOf(selectedbhs);
						if (indexSelectedbhs < 0) {
							// remove the current input
							terms.pop();
							// add the selected item
							terms.push(ui.item.value);
							// add placeholder to get the comma-and-space at the end
							terms.push("");
							this.value = terms.join(", ");
						}
						terms.splice(terms.length - 1);
						arrayselectedbahasa = terms;
						console.log(arrayselectedbahasa.toString());

						return false;
					}
				});
		})
	})();


	var soft = [];
	(function () {
		$.ajax(
			base_url + 'assets/json/softskill.json'
		).then(function (res) {
			var softskillArrayString = res.map(function (skill) {
				return skill.softskill;
			})

			function split(val) {
				return val.split(/,\s*/);
			}

			function extractLast(term) {
				return split(term).pop();
			}

			$("#selectsoftskill")
				// don't navigate away from the field on tab when selecting an item
				.on("keydown", function (event) {
					if (event.keyCode === $.ui.keyCode.TAB &&
						$(this).autocomplete("instance").menu.active) {
						event.preventDefault();
					}
				})
				.autocomplete({
					minLength: 0,
					source: function (request, response) {
						// delegate back to autocomplete, but extract the last term
						response($.ui.autocomplete.filter(
							softskillArrayString, extractLast(request.term)));
					},
					focus: function () {
						// prevent value inserted on focus
						return false;
					},
					select: function (event, ui) {
						var terms = split(this.value);
						var inputValue = event.target.value;
						var valueArray = inputValue.split(', ');
						valueArray.splice(valueArray.length - 1);
						var selectedsoft = ui.item.label;
						var indexSelectedSoftSkill = valueArray.indexOf(selectedsoft);
						if (indexSelectedSoftSkill < 0) {
							// remove the current input
							terms.pop();
							// add the selected item
							terms.push(ui.item.value);
							// add placeholder to get the comma-and-space at the end
							terms.push("");
							this.value = terms.join(", ");
						}
						terms.splice(terms.length - 1);
						soft = terms;
						console.log(soft.toString());

						return false;
					}
				});
		})
	})();

	var arrayselectedhardskill = [];
	(function () {
		$.ajax(
			site_url + '/perusahaan/get_hard_skill'
		).then(function (res) {
			var hardskills = JSON.parse(res);
			var nohard = 0;
			var hardArrayString = hardskills.map(function (hard) {
				return hard.HARDSKILL;
			})

			function split(val) {
				return val.split(/,\s*/);
			}

            function extractLast(term) {
				return split(term).pop();
			}

            $("#selecthard")
				// don't navigate away from the field on tab when selecting an item
				.on("keydown", function (event) {
					if (event.keyCode === $.ui.keyCode.TAB &&
						$(this).autocomplete("instance").menu.active) {
						event.preventDefault();
					}

})
				.autocomplete({
					minLength: 0,
					source: function (request, response) {
						// delegate back to autocomplete, but extract the last term
						response($.ui.autocomplete.filter(
							hardArrayString, extractLast(request.term)));
					},
					focus: function () {
						// prevent value inserted on focus
						return false;
					},
					select: function (event, ui) {
						var terms = split(this.value);
						var inputValue = event.target.value;
						var valueArray = inputValue.split(', ');
						valueArray.splice(valueArray.length - 1);
						var selectedhard = ui.item.label;
						var indexSelectedHardSkill = valueArray.indexOf(selectedhard);
						if (indexSelectedHardSkill < 0) {
							// remove the current input
							terms.pop();
							// add the selected item
							terms.push(ui.item.value);
							// add placeholder to get the comma-and-space at the end
							terms.push("");
							this.value = terms.join(", ");
						}
						terms.splice(terms.length - 1);
						arrayselectedhardskill = terms;
						console.log(arrayselectedhardskill.toString());

						return false;
					}
				});
		})
	})();

	var juru = [];
	(function () {
		$.ajax(
			base_url + 'assets/json/prodi.json'
		).then(function (res) {
			var jurusanArrayString = res.map(function (jurus) {
				return jurus.prodi;
			})

			function split(val) {
				return val.split(/,\s*/);
			}

			function extractLast(term) {
				return split(term).pop();
			}

			$("#selectjurusan")
				// don't navigate away from the field on tab when selecting an item
				.on("keydown", function (event) {
					if (event.keyCode === $.ui.keyCode.TAB &&
						$(this).autocomplete("instance").menu.active) {
						event.preventDefault();
					}
				})
				.autocomplete({
					minLength: 4,
					source: function (request, response) {
						// delegate back to autocomplete, but extract the last term
						response($.ui.autocomplete.filter(
							jurusanArrayString, extractLast(request.term)));
					},
					focus: function () {
						// prevent value inserted on focus
						return false;
					},
					select: function (event, ui) {
						var terms = split(this.value);
						var inputValue = event.target.value;
						var valueArray = inputValue.split(', ');
						valueArray.splice(valueArray.length - 1);
						var selectedjurusan = ui.item.label;
						var indexSelectedjurusan = valueArray.indexOf(selectedjurusan);
						if (indexSelectedjurusan < 0) {
							// remove the current input
							terms.pop();
							// add the selected item
							terms.push(ui.item.value);
							// add placeholder to get the comma-and-space at the end
							terms.push("");
							this.value = terms.join(", ");
						}
						terms.splice(terms.length - 1);
						juru = terms;
						return false;
					}
				});
		})
	})();

	function combo(thelist, theinput) {
		theinput = document.getElementById(theinput);
		var idx = thelist.selectedIndex;
		var content = thelist.options[idx].innerHTML;
		theinput.value = content;
	}
	var date = $('#tl1').datepicker({
		dateFormat: 'yy-mm-dd'
	}).val();
	var date = $('#tl2').datepicker({
		dateFormat: 'yy-mm-dd'
	}).val();

	$('#btn-simpan').on('click',function(){
        // $('.modal-body').hide();
        // $('.lds-spinner').show();
        var jp = $('#jp').val();
        var kota = $('#kota').val();
        var jk = $("#jenkel:checked").val();
        var ipk = $('#ipk').val();
		var bts = $('#bts').val();
		var pengalaman = $("#pengalaman option:selected").val();
		var jam = $("#jam-kerja:checked").val();
		var nikah = $("#status-nikah:checked").val();
		var tl1 = $('#tl1').val();
		var tl2 = $('#tl2').val();
		var ket = $('#keterangan-lowongan').val();
		// var bhs=JSON.parse(arrayselectedbahasa);
		// var hard=JSON.parse(arrayselectedhardskill);

		// var dataajax = {
		// 	jp:jp,
		// 	kota:kota,
		// 	jk:jk,
		// 	ipk:ipk,
		// 	bts:bts,
		// 	pengalaman:pengalaman,
		// 	jam:jam,
		// 	nikah:nikah,
		// 	tl1:tl1,
		// 	tl2:tl2,
		// 	ket:ket,
		// 	bhs:arrayselectedbahasa.toString(),
		// 	hard:arrayselectedhardskill.toString(),
		// 	juru:juru.toString(),
		// 	soft:soft.toString()
		// };

		// alert(JSON.stringify($("#form-lowongan").serialize()));
		// console.log($("#form-lowongan").serialize();
		// return false;

        $.ajax({
            type : "POST",
            url  : site_url+"/perusahaan/savelowongan",
            dataType : "JSON",
						data : $("#form-lowongan").serialize(),
            success: function(data){
				// alert('sukses');
				window.open(site_url + "/perusahaan/daftarlowongan/", "_self");
			},
			error:function(){
				window.open(site_url + "/perusahaan/daftarlowongan/", "_self");
			}
		});
        return false;
    });

});
