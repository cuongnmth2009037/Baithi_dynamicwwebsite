@extends('demo.master-layout')
@section('content')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Basic Forms</h2>

            <div class="right-wrapper pull-right">
                <ol class="breadcrumbs">
                    <li>
                        <a href="index.html">
                            <i class="fa fa-home"></i>
                        </a>
                    </li>
                    <li><span>Forms</span></li>
                    <li><span>Basic</span></li>
                </ol>

                <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
            </div>
        </header>

        <!-- start: page -->
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        <div class="panel-actions">
                            <a href="#" class="fa fa-caret-down"></a>
                            <a href="#" class="fa fa-times"></a>
                        </div>

                        <h2 class="panel-title">Form Elements</h2>
                    </header>
                    <div class="panel-body">
                        <form class="form-horizontal form-bordered" action="/admin/event/{{$obj->id}}" method="post">
                            @method('put')
                            @csrf
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="inputRounded">EventName</label>
                                <div class="col-md-6">
                                    <input name="eventName" type="text" class="form-control input-rounded" id="inputRounded" value="{{$obj->eventName}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="inputRounded">BandName</label>
                                <div class="col-md-6">
                                    <input name="bandName" type="text" class="form-control input-rounded" id="inputRounded" value="{{$obj->bandName}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">StartDate</label>
                                <div class="col-md-6">
                                    <div class="input-group">
														<span class="input-group-addon">
															<i class="fa fa-calendar"></i>
														</span>
                                        <input name="startDate" type="text"  class="form-control" value="{{$obj->startDate}}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">EndDate</label>
                                <div class="col-md-6">
                                    <div class="input-group">
														<span class="input-group-addon">
															<i class="fa fa-calendar"></i>
														</span>
                                        <input name="endDate" type="text" class="form-control" value="{{$obj->endDate}}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="inputRounded">PortFolio</label>
                                <div class="col-md-6">
                                    <input name="portfolio" type="text" class="form-control input-rounded" id="inputRounded" value="{{$obj->portfolio}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="inputRounded">TicketPrice</label>
                                <div class="col-md-6">
                                    <input name="ticketPrice" type="number" class="form-control input-rounded" id="inputRounded" value="{{$obj->ticketPrice}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="inputRounded">Status</label>
                                <div class="col-md-6">
                                    <input name="status" type="number" class="form-control input-rounded" id="inputRounded" value="{{$obj->status}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-6 control-label">Button</label>
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </div>
        <!-- end: page -->
    </section>
@endsection
@section('current-page-script')
    <script src="/assets/javascripts/forms/examples.advanced.form.js" /></script>
@endsection






