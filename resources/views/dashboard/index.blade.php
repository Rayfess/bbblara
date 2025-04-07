<x-layout>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-auto ">
        <div class="col">
          <a href="{{ route('dashboard.create') }}">
            <button type="button" class="btn btn-primary ">Create</button>
          </a>
        </div>
        <table class="table table-striped table-hover ">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Role</th>
              <th>Created_at</th>
              <th>Updated_at</th>
              <th class="text-center">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($users as $no => $data)
              <tr>
                <td>{{ $no + 1 }}</td>
                <td>{{ $data->name }}</td>
                <td>{{ $data->role }}</td>
                <td>{{ $data->created_at->diffForHumans() }}</td>
                <td>{{ $data->updated_at->diffForHumans() }}</td>
                <td class="d-flex gap-2">
                  <a href="{{ route('dashboard.edit', $data->id) }}">
                    <button type="button" class="btn btn-warning ">Update</button>
                  </a>
                  <form action="{{ route('dashboard.delete', $data->id) }}" method="post">
                    @csrf
                    @method('DESTROY')
                    <button type="button" class="btn btn-danger ">Delete</button>
                  </form>
                </td>
            @endforeach
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</x-layout>
