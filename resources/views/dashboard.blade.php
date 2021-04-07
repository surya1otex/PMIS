@extends('layouts.app')

@section('content')
<div class="content">
  <div class="animated fadeIn">
  <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="stat-widget-five">
                                        <div class="stat-icon dib flat-color-1">
                                            <i class="pe-7s-cash"></i>
                                        </div>
                                        <div class="stat-content">
                                            <div class="text-left dib">
                                                <div class="stat-text">$<span class="count">23569</span></div>
                                                <div class="stat-heading">Revenue</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="stat-widget-five">
                                        <div class="stat-icon dib flat-color-2">
                                            <i class="pe-7s-cart"></i>
                                        </div>
                                        <div class="stat-content">
                                            <div class="text-left dib">
                                                <div class="stat-text"><span class="count">3435</span></div>
                                                <div class="stat-heading">Sales</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="stat-widget-five">
                                        <div class="stat-icon dib flat-color-3">
                                            <i class="pe-7s-browser"></i>
                                        </div>
                                        <div class="stat-content">
                                            <div class="text-left dib">
                                                <div class="stat-text"><span class="count">349</span></div>
                                                <div class="stat-heading">Templates</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="stat-widget-five">
                                        <div class="stat-icon dib flat-color-4">
                                            <i class="pe-7s-users"></i>
                                        </div>
                                        <div class="stat-content">
                                            <div class="text-left dib">
                                                <div class="stat-text"><span class="count">2986</span></div>
                                                <div class="stat-heading">Clients</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    </div>
</div>
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Welcome {{ Auth::user()->fullname }}</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <h5><b>You logged in as {{ Auth::user()->roles->pluck('name')->first() }}</b></h5>
                <br>
                @role('System Admin')
				<p style="color:red">Your Permissions listed below</p>
                <ul class="roles">
                <li>You can create Users, Roles and Permissions</li>
                <li>You can assign roles and permissions to user</li>
                <li>You can create New Projects</li>
                <li>You can Upload documents</li>
                </ul>
                @endrole
                @role('Computer Operator')
				<p style="color:red">Your Permissions listed below</p>
                <ul class="roles">
                <li>You can create New Projects</li>
                </ul>
                @endrole
                @role('HOD')
				<p style="color:red">Your Permissions listed below</p>
                <ul class="roles">
                <li>You can Upload documents</li>
                </ul>
                @endrole
                @role('Project Approver')
				<p style="color:red">Your Permissions listed below</p>
                <ul class="roles">
                <li>You can create New Projects</li>
                <li>You can Upload documents</li>
                </ul>
                @endrole
            </div>
        </div>
    </div>
</div>
<style>
.roles li {
    list-style:none;
}
</style>
@endsection
