@include('include.head')
<body>
    <p>Hola! Se ha enviado un mensaje {{ $distressCall->created_at }}.</p>
    <p>Este es el mensaje enviado por el usuario</p>
    <ul>
        <li>Nombre: {{ $distressCall->user->name }}</li>
        <li>Teléfono: {{ $distressCall->user->phone }}</li>
        <li>DNI: {{ $distressCall->user->dni }}</li>
    </ul>
    <p>Y esta es la posición reportada:</p>
    <ul>
        <li>Latitud: {{ $distressCall->lat }}</li>
        <li>Longitud: {{ $distressCall->lng }}</li>
        <li>
            <a href="https://www.google.com/maps/dir/{{ $distressCall->lat }},{{ $distressCall->lng }}">
                Ver en Google Maps
            </a>
        </li>
    </ul>
</body>
@include('include.footer')