<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style type="text/css">
        .cat-label{
            font-size: 30px;
            font-weight: bold;
            color: white;
            padding: 30px;
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
        <div class="text-center">
        <h1 class="cat-label">Edit Category</h1>
            <form action="{{url('update_category',$data->id)}}" method="Post">
                
            @csrf
                <span style="padding-right:15px;">
                <label>
                  Category
                </label>
                <input type="text" name="cat_edit" value="{{$data->cat_title}}">
                </span>
                <input class="btn btn-info" type="submit" value="Edit Category">
            </form>
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