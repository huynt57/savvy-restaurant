    <div id="modal-detail" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel">Detail Order</h3>
        </div>
        <div class="modal-body">
            <table class="table table-hover table-nomargin table-bordered">
                            <thead>
                                <tr>                                 
                                    <th>Dish ID</th>
                                    <th>Dish Name</th>
                                    <th>Dish Image</th>
                                    <th>Number</th>   
                                    <th>Price ($)</th>  
                                    <th>Sub total</th>        
                                </tr>
                            </thead>
                            <tbody>  
                               
                                <tr ng-repeat="item in detail">
                                    <td>@{{item.dish_id}}</td>
                                    <td>@{{item.dish_name}}</td>
                                    <td><img src="<?php echo url(); ?>/@{{item.dish_image}}" style="height: 100px;"/></td>
                                    <td>@{{item.dish_number}}</td> 
                                    <td>@{{item.dish_price}}</td> 
                                     <td>@{{item.dish_price*item.dish_number}}</td> 
                                </tr>
                                <tr>
                                    <td colspan="6"><h4>Total: @{{sum}}$</h4></td>
                                <tr>
                            </tbody>
                        </table>
        </div>
        <div class="modal-footer">
            <button class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Close</button>
        </div>
    </div>