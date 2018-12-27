<div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#allmedia" data-toggle="tab">All Media [330]</a></li>
              <li><a href="#album" data-toggle="tab">Album [10]</a></li>
              <li><a href="#Photos" data-toggle="tab">Photos [300]</a></li>
              <li><a href="#videos" data-toggle="tab">Videos [5]</a></li>
              <li><a href="#music" data-toggle="tab">Music [25]</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="allmedia">
                @include('pages.user.detail.mymedia.allmedia')
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="album">
                <!-- Networks -->
                @include('pages.user.detail.mymedia.album')
                
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="Photos">
                <!-- Photos -->
                @include('pages.user.detail.mymedia.photos')
                
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="videos">
                <!-- videos -->
                @include('pages.user.detail.mymedia.videos')
                
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="music">
                <!-- music -->
                @include('pages.user.detail.mymedia.music')
                
              </div>
              <!-- /.tab-pane -->

            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->