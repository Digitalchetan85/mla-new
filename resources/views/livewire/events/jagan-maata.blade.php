<div>
    <div id="section-header" class="py-2 py-md-2 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="border-start border-primary border-5">
                        <h2 class="fs-3 ms-3 text-success">Jagan Maata - Abbaya Bata</h2>
                        <nav aria-label="breadcrumb" class="ms-3">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('home')}}" class="text-success text-decoration-none">Home</a></li>
                                <li class="breadcrumb-item"><a href="#" class="text-success text-decoration-none">Events</a></li>
                                <li class="breadcrumb-item active text-success text-decoration-none" aria-current="page">Jagan Maata - Abbaya Bata</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="events" class="py-3 py-md-5 bg-light">
        <div class="container">
            <div class="row">
                <h2 class="text-success text-center py-3">Jagan Maata - Abbaya Bata</h2>

                <div class="col-md-4">
                    <div class="bg-white shadow py-3 rounded" style="height:200px;" style="height:390px;">
                        <a href="#event1" class="text-decoration-none">
                            <div class="text-center">
                                <h3 class="text-center text-primary py-5">Good Morning <br />Denduluru</h3>
                            </div>
                        </a>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="bg-white shadow py-3 rounded" style="height:200px;">
                        <a href="#event2" class="text-decoration-none">
                            <div class="text-center">
                                <h3 class="text-center text-primary py-5">Secratariat Visits</h3>
                            </div>
                        </a>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="bg-white shadow py-3 rounded" style="height:200px;">
                        <a href="#event3" class="text-decoration-none">
                            <div class="text-center">

                                <h3 class="text-center text-primary py-5">Mandal Review <br />Meetings</h5>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div id="event1" class="py-3 py-md-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 align-self-center">
                    <div class="text-center">
                        <img src="{{asset('assets/images/gmdel.png')}}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-8 align-self-center">
                    <h2 class="fs-3 text-success">Good Morning Denduluru</h2>
                    <p class="">
                        Good Morning Denduluru is a program designed by Abbaya Chowdary ,MLA-Denduluru to visit the villages of Denduluru Constituency in the morning to interact with the people and to know about the ground level issues , and co-ordinating with the concerned officers to get the solution for those issues.

                    </p>
                    <p>Main purpose of this program is to solve or identify the solution for the issues on spot by coordinating with officials.</p>
                    <!-- <div class="">
                        <a href="{{route('contact')}}" class="btn btn-primary">Contact</a>
                    </div> -->
                </div>
                <div class="row g-2">
                    <h2 class="text-success text-center pt-2 pb-2">Gallery</h2>
                    @foreach ($gmdgallery as $image)
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <img src="{{asset('assets/images/gmd-gallery')}}/{{$image->image}}" class="img-fluid">
                    </div>
                    @endforeach
                    {{-- <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <img src="{{asset('assets/images/goodmorning/good2.png')}}" class="img-fluid">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <img src="{{asset('assets/images/goodmorning/good3.png')}}" class="img-fluid">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <img src="{{asset('assets/images/goodmorning/good4.png')}}" class="img-fluid">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <img src="{{asset('assets/images/goodmorning/good5.png')}}" class="img-fluid">
                    </div>
                    
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <img src="{{asset('assets/images/goodmorning/good8.png')}}" class="img-fluid">
                    </div> --}}
                    
                </div>
            </div>
        </div>
    </div>

    <div id="event2" class="py-3 py-md-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 align-self-center">
                    <h2 class="fs-3 text-success">Secratariat Visits</h2>
                    <p class="">
                        Village ward secretariat system is the noble idea that brings the Government Administration from mandal level to village level.
                    </p>
                    <p>Honorable Chief minister YS Jagan Mohan Reddy has asked the MLAs to visit the village and ward secretariats .The move is to motivate the staff to serve people better and to interact with the local people on the functioning of Secretariats and the response from the staff on their grievances.</p>
                    <!-- <div class="">
                        <a href="{{route('contact')}}" class="btn btn-primary">Contact</a>
                    </div> -->
                </div>
                <div class="col-md-4 align-self-center">
                    <div class="text-center">
                        <img src="{{asset('assets/images/temp.png')}}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="row g-2">
                    <h2 class="text-success text-center pt-2 pb-2">Gallery</h2>
                    @foreach ($svgallery as $image)
                    <div class="col-lg-6 col-md-4 col-sm-4 col-xs-6">
                        <img src="{{asset('assets/images/sv-gallery')}}/{{$image->image}}" class="img-fluid">
                    </div>
                    @endforeach
                    {{-- <div class="col-lg-6 col-md-4 col-sm-4 col-xs-6">
                        <img src="{{asset('assets/images/secretariat-visits/rev2.png')}}" class="img-fluid">
                    </div>
                    <div class="col-lg-6 col-md-4 col-sm-4 col-xs-6">
                        <img src="{{asset('assets/images/secretariat-visits/rev3.png')}}" class="img-fluid">
                    </div>
                    <div class="col-lg-6 col-md-4 col-sm-4 col-xs-6">
                        <img src="{{asset('assets/images/secretariat-visits/rev4.png')}}" class="img-fluid">
                    </div> --}}
                </div>

            </div>
        </div>
    </div>

    <div id="event3" class="py-3 py-md-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 align-self-center">
                    <div class="text-center">
                        <img src="{{asset('assets/images/temp.png')}}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-8 align-self-center">
                    <h2 class="fs-3 text-success">Mandal Review Meetings</h2>
                    <p class="">
                        Denduluru constituency consists of four mandals, Denduluru , Eluru( Rural), Pedapadu, Pedavegi. Conducting mandal review meetings in every 2 months by coordinating all the line departments like revenue,housing,R&B,RWS,Panchayat Raj.
                    </p>
                    <p>Main purpose of the review meeting is to get the update on all the development and welfare activities that are going on in mandal level and to understand the challenges and hiccups , if there are any issues or challenges that needs to be addressed by the higher authorities helping the mandal level officers to resolve those issues.</p>
                    <!-- <div class="">
                        <a href="{{route('contact')}}" class="btn btn-primary">Contact</a>
                    </div> -->
                </div>
                <div class="row g-2">
                    <h2 class="text-success text-center pt-2 pb-2">Gallery</h2>
                    @foreach ($mrmgallery as $image)
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <img src="{{asset('assets/images/mrm-gallery')}}/{{$image->image}}" class="img-fluid">
                    </div>
                    @endforeach
                    {{-- <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <img src="{{asset('assets/images/review-meetings/meet2.jpg')}}" class="img-fluid">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <img src="{{asset('assets/images/review-meetings/meet3.jpg')}}" class="img-fluid">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <img src="{{asset('assets/images/review-meetings/meet4.jpg')}}" class="img-fluid">
                    </div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <img src="{{asset('assets/images/review-meetings/meet5.jpg')}}" class="img-fluid">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <img src="{{asset('assets/images/review-meetings/meet6.jpg')}}" class="img-fluid">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <img src="{{asset('assets/images/review-meetings/meet7.jpg')}}" class="img-fluid">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <img src="{{asset('assets/images/review-meetings/meet8.jpg')}}" class="img-fluid">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <img src="{{asset('assets/images/review-meetings/meet9.jpg')}}" class="img-fluid">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <img src="{{asset('assets/images/review-meetings/meet10.jpg')}}" class="img-fluid">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <img src="{{asset('assets/images/review-meetings/meet11.jpg')}}" class="img-fluid">
                    </div> --}}

                </div>
            </div>
        </div>
    </div>
</div>