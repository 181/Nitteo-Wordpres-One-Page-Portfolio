$(document).ready(function() {  

$(".mix a").addClass("test-popup-link");

$(".mix a").append( '<div class="ch-item"></div>' ); 

$(".mix a img").attr('id', 'alt-text');  

$("#Grid > li > a > img").each(function(i, ele) {
$(this).next().append('<div class="ch-info"><h3>'+$(ele).attr("alt")+'</h3></div>');
});

$("#Grid > li").each(function(i, ele) {
$("#filter").append('<li data-filter="'+$(ele).attr("class").split(" ").pop()+'" class="filter">'+$(ele).attr("class").split(" ").pop()+'</li>');
});

var seen = {};
$('.filter').each(function() {
    var txt = $(this).text();
    if (seen[txt])
        $(this).remove();
    else
        seen[txt] = true;
});

$('#settings').click(function() {
    if($(this).css("margin-left") == "180px")
    {
        $('#style_css').animate({"margin-left": '-=180'});
        $('#settings').animate({"margin-left": '-=180'});
    }
    else
    {
        $('#style_css').animate({"margin-left": '+=180'});
        $('#settings').animate({"margin-left": '+=180'});
    }


  });


$(".changer").click(function() {
    $(".changer").addClass("border_css2");
    $(this).removeClass("border_css2");
    $(this).addClass("border_css");
});
 
$(function() {

$(".roll").css("opacity","0");
 

$(".roll").hover(function () {
 

$(this).stop().animate({
opacity: .7
}, "350");
},
 

function () {
 

$(this).stop().animate({
opacity: 0
}, "350");
});
});

$("#back-top").hide();
	

$(function () {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {
				$('#back-top').fadeIn();
			} else {
				$('#back-top').fadeOut();
			}
		});

$('#back-top a').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});

$('#item_1, .arrow').click(function () {
			$('body,html').animate({
				scrollTop: $('#content').offset().top
			}, 800);
			return false;
		});

$('#item_2').click(function () {
			$('body,html').animate({
				scrollTop: $('#content1').offset().top
			}, 800);
			return false;
		});

$('#item_3').click(function () {
			$('body,html').animate({
				scrollTop: $('#content2').offset().top
			}, 800);
			return false;
		});

$('#item_4').click(function () {
			$('body,html').animate({
				scrollTop: $('#content3').offset().top 
			}, 800);
			return false;
		});
	});
    
$(function () {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 600) {
				$('#navigation').css('margin-top','0px');
        $('#navigation-name').css('visibility','visible');
        $('#navigation').addClass('navigation_color');
        $('.navigation-wrapper span').css('font-weight','700');
			} else {
				$('#navigation').css('margin-top','-60px');;
			}
		});


$('#back-top a').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
	});


$(document).scroll(function(){
   
    var docScroll = $(document).scrollTop(), 
        boxCntOfset = $(".skills-line").position().top + 150,
        boxCntOfset1 = $("#content").offset().top - 5,
        boxCntOfset2 = $("#content1").offset().top - 5,
        boxCntOfset3 = $("#content2").offset().top - 5,
        boxCntOfset4 = $("#content3").offset().top - 5,
        boxCntOfset5 = $("#content4").offset().top - 5,
        boxCntOfset6 = $("#content").position().top + 100,
        boxCntOfset7 = $("#content1").position().top + 100,
        boxCntOfset8 = $("#content2").position().top + 100,
        boxCntOfset9 = $("#content3").position().top + 100;
 

    if(docScroll >= boxCntOfset ) {

      $("#line-1").addClass('line-1-score');
      $("#line-2").addClass('line-2-score');
      $("#line-3").addClass('line-3-score');
    } else {
      $("#line-1").css('width','0px');
      $("#line-2").css('width','0px');
      $("#line-3").css('width','0px');
    
    }
    
    if((docScroll >= boxCntOfset1) && (docScroll <= boxCntOfset2)) {
        $("#item_1").addClass('select_navi');
    } else {
        $("#item_1").removeClass('select_navi');
    }
    
     if((docScroll >= boxCntOfset2) && (docScroll <= boxCntOfset3)) {
        $("#item_2").addClass('select_navi');
    } else {
        $("#item_2").removeClass('select_navi');
    }
    
    if((docScroll >= boxCntOfset3) && (docScroll <= boxCntOfset4)) {
        $("#item_3").addClass('select_navi');
    } else {
        $("#item_3").removeClass('select_navi');
    }
    
    if(docScroll >= boxCntOfset4) {
        $("#item_4").addClass('select_navi');
    } else {
        $("#item_4").removeClass('select_navi');
    }
    
    if(docScroll >= boxCntOfset6) {
        $("#content").css('padding-top','100px');
        $("#content").css('padding-bottom','100px');
    } else {
        $("#content").css('padding-top','200px');
        $("#content").css('padding-bottom','0px');
    }
    
    if(docScroll >= boxCntOfset7) {
        $("#content1").css('padding-top','100px');
        $("#content1").css('padding-bottom','100px');
    } else {
        $("#content1").css('padding-top','200px');
        $("#content1").css('padding-bottom','0px');
    }
    
    if(docScroll >= boxCntOfset8) {
        $("#content2").css('padding-top','100px');
        $("#content2").css('padding-bottom','100px');
    } else {
        $("#content2").css('padding-top','200px');
        $("#content2").css('padding-bottom','0px');
    }
    
    if(docScroll >= boxCntOfset9) {
        $("#content3").css('padding-top','100px');
        $("#content3").css('padding-bottom','100px');
    } else {
        $("#content3").css('padding-top','200px');
        $("#content3").css('padding-bottom','0px');
    }
    
  });      
    
}); 