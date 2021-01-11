$(function() {
// FUNÇÃO PARA MUDAR O SCROLL DO NAVBAR , DE TRANSPARENT , PARA SOLID.
 $(window).scroll(function(){
     if ( $(this).scrollTop() > 50 ){
         $('.navbar').addClass('solid bg-dark');
     } else{
         $('.navbar').removeClass('solid bg-dark');
     }
 });

    /* Mostra a tela de loading no inicio. */
    function onReady(callback) {
        var intervalId = window.setInterval(function() {
        if (document.getElementsByTagName('html')[0] !== undefined) {
            window.clearInterval(intervalId);
            callback.call(this);
        }
        }, 1000);
    }
    
    function setVisible(selector, visible) {
        document.querySelector(selector).style.display = visible ? 'block' : 'none';
    }
    
    onReady(function() {
        setVisible('.sessao-carregando', false);
    });

    onReady(function(){
        setTimeout(function(){
            $('#success').fadeOut('slow');
        },3000);
    
        setTimeout(function(){
            $('#error').fadeOut('slow');
        },3000);
    });

 $('.nav-item, .nav-link').on('click', function(e) {
     if ( this.has !== ""){
         e.preventDefault();
         let anchor = this.hash;

         $('html,body').animate({
             scrollTop: $(anchor).offset().top
         }, 800 , function() {
             window.location.hash = anchor;
         });
     }
 });

 $(document).on('click', '[data-toggle="lightbox"]', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox();
});

   
});