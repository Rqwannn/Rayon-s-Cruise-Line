$(document).ready(function () {
    $('.menu-toggle').on('click', function () {
        $(this).toggleClass('open');
        $('.side-bar').toggleClass('open');
    });
});