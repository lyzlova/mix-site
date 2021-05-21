@extends("layout")

@section("title")
    Home
@endsection

<?php
$arrayCategories = [
    ['id' => 0, 'image' => 'images/home/image10.jpg', 'title' => 'Косметика и гигиена'],
    ['id' => 1, 'image' => 'images/home/image9.jpg', 'title' => 'Техника и электроника'],
    ['id' => 2, 'image' => 'images/home/image8.jpg', 'title' => 'Повседневная одежда'],
    ['id' => 3, 'image' => 'images/home/image7.jpg', 'title' => 'Одежда и обувь'],
    ['id' => 4, 'image' => 'images/home/image6.jpg', 'title' => 'Сапоги и туфли '],
    ['id' => 5, 'image' => 'images/home/image5.jpg', 'title' => 'Универсальное'],
    ['id' => 6, 'image' => 'images/home/image4.jpg', 'title' => 'Сумки и кошельки'],
    ['id' => 7, 'image' => 'images/home/image3.jpg', 'title' => 'Нижнее бельё'],
    ['id' => 8, 'image' => 'images/home/image2.jpg', 'title' => 'Спортивная обувь '],
    ['id' => 9, 'image' => 'images/home/image1.jpg', 'title' => 'Сапоги и туфли ']
];

$arrayCard = [
    ['id' => 0, 'time' => '— 15 min', 'text' => 'Текст карточки первый'],
    ['id' => 1, 'time' => '— 20 min', 'text' => 'Текст карточки второй'],
    ['id' => 2, 'time' => '— 11 min', 'text' => 'Текст карточки третий'],
    ['id' => 3, 'time' => '— 9 min', 'text' => 'Текст карточки последний']
];

