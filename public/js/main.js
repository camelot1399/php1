(function() {

    $('.jsAddToBasket').on('click', function(){
        let id = $(this).data('id');

		$.post('/basket', {id}, function(res){
			$('.basketCount').text(res.count);
		}, 'json');
	});

}());