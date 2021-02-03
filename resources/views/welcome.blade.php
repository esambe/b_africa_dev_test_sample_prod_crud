<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bridge Africa</title>

        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.js" defer></script>
<!-- jQuery and JS bundle w/ Popper.js -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body class="antialiased">
        <nav class="navbar navbar-expand-lg navbar-light bg-light" id="custom-nav">
            <div class="container">
                <a class="navbar-brand" href="#">Bridge Africa</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <form class="form my-lg-0">
                        <div class="input-group search">
                            <input type="text" class="form-control"
                                placeholder="Search bridge Africa" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button" id="search-btn"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#"><i class="fa fa-home color-brand"></i> Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-archive color-brand"></i> Marketplace</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-comment color-brand"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-bell color-brand"></i></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ ucfirst(Auth::user()->name) }}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    this.closest('form').submit();"> <i class="fa fa-sign-out"></i> {{ __('Logout') }}</i></a>
                            </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid-c mt-3">
            <ul class="nav nav-tabs" id="custom-pill">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Business</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Inbox</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Notifications</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pending posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Insides</a>
                </li>
            </ul>
        </div>
        <hr class="top-hr">
        <div class="container hero-section p-0">
            <div class="d-flex">
                <div class="img-grid">
                    <img src="https://i1.wp.com/edgenetworks.in/wp-content/uploads/2016/11/Startup.jpg?fit=996%2C562&ssl=1" alt="slide-image">
                </div>
                <div class="img-grid">
                    <img src="https://www.amarketforce.com/wp-content/uploads/2018/01/B2B-Importance.jpg" alt="slide-image">
                </div>
                <div class="img-grid">
                    <img src="https://www.commercient.com/wp-content/uploads/2018/08/4-Tips-to-Open-New-Markets-and-Predict-Business-Growth-Opportunities.jpg" alt="slide-image">
                </div>
                <div class="img-grid">
                    <img src="https://africabusinesscommunities.com/Images/2018/women_traders.jpg" alt="slide-image">
                </div>
            </div>
            <div class="relative-widget">
                <button class="rounded">&plus; Add photos</button>
                <button class="rounded">See all</button>
            </div>
        </div>
        <div class="container d-flex align-items-center justify-content-between mb-3 p-0">
            <div class="d-flex align-items-center">
                <div class="avatar-img">
                    <img
                        src="https://www.nj.com/resizer/h8MrN0-Nw5dB5FOmMVGMmfVKFJo=/450x0/smart/cloudfront-us-east-1.images.arcpublishing.com/advancelocal/SJGKVE5UNVESVCW7BBOHKQCZVE.jpg"
                        alt="user image">
                </div>
                <div class="pl-3">
                    <div class="mb-0"><strong class="text-dark">{{ ucfirst(Auth::user()->name) }}</strong></div>
                    <small>@ {{ Auth::user()->name }}</small>
                </div>
            </div>
            <div>
                <button class="btn btn-success btn-bold-text">Promote</button>
                <button class="btn btn-warning btn-bold-text text-white">Contact</button>
                <button class="btn btn-brand btn-bold-text">Website</button>
            </div>
        </div>
        <div class="container">
            @if (session('status'))
                <div class="alert mb-3 alert-success alert-dismissible fade show">
                    {{ session('status') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            @if (session('danger'))
                <div class="alert alert-danger mb-3 alert-dismissible fade show">
                    {{ session('danger') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger mb-3 alert-dismissible fade show">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
        </div>
        <div class="container p-0 my-3">
            <nav class="nav nav-pills nav-justified" id="custom-tab">
                <a class="nav-item nav-link" href="#">Home</a>
                <a class="nav-item nav-link active" href="#">About</a>
                <a class="nav-item nav-link" href="#">Media</a>
                <a class="nav-item nav-link" href="#">Market place</a>
                <a class="nav-item nav-link" href="#">Networks</a>
                <a class="nav-item nav-link" href="#">Followers</a>
            </nav>
        </div>
        <div>
            {{-- @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endif
                </div>
            @endif --}}

            <div class="container p-0">
                <div class="card-body card m-0">
                    <div class="form-row">
                        <div class="card card-body bg-secondary d-flex align-content-center
                            align-items-center justify-content-center mb-2">
                            <div class="center-add text-center">
                                <span class="text-white text-lg">&oplus;</span>
                                <div><a href="#addProduct" data-toggle="modal" class="btn btn-link text-white">Add product / Services</a></div>
                            </div>
                        </div>
                        <div class="modal fade" id="addProduct" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="addProductLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="addProductLabel">Add Product</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <form action="{{ route('save') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-body">
                                            <input type="hidden" name="vendor_id" value="{{ Auth::user()->id }}">
                                            <div class="form-group">
                                                <label for="title">Title</label>
                                                <input type="text" name="title" class="form-control" placeholder="Product title">
                                            </div>
                                            <div class="form-group">
                                                <label for="price">Price</label>
                                                <input type="number" name="price" class="form-control" placeholder="Product price">
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control-">
                                                    <label class="custom-control-label" for="customCheck1">Is discount</label>
                                                    <input type="checkbox" name="is_discount" class="custom-control-input-2" id="customCheck1">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control-">
                                                    <label class="custom-control-label" for="customCheck2">Is service</label>
                                                    <input type="checkbox" name="is_service" class="custom-control-input-2" id="customCheck2">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control-">
                                                    <label class="custom-control-label" for="customCheck3">Is published</label>
                                                    <input type="checkbox" name="is_published" class="custom-control-input-2" id="customCheck3">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control-">
                                                    <label class="custom-control-label" for="customCheck4">In stock</label>
                                                    <input type="checkbox" name="in_stock" class="custom-control-input-2" id="customCheck4">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="description">Description</label>
                                                <textarea name="description" class="form-control" placeholder="Product decription"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <input type="file" name="image" class="dropify" data-provide="dropify" data-max-file-size="2M">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @foreach ($products as $prod)
                            <div class="col-sm-4 col-xl-4 mb-3">
                                <div class="card">
                                    <div class="card-action">
                                        <div class="dropdown">
                                            <button class="btn btn-secondary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#edit{{ $prod->id }}" data-toggle="modal"><i class="fa fa-edit"></i> Edit</a>
                                                <a class="dropdown-item" href="#delete-{{ $prod->id }}" data-toggle="modal"><i class="fa fa-trash"></i> Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="{{ asset('uploads/'.$prod->image) }}" alt="image"
                                        class="card-img-top" height="150">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h2 class="dark:text-gray-800 text-sm">{{ $prod->title }}</h2>
                                            @if ($prod->is_published)
                                                <span class="text-success" title="published"><i class="fa fa-check-circle"></i></span>
                                                @else
                                                <span class="text-danger" title="No published"><i class="fa fa-times-circle"></i></span>
                                            @endif
                                        </div>
                                        <div class="mt-2 text-sm">
                                            {{ $prod->description }}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="edit{{ $prod->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editLabel{{ $prod->id }}">{{ $prod->title }}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{ route('update.prod', $prod->id) }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-body">
                                            <input type="hidden" name="vendor_id" value="{{ Auth::user()->id }}">
                                            <div class="form-group">
                                                <label for="title">Title</label>
                                                <input type="text" name="title" class="form-control" value="{{ $prod->title }}" placeholder="Product title">
                                            </div>
                                            <div class="form-group">
                                                <label for="price">Price</label>
                                                <input type="number" name="price" class="form-control" value="{{ $prod->price }}" placeholder="Product price">
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control-">
                                                    <label class="custom-control-label" for="customCheck1">Is discount</label>
                                                    <input type="checkbox" name="is_discount" class="custom-control-input-2" id="customCheck1"
                                                        {{ $prod->is_discount ? 'checked' : '' }}>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control-">
                                                    <label class="custom-control-label" for="customCheck2">Is service</label>
                                                    <input type="checkbox" name="is_service" class="custom-control-input-2" id="customCheck2"
                                                    {{ $prod->is_service ? 'checked' : '' }} >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control-">
                                                    <label class="custom-control-label" for="customCheck3">Is published</label>
                                                    <input type="checkbox" name="is_published" class="custom-control-input-2" id="customCheck3"
                                                    {{ $prod->is_published ? 'checked' : '' }} >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control-">
                                                    <label class="custom-control-label" for="customCheck4">In stock</label>
                                                    <input type="checkbox" name="in_stock" class="custom-control-input-2" id="customCheck4"
                                                    {{ $prod->in_stock ? 'checked' : '' }}>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="description">Description</label>
                                                <textarea name="description" class="form-control" placeholder="Product decription">{{ $prod->description }}</textarea>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-6">
                                                    <img src="{{ asset('thumbnail/'.$prod->image) }}" alt="image" class="rounded" height="150" style="object-fit: cover">
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="file" name="image" class="dropify" data-provide="dropify" data-max-file-size="2M">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="delete-{{ $prod->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                    <div class="modal-body">
                                        Are you sure you want to delete <strong class="text-danger">{{ $prod->title }}</strong> ?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                        <a href="{{ route('delete.prod', $prod->id) }}" class="btn btn-danger">Yes Delete</a>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container">
                <div class="text-center">
                    <small>&copy; {{ date('Y') }}. Bridge Africa, All rights reserved</small>
                </div>
            </div>
            @yield('scripts')
        </footer>
    </body>
</html>
