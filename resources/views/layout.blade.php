<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="preload"
          href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,400&family=Manrope:wght@200;300;400;500;600;700;800&family=Commissioner:wght@100;200;300;400;500;600;700;800;900&family=Nunito:wght@200;300;400;600;700;800;900&family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
          as="style" onload="this.rel='stylesheet'">
    {{--    <link rel="preconnect" href="https://fonts.gstatic.com">--}}
    {{--    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800;900&display=swap" rel="stylesheet">--}}

    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body>

<header class="header container position-relative">
    <div class="row mx-0 justify-content-between align-items-center">
        <div class="col-2 col-lg-12 px-0 mb-lg-4">
            <div class="row mx-0 justify-content-lg-between align-items-center">
                <a class="col-2 col-md-1 col-xl-3 header__logo d-inline-block align-self-center align-self-lg-start px-0"
                   href="/">
                    <svg class="logo">
                        <use class="icon" href="./images/sprite.svg#icon-logo"></use>
                    </svg>
                </a>
                <div
                    class="col-9 col-xl-7 mx-0 d-none d-lg-flex justify-content-end justify-content-xl-between align-items-center align-items-xxl-center px-0">
                    <div class="px-0">
                        <nav class="header__menu main-nav row mx-0 pl-0 pr-xl-0">
                            <a class="main-nav__link active position-relative link-active link-active--header" href="/">О
                                Компании</a>
                            <a class="main-nav__link position-relative link-active link-active--header" href="#">Политика
                                конфиденциальности</a>
                            <a class="main-nav__link position-relative link-active link-active--header" href="#">Доставка
                                и
                                оплата</a>
                            <a class="main-nav__link position-relative link-active link-active--header"
                               href="#">Гарантия</a>
                        </nav>
                    </div>
                    <div class="dropdown-phones d-flex flex-column px-0">
                        <div class="row flex-nowrap mx-0 align-items-center">
                            <a href="tel:+380680000000"
                               class="d-inline-block link-active link-active--header">+380680000000</a>
                            <button class="dropdown-phones__toggle button button--scale">
                                <svg class="icon-path icon" width="9" height="6">
                                    <use href="./images/sprite.svg#icon-path"></use>
                                </svg>
                            </button>
                        </div>
                        <div class="dropdown-phones__menu position-absolute visually-hidden shadow">
                            <a href="tel:+380990000000"
                               class="d-inline-block link-active link-active--header">+380990000000</a>
                            <a href="tel:+380960000000"
                               class="d-inline-block link-active link-active--header">+380960000000</a>
                        </div>
                    </div>
                </div>
                <div class="col-2 col-xl-2 d-none d-lg-flex justify-content-around align-items-center px-0">
                    <div class="lang-header d-flex align-items-center">
                        <a class="lang-header__link position-relative active link-active link-active--header"
                           href="#">Ua</a>
                        <a class="lang-header__link position-relative link-active link-active--header" href="#">Ru</a>
                    </div>
                    <div class="user">
                        <button class="user__button d-flex flex-row align-items-center">
                            <a class="d-none d-xl-flex link-active link-active--header">Войти</a>
                            <svg class="user__icon icon button--scale" width="20" height="20">
                                <use href="./images/sprite.svg#icon-user"></use>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-8 col-lg-12 px-0">
            <div class="row mx-0 justify-content-between align-items-end align-items-xl-center">
                <div
                    class="col-lg-4 col-xl-3 header-content d-none d-lg-flex flex-column justify-content-between pl-0">
                    <div class="header-content__header row justify-content-between mx-0">
                        <button
                            class="header-content__catalog d-flex flex-row align-items-center button--scale"
                            data-catalog-menu-button>
                            <svg class="burger-icon icon d-inline-block button--scale" width="26" height="20">
                                <use href="./images/sprite.svg#icon-menu-catalog"></use>
                            </svg>
                            <a>каталог</a>
                        </button>
                        <a href="/categories" class="header-content__categories link-active link-active--header">
                            Все категории
                        </a>
                    </div>
                    <div class="catalog d-flex flex-column shadow visually-hidden position-absolute"
                         data-catalog-menu>
                        @foreach( $catalogMenu as $catalogItem)
                            <a href="/{{$catalogItem['link']}}"
                               class="catalog__link link-active d-flex flex-row align-items-center justify-content-between">
                                <div class="d-flex flex-row align-items-center">
                                    <svg class="catalog__icon icon icon--catalog d-inline-block button--scale"
                                         width="34"
                                         height="34">
                                        <use href="./images/sprite.svg#icon-{{$catalogItem['icon']}}"></use>
                                    </svg>
                                    {{$catalogItem['text'] }}
                                </div>
                                <svg class="catalog__icon icon icon--path d-inline-block button--scale"
                                     width="10"
                                     height="16">
                                    <use href="./images/sprite.svg#icon-path-catalog-menu"></use>
                                </svg>
                            </a>
                        @endforeach
                    </div>
                </div>
                <form action="#" class="col-9 col-lg-5 col-xl-7 header-form d-flex justify-content-between">
                    @csrf
                    <input class="header-form__input" type="text" name="search"
                           placeholder="Поиск, например “турбина”">
                    <button class="header-form__button" type="button" aria-label="search">
                        <svg class="search" width="18" height="18">
                            <use href="./images/sprite.svg#icon-search"></use>
                        </svg>
                    </button>
                </form>
                <div
                    class="col-3 col-lg-3 col-xl-2 header-actions__wishing row row-cols-lg-3 mx-0 mx-lg-0 justify-content-end align-self-center">
                    <button type="button" class="d-none d-lg-inline-block">
                        <svg class="icon" width="30" height="30">
                            <use href="./images/sprite.svg#icon-balance"></use>
                        </svg>
                    </button>
                    <button type="button" class="d-none d-lg-inline-block">
                        <svg class="icon" width="30" height="30">
                            <use href="./images/sprite.svg#icon-heart"></use>
                        </svg>
                    </button>
                    <button type="button" class="shopping-card" data-shopping-card>
                        <div class="position-relative">
                            <svg class="shopping-card__icon icon" width="30" height="30">
                                <use href="./images/sprite.svg#icon-shopping-cart"></use>
                            </svg>
                            <span class="shopping-card__count count position-absolute">3</span>
                        </div>
                    </button>
                </div>
                <div
                    class="basket-hovering d-flex flex-column position-absolute shadow-basket align-items-start visually-hidden"
                    data-basket-hovering>
                    <div class="basket-hovering__heading">
                        <div>В корзине <span class="accent">3 товара</span></div>
                        <div> На сумму <span class="accent">30 000 ₴</span></div>
                    </div>
                    <a type="button" class="basket--button link-active d-flex flex-row justify-content-between">
                        Оформить заказ
                        <svg class="icon" width="30" height="30">
                            <use href="./images/sprite.svg#icon-shopping-cart"></use>
                        </svg>
                    </a>
                    <a type="button" class="basket-hovering__edit position-relative link-active link-active--header"
                       data-edit-basket>
                        Редактировать заказ
                    </a>
                </div>
            </div>
        </div>
        <button type="button" class="col-1 is-open d-lg-none menu-button align-self-center"
                data-menu-button>
            <svg class="scroll-up__icon icon d-inline-block" width="30" height="30"
                 aria-label="переключение мобильного меню">
                <use class="icon-cross" href='./images/sprite.svg#icon-menu'></use>
                <use class="icon-menu" href='./images/sprite.svg#icon-cancel'></use>
            </svg>
        </button>
    </div>
    <div class="menu-mobile d-lg-none row flex-column position-fixed mx-0" data-menu>
        <div class="menu-mobile__content position-relative" data-menu-content>
            <div class="menu-mobile__header d-flex flex-column position-relative">
                <a class="menu-mobile__logo d-inline-block align-self-start button--scale" href="#">
                    <svg class="logo" width="50" height="31">
                        <use href="./images/sprite.svg#icon-logo"></use>
                    </svg>
                </a>
                <div class="menu-mobile__user d-flex flex-column align-items-center">
                    <a href="#" class="d-inline-block button--scale">
                        <svg class="icon" width="70" height="70">
                            <use href="./images/sprite.svg#icon-user"></use>
                        </svg>
                    </a>
                    <div class="row mx-0">
                        <a class="col-6 position-relative link-active link-active--header">Войти</a>
                        <a class="col-6 position-relative link-active link-active--header">Регистрация</a>
                    </div>
                </div>
            </div>
            <div class="menu-mobile__body">
                <div class="menu-mobile__list d-flex flex-column align-items-start">
                    <button type="button" class="d-flex flex-row align-items-center link-active link-active--header">
                        <svg class="icon d-inline-block" width="30" height="30">
                            <use href="./images/sprite.svg#icon-balance"></use>
                        </svg>
                        Сравнить
                    </button>
                    <button type="button" class="d-flex flex-row align-items-center link-active link-active--header">
                        <svg class="icon d-inline-block" width="30" height="30">
                            <use href="./images/sprite.svg#icon-heart"></use>
                        </svg>
                        Список желаний
                    </button>
                    <button type="button" class="d-flex flex-row align-items-center shopping-card link-active link-active--header" data-shopping-card>
                        <div class="position-relative">
                            <svg class="shopping-card__icon icon d-inline-block" width="30" height="30">
                                <use href="./images/sprite.svg#icon-shopping-cart"></use>
                            </svg>
                            <span class="shopping-card__count count position-absolute">3</span>
                        </div>
                        Корзина
                    </button>
                    <a href="tel:+380680000000" class="d-flex flex-row align-items-center d-inline-block link-active link-active--header">
                        <svg class="icon d-inline-block" width="30" height="30">
                            <use href="./images/sprite.svg#icon-telephone"></use>
                        </svg>
                        +380680000000
                    </a>
                </div>
                <div class="menu-mobile__lang d-flex align-items-center">
                    <a class="lang-header__link d-inline-block position-relative link-active link-active--header active"
                       href="#">Ua</a>
                    <a class="lang-header__link d-inline-block position-relative link-active link-active--header"
                       href="#">Ru</a>
                </div>
                <nav class="menu-mobile__menu mobile-nav d-flex flex-column align-items-start">
                    <a class="menu-mobile__link mobile-nav__link position-relative link-active link-active--header"
                       href="#">О
                        Компании</a>
                    <a class="menu-mobile__link mobile-nav__link position-relative link-active link-active--header"
                       href="#">Политика
                        конфиденциальности</a>
                    <a class="menu-mobile__link mobile-nav__link position-relative link-active link-active--header"
                       href="#">Доставка
                        и
                        оплата</a>
                    <a class="menu-mobile__link mobile-nav__link  position-relative link-active link-active--header"
                       href="#">Гарантия</a>
                </nav>
                <div class="menu-mobile__catalog">
                    <div class="menu-mobile__title">Каталог</div>
                    <div class="d-flex flex-column">
                        <a href="/turbines" class="link-active link-active--header">Турбины</a>
                        <a href="/cartridges" class="link-active link-active--header">Картриджи</a>
                        <a href="/geometries" class="link-active link-active--header"
                        >Геометрии</a
                        >
                        <a href="/actuators" class="link-active link-active--header">Актуаторы</a>
                        <a href="/servos" class="link-active link-active--header">Сервоприводы</a>
                        <a href="/gaskets" class="link-active link-active--header">Прокладки</a>
                        <a href="/spares" class="link-active link-active--header">Прочие запчасти</a>
                        <a href="/electronic-vacuum-vctuators" class="link-active link-active--header">Электронновакуумные
                            актуаторы</a>
                        <a href="/turbine-housings" class="link-active link-active--header">Корпуса
                            турбины</a>
                        <a href="/servo-parts" class="link-active link-active--header">Запчасти для
                            сервопривода</a>
                    </div>
                </div>
                <div class="menu-mobile__customers">
                    <div class="menu-mobile__title">Клиентам</div>
                    <div class="d-flex flex-column">
                        <a href="#" class="link-active link-active--header"
                        >Политика конфиденциальности</a
                        >
                        <a href="#" class="link-active link-active--header">Доставка и оплата</a>
                        <a href="#" class="link-active link-active--header">Способы оплаты</a>
                        <a href="#" class="link-active link-active--header">Гарантия</a>
                        <a href="#" class="link-active link-active--header">Контакты</a>
                    </div>
                </div>
            </div>
            <button type="button" class="menu-mobile__close position-absolute" data-menu-close
                    data-menu-button>
                <svg class="menu-mobile__icon icon d-inline-block" width="16" height="16"
                     aria-label="переключение мобильного меню">
                    <use href='./images/sprite.svg#icon-cancel'></use>
                </svg>
            </button>
        </div>
    </div>
</header>
<main>
    @yield('main-content')
    <div class="backdrop is-hidden" data-basket-backdrop>
        <div class="basket position-absolute" data-basket>
            <div class="basket__title">Корзина</div>
            <button type="button" class="basket__icon icon-cross position-absolute button--scale" data-close-basket>
                <svg class="icon" width="15" height="15">
                    <use href="./images/sprite.svg#icon-close"></use>
                </svg>
            </button>
            <div class="basket__body">
                @foreach($basket as $item)
                    <div class="basket__item goods row align-items-start align-items-lg-center mx-0">
                        <button type="button"
                                class=" goods__icon icon-cross d-inline-flex order-1 order-lg-0 px-0 button--scale">
                            <svg class="icon" width="15" height="15">
                                <use href="./images/sprite.svg#icon-close"></use>
                            </svg>
                        </button>
                        <picture class="col-3 col-lg-2 goods__picture position-relative px-0">
                            <source srcset="{{asset($item['image'])}}">
                            <img loading="lazy" class=" goods__img lozad" data-src="{{asset($item['image'])}}"
                                 alt="{{$item['title']}}" width="120">
                        </picture>
                        <div class="col-8 col-lg-9 px-2 px-lg-0">
                            <div class="row mx-0">
                                <div class="col-12 goods__title px-0">{{$item['title']}}</div>
                                <div
                                    class="col-12 goods__body d-flex flex-column flex-lg-row justify-content-between px-0 align-items-start">
                                    <div class="d-flex flex-column pb-3 pb-lg-0 ">
                                        <div class="goods__price">Стоимость товара: <span class="accent-price">{{$item['price']}} ₴</span>
                                        </div>
                                        <div>
                                            @foreach($item['services'] as $service)
                                                <div class="goods__service">Доп. услуга: <span
                                                        class="accent-service">{{$service}}</span></div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div
                                        class="d-flex flex-row align-self-stretch align-self-lg-start align-items-center justify-content-between">
                                        <div class="goods__counter counter d-flex flex-row align-items-center">
                                            <button type="button" class="counter__minus button--scale icon-minus">
                                                <svg class="icon" width="15" height="15">
                                                    <use href="./images/sprite.svg#icon-minus"></use>
                                                </svg>
                                            </button>
                                            <span class="counter__count d-inline-flex">{{$item['count']}}</span>
                                            <button type="button" class="counter__plus button--scale icon-plus">
                                                <svg class="icon" width="15" height="15">
                                                    <use href="./images/sprite.svg#icon-plus"></use>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="goods__coast">{{$item['coast']}} ₴</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="basket__total position-relative">
                    <div class="text position-absolute">Итого</div>
                    <div class="price text-right">32 000 ₴</div>
                </div>
            </div>
            <div class="basket__footer row mx-0 justify-content-center justify-content-sm-between align-items-center">
                <a type="button"
                   class="button d-none d-sm-inline-flex align-items-center align-self-stretch basket--button link-active"
                   data-shopping-continue>
                    Продолжить покупки
                </a>
                <a type="button"
                   class="basket--button button link-active d-flex flex-row justify-content-between align-items-center">
                    Оформить заказ
                    <svg class="icon" width="30" height="30">
                        <use href="./images/sprite.svg#icon-shopping-cart"></use>
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <div class="cookies row flex-column flex-md-row mx-0 justify-content-between position-fixed">
        <div class="cookies__text col-12 col-md-9 mb-4 mb-md-0"> Этот сайт использует файлы cookies для более
            комфортной работы пользователя. Продолжая просмотр страниц
            сайта, вы соглашаетесь с использованием файлов cookies. Если вам нужна дополнительная информация или вы
            не
            хотите соглашаться с использованием cookies, пожалуйста, посетите страницу "Про cookies"
        </div>
        <button class="cookies__button button col-xxl-1 align-self-center">Согласен</button>
    </div>
</main>
<footer class="footer">
    <div class="footer-top container">
        <div class="row mx-0">
            <div
                class="column-logo col-12 col-lg-4 col-xxl-3 d-flex flex-column align-items-center align-items-lg-start px-0 pr-lg-3">
                <a class="d-inline-block button--scale" href="/">
                    <svg class="logo" width="114" height="41">
                        <use href="./images/sprite.svg#icon-logo"></use>
                    </svg>
                </a>
                <div
                    class="column-logo__social social row mx-0 align-items-center justify-content-between"
                >
                    <a
                        class="social__link col-2 px-0 d-inline-block button--scale"
                        href="https://www.instagram.com/"
                        target="_blank"
                        aria-label="instagram"
                    >
                        <svg class="social__icon" width="22" height="22">
                            <use
                                href="./images/sprite.svg#icon-instagram"
                            ></use>
                        </svg
                        >
                    </a>
                    <a
                        class="social__link col-2 px-0 d-inline-block button--scale"
                        href="https://www.facebook.com/"
                        target="_blank"
                        aria-label="facebook"
                    >
                        <svg class="social__icon" width="22" height="22">
                            <use href="./images/sprite.svg#icon-facebook"></use>
                        </svg
                        >
                    </a>
                    <a
                        class="social__link col-2 px-0 d-inline-block button--scale"
                        href="https://www.twitter.com/"
                        target="_blank"
                        aria-label="twitter"
                    >
                        <svg class="social__icon" width="22" height="22">
                            <use href="./images/sprite.svg#icon-twitter"></use>
                        </svg
                        >
                    </a>
                    <a
                        class="social__link col-2 px-0 d-inline-block button--scale"
                        href="https://www.youtube.com/"
                        target="_blank"
                        aria-label="youtube"
                    >
                        <svg class="social__icon" width="22" height="22">
                            <use href="./images/sprite.svg#icon-youtube"></use>
                        </svg
                        >
                    </a>
                </div>
                <div class="payment-delivery row flex-column align-items-center flex-lg-row mx-0 w-100">
                    <a class="payment-delivery__link" href="#" aria-label="new-post">
                        <svg width="83.72" height="30">
                            <use href="./images/sprite.svg#icon-new-post"></use>
                        </svg
                        >
                    </a>
                    <div
                        class="payment row mx-0 align-items-center justify-content-between"
                    >
                        <a class="payment__link d-inline-block" href="#" aria-label="visa">
                            <img loading="lazy" class="lozad" data-src="./images/footer/visa.png" alt="" width="53"
                                 height="30"
                            /></a>
                        <a class="payment__link d-inline-block" href="#" aria-label="mastercard">
                            <img loading="lazy"
                                 class="lozad" data-src="./images/footer/master-card.png"
                                 alt=""
                                 width="53"
                                 height="30"
                            /></a>
                        <a class="payment__link d-inline-block" href="#" aria-label="maestro">
                            <img loading="lazy" class="lozad" data-src="./images/footer/maestro.png" alt=""
                                 width="53" height="30"
                            /></a>
                        <a class="payment__link d-inline-block" href="#" aria-label="paypal">
                            <img loading="lazy" class="lozad" data-src="./images/footer/paypal.png" alt=""
                                 width="53" height="30"
                            /></a>
                    </div>
                </div>
            </div>
            <div class="column-about col-lg-7 col-xxl-6 d-none d-lg-block">
                <div class="row mx-0">
                    <div class="col-12 col-lg-4 px-0">
                        <div class="footer-title">Каталог</div>
                        <div class="d-flex flex-column">
                            <a href="#" class="column-about__link d-inline-block link-active link-active--darken">Ноутбуки</a>
                            <a href="#" class="column-about__link d-inline-block link-active link-active--darken">Планшеты</a>
                            <a href="#" class="column-about__link d-inline-block link-active link-active--darken"
                            >Аксессуары для планшетов и <br> электронных книг</a
                            >
                            <a href="#" class="column-about__link d-inline-block link-active link-active--darken">Кабели
                                и
                                переходники</a>
                            <a href="#" class="column-about__link d-inline-block link-active link-active--darken">Сумки
                                для
                                ноутбуков</a>
                            <a href="#" class="column-about__link d-inline-block link-active link-active--darken">Автотовары</a>
                            <a href="#" class="column-about__link d-inline-block link-active link-active--darken">Сантехника</a>
                            <a href="#"
                               class="column-about__link d-inline-block link-active link-active--darken">Ремонт</a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="footer-title">Клиентам</div>
                        <div class="d-flex flex-column">
                            <a href="#" class="column-about__link d-inline-block link-active link-active--darken"
                            >Политика конфиденциальности</a
                            >
                            <a href="#" class="column-about__link d-inline-block link-active link-active--darken">Доставка
                                и оплата</a>
                            <a href="#" class="column-about__link d-inline-block link-active link-active--darken">Способы
                                оплаты</a>
                            <a href="#" class="column-about__link d-inline-block link-active link-active--darken">Гарантия</a>
                            <a href="#" class="column-about__link d-inline-block link-active link-active--darken">Контакты</a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 hotline px-0">
                        <div class="footer-title">
                            Горячая линия
                        </div>
                        <div class="d-flex flex-column">
                            <a class="hotline__link d-inline-block link-active link-active--darken"
                               href="tel:0800000000"
                            >0 800 000 000</a
                            >
                            <a class="hotline__link d-inline-block link-active link-active--darken"
                               href="tel:+380680000000"
                            >+38 068 000 00 00</a
                            >
                            <a class="hotline__link d-inline-block link-active link-active--darken"
                               href="tel:+380990000000"
                            >+38 099 000 00 00</a
                            >
                            <a class="hotline__link d-inline-block link-active link-active--darken"
                               href="tel:+380960000000"
                            >+38 096 000 00 00</a
                            >
                        </div>
                    </div>
                </div>
            </div>
            <div class="scroll-up col-lg-1 d-flex flex-column align-items-center px-0">
                <button class="scroll-up__button button--scale">
                    <svg class="scroll-up__icon icon d-inline-block" width="28" height="15">
                        <use href='./images/sprite.svg#icon-path'></use>
                    </svg>
                </button>
                Вверх
            </div>
        </div>
    </div>
    <div class="footer-bottom container px-0">
        <div class=" footer-bottom__content row mx-0 align-items-center justify-content-between">
            <p class="footer-bottom__copyright">2021 © Wezom Practice</p>
            <p class="footer-bottom__website">
                Разработка
                <span>\\ Wezom</span>
            </p>
        </div>
    </div>
</footer>

<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
