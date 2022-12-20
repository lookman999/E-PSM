<x-header-new/>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Title</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card card-warning">
                    <div class="card-header">
                        <h3 class="card-title">Edit Project Title</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <form action="{{ route('manage-title.update', $title->title_id) }}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputName">Project Name</label>
                                <input type="text" name="psm_title" placeholder="{{ $title->psm_title }}"
                                       class="form-control">
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row justify-content-center">
                                <div class="col-4">
                                    <a href="{{ route('manage-title.my-titles') }}" class="btn btn-secondary">Cancel</a>
                                    <input type="submit" value="Update Title" class="btn btn-success float-right">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
        </div>


    </section>
</div>

<x-footer-new />
