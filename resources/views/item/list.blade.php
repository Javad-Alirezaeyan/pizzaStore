

@extends("layouts.master")
@section('title', "Items List")
@section('content')
    <div class="card">
        <div class="card-block">


            <table class="table table-striped" >
                <thead>
                <tr >
                    <th># </th>
                    <th>Title </th>
                    <th>Price</th>
                    <th>Item Type</th>
                    <th>Operation</th>
                </tr>
                </thead>
                <tbody>
                @php
                  $i = 1;
                @endphp
                 @foreach($itemList as $item)
                     <tr>
                         <td>{{ $i++ }}</td>
                         <td >
                             <img src={{ route("itemImage", $item->i_mainImage) }} alt="user" width="40"
                                  className="img-container"/>
                            {{ $item->i_title }}
                         </td>
                         <td>
                             {{ $item->i_price }}</td>
                         <td>
                             {{ $item->it_title }}
                         </td>
                         <td>

                             @if ($item->i_state == LOCKED_ITEM)
                                 <button type="button" class="btn waves-effect waves-light btn-warning">Lock</button>
                             @endif
                                 <button type="button" class="btn waves-effect waves-light btn-primary">Unlock</button>
                             @endif
                             <button type="button" class="btn waves-effect waves-light btn-danger">Delete</button>
                             <a href="{{ route('editItem', $item->i_id) }}">
                                 <button type="button" class="btn waves-effect waves-light btn-info">Edit</button>
                             </a>
                         </td>
                     </tr>
                 @endforeach
                </tbody>
                <tfoot>
                {{ $itemList->links() }}

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