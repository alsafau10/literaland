<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style type="text/css">
        img {
            height: 100px;
            width: 200px;
        }
        div{
            margin:auto;
        }
        .name-header{
            color:white;
            font-size:25px;
            font-weight: bold;
        }
        .table-class{
            margin: auto;
            margin-top: 50px;
            width: 80%;
            border: 1px solid white;
        }
        th{
            background-color: #2d3035;
            color:gray;
            font-weight: bolder;
            padding: 10px;
            border: 3px solid #db6574;
        }
        .container{
            justify-content: center;
            text-align: center;
            width: 150px;
            height: 200px;
            margin: 5px;
        }
        .container.author{
            width: 150px;
            height: 150px;
            justify-content: center;
            text-align: center;
            border-radius:50% ;
            overflow: hidden;
        }
        .container img{
            height: 100%;
            object-fit: cover;
            border: 3px solid #8a8d93;
            
        }
        td{
            border: 3px solid #db6574;
            padding: 10px;
            color: #8a8d93;
            font-weight: bold;
            
        }
    
    </style>
  </head>'
  <body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Dashboard</h2>
          </div>
        </div>
        <!-- section start -->
        @if (session()->has('message'))
            <div class="alert alert-success">
            {{session()->get('message')}}
            <button type="button" class="close" data-dismiss="alert" 
            aria-hidden="true">x</button>
            </div>
        @endif

        <div class="text-center">
            <h2 class="name-header">
                Show Books Data
            </h2>

            <table class="table-class">
                <tr class="table-row">
                    <th>Book Title</th>
                    <th>Author's Name</th>
                    <th>Quantity</th>
                    <th>Description</th>
                    <th>Category</th>
                    <th>Author's Image</th>
                    <th>Book's Image</th>
                    <th>Action</th>
                </tr>
                @foreach($book as $book)
                <tr>
                    <td>{{$book->title}}</td>
                    <td>{{$book->author_name}}</td>
                    <td>{{$book->quantity}}</td>
                    <td>{{$book->description}}</td>
                    <td>{{$book->category->cat_title}}</td>
                    <td>
                        <div class="container author">
                            <img src="author/{{$book->author_img}}" alt="img_of_authors" class="img-fluid rounded-circle">
                        </div>
                    </td>
                    <td>
                        <div class="container">
                            <img src="book/{{$book->book_img}}" alt="img_of_books">
                        </div>
                    </td>
                    <td><a onclick=confirmation(event) href="{{url('delete_book',$book->id)}}" class = "btn btn-danger">Delete</a></td>
                </tr>
                @endforeach
            </table>
        </div>
        <!-- section end -->

        <!-- footer start -->
        @include('admin.footer')
        <!-- footer end -->
      </div>
    </div>
    <!-- JavaScript files-->
    @include('admin.script')

    <script type="text/javascript">
        function confirmation(ev){
            ev.preventDefault();
            let urlToDirect = ev.currentTarget.getAttribute('href');
            console.log(urlToDirect);

            swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this category!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                })
                .then((willDelete) => {
                if (willDelete) {
                    swal("Your category has been deleted!", {
                    icon: "success",
                    });
                    window.location.href = urlToDirect;
                } else {
                    swal("Canceled");
                }
});
        }
    
    </script>
    <!-- Javascript files end -->
  </body>
</html>