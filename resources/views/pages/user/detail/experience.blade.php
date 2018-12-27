<div class="row clearfix">
  <div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
    <div class="panel-group" id="experience" role="tablist" aria-multiselectable="true">
      <div class="panel panel-col-pink">
        <div class="panel-heading" role="tab" id="headingOne_17">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#experience" href="#experienceOne_17" aria-expanded="false" aria-controls="collapseOne_17">
              <i class="material-icons">perm_contact_calendar</i> Work Experience
            </a>
          </h4>
        </div>
        <div id="experienceOne_17" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne_17">
          <div class="panel-body">
            <!-- Experience -->
             @include('pages.user.detail.experience.work')
            <!-- /.Experience -->
          </div>
        </div>
      </div>
      <div class="panel panel-col-cyan">
        <div class="panel-heading" role="tab" id="headingTwo_17">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#experience" href="#experienceTwo_17" aria-expanded="false" aria-controls="collapseTwo_17">
              <i class="material-icons">cloud_download</i> Skill & Education
            </a>
          </h4>
        </div>
        <div id="experienceTwo_17" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo_17">
          <div class="panel-body">
            
            <!-- Skills & Endorsements -->
            @include('pages.user.detail.experience.skill')>
            <!-- /.Skills & Endorsements -->
          </div>
        </div>
      </div>
      <div class="panel panel-col-teal">
        <div class="panel-heading" role="tab" id="headingThree_17">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#experience" href="#experienceThree_17" aria-expanded="false" aria-controls="collapseThree_17">
              <i class="material-icons">contact_phone</i> Recommendation
            </a>
          </h4>
        </div>
        <div id="experienceThree_17" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree_17">
          <div class="panel-body">
            <!-- Recommendations -->
            @include('pages.user.detail.experience.recommendation')
            <!-- /.Recommendations -->
          </div>
        </div>
      </div>
      <div class="panel panel-col-orange">
        <div class="panel-heading" role="tab" id="headingFour_17">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#experience" href="#experienceFour_17" aria-expanded="false" aria-controls="collapseFour_17">
              <i class="material-icons">folder_shared</i> Accomplishments
            </a>
          </h4>
        </div>
        <div id="experienceFour_17" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour_17">
          <div class="panel-body">
            
            <!-- Accomplishments -->
            @include('pages.user.detail.experience.accomplishments')
            <!-- /.Accomplishments -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



