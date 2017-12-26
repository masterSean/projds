<div class="col-md-12" ng-controller="OfficialsPositionsController">
    <h2>DSWD OFFICIALS & KEY POSITIONS</h2>
    <br>
    <form class="form-inline" enctype="multipart/form-data" ng-submit="add()">
        <div class="form-group">
            <label for="">Upload File</label>
            <input class="form-control" type="file" name="image">
        </div>
        <button class="btn btn-info">Upload</button>
    </form>
    <div>
        <br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Primary <i><span class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" title="Is shown to the users"></span></i></th>
                    <th>Created</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @verbatim
                <tr ng-repeat="file in files track by $index">
                    <td><a href="javascript:void(0)">{{ file.name }}</a></td>
                    <td>
                        <span class="label label-info" ng-show="file.primary">Primary</span>
                        <span class="label label-default" ng-hide="file.primary">Hidden</span>
                    </td>
                    <td>{{ file.created_at }}</td>
                    <td>
                        <div class="btn-group">
                            <button class="btn btn-info" ng-click="makePrimary($index)"><i class="fa fa-check"></i></button>
                            <button class="btn btn-info" ng-click="view($index)"><i class="fa fa-image"></i></button>
                            <button class="btn btn-danger" ng-click="remove($index)"><i class="fa fa-trash"></i></button>
                        </div>
                    </td>
                </tr>
                @endverbatim
            </tbody>
        </table>
        <div id="positions" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <h3>@{{ selected.name }}</h3>
                        <hr>
                        <div id="img-container" style="width:100%;height:100%;overflow:auto;">
                            <img src="/storage/offcials_positions/@{{ selected.disk_name }}" alt="officials_positions" />
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- modal end -->
    </div>
</div>
