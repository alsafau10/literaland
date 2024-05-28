<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style type="text/css">
      .div-pad{
        padding: 15px;
      }
      .edit-h3{
        color: white;
        padding: 35px;
        font-size: 40px;
        font-weight: bold;
      }
      label{
        display: inline-block;
        width: 200px;
      }
      div{
        margin: auto;
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
        <div class="text-center div-center">
            <h3 class="edit-h3">
                Add Book
            </h3>

            <form action="{{url('store_book')}}" method="post" enctype="multipart/form-data">
              @csrf
                <div class="div-pad">
                    <label>Book Title</label>
                    <input type="text" name="book_name">
                </div>
                <div class="div-pad">
                    <label>Author Name</label>
                    <input type="text" name="author_name">
                </div>
                <div class="div-pad">
                    <label>Quantity</label>
                    <input type="number" name="quantity">
                </div>
                <div class="div-pad">
                    <label>Description</label>
                    <textarea name="description" id=""></textarea>
                </div>
                <div class="div-pad">
                  <label>Category</label>
                  <Select name="category" required>
                    <option>Select the category</option>
                    @foreach($data as $data)
                    <option value="{{$data->id}}" >{{$data->cat_title}}</option>
                    @endforeach
                  </Select>
                </div>
                <div class="div-pad">
                    <label>Book Image</label>
                    <input type="file" name="book_img">
                </div>
                <div class="div-pad">
                    <label>Author Image</label>
                    <input type="file" name="author_img">
                </div>
                <div class="div-pad">
                  <input type="submit" value="Add Book" class="btn btn-info">
                </div>
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