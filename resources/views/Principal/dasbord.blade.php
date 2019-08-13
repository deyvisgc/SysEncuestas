
@extends('Principal.principal')
@section('contenido')
    <style>
        .texto_3d {
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 25px;
            font-weight: bold;
            color: #0b2e13;

            text-shadow: 0 1px 0 #ccc,
            0 2px 0 #c9c9c9,
            0 3px 0 #bbb,
            0 4px 0 #b9b9b9,
            0 5px 0 #aaa,
            0 6px 1px rgba(0, 0, 0, .1),
            0 0 5px rgba(0, 0, 0, .1),
            0 1px 3px rgba(0, 0, 0, .3),
            0 3px 5px rgba(0, 0, 0, .2),
            0 5px 10px rgba(0, 0, 0, .25),
            0 10px 10px rgba(0, 0, 0, .2),
            0 20px 20px rgba(0, 0, 0, .15) ;
        }
    </style>
    @switch(true)
        @case(Auth::user()->Rol_idRol==1)
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="panel text-center">
                        <div class="panel-heading">
                            <h4 class="panel-title text-muted font-light"> Usuarios Encuestados</h4>
                        </div>
                        @foreach($user as $u)

                            <div class="panel-body p-t-10">
                                <h2 class="m-t-0 m-b-15"><i class="mdi mdi-arrow-down-bold-circle-outline text-danger m-r-10"></i><b>{{$u->user}}</b></h2>
                                <p class="text-muted m-b-0 m-t-13">
                                    <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1"><i class="fa fa-arrow-right" style="font-size:15px"></i> Mas Detalles</a></p>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="panel text-center">
                        <div class="panel-heading"><h4 class="panel-title text-muted font-light">Usuarios no Encuestados</h4>
                        </div>
                        @foreach($user1 as $use)
                            <div class="panel-body p-t-10">
                                <h2 class="m-t-0 m-b-15"><i class="mdi mdi-arrow-up-bold-circle-outline text-primary m-r-10"></i><b>{{$use->user1}}</b>
                                </h2><p class="text-muted m-b-0 m-t-13">
                                    <a class="btn btn-danger" data-toggle="collapse" href="#multiCollapse2" role="button" aria-expanded="false" aria-controls="multiCollapseExample2"><i class="fa fa-arrow-right" style="font-size:15px"></i> Mas Detalles</a></p>

                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="panel text-center"><div class="panel-heading"><h5 class="panel-title text-muted font-light">Usuarios Registrados</h5>
                        </div>
                        @foreach($alluser as $allus)
                            <div class="panel-body p-t-10"><h2 class="m-t-0 m-b-15"><i class="mdi mdi-arrow-up-bold-circle-outline text-primary m-r-10"></i><b>{{$allus->alluser}}</b>
                                </h2>
                                <p class="text-muted m-b-0 m-t-23">
                                    <a class="btn btn-success" data-toggle="collapse" href="#multiCollapse3" role="button" aria-expanded="false" aria-controls="multiCollapse3"><i class="fa fa-arrow-right" style="font-size:15px"></i> Mas Detalles</a></p>

                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
        </div>
        <p>

        </p>
        <div class="row">
            <div class="col">
                <div class="collapse multi-collapse" id="multiCollapseExample1">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h4 class="panel-title"></h4>
                            <div class="panel-body"><br><br><br><br><br><br>

                                <div class="page-content-wrapper ">
                                    <div class="container">
                                        <div class="row">
                                            @foreach($user4 as $u)
                                                <div class="col-sm-4">
                                                    <div class="panel">
                                                        <div class="panel-body user-card">
                                                            <div class="media-main"> <a class="pull-left" href="#">
                                                                    @if($u->imagen=='')
                                                                        <img src="{{asset('descarga.jpg')}}" alt="" class="thumb-lg img-circle" />
                                                                    @elseif($u->imagen)
                                                                        <img src="{{asset('Imagenes/Usuario/'.$u->imagen)}}" alt="" class="thumb-lg img-circle" />
                                                                    @endif
                                                                </a>
                                                                <div class="info"><h4>{{$u->email}}</h4><p class="text-muted">{{$u->nombre.' '.$u->Apellidos}}</p>
                                                                </div>
                                                            </div>
                                                            <div class="clearfix">

                                                            </div>
                                                            <p class="text-muted info-text">
                                                            <p class="text-muted info-text"><i class="fa fa-phone-square text-dark">: </i> <span class="text-primary">{{$u->Telefono}}</span></p>
                                                            <p class="text-muted info-text"><i class="fa fa-address-card text-dark">: </i> <span class="text-primary">{{$u->DNI}}</span></p>
                                                            <p class="text-muted info-text"><i class="fas fa-home text-dark">: </i> <span class="text-primary">{{$u->direccion}}</span></p>


                                                            </p>
                                                            <!--   <ul class="social-links list-inline m-b-0">
                                                                  <li>
                                                                      <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#" data-original-title="Facebook"><i class="fa fa-facebook">

                                                                          </i>
                                                                      </a>
                                                                  </li>
                                                                  <li>
                                                                      <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#" data-original-title="Twitter"><i class="fa fa-twitter">
                                                                          </i>
                                                                      </a>
                                                                  </li>
                                                                  <li>
                                                                      <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#" data-original-title="1234567890"><i class="fa fa-phone"></i></a>
                                                                  </li>
                                                                  <li>
                                                                      <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#" data-original-title="@skypename"><i class="fa fa-skype"></i>
                                                                      </a>
                                                                  </li>
                                                                  <li>
                                                                      <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#" data-original-title="email@email.com"><i class="fa fa-envelope-o"></i>
                                                                      </a>
                                                                  </li>
                                                                  <hr>
                                                              </ul>-->

                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="collapse multi-collapse" id="multiCollapse2">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h4 class="panel-title"></h4>
                            <div class="panel-body"><br><br><br><br><br><br>

                                <div class="page-content-wrapper ">
                                    <div class="container">
                                        <div class="row">
                                            @foreach($user5 as $u)
                                                <div class="col-sm-4">
                                                    <div class="panel">
                                                        <div class="panel-body user-card">
                                                            <div class="media-main"> <a class="pull-left" href="#">
                                                                    @if($u->imagen=='')
                                                                        <img src="{{asset('descarga.jpg')}}" alt="" class="thumb-lg img-circle" />
                                                                    @elseif($u->imagen)
                                                                        <img src="{{asset('Imagenes/Usuario/'.$u->imagen)}}" alt="" class="thumb-lg img-circle" />
                                                                    @endif
                                                                </a>
                                                                <div class="info"><h4>{{$u->email}}</h4><p class="text-muted">{{$u->nombre.' '.$u->Apellidos}}</p>
                                                                </div>
                                                            </div>
                                                            <div class="clearfix">

                                                            </div>
                                                            <p class="text-muted info-text">
                                                            <p class="text-muted info-text"><i class="fa fa-phone-square text-dark">: </i> <span class="text-primary">{{$u->Telefono}}</span></p>
                                                            <p class="text-muted info-text"><i class="fa fa-address-card text-dark">: </i> <span class="text-primary">{{$u->DNI}}</span></p>
                                                            <p class="text-muted info-text"><i class="fas fa-home text-dark">: </i> <span class="text-primary">{{$u->direccion}}</span></p>


                                                            </p>
                                                            <!--   <ul class="social-links list-inline m-b-0">
                                                                  <li>
                                                                      <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#" data-original-title="Facebook"><i class="fa fa-facebook">

                                                                          </i>
                                                                      </a>
                                                                  </li>
                                                                  <li>
                                                                      <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#" data-original-title="Twitter"><i class="fa fa-twitter">
                                                                          </i>
                                                                      </a>
                                                                  </li>
                                                                  <li>
                                                                      <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#" data-original-title="1234567890"><i class="fa fa-phone"></i></a>
                                                                  </li>
                                                                  <li>
                                                                      <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#" data-original-title="@skypename"><i class="fa fa-skype"></i>
                                                                      </a>
                                                                  </li>
                                                                  <li>
                                                                      <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#" data-original-title="email@email.com"><i class="fa fa-envelope-o"></i>
                                                                      </a>
                                                                  </li>
                                                                  <hr>
                                                              </ul>-->

                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="collapse multi-collapse" id="multiCollapse3">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h4 class="panel-title"></h4>
                            <div class="panel-body"><br><br><br><br><br><br>

                                <div class="page-content-wrapper ">
                                    <div class="container">
                                        <div class="row">
                                            @foreach($user6 as $u)
                                                <div class="col-sm-4">
                                                    <div class="panel">
                                                        <div class="panel-body user-card">
                                                            <div class="media-main"> <a class="pull-left" href="#">
                                                                    @if($u->imagen=='')
                                                                        <img src="{{asset('descarga.jpg')}}" alt="" class="thumb-lg img-circle" />
                                                                    @elseif($u->imagen)
                                                                        <img src="{{asset('Imagenes/Usuario/'.$u->imagen)}}" alt="" class="thumb-lg img-circle" />
                                                                    @endif
                                                                </a>
                                                                <div class="info"><h4>{{$u->email}}</h4><p class="text-muted">{{$u->nombre.' '.$u->Apellidos}}</p>
                                                                </div>
                                                            </div>
                                                            <div class="clearfix">

                                                            </div>
                                                            <p class="text-muted info-text">
                                                            <p class="text-muted info-text"><i class="fa fa-phone-square text-dark">: </i> <span class="text-primary">{{$u->Telefono}}</span></p>
                                                            <p class="text-muted info-text"><i class="fa fa-address-card text-dark">: </i> <span class="text-primary">{{$u->DNI}}</span></p>
                                                            <p class="text-muted info-text"><i class="fas fa-home text-dark">: </i> <span class="text-primary">{{$u->direccion}}</span></p>


                                                            </p>
                                                            <!--   <ul class="social-links list-inline m-b-0">
                                                                  <li>
                                                                      <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#" data-original-title="Facebook"><i class="fa fa-facebook">

                                                                          </i>
                                                                      </a>
                                                                  </li>
                                                                  <li>
                                                                      <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#" data-original-title="Twitter"><i class="fa fa-twitter">
                                                                          </i>
                                                                      </a>
                                                                  </li>
                                                                  <li>
                                                                      <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#" data-original-title="1234567890"><i class="fa fa-phone"></i></a>
                                                                  </li>
                                                                  <li>
                                                                      <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#" data-original-title="@skypename"><i class="fa fa-skype"></i>
                                                                      </a>
                                                                  </li>
                                                                  <li>
                                                                      <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#" data-original-title="email@email.com"><i class="fa fa-envelope-o"></i>
                                                                      </a>
                                                                  </li>
                                                                  <hr>
                                                              </ul>-->

                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--  <div class="row">
                <div class="col-sm-6">
                    <div class="panel panel-primary">
                        <div class="panel-body">
                            <h4 class="m-t-0">Revenue</h4>
                            <ul class="list-inline widget-chart m-t-20 text-center">
                                <li> <i class="mdi mdi-arrow-up-bold-circle-outline text-primary"></i>
                                    <h4 class=""><b>5248</b></h4><p class="text-muted m-b-0">Marketplace</p>
                                </li>

                                <li>
                                    <i class="mdi mdi-arrow-down-bold-circle-outline text-danger"></i>
                                    <h4 class=""><b>321</b></h4>
                                    <p class="text-muted m-b-0">Last week</p>
                                </li><li> <i class="mdi mdi-arrow-down-bold-circle-outline text-danger">

                                    </i><h4 class=""><b>964</b></h4><p class="text-muted m-b-0">Last Month</p>
                                </li>
                            </ul>
                            <div id="morris-bar-example" style="height: 300px; position: relative; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg height="300" version="1.1" width="645" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.2</desc>
                                    <defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">

                                    </defs><text x="32.859375" y="261" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan></text>
                                    <path fill="none" stroke="#eef0f2" d="M45.359375,261H620" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.859375" y="202" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">25</tspan></text>
                                    <path fill="none" stroke="#eef0f2" d="M45.359375,202H620" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.859375" y="143" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">50</tspan></text><path fill="none" stroke="#eef0f2" d="M45.359375,143H620" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                    </path><text x="32.859375" y="84" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">75</tspan></text>
                                    <path fill="none" stroke="#eef0f2" d="M45.359375,84H620" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.859375" y="25" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">100</tspan></text>
                                    <path fill="none" stroke="#eef0f2" d="M45.359375,25H620" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="584.0849609375" y="273.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2016</tspan></text><text x="440.4248046875" y="273.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2014</tspan></text><text x="296.7646484375" y="273.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2012</tspan></text>
                                    <text x="153.1044921875" y="273.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2010</tspan>
                                    </text><rect x="66.9083984375" y="25" width="12.866015625000001" height="236" rx="0" ry="0" fill="#3292e0" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="82.7744140625" y="48.60000000000002" width="12.866015625000001" height="212.39999999999998" rx="0" ry="0" fill="#dedede" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="138.7384765625" y="84" width="12.866015625000001" height="177" rx="0" ry="0" fill="#3292e0" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect>
                                    <rect x="154.6044921875" y="107.6" width="12.866015625000001" height="153.4" rx="0" ry="0" fill="#dedede" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;">
                                    </rect><rect x="210.5685546875" y="143" width="12.866015625000001" height="118" rx="0" ry="0" fill="#3292e0" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="226.4345703125" y="166.60000000000002" width="12.866015625000001" height="94.39999999999998" rx="0" ry="0" fill="#dedede" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="282.3986328125" y="84" width="12.866015625000001" height="177" rx="0" ry="0" fill="#3292e0" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;">
                                    </rect><rect x="298.2646484375" y="107.6" width="12.866015625000001" height="153.4" rx="0" ry="0" fill="#dedede" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="354.2287109375" y="143" width="12.866015625000001" height="118" rx="0" ry="0" fill="#3292e0" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;">
                                    </rect><rect x="370.0947265625" y="166.60000000000002" width="12.866015625000001" height="94.39999999999998" rx="0" ry="0" fill="#dedede" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="426.0587890625" y="84" width="12.866015625000001" height="177" rx="0" ry="0" fill="#3292e0" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;">
                                    </rect><rect x="441.9248046875" y="107.6" width="12.866015625000001" height="153.4" rx="0" ry="0" fill="#dedede" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;">
                                    </rect><rect x="497.8888671875" y="25" width="12.866015625000001" height="236" rx="0" ry="0" fill="#3292e0" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;">
                                    </rect><rect x="513.7548828125" y="48.60000000000002" width="12.866015625000001" height="212.39999999999998" rx="0" ry="0" fill="#dedede" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;">
                                    </rect><rect x="569.7189453125" y="48.60000000000002" width="12.866015625000001" height="212.39999999999998" rx="0" ry="0" fill="#3292e0" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;">
                                    </rect><rect x="585.5849609375" y="84" width="12.866015625000001" height="177" rx="0" ry="0" fill="#dedede" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect></svg>
                                <div class="morris-hover morris-default-style" style="display: none;">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="panel panel-primary">
                        <div class="panel-body">
                            <h4 class="m-t-0">Email Sent</h4>
                            <ul class="list-inline widget-chart m-t-20 text-center"><li>
                                    <i class="mdi mdi-arrow-up-bold-circle-outline text-primary"></i>
                                    <h4 class=""><b>3654</b></h4>
                                    <p class="text-muted m-b-0">Marketplace</p>
                                </li>
                                <li>
                                    <i class="mdi mdi-arrow-down-bold-circle-outline text-danger"></i>
                                    <h4 class=""><b>954</b></h4>
                                    <p class="text-muted m-b-0">Last week</p></li>
                                <li> <i class="mdi mdi-arrow-up-bold-circle-outline text-primary"></i>
                                    <h4 class=""><b>8462</b></h4><p class="text-muted m-b-0">Last Month</p>
                                </li>
                            </ul>
                            <div id="morris-area-example" style="height: 300px; position: relative; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg height="300" version="1.1" width="645" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; left: -0.5px;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.2</desc>
                                    <defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">

                                    </defs><text x="32.859375" y="261" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan></text><path fill="none" stroke="#eef0f2" d="M45.359375,261H620" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                                    <text x="32.859375" y="202" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">50</tspan></text>
                                    <path fill="none" stroke="#eef0f2" d="M45.359375,202H620" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.859375" y="143" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">100</tspan></text>
                                    <path fill="none" stroke="#eef0f2" d="M45.359375,143H620" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.859375" y="84" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">150</tspan></text><path fill="none" stroke="#eef0f2" d="M45.359375,84H620" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.859375" y="25" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">200</tspan></text>
                                    <path fill="none" stroke="#eef0f2" d="M45.359375,25H620" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="620" y="273.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2016</tspan></text>
                                    <text x="537.9405993251173" y="273.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2015</tspan></text>
                                    <text x="455.88119865023475" y="273.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2014</tspan></text>
                                    <text x="373.8217979753521" y="273.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2013</tspan></text>
                                    <text x="291.5375770246479" y="273.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2012</tspan></text>
                                    <text x="209.47817634976525" y="273.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2011</tspan></text><text x="127.41877567488262" y="273.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2010</tspan></text>
                                    <text x="45.359375" y="273.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2009</tspan></text>
                                    <path fill="#ececec" stroke="none" d="M45.359375,225.6C65.87422516872066,193.15,106.90392550616197,104.65,127.41877567488262,95.80000000000001C147.9336258436033,86.95000000000002,188.96332618104458,154.8,209.47817634976525,154.8C229.99302651848592,154.8,271.0227268559272,95.80000000000001,291.5375770246479,95.80000000000001C312.1086322623239,95.80000000000001,353.2507427376761,154.8,373.8217979753521,154.8C394.3366481440728,154.8,435.3663484815141,104.65000000000002,455.88119865023475,95.80000000000001C476.39604881895536,86.95000000000002,517.4257491563967,87.6875,537.9405993251173,84C558.4554494938379,80.3125,599.4851498312794,70.72500000000001,620,66.30000000000001L620,261L45.359375,261Z" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></path>
                                    <path fill="none" stroke="#bdbdbd" d="M45.359375,225.6C65.87422516872066,193.15,106.90392550616197,104.65,127.41877567488262,95.80000000000001C147.9336258436033,86.95000000000002,188.96332618104458,154.8,209.47817634976525,154.8C229.99302651848592,154.8,271.0227268559272,95.80000000000001,291.5375770246479,95.80000000000001C312.1086322623239,95.80000000000001,353.2507427376761,154.8,373.8217979753521,154.8C394.3366481440728,154.8,435.3663484815141,104.65000000000002,455.88119865023475,95.80000000000001C476.39604881895536,86.95000000000002,517.4257491563967,87.6875,537.9405993251173,84C558.4554494938379,80.3125,599.4851498312794,70.72500000000001,620,66.30000000000001" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                                    <circle cx="45.359375" cy="225.6" r="3" fill="#bdbdbd" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="127.41877567488262" cy="95.80000000000001" r="3" fill="#bdbdbd" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                    <circle cx="209.47817634976525" cy="154.8" r="3" fill="#bdbdbd" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                    <circle cx="291.5375770246479" cy="95.80000000000001" r="3" fill="#bdbdbd" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                    <circle cx="373.8217979753521" cy="154.8" r="3" fill="#bdbdbd" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="455.88119865023475" cy="95.80000000000001" r="3" fill="#bdbdbd" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                    <circle cx="537.9405993251173" cy="84" r="3" fill="#bdbdbd" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="620" cy="66.30000000000001" r="3" fill="#bdbdbd" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><path fill="#7cb0d9" stroke="none" d="M45.359375,249.2C65.87422516872066,230.02499999999998,106.90392550616197,178.4,127.41877567488262,172.5C147.9336258436033,166.6,188.96332618104458,202,209.47817634976525,202C229.99302651848592,202,271.0227268559272,172.5,291.5375770246479,172.5C312.1086322623239,172.5,353.2507427376761,202,373.8217979753521,202C394.3366481440728,202,435.3663484815141,178.4,455.88119865023475,172.5C476.39604881895536,166.6,517.4257491563967,157.01250000000002,537.9405993251173,154.8C558.4554494938379,152.5875,599.4851498312794,154.8,620,154.8L620,261L45.359375,261Z" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></path><path fill="none" stroke="#3292e0" d="M45.359375,249.2C65.87422516872066,230.02499999999998,106.90392550616197,178.4,127.41877567488262,172.5C147.9336258436033,166.6,188.96332618104458,202,209.47817634976525,202C229.99302651848592,202,271.0227268559272,172.5,291.5375770246479,172.5C312.1086322623239,172.5,353.2507427376761,202,373.8217979753521,202C394.3366481440728,202,435.3663484815141,178.4,455.88119865023475,172.5C476.39604881895536,166.6,517.4257491563967,157.01250000000002,537.9405993251173,154.8C558.4554494938379,152.5875,599.4851498312794,154.8,620,154.8" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="45.359375" cy="249.2" r="3" fill="#3292e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                    <circle cx="127.41877567488262" cy="172.5" r="3" fill="#3292e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="209.47817634976525" cy="202" r="3" fill="#3292e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="291.5375770246479" cy="172.5" r="3" fill="#3292e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="373.8217979753521" cy="202" r="3" fill="#3292e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="455.88119865023475" cy="172.5" r="3" fill="#3292e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="537.9405993251173" cy="154.8" r="3" fill="#3292e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="620" cy="154.8" r="3" fill="#3292e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle></svg>
                                <div class="morris-hover morris-default-style" style="display: none;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="panel">
                        <div class="panel-body">
                            <h4 class="m-b-30 m-t-0">Goal Completion</h4>
                            <p class="font-600 m-b-5">Add Product to cart <span class="text-primary pull-right"><b>80%</b>
                                </span>
                            </p>
                            <div class="progress m-b-20"><div class="progress-bar progress-bar-primary " role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">

                                </div>
                            </div>
                            <p class="font-600 m-b-5">Complete Purchases <span class="text-primary pull-right"><b>50%</b>
                                </span>
                            </p>
                            <div class="progress m-b-20"><div class="progress-bar progress-bar-primary " role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                                </div>
                            </div>
                            <p class="font-600 m-b-5">Visit Premium plan <span class="text-primary pull-right"><b>70%</b>
                                </span>
                            </p>
                            <div class="progress m-b-20">
                                <div class="progress-bar progress-bar-primary " role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">

                                </div>
                            </div>
                            <p class="font-600 m-b-5">Send Inquiries <span class="text-primary pull-right"><b>65%</b>
                                </span>
                            </p>
                            <div class="progress m-b-20">
                                <div class="progress-bar progress-bar-primary " role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%;"></div></div><p class="font-600 m-b-5">Monthly Purchases <span class="text-primary pull-right"><b>25%</b>
                                </span>
                            </p>
                            <div class="progress m-b-20"><div class="progress-bar progress-bar-primary " role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                                </div>
                            </div>
                            <p class="font-600 m-b-5"> Daily Visits<span class="text-primary pull-right"><b>40%</b>
                                </span>
                            </p>
                            <div class="progress m-b-0">
                                <div class="progress-bar progress-bar-primary " role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="panel">
                        <div class="panel-body">
                            <h4 class="m-b-30 m-t-0">Recent Contacts</h4>
                            <div class="row"><div class="col-xs-12">
                                    <div class="table-responsive"><table class="table table-hover m-b-0"><thead>
                                            <tr><th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                            </tr>
                                            <tr>
                                                <td>Garrett Winters</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>63</td>
                                                <td>2011/07/25</td>
                                                <td>$170,750</td>
                                            </tr>
                                            <tr>
                                                <td>Ashton Cox</td>
                                                <td>Junior Technical Author</td>
                                                <td>San Francisco</td>
                                                <td>66</td>
                                                <td>2009/01/12</td>
                                                <td>$86,000</td>
                                            </tr>
                                            <tr>
                                                <td>Cedric Kelly</td>
                                                <td>Senior Javascript Developer</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td>2012/03/29</td>
                                                <td>$433,060</td>
                                            </tr><tr><td>Airi Satou</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>33</td>
                                                <td>2008/11/28</td>
                                                <td>$162,700</td>
                                            </tr>
                                            <tr>
                                                <td>Brielle Williamson</td>
                                                <td>Integration Specialist</td>
                                                <td>New York</td>
                                                <td>61</td>
                                                <td>2012/12/02</td>
                                                <td>$372,000</td>
                                            </tr>
                                            <tr>
                                                <td>Herrod Chandler</td>
                                                <td>Sales Assistant</td>
                                                <td>San Francisco</td>
                                                <td>59</td>
                                                <td>2012/08/06</td>
                                                <td>$137,500</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->

        </div>
        </div>
        @break
        @case(Auth::user()->Rol_idRol==2)
        <div class="container" >
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-dark ">
                        <div class="panel-body">

                            <div class="ex-page-content text-center">
                                <h2 class="texto_3d">BIENVENIDO AL SYSENCUESTA PORFAV0R RESPONDA LAS ENCUESTA CON CONCIENCIA </h2>
                                <h2 class="texto_3d">SR: <label>{{Auth::user()->nombre}} {{Auth::user()->Apellidos}}</label> </h2>

                                <h3 class="text-center m-t-0 m-b-15" > <img src="{{asset('assets/images/fondo-user.jpg')}}" style="width: 450px"></h3>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        @break
        @endswitch



@endsection
@section('script')


