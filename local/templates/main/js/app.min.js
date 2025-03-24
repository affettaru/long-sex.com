document.addEventListener("DOMContentLoaded", function () {
	// header scroll
	function checkScroll() {
		const scrollPosition = window.scrollY;
		const blockHeader = document.querySelector('.js--nheader');
		if (blockHeader) {
			if ( scrollPosition>0 ) {
				blockHeader.classList.add('header__onscroll')
			} else {
				blockHeader.classList.remove('header__onscroll')
			}
		}
	}

	checkScroll()
	window.addEventListener('scroll', function () {
		checkScroll()
	})
	// /header scroll

	// phone mask
	// let inputsPhone = document.querySelectorAll(".js--maskphone");
	// let maskPhoneInput = new Inputmask("+7 (999) 999 99 99");

	// maskPhoneInput.mask(inputsPhone);
	// /phone mask

	// input mask phone
	const inputTel = document.querySelectorAll(".js--maskphone");

	if (inputTel) {
		Array.prototype.forEach.call(inputTel, function (input) {
			window.intlTelInput(input, {
				initialCountry: "auto",
				strictMode: true,
				geoIpLookup: callback => {
				  fetch("https://ipapi.co/json")
					.then(res => res.json())
					.then(data => callback(data.country_code))
					.catch(() => callback("us"));
				}
			})
		})
		
	}

	// popup change lang
	let btnsLang = document.getElementsByClassName('js--btnlang');
	let countLang;

	if (btnsLang) {
		for ( countLang = 0; countLang< btnsLang.length; countLang++) {
			btnsLang[countLang].addEventListener("click", function(event) {
				event.preventDefault();
				this.classList.toggle("active")
				let popupLang = this.nextElementSibling;
				popupLang.classList.toggle('active')
			})
		}
		document.addEventListener('click', (e) => {
			for ( countLang = 0; countLang< btnsLang.length; countLang++) {
				let onBlockLang = e.composedPath().includes(btnsLang[countLang].closest('.js--lang'));
			
				if ( ! onBlockLang ) {
					btnsLang[countLang].classList.remove('active')
					btnsLang[countLang].nextElementSibling.classList.remove('active')
				}
			}
		})
	}
	// /popup change lang

	// custom select	
	let selectCustom = document.querySelector('#js--select-custom');
	if (selectCustom) {
		customSelect(selectCustom)
	}
	
	// /custom select
	
	// fancybox
	Fancybox.bind("[data-fancybox]", {
		// options
	})

	// fancybox for modals
	Fancybox.bind("[data-fancybox-html]", {
		autoFocus: false,
		on: {
			done: (fancybox) => {
				maskPhoneInput.mask(inputsPhone)
			},
		},
	})
	
	
// mobile nav menu
const navBtn = document.querySelector('.js--mobilemenu-btn');
const nav = document.querySelector('.js--mobilemenu');

if (navBtn) {
    navBtn.onclick = function () {
        nav.classList.toggle('mobilemenu__opened');
        navBtn.classList.toggle('active');
        document.body.classList.toggle('no-scroll');
    }
    // mobile nav menu

    // mobile slide links menu
    let btnToSlide = document.getElementsByClassName('js--mobilemenu-linkslide');
    let i;

    for ( i = 0; i < btnToSlide.length; i++) {
        btnToSlide[i].addEventListener("click", function() {
            this.classList.toggle("active")
            let submenu = this.nextElementSibling;
            if (submenu.style.maxHeight) {
                submenu.style.maxHeight = null
            } else {
                submenu.style.maxHeight = submenu.scrollHeight + "px";
            }
        })
    }
}

// /mobile slide links menu
	// faq
let btnFaqToSlide = document.getElementsByClassName('js--faq-title');
let y;

for ( y = 0; y < btnFaqToSlide.length; y++) {
    btnFaqToSlide[y].addEventListener("click", function() {
        this.classList.toggle("active")
        let faqContent = this.nextElementSibling;
        if (faqContent.style.maxHeight) {
            faqContent.style.maxHeight = null
        } else {
            faqContent.style.maxHeight = faqContent.scrollHeight + "px";
        }
    })
}

// /faq
	const mapOffices = document.querySelector('#js--map');

if (mapOffices) {
    let mapProjects;
    let placemarkCollections = {};
    let placemarkList = {};

    // Список городов и магазинов в них
    let projectsList = [
        {
            'cityName': 'Москва',
            'project': [
                {
                    'coordinates': [55.85610806887675,37.64762099999998], 
                    'name': 'УРО-ПРО',
                    'address': 'г. Москва, Проезд Русанова 2А, стр № 14, 5 подъезд, 3 этаж',
                    'worktime': 'Пн-пт: 09:00 - 18:00, сб-вс: 09:00 - 12:00',
                    'phone': '+7 495 274-06-56',
                    'mail': 'uro-pro@clinic.ru'
                },
                {
                    'coordinates': [55.86872490445245,37.662523430840835], 
                    'name': 'Мастер Клиник',
                    'address': 'г. Москва, Проезд Русанова 2А, стр № 14, 5 подъезд, 3 этаж',
                    'worktime': 'Пн-пт: 09:00 - 18:00, сб-вс: 09:00 - 12:00',
                    'phone': '+7 495 274-06-56',
                    'mail': 'uro-pro@clinic.ru'
                },
                {
                    'coordinates': [55.87407480176435,37.71336484695628], 
                    'name': 'Счастливый Взгляд',
                    'address': 'г. Москва, Проезд Русанова 2А, стр № 14, 5 подъезд, 3 этаж',
                    'worktime': 'Пн-пт: 09:00 - 18:00, сб-вс: 09:00 - 12:00',
                    'phone': '+7 495 274-06-56',
                    'mail': 'uro-pro@clinic.ru'
                },
                {
                    'coordinates': [55.899793013506255,37.72466093753073], 
                    'name': 'Добрый Доктор',
                    'address': 'г. Москва, Проезд Русанова 2А, стр № 14, 5 подъезд, 3 этаж',
                    'worktime': 'Пн-пт: 09:00 - 18:00, сб-вс: 09:00 - 12:00',
                    'phone': '+7 495 274-06-56',
                    'mail': 'uro-pro@clinic.ru'
                },
                {
                    'coordinates': [55.92150949967238,37.66662441682221], 
                    'name': 'Довольный Клиент',
                    'address': 'г. Москва, Проезд Русанова 2А, стр № 14, 5 подъезд, 3 этаж',
                    'worktime': 'Пн-пт: 09:00 - 18:00, сб-вс: 09:00 - 12:00',
                    'phone': '+7 495 274-06-56',
                    'mail': 'uro-pro@clinic.ru'
                },
                {
                    'coordinates': [55.66153177885814,37.483735878777715], 
                    'name': 'Клиника Мужского Здоровья',
                    'address': 'г. Москва, Проезд Русанова 2А, стр № 14, 5 подъезд, 3 этаж',
                    'worktime': 'Пн-пт: 09:00 - 18:00, сб-вс: 09:00 - 12:00',
                    'phone': '+7 495 274-06-56',
                    'mail': 'uro-pro@clinic.ru'
                },
            ]
        },
        {
        	'cityName': 'Санкт-Петербург',
        	'project': [
        		{
                    'coordinates': [59.96271642475605,30.344173755859337], 
                    'name': 'УРО-ПРО',
                    'address': 'г. Москва, Проезд Русанова 2А, стр № 14, 5 подъезд, 3 этаж',
                    'worktime': 'Пн-пт: 09:00 - 18:00, сб-вс: 09:00 - 12:00',
                    'phone': '+7 495 274-06-56',
                    'mail': 'uro-pro@clinic.ru'
                },
        		{
                    'coordinates': [59.88136394331309,30.33868059179682], 
                    'name': 'Мужская клиника',
                    'address': 'г. Москва, Проезд Русанова 2А, стр № 14, 5 подъезд, 3 этаж',
                    'worktime': 'Пн-пт: 09:00 - 18:00, сб-вс: 09:00 - 12:00',
                    'phone': '+7 495 274-06-56',
                    'mail': 'uro-pro@clinic.ru'
                },
        	]
        }
    ];

    ymaps.ready(init);

    function init() {

        // Создаем карту
        mapProjects = new ymaps.Map(mapOffices, {
            center: [55.76, 37.64],
            zoom: 10,
            controls: [
                'zoomControl',
                'fullscreenControl'
            ],
            // zoomMargin: [20]
        });

        for (var i = 0; i < projectsList.length; i++) {
        
            // Создаём коллекцию меток для города
            var cityCollection = new ymaps.GeoObjectCollection();
        
            for (var c = 0; c < projectsList[i].project.length; c++) {
                var projectInfo = projectsList[i].project[c];
        
                var shopPlacemark = new ymaps.Placemark(
                    projectInfo.coordinates,
                    {
                        hintContent: projectInfo.name,
                        balloonContent: "<div class='h6'>" + projectInfo.name + "</div><div>" + projectInfo.address + "</div><div>" + projectInfo.worktime + "</div><div>" + projectInfo.phone + "</div><div>" + projectInfo.mail + "</div>"
                    }, {
                        iconLayout: 'default#image',
                        iconImageHref: 'img/marker-pin.svg',
                        iconImageSize: [20, 20],
                        iconImageOffset: [-10, -10]
                    }
                );
        
                if (!placemarkList[i]) placemarkList[i] = {};
                placemarkList[i][c] = shopPlacemark;
        
                // Добавляем метку в коллекцию
                cityCollection.add(shopPlacemark);
        
            }
        
            placemarkCollections[i] = cityCollection;
        
            // Добавляем коллекцию на карту
            mapProjects.geoObjects.add(cityCollection);
        
        }
        mapProjects.setBounds(mapProjects.geoObjects.getBounds(), {
            checkZoomRange: true,
        }).then(function(){
            if(mapProjects.getZoom() > 15) mapProjects.setZoom(15); 
            // Если значение zoom превышает 15, то устанавливаем 15.
        }, function(err) {
            console.log('error')
        });
    }
}
	const mapContacts = document.querySelector('#js--mapoffices');
const selectCities = document.querySelector('.js--select-cities');
const listHtmlOffices = document.querySelector('.js--addresses');
const mapPopup = document.querySelector('.js--placemark');
const mapPopupContent = document.querySelector('.js--placemark--popup');

if (mapContacts) {
    let mapOffices;
    let placemarkCollectionsOffices = {};
    let placemarkListOffices = {};

    // Список городов и магазинов в них
    let officesList = [
        {
            'cityName': 'Москва',
            'office': [
                {
                    'coordinates': [55.85610806887675,37.64762099999998], 
                    'name': 'УРО-ПРО',
                    'address': '1 г. Москва, Проезд Русанова 2А, стр № 14, 5 подъезд, 3 этаж',
                    'worktime': 'Пн-пт: 09:00 - 18:00, сб-вс: 09:00 - 12:00',
                    'phone': '+7 495 274-06-56',
                    'mail': 'uro-pro@clinic.ru',
                    'status': 'Главный офис'
                },
                {
                    'coordinates': [55.86872490445245,37.662523430840835], 
                    'name': 'Мастер Клиник',
                    'address': '2 г. Москва, Проезд Русанова 2А, стр № 14, 5 подъезд, 3 этаж',
                    'worktime': 'Пн-пт: 09:00 - 18:00, сб-вс: 09:00 - 12:00',
                    'phone': '+7 495 274-06-56',
                    'mail': 'uro-pro@clinic.ru',
                    'status': 'Региональный офис'
                },
                {
                    'coordinates': [55.87407480176435,37.71336484695628], 
                    'name': 'Счастливый Взгляд',
                    'address': '3 г. Москва, Проезд Русанова 2А, стр № 14, 5 подъезд, 3 этаж',
                    'worktime': 'Пн-пт: 09:00 - 18:00, сб-вс: 09:00 - 12:00',
                    'phone': '+7 495 274-06-56',
                    'mail': 'uro-pro@clinic.ru',
                    'status': 'Региональный офис'
                },
                {
                    'coordinates': [55.899793013506255,37.72466093753073], 
                    'name': 'Добрый Доктор',
                    'address': '4 г. Москва, Проезд Русанова 2А, стр № 14, 5 подъезд, 3 этаж',
                    'worktime': 'Пн-пт: 09:00 - 18:00, сб-вс: 09:00 - 12:00',
                    'phone': '+7 495 274-06-56',
                    'mail': 'uro-pro@clinic.ru',
                    'status': 'Региональный офис'
                },
                {
                    'coordinates': [55.92150949967238,37.66662441682221], 
                    'name': 'Довольный Клиент',
                    'address': '5 г. Москва, Проезд Русанова 2А, стр № 14, 5 подъезд, 3 этаж',
                    'worktime': 'Пн-пт: 09:00 - 18:00, сб-вс: 09:00 - 12:00',
                    'phone': '+7 495 274-06-56',
                    'mail': 'uro-pro@clinic.ru',
                    'status': 'Региональный офис'
                },
                {
                    'coordinates': [55.66153177885814,37.483735878777715], 
                    'name': 'Клиника Мужского Здоровья',
                    'address': '6 г. Москва, Проезд Русанова 2А, стр № 14, 5 подъезд, 3 этаж',
                    'worktime': 'Пн-пт: 09:00 - 18:00, сб-вс: 09:00 - 12:00',
                    'phone': '+7 495 274-06-56',
                    'mail': 'uro-pro@clinic.ru',
                    'status': 'Региональный офис'
                },
            ]
        },
        {
        	'cityName': 'Санкт-Петербург',
        	'office': [
        		{
                    'coordinates': [59.96271642475605,30.344173755859337], 
                    'name': 'УРО-ПРО',
                    'address': '1 г. Санкт-Петербург, Проезд Русанова 2А, стр № 14, 5 подъезд, 3 этаж',
                    'worktime': 'Пн-пт: 09:00 - 18:00, сб-вс: 09:00 - 12:00',
                    'phone': '+7 495 274-06-56',
                    'mail': 'uro-pro@clinic.ru',
                    'status': 'Региональный офис'
                },
        		{
                    'coordinates': [59.88136394331309,30.33868059179682], 
                    'name': 'Мужская клиника',
                    'address': '2 г. Санкт-Петербург, Проезд Русанова 2А, стр № 14, 5 подъезд, 3 этаж',
                    'worktime': 'Пн-пт: 09:00 - 18:00, сб-вс: 09:00 - 12:00',
                    'phone': '+7 495 274-06-56',
                    'mail': 'uro-pro@clinic.ru',
                    'status': 'Региональный офис'
                },
        	]
        }
    ];

    ymaps.ready(init);

    function init() {

        // Создаем карту
        mapOffices = new ymaps.Map(mapContacts, {
            center: [55.76, 37.64],
            zoom: 10,
            controls: [
                'zoomControl',
                'fullscreenControl'
            ],
            zoomMargin: [20]
        });

        // Создадим макет метки.
        let animatedLayout = ymaps.templateLayoutFactory.createClass(
            '<div class="placemark"></div>',
            {
                build: function () {
                    animatedLayout.superclass.build.call(this);
                    let element = this.getParentElement().getElementsByClassName('placemark')[0];
                    let elements = document.querySelectorAll('.placemark');
                    
                    // Размер для увеличенной метки
                    let size = this.isActive ? 34 : 34;

                    // задаем размеры активной области "Круг"... ура, не кракозябра.
                    let smallShape = {type: 'Circle', coordinates: [0, 0], radius: size / 2};
                    let bigShape = {type: 'Circle', coordinates: [0, 0], radius: size / 2};

                    // Зададим фигуру активной области.
                    this.getData().options.set('shape', this.isActive ? bigShape : smallShape);

                    // Если метка выбрана, то зададим класс
                    // сначала удаляем все active
                    for ( i = 0; i < elements.length; i++) {
                        elements[i].classList.remove('placemark__active')
                        mapPopup.classList.remove("active")
                    }
                    // // добавляем в нужном месте active
                    if (this.isActive) {
                        element.classList.add("placemark__active")
                        mapPopup.classList.add("active")
                        this.isActive = true;
                    } else if (this.inited) {
                        element.classList.remove("placemark__active")
                        mapPopup.classList.remove("active")
                        this.isActive = false;
                    }
                    if (!this.inited) {
                        this.inited = true;
                        this.isActive = false;
                        // При клике по метке будем перестраивать макет.
                        this.getData().geoObject.events.add('click', function () {
                            this.isActive = true;
                            this.rebuild()
                        }, this);
                    }
                }
            }
        )

        selectCities.innerHTML = "";

        for (var i = 0; i < officesList.length; i++) {
            
            // Добавляем название города в выпадающий список
            let newOption = new Option(officesList[i].cityName, i);    
            if (i==0) {  
                newOption.setAttribute('selected', 'true');
            }
            selectCities.append(newOption)

            var cityCollection = new ymaps.GeoObjectCollection();

            for (var c = 0; c < officesList[i].office.length; c++) {
                var officeInfo = officesList[i].office[c];
     
                var officePlacemark = new ymaps.Placemark(
                    officeInfo.coordinates,
                    {
                        balloonContent: "<div class='map__des__status'>"+officeInfo.status+"</div><div class='map__des__title'>"+officeInfo.address+"</div><div class='map__des__item'><div class='map__des__label'>Телефон:</div><div class='map__des__text'><a href='tel:"+officeInfo.phone+"'>"+officeInfo.phone+"</a></div></div><div class='map__des__item'><div class='map__des__label'>Электронная почта:</div><div class='map__des__text'><a href='mailto:"+officeInfo.mail+"'>"+officeInfo.mail+"</a></div></div><div class='map__des__item'><div class='map__des__label'>Режим работы:</div><div class='map__des__text'>"+officeInfo.worktime+"</div></div>"
                    }, {
                        iconLayout: animatedLayout,
                        hasBalloon: false
                    }
                );
     
                if (!placemarkListOffices[i]) placemarkListOffices[i] = {};
                placemarkListOffices[i][c] = officePlacemark;
     
                // Добавляем метку в коллекцию
                cityCollection.add(officePlacemark);     
            }

            placemarkCollectionsOffices[i] = cityCollection;

            // Добавляем коллекцию на карту
            mapOffices.geoObjects.add(cityCollection);

            cityCollection.events.add('click', function (e) {
                mapPopupContent.innerHTML = "";

                let popupHtml = document.createElement('div');
                popupHtml.innerHTML = e.get('target')['properties'].get('balloonContent');

                mapPopupContent.append(popupHtml)

                document.querySelector('#map').scrollIntoView({ behavior: 'smooth' });
            })
        }

        selectCities.dispatchEvent(new Event('change'))
        customSelect(selectCities)

    }

    selectCities.onchange = function(event) {
        let cityId = event.target.value;

        // Масштабируем и выравниваем карту так, чтобы были видны метки для выбранного города
        mapOffices.setBounds(placemarkCollectionsOffices[cityId].getBounds(), {checkZoomRange:true}).then(function(){
            if (myMap.getZoom() > 15) myMap.setZoom(15);
        });

        // составляем список офисов
        listHtmlOffices.innerHTML = "";
        for (var c = 0; c < officesList[cityId].office.length; c++) {
            let itemLi = document.createElement('li');
            itemLi.className = "map__addresses__item";
            itemLi.innerHTML = "<div class='map__addresses__status'>"+officesList[cityId].office[c].status+"</div><div class='map__addresses__address'>"+officesList[cityId].office[c].address+"</div>";

            listHtmlOffices.append(itemLi)
        }

        // // тык по списку -> открываем подпись
        // let listAddresses = document.querySelectorAll('.map__addresses__item');

        // listAddresses.forEach((elem, index) => {
        //     elem.addEventListener('click', function () {
        //         let cityId = selectCities.selectedIndex;
        //         let officeId = index;
    
        //         placemarkListOffices[cityId][officeId].events.fire('click');
        //     })
        // })
    }

    // кнопка закрытия окна-описания
    const btnCloseMapDes = document.querySelector('.js--btn-mapdes-close');
    btnCloseMapDes.addEventListener('click', function () {
        this.closest('.js--placemark').classList.toggle('active')
        
        let activePoint = document.querySelector('.placemark__active');
        activePoint.classList.remove('placemark__active')
    })

}
	const sliderCertificates = document.querySelector('.js--certificates-slider');

if(sliderCertificates) {
	const certificatesSwiper = new Swiper(sliderCertificates, {
		// loop: true,
		slidesPerView: "auto",
        freeMode: true,
		autoHeight: true,
		slidesOffsetAfter: 20,
		slidesOffsetBefore: 20,
		spaceBetween: 20,
		speed: 700,
		
		navigation: {
			nextEl: '.js--certificates-next',
			prevEl: '.js--certificates-prev',
		},

		pagination: {
			el: '.js--certificates-pagination',
			clickable: false,
			bulletClass: 'bullet',
			bulletActiveClass: 'bullet__active'
		},

		breakpoints: {
			616 : {
				slidesOffsetAfter: 0,
				slidesOffsetBefore: 0,
				freeMode: false,
				slidesPerView: 2,
				slidesPerGroup: 2,
			},
			828 : {
				slidesOffsetAfter: 0,
				slidesOffsetBefore: 0,
				slidesPerView: 3,
				slidesPerGroup: 3,
			},
			1320 : {
				slidesOffsetAfter: 0,
				slidesOffsetBefore: 0,
				slidesPerView: 4,
				slidesPerGroup: 4,
			}
		},

	})
}
	const sliderBlog = document.querySelector('.js--blog-slider');

if(sliderBlog) {
	const blogSwiper = new Swiper(sliderBlog, {
		// loop: true,
		slidesPerView: "auto",
        freeMode: true,
		autoHeight: true,
		slidesOffsetAfter: 20,
		slidesOffsetBefore: 20,
		spaceBetween: 20,
		speed: 700,
		
		navigation: {
			nextEl: '.js--blog-next',
			prevEl: '.js--blog-prev',
		},

		pagination: {
			el: '.js--blog-pagination',
			clickable: true,
			bulletClass: 'bullet',
			bulletActiveClass: 'bullet__active'
		},

		breakpoints: {
			616 : {
				slidesOffsetAfter: 0,
				slidesOffsetBefore: 0,
				freeMode: false,
				slidesPerView: 2,
				slidesPerGroup: 2,
			},
			1320 : {
				slidesOffsetAfter: 0,
				slidesOffsetBefore: 0,
				slidesPerView: 3,
				slidesPerGroup: 3,
			}
		},

	})
}
	const sliderWelcome = document.querySelector('.js--welcome-slider');

if(sliderWelcome) {
	const welcomeSwiper = new Swiper(sliderWelcome, {
		loop: true,
		slidesPerView: 1,
		autoHeight: true,
		spaceBetween: 20,
		speed: 700,
        autoplay: true,
		delay: 6000,
        pauseOnMouseEnter: true,

		pagination: {
			el: '.js--welcome-pagination',
			clickable: true,
			bulletClass: 'bullet',
			bulletActiveClass: 'bullet__active'
		}

	})
}
	const sliderGallery = document.querySelector('.js--gallery');

if(sliderGallery) {
	const gallerySwiper = new Swiper(sliderGallery, {
		loop: true,
		slidesPerView: 1,
		autoHeight: true,
		spaceBetween: 20,
		speed: 700,
		
		navigation: {
			nextEl: '.js--gallery-next',
			prevEl: '.js--gallery-prev',
		},

		pagination: {
			el: '.js--gallery-pagination', 
			clickable: true,
			bulletClass: 'bullet',
			bulletActiveClass: 'bullet__active'
		},

	})
}

	// отступ для хлебных крошек в < 992
	const crumbs = document.querySelector('.crumbs ol');
	if (crumbs) {
		blockForOffset = document.querySelector('.h2');
		function crumbsOffset() {
			if (window.innerWidth<992) {
				crumbs.style.paddingLeft = blockForOffset.offsetLeft
				crumbs.style.paddingRight = blockForOffset.offsetLeft
			} else {
				crumbs.style.paddingLeft = "0"
				crumbs.style.paddingRight = "0"
			}
		}
		crumbsOffset()

		window.addEventListener('resize', () => {
			crumbsOffset()
		});
	
		window.addEventListener('orientationchange', () => {
			crumbsOffset()
		});
	}

})


