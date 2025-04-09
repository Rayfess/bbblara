<x-layout>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <form action="{{ route('dashboard.update', $user->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="col-auto">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" value="{{ old('name', $user->name) }}" id="floatingInputDisabled"
              placeholder="Username" disabled>
            <label for="floatingInputDisabled">Name</label>
          </div>
          <div class="form-floating mb-3">
            <input type="email" class="form-control" value="{{ old('email', $user->email) }}"
              id="floatingInputDisabled" placeholder="Email" disabled>
            <label for="floatingInputDisabled">Email</label>
          </div>
          <div class="form-floating">
            <select class="form-select" name="role" id="floatingSelectGrid">
              @foreach ($roles as $value => $label)
                <option value="{{ $value }}" @selected((string) old('role', $user->role->value ?? '') === (string) $value)>
                  {{ $label }}
                </option>
              @endforeach
            </select>
            <label for="floatingSelectGrid">Roles</label>
          </div>
        </div>
        <div class="col-auto mt-3">
          <a href="{{ route('dashboard.index') }}">
            <button class="btn btn-danger" type="button">Cancel</button>
          </a>
          <button class="btn btn-primary" type="submit">Submit</button>
        </div>
      </form>
    </div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

  </div>
</x-layout>
