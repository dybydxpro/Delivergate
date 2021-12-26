@extends('app')

@section('content')
    <div class="container">
        <table>
            <td>
                <tr scope="row" height="50px">
                    <th scope="col" width="300px" >
                        <h5>ID: </h5>
                    </th>
                    <th scope="col">
                        <h5>{{ $todo->id }}</h5>
                    </th>
                </tr>
                <tr scope="row" height="50px">
                    <th scope="col">
                        <h5>Title: </h5>
                    </th>
                    <th scope="col">
                        <h5>{{ $todo->title }}</h5>
                    </th>
                </tr>
                <tr scope="row" height="50px">
                    <th scope="col">
                        <h5>Description: </h5>
                    </th>
                    <th scope="col">
                        <h5>{{ $todo->description }}</h5>
                    </th>
                </tr>
                <tr scope="row" height="50px">
                    <th scope="col">
                        <h5>Date: </h5>
                    </th>
                    <th scope="col">
                        <h5>{{ $todo->date }}</h5>
                    </th>
                </tr>
                <tr scope="row" height="50px">
                    <th scope="col">
                        <h5>Time: </h5>
                    </th>
                    <th scope="col">
                        <h5>{{ $todo->time }}</h5>
                    </th>
                </tr>
            </td> 
        </table>
    </div>
@endsection
