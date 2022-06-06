
 @extends('layout.app')   
<!-- le corps de la page  -->
@section('content')
        <div class="row b1">
            <div class="col-md-6  offset-md-3 col-sm-12 mt-5 text-light text-center demand">
                QUE VOULEZ-VOUS FAIRE ?
            </div>
        </div>
            <div class="container mt-5 bg-image">
                <div class="row justify-content-evenly ">
                    <div class="col-md-3 col-lg-4 ">
                        <div class="card bg-warning w-100 c1">
                            <a href="inscription">
                                <img class="card-img-top " src="{{asset('img/inscrip.webp')}}" alt="Card image cap">
                            <div class="card-body text-center text-light">
                                <h5 class="card-title">AJOUTER UN ABONNES</h5>
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-4 ">
                        <div class="card bg-primary w-100 c2">
                            <a href="liste">
                                <img class="card-img-top" src="{{asset('img/liste.webp')}}" alt="Card image cap" >
                            <div class="card-body text-center text-light">
                                <h5 class="card-title">GERER LES ABONNES</h5>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
    </div>
@endsection