$(document).ready(function () {
    $('#tabel').dataTable();

    $('#tgl-nikah').datepicker();
    $('#tgl-nikahP').datepicker();
    $('#tgl-nikahG').datepicker();
    $('#tgl-nikahH').datepicker();
    $('#tgl-nikahB').datepicker();
    $('#tgl-nikahK').datepicker();
    $('#tgl-nikahW').datepicker();
    $('#tgl-nikahPB').datepicker();
    $('#tgl-nikahHA').datepicker();
    $('#tgl-nikahIN').datepicker();

    $(document).on('click', '.open_modal', function () {
        const nama = $(this).data('nama');
        const id = $(this).data('id');
        $('.modal-body #idh').val(id)
        $('.modal-body #keca').val(nama)
    })

    $('#perkara_form').on('submit', function (e) {
        e.preventDefault()
        $.ajax({
            url: '?menu=proses',
            data: new FormData(this),
            type: 'post',
            contentType: false,
            cache: false,
            processData: false,
            success: function (msg) {
                window.location.href = '?menu=kec';
            }
        })
    })

    $(document).on('click', '.open_modal', function () {
        const desa = $(this).data('desa');
        const id = $(this).data('id');
        const kode = $(this).data('kec');
        const ket = $(this).data('radius');
        $('.modal-body #idk').val(id)
        $('.modal-body #s').val(desa)
        $('.modal-body #kec').val(kode)
        $('.modal-body #ket').val(ket)
    })

    $('#desa_form').on('submit', function (e) {
        e.preventDefault()
        $.ajax({
            url: '?menu=proses_desa',
            data: new FormData(this),
            type: 'post',
            contentType: false,
            cache: false,
            processData: false,
            success: function (msg) {
                window.location.href = '?menu=desa';
            }
        })
    })

    $(document).on('click', '.open_modal', function () {
        const biaya = $(this).data('biaya');
        const id = $(this).data('id');
        const kode = $(this).data('sub');
        const ket = $(this).data('radius');
        $('.modal-body #idp').val(id)
        $('.modal-body #biaya').val(biaya)
        $('.modal-body #sub').val(kode)
        $('.modal-body #r').val(ket)
    })

    $('#sub_form').on('submit', function (e) {
        e.preventDefault()
        $.ajax({
            url: '?menu=proses_biaya',
            data: new FormData(this),
            type: 'post',
            contentType: false,
            cache: false,
            processData: false,
            success: function (msg) {
                window.location.href = '?menu=biayaP';
            }
        })
    })

    $(document).on('click', '.open_modal', function () {
        const nip = $(this).data('nip');
        const nama = $(this).data('nama');
        const jekel = $(this).data('jekel');
        const no = $(this).data('no');
        const alamat = $(this).data('alamat');
        const username = $(this).data('username');
        const password = $(this).data('password');
        const status = $(this).data('status');
        $('.modal-body #id').val(nip)
        $('.modal-body #nama').val(nama)
        $('.modal-body #p').val(jekel)
        $('.modal-body #no').val(no)
        $('.modal-body #alamat').val(alamat)
        $('.modal-body #user').val(username)
        $('.modal-body #pass').val(password)
        $('.modal-body #status').val(status)
    })

    $('#user_form').on('submit', function (e) {
        e.preventDefault()
        $.ajax({
            url: '?menu=proses_user',
            data: new FormData(this),
            type: 'post',
            contentType: false,
            cache: false,
            processData: false,
            success: function (msg) {
                window.location.href = '?menu=user';
            }
        })
    })

});