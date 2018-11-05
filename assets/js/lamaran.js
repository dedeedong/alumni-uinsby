function terimalamaran(nim,status){
  alert(nim+" "+status);
  $.ajax({
    try: 'POST',
    url: base_url + "/index.php/Admin/accept",
    data: {
      "nim": nim,
      "status": status,
    },
    success: function(data){
      console.log("sukses");
    }
  });
}


// function terima(nim,status){
//   $.ajax({
//       url: base_url + "/index.php/Admin/accept",
//       type:"POST",
//       data:"nim="+nim+"status_lamaran"+status,
//       dataType:"json",
//       success: function(data) {
//         $('#form_update').modal('show');
//           $('$nim').val(data.nim);
//           $('$status').val(data.status);
//           $('.modal-title').text("Edit Data");
//           $('#id_nim').val(nim);
//           $('#proses').val("Update");
//           $('#operation').val("Update");
//       }
//   })
// }
