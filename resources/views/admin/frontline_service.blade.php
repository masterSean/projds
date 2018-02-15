<div ng-controller="ProgramsController">
    <div class="page-header">
        <h2>Frontline Services</h2>
    </div>
    <button class="btn btn-info" data-toggle="modal" data-target="#addprogram">Add Service</button><br><br>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Created At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr ng-repeat="program in programs">
                <td>@{{ program.title }}</td>
                <td>@{{ program.description }}</td>
                <td>@{{ program.created_at }}</td>
                <td>
                    <div class="btn-group">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#editprogram" ng-click="edit($index)"><i class="fa fa-edit"></i></button>
                        <button class="btn btn-danger" ng-click="remove($index)"><i class="fa fa-remove"></i></button>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
    
    <div id="addprogram" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-heading">Create Frontline Services</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form ng-submit="save()">
                                <div class="form-group">
                                    <label for="">Title</label>
                                    <input class="form-control" type="text" ng-model="program.title">
                                </div>
                                <div class="form-group">
                                    <label for="">Description</label>
                                    <textarea id="" class="form-control" name="" cols="30" rows="5" ng-model="program.description"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Image</label>
                                    <input type="file" name="fimage" />
                                </div>
                                <button class="btn btn-success" data-close="modal">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- Modal end -->

    <div id="editprogram" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-heading">Create Frontline Services</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form ng-submit="update()">
                                <div class="form-group">
                                    <label for="">Title</label>
                                    <input class="form-control" type="text" ng-model="edit_program.title">
                                </div>
                                <div class="form-group">
                                    <label for="">Description</label>
                                    <textarea id="" class="form-control" name="" cols="30" rows="5" ng-model="edit_program.description"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Image</label>
                                    <input type="file" name="efimage" />
                                </div>
                                <button class="btn btn-success" data-close="modal">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
