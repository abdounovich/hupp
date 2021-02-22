@php
use App\Instrument;
@endphp


    <div class=" mt-5 text-left text-white"><h2> </h2></div>

@foreach ($categories as $categorie)
    
@php


$instrumentsActive=Instrument::where("category_id",$categorie->id)->where("type",'1')->get();
$NGsom=0;
$ENG=0;

    $ind=1;
    $in=1;
$total=$instrumentsActive->count();

for ($i=1; $i <=$criters->count() ; $i++) { 

    ${"sommeC".$i}=0;
    ${"s".$i}=0;
    ${"sd".$i}=0;
    ${"moyen".$i}=0;






}

foreach ($instrumentsActive as $instrument) {
${"ENng".$ind}="0";
${"balance".$ind}="0";
${"SNG".$ind}="0";
${"som".$ind}=0;

$ind++;
    
}




@endphp

@foreach ($instrumentsActive as $instrument)
  @php
for ($i=1; $i <=$criters->count() ; $i++) { 

${"sommeC".$i}=${"sommeC".$i}+$instrument->{"c".$i};
${"moyen".$i}=${"sommeC".$i}/$total;


}
  @endphp

@endforeach

    @foreach ($instrumentsActive as $instrument)
    @php

    for ($i=1; $i <=$criters->count() ; $i++) { 

${"s".$i}=${"s".$i}+pow(($instrument->{"c".$i})-${"moyen".$i},2);
if ($total=="1") {
 $total="2";

}
${"sd".$i}=sqrt(${"s".$i}/($total-1));
if (${"sd".$i}==0) {
  ${"sd".$i}=0.1;
}


}

       





    @endphp
  @endforeach




@foreach ($instrumentsActive as $instrument)
@php

    for ($i=1; $i <=$criters->count() ; $i++) {
        ${"EN".$i."_".$in}=$instrument->{"c".$i}-${"moyen".$i};
         ${"EN".$i."_".$in}= ${"EN".$i."_".$in}/${"sd".$i};
        $NGsom=$NGsom+${"som".$in};
        
    }$in++;
    
   
$NGmoy=$NGsom/$criters->count();
@endphp

@endforeach
@php
@endphp


@php 
$jk=1;

         for ($index=1; $index <=$total ; $index++) {

        foreach ($criters as $criter) {
        


   ${"som".$index}= ${"som".$index}+ (${"EN".$jk."_".$index}*$criter->ponderation);
  
    
    ${"SNG".$index}= pow(${"som".$index}-$NGmoy,2);
    
    $jk=$jk+1;

    

}    
$jk=1;

    

}

for ($index=1; $index <=$total  ; $index++) {
    $ENG=$ENG+ ${"SNG".$index};

}
$nn=sqrt($ENG/($total -1));

for ($index=1; $index <=$total  ; $index++) {
    ${"ENng".$index}= ${"som".$index}/$nn;
    ${"balance".$index}= (${"ENng".$index}*9.6)+31.2;

}



@endphp 
@if ($total >0)

<div class="mb-5 border rounded bg-white" >
<table id="table{{$categorie->id}}" class="table table-striped ">
  <thead >
  <tr >
    <td colspan="6" class="h5 text-center align-middle   text-info  "><span>{{$categorie->nom}} </span>
    </td><td class="text-right">
   <a class=" btn btn-success  " id="downloadLink{{$categorie->id}}" href="#" onclick="exportF(this,{{$categorie->id}})">
     <i class="fa fa-download m-1 "></i> Excel </a>

     
</td> </tr>
    <tr class="  text-white text-center bg-hupp">
      <th scope="col">No :</th>

      <th scope="col ">instrument</th>
      <th scope="col">refférence</th>
      <th scope="col">Periodicité actuelle</th>

      <th scope="col">Optimisé</th>
      <th scope="col">date dernier Etallonage</th>
      <th scope="col"></th>
  



    </tr>
  </thead>
  <tbody>
    
   

          @php
          $ii=1;
          
     

@endphp



@foreach ($instrumentsActive as $instrument)

<tr class='text-center '>
<td class='align-middle'>{{$ii}}</td>
  <td class='align-middle'>{{$instrument->nom}}</td>
 <td class='align-middle'>{{$instrument->ref}}</td>
  <td class='align-middle'>{{$instrument->perio_actu}} mois</td>

  <td class='align-middle'>{{floor(${"balance".$ii}) }} mois</td>
  <td class='align-middle'>{{$instrument->date_dernier}}</td>
  <td class="align-middle text-right"> 
    <a class="btn btn-danger" href="/instruments/delete/{{$instrument->id}}">
      <i class="fa fa-trash"></i> Effacer
      </a>
<a class="  btn btn-info text-white " href="/instruments/edit/{{$instrument->id}}" > 
<i class="fa fa-pencil"></i> modifier
</a></td>







@php
  $ii=$ii+1;
@endphp

@endforeach
        </tr>
     

     
    
 
    
  </tbody>
</table>

</div>@endif

@endforeach
<div class=" footer ">
  <div style="width:100%;height:300px;"></div>
</div>
</div>


<script>
  function exportF(elem,cati) {
  var table = document.getElementById("table"+cati);
  var html = table.outerHTML;
  var url = 'data:application/vnd.ms-excel,' + escape(html); // Set your html table into url 
  elem.setAttribute("href", url);
  elem.setAttribute("download", "export"+cati+"xls"); // Choose the file name
  return false;
}
</script>