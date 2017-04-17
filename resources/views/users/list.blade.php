@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Users</div>
                <div class="panel-body">
                    <div id="user-1" class="user">
                        <p data-toggle="collapse" data-target="#user-1 .details">Marcus Ramsden</p>
                        <dl class="details collapse">
                            <dt>Email</dt>
                            <dd>marcus.ramsden@gmail.com</dd>
                            <dt>Role</dt>
                            <dd>Owner</dd>
                        </dl>
                    </div>
                    <div id="user-2" class="user">
                        <p data-toggle="collapse" data-target="#user-2 .details">Hon Lam</p>
                        <dl class="details collapse">
                            <dt>Email</dt>
                            <dd>hon@honsartor.co.uk</dd>
                            <dt>Role</dt>
                            <dd>Owner</dd>
                        </dl>
                    </div>
                </div>
                <div class="panel-footer">
                    <a href="#" class="btn btn-primary">Add User</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
