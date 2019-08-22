

<div class="container">
	<a href="{{ route('generate-pdf',['download'=>'pdf']) }}">Download PDF</a>
	<table class="table table-bordered">
		<thead>
			<th>Name</th>
			<th>Email</th>
		</thead>
		<tbody>
@foreach ($users as $key => $value)
    <tr>
        <td>{{ $value->email }}</td>
        <td>{{ $value->nombre }}</td>
    </tr>
    @endforeach
    </tbody>
    </table>
    </div>
