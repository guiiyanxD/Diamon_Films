
<ul class="sidebar-nav">
    <li class="sidebar-brand">
        <a href="#" >Diamond Films</a>
    </li>
    @guest()
        <li>
            <a href="#">Catalogo</a>
        </li>
        <li>
            <a href="#">Nosotros</a>
        </li>
        <li>
            <a href="#">Contactanos</a>
        </li>
    @else
        <li>
            <a href="{{route('home')}}">Inicio</a>
        </li>

        <li>
            <a href="{{route('representantes.index')}}">Gestionar Representante</a>
        </li>

        <li>
            <a href="{{route('usuarios.index')}}">Gestionar Usuarios</a>
        </li>

        <li>
            <a href="{{route('empresas.index')}}">Gestionar Empresas</a>
        </li>

        <li>
            <a href="{{route('contratos_laborales.index')}}">Gestionar Contratos Laborales</a>
        </li>

        <li>
            <a href="{{route('contratos_acuerdos.index')}}">Gestionar Contratos de Acuerdos</a>
        </li>

        <li>
            <a href="{{route('categorias.index')}}">Gestionar Categoria</a>
        </li>

        <li>
            <a href="{{route('peliculas.index')}}">Gestionar Peliculas</a>
        </li>

        <li>
            <a href="{{route('llaves.index')}}">Gestionar Llaves</a>
        </li>
        <li>
            <a href="{{route('Delivery.index')}}">Gestionar Deliveries</a>
        </li>
        <li>
            <a href="{{route('estados.index')}}">Gestionar Estados</a>
        </li>
        <li>
            <a href="{{route('cuentas.index')}}">Gestionar Cuentas</a>
        </li>
        <li>
            <a href="{{route('distribuciones.index')}}">Solicitud de Distribucion</a>
        </li>
    @endguest
</ul>
