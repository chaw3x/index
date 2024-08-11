
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