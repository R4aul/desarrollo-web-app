@php
    $routes=[
        [
            'name' => 'Welcome',
            'url' => route('welcome')
        ],
        [
            'name' => 'Login',
            'url' => route('login')
        ],
        [
            'name' => 'Dashboard',
            'url' => route('dashboard')
        ],
        [
            'name' => 'Task',
            'url' => route('tasks.index')
        ],
        [
            'name' => 'Gustos y Digustos',
            'url' => route('gustos')
        ],
        [
            'name' => 'Tema de interes',
            'url' => route('tema')
        ],
        [
            'name' => 'Bibliografia',
            'url' => route('bibliografia')
        ],
        
    ];
@endphp

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            @foreach ($routes as $route)
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{$route['url']}}">{{$route['name']}}</a>
                </li>
            @endforeach
        </ul>
    </div>
</nav>