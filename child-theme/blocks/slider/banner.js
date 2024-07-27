window.addEventListener('load', function() {
    var swiper = new Swiper(".js-swiper-banner", {
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            renderBullet: function(index, className) {
                return '<span class="' + className + '">' + (index + 1) + "</span>";
            },
        },
    });
});
