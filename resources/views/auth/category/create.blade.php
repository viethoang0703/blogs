<form class="form-horizontal" ng-controller="CategoryController" ng-submit="store(category)">
    <fieldset>

    <!-- Form Name -->
    <legend>Danh mục mới</legend>

    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Tên danh mục</label>
        <div class="col-md-6">
        <input id="textinput" name="cat_name" ng-model="category.cat_name" placeholder="Nhập tên danh mục" class="form-control input-md" type="text" required>
        </div>
    </div>

    <!-- Multiple Radios (inline) -->
    <div class="form-group" ng-init="create()">
        <label class="col-md-4 control-label" for="radios">Status</label>
        <div class="col-md-4">
            <label class="radio-inline" for="radios-1">
                <input name="cat_status" id="radios-1" ng-model="category.cat_status" ng-value="1" type="radio">
                New
            </label>
            <label class="radio-inline" for="radios-0">
                <input name="cat_status" id="radios-0" ng-model="category.cat_status" ng-value="0" type="radio">
                Old
            </label>
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