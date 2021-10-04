@extends('layouts.app')

<div class="container">
    <div class="row">
        <div class="col-12 pt-2">
          
          <div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
              <h1 class="display-4">Créer un nouveau Etudiant</h1>
              <p>Remplissez et soumettez ce formulaire pour créer un nouveau Etudiant </p>

              <hr>
              <form action="" method="POST">
                  @csrf
                 

                  <div class="row">
                      <div class="control-group col-12">
                          <label for="title">Nom</label>
                          <input type="text" id="nom" class="form-control" name="nom" placeholder="Entrer Nom" required>
                      </div>
                      <div class="control-group col-12 mt-2">
                          <label for="body">Adresse</label>
                          <input type="text" id="adresse" class="form-control" name="adresse" placeholder="Entrer Adresse" required>
                      </div>
                      <div class="control-group col-12">
                          <label for="title">Phone</label>
                          <input type="text" id="phone" class="form-control" name="phone" placeholder="Entrer Phone" required>
                      </div>
                      <div class="control-group col-12 mt-2">
                          <label for="body">Email</label>
                          <input type="email" id="email" class="form-control" name="email" placeholder="Entrer Email" required>
                      </div>
                      <div class="control-group col-12 mt-2">
                          <label for="body">Date Of Birth</label>
                          <input type="text" id="date" class="form-control" name="date" placeholder="YYYY-MM-DD" required>
                      </div>
                      <div class="control-group col-12 mt-2">
                          <label for="body">Ville Id</label>
                          <input type="number" id="ville" class="form-control" name="date" placeholder="Entrer Id de la ville" required>
                      </div>
                  </div>
                  <div class="row mt-2">
                      <div class="control-group col-12 text-center">
                          <button id="btn-submit" class="btn btn-success">
                              Submit
                          </button>
                          <a href="/home" class="btn btn-primary">Retourner</a>
                      </div>
                  </div>
              </form>


          </div>

        </div><!--/col12-->
    </div> <!--/row-->
  </div><!--/container-->
