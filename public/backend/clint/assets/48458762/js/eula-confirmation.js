$(document).ready(function() {
    if(showPopup === true){
        $("#EULAConfirmation").modal("show");
        // $("#EULAConfirmation").modal("hide");
        // $('body').removeClass('modal-open');
        // $('.modal-backdrop').remove();
        // $("#EULAConfirmation").modal("show");
    }

    $(".eula-confirmation").click(function () {
        $("#EULAConfirmation").modal("hide");
        $.ajax({
            url: baseUrl+"ajax/license/sign-license",
            type: 'POST',
            data: {
                'signLicense': 1,
            },
            dataType: 'json',
            cache: false,
            success: function (data) {
                if(data.success === false){
                    alert(data.error);
                    $("#EULAConfirmation").modal("show");
                }
            },
            error: function (data) {
                alert("Unexpected Eorrr Occured. ERR_EULAAJAX");
                $("#EULAConfirmation").modal("show");
            }
        });
        

    });

    $(".show00").click(function () {
        $("#EULAConfirmation").modal("show");
    });
    $(".hide00").click(function () {
        $("#EULAConfirmation").modal("hide");
    });


});

$(document).on('show.bs.modal', '.modal', function () {
    if ($(".modal-backdrop").length > -1) {
        $(".modal-backdrop").not(':first').remove();
    }
});