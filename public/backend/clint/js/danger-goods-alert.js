$(document).ready(function() {
    // var dgStatus = $('.danger-goods-radio-list input[type=radio]').val();
    // console.clear();
    // console.log(dgStatus);
    $('.danger-goods-radio-list input[type=radio]').change(function() {
        if (this.value == '0') {
            showDangerGoodsAlert();
            hideDgFields();
            $('#denger-good-notification-box').hide();
        } else {
            showDgFields();
            $('#denger-good-notification-box').show();
        }
    });

    // //make dg field disappear while No
    // if($('.danger-goods-radio-list input[type=radio]').val() == 0){
    //     hideDgFields();
    //     console.log("enter gg1");
    // }

});

// var baseUrl = 'http://sky.test/';
var baseUrl = 'http://www.developing.skysolutionbd.com/';
var swalDGImgSrc = baseUrl + 'images/dg-icon8.jpg';

// preloading
var dgImg = new Image();
dgImg.src = swalDGImgSrc;

function showDgFields() {
    // $(".dg-field").val("");
    $(".dg-field").each(function() {
        if($(this).val() == "-") {
            $(this).val("");
        }
    });
    // $(".dg-field-area .help-block").html("1");
    $(".dg-field-area").slideDown("fast", function() {
        $(".dg-field")[0].focus();
        // $(".dg-field-area .help-block").html("2");
    });

}

function hideDgFields() {
    $(".dg-field-area").slideUp("fast", function() {
        $(".dg-field").val("-");
    });
}

function showDangerGoodsAlert() {
    //var swalDGImgSrc = baseUrl + 'images/dg-icon3.png';
    // var swalDGImgSrc = baseUrl + 'images/dg-icon8.jpg';
    var swalDGText = '';
    // swalDGText += '<img src="' + swalDGImgSrc + '" style="width:150px;"><br><br>';
    swalDGText += '<div class="hidden-sm hidden-xs"> <img src="' + swalDGImgSrc + '" style="width:100%; max-width:500px;" ><br></div>';
    swalDGText += "<br><b>'Dangerous Goods'</b> are hazardous properties which present a potential threat to flight safety.";

    swalDGText += ' If you have any of the listed items above (or other similar such items), <span style="color:red">Declare Them!</span> Carrying these substances without prior notification is a criminal offence and will result in legal prosecution. ';

    // swalDGText += '<br> <br> <br>';
    swal({
            html: true,
            title: "Are you sure?",
            // title: "",
            text: swalDGText,
            // type: "warning",
            showCancelButton: true,
            // confirmButtonColor: '#FF0000',
            // confirmButtonClass: 'swal-dg-goods-confirm',
            confirmButtonClass: 'btn-danger',
            confirmButtonText: 'Agree',
            cancelButtonText: 'Disagree',
            closeOnConfirm: true,
            closeOnCancel: true,
            allowOutsideClick: false,
            allowEscapeKey: false,
            customClass: 'swal-dg',
            // width: '850px'
            // imageUrl: swalDGImgSrc,
            // imageSize: null,
        },
        function(isConfirm){

            if (isConfirm){
                // swal("Yes!", "", "success");

            } else {
                // swal("Cancelled", "", "error");
                $('.danger-goods-radio-list input[value=0]').prop('checked', false);
            }
        });
}