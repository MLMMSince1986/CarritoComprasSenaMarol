<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Roles') }}
        </h2>
    </x-slot>
    <div>
        <a href="{{url('dashboard/Role/create')}}" class="btn btn-info btn-sm">NUEVO ROL</a>
    </div>
    <table class="table table-dark">
        <thead>
            <tr>
                <th><b><font color="yellow">ROL</font></b></th>
                <th>PERMISOS</th>
                <th><b><font color="lime">EDITAR</font></b></th>
                <th><b><font color="red">ELIMINAR</font></b></th>
            </tr>    
        </thead>
        <tbody>
            @foreach ($Roles as $Rol)
            <tr>
                <td>{{ $Rol->name }}</td>
                <td>
                    @forelse ($Rol->permissions as $permission)
                    <span>{{$permission->name}}</span>
                @empty
                <samp>
                    No tiene permisos asignados.
                </samp>

                @endforelse
                </td>
                <td>
                    <a href="{{url('dashboard/Role/'.$Rol->id.'/edit')}}"><b><font color="lime">Editar</font></b></a>
                </td>
                <td>
                    <form action="{{url('dashboard/Role/'.$Rol->id)}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit"><b><font color="red">Eliminar</font></b></button>
                    </form>
                </td>

            </tr>

            @endforeach
        </tbody>
    </table>    
</x-app-layout>