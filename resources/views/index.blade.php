@extends('app')

@section('content')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<br><br>

<div>
    <div class="row">
        <div class="col-lg-12">
            
        </div>
    </div>
    
      <div class="row">
        <table class="table table-striped justify-content-center">
            <tr>
                <th class="justify-content-center">#</th>
                <th class="justify-content-center" width="380px">Title</th>
                <th class="justify-content-center" width="480px">Description</th>
                <th class="justify-content-center">Date</th>
                <th class="justify-content-center">Time</th>
                <th class="justify-content-center"></th>
            </tr>
            @foreach ($todo as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->description }}</td>
                <td>{{ $post->date }}</td>
                <td>{{ $post->time }}</td>
                <td>    
                    <form method="POST">
                        <a class="btn btn-success" href="{{ route('todo.view',$post->id) }}"><i class="fas fa-eye"></i></a>
                        <a class="btn btn-primary" href="{{ route('todo.edit',$post->id) }}"><i class="fas fa-edit"></i></a>
                        @csrf
                        @method('DELETE')
                        <!--<button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>-->
                        <a class="btn btn-danger" href="{{ route('todo.destroy', $post->id) }}"><i class="fas fa-trash-alt"></i></a>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
</div>

@endsection
