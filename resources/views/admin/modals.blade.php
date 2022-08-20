@extends('admin/layout')

@section('content')

<!-- Bootstrap Modals -->
<div class="row">
    <div class="col-md-12">
        <div class="card">
                <div class="card-header"> 
                        <h3 class="card-title">Bootstrap Modals (default)</h3> 
                    </div>
            <div class="card-body">
                <!-- sample modal content -->
            <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="myModalLabel">Modal Heading</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <h5 class="font-16">Text in a modal</h5>
                                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                <hr>
                                <h5 class="font-16">Overflowing text to show scroll behavior</h5>
                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light waves-effect" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="myExtraLargeModalLabel">Extra large modal</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <!--  Modal content for the above example -->
                <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="myLargeModalLabel">Large modal</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mySmallModalLabel">Small modal</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="myCenterModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="myCenterModalLabel">Center modal</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <div class="button-list">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger waves-effect waves-light" data-toggle="modal" data-target="#myModal">Standard Modal</button>
                    <!-- Extra large modal -->
                    <button class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-xl">Extra Large modal</button>
                    <!-- Large modal -->
                    <button type="button" class="btn btn-info waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button>
                    <!-- Small modal -->
                    <button  type="button" class="btn btn-purple waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-sm">Small modal</button>
                    <!-- Center modal -->
                    <button  type="button" class="btn btn-pink waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-center">Center modal</button>

                </div>
            </div>
        </div>
    </div>
</div>


