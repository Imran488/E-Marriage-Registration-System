@extends('website.master')
@section('slides')
<center>
    <h1 style="color:black"><u><b>Answer Question Section</b></u></h1>

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
                                    <th scope="col">Question</th>
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
