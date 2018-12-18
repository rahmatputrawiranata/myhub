<div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#people" data-toggle="tab">People</a></li>
              <li><a href="#channels" data-toggle="tab">Channel</a></li>
              <li><a href="#companies" data-toggle="tab">Companies</a></li>
              <li><a href="#hashtag" data-toggle="tab">Hashtag</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="people">
                @include('user.partials.networks.detail')
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="channels">
                <!-- Networks -->
                @include('user.partials.networks.channel')
                
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="companies">
                <!-- companies -->
                companies
                
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="hashtag">
                <!-- hashtag -->
                hashtag
                
              </div>
              <!-- /.tab-pane -->

            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->