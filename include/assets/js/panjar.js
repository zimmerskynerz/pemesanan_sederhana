$(document).ready(function () {
    $("#kec").append('<option value="">Pilih</option>');
    $("#desa").html('');
    $("#desa").append('<option value="">Pilih</option>');
    url = '../config/get_kecamatan.php';
    $.ajax({
        url: url,
        type: 'GET',
        dataType: 'json',
        success: function (result) {
            for (var i = 0; i < result.length; i++)
                $("#kec").append('<option value="' + result[i].kode_kecamatan + '">' + result[i].nama_kecamatan + '</option>');
        }
    });
});

$('#kec').change(function () {
    var kec = $('#kec').val();
    url = '../config/get_desa.php?kode_kecamatan=' + kec;
    $("#desa").html('');
    $("#desa").append('<option value="">Pilih</option>');
    $.ajax({
        url: url,
        type: 'GET',
        dataType: 'json',
        success: function (data) {
            for (var i = 0; i < data.length; i++) {
                $('#desa').append('<option value="' + data[i].kode_desa + '">' + data[i].nama_desa + '</option>')

            }
        }
    })
})

$('#desa').change(function () {
    var desa = $('#desa').val();

    url = '../config/get_radius.php?kode_desa=' + desa;
    $.ajax({
        url: url,
        type: 'GET',
        dataType: 'json',
        success: function (data) {
            $('#radius').val(data['nama_radius'])
        }
    })
})

$('#status').change(function () {
    var status = $('#status').val();
    var kode = $('#kode').val();
    if (status == 'sudah') {
        $('#nomor').val(kode)
    } else {
        $('#nomor').val('-')
    }
})

