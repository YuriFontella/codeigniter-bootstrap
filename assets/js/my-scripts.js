function ajax(url, dados) {

  $.ajax({

    url: url,
    type: 'post',
    data: dados,  
    beforeSend: function() {
      $('button').addClass('disabled');
      $('.status').html('<p class="text-status">Aguarde...</p>');
    },
    success: function(data) {

    setTimeout(function(){

      if(data != false) {

        $('.status').html('<p class="text-danger">'+data+'</p>');
        $('button').removeClass('disabled');

      } else {

        $('.status').html("");
        $('.form-control').val("");
        refresh();

      }

    }, 2000);

    },
    error: function() {
      alert('Estamos enfrentando problemas técnicos, tente mais tarde!');
      $('button').removeClass('disabled');
    }

  });

};

function cadastrar() {

  var dados = new Object();
  dados['nome'] = $('#nome').val();
  dados['email'] = $('#email').val();
  dados['localidade'] = $('#localidade').val();

  url = 'clientes/cadastrar';

  ajax(url, dados);

};

function alterar(id) {
 
  var dados = new Object();

  dados['nome'] = $('#nome').val();
  dados['email'] = $('#email').val();
  dados['localidade'] = $('#localidade').val();

  url = baseurl+'clientes/alterar/'+id;

  ajax(url, dados);

};

function refresh() {

  window.location =  baseurl;

}; 