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
        .container.description{
            overflow: hidden;
            text-overflow: ellipsis;
            
            
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
                    <th>No</th>
                    <th>User's Name</th>
                    <th>User's Email</th>
                    <th>Book's Title</th>
                    <th>Book's Quantity</th>
                    <th>Request Status</th>
                </tr>
                @foreach($borrow as $key => $borrow)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$borrow->user->name}}</td>
                    <td>{{$borrow->user->email}}</td>
                    <td>{{$borrow->book->title}}</td>
                    <td>{{$borrow->book->quantity}}</td>
                    <td>
                        <div>
                            {{$borrow->status}}
                        </div>
                        
                    </td>
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
    <!-- Javascript files end -->
  </body>
</html>