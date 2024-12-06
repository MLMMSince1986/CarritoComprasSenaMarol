<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <b><font color="red">{{ __('ASIGNAR ROLES') }}</font></b>
        </h2>
    </x-slot>
    <form action="{{url('dashboard/Role/'.$Role->id)}}" method="post">
        @csrf
        @method('PUT')
        <div>
            <lavel for="name"><b><font color="blue">NOMBRE DEL ROL</font></b>:</label>
            <div>
                <input type="text" name="name" id="name"
                value="{{$Role->name}}">
            </div>
        </div>
        <div>
            <label for="permissions"><b><font color="lime">PERMISOS DEL ROL</font></b></label>
        </div>
        <div>
            <table>
                <tbody>
                    @foreach ($permission as $id=>$permission)
                    <tr>
                        <td>
                            <input type="checkbox" name="permission[]" value="{{ $id }}"
                            {{$Role->permissions->contains($id) ? 'checked' :''}}>
                            
                            {{$permission}}
                        </td>
                    </tr>  
                    
                    @endforeach
                </tbody>
            </table>
            <div>
                <button type="submit" class="btn btn-info">Guardar</button>
                <a href="{{url('dashboard/Role')}}" class="btn btn-dark">Cancelar</a>
            </div>
        </div>
    </form>
</x-app-layout>
