@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">

        <form action="{{route('search')}}" method="POST">
            @csrf
            <div class="form-group d-flex gap-1">
                <input type="text" name="search" class="form-control" placeholder="Search by company name">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
        </form>
        <div class="card mt-3">
        <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Address</th>
                        <th scope="col">Email</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">{{$company->id}}</th>
                        <td>{{$company->name}}</td>
                        <td>{{$company->address}}</td>
                        <td>{{$company->pvm_code}}</td>
                        <td>{{$company->address}}</td>
                        <td>{{$company->telephone}}</td>
                        <td>{{$company->email}}</td>
                        <td>{{$company->CEO}}</td>
                        @can('edit-company', $company)
                            <td> <a type="submit" href="{{route('companies.edit', $company->id)}}" class="btn btn-secondary">Edit</a></td>
                        @endcan
                        @can('delete-company', $company)
                            <td> 
                                <form method="POST" action="{{route('companies.destroy', $company->id) }}"  >
                                @method('DELETE')
                                @csrf
                                
                                    <button type="submit" class="btn btn-danger"> Delete</button>
                                </form>
                            </td>
                        @endcan
                     
                    </tr>
                    
                    
                </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
@endsection