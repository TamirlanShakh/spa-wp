$(document).ready(function(){

/*Слайдер для Releases*/
	var i = 1, p=1, s=0, c= $('.slider_releases_img').length, w=1107, t=500, x=true;

	while(i<=c) {
		$('.slider_releases_img_'+i).css({'left':s+'px'});
		s = s+w;
		i++;
	}

	$('.slider_releases_next').click(function(){
	if (x){
		if (p<c){
		p++;
		i=0;
		
		while (i<=c) {
		var e = $(".slider_releases_img_"+i).css('left');
		e =  parseInt(e) - w;
		$(".slider_releases_img_"+i).animate({left:e+"px"}, t);
		i++;	
		}; 
		};
	};
	x = false;
	setTimeout(function(){
				x=true;
			},1000)
	});

	$('.slider_releases_prev').click(function(){
	if (x){	
		if (p>1){
		p--;
		i=0;
		
		while (i<=c) {
		var e = $(".slider_releases_img_"+i).css('left');
		e =  parseInt(e) + w;
		$(".slider_releases_img_"+i).animate({left:e+"px"}, t);
		i++;	
		}; 
		};
	};
	x = false;
	setTimeout(function(){
				x=true;
			},1000)	

	});


	/*Слайдер для New*/
	var ci = 1, cp=1, cs=0, cc= $('.new_slide').length, cw=448, ct=500, cx=true;

	while(ci<=cc) {
		$('.new_slide_'+ci).css({'left':cs+'px'});
		cs = cs+cw;
		ci++;
	}
	$('.new_slide_next').click(function(){
	if (cx){
		if (cp<cc){
		cp++;
		ci=0;
		
		while (ci<=cc) {
		var ce = $(".new_slide_"+ci).css('left');
		ce =  parseInt(ce) - cw;
		$(".new_slide_"+ci).animate({left:ce+"px"}, ct);
		ci++;	
		}; 
		};
	};
	cx = false;
	setTimeout(function(){
				cx=true;
			},1000)
	});

	$('.new_slide_prev').click(function(){
	if (cx){	
		if (cp>1){
		cp--;
		ci=0;
		
		while (ci<=cc) {
		var ce = $(".new_slide_"+ci).css('left');
		ce =  parseInt(ce) + cw;
		$(".new_slide_"+ci).animate({left:ce+"px"}, ct);
		ci++;	
		}; 
		};
	};
	cx = false;
	setTimeout(function(){
				cx=true;
			},1000)	

	});


	/*Модальное окно*/
	$('.oils_order_button').click(function() {
			$('.modal').css({'display':'block'});
			$('.modal_window').animate({'top':'300px'},1500);
			
	});		
	$('.close_modal').click(function(){
			$('.modal_window').animate({'top':'-300px'},1500);
			setTimeout(function(){
				$('.modal').css({'display':'none'});
			},1000)	
			
	});

	/*Сокращение текста*/

	function maxSymbols ($elem, num, t, fadeLength) {
    var text = $elem.text(),
        temp = text.split(''),
        step,
        fade,
        result;
   
    
    if (!fadeLength) {
        fadeLength = 10;
    }
    
    fade = temp.slice(num - fadeLength, num);
    temp.length = num - fadeLength;
    
    result = temp.join('');
    
    for (var i = 0; i < fadeLength; i++) {
        step = +(1 - (1 / fadeLength * i)).toFixed(2);
        result += '<span style="opacity: ' + step + '">' + fade[i] + '</span>';
    }
    
    $elem.html(result);
}

// ограничим текст в блоке до 100 символов
// причем последние 20 будут исчезать с эффектом fadeOut
maxSymbols($('.product_desc'), 150, 20);


});	