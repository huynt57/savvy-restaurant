<div id="modal-edit" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="modal-label">Edit dish</h3>
    </div>
    <form action="<?php echo url('admin/dish/edit') ?>" method="POST" class="form-horizontal" enctype="multipart/form-data" id="form-add" role="form">
        <div class="modal-body">

            <div class="control-group">
                <label for="name" class="control-label">Name</label>
                <div class="controls">
                    <input type="text" name="name" id="name" class="input-xlarge"   value="@{{detail_edit.dish_name}}">
                    <span class="help-block">Name of dish</span>
                    <div class="help-block with-errors"></div>
                </div>
            </div>

            <div class="control-group">
                <label for="price" class="control-label">Price</label>
                <div class="controls">
                    <input type="number" name="price" id="price" class="input-xlarge"    value="@{{detail_edit.dish_price}}">
                    <span class="help-block">Price of dish</span>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
<input type="hidden" name="dish_id" id="dish_id" class="input-xlarge"    value="@{{detail_edit.dish_id}}">
            <div class="control-group">
                <label for="image" class="control-label">Dish image</label>
                <div class="controls">
                    <div class="form-group">
                        <input type="file" name="image" id="file" class="input-block-level"   value="@{{detail_edit.dish_image}}">
                        <span class="help-block">Only image (Max Size: 5MB)</span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>


            <div class="control-group">
                <label for="description" class="control-label">Description</label>
                <div class="controls">
                    <textarea name="description" id="description" class="input-block-level" value="@{{detail_edit.dish_description}}" >Lorem ipsum mollit minim fugiat tempor dolore sit officia ut dolore. </textarea>
                    <div class="help-block with-errors"></div>
                </div>

            </div>

        </div>
        <div class="modal-footer">
            <div class="controls">
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Submit</button>
                    <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Close</button>
                </div>
            </div>
        </div>
    </form>

</div>

<script>
    $(document).ready(function() {
        $('#form-add').validator();
    });
</script>