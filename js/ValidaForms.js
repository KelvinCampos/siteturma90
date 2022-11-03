/** Função para criar um objeto XMLHTTPRequest
*/

function CriaRequest() {
	try{
		request = new XMLHttpRequest();        
	}
	catch (IEAtual){
		try{
			request = new ActiveXObject("Msxml2.XMLHTTP");       
		}
		catch(IEAntigo){
			try{
				request = new ActiveXObject("Microsoft.XMLHTTP");          
			}
			catch(falha){
				request = false;
			}
		}
	}
	
	if (!request){ 
		alert("Seu Navegador não suporta Ajax!");
	}
	else{
		return request;
	}
}

$(document).ready(function(){

    $('#btnListar').click(function (){
        //alert ('teste do botão');
		//Chamar o método
		ContatosConsultar();
	});

});

function ContatosConsultar() {

	//alert ('Testando o método');
	//Definir variável e atribuir valor, fazendo uso do Jquery
	//JQuery é uma biblioteca de funções JavaScript que interage com o HTML

	var strnome = $('input[id=txtNome]').val();
	
	//Definir a URN
	// Ver mais em https://woliveiras.com.br/posts/url-uri-qual-diferenca/
	var urn = "../contatos/listar/";


	//Instanciar o objeto XMLHTTP
	var xmlreq = CriaRequest();

	//Iniciar uma requisição
	xmlreq.open('POST', urn, true);

	//Cabeçalho de Envio
	xmlreq.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

}



