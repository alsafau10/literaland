<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style type="text/css">
        .cat-label{
            font-size: 30px;
            font-weight: bold;
            color: white;
            padding: 30px;
        }
        .center{
            margin: auto;
            margin-top: 50px;
            width: 50%;
            border: 1px solid white;
        }
        th{
            background-color: white;
            color:gray;
            font-weight: bolder;
            padding: 10px;
        }
        td{
            border: 1px solid white;
            padding: 10px;
            color: white;
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
            <div class=text-center>
            @if (session()->has('message'))
            <div class="alert alert-success">
            {{session()->get('message')}}
            <button type="button" class="close" data-dismiss="alert" 
            aria-hidden="true">x</button>
            </div>
            @endif
            <div id="add-form">
            <h1 class="cat-label">Add Category</h1>
            <form action="{{url('add_category')}}" method="Post">
                
            @csrf
                <span style="padding-right:15px;">
                <label>
                    Category
                </label>
                <input type="text" name="category">
                </span>
                <input class="btn btn-primary" type="submit" value="Add Category">
            </form>
            </div>
            <div>
                <table class="center text-center">
                    <tr>
                        <th>Category Name</th>
                        <th>Action</th>
                    </tr>
                    @foreach($data as $data)
                    <tr>
                        <td>{{$data->cat_title}}</td>
                        <td>
                            <a onclick=confirmation(event) href="{{url('cat_delete',$data->id)}}" class="btn btn-danger">delete</a>
                            <a href="{{url('edit_data',$data->id)}}"class="btn btn-info">Update</a>
                    
                        </td>
                        
                    </tr>
                    @endforeach
                </table>
            </div>
           </div>
          </div>
        </div>
        <!-- section start -->
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