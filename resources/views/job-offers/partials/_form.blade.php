<div class="row">
    <div class="col-md-12">
        <div class="form-group row">
            <label for="title" class="col-md-3 col-form-label">Title</label>
            <div class="col-md-9">
                <input type="text" name="title" id="title" value="{{ old('title') }}"
                       class="form-control @error('title') is-invalid @enderror">
                @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="description" class="col-md-3 col-form-label">Description</label>
            <div class="col-md-9">
                <textarea name="description" id="description" rows="3"
                          class="form-control @error('description') is-invalid @enderror">{{ old('description') }}</textarea>
                @error('description')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="email" class="col-md-3 col-form-label">Email</label>
            <div class="col-md-9">
                <input type="text" name="email" id="email" value="{{ old('email') }}"
                       class="form-control @error('email') is-invalid @enderror">
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <hr>

        <div class="form-group row mb-0">
            <div class="col-md-9 offset-md-3">
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="{{route('job-offers.index')}}" class="btn btn-outline-secondary">Cancel</a>
            </div>
        </div>
    </div>
</div>
