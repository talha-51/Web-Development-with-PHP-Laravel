<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Specific Contact Details</title>
</head>

<body>
    <center>
        <h1>Specific Contact Details</h1>

        <table>
            <tr>
                <td>ID:</td>
                <td><input type="number" name="id" value="{{ $contact->id }}"></td>
            </tr>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name" value="{{ $contact->name }}"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" name="email" value="{{ $contact->email }}"></td>
            </tr>
            <tr>
                <td>Phone:</td>
                <td><input type="text" name="phone" value="{{ $contact->phone }}"></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><input type="text" name="address" value="{{ $contact->address }}"></td>
            </tr>
            <tr>
                <td>Created At:</td>
                <td><input type="text" name="address" value="{{ $contact->created_at }}"></td>
            </tr>
            <tr>
                <td>Updated At:</td>
                <td><input type="text" name="address" value="{{ $contact->updated_at }}"></td>
            </tr>
            <tr>
                <td></td>
                <td><a href="{{ route('contact.index') }}"><button>Back</button></a></td>
            </tr>
        </table>
    </center>
</body>

</html>
