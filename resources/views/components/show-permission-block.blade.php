<div class="attribute-blocks">
    <h5 class="f-w-600 mb-3">{{ $category }} Related permition </h5>
    <div class="row">
        <div class="col-md-12 row">
            @foreach ($permissions as $permission)
            @if (Str::contains($permission->name , $category))
            <div class="checkbox checkbox-primary col-md-3">
                <input id="{{ $permission->slug }}" type="checkbox" data-original-title=""
                    name="permissionArray[{{ $permission->id }}]" @checked(!is_null($role) &&
                    $role->hasPermissionTo($permission->name)
                ) >
                <label for="{{ $permission->slug }}">{{ $permission->name }}</label>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</div>