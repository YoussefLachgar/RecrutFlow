@extends('layout.master')
@section('title', 'Contact List')


@section('content')
<div class="section-body mt-3">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-md-flex justify-content-between">
                            <ul class="nav nav-tabs b-none">
                                <li class="nav-item"><a class="nav-link active" id="list-tab" data-toggle="tab" href="#list"><i class="fa fa-list-ul"></i> List</a></li>
                                <li class="nav-item"><a class="nav-link" id="grid-tab" data-toggle="tab" href="#grid"><i class="fa fa-th"></i> Grid</a></li>
                                <li class="nav-item"><a class="nav-link" id="addnew-tab" data-toggle="tab" href="#addnew"><i class="fa fa-plus"></i> Add New</a></li>
                            </ul>
                            <div class="d-flex align-items-center sort_stat">
                                <div class="d-flex">
                                    <span class="bh_income">2,5,1,8,3,6,7,5,3,6,7,5</span>
                                    <div class="ml-2">
                                        <p class="mb-0 font-11">MY INCOME</p>
                                        <h5 class="font-16 mb-0">$5,510</h5>
                                    </div>
                                </div>
                                <div class="d-flex ml-3">
                                    <span class="bh_traffic">5,8,9,10,5,2,5,8,9,10</span> 
                                    <div class="ml-2">
                                        <p class="mb-0 font-11">SITE TRAFFIC</p>
                                        <h5 class="font-16 mb-0">53% Up</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mt-2">
                            <input type="text" class="form-control search" placeholder="Search...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section-body">
    <div class="container-fluid">
        <div class="tab-content">
            <div class="tab-pane fade show active" id="list" role="tabpanel">
                <div class="table-responsive" id="users">
                    <table class="table table-hover table-vcenter text-nowrap table_custom border-style list">
                        <tbody>
                            <tr class="">
                                <td class="width35 hidden-xs">
                                    <a href="javascript:void(0);" class="mail-star"><i class="fa fa-star"></i></a>
                                </td>
                                <td class="text-center width40">
                                    <div class="avatar d-block">
                                        <img class="avatar" src="../assets/images/xs/avatar4.jpg" alt="avatar">
                                    </div>
                                </td>
                                <td>
                                    <div><a href="javascript:void(0);">John Smith</a></div>
                                    <div class="text-muted">+264-625-2583</div>
                                </td>
                                <td class="hidden-xs">
                                    <div class="text-muted">johnsmith@info.com</div>
                                </td>
                                <td class="hidden-sm">
                                    <div class="text-muted">455 S. Airport St. Moncks Corner, SC 29461</div>                                                
                                </td>
                                <td class="text-right">
                                    <a class="btn btn-sm btn-link" href="javascript:void(0)" data-toggle="tooltip" title="Phone"><i class="fa fa-phone"></i></a>
                                    <a class="btn btn-sm btn-link" href="javascript:void(0)" data-toggle="tooltip" title="Mail"><i class="fa fa-envelope"></i></a>
                                    <a class="btn btn-sm btn-link hidden-xs js-sweetalert" data-type="confirm" href="javascript:void(0)" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr class="">
                                <td class="width35 hidden-xs">
                                    <a href="javascript:void(0);" class="mail-star active"><i class="fa fa-star"></i></a>
                                </td>
                                <td class="text-center width40">
                                    <div class="avatar d-block">
                                        <img class="avatar" src="../assets/images/xs/avatar2.jpg" alt="avatar">
                                    </div>
                                </td>
                                <td>
                                    <div><a href="javascript:void(0);">Merri Diamond</a></div>
                                    <div class="text-muted">+264-625-2583</div>
                                </td>
                                <td class="hidden-xs">
                                    <div class="text-muted">hermanbeck@info.com</div>
                                </td>
                                <td class="hidden-sm">
                                    <div class="text-muted">455 S. Airport St. Moncks Corner, SC 29461</div>                                                
                                </td>
                                <td class="text-right">
                                    <a class="btn btn-sm btn-link" href="javascript:void(0)" data-toggle="tooltip" title="Phone"><i class="fa fa-phone"></i></a>
                                    <a class="btn btn-sm btn-link" href="javascript:void(0)" data-toggle="tooltip" title="Mail"><i class="fa fa-envelope"></i></a>
                                    <a class="btn btn-sm btn-link hidden-xs js-sweetalert" data-type="confirm" href="javascript:void(0)" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr class="">
                                <td class="hidden-xs">
                                    <a href="javascript:void(0);" class="mail-star love"><i class="fa fa-heart"></i></a>
                                </td>
                                <td class="text-center width40">
                                    <div class="avatar d-block">
                                        <img class="avatar" src="../assets/images/xs/avatar3.jpg" alt="avatar">
                                    </div>
                                </td>
                                <td>
                                    <div class="from"><a href="javascript:void(0);">Sara Hopkins</a></div>
                                    <div class="text-muted">+264-625-3333</div>
                                </td>
                                <td class="hidden-xs">
                                    <div class="text-muted">maryadams@info.com</div>
                                </td>
                                <td class="hidden-sm">
                                    <div class="text-muted">19 Ohio St. Snellville, GA 30039</div>                                                
                                </td>
                                <td class="text-right">
                                    <a class="btn btn-sm btn-link" href="javascript:void(0)" data-toggle="tooltip" title="Phone"><i class="fa fa-phone"></i></a>
                                    <a class="btn btn-sm btn-link" href="javascript:void(0)" data-toggle="tooltip" title="Mail"><i class="fa fa-envelope"></i></a>
                                    <a class="btn btn-sm btn-link hidden-xs js-sweetalert" data-type="confirm" href="javascript:void(0)" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr class="">
                                <td class="hidden-xs">
                                    <a href="javascript:void(0);" class="mail-star active"><i class="fa fa-star"></i></a>
                                </td>
                                <td class="text-center width40">
                                    <div class="avatar d-block">
                                        <img class="avatar" src="../assets/images/xs/avatar7.jpg" alt="avatar">
                                    </div>
                                </td>
                                <td>
                                    <div class="from"><a href="javascript:void(0);">Andrew Patrick</a></div>
                                    <div class="text-muted">+264-625-2586</div>
                                </td>
                                <td class="hidden-xs">
                                    <div class="text-muted">mikethimas@info.com</div>
                                </td>
                                <td class="hidden-sm">
                                    <div class="text-muted">728 Blackburn St. Andover, MA 01810</div>                                                
                                </td>
                                <td class="text-right">
                                    <a class="btn btn-sm btn-link" href="javascript:void(0)" data-toggle="tooltip" title="Phone"><i class="fa fa-phone"></i></a>
                                    <a class="btn btn-sm btn-link" href="javascript:void(0)" data-toggle="tooltip" title="Mail"><i class="fa fa-envelope"></i></a>
                                    <a class="btn btn-sm btn-link hidden-xs js-sweetalert" data-type="confirm" href="javascript:void(0)" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr class="">
                                <td class="hidden-xs">
                                    <a href="javascript:void(0);" class="mail-star"><i class="fa fa-star"></i></a>
                                </td>
                                <td class="text-center width40">
                                    <div class="avatar d-block">
                                        <img class="avatar" src="../assets/images/xs/avatar5.jpg" alt="avatar">
                                    </div>
                                </td>
                                <td>
                                    <div class="from"><a href="javascript:void(0);">Claire Peters</a></div>
                                    <div class="text-muted">+264-625-3333</div>
                                </td>
                                <td class="hidden-xs">
                                    <div class="text-muted">clairepeters@info.com</div>
                                </td>
                                <td class="hidden-sm">
                                    <div class="text-muted">19 Ohio St. Snellville, GA 30039</div>                                                
                                </td>
                                <td class="text-right">
                                    <a class="btn btn-sm btn-link" href="javascript:void(0)" data-toggle="tooltip" title="Phone"><i class="fa fa-phone"></i></a>
                                    <a class="btn btn-sm btn-link" href="javascript:void(0)" data-toggle="tooltip" title="Mail"><i class="fa fa-envelope"></i></a>
                                    <a class="btn btn-sm btn-link hidden-xs js-sweetalert" data-type="confirm" href="javascript:void(0)" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr class="" >
                                <td class="hidden-xs">
                                    <a href="javascript:void(0);" class="mail-star"><i class="fa fa-star"></i></a>
                                </td>
                                <td class="text-center width40">
                                    <div class="avatar d-block">
                                        <img class="avatar" src="../assets/images/xs/avatar6.jpg" alt="avatar">
                                    </div>
                                </td>
                                <td>
                                    <div class="from"><a href="javascript:void(0);">Allen Collins</a></div>
                                    <div class="text-muted">+264-625-4526</div>
                                </td>
                                <td class="hidden-xs">
                                    <div class="text-muted">kenpatrick@info.com</div>
                                </td>
                                <td class="hidden-sm">
                                    <div class="text-muted">728 Blackburn St. Andover, MA 01810</div>                                                
                                </td>
                                <td class="text-right">
                                    <a class="btn btn-sm btn-link" href="javascript:void(0)" data-toggle="tooltip" title="Phone"><i class="fa fa-phone"></i></a>
                                    <a class="btn btn-sm btn-link" href="javascript:void(0)" data-toggle="tooltip" title="Mail"><i class="fa fa-envelope"></i></a>
                                    <a class="btn btn-sm btn-link hidden-xs js-sweetalert" data-type="confirm" href="javascript:void(0)" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr class="">
                                <td class="width35 hidden-xs">
                                    <a href="javascript:void(0);" class="mail-star"><i class="fa fa-star"></i></a>
                                </td>
                                <td class="text-center width40">
                                    <div class="avatar d-block">
                                        <img class="avatar" src="../assets/images/xs/avatar4.jpg" alt="avatar">
                                    </div>
                                </td>
                                <td>
                                    <div><a href="javascript:void(0);">Erin Gonzales</a></div>
                                    <div class="text-muted">+264-625-1593</div>
                                </td>
                                <td class="hidden-xs">
                                    <div class="text-muted">eringonzales@info.com</div>
                                </td>
                                <td class="hidden-sm">
                                    <div class="text-muted">455 S. Airport St. Moncks Corner, SC 29461</div>                                                
                                </td>
                                <td class="text-right">
                                    <a class="btn btn-sm btn-link" href="javascript:void(0)" data-toggle="tooltip" title="Phone"><i class="fa fa-phone"></i></a>
                                    <a class="btn btn-sm btn-link" href="javascript:void(0)" data-toggle="tooltip" title="Mail"><i class="fa fa-envelope"></i></a>
                                    <a class="btn btn-sm btn-link hidden-xs js-sweetalert" data-type="confirm" href="javascript:void(0)" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr class="">
                                <td class="hidden-xs">
                                    <a href="javascript:void(0);" class="mail-star"><i class="fa fa-star"></i></a>
                                </td>
                                <td class="text-center width40">
                                    <div class="avatar d-block">
                                        <img class="avatar" src="../assets/images/xs/avatar5.jpg" alt="avatar">
                                    </div>
                                </td>
                                <td>
                                    <div class="from"><a href="javascript:void(0);">Harry McCall</a></div>
                                    <div class="text-muted">+264-625-2468</div>
                                </td>
                                <td class="hidden-xs">
                                    <div class="text-muted">susiewillis@info.com</div>
                                </td>
                                <td class="hidden-sm">
                                    <div class="text-muted">19 Ohio St. Snellville, GA 30039</div>                                                
                                </td>
                                <td class="text-right">
                                    <a class="btn btn-sm btn-link" href="javascript:void(0)" data-toggle="tooltip" title="Phone"><i class="fa fa-phone"></i></a>
                                    <a class="btn btn-sm btn-link" href="javascript:void(0)" data-toggle="tooltip" title="Mail"><i class="fa fa-envelope"></i></a>
                                    <a class="btn btn-sm btn-link hidden-xs js-sweetalert" data-type="confirm" href="javascript:void(0)" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="grid" role="tabpanel">
                <div class="row row-deck">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card " >
                            <div class="card-body">
                                <div class="card-status bg-blue"></div>
                                <div class="mb-3"> <img src="../assets/images/sm/avatar1.jpg" class="rounded-circle w100" alt=""> </div>
                                <div class="mb-2">
                                    <h5 class="mb-0">Paul Schmidt</h5>
                                    <p class="text-muted">Aalizeethomas@info.com</p>
                                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deleniti fugit incidunt</span>
                                </div>
                                <span class="font-12 text-muted">Common Contact</span>
                                <ul class="list-unstyled team-info margin-0 pt-2">
                                    <li><img src="../assets/images/xs/avatar1.jpg" alt="Avatar"></li>
                                    <li><img src="../assets/images/xs/avatar8.jpg" alt="Avatar"></li>
                                    <li><img src="../assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card ">
                            <div class="card-body">
                                <div class="mb-3"> <img src="../assets/images/sm/avatar2.jpg" class="rounded-circle w100" alt=""> </div>
                                <div class="mb-2">
                                    <h5 class="mb-0">Andrew Patrick</h5>
                                    <p>Aalizeethomas@info.com</p>
                                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deleniti fugit incidunt</span>
                                </div>
                                <span class="font-12 text-muted">Common Contact</span>
                                <ul class="list-unstyled team-info margin-0 pt-2">
                                    <li><img src="../assets/images/xs/avatar1.jpg" alt="Avatar"></li>
                                    <li><img src="../assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                    <li><img src="../assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                                    <li><img src="../assets/images/xs/avatar4.jpg" alt="Avatar"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card ">
                            <div class="card-body">
                                <div class="mb-3"> <img src="../assets/images/sm/avatar3.jpg" class="rounded-circle w100" alt=""> </div>
                                <div class="mb-2">
                                    <h5 class="mb-0">Mary Schneider</h5>
                                    <p>Aalizeethomas@info.com</p>
                                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deleniti fugit incidunt</span>
                                </div>
                                <span class="font-12 text-muted">Common Contact</span>
                                <ul class="list-unstyled team-info margin-0 pt-2">
                                    <li><img src="../assets/images/xs/avatar1.jpg" alt="Avatar"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card " >
                            <div class="card-body">
                                <div class="card-status bg-green"></div>
                                <div class="mb-3"> <img src="../assets/images/sm/avatar4.jpg" class="rounded-circle w100" alt=""> </div>
                                <div class="mb-2">
                                    <h5 class="mb-0">Sean Black</h5>
                                    <p>Aalizeethomas@info.com</p>
                                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deleniti fugit incidunt</span>
                                </div>
                                <span class="font-12 text-muted">Common Contact</span>
                                <ul class="list-unstyled team-info margin-0 pt-2">
                                    <li><img src="../assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                    <li><img src="../assets/images/xs/avatar6.jpg" alt="Avatar"></li>
                                    <li><img src="../assets/images/xs/avatar5.jpg" alt="Avatar"></li>
                                    <li><img src="../assets/images/xs/avatar7.jpg" alt="Avatar"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card ">
                            <div class="card-body">
                                <div class="mb-3"> <img src="../assets/images/sm/avatar5.jpg" class="rounded-circle w100" alt=""> </div>
                                <div class="mb-2">
                                    <h5 class="mb-0">David Wallace</h5>
                                    <p>Aalizeethomas@info.com</p>
                                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deleniti fugit incidunt</span>
                                </div>
                                <span class="font-12 text-muted">Common Contact</span>
                                <ul class="list-unstyled team-info margin-0 pt-2">
                                    <li><img src="../assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                                    <li><img src="../assets/images/xs/avatar4.jpg" alt="Avatar"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card ">
                            <div class="card-body">
                                <div class="card-status bg-pink"></div>
                                <div class="mb-3"> <img src="../assets/images/sm/avatar6.jpg" class="rounded-circle w100" alt=""> </div>
                                <div class="mb-2">
                                    <h5 class="mb-0">Andrew Patrick</h5>
                                    <p>Aalizeethomas@info.com</p>
                                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deleniti fugit incidunt</span>
                                </div>
                                <span class="font-12 text-muted">Common Contact</span>
                                <ul class="list-unstyled team-info margin-0 pt-2">
                                    <li><img src="../assets/images/xs/avatar5.jpg" alt="Avatar"></li>
                                    <li><img src="../assets/images/xs/avatar6.jpg" alt="Avatar"></li>
                                    <li><img src="../assets/images/xs/avatar1.jpg" alt="Avatar"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card ">
                            <div class="card-body">
                                <div class="mb-3"> <img src="../assets/images/sm/avatar2.jpg" class="rounded-circle w100" alt=""> </div>
                                <div class="mb-2">
                                    <h5 class="mb-0">Michelle Green</h5>
                                    <p>Aalizeethomas@info.com</p>
                                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deleniti fugit incidunt</span>
                                </div>
                                <span class="font-12 text-muted">Common Contact</span>
                                <ul class="list-unstyled team-info margin-0 pt-2">
                                    <li><img src="../assets/images/xs/avatar8.jpg" alt="Avatar"></li>
                                    <li><img src="../assets/images/xs/avatar7.jpg" alt="Avatar"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card ">
                            <div class="card-body">
                                <div class="mb-3"> <img src="../assets/images/sm/avatar4.jpg" class="rounded-circle w100" alt=""> </div>
                                <div class="mb-2">
                                    <h5 class="mb-0">Mary Schneider</h5>
                                    <p>Aalizeethomas@info.com</p>
                                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deleniti fugit incidunt</span>
                                </div>
                                <span class="font-12 text-muted">Common Contact</span>
                                <ul class="list-unstyled team-info margin-0 pt-2">
                                    <li><img src="../assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                    <li><img src="../assets/images/xs/avatar7.jpg" alt="Avatar"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="addnew" role="tabpanel">
                <div class="card">
                    <div class="card-body">
                        <div class="row clearfix">
                            <div class="col-lg-4 col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter Name">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <div class="form-group">
                                    <input type="number" class="form-control" placeholder="Enter Number">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Enter Email">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea type="text" class="form-control" rows="4">Enter your Address</textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <input type="file" class="dropify">
                            </div>
                            <div class="col-lg-12 mt-3">
                                <button type="submit" class="btn btn-primary">Add</button>
                                <button type="submit" class="btn btn-default">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>                
    </div>
