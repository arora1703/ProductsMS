@include('layouts.app')
<div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Product Name</th>
            <th scope="col">Product Category</th>
            <th scope="col">Status</th>

          </tr>
        </thead>
        <tbody>
            @if(!empty($product))

            <tr>
                <th scope="row">{{$product['id']}}</th>
                <td>{{$product['product_name']}}</td>
                <td>{{$product['category']}}</td>
                <td>@if($product['status']==0){{ 'Active' }}@else{{ 'In-Active' }}@endif</td>

            </tr>

            @else
            <tr>No Data Found</tr>
            @endif
        </tbody>
      </table>

</div>


