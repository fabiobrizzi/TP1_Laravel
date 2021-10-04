@extends('layouts.app')

<div class="container">
    <div class="row">
        <div class="col-12 pt-2">
          
          <div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
              <h1 class="display-4">Edit Student</h1>
              <p>Remplissez et soumettez ce formulaire pour mettre a jours Student </p>

              <hr>

              <form action="" method="POST">
			  		
			  		@method('PUT')
			  		@csrf
				  

                  <div class="row">
                      <div class="control-group col-12">
                          <label for="title">Nom</label>
                          <input type="text" id="nom" class="form-control" name="nom" value=" {{ $student->nom }}" required>
                      </div>
                      <div class="control-group col-12 mt-2">
                          <label for="body">Adresse</label>
                          <input type="text" id="adresse" class="form-control" name="adresse" value=" {{ $student->adresse }}" required>
                      </div>
                      <div class="control-group col-12">
                          <label for="title">Telephone</label>
                          <input type="text" id="phone" class="form-control" name="phone" value=" {{ $student->phone }}" required>
                      </div>
                      <div class="control-group col-12 mt-2">
                          <label for="body">Email</label>
                          <input type="email" id="email" class="form-control" name="email" value=" {{ $student->email }}" required>
                      </div>
                      <div class="control-group col-12 mt-2">
                          <label for="body">Date Naissance</label>
                          <input type="text" id="date" class="form-control" name="date" value=" {{ $student->date_of_birth }}"" required>
                      </div>
                      <div class="control-group col-12 mt-2">
                          <input type="hidden" id="ville" class="form-control" name="date" value=" {{ $student->ville_id }}" required>
                      </div>
                      
                      <div class="control-group col-12 mt-2">
                      <label for="body">Ville</label>
                      <br>
                        <select name="Ville" id="">
                        @foreach($villes as $ville)
                            <option value="">{{ ucfirst($ville->nom) }}</option>
                        @endforeach
                        </select>
                        </div>
                  
                    </div>
                  <div class="row mt-2">
                      <div class="control-group col-12 text-center">
                          <button id="btn-submit" class="btn btn-success">
                              Submit
                          </button>
                          <a href="/home" class="btn btn-primary ">Retourner</a>
                      </div>
                  </div>
              </form>


          </div>

        </div><!--/col12-->
    </div> <!--/row-->
  </div><!--/container-->
  
