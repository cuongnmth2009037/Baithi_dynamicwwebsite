@extends('demo.master-layout')
@section('content')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Advanced Tables</h2>

            <div class="right-wrapper pull-right">
                <ol class="breadcrumbs">
                    <li>
                        <a href="index.html">
                            <i class="fa fa-home"></i>
                        </a>
                    </li>
                    <li><span>Tables</span></li>
                    <li><span>Advanced</span></li>
                </ol>

                <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
            </div>
        </header>

        <!-- start: page -->
        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                    <a href="#" class="fa fa-times"></a>
                </div>
                <h2 class="panel-title">Basic</h2>
            </header>
            <div class="panel-body">
                <div id="datatable-default_wrapper" class="dataTables_wrapper no-footer">
                    <div class="row datatables-header form-inline">
                        <div class="col-sm-12 col-md-6">
                            <div class="dataTables_length" id="datatable-default_length"><label>
                                    <div class="select2-container" id="s2id_autogen1">
                                        <label for="s2id_autogen2" class="select2-offscreen"></label>
                                        <input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-2" id="s2id_autogen2">
                                        <div class="select2-drop select2-display-none">
                                            <div class="select2-search select2-search-hidden select2-offscreen">
                                                <label
                                                    for="s2id_autogen2_search" class="select2-offscreen">
                                                </label>
                                                <input type="text" autocomplete="off" autocorrect="off"
                                                    autocapitalize="off" spellcheck="false" class="select2-input"
                                                    role="combobox" aria-expanded="true" aria-autocomplete="list"
                                                    aria-owns="select2-results-2" id="s2id_autogen2_search"
                                                    placeholder="">
                                            </div>
                                            <ul class="select2-results" role="listbox" id="select2-results-2"></ul>
                                        </div>
                                    </div>
                                    <select name="datatable-default_length" aria-controls="datatable-default"
                                            class="select2-offscreen" tabindex="-1" title="">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select></label></div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div id="datatable-default_filter" class="dataTables_filter">
                                <form action="">
                                    <label>
                                        <input name="search" type="search" class="form-control" placeholder="Search" aria-controls="datatable-default">
                                    </label>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped mb-none dataTable no-footer"
                               id="datatable-default" role="grid" aria-describedby="datatable-default_info">

                            <thead>
                            <tr role="row">
                                <th class="center hidden-phone sorting " tabindex="0" aria-controls="datatable-default"
                                    rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"
                                    style="width: 96px;">Id
                                </th>
                                <th class="center hidden-phone sorting_asc" tabindex="0"
                                    aria-controls="datatable-default" rowspan="1" colspan="1" aria-sort="ascending"
                                    aria-label="Rendering engine: activate to sort column ascending"
                                    style="width: 153px;">Event Name
                                </th>
                                <th class="center hidden-phone sorting_asc" tabindex="0"
                                    aria-controls="datatable-default" rowspan="1" colspan="1" aria-sort="ascending"
                                    aria-label="Rendering engine: activate to sort column ascending"
                                    style="width: 153px;">Band Name
                                </th>
                                <th class="center hidden-phone sorting" tabindex="0" aria-controls="datatable-default"
                                    rowspan="1" colspan="1"
                                    aria-label="Engine version: activate to sort column ascending"
                                    style="width: 132px;">Start Date
                                </th>
                                <th class="center hidden-phone sorting" tabindex="0" aria-controls="datatable-default"
                                    rowspan="1" colspan="1"
                                    aria-label="Engine version: activate to sort column ascending"
                                    style="width: 132px;">End Date
                                </th>
                                <th class="center hidden-phone sorting" tabindex="0" aria-controls="datatable-default"
                                    rowspan="1" colspan="1"
                                    aria-label="Engine version: activate to sort column ascending"
                                    style="width: 132px;">Port Folio
                                </th>
                                <th class="center hidden-phone sorting" tabindex="0" aria-controls="datatable-default"
                                    rowspan="1" colspan="1"
                                    aria-label="Engine version: activate to sort column ascending"
                                    style="width: 132px;">Ticket Price
                                </th>
                                <th class="center hidden-phone sorting" tabindex="0" aria-controls="datatable-default"
                                    rowspan="1" colspan="1"
                                    aria-label="Engine version: activate to sort column ascending"
                                    style="width: 132px;">Status
                                </th>
                                <th class="center hidden-phone sorting_asc" tabindex="0"
                                    aria-controls="datatable-default" rowspan="1" colspan="2" aria-sort="ascending"
                                    aria-label="Rendering engine: activate to sort column ascending"
                                    style="width: 160px;"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($list as $value)
                                <tr class="gradeA odd" role="row">
                                    <td class="sorting_1">{{$value->id}}</td>
                                    <td>{{$value->eventName}}</td>
                                    <td>{{$value->bandName}}</td>
                                    <td class="center hidden-phone">{{$value->startDate}}</td>
                                    <td class="center hidden-phone">{{$value->endDate}}</td>
                                    <td>{{$value->portfolio}}</td>
                                    <td class="center hidden-phone">{{$value->ticketPrice}}</td>
                                    <td class="center hidden-phone">{{$value->status}}</td>
                                    <td class="actions-hover">
                                        <a href="/admin/event/create">
                                            <button><i class="fa fa-pencil text-primary" title="create"></i></button>
                                        </a>
                                        <a href="/admin/event/edit/{{$value->id}}">
                                            <button><i data-toggle="" class="fa fa-plus-square-o text-primary "
                                                       title="update"></i></button>
                                        </a>
                                        <form action="/admin/event/{{$value->id}}" method="post">
                                            @method('delete')
                                            @csrf
                                            <a>
                                                <button class="delete-row" title="delete"><i class="fa fa-trash-o text-primary" onclick="return confirm('Are you sure you want to delete?')"></i>
                                                </button>
                                            </a>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                    <div class="row datatables-footer">
                        <div class="col-sm-12 col-md-6">
                            <div class="dataTables_info" id="datatable-default_info" role="status" aria-live="polite">
                                Showing 1 to 10 of 57 entries
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">@include('paginate.default',['list'=>$list])</div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <!-- end: page -->
    </section>
@endsection








