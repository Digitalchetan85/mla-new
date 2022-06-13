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
                <td>{{ $data['message'] }}</td>
            </tr>
        </tbody>
    </table>

</body>

</html>
