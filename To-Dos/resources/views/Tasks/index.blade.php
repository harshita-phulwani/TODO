@extends ( 'Layout.app')

@section('content')
<div>
<h1>
        ToDo List
</h1>
</br>

@foreach($tasks as $task)
<div class="card @if($task->isCompleted())card border-success mb- @endif">
  <div class="card-body">
 
  <p>
  {{ $task -> description}}</p>
  

        <form action ="/tasks/{{$task->id}}"method="POST">
                @method('PATCH')
                @csrf

                @if(!$task->isCompleted())
                        <button class="btn btn-outline-dark" input="button" >Complete </a>

        </form>
        

@else
        <form action ="/tasks/{{$task->id}}"method="POST">
                @method('DELETE')
                @csrf

                @if($task->isCompleted())
                        <button class="btn btn-danger" input="button" >Delete </a>

        </form>

        @endif
        @endif
  
 </div>
</div>
</br>

@endforeach
  
        <a href =" /tasks/create" class="btn btn-primary btn-lg btn-block"> New Task...</a>

</div>

@endsection