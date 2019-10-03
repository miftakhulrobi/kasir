@extends('layouts.master')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">

        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Semua Product</h4>
              <div class="table-responsive">
                <table class="table table-striped table-hover">
                  <thead>
                    <tr>
                      <th>
                        Kode
                      </th>
                      <th>
                        Nama
                      </th>
                      <th>
                        Harga
                      </th>
                      <th>
                        Action
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($product as $p)
                    <tr>
                      <td class="py-1">
                       {{$p->kode}}
                      </td>
                      <td>
                        {{$p->productname}}
                      </td>
                      <td>
                          {{"Rp. " . number_format($p->harga, 2, ",", ".")}}
                      </td>
                      <td>
                            <a href="" class="btn btn-sm btn-warning btn-edit"><i class="fa fa-edit"></i></a>
                            <a href="" class="btn btn-sm btn-danger btn-delete"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>  
                    @endforeach
                  </tbody>
                </table>
              </div>
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
@endsection