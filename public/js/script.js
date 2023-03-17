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