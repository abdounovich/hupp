@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
<div class="sidebar bg-white">
  <div class="mt-0 bg-white" style="height:100px"> 
      <img src="{{ asset('images/logo_hupp.bmp') }}" class=" ml-1 mb-2 mt-2" width="160 " height="110" alt="">
    </div> 
    
 <div class="mt-4 " style="font-family: 'Roboto', sans-serif;"> 
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
  <span class="fa fa-plus m-2"></span> Ajouter un medicament
</button></div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Ajouter un medicament</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="form_17935" class="appnitro" method="POST" action="{{route("medicaments.add")}}">
				@csrf	<div class="form_description">
		</div>						
		
			
		<div>
			<input id="element_1" name="nom" placeholder="nom" class="form-control" type="text" maxlength="255" value=""> 
		</div> 
		<div>
			<input id="element_1" name="dci" placeholder="dci" class="my-4 form-control" type="text" maxlength="255" value=""> 
		</div> 

		<div>
			<input id="element_1" name="dosage" placeholder="dosage" class="form-control" type="text" maxlength="255" value=""> 
		</div> 
		<div>
			<input id="element_1" name="nett" placeholder="nettoyabilité" class="my-4 form-control" type="text" maxlength="255" value=""> 
		</div> 
    <div>
			<input id="element_1" name="sol" placeholder="solubilité" class="my-4 form-control" type="text" maxlength="255" value=""> 
		</div> 
    <div>
			<input id="element_1" name="tox" placeholder="toxicité" class="my-4 form-control" type="text" maxlength="255" value=""> 
		</div> 
    <div>
			<input id="element_1" name="dose_min" placeholder="dose minimal" class="my-4 form-control" type="text" maxlength="255" value=""> 
		</div> 
    <div>
			<input id="element_1" name="dose_max" placeholder="dose maximal" class="my-4 form-control" type="text" maxlength="255" value=""> 
		</div> 
    <div>
			<input id="element_1" name="dose_ther" placeholder="dose thérapeutique" class="my-4 form-control" type="text" maxlength="255" value=""> 
		</div> 
    <div>
			<input id="element_1" name="classe" placeholder="classe thérapeutique" class="my-4 form-control" type="text" maxlength="255" value=""> 
		</div> 
   







    <button type="submit" class=" col   btn btn-primary">Ajouter</button>



	
		</form>
         </div>
         
     
    </div>
  </div>
</div>








@endsection
