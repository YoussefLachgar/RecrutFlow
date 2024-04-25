@extends('layout.master')
@section('title', 'Search')


@section('content')
<div class="section-body mt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Search here...">
                        </div>                            
                        <p class="mb-0">Search Result For "Bootstrap 4 admin"</p>
                        <strong class="font-12"> About 16,853 result ( 0.13 seconds)</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section-body">
    <div class="container-fluid">
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#All" aria-expanded="true">All</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Images" aria-expanded="true">Images</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Video" aria-expanded="false">Video</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#News" aria-expanded="false">News</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#More" aria-expanded="false">More</a></li>
        </ul>
        <div class="tab-content mt-3">
            <div role="tabpanel" class="tab-pane vivify fadeIn active" id="All" aria-expanded="false">
                <div class="table-responsive">
                    <table class="table table-hover card-table table_custom">
                        <tbody>
                            <tr class="" >
                                <td>
                                    <h6><a target="_blank" href="javascript:void(0);">Bootstrap 4 Light &amp; Dark Admin with Free VueJs</a></h6>
                                    <span class="text-green font-13">https://themeforest.net/user/puffintheme</span>
                                    <p class="mt-10 mb-0 text-muted">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                </td>
                                <td>
                                    <span class="badge badge-success"><i class="fa fa-eye"></i> 1501</span>
                                </td>
                            </tr>
                            <tr class="">
                                <td>
                                    <h6><a target="_blank" href="javascript:void(0);">Bootstrap 4 Admin Dashboard Template</a></h6>
                                    <span class="text-green font-13">https://themeforest.net/user/puffintheme</span>
                                    <p class="mt-10 mb-0 text-muted">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                                </td>
                                <td>
                                    <span class="badge badge-success"><i class="fa fa-eye"></i> 1894</span>
                                </td>
                            </tr>
                            <tr class="">
                                <td>
                                    <h6><a target="_blank" href="javascript:void(0);">The ultimate Bootstrap 4 Admin Dashboard</a></h6>
                                    <span class="text-green font-13">https://themeforest.net/user/puffintheme</span>
                                    <p class="mt-10 mb-0 text-muted">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                                </td>
                                <td>
                                    <span class="badge badge-success"><i class="fa fa-eye"></i> 1205</span>
                                </td>
                            </tr>
                            <tr class="">
                                <td>
                                    <h6><a target="_blank" href="javascript:void(0);">Bootstrap 4 Admin Dashboard Template</a></h6>
                                    <span class="text-green font-13">https://themeforest.net/user/puffintheme</span>
                                    <p class="mt-10 mb-0 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                </td>
                                <td>
                                    <span class="badge badge-success"><i class="fa fa-eye"></i> 985</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane vivify fadeIn" id="Images" aria-expanded="true">
                <div class="card">
                    <div class="card-body text-center py-5">
                        <img src="../assets/images/search.svg" class="width360 mb-3" />
                        <h4>No Images Found</h4>
                        <span>Choose a different filter to view test results to you</span>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane vivify fadeIn" id="Video" aria-expanded="true">
                <div class="card">
                    <div class="card-body text-center py-5">
                        <img src="../assets/images/search.svg" class="width360  mb-3" />
                        <h4>No Video Found</h4>
                        <span>Choose a different filter to view test results to you</span>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane vivify fadeIn" id="News" aria-expanded="true">
                <div class="card">
                    <div class="card-body">
                        <article class="media">
                            <div class="mr-3">
                                <img class="w150" src="../assets/images/gallery/1.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <div class="content">
                                    <p class="h5">John Smith <small>@johnsmith</small> <small class="float-right text-muted">31 minutes ago</small></p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.</p>
                                </div>
                                <nav class="d-flex text-muted">
                                    <a href="#" class="icon mr-3"><i class="fe fe-repeat"></i></a>
                                    <a href="#" class="icon mr-3"><i class="fe fe-twitter"></i> 24</a>
                                    <a href="#" class="icon mr-3"><i class="fe fe-heart"></i> 43</a>
                                    <a href="" class="text-muted ml-auto">5 notes</a>
                                </nav>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <article class="media">
                            <div class="mr-3">
                                <img class="w150" src="../assets/images/gallery/2.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <div class="content">
                                    <p class="h5">John Smith <small>@johnsmith</small> <small class="float-right text-muted">31 minutes ago</small></p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.</p>
                                </div>
                                <nav class="d-flex text-muted">
                                    <a href="#" class="icon mr-3"><i class="fe fe-repeat"></i></a>
                                    <a href="#" class="icon mr-3"><i class="fe fe-twitter"></i> 24</a>
                                    <a href="#" class="icon mr-3"><i class="fe fe-heart"></i> 43</a>
                                    <a href="" class="text-muted ml-auto">5 notes</a>
                                </nav>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <article class="media">
                            <div class="mr-3">
                                <img class="w150" src="../assets/images/gallery/3.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <div class="content">
                                    <p class="h5">John Smith <small>@johnsmith</small> <small class="float-right text-muted">31 minutes ago</small></p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.</p>
                                </div>
                                <nav class="d-flex text-muted">
                                    <a href="#" class="icon mr-3"><i class="fe fe-repeat"></i></a>
                                    <a href="#" class="icon mr-3"><i class="fe fe-twitter"></i> 24</a>
                                    <a href="#" class="icon mr-3"><i class="fe fe-heart"></i> 43</a>
                                    <a href="" class="text-muted ml-auto">5 notes</a>
                                </nav>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <article class="media">
                            <div class="mr-3">
                                <img class="w150" src="../assets/images/gallery/4.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <div class="content">
                                    <p class="h5">John Smith <small>@johnsmith</small> <small class="float-right text-muted">31 minutes ago</small></p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.</p>
                                </div>
                                <nav class="d-flex text-muted">
                                    <a href="#" class="icon mr-3"><i class="fe fe-repeat"></i></a>
                                    <a href="#" class="icon mr-3"><i class="fe fe-twitter"></i> 24</a>
                                    <a href="#" class="icon mr-3"><i class="fe fe-heart"></i> 43</a>
                                    <a href="" class="text-muted ml-auto">5 notes</a>
                                </nav>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <article class="media">
                            <div class="mr-3">
                                <img class="w150" src="../assets/images/gallery/5.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <div class="content">
                                    <p class="h5">John Smith <small>@johnsmith</small> <small class="float-right text-muted">31 minutes ago</small></p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.</p>
                                </div>
                                <nav class="d-flex text-muted">
                                    <a href="#" class="icon mr-3"><i class="fe fe-repeat"></i></a>
                                    <a href="#" class="icon mr-3"><i class="fe fe-twitter"></i> 24</a>
                                    <a href="#" class="icon mr-3"><i class="fe fe-heart"></i> 43</a>
                                    <a href="" class="text-muted ml-auto">5 notes</a>
                                </nav>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('popup')

@stop

@section('page-styles')

@stop

@section('page-script')

<script src="{{ asset('assets/js/core.js') }}"></script>
@stop
