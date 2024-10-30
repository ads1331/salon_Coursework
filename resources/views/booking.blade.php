@include('layouts.header')

<section class="booking-section">
    <div class="container">
        <h2>Запись на Услугу</h2>
        <form id="booking-form" method="POST" action="{{ route('booking.store') }}">
            @csrf

            <div class="form-group">
                <label for="service-type">Тип услуги:</label>
                <select id="service-type" name="service_id" required>
                    <option value="" disabled selected>Выберите услугу</option>
                    @foreach ($masters as $service)
                        <option value="{{ $service->master_id }}" data-price="{{ $service->price }}">
                            {{ $service->name }} - {{ $service->specialty }} ({{ $service->price }} руб.)
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
            </div>

            <div class="form-group">
                <label for="date">Дата:</label>
                <input type="date" id="date" name="date" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
            </div>

            <div class="form-group">
                <label for="time">Время:</label>
                <input type="time" id="time" name="time" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
            </div>

            <div class="form-group">
                <label for="total-price">Итого:</label>
                <input type="text" id="total-price" name="total_price" readonly value="0" style="border: none; background: transparent; color: black;">
            </div>

            <button type="submit">Записаться</button>
        </form>
    </div>
</section>

<footer>
    <div class="container">
        <p>© 2024 ПК Клуб. Все права защищены.</p>
    </div>
</footer>

<script>
    const serviceTypeSelect = document.getElementById('service-type');
    const totalPriceInput = document.getElementById('total-price');

    function updatePrice() {
        const selectedOption = serviceTypeSelect.options[serviceTypeSelect.selectedIndex];
        const price = parseFloat(selectedOption.getAttribute('data-price')) || 0;

        // Отображаем цену в поле 'total-price'
        totalPriceInput.value = price.toFixed(2) + ' руб.';
    }

    serviceTypeSelect.addEventListener('change', updatePrice);
</script>
</body>
</html>
