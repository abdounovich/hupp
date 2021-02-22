
@php
    use App\Instrument;
    use App\Categorie;
    use App\Criter;

@endphp
@extends('layouts.app')

@section('title', 'Acceuil')


@section('content')

<!-- The sidebar -->


<div class="mt-0 bg-white clearfix" style="height:100px"> 
    <img  src="{{ asset('images/logo_hupp.bmp') }}" class=" ml-5 mt-2" width="80 " height="80" alt="">
  <a class="ml-4  h4 text-black-50  p-2" href="/" style="text-decoration:underline">Acceuil</a>
  <a  class="p-2 h4 text-hupp " href="{{route('instruments.index')}}">Instruments</a>
  <a class="p-2 h4 text-hupp" href="{{route('categories.index')}}">Catégories</a>
  <a class="p-2 h4 text-hupp" href="{{route('criters.index')}}">Criters</a>
  <a class="p-2 h4 text-hupp" href="/information">Documentation</a>

  <form class="form-inline float-right p-2 m-3 " action="{{route('instruments.search')}}" method="POST">
    @csrf
    <input class="form-control " name="search" type="search" placeholder="Rechercher" aria-label="Rechercher">
    <button class="btn btn-outline-primary m-2 " type="submit"><i class="fa fa-search"></i></button>
  </form>
 
</div> 


@php
   $instrumentsActif=Instrument::where("type","1")->get()->count(); 
   $instrumentsInactif=Instrument::where("type","0")->get()->count(); 
   $categories=Categorie::get()->count(); 
   $criters=Criter::get()->count(); 



@endphp
<style>

body { 
  background: url("{{ asset('images/bg1.jpg') }}") no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover; 
}

    .text-hupp{
        color:darkorchid;
    }
    .bg-hupp{
        color:darkorchid;
    }
    .badge-hupp{
        background-color:darkorchid;
    }
</style>
<div class="container">
    <div class="row mt-5 ml-5 ">

        <div class="bg-hupp ml-5 mt-2 col col-1  ">
            <i class="fa fa-3x fa-server p-2 mt-3   text-center text-white"></i>
            </div>
        <div class="bg-white ml-1   col col-3 p-2 mt-2 "><h4 class="p-2 mt-3">
        Categories  <span class="badge ml-2 badge-hupp text-white">{{$categories}}</span></h4>
            </div>

            


            <div class="bg-hupp ml-5 mt-2 col col-1  ">
                <i class="fa fa-3x fa-navicon p-2 mt-3   text-center text-white"></i>
                </div>
            <div class="bg-white  ml-1 col col-3 p-2 mt-2 "><h4 class="p-2 mt-3">
                Criters  <span class="badge ml-2 badge-hupp  text-white">{{$criters}}</span></h4>
                </div>
            
            </div>
                <div class="row mt-2 ml-5  ">




                    <div class="bg-hupp ml-5 mt-2 col col-1  ">
                        <i class="fa fa-3x fa-thermometer ml-2 p-2 mt-3   text-center text-white"></i>
                        </div>
                    <div class="bg-white  ml-1 col col-3 p-2 mt-2 "><h4 class="p-2 mt-3">
                        Instruments actifs <span class="badge ml-2 badge-hupp  text-white">{{$instrumentsActif}}</span></h4>
                        </div>


                        <div class="bg-hupp ml-5 mt-2 col col-1  ">
                            <i class="fa fa-3x ml-2 fa-thermometer-0 p-2 mt-3   text-center text-white"></i>
                            </div>
                        <div class="bg-white  ml-1 col col-3 p-2 mt-2 "><h4 class="p-2 mt-3">
                          Instruments inactifs <span class="badge ml-2 badge-hupp  text-white">{{$instrumentsInactif}}</span></h4>
                            </div>
               





                </div>


                <div class="row mt-2 ml-5  ">




                    <div class="bg-hupp ml-5 mt-2 col col-1  ">
                        <i class="fa fa-3x fa-bell p-2 mt-3   text-center text-white"></i>
                        </div>
                    <div class="bg-white  ml-1 col col-3 p-2 mt-2 "><h4 class="p-2 mt-3">
                        Notification <span class="badge badge-hupp  text-white">0</span></h4>
                    </div>


                        <div class="bg-hupp ml-5 mt-2 col col-1  ">
                            <i class="fa fa-3x fa-book p-2 mt-3   text-center text-white"></i>
                            </div>
                        <div class="bg-white  ml-1 col col-3 p-2 mt-2 "><h4 class="p-2 mt-3">
                          Documentation <span class="badge badge-hupp  text-white">{{$instrumentsInactif}}</span></h4>
                            </div>


            
</div>

</div>
 
@endsection

