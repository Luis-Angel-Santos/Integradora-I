$(document).ready(function(){
        
        var inicio = $('#inicio').offset().top,
        nosotros = $('#nosotros').offset().top,
        galeria = $('#galeria').offset().top;
        contacto = $('#contacto').offset().top;
        citas = $('#citas').offset().top;

        $('#btn-inicio').on('click', function(e){
            e.preventDefault();
            $('html, body').animate({
                scrollTop: inicio - 200
            }, 500);
        });

        $('#btn-nosotros').on('click', function(e){
            e.preventDefault();
            $('html, body').animate({
                scrollTop: nosotros - 100
            }, 500);
        });
    
        $('#btn-nosotros').on('click', function(e){
            e.preventDefault();
            $('html, body').animate({
                scrollTop: nosotros- 100
            }, 500);
        });
    
        $('#btn-galeria').on('click', function(e){
            e.preventDefault();
            $('html, body').animate({
                scrollTop: galeria - 100
            }, 500);
        });

        $('#btn-contacto').on('click', function(e){
            e.preventDefault();
            $('html, body').animate({
                scrollTop: contacto - 100
            }, 500);
        });
        
        $('#btn-citas').on('click', function(e){
            e.preventDefault();
            $('html, body').animate({
                scrollTop: citas - 100
            }, 500);
        });
            
    });

