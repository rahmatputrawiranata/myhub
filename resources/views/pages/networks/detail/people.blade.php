<div class="box-body">
    <div class="box-group" id="accordion">
        <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
        <div class="panel box box-primary">
            <div class="box-header with-border">
                <h4 class="box-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                        ADMINISTRATION AND MANAGEMENT TEAM
                    </a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
                <div class="box-body">
                    @include('user.networks.detail.people.admin-intro')
                </div>
            </div>
        </div>
        <div class="panel box box-danger">
            <div class="box-header with-border">
                <h4 class="box-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                        COMPUTING AND ICT TEAM
                    </a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
                <div class="box-body">
                    @include('user.networks.detail.people.computing-intro')
                </div>
            </div>
        </div>
        <div class="panel box box-success">
            <div class="box-header with-border">
                <h4 class="box-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                        CREATIVE, ART AND MEDIA TEAM
                    </a>
                </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
                <div class="box-body">
                    @include('user.networks.detail.people.creative-intro')
                </div>
            </div>
        </div>
    </div>
</div>

<!-- /.box-header -->
