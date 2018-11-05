function edit_berita(id) {
  // alert("berhasil");
  $.ajax({
      type: 'POST',
      url: base_url+"Admin/get_berita/"+id,
      data: {'data':id},
      dataType: "json",
      success: function(data) {
        // alert(JSON.stringify(data));
        // alert(data.data[0].ID_BERITA);

        $('#isi_berita').val(data.data[0].ISI_BERITA),
        $('#judul_berita').val(data.data[0].JUDUL),
        $('#status_berita').val(data.data[0].STATUS_BERITA),
        $('#status_ber').val(data.data[0].STATUS)
       }
  });
}
