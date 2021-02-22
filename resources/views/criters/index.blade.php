
@extends('layouts.app')

@section('title', 'Criters')

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
       <a  class="active shadow-sm "  href="{{route('criters.index')}}">
        <i style="font-size: 22px" class="fa fa-navicon p-2  align-middle">  </i>Criteres </a><a  href="{{route('categories.index')}}">
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
 





<!-- Button trigger modal -->
<div class="mt-5 text-left ">
  <button type="button" class="btn bg-hupp text-white" data-toggle="modal" data-target="#exampleModal">
  <span class="fa fa-plus m-2"></span> Ajouter un critére  
</button></div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Ajouter un critére  </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{route('criter.add')}}">
    
          @csrf
          <div class="mb-2">
            <input type="text" name="nom" placeholder="Nom du critere" class="form-control" id="exampleInputEmail1" >
          </div>
          <div class="mb-2">
            <textarea type="text" placeholder="Designation" name="designation"  class="form-control" id="exampleInputEmail1" ></textarea>
          </div>
          <div class="mb-2">
            <textarea type="text" placeholder="Descreption" name="descreption"  class="form-control" id="exampleInputEmail1" ></textarea>
          </div>

          <div class="mb-2">
            <input type="text" name="ponderation" placeholder="Pondération"  class="form-control" >
          </div>
         
          <div class=" text-center  "><button type="submit" class="col btn btn-primary">Ajouter</button></div>
        </form>
         </div>
         
     
    </div>
  </div>



</div>
















  <div class=" mt-5 text-left text-white"><h2>Liste des critères : </h2></div>


    
          @foreach ($criters  as $criter) 
 <div class="bg-white border  p-2 m-2" >
        <div class="d-flex justify-content-between  ">  <h5 class="p-2 m-2" >
            {{$criter->designation}}          
      
        - {{$criter->nom}}               
  
    <span class="text-info "> --------------- P({{$criter->nom}}) = {{$criter->ponderation}}    </span>          
</h5> <div> <a class="btn btn-danger" href="/criters/delete/{{$criter->id}}">
  <i class="fa fa-trash"></i> Effacer
      </a>
      <a class="  btn btn-info text-white " href="{{route('criters.edit',$criter->id)}}" > 
        <i class="fa fa-pencil"></i> modifier
      </a></div>
     
</div>

       <p class="text-secondary">{{$criter->descreption}}
      </p>

 </div>

    
       @endforeach
      

 <div class=" footer ">
        <div style="width:100%;height:300px;"></div>
      </div>







      @empty($criters)
    
      @endempty
      
</div>

@endsection