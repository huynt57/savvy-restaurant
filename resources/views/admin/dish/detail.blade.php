<div id="modal-detail" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <img src="{{asset('img/bx_loader.gif')}}" style=" position: absolute;
         top: 0; bottom:0; left: 0; right:0;
         margin: auto;" id="loading"/>
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="modal-label">@{{detail.dish_name}}</h3>
    </div>
    <div class="modal-body">
        <img src="<?php echo url() ?>/@{{detail.dish_image}}"  style="
             height: 200px;
             float: left;
             margin-right: 20px;
             " id="image"/>
        <p id="des">@{{detail.dish_description}}</p>
        <h4 id="price">Price: $@{{detail.dish_price}}</h4>
    </div>
    <div class="modal-footer">
        <button class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Close</button>
    </div>
</div>