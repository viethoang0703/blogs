<form class="form-horizontal" ng-controller="CategoryController" ng-submit="update(category)" ng-init="findOne()">
    <fieldset>

    <!-- Form Name -->
    <legend>Sửa danh mục</legend>

    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Tên danh mục</label>
        <div class="col-md-6">
        <input id="textinput" name="cat_name" ng-model="category.cat_name" class="form-control input-md" type="text" required>
        </div>
    </div>

    <!-- Multiple Radios (inline) -->
    <div class="form-group">
        <label class="col-md-4 control-label" for="radios">Status</label>
        <div class="col-md-4">
            <label class="radio-inline" for="radios-0">
                <input name="cat_status" id="radios-0" ng-value="1" ng-model="category.cat_status" type="radio"f>
                New
            </label>
            <label class="radio-inline" for="radios-1">
                <input name="cat_status" id="radios-1" ng-value="0" ng-model="category.cat_status" type="radio">
                Old
            </label>
        </div>
    </div>

    <!-- Button (Double) -->
    <div class="form-group">
        <label class="col-md-4 control-label" for="button1id"></label>
        <div class="col-md-8">
            <button id="button1id" type="submit" name="submit" class="btn btn-success">Sửa danh mục</button>
            <button id="button2id" type="reset" name="reset" value="Làm mới" class="btn btn-danger">Làm mới</button>
        </div>
    </div>
    </fieldset>
</form>
