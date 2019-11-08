<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <title>Companies</title>

</head>

<body>

    <div class="containter">

        <br>
        <button><a href="/newCompany">Add new Company</a></button>
        <button><a href="/">Back</a></button>

        <br><br>
        <div class="table-responsive">
            <table class="table blueTable">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Adress</th>
                        <th>Contact person</th>
                        <th>Phone number</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($companies as $company)
                    <tr>
                        <td>{{$company->name}}</td>
                        <td>{{$company->adress}}</td>
                        <td>{{$company->contact_person}}</td>
                        <td>{{$company->phone_number}}</td>

                        <td><button><a href="editCompany/{{$company->id}}">Edit</button></a></td>
                        <td><a onclick="return confirm('Are You sure?')" href="deleteCompany/{{$company->id}}"><button>Delete</button></a></td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>

</body>

</html>