@extends('admin.layouts.main')

<!-- Debe de llamarse igual que el yield-->
@section('content')
    <h1>Usuarios</h1>
    <div class="p-4"></div>
    

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Imagen</th>
      <th scope="col">Nombre</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach($usuarios as $item)
        <tr>
            <td>{{$item -> id}}</td>
            <td>{{$item -> name}}</td>
            <td>{{$item -> email}}</td>
            <td>**********</td>
            <td>{{$item -> nickname}}</td>
            <td>{{$item -> img}}</td>
            <td>
                <button>

                </button>
            </td>
            
        </tr>
    @endforeach
  </tbody>
</table>
@endsection
@section('scripts')
    <script>
        //alert("Hola")
    </script>
@endsection