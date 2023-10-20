<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Date</th>
      <th scope="col">Create at</th>
      <th scope="col">updated at</th>
      <th scope="col">User</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($sales as $list)
      <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$list->date}}</td>
        <td>{{$list->created_at}}</td>
        <td>{{$list->updated_at}}</td>
        <td>{{$list->user->name}}</td>
        <td>
            <a href="/sales/{{$list->id}}" class="btn btn-primary">detil</a>
            <a href="#" class="btn btn-warning">update</a>
            <a href="#" class="btn btn-danger">delete</a>
            {{-- <a href="/inv/edit/{{$list->id}}" class="btn btn-warning">update</a>
            <a href="/inv/delete/{{$list->id}}" class="btn btn-danger" onclick="return confirm('Are you sure?')">delete</a> --}}
        </td>
      </tr>
    @endforeach
    
  </tbody>
</table>