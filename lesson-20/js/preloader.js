function doActionAfterSpin(action) {
	var $spinner = $('#spinner');
  $spinner.removeClass('hidden');
  setTimeout(function() {
  	$spinner.addClass('hidden');
    action();
  }, 2000);
}

$('#b1').click(function() {
	doActionAfterSpin(function(){
  	$('#modal-1').modal('show');
  });
});