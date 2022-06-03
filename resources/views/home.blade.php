@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Halaman Utama') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="in-card" style="text-align: center">
                        <h3>Our Special Product</h3>
                        <div class="container">
                            <div class="row">
                              <div class="col-sm">
                                <div class="card">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                              </div>
                              <div class="col-sm">
                                <div class="card">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                              </div>
                              <div class="col-sm">
                                <div class="card">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                              </div>
                              <div class="col-sm">
                                <div class="card">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
