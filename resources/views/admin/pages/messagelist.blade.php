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
      <th scope="col">Action</th>

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
      <a class= "btn btn-primary"href="{{route('admin.reply.view',$list->id)}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path fill="none" d="M0 0H24V24H0z"/><path d="M11 20L1 12l10-8v5c5.523 0 10 4.477 10 10 0 .273-.01.543-.032.81-1.463-2.774-4.33-4.691-7.655-4.805L13 15h-2v5zm-2-7h4.034l.347.007c1.285.043 2.524.31 3.676.766C15.59 12.075 13.42 11 11 11H9V8.161L4.202 12 9 15.839V13z"/></svg>

      @else
     {{$list->reply}}
      @endif

    </td>
      <td>{{$list->status}}</td>
      <td><a class= "btn btn-danger"href="{{route('reply.delete',$list->id)}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M4 8h16v13a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V8zm2 2v10h12V10H6zm3 2h2v6H9v-6zm4 0h2v6h-2v-6zM7 5V3a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v2h5v2H2V5h5zm2-1v1h6V4H9z"/></svg></td>

    </tr>
    @endforeach
  </tbody>
</table>
<center><a href="{{route('dashboard')}}" class="btn" style="background-color:lightgray; border-radius:10px">Back</a></center>
@endsection
