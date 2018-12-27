<div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#people" data-toggle="tab">People</a></li>
              <li><a href="#remotehub" data-toggle="tab">MyHUB</a></li>
              <li><a href="#companies" data-toggle="tab">Companies</a></li>
              <li><a href="#hashtag" data-toggle="tab">Hashtag</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="people">
                @include('pages.remotehub.detail.people')
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="remotehub">
                <!-- Networks -->
                @include('pages.remotehub.detail.myhub')
                
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="companies">
                <!-- companies -->
                @include('pages.remotehub.detail.companies')
                
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="hashtag">
                <!-- hashtag -->
                @include('pages.remotehub.detail.hashtag')
                
              </div>
              <!-- /.tab-pane -->

            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->