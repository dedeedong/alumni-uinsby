function edit_pengurus(id) {
  // alert("berhasil");
  $.ajax({
      type: 'POST',
      url: base_url+"Admin/get_pengurus/"+id,
      data: {'data':id},
      dataType: "json",
      success: function(data) {
        // alert(JSON.stringify(data));
        // alert(data.data[0].ID_BERITA);

        $('#nama').val(data.data[0].NAMA_PENGURUS),
        $('#status').val(data.data[0].STATUS_PENGURUS),
        $('#jabatan').val(data.data[0].JABATAN),
        $('#username').val(data.data[0].USERNAME),
        $('#password').val(data.data[0].PASSWORD)
       }
  });
}
