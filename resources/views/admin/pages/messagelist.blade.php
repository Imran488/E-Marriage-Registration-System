@extends('master')

@section('contents')

<center>
<h1>
    <b><u>This is Question List</u></b>
</h1>
    <br>
<div class="col-md-4">
    @if(session()->has('msg'))
    <p class="alert alert-success">{{session()->get('msg')}}</p>
    @endif
</div>
</center>

<br>
<table class="table table-dark table-striped">
  <thead>
    <tr>
        <th scope="col">Sl</th>
    <th scope="col">User name</th>
    <th scope="col">Email</th>
      <th scope="col">Subject</th>
      <th scope="col">Question</th>
      <th scope="col">Reply</th>

      <th scope="col">Status</th>

    </tr>
  </thead>
  <tbody>
    @foreach ($questions as $key=>$list)
    <tr>
      <th>{{$key+1}}</th>
      <td>{{$list->user->name}}</td>
      <td>{{$list->user->email}}</td>
      <td>{{$list->subject}}</td>
      <td>{{$list->question}}</td>
      <td>
      @if($list->status == 'pending')
      <a class= "btn btn-primary"href="{{route('admin.reply.view',$list->id)}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M16.757 3l-2 2H5v14h14V9.243l2-2V20a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12.757zm3.728-.9L21.9 3.516l-9.192 9.192-1.412.003-.002-1.417L20.485 2.1z"/></svg>


      @else
     {{$list->reply}}
      @endif

    </td>
      <td>{{$list->status}}</td>

    </tr>
    @endforeach
  </tbody>
</table>
<center><a href="{{route('dashboard')}}" class="btn" style="background-color:lightgray; border-radius:10px">Back</a></center>
@endsection
