
<!doctype html>
<html lang="en">
  <head>
    <title>HUPPHARMA OPPERET- @yield('title')</title>
    <link href="/css/app.css" rel="stylesheet">
    <script src="/js/app.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&display=swap" rel="stylesheet"> <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
<style>

body { 
  background: url("{{ asset('images/bg1.jpg') }}") no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover; 
}
#loading {width: 100%;height: 100%;top: 0px;left: 0px;position: fixed;display: block; z-index: 99}

#loading-image {position: absolute;top: 40%;left: 45%;z-index: 100} 
/* The side navigation menu */

.sidebar a:hover:not(.active) {
      background-color: #555;
      color:black;
  background-color:white;
;
  }


  .sidebar a:hover:not(.active) i {
     color:#653A7B }

.sidebar {
      margin: 0;
      padding: 0;
      width: 200px;
      background-color: #f1f1f1;
      position: fixed;
      height: 100%;
      overflow: auto;
      font-family: 'Nunito', sans-serif;    }
    
    /* Sidebar links */
    .sidebar a {
      display: block;
      color: #66788A;

      padding: 8px;
      text-decoration: none;
      margin-left: 15px;
    
    


    }
    
    /* Active/current link */
    .sidebar a.active i{
     color:#653A7B;
    }

    .sidebar a.active {
      background-color:lavender;
      color:black;
      border-left: 3px solid #39ABDF;
      border-radius: 5px 0px 0px 5px;
      margin-left: 2px ;

    }

   
    
    .bg-hupp{      background-color:mediumpurple;
}
    /* Links on mouse-over */
  
    
    /* Page content. The value of the margin-left property should match the value of the sidebar's width property */
    div.content {
      margin-left: 200px;
      padding: 1px 16px;
      height: 1000px;
    }
    
    /* On screens that are less than 700px wide, make the sidebar into a topbar */
    @media screen and (max-width: 700px) {
      .sidebar {
        width: 100%;
        height: auto;
        position: relative;
      }
      .sidebar a {float: left;
      }
      div.content {margin-left: 0;}
    }
    
    /* On screens that are less than 400px, display the bar vertically, instead of horizontally */
    @media screen and (max-width: 400px) {
      .sidebar a {
        text-align: center;
        float: none;
      }
    }
</style>

  </head>



  <body>

    <div id="loading" style="width: 100%; height:100%"  class="bg-white">
      <img id="loading-image" width="150px" height="150px" src="http://www.abyssindetanger.com/wp-content/themes/spontaneous/img/global/loading-gallery.gif" alt="Loading..." />
      </div> 
   <script type="application/javascript">

$(window).on("load",function(){
     $("#loading").fadeOut(2000);
});
$(window).on("load",function(){
     $("#loading-image").fadeOut(1500);
});
</script>

@yield('sidebar')


  
    @yield('content')


   



  
       <script src="/js/app.js"></script>



  </body>
</html>