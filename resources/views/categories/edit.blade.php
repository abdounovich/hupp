

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
      <a  href="{{route('instruments.index')}}">
       <i class="fa fa-thermometer  text-center p-2  align-middle" style="font-size: 22px">  </i>Instruments </a>
       <a    href="{{route('criters.index')}}">
        <i style="font-size: 22px" class="fa fa-navicon p-2  align-middle">  </i>Criteres </a>
        <a class="active shadow-sm " href="{{route('categories.index')}}">
        <i style="font-size: 22px" class="fa fa-server p-2  align-middle">  </i>Catégories </a>
        <a  href="#">
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
            <div class=" bg-white" style="height:100px"> 
              <img src="{{ asset('images/logo_qev.bmp') }}" class=" ml-5 " width="120 " height="120" alt="">
            </div> 
    </div>

@endsection

@section('content')
<div class="content ">






















  <div class=" mt-5 text-left text-white"><h2>Modifier la catégorie : {{$categorie->nom}} </h2></div>


    
  <form method="POST" action="{{route('categories.update',$categorie->id)}}">
    
    @csrf
    <div class="mb-2">
      <label for="catName">Nom du categorie:</label>

    <input type="text" name="nom" value="{{$categorie->nom}}"  class="form-control col col-4" id="catName" >
    </div>
   
  

 
   
    <div class=" text-left  "><button type="submit" class="btn btn-primary">Modifier</button></div>
  </form>
    
      

 <div class=" footer ">
        <div style="width:100%;height:300px;"></div>
      </div>








</div>

@endsection