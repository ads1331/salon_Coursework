@include('layouts.header')

<section class="masters-list">
    <div class="container">
        <h2>Наши Мастера</h2>
        <div class="master-cards">
            @foreach ($masters as $master)
            <div class="master-card">
                <img src="{{$master->image}}" alt="{{$master->name}}">
                <h3>{{$master->name}}</h3>
                <p>{{$master->specialty}}</p>
                <p>{{$master->description}}</p>
                <p class="price">{{$master->price}} руб.</p>
            </div>
            @endforeach
        </div>
    </div>
</section>


<footer>
    <div class="container">
        <p>© 2024 Парикмахерская. Все права защищены.</p>
    </div>
</footer>
</body>
</html>
