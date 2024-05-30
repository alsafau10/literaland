<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="author" content="templatemo">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <title>LiteraLand (Literature Land) - Details</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/templatemo-liberty-market.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <style type="text/css">
        .container {
            color: white;
            text-align: center;
            justify-content: center;
            /* padding: 10px 10px; */
        }

        table {
            width: inherit;
            background-color: rgba(181, 181, 181, .3);
            text-align: center;
            justify-content: center;
            border-radius: 5px;
        }

        th {
            background-color: #7453fc;
            border: 1px solid white;
            padding: 5px;
        }

        td {
            border-bottom: 2px solid rgb(33, 32, 36);
        }
    </style>
    <!--

TemplateMo 577 Liberty Market

https://templatemo.com/tm-577-liberty-market

-->
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    @include('home.header')
    <!-- ***** Header Area End ***** -->


    <div class="item-details-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <div class="line-dec"></div>
                        <h2>View Details <em>History</em> Here.</h2>
                    </div>
                </div>
                <div class="container">
                    <table>
                        <tr>
                            <th>No</th>
                            <th>Book's Name</th>
                            <th>Author's Name</th>
                            <th>Confirmation Status</th>
                            <th>Book's Image</th>
                            <th>Download Link</th>
                        </tr>
                        @foreach($borrow as $key => $borrow)
                        <tr>
                            <td>{{$key + 1}}</td>
                            <td>{{$borrow->book->title}}</td>
                            <td>{{$borrow->book->author_name}}</td>
                            <td>{{$borrow->status}}</td>
                            <td>
                                <img src="/book/{{$borrow->book->book_img}}" alt="">
                            </td>
                            @if($borrow->status == 'accepted')
                            <td><a href="#">Download Book</a></td>
                            @else
                            <td>-</td>
                            @endif
                        </tr>
                        @endforeach
                    </table>
                </div>

            </div>

        </div>
    </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright © 2024
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>

    <script src="{{asset('assets/js/isotope.min.js')}}"></script>
    <script src="{{asset('assets/js/owl-carousel.js')}}"></script>

    <script src="{{asset('assets/js/tabs.js')}}"></script>
    <script src="{{asset('assets/js/popup.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
</body>

</html>