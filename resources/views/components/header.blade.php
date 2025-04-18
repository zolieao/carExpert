<header class="text-white text-center py-1 shadow-sm">
    <div class="container ">
        <nav class="navbar navbar-expand-lg">
            <a href="{{route('main')}}">            
                <img src="{{asset('images/logo.png')}}" style="height: 25px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item active ">
                        <a href="{{route('account')}}" class="nav-link ">Услуги</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('main')}}" class="nav-link">О нас</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('points')}}" class="nav-link">Станции облсуживания</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('сontacts')}}" class="nav-link">Контакты</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
        <li class="nav-item">
            <a href="{{route('сontacts')}}" class="nav-link">Личный кабинет</a>
        </li>
    </ul>            </div>
        </nav>
    </div>
</header> 
