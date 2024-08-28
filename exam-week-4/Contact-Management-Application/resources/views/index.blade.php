<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacts</title>
</head>

<body>
    <center>
        <h1>All Contacts</h1>

        <a href="{{ route('contact.create') }}"><button>Add Contact</button></a><br><br>

        <form action="{{ route('contact.search') }}" method="get">
            <input type="text" name="search" placeholder="Search by Name / Email">
            <input type="submit" value="Search">
        </form><br>

        <a href="{{ route('contact.orderbyName') }}"><button>Sort By Name</button></a>
        <a href="{{ route('contact.orderbyDate') }}"><button>Sort By Date</button></button></a><br><br>


        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
            @foreach ($contacts as $contact)
                <tr>
                    <td>{{ $contact->id }}</td>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>{{ $contact->address }}</td>
                    <td>{{ $contact->created_at }}</td>
                    <td>
                        <a href="{{ route('contact.show', $contact->id) }}"><button>View</button></a>
                        <a href="{{ route('contact.edit', $contact->id) }}"><button>Edit</button></a>
                        <a href="{{ route('contact.delete', $contact->id) }}"><button>Delete</button></a>
                    </td>
                </tr>
            @endforeach
        </table>
    </center>
</body>

</html>
