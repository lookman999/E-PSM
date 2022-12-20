<x-header-new />

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Item</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#approval-status">
                                <i class="fa fa-plus"></i>
                                Set Approval Status
                            </button>
                        </li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Item Details</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('manage-inventory.update', $item->item_id) }}" method="post" id="update-item-form">
                            @csrf
                            <div class="form-group">
                                <label for="inputName">Item Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputObjective">Quantity</label>
                                <input type="number" name="quantity" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputBackground">Date Start</label>
                                <div class="input-group date" id="date_start" data-target-input="nearest">
                                    <input type="text" name="date_start" class="form-control datetimepicker-input" data-target="#date_start"/>
                                    <div class="input-group-append" data-target="#date_start" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputTechniques">Date End</label>
                                <div class="input-group date" id="date_end" data-target-input="nearest">
                                    <input type="text" name="date_end" class="form-control datetimepicker-input" data-target="#date_end"/>
                                    <div class="input-group-append" data-target="#date_end" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <div class="row justify-content-center">
                            <div class="col-6">
                                <a href="{{ route('manage-inventory.view-one') }}" class="btn btn-secondary">Back</a>
                                <button type="button" onclick="event.preventDefault(); document.getElementById('update-item-form').submit()" class="btn btn-warning">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card -->
            </div>

        </div>

    </section>
</div>

<x-footer-new />
