<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
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
                {{-- <x-jet-welcome /> --}}
                <div class="p-4">
                    <div class="d-flex justify-content-between mb-3">
                        <h5>{{ __('Products') }}</h5>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#addProduct">Add Product</button>
                    </div>
                    <table class="table table-striped">
                        <thead>
                            <th>#</th>
                            <th>Title</th>
                            <th>Vendor</th>
                            <th>Price</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @php
                                $i = 0;
                            @endphp
                            @foreach ($products as $prod)
                                @php
                                    $i++;
                                @endphp
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('thumbnail/'.$prod->image) }}" alt="image" class="rounded-circle mr-2" height="50" width="50">
                                            {{ $prod->title }}
                                        </div>
                                    </td>
                                    <td>{{ $prod->vendor->name }}</td>
                                    <td>{{ $prod->price }} {{ $prod->currency }}</td>
                                    <td>
                                        <a href="#edit{{ $prod->id }}" data-toggle="modal">Edit</a> |
                                        <a href="#delete-{{ $prod->id }}" data-toggle="modal" class="text-danger">Delete</a>
                                    </td>
                                </tr>
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
                        </tbody>
                    </table>
                </div>
                <div class="p-4">
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
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
    @section('scripts')
        <script src="{{ asset('/js/dropify.js') }}"></script>
        <script>
            $('.dropify').dropify();
        </script>
    @endsection
</x-app-layout>
