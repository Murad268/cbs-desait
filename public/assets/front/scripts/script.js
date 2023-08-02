$('.banner__sliders').slick({
	infinite: true,
	arrows: false,
	dots: true,
})
$('.our__team__wrapper').slick({
	infinite: true,
	arrows: false,
	slidesToShow: 4,
	dots: false,
	slidesToScroll: 1,
	responsive: [
		{
			breakpoint: 1220,
			settings: {
				slidesToShow: 3,
			},
		},
		{
			breakpoint: 810,
			settings: {
				slidesToShow: 2,
			},
		},
		{
			breakpoint: 600,
			settings: {
				slidesToShow: 1,
				arrows: false,
			},
		},
	],
})
$('.prev-button').click(() => {
	$('.our__team__wrapper').slick('slickPrev')
})

$('.next-button').click(() => {
	$('.our__team__wrapper').slick('slickNext')
})

$('.us_chosen__slider__top').slick({
	infinite: true,
	arrows: false,
	dots: false,
	// speed: 0,
	asNavFor: '.us_chosen__slider__bottom',
	appendDots: $('us_chosen__slider__bottom'),
	swipeToSlide: false,
})

$('.us_chosen__slider__bottom').slick({
	infinite: true,
	arrows: false,
	dots: false,
	// speed: 0,
	slidesToShow: 5,
	centerMode: true,
	variableWidth: true,
	asNavFor: '.us_chosen__slider__top',
})

$('.us_chosen__slider__top').slick('slickGoTo', 3)

$('.us_chosen__slider__bottom .slick-slide').on('click', function () {
	var index = $(this).index()
	$('.us_chosen__slider__top').slick('slickGoTo', index)
})

function openAccordion(triggerSelectors, contentSelectors) {
  // Önceki tüm accordion içeriklerini kapalı konuma getiriyoruz
  $(contentSelectors).hide();

  // Tetikleyiciye tıklama olayı eklenir
  $(triggerSelectors).click(function () {
      var $this = $(this); // Tetikleyiciyi saklarız
      var content = $this.next(contentSelectors); // Tetikleyiciye bağlı içeriği alırız

      // Diğer accordion öğelerinin yüksekliğini sıfıra ayarlarız (kapalı konumda olmaları için)
      $(contentSelectors).not(content).slideUp();

      // Tıklanan accordion öğesinin yüksekliğini geçişli bir şekilde açar veya kapatır
      content.slideToggle();
  });
}



openAccordion(
	'.service__bottom__accerdeon__main',
	'.service__bottom__accerdeon__content'
)

$('.recentPosts__slider').slick({
	infinite: true,
	arrows: false,
	slidesToShow: 3,
	dots: false,
	slidesToScroll: 1,
	responsive: [
		{
			breakpoint: 1220,
			settings: {
				slidesToShow: 3,
			},
		},
		{
			breakpoint: 810,
			settings: {
				slidesToShow: 2,
			},
		},
		{
			breakpoint: 600,
			settings: {
				slidesToShow: 1,
				arrows: false,
			},
		},
	],
})

function openHoverCursor(className, menuClass) {
  const menu = document.querySelector(menuClass);
  const links = document.querySelectorAll(className);
  const arrow = document.querySelector('.nav__down')

  document.addEventListener('click', (e) => {

    if (!e.target.closest('.header__services')) {
      menu.classList.remove('active');
      arrow.classList.remove('active')
    }
  });

  links.forEach((link) => {
    link.addEventListener('mouseover', (e) => {
      menu.classList.add('active');
      arrow.classList.add('active')
    });
  });
}

openHoverCursor('.our__services span', '.header__services');


function openHamburgerMenu (triggerSelector, menuSelector) {
  const header__hamburger = document.querySelector(triggerSelector),
        menu = document.querySelector(menuSelector);

  header__hamburger.addEventListener('click', () => {
    menu.classList.toggle('active');
    header__hamburger.classList.toggle("active")
  })
}

openHamburgerMenu(".header__hamburger", '.hamburger__menu')


function openHamburgerMenuServices(triggerSelector, listSelector) {
  const trigger = document.querySelector(triggerSelector),
        list = document.querySelector(listSelector)
        const arrow = document.querySelector('.hamburger__down')
      if(trigger && list) {
        trigger.addEventListener('click', () => {
          list.classList.toggle("active")
          arrow.classList.toggle('active')
        })
      }
}

openHamburgerMenuServices('.hamburger__main__services', '.hamburger__main')



const darkModeSelector = document.querySelector('.form-check-input')


function toggleDarkMode() {
  const isDark = localStorage.getItem('isDark')=="dark"?true:false
  if (isDark) {
      darkModeSelector.checked = true
      document.body.classList.add("dark-mode__body")
      document.body.classList.add("dark-mode__text")
  } else {
    darkModeSelector.checked = false
    document.body.classList.remove("dark-mode__body")
    document.body.classList.remove("dark-mode__text")
  }
}
toggleDarkMode()





darkModeSelector.addEventListener('change', (e) => {
  if (darkModeSelector.checked) {
    localStorage.setItem("isDark", 'dark')
    toggleDarkMode()
  } else {
    localStorage.setItem("isDark", 'white')
    toggleDarkMode()
    basqaBirSey();
  }
});
