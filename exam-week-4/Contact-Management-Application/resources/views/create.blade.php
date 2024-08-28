<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Contact</title>
</head>

<body>
    <center>
        <h1>New Contact</h1>

        <form method="post">
            @csrf
            <table>
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="name"></td>
                    <td>{{ $errors->first('name') }}</td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="text" name="email"></td>
                    <td>{{ $errors->first('email') }}</td>
                </tr>
                <tr>
                    <td>Phone:</td>
                    <td><input type="text" name="phone"></td>
                    <td>{{ $errors->first('phone') }}</td>
                </tr>
                <tr>
                    <td>Address:</td>
                    <td><input type="text" name="address"></td>
                    <td>{{ $errors->first('address') }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Add">
                        <a href="{{ route('contact.index') }}">Back</a>
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>
