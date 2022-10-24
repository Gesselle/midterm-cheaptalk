<nav class="navbar navbar-expand-lg bg-primary mb-2 p-1">
    <div class="container-fluid">
      <a class="navbar-brand" id="s1" href="/"><h1>Midterm Cheaptalk</h1></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
          @if (auth()->check())
          <a class="nav-link" id="s1" href="/">Home</a>
          <a class="nav-link" id="s1"  href="/home">Posts</a>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="s1" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Categories
            </a>
            <ul class="dropdown-menu">
              @foreach (App\Models\Category::whereHas('posts')->get()->sortBy('category') as $category)
              <li><a class="dropdown-item" href="{{url('categories', ['id'=>$category->id])}}">{{$category->category}}</a></li> 
              @endforeach
            </ul>
          </li>
          <a class="nav-link" id="s1" href="/authors">Authors</a>
          <li class="nav-item dropdown btn btn-sm btn-primary">
            <a class="nav-link dropdown-toggle bg-dark" id="s1" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{auth()->user()->name}}
            </a>
            <ul class="dropdown-menu">
             
              <li><a class="dropdown-item" href="{{url('/user/create-post')}}">{{ __('Create Post') }}</a></li> 
              <li><a class="dropdown-item" href="{{url('authors', ['id'=>auth()->user()->id])}}">{{ __('My Posts') }}</a></li> 
              <li><a class="dropdown-item" href="{{('/logout')}}">{{ __('Logout') }}</a></li> 
            </ul>
          </li>

          {{-- <a class="nav-link btn btn-warning" href="{{'/logout'}}">Logout</a>   --}}
          @else
          <a class="nav-link"  id="s1" href="/">Home</a>
          <a class="nav-link" id="s1" href="/home">Posts</a>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="s1" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Categories
            </a>
            <ul class="dropdown-menu">
              @foreach (App\Models\Category::whereHas('posts')->get()->sortBy('category') as $category)
              <li><a class="dropdown-item" href="{{url('categories', ['id'=>$category->id])}}">{{$category->category}}</a></li> 
              @endforeach
            </ul>
          </li>
          <a class="nav-link" id="s1" href="/authors">Authors</a>
          <a class="nav-link" id="s1" href="/login">Login</a> 
          <a class="nav-link" id="s1" href="/register">Register</a>
              
          @endif
          
        </div>
      </div>
    </div>
  </nav>

  <style>
    #s1{
      color: white;
    }
  </style>