/// Collapse

$('.block-control-collapse').click(function(e) {
	e.preventDefault();
	var notthis = $('.active').not(this);
 	$(this).parent().toggleClass('active').next().slideToggle("fast");
});

/// Sidebar-control


var count = 0;
var w2 = $('.p-body-main').width();
var w3 = $('.p-body-sidebar').width();
$(".sidebar-control").click(function() {
	count++;
	var isEven = function(someNumber) {
		return (someNumber % 2 === 0) ? true : false;
	};
	
	if (isEven(count) === false) {
		$(".p-body-content").animate({paddingRight: 0, width: w2}, 500);
		$(".p-body-sidebar").animate({opacity: 0}, 500);
		setTimeout(function() {
			$(".p-body-sidebar").css('display', 'none');
		}, 500);
	}

	else if (isEven(count) === true) {
		setTimeout(function() {
			$(".p-body-sidebar").css('display', 'table-cell');
		}, 0);
		$(".p-body-sidebar").animate({opacity: 1}, 500);
		$(".p-body-content").animate({paddingRight: 20, width: w2 - w3}, 500);
	}
});

/// Search-control

!function($){

	$(document).ready(function () {
		$('.p-discovery').ready(function () {

			$('.control-search').click(function (e) {
				if($(this).parent().children('.search-area').hasClass('show')){
					$(this).parent().children('.search-area').removeClass('show');
                }else {
                	$(this).parent().children('.search-area').addClass('show');
                }
                e.stopPropagation();
            });
            $('.search-input').click(function (e) {
            	$(this).parent().children('.search-option').addClass('active');
            	$('.menu').removeClass('is-active');
            	e.stopPropagation();
            });
            $('.search-option').click(function (e) {
            	e.stopPropagation();
            })
        });
        $('body, html').click(function () {
        	$('.search-option').removeClass('active');
        	$('.search-area').removeClass('show');
        });
    });

}(jQuery);

// Tooltip

$(document).ready(function(){
    $(".block-header > a").mouseenter(function(){
    	$(this).next().show();
    });
    $(".block-header > a").mouseleave(function(){
    	$(this).next().hide();
    });
});

$('.block--category').ready(function () {
	var w1 = $('.block-header > a').width() + 35;
	$('.block-desc').css('left', w1);
});

/* Footer */

$('.p-footer').append('<div class="p-footer-bottom"><div class="p-footer-inner"></div></div>');
$('.p-footer-debug').appendTo($('.p-footer-bottom > .p-footer-inner'));

$('.p-footer').each(function() {
	if ( $('.p-footer').has('.p-footer-top').length && !$('.p-footer').has('.p-footer-middle').length ) {
		$(this).children('.p-footer-top').children('.p-footer-inner').append('<div class="BRCopyright"><div class="content-brcpright"><a href="http://brivium.com/xenforo-add-ons" class="item-brcp" title="Brivium XenForo Add-ons">XenForo Add-ons</a><span>&nbsp;&amp;&nbsp;</span><a href="http://brivium.com/xenforo-styles" class="item-brcp" title="Brivium XenForo Styles">XenForo Styles</a><span> ™  © 2012-2018 Brivium LLC.</span></div></div>');
	} else if ( $('.p-footer').has('.p-footer-top').length && $('.p-footer').has('.p-footer-middle').length ) {
		$(this).children('.p-footer-middle').children('.p-footer-inner').append('<div class="BRCopyright"><div class="content-brcpright"><a href="http://brivium.com/xenforo-add-ons" class="item-brcp" title="Brivium XenForo Add-ons">XenForo Add-ons</a><span>&nbsp;&amp;&nbsp;</span><a href="http://brivium.com/xenforo-styles" class="item-brcp" title="Brivium XenForo Styles">XenForo Styles</a><span> ™  © 2012-2018 Brivium LLC.</span></div></div>');
	} else {
		$(this).children('.p-footer-inner').append('<div class="BRCopyright"><div class="content-brcpright"><a href="http://brivium.com/xenforo-add-ons" class="item-brcp" title="Brivium XenForo Add-ons">XenForo Add-ons</a><span>&nbsp;&amp;&nbsp;</span><a href="http://brivium.com/xenforo-styles" class="item-brcp" title="Brivium XenForo Styles">XenForo Styles</a><span> ™  © 2012-2018 Brivium LLC.</span></div></div>');
	}
});

$('.BRCopyright').css({'float': 'left', 'marginTop': 2, 'marginBottom': 2});

/* Footer -- End */

/// Bonus

$('.block-outer:not(:has(.pageNavWrapper, .buttonGroup, .blockStatus))').hide();