// require('../../resources/js/bootstrap');

$(window).on('load', function () {
    userPhotos();
});

function userPhotos() {
    $.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        type: "GET",
        url:'profile/images',
        success: function (data) {
            console.log(data);
        }
    });
}
