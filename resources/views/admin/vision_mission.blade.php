<div class="col-md-12" ng-controller="VisionMission">
    <div class="row">
        <div ng-hide="edit_mode">
            <button class="btn pull-right" ng-click="edit_mode=true"><i class="fa fa-edit"></i></button>
            <h2>Vision</h2>
            <p ng-bind-html="vision.content"></p>
        </div>
        <div ng-show="edit_mode">
            <!-- Edit Mode -->
            <form class="form" ng-submit="save_vision()">
                <div class="form-group">
                    <h2>Vision</h2>
                    <textarea ng-model="vision.content" id="vision_editor" cols="5" rows="5"></textarea>
                </div>
                <button class="btn btn-info">Save</button>
                <button class="btn btn-warning" ng-click="edit_mode=false">Cancel</button>
            </form>
        </div>
    </div>
    <div class="row">
        <div ng-hide="medit_mode">
            <button class="btn pull-right" ng-click="medit_mode=true"><i class="fa fa-edit"></i></button>
            <h2>Mission</h2>
            <p ng-bind-html="mission.content"></p>
        </div>
        <div ng-show="medit_mode">
            <!-- Edit Mode -->
            <form class="form" ng-submit="save_mission()">
                <div class="form-group">
                    <h2>Mission</h2>
                    <textarea ng-model="mission.content" id="mission_editor" cols="5" rows="5"></textarea>
                </div>
                <button class="btn btn-info">Save</button>
                <button class="btn btn-warning" ng-click="medit_mode=false">Cancel</button>
            </form>
        </div>
    </div>
</div>
