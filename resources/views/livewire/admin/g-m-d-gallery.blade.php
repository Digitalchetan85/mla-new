<div class="my-5">
    <style>
        nav {
            text-align: center;
        }

        nav svg {
            height: 10px;
        }

        nav .hidden {
            display: block !important;
        }

        .select-none {
            margin-right: 5px !important;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="">GMD Gallery Images</h3>
                            </div>
                            <div class="col-md-6">
                                <div class="text-end">
                                    <a href="{{ route('admin.gmdaddgallery') }}" class="btn btn-primary">Add Images</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (Session::has('success'))
                        <div class="alert alert-success" role="alert">{{ session('success') }}</div>
                        @endif
                        <div class="table-responsive">
                            <table class="table table-bordered align-middle text-center">
                                <thead>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach ($gallery as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td><img src="{{ asset('assets/images/gmd-gallery') }}/{{ $user->image }}"
                                                alt="" class="img-responsive" width="400"></td>
                                        <td>
                                            <div class="text-center">
                                                <a
                                                    href="{{ route('admin.gmdeditproducts', ['product_slug' => $user->id]) }}"><i
                                                        class="fa fa-edit text-info"></i></a>
                                                {{-- <a href="{{ route('admin.editproducts', ['product_slug' => $product->slug]) }}"
                                                    wire:click.prevent='deleteProduct({{ $product->id }})'><i
                                                        class="fa fa-times text-danger"></i></a> --}}

                                                <!-- Button trigger modal -->
                                                {{-- <a class="" data-toggle="modal" data-target="#myModal">
                                                   
                                                </a> --}}
                                                <button type="button" class="btn btn-transparent" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="fa fa-times text-danger"></i>
                                                  </button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            {{-- <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close"><span
                                                                        aria-hidden="true">&times;</span></button>
                                                                <h4 class="modal-title" id="myModalLabel">Modal title
                                                                </h4>
                                                            </div> --}}
                                                            <div class="modal-body">
                                                                <h4 class="text-center text-primary">Are you sure you
                                                                    want to delete this product?</h4>
                                                            </div>
                                                            <div class="modal-footer text-center">
                                                                <div class="text-center">
                                                                    <button type="button" class="btn btn-success"
                                                                    data-bs-dismiss="modal" aria-label="Close"
                                                                    wire:click.prevent='deleteProduct({{ $user->id }})'>Yes</button>
                                                                {{-- <button type="button" class="btn btn-primary"
                                                                    data-dismiss="modal">No</button> --}}
                                                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">No</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-center">
                            {{ $gallery->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>