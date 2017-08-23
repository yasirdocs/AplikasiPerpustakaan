$(document).ready(function() {
    $.ajax({
        url: 'Perpustakaan/list_data',
        type: 'POST',
        success: function(data){
            $("#listdata").html(data);
        }
    })
});

// fungsi ini untuk me_reload ketika data baru ditambahkan
function reload(){
    $.ajax({
        url: 'Perpustakaan/list_data',
        type: 'POST',
        success: function(data){
            $("#listdata").html(data);
        }
    })
};

function save(){
    if (save_method == 'add') {
        url = "Perpustakaan/tambah";
    }else{
        url = "Perpustakaan/update";
    }

    $.ajax({
    url: url,
    type: 'POST',
    data: $('#form_modal').serialize(),
    dataType: "JSON",
    success: function(data){
            $('#sama').modal('hide');
            alert('Sukses, Data berhasil disimpan');
            reload();
    }
    });
};

function tambah_data(){
    save_method = "add";
    $('#sama').modal('show');
    $('.modal-title').text('Tambah Data Buku');
};

function ubah(id)
{
    save_method = 'update';
    $.ajax({
        url : "Perpustakaan/edit/"+id,
        type: "POST",
        dataType: "JSON",
        data: $('#form_modal').serialize(),
        success: function(data)
        {
            $('[name="kd_buku"]').val(id);
            $('[name="judul"]').val(data.judul);
            $('[name="penerbit"]').val(data.penerbit);
            $('[name="pengarang"]').val(data.pengarang);
            $('#sama').modal('show');
            $('.modal-title').text('Ubah Data Buku');
        }
    });
}

function hapus(id){
    if (confirm("Apakah Anda ingin Menghapus data ini") == true) {
        $.ajax({
            url : "Perpustakaan/hapus/"+id,
            type: "POST",
            success: function(data)
            {
                alert("Berhasil!, Data berhasil dihapus");
                $('#sama').modal('hide');
                reload();
            }
        });
    } else {
        alert("Data, gagal dihapus");
    }
    
}