

    @extends('layouts.app')

    @section('title', 'Page Title')
    
    @section('sidebar')
        @parent
    
    @endsection
    
    @section('content')

    <div class="mt-0 bg-white clearfix" style="height:100px"> 
      <img  src="{{ asset('images/logo_hupp.bmp') }}" class=" ml-5 mt-2" width="80 " height="80" alt="">
    
    <a class="ml-4 h5 active p-2" href="/">Acceuil</a>
    <a  class="p-2 h5 " href="{{route('instruments.index')}}">Instruments</a>
    <a class="p-2 h5" href="{{route('categories.index')}}">Catégories</a>
    <a class="p-2 h5" href="{{route('criters.index')}}">Criters</a>
   
    <form class="form-inline float-right p-2 m-3 " action="{{route('instruments.search')}}" method="POST">
      @csrf
      <input class="form-control " name="search" type="search" placeholder="Rechercher" aria-label="Rechercher">
      <button class="btn btn-outline-success m-2 " type="submit"><i class="fa fa-search"></i></button>
    </form>
   
  </div> 
 <div class="container">
  <div class=" mt-5  text-left text-white"><div class="h4">resultat de recherche pour : <span class="text-dark">{{$query}}</span> </div></div>

   <div class=" border rounded bg-white mb-5" >

    <table class="table  bg-white  ">
  <thead>
    <tr class=" text-white bg-hupp text-center">
      <th scope="col">No:</th>
      <th scope="col">instrument</th>
      <th scope="col">refférence</th>
      <th scope="col">dernier Etallonage</th>
      <th scope="col">prochain Etallonage</th>


    </tr>
  </thead>
  @php
    $counter = 0;  
  @endphp
                @foreach ($instruments  as $instrumentA) 
<tbody>
          
                   <tr class="text-center">
                    <td width="5%">{{$counter=$counter+1}}</td>
                      <td width="10%">{{$instrumentA->nom}}</td>
                      <td width="10%">{{$instrumentA->ref}}</td>
                      <td width="10%">{{$instrumentA->date_dernier}}</td>
                      <td width="10%">{{$instrumentA->date_proch}}</td>

                      </tr>
    
     
    
 
    
  </tbody>@endforeach

</table>


</div>
</div>
@endsection