<form class="form-horizontal" ng-controller="NewsController" ng-submit="store(news)" ng-submit="uploadPic(news.news_image)">
    <fieldset>
    <!-- Form Name -->
    <legend>Thêm mới bài viết</legend>

    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Tiêu đề bài viết</label>
        <div class="col-md-6">
            <input id="textinput" name="news_tittle" ng-model="news.news_tittle" placeholder="Nhập tiêu đề bài viết" class="form-control input-md" type="text">
        </div>
    </div>

    <!-- Select Basic -->
    <div class="form-group">
        <label class="col-md-4 control-label" for="selectbasic">Chuyên mục</label>
        <div class="col-md-6">
            <select id="selectbasic" name ="news_category" ng-model="news.news_category" class="form-control" ng-init="create()" ng-options="cat.id as cat.cat_name for cat in category">
                <option value="">Lựa chọn Chuyên mục</option>
            </select>
        </div>
    </div>

    <!-- File Button -->
<!--     <div class="form-group">
        <label class="col-md-4 control-label" for="filebutton">Ảnh mô tả</label>
        <div class="col-md-4">
            <input type="file" id="filebutton" name="news_image" ngf-select ng-model="news.news_image" class="input-file">
        </div>
        <img ng-show="myForm.file.$valid" ngf-thumbnail="!news.news_image.$error && news.news_image" class="thumb">
        <button ng-click="news.news_image = null" ng-show="news.news_image">Remove</button>
        <span class="progress" ng-show="news.news_image.progress >= 0">
            <div style="width:@{{news.news_image.progress}}%" ng-bind="news.news_image.progress + '%'"></div>
        </span>
        <span ng-show="news.news_image.result">Upload Successful</span>
        <span class="err" ng-show="errorMsg">@{{errorMsg}}</span>
    </div> -->

    <!-- Multiple Radios (inline) -->
    <div class="form-group" ng-init="create()">
        <label class="col-md-4 control-label" for="radios">Status</label>
        <div class="col-md-4">
            <label class="radio-inline" for="radios-1">
                <input name="news_status" id="radios-1" ng-model="news.news_status" ng-value="1" type="radio">
                New
            </label>
            <label class="radio-inline" for="radios-0">
                <input name="news_status" id="radios-0" ng-model="news.news_status" ng-value="0" type="radio">
                Old
            </label>
        </div>
    </div>

    <!-- Textarea -->
    <div class="form-group">
        <label class="col-md-4 control-label" for="textarea">Nội dung chi tiết</label>
        <div class="col-md-6">
            <textarea id="summernote" class="form-control" name="news_detail" ng-model="news.news_detail" rows="8"></textarea>
        </div>
    </div>

    <!-- Button (Double) -->
    <div class="form-group">
        <label class="col-md-4 control-label" for="button1id"></label>
        <div class="col-md-8">
            <button id="button1id" type="submit" name="submit" class="btn btn-success">Đồng ý</button>
            <button id="button2id" type="reset" name="reset" value="Làm mới" class="btn btn-danger">Làm mới</button>
        </div>
    </div>
    </fieldset>
</form>
