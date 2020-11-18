$(document).ready(function () {
    $("#kec2").append('<option value="">Pilih</option>');
    $("#desa2").html('');
    $("#desa2").append('<option value="">Pilih</option>');
    url = '../config/get_kecamatan.php';
    $.ajax({
        url: url,
        type: 'GET',
        dataType: 'json',
        success: function (result) {
            for (var i = 0; i < result.length; i++)
                $("#kec2").append('<option value="' + result[i].kode_kecamatan + '">' + result[i].nama_kecamatan + '</option>');
        }
    });
});

$('#kec2').change(function () {
    var kec = $('#kec2').val();
    url = '../config/get_desa.php?kode_kecamatan=' + kec;
    $("#desa2").html('');
    $("#desa2").append('<option value="">Pilih</option>');
    $.ajax({
        url: url,
        type: 'GET',
        dataType: 'json',
        success: function (data) {
            for (var i = 0; i < data.length; i++) {
                $('#desa2').append('<option value="' + data[i].kode_desa + '">' + data[i].nama_desa + '</option>')

            }
        }
    })
})

$('#desa2').change(function () {
    var desa = $('#desa2').val();

    url = '../config/get_radius.php?kode_desa=' + desa;
    $.ajax({
        url: url,
        type: 'GET',
        dataType: 'json',
        success: function (data) {
            $('#radius2').val(data['nama_radius'])
        }
    })
})

$('#busek2').on('click', function () {
    $('#bungkus2').remove()
})

$('#busek').on('click', function () {
    $('#bungkus').remove()
})