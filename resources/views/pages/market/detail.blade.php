<div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#products" data-toggle="tab">Product</a></li>
              <li><a href="#projects" data-toggle="tab">Projects</a></li>
              <li><a href="#marketing" data-toggle="tab">Marketing</a></li>
              <li><a href="#content" data-toggle="tab">Content</a></li>
              <li><a href="#training" data-toggle="tab">Training</a></li>
              <li><a href="#translation" data-toggle="tab">Translation</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="products">
                @include('user.market.detail.product')
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="projects">
                <!-- Networks -->
                @include('user.market.detail.projects')
                
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="marketing">
                <!-- marketing -->
                @include('user.market.detail.marketing')
                
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="content">
                <!-- content -->
                @include('user.market.detail.content')
                
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="training">
                <!-- training -->
                @include('user.market.detail.training')
                
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="translation">
                
                @include('user.market.detail.translation')
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->