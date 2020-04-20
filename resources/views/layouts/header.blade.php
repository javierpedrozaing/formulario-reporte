<!-- As a link -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">    
    <div class="text-right">
        <p><b>{{ Auth::user()->name }}</b></p>
        <a class="dropdown-item" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            {{ __('CERRAR SESIÓN') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" >
            @csrf
        </form>
    </div>


</nav>

