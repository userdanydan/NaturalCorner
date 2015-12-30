
$(function(){
    /*$("#plus").hover(function() {
		var $elt = $(this); // cibler l'élément
		$elt.css("cursor","pointer"); // ajouter le pointer au survol (facultatif)
		var $ma_bulle = $elt.find('.ma-bulle'); // cibler la div .ma-bulle
        $ma_bulle.fadeIn("slow"); // un fade pour faire apparaître la div .ma-bulle
    },function(){
		var $elt = $(this);
		var $ma_bulle = $elt.find('.ma-bulle');
        $ma_bulle.css("display","none");
    });*/
	$('[data-toggle="tooltip"]').tooltip('show');
    var i=1;
    $('#plus').click(function(){
    	$('#addListes').append('<input type="text" class="form-control" id="InputListe'+(i)+
    			'" name="inputnoms['+(i)+']" placeholder="Nom de la liste #'+(++i)+'">').append('</br>');
    });
});