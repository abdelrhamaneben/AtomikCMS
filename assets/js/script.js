function afficher_message(msg,titre) {
        $('#message_contenu').html(msg);
        $('#titre_contenu').html(titre);
        $('#show_message').modal();
}

$('#select_page_nb').on('change',function(){
	var prix = 500;
	switch($(this).val()) {
		case '4' : prix = 500; break;
		case '5' : prix = 525; break;
		case '6' : prix = 550; break;
		case '7' : prix = 575; break;
		case '8' : prix = 600; break;
		case '9' : prix = 625; break;
		default : prix  = 650; break;
	}
	$('#span_nb_prix').html(prix + "€");
});

function fill_innovation() {
    $('#message').val(
        "Bonjour,\nJe souhaite créer une application web innovante.\nJe vous sollicite pour avoir un devis personnalisé.\nVoici la description de mon projet : \n"
    );
    $('#objet_mail').val("Devis");
}

function fill_refonte() {
    $('#message').val(
        "Bonjour,\nJe souhaite une refonte de mon site.\nJe vous sollicite pour avoir un devis personnalisé.\nVoici l'URL actuelle du site web : \n"
    );
    $('#objet_mail').val("Devis");
}