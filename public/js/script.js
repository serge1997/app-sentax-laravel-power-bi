$('button.mobile-menu-button').on('click', function(){  
    $('.mobile-menu').toggle()
  })

  $('.portal-um').on('click', function(e){
    e.preventDefault()
    let id = ($(this).attr("data-first"))
    $.post('/bi/sentax', {iduser: id}, (result)=>{
      $('#relatorio').attr("src", result)
      //console.log($(result).attr("src"))
    })
  })

  $('.portal-dois').on('click', function(e){
    e.preventDefault()
    let iddois = $('.portal-um').attr('data-first')
    
    $.post('/bi/sentax/2', {iduser: iddois}, (result)=>{
      $('#relatorio').attr("src", result)
      
    })
  })

  $('.portal-tres').on('click', function(e){
    e.preventDefault()
    let idtres = $('.portal-um').attr('data-first')
    
    $.post('/bi/sentax/3', {iduser: idtres}, (result)=>{
      $('#relatorio').attr("src", result)
    })
  })