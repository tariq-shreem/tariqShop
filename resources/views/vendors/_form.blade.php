<form method="post" action="{{ route('admin.vendor.store') }}">
    @csrf
    <div class="row mb-4">
        <div class="col-sm-12">
            <label>Vendor Name : </label>
          <input type="name" name="name" class="form-control"
             value="{{old('name',$vendor->name ?? '') }}">
             @error('name')
                <div class="text-danger">{{ $message }}</div>
             @enderror
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-sm-12">
            <label>Vendor Email : </label>

            <input type="email" name="email" class="form-control"
            value="{{old('email',$vendor->email ?? '') }}">
            @error('email')
            <div class="text-danger">{{ $message }}</div>
         @enderror
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-sm-12">
            <label>Vendor Phone : </label>
            <input type="text" name="phone" class="form-control"
            value="{{old('phone',$vendor->phone ?? '') }}">
            @error('phone')
            <div class="text-danger">{{ $message }}</div>
         @enderror
        </div>
    </div>
    <div class="col-sm-12">
        <label>Vendor password : </label>
        <input type="text" name="password" class="form-control"
        value="{{old('password',$vendor->password ?? '') }}">
        @error('password')
        <div class="text-danger">{{ $message }}</div>
     @enderror
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
</form>
