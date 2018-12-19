<div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#rawes" data-toggle="tab">Rabu Weekly Sharing</a></li>
              <li><a href="#kopdar" data-toggle="tab">Monthly Meetup</a></li>
              <li><a href="#webinar" data-toggle="tab">webinar</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="rawes">
                @include('user.events.detail.rawes')
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="kopdar">
                <!-- Networks -->
                @include('user.events.detail.kopdar')
                
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="webinar">
                <!-- webinar -->
                @include('user.events.detail.webinar')
                
              </div>
              <!-- /.tab-pane -->

            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->