@extends('layouts.app')
   
@section('content')
<div class="container">
    <center><h1>Kontak</h1></center><br><br>
 

    <div class="row align-items-md-stretch">
        <div class="col-md-6 mb-4">
            <center><div class="card" style="width: 70%;">
                <img src="https://scontent.fbdo2-1.fna.fbcdn.net/v/t1.6435-9/122535232_1306302246406561_6425963180173070309_n.jpg?_nc_cat=103&ccb=1-5&_nc_sid=09cbfe&_nc_eui2=AeG-EdL6tPEOQS46VodjD_Z1WHZlqq7N6WZYdmWqrs3pZr99EOn6xE7dQ1ITqArTu3RisXZGwd6sdVFXJeadMgtf&_nc_ohc=Y8d01iVCzEMAX_Dj5RJ&_nc_ht=scontent.fbdo2-1.fna&oh=00_AT-28SbC1BgDFSdZtuvfX0ejfqnG5oVQCq6igXLK85c-Vw&oe=621AB7E7" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Revaldi Dwi Octavian</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">D111911076</li>
                    <li class="list-group-item">IF-5B</li>
                    <li class="list-group-item">Backend</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="btn btn-primary">Kontak</a>
                </div>
            </div></center>
        </div>
        <div class="col-md-6 mb-4">
            <center><div class="card" style="width: 70%;">
                <img src="{{ route('products.image', ['imageName' => 'savira.jpeg']) }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Savira Yosita</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">D111911111</li>
                    <li class="list-group-item">IF-5B</li>
                    <li class="list-group-item">Frontend</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="btn btn-primary">Kontak</a>
                </div>
            </div></center>
        </div>
    </div>


    

    

<!--  -->
</div><br><br><br>
@endsection