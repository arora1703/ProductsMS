<!-- Start Modal for add data -->
                <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Products</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action={{ '/create' }} method="POST">
                                @csrf
                                <div class="mb-3">
                                <label for="product_name" class="form-label">Product Name</label>
                                <input type="text" class="form-control" required name="product_name" id="product_name" placeholder="Enter the product name">
                            </div>
                            <div class="mb-3">
                                <label for="product_category" class="form-label">Product Category</label>
                                <input type="text" class="form-control" required name="category" id="product_category" placeholder="Enter the product category">
                            </div>
                            <div class="mb-3">
                                <label for="status" class="form-label">Product Status</label>
                                <select class="form-select" name="status" required aria-label="Default select example">
                                    <option selected value="">Select Status</option>
                                    <option value="1">Active</option>
                                    <option value="0">In-Active</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Save</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                            </form>
                        </div>


                    </div>
                    </div>
                </div>
                <!--End Modal--!>
            <!-- Start Modal for view data -->
      <div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Product Details</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <table class="table">
            <thead>
                <tr style="text-align: center;">
                  <th scope="col">Id</th>
                  <th scope="col">Product Name</th>
                  <th scope="col">Product Category</th>
                  <th scope="col">Status</th>
                </tr>
              </thead>
            </table>
            <div class="modal-footer">
              <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>

          </div>
        </div>
      </div>
      <!--End Modal--!>
