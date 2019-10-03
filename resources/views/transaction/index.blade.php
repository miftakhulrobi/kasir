@extends('layouts.master')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">

        {{-- <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                
                    <div class="form-group">
                        <input type="text" name="" class="form-control" placeholder="No. Nota">
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                
                    <h1 class="text-center">Rp. 120.000 ,-</h1>

                </div>
            </div>
        </div> --}}
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <input type="text" name="kode" class="form-control" placeholder="Kode" readonly>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <input type="text" name="productname" class="form-control" placeholder="Product" readonly>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <input type="text" name="harga" class="form-control" placeholder="Harga" readonly>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <input type="text" name="qty" class="form-control" placeholder="Qty">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <input type="text" name="total" class="form-control" placeholder="Total" readonly>
                            </div>
                        </div>
                    </div>
                <button type="button" class="btn btn-primary btn-sm cari-product" data-toggle="modal" data-target="#cariproduct">Cari Product</button>
                <button type="button" class="btn btn-warning btn-sm float-right batal-item">Batal Item</button>
                <button type="button" class="btn btn-success btn-sm float-right mr-1 simpan-item">Simpan Item</button>
                </div>
            </div>
        </div>
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Kode</th>
                                <th>Product</th>
                                <th>Harga</th>
                                <th>Qty</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody class="table-target">
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <input type="text" name="subtotalprice" class="form-control" placeholder="Sub Total" readonly>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <input type="text" name="discount" class="form-control" value="0" placeholder="Discount">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <input type="text" name="totaldiscount" class="form-control" placeholder="Rp." readonly>
                            </div>
                        </div>
                    </div>
                  
                    <div class="form-group">
                        <input type="text" name="resulttotal" class="form-control" placeholder="Total" readonly>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <input type="text" name="bayar" class="form-control" placeholder="Bayar">
                    </div>
                    <div class="form-group">
                        <input type="text" name="kembalian" class="form-control" placeholder="Kembalian" readonly>
                    </div>
 
                    {{-- <div class="form-group">
                        <button type="button" class="btn btn-success btn-sm">Simpan</button>
                    </div> --}}
              
                </div>
            </div>
        </div>
        <div class="col-lg-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <p class="text-center bg-success">Total belanja</p>
                    <h3 class="text-center">Rp. <span class="sub-total-price"></span> ,-</h3>
                    <p class="text-center bg-warning mt-4">Kembalian</p>
                    <h3 class="text-center">Rp. <span class="kembalian"></span> ,-</h3>
                </div>
            </div>
        </div>
        
        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->
    <footer class="footer">
        <div class="container-fluid clearfix">
        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2019
            <a href="http://miftakhulrobi.github.io/" target="_blank">Miftakhul Robi</a>. All rights reserved.</span>
        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with
            <i class="mdi mdi-heart text-danger"></i>
        </span>
        </div>
    </footer>
    <!-- partial -->
</div>


{{-- modal --}}
<div class="modal fade" id="cariproduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="cariproductLabel">Semua Product</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <table class="table table-striped table-hover">
                <thead class="bg-success">
                    <tr>
                        <th>Kode</th>
                        <th>Product</th>
                        <th>Harga</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($product as $p)
                    <tr>
                        <td>{{$p->kode}}</td>
                        <td>
                            <a href="#" class="pilih-product" productid="{{$p->id}}">{{$p->productname}}</a>
                        </td>
                        <td>{{$p->harga}}</td>
                    </tr>  
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

@section('footer')
<script>
$(document).ready(function() {
    $('.pilih-product').click(function() {
        let id = $(this).attr('productid');

        $.ajax({
            type: 'GET',
            url: '/transaction/showid/'+id,
            dataType: 'json',
            success: function(data) {
                $('[name="kode"]').val(data.kode);
                $('[name="productname"]').val(data.productname);
                $('[name="harga"]').val(data.harga);
                $('#cariproduct').modal('hide');
            }
        })

        $('.badge-animasi').addClass('badge-success');
    })

    $('[name="qty"]').keyup(function() {
        let qty = $('[name="qty"]').val();
        let harga = $('[name="harga"]').val();
        let total = qty * harga;

        $('[name="total"]').val(total);
    })

    $('.batal-item').click(function() {
        $('[name="kode"]').val('');
        $('[name="productname"]').val('');
        $('[name="harga"]').val('');
        $('[name="qty"]').val('');
        $('[name="total"]').val('');
    })

    // simpan item
    $('.simpan-item').click(function() {
        let kode = $('[name="kode"]').val();
        let productname = $('[name="productname"]').val();
        let harga = $('[name="harga"]').val();
        let qty = $('[name="qty"]').val();
        let total = $('[name="total"]').val();

        if(!qty) {
            alert('Qty kosong!');
        } else {
            $('.table-target').append(`<tr>
                                        <td>${kode}</td>
                                        <td>${productname}</td>
                                        <td>${harga}</td>
                                        <td>${qty}</td>
                                        <td>${total}</td>
                                    </tr>
            `);

            $('[name="kode"]').val('');
            $('[name="productname"]').val('');
            $('[name="harga"]').val('');
            $('[name="qty"]').val('');
            $('[name="total"]').val('');

            $('[name="discount"]').val('');
            $('[name="totaldiscount"]').val('');
            $('[name="resulttotal"]').val('');
            
            let subtotalprice = $('[name="subtotalprice"]').val();
            if(!subtotalprice) {
                $('[name="subtotalprice"]').val(total);
                $('[name="resulttotal"]').val(total);
                $('.sub-total-price').text(total);
            } else {
                let newtotal = parseInt(total) + parseInt(subtotalprice);
                $('[name="subtotalprice"]').val(newtotal);
                $('[name="resulttotal"]').val(newtotal);
                $('.sub-total-price').text(newtotal);
            }
        }

    })

    $('[name="discount"]').keyup(function() {
        let subtotalprice = $('[name="subtotalprice"]').val();
        let discount = $('[name="discount"]').val();
        let totaldiscount = subtotalprice * discount / 100
        let resulttotal = subtotalprice - totaldiscount;

        $('[name="resulttotal"]').val(resulttotal);
        $('[name="totaldiscount"]').val(totaldiscount);

        $('.sub-total-price').text(resulttotal);

        $('[name="bayar"]').val('');
        $('[name="kembalian"]').val('');
        $('.kembalian').text('');
    })

    $('[name="bayar"]').keyup(function() {
        let bayar = $('[name="bayar"]').val();
        let resulttotal = $('[name="resulttotal"]').val();
        let kembalian = parseInt(bayar) - parseInt(resulttotal);

        $('[name="kembalian"]').val(kembalian);
        $('.kembalian').text(kembalian);
    })
})
</script>   
@endsection