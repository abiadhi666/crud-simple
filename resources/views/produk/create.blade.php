<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link href="{{asset('public/css/style.css')}}" rel="stylesheet" type="text/css" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet"> 
  <link href="//db.onlinewebfonts.com/c/0b51833ff62e4af8acb5fd3e2bf59e97?family=SF+Pro+Display" rel="stylesheet" type="text/css"/>

  <style>
      .bg {
            background: url("{{asset('public/img/bg.svg')}}") no-repeat 50% 50%;
            display: table;
            height: 100%;
            width: 100%;
            background-size: cover;
        }
  </style>
  <title>Create Produk</title>
</head>
<body>
  <div class="bg">
		<div class="bg-shadow">
            <a href=" {{route('produk.index')}} ">
                <img src="{{asset('public/img/back.svg')}}" class="back-button">
            </a>
			<div class="landing-text">
                <h1 style="color: #FCB371;">Add Produk</h1>
                <div class="registration-form">
                    <form action="{{route('produk.store')}}" method="POST">
                    {!! csrf_field() !!}
                        @if(count($errors)>0)
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-danger">
                                    {{$error}}
                                </div>
                            @endforeach
                        @endif

                        @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session('success') }}
                            </div>
                        @endif
                        <div class="form-group">
                            <input type="text" class="form-control item" placeholder="Input product name" name="nama_produk">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control item" placeholder="Input product information" name="keterangan">
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control item" placeholder="Input product price" name="harga">
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control item" placeholder="Input product amount" name="jumlah">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-outline-warning button-secondary-2 btn-block">Submit</button>
                        </div>
                    </form>
                </div>
			</div>
		</div>
	</div>

  <script src="assets/js/script.js"></script>

  <!-- Bootstrap JS-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>