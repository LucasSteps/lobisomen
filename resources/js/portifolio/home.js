$(function() {

	$('.page.portfolio.home').each(function() {

        var $page = $(this);

        var $linkedin = $page.find('.linkedin');

        $linkedin.on('click', function() {

            var url = $(this).data('link');

            if(!url) return;

            window.open(`https://www.linkedin.com/in/${url}`, '_blank');
        });

    });

});
