<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    $(document).ready(function () {
        $(document).on('click','.add_product_btn',function (event) {
            event.preventDefault();
            let name = $('#name').val();
            let price = $('#price').val();
            $.ajax({
                url:"{{ route('product.store') }}",
                method:'Post',
                data:{ name:name,price:price},
                success:function (res) {
                    if (res.status=='success')
                    {
                        $('#addProductForm')[0].reset();
                        $('#addProduct').modal('hide');
                        $('.data-table').load(location.href+' .data-table');
                        Command: toastr["success"]("Product added Successfully")
                    }
                },error:function (err) {
                    let error = err.responseJSON;
                    $('.errmsg').empty();
                    $.each(error.errors,function (index,value) {
                        $('.errmsg').append('<span>'+value+'</span>')
                    })
                }
            })
        })
        $(document).on('click','.edit_btn',function (event) {
            event.preventDefault();
            let id = $(this).data('id');
            let name = $(this).data('name');
            let price = $(this).data('price');
            $('#up_id').val(id);
            $('#up_name').val(name);
            $('#up_price').val(price);
        })
        $(document).on('click','.update_product_btn',function (event) {
            event.preventDefault();
            let id = $('#up_id').val();
            let name = $('#up_name').val();
            let price = $('#up_price').val();
            $.ajax({
                url:"{{ route('product.update') }}",
                method:'Post',
                data:{ id:id,name:name,price:price},
                success:function (res) {
                    if (res.status=='success')
                    {
                        $('#updateProductForm')[0].reset();
                        $('#editProduct').modal('hide');
                        $('.data-table').load(location.href+' .data-table');
                        Command: toastr["success"]("Product Updated Successfully")
                    }
                },error:function (err) {
                    let error = err.responseJSON;
                    $('.uperrmsg').empty();
                    $.each(error.errors,function (index,value) {
                        $('.uperrmsg').append('<span>'+value+'</span>')
                    })
                }
            })
        })
        $(document).on('click','.delete_btn',function (event) {
            event.preventDefault();
            let id = $(this).data('id');
            $('#delete_id').val(id);
        })

        $(document).on('click','.delete_item',function (event) {
            event.preventDefault();
            let id = $('#delete_id').val();
            $.ajax({
                url:'{{ route('product.delete') }}',
                method:'Post',
                data:{id:id},
                success:function (res) {
                    if (res.status=='warning')
                    {
                        $('#deleteModel').modal('hide');
                        $('.data-table').load(location.href + ' .data-table')
                        Command: toastr["warning"]("Product Updated Successfully")
                    }
                }
            })
        })
    })
</script>
