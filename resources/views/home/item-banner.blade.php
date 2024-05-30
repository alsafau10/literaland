<div class="currently-market">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="section-heading">
          <div class="line-dec"></div>
          <h2><em>Books</em> Currently In The LiteraLand.</h2>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="filters">
          <ul>
            <li data-filter="*" class="active">All Books</li>
          </ul>
        </div>
      </div>



      @foreach($data as $data)
      <div class="col-lg-6 currently-market-item all msc">
        <div class="item">
          <div class="left-image">
            <img src="book/{{$data->book_img}}" alt="" style="border-radius: 20px; min-width: 195px;">
          </div>
          <div class="right-content">
            <h4>{{$data->title}}</h4>
            <span class="author">
              <img src="author/{{$data->author_img}}" alt="" style="max-width: 50px; border-radius: 50%;">
              <h6>{{$data->author_name}}</h6>
            </span>
            <div class="line-dec"></div>
            <span class="bid">
              Current Available<br><strong>{{$data->quantity}}</strong><br>
            </span>
            <!-- <span class="ends">
                    Total<br><strong>20</strong><br>
                  </span> -->
            <div class="text-button">
              <a href="{{url('details',$data->id)}}">View Item Details</a>
            </div>
            <div class="text-center text-button">
              <a href="{{url('book_request',$data->id)}}" class="">
                <dl>Borrow book</dl>
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