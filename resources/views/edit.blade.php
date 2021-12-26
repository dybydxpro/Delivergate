@extends('app')

@section('content')
  <div class="colonna">


    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit List</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('todo.index') }}">Return Home</a>
            </div>
        </div>
    </div>

    <form action="{{ route('todo.update',$todo->id) }}" method="POST">
        @csrf
        @method('PUT')

        <table>
            <td>
                <tr scope="row" height="50px">
                    <th scope="col"  width="300px">
                        <h5>Title: </h5>
                    </th>
                    <th scope="col"width="600px">
                        <input type="text" name="title" value="{{ $todo->title }}" class="form-control" placeholder="Title">
                    </th>
                </tr>
                <tr scope="row" height="50px">
                    <th scope="col">
                        <h5>Description: </h5>
                    </th>
                    <th scope="col">
                        <textarea name="description" class="form-control" placeholder="Description">{{ $todo->description }}</textarea>
                    </th>
                </tr>
                <tr scope="row" height="50px">
                    <th scope="col">
                        <h5>Date: </h5>
                    </th>
                    <th scope="col">
                        <input type="date" name="date" value="{{ $todo->date }}" class="form-control" placeholder="Date">
                    </th>
                </tr>
                <tr scope="row" height="50px">
                    <th scope="col">
                        <h5>Time: </h5>
                    </th>
                    <th scope="col">
                        <input type="time" name="time" value="{{ $todo->time }}" class="form-control" placeholder="Time">
                    </th>
                </tr>
                <tr scope="row" height="50px">
                    <th scope="col">
                        <h5></h5>
                    </th>
                    <th scope="col">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </th>
                </tr>
            </td> 
        </table>
    </form>
  </div>
@endsection
