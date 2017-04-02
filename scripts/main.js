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
//# sourceMappingURL=sourcemaps/main.js.map
