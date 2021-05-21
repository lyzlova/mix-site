@extends("layout")

@section("title")
    Category
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
    <div class="category-page d-flex flex-column container my-0 mx-auto">
        <div class="category-page__title">
            @switch($category)
                @case('turbines')
                Турбины
                @break
                @case('cartridges')
                Картриджи
                @break
                @case('geometries')
                Геометрии
                @break
                @case('actuators')
                Актуаторы
                @break
                @case('servos')
                Сервоприводы
                @break
                @case('gaskets')
                Прокладки
                @break
                @case('spares')
                Прочие запчасти
                @break
                @case('electronic-vacuum-vctuators')
                Электронновакуумные актуаторы
                @break
                @case('turbine-housings')
                Корпуса турбины
                @break
                @case('servo-parts')
                Запчасти для сервопривода
                @break
                @default
                Default case...
            @endswitch
        </div>
        <button type="button"
                class="category-page__button button d-flex d-lg-none flex-row align-self-center button--scale"
                data-open-filter>
            <svg class="actions-group__icon icon" width="20" height="20">
                <use href="./images/sprite.svg#icon-filter"></use>
            </svg>
            Фильтр
        </button>
        <div class="row mx-0 justify-content-between flex-nowrap">
            <div class="d-none d-lg-flex flex-column col-lg-3 category-filters__aside">
                <div class="category-filter category-filter__brand">
                    <div class="category-filter__top d-flex flex-row align-items-center justify-content-between"
                         data-select>
                        <div class="category-filter__title">Бренд</div>
                        <button type="button" class="category-filter__path" data-select-path>
                            <svg class="icon" width="10" height="6">
                                <use href="./images/sprite.svg#icon-path-down"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="category-filter__body visually-hidden" data-select-body>
                        <div class="category-filter__items d-flex flex-column" role="group">
                            <div href="#"
                                 class="category-filter__link d-flex flex-row align-items-center link-active">
                                <input type="checkbox" class="category-filter__input" name="brand" value="Jrone"
                                       id="Jrone">
                                <label class="category-filter__label position-relative" for="Jrone">Jrone</label>
                            </div>
                            <a href="#"
                               class="category-filter__link d-flex flex-row align-items-center link-active">
                                <input type="checkbox" class="category-filter__input" name="brand" value="Turbo"
                                       id="Turbo">
                                <label class="category-filter__label position-relative" for="Turbo">Turbo</label>
                            </a>
                            <a href="#"
                               class="category-filter__link d-flex flex-row align-items-center link-active">
                                <input type="checkbox" class="category-filter__input" name="brand" value="E&amp;E"
                                       id="E&amp;E">
                                <label class="category-filter__label position-relative" for="E&amp;E"> E &amp;
                                    E</label>
                            </a>
                            <a href="#"
                               class="category-filter__link d-flex flex-row align-items-center link-active">
                                <input type="checkbox" class="category-filter__input" name="brand" value="Garret"
                                       id="Garret">
                                <label class="category-filter__label position-relative" for="Garret">Garret</label>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="category-filter category-filter__model">
                    <div class="category-filter__top d-flex flex-row align-items-center justify-content-between">
                        <div class="category-filter__title">Модель</div>
                    </div>
                    <div class="category-filter__body">
                        <label for="model-control" class="visually-hidden">Модель</label>
                        <select name="page" id="model-control" class="w-100">
                            <option value="Leon">Leon</option>
                            <option value="Forse">Forse</option>
                            <option value="Narva">Narva</option>
                            <option value="Osram">Osram</option>
                        </select>
                    </div>
                </div>
                <div class="category-filter category-filter__release">
                    <div class="category-filter__top d-flex flex-row align-items-center justify-content-between">
                        <div class="category-filter__title">Год выпуска</div>
                    </div>
                    <div class="category-filter__body">
                        <label for="year-control" class="visually-hidden">Год выпуска</label>
                        <select name="page" id="year-control" class="w-100">
                            <option value="">Все</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                        </select>
                    </div>
                </div>
                <div class="category-filter category-filter__price">
                    <div class="category-filter__top d-flex flex-row align-items-center justify-content-between">
                        <div class="category-filter__title"> Цена</div>
                        <button type="button" class="category-filter__path button--scale">
                            <svg class="icon" width="10" height="6">
                                <use href="./images/sprite.svg#icon-path-down"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="category-filter__body">
                        <div class="category-filter__range d-flex flex-row justify-content-between">
                            <label class="category-filter__label-price d-flex flex-row align-items-center w-100">
                                <span class="d-none d-xl-flex category-filter__text">от</span>
                                <input type="number" min="1847" max="19717" placeholder="1847"
                                       class="category-filter__input text-center" data-price-range-min>
                            </label>
                            <label class="category-filter__label-price d-flex flex-row align-items-center w-100">
                                <span class="d-none d-xl-flex category-filter__text">до</span>
                                <input type="number" min="1847" max="19717" placeholder="19717"
                                       class="category-filter__input text-center" data-price-range-max>
                            </label>
                            <button type="submit" class="button basket--button" data-price-range-reset>ok</button>
                        </div>
                    </div>
                    <div class="category-filter__slider" data-range-slider>
                    </div>
                    <div class="col-12 col-xl-8">
                        <div class="row"></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-9 category-filters">
                <div class="category-filters__top row justify-content-between mx-0">
                    <div class="col-12 col-md-auto mb-2 mb-md-0 d-flex align-items-center px-0">
                        <label for="sort-control">Сортировать</label>
                        <select name="order" id="sort-control">
                            <option value="flow" selected>По названию от А до Я</option>
                            <option value="reverse">По названию от Я до А</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-auto d-flex flex-row align-items-center px-0">
                        <label for="view-control">Товаров на странице</label>
                        <select name="page" id="view-control">
                            <option value="3">3</option>
                            <option value="6">6</option>
                            <option value="9" selected>9</option>
                        </select>
                    </div>
                </div>
                <div
                    class="category-filters__content row row-cols-1 row-cols-lg-2 mx-0 justify-content-around">
                    @foreach($arrayWeapons as $weapon)
                        <div class="col weapon">
                            <div class="weapon-card d-flex flex-column h-100 position-relative my-0 mx-auto">
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
                                                        <svg class="actions-group__icon icon mb-3" width="20"
                                                             height="20">
                                                            <use href='./images/sprite.svg#icon-wish-button'></use>
                                                        </svg>
                                                    </button>
                                                    <button class="actions-group__button compare-button button--scale">
                                                        <svg class="actions-group__icon icon mb-3" width="20"
                                                             height="20">
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
                <div class="pagination d-flex flex-row align-items-center justify-content-between mx-auto my-0">
                    <a href="#" class="pagination__step pagination__step--left">
                        <svg class="pagination__icon icon" width="15" height="28">
                            <use href="./images/sprite.svg#icon-path"></use>
                        </svg>
                    </a>
                    <div class="pagination__list d-flex flex-row align-items-center mx-0 justify-content-between">
                        <a href="" class="pagination__link d-flex align-items-center justify-content-center link-active">1</a>
                        <a href="" class="pagination__link d-flex align-items-center justify-content-center link-active active">2</a>
                        <a href="" class="pagination__link d-flex align-items-center justify-content-center link-active">3</a>
                        <a href="" class="pagination__link d-flex align-items-center justify-content-center link-active">4</a>
                        <a href="" class="pagination__link d-flex align-items-center justify-content-center link-active">5</a>
                    </div>
                    <a href="#" class="pagination__step pagination__step--right">
                        <svg class="pagination__icon icon" width="15" height="28">
                            <use href="./images/sprite.svg#icon-path"></use>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="backdrop is-hidden" data-filter-backdrop>
        <div class="filters-mobile position-fixed flex-column col-lg-3 category-filters position-relative">
            <button type="button" class="filters-mobile__close position-absolute button--scale" data-close-filter>
                <svg class="filters-mobile__icon icon d-inline-block" width="16" height="16">
                    <use href="./images/sprite.svg#icon-cancel"></use>
                </svg>
            </button>
            <div class="category-filter category-filter__brand">
                <div class="category-filter__top d-flex flex-row align-items-center justify-content-between"
                     data-select>
                    <div class="category-filter__title">Бренд</div>
                    <button type="button" class="category-filter__path" data-select-path>
                        <svg class="icon" width="10" height="6">
                            <use href="./images/sprite.svg#icon-path-down"></use>
                        </svg>
                    </button>
                </div>
                <div class="category-filter__body visually-hidden" data-select-body>
                    <div class="category-filter__items d-flex flex-column" role="group">
                        <div href="#"
                             class="category-filter__link d-flex flex-row align-items-center link-active">
                            <input type="checkbox" class="category-filter__input" name="brand" value="Jrone"
                                   id="Jrone">
                            <label class="category-filter__label position-relative" for="Jrone">Jrone</label>
                        </div>
                        <a href="#"
                           class="category-filter__link d-flex flex-row align-items-center link-active">
                            <input type="checkbox" class="category-filter__input" name="brand" value="Turbo"
                                   id="Turbo">
                            <label class="category-filter__label position-relative" for="Turbo">Turbo</label>
                        </a>
                        <a href="#"
                           class="category-filter__link d-flex flex-row align-items-center link-active">
                            <input type="checkbox" class="category-filter__input" name="brand" value="E&amp;E"
                                   id="E&amp;E">
                            <label class="category-filter__label position-relative" for="E&amp;E"> E &amp;
                                E</label>
                        </a>
                        <a href="#"
                           class="category-filter__link d-flex flex-row align-items-center link-active">
                            <input type="checkbox" class="category-filter__input" name="brand" value="Garret"
                                   id="Garret">
                            <label class="category-filter__label position-relative" for="Garret">Garret</label>
                        </a>
                    </div>
                </div>
            </div>
            <div class="category-filter category-filter__model">
                <div class="category-filter__top d-flex flex-row align-items-center justify-content-between">
                    <div class="category-filter__title">Модель</div>
                </div>
                <div class="category-filter__body">
                    <label for="model-control" class="visually-hidden">Модель</label>
                    <select name="page" id="model-control-mobile">
                        <option value="Leon">Leon</option>
                        <option value="Forse">Forse</option>
                        <option value="Narva">Narva</option>
                        <option value="Osram">Osram</option>
                    </select>
                </div>
            </div>
            <div class="category-filter category-filter__release">
                <div class="category-filter__top d-flex flex-row align-items-center justify-content-between">
                    <div class="category-filter__title">Год выпуска</div>
                </div>
                <div class="category-filter__body">
                    <label for="year-control-mobile" class="visually-hidden">Год выпуска</label>
                    <select name="page" id="year-control-mobile">
                        <option value="Все">Все</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                    </select>
                </div>
            </div>
            <div class="category-filter category-filter__price">
                <div class="category-filter__top d-flex flex-row align-items-center justify-content-between">
                    <div class="category-filter__title"> Цена</div>
                    <button type="button" class="category-filter__path button--scale">
                        <svg class="icon" width="10" height="6">
                            <use href="./images/sprite.svg#icon-path-down"></use>
                        </svg>
                    </button>
                </div>
                <div class="category-filter__body">
                    <div class="category-filter__range d-flex flex-row justify-content-between">
                        <label class="category-filter__label-price d-flex flex-row align-items-center w-100">
                            <span class="d-none d-xl-flex category-filter__text">от</span>
                            <input type="number" min="1847" max="19717" placeholder="1847"
                                   class="category-filter__input text-center" data-price-range-min-mobile>
                        </label>
                        <label class="category-filter__label-price d-flex flex-row align-items-center w-100">
                            <span class="d-none d-xl-flex category-filter__text">до</span>
                            <input type="number" min="1847" max="19717" placeholder="19717"
                                   class="category-filter__input text-center" data-price-range-max-mobile>
                        </label>
                        <button type="submit" class="button basket--button" data-price-range-reset-mobile>ok</button>
                    </div>
                </div>
                <div class="category-filter__slider noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr"
                     data-range-slider-mobile>
                </div>
                <div class="col-12 col-xl-8">
                    <div class="row"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

