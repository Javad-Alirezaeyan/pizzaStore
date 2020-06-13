

@extends("layouts.master")
@section('title', "order List")

@section('content')
    <div class="card">
        <div class="card-block">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group ">
                        <input required type="text"  name="search" id="search" placeholder="search">
                        <button type="button" class="btn waves-effect waves-light  btn-primary" onClick="searchItem()">search</button>
                    </div>
                </div>
            </div>

            <table class="table table-striped" >
                <thead>
                <tr >
                    <th># </th>
                    <th>Customer Name </th>
                    <th>Price</th>
                    <th>Date</th>
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
                            {{ $item->o_customerName }}
                         </td>
                         <td>
                             {{ $item->o_finalPrice }}</td>
                         <td>
                             {{ $item->created_at }}
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