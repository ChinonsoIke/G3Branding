$(document).ready(function () {

    $.ajaxSetup({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
    });


    let notify = (title, text, type) => {
        new PNotify({
            text: text,
            type: type,
            styling: 'bootstrap3',
            icon: false
        })
    };


    $('.editable').editable({
        success: function (res) {
            notify('success', 'details updated successfully', 'success')
        },
        error:function (res) {
            notify('error', 'Internal server error', 'error')
        }
    });

});
