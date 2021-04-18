@extends('layouts.user')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            @include('partials.user.messages')
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Upload List</h4>
                    </div>
                    <div class="iq-card-header-toolbar d-flex align-items-center">
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#createItem">Upload</a>
                    </div>
                </div>
                <div class="iq-card-body">
                    <div class="table-view">
                        <table class="data-tables table movie_table " style="width:100%">
                            <thead>
                                <tr>
                                    <th>Images</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="media align-items-center">
                                            <div class="iq-movie">
                                                <a href="javascript:void(0);"><img src="../assets/images/show-thumb/08.jpg"
                                                        class="img-border-radius avatar-40 img-fluid" alt=""></a>
                                            </div>
                                            <div class="media-body text-white text-left ml-3">
                                                <p class="mb-0">Day of Darkness</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex align-items-center list-user-action">
                                            <a class="iq-bg-warning" data-toggle="tooltip" data-placement="top" title=""
                                                data-original-title="View" href="show-list.html#"><i
                                                    class="lar la-eye"></i></a>
                                            <a class="iq-bg-success" data-toggle="tooltip" data-placement="top" title=""
                                                data-original-title="Edit" href="show-list.html#"><i
                                                    class="ri-pencil-line"></i></a>
                                            <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title=""
                                                data-original-title="Delete" href="show-list.html#"><i
                                                    class="ri-delete-bin-line"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="media align-items-center">
                                            <div class="iq-movie">
                                                <a href="javascript:void(0);"><img src="../assets/images/show-thumb/10.jpg"
                                                        class="img-border-radius avatar-40 img-fluid" alt=""></a>
                                            </div>
                                            <div class="media-body text-white text-left ml-3">
                                                <p class="mb-0">My True Friends</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex align-items-center list-user-action">
                                            <a class="iq-bg-warning" data-toggle="tooltip" data-placement="top" title=""
                                                data-original-title="View" href="show-list.html#"><i
                                                    class="lar la-eye"></i></a>
                                            <a class="iq-bg-success" data-toggle="tooltip" data-placement="top" title=""
                                                data-original-title="Edit" href="show-list.html#"><i
                                                    class="ri-pencil-line"></i></a>
                                            <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title=""
                                                data-original-title="Delete" href="show-list.html#"><i
                                                    class="ri-delete-bin-line"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="media align-items-center">
                                            <div class="iq-movie">
                                                <a href="javascript:void(0);"><img src="../assets/images/show-thumb/07.jpg"
                                                        class="img-border-radius avatar-40 img-fluid" alt=""></a>
                                            </div>
                                            <div class="media-body text-white text-left ml-3">
                                                <p class="mb-0">Arrival 1999</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex align-items-center list-user-action">
                                            <a class="iq-bg-warning" data-toggle="tooltip" data-placement="top" title=""
                                                data-original-title="View" href="show-list.html#"><i
                                                    class="lar la-eye"></i></a>
                                            <a class="iq-bg-success" data-toggle="tooltip" data-placement="top" title=""
                                                data-original-title="Edit" href="show-list.html#"><i
                                                    class="ri-pencil-line"></i></a>
                                            <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title=""
                                                data-original-title="Delete" href="show-list.html#"><i
                                                    class="ri-delete-bin-line"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="media align-items-center">
                                            <div class="iq-movie">
                                                <a href="javascript:void(0);"><img src="../assets/images/show-thumb/01.jpg"
                                                        class="img-border-radius avatar-40 img-fluid" alt=""></a>
                                            </div>
                                            <div class="media-body text-white text-left ml-3">
                                                <p class="mb-0">Night Mare</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex align-items-center list-user-action">
                                            <a class="iq-bg-warning" data-toggle="tooltip" data-placement="top" title=""
                                                data-original-title="View" href="show-list.html#"><i
                                                    class="lar la-eye"></i></a>
                                            <a class="iq-bg-success" data-toggle="tooltip" data-placement="top" title=""
                                                data-original-title="Edit" href="show-list.html#"><i
                                                    class="ri-pencil-line"></i></a>
                                            <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title=""
                                                data-original-title="Delete" href="show-list.html#"><i
                                                    class="ri-delete-bin-line"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal --}}
    <div class="modal fade" id="createItem" tabindex="-1" role="dialog" aria-labelledby="itemModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="itemModalLabel">Add New Image</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="iq-card">

                            <div class="iq-card-body">
                                <form action="/admin/user-post" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 form_gallery form-group">
                                            <label id="gallery2" for="form_gallery-upload">Upload Image</label>
                                            <input data-name="#gallery2" id="form_gallery-upload" name="image"
                                                class="form_gallery-upload" type="file" accept=".png, .jpg, .jpeg" required>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 form-group">
                                                <button type="reset" class="btn btn-danger" data-dismiss="modal"
                                                    aria-label="Close">cancel</button>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
