<x-header-new/>

    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Book Project Titles</h1>
                    </div>

                </div>
            </div>
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
                            <th style="width: 1%">
                                Supervisor
                            </th>
                            <th style="width: 5%" class="text-center">
                                Action
                            </th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($titles as $title)
                            <tr>
                                <td>
                                    {{ ++$count }}
                                </td>
                                <td>
                                    {{ $title->psm_title }}
                                </td>
                                <td>
                                    by: {{ $title->supervisor->name }}
                                </td>
                                <td class="project-actions text-center">
                                    <a class="btn btn-success btn-sm @if($book_status === true) disabled @endif" href="{{ route('manage-title.book-title', $title->title_id) }}">
                                        <i class="fas fa-check">
                                        </i>
                                        Book Title
                                    </a>
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
