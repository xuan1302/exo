(function ($) {
  AOS.init();

	$('.ct-branch h4').click(function(event) {
		$(this).parent('.ct-branch').parent('.item').addClass('active').siblings().removeClass('active');
	});

	$('#primary-menu li.menu-item-has-children > a').append('<svg width="13" height="13" viewBox="0 0 13 13" fill="#000" xmlns="http://www.w3.org/2000/svg"><path d="M1.42371 7.21191C1.15849 7.21191 0.904136 7.10656 0.716599 6.91902C0.529063 6.73148 0.423706 6.47713 0.423706 6.21191C0.423706 5.9467 0.529063 5.69234 0.716599 5.50481C0.904136 5.31727 1.15849 5.21191 1.42371 5.21191H11.4237C11.6889 5.21191 11.9433 5.31727 12.1308 5.50481C12.3183 5.69234 12.4237 5.9467 12.4237 6.21191C12.4237 6.47713 12.3183 6.73148 12.1308 6.91902C11.9433 7.10656 11.6889 7.21191 11.4237 7.21191H1.42371Z" fill=""/><path d="M5.42371 1.21191C5.42371 0.946698 5.52906 0.692344 5.7166 0.504807C5.90414 0.317271 6.15849 0.211914 6.42371 0.211914C6.68892 0.211914 6.94328 0.317271 7.13081 0.504807C7.31835 0.692344 7.42371 0.946698 7.42371 1.21191V11.2119C7.42371 11.4771 7.31835 11.7315 7.13081 11.919C6.94328 12.1066 6.68892 12.2119 6.42371 12.2119C6.15849 12.2119 5.90414 12.1066 5.7166 11.919C5.52906 11.7315 5.42371 11.4771 5.42371 11.2119V1.21191Z" fill=""/></svg>')
	$('#footer-menu li.menu-item-has-children > a').append('<svg width="13" height="13" viewBox="0 0 13 13" fill="#ccc" xmlns="http://www.w3.org/2000/svg"><path d="M1.42371 7.21191C1.15849 7.21191 0.904136 7.10656 0.716599 6.91902C0.529063 6.73148 0.423706 6.47713 0.423706 6.21191C0.423706 5.9467 0.529063 5.69234 0.716599 5.50481C0.904136 5.31727 1.15849 5.21191 1.42371 5.21191H11.4237C11.6889 5.21191 11.9433 5.31727 12.1308 5.50481C12.3183 5.69234 12.4237 5.9467 12.4237 6.21191C12.4237 6.47713 12.3183 6.73148 12.1308 6.91902C11.9433 7.10656 11.6889 7.21191 11.4237 7.21191H1.42371Z" fill=""/><path d="M5.42371 1.21191C5.42371 0.946698 5.52906 0.692344 5.7166 0.504807C5.90414 0.317271 6.15849 0.211914 6.42371 0.211914C6.68892 0.211914 6.94328 0.317271 7.13081 0.504807C7.31835 0.692344 7.42371 0.946698 7.42371 1.21191V11.2119C7.42371 11.4771 7.31835 11.7315 7.13081 11.919C6.94328 12.1066 6.68892 12.2119 6.42371 12.2119C6.15849 12.2119 5.90414 12.1066 5.7166 11.919C5.52906 11.7315 5.42371 11.4771 5.42371 11.2119V1.21191Z" fill=""/></svg>')
	$('#primary-menu-mobile li.menu-item-has-children > a').append('<svg width="13" height="13" viewBox="0 0 13 13" fill="#2E2E2E" xmlns="http://www.w3.org/2000/svg"><path d="M1.42371 7.21191C1.15849 7.21191 0.904136 7.10656 0.716599 6.91902C0.529063 6.73148 0.423706 6.47713 0.423706 6.21191C0.423706 5.9467 0.529063 5.69234 0.716599 5.50481C0.904136 5.31727 1.15849 5.21191 1.42371 5.21191H11.4237C11.6889 5.21191 11.9433 5.31727 12.1308 5.50481C12.3183 5.69234 12.4237 5.9467 12.4237 6.21191C12.4237 6.47713 12.3183 6.73148 12.1308 6.91902C11.9433 7.10656 11.6889 7.21191 11.4237 7.21191H1.42371Z" fill=""/><path d="M5.42371 1.21191C5.42371 0.946698 5.52906 0.692344 5.7166 0.504807C5.90414 0.317271 6.15849 0.211914 6.42371 0.211914C6.68892 0.211914 6.94328 0.317271 7.13081 0.504807C7.31835 0.692344 7.42371 0.946698 7.42371 1.21191V11.2119C7.42371 11.4771 7.31835 11.7315 7.13081 11.919C6.94328 12.1066 6.68892 12.2119 6.42371 12.2119C6.15849 12.2119 5.90414 12.1066 5.7166 11.919C5.52906 11.7315 5.42371 11.4771 5.42371 11.2119V1.21191Z" fill=""/></svg>')

	$('#video-home .icon-play img').click(function(event) {
		$('#video-home').addClass('show-video');
		$(".video-home").get(0).play();
	});
	$('.icon-bar svg').click(function () {

		setTimeout(()=>{
				$('.menu-responsive').addClass('show-mn');
			}
			, 100)
	})


	$('.icon-close-res-menu').click(function () {
		$('.menu-responsive').removeClass('show-mn');
	})

	$(".menu-responsive").click(function (e) {
		e.stopPropagation();
	})
	$(document).on("click", function(e) {
		if ($(e.target) != $(".menu-responsive") && $(".menu-responsive").hasClass("show-mn")) {
			$(".menu-responsive").removeClass("show-mn");
		}
	})


	$('#footer-menu li.menu-item-has-children > a').click(function (e) {
		$(this).siblings('.sub-menu').toggleClass('active')
	})

	$('#primary-menu-mobile li.menu-item-has-children > a').click(function (e) {
		// e.preventDefault()
		$(this).siblings('.sub-menu').toggleClass('active')
	})

	$('#primary-menu-mobile li.menu-item-has-children > a svg').click(function (e) {
		e.preventDefault()
		$(this).parent('a').parent('li').toggleClass('active')
	})

	$('#primary-menu-mobile li').click(function () {
		$(this).toggleClass('active');
	})

	$('#tab-product-head li').click(function () {
		$(this).addClass('active').siblings().removeClass('active');
		let data_id = '#' + $(this).attr('data-id');
		$('.content-tab-product .item').css('display','none')
		$(data_id).css('display','block')
	})
	$('#tab-product-head li a').click(function (e) {
		e.preventDefault();
	})
	let count =  $('.list-td .item-td').length;
	if(count == 5){
		$('.list-td .item-td:nth-child(5)').addClass('w100')
	}

	if(jQuery(window).width() < 767) {
		$('.list-thuong-hieu li').removeClass('active');
		$('.list-thuong-hieu li:first-child').addClass('active');

		//slide blog mobile
		var swiper = new Swiper(".slide-mobile-home", {
			slidesPerView: "auto",
			loop:true,
			pagination: {
				el: ".blog-pagination",
				clickable: true,
			},
		});

	}

}(jQuery));