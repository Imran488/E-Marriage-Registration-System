<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
    body{
		background-color: #25274d;
	}
	.contact{
		padding: 4%;
		height: 400px;
	}
	.col-md-3{
		background: #ff9b00;
		padding: 4%;
		border-top-left-radius: 0.5rem;
		border-bottom-left-radius: 0.5rem;
	}
	.contact-info{
		margin-top:10%;
	}
	.contact-info img{
		margin-bottom: 15%;
	}
	.contact-info h2{
		margin-bottom: 10%;
	}
	.col-md-9{
		background: #fff;
		padding: 3%;
		border-top-right-radius: 0.5rem;
		border-bottom-right-radius: 0.5rem;
	}
	.contact-form label{
		font-weight:600;
	}
	.contact-form button{
		background: #25274d;
		color: #fff;
		font-weight: 600;
		width: 25%;
	}
	.contact-form button:focus{
		box-shadow:none;
	}
    </style>
<div class="container contact">
	<div class="row">
		<div class="col-md-3">
			<div class="contact-info">
				<img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/>
				<h2>Thank You</h2>
				<h4>Please Reply User Question !</h4>
			</div>
		</div>
		<div class="col-md-9">
            <form action="{{route('admin.question.reply',$questions->id)}}" method="POST">
                @csrf
                @method('PUT')
			<div class="contact-form">

				</div>

				<div class="form-group">
				  <label class="control-label col-sm-2" for="email">Email: {{$questions->user->email}}</label>

				</div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">subject:{{$questions->subject}}</label>

                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Question:{{$questions->question}}</label>

                  </div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="comment">Reply:</label>
				  <div class="col-sm-10">
					<textarea name="reply"class="form-control" rows="5" id="comment"></textarea>
				  </div>
				</div>
				<div class="form-group">
				  <div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default">Submit</button>
				  </div>
				</div>
			</div>
		</div>
	</div>
</form>
</div>
