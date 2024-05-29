<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style type="text/css">
        *, *::before, *::after {
          box-sizing: border-box;
        }
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
            width: auto;
            height: auto;
            margin: auto;
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
            height: inherit;
            object-fit: cover;
            border: 3px solid #8a8d93;
            text-align: center;
            
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
                Update Book's Data
            </h2>

            <table class="table-class">
                <tr>
                <form action="{{url('update_book',$book->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <td>
                    <div class="container div-pad">
                        <label>Book Title</label>
                        <br>
                        <input type="text" name="book_name" value="{{$book->title}}">
                    </div>
                </td>
                <td>
                    <div class="container div-pad">
                        <label>Author Name</label>
                        <br>
                        <input type="text" name="author_name" value="{{$book->author_name}}">
                    </div>
                </td>
                <td>
                    <div class="container div-pad">
                        <label>Quantity</label>
                        <br>
                        <input type="number" name="quantity" value="{{$book->quantity}}">
                    </div>
                </td>
                <td>
                    <div class="container div-pad">
                        <label>Description</label>
                        <br>
                        <textarea name="description">{{$book->description}}</textarea>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="container div-pad">
                    <label>Category</label>
                    <Select name="category" required>
                        <option value="{{$book->category_id}}">{{$book->category->cat_title}}</option>
                        <option></option>
                        @foreach($category as $category)
                        <option value="{{$category->id}}" >{{$category->cat_title}}</option>
                        @endforeach
                    </Select>
                    </div>
                </td>
                <td>
                    <div class="container div-pad">
                        <label>Book Image</label>
                        <br>
                        <img src="/book/{{$book->book_img}}" alt="img_of_books">
                        <input type="file" name="book_img">
                    </div>
                </td>
                <td>
                    <div class="container div-pad">
                        <label>Author Image</label>
                        <img src="/author/{{$book->author_img}}" alt="img_of_books">
                        <input type="file" name="author_img">
                    </div>
                </td>
                <td>
                    <div class="container div-pad submit-button">
                    <input type="submit" value="Update Book" class="btn btn-info">
                    </div>
                </td>
            </form>
                </tr>
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
    <!-- Javascript files end -->
  </body>
</html>