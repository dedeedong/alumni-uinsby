$(document).ready(function(){
    $.ajax({
        type: 'GET',
        url: base_url+"/Admin/detailtrace_json/"+nim+"/"+tanggal,
        // data: {'data':id},
        dataType: "json",
        success: function(data) {
          // alert(JSON.stringify(data));
          // alert(data.data[0].ID_BERITA);
            // console.log(data);
            // var jawaban1_json  = JSON.parse(data[0].jawaban);
            // var jawaban3_json  = JSON.parse(data[2].jawaban);
            // var jawaban4_json  = JSON.parse(data[3].jawaban);
            if (data[0] == null) {
                var jawaban1_json  = null;    
            }else{
                var jawaban1_json  = JSON.parse(data[0].jawaban);
            }
            if (data[1] == null) {
                var jawaban2_json  = null;    
            }else{
                var jawaban2_json  = JSON.parse(data[1].jawaban);
            }
            if (data[2] == null) {
                var jawaban3_json  = null;    
            }else{
                var jawaban3_json  = JSON.parse(data[2].jawaban);
            }                
            if (data[3] == null) {
                var jawaban4_json  = null;    
            }else{
                var jawaban4_json  = JSON.parse(data[3].jawaban);
            }
            // alert(JSON.stringify(jawaban2_json));
            // alert("tes");
            
			
			// var jawabMap = data.jawaban.map(function(val){
				// console.log(val);
			// })
			
			// var dataMap = data.map(function(v) {
				// return v.jawaban;
			// })
			
			// // console.log(JSON.parse(dataMap[0]));
			
			
			
			// console.log(data[0]);
			
			// let datax = [];
			
			// datax = data.map( function(datar) {
			// //	console.log(datar.jawaban);
				// return datar.jawaban;
			// });
			
			
			
			//var tes = JSON.parse(dat);
			// alert(jawaban1_json);
			
			// var s = dat.map(function(tt){
				// console.log(tt.id_soal);	
			// });
			
			
			// var alumnis = res.map(function(alumni) {
						// var alum = alumni.nama.toUpperCase() + ' PRODI ' + alumni.namaunit.toUpperCase();
						// // var alum  = alumni.nama;
						// // console.log(alum);
						// return alum;
					// })
            
            //jawaban 1
            $("#jawaban_1").text(jawaban1_json[0].jawaban_1);
            if(jawaban1_json[0].jawaban_2 == "negatif"){
                $("#jawaban_2").text(" Bulan Sebelum Lulus");
            }else{
                $("#jawaban_2").text(" Bulan Sesudah Lulus");
            }
            //jawaban 2
            // console.log(jawaban1_json[1]);
            if(jawaban1_json[1].jawaban_1 == "1"){
                $("#jawaban_3").text('Melalui iklan di koran/majalah, brosur');
            }else{
                $("#li_3").hide();
            }

            if(jawaban1_json[1].jawaban_2 == "2"){
                $("#jawaban_4").text("Melamar ke perusahaan tanpa mengetahui lowongan yang ada <br>");
            }else{
                $("#li_4").hide();
            }

            if(jawaban1_json[1].jawaban_3 == "3"){
                $("#jawaban_5").text("Pergi ke bursa/pameran kerja <br>");
            }else{
                $("#li_5").hide();
            }

            if(jawaban1_json[1].jawaban_4 == "4"){
                $("#jawaban_6").text("Mencari lewat internet/iklan online/milis");
            }else{
                $("#li_6").hide();
            }
            if(jawaban1_json[1].jawaban_5 == "5"){
                $("#jawaban_7").text("Dihubungi oleh perusahaan");
            }else{
                $("#li_7").hide();
            }
            
            if(jawaban1_json[1].jawaban_6 == "6"){
                $("#jawaban_8").text("Menghubungi Kemnakertrans");
            }else{
                $("#li_8").hide();
            }
            if(jawaban1_json[1].jawaban_7 == "7"){
                $("#jawaban_9").text("Menghubungi agen tenaga kerja komersiaI/swasta");
            }else{
                $("#li_9").hide();
            } 
            if(jawaban1_json[1].jawaban_8 == "8"){
                $("#jawaban_10").text("Memeroleh informasi dari pusat/kantor pengembangan karir fakultas/universitas");
            }else{
                $("#li_10").hide();
            }
            if(jawaban1_json[1].jawaban_9 == "9"){
                $("#jawaban_11").text("Menghubungi kantor kemahasiswaan/hubungan alumni");
            }else{
                $("#li_11").hide();
            }
            if(jawaban1_json[1].jawaban_10 == "10"){
                $("#jawaban_12").text("Membangun network sejak masih kuliah");
            }else{
                $("#li_12").hide();
            }
            if(jawaban1_json[1].jawaban_11 == "11"){
                $("#jawaban_13").text("Melalui relasi (misalnya dosen, orantua, saudara, teman, dll.)");
            }else{
                $("#li_13").hide();
            }
            if(jawaban1_json[1].jawaban_12 == "12"){
                $("#jawaban_14").text("Membangun bisnis sendiri");
            }else{
                $("#li_14").hide();
            }
            if(jawaban1_json[1].jawaban_13 == "13"){
                $("#jawaban_15").text("Melalui penempatan kerja atau magang");
            }else{
                $("#li_15").hide();
            }
            if(jawaban1_json[1].jawaban_14 == "14"){
                $("#jawaban_16").text("Bekerja di tempat yang sama dengan tempat kerja semasa kuliah");
            }else{
                $("#li_16").hide();
            }
            if(jawaban1_json[1].jawaban_15 == "15"){
                $("#jawaban_17").text("Lainnya.");
            }else{
                $("#li_17").hide();
            }
            //jawaban 3
            $("#jawaban_18").text(jawaban1_json[2].jawaban_1+" Perusahaan/Instansi/Institusi");
            //jawaban 4
            $("#jawaban_19").text(jawaban1_json[3].jawaban_1);
            if(jawaban1_json[3].jawaban_2 == "negatif"){
                $("#jawaban_20").text(" Bulan Sebelum Lulus");
            }else{
                $("#jawaban_20").text(" Bulan Sesudah Lulus");
            }
            //jawaban 5
            $("#jawaban_21").text(jawaban1_json[4].jawaban_1+" Perusahaan/Instansi/Institusi");
            //jawaban 6
            if(jawaban1_json[5].jawaban_1 == "Y"){
                $("#jawaban_22").text("Ya");
            }else{
                $("#jawaban_22").text("Tidak");
            }
            //jawaban 7
            if(jawaban1_json[6].jawaban_1 == "1"){
                $("#jawaban_23").text("Saya masih belajar/melanjutkan kuliah profesi atau pascasarjana");
            }else{
                $("#li_23").hide();
            }
            if(jawaban1_json[6].jawaban_2 == "2"){
                $("#jawaban_24").text("Saya menikah");
            }else{
                $("#li_24").hide();
            }
            if(jawaban1_json[6].jawaban_3 == "3"){
                $("#jawaban_25").text("Saya sibuk dengan keluarga dan anak-anak");
            }else{
                $("#li_25").hide();
            }
            if(jawaban1_json[6].jawaban_4 == "4"){
                $("#jawaban_26").text("Saya sekarang sedang mencari pekerjaan");
            }else{
                $("#li_26").hide();
            }
            if(jawaban1_json[6].jawaban_5 == "5"){
                $("#jawaban_27").text("Lainnya");
            }else{
                $("#li_27").hide();
            }
            //jawaban 8
            if(jawaban1_json[7].jawaban_1 == "1"){
                $("#jawaban_28").text("Tidak");
            }else if(jawaban1_json[7].jawaban_2 == "2"){
                $("#jawaban_28").text("Tidak, tapi saya sedang menunggu hasil lamaran kerja");
            }else if(jawaban1_json[7].jawaban_3 == "3"){
                $("#jawaban_28").text("Ya, saya akan mulai bekerja dalam 2 minggu ke depan");
            }else if(jawaban1_json[7].jawaban_4 == "4"){
                $("#jawaban_28").text("Ya, tapi saya belum pasti akan bekerja dalam 2 minggu ke depan");
            }else if(jawaban1_json[7].jawaban_5 == "5"){
                $("#jawaban_28").text("Lainnya");
            }
            //jawaban 9
            if(jawaban1_json[8].jawaban_1 == "1"){
                $("#jawaban_29").text("Instansi pemerintah (termasuk BUMN)");
            }else if(jawaban1_json[8].jawaban_2 == "2"){
                $("#jawaban_29").text("Perusahaan swasta");
            }else if(jawaban1_json[8].jawaban_3 == "3"){
                $("#jawaban_29").text("Organisasi non-profit/Lembaga Swadaya Masyarakat");
            }else if(jawaban1_json[8].jawaban_4 == "4"){
                $("#jawaban_29").text("Wiraswasta/perusahaan sendiri");
            }else if(jawaban1_json[8].jawaban_5 == "5"){
                $("#jawaban_29").text("Lainnya");
            }
            //jawaban 10
            if(jawaban1_json[9].jawaban_1 == "A"){
                $("#jawaban_30").text("Pertanian, kehutanan, dan perikanan");
            }else if(jawaban1_json[9].jawaban_1 == "B"){
                $("#jawaban_30").text("Pertambangan dan penggalian");
            }else if(jawaban1_json[9].jawaban_1 == "C"){
                $("#jawaban_30").text("Industri pengolahan");
            }else if(jawaban1_json[9].jawaban_1 == "D"){
                $("#jawaban_30").text("Pengadaan listrik, gas, uap/air panas dan udara dingin");
            }else if(jawaban1_json[9].jawaban_1 == "E"){
                $("#jawaban_30").text("Pengadaan air, pengelolaan sampah dan daur ulang, pembuangan dan pembersihan limbah dan sampah");
            }else if(jawaban1_json[9].jawaban_1 == "F"){
                $("#jawaban_30").text("Konstruksi");
            }else if(jawaban1_json[9].jawaban_1 == "G"){
                $("#jawaban_30").text("Perdagangan besar dan eceran; reparasi dan perawatan mobil dan sepeda motor");
            }else if(jawaban1_json[9].jawaban_1 == "H"){
                $("#jawaban_30").text("Transportasi dan pergudangan");
            }else if(jawaban1_json[9].jawaban_1 == "I"){
                $("#jawaban_30").text("IPenyediaan akomodasi dan penyediaan makan minum");
            }else if(jawaban1_json[9].jawaban_1 == "J"){
                $("#jawaban_30").text("Informasi dan komunikasi");
            }else if(jawaban1_json[9].jawaban_1 == "K"){
                $("#jawaban_30").text("Jasa keuangan dan asuransi");
            }else if(jawaban1_json[9].jawaban_1 == "L"){
                $("#jawaban_30").text("Real estat");
            }else if(jawaban1_json[9].jawaban_1 == "M"){
                $("#jawaban_30").text("Jasa profesional, ilmiah dan teknis");
            }else if(jawaban1_json[9].jawaban_1 == "N"){
                $("#jawaban_30").text("Jasa persewaan dan sewa guna usaha tanpa hak opsi, ketenagakerjaan, agen perjalanan & penunjang usaha lainnya");
            }else if(jawaban1_json[9].jawaban_1 == "O"){
                $("#jawaban_30").text("Administrasi pemerintahan, pertahanan dan jaminan sosial wajib");
            }else if(jawaban1_json[9].jawaban_1 == "P"){
                $("#jawaban_30").text("Jasa pendidikan");
            }else if(jawaban1_json[9].jawaban_1 == "Q"){
                $("#jawaban_30").text("Jasa kesehatan dan kegiatan sosial");
            }else if(jawaban1_json[9].jawaban_1 == "R"){
                $("#jawaban_30").text("Kesenian, hiburan dan rekreasi");
            }else if(jawaban1_json[9].jawaban_1 == "S"){
                $("#jawaban_30").text("Kegiatan jasa lainnya");
            }else if(jawaban1_json[9].jawaban_1 == "T"){
                $("#jawaban_30").text("Jasa perorangan yang melayani rumah tangga; kegiatan yang menghasilkan barang dan jasa oleh rumah tangga yang digunakan sendiri untuk memenuhi kebutuhan");
            }else if(jawaban1_json[9].jawaban_1 == "U"){
                $("#jawaban_30").text("Kegiatan badan internasional dan badan ekstra internasional lainnya");
            }
            //jawaban 11
            $("#jawaban_31").text("Rp."+jawaban1_json[10].jawaban_1+" Dari Pekerjaan Utama");
            $("#jawaban_32").text("Rp."+jawaban1_json[10].jawaban_2+" Dari Lembur dan Tips");
            $("#jawaban_33").text("Rp."+jawaban1_json[10].jawaban_3+" Dari Pekerjaan Lainnya");
            //jawaban 12
            if(jawaban1_json[11].jawaban_1 == "1"){
                $("#jawaban_34").text("Sangat erat");
            }else if(jawaban1_json[11].jawaban_2 == "2"){
                $("#jawaban_34").text("Cukup erat");
            }else if(jawaban1_json[11].jawaban_3 == "3"){
                $("#jawaban_34").text("Erat");
            }else if(jawaban1_json[11].jawaban_4 == "4"){
                $("#jawaban_34").text("Kurang Erat");
            }else if(jawaban1_json[11].jawaban_5 == "5"){
                $("#jawaban_34").text("Tidak Erat");
            }
            //jawaban 13
            if(jawaban1_json[12].jawaban_1 == "1"){
                $("#jawaban_35").text("Setingkat lebih tinggi");
            }else if(jawaban1_json[12].jawaban_2 == "2"){
                $("#jawaban_35").text("Tingkat yang sama");
            }else if(jawaban1_json[12].jawaban_3 == "3"){
                $("#jawaban_35").text("Setingkat lebih rendah");
            }else if(jawaban1_json[12].jawaban_4 == "4"){
                $("#jawaban_35").text("Tidak perlu pendidikan tinggi");
            }
            //jawaban 14
            if(jawaban1_json[13].jawaban_1 == "1"){
                $("#jawaban_36").text("Pertanyaan tidak sesuai; pekerjaan saya sekarang sudah sesuai dengan pendidikan saya");
            }else{
                $("#li_36").hide();
            }
            if(jawaban1_json[13].jawaban_2 == "2"){
                $("#jawaban_37").text("Saya belum mendapatkan pekerjaan yang lebih sesuai");
            }else{
                $("#li_37").hide();
            }
            if(jawaban1_json[13].jawaban_3 == "3"){
                $("#jawaban_38").text("Di pekerjaan ini saya memeroleh prospek karir yang baik");
            }else{
                $("#li_38").hide();
            }
            if(jawaban1_json[13].jawaban_4 == "4"){
                $("#jawaban_39").text("Saya lebih suka bekerja di area pekerjaan yang tidak ada hubungannya dengan pendidikan saya");
            }else{
                $("#li_39").hide();
            }
            if(jawaban1_json[13].jawaban_5 == "5"){
                $("#jawaban_40").text("Saya dipromosikan ke posisi yang kurang berhubungan dengan pendidikan saya dibanding posisi sebelumnya");
            }else{
                $("#li_40").hide();
            }
            if(jawaban1_json[13].jawaban_6 == "6"){
                $("#jawaban_41").text("Saya dapat memeroleh pendapatn yang lebih tinggi di pekerjaan ini");
            }else{
                $("#li_41").hide();
            }
            if(jawaban1_json[13].jawaban_7 == "7"){
                $("#jawaban_42").text("Pekerjaan saya saat ini lebih aman/terjamin/secure");
            }else{
                $("#li_42").hide();
            }
            if(jawaban1_json[13].jawaban_8 == "8"){
                $("#jawaban_43").text("Pekerjaan saya saat ini lebih menarik");
            }else{
                $("#li_43").hide();
            }
            if(jawaban1_json[13].jawaban_9 == "9"){
                $("#jawaban_44").text("Pekerjaan saya saat ini lebih memungkinkan saya mengambil pekerjaan tambahan/jadwal yang fleksibel, dll");
            }else{
                $("#li_44").hide();
            }
            if(jawaban1_json[13].jawaban_10 == "10"){
                $("#jawaban_45").text("Pekerjaan saya saat ini lokasinya lebih dekat dari rumah saya");
            }else{
                $("#li_45").hide();
            }
            if(jawaban1_json[13].jawaban_11 == "11"){
                $("#jawaban_46").text("Pekerjaan saya saat ini dapat lebih menjamin kebutuhan keluarga saya");
            }else{
                $("#li_46").hide();
            }
            if(jawaban1_json[13].jawaban_12 == "12"){
                $("#jawaban_47").text("Pada awal meniti karir ini, saya harus menerima pekerjaan yang tidak berhubungan dengan pendidikan saya");
            }else{
                $("#li_47").hide();
            }
            if(jawaban1_json[13].jawaban_13 == "13"){
                $("#jawaban_48").text("Lainnya");
            }else{
                $("#li_48").hide();
            }

            //soal halaman 2
            //jawaban 1

            if(jawaban2_json[0].jawaban_1 == "5"){
                $("#jawaban_49").text("Sangat Tinggi");
            }else if(jawaban2_json[0].jawaban_1 == "4"){
                $("#jawaban_49").text("Tinggi");
            }else if(jawaban2_json[0].jawaban_1 == "3"){
                $("#jawaban_49").text("Cukup");
            }else if(jawaban2_json[0].jawaban_1 == "2"){
                $("#jawaban_49").text("Rendah");
            }else if(jawaban2_json[0].jawaban_1 == "1"){
                $("#jawaban_49").text("Sangat Rendah");
            }
            //jawaban 2
            if(jawaban2_json[1].jawaban_1 == "5"){
                $("#jawaban_50").text("Sangat Tinggi");
            }else if(jawaban2_json[1].jawaban_1 == "4"){
                $("#jawaban_50").text("Tinggi");
            }else if(jawaban2_json[1].jawaban_1 == "3"){
                $("#jawaban_50").text("Cukup");
            }else if(jawaban2_json[1].jawaban_1 == "2"){
                $("#jawaban_50").text("Rendah");
            }else if(jawaban2_json[1].jawaban_1 == "1"){
                $("#jawaban_50").text("Sangat Rendah");
            }
            //jawaban 3
            if(jawaban2_json[2].jawaban_1 == "5"){
                $("#jawaban_51").text("Sangat Tinggi");
            }else if(jawaban2_json[2].jawaban_1 == "4"){
                $("#jawaban_51").text("Tinggi");
            }else if(jawaban2_json[2].jawaban_1 == "3"){
                $("#jawaban_51").text("Cukup");
            }else if(jawaban2_json[2].jawaban_1 == "2"){
                $("#jawaban_51").text("Rendah");
            }else if(jawaban2_json[2].jawaban_1 == "1"){
                $("#jawaban_51").text("Sangat Rendah");
            }
            //jawaban 4
            if(jawaban2_json[3].jawaban_1 == "5"){
                $("#jawaban_52").text("Sangat Tinggi");
            }else if(jawaban2_json[3].jawaban_1 == "4"){
                $("#jawaban_52").text("Tinggi");
            }else if(jawaban2_json[3].jawaban_1 == "3"){
                $("#jawaban_52").text("Cukup");
            }else if(jawaban2_json[3].jawaban_1 == "2"){
                $("#jawaban_52").text("Rendah");
            }else if(jawaban2_json[3].jawaban_1 == "1"){
                $("#jawaban_52").text("Sangat Rendah");
            }
            //jawaban 5
            if(jawaban2_json[4].jawaban_1 == "5"){
                $("#jawaban_53").text("Sangat Tinggi");
            }else if(jawaban2_json[4].jawaban_1 == "4"){
                $("#jawaban_53").text("Tinggi");
            }else if(jawaban2_json[4].jawaban_1 == "3"){
                $("#jawaban_53").text("Cukup");
            }else if(jawaban2_json[4].jawaban_1 == "2"){
                $("#jawaban_53").text("Rendah");
            }else if(jawaban2_json[4].jawaban_1 == "1"){
                $("#jawaban_53").text("Sangat Rendah");
            }
            //jawaban 6
            if(jawaban2_json[5].jawaban_1 == "5"){
                $("#jawaban_54").text("Sangat Tinggi");
            }else if(jawaban2_json[5].jawaban_1 == "4"){
                $("#jawaban_54").text("Tinggi");
            }else if(jawaban2_json[5].jawaban_1 == "3"){
                $("#jawaban_54").text("Cukup");
            }else if(jawaban2_json[5].jawaban_1 == "2"){
                $("#jawaban_54").text("Rendah");
            }else if(jawaban2_json[5].jawaban_1 == "1"){
                $("#jawaban_54").text("Sangat Rendah");
            }
            //jawaban 7
            if(jawaban2_json[6].jawaban_1 == "5"){
                $("#jawaban_55").text("Sangat Tinggi");
            }else if(jawaban2_json[6].jawaban_1 == "4"){
                $("#jawaban_55").text("Tinggi");
            }else if(jawaban2_json[6].jawaban_1 == "3"){
                $("#jawaban_55").text("Cukup");
            }else if(jawaban2_json[6].jawaban_1 == "2"){
                $("#jawaban_55").text("Rendah");
            }else if(jawaban2_json[6].jawaban_1 == "1"){
                $("#jawaban_55").text("Sangat Rendah");
            }
            //jawaban 8
            if(jawaban2_json[7].jawaban_1 == "5"){
                $("#jawaban_56").text("Sangat Tinggi");
            }else if(jawaban2_json[7].jawaban_1 == "4"){
                $("#jawaban_56").text("Tinggi");
            }else if(jawaban2_json[7].jawaban_1 == "3"){
                $("#jawaban_56").text("Cukup");
            }else if(jawaban2_json[7].jawaban_1 == "2"){
                $("#jawaban_56").text("Rendah");
            }else if(jawaban2_json[7].jawaban_1 == "1"){
                $("#jawaban_56").text("Sangat Rendah");
            }
            //jawaban 9
            if(jawaban2_json[8].jawaban_1 == "5"){
                $("#jawaban_57").text("Sangat Tinggi");
            }else if(jawaban2_json[8].jawaban_1 == "4"){
                $("#jawaban_57").text("Tinggi");
            }else if(jawaban2_json[8].jawaban_1 == "3"){
                $("#jawaban_57").text("Cukup");
            }else if(jawaban2_json[8].jawaban_1 == "2"){
                $("#jawaban_57").text("Rendah");
            }else if(jawaban2_json[8].jawaban_1 == "1"){
                $("#jawaban_57").text("Sangat Rendah");
            }
            //jawaban 10
            if(jawaban2_json[9].jawaban_1 == "5"){
                $("#jawaban_58").text("Sangat Tinggi");
            }else if(jawaban2_json[9].jawaban_1 == "4"){
                $("#jawaban_58").text("Tinggi");
            }else if(jawaban2_json[9].jawaban_1 == "3"){
                $("#jawaban_58").text("Cukup");
            }else if(jawaban2_json[9].jawaban_1 == "2"){
                $("#jawaban_58").text("Rendah");
            }else if(jawaban2_json[9].jawaban_1 == "1"){
                $("#jawaban_58").text("Sangat Rendah");
            }
            //jawaban 11
            if(jawaban2_json[10].jawaban_1 == "5"){
                $("#jawaban_59").text("Sangat Tinggi");
            }else if(jawaban2_json[10].jawaban_1 == "4"){
                $("#jawaban_59").text("Tinggi");
            }else if(jawaban2_json[10].jawaban_1 == "3"){
                $("#jawaban_59").text("Cukup");
            }else if(jawaban2_json[10].jawaban_1 == "2"){
                $("#jawaban_59").text("Rendah");
            }else if(jawaban2_json[10].jawaban_1 == "1"){
                $("#jawaban_59").text("Sangat Rendah");
            }
            //jawaban 12
            if(jawaban2_json[11].jawaban_1 == "5"){
                $("#jawaban_60").text("Sangat Tinggi");
            }else if(jawaban2_json[11].jawaban_1 == "4"){
                $("#jawaban_60").text("Tinggi");
            }else if(jawaban2_json[11].jawaban_1 == "3"){
                $("#jawaban_60").text("Cukup");
            }else if(jawaban2_json[11].jawaban_1 == "2"){
                $("#jawaban_60").text("Rendah");
            }else if(jawaban2_json[11].jawaban_1 == "1"){
                $("#jawaban_60").text("Sangat Rendah");
            }
            //jawaban 13
            if(jawaban2_json[12].jawaban_1 == "5"){
                $("#jawaban_61").text("Sangat Tinggi");
            }else if(jawaban2_json[12].jawaban_1 == "4"){
                $("#jawaban_61").text("Tinggi");
            }else if(jawaban2_json[12].jawaban_1 == "3"){
                $("#jawaban_61").text("Cukup");
            }else if(jawaban2_json[12].jawaban_1 == "2"){
                $("#jawaban_61").text("Rendah");
            }else if(jawaban2_json[12].jawaban_1 == "1"){
                $("#jawaban_61").text("Sangat Rendah");
            }
            //jawaban 14
            if(jawaban2_json[13].jawaban_1 == "5"){
                $("#jawaban_62").text("Sangat Tinggi");
            }else if(jawaban2_json[13].jawaban_1 == "4"){
                $("#jawaban_62").text("Tinggi");
            }else if(jawaban2_json[13].jawaban_1 == "3"){
                $("#jawaban_62").text("Cukup");
            }else if(jawaban2_json[13].jawaban_1 == "2"){
                $("#jawaban_62").text("Rendah");
            }else if(jawaban2_json[13].jawaban_1 == "1"){
                $("#jawaban_62").text("Sangat Rendah");
            }
            //jawaban 15
            if(jawaban2_json[14].jawaban_1 == "5"){
                $("#jawaban_63").text("Sangat Tinggi");
            }else if(jawaban2_json[14].jawaban_1 == "4"){
                $("#jawaban_63").text("Tinggi");
            }else if(jawaban2_json[14].jawaban_1 == "3"){
                $("#jawaban_63").text("Cukup");
            }else if(jawaban2_json[14].jawaban_1 == "2"){
                $("#jawaban_63").text("Rendah");
            }else if(jawaban2_json[14].jawaban_1 == "1"){
                $("#jawaban_63").text("Sangat Rendah");
            }
            //jawaban 16
            if(jawaban2_json[15].jawaban_1 == "5"){
                $("#jawaban_64").text("Sangat Tinggi");
            }else if(jawaban2_json[15].jawaban_1 == "4"){
                $("#jawaban_64").text("Tinggi");
            }else if(jawaban2_json[15].jawaban_1 == "3"){
                $("#jawaban_64").text("Cukup");
            }else if(jawaban2_json[15].jawaban_1 == "2"){
                $("#jawaban_64").text("Rendah");
            }else if(jawaban2_json[15].jawaban_1 == "1"){
                $("#jawaban_64").text("Sangat Rendah");
            }
            //jawaban 17
            if(jawaban2_json[16].jawaban_1 == "5"){
                $("#jawaban_65").text("Sangat Tinggi");
            }else if(jawaban2_json[16].jawaban_1 == "4"){
                $("#jawaban_65").text("Tinggi");
            }else if(jawaban2_json[16].jawaban_1 == "3"){
                $("#jawaban_65").text("Cukup");
            }else if(jawaban2_json[16].jawaban_1 == "2"){
                $("#jawaban_65").text("Rendah");
            }else if(jawaban2_json[16].jawaban_1 == "1"){
                $("#jawaban_65").text("Sangat Rendah");
            }
            //jawaban 18
            if(jawaban2_json[17].jawaban_1 == "5"){
                $("#jawaban_66").text("Sangat Tinggi");
            }else if(jawaban2_json[17].jawaban_1 == "4"){
                $("#jawaban_66").text("Tinggi");
            }else if(jawaban2_json[17].jawaban_1 == "3"){
                $("#jawaban_66").text("Cukup");
            }else if(jawaban2_json[17].jawaban_1 == "2"){
                $("#jawaban_66").text("Rendah");
            }else if(jawaban2_json[17].jawaban_1 == "1"){
                $("#jawaban_66").text("Sangat Rendah");
            }
            //jawaban 19
            if(jawaban2_json[18].jawaban_1 == "5"){
                $("#jawaban_67").text("Sangat Tinggi");
            }else if(jawaban2_json[18].jawaban_1 == "4"){
                $("#jawaban_67").text("Tinggi");
            }else if(jawaban2_json[18].jawaban_1 == "3"){
                $("#jawaban_67").text("Cukup");
            }else if(jawaban2_json[18].jawaban_1 == "2"){
                $("#jawaban_67").text("Rendah");
            }else if(jawaban2_json[18].jawaban_1 == "1"){
                $("#jawaban_67").text("Sangat Rendah");
            }
            //jawaban 20
            if(jawaban2_json[19].jawaban_1 == "5"){
                $("#jawaban_68").text("Sangat Tinggi");
            }else if(jawaban2_json[19].jawaban_1 == "4"){
                $("#jawaban_68").text("Tinggi");
            }else if(jawaban2_json[19].jawaban_1 == "3"){
                $("#jawaban_68").text("Cukup");
            }else if(jawaban2_json[19].jawaban_1 == "2"){
                $("#jawaban_68").text("Rendah");
            }else if(jawaban2_json[19].jawaban_1 == "1"){
                $("#jawaban_68").text("Sangat Rendah");
            }
            //jawaban 21
            if(jawaban2_json[20].jawaban_1 == "5"){
                $("#jawaban_69").text("Sangat Tinggi");
            }else if(jawaban2_json[20].jawaban_1 == "4"){
                $("#jawaban_69").text("Tinggi");
            }else if(jawaban2_json[20].jawaban_1 == "3"){
                $("#jawaban_69").text("Cukup");
            }else if(jawaban2_json[20].jawaban_1 == "2"){
                $("#jawaban_69").text("Rendah");
            }else if(jawaban2_json[20].jawaban_1 == "1"){
                $("#jawaban_69").text("Sangat Rendah");
            }
            //jawaban 22
            if(jawaban2_json[21].jawaban_1 == "5"){
                $("#jawaban_70").text("Sangat Tinggi");
            }else if(jawaban2_json[21].jawaban_1 == "4"){
                $("#jawaban_70").text("Tinggi");
            }else if(jawaban2_json[21].jawaban_1 == "3"){
                $("#jawaban_70").text("Cukup");
            }else if(jawaban2_json[21].jawaban_1 == "2"){
                $("#jawaban_70").text("Rendah");
            }else if(jawaban2_json[21].jawaban_1 == "1"){
                $("#jawaban_70").text("Sangat Rendah");
            }
            //jawaban 23
            if(jawaban2_json[22].jawaban_1 == "5"){
                $("#jawaban_71").text("Sangat Tinggi");
            }else if(jawaban2_json[22].jawaban_1 == "4"){
                $("#jawaban_71").text("Tinggi");
            }else if(jawaban2_json[22].jawaban_1 == "3"){
                $("#jawaban_71").text("Cukup");
            }else if(jawaban2_json[22].jawaban_1 == "2"){
                $("#jawaban_71").text("Rendah");
            }else if(jawaban2_json[22].jawaban_1 == "1"){
                $("#jawaban_71").text("Sangat Rendah");
            }
            //jawaban 24
            if(jawaban2_json[23].jawaban_1 == "5"){
                $("#jawaban_72").text("Sangat Tinggi");
            }else if(jawaban2_json[23].jawaban_1 == "4"){
                $("#jawaban_72").text("Tinggi");
            }else if(jawaban2_json[23].jawaban_1 == "3"){
                $("#jawaban_72").text("Cukup");
            }else if(jawaban2_json[23].jawaban_1 == "2"){
                $("#jawaban_72").text("Rendah");
            }else if(jawaban2_json[23].jawaban_1 == "1"){
                $("#jawaban_72").text("Sangat Rendah");
            }
            //jawaban 25
            if(jawaban2_json[24].jawaban_1 == "5"){
                $("#jawaban_73").text("Sangat Tinggi");
            }else if(jawaban2_json[24].jawaban_1 == "4"){
                $("#jawaban_73").text("Tinggi");
            }else if(jawaban2_json[24].jawaban_1 == "3"){
                $("#jawaban_73").text("Cukup");
            }else if(jawaban2_json[24].jawaban_1 == "2"){
                $("#jawaban_73").text("Rendah");
            }else if(jawaban2_json[24].jawaban_1 == "1"){
                $("#jawaban_73").text("Sangat Rendah");
            }
            //jawaban 26
            if(jawaban2_json[25].jawaban_1 == "5"){
                $("#jawaban_74").text("Sangat Tinggi");
            }else if(jawaban2_json[25].jawaban_1 == "4"){
                $("#jawaban_74").text("Tinggi");
            }else if(jawaban2_json[25].jawaban_1 == "3"){
                $("#jawaban_74").text("Cukup");
            }else if(jawaban2_json[25].jawaban_1 == "2"){
                $("#jawaban_74").text("Rendah");
            }else if(jawaban2_json[25].jawaban_1 == "1"){
                $("#jawaban_74").text("Sangat Rendah");
            }
            //jawaban 27
            if(jawaban2_json[26].jawaban_1 == "5"){
                $("#jawaban_75").text("Sangat Tinggi");
            }else if(jawaban2_json[26].jawaban_1 == "4"){
                $("#jawaban_75").text("Tinggi");
            }else if(jawaban2_json[26].jawaban_1 == "3"){
                $("#jawaban_75").text("Cukup");
            }else if(jawaban2_json[26].jawaban_1 == "2"){
                $("#jawaban_75").text("Rendah");
            }else if(jawaban2_json[26].jawaban_1 == "1"){
                $("#jawaban_75").text("Sangat Rendah");
            }

            //halaman 3
            //jawaban 1

            if(jawaban3_json[0].jawaban_1 == "5"){
                $("#jawaban_76").text("Sangat Tinggi");
            }else if(jawaban3_json[0].jawaban_1 == "4"){
                $("#jawaban_76").text("Tinggi");
            }else if(jawaban3_json[0].jawaban_1 == "3"){
                $("#jawaban_76").text("Cukup");
            }else if(jawaban3_json[0].jawaban_1 == "2"){
                $("#jawaban_76").text("Rendah");
            }else if(jawaban3_json[0].jawaban_1 == "1"){
                $("#jawaban_76").text("Sangat Rendah");
            }
            //jawaban 2
            if(jawaban3_json[1].jawaban_1 == "5"){
                $("#jawaban_77").text("Sangat Tinggi");
            }else if(jawaban3_json[1].jawaban_1 == "4"){
                $("#jawaban_77").text("Tinggi");
            }else if(jawaban3_json[1].jawaban_1 == "3"){
                $("#jawaban_77").text("Cukup");
            }else if(jawaban3_json[1].jawaban_1 == "2"){
                $("#jawaban_77").text("Rendah");
            }else if(jawaban3_json[1].jawaban_1 == "1"){
                $("#jawaban_77").text("Sangat Rendah");
            }
            //jawaban 3
            if(jawaban3_json[2].jawaban_1 == "5"){
                $("#jawaban_78").text("Sangat Tinggi");
            }else if(jawaban3_json[2].jawaban_1 == "4"){
                $("#jawaban_78").text("Tinggi");
            }else if(jawaban3_json[2].jawaban_1 == "3"){
                $("#jawaban_78").text("Cukup");
            }else if(jawaban3_json[2].jawaban_1 == "2"){
                $("#jawaban_78").text("Rendah");
            }else if(jawaban3_json[2].jawaban_1 == "1"){
                $("#jawaban_78").text("Sangat Rendah");
            }
            //jawaban 4
            if(jawaban3_json[3].jawaban_1 == "5"){
                $("#jawaban_79").text("Sangat Tinggi");
            }else if(jawaban3_json[3].jawaban_1 == "4"){
                $("#jawaban_79").text("Tinggi");
            }else if(jawaban3_json[3].jawaban_1 == "3"){
                $("#jawaban_79").text("Cukup");
            }else if(jawaban3_json[3].jawaban_1 == "2"){
                $("#jawaban_79").text("Rendah");
            }else if(jawaban3_json[3].jawaban_1 == "1"){
                $("#jawaban_79").text("Sangat Rendah");
            }
            //jawaban 5
            if(jawaban3_json[4].jawaban_1 == "5"){
                $("#jawaban_80").text("Sangat Tinggi");
            }else if(jawaban3_json[4].jawaban_1 == "4"){
                $("#jawaban_80").text("Tinggi");
            }else if(jawaban3_json[4].jawaban_1 == "3"){
                $("#jawaban_80").text("Cukup");
            }else if(jawaban3_json[4].jawaban_1 == "2"){
                $("#jawaban_80").text("Rendah");
            }else if(jawaban3_json[4].jawaban_1 == "1"){
                $("#jawaban_80").text("Sangat Rendah");
            }
            //jawaban 6
            if(jawaban3_json[5].jawaban_1 == "5"){
                $("#jawaban_81").text("Sangat Tinggi");
            }else if(jawaban3_json[5].jawaban_1 == "4"){
                $("#jawaban_81").text("Tinggi");
            }else if(jawaban3_json[5].jawaban_1 == "3"){
                $("#jawaban_81").text("Cukup");
            }else if(jawaban3_json[5].jawaban_1 == "2"){
                $("#jawaban_81").text("Rendah");
            }else if(jawaban3_json[5].jawaban_1 == "1"){
                $("#jawaban_81").text("Sangat Rendah");
            }
            //jawaban 7
            if(jawaban3_json[6].jawaban_1 == "5"){
                $("#jawaban_82").text("Sangat Tinggi");
            }else if(jawaban3_json[6].jawaban_1 == "4"){
                $("#jawaban_82").text("Tinggi");
            }else if(jawaban3_json[6].jawaban_1 == "3"){
                $("#jawaban_82").text("Cukup");
            }else if(jawaban3_json[6].jawaban_1 == "2"){
                $("#jawaban_82").text("Rendah");
            }else if(jawaban3_json[6].jawaban_1 == "1"){
                $("#jawaban_82").text("Sangat Rendah");
            }
            //jawaban 8
            if(jawaban3_json[7].jawaban_1 == "5"){
                $("#jawaban_83").text("Sangat Tinggi");
            }else if(jawaban3_json[7].jawaban_1 == "4"){
                $("#jawaban_83").text("Tinggi");
            }else if(jawaban3_json[7].jawaban_1 == "3"){
                $("#jawaban_83").text("Cukup");
            }else if(jawaban3_json[7].jawaban_1 == "2"){
                $("#jawaban_83").text("Rendah");
            }else if(jawaban3_json[7].jawaban_1 == "1"){
                $("#jawaban_83").text("Sangat Rendah");
            }
            //jawaban 9
            if(jawaban3_json[8].jawaban_1 == "5"){
                $("#jawaban_84").text("Sangat Tinggi");
            }else if(jawaban3_json[8].jawaban_1 == "4"){
                $("#jawaban_84").text("Tinggi");
            }else if(jawaban3_json[8].jawaban_1 == "3"){
                $("#jawaban_84").text("Cukup");
            }else if(jawaban3_json[8].jawaban_1 == "2"){
                $("#jawaban_84").text("Rendah");
            }else if(jawaban3_json[8].jawaban_1 == "1"){
                $("#jawaban_84").text("Sangat Rendah");
            }
            //jawaban 10
            if(jawaban3_json[9].jawaban_1 == "5"){
                $("#jawaban_85").text("Sangat Tinggi");
            }else if(jawaban3_json[9].jawaban_1 == "4"){
                $("#jawaban_85").text("Tinggi");
            }else if(jawaban3_json[9].jawaban_1 == "3"){
                $("#jawaban_85").text("Cukup");
            }else if(jawaban3_json[9].jawaban_1 == "2"){
                $("#jawaban_85").text("Rendah");
            }else if(jawaban3_json[9].jawaban_1 == "1"){
                $("#jawaban_85").text("Sangat Rendah");
            }
            //jawaban 11
            if(jawaban3_json[10].jawaban_1 == "5"){
                $("#jawaban_86").text("Sangat Tinggi");
            }else if(jawaban3_json[10].jawaban_1 == "4"){
                $("#jawaban_86").text("Tinggi");
            }else if(jawaban3_json[10].jawaban_1 == "3"){
                $("#jawaban_86").text("Cukup");
            }else if(jawaban3_json[10].jawaban_1 == "2"){
                $("#jawaban_86").text("Rendah");
            }else if(jawaban3_json[10].jawaban_1 == "1"){
                $("#jawaban_86").text("Sangat Rendah");
            }
            //jawaban 12
            if(jawaban3_json[11].jawaban_1 == "5"){
                $("#jawaban_87").text("Sangat Tinggi");
            }else if(jawaban3_json[11].jawaban_1 == "4"){
                $("#jawaban_87").text("Tinggi");
            }else if(jawaban3_json[11].jawaban_1 == "3"){
                $("#jawaban_87").text("Cukup");
            }else if(jawaban3_json[11].jawaban_1 == "2"){
                $("#jawaban_87").text("Rendah");
            }else if(jawaban3_json[11].jawaban_1 == "1"){
                $("#jawaban_87").text("Sangat Rendah");
            }
            //jawaban 13
            if(jawaban3_json[12].jawaban_1 == "5"){
                $("#jawaban_88").text("Sangat Tinggi");
            }else if(jawaban3_json[12].jawaban_1 == "4"){
                $("#jawaban_88").text("Tinggi");
            }else if(jawaban3_json[12].jawaban_1 == "3"){
                $("#jawaban_88").text("Cukup");
            }else if(jawaban3_json[12].jawaban_1 == "2"){
                $("#jawaban_88").text("Rendah");
            }else if(jawaban3_json[12].jawaban_1 == "1"){
                $("#jawaban_88").text("Sangat Rendah");
            }
            //jawaban 14
            if(jawaban3_json[13].jawaban_1 == "5"){
                $("#jawaban_89").text("Sangat Tinggi");
            }else if(jawaban3_json[13].jawaban_1 == "4"){
                $("#jawaban_89").text("Tinggi");
            }else if(jawaban3_json[13].jawaban_1 == "3"){
                $("#jawaban_89").text("Cukup");
            }else if(jawaban3_json[13].jawaban_1 == "2"){
                $("#jawaban_89").text("Rendah");
            }else if(jawaban3_json[13].jawaban_1 == "1"){
                $("#jawaban_89").text("Sangat Rendah");
            }
            //jawaban 15
            if(jawaban3_json[14].jawaban_1 == "5"){
                $("#jawaban_90").text("Sangat Tinggi");
            }else if(jawaban3_json[14].jawaban_1 == "4"){
                $("#jawaban_90").text("Tinggi");
            }else if(jawaban3_json[14].jawaban_1 == "3"){
                $("#jawaban_90").text("Cukup");
            }else if(jawaban3_json[14].jawaban_1 == "2"){
                $("#jawaban_90").text("Rendah");
            }else if(jawaban3_json[14].jawaban_1 == "1"){
                $("#jawaban_90").text("Sangat Rendah");
            }
            //jawaban 16
            if(jawaban3_json[15].jawaban_1 == "5"){
                $("#jawaban_91").text("Sangat Tinggi");
            }else if(jawaban3_json[15].jawaban_1 == "4"){
                $("#jawaban_91").text("Tinggi");
            }else if(jawaban3_json[15].jawaban_1 == "3"){
                $("#jawaban_91").text("Cukup");
            }else if(jawaban3_json[15].jawaban_1 == "2"){
                $("#jawaban_91").text("Rendah");
            }else if(jawaban3_json[15].jawaban_1 == "1"){
                $("#jawaban_91").text("Sangat Rendah");
            }
            //jawaban 17
            if(jawaban3_json[16].jawaban_1 == "5"){
                $("#jawaban_92").text("Sangat Tinggi");
            }else if(jawaban3_json[16].jawaban_1 == "4"){
                $("#jawaban_92").text("Tinggi");
            }else if(jawaban3_json[16].jawaban_1 == "3"){
                $("#jawaban_92").text("Cukup");
            }else if(jawaban3_json[16].jawaban_1 == "2"){
                $("#jawaban_92").text("Rendah");
            }else if(jawaban3_json[16].jawaban_1 == "1"){
                $("#jawaban_92").text("Sangat Rendah");
            }
            //jawaban 18
            if(jawaban3_json[17].jawaban_1 == "5"){
                $("#jawaban_93").text("Sangat Tinggi");
            }else if(jawaban3_json[17].jawaban_1 == "4"){
                $("#jawaban_93").text("Tinggi");
            }else if(jawaban3_json[17].jawaban_1 == "3"){
                $("#jawaban_93").text("Cukup");
            }else if(jawaban3_json[17].jawaban_1 == "2"){
                $("#jawaban_93").text("Rendah");
            }else if(jawaban3_json[17].jawaban_1 == "1"){
                $("#jawaban_93").text("Sangat Rendah");
            }
            //jawaban 19
            if(jawaban3_json[18].jawaban_1 == "5"){
                $("#jawaban_94").text("Sangat Tinggi");
            }else if(jawaban3_json[18].jawaban_1 == "4"){
                $("#jawaban_94").text("Tinggi");
            }else if(jawaban3_json[18].jawaban_1 == "3"){
                $("#jawaban_94").text("Cukup");
            }else if(jawaban3_json[18].jawaban_1 == "2"){
                $("#jawaban_94").text("Rendah");
            }else if(jawaban3_json[18].jawaban_1 == "1"){
                $("#jawaban_94").text("Sangat Rendah");
            }
            //jawaban 20
            if(jawaban3_json[19].jawaban_1 == "5"){
                $("#jawaban_95").text("Sangat Tinggi");
            }else if(jawaban3_json[19].jawaban_1 == "4"){
                $("#jawaban_95").text("Tinggi");
            }else if(jawaban3_json[19].jawaban_1 == "3"){
                $("#jawaban_95").text("Cukup");
            }else if(jawaban3_json[19].jawaban_1 == "2"){
                $("#jawaban_95").text("Rendah");
            }else if(jawaban3_json[19].jawaban_1 == "1"){
                $("#jawaban_95").text("Sangat Rendah");
            }
            //jawaban 21
            if(jawaban3_json[20].jawaban_1 == "5"){
                $("#jawaban_96").text("Sangat Tinggi");
            }else if(jawaban3_json[20].jawaban_1 == "4"){
                $("#jawaban_96").text("Tinggi");
            }else if(jawaban3_json[20].jawaban_1 == "3"){
                $("#jawaban_96").text("Cukup");
            }else if(jawaban3_json[20].jawaban_1 == "2"){
                $("#jawaban_96").text("Rendah");
            }else if(jawaban3_json[20].jawaban_1 == "1"){
                $("#jawaban_96").text("Sangat Rendah");
            }
            //jawaban 22
            if(jawaban3_json[21].jawaban_1 == "5"){
                $("#jawaban_97").text("Sangat Tinggi");
            }else if(jawaban3_json[21].jawaban_1 == "4"){
                $("#jawaban_97").text("Tinggi");
            }else if(jawaban3_json[21].jawaban_1 == "3"){
                $("#jawaban_97").text("Cukup");
            }else if(jawaban3_json[21].jawaban_1 == "2"){
                $("#jawaban_97").text("Rendah");
            }else if(jawaban3_json[21].jawaban_1 == "1"){
                $("#jawaban_97").text("Sangat Rendah");
            }
            //jawaban 23
            if(jawaban3_json[22].jawaban_1 == "5"){
                $("#jawaban_98").text("Sangat Tinggi");
            }else if(jawaban3_json[22].jawaban_1 == "4"){
                $("#jawaban_98").text("Tinggi");
            }else if(jawaban3_json[22].jawaban_1 == "3"){
                $("#jawaban_98").text("Cukup");
            }else if(jawaban3_json[22].jawaban_1 == "2"){
                $("#jawaban_98").text("Rendah");
            }else if(jawaban3_json[22].jawaban_1 == "1"){
                $("#jawaban_98").text("Sangat Rendah");
            }
            //jawaban 24
            if(jawaban3_json[23].jawaban_1 == "5"){
                $("#jawaban_99").text("Sangat Tinggi");
            }else if(jawaban3_json[23].jawaban_1 == "4"){
                $("#jawaban_99").text("Tinggi");
            }else if(jawaban3_json[23].jawaban_1 == "3"){
                $("#jawaban_99").text("Cukup");
            }else if(jawaban3_json[23].jawaban_1 == "2"){
                $("#jawaban_99").text("Rendah");
            }else if(jawaban3_json[23].jawaban_1 == "1"){
                $("#jawaban_99").text("Sangat Rendah");
            }
            //jawaban 25
            if(jawaban3_json[24].jawaban_1 == "5"){
                $("#jawaban_100").text("Sangat Tinggi");
            }else if(jawaban3_json[24].jawaban_1 == "4"){
                $("#jawaban_100").text("Tinggi");
            }else if(jawaban3_json[24].jawaban_1 == "3"){
                $("#jawaban_100").text("Cukup");
            }else if(jawaban3_json[24].jawaban_1 == "2"){
                $("#jawaban_100").text("Rendah");
            }else if(jawaban3_json[24].jawaban_1 == "1"){
                $("#jawaban_100").text("Sangat Rendah");
            }
            //jawaban 26
            if(jawaban3_json[25].jawaban_1 == "5"){
                $("#jawaban_101").text("Sangat Tinggi");
            }else if(jawaban3_json[25].jawaban_1 == "4"){
                $("#jawaban_101").text("Tinggi");
            }else if(jawaban3_json[25].jawaban_1 == "3"){
                $("#jawaban_101").text("Cukup");
            }else if(jawaban3_json[25].jawaban_1 == "2"){
                $("#jawaban_101").text("Rendah");
            }else if(jawaban3_json[25].jawaban_1 == "1"){
                $("#jawaban_101").text("Sangat Rendah");
            }
            //jawaban 27
            if(jawaban3_json[26].jawaban_1 == "5"){
                $("#jawaban_102").text("Sangat Tinggi");
            }else if(jawaban3_json[26].jawaban_1 == "4"){
                $("#jawaban_102").text("Tinggi");
            }else if(jawaban3_json[26].jawaban_1 == "3"){
                $("#jawaban_102").text("Cukup");
            }else if(jawaban3_json[26].jawaban_1 == "2"){
                $("#jawaban_102").text("Rendah");
            }else if(jawaban3_json[26].jawaban_1 == "1"){
                $("#jawaban_102").text("Sangat Rendah");
            }

            //halaman 4
            //jawaban 1
            if(jawaban4_json[0].jawaban_1 == "1"){
                $("#jawaban_103").text("Ya");
            }else if(jawaban4_json[0].jawaban_1 == "0"){
                $("#jawaban_103").text("Tidak");
            }
            //jawaban 1.1
            if(jawaban4_json[1].jawaban_1 == "5"){
                $("#jawaban_104").text("Sangat Besar");
            }else if(jawaban4_json[1].jawaban_1 == "4"){
                $("#jawaban_104").text("Besar");
            }else if(jawaban4_json[1].jawaban_1 == "3"){
                $("#jawaban_104").text("Cukup");
            }else if(jawaban4_json[1].jawaban_1 == "2"){
                $("#jawaban_104").text("Kecil");
            }else if(jawaban4_json[1].jawaban_1 == "1"){
                $("#jawaban_104").text("Tidak Sama Sekali");
            }
            //jawaban 1.2
            if(jawaban4_json[2].jawaban_1 == "5"){
                $("#jawaban_105").text("Sangat Besar");
            }else if(jawaban4_json[2].jawaban_1 == "4"){
                $("#jawaban_105").text("Besar");
            }else if(jawaban4_json[2].jawaban_1 == "3"){
                $("#jawaban_105").text("Cukup");
            }else if(jawaban4_json[2].jawaban_1 == "2"){
                $("#jawaban_105").text("Kecil");
            }else if(jawaban4_json[2].jawaban_1 == "1"){
                $("#jawaban_105").text("Tidak Sama Sekali");
            }
            //jawaban 1.3
            if(jawaban4_json[3].jawaban_1 == "5"){
                $("#jawaban_106").text("Sangat Besar");
            }else if(jawaban4_json[3].jawaban_1 == "4"){
                $("#jawaban_106").text("Besar");
            }else if(jawaban4_json[3].jawaban_1 == "3"){
                $("#jawaban_106").text("Cukup");
            }else if(jawaban4_json[3].jawaban_1 == "2"){
                $("#jawaban_106").text("Kecil");
            }else if(jawaban4_json[3].jawaban_1 == "1"){
                $("#jawaban_106").text("Tidak Sama Sekali");
            }
            //jawaban 1.4
            if(jawaban4_json[4].jawaban_1 == "5"){
                $("#jawaban_107").text("Sangat Besar");
            }else if(jawaban4_json[4].jawaban_1 == "4"){
                $("#jawaban_107").text("Besar");
            }else if(jawaban4_json[4].jawaban_1 == "3"){
                $("#jawaban_107").text("Cukup");
            }else if(jawaban4_json[4].jawaban_1 == "2"){
                $("#jawaban_107").text("Kecil");
            }else if(jawaban4_json[4].jawaban_1 == "1"){
                $("#jawaban_107").text("Tidak Sama Sekali");
            }
            //jawaban 1.5
            if(jawaban4_json[5].jawaban_1 == "5"){
                $("#jawaban_108").text("Sangat Besar");
            }else if(jawaban4_json[5].jawaban_1 == "4"){
                $("#jawaban_108").text("Besar");
            }else if(jawaban4_json[5].jawaban_1 == "3"){
                $("#jawaban_108").text("Cukup");
            }else if(jawaban4_json[5].jawaban_1 == "2"){
                $("#jawaban_108").text("Kecil");
            }else if(jawaban4_json[5].jawaban_1 == "1"){
                $("#jawaban_108").text("Tidak Sama Sekali");
            }
            //jawaban 1.6
            if(jawaban4_json[6].jawaban_1 == "5"){
                $("#jawaban_109").text("Sangat Besar");
            }else if(jawaban4_json[6].jawaban_1 == "4"){
                $("#jawaban_109").text("Besar");
            }else if(jawaban4_json[6].jawaban_1 == "3"){
                $("#jawaban_109").text("Cukup");
            }else if(jawaban4_json[6].jawaban_1 == "2"){
                $("#jawaban_109").text("Kecil");
            }else if(jawaban4_json[6].jawaban_1 == "1"){
                $("#jawaban_109").text("Tidak Sama Sekali");
            }
            //jawaban 2
            if(jawaban4_json[7].jawaban_1 == "Beasiswa"){
                $("#jawaban_110").text("Beasiswa (misalnya dari pemerintah, universitas)");
            }else if(jawaban4_json[7].jawaban_1 == "Sebagian beasiswa"){
                $("#jawaban_110").text("Sebagian beasiswa");
            }else if(jawaban4_json[7].jawaban_1 == "Orang tua/keluarga"){
                $("#jawaban_110").text("Orang tua/keluarga");
            }else if(jawaban4_json[7].jawaban_1 == "Biaya sendiri"){
                $("#jawaban_110").text("Biaya sendiri");
            }else if(jawaban4_json[7].jawaban_1 == "Lainnya"){
                $("#jawaban_110").text("Lainnya");
            }
            //jawaban 3
            if(jawaban4_json[8].jawaban_1 == "1"){
                $("#jawaban_111").text("Ya");
            }else if(jawaban4_json[8].jawaban_1 == "0"){
                $("#jawaban_111").text("Tidak");
            }
            //jawaban 3.1
            if(jawaban4_json[9].jawaban_1 == "5"){
                $("#jawaban_112").text("Sangat Aktif");
            }else if(jawaban4_json[9].jawaban_1 == "4"){
                $("#jawaban_112").text("Aktif");
            }else if(jawaban4_json[9].jawaban_1 == "3"){
                $("#jawaban_112").text("Cukup");
            }else if(jawaban4_json[9].jawaban_1 == "2"){
                $("#jawaban_112").text("Kurang Aktif");
            }else if(jawaban4_json[9].jawaban_1 == "1"){
                $("#jawaban_112").text("Pasif");
            }
            //jawaban 4.1
            if(jawaban4_json[10].jawaban_1 == "5"){
                $("#jawaban_113").text("Sangat Besar");
            }else if(jawaban4_json[10].jawaban_1 == "4"){
                $("#jawaban_113").text("Besar");
            }else if(jawaban4_json[10].jawaban_1 == "3"){
                $("#jawaban_113").text("Cukup");
            }else if(jawaban4_json[10].jawaban_1 == "2"){
                $("#jawaban_113").text("Kurang Besar");
            }else if(jawaban4_json[10].jawaban_1 == "1"){
                $("#jawaban_113").text("Tidak Sama Sekali");
            }
            //jawaban 4.2
            if(jawaban4_json[11].jawaban_1 == "5"){
                $("#jawaban_114").text("Sangat Besar");
            }else if(jawaban4_json[11].jawaban_1 == "4"){
                $("#jawaban_114").text("Besar");
            }else if(jawaban4_json[11].jawaban_1 == "3"){
                $("#jawaban_114").text("Cukup");
            }else if(jawaban4_json[11].jawaban_1 == "2"){
                $("#jawaban_114").text("Kurang Besar");
            }else if(jawaban4_json[11].jawaban_1 == "1"){
                $("#jawaban_114").text("Tidak Sama Sekali");
            }
            //jawaban 4.3
            if(jawaban4_json[12].jawaban_1 == "5"){
                $("#jawaban_115").text("Sangat Besar");
            }else if(jawaban4_json[12].jawaban_1 == "4"){
                $("#jawaban_115").text("Besar");
            }else if(jawaban4_json[12].jawaban_1 == "3"){
                $("#jawaban_115").text("Cukup");
            }else if(jawaban4_json[12].jawaban_1 == "2"){
                $("#jawaban_115").text("Kurang Besar");
            }else if(jawaban4_json[12].jawaban_1 == "1"){
                $("#jawaban_115").text("Tidak Sama Sekali");
            }
            //jawaban 4.4
            if(jawaban4_json[13].jawaban_1 == "5"){
                $("#jawaban_116").text("Sangat Besar");
            }else if(jawaban4_json[13].jawaban_1 == "4"){
                $("#jawaban_116").text("Besar");
            }else if(jawaban4_json[13].jawaban_1 == "3"){
                $("#jawaban_116").text("Cukup");
            }else if(jawaban4_json[13].jawaban_1 == "2"){
                $("#jawaban_116").text("Kurang Besar");
            }else if(jawaban4_json[13].jawaban_1 == "1"){
                $("#jawaban_116").text("Tidak Sama Sekali");
            }
            //jawaban 4.5
            if(jawaban4_json[14].jawaban_1 == "5"){
                $("#jawaban_117").text("Sangat Besar");
            }else if(jawaban4_json[14].jawaban_1 == "4"){
                $("#jawaban_117").text("Besar");
            }else if(jawaban4_json[14].jawaban_1 == "3"){
                $("#jawaban_117").text("Cukup");
            }else if(jawaban4_json[14].jawaban_1 == "2"){
                $("#jawaban_117").text("Kurang Besar");
            }else if(jawaban4_json[14].jawaban_1 == "1"){
                $("#jawaban_117").text("Tidak Sama Sekali");
            }
            //jawaban 4.6
            if(jawaban4_json[15].jawaban_1 == "5"){
                $("#jawaban_118").text("Sangat Besar");
            }else if(jawaban4_json[15].jawaban_1 == "4"){
                $("#jawaban_118").text("Besar");
            }else if(jawaban4_json[15].jawaban_1 == "3"){
                $("#jawaban_118").text("Cukup");
            }else if(jawaban4_json[15].jawaban_1 == "2"){
                $("#jawaban_118").text("Kurang Besar");
            }else if(jawaban4_json[15].jawaban_1 == "1"){
                $("#jawaban_118").text("Tidak Sama Sekali");
            }
            //jawaban 5.1
            if(jawaban4_json[16].jawaban_1 == "5"){
                $("#jawaban_119").text("Sangat Baik");
            }else if(jawaban4_json[16].jawaban_1 == "4"){
                $("#jawaban_119").text("Baik");
            }else if(jawaban4_json[16].jawaban_1 == "3"){
                $("#jawaban_119").text("Cukup");
            }else if(jawaban4_json[16].jawaban_1 == "2"){
                $("#jawaban_119").text("Buruk");
            }else if(jawaban4_json[16].jawaban_1 == "1"){
                $("#jawaban_119").text("Sangat Buruk");
            }
            //jawaban 5.2
            if(jawaban4_json[17].jawaban_1 == "5"){
                $("#jawaban_120").text("Sangat Baik");
            }else if(jawaban4_json[17].jawaban_1 == "4"){
                $("#jawaban_120").text("Baik");
            }else if(jawaban4_json[17].jawaban_1 == "3"){
                $("#jawaban_120").text("Cukup");
            }else if(jawaban4_json[17].jawaban_1 == "2"){
                $("#jawaban_120").text("Buruk");
            }else if(jawaban4_json[17].jawaban_1 == "1"){
                $("#jawaban_120").text("Sangat Buruk");
            }
            //jawaban 5.3
            if(jawaban4_json[18].jawaban_1 == "5"){
                $("#jawaban_121").text("Sangat Baik");
            }else if(jawaban4_json[18].jawaban_1 == "4"){
                $("#jawaban_121").text("Baik");
            }else if(jawaban4_json[18].jawaban_1 == "3"){
                $("#jawaban_121").text("Cukup");
            }else if(jawaban4_json[18].jawaban_1 == "2"){
                $("#jawaban_121").text("Buruk");
            }else if(jawaban4_json[18].jawaban_1 == "1"){
                $("#jawaban_121").text("Sangat Buruk");
            }
            //jawaban 5.4
            if(jawaban4_json[19].jawaban_1 == "5"){
                $("#jawaban_122").text("Sangat Baik");
            }else if(jawaban4_json[19].jawaban_1 == "4"){
                $("#jawaban_122").text("Baik");
            }else if(jawaban4_json[19].jawaban_1 == "3"){
                $("#jawaban_122").text("Cukup");
            }else if(jawaban4_json[19].jawaban_1 == "2"){
                $("#jawaban_122").text("Buruk");
            }else if(jawaban4_json[19].jawaban_1 == "1"){
                $("#jawaban_122").text("Sangat Buruk");
            }
            //jawaban 5.5
            if(jawaban4_json[20].jawaban_1 == "5"){
                $("#jawaban_123").text("Sangat Baik");
            }else if(jawaban4_json[20].jawaban_1 == "4"){
                $("#jawaban_123").text("Baik");
            }else if(jawaban4_json[20].jawaban_1 == "3"){
                $("#jawaban_123").text("Cukup");
            }else if(jawaban4_json[20].jawaban_1 == "2"){
                $("#jawaban_123").text("Buruk");
            }else if(jawaban4_json[20].jawaban_1 == "1"){
                $("#jawaban_123").text("Sangat Buruk");
            }
            //jawaban 6.1
            if(jawaban4_json[21].jawaban_1 == "5"){
                $("#jawaban_124").text("Sangat Baik");
            }else if(jawaban4_json[21].jawaban_1 == "4"){
                $("#jawaban_124").text("Baik");
            }else if(jawaban4_json[21].jawaban_1 == "3"){
                $("#jawaban_124").text("Cukup");
            }else if(jawaban4_json[21].jawaban_1 == "2"){
                $("#jawaban_124").text("Buruk");
            }else if(jawaban4_json[21].jawaban_1 == "1"){
                $("#jawaban_124").text("Sangat Buruk");
            }
            //jawaban 6.2
            if(jawaban4_json[22].jawaban_1 == "5"){
                $("#jawaban_125").text("Sangat Baik");
            }else if(jawaban4_json[22].jawaban_1 == "4"){
                $("#jawaban_125").text("Baik");
            }else if(jawaban4_json[22].jawaban_1 == "3"){
                $("#jawaban_125").text("Cukup");
            }else if(jawaban4_json[22].jawaban_1 == "2"){
                $("#jawaban_125").text("Buruk");
            }else if(jawaban4_json[22].jawaban_1 == "1"){
                $("#jawaban_125").text("Sangat Buruk");
            }
            //jawaban 6.3
            if(jawaban4_json[23].jawaban_1 == "5"){
                $("#jawaban_126").text("Sangat Baik");
            }else if(jawaban4_json[23].jawaban_1 == "4"){
                $("#jawaban_126").text("Baik");
            }else if(jawaban4_json[23].jawaban_1 == "3"){
                $("#jawaban_126").text("Cukup");
            }else if(jawaban4_json[23].jawaban_1 == "2"){
                $("#jawaban_126").text("Buruk");
            }else if(jawaban4_json[23].jawaban_1 == "1"){
                $("#jawaban_126").text("Sangat Buruk");
            }
            //jawaban 6.4
            if(jawaban4_json[24].jawaban_1 == "5"){
                $("#jawaban_127").text("Sangat Baik");
            }else if(jawaban4_json[24].jawaban_1 == "4"){
                $("#jawaban_127").text("Baik");
            }else if(jawaban4_json[24].jawaban_1 == "3"){
                $("#jawaban_127").text("Cukup");
            }else if(jawaban4_json[24].jawaban_1 == "2"){
                $("#jawaban_127").text("Buruk");
            }else if(jawaban4_json[24].jawaban_1 == "1"){
                $("#jawaban_127").text("Sangat Buruk");
            }
            //jawaban 6.5
            if(jawaban4_json[25].jawaban_1 == "5"){
                $("#jawaban_128").text("Sangat Baik");
            }else if(jawaban4_json[25].jawaban_1 == "4"){
                $("#jawaban_128").text("Baik");
            }else if(jawaban4_json[25].jawaban_1 == "3"){
                $("#jawaban_128").text("Cukup");
            }else if(jawaban4_json[25].jawaban_1 == "2"){
                $("#jawaban_128").text("Buruk");
            }else if(jawaban4_json[25].jawaban_1 == "1"){
                $("#jawaban_128").text("Sangat Buruk");
            }
            //jawaban 6.6
            if(jawaban4_json[26].jawaban_1 == "5"){
                $("#jawaban_129").text("Sangat Baik");
            }else if(jawaban4_json[26].jawaban_1 == "4"){
                $("#jawaban_129").text("Baik");
            }else if(jawaban4_json[26].jawaban_1 == "3"){
                $("#jawaban_129").text("Cukup");
            }else if(jawaban4_json[26].jawaban_1 == "2"){
                $("#jawaban_129").text("Buruk");
            }else if(jawaban4_json[26].jawaban_1 == "1"){
                $("#jawaban_129").text("Sangat Buruk");
            }
            //jawaban 6.7
            if(jawaban4_json[27].jawaban_1 == "5"){
                $("#jawaban_130").text("Sangat Baik");
            }else if(jawaban4_json[27].jawaban_1 == "4"){
                $("#jawaban_130").text("Baik");
            }else if(jawaban4_json[27].jawaban_1 == "3"){
                $("#jawaban_130").text("Cukup");
            }else if(jawaban4_json[27].jawaban_1 == "2"){
                $("#jawaban_130").text("Buruk");
            }else if(jawaban4_json[27].jawaban_1 == "1"){
                $("#jawaban_130").text("Sangat Buruk");
            }
            //jawaban 6.8
            if(jawaban4_json[28].jawaban_1 == "5"){
                $("#jawaban_131").text("Sangat Baik");
            }else if(jawaban4_json[28].jawaban_1 == "4"){
                $("#jawaban_131").text("Baik");
            }else if(jawaban4_json[28].jawaban_1 == "3"){
                $("#jawaban_131").text("Cukup");
            }else if(jawaban4_json[28].jawaban_1 == "2"){
                $("#jawaban_131").text("Buruk");
            }else if(jawaban4_json[28].jawaban_1 == "1"){
                $("#jawaban_131").text("Sangat Buruk");
            }
            //jawaban 6.9
            if(jawaban4_json[29].jawaban_1 == "5"){
                $("#jawaban_132").text("Sangat Baik");
            }else if(jawaban4_json[29].jawaban_1 == "4"){
                $("#jawaban_132").text("Baik");
            }else if(jawaban4_json[29].jawaban_1 == "3"){
                $("#jawaban_132").text("Cukup");
            }else if(jawaban4_json[29].jawaban_1 == "2"){
                $("#jawaban_132").text("Buruk");
            }else if(jawaban4_json[29].jawaban_1 == "1"){
                $("#jawaban_132").text("Sangat Buruk");
            }
            //jawaban 6.10
            if(jawaban4_json[30].jawaban_1 == "5"){
                $("#jawaban_133").text("Sangat Baik");
            }else if(jawaban4_json[30].jawaban_1 == "4"){
                $("#jawaban_133").text("Baik");
            }else if(jawaban4_json[30].jawaban_1 == "3"){
                $("#jawaban_133").text("Cukup");
            }else if(jawaban4_json[30].jawaban_1 == "2"){
                $("#jawaban_133").text("Buruk");
            }else if(jawaban4_json[30].jawaban_1 == "1"){
                $("#jawaban_133").text("Sangat Buruk");
            }
            //jawaban 7.1
            if(jawaban4_json[31].jawaban_1 == "5"){
                $("#jawaban_134").text("Sangat Baik");
            }else if(jawaban4_json[31].jawaban_1 == "4"){
                $("#jawaban_134").text("Baik");
            }else if(jawaban4_json[31].jawaban_1 == "3"){
                $("#jawaban_134").text("Cukup");
            }else if(jawaban4_json[31].jawaban_1 == "2"){
                $("#jawaban_134").text("Buruk");
            }else if(jawaban4_json[31].jawaban_1 == "1"){
                $("#jawaban_134").text("Sangat Buruk");
            }
            //jawaban 7.2
            if(jawaban4_json[32].jawaban_1 == "5"){
                $("#jawaban_135").text("Sangat Baik");
            }else if(jawaban4_json[32].jawaban_1 == "4"){
                $("#jawaban_135").text("Baik");
            }else if(jawaban4_json[32].jawaban_1 == "3"){
                $("#jawaban_135").text("Cukup");
            }else if(jawaban4_json[32].jawaban_1 == "2"){
                $("#jawaban_135").text("Buruk");
            }else if(jawaban4_json[32].jawaban_1 == "1"){
                $("#jawaban_135").text("Sangat Buruk");
            }
            //jawaban 7.3
            if(jawaban4_json[33].jawaban_1 == "5"){
                $("#jawaban_136").text("Sangat Baik");
            }else if(jawaban4_json[33].jawaban_1 == "4"){
                $("#jawaban_136").text("Baik");
            }else if(jawaban4_json[33].jawaban_1 == "3"){
                $("#jawaban_136").text("Cukup");
            }else if(jawaban4_json[33].jawaban_1 == "2"){
                $("#jawaban_136").text("Buruk");
            }else if(jawaban4_json[33].jawaban_1 == "1"){
                $("#jawaban_136").text("Sangat Buruk");
            }
            //jawaban 7.4
            if(jawaban4_json[34].jawaban_1 == "5"){
                $("#jawaban_137").text("Sangat Baik");
            }else if(jawaban4_json[34].jawaban_1 == "4"){
                $("#jawaban_137").text("Baik");
            }else if(jawaban4_json[34].jawaban_1 == "3"){
                $("#jawaban_137").text("Cukup");
            }else if(jawaban4_json[34].jawaban_1 == "2"){
                $("#jawaban_137").text("Buruk");
            }else if(jawaban4_json[34].jawaban_1 == "1"){
                $("#jawaban_137").text("Sangat Buruk");
            }
            //jawaban 7.5
            if(jawaban4_json[35].jawaban_1 == "5"){
                $("#jawaban_138").text("Sangat Baik");
            }else if(jawaban4_json[35].jawaban_1 == "4"){
                $("#jawaban_138").text("Baik");
            }else if(jawaban4_json[35].jawaban_1 == "3"){
                $("#jawaban_138").text("Cukup");
            }else if(jawaban4_json[35].jawaban_1 == "2"){
                $("#jawaban_138").text("Buruk");
            }else if(jawaban4_json[35].jawaban_1 == "1"){
                $("#jawaban_138").text("Sangat Buruk");
            }
            //jawaban 7.6
            if(jawaban4_json[36].jawaban_1 == "5"){
                $("#jawaban_139").text("Sangat Baik");
            }else if(jawaban4_json[36].jawaban_1 == "4"){
                $("#jawaban_139").text("Baik");
            }else if(jawaban4_json[36].jawaban_1 == "3"){
                $("#jawaban_139").text("Cukup");
            }else if(jawaban4_json[36].jawaban_1 == "2"){
                $("#jawaban_139").text("Buruk");
            }else if(jawaban4_json[36].jawaban_1 == "1"){
                $("#jawaban_139").text("Sangat Buruk");
            }
            //jawaban 7.7
            if(jawaban4_json[37].jawaban_1 == "5"){
                $("#jawaban_140").text("Sangat Baik");
            }else if(jawaban4_json[37].jawaban_1 == "4"){
                $("#jawaban_140").text("Baik");
            }else if(jawaban4_json[37].jawaban_1 == "3"){
                $("#jawaban_140").text("Cukup");
            }else if(jawaban4_json[37].jawaban_1 == "2"){
                $("#jawaban_140").text("Buruk");
            }else if(jawaban4_json[37].jawaban_1 == "1"){
                $("#jawaban_140").text("Sangat Buruk");
            }
            //jawaban 8
            if(jawaban4_json[38].jawaban_1 == "1"){
                $("#jawaban_141").text('Melalui iklan di koran/majalah, brosur');
            }else{
                $("#li_141").hide();
            }
            if(jawaban4_json[38].jawaban_2 == "2"){
                $("#jawaban_142").text("Melamar ke perusahaan tanpa mengetahui lowongan yang ada <br>");
            }else{
                $("#li_142").hide();
            }
            if(jawaban4_json[38].jawaban_3 == "3"){
                $("#jawaban_143").text("Pergi ke bursa/pameran kerja <br>");
            }else{
                $("#li_143").hide();
            }
            if(jawaban4_json[38].jawaban_4 == "4"){
                $("#jawaban_144").text("Mencari lewat internet/iklan online/milis");
            }else{
                $("#li_144").hide();
            }
            if(jawaban4_json[38].jawaban_5 == "5"){
                $("#jawaban_145").text("Dihubungi oleh perusahaan");
            }else{
                $("#li_145").hide();
            }
            if(jawaban4_json[38].jawaban_6 == "6"){
                $("#jawaban_146").text("Menghubungi Kemnakertrans");
            }else{
                $("#li_146").hide();
            }
            if(jawaban4_json[38].jawaban_7 == "7"){
                $("#jawaban_147").text("Menghubungi agen tenaga kerja komersiaI/swasta");
            }else{
                $("#li_147").hide();
            } 
            if(jawaban4_json[38].jawaban_8 == "8"){
                $("#jawaban_148").text("Memeroleh informasi dari pusat/kantor pengembangan karir fakultas/universitas");
            }else{
                $("#li_148").hide();
            }
            if(jawaban4_json[38].jawaban_9 == "9"){
                $("#jawaban_149").text("Menghubungi kantor kemahasiswaan/hubungan alumni");
            }else{
                $("#li_149").hide();
            }
            if(jawaban4_json[38].jawaban_10 == "10"){
                $("#jawaban_150").text("Membangun network sejak masih kuliah");
            }else{
                $("#li_150").hide();
            }
            if(jawaban4_json[38].jawaban_11 == "11"){
                $("#jawaban_151").text("Melalui relasi (misalnya dosen, orantua, saudara, teman, dll.)");
            }else{
                $("#li_151").hide();
            }
            if(jawaban4_json[38].jawaban_12 == "12"){
                $("#jawaban_152").text("Membangun bisnis sendiri");
            }else{
                $("#li_152").hide();
            }
            if(jawaban4_json[38].jawaban_13 == "13"){
                $("#jawaban_153").text("Melalui penempatan kerja atau magang");
            }else{
                $("#li_153").hide();
            }
            if(jawaban4_json[38].jawaban_14 == "14"){
                $("#jawaban_154").text("Bekerja di tempat yang sama dengan tempat kerja semasa kuliah");
            }else{
                $("#li_154").hide();
            }
            console.log(jawaban1_json[6].jawaban_4);
        //   $('#isi_berita').val(data.data[0].ISI_BERITA),
        //   $('#judul_berita').val(data.data[0].JUDUL),
        //   $('#status_berita').val(data.data[0].STATUS_BERITA),
        //   $('#status_ber').val(data.data[0].STATUS)
         }
    });
});
