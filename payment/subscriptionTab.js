$('.subscribtion').click(function(){
  
    if($(this).hasClass('active')) {
      
      $(this).removeClass('active');
      $('.form').removeClass('active');
      
      if($(this).hasClass('free')) {
        $('.family').removeClass('hidden');
        $('.premium').removeClass('hidden');
        $('.free-form').removeClass('hidden');
        $('.free-button').removeClass('active');
      }
      if($(this).hasClass('family')) {
        $('.free').removeClass('hidden');
        $('.premium').removeClass('hidden');
      }
      if($(this).hasClass('premium')) {
        $('.free').removeClass('hidden');
        $('.family').removeClass('hidden');
      }
      
    }
    else {
      $(this).addClass('active');
      
      if($(this).hasClass('free')) {
        $('.family').addClass('hidden');
        $('.premium').addClass('hidden');
        $('.free-form').addClass('hidden');
        $('.free-button').addClass('active');
      }
      if($(this).hasClass('family')) {
        $('.free').addClass('hidden');
        $('.premium').addClass('hidden');
      }
      if($(this).hasClass('premium')) {
        $('.free').addClass('hidden');
        $('.family').addClass('hidden');
      }
      
      $('.form').addClass('active');
    }
    
  });
  
  $('.payment-btn').click(function(){
    
    if( $(this).hasClass('active') ) {
      $(this).removeClass('active');
    }
    else {
      $('.payment-btn').removeClass('active');
      $(this).addClass('active');
    }
    
  })