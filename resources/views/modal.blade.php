<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="addProduct" tabindex="-1" aria-labelledby="addProduct" aria-hidden="true">
    <div class="modal-dialog">
        <form action="" method="post" id="addProductForm">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add product</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="errmsg"></div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" aria-describedby="name" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" class="form-control" id="price" name="price" placeholder="price">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary add_product_btn">Add Product</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="editProduct" tabindex="-1" aria-labelledby="editProduct" aria-hidden="true">
    <div class="modal-dialog">
        <form action="" method="post" id="updateProductForm">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="">Edit product</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="uperrmsg"></div>
                    <input type="hidden" id="up_id">
                    <div class="form-group">
                        <label for="up_name">Name</label>
                        <input type="text" class="form-control" id="up_name" aria-describedby="name" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label for="up_price">Price</label>
                        <input type="number" class="form-control" id="up_price" placeholder="price">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary update_product_btn">update changes</button>
                </div>
            </div>
        </form>
    </div>
</div>


<div class="modal fade" id="deleteModel" tabindex="-1" aria-labelledby="exampleModalCenterTitle" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="">Confirmation</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="post">
                <div class="modal-body">
                    <input type="hidden" id="delete_id">
                    Are You want to delete this Item?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="buttom" class="btn btn-primary delete_item">update changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal -->
