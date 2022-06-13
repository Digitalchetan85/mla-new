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
                                <div class="">
                                    <h3>Registered Users</h3>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="text-end">
                                    <a href="{{route('admin.export')}}" class="btn btn-primary" target="_blank">Export Data</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (Session::has('success'))
                        <div class="alert alert-success" role="alert">{{ session('success') }}</div>
                        @endif
                        <!-- Table -->
                        <div class="table-responsive">
                            <table class="table table-bordered align-middle text-center">
                                <thead>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Contact</th>
                                    <th>Mandal</th>
                                    <th>Village</th>
                                    <th>Address</th>
                                    <th>SSC Pass</th>
                                    <th>SSC Percentage</th>
                                    <th>Inter Pass</th>
                                    <th>Inter Percentage</th>
                                    <th>Qualification</th>
                                    <th>Graduation Stream</th>
                                    <th>Graduation Pass</th>
                                    <th>Graduation Percentage</th>
                                    <th>PG Pass</th>
                                    <th>PG Percentage</th>
                                    <th>Training</th>
                                    <th>Resume</th>
                                    {{-- <th>Actions</th> --}}
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->contact }}</td>
                                        <td>{{ $user->mandal }}</td>
                                        <td>{{ $user->village }}</td>
                                        <td>{{ $user->address }}</td>
                                        <td>{{ $user->sscyearofpass }}</td>
                                        <td>{{ $user->sscpercentage }}</td>
                                        <td>{{ $user->interyearofpass }}</td>
                                        <td>{{ $user->interpercentage }}</td>
                                        <td>{{ $user->qualification }}</td>
                                        <td>{{ $user->graduationstream }}</td>
                                        <td>{{ $user->graduationyearofpass }}</td>
                                        <td>{{ $user->graduationpercentage }}</td>
                                        <td>{{ $user->postgraduationyearofpass }}</td>
                                        <td>{{ $user->postgraduationpercentage }}</td>
                                        <td>{{ $user->trainings }}</td>
                                        <td><a href="{{ asset('assets/images/resumes') }}/{{ $user->resume }}" alt=""
                                            class="text-decoration-none" target="_blank">Resume</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-center">
                            {{ $users->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>