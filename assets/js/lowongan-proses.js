$(document).ready(function(){
    // showSemuaLowongan(); //call function show all product
     
    $('#tabel1').DataTable();
      
    //function show all
    // function showSemuaLowongan(){
    //     $.ajax({
    //         type  : 'ajax',
    //         url   : url_show,
    //         async : false,
    //         dataType : 'json',
    //         success : function(data){
    //             var html = '';
    //             var i;
    //             for(i=0; i<data.length; i++){
    //                 // type = data[i].jk;
    //                 html += '<tr>'+
    //                         '<td>'+data[i].id_lowongan+'</td>'+
    //                         '<td>'+data[i].nama_rekan+'</td>'+
    //                         '<td>'+data[i].posisi_lowongan+'</td>'+
    //                         '<td>'+data[i].tgl_posting+'</td>'+
    //                         '<td>'+data[i].tgl_selesai+'</td>'+
    //                         '<td style="text-align:right;">'+
    //                             '<a href="<?php echo site_url();?>/C_lowonganika/detail" class="btn btn-primary" data-id="'+data[i].id_lowongan+'">Lihat Detail</a>'+
    //                         '</td>'+
    //                         '</tr>';
    //             }
    //             $('#data_semua').html(html);
    //         }
    //     });
    // }

});

function inputhardskill(){
    $('#btn_save')
}