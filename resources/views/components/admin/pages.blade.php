<x-admin.layout />
<x-admin.index :title="$title"/>

<div style="margin: 0px 50px 0px 50px; margin-top: 20px; " >
    @if($pages)
    <table class="table table-hover table-striped">
        <thead>
        <tr>
            <th width="50">#</th>
            <th width="100">Name</th>
            <th width="100">Alias</th>
            <th>Text</th>
            <th width="150">Created Date</th>
            <th>Edit</th>
            <th width="100">Delete</th>
        </tr>
        </thead>
        <tbody>
            @foreach($pages as $key=>$page)
                <tr>
                    <td>{{ $page->id }}</td>
                    <td>{{$page->name}}</td>
                    <td>{{ $page->alias }}</td>
                    <td>{{ $page->text }}</td>
                    <td>{{ $page->created_at }}</td>
                    <td><a href="{{route('pagesEdit', ['page'=>$page->id])}}" class="btn btn-primary">Edit</a></td>
                    <td>
                        <form action="{{ route('pagesEdit', ['page'=>$page->id]) }}" class="form-horizontal" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @endif

        <a href="{{route('pagesAdd')}}" ><button type="button" class="btn btn-light">Add new page</button></a>
</div>

