<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
   <link
      href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Babylonica&family=Bangers&family=Bebas+Neue&family=Cormorant:wght@300;400;500;600;700&family=DM+Sans:wght@400;500;700&family=GFS+Didot&family=Inter:wght@100;300;400;500;600;700;800;900&family=Kaushan+Script&family=Maven+Pro:wght@400;500;600;800;900&family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Mukta:wght@200;300;400;500;600;700;800&family=Open+Sans:wght@300;400;500;600;700;800&family=Pacifico&family=Playfair+Display+SC:wght@400;700;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Raleway:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;700;900&family=Rubik+Burned&family=Russo+One&family=Wix+Madefor+Text:wght@400;500;600;700;800&display=swap"
      rel="stylesheet">
   <link rel="stylesheet" type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="stylesheet" href="{{asset('assets/front/css/main.min.css')}}">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   <title>@yield('title')</title>
</head>

<body>
    @yield('inlines')
    @include('front.includes.head')
    @yield('content')


   <x-home-footer-component/>
   @include('front.includes.foot')
</body>

</html>
