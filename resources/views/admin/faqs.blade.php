@extends('layouts.admin')

@section('content')
    <div class="div" ng-controller="FAQs">
        <button class="btn btn-info" ng-click="show_form = !show_form">Add FAQ</button>
        <br><br>
        <div id="form" ng-show="show_form">
            <form ng-submit="create()">
                <div class="form-group">
                    <label for="">Question</label>
                    <input ng-model="faq.question" class="form-control" type="text" placeholder="Questions...">
                </div>
                <div class="form-group">
                    <label for="">Answer</label>
                    <textarea id="editor" cols="5" rows="5"></textarea>
                </div>
                <button class="btn btn-primary">Create</button>
            </form>
        </div>
        <hr>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Question</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr ng-repeat="faq in faqs track by $index">
                    <td>@{{ faq.question }}</td>
                    <td>@{{ faq.created_at }}</td>
                    <td>
                        <div class="btn-group">
                            <button class="btn btn-info" ng-click="view($index)"><i class="fa fa-check"></i></button>
                            <button class="btn btn-danger" ng-click="remove($index)"><i class="fa fa-trash"></i></button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>

        <div class="modal fade" tabindex="-1" id="view" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h3>FAQ's</h3>
                                <hr>
                                <label for="">Question: </label>
                                <h4 style="margin: 5px !important;"><strong>@{{ selected.question }}</strong></h4>
                                <label for="">Answer: </label>
                                <p ng-bind-html="selected.answer"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript" src="{{ asset('js/assets/controllers/faqs.js') }}"></script>
@endsection
