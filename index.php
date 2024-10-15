<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сафьяновская медь</title>
    <link rel="stylesheet" href="css/style.css">
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
  />
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
</head>
<body>

    <header>
        <div class="header__top">
            <div class="header__top__left">
                <a href="index.html"><img src="img/logo.svg" alt="Сафьяновая медь, логотип" class="header__top__left__logo"></a>
                <div class="header__top__left__title">
                    <p class="header__top__left__title-black">АКЦИОНЕРНОЕ ОБЩЕСТВО</p>
                    <p class="header__top__left__title-orange">«САФЬЯНОВСКАЯ МЕДЬ»</p>
                </div>
            </div>
            
            <div class="header__top__contact">
                <p class="header__top__contact-phone">+7 (343) 283-04-15</p>
                <p class="header__top__contact-text">общий</p>
            </div>
        </div>
        <hr/>
        
    </header>
    <div class="header__menu">
        <input type="checkbox" id="burger-checkbox" class="burger-checkbox">
        <label for="burger-checkbox" class="burger"></label>
        <menu class="menu-list">
            <a href="#our_product" class="header__menu-link">Щебень</a>
            <a href="#about_us" class="header__menu-link">О нас</a>
            <a href="#sertificat" class="header__menu-link">Сертификаты</a>
            <a href="#contacts" class="header__menu-link">Контакты</a>
            <a href="#application" class="header__menu-link">Заявка</a>
            <a href="#queshns" class="header__menu-link">Вопрос-ответ</a>
        </menu >
    </div>
    <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="img/slider/DSC_0637.JPG" alt="Image 1">
                </div>
                <div class="swiper-slide">
                    <img src="img/slider/sheben20-40.jpg" alt="Image 2">
                </div>
                <div class="swiper-slide">
                    <img src="img/slider/IMG_4883.JPG" alt="Image 3">
                </div>
                <div class="swiper-slide">
                    <img src="img/slider/IMG_6132.JPG" alt="Image 3">
                </div>
            </div>
    </div>
    <section class="our_product" id="our_product">
        <h1 class="title">ЩЕБЕНЬ</h1>
        
        <div class="our_product__cards">
            <input type="checkbox" name="our_product__checkbox"  class="our_product__checkbox" id="our_product__checkbox-sand">
            <input type="checkbox" name="our_product__checkbox"  class="our_product__checkbox" id="our_product__checkbox-ru5">
            <input type="checkbox" name="our_product__checkbox"  class="our_product__checkbox" id="our_product__checkbox-ru20">
            <input type="checkbox" name="our_product__checkbox"  class="our_product__checkbox" id="our_product__checkbox-ru40">
            <input type="checkbox" name="our_product__checkbox"  class="our_product__checkbox" id="our_product__checkbox-dropout">
            <label class="our_product__button" for="our_product__checkbox-sand">
                <div class="our_product__card">
                    <img src="img/index/sand.png" alt="песок" class="our_product__card-img">
                    <div class="our_product__card__text">
                        <p class="our_product__card__text-big">ПЕСОК 0-4мм</p>
                        <p class="our_product__card__text-big">480 РУБ/Т</p>
                        <p>подробнее</p>
                    </div>
                </div>
            </label>
                <div class="our_product_full__text" id="our_product_full__text-sand">
                    <label for="our_product__checkbox-sand" class="our_product_full__lable"></label>
                    <div class="our_product_full__text-top">
                        <img src="img/logo.svg" alt="" class="our_product_full__text-logo">
                        <p class="our_product_full__text-text">САФЬЯНОВСКАЯ МЕДЬ</p>
                    </div>
                    <img src="img/index/sand.png" alt="песок" class="our_product__card-img">
                    <div class="our_product_full__text-grid">
                        <p>Доставка</p>
                        <p>Самовывоз</p>
                        <p>Условия оплаты</p>
                        <p>100% предоплаты</p>
                    </div>
                    <p>применяется для асвальтобетона,изделий ЖБИ, отделочных материалов, стеновых панелей,керамики, тротуарной плитки, ланшафтного дизайна, противолёдное средство</p>
                    <p>ГОСТ 32730-2014</p>
                </div>
                <label class="our_product__button" for="our_product__checkbox-ru5">
                <div class="our_product__card">
                    <img src="img/index/rubble5-20.png" alt="песок" class="our_product__card-img">
                    <div class="our_product__card__text">
                        <p class="our_product__card__text-big">ЩЕБЕНЬ 5-20мм</p>
                        <p class="our_product__card__text-big">684 РУБ/Т</p>
                        <p>подробнее</p>
                    </div>
                </div>
                </label>
                <div class="our_product_full__text" id="our_product_full__text-ru5">
                    <label for="our_product__checkbox-ru5" class="our_product_full__lable"></label>
                    <div class="our_product_full__text-top">
                        <img src="img/logo.svg" alt="" class="our_product_full__text-logo">
                        <p class="our_product_full__text-text">САФЬЯНОВСКАЯ МЕДЬ</p>
                    </div>
                    <img src="img/index/rubble5-20.png" alt="песок" class="our_product__card-img">
                    <div class="our_product_full__text-grid">
                        <p>Доставка</p>
                        <p>Самовывоз</p>
                        <p>Условия оплаты</p>
                        <p>100% предоплаты</p>
                        <p>Минимальный заказ</p>
                        <p>500 т</p>
                        <p>Цена за опт</p>
                        <p>Договорная</p>
                        <p>Морозостойкость</p>
                        <p>F300</p>
                        <p>Дробимость</p>
                        <p>М1200-1400</p>
                        <p>Ледощадность</p>
                        <p>Группа 2 (10-15%)</p>
                        <p>Истираемость</p>
                        <p>И1</p>
                        <p>Радиоактивность</p>
                        <p>1 класс</p>
                    </div>
                    <p>применяется для бетона для монолитных работ, изделий ЖБИ,обустройства подушки приямников и траншей, отсыпки дорожек и площадок</p>
                    <p>ГОСТ 8267-93</p>
                </div>
                <label class="our_product__button" for="our_product__checkbox-ru20">
                <div class="our_product__card">
                    <img src="img/index/rubble20-40.png" alt="песок" class="our_product__card-img">
                    <div class="our_product__card__text">
                        <p class="our_product__card__text-big">ЩЕБЕНЬ 20-40мм</p>
                        <p class="our_product__card__text-big">540 РУБ/т</p>
                        <p>подробнее</p>
                    </div>
                </div>
                </label>
                <div class="our_product_full__text" id="our_product_full__text-ru20">
                    <label for="our_product__checkbox-ru20" class="our_product_full__lable"></label>
                    <div class="our_product_full__text-top">
                        <img src="img/logo.svg" alt="" class="our_product_full__text-logo">
                        <p class="our_product_full__text-text">САФЬЯНОВСКАЯ МЕДЬ</p>
                    </div>
                    <img src="img/index/rubble20-40.png" alt="песок" class="our_product__card-img">
                    <div class="our_product_full__text-grid">
                        <p>Доставка</p>
                        <p>Самовывоз</p>
                        <p>Условия оплаты</p>
                        <p>100% предоплаты</p>
                        <p>Минимальный заказ</p>
                        <p>500 т</p>
                        <p>Цена за опт</p>
                        <p>Договорная</p>
                        <p>Морозостойкость</p>
                        <p>F300</p>
                        <p>Дробимость</p>
                        <p>М1200-1400</p>
                        <p>Ледощадность</p>
                        <p>Группа 2 (10-15%)</p>
                        <p>Истираемость</p>
                        <p>И1</p>
                        <p>Радиоактивность</p>
                        <p>1 класс</p>
                    </div>
                    <p>применяется в дорожном строительстве фундаментных оснований и отсыпке опор мостов и иных сооружений</p>
                    <p>ГОСТ 8267-93</p>
                </div>
                <label class="our_product__button" for="our_product__checkbox-ru40">
                <div class="our_product__card">
                    <img src="img/index/rubble40-70.png" alt="песок" class="our_product__card-img">
                    <div class="our_product__card__text">
                        <p class="our_product__card__text-big">ЩЕБЕНЬ 40-70мм</p>
                        <p class="our_product__card__text-big">540 РУБ/т</p>
                        <p>подробнее</p>
                    </div>
                </div>
                </label>
                <div class="our_product_full__text" id="our_product_full__text-ru40">
                    <label for="our_product__checkbox-ru40" class="our_product_full__lable"></label>
                    <div class="our_product_full__text-top">
                        <img src="img/logo.svg" alt="" class="our_product_full__text-logo">
                        <p class="our_product_full__text-text">САФЬЯНОВСКАЯ МЕДЬ</p>
                    </div>
                    <img src="img/index/rubble40-70.png" alt="песок" class="our_product__card-img">
                    <div class="our_product_full__text-grid">
                        <p>Доставка</p>
                        <p>Самовывоз</p>
                        <p>Условия оплаты</p>
                        <p>100% предоплаты</p>
                        <p>Минимальный заказ</p>
                        <p>500 т</p>
                        <p>Цена за опт</p>
                        <p>Договорная</p>
                        <p>Морозостойкость</p>
                        <p>F300</p>
                        <p>Дробимость</p>
                        <p>М1200-1400</p>
                        <p>Ледощадность</p>
                        <p>Группа 2 (10-15%)</p>
                        <p>Истираемость</p>
                        <p>И1</p>
                        <p>Радиоактивность</p>
                        <p>1 класс</p>
                    </div>
                    <p>применяется длядорожного строительства, бетона для крупных строительных объектов, при возведении дренажных систем, для заполнения канав и ям</p>
                    <p>ГОСТ 8267-93</p>
                </div>
                <label class="our_product__button" for="our_product__checkbox-dropout">
                <div class="our_product__card">
                    <img src="img/index/dropouts.png" alt="песок" class="our_product__card-img">
                    <div class="our_product__card__text">
                        <p class="our_product__card__text-big">ОТСЕВЫ 0-120мм</p>
                        <p class="our_product__card__text-big">240 РУБ/т</p>
                        <p>подробнее</p>
                    </div>
                </div>
                </label>
                <div class="our_product_full__text" id="our_product_full__text-dropout">
                    <label for="our_product__checkbox-dropout" class="our_product_full__lable"></label>
                    <div class="our_product_full__text-top">
                        <img src="img/logo.svg" alt="" class="our_product_full__text-logo">
                        <p class="our_product_full__text-text">САФЬЯНОВСКАЯ МЕДЬ</p>
                    </div>
                    <img src="img/index/dropouts.png" alt="песок" class="our_product__card-img">
                    <div class="our_product_full__text-grid">
                        <p>Доставка</p>
                        <p>Самовывоз</p>
                        <p>Условия оплаты</p>
                        <p>100% предоплаты</p>
                    </div>
                    <p>применяется для дренажных работ, для бетоня для крупных строительных объектов, при производстве дренажных систем, для заполнения канав и ям</p>
                    <p>ТУ 08.9-003-25009918-2023</p>
                </div>
        </div>

       

        </div>
    </section>
    <section class="about_us section_with_bacground" id="about_us">
        <div class="about_us__container">
            <h1 class="title">О НАС</h1>
            <p class="about_us__text">АО «Сафьяновская медь» - современное горнорудное предприятие с открытой и подземной добычей комплексной медной руды и флюсового известняка, оснащенное высокопроизводительной техникой и всеми необходимыми коммуникациями.
            Сафьяновское медно-колчеданное месторождение в административном плане располагается на границе Режевского и Артёмовского районов Свердловской области, в 95 км к северо-востоку от г. Екатеринбурга, в 9 км к северо-востоку от г. Реж.
            Сафьяновское   медно - колчеданное месторождение открыто в 1985г.  Исетской геолого-съемочной партией Среднеуральской геологоразведочной экспедиции; основные виды полезных компонентов в медной руде - медь, цинк и драгметаллы (золото, серебро). 
            31 декабря 1992г. предприятие зарегистрировано; в 1994 г. – реорганизовано в ОАО «Сафьяновская медь». Первый ковш вскрышной породы был торжественно погружен 25 января 1994 года; в 1997г.  завершена 1-я очередь строительства карьера с выходом на мощность по добыче 700 тыс. тн. руды в год; в 2001 году предприятие вышло на пиковые объемы добычи – 1 000 - 1 295 тыс. тонн руды в год. 
            2010г начато строительство шахты для добычи руды с глубоких горизонтов. Доля предприятия в общероссийской добыче медьсодержащих руд составляет 3%. Глубина карьера на 1 октября 2014 г. составляла 183м, на конец отработки достигнет 265 м. Основные этапы отработки месторождения: до 2014 г. добыча ведется открытым способом; с 2015 по 2019 гг. – комбинированным (открытым и подземным) способом; с 2020 по 2040 гг. – только подземным способом..</p>
            <h1 class="title">ПРЕИМУЩЕСТВА</h1>
            <div class="about_us__icons">
                <div class="about_us__icons__part">
                    <img src="img/index/Group 21.svg" alt="" class="about_us__icons__part-img">
                    <p class="about_us__text">Добиваемся качества</p>
                </div>
                <div class="about_us__icons__part">
                    <img src="img/index/Group 20.svg" alt="" class="about_us__icons__part-img">
                    <p class="about_us__text">Мастера своего дела</p>
                </div>
                <div class="about_us__icons__part">
                    <img src="img/index/Group 19.svg" alt="" class="about_us__icons__part-img">
                    <p class="about_us__text">Современное оборудование</p>
                </div>
                <div class="about_us__icons__part">
                    <img src="img/index/icon4.svg" alt="" class="about_us__icons__part-img">
                    <p class="about_us__text">Ротерные дробилки</p>
                </div>
            </div>
        </div>
        
    </section>

    <section class="sertificat" id="sertificat">
        <h1>СЕРТИФИКАТЫ</h1>
        <div class="sertificat__slider">
            <input type="radio" class="sertificat__slider__radio" name="sertificat__slider__radio" id="sertificat__slider__radio1">
            <input type="radio" class="sertificat__slider__radio" name="sertificat__slider__radio" id="sertificat__slider__radio2" checked>
            <input type="radio" class="sertificat__slider__radio" name="sertificat__slider__radio" id="sertificat__slider__radio3">
            <input type="radio" class="sertificat__slider__radio" name="sertificat__slider__radio" id="sertificat__slider__radio4">
            <input type="radio" class="sertificat__slider__radio" name="sertificat__slider__radio" id="sertificat__slider__radio5">
            <input type="radio" class="sertificat__slider__radio" name="sertificat__slider__radio" id="sertificat__slider__radio6">

            <label for="sertificat__slider__radio1" class="sertificat__slider__lable" id="sertificat__slider__lable1"></label>
            <label for="sertificat__slider__radio2" class="sertificat__slider__lable" id="sertificat__slider__lable2"></label>
            <label for="sertificat__slider__radio3" class="sertificat__slider__lable" id="sertificat__slider__lable3"></label>
            <label for="sertificat__slider__radio4" class="sertificat__slider__lable" id="sertificat__slider__lable4"></label>
            <label for="sertificat__slider__radio5" class="sertificat__slider__lable" id="sertificat__slider__lable5"></label>
            <label for="sertificat__slider__radio6" class="sertificat__slider__lable" id="sertificat__slider__lable6"></label>

            <label for="sertificat__slider__radio1" class="sertificat__slider__lable-right" id="sertificat__slider__lable-right1"><svg class="no__tran" width="34" height="23" viewBox="0 0 34 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M31.7915 0.685292C32.1209 0.241963 32.7473 0.149571 33.1906 0.478929C33.6339 0.808288 33.7263 1.43468 33.397 1.87801L18.1228 22.4377C18.0356 22.555 17.9276 22.6478 17.8076 22.7147C17.7895 22.7307 17.7708 22.7463 17.7513 22.7612C17.3131 23.0974 16.6854 23.0148 16.3492 22.5766L0.756963 2.25712C0.420747 1.81897 0.503382 1.19122 0.941533 0.855004C1.37969 0.518788 2.00743 0.601423 2.34365 1.03957L17.1721 20.3637L31.7915 0.685292Z" fill="#EA5901"/>
                </svg></label>
            <label for="sertificat__slider__radio1" class="sertificat__slider__lable-left"  id="sertificat__slider__lable-left1"><svg class="no__tran" width="34" height="23" viewBox="0 0 34 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M31.7915 0.685292C32.1209 0.241963 32.7473 0.149571 33.1906 0.478929C33.6339 0.808288 33.7263 1.43468 33.397 1.87801L18.1228 22.4377C18.0356 22.555 17.9276 22.6478 17.8076 22.7147C17.7895 22.7307 17.7708 22.7463 17.7513 22.7612C17.3131 23.0974 16.6854 23.0148 16.3492 22.5766L0.756963 2.25712C0.420747 1.81897 0.503382 1.19122 0.941533 0.855004C1.37969 0.518788 2.00743 0.601423 2.34365 1.03957L17.1721 20.3637L31.7915 0.685292Z" fill="#EA5901"/>
                </svg></label>
            <label for="sertificat__slider__radio2" class="sertificat__slider__lable-right" id="sertificat__slider__lable-right2"><svg class="no__tran" width="34" height="23" viewBox="0 0 34 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M31.7915 0.685292C32.1209 0.241963 32.7473 0.149571 33.1906 0.478929C33.6339 0.808288 33.7263 1.43468 33.397 1.87801L18.1228 22.4377C18.0356 22.555 17.9276 22.6478 17.8076 22.7147C17.7895 22.7307 17.7708 22.7463 17.7513 22.7612C17.3131 23.0974 16.6854 23.0148 16.3492 22.5766L0.756963 2.25712C0.420747 1.81897 0.503382 1.19122 0.941533 0.855004C1.37969 0.518788 2.00743 0.601423 2.34365 1.03957L17.1721 20.3637L31.7915 0.685292Z" fill="#EA5901"/>
                </svg></label>
            <label for="sertificat__slider__radio2" class="sertificat__slider__lable-left"  id="sertificat__slider__lable-left2"><svg class="no__tran" width="34" height="23" viewBox="0 0 34 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M31.7915 0.685292C32.1209 0.241963 32.7473 0.149571 33.1906 0.478929C33.6339 0.808288 33.7263 1.43468 33.397 1.87801L18.1228 22.4377C18.0356 22.555 17.9276 22.6478 17.8076 22.7147C17.7895 22.7307 17.7708 22.7463 17.7513 22.7612C17.3131 23.0974 16.6854 23.0148 16.3492 22.5766L0.756963 2.25712C0.420747 1.81897 0.503382 1.19122 0.941533 0.855004C1.37969 0.518788 2.00743 0.601423 2.34365 1.03957L17.1721 20.3637L31.7915 0.685292Z" fill="#EA5901"/>
                </svg></label>
            <label for="sertificat__slider__radio3" class="sertificat__slider__lable-right"  id="sertificat__slider__lable-right3"><svg class="no__tran" width="34" height="23" viewBox="0 0 34 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M31.7915 0.685292C32.1209 0.241963 32.7473 0.149571 33.1906 0.478929C33.6339 0.808288 33.7263 1.43468 33.397 1.87801L18.1228 22.4377C18.0356 22.555 17.9276 22.6478 17.8076 22.7147C17.7895 22.7307 17.7708 22.7463 17.7513 22.7612C17.3131 23.0974 16.6854 23.0148 16.3492 22.5766L0.756963 2.25712C0.420747 1.81897 0.503382 1.19122 0.941533 0.855004C1.37969 0.518788 2.00743 0.601423 2.34365 1.03957L17.1721 20.3637L31.7915 0.685292Z" fill="#EA5901"/>
                </svg></label>
            <label for="sertificat__slider__radio3" class="sertificat__slider__lable-left" id="sertificat__slider__lable-left3"><svg class="no__tran" width="34" height="23" viewBox="0 0 34 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M31.7915 0.685292C32.1209 0.241963 32.7473 0.149571 33.1906 0.478929C33.6339 0.808288 33.7263 1.43468 33.397 1.87801L18.1228 22.4377C18.0356 22.555 17.9276 22.6478 17.8076 22.7147C17.7895 22.7307 17.7708 22.7463 17.7513 22.7612C17.3131 23.0974 16.6854 23.0148 16.3492 22.5766L0.756963 2.25712C0.420747 1.81897 0.503382 1.19122 0.941533 0.855004C1.37969 0.518788 2.00743 0.601423 2.34365 1.03957L17.1721 20.3637L31.7915 0.685292Z" fill="#EA5901"/>
                </svg></label>
            <label for="sertificat__slider__radio4" class="sertificat__slider__lable-right"  id="sertificat__slider__lable-right4"><svg class="no__tran" width="34" height="23" viewBox="0 0 34 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M31.7915 0.685292C32.1209 0.241963 32.7473 0.149571 33.1906 0.478929C33.6339 0.808288 33.7263 1.43468 33.397 1.87801L18.1228 22.4377C18.0356 22.555 17.9276 22.6478 17.8076 22.7147C17.7895 22.7307 17.7708 22.7463 17.7513 22.7612C17.3131 23.0974 16.6854 23.0148 16.3492 22.5766L0.756963 2.25712C0.420747 1.81897 0.503382 1.19122 0.941533 0.855004C1.37969 0.518788 2.00743 0.601423 2.34365 1.03957L17.1721 20.3637L31.7915 0.685292Z" fill="#EA5901"/>
                </svg></label>
            <label for="sertificat__slider__radio4" class="sertificat__slider__lable-left" id="sertificat__slider__lable-left4"><svg class="no__tran" width="34" height="23" viewBox="0 0 34 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M31.7915 0.685292C32.1209 0.241963 32.7473 0.149571 33.1906 0.478929C33.6339 0.808288 33.7263 1.43468 33.397 1.87801L18.1228 22.4377C18.0356 22.555 17.9276 22.6478 17.8076 22.7147C17.7895 22.7307 17.7708 22.7463 17.7513 22.7612C17.3131 23.0974 16.6854 23.0148 16.3492 22.5766L0.756963 2.25712C0.420747 1.81897 0.503382 1.19122 0.941533 0.855004C1.37969 0.518788 2.00743 0.601423 2.34365 1.03957L17.1721 20.3637L31.7915 0.685292Z" fill="#EA5901"/>
                </svg></label>
            <label for="sertificat__slider__radio5" class="sertificat__slider__lable-right"  id="sertificat__slider__lable-right5"><svg class="no__tran" width="34" height="23" viewBox="0 0 34 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M31.7915 0.685292C32.1209 0.241963 32.7473 0.149571 33.1906 0.478929C33.6339 0.808288 33.7263 1.43468 33.397 1.87801L18.1228 22.4377C18.0356 22.555 17.9276 22.6478 17.8076 22.7147C17.7895 22.7307 17.7708 22.7463 17.7513 22.7612C17.3131 23.0974 16.6854 23.0148 16.3492 22.5766L0.756963 2.25712C0.420747 1.81897 0.503382 1.19122 0.941533 0.855004C1.37969 0.518788 2.00743 0.601423 2.34365 1.03957L17.1721 20.3637L31.7915 0.685292Z" fill="#EA5901"/>
                </svg></label>
            <label for="sertificat__slider__radio5" class="sertificat__slider__lable-left" id="sertificat__slider__lable-left5"><svg class="no__tran" width="34" height="23" viewBox="0 0 34 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M31.7915 0.685292C32.1209 0.241963 32.7473 0.149571 33.1906 0.478929C33.6339 0.808288 33.7263 1.43468 33.397 1.87801L18.1228 22.4377C18.0356 22.555 17.9276 22.6478 17.8076 22.7147C17.7895 22.7307 17.7708 22.7463 17.7513 22.7612C17.3131 23.0974 16.6854 23.0148 16.3492 22.5766L0.756963 2.25712C0.420747 1.81897 0.503382 1.19122 0.941533 0.855004C1.37969 0.518788 2.00743 0.601423 2.34365 1.03957L17.1721 20.3637L31.7915 0.685292Z" fill="#EA5901"/>
                </svg></label>
            <label for="sertificat__slider__radio6" class="sertificat__slider__lable-right"  id="sertificat__slider__lable-right6"><svg class="no__tran" width="34" height="23" viewBox="0 0 34 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M31.7915 0.685292C32.1209 0.241963 32.7473 0.149571 33.1906 0.478929C33.6339 0.808288 33.7263 1.43468 33.397 1.87801L18.1228 22.4377C18.0356 22.555 17.9276 22.6478 17.8076 22.7147C17.7895 22.7307 17.7708 22.7463 17.7513 22.7612C17.3131 23.0974 16.6854 23.0148 16.3492 22.5766L0.756963 2.25712C0.420747 1.81897 0.503382 1.19122 0.941533 0.855004C1.37969 0.518788 2.00743 0.601423 2.34365 1.03957L17.1721 20.3637L31.7915 0.685292Z" fill="#EA5901"/>
                </svg></label>
            <label for="sertificat__slider__radio6" class="sertificat__slider__lable-left" id="sertificat__slider__lable-left6"><svg class="no__tran" width="34" height="23" viewBox="0 0 34 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M31.7915 0.685292C32.1209 0.241963 32.7473 0.149571 33.1906 0.478929C33.6339 0.808288 33.7263 1.43468 33.397 1.87801L18.1228 22.4377C18.0356 22.555 17.9276 22.6478 17.8076 22.7147C17.7895 22.7307 17.7708 22.7463 17.7513 22.7612C17.3131 23.0974 16.6854 23.0148 16.3492 22.5766L0.756963 2.25712C0.420747 1.81897 0.503382 1.19122 0.941533 0.855004C1.37969 0.518788 2.00743 0.601423 2.34365 1.03957L17.1721 20.3637L31.7915 0.685292Z" fill="#EA5901"/>
                </svg></label>

            <div class="sertificat__slider__images">
                <img src="img/index/Саф.карьер песок 0-4 ГОСТ 32730-2014 декларация-1.png" alt="" id="sertificat__slider__images-img1">
                <img src="img/index/Саф.карьер песок 0-4 ГОСТ 32730-2014 сертификат-1.png" alt="" id="sertificat__slider__images-img2">
                <img src="img/index/Саф.карьер щебень ГОСТ 32703-2014 декларация-1.png" alt="" id="sertificat__slider__images-img3">
                <img src="img/index/Саф.карьер щебень ГОСТ 32703-2014 сертификат-1.png" alt="" id="sertificat__slider__images-img4">
                <img src="img/index/Саф.карьер щебень ГОСТ 8267-93  сертификат-1.png" alt="" id="sertificat__slider__images-img5">
                <img src="img/index/Сертификат на крошку (до 18.07.27)-1.png" alt="" id="sertificat__slider__images-img6">
            </div>
        </div>
    </section>

    <section class="contacts" id="contacts">
        <h1 class="title">КОНТАКТЫ</h1>
        <div class="contacts__cont">
            <div class="contacts__cont__text">
                <p class="contacts__cont__text-black">Мы находимся</p>
                <p class="contacts__cont__text-black">Свердловская область, Режевской городской округ, 87-й колометр автодороги Екатериньург - Алопавск</p>
                <p class="contacts__cont__text-black">Вы можете связаться с  нами</p>
                <p class="contacts__cont__text-gray">общий</p>
                <p class="contacts__cont__text-black">+7 (343) 283-04-15</p>
                <p class="contacts__cont__text-gray">отдел продаж</p>
                <p class="contacts__cont__text-black">+7 (34368) 7-71-12 (доб. 282)</p>
                <p class="contacts__cont__text-black">+7 (34368) 7-71-13 (доб. 194)</p>
                <p class="contacts__cont__text-gray">emale</p>
                <p class="contacts__cont__text-black">a.shkoda@saf-med.ru</p>
                <p class="contacts__cont__text-black">Факс: (34368) 77-123</p>
                <p class="contacts__cont__text-black">ИНН 6628002547</p>
                <p class="contacts__cont__text-black">ОКВЭД 07.29.1   ОКПО 25009918</p>
            </div>
            <!-- <input type="checkbox" id="img-checkbox" class="img-checkbox">
            <label for="img-checkbox" class="img-checkbox_off">Показать карту местности</label>
            <label for="img-checkbox" class="img-checkbox_on">Показать карту проезда</label> -->
           
                <div class="contacts__cont__map" style="position:relative;overflow:hidden;"><a href="https://yandex.ru/maps/org/safyanovskaya_med/39813766695/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Сафьяновская медь</a><a href="https://yandex.ru/maps/11162/sverdlovsk-oblast/category/natural_resource_extraction/184106514/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:14px;">Добыча природных ресурсов в Свердловской области</a><iframe src="https://yandex.ru/map-widget/v1/?ll=61.465287%2C57.384806&mode=search&oid=39813766695&ol=biz&sctx=ZAAAAAgBEAAaKAoSCRA%2BlGjJs05AEQ%2Fuztptr0xAEhIJ4SajyjDu0j8R8rBQa5p3uD8iBgABAgMEBSgKOABAzKEBSAFqAnJ1nQHNzEw9oAEAqAEAvQHzMRqcwgEGp7zXqJQBggIs0YHQsNGE0YzRj9C90L7QstGB0LrQsNGPINC80LXQtNGMINCw0LTRgNC10YGKAgCSAgCaAgxkZXNrdG9wLW1hcHM%3D&sll=61.469407%2C57.384806&source=serp_navig&sspn=0.019651%2C0.006335&text=%D1%81%D0%B0%D1%84%D1%8C%D1%8F%D0%BD%D0%BE%D0%B2%D1%81%D0%BA%D0%B0%D1%8F%20%D0%BC%D0%B5%D0%B4%D1%8C%20%D0%B0%D0%B4%D1%80%D0%B5%D1%81&z=16"  style="height: 50vh;
    width:100%;"></iframe></div>
            
            
                <img class="contacts__cont__img" src="img/Futbol_2023.jpg" alt="">
        </div>
        
    </section>
    <section class="application" id="application">
        <h1 class="application-title">ВЫ ТАК ЖЕ МОЖЕТЕ ОСТАВИТЬ ЗАЯВКУ</h1>
        <form action="POST" class="application__form">
            <div class="application__form__inputs">
                <label for="name" class="application__form__inputs__lable">Ваше ФИО</label>
                <input type="text" name="name" class="application__form__inputs__input" placeholder="Иванов Иван Иванович">
                <label for="tel" class="application__form__inputs__lable">Ваш номер телефона</label>
                <input type="tel" name="tel" class="application__form__inputs__input" placeholder="89001112233">
                <label for="email" class="application__form__inputs__lable">Ваш emale</label>
                <input type="email" name="email" class="application__form__inputs__input" placeholder="your_maile@something.ru">
            </div>
            <div class="application__form__textarea">
                <label for="order" class="application__form__textarea__lable">Опишите ваш заказ</label>
                <textarea name="order" cols="" rows=""class="application__form__textarea__textarea" placeholder="Щебень 5-20мм, 15тонн"></textarea>
            </div>
            <button type="submit" class="application__button">ОТПРАВИТЬ</button>
        </form>
        <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fio = htmlspecialchars(trim($_POST['fio']));
    $tel = htmlspecialchars(trim($_POST['tel']));
    $email = htmlspecialchars(trim($_POST['email']));
    $coment = htmlspecialchars(trim($_POST['order']));

    $to = "veronica.vostrikowa@yandex.ru"; // Замените на ваш email

    
    $subject = "Новая заявка с сайта";

    
    $message = "
    Имя: $fio\n
    Телефон: $tel\n
    Почта: $email\n
    Комментарий: $coment
    ";

    
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-type: text/plain; charset=utf-8\r\n";

    if (
        mail($to, $subject, $message, $headers)
        ) {
        // Если отправка успешна, перенаправляем на страницу с подтверждением
        echo "Ваше сообщение успешно отправлено.";
    } else {
        // Если произошла ошибка, выводим сообщение
        echo "Ошибка при отправке сообщения.";
    }
}
?>
    </section>
    <section class="queshns" id="queshns">
        <h1 class="title">ВОПРОС-ОТВЕТ</h1>
        <details class="queshns__item">
        <summary class="queshns__item__queshn"><p>КАК УЗНАТЬ НУЖНУЮ ФРАКЦИЮ?</p> <svg class="queshns__item__queshn__svg" width="34" height="23" viewBox="0 0 34 23" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M31.7915 0.685292C32.1209 0.241963 32.7473 0.149571 33.1906 0.478929C33.6339 0.808288 33.7263 1.43468 33.397 1.87801L18.1228 22.4377C18.0356 22.555 17.9276 22.6478 17.8076 22.7147C17.7895 22.7307 17.7708 22.7463 17.7513 22.7612C17.3131 23.0974 16.6854 23.0148 16.3492 22.5766L0.756963 2.25712C0.420747 1.81897 0.503382 1.19122 0.941533 0.855004C1.37969 0.518788 2.00743 0.601423 2.34365 1.03957L17.1721 20.3637L31.7915 0.685292Z" fill="#EA5901"/>
            </svg></summary>
        <ul class="queshns__item__solution">
          <li class="queshns__item__solution-p">Узнать нужную фркцию можно нажав на карточку товара. <br><br> ести у вас остались вопросы можете позвонить по номерам: <br>+7 (343) 283-04-15,<br> +7 (34368) 7-71-12 (доб. 282),<br>  +7 (34368) 7-71-13 (доб. 194)<br> или написать на почту a.shkoda@saf-med.ru</li>
        </ul>
        </details>
        <details class="queshns__item">
            <summary class="queshns__item__queshn"><p>ИМЕЕТСЯ ЛИ ДОСТАВКА?</p> <svg class="queshns__item__queshn__svg" width="34" height="23" viewBox="0 0 34 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M31.7915 0.685292C32.1209 0.241963 32.7473 0.149571 33.1906 0.478929C33.6339 0.808288 33.7263 1.43468 33.397 1.87801L18.1228 22.4377C18.0356 22.555 17.9276 22.6478 17.8076 22.7147C17.7895 22.7307 17.7708 22.7463 17.7513 22.7612C17.3131 23.0974 16.6854 23.0148 16.3492 22.5766L0.756963 2.25712C0.420747 1.81897 0.503382 1.19122 0.941533 0.855004C1.37969 0.518788 2.00743 0.601423 2.34365 1.03957L17.1721 20.3637L31.7915 0.685292Z" fill="#EA5901"/>
                </svg></summary>
            <ul class="queshns__item__solution">
              <li class="queshns__item__solution-p">Нет. Исклюцительно самовывоз</li>
            </ul>
            </details>
            <details class="queshns__item">
                <summary class="queshns__item__queshn"><p>РАССМАТРИВАЕТЕ ЛИ ВЫ СОТРУДНИЧЕСТВО?</p> <svg class="queshns__item__queshn__svg" width="34" height="23" viewBox="0 0 34 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M31.7915 0.685292C32.1209 0.241963 32.7473 0.149571 33.1906 0.478929C33.6339 0.808288 33.7263 1.43468 33.397 1.87801L18.1228 22.4377C18.0356 22.555 17.9276 22.6478 17.8076 22.7147C17.7895 22.7307 17.7708 22.7463 17.7513 22.7612C17.3131 23.0974 16.6854 23.0148 16.3492 22.5766L0.756963 2.25712C0.420747 1.81897 0.503382 1.19122 0.941533 0.855004C1.37969 0.518788 2.00743 0.601423 2.34365 1.03957L17.1721 20.3637L31.7915 0.685292Z" fill="#EA5901"/>
                    </svg></summary>
                <ul class="queshns__item__solution">
                  <li class="queshns__item__solution-p">Да, подробнее можеле узнать здесь: <a href="https://www.saf-med.ru/ru/business/postavshchiku/" target="blank">https://www.saf-med.ru/ru/business/postavshchiku/</a> </li>
                </ul>
                </details>
                <details class="queshns__item">
                    <summary class="queshns__item__queshn"><p>ВОЗМОЖНА ЛИ СКИДКА?</p> <svg class="queshns__item__queshn__svg" width="34" height="23" viewBox="0 0 34 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M31.7915 0.685292C32.1209 0.241963 32.7473 0.149571 33.1906 0.478929C33.6339 0.808288 33.7263 1.43468 33.397 1.87801L18.1228 22.4377C18.0356 22.555 17.9276 22.6478 17.8076 22.7147C17.7895 22.7307 17.7708 22.7463 17.7513 22.7612C17.3131 23.0974 16.6854 23.0148 16.3492 22.5766L0.756963 2.25712C0.420747 1.81897 0.503382 1.19122 0.941533 0.855004C1.37969 0.518788 2.00743 0.601423 2.34365 1.03957L17.1721 20.3637L31.7915 0.685292Z" fill="#EA5901"/>
                        </svg></summary>
                    <ul class="queshns__item__solution">
                      <li class="queshns__item__solution-p">Да, при большом опте</li>
                    </ul>
                    </details>
        <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
        <script>
              $('details summary').each(function() {
                  var animationTime = 500; 
                 var $Wrapper = $(this).nextAll().wrapAll('<div></div>').parent();
                 
                 if(!$(this).parent('details').attr('open'))
                    $Wrapper.hide();
                 $(this).click(function(Event) {
                    Event.preventDefault();
                    if($(this).parent('details').attr('open')) {
                       $Wrapper.slideUp(animationTime, function() {
                          $(this).parent('details').removeAttr('open');
                       });
                    } else {
                       $(this).parent('details').attr('open', true);
                       $Wrapper.slideDown(animationTime);
                    }
                 });
              });
        </script>
    </section>


            

    
    


    <footer>
        <div class="footer">
            <div class="footer__logo">
                <img src="img/logo.svg" alt="Сафьяновая медь, логотип" class="footer__logo__logo">
           
                <div class="footer__logo__title">
                    <p class="footer__logo__title-top">АКЦИОНЕРНОЕ ОБЩЕСТВО</p>
                    <p class="footer__logo__title-bottom">«САФЬЯНОВСКАЯ МЕДЬ»</p>
                </div><a href="index.html">
            </div>
            <menu class="footer__menu">
                <a href="#our_product" class="footer__menu-link">Щебень</a>
                <a href="#about_us" class="footer__menu-link">О нас</a>
                <a href="#sertificat" class="footer__menu-link">Сертификаты</a>
                <a href="#contacts" class="footer__menu-link">Контакты</a>
                <a href="#application" class="footer__menu-link">Заявка</a>
                <a href="#queshns" class="footer__menu-link">Вопрос-ответ</a>
            </menu >

            <div class="footer__contacs">
                <p class="footer__contacs-text">Мы находимся</p>
                <p class="footer__contacs-text">Свердловская область, Режевской городской округ </p>
                <p class="footer__contacs-text">Вы можете связаться с нами</p>
                <p class="footer__contacs-text">+7 (343) 283-04-15</p>
            </div>
        </div>
        <div class="footer__copy">
            <p class="footer__copy__text">Ⓒ2024</p>
        </div>
        

    </footer>
    <!-- <script
      src="https://kit.fontawesome.com/a8d9637cb9.js"
      crossorigin="anonymous"
    ></script> -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="scripts.js"></script> 

</body>
</html>

