$('button.mobile-menu-button').on('click', function(){  
    $('.mobile-menu').toggle()
  })

  $('.kimberly').on('click', function(e){
    e.preventDefault()
    let id = $('.portal-um').attr("data-first")
    $.post('/kimberly/sentax', {iduser: id}, (result)=>{

      $('#relatorio').attr("src", result)
      
    })
  })

  $('.quimicos').on('click', function(e){
    e.preventDefault()
    let iddois = $('.portal-um').attr('data-first')
    
    $.post('/quimicos/sentax', {iduser: iddois}, (result)=>{
      $('#relatorio').attr("src", result)
      
    })
  })

  $('.rubbermaid').on('click', function(e){
    e.preventDefault()
    let idtres = $('.portal-um').attr('data-first')
    
    $.post('/rubbermaid/sentax', {iduser: idtres}, (result)=>{
      $('#relatorio').attr("src", result)
    })

  })


  $('.outros').on('click', function(e){
    e.preventDefault()

    let id = ('.portal-um').attr('data-first')

    $.post('/outros/sentax', {iduser: id}, (result)=>{

      $('#relatorio').attr("src", result)
    })

  })

  $('.estoque').on('click', function(e){
    e.preventDefault()

    let id = $('.portal-um').attr('data-first')
    
    $.post('/estoque/sentax', {iduser: id}, (result)=>{

      $('#relatorio').attr("src", result)
    })
  })

  //modal confirmação apaga do usuario

  $(document).ready(function(){
   $('.idModal').on('click', function(e){
    e.preventDefault()
    let iduser = $(this).attr('data-id')
    
    $.post('/excluir/confirmar', {idusuario: iduser}, (result)=>{
      $('.nome-user').html(result)
      console.log(result)
    })
   })
  })

  $(document).ready(function(){
    $('#FormEdit').submit(function(e){
      e.preventDefault()
      let usuario = $(this).attr('data-user')
      let e_mail = $('#email').val()
      let senha = $('#senha').val()
      let conf_senha = $('#conf-senha').val()
      let func = $('#funcao').val()
      
      $.post('/acesso/usuario/editado', {id:usuario, email:e_mail, password:senha, confpassword: conf_senha, funcao:func}, (result)=>{
        console.log(result)
        $('#info').html(result)
      })
      $('#email').val("")
    })
  })

  $(document).ready(function(){
    let ocultar = false
    
    $('#icon').on('click', function(){

      ocultar = !ocultar

      if(ocultar){
        $('#loginPassword').attr('type', 'text')
        $(this).removeClass('fa-eye').addClass('fa-sharp fa-solid fa-eye-slash')
      }else{
        $('#loginPassword').attr('type', 'password')
        $(this).removeClass('fa-sharp fa-solid fa-eye-slash').addClass('fa-solid fa-eye')
      }
    })
  })
  