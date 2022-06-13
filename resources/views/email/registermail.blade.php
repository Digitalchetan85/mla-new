<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
</head>

<body>

    <table rules="all" style="border-style: solid; border-color: #666;" cellpadding="10">
        {{-- <thead>
            <tr style='background: #eee;'>
                <th>Name</th>
                <td>{{ $data['name'] }}</td>
            </tr>
            
            <th>Email</th>
            <th>Phone</th>
            <th>message</th>
        </thead> --}}
        <tbody>
            <tr>
                <th>Name</th>
                <td>{{ $data['name'] }}</td>
            </tr>
            <tr>
                <th>Eamil</th>
                <td>{{ $data['email'] }}</td>
            </tr>
            <tr>
                <th>Contact</th>
                <td>{{ $data['contact'] }}</td>
            </tr>
            <tr>
                <th>Mandal</th>
                <td>{{ $data['mandal'] }}</td>
            </tr>
            <tr>
                <th>Village</th>
                <td>{{ $data['village'] }}</td>
            </tr>
            <tr>
                <th>Address</th>
                <td>{{ $data['address'] }}</td>
            </tr>
            <tr>
                <th>sscpass</th>
                <td>{{ $data['sscpass'] }}</td>
            </tr>
            <tr>
                <th>sscpercentage</th>
                <td>{{ $data['sscpercentage'] }}</td>
            </tr>
            <tr>
                <th>interpass</th>
                <td>{{ $data['interpass'] }}</td>
            </tr>
            <tr>
                <th>interpercentage</th>
                <td>{{ $data['interpercentage'] }}</td>
            </tr>
            <tr>
                <th>qualification</th>
                <td>{{ $data['qualification'] }}</td>
            </tr>
            <tr>
                <th>graduationstream</th>
                <td>{{ $data['graduationstream'] }}</td>
            </tr>
            <tr>
                <th>graduationpass</th>
                <td>{{ $data['graduationpass'] }}</td>
            </tr>
            <tr>
                <th>graduationpercentage</th>
                <td>{{ $data['graduationpercentage'] }}</td>
            </tr>
            {{-- <tr>
                <th>resume</th>
                <td><a href="{{ asset('assets/images/resumes') }}/{{ $data['imagename'] }}" alt=""
                    class="text-decoration-none" target="_blank">Resume</a></td>
            </tr> --}}
        </tbody>
    </table>

</body>

</html>
