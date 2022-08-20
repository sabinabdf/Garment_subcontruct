@extends('admin/layout')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Form validations</h3></div>
            <div class="card-body">
                <div class="form">
                    <form class="cmxform form-horizontal tasi-form" id="commentForm" method="get" action="#" novalidate="novalidate">
                        <div class="form-group row">
                            <label for="cname" class="col-form-label col-lg-2">Name (required)</label>
                            <div class="col-lg-10">
                                <input class="form-control" id="cname" name="name" type="text" required="" aria-required="true">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cemail" class="col-form-label col-lg-2">E-Mail (required)</label>
                            <div class="col-lg-10">
                                <input class="form-control" id="cemail" type="email" name="email" required="" aria-required="true">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="curl" class="col-form-label col-lg-2">URL (optional)</label>
                            <div class="col-lg-10">
                                <input class="form-control" id="curl" type="url" name="url">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ccomment" class="col-form-label col-lg-2">Your Comment (required)</label>
                            <div class="col-lg-10">
                                <textarea class="form-control" id="ccomment" name="comment" required></textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="offset-lg-2 col-lg-10">
                                <button class="btn btn-success waves-effect waves-light mr-1" type="submit">Save</button>
                                <button class="btn btn-secondary waves-effect" type="button">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- .form -->
            </div>
            <!-- card-body -->
        </div>
        <!-- card -->
    </div>
    <!-- col -->
</div>
                        <!-- End row -->

@endsection