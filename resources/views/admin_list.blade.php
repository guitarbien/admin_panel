@extends('admin_template')

@section('content')
    <div class='row'>
        <div class="col-md-3">
          <div class="box box-warning box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">系統管理</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <ul>
                  @foreach($main_functions as $each_func)
                  <li>{{ $each_func['name'] }}</li>
                  @endforeach
                </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

    </div><!-- /.row -->
@endsection