$arrayWeapons = [
    ['id' => 0, 'label' => 'Новинка', 'image' => 'images/weapons/weapon-1.jpg', 'reviews' => '10 отзывов', 'new-price' => '27 632.65₴', 'old-price' => '32 509₴', 'heading' => 'Ружье Mossberg 590M Mag-Fed', 'title' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic'],
    ['id' => 1, 'label' => 'Акция', 'image' => 'images/weapons/weapon-1.jpg', 'reviews' => '2 отзыва', 'new-price' => '27 632.65₴', 'old-price' => '32 509₴', 'heading' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic', 'title' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic'],
    ['id' => 2, 'label' => '-70%', 'image' => 'images/weapons/weapon-1.jpg', 'reviews' => '12 отзывов', 'new-price' => '27 632.65₴', 'old-price' => '', 'heading' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic', 'title' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic'],
    ['id' => 3, 'label' => 'топ продаж', 'image' => 'images/weapons/weapon-1.jpg', 'reviews' => '46 отзывов', 'new-price' => '27 632.65₴', 'old-price' => '32 509₴', 'heading' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic', 'title' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic'],
    ['id' => 4, 'label' => 'Новинка', 'image' => 'images/weapons/weapon-1.jpg', 'reviews' => '10 отзывов', 'new-price' => '27 632.65₴', 'old-price' => '32 509₴', 'heading' => 'Ружье Mossberg 590M Mag-Fed', 'title' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic'],
    ['id' => 5, 'label' => 'Акция', 'image' => 'images/weapons/weapon-1.jpg', 'reviews' => '2 отзыва', 'new-price' => '27 632.65₴', 'old-price' => '32 509₴', 'heading' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic', 'title' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic'],
    ['id' => 6, 'label' => '-70%', 'image' => 'images/weapons/weapon-1.jpg', 'reviews' => '12 отзывов', 'new-price' => '27 632.65₴', 'old-price' => '', 'heading' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic', 'title' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic'],
    ['id' => 7, 'label' => 'топ продаж', 'image' => 'images/weapons/weapon-1.jpg', 'reviews' => '46 отзывов', 'new-price' => '27 632.65₴', 'old-price' => '32 509₴', 'heading' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic', 'title' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic'],
    ['id' => 4, 'label' => 'Новинка', 'image' => 'images/weapons/weapon-1.jpg', 'reviews' => '10 отзывов', 'new-price' => '27 632.65₴', 'old-price' => '32 509₴', 'heading' => 'Ружье Mossberg 590M Mag-Fed', 'title' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic'],
    ['id' => 5, 'label' => 'Акция', 'image' => 'images/weapons/weapon-1.jpg', 'reviews' => '2 отзыва', 'new-price' => '27 632.65₴', 'old-price' => '32 509₴', 'heading' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic', 'title' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic'],
    ['id' => 6, 'label' => '-70%', 'image' => 'images/weapons/weapon-1.jpg', 'reviews' => '12 отзывов', 'new-price' => '27 632.65₴', 'old-price' => '', 'heading' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic', 'title' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic'],
    ['id' => 7, 'label' => 'топ продаж', 'image' => 'images/weapons/weapon-1.jpg', 'reviews' => '46 отзывов', 'new-price' => '27 632.65₴', 'old-price' => '32 509₴', 'heading' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic', 'title' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic'],
];

$labels = [
    ['id' => 0, 'text' => 'Новинка', 'color' => 'label--green'],
    ['id' => 1, 'text' => 'Акция', 'color' => 'label--blue'],
    ['id' => 2, 'text' => '-70%', 'color' => 'label--red'],
    ['id' => 3, 'text' => 'топ продаж', 'color' => 'label--yellow'],
];

$catalogMenu = [
    ['id' => 0, 'text' => 'Новинка', 'color' => 'label--green'],
    ['id' => 1, 'text' => 'Акция', 'color' => 'label--blue'],
    ['id' => 2, 'text' => '-70%', 'color' => 'label--red'],
    ['id' => 3, 'text' => 'топ продаж', 'color' => 'label--yellow'],
];

$catalogMenu = [
    ['id' => 0, 'image' => 'images/spares/turbine-cartridge1.jpg', 'icon' => 'power_1', 'text' => 'Турбины', 'link' => 'turbines'],
    ['id' => 1, 'image' => 'images/spares/turbine-cartridge1.jpg', 'icon' => 'cartridge', 'text' => 'Картриджи', 'link' => 'cartridges'],
    ['id' => 2, 'image' => 'images/spares/turbine-cartridge1.jpg', 'icon' => 'geometry', 'text' => 'Геометрии', 'link' => 'geometries'],
    ['id' => 3, 'image' => 'images/spares/turbine-cartridge1.jpg', 'icon' => 'aktuator', 'text' => 'Актуаторы', 'link' => 'actuators'],
    ['id' => 4, 'image' => 'images/spares/turbine-cartridge1.jpg', 'icon' => 'servoprivod', 'text' => 'Сервоприводы', 'link' => 'servos'],
    ['id' => 5, 'image' => 'images/spares/turbine-cartridge1.jpg', 'icon' => 'prokladki', 'text' => 'Прокладки', 'link' => 'gaskets'],
    ['id' => 6, 'image' => 'images/spares/turbine-cartridge1.jpg', 'icon' => 'zap4asti', 'text' => 'Прочие запчасти', 'link' => 'spares'],
    ['id' => 7, 'image' => 'images/spares/turbine-cartridge1.jpg', 'icon' => 'aktuator_2', 'text' => 'Электронновакуумные актуаторы', 'link' => 'electronic-vacuum-vctuators'],
    ['id' => 8, 'image' => 'images/spares/turbine-cartridge1.jpg', 'icon' => 'body-tourbine', 'text' => 'Корпуса турбины', 'link' => 'turbine-housings'],
    ['id' => 9, 'image' => 'images/spares/turbine-cartridge1.jpg', 'icon' => 'zap4asti_2', 'text' => 'Запчасти для сервопривода', 'link' => 'servo-parts']
];

$basket = [
    ['id' => 0, 'image' => 'images/spares/1.jpg', 'price' => 5000, 'count' => 4, 'coast' => 21000, 'services' => ['Регенерация турбины 500₴', 'Регенерация турбины за 1 день 500₴', ' Регенерация турбины за 1 день 500₴'], 'title' => '070-150-017 Картридж турбины для Mercedes E-klasse (W211) 2.7CDI', 'alt' => '070-150-017 Картридж турбины для Mercedes E-klasse (W211) 2.7CDI'],
    ['id' => 1, 'image' => 'images/spares/turbine-cartridge2.jpg', 'price' => 5000, 'count' => 1, 'coast' => 5500, 'services' => ['Регенерация турбины за 1 день 500₴'], 'title' => '070-150-017 Картридж турбины для Mercedes E-klasse', 'alt' => '070-150-017 Картридж турбины для Mercedes E-klasse'],
    ['id' => 1, 'image' => 'images/spares/turbine-cartridge3.jpg', 'price' => 5000, 'count' => 1, 'coast' => 5500, 'services' => ['Регенерация турбины за 1 день 500₴'], 'title' => '070-150-017 Картридж турбины E-klasse (W211)', 'alt' => '070-150-017 Картридж турбины E-klasse (W211)']
];

?>

@section("main-content")
    <div class="categories d-flex flex-column overflow-hidden position-relative">
        <div class="container px-0">
            <h1 class="visually-hidden">Example 1</h1>
            <div class="categories__content container px-0">
                <header
                    class="categories__header categories-header row row-cols-1 row-cols-sm-2 align-items-center justify-content-center justify-content-sm-between mx-0">
                    <div class="categories-header__title title col-md-6 px-0 text-center text-lg-left ">Популярные
                        категории
                    </div>
                    <a class="categories-header__button button button--scale d-block col-8 col-sm-4 col-md-3 col-xl-1 justify-content-end"
                       href="/categories">все категории</a>
                </header>
                <div class="categories__list row justify-content-between mx-0">
                    @foreach($arrayCategories as $category)
                        <a href="{{asset($category['image'])}}" data-lightbox="roadtrip" class="fancybox-img categories__item category col px-0"
                           >
                            <div class="category__picture d-block position-relative">
                                <picture>
                                    <source srcset="{{asset($category['image'])}}">
                                    <img loading="lazy" class="lozad" data-src="{{asset($category['image'])}}"
                                         alt="{{$category['title']}}">
                                </picture>
                            </div>
                            <div
                                class="category__title text-left align-items-stretch">{{ $category['title'] }}</div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="seo position-relative">
        <div class="seo__content container align-items-center position-relative">
            <div class="faq col-10 col-xxl-3 px-0 justify-content-center position-absolute">
                <div class="row px-0 justify-content-center text-center">
                    <div class="text-center">
                        <div class="faq__title align-self-center px-0">Тут должен быть какой то текст, потом <br>
                            придумаем какой точно будет =)
                        </div>
                        <button class="faq__button button button--scale position-relative">замовити зворотній
                            зв’язок
                            <svg class="faq__icon icon" width="18" height="18">
                                <use href='./images/sprite.svg#icon-down-arrow'></use>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="cards row row-cols-1 row-cols-md-2 row-cols-xl-4 mx-0">
                    @foreach($arrayCard as $card)
                        <div class="col-12 mb-4 d-flex ">
                            <div class="card mb-4 card d-flex justify-content-between w-100">
                                <div class="card__title">{{($card['text'])}}</div>
                                <div class="card__time d-flex align-items-center">
                                    <svg class="icon" width="16.2" height="16.2">
                                        <use href='./images/sprite.svg#icon-clock'></use>
                                    </svg>
                                    <span class="d-block">{{($card['time'])}}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="weapon-accessories container">
        <div class="weapon-accessories__content row row-cols-1 row-cols-lg-2 mx-0">
            <div class="col pl-0 first-col-content">
                <div class="row row-cols-2 mx-0">
                    <div class="col-6 pl-0 d-flex flex-column justify-content-between">
                        <div class="weapon-accessories__cell equipment position-relative">
                            <a>
                                <div
                                    class="weapon-accessories__card position-relative d-flex align-items-center justify-content-center">
                                    <picture class="weapon-accessories__picture d-block">
                                        <source srcset="images/weapon-accessories/img-1.jpg">
                                        <img loading="lazy" class="lozad"
                                             data-src="images/weapon-accessories/img-1.jpg" alt="#">
                                    </picture>
                                    <button class="weapon-accessories__button button--scale position-absolute">
                                        Снаряжение
                                    </button>
                                </div>
                            </a>
                        </div>
                        <div class="weapon-accessories__cell knives position-relative">
                            <a>
                                <div
                                    class="weapon-accessories__card position-relative d-flex align-items-center justify-content-center">
                                    <picture class="weapon-accessories__picture d-block">
                                        <source srcset="images/weapon-accessories/img-2.jpg">
                                        <img loading="lazy" class="lozad"
                                             data-src="images/weapon-accessories/img-2.jpg" alt="#">
                                    </picture>
                                    <button class="weapon-accessories__button button--scale position-absolute">Ножи
                                        и инструменты
                                    </button>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 pr-0 weapon">
                        <div class="weapon-accessories__cell position-relative">
                            <a>
                                <div
                                    class="weapon-accessories__card position-relative d-flex align-items-center justify-content-center">
                                    <picture class="weapon-accessories__picture d-block">
                                        <source srcset="images/weapon-accessories/img-3.jpg">
                                        <img loading="lazy" class="lozad"
                                             data-src="images/weapon-accessories/img-3.jpg" alt="#">
                                    </picture>
                                    <button class="weapon-accessories__button button--scale position-absolute">
                                        Оружие
                                    </button>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col pr-0 second-col-content">
                <div class="row row-cols-2 mx-0 h-100 align-content-between">
                    <div class="col-12 px-0">
                        <div class="row row-cols-1 mx-0">
                            <div class="weapon-accessories__cell cartridges col-6 pl-0 position-relative">
                                <a>
                                    <div
                                        class="weapon-accessories__card position-relative d-flex align-items-center justify-content-center">
                                        <picture class="weapon-accessories__picture d-block">
                                            <source srcset="images/weapon-accessories/img-4.jpg">
                                            <img loading="lazy" class="lozad"
                                                 data-src="images/weapon-accessories/img-4.jpg" alt="#">
                                        </picture>
                                        <button class="weapon-accessories__button button--scale position-absolute">
                                            Патроны
                                        </button>
                                    </div>
                                </a>
                            </div>
                            <div class="weapon-accessories__cell accessories col-6 pr-0 position-relative">
                                <a>
                                    <div
                                        class="weapon-accessories__card position-relative d-flex align-items-center justify-content-center">
                                        <picture class="weapon-accessories__picture d-block">
                                            <source srcset="images/weapon-accessories/img-5.jpg">
                                            <img loading="lazy" class="lozad"
                                                 data-src="images/weapon-accessories/img-5.jpg" alt="#">
                                        </picture>
                                        <button class="weapon-accessories__button button--scale position-absolute">
                                            Аксессуары
                                        </button>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="weapon-accessories__cell col-12 d-flex flex-row px-0 range position-relative">
                        <a class="w-100">
                            <div
                                class="weapon-accessories__card position-relative d-flex align-items-center justify-content-center">
                                <picture class="weapon-accessories__picture d-block w-100">
                                    <source srcset="images/weapon-accessories/img-6.jpg">
                                    <img loading="lazy" class="lozad" data-src="images/weapon-accessories/img-6.jpg"
                                         alt="#">
                                </picture>
                                <button class="weapon-accessories__button button--scale position-absolute">Тир
                                </button>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="weapons container">
        <div id="weapons-content" class="weapons__content d-flex flex-row">
            @foreach($arrayWeapons as $weapon)
                <div class="col weapon">
                    <div class="weapon-card d-flex flex-column h-100 position-relative">
                        <div href="#" class="weapon-card__body h-100">
                            <div class="weapon-card__content d-flex flex-column justify-content-between h-100">
                                <a href="#" class="weapon-card__photo d-flex link">
                                    <picture class="weapon-card__picture d-block">
                                        <source srcset="{{asset($weapon['image'])}}">
                                        <img loading="lazy" class="lozad" data-src="{{asset($weapon['image'])}}"
                                             alt="#">
                                    </picture>
                                </a>
                                <div class="d-flex flex-column justify-content-between h-100">
                                    <a href="#" class="activity__gift link d-flex link-active">
                                        <svg class="gift__icon icon" width="20" height="20">
                                            <use href='./images/sprite.svg#icon-gift-box'></use>
                                        </svg>
                                    </a>
                                    <a class="weapon-card__heading link-active d-block">
                                        {{$weapon['heading']}}
                                    </a>
                                    <div class="weapon-card__rating rating d-flex">
                                        <svg class="rating__icon icon" width="61" height="16">
                                            <use href='./images/sprite.svg#icon-stars'></use>
                                        </svg>
                                        <a href="#"
                                           class="rating__reviews reviews link-active">{{$weapon['reviews']}}</a>
                                    </div>
                                    <div
                                        class="weapon-card__trade trade row justify-content-between align-items-end mx-0 h-100">
                                        <div class="trade__prices prices">
                                            @if ($weapon['old-price'] !== '')
                                                <div
                                                    class="prices__old position-relative">{{$weapon['old-price']}}</div>
                                            @endif
                                            <div class="prices__new">{{$weapon['new-price']}}</div>
                                        </div>
                                        <button
                                            class="weapon-card__buttons buy-button row align-items-center button--scale">
                                            <div class="buy-button__text">Купить</div>
                                            <svg class="buy-button__icon" width="20" height="22">
                                                <use href='./images/sprite.svg#icon-shopping-cart'></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="weapon-card__activity activity">
                                        @foreach ($labels as $label)
                                            @if ($weapon['label'] === $label['text'])
                                                <div
                                                    class="activity__label {{$label['color']}} position-absolute text-center">
                                                    {{$label['text']}}
                                                </div>
                                                @break
                                            @endif
                                        @endforeach
                                        <div
                                            class="activity__actions actions-group d-flex flex-column position-absolute">
                                            <button class="actions-group__button wish-button button--scale">
                                                <svg class="actions-group__icon icon mb-3" width="20" height="20">
                                                    <use href='./images/sprite.svg#icon-wish-button'></use>
                                                </svg>
                                            </button>
                                            <button class="actions-group__button compare-button button--scale">
                                                <svg class="actions-group__icon icon mb-3" width="20" height="20">
                                                    <use href='./images/sprite.svg#icon-compare-button'></use>
                                                </svg>
                                            </button>
                                            <button class="actions-group__button play-button button--scale">
                                                <svg class="actions-group__icon icon" width="20" height="20">
                                                    <use href='./images/sprite.svg#icon-play-button'></use>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
