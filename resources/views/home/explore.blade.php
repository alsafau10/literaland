<!DOCTYPE html>
<html lang="en">

@include('home.css')
<style type="text/css">
    .borrow-book {
        padding: 15px;
        margin: 2px;
    }

    .b-book {
        background-color: #4e5052;
        padding: 5px 10px;
        margin: 3px;
        color: white;
        font-weight: bold;
        border-radius: 15px;
        border: 1px solid gray;
        text-decoration: none;
        height: auto;
    }

    .b-book:hover,
    .b-book:active,
    .b-book:focus {
        text-decoration: none;
        background-color: #7453fc;
        border: 1px solid white;
        color: white;
    }
</style>

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

    <!-- header -->
    @include('home.header')
    <!-- main banner -->

    <div class="discover-items">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-heading">

                        <h2>Discover Some Of Our <em>Items</em>.</h2>
                    </div>

                </div>
                <div class="col-lg-7">
                    <form id="search-form" method="get" action="{{url('search')}}">
                        <div class="row">
                            <div class="col-lg-3">
                                <fieldset>
                                </fieldset>
                            </div>
                            <div class="col-lg-4">
                                <fieldset>
                                    <input type="text" name="keyword" class="searchText" placeholder="Type Something..." autocomplete="on" value="">
                                </fieldset>
                            </div>
                            <div class="col-lg-3">
                                <fieldset>
                                    <select name="Category" class="form-select" aria-label="Default select example" id="chooseCategory" onchange="this.form.click()">
                                        <option selected value="All Categories">All Categories</option>
                                        @foreach($categories as $categ)
                                        <option value="{{$categ->id}}">{{$categ->cat_title}}</option>
                                        @endforeach
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-lg-2">
                                <fieldset>
                                    <button class="main-button" type="submit">Search</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="currently-market">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                @if($books->isEmpty())
                                <div class="section-heading">
                                    <div class="line-dec"></div>
                                    <h2><em>Books</em> Not Found.</h2>
                                </div>

                                @else
                                <div class="section-heading">
                                    <div class="line-dec"></div>
                                    <h2><em>Books</em> Currently In The LiteraLand.</h2>
                                </div>
                                @endif
                            </div>
                            <div class="col-lg-6">
                                <div class="filters">
                                    <ul>
                                        <li data-filter="*" class="active">All Books</li>
                                    </ul>
                                </div>
                            </div>

                            @foreach($books as $data)
                            <div class="col-lg-6 currently-market-item all msc">
                                <div class="item">
                                    <div class="left-image">
                                        <img src="book/{{$data->book_img}}" alt="" style="border-radius: 20px; min-width: 195px;padding-top:50px">
                                    </div>
                                    <div class="right-content">
                                        <h4>{{$data->title}}</h4>
                                        <span class="author">
                                            <img src="author/{{$data->author_img}}" alt="" style="max-width: 50px; border-radius: 50%; padding-left: 0px;">
                                            <h6>{{$data->author_name}}</h6>
                                        </span>
                                        <div class="line-dec"></div>
                                        <span class="bid">
                                            Current Available<br><strong>{{$data->quantity}}</strong><br>
                                        </span>
                                        <div class="text-button">
                                            <a href="{{url('details',$data->id)}}">View Item Details</a>
                                        </div>
                                        <div class="text-center borrow-book">
                                            <a href="{{url('book_request',$data->id)}}" class="b-book">
                                                Borrow book
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach


                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>


    <!-- items-banner -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright © 2024</p>
                </div>
            </div>
        </div>
    </footer>


    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    @include('home.script')

</body>

</html>