<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Iklan | Struk</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('lte/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('lte/dist/css/adminlte.min.css')}}">
</head>

<body>
    <!-- <div class="wrapper">
        <section class="invoice">
            <div class="row">
                <div class="col-12">
                    <h2 class="page-header">
                        <i class="fas fa-globe"></i> Iklan
                        <small class="float-right">Date: 2/10/2014</small>
                    </h2>
                </div>
            </div> -->
    <!-- info row -->
    <div class="row invoice-info mb-5">
        <div class="col-sm-2 invoice-col">
            <img src="{{asset('image/Lambang_Kota_Salatiga.png')}}" style="width: 190px; height: 230px;">
        </div>
        <!-- /.col -->
        <div class="col-sm-8 invoice-col">
            <center>
                <h2>DINAS KOMUNIKASI DAN INFORMATIKA</h2><br>
                <h1><b><u>KOTA SALATIGA</u></b></h1><br>
                Jl. Letjend Sukowati No. 51 Salatiga, Jawa Tengah 50724<br>
                Telp. :(0298) 326767, Fax : (0298) 321398<br>
                Email : diskominfo@salatiga.go.id<br>
                Website : https://diskominfo.salatiga.go.id/
            </center>
        </div>
        <!-- /.col -->
        <div class="col-sm-2 invoice-col">
            <center>
            <h2><b>KUITANSI</b></h2><br>
            <span class="border border-4" style="width: 150px;">
            <b>No. {{$data_pelanggan->id}}</b>
            </span>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
        <div class="col-12 table-responsive mt-5">
            <table class="table table-striped">
                <?php foreach ($pelanggan as $d) : ?>
                    <thead>
                        <tr>
                            <th>Qty</th>
                            <th>Product</th>
                            <th>Serial #</th>
                            <th>Description</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>{{$d->nama}}</td>
                            <td>455-981-221</td>
                            <td>El snort testosterone trophy driving gloves handsome</td>
                            <td>$64.50</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Need for Speed IV</td>
                            <td>247-925-726</td>
                            <td>Wes Anderson umami biodiesel</td>
                            <td>$50.00</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Monsters DVD</td>
                            <td>735-845-642</td>
                            <td>Terry Richardson helvetica tousled street art master</td>
                            <td>$10.70</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Grown Ups Blue Ray</td>
                            <td>422-568-642</td>
                            <td>Tousled lomo letterpress</td>
                            <td>$25.99</td>
                        </tr>
                    </tbody>
                <?php endforeach ?>
            </table>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="row">
        <!-- accepted payments column -->
        <div class="col-9">
        </div>
        <!-- /.col -->
        <div class="col-3">
            <p>Salatiga, 2/22/2014</p>
            <br>
            <br>
            (................................)
        </div>
    </div>
    <!-- /.col -->
    </div>
    <!-- /.row -->
    </section>
    <!-- /.content -->
    </div>
    <!-- ./wrapper -->
    <!-- Page specific script -->
    <script>
        window.addEventListener("load", window.print());
    </script>
</body>

</html>