$(window).on('load', function() {
	$('.loading').delay(500).fadeOut('slow');
});

$(document).ready(function() {

	$('.row.feature').each(function() {
		sectionTitle = $(this).find('.highlight').text();

		if ($(this).children().length > 4) {
			$(this).children().addClass('more').slice(0,4).removeClass('more');
			$(this).append('<div class="col-sm-12"><a href="" class="show-more button">Show More ' + sectionTitle + '</a></div>');
		}
	});

	$('.show-more').on('click', function() {

		sectionTitle = $(this).parents('.row.feature').find('.highlight').text();

		$(this).text(function(i, text) {
			return text === "Show Less " + sectionTitle ? "Show More " + sectionTitle : "Show Less " + sectionTitle;
		});

		$(this).parent().siblings('.more').slideToggle();

		return false;
	});

	$('.more-info').on('click', function() {

		$(this).parent().siblings('.hidden-info').slideToggle();

		$(this).text(function(i, text) {
			return text === "Less Info" ? "More Info" : "Less Info";
		});

		return false;
	});

	$('.type-page img').on('click', function() {
		if ($(this).hasClass('full-toggle-img')) {
			$(this).removeClass('full-toggle-img');
		} else {
			$('.type-page img').removeClass('full-toggle-img');
			$(this).addClass('full-toggle-img');
		}
	});

	var projectCount = $('#homeProjects .card').length;

	if (projectCount % 2 != 0) {
		$('#homeProjects .row').append('<div class="col-sm-6 full-image coming-soon"><div class="card bg-dark text-white"><table class="project-table"><tr><td><h2>More Coming Soon!</h2></td></tr></table></div></div>');
	}


});