$(function () {
    $('#dPemohon').change(function (e) {
        var pemohon = $('#dPemohon').val();
        e.preventDefault()
        $.ajax({
            url: 'http://localhost/penjadwalan/pelayanan/gugatan/proses.php',
            data: { pemohon: pemohon },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                var nama = data['nama_termohon']
                if (nama == 0) {
                    $('#dTergugat').val('-')
                } else {
                    $('#dTergugat').val(nama)
                }
            }
        })
    })
})

$(function () {
    $('#gPemohon').change(function (e) {
        var pemohon = $('#gPemohon').val();
        e.preventDefault()
        $.ajax({
            url: 'http://localhost/penjadwalan/pelayanan/gugatan/proses.php',
            data: { pemohon: pemohon },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                var nama = data['nama_termohon']
                if (nama == 0) {
                    $('#gTergugat').val('-')
                } else {
                    $('#gTergugat').val(nama)
                }
            }
        })
    })
})

$(function () {
    $('#pPemohon').change(function (e) {
        var pemohon = $('#pPemohon').val();
        e.preventDefault()
        $.ajax({
            url: 'http://localhost/penjadwalan/pelayanan/gugatan/proses.php',
            data: { pemohon: pemohon },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                var nama = data['nama_termohon']
                if (nama == 0) {
                    $('#pTergugat').val('-')
                } else {
                    $('#pTergugat').val(nama)
                }
            }
        })
    })
})

$(function () {
    $('#kPemohon').change(function (e) {
        var pemohon = $('#kPemohon').val();
        e.preventDefault()
        $.ajax({
            url: 'http://localhost/penjadwalan/pelayanan/gugatan/proses.php',
            data: { pemohon: pemohon },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                var nama = data['nama_termohon']
                if (nama == 0) {
                    $('#kTergugat').val('-')
                } else {
                    $('#kTergugat').val(nama)
                }
            }
        })
    })
})

$(function () {
    $('#hPemohon').change(function (e) {
        var pemohon = $('#hPemohon').val();
        e.preventDefault()
        $.ajax({
            url: 'http://localhost/penjadwalan/pelayanan/gugatan/proses.php',
            data: { pemohon: pemohon },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                var nama = data['nama_termohon']
                if (nama == 0) {
                    $('#hTergugat').val('-')
                } else {
                    $('#hTergugat').val(nama)
                }
            }
        })
    })
})

$(function () {
    $('#bPemohon').change(function (e) {
        var pemohon = $('#bPemohon').val();
        e.preventDefault()
        $.ajax({
            url: 'http://localhost/penjadwalan/pelayanan/gugatan/proses.php',
            data: { pemohon: pemohon },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                var nama = data['nama_termohon']
                if (nama == 0) {
                    $('#bTergugat').val('-')
                } else {
                    $('#bTergugat').val(nama)
                }
            }
        })
    })
})

$(function () {
    $('#wPemohon').change(function (e) {
        var pemohon = $('#wPemohon').val();
        e.preventDefault()
        $.ajax({
            url: 'http://localhost/penjadwalan/pelayanan/gugatan/proses.php',
            data: { pemohon: pemohon },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                var nama = data['nama_termohon']
                if (nama == 0) {
                    $('#wTergugat').val('-')
                } else {
                    $('#wTergugat').val(nama)
                }
            }
        })
    })
})

$(function () {
    $('#aPemohon').change(function (e) {
        var pemohon = $('#aPemohon').val();
        e.preventDefault()
        $.ajax({
            url: 'http://localhost/penjadwalan/pelayanan/gugatan/proses.php',
            data: { pemohon: pemohon },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                var nama = data['nama_termohon']
                if (nama == 0) {
                    $('#aTergugat').val('-')
                } else {
                    $('#aTergugat').val(nama)
                }
            }
        })
    })
})

$(function () {
    $('#haPemohon').change(function (e) {
        var pemohon = $('#haPemohon').val();
        e.preventDefault()
        $.ajax({
            url: 'http://localhost/penjadwalan/pelayanan/gugatan/proses.php',
            data: { pemohon: pemohon },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                var nama = data['nama_termohon']
                if (nama == 0) {
                    $('#haTergugat').val('-')
                } else {
                    $('#haTergugat').val(nama)
                }
            }
        })
    })
})