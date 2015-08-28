<!-- Comments Form -->
<div class="well" ng-controller="CommentController">
    <div>
        <h4>Bình luận:</h4>
        <form role="form" ng-submit="submitComment(news_detail)" ng-init="init()">
            <div class="form-group">
                <input id="textinput" name="user" placeholder="Nhập họ và tên" class="form-control input-md" type="text" ng-model='commentData.user' required>
            </div>

            <div class="form-group">
                <input id="textinput" name="email" placeholder="Nhập Email" class="form-control input-md" type="email" ng-model='commentData.email' required>
            </div>

            <div class="form-group">
                <textarea class="form-control" name="text" placeholder="Nội dung...." rows="3" ng-model='commentData.text' required></textarea>
            </div>
            <button type="submit" id="submit" class="btn btn-primary">Đồng ý</button>
        </form>
    </div>
    <hr>
<!-- Posted Comments -->
<!-- Comment -->
    <div class="media">
        <div class="row">
            <div class="col-md-2 pull-right">
                <input type="number" step="5" ng-model="number" class="form-control">
            </div>
        </div>
        <div ng-repeat="com in news_detail.comment | orderBy:'-id' | limitTo: number as results">
            <h4>Comment By: @{{com.user}}</h4>
            <h4>
                <small>Email: @{{com.email}}</small>
                <small> | Date: @{{com.created_at}}</small>
            </h4>
            <p>@{{com.text}}</p>
            <p><a href="#" ng-click="deleteComment(news_detail.comment, com, $index)" class="text-muted">Delete</a></p>
        </div>
        <div ng-if="results.length == 0">
            <strong>No Comments...</strong>
        </div>
    </div>
</div>