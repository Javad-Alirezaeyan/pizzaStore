

@extends("layouts.master")
@section('title', "orders")
@section('content')
    <div class="card">
        <div class="card-block">


            <table class="table table-striped" >
                <thead>
                <tr >
                    <th># </th>
                    <th>Customer Name </th>
                    <th>Price</th>
                    <th>Date</th>
                    <th>State</th>
                    <th>Operation</th>
                </tr>
                </thead>
                <tbody>
                @php
                  $i = 1;
                   $orderState = \Illuminate\Support\Facades\Config::get("constants.orderState");
                @endphp
                 @foreach($itemList as $item)
                     <tr>
                         <td>{{ $i++ }}</td>
                         <td >
                            {{ $item->o_customerName }}
                         </td>
                         <td>
                             {{ $item->o_finalPrice }}</td>
                         <td>
                             {{ $item->created_at }}
                         </td>
                         <td>
                             <span class="label label-{{ $orderState[$item->o_state]['cssClass'] }}">{{ $orderState[$item->o_state]['title'] }}</span>
                         </td>
                         <td>
                             <a href="{{ route('order', $item->o_id ) }}">
                                 <button type="button" class="btn waves-effect waves-light btn-info">View</button>
                             </a>
                         </td>
                     </tr>
                 @endforeach
                </tbody>

                <tfoot>
                {{  $itemList->links() }}

                </tfoot>
            </table>

        </div>
    </div>

@endsection

<script>
    function searchItem(){
        window.location = ""
    }

</script>