'use strict'

function navHide(){
    
    //Responsive Menu
    $('.toolBarButton').click(function(){
        let display = document.getElementById('navBar');
                
        if(display.style.display==='none'){
            $('#navBar').removeAttr('style','display:none;');
            $('#layer').removeAttr('style','display:none;');
            $('.BarButtonContainer').attr('style','display:none !important;');
            $('#navBar').animate({
                width:'70%'
            },500,function(){
                console.log('animation complete');
            });   
        }
    });
    
    $('.navBarButton').click(function(){
        let display = document.getElementById('navBar');
                
        if(display.style.display!=='none'){
            $('#navBar').animate({
                    width:'0%'
                },500,function(){
                    console.log('animation complete');
                    $('#navBar').attr('style','display:none;');
                    $('#layer').attr('style','display:none;');
                    $('.BarButtonContainer').removeAttr('style','display:none !important;');
                });
        }
    });
    
     $('#layer').click(function(){
        let display = document.getElementById('navBar');
                
        if(display.style.display!=='none'){
            $('#navBar').animate({
                    width:'0%'
                },500,function(){
                    console.log('animation complete');
                    $('#navBar').attr('style','display:none;');
                    $('#layer').attr('style','display:none;');
                    $('.BarButtonContainer').removeAttr('style','display:none !important;');
                });
        }
    });
}
$(document).ready(navHide);


function cartHide(){
    $('.cartHide').click(function(){
        let displayCart = document.getElementById('carrito');
                    
        if(displayCart.style.display==='none'){
            console.log('esta oculto');
            $('#carrito').removeAttr('style','display:none;');
            $('.cartHide').attr('style','display:none !important;');
        }; 
    });
    
    $('.closeCart').click(function(){
        let displayCart = document.getElementById('carrito');
                    
        if(displayCart.style.display!=='none'){
            console.log('mostrando');
            $('#carrito').attr('style','display:none;');
            $('.cartHide').removeAttr('style','display:none !important;');
        };
    });
}
$(document).ready(cartHide);



function cartResponsive(){
    var width = $(window).width();
    console.log(width);
    if(width>805){
        $('#carrito').removeAttr('style','display:none;');
        $('.cartHide').attr('style','display:none;');
    }else{
        $('#carrito').attr('style','display:none;');
        $('.cartHide').removeAttr('style','display:none;');
    }
}
window.addEventListener('load',cartResponsive);


function carritoHide(){
    var width = $(window).width();
    console.log(width);
    
    if(width>805){
        $('#carrito').removeAttr('style','display:none;');
        $('.cartHide').attr('style','display:none;');
    }else{
        $('#carrito').attr('style','display:none;');
        $('.cartHide').removeAttr('style','display:none;');
    }
}
window.addEventListener('resize',carritoHide);