</div>
@stop

@section('popup')
<!-- Default Size -->
<div class="modal fade" id="addcontact" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title" id="defaultModalLabel">Add Contact</h6>
            </div>
            <div class="modal-body">
                <div class="row clearfix">
                    <div class="col-6">
                        <div class="form-group">                                    
                            <input type="text" class="form-control" placeholder="First Name">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">                                   
                            <input type="text" class="form-control" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">                                    
                            <input type="number" class="form-control" placeholder="Phone Number">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">                                    
                            <input type="text" class="form-control" placeholder="Enter Address">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">                                            
                            <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                        </div>
                        <hr>
                    </div>
                    <div class="col-6">
                        <div class="form-group">                                    
                            <input type="text" class="form-control" placeholder="Facebook">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">                                   
                            <input type="text" class="form-control" placeholder="Twitter">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">                                    
                            <input type="text" class="form-control" placeholder="Linkedin">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">                                    
                            <input type="text" class="form-control" placeholder="instagram">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Add</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>
@stop

@section('page-styles')
<link rel="stylesheet" href="{{ asset('assets/plugins/sweetalert/sweetalert.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/dropify/css/dropify.min.css') }}">
@stop

@section('page-script')
<script src="{{ asset('assets/bundles/sweetalert.bundle.js') }}"></script>
<script src="{{ asset('assets/plugins/dropify/js/dropify.min.js') }}"></script>

<script src="{{ asset('assets/js/core.js') }}"></script>
<script src="{{ asset('assets/js/page/sweetalert.js') }}"></script>
<script>
$(function() {
    "use strict";
    
    $('.dropify').dropify();

    var drEvent = $('#dropify-event').dropify();
    drEvent.on('dropify.beforeClear', function(event, element) {
        return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
    });

    drEvent.on('dropify.afterClear', function(event, element) {
        alert('File deleted');
    });

    $('.dropify-fr').dropify({
        messages: {
            default: 'Glissez-déposez un fichier ici ou cliquez',
            replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
            remove: 'Supprimer',
            error: 'Désolé, le fichier trop volumineux'
        }
    });
});
</script>
@stop
