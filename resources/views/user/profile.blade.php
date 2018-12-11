@extends('adminlte::page')

@section('title', 'RemoteHUB.id')

@section('content_header')
{{-- <h1>Heading Title</h1> --}}
@stop

@section('content')
<!-- Widget: user widget style 1 -->
<section>
  <div class="box box-widget widget-user">
    <!-- Add the bg color to the header using any of the bg-* classes -->
    <div class="widget-user-header bg-black" style="background: url('{{ asset('/img/photo1.png')}}') center center;">
      <h3 class="widget-user-username">Tonny Soerojo S.H.</h3>
      <h5 class="widget-user-desc">Founder / CEO at Legaltech Indonesia</h5>
      <h5 class="widget-user-desc"><i class="fa fa-map-marker"></i> DKI Jakarta</h5>
    </div>
    <div class="widget-user-image">
      <img class="img-circle" src="{{ asset('img/ths.jpeg')}}" alt="User Avatar">
    </div>
    <div class="box-footer">
      <div class="row">
        <div class="col-sm-4 border-right">
          <div class="description-block">
            <h5 class="description-header"><img src="{{ asset('img/trusted.png')}}" height="25px" alt=""></h5>
            <span class="description-text">TRUSTED</span>
          </div>
          <!-- /.description-block -->
        </div>
        <!-- /.col -->
        <div class="col-sm-4 border-right">
          <div class="description-block">
            <h5 class="description-header">Business Analyst</h5>
            <span class="description-text">Front End Developer</span>
          </div>
          <!-- /.description-block -->
        </div>
        <!-- /.col -->
        <div class="col-sm-4">
          <div class="description-block">
            <h5 class="description-header">35</h5>
            <span class="description-text">Projects</span>
          </div>
          <!-- /.description-block -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
  </div>
</section>
<!-- /.widget-user -->  
<!-- Experience -->
<section>
  <div class="box box-default collapsed-box">
    <div class="box-header with-border">
      <h3 class="box-title">Experience</h3>
      
      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
        </button>
      </div>
      <!-- /.box-tools -->
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <div class="attachment-block clearfix">
        <img class="attachment-img" src="http://localhost/myhub/public/img/photo1.png')}}" alt="Attachment Image">
        
        <div class="attachment-pushed">
          <h4 class="attachment-heading"><a href="http://www.lipsum.com/">Lorem ipsum text generator</a></h4>
          
          <div class="attachment-text">
            Description about the attachment can be placed here.
            Lorem Ipsum is simply dummy text of the printing and typesetting industry... <a href="#">more</a>
          </div>
          <!-- /.attachment-text -->
        </div>
        <!-- /.attachment-pushed -->
      </div>
      <div class="attachment-block clearfix">
        <img class="attachment-img" src="http://localhost/myhub/public/img/photo1.png')}}" alt="Attachment Image">
        
        <div class="attachment-pushed">
          <h4 class="attachment-heading"><a href="http://www.lipsum.com/">Lorem ipsum text generator</a></h4>
          
          <div class="attachment-text">
            Description about the attachment can be placed here.
            Lorem Ipsum is simply dummy text of the printing and typesetting industry... <a href="#">more</a>
          </div>
          <!-- /.attachment-text -->
        </div>
        <!-- /.attachment-pushed -->
      </div>
      <div class="attachment-block clearfix">
        <img class="attachment-img" src="http://localhost/myhub/public/img/photo1.png')}}" alt="Attachment Image">
        
        <div class="attachment-pushed">
          <h4 class="attachment-heading"><a href="http://www.lipsum.com/">Lorem ipsum text generator</a></h4>
          
          <div class="attachment-text">
            Description about the attachment can be placed here.
            Lorem Ipsum is simply dummy text of the printing and typesetting industry... <a href="#">more</a>
          </div>
          <!-- /.attachment-text -->
        </div>
        <!-- /.attachment-pushed -->
      </div>
      <div class="attachment-block clearfix">
        <img class="attachment-img" src="http://localhost/myhub/public/img/photo1.png')}}" alt="Attachment Image">
        
        <div class="attachment-pushed">
          <h4 class="attachment-heading"><a href="http://www.lipsum.com/">Lorem ipsum text generator</a></h4>
          
          <div class="attachment-text">
            Description about the attachment can be placed here.
            Lorem Ipsum is simply dummy text of the printing and typesetting industry... <a href="#">more</a>
          </div>
          <!-- /.attachment-text -->
        </div>
        <!-- /.attachment-pushed -->
      </div>
      <div class="attachment-block clearfix">
        <img class="attachment-img" src="http://localhost/myhub/public/img/photo1.png')}}" alt="Attachment Image">
        
        <div class="attachment-pushed">
          <h4 class="attachment-heading"><a href="http://www.lipsum.com/">Lorem ipsum text generator</a></h4>
          
          <div class="attachment-text">
            Description about the attachment can be placed here.
            Lorem Ipsum is simply dummy text of the printing and typesetting industry... <a href="#">more</a>
          </div>
          <!-- /.attachment-text -->
        </div>
        <!-- /.attachment-pushed -->
      </div>
      <div class="attachment-block clearfix">
        <img class="attachment-img" src="http://localhost/myhub/public/img/photo1.png')}}" alt="Attachment Image">
        
        <div class="attachment-pushed">
          <h4 class="attachment-heading"><a href="http://www.lipsum.com/">Lorem ipsum text generator</a></h4>
          
          <div class="attachment-text">
            Description about the attachment can be placed here.
            Lorem Ipsum is simply dummy text of the printing and typesetting industry... <a href="#">more</a>
          </div>
          <!-- /.attachment-text -->
        </div>
        <!-- /.attachment-pushed -->
      </div>
      
    </div>
    <div class="box-footer">
      <button type="button" class="btn btn-xs btn-info btn-flat pull-right"><i class="fa fa-plus"></i> Tambah</button>    
    </div>
    <!-- /.box-body -->
    <div class="box-header with-border">
      <h3 class="box-title">Education</h3>
      
      
      <!-- /.box-tools -->
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      The body of the box
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
      <button type="button" class="btn btn-xs btn-info btn-flat pull-right"><i class="fa fa-plus"></i> Tambah</button>    
    </div>
  </div>
