<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

    </style>
</head>
<body>

    <h2>All contact form submission data</h2>

    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Location</th>
            <th>Message</th>
        </tr>

        @foreach ($contactList as $contact)
        <tr>
            <td>{{$contact['name']}}</td>
            <td>{{$contact['email']}}</td>
            <td>{{$contact['phone']}}</td>
            <td>{{$contact['location']}}</td>
            <td>{{$contact['message']}}</td>

        </tr>
        @endforeach

        {{-- Data rows start  --}}


        {{-- Data rows end  --}}
    </table>

    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Location</th>
            <th>Message</th>
        </tr>

        @foreach ($shampodContacts as $contact)
        <tr>
            <td>{{$contact['name']}}</td>
            <td>{{$contact['email']}}</td>
            <td>{{$contact['phone']}}</td>
            <td>{{$contact['location']}}</td>
            <td>{{$contact['message']}}</td>

        </tr>
        @endforeach

        {{-- Data rows start  --}}


        {{-- Data rows end  --}}
    </table>


</body>
</html>
