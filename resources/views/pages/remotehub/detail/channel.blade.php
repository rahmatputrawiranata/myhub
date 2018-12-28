<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <div class="card">
      <div class="header">
        <h2>
          DEFAULT EXAMPLE
          <small>Drag &amp; drop hierarchical list with mouse and touch compatibility</small>
        </h2>
        <ul class="header-dropdown m-r--5">
          <li class="dropdown">
            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              <i class="material-icons">more_vert</i>
            </a>
            <ul class="dropdown-menu pull-right">
              <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
              <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
              <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <div class="body">
        <div class="clearfix m-b-20">
          <div class="dd">
            <ol class="dd-list">
              <li class="dd-item" data-id="1">
                <div class="dd-handle">Item 1</div>
              </li>
              <li class="dd-item dd-collapsed" data-id="2"><button data-action="collapse" type="button" style="display: none;">Collapse</button><button data-action="expand" type="button" style="display: block;">Expand</button>
                <div class="dd-handle">Item 2</div>
                <ol class="dd-list" style="display: none;">
                  <li class="dd-item" data-id="3">
                    <div class="dd-handle">Item 3</div>
                  </li>
                  <li class="dd-item" data-id="4">
                    <div class="dd-handle">Item 4</div>
                  </li>
                  <li class="dd-item dd-collapsed" data-id="5"><button data-action="collapse" type="button" style="display: none;">Collapse</button><button data-action="expand" type="button" style="display: block;">Expand</button>
                    <div class="dd-handle">Item 5</div>
                    <ol class="dd-list" style="display: none;">
                      <li class="dd-item" data-id="6">
                        <div class="dd-handle">Item 6</div>
                      </li>
                      <li class="dd-item" data-id="7">
                        <div class="dd-handle">Item 7</div>
                      </li>
                      <li class="dd-item" data-id="10">
                        <div class="dd-handle">Item 10</div>
                      </li><li class="dd-item" data-id="8">
                        <div class="dd-handle">Item 8</div>
                      </li>
                    </ol>
                  </li>
                  <li class="dd-item" data-id="9">
                    <div class="dd-handle">Item 9</div>
                  </li>
                  
                </ol>
              </li>
              <li class="dd-item" data-id="11">
                <div class="dd-handle">Item 11</div>
              </li>
              <li class="dd-item" data-id="12">
                <div class="dd-handle">Item 12</div>
              </li>
            </ol>
          </div>
        </div>
        <b>Output JSON</b>
        <textarea cols="30" rows="3" class="form-control no-resize" readonly="">[{"id":1},{"id":2,"children":[{"id":3},{"id":4},{"id":5,"children":[{"id":6},{"id":7},{"id":8}]},{"id":9},{"id":10}]},{"id":11},{"id":12}]</textarea>
      </div>
    </div>
  </div>
  <!-- /.col -->
  <div class="col-lg-4 col-md-6">
    <!-- Widget: user widget style 1 -->
    <div class="card profile-card">
      <!-- Add the bg color to the header using any of the bg-* classes -->
      <div class="profile-header" style="background: url('{{ asset('img/photo3.jpg')}}') center center;">
        <h3 class="widget-user-username"><strong>COMPUTING AND ICT TEAM</strong></h3>
        {{-- <h5 class="widget-user-desc">Web Designer</h5> --}}
      </div>
      <div class="profile-body">
        <img class="img-circle" src="{{ asset('img/icon/computing-icon.png')}}" alt="User Avatar">
      </div>
      <div class="box-footer">
        <div class="row">
          <div class="col-sm-4 border-right">
            <div class="description-block">
              <h5 class="description-header">3,200</h5>
              <span class="description-text">SALES</span>
            </div>
            <!-- /.description-block -->
          </div>
          <!-- /.col -->
          <div class="col-sm-4 border-right">
            <div class="description-block">
              <h5 class="description-header">13,000</h5>
              <span class="description-text">FOLLOWERS</span>
            </div>
            <!-- /.description-block -->
          </div>
          <!-- /.col -->
          <div class="col-sm-4">
            <div class="description-block">
              <h5 class="description-header">35</h5>
              <span class="description-text">PRODUCTS</span>
            </div>
            <!-- /.description-block -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <div class="box-footer no-padding">
        <ul class="nav nav-stacked">
          <li><a href="#">Data Engineer <span class="pull-right label bg-blue">31 | Follow</span></a></li>
          <li><a href="#">MobileDev <span class="pull-right label bg-aqua">5 | Follow</span></a></li>
          <li><a href="#">Network Administrator <span class="pull-right label bg-green">12 | Follow</span></a></li>
          <li><a href="#">UI/UX Designer <span class="pull-right label bg-red">842 | Follow</span></a></li>
          <li><a href="#">WebDev <span class="pull-right label bg-blue">31 | Follow</span></a></li>
        </ul>
      </div>
    </div>
    <!-- /.widget-user -->
  </div>
  <!-- /.col -->
  <div class="col-lg-4 col-md-6">
    <!-- Widget: user widget style 1 -->
    <div class="card profile-card">
      <!-- Add the bg color to the header using any of the bg-* classes -->
      <div class="profile-header" style="background: url('{{ asset('img/photo4.jpg')}}') center center;">
        <h3 class="widget-user-username"><strong>CREATIVE, ART AND MEDIA</strong></h3>
        {{-- <h5 class="widget-user-desc">Web Designer</h5> --}}
      </div>
      <div class="profile-body">
        <img class="img-circle" src="{{ asset('img/icon/creative.png')}}" alt="User Avatar">
      </div>
      <div class="box-footer">
        <div class="row">
          <div class="col-sm-4 border-right">
            <div class="description-block">
              <h5 class="description-header">3,200</h5>
              <span class="description-text">SALES</span>
            </div>
            <!-- /.description-block -->
          </div>
          <!-- /.col -->
          <div class="col-sm-4 border-right">
            <div class="description-block">
              <h5 class="description-header">13,000</h5>
              <span class="description-text">FOLLOWERS</span>
            </div>
            <!-- /.description-block -->
          </div>
          <!-- /.col -->
          <div class="col-sm-4">
            <div class="description-block">
              <h5 class="description-header">35</h5>
              <span class="description-text">PRODUCTS</span>
            </div>
            <!-- /.description-block -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <div class="box-footer no-padding">
        <ul class="nav nav-stacked">
          <li><a href="#">Art & Craft <span class="pull-right label bg-red">842 | Follow</span></a></li>
          <li><a href="#">Graphic Design <span class="pull-right label bg-blue">31 | Follow</span></a></li>
          <li><a href="#">Media Promotion <span class="pull-right label bg-aqua">5 | Follow</span></a></li>
          <li><a href="#">Performers <span class="pull-right label bg-green">12 | Follow</span></a></li>
          <li><a href="#">Photographer / Videographer <span class="pull-right label bg-green">12 | Follow</span></a></li>
        </ul>
      </div>
    </div>
    <!-- /.widget-user -->
  </div>
  <!-- /.col -->
</div>