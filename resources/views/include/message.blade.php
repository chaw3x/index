
@if (!empty($error))
    <div class="alert card alertMessage red white-text">
        <div class="card-content">
            <p><i class="material-icons">report</i>{{$error}}</p>
        </div>
    </div>
@endif
@if (session('status')&&empty($error))
    <div class="alert card alertMessage green white-text">
        <div class="card-content">
            <p><i class="material-icons">check_circle</i>   {{session('status')}} </p>
        </div>
    </div>
@endif
@if (session('error'))
    <div class="alert card alertMessage red white-text">
        <div class="card-content">
            <p><i class="material-icons">report</i>Error en el recaptcha</p>
        </div>
    </div>
@endif
@if ($errors->any())
    <div class="alert card alertMessage red white-text">
        <ul>
            @foreach ($errors->all() as $error)
                <li><i class="material-icons">report</i>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
