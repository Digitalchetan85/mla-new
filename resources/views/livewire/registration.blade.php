<div id="body">
    <div id="section-header" class="py-2 py-md-2 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="border-start border-primary border-5">
                        <h2 class="fs-3 ms-3 text-success">Register</h2>
                        <nav aria-label="breadcrumb" class="ms-3">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('home')}}"
                                        class="text-success text-decoration-none">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page"
                                    class="text-success text-decoration-none">Register</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div id="register" class="py-3 py-md-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 align-self-center">
                    <h2 class="text-primary">Register with the following details.</h2>
                    <p class="">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                        has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                        galley of type and scrambled it to make a type specimen book. It has survived not only five
                        centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It
                        was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                        passages, and more recently with desktop publishing software like Aldus PageMaker including
                        versions of Lorem Ipsum.</p>
                </div>
            </div>
        </div>
    </div> --}}

    <div id="reg1" class="py-2 py-md-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 align-self-center">
                    <div class="row g-3 justify-content-center">
                        <div class="col-md-8">
                            <div class="">
                                <form class="px-1 py-3 bg-white rounded" wire:submit.prevent='adddata'>
                                    <h3 class="py-2 text-center fs-5 text-decoration-underline">Get in Touch</h3>
                                    <h2 class="text-center py-2 text-primary">A Man Who will Listen</h2>


                                    <div class="row justify-content-center">
                                        <div class="col-md-10">
                                            <div class="input-group mb-3 ">
                                                <span class="input-group-text me-1 bg-primary" id="basic-addon1"><i
                                                        class="fa fa-user text-white"></i></span>
                                                <input type="text" class="form-control" placeholder="Name"
                                                    aria-label="Username" aria-describedby="basic-addon1" name="name"
                                                    wire:model="name">
                                                @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-md-10">
                                            <div class="input-group mb-3 ">
                                                <span class="input-group-text me-1 bg-primary" id="basic-addon1"><i
                                                        class="fa fa-envelope text-white"></i></span>
                                                <input type="email" class="form-control" placeholder="Email"
                                                    aria-label="Username" aria-describedby="basic-addon1" name="email"
                                                    wire:model="email">
                                                @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-md-10">
                                            <div class="input-group mb-3 rounded">
                                                <span class="input-group-text me-1 bg-primary" id="basic-addon1"><i
                                                        class="fa fa-building text-white"></i></span>
                                                <select class="form-select" aria-label="Default select example"
                                                    name="mandal" wire:model="mandal">
                                                    <option selected>--Mandal--</option>
                                                    <option value="Denduluru">Denduluru</option>
                                                    <option value="Eluru">Eluru</option>
                                                    <option value="Pedapadu">Pedapadu</option>
                                                    <option value="Pedavegi">Pedavegi</option>
                                                    <option value="Others">Others</option>
                                                </select>
                                                @error('mandal')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-md-10">
                                            <div class="input-group mb-3 rounded">
                                                <span class="input-group-text me-1 bg-primary" id="basic-addon1"><i
                                                        class="fa fa-building text-white"></i></span>
                                                <input type="text" class="form-control" placeholder="Village"
                                                    aria-label="Username" aria-describedby="basic-addon1" name="village"
                                                    wire:model="village">
                                                @error('village')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-md-10">
                                            <div class="input-group mb-3 rounded">
                                                <span class="input-group-text me-1 bg-primary" id="basic-addon1"><i
                                                        class="fa fa-phone-volume text-white"></i></span>
                                                <input type="tel" class="form-control" placeholder="Contact No"
                                                    aria-label="Username" aria-describedby="basic-addon1" name="contact"
                                                    wire:model="contact">
                                                @error('contact')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-md-10">
                                            <div class="input-group mb-3 rounded ">
                                                <span class="input-group-text me-1 bg-primary" id="basic-addon1"><i
                                                        class="fa fa-edit text-white"></i></span>
                                                <textarea class="form-control" placeholder="Mention your concern!!!"
                                                    aria-label="Username" aria-describedby="basic-addon1" rows="8"
                                                    name="message" wire:model="message"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    @if (Session::has('success'))
                                    <div class="alert alert-success" role="alert">{{ Session::get('success') }}</div>
                                    @endif
                                    @if (Session::has('error'))
                                    <div class="alert alert-danger" role="alert">{{ Session::get('error') }}</div>
                                    @endif
                                    <div class="row mb-3 justify-content-center">
                                        <div class="col-md-4">
                                            <button type="submit" class="btn btn-primary form-control">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row mb-3 py-3 py-md-5">
                                <div class="col-md-2 mb-3 align-self-center">
                                    <i class="fa fa-location-dot text-white p-3 bg-primary"></i>
                                </div>
                                <div class="col-md-10 mb-3">
                                    <div class="">
                                        <ul class="list-unstyled text-center">
                                            <li>MLA- Denduluru Camp Office,</li>
                                            <li>Plot No :22, NCC Canteen Road,</li>
                                            <li>Mothevari Thota, Eluru - 534 002</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-2 mb-3 align-self-center">
                                    <i class="fa fa-envelope text-white p-3 bg-primary"></i>
                                </div>
                                <div class="col-md-10 mb-3">
                                    <div class="">
                                        <div class="text-center">
                                            <a href="mailto:dendulurumla64@gmail.com"
                                                class="text-decoration-none text-dark ">dendulurumla64@gmail.com</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 mb-3 align-self-center">
                                    <i class="fa fa-globe text-white p-3 bg-primary"></i>
                                </div>
                                <div class="col-md-10 mb-3">
                                    <div class="">
                                        <div class="text-center">
                                            <a href="https://m.facebook.com/kotaru9999" class="text-decoration-none"><i
                                                    class="fa-brands fa-facebook-f ms-2 border rounded p-3"></i></a>
                                            <a href="https://twitter.com/AbbayaChowdary"><i
                                                    class="fa-brands fa-twitter ms-2 border rounded p-3"></i></a>
                                            <a href="https://youtube.com/channel/UC6odSmHbX9fgBVBgWdZmJLQ"><i
                                                    class="fa-brands fa-youtube ms-2 border rounded p-3"></i></a>
                                            <a
                                                href="https://www.instagram.com/kotaruabbayachowdary/?igshid=YmMyMTA2M2Y=">
                                                <i class="fa-brands fa-instagram ms-2 border rounded p-3"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>