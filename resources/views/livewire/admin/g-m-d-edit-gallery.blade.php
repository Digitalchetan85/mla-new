<div class="my-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h3>Edit GMD Gallery Image</h3>
                            </div>
                            <div class="col-md-6">
                                <div class="text-end">
                                    <a href="{{route('admin.gmdgallery')}}" class="btn btn-primary">All Images</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <div class="">
                                    <form enctype="multipart/form-data" wire:submit.prevent='updateproduct'>
                                        
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text me-1 bg-primary" id="basic-addon1"><i
                                                            class="fa fa-user text-white"></i></span>
                                                    <input type="text" class="form-control" placeholder="Image Name"
                                                        aria-label="Username" aria-describedby="basic-addon1"
                                                        name="name" wire:model="name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group mb-3">
                                                    <input type="file" class="form-control" id="inputGroupFile02"
                                                        name="image" wire:model="newimage">
                                                    <label class="input-group-text ms-1 " for="inputGroupFile02">Upload
                                                        Image</label>
                                                </div>
                                                @if ($newimage)
                                                <img src="{{ $newimage->temporaryUrl() }}" alt="" width="400"
                                                    class="img-responsive">
                                                @else
                                                <img src="{{ asset('assets/images/gmd-gallery') }}/{{ $image }}" alt=""
                                                    width="400" class="img-responsive" />
                                                @endif
                                            </div>
                                        </div>
                                        @if (Session::has('success'))
                                        <div class="alert alert-success" role="alert">{{ Session::get('success') }}
                                        </div>
                                        @endif
                                        @if (Session::has('error'))
                                        <div class="alert alert-danger" role="alert">{{ Session::get('error') }}</div>
                                        @endif
                                        <div class="row mt-3">
                                            <div class="col-md-4">
                                                <button type="submit"
                                                    class="btn btn-primary form-control">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>