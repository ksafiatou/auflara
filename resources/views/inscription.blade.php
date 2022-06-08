@extends('layout.app')   
@section('content')

<!-- le formulaire ici  -->


<div class='container-fluid corps'>
    <div class='row'>
        <div class='col-md-6 offset-md-3 col-sm-12 mt-5 text-light text-center demand'>
           <h3> ENREGISTREMENT D'UN NOUVEL ABONNE</h3>
        </div>
    </div>
    <div class='row container-fluid justify-content-center'>
        <div class='col-md-4 col-sm-12 offset-1'>
        <form method="POST" action="/formulaire">
        @csrf
                <div class='row'>
                    <div class='col mt-5 text-center bg-warning text-light mb-3'>
                       <h4> NOUVEAU ABONNE</h4>
                    </div>
                </div>
                <div class='input-group input-group-sm c1 mb-3'>
                
              
                    <span  class='input-group-text' id='inputGroup-sizing-sm'>NOM</span>
                    <input name='nom' type='text' 
                    pattern = '[a-zA-Z]{1,20}'
                    class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-sm' required>
                  </div>
                  <div class='input-group input-group-sm c2 mb-3'>
                 
                    <span class='input-group-text' 
                    
                    id='inputGroup-sizing-sm'>PRENOMS</span>
                    
                    <input name='prenom' type='text' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-sm'
                    pattern = "[a-zA-Z\s]{1,20}" required>
                  </div>
                  <div class='input-group input-group-sm c1 mb-3'>
                    <span class='input-group-text'id='inputGroup-sizing-sm'>DATE DE NAISSANCE</span>
                    <input name='date_naiss' type='date' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-sm' required>
                  </div>
                  <div class='input-group input-group-sm c2 mb-3'>
                    <span class='input-group-text' id='inputGroup-sizing-sm'>DEBUT D'ABONNEMENT</span>
                    <input name='debut_ab' type='date' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-sm' required>
                  </div>
                  <div class='input-group input-group-sm c1 mb-3'>
                    <span class='input-group-text' id='inputGroup-sizing-sm'>NUMERO DE TEL</span>
                    <input name='numero' type='number'
                    pattern = "[0-9]{8,10}"
                    class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-sm' required>
                  </div>
                  <div class='input-group input-group-sm c2 mb-3'>
                    <span class='input-group-text' id='inputGroup-sizing-sm'>EMAIL</span>
                    <input name='email' type='email' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-sm' required>
                  </div>
                  <div class='row justify-content-center '>
                      
                        <button  type='submit' class=' col-6 envoi btn btn-primary'> Enregitrer</button>
                      
                  </div>
            </form>
        </div>
       
        

        </div>
    </div>
</div>
@endsection