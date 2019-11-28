@extends("../layouts.master")

@section("content")

@section("title")
Companies
@endsection


<div class="containter">

    <br>
    <button><a href="/newCompany">Add new Company</a></button>
    <button><a href="/">Back</a></button>

    <br><br>
    <div class="table-responsive">
        <table id="tabela" class="table blueTable">
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
                    <td>{{$company->company_name}}</td>
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

    @endsection