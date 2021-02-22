
@php
    use App\Instrument;

@endphp
@extends('layouts.app')

@section('title', 'Categories')

@section('sidebar')
    @parent
    <div class="sidebar bg-white">
      <div class="mt-0 bg-white" style="height:100px"> 
          <img src="{{ asset('images/logo_hupp.bmp') }}" class=" ml-1 mb-2 mt-2" width="160 " height="110" alt="">
        </div> 
     <div class="mt-3 " style="font-family: 'Roboto', sans-serif;
     "> <a  href="/"> <i style=" font-size: 20px " class="fa fa-home p-2  align-middle ">  </i>Acceuil</a>
      <a href="{{route('instruments.index')}}">
       <i class="fa fa-thermometer  text-center p-2  align-middle" style="font-size: 22px">  </i>Instruments </a>
       <a  href="{{route('criters.index')}}">
        <i style="font-size: 22px" class="fa fa-navicon p-2  align-middle">  </i>Criteres </a>
        <a  class="active shadow-sm " href="{{route('categories.index')}}">
        <i style="font-size: 22px" class="fa fa-server p-2  align-middle">  </i>Catégories </a>
        <a  href="{{route('categories.index')}}">
          <i style="font-size: 22px" class="fa fa-cog p-2  align-middle">  </i>Parametres </a>
          <a  href="/information">
            <i style="font-size: 22px" class="fa fa-info p-2 ml-1 align-middle">  </i>Information
          </a>
      </div>
      <form class="form-inline mb-3  " action="{{route('instruments.search')}}" method="POST">
              @csrf
              <input class="mx-1 col col-8 border border-primary   form-control " name="search" type="search" placeholder="Rechercher" aria-label="Rechercher">
              <button class="btn btn-outline-primary col col-3  " type="submit"><i class="fa fa-search "></i></button>
            </form> 
            <div class="bg-white" style="height:100px"> 
              <img src="{{ asset('images/logo_qev.bmp') }}" class=" ml-5 " width="120 " height="120" alt="">
            </div> 
    </div>
@endsection

@section('content')
<div class="content">


<!-- Button trigger modal -->
<div class="mt-5 text-left ">
  <button type="button" class="btn bg-hupp text-white" data-toggle="modal" data-target="#exampleModal">
  <span class="fa fa-plus m-2"></span> Ajouter une catégorie  
</button></div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Ajouter une catégorie  </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="categories/add">
    
          @csrf
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label ">Nom du catégorie:</label>
            <input type="text" name="nom"  class="form-control" id="exampleInputEmail1" >
          </div>
         
         
          <div class=" text-center   "><button type="submit" class=" col btn btn-primary">Ajouter</button></div>
        </form>
         </div>
         
     
    </div>
  </div>














</div>





  <div class=" mt-5 text-left text-white"><h2>Liste des catégories : </h2></div>

  @foreach ($categories  as $categorie) 
  <div class="bg-white border  p-2 m-2" >
         <div class="d-flex justify-content-between  ">  <h5 class="p-2 m-2" >
             {{$categorie->nom}}          
       
                 
   
 </h5> <div> <a class="btn btn-danger" href="{{route('categories.delete',$categorie->id)}}">
   <i class="fa fa-trash"></i> Effacer
       </a>
       <a class="  btn btn-info text-white " href="{{route('categories.edit',$categorie->id)}}" > 
         <i class="fa fa-pencil"></i> modifier
       </a></div>
      
 </div>
 
    
 
  </div>
 
     
        @endforeach






@empty($categories)
    
@endempty
</div>

@endsection