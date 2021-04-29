<div {{$attributes->merge(['class'=>"text-3xl
                                    flex flex-row justify-center items-center"])}}>
    <img class="w-max" src="{{asset('images/logo.png')}}" alt="Logo de empresa"/>
    <h1>CPI FP Los Enlaces</h1>
    <div>
        @auth
            <form action="{{route('logout')}}" method="POST">
                @csrf
                <h2>Logueado como {{auth()->user()->name}}</h2>
                <input type="submit" value="Logout">
            </form>

        @else
            <a href="{{route('login')}}">Login</a>
            <a href="{{route('register')}}">Registrarse</a>
        @endauth
    </div>
</div>
