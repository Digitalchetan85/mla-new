<div id="">
    <div id="section-header" class="py-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12 align-self-center">
                    <div class="border-start border-primary border-5 mb-0">
                        <h2 class="fs-3 ms-3 text-success">Gadapa Gadapaku Mana Prabhutvam</h2>
                        <nav aria-label="breadcrumb" class="ms-3">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="{{route('home')}}" class="text-success text-decoration-none">Home</a></li>
                                <li class="breadcrumb-item"><a href="#" class="text-success text-decoration-none">Events</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Gadapa Gadapaku Mana Prabhutvam</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="dev-1" class="py-3 py-md-5">
        <div class="container">
            <div class="row">
                <h2 class="fs-3 ms-3 text-center text-success">Gadapa Gadapaku Mana Prabhutvam</h2>
                <div class="col-md-12">
                    <p class="text-center">
                        The prime objective of the Gadapa Gadapaku Mana Prabhutvam, it said, is to create awareness
                        among the public about the schemes and programmes of the government; to ensure that the benefits
                        reach the last mile beneficiary covering all the eligible beneficiaries; and seek feedback
                        /suggestions from the public for process improvement and further improve the service delivery.”</p>

                    <p class="text-center">The MLAs would make visits to the households in their jurisdiction as per the schedule finalised
                        by the respective district collectors within the limits of Grama/Ward Sachivalayam. The MLAs
                        shall visit all the households in all Villages/Wards along with public representatives and
                        officers at Mandal/Municipality and Village/ Ward levels
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div id="development" class="py-3 py-md-5">
        <div class="container">
            <div class="owl-carousel owl-theme" id="good">
                @foreach ($images as $image)
                <div class="item">
                    <div class="text-center">
                        <img src="{{asset('assets/images/gallery1')}}/{{$image->image}}" alt="" class="img-fluid">
                    </div>
                </div>
                @endforeach
                {{-- <div class="item">
                    <div class="text-center">
                        <img src="{{asset('assets/images/gadapa/gadapa5.png')}}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="item">
                    <div class="text-center">
                        <img src="{{asset('assets/images/gadapa/gadapa10.png')}}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="item">
                    <div class="text-center">
                        <img src="{{asset('assets/images/gadapa/gadapa11.png')}}" alt="" class="img-fluid">
                    </div> --}}
                </div>
            </div>
            <!-- <div class="row">
                <div class="col-md-6 align-self-center">
                    <div class="text-center">
                        <img src="{{asset('assets/images/test1.png')}}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-6 align-self-center">
                    <div class="text-center">
                        <img src="{{asset('assets/images/test2.png')}}" alt="" class="img-fluid">
                    </div>
                    <div class="">
                        <a href="{{route('contact')}}" class="btn btn-primary">Contact</a>
                    </div>
                </div>
            </div> -->
        </div>
    </div>

    <div id="gallery" class="pt-3 pb-3 pt-md-5 pb-md-5">
        <section>
            <div class="container">
                <div class="row g-2">
                    <h2 class="text-success text-center pt-2 pb-2">Gallery</h2>
                    {{-- @foreach ($images as $image) --}}
                    @foreach ($galleryImages as $gallery)
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <img src="{{asset('assets/images/ggmp-gallery')}}/{{$gallery->image}}" class="img-fluid">
                    </div>
                    @endforeach
                    {{-- <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <img src="{{asset('assets/images/gadapa/gadapa3.png')}}" class="img-fluid">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <img src="{{asset('assets/images/gadapa/gadapa4.png')}}" class="img-fluid">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <img src="{{asset('assets/images/gadapa/gadapa5.png')}}" class="img-fluid">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <img src="{{asset('assets/images/gadapa/gadapa6.png')}}" class="img-fluid">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <img src="{{asset('assets/images/gadapa/gadapa7.png')}}" class="img-fluid">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <img src="{{asset('assets/images/gadapa/gadapa8.png')}}" class="img-fluid">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <img src="{{asset('assets/images/gadapa/gadapa9.png')}}" class="img-fluid">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <img src="{{asset('assets/images/gadapa/gadapa10.png')}}" class="img-fluid">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <img src="{{asset('assets/images/gadapa/gadapa11.png')}}" class="img-fluid">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <img src="{{asset('assets/images/gadapa/gadapa12.png')}}" class="img-fluid">
                    </div> --}}
                </div>
            </div>
        </section>
    </div>

    <!-- <div id="development" class="py-3 py-md-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 align-self-center">
                    <h2 class="fs-3">Event 2</h2>
                    <p class="">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing software like Aldus PageMaker including versions of
                        Lorem Ipsum.
                    </p>
                    <div class="">
                        <a href="{{route('contact')}}" class="btn btn-primary">Contact</a>
                    </div>
                </div>
                <div class="col-md-4 align-self-center">
                    <div class="text-center">
                        <img src="{{asset('assets/images/temp.png')}}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div> -->
</div>