<div>
    <div id="section-header" class="py-2 py-md-2 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="border-start border-primary border-5">
                        <h2 class="fs-3 ms-3 text-success">Skill Up Denduluru</h2>
                        <nav aria-label="breadcrumb" class="ms-3">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('home')}}"
                                        class="text-success text-decoration-none">Home</a></li>
                                <li class="breadcrumb-item"><a href="#"
                                        class="text-success text-decoration-none">Events</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Skill Up Denduluru</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="register" class="py-3 py-md-5">
        <div class="container">
            <div class="row justify-content-center">
                <h2 class="fs-3 ms-3 text-center text-success">Skill Up Denduluru</h2>
                <div class="col-md-12 align-self-center">

                    <p class="fw-bold">SkillUp denduluru is a program designed by Abbaya chowdary, MLA- Denduluru to
                        train the youth on the required technologies as per industry trends and assist them on getting
                        the job</p>
                </div>
                <div class="col-md-6 align-self-center">
                    <div class="text-center">
                        <img src="{{asset('assets/images/skill.png')}}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="reg1" class="py-2 py-md-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 align-self-center">
                    <div class="">
                        <form class="px-2 py-3 shadow" enctype="multipart/form-data" wire:submit.prevent='adddata'>
                            <h3 class="text-center py-3">Please fill the details below.</h3>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text me-1 bg-primary" id="basic-addon1"><i
                                                class="fa fa-user text-white"></i></span>
                                        <input type="text" class="form-control" placeholder="Name" aria-label="Username"
                                            aria-describedby="basic-addon1" name="name" wire:model="name">
                                        @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text me-1 bg-primary" id="basic-addon1"><i
                                                class="fa fa-envelope text-white"></i></span>
                                        <input type="email" class="form-control" placeholder="Email"
                                            aria-label="Username" aria-describedby="basic-addon1" name="email"
                                            wire:model="email" />
                                        @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input-group mb-3">
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
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text me-1 bg-primary" id="basic-addon1"><i
                                                class="fa fa-building text-white"></i></span>
                                        <select class="form-select" aria-label="Default select example" name="mandal"
                                            wire:model="mandal">
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
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text me-1 bg-primary" id="basic-addon1"><i
                                                class="fa fa-building text-white"></i></span>
                                        <input type="text" class="form-control" placeholder="Village"
                                            aria-label="Username" aria-describedby="basic-addon1" name="village" wire:model="village">
                                            @error('village')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text me-1 bg-primary" id="basic-addon1"><i
                                                class="fa fa-address-card text-white"></i></span>
                                        <input type="text" class="form-control" placeholder="Address"
                                            aria-label="Username" aria-describedby="basic-addon1" name="address" wire:model="address">
                                            @error('address')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text me-1 bg-primary" id="basic-addon1"><i
                                                class="fa fa-calendar-check text-white"></i></span>
                                        <input type="text" class="form-control" placeholder="SSC Year of Pass"
                                            aria-label="Username" aria-describedby="basic-addon1" name="sscpass" wire:model="sscpass">
                                            @error('sscpass')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text me-1 bg-primary" id="basic-addon1"><i
                                                class="fa fa-percent text-white"></i></span>
                                        <input type="text" class="form-control" placeholder="SSC %"
                                            aria-label="Username" aria-describedby="basic-addon1" name="sscpercentage" wire:model="sscpercentage">
                                            @error('sscpercentage')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text me-1 bg-primary" id="basic-addon1"><i
                                                class="fa fa-calendar-check text-white"></i></span>
                                        <input type="text" class="form-control" placeholder="Inter Year of Pass"
                                            aria-label="Username" aria-describedby="basic-addon1" name="interpass" wire:model="interpass">
                                            @error('interpass')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text me-1 bg-primary" id="basic-addon1"><i
                                                class="fa fa-percent text-white"></i></span>
                                        <input type="text" class="form-control" placeholder="Inter %"
                                            aria-label="Username" aria-describedby="basic-addon1" name="interpercentage" wire:model="interpercentage">
                                            @error('interpercentage')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text me-1 bg-primary" id="basic-addon1"><i
                                                class="fa fa-book-open-reader text-white"></i></span>
                                        <select class="form-select" aria-label="Default select example" name="qualification" wire:model="qualification">
                                            <option selected>--Qualification--</option>
                                            <option value="Degree">Degree</option>
                                            <option value="Engineering">Engineering</option>
                                            <option value="Other">Other</option>
                                        </select>
                                        @error('qualification')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text me-1 bg-primary" id="basic-addon1"><i
                                                class="fa fa-graduation-cap text-white"></i></span>
                                        <input type="text" class="form-control" placeholder="Graduation Stream"
                                            aria-label="Username" aria-describedby="basic-addon1" name="graduationstream" wire:model="graduationstream">
                                            @error('graduationstream')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text me-1 bg-primary" id="basic-addon1"><i
                                                class="fa fa-calendar-check text-white"></i></span>
                                        <input type="text" class="form-control" placeholder="Graduation Year of Pass"
                                            aria-label="Username" aria-describedby="basic-addon1" name="graduationpass" wire:model="graduationpass">
                                            @error('graduationpass')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text me-1 bg-primary" id="basic-addon1"><i
                                                class="fa fa-percent text-white"></i></span>
                                        <input type="text" class="form-control" placeholder="Graduation %"
                                            aria-label="Username" aria-describedby="basic-addon1" name="graduationpercentage" wire:model="graduationpercentage">
                                            @error('graduationpercentage')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text me-1 bg-primary" id="basic-addon1"><i
                                                class="fa fa-calendar-check text-white"></i></span>
                                        <input type="text" class="form-control"
                                            placeholder="Post Graduation Year of Pass" aria-label="Username"
                                            aria-describedby="basic-addon1" name="pgpass" wire:model="pgpass">
                                            @error('pgpass')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text me-1 bg-primary" id="basic-addon1"><i
                                                class="fa fa-percent text-white"></i></span>
                                        <input type="text" class="form-control" placeholder="Post Graduation %"
                                            aria-label="Username" aria-describedby="basic-addon1" name="pgpercentage" wire:model="pgpercentage">
                                            @error('pgpercentage')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text me-1 bg-primary" id="basic-addon1"><i
                                                class="fa fa-certificate text-white"></i></span>
                                        <input type="text" class="form-control" placeholder="Any Trainings (if Any)"
                                            aria-label="Username" aria-describedby="basic-addon1" name="trainings" wire:model="trainings">
                                            @error('trainings')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control" id="inputGroupFile02" name="resume" wire:model="resume">
                                        <label class="input-group-text ms-1 " for="inputGroupFile02">Upload
                                            Resume</label>
                                            @error('resume')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            @if (Session::has('success'))
                                <div class="alert alert-success" role="alert">{{ Session::get('success') }}</div>
                            @endif
                            @if (Session::has('error'))
                                <div class="alert alert-danger" role="alert">{{ Session::get('error') }}</div>
                            @endif
                            <div class="row mb-3 ms-3">
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary form-control">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>