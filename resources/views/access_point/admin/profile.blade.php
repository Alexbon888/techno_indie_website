@extends('template')
@section('content')

<div class="content">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-user card-outline">
                <div class="card-body">
                    <a class="card-header">
                        <h5 class="title">My Profile</h5>
                    </a>

                    <div class="row">
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>Full Name</label>
                                <div class="form-control">Full Name</div>
                            </div>
                        </div>

                        <div class="col-md-6 pl-1">
                            <div class="form-group">
                                <label>Email address (disabled)</label>
                                <div class="form-control">Example@gmail.com</div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Address</label>
                                <div class="form-control">Your Address</div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Phone Number</label>
                                <div class="form-control">Phone Number</div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>City</label>
                                <div class="form-control">Melbourne</div>
                            </div>
                        </div>

                        <div class="col-md-6 pl-1">
                            <div class="form-group">
                                <label>Postal Code</label>
                                <div class="form-control">ZIP Code</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="card card-user card-outline">
                <a class="card-header">
                    <h5 class="title">Edit Profile</h5>
                </a>

                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>Full Name</label>
                                    <input type="text" class="form-control" placeholder="Full Name">
                                </div>
                            </div>

                            <div class="col-md-6 pl-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address (disabled)</label>
                                    <input type="email" class="form-control" disabled="" placeholder="Example@gmail.com">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control" placeholder="Your Address">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input type="text" class="form-control" placeholder="Phone Number">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>City</label>
                                    <input type="text" class="form-control" placeholder="City">
                                </div>
                            </div>

                            <div class="col-md-6 pl-1">
                                <div class="form-group">
                                    <label>Postal Code</label>
                                    <input type="number" class="form-control" placeholder="ZIP Code">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="update ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary btn-round">Update Profile</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .card-outline {
        border: 1px solid #ADD8E6; /* Light blue color */
    }
</style>

@endsection
