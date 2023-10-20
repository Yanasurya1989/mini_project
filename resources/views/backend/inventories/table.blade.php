<table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Code</th>
                      <th scope="col">Name</th>
                      <th scope="col">Price</th>
                      <th scope="col">Stock</th>
                      <th scope="col">Create at</th>
                      <th scope="col">updated at</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($inv as $list)
                      <tr>
                        <th scope="row">{{ $loop->iteration}}</th>
                        <td>{{$list->code}}</td>
                        <td>{{$list->name}}</td>
                        <td>{{$list->price}}</td>
                        <td>{{$list->stock}}</td>
                        <td>{{$list->created_at}}</td>
                        <td>{{$list->updated_at}}</td>
                        <td>
                            <a href="/inventory/{{$list->id}}" class="btn btn-primary">detil</a>
                            <a href="/inv/edit/{{$list->id}}" class="btn btn-warning">update</a>
                            <a href="/inv/delete/{{$list->id}}" class="btn btn-danger" onclick="return confirm('Are you sure?')">delete</a>
                        </td>
                      </tr>
                    @endforeach
                    
                  </tbody>
                </table>