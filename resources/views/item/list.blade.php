

@extends("layouts.master")
@section('title', "Items List")

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
                            {{ $item->title }}
                         </td>
                         <td>
                             {{ $item->price }}</td>
                         <td>
                             {{ $item->itemTitle }}
                         </td>
                         <td>
                             <button type="button" class="btn waves-effect waves-light btn-danger">Delete</button>
                             <a href="{{ url('editItem').'/'.$item->id }}">
                                 <button type="button" class="btn waves-effect waves-light btn-danger">Edit</button>
                             </a>
                         </td>
                     </tr>
                 @endforeach
                </tbody>
                <tfoot>

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