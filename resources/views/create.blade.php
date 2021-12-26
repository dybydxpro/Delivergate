@extends('app')

@section('content')
<div class="container">
<div class="row">
    <div class="col-lg-12 margin-tb">
      <div class="main-head">
        <div class="left-head">
            <h2>Create New Task</h2>
        </div>
        <div class="right-head">
            <a class="btn btn-success" href="{{ route('todo.index') }}"> Return Home</a>
        </div>
      </div>
    </div>
</div>


<form action="{{ route('todo.insert') }}" method="POST">
    @csrf
    <table>
            <td>
                <tr scope="row" height="50px">
                    <th scope="col"  width="300px">
                        <h5>Title: </h5>
                    </th>
                    <th scope="col"width="600px">
                        <input type="text" name="title" class="form-control" placeholder="Title">
                    </th>
                </tr>
                <tr scope="row" height="50px">
                    <th scope="col">
                        <h5>Description: </h5>
                    </th>
                    <th scope="col">
                        <textarea name="description" class="form-control" placeholder="Description"></textarea>
                    </th>
                </tr>
                <tr scope="row" height="50px">
                    <th scope="col">
                        <h5>Date: </h5>
                    </th>
                    <th scope="col">
                        <input type="date" name="date" class="form-control" placeholder="Date">
                    </th>
                </tr>
                <tr scope="row" height="50px">
                    <th scope="col">
                        <h5>Time: </h5>
                    </th>
                    <th scope="col">
                        <input type="time" name="time" class="form-control" placeholder="Time">
                    </th>
                </tr>
                <tr scope="row" height="50px">
                    <th scope="col">
                        <h5></h5>
                    </th>
                    <th scope="col">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </th>
                </tr>
            </td> 
        </table>
    </form>
</div>
@endsection
