
<!DOCTYPE html5>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>smartShop</title>
    <link rel="icon" type="image/png" href="{{asset('images/fav.png')}}">

<!-- Bootstrap icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">


<script src="//unpkg.com/alpinejs" defer></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<style type="text/css">
.nav-item:hover{
    border-bottom:2px solid #ED3237;
    color:#eaed32
    
}



img.slider-img {
  height: 400px; !important;
  
}


/*.custom-product {
height: 600px;
}*/

.carousel-caption {
 
  width:40%;
  opacity: 0.8;
 
  margin-left:550px;
  margin-bottom:100px;
}

.item-1 {
  font-size: 60px;
  color:black;
}

.trending-image {
  height: 200px;
  padding:20px;
  text-align:center;
  display: block;
  
  
}





.overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color:#ED3237;
  opacity:0.9;
  overflow: hidden;
  width: 100%;
  height: 0;
  transition: .5s ease;
}



.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}



.trending-item:hover .overlay {
  height: 100%;
}

.trending-item {
  position: relative;

  float:left;
}

.trending-wrapper {
  margin: 30px;
  

}
.trending-text {
  text-align: center;
}

.item-1 {

  opacity: 0.7;
}

.item-2 {
 color:black;
  opacity: 0.7;
}


.cart-list-devider{
  border-bottom: 1px solid #ccc;
  margin-bottom: 20px;
  padding-bottom: 20px;
}

.remove-cart {
  margin-top: 50px;
}







</style>

<script>
    
</script>

</head>

<body>




    <main>
        {{$slot}}
    </main>


   

   

       
   
</body>
</html>