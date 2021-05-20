@extends("layout")

@section("title")
    Catalog
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
    ['id' => 0, 'image' => 'images/spares/turbine-cartridge1.jpg', 'price' => 5000, 'count' => 4, 'coast' => 21000, 'services' => ['Регенерация турбины 500₴', 'Доп. услуга: Регенерация турбины за 1 день 500₴', 'Доп. услуга: Регенерация турбины за 1 день 500₴'], 'title' => '070-150-017 Картридж турбины для Mercedes E-klasse (W211) 2.7CDI', 'alt' => '070-150-017 Картридж турбины для Mercedes E-klasse (W211) 2.7CDI'],
    ['id' => 1, 'image' => 'images/spares/turbine-cartridge2.jpg', 'price' => 5000, 'count' => 1, 'coast' => 5500, 'services' => ['Доп. услуга: Регенерация турбины за 1 день 500₴'], 'title' => '070-150-017 Картридж турбины для Mercedes E-klasse', 'alt' => '070-150-017 Картридж турбины для Mercedes E-klasse'],
    ['id' => 1, 'image' => 'images/spares/turbine-cartridge3.jpg', 'price' => 5000, 'count' => 1, 'coast' => 5500, 'services' => ['Доп. услуга: Регенерация турбины за 1 день 500₴'], 'title' => '070-150-017 Картридж турбины E-klasse (W211)', 'alt' => '070-150-017 Картридж турбины E-klasse (W211)']
];

?>


@section("main-content")
    <div class="categories-main">
        <div class="categories-main__content container">
            <div class="categories-main__title title">Категории</div>
            <div
                class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 mx-0 justify-content-around">
                @foreach($catalogMenu as $item)
                    <div class="categories-main__item d-flex flex-column">
                        <a href="/{{$item['link']}}"
                           class="categories-main__link d-flex flex-column align-items-center h-100 link-active link-active--header">
                            <picture>
                                <source srcset="{{asset($item['image'])}}">
                                <img loading="lazy" class="lozad" data-src="{{asset($item['image'])}}"
                                     alt="{{$item['text']}}" width="200" height="200">
                            </picture>
                            <div
                                class="categories-main__text text-center position-relative">{{ $item['text'] }}</div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection


