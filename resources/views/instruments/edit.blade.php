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
      <i style="font-size: 22px" class="fa fa-cog p-2  align-middle">  </i>Parametres </a>
      <a  href="/information">
        <i style="font-size: 22px" class="fa fa-info p-2 ml-1 align-middle">  </i>Information
      </a>
  </div>
  <form class="form-inline mb-3   " action="{{route('instruments.search')}}" method="POST">
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
<div class="content">

<div class="mt-5 bg-white p-4 border rounded" >
 <form method="POST" action="{{route('instruments.edit', $instrument->id)}}">
  <div class=" text-center"><h2>Modifier un instrument:</h2></div>

  @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nom:</label>
    <input type="text" name="nom" value="{{$instrument->nom}}"   class="form-control" id="exampleInputEmail1" >
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Refférence:</label>
    <input type="text" name="ref" value="{{$instrument->ref}}"   class="form-control" id="exampleInputEmail1" >
  </div>

  <div class="mb-3">
    <label for="my-select">Famille:</label>
    <select id="my-select" class="form-control" name="categorie">
      @foreach ($categories as $categorie)
          <option @if ($categorie->id==$instrument->categorie->id)
            selected
        @endif   value="{{$categorie->id}}">{{$categorie->nom}}</option>
      @endforeach
    </select>
  </div>

  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Dernier étalonnage: {{$instrument->date_dernier}}</label>
    <input type="date" name="date_der"    class="form-control" id="exampleInputEmail1" >
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Prochain étalonnage: {{$instrument->date_proch}}</label>
    <input type="date" name="date_proch"  class="form-control" id="exampleInputEmail1" >
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Periodicité actuelle:</label>
    <input type="text" name="period_act" value="{{$instrument->perio_actu}}" class="form-control" id="exampleInputEmail1" >
  </div>
  <label for="exampleInputEmail1" class="form-label">Critéres:</label>

  <div class="row mt-2">

    <div class="col col-1 ">
      <input type="text" name="C1" value="{{$instrument->c1}}" class="form-control" placeholder="C1">
    </div>
    <div class="col col-1">
      <input type="text" name="C2" value="{{$instrument->c2}}" class="form-control " placeholder="C2">
    </div>
    <div class="col col-1">
      <input type="text" name="C3" value="{{$instrument->c3}}" class="form-control " placeholder="C3">
    </div>
    
    <div class="col col-1">
      <input type="text" name="C4" value="{{$instrument->c4}}" class="form-control " placeholder="C4">
    </div>
    <div class="col col-1">
      <input type="text" name="C5" value="{{$instrument->c5}}" class="form-control" placeholder="C5">
    </div>
    <div class="col col-1">
      <input type="text" name="C6" value="{{$instrument->c6}}" class="form-control" placeholder="C6">
    </div>
    
    <div class="col col-1">
      <input type="text" name="C7" value="{{$instrument->c7}}" class="form-control" placeholder="C7">
    </div>
    <div class="col col-1">
      <input type="text" name="C8" value="{{$instrument->c8}}" class="form-control" placeholder="C8">
    </div>
    <div class="col col-1">
      <input type="text" name="C9" value="{{$instrument->c9}}" class="form-control" placeholder="C9">
    </div>
   
  </div>
   <div class=" text-center mt-5 "><button type="submit" class=" btn btn-primary">Modifier</button></div>
</form> 
</div>
</div>

@endsection
