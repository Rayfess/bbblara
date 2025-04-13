<x-layout>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <form action="{{ route('dashboard.store') }}" method="post">
        @csrf
        <div class="col">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" name="name" value="{{ old('name') }}" id="floatingInput"
              placeholder="Full Name">
            <label for="floatingInput">Full Name</label>
          </div>
          <div class="form-floating mb-3">
            <input type="email" class="form-control" name="email" value="{{ old('email') }}" id="floatingInput"
              placeholder="Email">
            <label for="floatingInputDisabled">Email</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control" name="password_confirmation" id="floatingPassword"
              placeholder="Password Confirmation">
            <label for="floatingPassword">Password Confirmation</label>
          </div>
          <div class="form-floating mb-3">
            <select class="form-select" name="role" id="floatingSelectGrid">
              @foreach ($roles as $value => $label)
                <option value="{{ $value }}" @selected((string) old('role') === (string) $value)>
                  {{ $label }}
                </option>
              @endforeach
            </select>
            <label for="floatingSelectGrid">Roles</label>
          </div>
        </div>
        <div class="col-auto mt-3">
          <a href="{{ route('dashboard.index') }} " class="text-decoration-none">
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
