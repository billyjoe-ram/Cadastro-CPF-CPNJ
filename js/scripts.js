$(document).ready(function(){
  $("#txtcnpj").hide();
  $("#txtrazao").hide();
  $("#txtfantasia").hide();  
  $("#txtcpf").hide();  
  $('input[type="radio"]').click(function(event){
    if ($("#pf").prop("checked"))
    {             
      $("#txtcnpj").hide();
      $("#txtrazao").hide();
      $("#txtfantasia").hide();
      $("#txtcpf").show();     
    }
    else if ($("#pj").prop("checked"))
    {
      $("#txtcpf").hide();     
      $("#txtcnpj").show();
      $("#txtrazao").show();
      $("#txtfantasia").show();             
    }
    });

    $('.date').mask('00/00/0000');
      $('.phone_with_ddd').mask('(00) 00000-0000');
      $('.cpf').mask('000.000.000-00', {reverse: true});

      $("#formul").validate({
        rules : {
          txtnome:{
            required:true,
            minlength:5
          },
          txtemail:{
            required:true,
            minlength:7,
          },
          txtcpf: {
            required:true
          },
          txtdata:{
            required:true
          },
          txttelefone: {
            required:true
          }
        },
        messages:{
          txtnome:{
            required:"Por favor, informe seu nome",
            minlength:"O nome deve ter pelo menos 5 caracteres"
          },
          txtemail:{
            required:"Por favor, informe um e-mail",
            minlength:"Informe um e-mail válido"
          },
          txtcpf: {
            required:"Informe seu CPF"
          },
          txtdata:{
            required:"Informe data de nascimento"
          },
          txttelefone: {
            required:"Por favor, informe seu celular"
          }
        }
      });
});