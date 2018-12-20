<div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#people" data-toggle="tab">People</a></li>
              <li><a href="#remotehub" data-toggle="tab">MyHUB</a></li>
              <li><a href="#companies" data-toggle="tab">Companies</a></li>
              <li><a href="#hashtag" data-toggle="tab">Hashtag</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="people">
                @include('user.networks.detail.people')
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="remotehub">
                <!-- Networks -->
                @include('user.networks.detail.myhub')
                
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="companies">
                <!-- companies -->
                @include('user.networks.detail.companies')
                
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="hashtag">
                <!-- hashtag -->
                @include('user.networks.detail.hashtag')
                
              </div>
              <!-- /.tab-pane -->

            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->