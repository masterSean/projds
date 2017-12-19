<div class="col-md-11" ng-controller="OrganizationFunctions">
    <h3>Organizations & Functions</h3>
    <hr>
    <button class="btn btn-info" ng-click="editor = !editor">Add Organization</button>
    <br><br>
    <div ng-show="editor">
        <form class="form" ng-submit="create()">
            <div class="form-group">
                <label for="">Organization Name</label>
                <input class="form-control" type="text" ng-model="org.name">
            </div>
            <div class="form-group">
                <label for="">Organization Functions</label>
                <textarea id="orgfeditor" cols="5" rows="5"></textarea>
            </div>
            <button class="btn btn-info">Create</button>
        </form>
        <br><br>
    </div>
    
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Created</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr ng-repeat="org in organizations track by $index">
                <td>@{{ org.name }}</td>
                <td>@{{ org.created_at }}</td>
                <td><button class="btn btn-danger btn-sm" ng-click="remove($index)"><i class="fa fa-trash"></i></button></td>
            </tr>
        </tbody>
    </table>

    <div id="viewer" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body"></div>
            </div>
        </div>
    </div>
</div>
