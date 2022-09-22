@extends('admin/layout/master-dashboard')
@section('title','Manage Category')
@section('main')
<form action="#!">
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-shop me-1"></i>
            Add Product
            <span style="float:right;">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="fas fa-plus me-1"></i> Add Category
                </button>
                &emsp;
                <button type="submit" name="submit" class="btn btn-primary">save</button>
            </span>
        </div>
        <div class="card-body">
            <table class="table table-sm table-bordered">
                <thead>
                    <tr>
                        <th>S.N</th>
                        <th>Product Name</th>
                        <th>Qty</th>
                        <th>Price</th>
                        <th>Add More</th>
                    </tr>
                </thead>
                <tbody id="add_tr">
                    <tr>
                        <td>1</td>
                        <td> <input type="text" name="ProductName[]" placeholder="Enter Product Name"> </td>
                        <td> <input type="number" name="ProductQuantity[]" placeholder="Enter Product Quantity"> </td>
                        <td> <input type="number" name="ProductPrice[]" placeholder="Enter Product Price"> </td>
                        <td><button type="button" id="" onclick="AddMore()" class="btn btn-primary">
                                <i class="fas fa-plus me-1"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <input type="hidden" id="count" value="1">
        </div>
    </div>
</form>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{$_SERVER['PHP_SELF']}}">
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn btn-success">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    function AddMore() {
        let count = $('#count').val();
        count++;
        $('#add_tr').append('<tr class="mybox" id="boxcount_' + count + '"><td>1</td><td> <input type="text" name="ProductName[]" placeholder="Enter Product Name"> </td><td> <input type="number" name="ProductQuantity[]" placeholder="Enter Product Quantity"> </td><td> <input type="number" name="ProductPrice[]" placeholder="Enter Product Price"> </td><td><button type="button" name="submit" id="submit" onclick=AddMore_remove("' + count + '") class="btn btn-danger"><i class="fas fa-xmark me-1"></i></button></td</tr>');
    }

    function AddMore_remove(del_tr) {
        $("#boxcount_" + del_tr).remove();
        let count = $('#count').val();
        count--;
    }
</script>
@endsection