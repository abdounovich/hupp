@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
<div class="sidebar bg-white">
  <div class="mt-0 bg-white" style="height:100px"> 
      <img src="{{ asset('images/logo_hupp.bmp') }}" class=" ml-1 mb-2 mt-2" width="160 " height="110" alt="">
    </div> 
    
 <div class="mt-4 " style="font-family: 'Roboto', sans-serif;
 "> 
 <a  href="/"> <i style=" font-size: 20px " class="fa fa-home p-2  align-middle ">  </i>Acceuil</a>
  <a class="active shadow-sm " href="{{route('instruments.index')}}">
   <i class="fa fa-thermometer  text-center p-2  align-middle" style="font-size: 22px">  </i>Instruments </a>
   <a  href="{{route('criters.index')}}">
    <i style="font-size: 22px" class="fa fa-navicon p-2  align-middle">  </i>Criteres </a>
    <a  href="{{route('categories.index')}}">
    <i style="font-size: 22px" class="fa fa-server p-2  align-middle">  </i>Catégories </a>
    <a  href="#">
      <i style="font-size: 22px" class="fa fa-cog p-2  align-middle">  </i>Parametres 
    </a>
    <a  href="/information">
      <i style="font-size: 22px" class="fa fa-book p-2 align-middle">  </i>Documentation
    </a>
    
  </div>
  <form class="form-inline mb-3 mt-1  " action="{{route('instruments.search')}}" method="POST">
          @csrf
          <input class="mx-1 col col-8 border border-primary   form-control " name="search" type="search" placeholder="Rechercher" aria-label="Rechercher">
          <button class="btn btn-outline-primary col col-3  " type="submit"><i class="fa fa-search "></i></button>
        </form> 
        <div class=" bg-white" style="height:100px"> 
          <img src="{{ asset('images/logo_qev.bmp') }}" class=" ml-5" width="120 " height="120" alt="">
        </div> 
</div>

@endsection

@section('content')

<div class="content">
  




<!-- Button trigger modal -->
<div class="mt-5 text-left z3 ">
  <button type="button" class="btn bg-hupp text-white" data-toggle="modal" data-target="#exampleModal">
  <span class="fa fa-plus m-2"></span> Ajouter un instrument
</button></div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Ajouter un instrument</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form method="POST" action="instruments/add">
         
           @csrf
           <div class="mb-3">
             <input placeholder="Nom:" type="text" name="nom"   class="form-control" id="exampleInputEmail1" >
           </div>
           <div class="mb-3">
             <input type="text" placeholder="Refférence:" name="ref"   class="form-control" id="exampleInputEmail1" >
           </div>
           
         
         <div class="mb-3">
           <label for="my-select">Categorie:</label>
           <select id="my-select" class="form-control" name="categorie">
             
            @foreach ($categories as $categorie)
                 <option value="{{$categorie->id}}">{{$categorie->nom}}</option>
             @endforeach
           </select>
         </div>
         
         
         
           <div class="mb-3">
             <label for="exampleInputEmail1" class="form-label">Dernier étalonnage:</label>
             <input type="date" name="date_der"   class="form-control" id="exampleInputEmail1" >
           </div>
           <div class="mb-3">
             <label for="exampleInputEmail1" class="form-label">Prochain étalonnage:</label>
             <input type="date" name="date_proch"   class="form-control" id="exampleInputEmail1" >
           </div>
           <div class="mb-3">
             <input type="text" name="period_act" placeholder="Periodicité actuelle:"  class="form-control" id="exampleInputEmail1" >
           </div>
          
           <button type="submit" class=" col   btn btn-primary">Ajouter</button>
         </form> 
         </div>
         
     
    </div>
  </div>
</div>








@endsection
