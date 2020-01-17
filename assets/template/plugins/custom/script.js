$(document).ready(function() {

    var addKegiatan = $('.add_kegiatan');
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var wrapper_kegiatan = $('.wrap-form-kegiatan');


    var fieldSubKegiatan = '<div class="wrap-form-kegiatan offset-1">';
    fieldSubKegiatan += '       <div class="input-group">';
    fieldSubKegiatan += '           <input type="text" name="sub_kegiatan[]" class="form-control" placeholder="Tulis Sub Kegiatan ...">';
    fieldSubKegiatan += '           <a href="javascript:void(0);" class="remove_row_sub_kegiatan btn                                       btn-danger"> Hapus </a>';
    fieldSubKegiatan += '       </div>';
    fieldSubKegiatan += '  </div>';

    // validasi number only on keypress
    $(".number_valid").keypress(

        function(e) {
            var charTyped = String.fromCharCode(e.which);
            var letterRegex = /^([0-9]+[\.]?[0-9]?[0-9]?|[0-9]+)/;


            if (charTyped.match(letterRegex)) {
                return true;
            } else {
                return false;
            }


        });


    //Once add button sub kegiatan first is clicked
    $(addKegiatan).click(function() {
        //Check maximum number of input fields
        $(wrapper_kegiatan).append(fieldSubKegiatan);
    });

    //Once add button sub kegiatan second is clicked 
    $(wrapper).on('click', '.add_sub_kegiatan', function(e) {

        e.preventDefault();
        $('.wrap-add').append('<div class="wrap-form-kegiatan offset-1"> <div class="input-group"> <input type="text" class="form-control" placeholder="Tulis Sub Kegiatan ..."> <a href="javascript:void(0);" class="remove_row_sub_kegiatan btn btn-danger"> Hapus </a> </div> </div>'); //Add field html

    });

    //Once remove button is clicked Program
    $(wrapper).on('click', '.remove_row', function(e) {
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html 
        x--; //Decrement field counter 
    });

    //Once remove button is clicked Sub-Kegiatan
    $(wrapper_kegiatan).on('click', '.remove_row_sub_kegiatan', function(e) {
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });

    //////////////////////////////////

    // admin
    var addKegiatanAdmin = $('.add_kegiatan_admin');
    var wrapper_kegiatan_admin = $('.wrap-form-kegiatan-admin');

    var fieldSubKegiatanAdmin = '<div class="input-group mt-3"> <input type="text" name="nama_kegiatan[]" class="form-control" placeholder="Tulis disini ..."> <a href="javascript:void(0);" class="remove_kegiatan_admin btn btn-danger"> Hapus </a></div>';
    var fieldKategoriBelanjaAdmin = '<div class="input-group mt-3"> <input type="text" name="kategori_belanja[]" class="form-control" placeholder="Tulis disini ..."> <a href="javascript:void(0);" class="remove_belanja_admin btn btn-danger"> Hapus </a></div>';

    //Once add button sub kegiatan first is clicked
    $(addKegiatanAdmin).click(function() {
        //Check maximum number of input fields
        $(wrapper_kegiatan_admin).append(fieldSubKegiatanAdmin);
    });

    //Once add Kategori belanja first is clicked
    $('.add_belanja_admin').click(function() {
        //Check maximum number of input fields
        $('.wrap-kategori-belanja_admin').append(fieldKategoriBelanjaAdmin);
    });

    //Once remove button is clicked Program
    $(wrapper_kegiatan_admin).on('click', '.remove_kegiatan_admin', function(e) {
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html 
        x--; //Decrement field counter 
    });

    //Once remove button is clicked kegiatan belanja
    $('.wrap-kategori-belanja_admin').on('click', '.remove_belanja_admin', function(e) {
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html 
        x--; //Decrement field counter 
    });

    //Once add button tambah operator sekolah is clicked
    $('#toggle-operator').hide();
    $('#btn-toggle').click(function() {

        $('#toggle-operator').toggle();
    });

    ////////////////////////////////////////////////////////////////////////////

    //  operator
    // change operator dan kegiatan operator

    // laporan toggle 
    //Once add button tambah operator sekolah is clicked
    $('.keg_subkeg').hide();
    $('#toggle-prog').click(function() {


        $('.keg_subkeg').toggle();
        $('.subkeg').hide();

    });


    // Kegiatan toggle 
    // $('.subkeg').hide();
    $('#toggle-keg').click(function() {

        $('.subkeg').toggle();

    });

    $('#token').click(function() {

        var id = $(this).val();
        localStorage.setItem("token", id);
    });

    $('#program').change(function() {

        var id = $(this).children(":selected").attr("id");
        var token = localStorage.getItem("token");

        $(".rm").each(function() {
            $(this).remove();
        })

        $.ajax({

            url: 'https://dispendik-using.id:3000/v1/simbos/admin/getProgram',
            type: 'GET',
            crossDomain: true,
            async: true,
            dataType: 'json',
            beforeSend: function(xhr) { xhr.setRequestHeader('Authorization', 'Bearer ' + token); },
            success: function(result) {

                var data = result.data[id].kegiatan;

                $.each(data, function(i, value) {
                    // $('.kegiatan').html('<input type="text" id="star" value="'+star+'" />');
                    $('.kegiatan').append(`

                            <option class="rm" value="` + value._id + `"> ` + value.nama_kegiatan + ` </option>
                        `);

                });
            }
        });
    });

});