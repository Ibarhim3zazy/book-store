@foreach ($provider as $user)
<tr data-row-id="1">
    <td>
        <input class="checkbox_animated check-it" type="checkbox" value="" id="flexCheckDefault" data-id="1">
    </td>
    <td>
        <img src="{{ getFileUrl($profilePhotoUrl, $user->image) }}" alt="">
    </td>

    <td>{{ $user->name }}</td>

    <td>{{ $user->email }}</td>

    <td>6 Days ago</td>

    <td>
        <span style="background-color:#5c9; padding:10px; border-radius:10px;">
            @if (count($user->getRoleNames()) > 0)
            {{ $user->getRoleNames()[0] ?? '' }}
            @endif
        </span>
    </td>

    <td>
        <div class="d-flex justify-content-center">
            <a href="{{ route($path.'.edit', $user) }}"><i class="fa fa-edit m-1 text-success"></i></a>
            <a href="javascript:$('#delete-user-form-{{ $user->id }}').submit();"><i
                    class="fa fa-trash m-1 text-danger"></i></a>
            <form action="{{ route($path.'.destroy', $user) }}" id="delete-user-form-{{ $user->id }}" method="POST">
                @csrf
                @method('DELETE')
            </form>
            <a href="{{ route($path.'.show', $user) }}"><i class="fa fa-eye m-1 text-primary"></i></a>
        </div>
    </td>
</tr>
@endforeach