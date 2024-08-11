@include('include.head')
<body>
    <p>
        Hola este usuario <b>{{$data->nombre}}</b> y su correo es <b>{{$data->email}}</b>
        <br>
        con telefono <b>{{$data->telefono}}</b> y este mensaje:
    </p>
    <p>
        <b>{{$data->mensaje}}</b>
    </p>
</body>
@include('include.footer')