<nav class="navbar navbar-expand-md navbar-light mt-5" style="background: #f2a29f" >
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <i class="fa fa-home"></i> Home
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent1">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
  @foreach($cats as $cat)
      <li class="nav-item">
          <a href="{{route('product.cat',['id'=>$cat->id])}}" class="nav-link">{{$cat->cat_name}}</a>

      </li>
      @endforeach
            </ul>
        </div>
    </div>
</nav>