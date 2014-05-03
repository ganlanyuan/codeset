/* make youtube iframe responsible
 * 
 * change "http://www.youtube.com" to your code or remove it
 * change ".iframe-container" to your iframe container class
 *
 */
$(function() {
	var $allVideos = $("iframe[src^='http://www.youtube.com']"),
	$fluidEl = $(".iframe-container");
	$allVideos.each(function() {
		$(this)
			.data('aspectRatio', this.height / this.width)
			.removeAttr('height')
			.removeAttr('width');
	});

	$(window).resize(function() {
		var newWidth = $fluidEl.width();
		$allVideos.each(function() {
			var $el = $(this);
			$el
				.width(newWidth)
				.height(newWidth * $el.data('aspectRatio'));
		});
	}).resize();
});