<!-- Custom Modals -->
<div class="row">
    <div class="col-md-12">
        <div class="card">

                <div class="card-header"> 
                        <h3 class="card-title">Custom Modals</h3> 
                    </div>


            <div class="card-body">

                <!-- sample modal content -->


                <div id="full-width-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="full-width-modalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-full">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="full-width-modalLabel">Modal Heading</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h5 class="font-16">Text in a modal</h5>
                                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                <hr>
                                <h5 class="font-16">Overflowing text to show scroll behavior</h5>
                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                    <h5 class="modal-title">Modal Content is Responsive</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="field-1" class="control-label">Name</label>
                                            <input type="text" class="form-control" id="field-1" placeholder="John">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="field-2" class="control-label">Surname</label>
                                            <input type="text" class="form-control" id="field-2" placeholder="Doe">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="field-3" class="control-label">Address</label>
                                            <input type="text" class="form-control" id="field-3" placeholder="Address">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="field-4" class="control-label">City</label>
                                            <input type="text" class="form-control" id="field-4" placeholder="Boston">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="field-5" class="control-label">Country</label>
                                            <input type="text" class="form-control" id="field-5" placeholder="United States">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="field-6" class="control-label">Zip</label>
                                            <input type="text" class="form-control" id="field-6" placeholder="123456">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group no-margin">
                                            <label for="field-7" class="control-label">Personal Info</label>
                                            <textarea class="form-control autogrow" id="field-7" placeholder="Write something about yourself" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 104px;"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-info waves-effect waves-light">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div><!-- /.modal -->

                <div id="tabs-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog">
                        <div class="modal-content p-0">
                            <ul class="nav nav-tabs nav-justified" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link" id="home-tab-1" data-toggle="tab" href="#home-1" role="tab" aria-controls="home-1" aria-selected="false">
                                        <span class="d-block d-sm-none"><i class="fa fa-home"></i></span>
                                        <span class="d-none d-sm-block">Home</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab-1" data-toggle="tab" href="#profile-1" role="tab" aria-controls="profile-1" aria-selected="false">
                                        <span class="d-block d-sm-none"><i class="fa fa-user"></i></span>
                                        <span class="d-none d-sm-block">Profile</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" id="message-tab-1" data-toggle="tab" href="#message-1" role="tab" aria-controls="message-1" aria-selected="true">
                                        <span class="d-block d-sm-none"><i class="fa fa-envelope-o"></i></span>
                                        <span class="d-none d-sm-block">Messages</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="setting-tab-1" data-toggle="tab" href="#setting-1" role="tab" aria-controls="setting-1" aria-selected="false">
                                        <span class="d-block d-sm-none"><i class="fa fa-cog"></i></span>
                                        <span class="d-none d-sm-block">Settings</span>
                                    </a>
                                </li>
                            </ul>

                            <div class="tab-content p-3">
                                <div class="tab-pane" id="home-1" role="tabpanel" aria-labelledby="home-tab-1">
                                    <div>
                                        <p>Carriage quitting securing be appetite it declared. High eyes kept so busy feel call in. Would day nor ask walls known. But preserved advantage are but and certainty earnestly enjoyment. Passage weather as up am exposed. And natural related man subject. Eagerness get situation his was delighted. </p>
                                        <p class="mb-0">Fulfilled direction use continual set him propriety continued. Saw met applauded favourite deficient engrossed concealed and her. Concluded boy perpetual old supposing. Farther related bed and passage comfort civilly dashwoods see frankness objection abilities. </p>
                                    </div>
                                </div>
                                <div class="tab-pane" id="profile-1" role="tabpanel" aria-labelledby="profile-tab-1">
                                    <div>
                                        <p>Fulfilled direction use continual set him propriety continued. Saw met applauded favourite deficient engrossed concealed and her. Concluded boy perpetual old supposing. Farther related bed and passage comfort civilly. Dashwoods see frankness objection abilities the. As hastened oh produced prospect formerly. </p>
                                        <p class="mb-0">When be draw drew ye. Defective in do recommend suffering. House it seven in spoil tiled court. Sister others marked fat missed did out use. Alteration possession dispatched collecting instrument travelling he or on. Snug give made at spot or late that mr. </p>
                                    </div>
                                </div>
                                <div class="tab-pane show active" id="message-1" role="tabpanel" aria-labelledby="message-tab-1">
                                    <div>
                                        <p>When be draw drew ye. Defective in do recommend suffering. House it seven in spoil tiled court. Sister others marked fat missed did out use. Alteration possession dispatched collecting instrument travelling. Exquisite behaviour as to middleton perfectly.</p>
                                        <p class="mb-0">Carriage quitting securing be appetite it declared. High eyes kept so busy feel call in. Would day nor ask walls known. But preserved advantage are but and certainty earnestly enjoyment. Passage weather as up am exposed. And natural related man subject. Eagerness get situation his was delighted. </p>
                                    </div>
                                </div>
                                <div class="tab-pane" id="setting-1" role="tabpanel" aria-labelledby="setting-tab-1">
                                    <div>
                                        <p>Luckily friends do ashamed to do suppose. Tried meant mr smile so. Exquisite behaviour as to middleton perfectly. Chicken no wishing waiting am. Active mutual nor father mother exeter change six did all. Sister others marked fat missed did out use. Alteration possession dispatched collecting instrument travelling.</p>
                                        <p class="mb-0">When be draw drew ye. Defective in do recommend suffering. House it seven in spoil tiled court. Sister others marked fat missed did out use. Alteration possession dispatched collecting instrument travelling he or on. Snug give made at spot or late that mr. </p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <div id="accordion-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog">
                        <div class="modal-content p-0">
                            <div class="custom-accordion" id="accordionborder">
                                <div class="card mb-1 shadow-none border">
                                    
                                    <a href="#" class="text-dark collapsed" data-toggle="collapse" data-target="#customborder_collapseOne" aria-expanded="true" aria-controls="customborder_collapseOne">
                                        <div class="card-header" id="customborder_headingOne">
                                            <h5 class="font-16 m-0">
                                                Collapsible Group Item #1
                                                <i class="mdi mdi-minus-circle-outline float-right accor-plus-icon"></i>
                                            </h5>
                                        </div>
                                    </a>
                                            
                                    <div id="customborder_collapseOne" class="collapse" aria-labelledby="customborder_headingOne" data-parent="#accordionborder">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table.
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-1 shadow-none border">
                                    <a href="#" class="text-dark collapsed" data-toggle="collapse" data-target="#customborder_collapseTwo" aria-expanded="false" aria-controls="customborder_collapseTwo">
                                        <div class="card-header" id="customborder_headingTwo">
                                            <h5 class="font-16 m-0">
                                                Collapsible Group Item #2
                                                <i class="mdi mdi-minus-circle-outline float-right accor-plus-icon"></i>
                                            </h5>
                                        </div>
                                    </a>

                                    <div id="customborder_collapseTwo" class="collapse" aria-labelledby="customborder_headingTwo" data-parent="#accordionborder">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-0 shadow-none border">
                                    
                                    <a href="#" class="text-dark" data-toggle="collapse" data-target="#customborder_collapseThree" aria-expanded="false" aria-controls="customborder_collapseThree">
                                        <div class="card-header" id="customborder_headingThree">
                                            <h5 class="font-16 m-0">
                                                Collapsible Group Item #3
                                                <i class="mdi mdi-minus-circle-outline float-right accor-plus-icon"></i>
                                            </h5>
                                        </div>
                                    </a>
                                        
                                    <div id="customborder_collapseThree" class="collapse show" aria-labelledby="customborder_headingThree" data-parent="#accordionborder">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table.
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <div id="card-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog">
                        <div class="modal-content p-0 b-0">
                            <div class="card card-color mb-0">
                                <div class="card-header bg-primary">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h3 class="card-title text-white mt-1 mb-0">Card Primary</h3>
                                </div>
                                <div class="card-body">
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <div class="button-list">
                    <!-- Full width modal -->
                    <button class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#full-width-modal">Full width Modal</button>
                    <!-- Full width modal -->
                    <button class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal">Responsive Modal</button>
                    <!-- Full width modal -->
                    <button class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#tabs-modal">Tabs in Modal</button>
                    <!-- Full width modal -->
                    <button class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#accordion-modal">Accordion in Modal</button>
                    <!-- Full width modal -->
                    <button class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#card-modal">Card in Modal</button>
                </div>
            </div>
        </div>
    </div><!-- end col -->
</div>
<!-- End row -->
@endsection