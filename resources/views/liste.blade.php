@extends('layout.app')   
<!-- le corps de la page  -->
@section('content')

    <div class='container-fluid corps'>
        <div class='row justify-content-evenly mt-5'>
            <div class='col-md-4   col-sm-4 ms-1  text-light text-center  '>
               <h1 class="demand">GESTION</h1>
            </div>
            <div class='col-4 text-center d-flex col-sm-4'>
                
                    <h3 class="bg-warning rond">
                    
                   
            </div>
        </div>
        <div class='row '>
            <div class='col table'>
            <div class='container'>
            <div class='row'>
                <div class='col-md-12'>
                    <div class='card'>
                        <div class='card-header'>
                            <h3 class='card-title'>Liste des Abonnés</h3>
                        <div class='table-responsive'>
                            <table class='table no-wrap user-table mb-0'>
                            <thead class="bg-secondary text-white">
                                <tr>
                                <th scope='col' class='border-0 text-uppercase font-medium pl-4'>#</th>
                                <th scope='col' class='border-0 text-uppercase font-medium'>Nom complet </th>
                                <th scope='col' class='border-0 text-uppercase font-medium'>D_naissance</th>
                                <th scope='col' class='border-0 text-uppercase font-medium text-center'>Email</th>
                                <th scope='col' class='border-0 text-uppercase font-medium'>Numero</th>
                                <th scope='col' class='border-0 text-uppercase font-medium'>D_abon</th>
                                </tr>
                            </thead>
                            <tbody>
                                    @foreach($abonnes as $abonne)
                                
                                        <tr class='ligne'>
                                        <td class='pl-4 '>$i</td>
                                        <td>
                                            <h5 class='font-medium mb-0'>{{$abonne->nom}} {{$abonne->prenom}}</h5>
                                            <span class='text-muted'></span>
                                        </td>
                                        <td>
                                            <span class='text-muted'>{{$abonne->date_de_naissance}}</span><br>
                                            <span class='text-muted'></span>
                                        </td>
                                        <td>
                                            <span class='text-muted'>{{$abonne->email}}</span>
                                            <span class='text-muted'></span>
                                        </td>
                                        <td>
                                            <span class='text-muted'>{{$abonne->numero_de_tel}}</span><br>
                                            <span class='text-muted'></span>
                                        </td>
                                        
                                            <td>
                                                <span class='text-muted'>{{$abonne->date_ab}}</span><br>
                                                <span class='text-muted'></span>
                                            </td>
                                        
                                        <td>
                                            
                                            <button type='button' id='delete' class='btn btn-outline-info btn-circle btn-lg btn-circle ml-2'><a  href='supprimer.php?id=$donnees[id]' ><i class='fa fa-trash'></i></a> </button>
                                            <a href='modif.php?id=$donnees[id]'  >
                                            <button type='button' class='btn  btn-outline-info btn-circle btn-lg btn-circle ml-2'><i class='fa fa-edit'></i> </button></a>
                                        </td>
                                        
                                        </tr>
                                       @endforeach
                            </tbody>
                            </table>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    



    <div class='row justify-content-center'>
        <div class='col-md-3 col-sm-4'>
            <a href='inscription'><button type='button' class='btn btn-outline-info btn-circle btn-lg btn-circle ml-2'><i class='fa fa-plus'></i> AJOUTER UN ABONNE</button></a>
        </div>
</div>
    
@endsection