$(document).ready(function(){
      
      
    $('#nav a').filter(function(){return this.href==location.href}).parent().addClass('is-active').siblings().removeClass('is-active').find('.submenu li').removeClass('is-active');
    
    $('.dropdown-toggle').click(function (event) {
       var _this = $( this );
        event.preventDefault();
//        _this.parent().addClass('is-active').siblings().removeClass('is-active'); 
        _this.toggleClass( 'toggled-on' );
        _this.next( 'ul' ).toggleClass( 'toggled-on' );
        _this.siblings( '.dropdown-toggle' ).toggleClass( 'toggled-on' );
        _this.attr( 'aria-expanded', _this.attr( 'aria-expanded' ) === 'false' ? 'true' : 'false' ); 
        console.log('toggled-on'); 
       
    }); 
});

var pth = window.location.pathname;
var loc = pth.slice(-10, -1);
console.log(loc);

$(document).ready(function(){
    $('.is-active').find('ul.submenu').addClass('toggled-on');
    $('#nav').find('.is-active').parent().addClass('toggled-on').parent().addClass('is-active');
    $('li.is-active').find('button').addClass('toggled-on').attr('aria-expanded', true);
});