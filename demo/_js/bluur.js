var bluur = (function(window, document, undefined) {
	var processor_url = '';
	return {
		image: function(to_blur, callback){
			$.get( processor_url, { img: to_blur }).done(function( data){
				callback(data);
			});
		},
		config: function(config){
			processor_url = config;
		}
	};
})(this, this.document);