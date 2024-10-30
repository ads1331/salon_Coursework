<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"> <!-- Подключение CSS -->
    <title>Ваш стиль - Парикмахерская</title>
</head>
<body>

@include('layouts.header')

<!-- Главная секция с информацией -->
<section id="about">
    <h2>Добро пожаловать в "Ваш стиль"</h2>
    <p>Мы предлагаем лучшие парикмахерские услуги в вашем городе. Наша команда профессионалов создаст образ, который подчеркнет вашу индивидуальность и стиль.</p>
</section>

<!-- Секция с услугами -->
<section id="services">
    <h2>Наши услуги</h2>
    <div class="service-item">
        <h3>Стрижка</h3>
        <p>Идеальная стрижка для мужчин и женщин. Подходящая каждому клиенту по стилю.</p>
    </div>
    <div class="service-item">
        <h3>Окрашивание</h3>
        <p>Качественное окрашивание, придающее волосам здоровый блеск и яркость.</p>
    </div>
    <div class="service-item">
        <h3>Укладка</h3>
        <p>Праздничные и повседневные укладки, которые будут держаться весь день.</p>
    </div>
</section>

<!-- Отзывы -->
<<!-- Отзывы -->
<section id="reviews">
    <h2>Отзывы наших клиентов</h2>

    <!-- Карусель отзывов -->
    <div class="carousel">
        <button class="carousel-control prev" onclick="prevSlide()">&#10094;</button>
        
        <div class="carousel-inner">
            <!-- Динамически выводим отзывы из базы данных -->
            @foreach ($reviews as $index => $review)
                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                    <p><strong>Отзыв для {{ $review->master_name }}:</strong></p>
                    <p>{{ $review->desc }} - {{ $review->reviewer_name }}</p>
                </div>
            @endforeach
        </div>
        
        <button class="carousel-control next" onclick="nextSlide()">&#10095;</button>
    </div>

    <!-- Форма для отправки отзыва -->
    <h3>Оставьте свой отзыв</h3>
    <form id="review-form" method="POST" action="{{ route('reviews.store') }}">
        @csrf
        <div class="form-group">
            <label for="master">Выберите мастера:</label>
            <select id="master" name="master_id" required>
                <option value="" disabled selected>Выберите мастера</option>
                @foreach ($masters as $master)
                    <option value="{{ $master->master_id }}">{{ $master->name }} - {{ $master->specialty }}</option>
                @endforeach
            </select>
        </div>
        
        <div class="form-group">
            <label for="desc">Ваш отзыв:</label>
            <textarea id="desc" name="desc" required></textarea>
        </div>

        <div class="form-group">
            <label for="name">Ваше имя:</label>
            <input type="text" id="name" name="name" required>
        </div>

        <button type="submit">Отправить отзыв</button>
    </form>
</section>


<!-- Контакты -->
<section id="contact">
    <h2>Контакты</h2>
    <p>Адрес: г. Москва, ул. Примерная, 12</p>
    <p>Телефон: +7 (999) 123-45-67</p>
    <p>Email: info@vashstil.com</p>
</section>

<!-- Футер -->
<footer>
    <p>© 2023 Парикмахерская "Ваш стиль". Все права защищены.</p>
</footer>

<script>
    let currentIndex = 0;
function showSlide(index) {
    const items = document.querySelectorAll('.carousel-item');
    items.forEach(item => item.classList.remove('active'));
    items[index].classList.add('active');
}
function nextSlide() {
    currentIndex = (currentIndex + 1) % document.querySelectorAll('.carousel-item').length;
    showSlide(currentIndex);
}
function prevSlide() {
    currentIndex = (currentIndex - 1 + document.querySelectorAll('.carousel-item').length) % document.querySelectorAll('.carousel-item').length;
    showSlide(currentIndex);
}

</script>

</body>
</html>
