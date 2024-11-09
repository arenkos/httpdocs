$(document).ready(function() {
    var currentPage = 1;

    $(document).on('mousewheel DOMMouseScroll', function(e) {
        if (e.originalEvent.wheelDelta > 0 || e.originalEvent.detail < 0) {
            if (currentPage > 1) {
                currentPage--;
                scrollToPage(currentPage);
            }
        } else {
            if (currentPage < $('.page').length) {
                currentPage++;
                scrollToPage(currentPage);
            }
        }
    });

    function scrollToPage(page) {
        var transformValue = 'translateY(-' + (page - 1) * 100 + 'vh)';
        $('.container').css('transform', transformValue);
    }
});
