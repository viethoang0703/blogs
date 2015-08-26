<!-- Comments Form -->
<div class="well">
    <div>
        <h4>Bình luận:</h4>
        <form role="form" ng-submit="submitComment()" ng-controller="CommentController">
            <div class="form-group">
                <input id="textinput" name="user" placeholder="Nhập họ và tên" class="form-control input-md" type="text" ng-model='commentData.user' required>
            </div>

            <div class="form-group">
                <input id="textinput" name="email" placeholder="Nhập Email" class="form-control input-md" type="email" ng-model='commentData.email' required>
            </div>

            <div class="form-group">
                <textarea class="form-control" name="text" placeholder="Nội dung...." rows="3" ng-model='commentData.text' required></textarea>
            </div>
            <div class="form-group">
                <input type="text" ng-model='commentData.newsId' ng-init="commentData.newsId = $parent.news_detail.id">
            </div>
            <button type="submit" id="submit" class="btn btn-primary">Đồng ý</button>
        </form>
    </div>
    <hr>
<!-- Posted Comments -->
<!-- Comment -->
    <div class="media">
        <input width = "25px" type="number" step="5" ng-model="number" class="pull-right">
        <div ng-repeat="com in news_detail.comment | orderBy:'-id' | limitTo: number as results">
            <h4>Họ và tên: @{{com.user}}
                <small>Email: @{{com.email}}</small>
                <small> | Date: @{{com.created_at}}</small>
            </h4>
            @{{com.text}}
        </div>
        <div ng-if="results.length == 0">
            <strong>No Comments...</strong>
        </div>
    </div>
</div>