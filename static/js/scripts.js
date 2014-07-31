$(document).ready(function(){
	// Inicializa o menu responsivo
	$("#responsiveMenu").mmenu();

	// Recupera o evento de pesquisar
	$('#formSearch').on('submit', function(){
		return $('input[name=search]').val() !== '';
	});
});