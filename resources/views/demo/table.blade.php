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
                <div id="datatable-default_wrapper" class="dataTables_wrapper no-footer"><div class="row datatables-header form-inline"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="datatable-default_length"><label><div class="select2-container" id="s2id_autogen1"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-2">10</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen2" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-2" id="s2id_autogen2"><div class="select2-drop select2-display-none">   <div class="select2-search select2-search-hidden select2-offscreen">       <label for="s2id_autogen2_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-2" id="s2id_autogen2_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-2">   </ul></div></div><select name="datatable-default_length" aria-controls="datatable-default" class="select2-offscreen" tabindex="-1" title=""><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> records per page</label></div></div><div class="col-sm-12 col-md-6"><div id="datatable-default_filter" class="dataTables_filter"><label><input type="search" class="form-control" placeholder="Search" aria-controls="datatable-default"></label></div></div></div><div class="table-responsive"><table class="table table-bordered table-striped mb-none dataTable no-footer" id="datatable-default" role="grid" aria-describedby="datatable-default_info">
                            <thead>
                            <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="datatable-default" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column ascending" style="width: 153px;">Rendering engine</th><th class="sorting" tabindex="0" aria-controls="datatable-default" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 212px;">Browser</th><th class="sorting" tabindex="0" aria-controls="datatable-default" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 190px;">Platform(s)</th><th class="hidden-phone sorting" tabindex="0" aria-controls="datatable-default" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 132px;">Engine version</th><th class="hidden-phone sorting" tabindex="0" aria-controls="datatable-default" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 96px;">CSS grade</th></tr>
                            </thead>
                            <tbody>
                            <tr class="gradeA odd" role="row">
                                <td class="sorting_1">Gecko</td>
                                <td>Firefox 1.0</td>
                                <td>Win 98+ / OSX.2+</td>
                                <td class="center hidden-phone">1.7</td>
                                <td class="center hidden-phone">A</td>
                            </tr><tr class="gradeA even" role="row">
                                <td class="sorting_1">Gecko</td>
                                <td>Firefox 1.5</td>
                                <td>Win 98+ / OSX.2+</td>
                                <td class="center hidden-phone">1.8</td>
                                <td class="center hidden-phone">A</td>
                            </tr><tr class="gradeA odd" role="row">
                                <td class="sorting_1">Gecko</td>
                                <td>Firefox 2.0</td>
                                <td>Win 98+ / OSX.2+</td>
                                <td class="center hidden-phone">1.8</td>
                                <td class="center hidden-phone">A</td>
                            </tr><tr class="gradeA even" role="row">
                                <td class="sorting_1">Gecko</td>
                                <td>Firefox 3.0</td>
                                <td>Win 2k+ / OSX.3+</td>
                                <td class="center hidden-phone">1.9</td>
                                <td class="center hidden-phone">A</td>
                            </tr><tr class="gradeA odd" role="row">
                                <td class="sorting_1">Gecko</td>
                                <td>Camino 1.0</td>
                                <td>OSX.2+</td>
                                <td class="center hidden-phone">1.8</td>
                                <td class="center hidden-phone">A</td>
                            </tr><tr class="gradeA even" role="row">
                                <td class="sorting_1">Gecko</td>
                                <td>Camino 1.5</td>
                                <td>OSX.3+</td>
                                <td class="center hidden-phone">1.8</td>
                                <td class="center hidden-phone">A</td>
                            </tr></tbody>
                        </table></div><div class="row datatables-footer"><div class="col-sm-12 col-md-6"><div class="dataTables_info" id="datatable-default_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-6"><div class="dataTables_paginate paging_bs_normal" id="datatable-default_paginate"><ul class="pagination"><li class="prev disabled"><a href="#"><span class="fa fa-chevron-left"></span></a></li><li class="active"><a href="#">1</a></li><li><a href="#">2</a></li><li><a href="#">3</a></li><li><a href="#">4</a></li><li><a href="#">5</a></li><li class="next"><a href="#"><span class="fa fa-chevron-right"></span></a></li></ul></div></div></div></div>
            </div>
        </section>
        <!-- end: page -->
    </section>
@endsection
