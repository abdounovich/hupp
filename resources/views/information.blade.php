@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
<div class="sidebar bg-white  border-right border-secondary ">
  <div class="mt-0 bg-white" style="height:100px"> 
      <img src="{{ asset('images/logo_hupp.bmp') }}" class=" ml-1 mb-2 mt-2" width="160 " height="110" alt="">
    </div> 
    
 <div class="mt-4 " style="font-family: 'Roboto', sans-serif;"> 
 <a  href="/"> <i style=" font-size: 20px " class="fa fa-home p-2  align-middle ">  </i>Acceuil</a>
 <a  href="{{route('instruments.index')}}">
  <i style="font-size: 22px" class="fa fa-thermometer p-2 ml-1 align-middle"> 
   </i>instruments</a>
   <a  href="{{route('criters.index')}}">
    <i style="font-size: 22px" class="fa fa-navicon p-2  align-middle">  </i>Criteres </a>
    <a  href="{{route('categories.index')}}">
    <i style="font-size: 22px" class="fa fa-server p-2  align-middle">  </i>Catégories </a>
    <a  href="#">
      <i style="font-size: 22px" class="fa fa-cog p-2  align-middle">  </i>Parametres </a>
   
       <a class="active shadow-sm " href="{{route('instruments.index')}}">
        <i class="fa fa-book  text-center p-2  align-middle" style="font-size: 22px">
         </i>Doucumentation </a>
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
<style>.text-hupp{color:mediumorchid}</style>
<div class="content bg-white text-dark" style="height: 100%">
  

    <div class="bd-intro ps-lg-4">
        <div class="d-md-flex flex-md-row-reverse align-items-center justify-content-between">
          <a class="btn btn-sm btn-bd-light mb-2 mb-md-0" href="" title="View and edit this file on GitHub" target="_blank" rel="noopener"></a>
          <h1 class="bd-title mt-4 text-hupp" id="content">OPPERET</h1>
        </div>
        <p class="bd-lead">OPtimisation des PERiodicités d'ETalonnage, est une méthode qui permet d'estimer le meilleur moment pour ré-étalonner les instruments de mesure. Ni trop tôt pour éviter un surcoût, ni trop tard pour éviter une mesure non valable. Cette méthode ne se contente pas seulement de suivre la dérive d'un instrument. Elle intègre aussi la notion de risque et tous les facteurs qui peuvent dégrader ou améliorer la qualité de la mesure, sans oublier les contraintes de coût ou d'organisation. Pour les initiateurs de cette méthode, c'est un peu de bon sens mis en équation. 
            OPPERET est une approche fondée sur l'analyse du risque qui permet d'optimiser les périodicités d'étalonnage équipement par équipement. 
        </p><p>Pour mettre en œuvre cette méthode, il est nécessaire de définir les différents critères qui interviennent dans le choix de la périodicité. 
            Ces critères peuvent être de différentes natures : métrologique, économique, organisationnelle, risque accepté par l'entreprise.
            </p><p>l'idée de départ est de proposer une méthode de détermination de la périodicité de vérification d'un instrument de mesure ou d'une famille d'instruments de mesure qui tienne compte des différents facteurs qui peuvent influencer cette périodicité.
            La méthode OPPERET permet une optimisation (parfois non négligeable) des périodicités d’étalonnage mais requiert pour cela une bonne connaissance et une analyse détaillée de ces processus de mesure.</p>

      </div>

      <div class="bd-intro ps-lg-4">
        <div class="d-md-flex flex-md-row-reverse align-items-center justify-content-between">
          <a class="btn btn-sm btn-bd-light mb-2 mb-md-0" href="" title="View and edit this file on GitHub" target="_blank" rel="noopener"></a>
          <h1 class="bd-title text-hupp" id="content">les facteurs d’influence prédéfinis :</h1>
        </div>
            <ol>
                <li> 	Gravité des conséquences d’une mesure erronée : Il s'agit de prendre la mesure des conséquences liées à des problèmes sur les mesures.
            </li>
        <li>            	Capabilité du processus de mesure : La capabilité des processus de mesure se définit comme le rapport entre la tolérance à vérifier par rapport à l’incertitude de mesure qui s’exprime à l’utilisation de l’instrument. A priori, plus le coefficient de capabilité est petit, plus le risque de se tromper en déclarant la conformité est grand.
        </li>
        <li>            	Capabilité de l’équipement de mesure : Il s’agit du « poids » de l’instrument de mesure dans le processus de mesure qui l’utilise. Ce poids peut être défini lors de l’évaluation de l’incertitude de mesure en comparant la variance due à l’instrument à la somme des variances qui composent le processus. Il peut être également estimé en comparant l’E.M.T (Erreur Maximale Tolérée) à  l’incertitude de mesure.
        </li>
        <li>           	Dérive de l’équipement : La dérive représente l’évolution de l’instrument dans le temps. Il convient de comparer cette dérive, qui peut être estimée rapidement par un modèle des moindres carrés, à l’E.M.T de l’instrument. Il convient également de considérer la position de l’instrument par rapport à son E.M.T. Un instrument qui dérive et qui est proche de sa limite (son E.M.T) est plus à risque qu’un instrument qui dérive de la même façon mais qui est éloigné de son E.M.T.
        </li>
        <li>            	Intervention sur l’équipement : Cette information est souvent disponible sur la fiche de vie  des instruments. Depuis qu’il est suivi, l’instrument a-t-il fait l’objet d’opérations d’ajustage ou de réparation ? Le constructeur peut également donner des informations sur ce sujet.
        </li>
        <li>            	Facteurs permettant de déceler des anomalies 
        </li>
        <li>           	Facteurs aggravants 
        </li>
        <li>            	Contraintes de coûts.
        </li>
<li>           	Contraintes opérationnelles.
</li>

        </ol>
            Choix des facteurs à retenir par rapport à la famille d’appareils étudiés.

      </div>
  





<p></p>

      <div class="bd-intro ps-lg-4">
        <div class="d-md-flex flex-md-row-reverse align-items-center justify-content-between">
          <a class="btn btn-sm btn-bd-light mb-2 mb-md-0" href="" title="View and edit this file on GitHub" target="_blank" rel="noopener"></a>
          <h1 class="bd-title text-hupp" id="content">La cotation de l’importance des facteurs d’influence :</h1>
        </div>
        <p class="bd-lead">Pour chaque instrument de mesure, on attribue à chacun des facteurs d’influence une cotation comprise entre :
            «  -2 et 2  »
            <br>Par convention :
            <ul><li>(-2) tend à faire diminuer la périodicité (criticité haute du facteur) 
            </li><li>( 2)  tend à faire augmenter la périodicité (criticité basse du facteur)
            </li></ul>
            </p>

      </div>



      
<p></p>

<div class="bd-intro ps-lg-4">
  <div class="d-md-flex flex-md-row-reverse align-items-center justify-content-between">
    <a class="btn btn-sm btn-bd-light mb-2 mb-md-0" href="" title="View and edit this file on GitHub" target="_blank" rel="noopener"></a>
    <h1 class="bd-title text-hupp" id="content">Pondération des critères (facteurs d’influence) :</h1>
  </div>


  
  
  <p class="bd-lead">  Les critères ont des niveaux d’importance différents, ils peuvent être affectés de facteurs de pondération P afin de correspondre aux exigences de l’organisme en la matière.

      <ul><li>P(C1) = 2 (importance de la gravité des erreurs de mesure)
    </li><li>P(C2) = 1</li></ul>
      </p>

</div>





</div>








@endsection


 