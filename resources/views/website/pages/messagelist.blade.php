@extends('website.master')
@section('slides')
<center>
    <h1 style="color:black"><u><b>Message Section</b></u></h1>

    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="container">
                <div class="row">
                    @foreach ($message as $key=>$list)
                    <div class="col-sm">
                        <table class="table table-dark table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Sl</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Subject</th>
                                    <th scope="col">My Message</th>
                                    <th scope="col">Message From Register</th>
                                    <th scope="col">Reply</th>

                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$list->user->name}}</td>
                                    <td>{{$list->user->email}}</td>
                                    <td>{{$list->subject}}</td>
                                    <td>{{$list->question}}</td>
                                    <td>{{$list->reply}}</td>
                                    <td><a class= "btn btn-primary"href="{{route('show.message')}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path fill="none" d="M0 0H24V24H0z"/><path d="M11 20L1 12l10-8v5c5.523 0 10 4.477 10 10 0 .273-.01.543-.032.81-1.463-2.774-4.33-4.691-7.655-4.805L13 15h-2v5zm-2-7h4.034l.347.007c1.285.043 2.524.31 3.676.766C15.59 12.075 13.42 11 11 11H9V8.161L4.202 12 9 15.839V13z"/></svg></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-6"></div>
        </div>
    </div>
    <br>
    @endsection
