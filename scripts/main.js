$(function () {
    btn = $('.header__btn');
    navbar = $('.header__links');
    body = $('body');
    btn.click(function (e) {
        e.preventDefault();
        navbar.toggleClass('open');
        btn.toggleClass('open');
        body.toggleClass('overflow');
    });

    $('.owl-carousel').owlCarousel({
        loop: true,
        nav: false,
        items: 1,
        dots: false,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplaySpeed: 1300,
    })
});

tinymce.init({
    selector: "textarea#content",  // change this value according to your HTML
    plugins: [
        'advlist autolink lists link image charmap print preview anchor',
        'searchreplace visualblocks code fullscreen',
        'insertdatetime media table contextmenu paste code codesample'
    ],
    rel_list: [
        {title: 'None', value: ''},
        {title: 'New window', value: 'noreffer noopener'},
    ],
    removeformat: [
        {selector: 'p', attributes: ['style'], split: true, expand: false, deep: true},
    ]
});

function myMap() {
    var mapOptions = {
        center: new google.maps.LatLng(46.551551, 15.677864),
        zoom: 15,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    var map = new google.maps.Map(document.getElementById("map"), mapOptions);
    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(46.551551, 15.677864),
        map: map
    });
}

$("#imageUpload").submit(function (event) {
    var formData = new FormData($("#imageUpload")[0]);
    event.preventDefault();
    $.ajax({
        url: '/admin/imageUpload.php',
        type: 'POST',
        data: formData,
        success: function (result) {
            console.log(result);
            var parts = result.split("|");
            if (parts[0] === "success") {
                $("#result").html("<strong>Slika naložena! Povezava do slike: " + parts[1] + "</strong>")
            } else {
                $("#result").html("<strong>Napaka pri nalaganju slike!</strong>")
            }
        },
        cache: false,
        contentType: false,
        processData: false,
    });
    event.preventDefault();
    return false;
})
//# sourceMappingURL=sourcemaps/main.js.map
