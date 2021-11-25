@extends('layouts.admin.app')

@section('content')
    <div class="main-content" style="min-height: 664px;">
        <section class="section">
          <div class="section-header">
            <h1>Posts</h1>
            <div class="section-header-button">
              <a href="{{ $route }}" class="btn btn-primary">Add New</a>
            </div>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Posts</a></div>
              <div class="breadcrumb-item">All Posts</div>
            </div>
          </div>
          <div class="section-body">
            <h2 class="section-title">Posts</h2>
            <p class="section-lead">
              You can manage all posts, such as editing, deleting and more.
            </p>

            <div class="row">
              <div class="col-12">
                <div class="card mb-0">
                  <div class="card-body">
                    <ul class="nav nav-pills">
                      <li class="nav-item">
                        <a class="nav-link active" href="#">All <span class="badge badge-white">5</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Draft <span class="badge badge-primary">1</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Pending <span class="badge badge-primary">1</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Trash <span class="badge badge-primary">0</span></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>




            <div class="row mt-4">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>All Posts</h4>
                  </div>
                  <div class="card-body">
            <table id="table_id" class="display">
    <thead>
        <tr>
            <th>Column 1</th>
            <th>Column 2</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
        <tr>
            <td>{{ $post->tittle }} <div class="table-links">
                              <a href="#" onclick="event.preventDefault(); $('#destroy-{{ $post->id }}').submit();">Destroy</a>
                              <div class="bullet"></div>
                              <a href="/posts/{{ $post->id }}/edit">Edit</a>
                              <div class="bullet"></div>
                                <form id="destroy-{{ $post->id }}" action="{{ route('posts.destroy',[$post->id]) }}" method="POST" class="d-none">
                                    @method('DELETE')
                                    @csrf
                                </form>
                            </div></td>
            <td></td>
        </tr>
        @endforeach
    </tbody>
</table>

                    <div class="float-left">
                      <div class="selectric-wrapper selectric-form-control selectric-selectric"><div class="selectric-hide-select"><select class="form-control selectric" tabindex="-1">
                        <option>Action For Selected</option>
                        <option>Move to Draft</option>
                        <option>Move to Pending</option>
                        <option>Delete Pemanently</option>
                      </select></div><div class="selectric"><span class="label">Action For Selected</span><b class="button">▾</b></div><div class="selectric-items" tabindex="-1"><div class="selectric-scroll"><ul><li data-index="0" class="selected">Action For Selected</li><li data-index="1" class="">Move to Draft</li><li data-index="2" class="">Move to Pending</li><li data-index="3" class="last">Delete Pemanently</li></ul></div></div><input class="selectric-input" tabindex="0"></div>
                    </div>
                    <div class="float-right">
                      <form>
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Search">
                          <div class="input-group-append">
                            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                          </div>
                        </div>
                      </form>
                    </div>

                    <div class="clearfix mb-3"></div>



                    <div class="table-responsive">
                      <table id="aa" class="table table-striped">
                        <tbody><tr>
                          <th class="text-center pt-2">
                            <div class="custom-checkbox custom-checkbox-table custom-control">
                              <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad" class="custom-control-input" id="checkbox-all">
                              <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                            </div>
                          </th>
                          <th>Title</th>
                          <th>Category</th>
                          <th>Author</th>
                          <th>Created At</th>
                          <th>Status</th>
                        </tr>
                        @foreach ($posts as $post)
                        <tr>
                          <td>
                            <div class="custom-checkbox custom-control">
                              <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-2">
                              <label for="checkbox-2" class="custom-control-label">&nbsp;</label>
                            </div>
                          </td>
                          <td>{{ $post->tittle }}
                            <div class="table-links">
                              <a href="#">View</a>
                              <div class="bullet"></div>
                              <a href="#">Edit</a>
                              <div class="bullet"></div>
                              <a href="#" class="text-danger">Trash</a>
                            </div>
                          </td>
                          <td>
                            <a href="#">Web Developer</a>,
                            <a href="#">Tutorial</a>
                          </td>
                          <td>
                            <a href="#">
                              <img alt="image" src="../admin/assets/img/avatar/avatar-5.png" class="rounded-circle" width="35" data-toggle="title" title=""> <div class="d-inline-block ml-1">Rizal Fakhri</div>
                            </a>
                          </td>
                          <td>2018-01-20</td>
                          <td><div class="badge badge-primary">Published</div></td>
                        </tr>
                        @endforeach


                      </tbody></table>
                    </div>

                    <div class="float-right">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>


@endsection



@section('script')
        <script>
        $(document).ready( function () {
            $('#table_id').DataTable();
        } );
      </script>
@endsection
