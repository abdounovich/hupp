

@forelse ($instrumentsInactive as $instrumentInactive)


    

  <div class=" mt-5 text-left text-white"><h2>Liste des instruments inactif : </h2></div>

   <div class=" border rounded bg-white" >

    <table class="table  bg-white ">
  <thead>
    <tr class="  text-white text-center bg-hupp">
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
                @foreach ($instrumentsInactive  as $instrumentA) 
<tbody>
          
                   <tr class="text-center">
                    <td width="5%">{{$counter=$counter+1}}</td>
                      <td width="10%">{{$instrumentA->nom}}</td>
                      <td width="10%">{{$instrumentA->ref}}</td>
                      <td width="10%">{{$instrumentA->date_dernier}}</td>
                      <td width="10%">{{$instrumentA->date_proch}}</td>

                      </tr>
     <tr><td colspan="5" class="text-center">
      <form method="POST" action="instruments/update/{{$instrumentA->id}}">
        @csrf
    <div class="row m-2">

     
      <div class="col col-1 ">
        <input type="text" name="C1" class="form-control" placeholder="C1">
      </div>
      <div class="col col-1">
        <input type="text" name="C2" class="form-control " placeholder="C2">
      </div>
      <div class="col col-1">
        <input type="text" name="C3" class="form-control " placeholder="C3">
      </div>
        
      
      <div class="col col-1">
        <input type="text" name="C4" class="form-control " placeholder="C4">
      </div>
      <div class="col col-1">
        <input type="text" name="C5" class="form-control" placeholder="C5">
      </div>
      <div class="col col-1">
        <input type="text" name="C6" class="form-control" placeholder="C6">
      </div>
      
      <div class="col col-1">
        <input type="text" name="C7" class="form-control" placeholder="C7">
      </div>
      <div class="col col-1">
        <input type="text" name="C8" class="form-control" placeholder="C8">
      </div>
      <div class="col col-1">
        <input type="text" name="C9" class="form-control" placeholder="C9">
      </div>
      <div class="col col-3 text-center ">    
           <button type="submit" class=" btn btn-success"> <i class="fa fa-caret-square-o-right "></i> Calculer</button>
           <a class="btn btn-danger " href="{{route("instruments.delete",$instrumentA->id)}}"> <i class="fa fa-trash"></i> Effacer</a>        
          </div>
 </div>

       

  </form>
                      </td>
                  </tr>
     
    
 
    
  </tbody>@endforeach

</table>


   </div>
  





@empty
@endforelse


