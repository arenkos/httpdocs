$(document).ready(function() {
    var currentPage = 1;

    $(window).on('wheel', function(e) {
        if (e.originalEvent.deltaY < 0) {
            // Yukarı kaydırma
            if (currentPage > 1) {
                currentPage--;
                scrollToPage(currentPage);
            }
        } else {
            // Aşağı kaydırma
            if (currentPage < $('.page').length) {
                currentPage++;
                scrollToPage(currentPage);
            }
        }
    });

    function scrollToPage(page) {
        $('.page.active').removeClass('active');
        $('.page:nth-child(' + page + ')').addClass('active');
    }
});
