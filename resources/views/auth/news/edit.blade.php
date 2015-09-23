<form class="form-horizontal" ng-controller="NewsController" ng-submit="update(news)" ng-init="findOne()">
    <fieldset>

    <!-- Form Name -->
    <legend>Sửa bài viết</legend>

    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Tiêu đề bài viết</label>
        <div class="col-md-6">
            <input id="textinput" name="news_tittle" ng-model="news.news_tittle" class="form-control input-md" type="text">
        </div>
    </div>

    <!-- Select Basic -->
    <div class="form-group">
        <label class="col-md-4 control-label" for="selectbasic">Chuyên mục</label>
        <div class="col-md-6">
            <select id="selectbasic" name ="news_category" ng-model="news.news_category" class="form-control" ng-init="edit()" ng-options="cat.id as cat.cat_name for cat in category">
                <option value="">@{{news.category.cat_name}}</option>
            </select>
        </div>
    </div>

    <!-- File Button -->
<!--     <div class="form-group">
        <label class="col-md-4 control-label" for="filebutton">Ảnh mô tả</label>
        <div class="col-md-4">
            <input id="filebutton" name="news_image" class="input-file" type="file">
               <img width="150px" src="" value="" alt="" tittle=""/>
            <input type="hidden" name="news_image_temp" value="">
        </div>
    </div> -->

    <!-- Multiple Radios (inline) -->
    <div class="form-group">
        <label class="col-md-4 control-label" for="radios">Status</label>
        <div class="col-md-4">
            <label class="radio-inline" for="radios-1">
                <input name="news_status" id="radios-1" ng-value="1" ng-model="news.news_status" type="radio">
                New
            </label>
            <label class="radio-inline" for="radios-0">
                <input name="news_status" id="radios-0" ng-value="0" ng-model="news.news_status" type="radio">
                Old
            </label>
        </div>
    </div>

    <!-- Textarea -->
    <div class="form-group">
        <label class="col-md-4 control-label" for="textarea">Nội dung chi tiết</label>
        <div class="col-md-6">
            <textarea class="form-control" id="summernote" name="news_detail" ng-model="news.news_detail" rows="8"></textarea>
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
