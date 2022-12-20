<?php

$logged_user = session()->get('logged_user');
$user_name = session()->get('name');
$roles = session()->get('user_type');
$count=0;


// $all = session()->all();

// var_dump($all);
?>
<x-header-new/>

<div class="content-wrapper">
    <div class="modal fade" id="add-title-form">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Book a PSM title</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- <form action="{{ route('manage-title.add') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Project title</label>
                            <input type="text" name="psm_title" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form> -->
            </div>
        </div>
    </div>

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>My titles</h1>
                </div>

            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">All Title</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped projects">
                    <thead>
                    <tr>
                        <th style="width: 1%">
                            #
                        </th>
                        <th style="width: 10%">
                            Title
                        </th>
                        <th style="width: 5%" class="text-center">
                            Name
                        </th>
                        <th style="width: 5%" class="text-center">
                            Logbook
                        </th>

                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($meetings as $data)
                        <tr>
                            <td>
                                {{ ++$count }}
                            </td>
                            <td>
                                {{$data->Title}}
                            </td>
                            <td class="project-actions text-center">
                                {{$data->Prepared_by}}
                            </td>
                            <td>
                                <a class="button-73" role="button" href="LogbookViewSV">View Progress</a>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
            <div class="card-footer"></div>
        </div>
    </section>
</div>

<x-footer-new />