</section>
<!-- /.Experience -->

<!-- Skills & Endorsements -->
<section>
  <div class="box box-default collapsed-box">
    <div class="box-header with-border">
      <h3 class="box-title">Skills & Endorsements</h3>
      
      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
        </button>
      </div>
      <!-- /.box-tools -->
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <ul class="nav nav-stacked">
                <li><a href="#"><h3 class="box-title">Business Development</h3> <span class="pull-right badge bg-blue">22</span><small>See 22 endorsements for Business Development</small></a></li>
                <li><a href="#"><h3 class="box-title">Entrepreneurship</h3> <span class="pull-right badge bg-blue">12</span><small>See 12 endorsements for Entrepreneurship</small></a></li>
                <li><a href="#"><h3 class="box-title">Strategic Partnership</h3> <span class="pull-right badge bg-blue">8</span><small>See 8 endorsements for Entrepreneurship</small></a></li>
              </ul>
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
      <button type="button" class="btn btn-xs btn-info btn-flat pull-right"><i class="fa fa-plus"></i> Tambah</button>    
    </div>
  </div>
</section>
<!-- /.Skills & Endorsements -->

<!-- Recommendations -->
<section>
  <div class="box box-default collapsed-box">
    <div class="box-header with-border">
      <h3 class="box-title">Recommendations</h3>
      
      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
        </button>
      </div>
      <!-- /.box-tools -->
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      The body of the box
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
      <button type="button" class="btn btn-xs btn-info btn-flat pull-right"><i class="fa fa-plus"></i> Tambah</button>    
    </div>
  </div>
</section>
<!-- /.Recommendations -->

<!-- Accomplishments -->
<section>
  <div class="box box-default collapsed-box">
    <div class="box-header with-border">
      <h3 class="box-title">Accomplishments</h3>
      
      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
        </button>
      </div>
      <!-- /.box-tools -->
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <strong><i class="fa fa-book margin-r-5"></i> Certifications</strong>
      
      <p class="text-muted">
        B.S. in Computer Science from the University of Tennessee at Knoxville
      </p>
      
      <hr>
      
      <strong><i class="fa fa-map-marker margin-r-5"></i> Languages</strong>
      
      <p class="text-muted">Indonesian, English, German</p>
      
      <hr>
      
      <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>
      
      <p>
        <span class="label label-danger">UI Design</span>
        <span class="label label-success">Coding</span>
        <span class="label label-info">Javascript</span>
        <span class="label label-warning">PHP</span>
        <span class="label label-primary">Node.js</span>
      </p>
      
      <hr>
      
      <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>
      
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
      <button type="button" class="btn btn-xs btn-info btn-flat pull-right"><i class="fa fa-plus"></i> Tambah</button>    
    </div>
  </div>
</section>
<!-- /.Accomplishments -->

<!-- Interests -->
<section>
  <div class="box box-default collapsed-box">
    <div class="box-header with-border">
      <h3 class="box-title">Interests</h3>
      
      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
        </button>
      </div>
      <!-- /.box-tools -->
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      The body of the box
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
      <button type="button" class="btn btn-xs btn-info btn-flat pull-right"><i class="fa fa-plus"></i> Tambah</button>    
    </div>
  </div>
</section>
<!-- /.Interests -->




@stop
