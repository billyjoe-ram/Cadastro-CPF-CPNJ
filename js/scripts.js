$(document).ready(function(){
  $(".content-cpf").hide();
  $(".content-cnpj").hide();

  $('input[type="radio"]').click(function(event){
    if ($("#pf").prop("checked"))
    {             
      $(".content-cnpj").hide();
      $(".content-cpf").show();
    }
    else if ($("#pj").prop("checked"))
    {
      $(".content-cpf").hide();
      $(".content-cnpj").show();
    }
    });

    $('.date').mask('00/00/0000');
    $('.phone_with_ddd').mask('(00) 00000-0000');
    $('.cpf').mask('000.000.000-00', {reverse: true});    
    $('.cnpj').mask('00.000.000/0000-00', {reverse: true});
});