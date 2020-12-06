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
  <title>Produk</title>
</head>
<body>
    <div class="bg">
		<div class="bg-shadow">
			<div class="landing-text">
                <h1 style="color: #FCB371;">List Product</h1>
                <div class="homepage">
                    <a href=" {{route('produk.create')}} " class="btn btn-info btn-sm mt-4">Add Product</a>
                    <br><br>
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
                    <table class="table table-hover table-dark">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Product</th>
                                <th>Information</th>
                                <th>Price</th>
                                <th>Amount</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($produk as $result => $hasil)
                            <tr>
                                <td>{{$result + $produk->firstitem()}}</td>
                                <td>{{$hasil->nama_produk}}</td>
                                <td>{{$hasil->keterangan}}</td>
                                <td>{{$hasil->harga}}</td>
                                <td>{{$hasil->jumlah}}</td>
                                <td>
                                    <form action=" {{route('produk.destroy', $hasil->id)}} " method="POST">
                                        {{csrf_field()}}
                                        {{method_field('delete')}}
                                        <a href=" {{route('produk.edit', $hasil->id) }} " class="btn btn-primary btn-sm">Edit</a>
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>

                    {{ $produk->links() }}
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