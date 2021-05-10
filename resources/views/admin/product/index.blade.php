@extends('admin.admin_layouts')

@section('admin_content')
    <!-- ########## START: MAIN PANEL ########## -->

    <div class=" sl-pagebody">
        <div class="container-fluid">
            <div class="sl-page-title">
                <h5>Products List</h5>
            </div><!-- sl-page-title -->
            <br>
            <div class="card pd-20 pd-sm-40">

                <table class="table table-hover">
                    <thead class="black white-text">
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">name</th>
                            <th scope="col">image</th>
                            <th scope="col">cate</th>
                            <th scope="col">action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>
                                <a href="#delete"><i class="fa fa-trash"></i></a>
                                <a href="#edit"><i class="fa fa-edit"></i></a>
                                <a href="#edit"><i class="fa fa-eye"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div><!-- card -->
        </div>
    </div><!-- sl-pagebody -->
    <!-- ########## END: MAIN PANEL ########## -->
@endsection
