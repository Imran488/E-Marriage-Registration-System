@extends('website.master')
@section('slides')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
    body {
        background-color: #25274d;
    }

    .contact {
        padding: 4%;
        height: 400px;
    }

    .col-md-3 {
        background: #ff9b00;
        padding: 4%;
        border-top-left-radius: 0.5rem;
        border-bottom-left-radius: 0.5rem;
    }

    .contact-info {
        margin-top: 10%;
    }

    .contact-info img {
        margin-bottom: 15%;
    }

    .contact-info h2 {
        margin-bottom: 10%;
    }

    .col-md-9 {
        background: #fff;
        padding: 3%;
        border-top-right-radius: 0.5rem;
        border-bottom-right-radius: 0.5rem;
    }

    .contact-form label {
        font-weight: 600;
    }

    .contact-form button {
        background: #25274d;
        color: #fff;
        font-weight: 600;
        width: 25%;
    }

    .contact-form button:focus {
        box-shadow: none;
    }

</style>

<div class="container contact">
    @if(session()->has('msg'))
    <p class="alert alert-success">{{session()->get('msg')}}</p>
    @endif
    <div class="row">
        <div class="col-md-3">
            <div class="contact-info">
                <img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image" />
                <h2> Message Us?</h2>
                <h4>We would love to hear from you !</h4>
            </div>
        </div>
        <div class="col-md-9">
            <form action="{{route('form.message')}}" method="POST">
                @csrf
                <div class="contact-form">

                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Email:</label>
                    <div class="col-sm-10">
                        <select name="email" class="form-control">
                            @foreach($user as $data)
                            @if($data->role =='user')
                            <option value="{{$data->id}}">{{$data->email}}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">subject:</label>
                    <div class="col-sm-10">
                        <select name="subject" class="form-control">

                            <option value="Marriage">Marriage</option>
                            <option value="Divorce">Divorce</option>
                            <option value="Certificate">Certificate</option>

                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="comment">Message:</label>
                    <div class="col-sm-10">
                        <textarea name="question" class="form-control" rows="5" id="comment" required></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Submit</button>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
