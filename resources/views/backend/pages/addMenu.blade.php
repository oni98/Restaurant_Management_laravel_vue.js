@extends('backend.layouts.app')
@section('title','Admin Dashboard')
@section('main_content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add Food</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                            <label>Category</label>
                                            <select multiple="" class="form-control default-select" id="sel2">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    <div class="form-group col-md-6">
                                        <label>Sub Title</label>
                                        <input type="email" class="form-control" placeholder="Additional">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Title</label>
                                        <input type="password" class="form-control" placeholder="Food Name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Price</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Sign in</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
