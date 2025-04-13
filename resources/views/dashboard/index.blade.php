<x-layout>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-auto ">
        <div class="col">
          <a href="{{ route('dashboard.create') }}">
            <button type="button" class="btn btn-primary fw-medium ">Create new <span><i
                  class="ms-2 fa-solid fa-plus"></i>
              </span> </button>
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
                <td>{{ $data->role->label() }}</td>
                <td>{{ $data->created_at->diffForHumans() }}</td>
                <td>{{ $data->updated_at->diffForHumans() }}</td>
                <td class="d-inline-flex gap-2">
                  <a href="{{ route('dashboard.edit', $data->id) }}" class="text-decoration-none">
                    <button type="button" class="btn btn-warning" style="font-size: small">
                      <i class="fa-solid fa-pen-to-square"></i></button>
                  </a>
                  <form action="{{ route('dashboard.delete', $data->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" style="font-size: small"><i
                        class="fa-solid fa-trash"></i></button>
                  </form>
                </td>
            @endforeach
            </tr>
          </tbody>
        </table>
      </div>
      <div class="row">
        <div class="col">
          @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show">
              {{ session('success') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif
        </div>
      </div>
    </div>
  </div>
</x-layout>
