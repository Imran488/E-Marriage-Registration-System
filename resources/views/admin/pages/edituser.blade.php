@extends('master')
@section('contents')
<center>

    <h1 style="color:black"><u>Update Form</u></h1>
    @if(session()->has('msg'))
    <p class="alert alert-success">{{session()->get('msg')}}</p>
    @endif
    <form action="{{route('userlist.update',$userlist->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <div class="col-md-4">
                <label for="exampleInputPassword1">Name</label>
                <input value="{{$userlist->name}}" type="name" name="name" class="form-control" id="exampleInputPassword1"
                    placeholder="Name Please">
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-4">
                <label for="exampleInputEmail1">Email </label>
                <input value="{{$userlist->email}}" type="email" name="email" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="Enter email">

            </div>
        </div>
        {{-- <div class="form-group">
            <div class="col-md-4">
                <label for="exampleInputPassword1">Password</label>
                <input value=""  type="password" name="password" class="form-control" id="exampleInputPassword1"
                    placeholder="Password Please">
            </div>
        </div> --}}
        <div class="form-group">
            <div class="col-md-4">
                <label for="exampleInputPassword1">Mobile Number</label>
                <input value="{{$userlist->mobile}}" type="number" name="number" class="form-control" id="exampleInputPassword1"
                    placeholder="Mobile Number">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{route('userlist')}}" class="btn btn-danger">Cancel</a>
    </form>
</center>
@endsection
