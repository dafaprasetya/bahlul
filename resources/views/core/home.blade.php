<!DOCTYPE html>
<html lang="en">

<head>
    <title>Jasa pembuatan website</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ7bpsnoYKsXWHTPjKy9QwrVK7s_wlOIqhvkg&usqp=CAU" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">


</head>

<body>
    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script>
        var swiper = new Swiper('.back-half .swiper-container', {
            slidesPerView: 3,
            spaceBetween: 30,
            slidesPerGroup: 1,
            calculateHeight: true,
            loop: true,
            pagination: {
                el: '.back-half .swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.back-half .next',
                prevEl: '.back-half .prev',
            },
            breakpoints: {
                1000: {
                    slidesPerView: 3,
                    spaceBetween: 10,
                },
                100: {
                    slidesPerView: 2,
                    spaceBetween: 5,
                },
            }
        });
        var swiper2 = new Swiper('.back-half-2 .swiper-container', {
            slidesPerView: 3,
            spaceBetween: 30,
            slidesPerGroup: 1,
            calculateHeight: true,
            loop: true,
            pagination: {
                el: '.back-half-2 .swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.back-half-2 .next',
                prevEl: '.back-half-2 .prev',
            },
            breakpoints: {
                1000: {
                    slidesPerView: 3,
                    spaceBetween: 10,
                },
                100: {
                    slidesPerView: 2,
                    spaceBetween: 5,
                },
            }
        });
    </script>
</body>

</html>
