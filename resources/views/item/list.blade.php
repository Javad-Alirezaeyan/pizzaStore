

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
                            {{ $item->i_title }}
                         </td>
                         <td>
                             {{ $item->i_price }}</td>
                         <td>
                             {{ $item->it_title }}
                         </td>
                         <td>
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